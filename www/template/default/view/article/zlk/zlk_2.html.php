<link href="<?php echo $themeRoot?>zlk/zlk_2.css" rel="stylesheet" type="text/css" />

<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<script>
	$(document).ready(function(){
        var size = $(".center_nav #list_1").size();
        var all_length = size*300+(size-1)*12;
        var liwidth = 312;
        var winwidth = parseInt($(".center_s").width());
        $("#right_nav").click(function(){
			var offset = parseInt($('.center_content').css("left"));
			if(all_length+offset-winwidth >= liwidth && all_length !== 0){
				var length = offset - 3*liwidth;
				$(".center_content").animate({left:length+'px'});
			}else if(all_length+offset-winwidth < liwidth && all_length !== 0){
				var length = offset - (all_length+offset-winwidth)-12;
				all_length = 0;
				$(".center_content").animate({left:length+'px'});
			}else{
				$(this).removeClass("left_navbg1").addClass("right_navbg2");
				return false;
			}
			$("#left_nav").removeClass("left_navbg2").addClass("left_navbg1")
		})

		$("#left_nav").click(function(){
            var offset = parseInt($('.center_content').css("left"));
            all_length = size*300+(size-1)*12;
			if(offset <0 && -offset >= liwidth){
				var length = offset+3*liwidth;
                $(".center_content").animate({left:length+'px'});
            }else if(offset <0 && -offset < liwidth){
                var length = 0;
				$(".center_content").animate({left:length+'px'});
			}else{
				$(this).removeClass("right_navbg1").addClass("left_navbg2");
                $(".center_content").animate({left:0+'px'});
				return false;
			}
			$("#right_nav").removeClass("right_navbg2").addClass("right_navbg1")
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

                                <a href="./?m=article&f=browse&categoryID=<?php echo $value->id; ?>&type=3&pt=zlk"><div class="center_navtitletxt"><?php echo $value->name;?></div></a>

                                <div class="center_navmenu">

                                    <ul>

                                    	<?php $i=0; foreach ($value->child as $val){ ?>

                                        	<?php $i++; if($i%4 == 0){?>

                                        		<li id="bg<?php echo $i; ?>"><a href="./?m=article&f=browse&categoryID=<?php echo $val->id; ?>&type=list&pt=zlk"><?php echo '&nbsp;'.$val->name.'&nbsp;';?></a></li>

                                        	<?php }else {?>

                                            	<li id="bg<?php echo $i; ?>"><a href="./?m=article&f=browse&categoryID=<?php echo $val->id; ?>&type=list&pt=zlk"><?php echo '&nbsp;'.$val->name.'&nbsp;';?></a></li><span class="center_navspace"></span>

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

<?php $mp3="zlk_bg.mp3";include TPL_ROOT . 'common/footer.html.php';?>