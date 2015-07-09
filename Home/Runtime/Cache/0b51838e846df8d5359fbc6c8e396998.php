<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>个人主页</title>
    <link rel="stylesheet" href="/seinfo/lib/css/bootstrap.css">
    <script src="/seinfo/lib/js/jquery-1.10.2.min.js"></script>
    <script src="/seinfo/lib/js/bootstrap.min.js"></script>
    <script>
    $(function(){
        $(".title").find("ul li:eq(2)").addClass("active");
    });
    </script>
</head>
<body style="background:url(/seinfo/lib/img/main_bg.png) repeat-x;">
    <?php include "inc/title1.html" ?>
    <div class="col-sm-offset-3 col-sm-6" style="margin-top: 1%; background-color: #FFFFFF; height: 600px; border: #CCC solid 1px; box-shadow: 2px 2px 10px #c0c0c0;" >
        <div class="page-header">
            <h1>我上传的文件 <a class="btn btn-default btn btn-info col-sm-offset-5" href="__URL__/modify_file" role="button">上传新文件</a></h1> 
        </div> 
        <ul class="unstyled">
            <?php if(is_array($li)): $i = 0; $__LIST__ = $li;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><li style="width:600px; margin-top: 10px;"><a href="__URL__/get_file?fid=<?php echo ($li["fid"]); ?>"><?php echo ($li["filename"]); ?></a><span style="float: right;">&nbsp&nbsp&nbsp&nbsp<?php echo (date('Y-m-d H:i:s',$li["time"])); ?></span><a href="__URL__/dele_file?fid=<?php echo ($li["fid"]); ?>" style="float:right">x</a></li><?php endforeach; endif; else: echo "" ;endif; ?>   
        </ul>
    </div>
    <?php include "inc/footer1.html" ?>
</body>
</html>