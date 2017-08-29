<?php

/* 
 * 多级命名空间，和空间引入
 */
namespace beiji\chaoyang\qunzhong;
const NAME='chaoyang';
function show(){
    echo 'welcome beiji';
}

namespace shanghai\pudong\waitan;
const NAME='fage';
function show(){
    echo 'welcome shanghai';
}

//频繁使用时为了避免每次都写空间名,引入空间
use  beiji\chaoyang\qunzhong ;
//引入后只需加上最后一级空间名，就可以访问
echo qunzhong\NAME;
qunzhong\show();
//直接不加子空间限制的话，走就近原则了
echo show();

