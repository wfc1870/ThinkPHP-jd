<?php
namespace Back\Controller;
use Common\Tools\BackController;
//use Think\Controller;
class UserController extends BackController {
	function showlist(){
		//分页相关
		$user = new \Model\UserModel();
		$nowinfo = $user -> fetchData();//模型里面已经做过数据查询了
		
		$info = $nowinfo['pageinfo']; //当前页数据信息
		$pagelist = $nowinfo['pagelist'];//页码列表信息
		//分页相关
	
		$bread = array(
				'first' => '用户列表',
				
				'linkTo' => array(
						'【添加用户】',U('tianjia')
				),
		);
		$this -> assign('bread',$bread);
		$this -> assign('info1',$info);
		$this -> assign('pagelist',$pagelist);
	
	

		$this->display();
	}
	function tianjia(){
		if(IS_POST){
			$data = new \Model\UserModel();
// 			$data=D('User'); 
			$info=D('User')->create();
			
			
			if($data->add($info)){
				
				$this ->success('添加类型成功', U('showlist'), 2);
			}else{
				$this ->error('添加类型失败', U('tianjia'), 2);
			}
		}
	
		$bread = array(
				'first' => '添加用户',
		
				'linkTo' => array(
						'【返回】',U('showlist')
				),
		);
		$this -> assign('bread',$bread);
		$this->display();
		}
	function deluser(){  //ajax调用
		$user_id = I('get.user_id');  //获得被删除商品的id信息
		$user = D('User');
		$z = $user -> delete($user_id);
		
		if($z){
			echo json_encode(array('status'=>1)); //ok  99%
		}else{
			echo json_encode(array('status'=>2)); //fail 1%
		}
		}
	
}