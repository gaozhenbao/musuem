<?php include TPL_ROOT . 'common/header.html.php';?>
<link href="<?php echo $themeRoot?>index/index.css" rel="stylesheet" type="text/css" />
<div id="div_bg"><embed style="width: 0px;height: 0px;" src="<?php echo $themeRoot?>common/home_bg.mp3" loop="-1" id="bofangqi" autostart="true" hidden="true"></embed></div>
<script>
    $("#open_bg").click(function(){
        stop_click();
    })

    $("#stop_bg").click(function(){
        play_click('<?php echo $themeRoot?>common/home_bg.mp3');
    })
</script>
<div class="footer">
	<div class="footer_txt">
    	<div class="foot_list"><a href="?m=article&f=browse&categoryID=10&type=2&pt=zlk"><img src="<?php echo $themeRoot?>index/images/icon_1.png" width="181" height="188"></a></div>
        <div class="foot_list"><a href="?m=article&f=browse&categoryID=11&pt=rwg"><img src="<?php echo $themeRoot?>index/images/icon_2.png" width="181" height="188"></a></div>
        <div class="foot_list"><a href="?m=article&f=browse&categoryID=12&pt=tyg"><img src="<?php echo $themeRoot?>index/images/icon_3.png" width="181" height="188"></a></div>
        <div class="foot_list"><a href="?m=article&f=browse&categoryID=13&pt=klt"><img src="<?php echo $themeRoot?>index/images/icon_4.png" width="181" height="188"></a></div>
        <div class="foot_list"><a href="?m=article&f=browse&categoryID=14&pt=cxy"><img src="<?php echo $themeRoot?>index/images/icon_5.png" width="181" height="188"></a></div>
    </div>
</div>
</body>
</html>
