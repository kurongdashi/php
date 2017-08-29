<?php

/* 
 * 当前空间类和引入类元素的名字冲突，别名机制解决
 */
namespace beiji\chaoyang\qunzhong;
class Person{
    var $name='qunzhong';
}

namespace shanghai\pudong\waitan;
class Person{
    var $name='shanghai';
}

//频繁使用时为了避免每次都写空间名,引入空间 当使用类的时候可以直接引入类(其他元素不能直接引入)

use  beiji\chaoyang\qunzhong\Person as hello ;//类直接引入,加上别名
$h=new hello();
echo $h->name;
