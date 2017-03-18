<?php
namespace DesignPattern\Structure\Facade;


use PHPUnit\Framework\TestCase;

use DesignPattern\Structure\Facade\Facade as Computer;

class Test extends TestCase
{

    public function getComputer()
    {
        $bios = $this->getMockBuilder('DesignPattern\Structure\Facade\IBios')
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();
        $os = $this->getMockBuilder('DesignPattern\Structure\Facade\IOs')
            ->setMethods(['getName'])
            ->disableAutoload()
            ->getMock();
        $bios->expects($this->once())
            ->method('launch')
            ->with($os);
        $os->expects($this->once())
            ->method('getName')
            ->will($this->returnValue('Linux'));


        return [
            [ new Computer($bios, $os), $os]
        ];
    }

    /**
     * @dataProvider getComputer
     */
    public function testComputerOn(Computer $facade, IOs $os)
    {
        // interface is simpler :
        $facade->turnOn();
        // but I can access to lower component
        $this->assertEquals('Linux', $os->getName());
    }

}