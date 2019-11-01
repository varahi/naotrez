<?php
namespace T3Dev\T3devAudioplayer\Domain\Model;


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
 * Item
 */
class Item extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * artist
     * 
     * @var string
     */
    protected $artist = '';

    /**
     * album
     * 
     * @var string
     */
    protected $album = '';

    /**
     * songUrl
     * 
     * @var string
     */
    protected $songUrl = '';

    /**
     * songDuration
     * 
     * @var string
     */
    protected $songDuration = '';

    /**
     * cover
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $cover = null;

    /**
     * Returns the title
     * 
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     * 
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the artist
     * 
     * @return string $artist
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * Sets the artist
     * 
     * @param string $artist
     * @return void
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * Returns the album
     * 
     * @return string $album
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * Sets the album
     * 
     * @param string $album
     * @return void
     */
    public function setAlbum($album)
    {
        $this->album = $album;
    }

    /**
     * Returns the songUrl
     * 
     * @return string $songUrl
     */
    public function getSongUrl()
    {
        return $this->songUrl;
    }

    /**
     * Sets the songUrl
     * 
     * @param string $songUrl
     * @return void
     */
    public function setSongUrl($songUrl)
    {
        $this->songUrl = $songUrl;
    }

    /**
     * Returns the cover
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $cover
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * Sets the cover
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $cover
     * @return void
     */
    public function setCover(\TYPO3\CMS\Extbase\Domain\Model\FileReference $cover)
    {
        $this->cover = $cover;
    }

    /**
     * Returns the songDuration
     * 
     * @return string songDuration
     */
    public function getSongDuration()
    {
        return $this->songDuration;
    }

    /**
     * Sets the songDuration
     * 
     * @param string $songDuration
     * @return void
     */
    public function setSongDuration($songDuration)
    {
        $this->songDuration = $songDuration;
    }
}
