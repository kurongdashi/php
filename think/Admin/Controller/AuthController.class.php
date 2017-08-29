<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Admin\Controller;
use Tools\AdminController;
class AuthController extends AdminController{
    function  showlist(){
       $auth_info= D('auth')->select();
       $this->assign('auth_info',$auth_info); 
       $this->display();
    }
}
