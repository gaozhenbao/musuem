<?php include TPL_ROOT . 'common/header.html.php';?>
<link rel='stylesheet' href='/template/default/theme/default/all.css?v=3.3' type='text/css' media='screen' />
<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<div class='panel panel-body'>
  <div class='panel panel-pure' id='reg'>
    <div class='panel-heading'><strong><?php echo $lang->user->register->welcome;?></strong></h4></div>
    <div class='panel-body'>
      <form method='post' id='ajaxForm' class='form-horizontal' role='form'>
        <div class='form-group'>
          <label class='col-sm-3 control-label'><?php echo $lang->user->account;?></label>
          <div class='col-sm-8'><?php echo html::input('account', '', "class='form-control form-control' autocomplete='off' placeholder='" . $lang->user->register->lblAccount . "'");?></div>
        </div>
        <div class='form-group'>
          <label class="col-sm-3 control-label"><?php echo $lang->user->realname;?></label>
          <div class='col-sm-8'><?php echo html::input('realname', '', "class='form-control' placeholder='" . $lang->user->register->lblName . "'");?></div>
        </div>
        <div class='form-group'>
          <label class="col-sm-3 control-label"><?php echo $lang->user->password;?></label>
          <div class='col-sm-8'><?php echo html::password('password1', '', "class='form-control' autocomplate='off' placeholder='" . $lang->user->register->lblPassword . "'");?></div>
        </div>
        <div class='form-group'>
          <label class="col-sm-3 control-label"><?php echo $lang->user->password2;?></label>
          <div class='col-sm-8'><?php echo html::password('password2', '', "class='form-control' placeholder='" . $lang->user->register->lblPassword2 . "'");?></div>
        </div>
        <div class='form-group' style="display: none">
          <label class="col-sm-3 control-label"><?php echo $lang->user->company;?></label>
          <div class='col-sm-8'><?php echo html::input('company', '', "class='form-control'");?></div>
        </div>
          <div class='form-group'>
              <label class="col-sm-3 control-label"><?php echo $lang->user->grade;?></label>
              <div class='col-sm-3'>
                  <select name="grade"  class="col-sm-9" style="height:34px">
                      <?php foreach( $grades as $key=>$grade):?>
                          <?php foreach($grade['class'] as $k=>$class):?>
                              <option value="<?php echo $key.','.$k;?>" style=";height:22px"><?php echo $grade['name'].'&nbsp;&nbsp;'.$class;?></option>
                          <?php endforeach;?>
                      <?php endforeach;?>
                  </select>
              </div>
              <div class='col-sm-5'><?php echo html::submitButton($lang->register,'btn btn-primary btn-block') . html::hidden('referer', $referer);?></div>
          </div>
      </form>
    </div>
  </div>    
</div>
<?php //include TPL_ROOT . 'common/footer.html.php'; ?>
