<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>rwg/rwg_list.css" rel="stylesheet" type="text/css" />
<script>
var size;
var all_length;
var liwidth = 281;
var pageID = 1;
var li_txt = '';
var sj = true;
function getNewsList(pageID){
			  $.get("./?m=article&f=browse&categoryID=<?php echo $_GET['categoryID'] ?>&pageID="+pageID+"&moduleID=<?php echo $_GET['moduleID'] ?>&sj=json", function(result){
				var o_data = eval( '(' + result + ')' );
				if(count(o_data) == 0){
					sj = false;
				}else{
					var n =0;
					for(i in o_data){
						n++;
						//验证是否已经存在
						if($("#center_listimg_"+o_data[i].id).html()){
							sj = false;
							return;
						}
						if(li_txt == ''){
							li_txt = '<li><div class="center_listtxt"><div class="center_listimg" id="center_listimg_'+o_data[i].id+'"><a href="./?m=article&f=view&id='+o_data[i].id+'&pt=<?php echo $_GET['pt'] ?>" title="'+o_data[i].title+'"><img src="'+o_data[i].img_url+'" width="259" height="262"></a><div class="center_title"></div><div class="center_title_a"><a href="./?m=article&f=view&id='+o_data[i].id+'&pt=<?php echo $_GET['pt'] ?>" title="'+o_data[i].title+'">'+o_data[i].title+'</a></div></div></div><div class="center_listtxtspace"></div>';
						}else{
							li_txt += '<div class="center_listtxt"><div class="center_listimg"  id="center_listimg_'+o_data[i].id+'"><a href="./?m=article&f=view&id='+o_data[i].id+'&pt=<?php echo $_GET['pt'] ?>" title="'+o_data[i].title+'"><img src="'+o_data[i].img_url+'" width="259" height="262"></a><div class="center_title"></div><div class="center_title_a"><a href="./?m=article&f=view&id='+o_data[i].id+'&pt=<?php echo $_GET['pt'] ?>" title="'+o_data[i].title+'">'+o_data[i].title+'</a></div></div></div></li>';
						//	if(n < count(o_data) -1){
								li_txt += '<div class="center_listspace"></div>';
						//	}
							$(".center_list>ul").append(li_txt);
							li_txt = '';
						}
					}
									if(count(o_data) < 10 && li_txt != ''){

					li_txt = li_txt+'</li>';
					$(".center_list>ul").append(li_txt);
				}
				}

		  });

}
	$(document).ready(function(){
		//加载数据
		getNewsList(pageID);
		$("#right_nav").click(function(){
			size = parseInt($(".center_list li").size());
			all_length = size*259+(size-1)*22;
			winwidth = parseInt($(".center_s").width());
			var offset = parseInt($('.center_list').css("left"));
			if(all_length+offset-winwidth >= liwidth && all_length !== 0){
				var length = offset - 3*liwidth;
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
			all_length = size*259+(size-1)*22;
			winwidth = parseInt($(".center_s").width());
			var offset = parseInt($('.center_list').css("left"));
			if(offset <0 && -offset >= liwidth){
				var length = offset+3*liwidth;
				$(".center_list").animate({left:length+'px'});
			}else if(offset <0 && -offset < liwidth){
				var length = 0;
				var all_length = size*259+(size-1)*22;
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
<?php $mp3="rwg_bg.mp3";include TPL_ROOT . 'common/footer.html.php';?>
