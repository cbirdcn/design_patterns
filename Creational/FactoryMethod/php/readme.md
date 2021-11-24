- demo说明

[源代码](https://learnku.com/docs/php-design-patterns/2018/FactoryMethod/1489)

产品类分成父产品接口LoggerProductInterface和具体产品实现类StdoutLoggerConcreteProduct和FileLoggerConcreteProduct。

两个具体产品实现类都要根据父接口要求的log($msg)方法，实现自己的逻辑。

LoggerParentFactory是父工厂接口，要求实现createLogger()，也就是实例化一个LoggerProduct。

StdoutLoggerChildFactory是子工厂，是父工厂的实现类。实现createLogger的过程是实例化一个对应的具体产品实例StdoutLoggerConcreteProduct。

FileLoggerChildFactory和StdoutLoggerChildFactory类似，都是子工厂。

需要客户端或配置文件能记住子工厂列表，实例化时需要调用子工厂的createLogger()方法得到一个具体产品的实例，然后调用log($msg)实现功能