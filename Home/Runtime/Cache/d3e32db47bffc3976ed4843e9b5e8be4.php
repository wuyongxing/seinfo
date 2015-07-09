<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>个人主页</title>
    <link rel="stylesheet" href="/seinfo/lib/css/bootstrap.css">
    <script src="/seinfo/lib/js/jquery-1.10.2.min.js"></script>
    <script src="/seinfo/lib/js/bootstrap.min.js"></script>
    <style>
        .btn-file
        {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type = file]
        {
            position: absolute;
            top:0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter:alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }
    </style>
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
            <h1>上传新文件 </h1> 
        </div> 
        <form class="form-horizontal" action="__URL__/upload_file" method="post" enctype="multipart/form-data">
            <fieldset>
                <div class="control-group col-sm-8 col-sm-offset-2" style="margin-top: 50px;">
                    <label class="control-label col-sm-3" for="filename">文件名</label>
                    <div class="controls col-sm-8">
                        <input type="text" name="filename" class="input-xlarge" id="filename"/>
                    </div>
                </div>
                <div class="control-group col-sm-8 col-sm-offset-2" style="margin-top: 10px;">
                    <label class="control-label col-sm-3">文件</label>&nbsp&nbsp&nbsp
                    <span class="btn btn-default btn-file ">
                        选择文件<input type="file" name="file">
                    </span>
                </div>
                <div class="form-actions col-sm-offset-4 col-sm-4" style="margin-top: 10px;">
                    <input type="submit" class="btn btn-info btn-large" value="上传" />
                    &nbsp&nbsp&nbsp
                    <a class="btn btn-default btn btn-info" href="__URL__/file" role="button">返回</a>
                </div>                 
            </fieldset>
        </form>
    </div>
    <?php include "inc/footer1.html" ?>
</body>
</html>