<?php

namespace App\DesignPattern\Creational\FactoryMethod;

// 具体产品实现类1
class StdoutLoggerConcreteProduct implements LoggerProductInterface
{
    // 实现方法
    public function log(string $message)
    {
        echo $message;
    }
}