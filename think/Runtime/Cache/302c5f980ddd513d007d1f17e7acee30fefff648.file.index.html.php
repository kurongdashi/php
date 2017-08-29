<?php /* Smarty version Smarty-3.1.6, created on 2017-08-23 11:12:35
         compiled from "D:/wamp/www/think/Admin/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:15632599cf096cfe903-21705383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '302c5f980ddd513d007d1f17e7acee30fefff648' => 
    array (
      0 => 'D:/wamp/www/think/Admin/View\\Index\\index.html',
      1 => 1503457931,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15632599cf096cfe903-21705383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_599cf096d44e0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599cf096d44e0')) {function content_599cf096d44e0($_smarty_tpl) {?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <meta http-equiv=pragma content=no-cache />
        <meta http-equiv=cache-control content=no-cache />
        <meta http-equiv=expires content=-1000 />
        
        <title>管理中心 v1.0</title>
    </head>
    <frameset border=0 framespacing=0 rows="60, *" frameborder=0>
        <!--
         frameset的src不能用相对路径，因为当访问http://localhost/think/index.php/Admin/ ，路径时，默认走的是Index控制器index方法
          ./left.html 写法，会使frameset访问 http://localhost/think/index.php/Admin/left.html，所以需要器走控制器的方法来获取
        
        
        -->
        <frame name=head src="<?php echo @__CONTROLLER__;?>
/head" frameborder=0 noresize scrolling=no>
            <frameset cols="170, *">
                <frame name=left src="<?php echo @__CONTROLLER__;?>
/left.html" frameborder=0 noresize />
                <frame name=right src="<?php echo @__CONTROLLER__;?>
/right.html" frameborder=0 noresize scrolling=yes />
            </frameset>
    </frameset>
    <noframes>
    </noframes>
</html><?php }} ?>