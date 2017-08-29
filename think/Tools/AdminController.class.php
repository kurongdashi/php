<?php

/* 
 * 所有后台控制器的自定义父类，为了方便给所有后台控制器，添加控制，或者限制
 */
namespace Tools;
use Think\Controller;
class AdminController extends Controller{
    function __construct() {
        parent::__construct();
    //        1、获取当前角色访问的控制器和方法
        $nowac=CONTROLLER_NAME.'-'.ACTION_NAME;
    //        2 查角色表，获取权限控制器列表
        $admin_user=session('admin_user');
        $admin_role_id=session('admin_role_id');
    //        没有登录后台，默认能访问的路径
        $default='Manager-login,Manager-verifyImg';
         //如果返回值有0 和false 则必须使用 === 而不能使用 == 因为 == 会把0当作false来处理
        if(empty($admin_user) && strpos($default, $nowac)===false){
        //     如果没有登录，且访问的路径不是上面允许的路径，则跳转到登陆页面
           echo "<script>window.top.location.href='/think/index.php/Admin/Manager/login'</script>";
           
        }
            $role_inf=D('role')->find($admin_role_id);
           //  3 当前角色可以访问的控制器方法
            $auth_ac=$role_inf['auth_ac'];
            //所有登录用户都可以访问的路径
            $allow_ac='Manager-login,Manager-logout,Manager-verifyImg,Manager-register,Index-left,Index-right,Index-head,Index-index';
            //用户的角色id为1 对应角色表中的超级管理员，拥有所有
            if(strpos($auth_ac,$nowac)===false && strpos($allow_ac, $nowac)===false && $admin_role_id!=1 ){
                // 1 角色权限不够 ，2 访问的路径也不在所以用户能访问的范围内 3 ，也不是超级管理员
                exit('没有访问权限');
            }
            
        }
            
}
