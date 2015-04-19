<?php if($extView = $this->getExtViewFile(__FILE__)){include $extView; return helper::cd();}?>
<?php
$webRoot   = $config->webRoot;
$jsRoot    = $webRoot . "js/";
$themeRoot = $webRoot . "template/default/theme/";
?>
<!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
<head profile="http://www.w3.org/2005/10/profile">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control"  content="no-transform">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if($this->app->getModuleName() == 'user' and $this->app->getMethodName() == 'deny'):?>
  <meta http-equiv='refresh' content="5;url='<?php echo helper::createLink('index');?>'">
  <?php endif;?>
  <link href="<?php echo $themeRoot?>common/common.css" rel="stylesheet" type="text/css" />
  <script src="<?php echo $themeRoot?>common/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="<?php echo $themeRoot?>common/common.js" type="text/javascript"></script>
    <?php
    	  if(!isset($title))   $title    = '';
  if(!empty($title))   $title   .= $lang->minus;
  if(empty($keywords)) $keywords = $config->site->keywords;
  if(empty($desc))     $desc     = $config->site->desc;

  echo html::title($title . $config->site->name);
  echo html::meta('keywords',    strip_tags($keywords));
  echo html::meta('description', strip_tags($desc));
  if(isset($this->config->site->meta)) echo $this->config->site->meta;
	?>
<head>
<body>
<div class="header">
	<div class="top">
    	<div class="top_rght">
        	<table width="200" border="0" cellpadding="0" cellspacing="0" height="57">
              <tr>
                <td width="120">
                	<div class="logreg">
                    	<table width="100%" border="0" cellspacing="0" cellpadding="0" height="32">
                          <tr>
                              <td align="center"><a href="index.php?m=user&f=login">登陆</a></td>
                              <td align="center"><a href="index.php?m=user&f=register">注册</a></td>
                          </tr>
                        </table>

                    </div>
                </td>
                <td align="center"><img src="<?php echo $themeRoot?>common/images/sound_off.png" width="29" height="26"></td>
                <td align="center"><img src="<?php echo $themeRoot?>common/images/sound_on.png" width="29" height="26"></td>
              </tr>
            </table>

      </div>
      <?php $logo = json_decode($config->site->logo);?>
   	  <div class="top_logotxt" style="background:url(<?php if(!empty($logo->webPath)){echo $logo->webPath;}else{echo $themeRoot.'common/image/logo.jpg';};?>) no-repeat;"><a href="/"></a></div>
      <div class="top_icon"><a href="/"></a></div>
    </div>
</div>