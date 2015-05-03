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
		<?php
        	if(!empty($preid)){
			echo 'aaaaaaaaaaaaaa';
			echo '<a href="./?m=article&f=view&id='.$preid.'&pt='.$_GET['pt'].'&categoryID='.$_GET['categoryID'].'"><div class="left_nav left_navbg1"></div></a>';
			}else{
				echo '<div class="left_nav left_navbg2"></div>';
			}
			if(!empty($nextid)){
				echo '<a href="./?m=article&f=view&id='.$nextid.'&pt='.$_GET['pt'].'&categoryID='.$_GET['categoryID'].'"><div class="right_nav right_navbg1"></div></a>';
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
            	<?php echo $article->content; ?>
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
<?php include TPL_ROOT . 'common/footer.html.php';  ?>
