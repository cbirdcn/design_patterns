- demo说明

[源代码](https://learnku.com/docs/php-design-patterns/2018/Pool/1491)

工作池储存两个数组：已占用对象$occupied、空闲对象$free。并对外提供总对象数量count()。

请求进来。如果工作池中空闲对象数量不足，就new一个Worker对象进来。如果足够就从空闲对象数组pop一个出来

每次请求的对象都要从空闲对象数组或new的新对象得到的，都要转移或加入到$occupied中

如果请求占用对象完毕，不会直接清理对象，而是调用dispose()释放自己对对象的占用行为，把对象从$occupied转移到$free，下次获取对象就能拿到$free中的对象了。