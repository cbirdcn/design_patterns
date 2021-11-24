<?php

namespace App\DesignPattern\Creational\Builder;

use App\DesignPattern\Creational\Builder\Parts\Vehicle;

// 具体建造者实现类：不同的车辆有不同的创建逻辑
class TruckConcreteBuilder implements BuilderInterface
{
    /**
     * @var Parts\Truck
     */
    private $truck;

    // 卡车需要初始化卡车对象
    public function createVehicle()
    {
        $this->truck = new Parts\Truck();
    }

    // 卡车只有两个门
    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Parts\Door());
        $this->truck->setPart('leftDoor', new Parts\Door());
    }

    // 卡车需要专门的引擎
    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Parts\Engine());
    }

    // 卡车需要6个轮子
    public function addWheel()
    {
        // front wheel: 前轮, rear wheel: 后轮
        $this->truck->setPart('wheel1', new Parts\Wheel());
        $this->truck->setPart('wheel2', new Parts\Wheel());
        $this->truck->setPart('wheel3', new Parts\Wheel());
        $this->truck->setPart('wheel4', new Parts\Wheel());
        $this->truck->setPart('wheel5', new Parts\Wheel());
        $this->truck->setPart('wheel6', new Parts\Wheel());
    }

    // 返回卡车对象
    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}