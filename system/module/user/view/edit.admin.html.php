<?php include '../../common/view/header.admin.html.php';?>
<div class='panel'>
  <div class='panel-heading'><strong><i class='icon-eidt'></i> <?php echo $lang->user->editProfile;?></strong></div>
  <div class='panel-body'>
    <form method='post' id='ajaxForm' class='form form-inline'>
      <table class='table table-form'>
        <tr>
          <th class='w-100px'><?php echo $lang->user->realname;?></th>
          <td colspan="3" class='w-p40'><?php echo html::input('realname', $user->realname, "class='form-control'");?></td><td></td>
        </tr>
        <tr>
          <th><?php echo $lang->user->role;?></th>
            <td><?php echo $lang->user->admin;?><input name='admin' type='radio' value='super' <?php if($user->admin == 'super') echo 'checked';?>></td>
            <td><?php echo $lang->user->teacher;?><input name='admin' type='radio' value='common' <?php if($user->admin == 'common') echo 'checked';?>></td>
            <td><?php echo $lang->user->student;?><input name='admin' type='radio' value='no' <?php if($user->admin == 'no') echo 'checked';?>></td>
            <td></td>
        </tr>  
        <tr>
          <th><?php echo $lang->user->email;?></th>
          <td colspan="3"><?php echo html::input('email', $user->email, "class='form-control'");?></td><td></td>
        </tr>  
        <tr>
          <th><?php echo $lang->user->password;?></th>
          <td colspan="3"><?php echo html::password('password1', '', "class='form-control' autocomplete='off'")?></td><td><span class='text-info'><?php echo $lang->user->control->lblPassword; ?></span></td>
        </tr>  
        <tr>
          <th><?php echo $lang->user->password2;?></th>
          <td colspan="3"><?php echo html::password('password2', '', "class='form-control'");?></td><td></td>
        </tr>  
        <tr>
          <th><?php echo $lang->user->company;?></th>
          <td colspan="3"><?php echo html::input('company', $user->company, "class='form-control'");?></td><td></td>
        </tr>  
        <tr>
          <th><?php echo $lang->user->address;?></th>
          <td colspan="6"><?php echo html::input('address', $user->address, "class='form-control'");?></td>
        </tr>  
        <tr>
          <th><?php echo $lang->user->zipcode;?></th>
          <td colspan="3"><?php echo html::input('zipcode', $user->zipcode, "class='form-control'");?></td><td></td>
        </tr>  
        <tr>
          <th><?php echo $lang->user->mobile;?></th>
          <td colspan="3"><?php echo html::input('mobile', $user->mobile, "class='form-control'");?></td><td></td>
        </tr>  
        <tr>
          <th><?php echo $lang->user->phone;?></th>
          <td colspan="3"><?php echo html::input('phone', $user->phone, "class='form-control'");?></td><td></td>
        </tr>  
        <tr>
          <th><?php echo $lang->user->qq;?></th>
          <td colspan="3"><?php echo html::input('qq', $user->qq, "class='form-control'");?></td><td></td>
        </tr>  
        <tr>
          <th><?php echo $lang->user->gtalk;?></th>
          <td colspan="3"><?php echo html::input('gtalk', $user->gtalk, "class='form-control'");?></td><td></td>
        </tr>  
        <tr><th></th><td colspan="2"><?php echo html::submitButton();?></td></tr>
      </table>
    </form>        
  </div>
</div>


<?php include '../../common/view/footer.admin.html.php';?>
