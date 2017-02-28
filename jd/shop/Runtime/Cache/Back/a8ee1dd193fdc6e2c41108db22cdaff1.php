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
           <div style="font-size: 13px; margin: 10px 5px;">
    <table class="table_a" border="1" width="100%">
        <tbody><tr style="font-weight: bold;">
                <td>序号</td><td>用户名</td>
                <td>电子邮件</td><td>性别</td><td>是否激活</td>
                <td>注册时间</td>
                <td align="center" colspan='2'>操作</td>
            </tr>
            <?php if(is_array($info1)): foreach($info1 as $key=>$v): ?><tr id="product_<?php echo ($v["user_id"]); ?>">
                <td><?php echo ($v["user_id"]); ?></td>
                <td><?php echo ($v["user_name"]); ?></td>
                <td><?php echo ($v["user_email"]); ?></td>
                <td><?php echo ($v["user_sex"]); ?></td>
                <td><?php echo ($v["user_check"]); ?></td>
              
                <td><?php echo (date("Y-m-d H:i:s",$v["add_time"])); ?></td>
                
               <td><a href="javascript:;" onclick="if(confirm('确认要删除该商品么？')){del_user(<?php echo ($v["user_id"]); ?>)}">删除</a></td>
            </tr><?php endforeach; endif; ?>
            <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo ($pagelist); ?>
                        </td>
                    </tr>
                    <script type="text/javascript">
                    function del_user(user_id){
                        //利用ajax去服务器删除数据库记录信息
                        $.ajax({
                            url:"<?php echo U('deluser');?>",
                            data:{'user_id':user_id},
                            dataType:'json',
                            type:'get',
                            success:function(msg){
                                if(msg.status==1){
                                    $('#product_'+user_id).remove();
                                }
                            }
                        });
                    }
                    </script>
        </tbody>
    </table>
</div>
        </body>
        </html>