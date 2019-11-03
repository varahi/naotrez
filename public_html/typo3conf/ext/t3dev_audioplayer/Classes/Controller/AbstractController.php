<?php
namespace T3Dev\T3devAudioplayer\Controller;


use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * ClassItemController
 */
class AbstractController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * persistenceManager
     *
     * @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
     * @inject
     */
    protected $persistenceManager = null;

    /*
    * setHeaders
    * Set JS and CSS according to TS settings
    *
    * @param string $theme
    *
    * @return void
    */
    protected function setHeaders($theme) {

        if (TYPO3_MODE === 'FE') {

            $extPath = ExtensionManagementUtility::siteRelPath(
                $this->request->getControllerExtensionKey()
            );

            $jsFilePlayer = $extPath . 'Resources/Public/js/amplitude.js';

            $pageRender = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Page\PageRenderer::class);
            $pageRender->addJsFile($jsFilePlayer, 'text/javascript', true, false, '', true);

            if($theme ==  $this->settings['bluePlaylist']) {
                $cssFile = $extPath . 'Resources/Public/blue-playlist/css/app.css';
            }
            if($theme ==  $this->settings['flatBlack']) {
                $cssFile = $extPath . 'Resources/Public/flat-black/css/app.css';
            }
            if($theme ==  $this->settings['singleSong']) {
                $cssFile = $extPath . 'Resources/Public/single-song/css/app.css';
            }
            $pageRender->addCssFile($cssFile, 'stylesheet', 'all', '', '', true);

        }
    }

}