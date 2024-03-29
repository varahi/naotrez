<?php
return [
    'BE' => [
        'debug' => false,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=2$MFRoV0d2cEhpdEw3R1p3eA$szni+/BeOOTGIkmoss3PIJ//UJvkCyv85Q/DSDthUw0',
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BcryptPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => '[Set via env file]',
                'driver' => 'mysqli',
                'host' => '[Set via env file]',
                'password' => '[Set via env file]',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'root',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:14:"backendFavicon";s:0:"";s:11:"backendLogo";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:13:"loginFootnote";s:0:"";s:19:"loginHighlightColor";s:0:"";s:9:"loginLogo";s:0:"";}',
            'cs_seo' => 'a:10:{s:18:"evaluationDoktypes";s:1:"1";s:10:"evaluators";s:38:"Title,Description,H1,H2,Images,Keyword";s:12:"inPageModule";s:1:"0";s:14:"maxDescription";s:3:"156";s:5:"maxH2";s:1:"6";s:11:"maxNavTitle";s:2:"50";s:8:"maxTitle";s:2:"57";s:14:"minDescription";s:3:"140";s:8:"minTitle";s:2:"40";s:11:"tsConfigPid";s:1:"1";}',
            'extension_builder' => 'a:3:{s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";s:15:"backupExtension";s:1:"1";s:15:"enableRoundtrip";s:1:"1";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'frontend_editing' => 'a:3:{s:11:"seoProvider";s:4:"none";s:29:"contentEditableWrapperTagName";s:3:"div";s:18:"enablePlaceholders";s:1:"0";}',
            'gridelements' => 'a:6:{s:20:"additionalStylesheet";s:0:"";s:38:"disableAutomaticUnusedColumnCorrection";s:1:"0";s:25:"disableCopyFromPageButton";s:1:"0";s:19:"disableDragInWizard";s:1:"0";s:19:"nestingInListModule";s:1:"0";s:26:"overlayShortcutTranslation";s:1:"0";}',
            'indexed_search' => 'a:20:{s:6:"catdoc";s:9:"/usr/bin/";s:9:"debugMode";s:1:"0";s:23:"disableFrontendIndexing";s:1:"0";s:21:"enableMetaphoneSearch";s:1:"1";s:11:"flagBitMask";s:3:"192";s:18:"fullTextDataLength";s:1:"0";s:16:"ignoreExtensions";s:0:"";s:17:"indexExternalURLs";s:1:"0";s:6:"maxAge";s:1:"0";s:16:"maxExternalFiles";s:1:"5";s:6:"minAge";s:2:"24";s:8:"pdf_mode";s:2:"20";s:8:"pdftools";s:9:"/usr/bin/";s:7:"ppthtml";s:9:"/usr/bin/";s:18:"trackIpInStatistic";s:1:"2";s:5:"unrtf";s:9:"/usr/bin/";s:5:"unzip";s:9:"/usr/bin/";s:26:"useCrawlerForExternalFiles";s:1:"0";s:16:"useMysqlFulltext";s:1:"0";s:6:"xlhtml";s:9:"/usr/bin/";}',
            'lfeditor' => 'a:9:{s:16:"beMainModuleName";s:4:"user";s:13:"changeXlfDate";s:1:"1";s:15:"defaultLanguage";s:0:"";s:17:"editModeExtension";s:1:"1";s:9:"extIgnore";s:23:"/^(CVS|.svn|.git|csh_)/";s:12:"extWhitelist";s:0:"";s:27:"pathAdditionalConfiguration";s:37:"typo3conf/AdditionalConfiguration.php";s:11:"searchRegex";s:60:"/^([a-z0-9_]*locallang[a-z0-9_-]*\\.(php|xml)|[^\\.]*\\.xlf)$/i";s:13:"viewLanguages";s:0:"";}',
            'news' => 'a:17:{s:20:"advancedMediaPreview";s:1:"1";s:11:"archiveDate";s:4:"date";s:34:"categoryBeGroupTceFormsRestriction";s:1:"0";s:19:"categoryRestriction";s:4:"none";s:21:"contentElementPreview";s:1:"1";s:22:"contentElementRelation";s:1:"1";s:19:"dateTimeNotRequired";s:1:"0";s:35:"hidePageTreeForAdministrationModule";s:1:"0";s:13:"manualSorting";s:1:"1";s:12:"mediaPreview";s:1:"1";s:13:"prependAtCopy";s:1:"1";s:22:"resourceFolderImporter";s:12:"/news_import";s:12:"rteForTeaser";s:1:"0";s:24:"showAdministrationModule";s:1:"1";s:12:"showImporter";s:1:"0";s:18:"storageUidImporter";s:1:"1";s:6:"tagPid";s:1:"1";}',
            'powermail' => 'a:8:{s:20:"disableBackendModule";s:1:"0";s:12:"disableIpLog";s:1:"1";s:27:"disableMarketingInformation";s:1:"0";s:24:"disablePluginInformation";s:1:"0";s:35:"disablePluginInformationMailPreview";s:1:"0";s:13:"enableCaching";s:1:"0";s:15:"l10n_mode_merge";s:1:"0";s:29:"replaceIrreWithElementBrowser";s:1:"0";}',
            'scheduler' => 'a:2:{s:11:"maxLifetime";s:4:"1440";s:15:"showSampleTasks";s:1:"1";}',
            'vhs' => 'a:1:{s:20:"disableAssetHandling";s:1:"0";}',
        ],
    ],
    'EXTCONF' => [
        'lang' => [
            'availableLanguages' => [
                'ru',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'cs_seo' => [
            'evaluationDoktypes' => '1',
            'evaluators' => 'Title,Description,H1,H2,Images,Keyword',
            'inPageModule' => '0',
            'maxDescription' => '156',
            'maxH2' => '6',
            'maxNavTitle' => '50',
            'maxTitle' => '57',
            'minDescription' => '140',
            'minTitle' => '40',
            'tsConfigPid' => '1',
        ],
        'extension_builder' => [
            'backupDir' => 'uploads/tx_extensionbuilder/backups',
            'backupExtension' => '1',
            'enableRoundtrip' => '1',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'frontend_editing' => [
            'contentEditableWrapperTagName' => 'div',
            'enablePlaceholders' => '0',
            'seoProvider' => 'none',
        ],
        'gridelements' => [
            'additionalStylesheet' => '',
            'disableAutomaticUnusedColumnCorrection' => '0',
            'disableCopyFromPageButton' => '0',
            'disableDragInWizard' => '0',
            'nestingInListModule' => '0',
            'overlayShortcutTranslation' => '0',
        ],
        'indexed_search' => [
            'catdoc' => '/usr/bin/',
            'debugMode' => '0',
            'disableFrontendIndexing' => '0',
            'enableMetaphoneSearch' => '1',
            'flagBitMask' => '192',
            'fullTextDataLength' => '0',
            'ignoreExtensions' => '',
            'indexExternalURLs' => '0',
            'maxAge' => '0',
            'maxExternalFiles' => '5',
            'minAge' => '24',
            'pdf_mode' => '20',
            'pdftools' => '/usr/bin/',
            'ppthtml' => '/usr/bin/',
            'trackIpInStatistic' => '2',
            'unrtf' => '/usr/bin/',
            'unzip' => '/usr/bin/',
            'useCrawlerForExternalFiles' => '0',
            'useMysqlFulltext' => '0',
            'xlhtml' => '/usr/bin/',
        ],
        'lfeditor' => [
            'beMainModuleName' => 'user',
            'changeXlfDate' => '1',
            'defaultLanguage' => '',
            'editModeExtension' => '1',
            'extIgnore' => '/^(CVS|.svn|.git|csh_)/',
            'extWhitelist' => '',
            'pathAdditionalConfiguration' => 'typo3conf/AdditionalConfiguration.php',
            'searchRegex' => '/^([a-z0-9_]*locallang[a-z0-9_-]*\\.(php|xml)|[^\\.]*\\.xlf)$/i',
            'viewLanguages' => '',
        ],
        'news' => [
            'advancedMediaPreview' => '1',
            'archiveDate' => 'date',
            'categoryBeGroupTceFormsRestriction' => '0',
            'categoryRestriction' => 'none',
            'contentElementPreview' => '1',
            'contentElementRelation' => '1',
            'dateTimeNotRequired' => '0',
            'hidePageTreeForAdministrationModule' => '0',
            'manualSorting' => '1',
            'mediaPreview' => '1',
            'prependAtCopy' => '1',
            'resourceFolderImporter' => '/news_import',
            'rteForTeaser' => '0',
            'showAdministrationModule' => '1',
            'showImporter' => '0',
            'storageUidImporter' => '1',
            'tagPid' => '1',
        ],
        'powermail' => [
            'disableBackendModule' => '0',
            'disableIpLog' => '1',
            'disableMarketingInformation' => '0',
            'disablePluginInformation' => '0',
            'disablePluginInformationMailPreview' => '0',
            'enableCaching' => '0',
            'l10n_mode_merge' => '0',
            'replaceIrreWithElementBrowser' => '0',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
        'vhs' => [
            'disableAssetHandling' => '0',
        ],
    ],
    'FE' => [
        'debug' => false,
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\BcryptPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => '[Set via env file]',
        'transport_sendmail_command' => '/usr/sbin/sendmail -t -i',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'devIPmask' => '',
        'displayErrors' => 0,
        'encryptionKey' => '8c9103320f39f25c68289b5b6da0bca55858949fa52ea584147c132ef79599ac31d14ea939595154db81fba4bf6a1d33',
        'exceptionalErrors' => 4096,
        'features' => [
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'Naotrez Site',
        'systemLogLevel' => 2,
        'systemMaintainers' => [
            1,
        ],
        'trustedHostsPattern' => '.*',
    ],
];
