<link href="<?php echo $themeRoot?>rwg/rwg.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<script>
	$(document).ready(function(){
		var size = parseInt($(".banner_content").size());
		var all_length = size*474;
		var liwidth = 474;
		var winwidth = parseInt($(".banner_txt_scro").width());
		var l_s = 0;
		$("#left_nav").click(function(){
			if(l_s < size-1){
				l_s ++;
				var length = -l_s*474;
				$(".banner_txt_scro").animate({left:length+'px'});
			}else{
				return false;
			}
		})
		
		$("#right_nav").click(function(){
			if(l_s >0){
				l_s --;
				var length = -l_s*474;
				$(".banner_txt_scro").animate({left:length+'px'});
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
                	<img src="<?php echo $themeRoot?>rwg/images/rwgbanner_img.jpg" class="banner_txt_img">
                    <div class="banner_txt_scro">
                    	<?php foreach($types as $value){?>
                            <div class="banner_content">
                                <div class="banner_contenttitle"><a href="./?m=article&f=browse&categoryID=<?php echo $value->id; ?>&type=list&pt=rwg"><?php echo $value->name; ?></a></div>
                                <div class="bcontent"><a href="./?m=article&f=browse&categoryID=<?php echo $value->id; ?>&type=list&pt=rwg"><?php echo $value->desc; ?></a></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div></td>
            <td width="100"><img src="<?php echo $themeRoot?>rwg/images/right_nav.png" width="100" height="90" id="right_nav"></td>
          </tr>
        </table>

  </div>
</div>
<DIV class="footer">
	<?php foreach($types as $value){?>
    	<a href="./?m=article&f=browse&categoryID=<?php echo $value->id; ?>&type=list&pt=rwg"><img src="<?php echo $themeRoot?>rwg/images/sz1.png" width="123" height="266"></a>
    <?php } ?>
</DIV>
<?php include TPL_ROOT . 'common/footer.html.php';?>
</body>
</html>
