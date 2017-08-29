<?php 
namespace Home\Controller;

use Think\Controller;
class UserController extends Controller{
	function login(){
		// 1、调用模板，如果没有参数，模板名默认和方法名一样
		// 2、模板在View文件夹下创建控制器前缀的文件夹，在里面创建对应的模板文件
		// 3、默认目标路径 View/User/login.html，安照这个访问规则，可以访问其他文件夹下的其他模板文件
		$this->display();


	}
	function register(){
//            $user=D('user');//因为UserModel做了验证规则设置，所以需要使用
            $user=new  \Model\UserModel();
          /*
           * 执行数据库源sql语句
           *  查询 $user->query（$sql）
           *  其他 $user->execute($sql);
           */
                if(!empty($_POST)){
                    dump($_POST);
                    dump('------------------------------');
//                    create()方法作用：收集信息，过滤非法字段，表单字段验证，返回验证后的信息，失败返回false
                     $data=$user->create();
                      dump($data);
                     if($data){
                         echo "success";
//                    $_POST['user_hobby']=implode(',',$_POST['user_hobby']);
                     }else{
                         echo $user->getError();
                     }
                      $this->display('register');
                }else{
                    $this->display('register');
                }
	}
}