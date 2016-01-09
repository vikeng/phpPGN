<?php
namespace utils;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-04-07 at 18:17:10.
 */
class ParserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Parser
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Parser;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers utils\Parser::parseClassName
     * @expectedException utils\ParserException
     */
    public function testParseClassName_Null()
    {
        $result = Parser::parseClassName(NULL);
    }

    /**
     * @covers utils\Parser::parseClassName
     * @expectedException utils\ParserException
     */
    public function testParseClassName_Empty()
    {
        $result = Parser::parseClassName('');
    }

    /**
     * @covers utils\Parser::parseClassName
     */
    public function testParseClassName_NoNamespace_OK()
    {
        $array = Parser::parseClassName('Hello');
        $namespace = '';
        $className = 'Hello';
        
        $this->assertEquals($namespace, $array['namespace']);
        $this->assertEquals($className, $array['className']);
    }

    /**
     * @covers utils\Parser::parseClassName
     */
    public function testParseClassName_Namespace_OK()
    {
        $array = Parser::parseClassName('my\class\Hello');
        
        $this->assertEquals('my', $array['namespace'][0]);
        $this->assertEquals('class', $array['namespace'][1]);
        $this->assertEquals('Hello', $array['className']);
    }
}