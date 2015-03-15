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
<!--center-->
    <div class="center">
    	<div class="right">
        	<div class="right_txt">
            	<p>海蜇为生活在近海营浮游生活的暖性水母，自泳能力较弱，靠发达的内伞环状肌有节律的伸缩，挤压下伞部的海水而获得前进的动力，依伞顶部的方向做缓慢游动，随波逐流喜栖于半咸水、低质为泥，泥沙的河口附近海域，对淡水有一定程度的敏感性，干旱的年份可随潮进入河道</p>
                <p class="right_img"><img src="<?php echo $themeRoot;?>common/images/right_tmpimg.gif"></p>
                <p>在风平浪静、多云、阴天或黎明、傍晚，一般都浮在水的上层或表面；遇有大风、强光照射或夜晚，则活动与水的下层。海蜇的中央口及口腕基部愈合，依靠口腕和肩板上众多的吸口及其周围的触指上的刺细胞捕吸食物和防御伤害</p>
            </div>
            <div class="page">
            	<table width="100%" border="0" cellspacing="0" cellpadding="0" height="75">
                  <tr>
                    <td>
                    	<div class="page_1">上一页</div>                    </td>
                    <td>
                    	<div class="page_2">
                        	<a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">5</a>
                            <a href="#">6</a>
                            <a href="#">7</a>
                            <a href="#">8</a>
                            <a href="#">9</a>
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
                    中文名：海蜇<br/>
                    英文名：JELLYFISH OR SEAJELLY
                </div>
             </div>
             <div class="left_tags">
             	<div class="tag_nav1 tag_nav">习性</div>
                <div class="tag_nav2 tag_nav">形态</div>
                <div class="tag_nav3 tag_nav">分布</div>
                <div class="tag_nav4 tag_nav">属类</div>
                <div class="tag_nav5 tag_nav">名字</div>
             </div>
        </div>
    </div>

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