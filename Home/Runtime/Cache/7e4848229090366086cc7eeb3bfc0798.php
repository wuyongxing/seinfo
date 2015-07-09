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
    	<div class="box pull-left">
        	<div class="box_title"><a href="__URL__/news">通知公告</a></div>
            <a href="__URL__/news" class="more btn btn-small btn-primary disabled">查看更多</a>
            <ul class="unstyled">
				<?php if(is_array($l1)): $i = 0; $__LIST__ = $l1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l1): $mod = ($i % 2 );++$i;?><li style="width:606px;"><a href="__URL__/get_news?nid=<?php echo ($l1["nid"]); ?>"><?php echo ($l1["title"]); ?></a><span><?php echo (date('Y-m-d H:i:s',$l1["time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    	<div class="box pull-right" style="width:270px;">
        	<div class="box_title"><a href="__URL__/file">资料下载</a></div>
            <a href="__URL__/file" class="more" style="font-size:12px; color:#999;">更多</a>            
            <ul class="unstyled">
				<?php if(is_array($l2)): $i = 0; $__LIST__ = $l2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l2): $mod = ($i % 2 );++$i;?><li style="width:225px;"><a href="__APP__/Person/get_file?fid=<?php echo ($l2["fid"]); ?>"><?php echo ($l2["filename"]); ?></a><span><?php echo (date('Y-m-d H:i:s',$l2["time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>        
    </div>
    <div class="row">
    	<div class="box pull-left">
        	<div class="box_title"><a href="__URL__/homework?classify=1">作业分享</a></div>
            <a href="__URL__/homework?classify=1" class="more btn btn-small btn-primary disabled">查看更多</a>
            <ul class="unstyled">
				<?php if(is_array($l3)): $i = 0; $__LIST__ = $l3;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l3): $mod = ($i % 2 );++$i;?><li style="width:606px;"><a href="__URL__/get_homework?classify=1&hid=<?php echo ($l3["hid"]); ?>"><?php echo ($l3["title"]); ?></a><span><?php echo (date('Y-m-d H:i:s',$l3["time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    	<div class="box pull-right" style="width:270px;">
        	<div class="box_title"><a href="__URL__/homework?classify=2">生活娱乐</a></div>
                <a href="__URL__/homework?classify=2" class="more" style="font-size:12px; color:#999;">更多</a>
                <ul class="unstyled">
                <?php if(is_array($l4)): $i = 0; $__LIST__ = $l4;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$l4): $mod = ($i % 2 );++$i;?><li style="width:225px;"><a href="__URL__/get_homework?classify=2&hid=<?php echo ($l4["hid"]); ?>"><?php echo ($l4["title"]); ?></a><span><?php echo (date('Y-m-d H:i:s',$l4["time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>        
    </div>
</div>
<?php include "inc/footer.html" ?>
<script>
$(document).ready(function() {
	<!-- 保证主页Box高度一致 -->
	var box0 = $(".box:eq(0)").height();
	var box1 = $(".box:eq(1)").height();
	if(box0 >= box1){
		$(".box:eq(1)").animate({height:box0});
	}else if(box0 < box1){
		$(".box:eq(0)").animate({height:box1});
	}
	var box2 = $(".box:eq(2)").height();
	var box3 = $(".box:eq(3)").height();
	if(box2 >= box3){
		$(".box:eq(3)").animate({height:box2});
	}else if(box2 < box3){
		$(".box:eq(2)").animate({height:box3});
	}


	
	$(".title").find("ul li:eq(0)").addClass("active");
	var i = $.cookie("photo");
	if(i == 2 ){
		$(".photo2").height("180px");		
		$(".photo2").animate({height:"336px"});
		$.cookie("photo", "1", { expires: 7 });	
	}else {
		$(".photo2").height("336px")
		$.cookie("photo", "1", { expires: 7 });			
	}
});
</script>
</body>
</html>