<?php if (!defined('THINK_PATH')) exit();?><!doctype html public "-//w3c//dtd xhtml 1.0 frameset//en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-frameset.dtd">
<html>
    <head>
        <meta http-equiv=content-type content="text/html; charset=utf-8" />
        <meta http-equiv=pragma content=no-cache />
        <meta http-equiv=cache-control content=no-cache />
        <meta http-equiv=expires content=-1000 />
        
        <title>管理中心 v1.0</title>
    </head>
    <frameset border=0 framespacing=0 rows="60, *" frameborder=0>
        <!--
         frameset的src不能用相对路径，因为当访问http://localhost/think/index.php/Admin/ ，路径时，默认走的是Index控制器index方法
          ./left.html 写法，会使frameset访问 http://localhost/think/index.php/Admin/left.html，所以需要器走控制器的方法来获取
        其他页面
        
        -->
        <frame name=head src="Index/head" frameborder=0 noresize scrolling=no>
            <frameset cols="170, *">
                <frame name=left src="Index/left" frameborder=0 noresize />
                <frame name=right src="Index/right" frameborder=0 noresize scrolling=yes />
            </frameset>
    </frameset>
    <noframes>
    </noframes>
</html>