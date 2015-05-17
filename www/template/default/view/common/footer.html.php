<div class="bottom">
	<div class="bottom_txt">
    	<table width="1020" border="0" cellspacing="0" cellpadding="0" height="44">
          <tr>
            <td width="575">
            	<div class="bottom_nav"><a href="?m=article&f=browse&categoryID=10&type=2&pt=zlk" <?php if($_GET['pt'] == 'zlk'){ ?> class="bottom_navbg" <?php } ?> >资料库</a></div>
                <div class="bottom_nav"><a href="?m=article&f=browse&categoryID=11&pt=rwg" <?php if($_GET['pt'] == 'rwg'){ ?> class="bottom_navbg" <?php } ?>>人文馆</a></div>
                <div class="bottom_nav"><a href="?m=article&f=browse&categoryID=12&pt=tyg" <?php if($_GET['pt'] == 'tyg'){ ?> class="bottom_navbg" <?php } ?>>体验宫</a></div>
                <div class="bottom_nav"><a href="?m=article&f=browse&categoryID=13&pt=klt" <?php if($_GET['pt'] == 'klt'){ ?> class="bottom_navbg" <?php } ?>>快乐厅</a></div>
                <div class="bottom_nav"><a href="?m=article&f=browse&categoryID=14&pt=cxy" <?php if($_GET['pt'] == 'cxy'){ ?> class="bottom_navbg" <?php } ?>>畅想园</a></div>

            </td>
            <td class="nav_1" width="255">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="menu_hidden">收起导航栏</span></td>
            <td class="nav_2" width="100"><span id="reback">返回前页</span></td>
            <td align="center"><img id="reback_img" src="<?php echo $themeRoot?>/common/images/b_img.gif" width="36" height="38"></td>
          </tr>
        </table>

    </div>
</div>
<div id="div_bg"><embed style="width: 0px;height: 0px;" src="<?php echo $themeRoot?>common/<?php echo $mp3;?>" loop="-1" id="bofangqi" autostart="true" hidden="true"></embed></div>
<img src="<?php echo $themeRoot?>common/images/slide.png" class="show_btn">

<script>
    $("#open_bg").click(function(){
        stop_click();
    })

    $("#stop_bg").click(function(){
        play_click('<?php echo $themeRoot?>common/<?php echo $mp3;?>');
    })
</script>