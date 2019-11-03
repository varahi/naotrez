<?php
namespace T3Dev\T3devAudioplayer\Controller;


/***
 *
 * This file is part of the "T3Dev audio player" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Dmitry Vasilev <dmitry@t3dev.ru>, T3Dev
 *
 ***/
/**
 * ItemController
 */
class ItemController extends AbstractController
{

    /**
     * itemRepository
     * 
     * @var \T3Dev\T3devAudioplayer\Domain\Repository\ItemRepository
     * @inject
     */
    protected $itemRepository = null;


    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {

        $theme = $this->settings['theme'];
        $this->setHeaders($theme);

        // Select song from playlist
        if($theme == $this->settings['bluePlaylist'] || $this->settings['flatBlack']) {
            $storagePage = $this->settings['storagePage'];
            $items = $this->itemRepository->findAllByPid($storagePage);
            $this->view->assign('items', $items);
        }

        // Select single song
        if($theme == $this->settings['singleSong']) {
            $uid = $this->settings['selectSong'];
            $song = $this->itemRepository->findByUid($uid);
            $this->view->assign('item', $song);
        }

        //\TYPO3\CMS\Core\Utility\DebugUtility::debug($song);
    }
}
