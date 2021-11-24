<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/24
 * Time: 12:11 PM
 */

namespace App\DesignPattern\Creational\Prototype;

class BarBookPrototype extends BookPrototype
{
    /**
     * @var string
     */
    protected $category = 'Bar';

    public function __clone()
    {
    }
}