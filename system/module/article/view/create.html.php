<?php
/**
 * The create view file of article module of chanzhiEPS.
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
<?php js::set('type', $type);?>
<?php js::set('categoryID', $currentCategory);?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php include '../../common/view/chosen.html.php';?>
<?php include '../../common/view/codeeditor.html.php';?>

<div class='panel'>
  <div class='panel-heading'><strong><i class='icon-plus'></i>&nbsp;
    <?php if($type == 'blog'):?>
    <?php echo $lang->blog->create;?>
    <?php elseif($type == 'page'):?>
    <?php echo $lang->page->create;?>
    <?php elseif($type == 'grade'):?>
    <?php echo $lang->grade->create;?>
    <?php else:?>
    <?php echo $lang->article->create;?>
    <?php endif;?>
          <script>
              v.editors = {"id":["content","xingtai","fenbu","shulei","mingzi","fenlei","qixidi","jiegou","xixing","shixing","fanzhi","fayu","qiyuan","wenhua","yongtu","xianzhuang","tupian","qita","dinianji","zhongnianji","gaonianji"],"tools":"full"};
          </script>
  </strong></div>
  <div class='panel-body'>
    <form method='post' role='form' id='ajaxForm'>
      <table class='table table-form'>
        <?php if($type != 'page'):?>
        <tr>
          <th class='w-100px'><?php echo $lang->article->category;?></th>
          <td class='w-p40'><?php echo html::select("categories[]", $categories, $currentCategory, "multiple='multiple' class='form-control chosen'");?></td><td></td>
        </tr>
        <tbody class='articleInfo'> 
        <tr>
          <th><?php echo $lang->article->author;?></th>
          <td><?php echo html::input('author', $app->user->realname, "class='form-control'");?></td>
        </tr>
        <tr>
          <th><?php echo $lang->article->source;?></th>
          <td><?php echo html::select('source', $lang->article->sourceList, 'original', "class='form-control chosen'");?></td>
          <td>
            <div class='row' id='copyBox'>
              <div class='col-md-4'><?php echo html::input('copySite', '', "class='form-control' placeholder='{$lang->article->copySite}'"); ?> </div>
              <div class='col-md-8'><?php echo html::input('copyURL',  '', "class='form-control' placeholder='{$lang->article->copyURL}'"); ?></div>
            </div>
          </td>
        </tr>
        </tbody>
        <?php endif; ?>
        <tr>
          <th><?php echo $lang->article->title;?></th>
          <td colspan='2'>
            <div class='input-group'>
              <?php echo html::input('title', '', "class='form-control'");?>
              <span class="input-group-addon w-70px">
                <label class='checkbox'>
                  <?php echo "<input type='checkbox' name='isLink' id='isLink' value='1' /><span>{$lang->article->isLink}</span>" ?>
                </label>
              </span>
            </div>
          </td>
        </tr>
        <tr>
          <th><?php echo $lang->article->en_title;?></th>
          <td colspan='2'>
            <div class='input-group'>
              <?php echo html::input('en_title', '', "class='form-control'");?>
            </div>
          </td>
        </tr>
        <tr>
          <th>指导教师</th>
          <td colspan='2'>
            <div class='input-group'>
              <?php echo html::input('daoshi', '', "class='form-control'");?>
            </div>
          </td>
        </tr>
         <tr>
          <th>创作时间</th>
          <td colspan='2'>
            <div class='input-group'>
              <?php echo html::input('shijian', '', "class='form-control'");?>
            </div>
          </td>
        </tr>
        <tr class='link'>
          <th><?php echo $lang->article->link;?></th>
          <td colspan='2'>
            <div class='required required-wrapper'></div>
            <?php echo html::input('link', '', "class='form-control' placeholder='{$lang->article->placeholder->link}'");?>
          </td>
        </tr>
        <tbody class='articleInfo'>
<!--        <tr>-->
<!--          <th>--><?php //echo $lang->article->alias;?><!--</th>-->
<!--          <td colspan='2'>-->
<!--            <div class='input-group'>-->
<!--              --><?php //if($type == 'page'):?>
<!--              <span class='input-group-addon'>http://--><?php //echo $this->server->http_host . $config->webRoot;?><!--page/</span>-->
<!--              --><?php //else:?>
<!--              <span class='input-group-addon'>http://--><?php //echo $this->server->http_host . $config->webRoot . $type;?><!--/id_</span>-->
<!--              --><?php //endif;?>
<!--              --><?php //echo html::input('alias', '', "class='form-control' placeholder='{$lang->alias}'");?>
<!--              <span class="input-group-addon w-70px">.html</span>-->
<!--            </div>-->
<!--          </td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <th>--><?php //echo $lang->article->keywords;?><!--</th>-->
<!--          <td colspan='2'>--><?php //echo html::input('keywords', '', "class='form-control'");?><!--</td>-->
<!--        </tr>-->
<!--        <tr>-->
<!--          <th>--><?php //echo $lang->article->summary;?><!--</th>-->
<!--          <td colspan='2'>--><?php //echo html::textarea('summary', '', "rows='2' class='form-control'");?><!--</td>-->
<!--        </tr>-->
        </tbody>
        <tbody class='articleInfo'>
        <tr>
          <th><?php echo $lang->category->imgurl?></th>
          <td colspan='2'>
          	<table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="230"><?php echo html::file('imgurl_f', $category->imgurl, "class='form-control'");?></td>
              <td width="50"><input type="button"  id="idphoto_front_btn" onClick="ajaxFileUpload('imgurl_f');" value="上传"></td>
              <td><span id="toppic"><span></td>
            </tr>
          </table>
          </td>
          <?php echo html::hidden('img_url', '', "class='form-control' id='img_url'");?>
        </tr>
        <tr >
            <th>整体介绍</th>
            <td colspan='2'><?php echo html::textarea('content', '', "rows='6' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->mingzi;?></th>
            <td colspan='2'><?php echo html::textarea('mingzi', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->shulei;?></th>
            <td colspan='2'><?php echo html::textarea('shulei', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->fenlei;?></th>
            <td colspan='2'><?php echo html::textarea('fenlei', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->fenbu;?></th>
            <td colspan='2'><?php echo html::textarea('fenbu', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->qixidi;?></th>
            <td colspan='2'><?php echo html::textarea('qixidi', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->xingtai;?></th>
            <td colspan='2'><?php echo html::textarea('xingtai', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->jiegou;?></th>
            <td colspan='2'><?php echo html::textarea('jiegou', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->xixing;?></th>
            <td colspan='2'><?php echo html::textarea('xixing', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->shixing;?></th>
            <td colspan='2'><?php echo html::textarea('shixing', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->fanzhi;?></th>
            <td colspan='2'><?php echo html::textarea('fanzhi', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->fayu;?></th>
            <td colspan='2'><?php echo html::textarea('fayu', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->qiyuan;?></th>
            <td colspan='2'><?php echo html::textarea('qiyuan', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->wenhua;?></th>
            <td colspan='2'><?php echo html::textarea('wenhua', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->yongtu;?></th>
            <td colspan='2'><?php echo html::textarea('yongtu', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->xianzhuang;?></th>
            <td colspan='2'><?php echo html::textarea('xianzhuang', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->tupian;?></th>
            <td colspan='2'><?php echo html::textarea('tupian', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->qita;?></th>
            <td colspan='2'><?php echo html::textarea('qita', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->dinianji;?></th>
            <td colspan='2'><?php echo html::textarea('dinianji', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->zhongnianji;?></th>
            <td colspan='2'><?php echo html::textarea('zhongnianji', '', "rows='4' class='form-control'");?></td>
        </tr>
        <tr>
            <th><?php echo $lang->article->gaonianji;?></th>
            <td colspan='2'><?php echo html::textarea('gaonianji', '', "rows='4' class='form-control'");?></td>
        </tr>

        <tr>
          <th><?php echo $lang->article->addedDate;?></th>
          <td>
            <div class="input-append date">
              <?php echo html::input('addedDate', date('Y-m-d H:i'), "class='form-control'");?>
              <span class='add-on'><button class="btn btn-default" type="button"><i class="icon-calendar"></i></button></span>
            </div>
          </td>
          <td><span class="help-inline"><?php echo $lang->article->placeholder->addedDate;?></span></td>
        </tr>
        <tr>
          <th><?php echo $lang->article->status;?></th>
          <td><?php echo html::radio('status', $lang->article->statusList, 'normal');?></td>
        </tr>
        </tbody>
        <tr>
          <td></td>
          <td colspan='2'><?php echo html::submitButton();?></td>
        </tr>
      </table>
    </form>
  </div>
</div>

<?php include '../../common/view/footer.admin.html.php';?>
