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
<link href="<?php echo $themeRoot?>zlk_view/zlk_view.css" rel="stylesheet" type="text/css" />
<script>
$(document).ready(function(){
    $("#menu_content,#menu_xingtai,#menu_fenbu,#menu_shulei,#menu_mingzi").click(function(){
        $(".right_txt").html($("#"+$(this).attr("id")+'_txt').html())
    })
})
</script>
<!--center-->
    <div class="center">
    	<div class="right">
        	<div class="right_txt">
                    <?php echo $article->content; ?>
            </div>
            <div class="page">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" height="75">
                  <tr>
                    <td>
                    	<div class="page_1">上一页</div>                    </td>
                    <td>
                    	<div class="page_2">
                        	<a href="#">1</a>
                        </div>
                    </td>
                    <td>
                    	<div class="page_1">下一页</div>
                    </td>
                  </tr>
                </table>

            </div>
        </div>
        <div class="left">
        	<div class="left_txt">
                <div class="left_txt_img">
                    <img src="<?php echo $themeRoot;?>common/images/left_img.gif">
                </div>
                <div class="left_txt_txt">
                    中文名：<?php echo $article->title; ?><br/>
                    英文名：<?php echo $article->en_title; ?>
                </div>
             </div>
             <div class="left_tags">
                <?php if($article->content <> ''){ ?>
                    <div class="tag_nav1 tag_nav" id="menu_content">习性</div>
                <?php } ?>
                <?php if($article->xingtai <> ''){ ?>
                    <div class="tag_nav2 tag_nav" id="menu_xingtai">形态</div>
                <?php } ?>
                <?php if($article->fenbu <> ''){ ?>
                    <div class="tag_nav3 tag_nav" id="menu_fenbu">分布</div>
                <?php } ?>
                <?php if($article->shulei <> ''){ ?>
                    <div class="tag_nav4 tag_nav" id="menu_shulei">属类</div>
                <?php } ?>
                    <?php if($article->mingzi <> ''){ ?>
                    <div class="tag_nav5 tag_nav" id="menu_mingzi">名字</div>
                <?php } ?>
             </div>
        </div>
    </div>
<div class="hidden_content" id="menu_content_txt"><?php echo $article->content; ?></div>
<div class="hidden_content" id="menu_xingtai_txt"><?php echo $article->xingtai; ?></div>
<div class="hidden_content" id="menu_fenbu_txt"><?php echo $article->fenbu; ?></div>
<div class="hidden_content" id="menu_shulei_txt"><?php echo $article->shulei; ?></div>
<div class="hidden_content" id="menu_mingzi_txt"><?php echo $article->mingzi; ?></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" height="80">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<div class="bottom">
	<div class="bottom_txt">
    	<table width="1020" border="0" cellspacing="0" cellpadding="0" height="44">
          <tr>
            <td width="575">ABCDEFGHIJKLMNOPQRSTUVWXYZ</td>
            <td class="nav_1" width="255">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;按首字母查询其他海洋生物</td>
            <td class="nav_2" width="100">返回前页</td>
            <td align="center"><img src="images/b_img.gif" width="36" height="38"></td>
          </tr>
        </table>

    </div>
</div>
<?php include TPL_ROOT . 'common/footer.html.php'; ?>