<?php

namespace App\DesignPattern\Creational\FactoryMethod;

class Test
{
    public function testCanCreateStdoutLogging()
    {
        // 客户需要知道子工厂列表，每次实例化一个子工厂。
        // 不建议像简单工厂一样，外层封装一个Customer，用参数决定实例化哪个子工厂，因为不符合开闭原则。除非参数被固定写入到配置文件中。
        $loggerFactory = new StdoutLoggerChildFactory();
        // 所有子工厂有同样的方法生成不同的具体产品实例
        $logger = $loggerFactory->createLogger();
        // 对不同的具体产品实例，有同样的方法可以调用
        $logger->log("Stdout");
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new FileLoggerChildFactory(sys_get_temp_dir() . "/tmp.log");
        $logger = $loggerFactory->createLogger();
        $logger->log("File");
    }

}