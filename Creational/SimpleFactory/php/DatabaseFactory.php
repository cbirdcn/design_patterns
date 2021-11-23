<?php

namespace App\DesignPattern\Create\SimpleFactory;

/**
 * 工厂类：
 * 给工厂传入参数，new一个具体产品实例并返回
*/
class DatabaseFactory
{
    static function createDataBase($type) {
        switch ($type) {
            case "SqlServer":
                return new SqlServerConcreteProduct();
            case "MySql":
                return new MySqlConcreteProduct();
            default:
                return null;
                break;
        }
    }
}
