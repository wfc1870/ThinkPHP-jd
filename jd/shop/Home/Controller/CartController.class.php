<?php
namespace Home\Controller;
//use Think\Controller;
use Common\Tools\HomeController;

class CartController extends HomeController {
    //购物车列表展示
   function mycart(){
   	$goods_id = I('get.goods_id');
   
   	
   	$this->display();
   }
   function goodsdetail(){
   	$goods_id = I('get.goods_id');  //获得需要添加入购物车商品的id信息 然后查询数据并且展示
   	$info=D('goods')->where(array('goods_id'=>$goods_id))->select();
   	 dump($info);
   	$this -> assign('info',$info);
   	 
   	 
   	$this->display();
   }
   function jiesuan(){
   	$goods_id = I('get.goods_id');  //获得需要添加入购物车商品的id信息
   	 
   	 
   	 
   	$this->display();
   }
    function showlist(){
        $cat_id = I('get.cat_id');

        $goods = new \Model\GoodsModel();
        $cdt['is_del'] = '不删除';
        $cdt['is_sale'] = '上架';

      

        $this -> display();
    }
}
