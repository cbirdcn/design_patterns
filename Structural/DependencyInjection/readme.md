## 依赖注入模式（在调用者中注入被调用者通过构造器/方法实现的实例）

- 动机

DatabaseConfiguration 被注入 DatabaseConnection 并获取所需的 $config 。如果没有依赖注入模式，要在DatabaseConnection中创建configuration。这对测试和扩展来说很不好。

- 简介

依赖注入模式：依赖注入（Dependency Injection）是控制反转（Inversion of Control）的一种实现方式。要实现控制反转，通常的解决方案是将创建被调用者实例的工作交由 IoC 容器来完成，然后在调用者中注入被调用者（通过构造器 / 方法注入实现），这样我们就实现了调用者与被调用者的解耦，该过程被称为依赖注入。

> https://designpatternsphp.readthedocs.io/zh_CN/latest/Structural/DependencyInjection/README.html

- 结构

![image](https://designpatternsphp.readthedocs.io/zh_CN/latest/_images/uml29.png)
