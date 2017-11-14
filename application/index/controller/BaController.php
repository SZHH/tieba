<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Ba;
use app\index\model\Tie;
use think\Request;

class BaController extends Controller
{
    public function index($id)
    {
        $single = Ba::get($id);
        $data = Tie::where('pid',0)
        ->where('ba_id',$single->id)
        ->select();
        $this->assign('result', $data);
        return $this->fetch();
    }
}
