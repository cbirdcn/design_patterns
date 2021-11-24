- demo说明

[源代码](https://learnku.com/docs/php-design-patterns/2018/Builder/1488)

构建一个完整的车辆，需要按步骤进行。并且每种车辆的步骤和需要的组件可能不同。但是对客户端来说，只想要知道具体建造者类名，然后用(new Director())->build($concreteBuilder)就拿到实例。

对Builder来说，Interface规定创建一个具体车辆建造者，必须实现不同的三个过程：创建实例、分步骤为实例设置属性、返回实例。这样Director才可以按照固定顺序创建实例，返回实例。

由于不同的ConcreteBuilder会调用不同的实现，比如卡车需要6个轮子，小汽车只要6个。所以对Interface的实现是不同的，甚至会调用到不同对象的构造过程，比如汽车需要普通引擎，客车可能会用到卡车引擎。

所以还需要提供产品和组件类。产品包括车辆、卡车、汽车。其中，卡车、汽车从车辆Vehicle抽象类继承，抽象类规定了必须实现setData()方法用于set属性。此外具体产品类可以实现自己的逻辑，比如卡车的addEngine()可以获取卡车引擎、6个轮子，汽车可以在addDoors()方法的实现中调用自身的addTruckLib()方法添加后备箱（因为BuilderInterface中没有要求实现后备箱方法，所以汽车后备箱需要在其他方法中调用）