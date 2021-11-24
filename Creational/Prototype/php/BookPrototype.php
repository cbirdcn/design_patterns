<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/24
 * Time: 12:11 PM
 */

namespace App\DesignPattern\Creational\Prototype;

// 原型抽象类
abstract class BookPrototype
{
    /**
     * @var string
     */
    //
    protected $title;

    /**
     * @var string
     */
    protected $category;

    // 必须实现__clone()方法，用于对象clone

    abstract public function __clone();

    // setter和getter

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
}