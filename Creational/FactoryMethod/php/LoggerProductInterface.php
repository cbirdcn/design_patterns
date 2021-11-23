<?php

namespace App\DesignPattern\Creational\FactoryMethod;

// 产品接口
interface LoggerProductInterface
{
    public function log(string $message);
}