<?php

namespace Kenjis\PHPUnitVWTest;

class PHPUnitVWTestTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PHPUnitVWTest
     */
    protected $skeleton;

    protected function setUp()
    {
        parent::setUp();
        $this->skeleton = new PHPUnitVWTest;
    }

    public function testNew()
    {
        $actual = $this->skeleton;
        $this->assertInstanceOf('\Kenjis\PHPUnitVWTest\PHPUnitVWTest', $actual);
    }

    public function testException()
    {
        $this->setExpectedException('\Kenjis\PHPUnitVWTest\Exception\LogicException');
        throw new Exception\LogicException;
    }

//    public function testShouldBeFailed()
//    {
//        $this->assertEquals('expected', 'actual');
//    }
}
