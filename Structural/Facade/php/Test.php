<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/24
 * Time: 2:50 PM
 */

namespace App\DesignPatterns\Structural\Facade;
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testComputerOn()
    {
        // phpunit测试替身：https://phpunit.readthedocs.io/zh_CN/latest/test-doubles.html

        /** @var OsInterface|\PHPUnit_Framework_MockObject_MockObject $os */
        // 仿造os实例
        $os = $this->createMock('App\DesignPatterns\Structural\Facade\OsInterface');
        // 期望调用方法，返回'Linux'
        $os->method('getName')
            ->will($this->returnValue('Linux'));
        // 仿造生成器，为特定方法禁用__autoload()
        $bios = $this->getMockBuilder('App\DesignPatterns\Structural\Facade\BiosInterface')
            ->setMethods(['launch', 'execute', 'waitForKeyPress'])
            ->disableAutoload()
            ->getMock();
        // 期望bios实例只会以$os实例作为参数运行launch方法一次
        $bios->expects($this->once())
            ->method('launch')
            ->with($os);

        // 门面类实例化
        $facade = new Facade($bios, $os);
        // 简单的门面调用
        $facade->turnOn();
        // 门面调用不会阻止你对原始接口方法的访问
        // 比如门面中没有调用的getName()方法也可以单独访问。
        $this->assertEquals('Linux', $os->getName());

        /**
         * 测试结果：
         * #!/usr/bin/env php
        PHPUnit 6.5.14 by Sebastian Bergmann and contributors.

        .                                                                   1 / 1 (100%)

        Time: 54 ms, Memory: 18.00MB

        OK (1 test, 2 assertions)

        Process finished with exit code 0
        */

    }


}