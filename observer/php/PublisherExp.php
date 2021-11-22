<?php

namespace App\DesignPattern\Behavior\Observer;


/**
 * 发布者维护一个观察者列表，
 * 当对象发生变化时通知Publisher。
 * Class PublisherExp
 * @package App\Behavior
 */
class PublisherExp implements \SplSubject
{
    // 维护事件类型列表
    const EventExpSet = 10000;

    // 私有成员变量包含可能受到影响的数据，数据结构按需求自定义
    private $data = null;
    private $eventType = self::EventExpSet;

    // 观察者列表
    private $observers;

    public function __construct()
    {
        // SplObjectStorage实现类提供了一个从对象到数据的映射，或者忽略数据只是一个对象集。
        // 提供了attach、detach、serialize、getInfo、setInfo等方法管理观察者对象
        $this->observers = new \SplObjectStorage();
    }

    // 添加观察者
    public function attach (\SplObserver $observer){
        $this->observers->attach($observer);
    }

    // 撤销观察者
    public function detach (\SplObserver $observer){
        $this->observers->detach($observer);
    }

    // 对所有观察者发出通知
    public function notify (){
        foreach ($this->observers as $observer){
            // 观察者必须实现update()，传入$this，就可以让观察者拿到整个发布者对象（\SplSubject对象 $subject）。
            // java：如果要传递其他参数的话，可以用(const Entity& entity, Event event)，参数1：发生变化的实例指针，参数2：事件类型（如果更复杂可能需要在notify()中传入事件类型）
            // php：interface中规定了update的参数一定是SplSubject $subject，所以只能把所有数据都放到$this中，比如data和eventType
            $observer->update($this);
        }
    }

    // 发生事件时，改变数据，并对观察者发出通知
    public function __set($key, $value){
        $this->data[$key] = $value;
        $this->notify();
    }

    public function getData(){
        $obj = new \stdClass();
        $obj->data = $this->data;
        $obj->eventType = $this->eventType;
        return $obj;
    }

    public function somethingChanged(){

    }

}