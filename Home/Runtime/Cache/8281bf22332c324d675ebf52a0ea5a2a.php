<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>哈工大软件学院信息交流平台</title>
<?php include "inc/cssjs.html" ?>
</head>
<body>
<div class="container">
	<?php include "inc/title.html" ?>
    <div class="photo"><div class="photo2"></div></div>
    <div class="row">
    	<div class="box pull-left" style="width: 930px;">
            <ol class="breadcrumb" style="float:left; width:900px">
                <li style="float:left"><a href="__URL__/index">首页</a> <span class="divider">/</span></li>
                <li style="float:left"><a href="__URL__/news">通知公告</a> <span class="divider">/</span></li>
                <li style="float:left; background-color:transparent" class="active"><?php echo ($li["title"]); ?></li>
            </ol>
            <div class="news_content" style="width :930px;">
            	<h4><?php echo ($li["title"]); ?></h4>
                <span class="time"><?php echo (date('Y-m-d H:i:s',$li["time"])); ?>发布</span>
                <div class="news_content_box">
<!--//////////////////////////////////////////////////////////////--> 
					<pre style="background-color: white;"><?php echo ($li["content"]); ?></pre>                             
<!--//////////////////////////////////////////////////////////////-->                
                </div>
            </div>  
            <div class="clear"></div>
            <div class="pagination text-center">
                <ul>
                    <li style="clear:none"><br><br></li>
                </ul>
            </div>
        </div>             
    </div>
</div>
<?php include "inc/footer.html" ?>
<script>
$(document).ready(function() {
	$(".title").find("ul li:eq(1)").addClass("active");	
	var i = $.cookie("photo");
	if(i == 1 ){
		$(".photo2").animate({height:"180px"});
		$.cookie("photo", "2", { expires: 7 });	
	}else {
		$(".photo2").height("180px");
		$.cookie("photo", "2", { expires: 7 });			
	}
});
</script>
</body>
</html>