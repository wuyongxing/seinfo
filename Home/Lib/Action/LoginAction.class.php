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
			$verify = $_POST['verify'];
			if (md5($verify) != $_SESSION['verify']) {
				$this->error('验证码不正确！');
			}
			$user=M('admin');
			$where['username'] = $username;
			$where['password'] = $password;
			$arr = $user->field('id')->where($where)->find();
			$this->succes($password,$username);
			// if($arr)
			// {
			// 	$_SESSION['username'] = $username;
			// 	$_SESSION['id'] = $arr['id'];
			// 	$this->success('用户登录成功',U('Index/index'));
			// }
			// else
			// {
			// 	$this->error('用户不存在');
			// }
		}
		public function dologout()
		{
			$_SESSION=array();
			if(isset($_COOKIE[session_name()]))
			{
				setcookie(session_name(),'',time()-1,'/');
			}
			session_destroy();
			$this->redirect('Index/index');
		}
	}
?>