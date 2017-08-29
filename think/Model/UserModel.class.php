<?php
namespace Model;
use Think\Model;
class UserModel extends Model{
//    手动指定，要操作的数据的表名,覆盖系统默认
//  protected $trueTabName='tk_goods';  
    protected $pacthValidate=true;
  protected $_validate=array(
//      验证规则参数：字段，规则，错误提示，[,验证条件，附加规则（正则，或者tp定义的字段）， 验证时间]
//      验证条件默认为0：字段存在就验证，1必须验证，2不为空是才验证
//      验证时间
    array('username','require','用户名不能为空'),
     array('password','require','密码不能为空'),
      
      array('password2','password','密码不一致',0,'confirm'),
      
      array('user_email','email','eamil格式不正确'),
//      验证qq ,为数字，长度5-13
     array('user_qq','number','QQ格式不正确'), 
      array('user_qq','5,13','QQ格式不正确',0,'length'),
//      手机号码
      array('user_number','number','手机格式不正确'), 
       array('user_number','5,11','手机格式不正确',0,'length'),
//      验证学历在2,3,4,5 之间
      array('user_xueli','2,3,4,5','学历格式不正确',0,"in"),
//      选择验证方式是回调函数的方式去验证
      array('user_hobby','check_hobby','爱好至少选择2个',1,'callback')
  );

  function check_hobby($hob){
      if(count($hob)<2){
          return false;
      }
      return true;
  }
  
}

