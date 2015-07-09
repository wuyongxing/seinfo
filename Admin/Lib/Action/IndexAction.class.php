<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends AuthorAction{
    public function index()
    {
    	$a = M('person');
    	$b = $a->order('username asc')->select();
    	$this->assign('li',$b);
		$this->display();
	}
	public function show_user()
	{
		$where['pid'] = $_GET['pid'];
		$a = M('person');
		$b = $a->where($where)->select();
		$b = $b[0];
		$this->assign('li',$b);
		$this->display();
	}
	public function news()
	{
		$a = M('news');
		$b = $a->where($where)->order('time desc')->select();
		$this->assign('li',$b);
		$this->display();
	}
	public function modify_news()
	{
		if($_GET['nid'])
		{
			$where['nid'] = $_GET['nid'];
			$a = M('news');
			$b = $a->where($where)->select();
			$b = $b[0];
			$this->assign('li',$b);
			$this->display();
		}
		else
			$this->display();
	}
	public function domodify_news()
	{
		$where['pid'] = $_POST['pid'];
		$where['nid'] = $_POST['nid'];
		$where['title'] = $_POST['title'];
		$where['content'] = $_POST['content'];
		$where['time'] = time();
		if($_POST['nid'])
		{
			$a = M('news');
			$ok = $a->save($where);
			if($ok) $this->success("修改成功","news");
			else $this->error("修改失败");
		}
		else
		{
			$a = M('news');
			$ok = $a->add($where);
			if($ok) $this->success("发布成功","news");
			else $this->error("发布失败");
		}
	}
	public function dele_news()
	{
		$where['nid'] = $_GET['nid'];
		$a = M('news');
		$ok = $a->where($where)->delete();
		if($ok) $this->success("删除成功");
		else $this->error("删除失败");
	}
	public function file()
	{
		$a = M('file');
		$b = $a->where($where)->order('time desc')->select();
		$this->assign('li',$b);
		$this->display();
	}
	public function dele_file()
	{
		$where['fid'] = $_GET['fid'];
		$a = M('file');
		$ok = $a->where($where)->delete();
		if($ok) $this->success("删除成功");
		else $this->error("删除失败");
	}
	public function homework()
	{
		$where['classify'] = $_GET['classify'];
		$a = M('homework');
		$b = $a->where($where)->select();
		$this->assign('li',$b);
		$this->assign('classify',$where['classify']);
		$this->display();
	}
	public function modify_homework()
	{
		$where['classify'] = $_GET['classify'];
		$this->assign('classify',$_GET['classify']);
		$where['hid'] = $_GET['hid'];
		$a = M('homework');
		$b = $a->where($where)->select();
		$b = $b[0];
		$this->assign('li',$b);
		$this->display();
	}
	public function domodify_homework()
	{
		$where['classify'] = $_GET['classify'];
		$where['time'] = time();
		$where['title'] = $_POST['title'];
		$where['content'] = $_POST['content'];
		$where['pid'] = $_POST['pid'];
		// var_dump($where);
		$where['hid'] = $_POST['hid'];
		$a = M('homework');
		$ok = $a->save($where);
		if($ok) $this->success("修改成功","homework?classify=".$where['classify']);
		else $this->error("修改失败");
	}
	public function dele_homework()
	{
		$where['hid'] = $_GET['hid'];
		$a = M('homework');
		$ok = $a->where($where)->delete();
		if($ok) $this->success("删除成功");
		else $this->error("删除失败");
	}
}