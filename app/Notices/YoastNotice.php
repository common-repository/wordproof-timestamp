<?php

declare(strict_types=1);

namespace WordProofTimestamp\App\Notices;

use WordProofTimestamp\App\Helpers\PluginHelper;

class YoastNotice extends Notice
{
    /**
     * YoastNotice constructor.
     */
    public function __construct()
    {
        $this->key = 'wordproof_yoast_notice';

        add_action('admin_notices', [ $this, 'init' ]);
    }

    /**
     * Displays notice if requirements are met.
     */
    public function init(): void
    {
        if ($this->show()) {
            $this->configureNotice();

            echo $this->getNotice();

            PluginHelper::deactivate();
        }
    }

    /**
     * Configures the notice variables.
     */
    public function configureNotice(): void
    {
        $this->isDismissible     = true;
        $this->notice['type']    = 'error';
        $this->notice['message'] = 'Please disable the Yoast WordProof integration before install this plugin. Go to the Yoast settings and turn off the WordProof integration.';
        $this->button['text']    = 'Yoast SEO settings';
        $this->button['link']    = admin_url('admin.php?page=wpseo_dashboard#top#integrations');
    }

    /**
     * Determines if the notice should be displayed.
     *
     * @return bool
     */
    public function show()
    {
        if ($this->isHidden()) {
            return false;
        }

        if (isset($_REQUEST['wordproof_nonce'])) {
            if (wp_verify_nonce(sanitize_key($_REQUEST['wordproof_nonce']), 'wordproof_yoast_notice')) {
                return true;
            }
        }

        return false;
    }
}
