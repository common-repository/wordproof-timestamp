<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4d98eb869196d7b1fd855f817d915ac0
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WordProof\\SDK\\' => 14,
            'WordProofTimestamp\\App\\' => 23,
        ),
        'T' => 
        array (
            'TypistTech\\Imposter\\Plugin\\' => 27,
            'TypistTech\\Imposter\\' => 20,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'PhpOption\\' => 10,
        ),
        'G' => 
        array (
            'GrahamCampbell\\ResultType\\' => 26,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WordProof\\SDK\\' => 
        array (
            0 => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app',
        ),
        'WordProofTimestamp\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'TypistTech\\Imposter\\Plugin\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter-plugin/src',
        ),
        'TypistTech\\Imposter\\' => 
        array (
            0 => __DIR__ . '/..' . '/typisttech/imposter/src',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'PhpOption\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption',
        ),
        'GrahamCampbell\\ResultType\\' => 
        array (
            0 => __DIR__ . '/..' . '/graham-campbell/result-type/src',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Composer\\Installers\\AglInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AglInstaller.php',
        'Composer\\Installers\\AimeosInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AimeosInstaller.php',
        'Composer\\Installers\\AnnotateCmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AnnotateCmsInstaller.php',
        'Composer\\Installers\\AsgardInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AsgardInstaller.php',
        'Composer\\Installers\\AttogramInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/AttogramInstaller.php',
        'Composer\\Installers\\BaseInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BaseInstaller.php',
        'Composer\\Installers\\BitrixInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BitrixInstaller.php',
        'Composer\\Installers\\BonefishInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/BonefishInstaller.php',
        'Composer\\Installers\\CakePHPInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CakePHPInstaller.php',
        'Composer\\Installers\\ChefInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ChefInstaller.php',
        'Composer\\Installers\\CiviCrmInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CiviCrmInstaller.php',
        'Composer\\Installers\\ClanCatsFrameworkInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ClanCatsFrameworkInstaller.php',
        'Composer\\Installers\\CockpitInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CockpitInstaller.php',
        'Composer\\Installers\\CodeIgniterInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CodeIgniterInstaller.php',
        'Composer\\Installers\\Concrete5Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Concrete5Installer.php',
        'Composer\\Installers\\CraftInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CraftInstaller.php',
        'Composer\\Installers\\CroogoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/CroogoInstaller.php',
        'Composer\\Installers\\DecibelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DecibelInstaller.php',
        'Composer\\Installers\\DframeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DframeInstaller.php',
        'Composer\\Installers\\DokuWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DokuWikiInstaller.php',
        'Composer\\Installers\\DolibarrInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DolibarrInstaller.php',
        'Composer\\Installers\\DrupalInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/DrupalInstaller.php',
        'Composer\\Installers\\ElggInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ElggInstaller.php',
        'Composer\\Installers\\EliasisInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/EliasisInstaller.php',
        'Composer\\Installers\\ExpressionEngineInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ExpressionEngineInstaller.php',
        'Composer\\Installers\\EzPlatformInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/EzPlatformInstaller.php',
        'Composer\\Installers\\FuelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/FuelInstaller.php',
        'Composer\\Installers\\FuelphpInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/FuelphpInstaller.php',
        'Composer\\Installers\\GravInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/GravInstaller.php',
        'Composer\\Installers\\HuradInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/HuradInstaller.php',
        'Composer\\Installers\\ImageCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ImageCMSInstaller.php',
        'Composer\\Installers\\Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Installer.php',
        'Composer\\Installers\\ItopInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ItopInstaller.php',
        'Composer\\Installers\\JoomlaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/JoomlaInstaller.php',
        'Composer\\Installers\\KanboardInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KanboardInstaller.php',
        'Composer\\Installers\\KirbyInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KirbyInstaller.php',
        'Composer\\Installers\\KnownInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KnownInstaller.php',
        'Composer\\Installers\\KodiCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KodiCMSInstaller.php',
        'Composer\\Installers\\KohanaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/KohanaInstaller.php',
        'Composer\\Installers\\LanManagementSystemInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LanManagementSystemInstaller.php',
        'Composer\\Installers\\LaravelInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LaravelInstaller.php',
        'Composer\\Installers\\LavaLiteInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LavaLiteInstaller.php',
        'Composer\\Installers\\LithiumInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/LithiumInstaller.php',
        'Composer\\Installers\\MODULEWorkInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MODULEWorkInstaller.php',
        'Composer\\Installers\\MODXEvoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MODXEvoInstaller.php',
        'Composer\\Installers\\MagentoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MagentoInstaller.php',
        'Composer\\Installers\\MajimaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MajimaInstaller.php',
        'Composer\\Installers\\MakoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MakoInstaller.php',
        'Composer\\Installers\\MantisBTInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MantisBTInstaller.php',
        'Composer\\Installers\\MauticInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MauticInstaller.php',
        'Composer\\Installers\\MayaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MayaInstaller.php',
        'Composer\\Installers\\MediaWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MediaWikiInstaller.php',
        'Composer\\Installers\\MiaoxingInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MiaoxingInstaller.php',
        'Composer\\Installers\\MicroweberInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MicroweberInstaller.php',
        'Composer\\Installers\\ModxInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ModxInstaller.php',
        'Composer\\Installers\\MoodleInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/MoodleInstaller.php',
        'Composer\\Installers\\OctoberInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OctoberInstaller.php',
        'Composer\\Installers\\OntoWikiInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OntoWikiInstaller.php',
        'Composer\\Installers\\OsclassInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OsclassInstaller.php',
        'Composer\\Installers\\OxidInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/OxidInstaller.php',
        'Composer\\Installers\\PPIInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PPIInstaller.php',
        'Composer\\Installers\\PantheonInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PantheonInstaller.php',
        'Composer\\Installers\\PhiftyInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PhiftyInstaller.php',
        'Composer\\Installers\\PhpBBInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PhpBBInstaller.php',
        'Composer\\Installers\\PimcoreInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PimcoreInstaller.php',
        'Composer\\Installers\\PiwikInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PiwikInstaller.php',
        'Composer\\Installers\\PlentymarketsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PlentymarketsInstaller.php',
        'Composer\\Installers\\Plugin' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Plugin.php',
        'Composer\\Installers\\PortoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PortoInstaller.php',
        'Composer\\Installers\\PrestashopInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PrestashopInstaller.php',
        'Composer\\Installers\\ProcessWireInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ProcessWireInstaller.php',
        'Composer\\Installers\\PuppetInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PuppetInstaller.php',
        'Composer\\Installers\\PxcmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/PxcmsInstaller.php',
        'Composer\\Installers\\RadPHPInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RadPHPInstaller.php',
        'Composer\\Installers\\ReIndexInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ReIndexInstaller.php',
        'Composer\\Installers\\Redaxo5Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Redaxo5Installer.php',
        'Composer\\Installers\\RedaxoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RedaxoInstaller.php',
        'Composer\\Installers\\RoundcubeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/RoundcubeInstaller.php',
        'Composer\\Installers\\SMFInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SMFInstaller.php',
        'Composer\\Installers\\ShopwareInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ShopwareInstaller.php',
        'Composer\\Installers\\SilverStripeInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SilverStripeInstaller.php',
        'Composer\\Installers\\SiteDirectInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SiteDirectInstaller.php',
        'Composer\\Installers\\StarbugInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/StarbugInstaller.php',
        'Composer\\Installers\\SyDESInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SyDESInstaller.php',
        'Composer\\Installers\\SyliusInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/SyliusInstaller.php',
        'Composer\\Installers\\Symfony1Installer' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/Symfony1Installer.php',
        'Composer\\Installers\\TYPO3CmsInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TYPO3CmsInstaller.php',
        'Composer\\Installers\\TYPO3FlowInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TYPO3FlowInstaller.php',
        'Composer\\Installers\\TaoInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TaoInstaller.php',
        'Composer\\Installers\\TastyIgniterInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TastyIgniterInstaller.php',
        'Composer\\Installers\\TheliaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TheliaInstaller.php',
        'Composer\\Installers\\TuskInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/TuskInstaller.php',
        'Composer\\Installers\\UserFrostingInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/UserFrostingInstaller.php',
        'Composer\\Installers\\VanillaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/VanillaInstaller.php',
        'Composer\\Installers\\VgmcpInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/VgmcpInstaller.php',
        'Composer\\Installers\\WHMCSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WHMCSInstaller.php',
        'Composer\\Installers\\WinterInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WinterInstaller.php',
        'Composer\\Installers\\WolfCMSInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WolfCMSInstaller.php',
        'Composer\\Installers\\WordPressInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/WordPressInstaller.php',
        'Composer\\Installers\\YawikInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/YawikInstaller.php',
        'Composer\\Installers\\ZendInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ZendInstaller.php',
        'Composer\\Installers\\ZikulaInstaller' => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers/ZikulaInstaller.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'TypistTech\\Imposter\\ArrayUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/ArrayUtil.php',
        'TypistTech\\Imposter\\Config' => __DIR__ . '/..' . '/typisttech/imposter/src/Config.php',
        'TypistTech\\Imposter\\ConfigCollection' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollection.php',
        'TypistTech\\Imposter\\ConfigCollectionFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionFactory.php',
        'TypistTech\\Imposter\\ConfigCollectionInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigCollectionInterface.php',
        'TypistTech\\Imposter\\ConfigFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigFactory.php',
        'TypistTech\\Imposter\\ConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ConfigInterface.php',
        'TypistTech\\Imposter\\Filesystem' => __DIR__ . '/..' . '/typisttech/imposter/src/Filesystem.php',
        'TypistTech\\Imposter\\FilesystemInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/FilesystemInterface.php',
        'TypistTech\\Imposter\\Imposter' => __DIR__ . '/..' . '/typisttech/imposter/src/Imposter.php',
        'TypistTech\\Imposter\\ImposterFactory' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterFactory.php',
        'TypistTech\\Imposter\\ImposterInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ImposterInterface.php',
        'TypistTech\\Imposter\\Plugin\\AutoloadMerger' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/AutoloadMerger.php',
        'TypistTech\\Imposter\\Plugin\\ImposterPlugin' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/ImposterPlugin.php',
        'TypistTech\\Imposter\\Plugin\\Transformer' => __DIR__ . '/..' . '/typisttech/imposter-plugin/src/Transformer.php',
        'TypistTech\\Imposter\\ProjectConfig' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfig.php',
        'TypistTech\\Imposter\\ProjectConfigInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/ProjectConfigInterface.php',
        'TypistTech\\Imposter\\StringUtil' => __DIR__ . '/..' . '/typisttech/imposter/src/StringUtil.php',
        'TypistTech\\Imposter\\Transformer' => __DIR__ . '/..' . '/typisttech/imposter/src/Transformer.php',
        'TypistTech\\Imposter\\TransformerInterface' => __DIR__ . '/..' . '/typisttech/imposter/src/TransformerInterface.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'WordProofTimestamp\\App\\Actions\\Action' => __DIR__ . '/../..' . '/app/Actions/Action.php',
        'WordProofTimestamp\\App\\Actions\\DeleteOldOptions' => __DIR__ . '/../..' . '/app/Actions/DeleteOldOptions.php',
        'WordProofTimestamp\\App\\Actions\\DeleteOldPostMeta' => __DIR__ . '/../..' . '/app/Actions/DeleteOldPostMeta.php',
        'WordProofTimestamp\\App\\Actions\\MigrateToNewSchema' => __DIR__ . '/../..' . '/app/Actions/MigrateToNewSchema.php',
        'WordProofTimestamp\\App\\Actions\\RetrieveSchemaForPost' => __DIR__ . '/../..' . '/app/Actions/RetrieveSchemaForPost.php',
        'WordProofTimestamp\\App\\Config\\Conditionals\\Conditional' => __DIR__ . '/../..' . '/app/Config/Conditionals/Conditional.php',
        'WordProofTimestamp\\App\\Config\\Conditionals\\IsAuthenticatedConditional' => __DIR__ . '/../..' . '/app/Config/Conditionals/IsAuthenticatedConditional.php',
        'WordProofTimestamp\\App\\Config\\Config' => __DIR__ . '/../..' . '/app/Config/Config.php',
        'WordProofTimestamp\\App\\Config\\Migrations\\Migration' => __DIR__ . '/../..' . '/app/Config/Migrations/Migration.php',
        'WordProofTimestamp\\App\\Config\\Migrations\\v3Migration' => __DIR__ . '/../..' . '/app/Config/Migrations/v3Migration.php',
        'WordProofTimestamp\\App\\Config\\ScriptsConfig' => __DIR__ . '/../..' . '/app/Config/ScriptsConfig.php',
        'WordProofTimestamp\\App\\Config\\SdkAppConfig' => __DIR__ . '/../..' . '/app/Config/SdkAppConfig.php',
        'WordProofTimestamp\\App\\Controllers\\ActionController' => __DIR__ . '/../..' . '/app/Controllers/ActionController.php',
        'WordProofTimestamp\\App\\Controllers\\AdminPageController' => __DIR__ . '/../..' . '/app/Controllers/AdminPageController.php',
        'WordProofTimestamp\\App\\Controllers\\MigrationController' => __DIR__ . '/../..' . '/app/Controllers/MigrationController.php',
        'WordProofTimestamp\\App\\Controllers\\NoticeController' => __DIR__ . '/../..' . '/app/Controllers/NoticeController.php',
        'WordProofTimestamp\\App\\Controllers\\ScheduledActionController' => __DIR__ . '/../..' . '/app/Controllers/ScheduledActionController.php',
        'WordProofTimestamp\\App\\Controllers\\UpgradeNotificationController' => __DIR__ . '/../..' . '/app/Controllers/UpgradeNotificationController.php',
        'WordProofTimestamp\\App\\Core' => __DIR__ . '/../..' . '/app/Core.php',
        'WordProofTimestamp\\App\\Helpers\\ActionHelper' => __DIR__ . '/../..' . '/app/Helpers/ActionHelper.php',
        'WordProofTimestamp\\App\\Helpers\\AssetHelper' => __DIR__ . '/../..' . '/app/Helpers/AssetHelper.php',
        'WordProofTimestamp\\App\\Helpers\\CliHelper' => __DIR__ . '/../..' . '/app/Helpers/CliHelper.php',
        'WordProofTimestamp\\App\\Helpers\\DotenvHelper' => __DIR__ . '/../..' . '/app/Helpers/DotenvHelper.php',
        'WordProofTimestamp\\App\\Helpers\\PluginHelper' => __DIR__ . '/../..' . '/app/Helpers/PluginHelper.php',
        'WordProofTimestamp\\App\\Notices\\AuthenticateAfterMigrationNotice' => __DIR__ . '/../..' . '/app/Notices/AuthenticateAfterMigrationNotice.php',
        'WordProofTimestamp\\App\\Notices\\Notice' => __DIR__ . '/../..' . '/app/Notices/Notice.php',
        'WordProofTimestamp\\App\\Notices\\YoastNotice' => __DIR__ . '/../..' . '/app/Notices/YoastNotice.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Dotenv' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Dotenv.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Exception\\InvalidEncodingException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidEncodingException.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Exception\\ValidationException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Loader\\Loader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Loader.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/LoaderInterface.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Loader\\Resolver' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader/Resolver.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Parser\\Entry' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Entry.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Parser\\EntryParser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/EntryParser.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Parser\\Lexer' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lexer.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Parser\\Lines' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Lines.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Parser\\Parser' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Parser.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Parser\\ParserInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/ParserInterface.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Parser\\Value' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Parser/Value.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\AdapterRepository' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/AdapterRepository.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\AdapterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/AdapterInterface.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\ApacheAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ApacheAdapter.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\ArrayAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\EnvConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\GuardedWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/GuardedWriter.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\ImmutableWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ImmutableWriter.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\MultiReader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiReader.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\MultiWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/MultiWriter.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\PutenvAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\ReaderInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\ReplacingWriter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ReplacingWriter.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\ServerConstAdapter' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\Adapter\\WriterInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\RepositoryBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Repository\\RepositoryInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Repository/RepositoryInterface.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Store\\FileStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/FileStore.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Store\\File\\Paths' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Paths.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Store\\File\\Reader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/File/Reader.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Store\\StoreBuilder' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreBuilder.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Store\\StoreInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StoreInterface.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Store\\StringStore' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Store/StringStore.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Util\\Regex' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Regex.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Util\\Str' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Util/Str.php',
        'WordProofTimestamp\\App\\Vendor\\Dotenv\\Validator' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Validator.php',
        'WordProofTimestamp\\App\\Vendor\\GrahamCampbell\\ResultType\\Error' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Error.php',
        'WordProofTimestamp\\App\\Vendor\\GrahamCampbell\\ResultType\\Result' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Result.php',
        'WordProofTimestamp\\App\\Vendor\\GrahamCampbell\\ResultType\\Success' => __DIR__ . '/..' . '/graham-campbell/result-type/src/Success.php',
        'WordProofTimestamp\\App\\Vendor\\PhpOption\\LazyOption' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/LazyOption.php',
        'WordProofTimestamp\\App\\Vendor\\PhpOption\\None' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/None.php',
        'WordProofTimestamp\\App\\Vendor\\PhpOption\\Option' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Option.php',
        'WordProofTimestamp\\App\\Vendor\\PhpOption\\Some' => __DIR__ . '/..' . '/phpoption/phpoption/src/PhpOption/Some.php',
        'WordProofTimestamp\\App\\Vendor\\Symfony\\Polyfill\\Ctype\\Ctype' => __DIR__ . '/..' . '/symfony/polyfill-ctype/Ctype.php',
        'WordProofTimestamp\\App\\Vendor\\Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'WordProofTimestamp\\App\\Vendor\\Symfony\\Polyfill\\Php80\\Php80' => __DIR__ . '/..' . '/symfony/polyfill-php80/Php80.php',
        'WordProofTimestamp\\App\\Vendor\\Symfony\\Polyfill\\Php80\\PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/PhpToken.php',
        'WordProof\\SDK\\Config\\AppConfigInterface' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Config/AppConfigInterface.php',
        'WordProof\\SDK\\Config\\Config' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Config/Config.php',
        'WordProof\\SDK\\Config\\DefaultAppConfig' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Config/DefaultAppConfig.php',
        'WordProof\\SDK\\Config\\EnvironmentConfig' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Config/EnvironmentConfig.php',
        'WordProof\\SDK\\Config\\OptionsConfig' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Config/OptionsConfig.php',
        'WordProof\\SDK\\Config\\RoutesConfig' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Config/RoutesConfig.php',
        'WordProof\\SDK\\Config\\ScriptsConfig' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Config/ScriptsConfig.php',
        'WordProof\\SDK\\Controllers\\AuthenticationController' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Controllers/AuthenticationController.php',
        'WordProof\\SDK\\Controllers\\CertificateController' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Controllers/CertificateController.php',
        'WordProof\\SDK\\Controllers\\IdentityController' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Controllers/IdentityController.php',
        'WordProof\\SDK\\Controllers\\NoticeController' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Controllers/NoticeController.php',
        'WordProof\\SDK\\Controllers\\PostEditorDataController' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Controllers/PostEditorDataController.php',
        'WordProof\\SDK\\Controllers\\PostEditorTimestampController' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Controllers/PostEditorTimestampController.php',
        'WordProof\\SDK\\Controllers\\RestApiController' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Controllers/RestApiController.php',
        'WordProof\\SDK\\Controllers\\SettingsController' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Controllers/SettingsController.php',
        'WordProof\\SDK\\Controllers\\TimestampController' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Controllers/TimestampController.php',
        'WordProof\\SDK\\DataTransferObjects\\TimestampData' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/DataTransferObjects/TimestampData.php',
        'WordProof\\SDK\\Exceptions\\ValidationException' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Exceptions/ValidationException.php',
        'WordProof\\SDK\\Helpers\\AdminHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/AdminHelper.php',
        'WordProof\\SDK\\Helpers\\AppConfigHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/AppConfigHelper.php',
        'WordProof\\SDK\\Helpers\\AssetHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/AssetHelper.php',
        'WordProof\\SDK\\Helpers\\AuthenticationHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/AuthenticationHelper.php',
        'WordProof\\SDK\\Helpers\\CertificateHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/CertificateHelper.php',
        'WordProof\\SDK\\Helpers\\ClassicNoticeHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/ClassicNoticeHelper.php',
        'WordProof\\SDK\\Helpers\\EnvironmentHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/EnvironmentHelper.php',
        'WordProof\\SDK\\Helpers\\EscapeHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/EscapeHelper.php',
        'WordProof\\SDK\\Helpers\\OptionsHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/OptionsHelper.php',
        'WordProof\\SDK\\Helpers\\PostEditorHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/PostEditorHelper.php',
        'WordProof\\SDK\\Helpers\\PostMetaHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/PostMetaHelper.php',
        'WordProof\\SDK\\Helpers\\PostTypeHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/PostTypeHelper.php',
        'WordProof\\SDK\\Helpers\\RedirectHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/RedirectHelper.php',
        'WordProof\\SDK\\Helpers\\ReflectionHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/ReflectionHelper.php',
        'WordProof\\SDK\\Helpers\\RestApiHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/RestApiHelper.php',
        'WordProof\\SDK\\Helpers\\SanitizeHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/SanitizeHelper.php',
        'WordProof\\SDK\\Helpers\\SchemaHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/SchemaHelper.php',
        'WordProof\\SDK\\Helpers\\SettingsHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/SettingsHelper.php',
        'WordProof\\SDK\\Helpers\\StringHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/StringHelper.php',
        'WordProof\\SDK\\Helpers\\TimestampHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/TimestampHelper.php',
        'WordProof\\SDK\\Helpers\\TransientHelper' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Helpers/TransientHelper.php',
        'WordProof\\SDK\\Support\\Api' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Support/Api.php',
        'WordProof\\SDK\\Support\\Authentication' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Support/Authentication.php',
        'WordProof\\SDK\\Support\\Loader' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Support/Loader.php',
        'WordProof\\SDK\\Support\\Settings' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Support/Settings.php',
        'WordProof\\SDK\\Support\\Template' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Support/Template.php',
        'WordProof\\SDK\\Support\\Timestamp' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Support/Timestamp.php',
        'WordProof\\SDK\\Translations\\DefaultTranslations' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Translations/DefaultTranslations.php',
        'WordProof\\SDK\\Translations\\TranslationsInterface' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/Translations/TranslationsInterface.php',
        'WordProof\\SDK\\WordPressSDK' => __DIR__ . '/..' . '/wordproof/wordpress-sdk/app/WordPressSDK.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4d98eb869196d7b1fd855f817d915ac0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4d98eb869196d7b1fd855f817d915ac0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4d98eb869196d7b1fd855f817d915ac0::$classMap;

        }, null, ClassLoader::class);
    }
}