<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>cxy/cxy_list.css" rel="stylesheet" type="text/css" />
<script>
	$(document).ready(function(){
		if($(window).width() > 1420){
		$(".center_txt img").each(function(){
			var width = parseInt($(this).width());
			var height = parseInt($(this).height());
			$(this).width(width * 1.5);
			$(this).height(height * 1.5);
		})
	}
	})
</script>
<div class="center">
    <div class="center_txt">
        	<div class="center_list_1">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td rowspan="3" class="img1"><img src="<?php echo $themeRoot?>cxy/images/1_title.png"></td>
                    <td class="img2"><a href="./?m=article&f=view&categoryID=87&pt=cxy&id=0"><img src="<?php echo $themeRoot?>cxy/images/1_1.png"></a></td>
                  </tr>
                  <tr>
                    <td class="img2"><a href="./?m=article&f=view&categoryID=88&pt=cxy&id=0"><img src="<?php echo $themeRoot?>cxy/images/1_2.png"></a></td>
                  </tr>
                  <tr>
                    <td class="img2"><a href="./?m=article&f=view&categoryID=89&pt=cxy&id=0"><img src="<?php echo $themeRoot?>cxy/images/1_3.png"></a></td>
                  </tr>
                </table>

        </div>
      <div class="center_list_2">
      	<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="img1"><img src="<?php echo $themeRoot?>cxy/images/2_title.png"></td>
          </tr>
          <tr>
            <td class="img2"><a href="./?m=article&f=view&categoryID=90&pt=cxy&id=0"><img src="<?php echo $themeRoot?>cxy/images/2_1.png" ></a></td>
          </tr>
          <tr>
            <td class="img2"><a href="./?m=article&f=view&categoryID=91&pt=cxy&id=0"><img src="<?php echo $themeRoot?>cxy/images/2_2.png" ></a></td>
          </tr>
        </table>

      </div>
      <div class="center_list_1">
      	<table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td class="img2"><img src="<?php echo $themeRoot?>cxy/images/3_title.png"></td>
          </tr>
          <tr>
            <td class="img2"><a href="./?m=article&f=view&categoryID=92&pt=cxy&id=0"><img src="<?php echo $themeRoot?>cxy/images/3_1.png" ></a></td>
          </tr>
          <tr>
            <td class="img2"><a href="./?m=article&f=view&categoryID=90&pt=cxy&id=0"><img src="<?php echo $themeRoot?>cxy/images/3_2.png" ></a></td>
          </tr>
        </table>

      </div>
      <div class="center_list_2">
      	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td rowspan="3" class="img1"><img src="<?php echo $themeRoot?>cxy/images/4_title.png" width="81" height="227"></td>
                    <td class="img2"><a href="./?m=article&f=view&categoryID=89&pt=cxy&id=0"><img src="<?php echo $themeRoot?>cxy/images/4_1.png"></a></td>
                  </tr>
                  <tr>
                    <td class="img2"><a href="./?m=article&f=view&categoryID=90&pt=cxy&id=0"><img src="<?php echo $themeRoot?>cxy/images/4_2.png"></a></td>
                  </tr>
                  <tr>
                    <td class="img2"><a href="./?m=article&f=view&categoryID=91&pt=cxy&id=0"><img src="<?php echo $themeRoot?>cxy/images/4_3.png" ></a></td>
                  </tr>
                </table>
      </div>
      </div>
    </div>
<?php $mp3="cxy_bg.mp3";include TPL_ROOT . 'common/footer.html.php';?>
