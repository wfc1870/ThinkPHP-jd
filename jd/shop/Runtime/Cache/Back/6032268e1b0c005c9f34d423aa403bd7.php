<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="http://localhost/jd/shop/Back/Public/css/mine.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="http://localhost/jd/shop/Common/Js/jquery-1.11.3.min.js"></script>


    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
             <span>
                <span style="float: left;">当前位置是：<?php echo ($bread["first"]); ?>-》<?php echo ($bread["second"]); ?></span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="<?php echo ($bread["linkTo"]["1"]); ?>"><?php echo ($bread["linkTo"]["0"]); ?></a>
                </span>
            </span>
        </div>
        <div></div>
           <div style="font-size: 13px;margin: 10px 5px">
    <form action="/jd/shop/index.php/Back/user/tianjia" method="post" enctype="multipart/form-data">
        <table border="1" width="100%" class="table_a">
            <tr>
                <td>用户名</td>
                <td><input type="text" name="user_name" /></td>
            </tr>
            <tr>
                <td>密码</td>
                <td><input type="text" name="user_pwd" /></td>
            </tr>
             <tr>
                <td>电子邮箱</td>
                <td><input type="text" name="user_email" /></td>
            </tr>
            <tr><td colspan='100'><input type='submit' value="添加"></td></tr>
            <input type='hidden' name='act' value='insert_user' />
        </table>
    </form>
</div>

        </body>
        </html>