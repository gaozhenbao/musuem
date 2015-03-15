<link href="<?php echo $themeRoot?>zlk_2/zlk_2.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<div class="center">
    	<div class="center_s">
            <div class="center_content">
                <div class="center_nav">
                    <ul>
                    	<?php foreach($types as $value){?>
                        <li>
                            <a class="center_navimg" href="./?m=article&f=browse&moduleID=<?php echo $value->id; ?>&type=3&pt=zlk"><img src="<?php echo $value->imgurl; ?>"></a>
                            <span class="center_navtitle">
                                <div class="center_navtitletxt"><?php echo $value->name;?></div>
                                <div class="center_navmenu">
                                    <ul>
                                    	<?php $i=0; foreach ($value->child as $val){ ?>
                                        	<?php $i++; if($i%4 == 0){?>
                                        		<li id="bg<?php echo $i; ?>"><?php echo $val->name;?></li>
                                        	<?php }else {?>
                                            	<li id="bg<?php echo $i; ?>"><?php echo $val->name;?></li><span class="center_navspace"></span>
                                            <?php } ?>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </span>
                        </li>
        
                        <?php } ?>
                    </ul>  
            </div>
            </div>
          </div>
           <div class="left_nav left_navbg1"></div>
              <div class="right_nav right_navbg1"></div>
    </div>
<?php include TPL_ROOT . 'common/footer.html.php';?>