<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Admin\Controller;
use Tools\AdminController;
class RoleController extends AdminController{
    function  showlist(){
       $role_info= D('role')->select();
       $this->assign($role_info); 
       $this->display();
    }
}
