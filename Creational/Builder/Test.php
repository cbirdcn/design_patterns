<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/22
 * Time: 4:52 PM
 */

namespace App\DesignPattern\Creational\Builder;

class Test
{
    public function testCanBuildTruck()
    {
        // 目的：构建一个完整的车辆，需要按步骤进行。并且每种车辆的步骤和需要的组件可能不同。
        // 创建一个具体车辆建造者，必须实现不同的三个过程：创建实例、分步骤为实例设置属性、返回实例。
        $truckBuilder = new TruckConcreteBuilder();
        // Director按照固定顺序创建实例：创建实例、分步骤为实例设置属性、返回实例。
        // 不同的ConcreteBuilder会调用不同的实现，比如卡车需要6个轮子，小汽车只要6个。得到的实例中，属性就是不同的。
        $newVehicle = (new Director())->build($truckBuilder);
        // 拿到新的实例后，就是一个新的建造者。比如一个新角色、一个新npc等
        dd($newVehicle);
        /**
        Truck {#2086 ▼
            -data: array:9 [▼
                "rightDoor" => Door {#2087}
                "leftDoor" => Door {#2088}
                "truckEngine" => Engine {#2089}
                "wheel1" => Wheel {#2090}
                "wheel2" => Wheel {#2091}
                "wheel3" => Wheel {#2092}
                "wheel4" => Wheel {#2093}
                "wheel5" => Wheel {#2094}
                "wheel6" => Wheel {#2095}
            ]
        }
         *
        */
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarConcreteBuilder();
        $newVehicle = (new Director())->build($carBuilder);
        dd($newVehicle);
    }
}