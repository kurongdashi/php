<?php

namespace Admin\Controller;

use Tools\AdminController;

class ManagerController extends AdminController {

    function login() {
        if ($_POST) {
            $ver = new \Think\Verify();
/*
 *     tp框架把verify生成的二维码已经保存到了session中，并且加密了，同时他还提供了
 *      校验二维码的方法，check($code);
 */     
            if ($ver->check($_POST['captcha'])) {
                $mg=D('admin');
                $cf=array(
                    'admin_user'=>$_POST['admin_user'],
                    'admin_pwd'=>$_POST['admin_pwd']
                );
               $info=$mg->where($cf)->find();
//               如果有返回实体数据，说明正确
               if($info){
//                   tp框架封装的session 、cookie
                   /*
                    * session(name,value) 设置
                    * session(name) 读取
                    * session（name,null） 将某个session清空
                    * session（null）清空全部
                    * cookie 同理
                    */
                   session('admin_role_id',$info['role_id']);
                   session('admin_user',$info['admin_user']);
                   session('admin_pwd',$info['admin_pwd']);
                   $this->redirect('Index/index');
                   echo '登录ok';
                   
               }else{
                   echo '用户名或密码错误';
               }
            } else {
                echo '验证码err';
            }
        }
            $this->display();
    }

    function register() {
        
    }
    function logout(){
        session(null);
        $this->redirect('login');
    }
    function verifyImg() {
        $cfg = array(
            'imageH' => '30',
            'imageW' => '120',
            'fontSize' => '15',
            'length' => '4',
            'fontttf' => '4.ttf'
        );
//        创建tp框架提供的生成二维码类
        $ver = new \Think\Verify($cfg);
        $ver->entry();
        
    }

}
