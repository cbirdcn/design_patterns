<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/24
 * Time: 2:50 PM
 */

namespace App\DesignPatterns\Structural\DependencyInjection;


class Test
{
    public function testDependencyInjection()
    {
        // 创建需要注入的实例
        // 原项目地址：https://github.com/DesignPatternsPHP/DesignPatternsPHP
        $config = new DatabaseConfiguration('localhost', 3306, 'domnikl', '1234');
        // 注入实例
        $connection = new DatabaseConnection($config);
        dd($connection->getDsn());
    }

}