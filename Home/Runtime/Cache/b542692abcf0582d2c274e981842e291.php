<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>陕西省西安市两化融合</title>
<?php include "inc/cssjs.html" ?>
</head>
<body>
<div class="container">
	<?php include "inc/title.html" ?>
    <div class="photo"><div class="photo2"></div></div>
    <div class="row">
    	<div class="box pull-left" style="width: 930px;">
        	<div class="box_title"><a href="#">文件下载</a></div>
            <ul class="unstyled">
            	<?php if(is_array($li)): $i = 0; $__LIST__ = $li;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$li): $mod = ($i % 2 );++$i;?><li style="width:850px;"><a href="__APP__/Person/get_file?fid=<?php echo ($li["fid"]); ?>"><?php echo ($li["filename"]); ?></a><span><?php echo (date('Y-m-d H:i:s',$li["time"])); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
			<div class="clear"></div>
            <div class="pagination pull-left">
                <ul>
                    <li style="clear:none"><a href="__URL__/file?pageid=<?php echo ($up); ?>">«</a></li>                                    
                    <li style="clear:none"><a href="__URL__/file?pageid=<?php echo ($cur); ?>">第<?php echo ($cur); ?>页,共<?php echo ($totalpages); ?>页</a></li>
                    <li style="clear:none"><a href="__URL__/file?pageid=<?php echo ($down); ?>">»</a></li>
                </ul>
            </div>            
        </div>              
    </div>
</div>
<?php include "inc/footer.html" ?>
<script>
$(document).ready(function() {
	$(".title").find("ul li:eq(2)").addClass("active");
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