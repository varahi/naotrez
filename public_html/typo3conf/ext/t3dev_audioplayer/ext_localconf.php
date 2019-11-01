<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'T3Dev.T3devAudioplayer',
            'T3devaudioplayer',
            [
                'Item' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Item' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    t3devaudioplayer {
                        iconIdentifier = t3dev_audioplayer-plugin-t3devaudioplayer
                        title = LLL:EXT:t3dev_audioplayer/Resources/Private/Language/locallang_db.xlf:tx_t3dev_audioplayer_t3devaudioplayer.name
                        description = LLL:EXT:t3dev_audioplayer/Resources/Private/Language/locallang_db.xlf:tx_t3dev_audioplayer_t3devaudioplayer.description
                        tt_content_defValues {
                            CType = list
                            list_type = t3devaudioplayer_t3devaudioplayer
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				't3dev_audioplayer-plugin-t3devaudioplayer',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:t3dev_audioplayer/Resources/Public/Icons/user_plugin_t3devaudioplayer.svg']
			);
		
    }
);
