<?php
/**
 * The set css view file of article module of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     http://api.chanzhi.org/goto.php?item=license
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     article
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php include '../../common/view/header.modal.html.php';?>
<?php include '../../common/view/codeeditor.html.php';?>
<form id='ajaxForm' action="<?php echo inlink('setcss', "articleID=$article->id");?>" method='post'>
  <table class="table table-form">
    <tr><td><?php echo html::textarea('css', $article->css, "rows=5 class='form-control codeeditor' data-mode='css' style='height:170px'");?></td></tr>
    <tr><td><?php echo html::submitButton();?></td></tr>
  </table>
</form>
<?php include '../../common/view/footer.modal.html.php';?>
