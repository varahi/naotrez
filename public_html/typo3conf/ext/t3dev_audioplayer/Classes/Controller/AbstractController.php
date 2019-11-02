<?php
namespace T3Dev\T3devAudioplayer\Controller;


use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * ClassItemController
 */
class AbstractController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

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

            if($theme == 'blue_playlist') {
                $cssFile = $extPath . 'Resources/Public/blue-playlist/css/app.css';
            }
            if($theme == 'flat_black') {
                $cssFile = $extPath . 'Resources/Public/flat-black/css/app.css';
            }
            $pageRender->addCssFile($cssFile, 'stylesheet', 'all', '', '', true);

        }
    }

    /**
     * persistenceManager
     *
     * @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
     * @inject
     */
    protected $persistenceManager = null;

    /**
     * configurationManager
     *
     * @var \TYPO3\CMS\Extbase\Configuration\ConfigurationManager
     * @inject
     */
    protected $configurationManager = null;

    /**
     * Build config array (get from $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['t3dev_audioplayer'])
     * if empty then set default values for configuration
     *
     * @return array Configuration
     */
    protected function getConfiguration() {
        if (empty($this->configuration)) {
            $configuration = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['t3dev_audioplayer'];
            if (is_string($configuration)) {
                $configuration = unserialize($configuration);
            }
            // set default values if no global conf found
            if (empty($configuration)) {
                $configuration = array(
                    'pid' => 0
                );
            }
            $this->configuration = $configuration;
        }
        return $this->configuration;
    }


    /**
     * Page id (from extension configuration)
     *
     * @return int pid (Page id)
     */
    protected function getPidExtensionConfiguration()
    {
        $config = $this->getConfiguration();
        return $config['pid'];
    }


}