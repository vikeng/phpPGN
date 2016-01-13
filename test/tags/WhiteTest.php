<?php

namespace pgn\tags;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-04-18 at 18:18:55.
 */
class WhiteTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var White
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new White;
        echo __CLASS__ . '::' . $this->getName() . "\n";
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * Generated from @assert () === 'White'.
     *
     * @covers pgn\tags\White::getName
     */
    public function testGetName() {
        $this->assertSame(
                'White'
                , $this->object->getName()
        );
    }

    /**
     * Generated from @assert ("Tal, Mikhail N.") === true.
     * 
     * @covers pgn\tags\White::validate
     */
    public function testValidate() {
        $this->assertSame(
                true
                , $this->object->validate("Tal, Mikhail N.")
        );
    }

    /**
     * Generated from @assert ("van der Wiel, Johan") === true.
     * 
     * @covers pgn\tags\White::validate
     */
    public function testValidate2() {
        $this->assertSame(
                true
                , $this->object->validate("van der Wiel, Johan")
        );
    }

    /**
     * Generated from @assert ("Acme Pawngrabber v.3.2") === true.
     *
     * @covers pgn\tags\White::validate
     */
    public function testValidate3() {
        $this->assertSame(
                true
                , $this->object->validate("Acme Pawngrabber v.3.2")
        );
    }

    /**
     * Generated from @assert ("?") === true.
     * 
     * @covers pgn\tags\White::validate
     */
    public function testValidate4() {
        $this->assertSame(
                true
                , $this->object->validate("?")
        );
    }

    /**
     * Generated from @assert (NULL) === false.
     * 
     * @covers pgn\tags\White::validate
     */
    public function testValidate5() {
        $this->assertSame(
                false
                , $this->object->validate(NULL)
        );
    }

    /**
     * Generated from @assert ("ab") === true.
     * 
     * @covers pgn\tags\White::validate
     */
    public function testValidate6() {
        $this->assertSame(
                true
                , $this->object->validate("ab")
        );
    }

    /**
     * Generated from @assert (", ") === true.
     * 
     * @covers pgn\tags\White::validate
     */
    public function testValidate7() {
        $this->assertSame(
                true
                , $this->object->validate(", ")
        );
    }

    /**
     * Generated from @assert (",a") === false.
     *
     * @covers pgn\tags\White::validate
     */
    public function testValidate8() {
        $this->assertSame(
                false
                , $this->object->validate(",a")
        );
    }

    /**
     * Generated from @assert ("a") === true.
     *
     * @covers pgn\tags\White::validate
     */
    public function testValidate9() {
        $this->assertSame(
                true
                , $this->object->validate("a")
        );
    }

}