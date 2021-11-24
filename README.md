# design_patterns：设计模式与Demo

## 创建型模式

### 简单工厂模式SimpleFactory
- 实例化不同的抽卡类、活动类
- 切换不同的数据库连接

### 工厂方法模式FactoryMethod
- 实例化不同的抽卡类、活动类
- 切换不同的数据库连接

### 建造者模式Builder（生成器）
- 游戏中创建地图包括天空、地面、背景等组成部分
- 创建人物角色（新玩家或npc）包括人体、服装、装备等组成部分

### 单例模式Singleton
- 数据库连接（避免重复连接数据库）
- 单一日志对象logger
- 文件锁（应用中唯一锁）
- 全局唯一的日期时间类（不允许自己调用系统时间，只能通过日期时间类操作时间，比如获取当前时间、调整时间轴到昨天0点）
- 全局唯一ID生成器（一个具有自动编号主键的表可以有多个用户同时使用，但数据库中不允许出现主键重复，因此该主键编号生成器必须具备唯一性）

### 对象池模式Pool
- 数据库连接池
- 套接字连接池
- 线程池

## 结构型模式

### 适配器Adapter

### 门面Facade

## 行为型模式

### 观察者模式Observer
- 游戏任务进度更新
- 队友阵亡广播
