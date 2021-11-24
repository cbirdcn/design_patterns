- demo说明

[源代码](https://learnku.com/docs/php-design-patterns/2018/Singleton/1494)

多次实例化只能得到同一个实例，由于getInstance()和$instance都是static，所以下一次实例化直接保留instance属性的变化。