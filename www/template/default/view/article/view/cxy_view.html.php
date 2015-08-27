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
<script>
    var now = 0;
	var size;
	var time = 10000000;
	$(document).ready(function(){
         var hide_nav = getCookie('hide_menu');
         if(hide_nav == '1'){
             $('#menu_hidden').trigger('click');
         }
		 size = parseInt($(".scroimg ul li").size()) - 1;
		$(".scroimg li").each(function(){
            $(this).width($(window).width());
			$(this).height($(window).height());
		})
		$(".center_nav span").click(function(){
			time = 10000000;
			var val = parseInt($(this).text()) - 1;
			$(".center_nav span").removeClass('bg2').addClass('bg1');
			$(this).removeClass('bg1').addClass('bg2');
			$(".scroimg li").eq(now).hide();
			now = val;
			$(".scroimg li").eq(val).show();
		})
//        if(size != 0){
//            window.setInterval(scroing, time);
//        }else{
//            scroing();
//        }
    })

	function scroing(){
		if(now < size){
			$(".scroimg li").eq(now).fadeOut(1000);
			$(".center_nav span").removeClass('bg2').addClass('bg1');
			now++;
			$(".scroimg li").eq(now).fadeIn(2000);
			$(".center_nav span").eq(now).addClass('bg2');
		}else{
			$(".scroimg li").eq(now).fadeOut(1000);
			$(".center_nav span").removeClass('bg2').addClass('bg1');;
			now=0;
			$(".scroimg li").eq(now).fadeIn(2000);
			$(".center_nav span").eq(now).addClass('bg2');
		}
	}
</script>
<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>cxy/cxy_view.css" rel="stylesheet" type="text/css" />
<!--center-->
<div class="scroimg">
	<ul>
        <?php foreach($imgs as $key=>$val):?>
        <li style="background:url(<?php echo $val ?>) no-repeat center; <?php if($key!=0)echo 'display:none;' ?>"></li>
        <?php endforeach;?>
    </ul>
</div>
<div class="center">
		<div class="center_nav">
            <?php foreach($imgs as $key=>$val):?>
            	<?php if($key == 0){?>
        		<span class="bg2"><?php echo $key+1;?></span>
                <?php }else{ ?>
                <span class="bg1"><?php echo $key+1;?></span>
                <?php } ?>
            <?php endforeach;?>
        </div>
		<?php echo $ans; ?>
		<?php
        	if(!empty($nextid)){
			echo '<a href="./?m=article&f=view&id='.$nextid.'&pt='.$_GET['pt'].'&categoryID='.$_GET['categoryID'].'"><div class="left_nav left_navbg1"></div></a>';
			}else{
				echo '<div class="left_nav left_navbg2"></div>';
			}
			if(!empty($preid)){
				echo '<a href="./?m=article&f=view&id='.$preid.'&pt='.$_GET['pt'].'&categoryID='.$_GET['categoryID'].'"><div class="right_nav right_navbg1"></div></a>';
			}else{
				echo '<div class="right_nav right_navbg2"></div>';
			}
		?>
</div>
<div class="center_bottom">
	<div class="center_bottom_title">
    	<div class="center_bootom_titletxt"><?php echo $article->title; ?></div>
        <div class="center_bootom_txt">
        	<div class="center_bootom_txt1">
                <?php   $keys_array = array('content','xingtai','fenbu','shulei','mingzi','fenlei','xixing','qixidi','jiegou','shixing','fanzhi','fayu','qiyuan','wenhua','yongtu','xianzhuang','tupian','qita','dinianji','zhongnianji','gaonianji');?>
                <?php foreach($keys_array as $value){ ?>
                    <?php    if(!empty($article->$value) && $article->$value !='默认内容'){ ?>
                        <?php    echo htmlspecialchars_decode($article->$value);break; ?>
                    <?php }?>
                <?php } ?>
            </div>
            <div class="center_bootom_txt2">
            	<?php echo empty($article->author)?'':'作者：'.$article->author.'<br/>'; ?>
            	<?php echo empty($article->keywords)?'':'班级：'.$article->keywords.'<br/>'; ?>
            	<?php echo empty($article->daoshi)?'':'指导教师：'.$article->daoshi.'<br/>'; ?>
            	<?php echo empty($article->shijian)?'':'作品时间：'.$article->shijian.'<br/>'; ?>
            </div>
        </div>
    </div>
</div>
<?php $mp3="cxy_bg.mp3";include TPL_ROOT . 'common/footer.html.php';  ?>
