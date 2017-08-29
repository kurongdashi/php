<?php

//数据库的设计
/*
 *  1、权限表
 *  tk_auth
 *  商品管理：商品添加、商品列表、商品修改
 *  订单管理：订单查询、订单列表、订单打印
 *  权限管理：管理员列表、权限列表、角色列表
 * 
 *  商品管理表为例：c controller a action path fu_id-id level:顶级权限从0 开始
 *  id name fu_id c a path level
 *  三个大权限模块
 *   insert  into tk_auth values(101,'商品管理','0','','','101',0);
 *   insert  into tk_auth values(102,'订单管理','0','','','102',0);
 *   insert  into tk_auth values(103,'订单管理','0','','','103',0);
 * 
 *   大权限模块下的子模块
 *   insert  into tk_auth values(104,'商品添加','101','Goods','adg','101-104',1);
 *   insert  into tk_auth values(105,'商品列表','101','Goods','showlist','101-105',1);
 *   insert  into tk_auth values(106,'商品修改','101','Goods','modify','101-106',1);
 *  
 *  2、角色
 *  经理：
 *  tk_role
 *  id name auth_ids ac ac是为了用户访问时做过滤权限而设置字段
 *  insert into values(50,'经理','101,104,105','Goods-showlist');
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 */

