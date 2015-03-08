<?php
/**
 * The edit view of tree module of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     http://api.chanzhi.org/goto.php?item=license
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     tree
 * @version     $Id: edit.html.php 824 2010-05-02 15:32:06Z wwccss $
 * @link        http://www.chanzhi.org
 */
?>
<?php
$webRoot   = $config->webRoot;
$jsRoot    = $webRoot . "js/";
$themeRoot = $webRoot . "theme/";
?>
<?php include '../../common/view/chosen.html.php';?>
<?php include '../../common/view/kindeditor.html.php';?>
<?php js::set('type', $category->type);?>
<?php js::set('link', $lang->category->link);?>

<form method='post' class='form-horizontal' id='editForm' action="<?php echo inlink('edit', 'categoryID='.$category->id);?>">
  <div class='panel'>
    <div class='panel-heading'><strong><i class="icon-pencil"></i> <?php echo $lang->tree->edit;?></strong></div>
    <div class='panel-body'>
      <div class='form-group'>
        <label class='col-md-2 control-label'><?php echo $lang->category->parent;?></label>
        <div class='col-md-4'><?php echo html::select('parent', $optionMenu, $category->parent, "class='chosen form-control'");?></div>
      </div>
      <div class='form-group'>
          <?php if($category->type == 'grade'):?>
              <label class='col-md-2 control-label'><?php echo $lang->category->nameGrade;?></label>
          <?php else:?>
              <label class='col-md-2 control-label'><?php echo $lang->category->name;?></label>
          <?php endif;?>
        <div class='col-md-9 required'>
          <div class="input-group">
            <?php echo html::input('name', $category->name, "class='form-control'");?>
            <?php if(($category->type != 'forum' or $category->parent != 0) && $category->type != 'grade'):?>
            <span class="input-group-addon w-70px">
              <label class='checkbox'>
                <?php $checked = $category->link ? 'checked' : '';?>
                <?php echo "<input type='checkbox' name='isLink' id='isLink' value='1' {$checked} /><span>{$lang->category->isLink}</span>" ?>
              </label>
            </span>
            <?php endif;?>
          </div>
        </div>
      </div>
      <?php if(($category->type != 'forum' or $category->parent != 0)  && $category->type != 'grade'):?>
      <div class='form-group link'>
        <label class='col-md-2 control-label'><?php echo $lang->category->link;?></label>
        <div class='col-md-9 required'><?php echo html::input('link', $category->link, "class='form-control' placeholder='{$lang->tree->placeholder->link}'");?></div>
      </div>
      <?php endif;?>
        <?php if($category->type != 'grade'):?>
      <div class='categoryInfo'>
        <div class='form-group'>
          <label class='col-md-2 control-label'><?php echo $lang->category->alias;?></label>
          <div class='col-md-9'>
            <div class="input-group">
              <span class="input-group-addon"><?php echo $aliasAddon;?></span>
              <?php echo html::input('alias', $category->alias, "class='input-xsm form-control' placeholder='{$lang->alias}'");?>
              <span class="input-group-addon w-70px">.html</span>
            </div>
          </div>
        </div>
        <div class='form-group'>
          <label class='col-md-2 control-label'><?php echo $lang->category->keywords;?></label>
          <div class='col-md-9'><?php echo html::input('keywords', $category->keywords, "class='form-control'");?></div>
        </div>
<<<<<<< HEAD
          <div class='form-group'> 
          <label class='col-md-2 control-label'><?php echo $lang->category->imgurl?></label>
          <div class='col-md-9'><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td width="230"><?php echo html::file('imgurl_f', $category->imgurl, "class='form-control'");?></td>
              <td><input type="button"  id="idphoto_front_btn" onClick="ajaxFileUpload('imgurl_f');" value="上传"></td>
              <td><?php
                if($category->imgurl <> ''){
                    echo '<span id="toppic"><img src="'.$category->imgurl.'" width="50" height="50"><span>';
                }else{
                    echo '<span id="toppic"><span>';
                }
              ?></td>
            </tr>
          </table>
              <?php echo html::hidden('imgurl', $category->imgurl, "class='form-control' id='imgurl'");?>
          </div>
        </div>
        <div class='form-group'> 
=======
        <div class='form-group'>
>>>>>>> 3868a6c90e915c73217ca7684ed13e1edd4164c8
          <label class='col-md-2 control-label'><?php echo $lang->category->desc;?></label>
          <div class='col-md-9'><?php echo html::textarea('desc', htmlspecialchars($category->desc), "class='form-control' rows=3'");?></div>
        </div>
      </div>
      <div class='categoryInfo'>
        <?php if($category->type == 'forum'):?>
        <div class='form-group'>
          <label class='col-md-2 control-label'><?php echo $lang->category->moderators;?></label>
          <div class='col-md-9'><?php echo html::input('moderators', $category->moderators, "class='form-control' placeholder='{$lang->board->placeholder->moderators}'");?></div>
        </div>
        <div class='form-group'>
          <label class='col-md-2 control-label'><?php echo $lang->category->readonly;?></label>
          <div class='col-md-4'><?php echo html::radio('readonly', $lang->category->readonlyList, $category->readonly);?></div>
        </div>
        <?php endif;?>
      </div>
        <?php endif;?>
      <div class='form-group'>
        <label class='col-md-2'></label>
        <div class='col-md-4'><?php echo html::submitButton() . html::hidden('type', $category->type);?></div>
      </div>
    </div>
  </div>
  <?php if(isset($pageJS)) js::execute($pageJS);?>
</form>
