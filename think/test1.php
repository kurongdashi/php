<?php

/* 
 * php命名空间的解释.（空间统一使用反斜杠 ）\
 */
//开启一个命名空间(必须在所有元素之前定义)，空间下面的类，const常量，function方法均是其元素
namespace space1;
class Person{
    var $name='张三丰';
//    常量不需要$
    const NAME='武当掌门';
}
//const 可以在类里面和外面定义常量
const NAME='张无忌';
function show(){
        echo 'hello';
}
//----开启另一个namespace--------------------
namespace space2;
class Person{
    var $name='金毛狮王';
    const NAME='明教';
}
const NAME='谢逊';
function show(){
    echo 'world';
}
//调用时，如果没有加限制条件默认就近原则调用
header("content-type:text/html;charset=utf-8");
show();
$p=new Person();
echo $p->name;
echo $p::NAME;
echo '<br>';
//使用条件命名空间下的元素
\space1\show();
$p=new \space1\Person();
echo \space1\NAME;
echo $p->name;
echo $p::NAME;
var_dump($p);