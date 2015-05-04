<link href="<?php echo $themeRoot?>zlk/zlk_3.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<script>
	$(document).ready(function(){
		var size = parseInt($(".center_list li").size());
		var all_length = size*240+(size-1)*20;
		var liwidth = 260;
		var winwidth = parseInt($(".center_s").width());
		$("#right_nav").click(function(){
			var offset = parseInt($('.center_list').css("left"));
			if(all_length+offset-winwidth >= liwidth && all_length !== 0){
				var length = offset - liwidth;
				$(".center_list").animate({left:length+'px'});
			}else if(all_length+offset-winwidth < liwidth && all_length !== 0){
				var length = offset - (all_length+offset-winwidth);
				all_length = 0;
				$(".center_list").animate({left:length+'px'});
			}else{
				$(this).removeClass("left_navbg1").addClass("right_navbg2")
				return false;
			}
			$("#left_nav").removeClass("left_navbg2").addClass("left_navbg1")
		})
		
		$("#left_nav").click(function(){
			var offset = parseInt($('.center_list').css("left"));
			if(offset <0 && -offset >= liwidth){
				var length = offset+liwidth;
				$(".center_list").animate({left:length+'px'});
			}else if(offset <0 && -offset < liwidth){
				var length = 0;
				all_length = size*240+(size-1)*20;
				$(".center_list").animate({left:length+'px'});
			}else{
				$(this).removeClass("right_navbg1").addClass("left_navbg2")
				return false;
			}
			$("#right_nav").removeClass("right_navbg2").addClass("right_navbg1")
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

                    	<div class="center_listimg"><a href="./?m=article&f=browse&categoryID='.$val->id.'&moduleID='.$val->id.'&type=list&pt=zlk"><img src="'.$val->imgurl.'"></a></div>
                        <div class="center_listtitle"><a href="./?m=article&f=browse&categoryID='.$val->id.'&moduleID='.$val->id.'&type=list&pt=zlk">'.$val->name.'</a></div>
                    </div><div class="center_listtxtspace"></div>';
			  if($i == count($types)){
				  echo $str;
				}
          }else{
				$str .= '<div class="center_listtxt">
                    	<div class="center_listimg"><a href="./?m=article&f=browse&categoryID='.$val->id.'&moduleID='.$val->id.'&type=list&pt=zlk"><img src="'.$val->imgurl.'"></a></div>
                        <div class="center_listtitle"><a href="./?m=article&f=browse&categoryID='.$val->id.'&moduleID='.$val->id.'&type=list&pt=zlk">'.$val->name.'</a></div>
                    </div></li>';
				echo $str; 
				$str = '';

		 }?>
			 <?php if($i%2 == 0){?>
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
