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
<link href="<?php echo $themeRoot?>cxy/cxy_view.css" rel="stylesheet" type="text/css" />
<!--center-->
    <style type="text/css">
    body {
		background:url(<?php echo $article->img_url; ?>) no-repeat 50% 50px;
}
    </style>
<div class="center">
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
