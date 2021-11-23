<?php

namespace App\DesignPattern\Creational\FactoryMethod;

// 父工厂
interface LoggerParentFactory
{
    public function createLogger();
}