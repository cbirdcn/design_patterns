<?php

namespace App\DesignPattern\Creational\Singleton;

// 单例类：不可向下继承
final class Singleton
{
    /**
     * @var Singleton
     */
    // 私有静态的实例变量
    private static $instance;

    /**
     * 通过懒加载获得实例（在第一次使用的时候创建）
     */
    // 共有静态获取实例方法：对外只能通过getInstance()获取静态私有实例
    // 多次获取到同一个实例
    public static function getInstance(): Singleton
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    // 下面都是避免被特殊方法创建多个实例的方法

    /**
     * 不允许从外部调用以防止创建多个实例
     * 要使用单例，必须通过 Singleton::getInstance() 方法获取实例
     */
    private function __construct()
    {
    }

    /**
     * 防止实例被克隆（这会创建实例的副本）
     */
    private function __clone()
    {
    }

    /**
     * 防止反序列化（这将创建它的副本）
     */
    private function __wakeup()
    {
    }
}