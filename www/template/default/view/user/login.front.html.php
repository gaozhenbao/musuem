<?php
include TPL_ROOT . 'common/header.html.php';
js::import($jsRoot . 'md5.js');
js::set('random', $this->session->random);
?>
<link rel='stylesheet' href='/template/default/theme/default/all.css?v=3.3' type='text/css' media='screen' />
<style>.user-control-nav{margin-bottom: 20px;}
@media (max-width: 480px) { .hidden-xxs {display: none} .page {font-size: 12px}}
@media (max-width: 400px) { .hidden-xxxs {display: none}}
#login .panel{width: 80%; margin: 5% auto;max-width: 450px;}
#login .panel-body{min-height: 230px;}
#login .panel-heading{background-color: transparent;}

.btn-oauth{text-align: left;padding-left: 130px;font-size: 24px;line-height: 50px;position: relative;text-shadow: 0 1px 0 rgba(0,0,0,0.5);color: #333;background-color: #FCFCFC;border: 1px solid #DEDEDE;}
.btn-oauth:hover{color: #333;background-color: #E8E8E8;border-color: #ccc;-moz-box-shadow: 0 2px 1px rgba(0,0,0,0.1);-webkit-box-shadow: 0 2px 1px rgba(0, 0, 0, 0.1);box-shadow: 0 2px 1px rgba(0, 0, 0, 0.1);}
.btn-oauth .icon{font-size: 40px;position: absolute;left: 75px; text-shadow:none;}
.btn-oauth .icon:before{display: none;}

a .icon-qq, a .icon-sina{ margin-bottom: -15px; display: inline-block; width: 48px; height: 48px; margin-right: 10px; background: url('template/default/theme/default/images/main/socialicons.png') left top no-repeat;}
a .icon-sina{background-position: 0 -48px;}

#adminLogin { max-width: 390px; margin: 5% auto; padding: 20px; background-color: #FFF; border: 1px solid #DDD; -moz-box-shadow: 0px 1px 15px rgba(0,0,0,0.15); -webkit-box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.15); box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.15);border-radius: 6px;}
#responser { line-height: 30px; font-size: 12px }
#adminLogin .form-control,#logo { margin-bottom: 10px; }

@media (max-width: 700px){ #adminLogin{border: none;margin: 0 auto;box-shadow: none;padding: 20px 15px;background-color: #f6f5f5; margin-top: -50px;}}
@media (max-width: 767px) {#login .panel {margin: 20px auto; width: 100%;} #login .panel-heading {padding: 0 0 10px 0;} #login .panel-body {padding: 10px 0; min-height: inherit;} .btn-oauth {padding-left: 80px;} .btn-oauth .icon {left: 20px;}}
</style>
<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<div class='panel panel-body' id='login'>
  <div class='row'>
    <?php 
    foreach($lang->user->oauth->providers as $providerCode => $providerName) $providerConfig[$providerCode] = isset($config->oauth->$providerCode) ? json_decode($config->oauth->$providerCode) : '';
    if(!empty($providerConfig['sina']->clientID) or !empty($providerConfig['qq']->clientID)):
    ?>
    <div class='col-md-6'>
      <div class='panel panel-pure'>
        <div class='panel-heading'><strong><?php echo $lang->user->oauth->lblWelcome;?></strong></div>
        <div class='panel-body'>
        <?php 
        foreach($lang->user->oauth->providers as $providerCode => $providerName) 
        {
            $providerConfig = isset($config->oauth->$providerCode) ? json_decode($config->oauth->$providerCode) : '';
            if(empty($providerConfig->clientID)) continue;
            $params = "provider=$providerCode";
            if($referer and !strpos($referer, 'login') and !strpos($referer, 'oauth')) $params .= "&referer=" . helper::safe64Encode($referer);
            echo html::a(inlink('oauthLogin', $params), "<i class='icon-{$providerCode} icon'></i> " . $providerName, "class='btn btn-default btn-oauth btn-lg btn-block btn-{$providerCode}'");
        }
        ?>
        </div>
      </div>
    </div>
    <div class='col-md-6'>
    <?php else:?>
    <div class='col-md-12'>
    <?php endif;?>
      <div class='panel panel-pure'>
        <div class='panel-heading'><strong><?php echo $lang->user->login->welcome;?></strong></div>
        <div class='panel-body'>
          <form method='post' id='ajaxForm' role='form'>
            <div class='form-group hiding'><div id='formError' class='alert alert-danger'></div></div>
            <div class='form-group'><?php echo html::input('account','',"placeholder='{$lang->user->inputAccountOrEmail}' class='form-control input-lg'");?></div>
            <div class='form-group'><?php echo html::password('password','',"placeholder='{$lang->user->inputPassword}' class='form-control input-lg'");?></div>
            <?php echo html::submitButton($lang->user->login->common, 'btn btn-primary btn-wider btn-lg');?> &nbsp; &nbsp; 
            <?php echo html::a(inlink('register'), $lang->user->register->common);?> &nbsp; &nbsp; 
            <?php if($config->mail->turnon) echo html::a(inlink('resetpassword'), $lang->user->recoverPassword);?>
            <?php echo html::hidden('referer', $referer);?>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include TPL_ROOT . 'common/footer.html.php';?>
