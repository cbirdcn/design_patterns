<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/24
 * Time: 12:11 PM
 */

namespace App\DesignPattern\Creational\Prototype;

// 具体原型
class FooBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Foo';

    public function __clone()
    {
        // 添加每个对象初始化时需要满足的属性，每次克隆就克隆这些属性
    }
}