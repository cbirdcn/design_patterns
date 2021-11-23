<?php

namespace App\DesignPattern\Create\SimpleFactory;

class Test
{
    // 使用时，new一个客户出来，不必关心工厂类、产品类和具体产品类是如何实现的，相当于屏蔽了工厂制造产品过程，直接getDataBase就拿到了产品并开始使用了。
    public function test() {
        $customer = new Customer();
        // 获取具体产品实例
        $db = $customer->getDataBase("SqlServer");
        $sql = "show databases";
        // 调用具体产品类的getOne()
        $data = $db->getOne($sql);
        return $data;
    }
}