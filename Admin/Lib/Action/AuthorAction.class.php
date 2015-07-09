<?php
	class AuthorAction extends Action
	{
		public function _initialize()
		{
			if(!isset($_SESSION['username']) || $_SESSION['username'] == '')
			{
				$this->redirect('Login/login');
			}
		}
	}
?>