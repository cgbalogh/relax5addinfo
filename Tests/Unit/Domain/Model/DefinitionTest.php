<?php
namespace CGB\Relax5addinfo\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Christoph Balogh <cb@lustige-informatik.at>
 */
class DefinitionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CGB\Relax5addinfo\Domain\Model\Definition
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CGB\Relax5addinfo\Domain\Model\Definition();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );

    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getType()
        );

    }

    /**
     * @test
     */
    public function setTypeForStringSetsType()
    {
        $this->subject->setType('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'type',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getValueListReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getValueList()
        );

    }

    /**
     * @test
     */
    public function setValueListForStringSetsValueList()
    {
        $this->subject->setValueList('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'valueList',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getAddTextReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getAddText()
        );

    }

    /**
     * @test
     */
    public function setAddTextForBoolSetsAddText()
    {
        $this->subject->setAddText(true);

        self::assertAttributeEquals(
            true,
            'addText',
            $this->subject
        );

    }
}
