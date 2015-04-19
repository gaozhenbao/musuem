<link href="<?php echo $themeRoot?>zlk_2/zlk_2.css" rel="stylesheet" type="text/css" />

<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<script>
	$(document).ready(function(){
		var size = $(".center_nav #list_1").size();
		var all_length = parseInt(size*312);
		var liwidth = 312;
		var winwidth = parseInt($(".center_s").width());
		$("#right_nav").click(function(){
			var offset = parseInt($('.center_content').css("left"));
			if(all_length+offset-winwidth >= liwidth && all_length !== 0){
				var length = offset - liwidth;
				$(".center_content").animate({left:length+'px'});
			}else if(all_length+offset-winwidth < liwidth && all_length !== 0){
				var length = offset - (all_length+offset-winwidth);
				all_length = 0;
				$(".center_content").animate({left:length+'px'});
			}else{
				return false;
			}
		})
		
		$("#left_nav").click(function(){
			var offset = parseInt($('.center_content').css("left"));
			if(offset <0 && -offset >= liwidth){
				var length = offset+liwidth;
				$(".center_content").animate({left:length+'px'});
			}else if(offset <0 && -offset < liwidth){
				var length = 0;
				all_length = parseInt(size*312);
				$(".center_content").animate({left:length+'px'});
			}else{
				return false;
			}
		})
		
	})
</script>
<div class="center">

    	<div class="center_s">

            <div class="center_content">

                <div class="center_nav">

                    <ul>
                    	<?php foreach($types as $value){?>
						
                        <li id="list_1">

                            <a class="center_navimg" href="./?m=article&f=browse&categoryID=<?php echo $value->id; ?>&type=3&pt=zlk"><img src="<?php echo $value->imgurl; ?>"></a>

                            <span class="center_navtitle">

                                <div class="center_navtitletxt"><?php echo $value->name;?></div>

                                <div class="center_navmenu">

                                    <ul>

                                    	<?php $i=0; foreach ($value->child as $val){ ?>

                                        	<?php $i++; if($i%4 == 0){?>

                                        		<li id="bg<?php echo $i; ?>"><a href="./?m=article&f=browse&categoryID=<?php echo $val->id; ?>&type=list&pt=zlk"><?php echo $val->name;?></a></li>

                                        	<?php }else {?>

                                            	<li id="bg<?php echo $i; ?>"><a href="./?m=article&f=browse&categoryID=<?php echo $val->id; ?>&type=list&pt=zlk"><?php echo $val->name;?></a></li><span class="center_navspace"></span>

                                            <?php } ?>

                                        <?php } ?>

                                    </ul>

                                </div>

                            </span>

                        </li>
                        
                        <?php } ?>
                    </ul>  

            </div>

            </div>

          </div>

           <div class="left_nav left_navbg1" id="left_nav"></div>

              <div class="right_nav right_navbg1" id="right_nav"></div>

    </div>

<?php include TPL_ROOT . 'common/footer.html.php';?>