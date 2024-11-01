const {__} = wp.i18n;
const {useCallback, useEffect, useState} = wp.element;
const {withSelect} = wp.data;
const {compose} = wp.compose;
const {xor} = lodash;
import {CheckboxControl, Spinner} from '@wordpress/components';

import AuthenticationModals
    from "../../../../vendor/wordproof/wordpress-sdk/resources/js/components/AuthenticationModals";
import {dispatchOpenSettingsEvent, dispatchOpenAuthenticationEvent} from "../../../../vendor/wordproof/wordpress-sdk/resources/js/helpers/event";
import initializeAuthentication
    from "../../../../vendor/wordproof/wordpress-sdk/resources/js/initializers/authentication";
import {postTimestampRequest} from "../../../../vendor/wordproof/wordpress-sdk/resources/js/helpers/endpoints";
import {getData} from "../../../../vendor/wordproof/wordpress-sdk/resources/js/helpers/data";
import {wait} from "../../../../vendor/wordproof/wordpress-sdk/resources/js/helpers/wait";

import {
    __experimentalHeading as Heading,
    Button,
    Notice,
} from '@wordpress/components';
import PropTypes from 'prop-types';

const Bulk = (props) => {

    const {isAuthenticated, balance} = props;
    const postTypes = getData('post_types');

    const [selectedPostTypes, setSelectedPostTypes] = useState([]);
    const [loading, setLoading] = useState(false);
    const [totalCount, setTotalCount] = useState(0);
    const [progressCount, setProgressCount] = useState(0);
    const [posts, setPosts] = useState([]);

    useEffect(() => {
        initializeAuthentication();
    }, []);

    const openAuthentication = useCallback((event) => {
        event.preventDefault();
        dispatchOpenAuthenticationEvent();
    });

    const openSettings = useCallback((event) => {
        event.preventDefault();
        dispatchOpenSettingsEvent();
    });

    const startTimestamping = useCallback(async (event) => {
        event.preventDefault();

        setLoading(true);

        let count = 1;
        for (const id of posts) {
            setProgressCount(count++);

            postTimestampRequest(id);

            await wait(1000);
        }

        setLoading(false);
    });

    const getToggles = useCallback(() => {

        return Object.entries(postTypes).map(([postType, data]) => {
            return <CheckboxControl
                label={postType + ' (' + data.count + ')'}
                onChange={() => {
                    toggle(postType)
                }
                }
            />
        })
    });

    const toggle = useCallback((postType) => {
        const selected = xor(selectedPostTypes, [postType]);
        setSelectedPostTypes(selected);

        let postIds = [];
        selected.forEach((postType) => {
            const data = postTypes[postType];
            postIds = postIds.concat(data.postIds);
        });

        setTotalCount(postIds.length);
        setPosts(postIds);
    });

    const isDisabled = useCallback(() => {
        if (loading) {
            return true;
        }

        return selectedHigherThanBalance()
    });

    const selectedHigherThanBalance = useCallback(() => {
        return totalCount > balance;
    });

    return (
        <div className={'mt-6'}>
            <Heading>Bulk timestamper</Heading>

            {!isAuthenticated && <>

                <p>We just need to do one more thing. Using the button below, register a new account or log-in with
                    your existing account. After authentication you are ready to timestamp your posts and pages.</p>


                <Button variant={'primary'} onClick={openAuthentication}>Authenticate with WordProof</Button>

            </>}

            {isAuthenticated && <>

                <p>Start timestamping all of your posts. You can select what post types you want to start with.</p>

                {getToggles()}

                <Button variant={'primary'} onClick={startTimestamping} disabled={isDisabled()}>Start
                    timestamping</Button>

                {selectedHigherThanBalance() &&
                <Notice isDismissible={false} status={'warning'} className={'mt-4 mx-0'}>You want to
                    timestamp {totalCount} items, but you have only {balance} timestamps left.
                    <span className={'ml-4'}><Button variant={'primary'} onClick={openSettings}>Upgrade your subscription</Button></span></Notice>
                }


                {loading &&
                <span><Spinner/> {progressCount} / {totalCount}</span>
                }

            </>}

            <AuthenticationModals/>

        </div>
    );
};

export default compose([
    withSelect((select) => {
            return {
                isAuthenticated: select('wordproof').getIsAuthenticated(),
                balance: select('wordproof').getBalance(),
            };
        }
    ),
])(Bulk);
