<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>klt/klt_list2.css" rel="stylesheet" type="text/css" />
<script>
var size;
var all_length;
var pageID = 1;
var li_txt = '';
var sj = true;
var s_width;
var space;
var liwidth;
function getNewsList(pageID){
			  $.get("./?m=article&f=browse&categoryID=<?php echo $_GET['categoryID'] ?>&pageID="+pageID+"&moduleID=<?php echo $_GET['moduleID'] ?>&sj=json&pt=klt&type=2", function(result){
				var o_data = eval( '(' + result + ')' );
				if(count(o_data) == 0){
					sj = false;
				}else{
					var n =0;
					for(i in o_data){
						n++;
						//验证是否已经存在
						if($("#center_listimg_"+o_data[i].id+"_"+o_data[i].isFinal).html()){
							sj = false;
							return;
						}
						if(li_txt == ''){
                            if(o_data[i].isFinal == 1){
                                li_txt = '<li><div class="center_listtxt"><div class="center_listimg" id="center_listimg_'+o_data[i].id+'_'+o_data[i].isFinal+'"><a href="./?m=article&f=view&id='+o_data[i].id+'&categoryID=<?php echo $_GET['categoryID']?>&pt=<?php echo $_GET['pt'] ?>" title="'+o_data[i].title+'"><img src="'+o_data[i].img_url+'" width="239" height="242"></a><div class="center_title"></div><div class="center_title_a"><a href="./?m=article&f=view&id='+o_data[i].id+'&categoryID=<?php echo $_GET['categoryID']?>&pt=<?php echo $_GET['pt'] ?>" title="'+o_data[i].title+'"><span class="center_title_a_span">'+o_data[i].title+'</span></a></div></div></div><div class="center_listtxtspace"></div>';
                            }else{
                                li_txt = '<li><div class="center_listtxt"><div class="center_listimg" id="center_listimg_'+o_data[i].id+'_'+o_data[i].isFinal+'"><a href="./?m=article&f=browse&categoryID='+o_data[i].id+'&type=list&pt=<?php echo $_GET['pt'] ?>" title="'+o_data[i].title+'"><img src="'+o_data[i].img_url+'" width="239" height="242"></a><div class="center_title"></div><div class="center_title_a"><a href="./?m=article&f=browse&categoryID='+o_data[i].id+'&type=list&pt=<?php echo $_GET['pt'] ?>" title="'+o_data[i].title+'"><span class="center_title_a_span">'+o_data[i].title+'</span></a></div></div></div><div class="center_listtxtspace"></div>';
                            }
						}else{
                            if(o_data[i].isFinal == 1){
                                li_txt += '<div class="center_listtxt"><div class="center_listimg"  id="center_listimg_'+o_data[i].id+'_'+o_data[i].isFinal+'"><a href="./?m=article&f=view&id='+o_data[i].id+'&categoryID=<?php echo $_GET['categoryID']?>&pt=<?php echo $_GET['pt'] ?>" title="'+o_data[i].title+'"><img src="'+o_data[i].img_url+'" width="239" height="242"></a><div class="center_title"></div><div class="center_title_a"><a href="./?m=article&f=view&id='+o_data[i].id+'&categoryID=<?php echo $_GET['categoryID']?>&pt=<?php echo $_GET['pt'] ?>" title="'+o_data[i].title+'"><span class="center_title_a_span">'+o_data[i].title+'</span></a></div></div></div></li>';
                            }else{
                                li_txt += '<div class="center_listtxt"><div class="center_listimg"  id="center_listimg_'+o_data[i].id+'_'+o_data[i].isFinal+'"><a href="./?m=article&f=browse&categoryID='+o_data[i].id+'&type=list&pt=<?php echo $_GET['pt'] ?>" title="'+o_data[i].title+'"><img src="'+o_data[i].img_url+'" width="239" height="242"></a><div class="center_title"></div><div class="center_title_a"><a href="./?m=article&f=browse&categoryID='+o_data[i].id+'&type=list&pt=<?php echo $_GET['pt'] ?>" title="'+o_data[i].title+'"><span class="center_title_a_span">'+o_data[i].title+'</span></a></div></div></div></li>';
                            }
						//	if(n < count(o_data) -1){
								li_txt += '<div class="center_listspace"></div>';
						//	}
							$(".center_list>ul").append(li_txt);
							li_txt = '';
						}
					}
				}
				if(count(o_data) < 10 && li_txt != ''){
					li_txt = li_txt+'</li>';
					$(".center_list>ul").append(li_txt);
				}
				s_width = parseInt($(".center_list li").width());
		space = parseInt($(".center_listspace").width());
		liwidth = s_width+space;
		  });

}
	$(document).ready(function(){
		if($(window).width() < 1420){
			var num = 3;
		}else{
			var num = 4;
		}
		//加载数据
		getNewsList(pageID);
		$("#right_nav").click(function(){
			size = parseInt($(".center_list li").size());
			all_length = size*s_width+(size-1)*space;
			winwidth = parseInt($(".center_s").width());
			var offset = parseInt($('.center_list').css("left"));
			if(all_length+offset-winwidth >= liwidth && all_length !== 0){
				var length = offset - num*liwidth;
				$(".center_list").animate({left:length+'px'});
				if((all_length + length - winwidth < winwidth) && sj){
					//加载数据
					pageID ++;
					getNewsList(pageID);
				}
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
			all_length = size*s_width+(size-1)*space;
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

	function count(o){
    var t = typeof o;
    if(t == 'string'){
            return o.length;
    }else if(t == 'object'){
            var n = 0;
            for(var i in o){
                    n++;
            }
            return n;
    }
    return false;
};

</script>
<!--center-->
<div class="center">
  <div class="center_s">
    <div class="center_content">
      <div class="center_list">
        <ul>
        </ul>
      </div>
    </div>
  </div>
  <div class="left_nav left_navbg1" id="left_nav"></div>
  <div class="right_nav right_navbg1" id="right_nav"></div>
</div>
<?php $mp3="klt_bg.mp3";include TPL_ROOT . 'common/footer.html.php';?>
