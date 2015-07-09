<?php
	class LoginAction extends Action
	{
		public function login()
		{
			$this->display();
		}
		public function dologin()
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			$user=M('admin');
			$where['username'] = $username;
			$where['password'] = $password;
			$arr = $user->where($where)->select();
			// var_dump($arr);
			if($arr)
			{
				$_SESSION['username'] = $username;
				$_SESSION['aid'] = $arr[0]['aid'];
				$this->success('用户登录成功',U('Index/index'));
			}
			else
			{
				$this->error('帐号或密码错误');
			}
		}
		public function logout()
		{
			$_SESSION=array();
			if(isset($_COOKIE[session_name()]))
			{
				setcookie(session_name(),'',time()-1,'/');
			}
			session_destroy();
			$this->success('用户注销成功',U('Index/index'));
		}
	}
?>