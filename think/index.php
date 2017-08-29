<?php 
header("content-type:text/html;charset=utf-8");
// thinkphp 调试模式，加载所需的所有文件，加载资源多，错误提示友好
// 生产模式时，会把将一部分资源压缩到Runtime目录下的一个common~runtime文件中，不走tp框架中的convertion.php配置文件了
define('APP_DEBUG',true);

//1、通过pathinfo方式访问时，think框架会把当前访问的控制文件作为当前文件，来进行相对路径的寻找
//http://localhost/think/index.php/Home/Public/images/
//2、所以需要给静态资源的相对项目的绝对路径，绝对路径以/开头,表示当前服务器路径
define('PUBLIC_PATH','/think/Home/Public');
//后台public目录，路径
define('ADMIN_PUBLIC_PATH','/think/Admin/Public');

// 最后加载tp框架
include("../ThinkPHP/ThinkPHP.php");
