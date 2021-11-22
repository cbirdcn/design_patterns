<?php

namespace App\DesignPattern\Behavior\Observer;


class Test
{
    // 测试
    public function test(){
        $observer1 = new ObserverLevel();
        $observer2 = new ObserverPower();
        $publisher = new PublisherExp();
        $publisher->attach($observer1); // 将观察者添加到到发布者通知列表中
        $publisher->attach($observer2); // 将观察者添加到到发布者通知列表中

        // 发布者实例改变了数据：调用了Publisher实现类的__set()方法
        $publisher->exp = [
            "op" => "+",
            "point" => "100",
        ];
        dd($observer1->getLevelData());
    }

}