<?php

/* 
 * 类元素的引入，去掉限定名称
 */
namespace beiji\chaoyang\qunzhong;
class Person{
    var $name='qunzhong';
}

namespace shanghai\pudong\waitan;
class Person1{
    var $name='shanghai';
}

//频繁使用时为了避免每次都写空间名,引入空间 当使用类的时候可以直接引入类
//use  beiji\chaoyang\qunzhong ;//空间引入
use  beiji\chaoyang\qunzhong\Person;//类直接引入,如果引入类和当前就近类名一样报错

$p=new Person();
echo $p->name;

