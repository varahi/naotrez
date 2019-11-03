<?php
defined('TYPO3_MODE') or die();

// Additional fields for page
$GLOBALS['TCA']['pages']['columns'] += array(

    'hide_breadcrumb' => array(
        'label' => 'LLL:EXT:tmpl/Resources/Private/Language/locallang_db.xlf:page.hide_breadcrumb',
        'exclude' => 1,
        'config' => array (
            'type' => 'check',
            'items' => array(
                array('', '')
            )
        )
    ),

);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes (
    'pages', 'hide_breadcrumb', '1', 'after:title'
);