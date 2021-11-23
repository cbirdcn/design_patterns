<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/23
 * Time: 3:58 PM
 */

namespace App\DesignPattern\Creational\Builder;

// 建造者父接口：规定具体建造者需要实现的创建、设置属性、返回实例，这三个过程。
interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addEngine();

    public function addDoors();

    public function getVehicle();
}