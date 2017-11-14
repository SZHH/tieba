<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Ba;
use app\index\model\User;
use think\Request;
use think\Session;

class TiebaController extends Controller
{
	public function index(Request $request)
	{
		// $single = User::where('username',$request->post('username'))->find();
		$data = Ba::all();
		Session::set('authority',$request->post('authority'));
		// $this->assign('single',$single);
		$this->assign('result',$data);
		return $this->fetch();
	}
}
