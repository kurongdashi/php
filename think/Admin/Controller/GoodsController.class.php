<?php

namespace Admin\Controller;
use Tools\AdminController;
//引入Image类
use Think\Image;
class GoodsController extends AdminController{
    function adg(){
//       1、 数据库添加数据操作方式一
        $goods=D('Goods');
//        要添加的数据写成一个关联数组
//        $s=array(
//            'id'=>9,
//            'goods_name'=>'三星',
//            'goods_price'=>'1000'
//        );
//        $goods->add($s);
        
        
//        1、 数据库添加数据操作方式二
//        $goods->id=10;
//        $goods->goods_name="诺基亚";
//        $goods->goods_price="5000";
//        $goods->add();
        if(!empty($_POST)){
//            1、上传图片
//                文件数据合法，大小，后缀名等err0r 为0 
            if($_FILES['f_goods_image']['error']===0){
//                可以添加配置
//                $cfg=array('rootPath'=>'./Public/Upload');
                $up=new \Think\Upload();
//                保存单个文件 参数：文件数组 
                $r=$up->uploadOne($_FILES['f_goods_image']);
//                dump($r);
//                $savepath='./Upload/'.$r['savepath'].$r['savename'];
//                调用默认不存在的属性，走魔术方法
                $savepath=$up->rootPath.$r['savepath'].$r['savename'];
//             2、制作缩略图
                $img=new Image();
//                打开一张图片
                $img->open($savepath);
//                缩放
                $img->thumb(100, 100);//这里是等比例缩放，例如原图是1000*500 的则此处应该是100*50;
//                保存缩略图地址
                $smallsavepath=$up->rootPath.$r['savepath']."small_".$r['savename'];
//                保存
                $img->save($smallsavepath);
            }
            
//            dump($_POST);
            exit;
            $r=$goods->add($_POST);
            if($r){
            $this->redirect('showlist',null,2,'添加成功');
            }else{
             $this->redirect('showlist',null,2,'添加失败');
            }
        }else{
            $this->display();
        }
        
         
    }
    function upd($id){
//        1、修改方式save()
        $goods=D('goods');
        if(!empty($_POST)){
            $r=$goods->where('id=$id')->save($_POST);
            if($r){
                $this->redirect('showlist',null,2,"修改成功");
              }else{
                   $this->redirect('showlist',null,2,"修改失败");
              }
        }else{
  //        2、查询方法find（），每次查询一条信息，返回一个一维数组
        $info=$goods->find($id);
//        dump($info);
        $this->assign('info',$info);
         $this->display();
        }
    }
    function showlist(){
//        1、创建一个model,会默认截取goods,和config中配置的前缀组成表名tk_goods
//        $goodsModel=new \Model\GoodsModel();
//        dump($goodsModel);
//       2、 实例化父类Model
//        $model=D(); 
//        dump($model);
//        3、实例化父类是指定要操作的数据表,（不创建具体的Model也可以操作对应数据表）
        $obj=D('goods');
//        3、返回一个二维数组,查询全部信息
//        $info=$obj->select();
//        4、参数主键id
//        $info=$obj->select(1);
//        5、查询id值在之间
//        $info=$obj->select('1,3,5');
//        6、添加查询条件where() 这两条语句完成一个查询功能
            $obj->where("goods_price>=8000 and goods_name like '华为'");
            $info=$obj->select();
//        7、limit（）,限制查询条数
            $obj->limit(2);
            $info=$obj->select();
//         8、限制查询字段field()
            $obj->field('goods_name');
            $info=$obj->select();
//          9、排序order()
//            $obj->order('goods_price');
            $info=$obj->select();
//           10、分组group() 
/*
 *           11、where 和 having
 *          where : 条件字段必须是数据表中已经存在的字段
 *          having：条件字段必须是结果集中存在的字段（一般情况下和where通用，但是
 *          当查询结果重新赋值个一个新的变量时，就需要使用having）
 *          select goods_price count(*) as sum form tk_goods having sum>20000
 */
//            12、连贯操作
//            $info=$obj->where("goods_price>3000")->field("goods_name")->select();
            
        
//            dump($info);
//        这个是controller的方法，其内部对smarty进行了封装
        
        
        
        $this->assign('info',$info);
        $this->display();
    }
}
