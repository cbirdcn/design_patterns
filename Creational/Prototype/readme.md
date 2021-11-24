## 原型模式（复用原型clone新对象）

- 简介

如果你有一个 GTK 窗口对象，该对象持有窗口相关的资源。你可能会想复制一个新的窗口，保持所有属性与原来的窗口相同，但必须是一个新的对象（因为如果不是新的对象，那么一个窗口中的改变就会影响到另一个窗口）。

相比正常创建一个对象 (new Foo () )，首先创建一个原型，然后克隆它会更节省开销。

> https://learnku.com/docs/php-design-patterns/2018/Prototype/1492#2e55ab

- 结构

![image](https://cdn.learnku.com/uploads/images/201803/19/1/jNhFZSU2j5.png)


- 举例

大数据量 (例如：通过 ORM 模型一次性往数据库插入 1,000,000 条数据) 。