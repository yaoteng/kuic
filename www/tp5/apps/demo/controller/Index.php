<?php
namespace app\demo\controller;
use think\Controller;
class Index extends Controller
{
    public function index($name='thinkPHP')
    {   
		$this->assign('name',$name);
        return $this->fetch();
    }
}
