<?php
	class VerifyAction extends Action
	{
		public function verify()
		{
			import("ORG.Util.Image");
			Image::buildImageVerify(4,1,png,verify);
		}
		public function checkverify()
		{
			$verify = $_GET['verify'];
			if (md5($verify) != $_SESSION['verify']) {
				echo "验证码错误";
			}
		}
	}
?>