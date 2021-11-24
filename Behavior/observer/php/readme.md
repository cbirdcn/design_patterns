- demo说明

假设有两个观察者同时受到某个事件中数据变化的影响，比如Exp+100后造成等级以及战斗力变更。

PublisherExp作为发布者，此发布者类需要维护一个观察者列表，支持增减观察者，保存可能涉及变更的数据。实例化一个发布者后，当调用了发布者的__set()方法改变了数据，就要立即以同步的方式向观察者列表中所有已添加的观察者发送数据变化。

观察者在在另一条时间线异步管理观察者的实例化和订阅、退订。当同步收到发布者的同步调用时，必须实现发布者调用的update()方法，通过update()传递来的参数得知数据变化，然后在观察者实力中做出具体逻辑操作，比如计算等级，计算战斗力。

当有新的观察者加入时，不需要改动其他观察者业务逻辑，只需要调用发布者实例的attach()，把自己加入到观察者列表中即可。

>注意：由于php的spl声明了SplObserver与SplSubject两个interface，所以Demo中直接make实现类即可

```
/**
 * The <b>SplObserver</b> interface is used alongside
 * <b>SplSubject</b> to implement the Observer Design Pattern.
 * @link http://php.net/manual/en/class.splobserver.php
 */
interface SplObserver  {

        /**
         * Receive update from subject
         * @link http://php.net/manual/en/splobserver.update.php
         * @param SplSubject $subject <p>
	 * The <b>SplSubject</b> notifying the observer of an update.
         * </p>
         * @return void 
         * @since 5.1.0
         */
        public function update (SplSubject $subject);

}

/**
 * The <b>SplSubject</b> interface is used alongside
 * <b>SplObserver</b> to implement the Observer Design Pattern.
 * @link http://php.net/manual/en/class.splsubject.php
 */
interface SplSubject  {

        /**
         * Attach an SplObserver
         * @link http://php.net/manual/en/splsubject.attach.php
         * @param SplObserver $observer <p>
	 * The <b>SplObserver</b> to attach.
         * </p>
         * @return void 
         * @since 5.1.0
         */
        public function attach (SplObserver $observer);

        /**
         * Detach an observer
         * @link http://php.net/manual/en/splsubject.detach.php
         * @param SplObserver $observer <p>
	 * The <b>SplObserver</b> to detach.
         * </p>
         * @return void 
         * @since 5.1.0
         */
        public function detach (SplObserver $observer);

        /**
         * Notify an observer
         * @link http://php.net/manual/en/splsubject.notify.php
         * @return void 
         * @since 5.1.0
         */
        public function notify ();

}
```