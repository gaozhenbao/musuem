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
<link href="<?php echo $themeRoot?>zlk/zlk_view.css" rel="stylesheet" type="text/css" />
<script>
var now_page = 1;
$(document).ready(function(){
    $(".tag_nav").click(function(){
        $(".right_txt").html($("#"+$(this).attr("id")+'_txt').html())
		$(".page_2").html('');
		get_page();
    })
//	get_page();
    $('.tag_nav:first').trigger('click');
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
<!--                        --><?php //echo $article->content; ?>
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
                 <?php $num = 0; ?>
                 <?php if( $num < 5 && $article->mingzi <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_mingzi">名字</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->shulei <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_shulei">属类</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->fenlei <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_fenlei">分类</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->fenbu <> ''){ $num++;?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_fenbu">分布</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->qixidi <> ''){ $num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_qixidi">栖息地</div>
                 <?php } ?>
                <?php if($num < 5 && $article->xingtai <> ''){$num++; ?>
                    <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_xingtai">形态</div>
                <?php } ?>
                 <?php if($num < 5 && $article->jiegou <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_jiegou">结构</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->xixing <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_xixing">习性</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->shixing <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_shixing">食性</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->fanzhi <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_fanzhi">繁殖</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->fayu <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_fayu">发育</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->qiyuan <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_qiyuan">起源</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->wenhua <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_wenhua">文化</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->yongtu <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_yongtu">用途</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->xianzhuang <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_xianzhuang">现状</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->tupian <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_tupian">图片</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->qita <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_qita">其他</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->dinianji <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_dinianji">低年级</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->zhongnianji <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_zhongnianji">中年级</div>
                 <?php } ?>
                 <?php if($num < 5 && $article->gaonianji <> ''){$num++; ?>
                     <div class="tag_nav<?php echo $num;?> tag_nav" id="menu_gaonianji">高年级</div>
                 <?php } ?>
             </div>
        </div>
    </div>
<div class="hidden_content" id="menu_mingzi_txt"><?php echo htmlspecialchars_decode($article->content); ?></div>
<div class="hidden_content" id="menu_shulei_txt"><?php echo htmlspecialchars_decode($article->shulei); ?></div>
<div class="hidden_content" id="menu_fenlei_txt"><?php echo htmlspecialchars_decode($article->fenlei); ?></div>
<div class="hidden_content" id="menu_fenbu_txt"><?php echo htmlspecialchars_decode($article->fenbu); ?></div>
<div class="hidden_content" id="menu_qixidi_txt"><?php echo htmlspecialchars_decode($article->qixidi); ?></div>
<div class="hidden_content" id="menu_xingtai_txt"><?php echo htmlspecialchars_decode($article->xingtai); ?></div>
<div class="hidden_content" id="menu_jiegou_txt"><?php echo htmlspecialchars_decode($article->jiegou); ?></div>
<div class="hidden_content" id="menu_xixing_txt"><?php echo htmlspecialchars_decode($article->xixing); ?></div>
<div class="hidden_content" id="menu_shixing_txt"><?php echo htmlspecialchars_decode($article->shixing); ?></div>
<div class="hidden_content" id="menu_fanzhi_txt"><?php echo htmlspecialchars_decode($article->fanzhi); ?></div>
<div class="hidden_content" id="menu_fayu_txt"><?php echo htmlspecialchars_decode($article->fayu); ?></div>
<div class="hidden_content" id="menu_qiyuan_txt"><?php echo htmlspecialchars_decode($article->qiyuan); ?></div>
<div class="hidden_content" id="menu_wenhua_txt"><?php echo htmlspecialchars_decode($article->wenhua); ?></div>
<div class="hidden_content" id="menu_yongtu_txt"><?php echo htmlspecialchars_decode($article->yongtu); ?></div>
<div class="hidden_content" id="menu_xianzhuang_txt"><?php echo htmlspecialchars_decode($article->xianzhuang); ?></div>
<div class="hidden_content" id="menu_tupian_txt"><?php echo htmlspecialchars_decode($article->tupian); ?></div>
<div class="hidden_content" id="menu_qita_txt"><?php echo htmlspecialchars_decode($article->qita); ?></div>
<div class="hidden_content" id="menu_dinianji_txt"><?php echo htmlspecialchars_decode($article->dinianji); ?></div>
<div class="hidden_content" id="menu_zhongnianji_txt"><?php echo htmlspecialchars_decode($article->zhongnianji); ?></div>
<div class="hidden_content" id="menu_gaonianji_txt"><?php echo htmlspecialchars_decode($article->gaonianji); ?></div>

<table width="100%" border="0" cellspacing="0" cellpadding="0" height="80">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<div class="bottom">
	<div class="bottom_txt">
    	<table width="1020" border="0" cellspacing="0" cellpadding="0" height="44">
          <tr id="load" style="display: none"><td>努力查找资料中,请稍候哦</td></tr>
          <tr>
            <td width="575">
            	<span class="search-letter">A</span><span class="search-letter">B</span><span class="search-letter">C</span><span class="search-letter">D</span><span class="search-letter">E</span><span class="search-letter">F</span><span class="search-letter">G</span><span class="search-letter">H</span><span class="search-letter">I</span><span class="search-letter">J</span><span class="search-letter">K</span><span class="search-letter">L</span><span class="search-letter">M</span><span class="search-letter">N</span><span class="search-letter">O</span><span class="search-letter">P</span><span class="search-letter">Q</span><span class="search-letter">R</span><span class="search-letter">S</span><span class="search-letter">T</span><span class="search-letter">U</span><span class="search-letter">V</span><span class="search-letter">W</span><span class="search-letter">X</span><span class="search-letter">Y</span><span class="search-letter">Z</span>
            </td>
            <td class="nav_1" width="255">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;按首字母查询其他海洋生物</td>
            <td class="nav_2" width="100"><span id="reback">返回前页</span></td>
            <td align="center"><img src="<?php echo $themeRoot?>/common/images/b_img.gif" width="36" height="38"></td>
          </tr>
        </table>

    </div>
</div>
<div class="srearch">
	<div class="search_close">关闭</div>
	<div class="search_txt">
    	<div class="search_txt_1"><a href="#">动物馆</a></div>
        <div class="search_txt_2"><a href="#">大马哈鱼</a></div>
    </div>
</div>
<script type="text/javascript">
    $('.search-letter').bind('click',function(){
        var search = $(this).text();
        $.ajax({
            url: 'index.php?m=article&f=view&id=131&pt=zlk&s='+search,
            type: 'GET',
            dataType: 'json',
            beforeSend: function() {
//                $("#load").attr('style','display: inline');
            },
            success: function(response) {
                console.log(response);
//                $("#load").attr('style','display: none');

            },
            error:function(){
                $("#load").attr('style','display: none');
            }
        });
    });
</script>