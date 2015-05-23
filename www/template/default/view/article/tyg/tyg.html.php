<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>tyg/tyg.css" rel="stylesheet" type="text/css" />
    <!--center-->
    <div class="center">
    	<?php $i=1; foreach( $types as $value){?>
    	<div class="center_list"><a class="center_navimg" href="./?m=article&f=browse&categoryID=<?php echo $value->id; ?>&moduleID=<?php echo $value->id; ?>&pt=tyg&type=list"><img src="<?php echo $value->imgurl; ?>"></a><div class="center_listtitle listtitle_bg<?php echo $i; ?>"><a class="center_navimg" href="./?m=article&f=browse&categoryID=<?php echo $value->id; ?>&moduleID=<?php echo $value->id; ?>&pt=tyg&type=list"><?php echo $value->name;?></a></div></div>
        <?php $i++; } ?>
    </div>
    <?php $mp3="tyg_bg.mp3";include TPL_ROOT . 'common/footer.html.php';?>