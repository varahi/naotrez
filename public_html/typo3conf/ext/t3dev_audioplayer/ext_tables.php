<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'T3Dev.T3devAudioplayer',
            'T3devaudioplayer',
            'T3Dev audio player'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('t3dev_audioplayer', 'Configuration/TypoScript', 'T3Dev audio player');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_t3devaudioplayer_domain_model_item', 'EXT:t3dev_audioplayer/Resources/Private/Language/locallang_csh_tx_t3devaudioplayer_domain_model_item.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_t3devaudioplayer_domain_model_item');

    }
);
