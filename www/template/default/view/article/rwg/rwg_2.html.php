<link href="<?php echo $themeRoot?>rwg/rwg_2.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<script>
	$(document).ready(function(){
		$(document).ready(function(){
		var size = parseInt($(".center_list li").size());
		var all_length = size*298+(size-1)*13;
		var liwidth = 311;
		var winwidth = parseInt($(".center_s").width());
		$("#right_nav").click(function(){
			if(size <= 3){
				return;
			}
			var offset = parseInt($('.center_list').css("left"));
			if(all_length+offset-winwidth >= liwidth && all_length !== 0){
				var length = offset - liwidth;
				$(".center_list").animate({left:length+'px'});
			}else if(all_length+offset-winwidth < liwidth && all_length !== 0){
				var length = offset - (all_length+offset-winwidth);
				all_length = 0;
				$(".center_list").animate({left:length+'px'});
			}else{
				return false;
			}
		})

		$("#left_nav").click(function(){
			if(size <= 3){
				return;
			}
			var offset = parseInt($('.center_list').css("left"));
			if(offset <0 && -offset >= liwidth){
				var length = offset+liwidth;
				$(".center_list").animate({left:length+'px'});
			}else if(offset <0 && -offset < liwidth){
				var length = 0;
				all_length = size*298+(size-1)*13;
				$(".center_list").animate({left:length+'px'});
			}else{
				return false;
			}
		})

	})
	})
</script>
<div class="center">
    	<div class="center_s">
        	<div class="center_content">
    		<div class="center_list">
        	<ul>
            	<?php $i=0; foreach($types as $val){ $i++;?>
          <?php if($i%2 <> 0){
			  $str = '<li><div class="center_listtxt">
						<div class="center_img">
							<a href="./?m=article&f=browse&categoryID='.$val->id.'&pt=rwg&type=list&moduleID='.$val->id.'"><img src="'.$val->imgurl.'" width="218" height="205"></a>
                        	<div class="center_titlebg1">
                            	<a href="./?m=article&f=browse&categoryID='.$val->id.'&pt=rwg&type=list&moduleID='.$val->id.'"><div class="center_title">'.$val->name.'</div></a>
                            </div>
                        </div>
                    </div><div class="center_listtxtspace"></div>';
			  if($i == count($types)){
				  echo $str;
				}
          }else{
				$str .= '<div class="center_listtxt">
                    	<div class="center_img">
							<a href="./?m=article&f=browse&categoryID='.$val->id.'&pt=rwg&type=list&moduleID='.$val->id.'"><img src="'.$val->imgurl.'" width="218" height="205"></a>
                        	<div class="center_titlebg1">
                            	<a href="./?m=article&f=browse&categoryID='.$val->id.'&pt=rwg&type=list&moduleID='.$val->id.'"><div class="center_title">'.$val->name.'</div></a>
                            </div>
                        </div>
                    </div></li>';
				echo $str;
				$str = '';

		 }?>
			 <?php if($i%2 == 0 && $i < count($types)){?>
              <div class="center_listspace"></div>
              <?php } ?>
          <?php } ?>
            </ul>
        </div>
        </div>
        </div>

        <div class="left_nav left_navbg1" id="left_nav"></div>
        <div class="right_nav right_navbg1" id="right_nav"></div>
    </div>
<?php include TPL_ROOT . 'common/footer.html.php';?>
</body>
</html>
