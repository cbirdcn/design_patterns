<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/24
 * Time: 1:47 PM
 */

namespace App\DesignPatterns\Structural\Adapter;

// 新增加的电子书接口，与过时的书籍接口完全不同（一般是命名不同）
interface EBookInterface
{
    public function unlock();

    public function pressNext();

    /**
     * 返回当前页和总页数，像 [10, 100] 是总页数100中的第10页。
     *
     * @return int[]
     */
    public function getPage(): array;
}
