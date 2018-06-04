<?php
namespace app\demo\controller;
use think\Controller;
use think\Db;


class HelloWorld extends Controller
{
    public function index()
    {
        $data=Db::name('data')->find();
		$this->assign('result',$data);
		return $this->fetch();
    }
}
