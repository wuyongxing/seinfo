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
	public function modify_info()
	{
		$where['pid'] = $_POST['pid'];
		$where['name'] = $_POST['name'];
		$where['password'] = $_POST['password'];
		$where['age'] = $_POST['age'];
		$where['sex'] = $_POST['sex'];
		$a = M('person');
		$ok = $a->save($where);
		if($ok)
			$this->success("修改成功");
		else
			$this->error("修改失败");
	}
	public function news()
	{
		$where['pid'] = $_SESSION['pid'];
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
		$where['pid'] = $_SESSION['pid'];
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
		$where['pid'] = $_SESSION['pid'];
		$a = M('file');
		$b = $a->where($where)->order('time desc')->select();
		$this->assign('li',$b);
		$this->display();
	}
	public function modify_file()
	{
		$this->display();
	}
	public function upload_file()
	{
		import('ORG.Net.UploadFile');
		$upload = new UploadFile();// 实例化上传类
		$upload->maxSize  = 3145728 ;// 设置附件上传大小
		$upload->allowExts  = array();// 设置附件上传类型
		$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
		 if(!$upload->upload()) 
		 {// 上传错误提示错误信息
			$this->error($upload->getErrorMsg());
		 }
		 else
		 {// 上传成功 获取上传文件信息
			$info =  $upload->getUploadFileInfo();
		 }
		 // 保存表单数据 包括附件数据
		$where['pid'] = $_SESSION['pid'];
		$where['time'] = time();
		$where['filename'] = $_POST['filename'];
		$User = M("file"); // 实例化User对象
		$where['name'] = $info[0]['savename']; // 保存上传的照片根据需要自行组装
		$ok = $User->add($where); // 写入用户数据到数据库
		if($ok) $this->success("上传成功","file");
		else $this->error("上传失败");
	}
	public function dele_file()
	{
		$where['fid'] = $_GET['fid'];
		$a = M('file');
		$ok = $a->where($where)->delete();
		if($ok) $this->success("删除成功");
		else $this->error("删除失败");
	}
	public function get_file()
	{
		 if( !isset($_GET['fid']))
		{
			$this->error_403('参数错误');
			return;
		}
		$a=M('file');$b=$a->where('fid='.$_GET['fid'])->select();		
		//处理下载过程
		header("Content-type:text/html;charset=utf-8"); 
		// $file_name="cookie.jpg"; 
		$file_name=$b[0]['name'];; 
		//dump($i);die();
		//用以解决中文不能显示出来的问题 
		//$file_name=iconv("utf-8","gb2312",$file_name); 
		$file_sub_path="./Public/Uploads/"; 
		$file_path=$file_sub_path.$file_name; 
		//首先要判断给定的文件存在与否 
		if(!file_exists($file_path)){ 
		$this->error_1("File Not Find!"); 
		return ; 
		} 
		$fp=fopen($file_path,"r"); 
		$file_size=filesize($file_path); 
		//下载文件需要用到的头 
		Header("Content-type: application/octet-stream"); 
		Header("Accept-Ranges: bytes"); 
		Header("Accept-Length:".$file_size); 
		Header("Content-Disposition: attachment; filename=".$file_name); 
		$buffer=1024; 
		$file_count=0; 
		//向浏览器返回数据 
		while(!feof($fp) && $file_count<$file_size){ 
		$file_con=fread($fp,$buffer); 
		$file_count+=$buffer; 
		echo $file_con; 
		} 
		fclose($fp);
	}
	public function homework()
	{
		$where['classify'] = $_GET['classify'];
		$where['pid'] = $_SESSION['pid'];
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
		if($_GET['hid'])
		{
			$where['hid'] = $_GET['hid'];
			$a = M('homework');
			$b = $a->where($where)->select();
			$b = $b[0];
			$this->assign('li',$b);
			$this->display();
		}
		else $this->display();
	}
	public function domodify_homework()
	{
		$where['classify'] = $_GET['classify'];
		$where['time'] = time();
		$where['title'] = $_POST['title'];
		$where['content'] = $_POST['content'];
		$where['pid'] = $_SESSION['pid'];
		// var_dump($where);
		if($_POST['hid'])
		{
			$where['hid'] = $_POST['hid'];
			$a = M('homework');
			$ok = $a->save($where);
			if($ok) $this->success("修改成功","homework?classify=".$where['classify']);
			else $this->error("修改失败");
		}
		else
		{
			$a = M('homework');
			$ok = $a->add($where);
			if($ok) $this->success("添加成功","homework?classify=".$where['classify']);
			else $this->error("添加失败");
		}
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
?>