<?php

namespace App\DesignPattern\Creational\Pool;

// 工人对象：最终返回给客户端的对象
class StringReverseWorker
{
    /**
     * @var \DateTime
     */
    private $createdAt;

    public function __construct()
    {
        $this->createdAt = new \DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}