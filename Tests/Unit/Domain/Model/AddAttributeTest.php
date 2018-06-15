<?php
namespace CGB\Relax5addinfo\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Christoph Balogh <cb@lustige-informatik.at>
 */
class AddAttributeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \CGB\Relax5addinfo\Domain\Model\AddAttribute
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \CGB\Relax5addinfo\Domain\Model\AddAttribute();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getParentObjectReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getParentObject()
        );

    }

    /**
     * @test
     */
    public function setParentObjectForStringSetsParentObject()
    {
        $this->subject->setParentObject('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'parentObject',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getForeignUidReturnsInitialValueForInt()
    {
    }

    /**
     * @test
     */
    public function setForeignUidForIntSetsForeignUid()
    {
    }

    /**
     * @test
     */
    public function getValueReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getValue()
        );

    }

    /**
     * @test
     */
    public function setValueForStringSetsValue()
    {
        $this->subject->setValue('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'value',
            $this->subject
        );

    }

    /**
     * @test
     */
    public function getDefinitionReturnsInitialValueForDefinition()
    {
        self::assertEquals(
            null,
            $this->subject->getDefinition()
        );

    }

    /**
     * @test
     */
    public function setDefinitionForDefinitionSetsDefinition()
    {
        $definitionFixture = new \CGB\Relax5addinfo\Domain\Model\Definition();
        $this->subject->setDefinition($definitionFixture);

        self::assertAttributeEquals(
            $definitionFixture,
            'definition',
            $this->subject
        );

    }
}
