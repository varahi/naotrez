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
class ItemController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
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
        $items = $this->itemRepository->findAll();
        $this->view->assign('items', $items);
    }

    /**
     * action show
     * 
     * @param \T3Dev\T3devAudioplayer\Domain\Model\Item $item
     * @return void
     */
    public function showAction(\T3Dev\T3devAudioplayer\Domain\Model\Item $item)
    {
        $this->view->assign('item', $item);
    }
}
