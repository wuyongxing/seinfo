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
    <input type="text" id="classify" value="<?php echo ($classify); ?>" style="display: none;"/>
    <div class="photo"><div class="photo2"></div></div>
    <div class="row">
    	<div class="box pull-left" style="width: 930px;">
            <ol class="breadcrumb" style="float:left; width:900px">
                <li style="float:left"><a href="index.php">首页</a> <span class="divider">/</span></li>
                <li style="float:left"><a href="__URL__/homework?classify=<?php echo ($classify); ?>"><?php if($classify == 1): ?>作业分享<?php endif; if($classify == 2): ?>生活娱乐<?php endif; ?></a> <span class="divider">/</span></li>
                <li style="float:left; background-color:transparent" class="active"><?php echo ($homework["title"]); ?></li>
            </ol>
            <div class="news_content" style="width :930px;">
            	<h4><?php echo ($homework["title"]); ?></h4>
                <span class="time"><?php echo (date('Y-m-d H:i:s',$homework["time"])); ?>&nbsp<?php echo ($name); ?>发布</span>
                <div class="news_content_box">
<!--//////////////////////////////////////////////////////////////--> 
					<pre style="background-color: white;"><?php echo ($homework["content"]); ?></pre>                             
<!--//////////////////////////////////////////////////////////////-->                
                </div>
            </div>  
            <div class="clear"></div>
            <div class="pagination text-center">
                <ul>
                    <li style="clear:none"></li>
                </ul>
            </div>
            <?php if(is_array($li)): $k = 0; $__LIST__ = $li;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="news_content" style="width :930px;">
                <h4 style="color: black;"><?php echo ($k); ?>楼</h4>
                <span class="time"><?php echo (date('Y-m-d H:i:s',$vo["time"])); ?>&nbsp<?php echo ($vo["name"]); ?>发布</span>
                <div class="news_content_box">
<!--//////////////////////////////////////////////////////////////--> 
                    <pre style="background-color: white;"><?php echo ($vo["content"]); ?></pre>                             
<!--//////////////////////////////////////////////////////////////-->                
                </div>
            </div>  
            <div class="clear"></div>
            <div class="pagination text-center">
                <ul>
                    <li style="clear:none"></li>
                </ul>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <form action="__URL__/add_comment" method="get">
                <input name="classify" value="<?php echo ($classify); ?>" style="display: none;"/>
                <input name="hid" value="<?php echo ($homework["hid"]); ?>" style="display: none;"/>
                <div class="news_content" style="width :930px;">
                    <h4 style="color: black;">添加评论</h4>
                    <span class="time"></span>
                    <div class="news_content_box">
    <!--//////////////////////////////////////////////////////////////--> 
                        <input type="text" name="content" style="width: 800px;" />
                        <input type="submit" class="btn btn-default btn-info"/>                             
    <!--//////////////////////////////////////////////////////////////-->                
                    </div>
                </div>  
                <div class="clear"></div>
                <div class="pagination text-center">
                    <ul>
                        <li style="clear:none"></li>
                    </ul>
                </div>
            </form>
        </div>             
    </div>
</div>
<?php include "inc/footer.html" ?>
<script>
$(document).ready(function() {
	$(function(){
        var no = parseInt($("#classify").val()) + 2;
        $(".title").find("ul li:eq("+no+")").addClass("active");
    });
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