<?php

/* 
 * 当前空间,公共空间，include引入影响
 */
namespace a;
const NAME='a kongjian';

include 'test5-1.php';//b的引入对当前空间不产生影响

//访问公共空间需要加 \
 echo \NAME;
 echo '<br>';
//如果不加 \ 则，优先找本空间的元素，如果找不到，就去找公共空间的元素
 echo NAME;
