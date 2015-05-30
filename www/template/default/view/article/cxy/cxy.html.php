<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>cxy/cxy.css" rel="stylesheet" type="text/css" />
<script>
	$(document).ready(function(){
		if($(window).width() > 1420){
		$(".center_txt img").each(function(){
			var width = parseInt($(this).width());
			var height = parseInt($(this).height());
			$(this).width(width * 1.5);
			$(this).height(height * 1.5);
		})
	}
	})
</script>
<div class="center">
    <div class="center_txt">
        	<div class="center_list_1 p1">
            	<a href="?m=article&f=browse&categoryID=83&pt=cxy&type=list"><img src="<?php echo $themeRoot?>cxy/images/1_title.png" width="81" height="227"></a>

        </div>
      <div class="center_list_2 p2">
      	<a href="?m=article&f=browse&categoryID=84&pt=cxy&type=2"><img src="<?php echo $themeRoot?>cxy/images/2_title.png" width="263" height="67"></a>

      </div>
      <div class="center_list_1 p3">
      	<a href="?m=article&f=browse&categoryID=85&pt=cxy&type=list"><img src="<?php echo $themeRoot?>cxy/images/3_title.png" width="264" height="65"></a>

      </div>
      <div class="center_list_2 p4">
      	<a href="?m=article&f=browse&categoryID=83&pt=cxy&type=list"><img src="<?php echo $themeRoot?>cxy/images/4_title.png" width="81" height="227"></a>
      </div>
      </div>
    </div>
<?php $mp3="cxy_bg.mp3";include TPL_ROOT . 'common/footer.html.php';?>
