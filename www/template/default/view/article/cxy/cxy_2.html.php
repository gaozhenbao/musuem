<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>cxy/cxy_list2.css" rel="stylesheet" type="text/css" />
<script>
var size;
var all_length;
var pageID = 1;
var li_txt = '';
var sj = true;
var s_width=388;
var space=22;
var liwidth=410;
	$(document).ready(function(){
		//加载数据
		if($(window).width() < 1420){
			var num = 3;
		}else{
			var num = 3;
		}
		$("#right_nav").click(function(){
			size = parseInt($(".center_list li").size());
			all_length = size*s_width+(size)*space;
			var winwidth = parseInt($(".center_s").width());
			var offset = parseInt($('.center_list').css("left"));
			if(all_length+offset-winwidth >= liwidth && all_length !== 0){
				var length = offset - num*liwidth;
				$(".center_list").animate({left:length+'px'});
			}else if(all_length+offset-winwidth < liwidth && all_length !== 0 && all_length+offset-winwidth > 0){
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
			size = parseInt($(".center_list li").size());
			all_length = size*s_width+(size)*space;
			winwidth = parseInt($(".center_s").width());
			var offset = parseInt($('.center_list').css("left"));
			if(offset <0 && -offset >= liwidth){
				var length = offset+num*liwidth;
				$(".center_list").animate({left:length+'px'});
			}else if(offset <0 && -offset < liwidth){
				var length = 0;
				var all_length = size*s_width+(size-1)*space;
				$(".center_list").animate({left:length+'px'});
			}else{
				$(this).removeClass("right_navbg1").addClass("left_navbg2")
				return false;
			}
			$("#right_nav").removeClass("right_navbg2").addClass("right_navbg1")
		})
	})

</script>
<!--center-->
<div class="center">
  <div class="center_s">
    <div class="center_content">
      <div class="center_list">
        <ul>
                 <?php $i=0; foreach($types as $val){ $i++;?>
          <?php if($i%2 <> 0){

			  $str = '<li><div class="center_listtxt">

                    	<div class="center_listimg"><a href="./?m=article&f=browse&categoryID='.$val->id.'&moduleID='.$val->id.'&type=list&pt=cxy"><img src="'.$val->imgurl.'" width="259" height="262"></a></div>
                        <div class="center_listtitle"></div>
						<div class="center_title_a"><a title="'.$val->name.'" href="./?m=article&f=browse&categoryID='.$val->id.'&moduleID='.$val->id.'&type=list&pt=cxy">'.$val->name.'</a></div>
                    </div><div class="center_listtxtspace"></div>';
			  if($i == count($types)){
				  echo $str;
				}
          }else{
				$str .= '<div class="center_listtxt">
                    	<div class="center_listimg"><a href="./?m=article&f=browse&categoryID='.$val->id.'&moduleID='.$val->id.'&type=list&pt=cxy"><img src="'.$val->imgurl.'" width="259" height="262"></a></div>
                         <div class="center_listtitle"></div>
						<div class="center_title_a"><a title="'.$val->name.'" href="./?m=article&f=browse&categoryID='.$val->id.'&moduleID='.$val->id.'&type=list&pt=cxy">'.$val->name.'</a></div>
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
<?php $mp3="rwg_bg.mp3";include TPL_ROOT . 'common/footer.html.php';?>
