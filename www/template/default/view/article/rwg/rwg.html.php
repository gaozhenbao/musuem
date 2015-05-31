<link href="<?php echo $themeRoot?>rwg/rwg.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<script>
	$(document).ready(function(){
		if($(window).width() < 1420){
			var s_width = 474;
		}else{
			var s_width = 620;
		}
		var size = parseInt($(".banner_content").size());
		var all_length = size*s_width;
		var liwidth = s_width;
		var winwidth = parseInt($(".banner_txt_scro").width());
		var l_s = 0;
		$("#left_nav").click(function(){
			if(l_s < size-1){
				l_s ++;
				var length = -l_s*s_width;
				$(".banner_txt_scro").animate({left:length+'px'});
                $("#banner_content_img").attr('src',$("#content_img_"+l_s).val());
			}else{
				return false;
			}
		})

		$("#right_nav").click(function(){
			if(l_s >0){
				l_s --;
				var length = -l_s*s_width;
				$(".banner_txt_scro").animate({left:length+'px'});
                $("#banner_content_img").attr('src',$("#content_img_"+l_s).val());
			}else{
				return false;
			}
		})

	})
</script>
<div class="center">
	<div class="banner">
    	<table width="100%" border="0" cellpadding="0" cellspacing="0" height="485">
          <tr>
            <td width="100"><img src="<?php echo $themeRoot?>rwg/images/left_nav.png" width="100" height="90" id="left_nav"></td>
            <td align="center"><div class="banner_center">
            	<div class="banner_txt">
                	<img id="banner_content_img" src="<?php echo $content_img?>" class="banner_txt_img">
                    <div class="banner_txt_scro">
                    	<?php $i=0;foreach($types as $value){?>
                            <div class="banner_content">
                                <input type="hidden" id="content_img_<?php echo $i;?>" value="<?php echo $value->img_url;?>">
                                <div class="banner_contenttitle"><a href="./?m=article&f=browse&categoryID=<?php echo $value->id; ?>&type=list&pt=rwg"><?php echo $value->name; ?></a></div>
                                <div class="bcontent"><a href="./?m=article&f=view&id=<?php echo $value->article_id; ?>&pt=rwg"><?php echo substr(strip_tags(htmlspecialchars_decode($value->content)),0,245).'...[点击查看详细内容]'; ?></a></div>
                            </div>
                        <?php $i++; } ?>
                    </div>
                </div>
            </div></td>
            <td width="100"><img src="<?php echo $themeRoot?>rwg/images/right_nav.png" width="100" height="90" id="right_nav"></td>
          </tr>
        </table>

  </div>
  <DIV class="footer">
	<?php foreach($types as $value){?>
    	<a href="./?m=article&f=browse&categoryID=<?php echo $value->id; ?>&type=list&pt=rwg"><img src="<?php echo $value->imgurl; ?>" width="123" height="266"></a>
    <?php } ?>
</DIV>
</div>

<?php $mp3="rwg_bg.mp3";include TPL_ROOT . 'common/footer.html.php';?>
</body>
</html>
