<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/22
 * Time: 4:52 PM
 */

namespace App\DesignPatterns\Structural\Adapter;

class Test
{
    public function testCanTurnPageOnBook()
    {
        // 旧接口实例的操作过程不变
        $book = new Book();
        $book->open();
        $book->turnPage();
        dd($book->getPage()); // 2
    }

    // 目的是能用旧接口的方法访问新接口
    public function testCanTurnPageOnKindleLikeInANormalBook()
    {
        // 新接口的方法名、类名、实现、返回值都有变化。
        // 先用新实现类实例化一个新接口的实例
        $kindle = new Kindle();
        // 将新接口实例作为参数传入适配器，适配器就能将此实例转换成旧接口的实例。
        $book = new EBookAdapter($kindle);
        // 就可以对转换出的旧接口实例，进行旧方法的调用了。适配器内部已经完成了调用转换
        $book->open();
        $book->turnPage();
        // 新接口的返回值也会在适配器中转换成和旧接口一致的返回
        dd($book->getPage()); // 2
    }

}