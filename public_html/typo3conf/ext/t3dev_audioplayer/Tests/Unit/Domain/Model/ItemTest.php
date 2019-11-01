<?php
namespace T3Dev\T3devAudioplayer\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Dmitry Vasilev <dmitry@t3dev.ru>
 */
class ItemTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \T3Dev\T3devAudioplayer\Domain\Model\Item
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \T3Dev\T3devAudioplayer\Domain\Model\Item();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getArtistReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getArtist()
        );
    }

    /**
     * @test
     */
    public function setArtistForStringSetsArtist()
    {
        $this->subject->setArtist('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'artist',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAlbumReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAlbum()
        );
    }

    /**
     * @test
     */
    public function setAlbumForStringSetsAlbum()
    {
        $this->subject->setAlbum('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'album',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSongUrlReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSongUrl()
        );
    }

    /**
     * @test
     */
    public function setSongUrlForStringSetsSongUrl()
    {
        $this->subject->setSongUrl('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'songUrl',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSongDurationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSongDuration()
        );
    }

    /**
     * @test
     */
    public function setSongDurationForStringSetsSongDuration()
    {
        $this->subject->setSongDuration('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'songDuration',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCoverReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getCover()
        );
    }

    /**
     * @test
     */
    public function setCoverForFileReferenceSetsCover()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setCover($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'cover',
            $this->subject
        );
    }
}
