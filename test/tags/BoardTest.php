<?php

namespace pgn\tags;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-11 at 10:36:26.
 */
class BoardTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Board
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Board;
        echo __CLASS__ . '::' . $this->getName() . "\n";
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * Generated from @assert ("1") === true.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate() {
        $this->assertSame(
                true
                , $this->object->validate("1")
        );
    }

    /**
     * Generated from @assert ("19") === true.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate2() {
        $this->assertSame(
                true
                , $this->object->validate("19")
        );
    }

    /**
     * Generated from @assert (1) === true.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate3() {
        $this->assertSame(
                true
                , $this->object->validate(1)
        );
    }

    /**
     * Generated from @assert ("3.1") === false.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate4() {
        $this->assertSame(
                false
                , $this->object->validate("3.1")
        );
    }

    /**
     * Generated from @assert (3.1) === false.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate5() {
        $this->assertSame(
                false
                , $this->object->validate(3.1)
        );
    }

    /**
     * Generated from @assert ("4.1.2") === false.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate6() {
        $this->assertSame(
                false
                , $this->object->validate("4.1.2")
        );
    }

    /**
     * Generated from @assert ("-") === false.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate7() {
        $this->assertSame(
                false
                , $this->object->validate("-")
        );
    }

    /**
     * Generated from @assert ("?") === true.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate8() {
        $this->assertSame(
                true
                , $this->object->validate("?")
        );
    }

    /**
     * Generated from @assert (NULL) === false.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate9() {
        $this->assertSame(
                false
                , $this->object->validate(NULL)
        );
    }

    /**
     * Generated from @assert ("A") === false.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate10() {
        $this->assertSame(
                false
                , $this->object->validate("A")
        );
    }

    /**
     * Generated from @assert ("asdf") === false.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate11() {
        $this->assertSame(
                false
                , $this->object->validate("asdf")
        );
    }

    /**
     * Generated from @assert ("*") === false.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate12() {
        $this->assertSame(
                false
                , $this->object->validate("*")
        );
    }

    /**
     * Generated from @assert ("????.??.??") === false.
     *
     * @covers pgn\tags\Board::validate
     */
    public function testValidate13() {
        $this->assertSame(
                false
                , $this->object->validate("????.??.??")
        );
    }

    /**
     * @covers pgn\tags\Board::getName
     * @todo   Implement testGetName().
     */
    public function testGetName() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers pgn\tags\Board::validPattern
     * @todo   Implement testValidPattern().
     */
    public function testValidPattern() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

}