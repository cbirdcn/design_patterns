<?php
/**
 * Created by PhpStorm.
 * User: gaea
 * Date: 2021/11/24
 * Time: 1:47 PM
 */

namespace App\DesignPatterns\Structural\Adapter;

/**
 * 这里是一个适配器. 注意他实现了 BookInterface,
 * 目的是用旧接口的方法访问新接口的实现。这样客户端就不需要修改调用的旧方法，只需要修改下实例化的类名。
 */
class EBookAdapter implements BookInterface
{
    /**
     * @var EBookInterface
     */
    protected $eBook;

    /**
     * @param EBookInterface $eBook
     */
    // 旧接口仍然继续用，这里只提供新接口的转换
    // 关键：参数为新接口的实例，这样就把新接口的实例，对外转换成了适配器的实例（也就是和旧接口命名、返回都一致的实例）
    public function __construct(EBookInterface $eBook)
    {
        $this->eBook = $eBook;
    }

    /**
     * 这个类使接口进行适当的转换.
     */
    // 让客户端用旧方法，调用新接口实例的新方法
    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    /**
     * 注意这里适配器的行为： EBookInterface::getPage() 将返回两个整型，除了 BookInterface
     * 仅支持获得当前页，所以我们这里适配这个行为
     *
     * @return int
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }
}