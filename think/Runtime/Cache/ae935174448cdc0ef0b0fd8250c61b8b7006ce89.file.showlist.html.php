<?php /* Smarty version Smarty-3.1.6, created on 2017-08-28 14:38:25
         compiled from "D:/wamp/www/think/Admin/View\Auth\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2492559a3b687f1cc03-35800154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae935174448cdc0ef0b0fd8250c61b8b7006ce89' => 
    array (
      0 => 'D:/wamp/www/think/Admin/View\\Auth\\showlist.html',
      1 => 1503902300,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2492559a3b687f1cc03-35800154',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_59a3b6880d868',
  'variables' => 
  array (
    'auth_info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59a3b6880d868')) {function content_59a3b6880d868($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="<?php echo @ADMIN_PUBLIC_PATH;?>
/css/mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{ background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：权限管理-》权限列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo @__CONTROLLER__;?>
/adg">【添加商品】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>权限名称</td>
                        <td>父权限id</td>
                        <td>控制器</td>
                        <td>方法</td>
                        <td>权限等级</td>
                        <td align="center">操作</td>
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['auth_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr id="product1">
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['role_name'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['fu_id'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['ctrl'];?>
</td>
                         <td><?php echo $_smarty_tpl->tpl_vars['v']->value['action'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['level'];?>
</td>
                        <!-- tp框架pathinfo方式传递get参数，按如下方式   -->
                        <td><a href="<?php echo @__CONTROLLER__;?>
/upd/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">修改</a><a href="javascript:;" onclick="delete_product(1)">删除</a></td>
                    </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            [1]
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>0<?php }} ?>