<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\User;
use think\Request;
use think\Session;

class UserController extends Controller
{
	public function index()
	{
		return $this->fetch();
	}
	public function jump(Request $request)
	{
		$result = User::where('username',$request->post('username'))
		->where('password',$request->post('password'))
		->find();
		$this->assign('result',$result);
		if($result){
			Session::set('username',$result->username);
			return $this->fetch();
		}else{
			return $this->fetch('error/loginerror');
		}
	}
	public function register()
	{
		return $this->fetch();
	}
	public function doregister(Request $request)
	{
		if($request->post('password') == $request->post('confirmpw')){
			$user = new User;
			$user->username = $request->post('username');
			$user->password = $request->post('password');
			$user->authority = 2;
			if ($user->save()) {
				echo '用户[ ' . $user->username . ' ]注册成功<br>';
				echo '<a href="/user">点此登录</a>';
			} else {
				return $user->getError();
			}
		}else{
			return $this->fetch('error/registererror');
		}
	}
	public function logout()
	{
		Session::delete('username');
		return $this->fetch('user/logout');
	}
}
