<?php

namespace App\DesignPattern\Creational\Builder;

use App\DesignPattern\Creational\Builder\Parts\Vehicle;

class CarConcreteBuilder implements BuilderInterface
{
    /**
     * @var Parts\Car
     */
    private $car;

    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('leftDoor', new Parts\Door());
        // 应该再加两个门
        // trunkLid: 后备箱
        $this->car->setPart('trunkLid', new Parts\Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheelLF', new Parts\Wheel());
        $this->car->setPart('wheelRF', new Parts\Wheel());
        $this->car->setPart('wheelLR', new Parts\Wheel());
        $this->car->setPart('wheelRR', new Parts\Wheel());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}