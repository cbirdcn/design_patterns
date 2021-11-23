<?php

namespace App\DesignPattern\Creational\FactoryMethod;

// 子工厂
class FileLoggerChildFactory implements LoggerParentFactory
{
    /**
     * @var string
     */
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }


    public function createLogger()
    {
        return new FileLoggerConcreteProduct($this->filePath);
    }
}