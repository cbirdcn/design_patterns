<?php

namespace App\DesignPattern\Creational\Pool;

class Test
{
    // 注意：
    // php脚本环境下由于每次请求都会初始化、处理、清理所有对象，所以连接池只能出现在当前请求中，下次请求不可复用，这也就是说单例模式就够用了，没必要创建连接池。
    // php常驻内存时（比如swoole），请求完成不会清理对象，可以复用连接，可以创建连接池。

    // 检查两次Get是否能拿到同一个实例：no
    public function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker1->data = true;
        $worker2 = $pool->get();

        dd($pool->count());
        dd($worker1->data);
        dd($worker2->data); // undefined property error
    }

    // 检查释放占用的实例后再次获取能否拿到前面释放的实例：yes
    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker1->data = true;
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        dd($pool->count());
        dd($worker1);
        dd($worker2); // 不会报错：$worker1被闲置，再次get获取到的就是$worker1
    }

}