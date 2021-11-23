<?php

namespace App\DesignPattern\Creational\Builder\Parts;

/**
 * production vehicle Parts - Wheel
 */
class Wheel{}

/**
 * production vehicle Parts - Engine
 */
class Engine{}

/**
 * production vehicle Parts - Door
 */
class Door{}

// 抽象类：车辆。车辆产品需要继承车辆父类，可以实现自己的初始化、set过程。
// 这里偷懒了，子类完全继承了setPart()，没有自己的逻辑。
abstract class Vehicle
{
    /**
     * @var object[]
     */
    private $data = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, $value)
    {
        $this->data[$key] = $value;
    }
}