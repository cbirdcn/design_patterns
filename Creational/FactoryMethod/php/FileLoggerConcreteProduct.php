<?php

namespace App\DesignPattern\Creational\FactoryMethod;

// 具体产品实现类2
class FileLoggerConcreteProduct implements LoggerProductInterface
{
    /**
     * @var string
     */
    private $filePath;

    // 支持不同的初始化方式
    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    // 实现方法
    public function log(string $message)
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}