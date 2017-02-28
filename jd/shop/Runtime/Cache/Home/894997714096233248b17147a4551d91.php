<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>登录商城</title>
	<link rel="stylesheet" href="http://localhost/jd/shop/Home/Public/style/base.css" type="text/css">
	<link rel="stylesheet" href="http://localhost/jd/shop/Home/Public/style/global.css" type="text/css">
	<link rel="stylesheet" href="http://localhost/jd/shop/Home/Public/style/header.css" type="text/css">
	<link rel="stylesheet" href="http://localhost/jd/shop/Home/Public/style/login.css" type="text/css">
	<link rel="stylesheet" href="http://localhost/jd/shop/Home/Public/style/footer.css" type="text/css">
</head>
<body>
<!-- 顶部导航 start -->
<div class="topnav">
    <div class="topnav_bd w1210 bc">
        <div class="topnav_left">
            
        </div>
        <div class="topnav_right fr">
            <?php if(!empty($_SESSION['user_name'])): ?><ul>
                <li>您好，【<?php echo (session('user_name')); ?>】欢迎来到京西！[<a href="<?php echo U('User/logout');?>">退出系统</a>] </li>
                <li class="line">|</li>
                <li>我的订单</li>
                <li class="line">|</li>
                <li>客户服务</li>
            </ul>
            <?php else: ?>
            <ul>
                <li>您好，欢迎来到京西！[<a href="<?php echo U('User/login');?>">登录</a>] [<a href="<?php echo U('User/regist');?>">免费注册</a>] </li>
                <li class="line">|</li>
                <li>我的订单</li>
                <li class="line">|</li>
                <li>客户服务</li>
            </ul><?php endif; ?>
        </div>
    </div>
</div>
<!-- 顶部导航 end -->

<!--引入公共的jquery-->
<script type="text/javascript" src="http://localhost/jd/shop/Home/Public/Js/jquery-1.11.3.min.js"></script> 
<!--引入公共的jquery-->


	
	<div style="clear:both;"></div>

	<!-- 页面头部 start -->
	<div class="header w990 bc mt15">
		<div class="logo w990">
			<h2 class="fl"><a href="<?php echo U('Home/Index/index');?>"><img src="http://localhost/jd/shop/Home/Public/images/logo.png" alt="京西商城"></a></h2>
		</div>
	</div>
	<!-- 页面头部 end -->

        
        <div style=" text-align:center;" font size="7"><font size="5" color="red">现在您应该登录邮箱，激活注册的账号，之后可以登录系统</font>
<br>
<br>
<br>
<a href="<?php echo U('Home/User/login');?>"><font size="3" color="red">点击这里跳转到登录页面</font></a></div>
 <div style="clear:both;"></div>
        <!-- 底部版权 start -->
        <div class="footer w1210 bc mt15">
            <p class="links">
                <a href="">关于ta们</a> |
                <a href="">联系我们</a> |
                <a href="">人才招聘</a> |
                <a href="">商家入驻</a> |
                <a href="">千寻网</a> |
                <a href="">奢侈品网</a> |
                <a href="">广告服务</a> |
                <a href="">移动终端</a> |
                <a href="">友情链接</a> |
                <a href="">销售联盟</a> |
                <a href="">京西论坛</a>
            </p>
            <p class="copyright">
                © 2005-2013 京东网上商城 版权所有，并保留所有权利。  ICP备案证书号:京ICP证070359号 
            </p>
            <p class="auth">
                <a href=""><img src="http://localhost/jd/shop/Home/Public/images/xin.png" alt="" /></a>
                <a href=""><img src="http://localhost/jd/shop/Home/Public/images/kexin.jpg" alt="" /></a>
                <a href=""><img src="http://localhost/jd/shop/Home/Public/images/police.jpg" alt="" /></a>
                <a href=""><img src="http://localhost/jd/shop/Home/Public/images/beian.gif" alt="" /></a>
            </p>
        </div>
        <!-- 底部版权 end -->
    </body>
</html>