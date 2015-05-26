<?php
/**
 * The edit view file of article module of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     http://api.chanzhi.org/goto.php?item=license
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     article
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php include '../../common/view/header.admin.html.php';?>
<?php include '../../common/view/datepicker.html.php';?>
<?php js::set('type',$type);?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php include '../../common/view/chosen.html.php';?>
<?php include '../../common/view/codeeditor.html.php';?>
<script>
      v.editors = {"id":["content","xingtai","fenbu","shulei","mingzi","fenlei","qixidi","jiegou","xixing","shixing","fanzhi","fayu","qiyuan","wenhua","yongtu","xianzhuang","tupian","qita","dinianji","zhongnianji","gaonianji"],"tools":"full"};
</script>
<div class='panel'>
  <div class='panel-heading'><strong><i class='icon-edit'></i> <?php echo $type == 'blog' ? $lang->blog->edit : ($type == 'page' ? $lang->page->edit : $lang->article->edit);?></strong></div>
  <div class='panel-body'>
  <form method='post' id='ajaxForm'>
    <table class='table table-form'>
      <?php if($type != 'page'):?>
      <tr>
        <th class='w-100px'><?php echo $lang->article->category;?></th>
        <td class='w-p40'><?php echo html::select("categories[]", $categories, array_keys($article->categories), "multiple='multiple' class='form-control chosen'");?></td><td></td>
      </tr>
      <tbody class='articleInfo'>
      <tr>
        <th><?php echo $lang->article->author;?></th>
        <td><?php echo html::input('author', $article->author, "class='form-control'");?></td>
      </tr>
      <tr>
          <th>班级</th>
          <td> <?php echo html::input('keywords', $article->keywords, "class='form-control'");?></td>
      </tr>
      </tbody>
      <?php endif; ?>
      <tr>
        <th><?php echo $lang->article->title;?></th>
        <td colspan='2'>
          <div class='input-group'>
            <?php echo html::input('title', $article->title, "class='form-control'");?>
          </div>
        </td>
      </tr>
      <?php if($isZlk):?>
      <tr>
        <th><?php echo $lang->article->en_title;?></th>
        <td colspan='2'>
          <div class='input-group'>
            <?php echo html::input('en_title', $article->en_title, "class='form-control'");?>
          </div>
        </td>
      </tr>
      <?php endif;?>
      <?php if($isCxy):?>
              <tr>
          <th>指导教师</th>
          <td colspan='2'>
            <div class='input-group'>
              <?php echo html::input('daoshi', $article->daoshi, "class='form-control'");?>
            </div>
          </td>
        </tr>
         <tr>
          <th>创作时间</th>
          <td colspan='2'>
            <div class='input-group'>
              <?php echo html::input('shijian', $article->shijian, "class='form-control'");?>
            </div>
          </td>
        </tr>
      <?php endif;?>
      <tbody class='articleInfo'>
      <tr>
          <th><?php echo $lang->category->imgurl?></th>
          <td colspan='2'>
          	<table id="image_table" width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php
                if($article->img_url <> '') {
                    $img_urls = explode('||', $article->img_url);
                    foreach ($img_urls as $key => $img) {
                        if (!empty($img)) {
                            echo '<tr id="upload_arr">';
                            echo '<td width="230"><input type="file" id="imgurl_f' . $key . '" name="imgurl_f"></td>';
                            echo '<td width="50"><input type="button"  onClick="ajaxFileUpload(\'imgurl_f0\','.$isCxy.');" value="上传"></td>';
                        echo '<td>';
                        echo '<span><img src="' . $img . '" width="50" height="50"><span>';
                        if ($key == 0 && $isCxy) {
							echo '</td>';
                            echo '<td><input type="button" value="添加图片" id="addImg"/></td>';
                        }else{
//							echo '&nbsp;<span color=red id="delimg">删</span>';
							echo '</td>';
						}
                        echo '</tr>';
                    }
                    }
                }else{
                    echo '<tr>';
                    echo '<td width="230"><input type="file" id="imgurl_f0" name="imgurl_f"></td>';
                    echo '<td width="50"><input type="button"  onClick="ajaxFileUpload(\'imgurl_f0\','.$isCxy.');" value="上传"></td>';
                    echo '<td><span id="toppic0"><span></td>';
                    if($isCxy)
                    echo '<td><input type="button" value="添加图片" id="addImg"/></td>';
                    echo '</tr>';
                }
                ?>
          </table>
              <script>
                  var image_i = <?php echo count($img_urls)-1;?>;
              </script>
          </td>
          <?php echo html::hidden('img_url', $article->img_url, "class='form-control' id='img_url'");?>
        </tr>

      <?php if ($isKlt) : ?>
      <tr>
          <th>影视文件</th>
          <td colspan='2'>
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                      <td width="230"><input type="file" id="flvurl_f" name="flvurl_f"></td>
                      <td width="50"><input type="button"  id="idflv_front_btn" onClick="ajaxFileUploadFlv('flvurl_f');" value="上传"></td>
                      <td>
                          <?php
                          if(!empty($article->flv_url) && strtolower(substr($article->flv_url,strlen($article->flv_url)-3,3)) == 'swf'){
                              echo '<span id="toppic_flv"><embed src="'.$article->flv_url.'" type="application/x-shockwave-flash" width="50" height="50"></span>';
                          }else if(!empty($article->flv_url)){
                              echo '<span id="toppic_flv">'.$article->flv_url.'</span>';
                          }else{
                              echo '<span id="toppic_flv"></span>';
                          }
                          ?>
                      </td>
                  </tr>
              </table>
          </td>
          <?php echo html::hidden('flv_url', $article->flv_url, "class='form-control' id='flv_url'");?>
      </tr>
      <?php endif;?>
      </tbody>
      <tbody class='articleInfo'>
      <?php if(!$isZlk):?>
      <tr>
          <th>整体介绍</th>
          <td colspan='2'><?php echo html::textarea('content', $article->content, "rows='18' class='form-control'");?></td>
      </tr>
      <?php endif;?>
      <?php if ($isZlk) : ?>
      <tr>
          <th><?php echo $lang->article->mingzi;?></th>
          <td colspan='2'><?php echo html::textarea('mingzi', $article->mingzi, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->shulei;?></th>
          <td colspan='2'><?php echo html::textarea('shulei', $article->shulei, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->fenlei;?></th>
          <td colspan='2'><?php echo html::textarea('fenlei', $article->fenlei, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->fenbu;?></th>
          <td colspan='2'><?php echo html::textarea('fenbu', $article->fenbu, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->qixidi;?></th>
          <td colspan='2'><?php echo html::textarea('qixidi', $article->qixidi, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->xingtai;?></th>
          <td colspan='2'><?php echo html::textarea('xingtai', $article->xingtai, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->jiegou;?></th>
          <td colspan='2'><?php echo html::textarea('jiegou', $article->jiegou, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->xixing;?></th>
          <td colspan='2'><?php echo html::textarea('xixing', $article->xixing, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->shixing;?></th>
          <td colspan='2'><?php echo html::textarea('shixing', $article->shixing, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->fanzhi;?></th>
          <td colspan='2'><?php echo html::textarea('fanzhi', $article->fanzhi, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->fayu;?></th>
          <td colspan='2'><?php echo html::textarea('fayu', $article->fayu, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->qiyuan;?></th>
          <td colspan='2'><?php echo html::textarea('qiyuan', $article->qiyuan, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->wenhua;?></th>
          <td colspan='2'><?php echo html::textarea('wenhua', $article->wenhua, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->yongtu;?></th>
          <td colspan='2'><?php echo html::textarea('yongtu', $article->yongtu, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->xianzhuang;?></th>
          <td colspan='2'><?php echo html::textarea('xianzhuang', $article->xianzhuang, "rows='4' class='form-control'");?></td>
      </tr>

      <tr>
          <th><?php echo $lang->article->tupian;?></th>
          <td colspan='2'><?php echo html::textarea('tupian', $article->tupian, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->qita;?></th>
          <td colspan='2'><?php echo html::textarea('qita', $article->qita, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->dinianji;?></th>
          <td colspan='2'><?php echo html::textarea('dinianji', $article->dinianji, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->zhongnianji;?></th>
          <td colspan='2'><?php echo html::textarea('zhongnianji', $article->zhongnianji, "rows='4' class='form-control'");?></td>
      </tr>
      <tr>
          <th><?php echo $lang->article->gaonianji;?></th>
          <td colspan='2'><?php echo html::textarea('gaonianji', $article->gaonianji, "rows='4' class='form-control'");?></td>
      </tr>
      <?php endif;?>
      <tr>
        <th><?php echo $lang->article->addedDate;?></th>
        <td>
          <div class='input-append date'>
            <?php echo html::input('addedDate', formatTime($article->addedDate), "class='form-control'");?>
            <span class='add-on'><button class="btn btn-default" type="button"><i class="icon-calendar"></i></button></span>
          </div>
        </td>
        <td><span class='help-inline'><?php echo $lang->article->placeholder->addedDate;?></span></td>
      </tr>
      <tr>
        <th><?php echo $lang->article->status;?></th>
        <td><?php echo html::radio('status', $lang->article->statusList, $article->status);?></td>
      </tr>
      </tbody>
      <tr>
        <th></th><td colspan='2'><?php echo html::submitButton();?></td>
      </tr>
    </table>
  </form>
  </div>
</div>
<script type="text/javascript">
    $('#addImg').click(function(){
        image_i++;
        $('#image_table').append('<tr  id="upload_arr"><td width="230"><input type="file" id="imgurl_f'+image_i+'" name="imgurl_f"></td><td width="50"><input type="button"  name="idphoto_front_btn" onClick="ajaxFileUpload(\'imgurl_f'+image_i+'\',<?php echo $isCxy;?>);" value="上传"></td><td><span id="toppic'+image_i+'"><span><span color=red id="delimg"></span></td></tr>');
    });
	$('body').delegate('#delimg','click',function(){
	$(this).parents("#upload_arr").remove();
});  
</script>
<?php include '../../common/view/treeview.html.php';?>
<?php include '../../common/view/footer.admin.html.php';?>
