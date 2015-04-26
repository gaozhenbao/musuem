<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>tyg/tyg.css" rel="stylesheet" type="text/css" />
    <!--center-->
    <div class="center">
    	<?php foreach( $types as $value){?>
    	<div class="center_list"><a class="center_navimg" href="./?m=article&f=browse&categoryID=<?php echo $value->id; ?>&moduleID=<?php echo $value->id; ?>&pt=tyg&type=list"><img src="<?php echo $value->imgurl; ?>"></a><div class="center_listtitle listtitle_bg1"><?php echo $value->name;?></div></div>
        <?php } ?>
    </div>
    <?php include TPL_ROOT . 'common/footer.html.php';?>