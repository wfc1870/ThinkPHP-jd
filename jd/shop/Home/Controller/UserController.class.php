<?php
namespace Home\Controller;
use Common\Tools\HomeController;
class UserController extends HomeController {
	
	 public function login(){
        //两个逻辑：展示、收集
        if(IS_POST){
            //用户名/密码校验，、
            $user = D('User');
            $name = $_POST['user_name'];
            $pwd = $_POST['user_pwd'];
            $info = $user -> where(array('user_name'=>$name,'user_pwd'=>md5($pwd)))->find();

            if($info){
                if($info['user_check'] === "1"){
                    //已经通过邮件激活账号
                    //持久化用户信息
                    session('user_id',$info['user_id']);
                    session('user_name',$name);
                    //页面跳转
                    //$this -> redirect($url,$params=array(),$delay=间隔时间,$msg='');
                    $this -> redirect('Index/index');
                }
                $this -> error('请先通过邮件激活您的账号',U('showRegister'),1);
                exit;
            }
            $this -> error('用户名或密码不存在',U('login'),1);

        }else{
            $this -> display();
        }
    }
    function logout(){
    	session(null);
    	$this -> redirect('Index/index');
    }
	public function regist(){
	  $user = new \Model\UserModel();
        if(IS_POST){
		
            $data = $user -> create(); //过滤非法字段
         
            if($user->add($data)){
                $this -> success('注册成功',U('showRegister'),1);
            }else{
                $this -> error('注册失败',U('regist'),1);
            }

        }else{
            $this -> display();
        }
	}

	function verifyImg(){
		//显示验证码
		$cfg = array(
				'imageH'    =>  40,               // 验证码图片高度
				'imageW'    =>  100,               // 验证码图片宽度
				'length'    =>  4,               // 验证码位数
				'fontttf'   =>  '4.ttf',              // 验证码字体，不设置随机获取
				'fontSize'  =>  15,              // 验证码字体大小(px)
		);
		$very = new \Think\Verify($cfg);
		$very -> entry();
	}
	//ajax过来校验验证码
	function checkCode(){
		$code = I('get.code'); //获得用户输入的验证码
		$vry = new \Think\Verify();
	
		if($vry -> check($code)){
			echo json_encode(array('status'=>1));
		}else{
			echo json_encode(array('status'=>2));
		}
	}
	function checkUser(){
		$code = I('get.code'); //获得用户名字
		$user = D('User');
		$infoo=$user->where(array('user_name'=>$code))->find();
		dump($infoo);
		if($infoo){
			echo json_encode(array('status'=>1));
		}else{
			echo json_encode(array('status'=>2));
		}
	}
	function showRegister(){
		$this -> display();
	}
	function jihuo(){
		$user_id = I('get.user_id');
		$checkcode = I('get.checkcode');
	
		//更改user_check=1,user_check_code=null
		$user = D('User');
		//首先需要验证，再激活
		$userinfo = $user ->where(array('user_check'=>0))-> find($user_id);
		if($userinfo['user_check_code']===$checkcode){
			//2天之内需要激活账号，否则删除此账号
			if(time()-$userinfo['add_time']<3600*24*2){
				//验证码比较成功再激活
				$z = $user -> setField(array('user_id'=>$user_id,'user_check'=>1,'user_check_code'=>''));
				if($z){
					$this -> success('会员激活成功',U('login'),1);
				}
			}else{
				//超过两天没有激活的账号就删除
				$user -> delete($user_id);
			}
		}else{
			$this -> error('操作有错误或账号已经激活',U('login'),1);
		}
	}
}