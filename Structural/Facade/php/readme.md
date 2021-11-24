- demo说明

[源代码](https://designpatternsphp.readthedocs.io/zh_CN/latest/Structural/Facade/README.html)

Linux主机，有两个interface，Bios和Os，两者有些联系但是又不紧密。开机时bios启动后需要launch os。关机时需要先停止os运行再对Bios断电。

现在有两个动作发生：按下主机开机、按下os关机按钮

开机时，需要Bios启动后，传入Os实例，Bios处理Os登录过程。开机完成。

关机时，Os停止运行，Bios断电。关机完成。

添加的门面类，通过注入两个Interface的实例，用turnOn和turnOff两个方法，把两个实例的各种调用过程都完成了。

对客户端来说，比较简单。但是门面类不会做方法内部操作，如果需要变更方法内容，需要去Interface和实现中修改。

门面类没有阻挡客户端对Interface中任何方法的调用，所以不用门面也可以调用。

- 注意

laravel中的Facades主要用来实现复杂对象的静态访问
[link]https://learnku.com/docs/laravel/5.5/facades/1291