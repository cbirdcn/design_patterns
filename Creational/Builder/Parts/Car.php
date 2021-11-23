<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/23
 * Time: 4:01 PM
 */

namespace App\DesignPattern\Creational\Builder\Parts;


class Car extends Vehicle
{

    // 可以添加自己特有的东西，但是抽象类Vehicle中没定义的方法要被规定实现的方法调用，否则无法被Director设置参数。
    // public function addTruckLid(){}
}