<?php

namespace App\DesignPattern\Creational\Singleton;

class Test
{
    public function test() {
        // 单例类不支持new、clone、__construct()没有任何内容，只能通过getInstance()创建实例。
        // 并且多次创建的实例是同一个实例，原因在于成员变量$instance和成员方法getInstance()都是静态的，全局唯一。
        // 所以一个客户端多次创建实例时，拿到同一个实例，并且保存了同一个实例修改过的属性
        $firstCall = Singleton::getInstance();
        // 简单修改实例属性（实际上应该在Singleton中加入getter、setter）
        $firstCall->data = true;
        $secondCall = Singleton::getInstance();
        dd($secondCall);
    }
}