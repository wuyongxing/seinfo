<?php
class PersonAction extends AuthorAction{
	public function info()
	{
		$where['pid'] = $_SESSION['pid'];
		$a = M('person');
		$b=$a->where($where)->select();
		$b = $b[0];
		$this->assign('li',$b);
		$this->display();
	}
	public function publish_news()
	{
		$this->display();
	}
	public function upload_file()
	{
		$this->display();
	}
	public function modify_info()
	{
		$this->display();
	}
}
?>