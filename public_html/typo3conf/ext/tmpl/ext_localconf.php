<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'T3Dev.Tmpl',
            'Tmpl',
            [

            ],
            // non-cacheable actions
            [

            ]
        );

        // wizards
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    tmpl {
                        iconIdentifier = tmpl-plugin-tmpl
                        title = LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:tx_tmpl_tmpl.name
                        description = LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:tx_tmpl_tmpl.description
                        tt_content_defValues {
                            CType = list
                            list_type = tmpl_tmpl
                        }
                    }
                }
                show = *
            }
       }'
        );
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

        $iconRegistry->registerIcon(
            'tmpl-plugin-tmpl',
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:tmpl/Resources/Public/Icons/user_plugin_tmpl.svg']
        );

    }
);
