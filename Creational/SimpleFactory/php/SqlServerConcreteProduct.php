<?php

namespace App\DesignPattern\Create\SimpleFactory;

/**
 * 产品类（包含品名类与具体产品类）：
 * 具体产品实现品类的抽象方法，每个具体产品有不同的实现
 * 由于不同框架中可能无法支持同一个类文件中写多个class，所以最好拆分
*/

// 品类只提供抽象类、抽象方法。举例：按钮
//abstract class DataBaseProduct
//{
//    // 获取一条数据的方法，要求所有具体产品类都必须实现此方法
//    abstract function getOne($sql);
//}


// 具体产品1，继承品类。举例：方形按钮
class SqlServerConcreteProduct extends DataBaseProduct
{
    function __construct()
    {
        $connect = "SqlServer 连接方法操作 （腾讯云服务器）";
        return $connect;
    }

    // 必须实现供品类调用的产品方法
    public function getOne($sql)
    {
        return "查询后返回数据结果";
    }

}


//// 具体产品2。举例：圆形按钮
//class MySqlConcreteProduct extends DataBaseProduct
//{
//    function __construct(){
//        $connect = "MySql 连接方法操作 （阿里云服务器）";
//        return $connect;
//   }
//
//    function getOne($sql){
//        return "查询后返回数据结果";
//    }
//}