<?php

namespace App\DesignPattern\Creational\Pool;

// 工作池：实现自标准模板Countable，可以调用count()获取计数方法
class WorkerPool implements \Countable
{
    /**
     * @var StringReverseWorker[]
     */
    // 私有数组：已占用对象池
    private $occupiedWorkers = [];

    /**
     * @var StringReverseWorker[]
     */
    // 私有数组：空闲对象池
    private $freeWorkers = [];

    // 获取一个空闲对象
    public function get(): StringReverseWorker
    {
        // 如果有空闲对象数量为0，要new一个对象。否则直接从已经new过的空闲对象数组中pop一个出来即可。
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }
        // 获取的这个对象要加入到已占用对象池数组。
        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    // 释放一个已占用对象到空闲对象数组中
    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    // 获取当前已占用+空闲连接总数
    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}
