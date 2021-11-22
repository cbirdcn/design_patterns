<?php

namespace App\DesignPattern\Behavior\Observer;


/**
 * 观察者，响应发布者对update()的同步调用
 * Class ObserverLevel
 * @package App\Behavior
 */
class ObserverLevel implements \SplObserver
{
    // 私有成员变量包含受到影响的数据
    private $subjectData = [];
    // 玩家当前等级数据，可能是从db或其他存储层获得，这里简单设置为0
    private $levelData = [
        "level" => 0,
    ];

    public function update (\SplSubject $subject){
        $this->subjectData = $subject->getData();
        $this->changeLevel();
    }

    public function getChangedData(){
        return $this->subjectData;
    }

    public function getLevelData(){
        return $this->levelData;
    }

    public function changeLevel(){
        switch ($this->subjectData->eventType){
            case 10000:
                $this->calcLevel($this->subjectData->data);
                break;
        }
    }

    public function calcLevel($data){
        switch ($data["exp"]["op"]){
            case "+":
                $this->levelData["level"] += $data["exp"]["point"] / 10;
                break;
        }
    }



}