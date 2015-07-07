<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends AuthorAction{
    public function index()
    {
    	$a = M('news');
    	$b = $a->order('time desc')->limit(5)->select();
    	$this->assign('l1',$b);

    	$a = M('file');
    	$b = $a->order('time desc')->limit(5)->select();
    	$this->assign('l2',$b);

    	$a = M('homework');
    	$b = $a->where('classify=1')->order('time desc')->limit(5)->select();
    	$this->assign('l3',$b);

    	$a = M('homework');
    	$b = $a->where('classify=2')->order('time desc')->limit(5)->select();
    	$this->assign('l4',$b);
		$this->display();
	}
	public function news()
	{
		if( isset($_GET['pageid'])&&is_numeric($_GET['pageid']) )
		{
			$pageid=$_GET['pageid'];
		}
		else
		{	
			$pageid=1;//设置最新一页为当前页面
		}
		//获得总的页面数
		$a=M('news');$b=$a->count();
		$totalpages=ceil($b/10);
		$this->cur=$pageid;
		$this->totalpages=$totalpages;
		//设置上下一页的ID
		if($pageid==1)
		{
			$up=1;
		}
		else
		{
			$up=$pageid-1;
		}
		if($pageid==$totalpages)
		{
			$down=$pageid;
		}
		else
		{
			$down=$down+1;
		}
		$this->up=$up;$this->down=$down;
		//找出当页的新闻列表
		$li=array();$count=0;
		$b=$a->order('time desc')->select();
		for($i=1;$i<=count($b);$i=$i+1)
		{
			if($i<($pageid-1)*10)
			{
				continue;
			}
			else
			{
				$li[]=$b[$i-1];
				$count=$count+1;
				if($count==10)
				{
					break;
				}
			}
		}
		$this->assign('li',$li);
		$this->display();
	}
	public function file()
	{
		if( isset($_GET['pageid'])&&is_numeric($_GET['pageid']) )
		{
			$pageid=$_GET['pageid'];
		}
		else
		{	
			$pageid=1;//设置最新一页为当前页面
		}
		//获得总的页面数
		$a=M('file');$b=$a->count();
		$totalpages=ceil($b/10);
		$this->cur=$pageid;
		$this->totalpages=$totalpages;
		//设置上下一页的ID
		if($pageid==1)
		{
			$up=1;
		}
		else
		{
			$up=$pageid-1;
		}
		if($pageid==$totalpages)
		{
			$down=$pageid;
		}
		else
		{
			$down=$down+1;
		}
		$this->up=$up;$this->down=$down;
		//找出当页的新闻列表
		$li=array();$count=0;
		$b=$a->order('time desc')->select();
		for($i=1;$i<=count($b);$i=$i+1)
		{
			if($i<($pageid-1)*10)
			{
				continue;
			}
			else
			{
				$li[]=$b[$i-1];
				$count=$count+1;
				if($count==10)
				{
					break;
				}
			}
		}
		$this->assign('li',$li);
		$this->display();
	}
	public function homework()
	{
		$where['classify'] = $_GET['classify'];
		if($_GET['classify'] == 1) $this->assign('name',"作业分享");
		else if($_GET['classify'] == 2) $this->assign('name',"生活娱乐");
		if( isset($_GET['pageid'])&&is_numeric($_GET['pageid']) )
		{
			$pageid=$_GET['pageid'];
		}
		else
		{	
			$pageid=1;//设置最新一页为当前页面
		}
		//获得总的页面数
		$a=M('homework');$b=$a->where($where)->count();
		$totalpages=ceil($b/10);
		$this->cur=$pageid;
		$this->totalpages=$totalpages;
		//设置上下一页的ID
		if($pageid==1)
		{
			$up=1;
		}
		else
		{
			$up=$pageid-1;
		}
		if($pageid==$totalpages)
		{
			$down=$pageid;
		}
		else
		{
			$down=$down+1;
		}
		$this->up=$up;$this->down=$down;
		//找出当页的新闻列表
		$li=array();$count=0;
		$b=$a->where($where)->order('time desc')->select();
		for($i=1;$i<=count($b);$i=$i+1)
		{
			if($i<($pageid-1)*10)
			{
				continue;
			}
			else
			{
				$li[]=$b[$i-1];
				$count=$count+1;
				if($count==10)
				{
					break;
				}
			}
		}
		$this->assign('li',$li);
		$this->display();
	}
	public function get_news()
	{
		$this->display();
	}
	public function get_homework()
	{
		$this->display();
	}
	public function info()
	{
		$this->display();
	}
}