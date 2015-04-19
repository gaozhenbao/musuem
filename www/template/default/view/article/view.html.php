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
<link href="<?php echo $themeRoot?>zlk_view/zlk_view.css" rel="stylesheet" type="text/css" />
<script>
var now_page = 1;
$(document).ready(function(){
    $("#menu_content,#menu_xingtai,#menu_fenbu,#menu_shulei,#menu_mingzi").click(function(){
        $(".right_txt").html($("#"+$(this).attr("id")+'_txt').html())
		$(".page_2").html('');
		get_page();
    })
	get_page();
	//翻页
	$(".page_2 a").live("click",function(){
	  	now_page = parseInt($(this).text());
		var top = (now_page -1)*420;
		$(".right_txt_scro").animate({scrollTop:top+'px'},100);
		$(".page_2 a").removeClass("page_2_bg");
		$(this).addClass('page_2_bg');
	});
	
	$(".page_1").click(function(){
		if(now_page <=2){
			return;
		}else{
			var top = (parseInt(now_page) -1)*420;
			$(".right_txt_scro").animate({scrollTop:top+'px'},100);
			$(".page_2 a").removeClass("page_2_bg");
			$(".page_2 a").eq(parseInt(now_page) - 1).addClass('page_2_bg');
		}
	})
	
		$("#pre_page").click(function(){
		if(now_page <=1){
			return;
		}else{
			now_page --;
			var top = (parseInt(now_page) -1)*420;
			$(".right_txt_scro").animate({scrollTop:top+'px'},100);
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
			var top = (parseInt(now_page) -1)*420;
			$(".right_txt_scro").animate({scrollTop:top+'px'},100);
			$(".page_2 a").removeClass("page_2_bg");
			$(".page_2 a").eq(parseInt(now_page) - 1).addClass('page_2_bg');
		}
	})
})

function get_page(){
			//分页
	var s_h = 420;
	var con_height = parseInt($(".right_txt").height());
	var n_page = Math.ceil(con_height/420);
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
        	<div class="right_txt_scro">
                <div class="right_txt">
                        <?php echo $article->content; ?>
                </div>
            </div>
            <div class="page">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" height="75">
                  <tr>
                    <td>
                    	<div class="page_1" id="pre_page">上一页</div>                    </td>
                    <td>
                    	<div class="page_2">
                        	
                        </div>
                    </td>
                    <td>
                    	<div class="page_1" id="next_page">下一页</div>
                    </td>
                  </tr>
                </table>

            </div>
        </div>
        <div class="left">
        	<div class="left_txt">
                <div class="left_txt_img">
                    <img src="<?php echo $article->img_url; ?>" width="367" height="369">
                </div>
                <div class="left_txt_txt">
                    中文名：<?php echo $article->title; ?><br/>
                    英文名：<?php echo $article->en_title; ?>
                </div>
             </div>
             <div class="left_tags">
                <?php if($article->content <> ''){ ?>
                    <div class="tag_nav1 tag_nav" id="menu_content">习性</div>
                <?php } ?>
                <?php if($article->xingtai <> ''){ ?>
                    <div class="tag_nav2 tag_nav" id="menu_xingtai">形态</div>
                <?php } ?>
                <?php if($article->fenbu <> ''){ ?>
                    <div class="tag_nav3 tag_nav" id="menu_fenbu">分布</div>
                <?php } ?>
                <?php if($article->shulei <> ''){ ?>
                    <div class="tag_nav4 tag_nav" id="menu_shulei">属类</div>
                <?php } ?>
                    <?php if($article->mingzi <> ''){ ?>
                    <div class="tag_nav5 tag_nav" id="menu_mingzi">名字</div>
                <?php } ?>
             </div>
        </div>
    </div>
<div class="hidden_content" id="menu_content_txt"><?php echo htmlspecialchars_decode($article->content); ?></div>
<div class="hidden_content" id="menu_xingtai_txt"><?php echo htmlspecialchars_decode($article->xingtai); ?></div>
<div class="hidden_content" id="menu_fenbu_txt"><?php echo htmlspecialchars_decode($article->fenbu); ?></div>
<div class="hidden_content" id="menu_shulei_txt"><?php echo htmlspecialchars_decode($article->shulei); ?></div>
<div class="hidden_content" id="menu_mingzi_txt"><?php echo htmlspecialchars_decode($article->mingzi); ?></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="80">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<div class="bottom">
	<div class="bottom_txt">
    	<table width="1020" border="0" cellspacing="0" cellpadding="0" height="44">
          <tr>
            <td width="575">ABCDEFGHIJKLMNOPQRSTUVWXYZ</td>
            <td class="nav_1" width="255">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;按首字母查询其他海洋生物</td>
            <td class="nav_2" width="100"><span id="reback">返回前页</span></td>
            <td align="center"><img src="<?php echo $themeRoot?>/common/images/b_img.gif" width="36" height="38"></td>
          </tr>
        </table>

    </div>
</div>