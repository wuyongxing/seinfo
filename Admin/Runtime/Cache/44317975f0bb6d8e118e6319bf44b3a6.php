<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理</title>
    <link rel="stylesheet" href="/seinfo/lib/css/bootstrap.css">
    <script src="/seinfo/lib/js/jquery-1.10.2.min.js"></script>
    <script src="/seinfo/lib/js/bootstrap.min.js"></script>
    <script>
    $(function(){
        $(".title").find("ul li:eq(0)").addClass("active");
    });
    </script>
</head>
<body style="background:url(/seinfo/lib/img/main_bg.png) repeat-x;">
    <?php include "inc/title2.html" ?>
    <div class="col-sm-offset-3 col-sm-6" style="margin-top: 1%; background-color: #FFFFFF; height: 450px; border: #CCC solid 1px; box-shadow: 2px 2px 10px #c0c0c0;" >
        <div class="page-header">
                <h1><?php echo ($li["name"]); ?>的资料 <small>修改资料</small></h1>
        </div>
        <form class="form-horizontal" action="__ROOT__/index.php/Person/modify_info" method="post">
            <input type="text" name="pid" value="<?php echo ($li["pid"]); ?>" style="display: none;" />
            <fieldset>
                <div class="control-group col-sm-offset-3 col-sm-6" style="margin-top: 50px;">
                    <label class="control-label col-sm-3" for="name">姓名</label>
                    <div class="controls col-sm-4">
                        <input type="text" name="name" class="input-xlarge" id="name" value="<?php echo ($li["name"]); ?>" />
                    </div>
                </div>
                <div class="control-group col-sm-offset-3 col-sm-6" style="margin-top: 10px;">
                    <label class="control-label col-sm-3" for="password">密码</label>
                    <div class="controls col-sm-4">
                        <input type="password" name="password" class="input-xlarge" id="password" value="<?php echo ($li["password"]); ?>" />
                    </div>
                </div>
                <div class="control-group col-sm-offset-3 col-sm-6" style="margin-top: 10px;">
                    <label class="control-label col-sm-3" for="age">年龄</label>
                    <div class="controls col-sm-4">
                        <input type="text" name="age" class="input-xlarge" id="age" value="<?php echo ($li["age"]); ?>" />
                    </div>
                </div>
                <div class="control-group col-sm-offset-3 col-sm-6" style="margin-top: 10px;">
                    <label class="control-label col-sm-3" for="sex">性别</label>
                    <div class="controls col-sm-4">
                        <select id="sex" name="sex">
                            <option value="0" <?php if($li["sex"] == 0): ?>selected<?php endif; ?>>男</option>
                            <option value="1" <?php if($li["sex"] == 1): ?>selected<?php endif; ?> >女</option>
                        </select>
                    </div>
                </div>  
                <div class="form-actions col-sm-offset-7 col-sm-6" style="margin-top: 10px;">
                    <input type="submit" class="btn btn-info btn-large" value="修改" />
                </div>                  
            </fieldset>
        </form>
    </div>
    <?php include "inc/footer1.html" ?>
</body>
</html>