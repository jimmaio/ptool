# 状态模式

状态模式当一个对象的内在状态改变时允许改变其行为，这个对象看起来像是改变了其类。状态模式主要解决的是当控制一个对象状态的条件表达式过于复杂时的情况。把状态的判断逻辑转移到表示不同状态的一系列类中，可以把复杂的判断逻辑简化。

## 角色&责任
          
 上下文环境：它定义了客户程序需要的接口并维护一个具体状态角色的实例，将与状态相关的操作委托给当前的具体对象来处理；
 
 抽象状态：定义一个接口以封装使用上下文环境的的一个特定状态相关的行为；
 
 具体状态：实现抽象状态定义的接口；
 
 
## 适用场景     
1.一个对象的行为取决于它的状态，并且它必须在运行时刻根据状态改变它的行为

2.一个操作中含有庞大的多分支结构，并且这些分支决定于对象的状态
           
## 优缺点

优点

1.状态模式将与特定状态相关的行为局部化，并且将不同状态的行为分割开来；

2.所有状态相关的代码都存在于某个ConcereteState中，所以通过定义新的子类很容易地增加新的状态和转换；

3.状态模式通过把各种状态转移逻辑分不到State的子类之间，来减少相互间的依赖；
           
缺点

导致较多的ConcreteState子类     