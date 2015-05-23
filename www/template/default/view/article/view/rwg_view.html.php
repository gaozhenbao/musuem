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
<link href="<?php echo $themeRoot?>rwg/rwg_content.css" rel="stylesheet" type="text/css" />
<script>
var now_page = 1;
$(document).ready(function(){
	var s_heigh  = parseInt($(".right").height());
	get_page();
	//翻页
	$(".page_2 a").live("click",function(){
	  	now_page = parseInt($(this).text());
		var top = (now_page -1)*s_heigh;
		$(".right").animate({scrollTop:top+'px'},100);
		$(".page_2 a").removeClass("page_2_bg");
		$(this).addClass('page_2_bg');
	});
	
	$(".page_1").click(function(){
		if(now_page <=2){
			return;
		}else{
			var top = (parseInt(now_page) -1)*s_heigh;
			$(".right").animate({scrollTop:top+'px'},100);
			$(".page_2 a").removeClass("page_2_bg");
			$(".page_2 a").eq(parseInt(now_page) - 1).addClass('page_2_bg');
		}
	})

    <?php if(!empty($preid)){?>
    $("#pre_page").click(function(){
        window.location.href = "<?php echo helper::createLink('article', 'view', 'id='.(int)$preid.'&categoryID='.$category->id.'&pt=rwg');?>";
        return;
    });
    <?php }else{?>
    $('#pre_page').attr('style','color:#808080');
    <?php }?>

    <?php if(!empty($nextid)){?>
    $("#next_page").click(function(){
        window.location.href = "<?php echo helper::createLink('article', 'view', 'id='.(int)$nextid.'&categoryID='.$category->id.'&pt=rwg');?>";
        return;
    });
    <?php }else{ ?>
    $("#next_page").attr('style','color:#808080');
    <?php } ?>
})

function get_page(){
			//分页
	var s_h = parseInt($(".right").height());;
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
            <?php   $keys_array = array('content','xingtai','fenbu','shulei','mingzi','fenlei','xixing','qixidi','jiegou','shixing','fanzhi','fayu','qiyuan','wenhua','yongtu','xianzhuang','tupian','qita','dinianji','zhongnianji','gaonianji');?>
            <?php foreach($keys_array as $value){ ?>
                <?php    if(!empty($article->$value) && $article->$value !='默认内容'){ ?>
                    <?php    echo htmlspecialchars_decode($article->$value);break;?>
                <?php }?>
            <?php } ?>
        </div>
    </div>
	<div class="left">
    	<div class="left_txt">
        	<img src="<?php echo $article->img_url; ?>" alt="<?php echo $article->title; ?>" >
            <div class="left_title"></div><div class="left_title_f"><a title="<?php echo $article->title; ?>"><?php echo $article->title; ?></a></div>
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
<?php $mp3="rwg_bg.mp3";include TPL_ROOT . 'common/footer.html.php';?>
</body>
</html>