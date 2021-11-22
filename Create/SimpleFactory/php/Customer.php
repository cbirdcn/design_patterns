<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/22
 * Time: 4:52 PM
 */

namespace App\DesignPattern\Create\SimpleFactory;
/**
 * 客户给工厂传入参数获取具体产品实例
 * 使用时直接new Customer，对外屏蔽工厂制造产品过程
 */
class Customer
{
    private $database;

    function getDataBase($type) {
        return $this->database = DatabaseFactory::createDataBase($type);
    }
}

