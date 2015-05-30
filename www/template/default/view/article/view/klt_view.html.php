<?php 
include TPL_ROOT . 'common/header.html.php'; 
/* set categoryPath for topNav highlight. */
js::set('path', $article->path);
js::set('articleID', $article->id);
js::set('categoryID', $category->id);
js::set('categoryPath', explode(',', trim($category->path, ',')));
css::internal($article->css);
js::execute($article->js);
?>
<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>klt/klt_view.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $themeRoot?>/klt/swfobject.js"></script>
<script>
var now_page = 1;
$(document).ready(function(){
	var s_heigh  = parseInt($(".right_txt").height());
	get_page()
	//翻页
	$(".page_2 a").live("click",function(){
	  	now_page = parseInt($(this).text());
		var top = (now_page -1)*s_heigh;
		$(".right_txt").animate({scrollTop:top+'px'},100);
		$(".page_2 a").removeClass("page_2_bg");
		$(this).addClass('page_2_bg');
	});
	
	$(".page_1").click(function(){
		if(now_page <=2){
			return;
		}else{
			var top = (parseInt(now_page) -1)*s_heigh;
			$(".right_txt").animate({scrollTop:top+'px'},100);
			$(".page_2 a").removeClass("page_2_bg");
			$(".page_2 a").eq(parseInt(now_page) - 1).addClass('page_2_bg');
		}
	})
	
		$("#pre_page").click(function(){
		if(now_page <=1){
			return;
		}else{
			now_page --;
			var top = (parseInt(now_page) -1)*s_heigh;
			$(".right_txt").animate({scrollTop:top+'px'},100);
			$(".page_2 a").removeClass("page_2_bg");
			$(".page_2 a").eq(parseInt(now_page) - 1).addClass('page_2_bg');
		}
	})
	
			$("#next_page").click(function(){
				var a_size = $(".page_2 a").size();
		if(now_page >= a_size){
			return;
		}else{
			now_page++;
			var top = (parseInt(now_page) -1)*s_heigh;
			$(".right_txt").animate({scrollTop:top+'px'},100);
			$(".page_2 a").removeClass("page_2_bg");
			$(".page_2 a").eq(parseInt(now_page) - 1).addClass('page_2_bg');
		}
	})
	
	$(".title_close").click(function(){
		$(".left_title_f,.left_title").hide();
	})
})

function get_page(){
			//分页
	var s_h = parseInt($(".right_txt").height());;
	var con_height = parseInt($(".right_txt").height());
	var n_page = Math.ceil(con_height/s_h);
	if(n_page ==0){
		n_page =1;
	}
	$(".page_2").html('');
	for(var i=1; i<=n_page; i++){
		if(i==1){
			$(".page_2").append('<a class="page_2_bg">'+i+'</a>');
		}else{
			$(".page_2").append('<a>'+i+'</a>');
		}
	}
}

</script>

<!--center-->
<div class="center">
	<div class="right">
    	<div class="right_txt">
        	<div class="right_txt_sro">
        		<?php echo $article->content; ?>
            </div>
        </div>
    </div>
	<div class="left">
    	<div class="left_txt" id="CuPlayer">
        	<?php
            	if(!empty($article->flv_url) && strtolower(substr($article->flv_url,strlen($article->flv_url)-3,3)) != 'swf'){
			?>
        	<script type="text/javascript">
var so = new SWFObject("<?php echo $themeRoot?>/klt/CuPlayerMiniV10_Black_S.swf","CuPlayer",$(".left_txt").width(),$(".left_txt").height(),"9","#000000");
so.addParam("allowfullscreen","true");
so.addParam("allowscriptaccess","always");
so.addParam("wmode","opaque");
so.addParam("quality","high");
so.addParam("salign","lt");
so.addVariable("CuPlayerFile","<?php echo $article->flv_url; ?>"); //绝对地址 
so.addVariable("CuPlayerImage","/cu/FreeDown/Images/flashChangfa2.jpg");
so.addVariable("CuPlayerShowImage","true");
so.addVariable("CuPlayerWidth",$(".left_txt").width());
so.addVariable("CuPlayerHeight",$(".left_txt").height());
so.addVariable("CuPlayerAutoPlay","false");
so.addVariable("CuPlayerAutoRepeat","false");
so.addVariable("CuPlayerAutoRepeat","false");
so.addVariable("CuPlayerShowControl","true");
so.addVariable("CuPlayerAutoHideControl","false");
so.write("CuPlayer"); 
</script>
<?php }else if(strtolower(substr($article->flv_url,strlen($article->flv_url)-3,3)) == 'swf'){ ?>
<embed src="<?php echo $article->flv_url;?>" type="application/x-shockwave-flash" >
<?php  }else{ ?>
<img src="<?php echo $article->img_url; ?>">
<?php } ?>
            <div class="left_title"></div><div class="left_title_f"><span class="title_close">关闭</span><a href="#"><?php echo $article->title; ?></a></div>
        </div>
    </div>
    <div class="page">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" height="75">
                  <tr>
                    <td>
                    	<div class="page_1" id="pre_page">上一篇</div>                    </td>
                    <td>
                    	<div class="page_2">
                        	
                        </div>
                    </td>
                    <td>
                    	<div class="page_1" id="next_page">下一篇</div>
                    </td>
                  </tr>
                </table>

            </div>
</div>
<script>
        <?php if(!empty($preid)){?>
        $("#pre_page").click(function(){
            window.location.href = "<?php echo helper::createLink('article', 'view', 'id='.(int)$preid.'&categoryID='.$category->id.'&pt=klt');?>";
            return;
        });
        <?php }else{?>
        $('#pre_page').attr('style','color:#808080');
        <?php }?>

        <?php if(!empty($nextid)){?>
        $("#next_page").click(function(){
            window.location.href = "<?php echo helper::createLink('article', 'view', 'id='.(int)$nextid.'&categoryID='.$category->id.'&pt=klt');?>";
            return;
        });
        <?php }else{ ?>
        $("#next_page").attr('style','color:#808080');
        <?php } ?>
</script>
<?php $mp3="klt_bg.mp3";include TPL_ROOT . 'common/footer.html.php';?>
<script>
    stop_click();
</script>
</body>
</html>