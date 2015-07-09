<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index()
    {
    	$a = M('person');
    	$b = $a->order('username asc')->select();
    	$this->assign('li',$b);
		$this->display();
	}
	public function show_user()
	{
		$where['']
		$a = M('person');
		$b = $a->
	}
	public function modify_user()
	{

	}
}