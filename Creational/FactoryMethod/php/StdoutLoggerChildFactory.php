<?php

namespace App\DesignPattern\Creational\FactoryMethod;

// 子工厂
class StdoutLoggerChildFactory implements LoggerParentFactory
{
    // 当前子工厂，同样的实现方法，可以调用不同的具体产品类。
    // 这样客户就能实现只需要知道子工厂名，就能调用同样的方法获取同样的具体产品类，并调用同样的实现方法生产产品了。
    public function createLogger()
    {
        return new StdoutLoggerConcreteProduct();
    }
}