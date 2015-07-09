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
        var no = parseInt($("#classify").val()) + 2;
        $(".title").find("ul li:eq("+no+")").addClass("active");
    });
    </script>
</head>
<body style="background:url(/seinfo/lib/img/main_bg.png) repeat-x;">
    <?php include "inc/title2.html" ?>
    <input type="text" id="classify" value="<?php echo ($classify); ?>" style="display: none;"/>
    <div class="col-sm-offset-3 col-sm-6" style="margin-top: 1%; background-color: #FFFFFF; height: 600px; border: #CCC solid 1px; box-shadow: 2px 2px 10px #c0c0c0;" >
        <div class="page-header">
            <h1><?php if($classify == 1): ?>分享/修改作业<?php endif; if($classify == 2): ?>添加/修改贴子<?php endif; ?> </h1> 
        </div> 
        <form class="form-horizontal" action="__URL__/domodify_homework?classify=<?php echo ($classify); ?>" method="post">
            <input type="text" name="pid" value="<?php echo ($li["pid"]); ?>" style="display: none;" />
            <input type="text" name="hid" value="<?php echo ($li["hid"]); ?>" style="display: none;" />
            <fieldset>
                <div class="control-group col-sm-8" style="margin-top: 50px;">
                    <label class="control-label col-sm-3" for="title">标题</label>
                    <div class="controls col-sm-8">
                        <input type="text" name="title" class="input-xlarge" id="title" value="<?php echo ($li["title"]); ?>" />
                    </div>
                </div>
                <div class="control-group col-sm-8" style="margin-top: 10px;">
                    <label class="control-label col-sm-3" for="content">内容</label>
                    <div class="controls col-sm-8">
                        <textarea type="content" name="content" class="input-xlarge" id="content" style="width: 400px; height: 300px;"><?php echo ($li["content"]); ?></textarea>
                    </div>
                </div>
                <div class="form-actions col-sm-offset-2 col-sm-4" style="margin-top: 10px;">
                    <input type="submit" class="btn btn-info btn-large" value="发布" />
                    &nbsp&nbsp&nbsp
                    <a class="btn btn-default btn btn-info" href="__URL__/homework?classify=<?php echo ($classify); ?>" role="button">返回</a>
                </div>                 
            </fieldset>
        </form>
    </div>
    <?php include "inc/footer1.html" ?>
</body>
</html>