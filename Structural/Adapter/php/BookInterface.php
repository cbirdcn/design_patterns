<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/24
 * Time: 1:44 PM
 */

namespace App\DesignPatterns\Structural\Adapter;

// 接口
// 过时的书籍接口，只支持普通书籍操作，无法支持电子书操作
interface BookInterface
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}