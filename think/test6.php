<?php

/* 
 * php的魔术方法：php中以__ 开头的方法，他们不需要显示调用，自动调用
 */
class Person{
    private $name='zhangsan';
    private $age='18';
//    获取属性，直接使用$this->name 魔术方法必须public
    function __get($name) {
        echo "__get";
        return $this->$name;
    }
    function __set($name, $value) {
         echo "__set";
        if(isset($this->$name)){
            $this->name=$value;
        }
    }
//    参数中赋值，当有传参数时，赋值不生效
    function show($num=10){
        echo $num;
    }
}

$p=new Person();
echo $p->age;
echo "<br>";
$p->name='boll';
echo $p->name;
echo "<br>";
$p->show();
echo "<br>";
$p->show(5);