<?php /* Smarty version Smarty-3.1.6, created on 2017-08-24 15:46:02
         compiled from "D:/wamp/www/think/Admin/View\Goods\adg.html" */ ?>
<?php /*%%SmartyHeaderCode:28115599ce35bcdf501-55215170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3630d4d8369b5b31e5c4963de05abac3f6ff602f' => 
    array (
      0 => 'D:/wamp/www/think/Admin/View\\Goods\\adg.html',
      1 => 1503559801,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28115599ce35bcdf501-55215170',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_599ce35bdf0c0',
  'variables' => 
  array (
    's_category_info' => 0,
    '_v' => 0,
    's_brand_info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_599ce35bdf0c0')) {function content_599ce35bdf0c0($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>添加商品</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8">
        <link href="<?php echo @ADMIN_PUBLIC_PATH;?>
/css/mine.css" type="text/css" rel="stylesheet">
    </head>

    <body>

        <div class="div_head">
            <span>
                <span style="float:left">当前位置是：商品管理-》添加商品信息</span>
                <span style="float:right;margin-right: 8px;font-weight: bold">
                    <a style="text-decoration: none" href="<?php echo @__CONTROLLER__;?>
/showlist">【返回】</a>
                </span>
            </span>
        </div>
        <div></div>

        <div style="font-size: 13px;margin: 10px 5px">
            <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
            <table border="1" width="100%" class="table_a">
                <tr>
                    <td>商品名称</td>
                    <td><input type="text" name="f_goods_name" /></td>
                </tr>
                <tr>
                    <td>商品分类</td>
                    <td>
                        <select name="f_goods_category_id">
                            <option value="0">请选择</option>
                            <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['s_category_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_v']->value['category_name'];?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>商品品牌</td>
                    <td>
                        <select name="f_goods_brand_id">
                            <option value="0">请选择</option>
                            <?php  $_smarty_tpl->tpl_vars['_v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_v']->_loop = false;
 $_smarty_tpl->tpl_vars['_k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['s_brand_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_v']->key => $_smarty_tpl->tpl_vars['_v']->value){
$_smarty_tpl->tpl_vars['_v']->_loop = true;
 $_smarty_tpl->tpl_vars['_k']->value = $_smarty_tpl->tpl_vars['_v']->key;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['_v']->value['brand_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['_v']->value['brand_name'];?>
</option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>商品价格</td>
                    <td><input type="text" name="f_goods_price" /></td>
                </tr>
                <tr>
                    <td>商品图片</td>
                    <td><input type="file" name="f_goods_image" /></td>
                </tr>
                <tr>
                    <td>商品详细描述</td>
                    <td>
                        <textarea name="f_goods_introduce"></textarea>
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="添加">
                    </td>
                </tr>  
            </table>
            </form>
        </div>
    </body>
</html><?php }} ?>