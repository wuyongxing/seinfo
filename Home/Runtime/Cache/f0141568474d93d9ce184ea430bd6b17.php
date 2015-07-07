<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>用户登录</title>
    <link rel="stylesheet" href="/seinfo/lib/css/bootstrap.min.css">
    <link rel="stylesheet" href="/seinfo/lib/css/style.css">
    <script src="/seinfo/lib/js/jquery-1.10.2.min.js"></script>
    <script src="/seinfo/lib/js/bootstrap.min.js"></script>
</head>
<body>
    <div style="MARGIN-RIGHT: auto;
MARGIN-LEFT: auto;
vertical-align:middle;">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Sign in</button>
            </div>
          </div>
        </form>
    </div>
</body>
</html>