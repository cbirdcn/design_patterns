- demo说明

[源代码](https://www.cnblogs.com/wilburxu/p/6086394.html)

客户端想通过一个参数（数据库驱动名称）就获取到一个数据库连接实例，然后用这个实例调用getOne($sql)方法就拿到数据。

现在有一个抽象的品类class叫做DataBaseProduct，再有两个具体产品实现类，叫做Mysql和SqlServer类。他们都实现了抽象类要求的getOne()方法。

另外有一个工厂类DatabaseFactory，获取参数（数据库驱动名称），并返回具体产品实现类的实例。

这样再加上一个对客户端完全隐藏工厂类名字的Customer类。

就可以实现，new 一个Customer，提供一个数据库驱动名称给到customer。customer将参数给工厂类，工厂类实例化具体产品类，并返回给customer。这样customer就用一个参数就拿到了数据库连接实例，接下来直接getOne()就可以了。