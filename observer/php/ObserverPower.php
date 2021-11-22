<?php

namespace App\DesignPattern\Behavior\Observer;


/**
 * 观察者，响应发布者对update()的同步调用
 * Class ObserverPower
 * @package App\Behavior
 */
class ObserverPower implements \SplObserver
{
    // 私有成员变量包含受到影响的数据
    private $changedData = [];

    public function update (\SplSubject $subject){
        // 克隆赋值与引用赋值：https://www.huaweicloud.com/articles/13641504.html
        // =clone是对象的值赋值，=是对象的引用赋值
        $this->changedData []= clone $subject;
        $this->doSomethingWithChangedData();
    }

    public function getChangedData(){
        return $this->changedData;
    }

    public function doSomethingWithChangedData(){
        return $this->changedData;
    }

}