<?php

namespace Admin\Controller;

use Tools\AdminController;
class IndexController extends AdminController{
    function  head(){
        $this->display();
    }
    function left(){
//        获取session中的角色
        $admin_role_id=session('admin_role_id');
//        查询这个角色的info
        $admin_role_info=D('role')->find($admin_role_id);
//        获取角色拥有的权限ids
        $admin_role_auth_ids=$admin_role_info['role_auth_ids'];
        
        if($admin_role_auth_ids==0){
//            admin登录查询
        $auth_infoA=D('auth')->where("level=0")->select();
        $auth_infoB=D('auth')->where("level=1")->select();
        
        }else{
//        普通管理员登录查询权限ids对应的权限
        $auth_infoA=D('auth')->where("level=0 and id in($admin_role_auth_ids)")->select();
        $auth_infoB=D('auth')->where("level=1 and id in($admin_role_auth_ids)")->select();
        }
        
        $this->assign('auth_infoA',$auth_infoA);
        $this->assign('auth_infoB',$auth_infoB);
//        dump($auth_infoB);
        $this->display();
    }
    function right(){
        $this->display();
    }
    function index(){
//        tp框架提供如下7个常量
//        '/think/index.php/Admin'
        
//        dump(__MODULE__);
//        /think/index.php/Admin/Index/index
//        dump(__ACTION__);
//        /think/index.php/Admin/Index
//        dump(__CONTROLLER__);
        
        
        $this->display();
                
    }
}
