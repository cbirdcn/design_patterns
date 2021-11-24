<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/22
 * Time: 4:52 PM
 */

namespace App\DesignPattern\Creational\Prototype;

class Test
{

    public function testCanGetFooBook()
    {
        // 初始化两个具体原型实例，以后的对象都在此基础上克隆
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        $res = [
            "Foo" => [],
            "Bar" => [],
        ];

        for ($i = 0; $i < 10; $i++) {
            // 相比正常创建一个对象 (new Foo () )，首先创建一个原型，然后克隆它会更节省开销。
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No. ' . $i);
            $res ["Foo"][]= $book->getTitle();
        }

        for ($i = 0; $i < 5; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No. ' . $i);
            $res ["Bar"][]= $book->getTitle();
        }

        dd($res);

        /**
         * array:2 [▼
        "Foo" => array:10 [▼
        0 => "Foo Book No. 0"
        1 => "Foo Book No. 1"
        2 => "Foo Book No. 2"
        3 => "Foo Book No. 3"
        4 => "Foo Book No. 4"
        5 => "Foo Book No. 5"
        6 => "Foo Book No. 6"
        7 => "Foo Book No. 7"
        8 => "Foo Book No. 8"
        9 => "Foo Book No. 9"
        ]
        "Bar" => array:5 [▼
        0 => "Bar Book No. 0"
        1 => "Bar Book No. 1"
        2 => "Bar Book No. 2"
        3 => "Bar Book No. 3"
        4 => "Bar Book No. 4"
        ]
        ]
         */
    }

}