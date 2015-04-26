<?php 
include TPL_ROOT . 'common/header.html.php'; 
include TPL_ROOT . 'common/treeview.html.php'; 

/* set categoryPath for topNav highlight. */
js::set('path', $article->path);
js::set('articleID', $article->id);
js::set('categoryID', $category->id);
js::set('categoryPath', explode(',', trim($category->path, ',')));
css::internal($article->css);
js::execute($article->js);
?>
<?php if($extView = $this->getExtViewFile(__FILE__)){include $extView; return helper::cd();}?>
<?php
$webRoot   = $config->webRoot;
$jsRoot    = $webRoot . "js/";
$themeRoot = $webRoot . "template/default/theme/";
?>
<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb">
<head profile="http://www.w3.org/2005/10/profile">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control"  content="no-transform">
  <meta name="Generator" content="<?php echo 'chanzhi' . $this->config->version . ' www.chanzhi.org'; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if($this->app->getModuleName() == 'user' and $this->app->getMethodName() == 'deny'):?>
  <meta http-equiv='refresh' content="5;url='<?php echo helper::createLink('index');?>'">
  <?php endif;?>
  <?php
  if(!isset($title))   $title    = '';
  if(!empty($title))   $title   .= $lang->minus;
  if(empty($keywords)) $keywords = $config->site->keywords;
  if(empty($desc))     $desc     = $config->site->desc;

  echo html::title($title . $config->site->name);
  echo html::meta('keywords',    strip_tags($keywords));
  echo html::meta('description', strip_tags($desc));
  if(isset($this->config->site->meta)) echo $this->config->site->meta;

  js::exportConfigVars();
  if($config->debug)
  {
      js::import($jsRoot . 'jquery/min.js');
      js::import($jsRoot . 'zui/min.js');
      js::import($jsRoot . 'chanzhi.js');
      js::import($jsRoot . 'jquery/treeview/min.js');
      js::import($jsRoot . 'my.js');

      css::import($webRoot . 'zui/css/min.css');
      css::import($themeRoot . 'common/style.css');
      css::import($jsRoot    . 'jquery/treeview/min.css');
  }
  else
  {
      css::import($themeRoot . 'default/all.css');
      js::import($jsRoot     . 'all.js');
  }

  /* Import customed css file if it exists. */
  $customCssFile = $this->app->getDataRoot() . 'css' . DS . $this->config->template->name . DS . $this->config->template->theme . DS . 'style.css';
  if(file_exists($customCssFile)) css::import(sprintf($webRoot . 'data/css/%s/%s/style.css?' . $this->config->template->customVersion, $config->template->name, $config->template->theme));

  if(isset($pageCSS)) css::internal($pageCSS);

  echo isset($this->config->site->favicon) ? html::icon(json_decode($this->config->site->favicon)->webPath) : html::icon($webRoot . 'favicon.ico');
  echo html::rss($this->createLink('rss', 'index', '', '', 'xml'), $config->site->name);
?>
<!--[if lt IE 9]>
<?php
if($config->debug)
{
    js::import($jsRoot . 'html5shiv/min.js');
    js::import($jsRoot . 'respond/min.js');
}
else
{
    js::import($jsRoot . 'all.ie8.js');
}
?>
<![endif]-->
<!--[if lt IE 10]>
<?php
if($config->debug)
{
    js::import($jsRoot . 'jquery/placeholder/min.js');
}
else
{
    js::import($jsRoot . 'all.ie9.js');
}
?>
<![endif]-->
<?php
js::set('lang', $lang->js);

if(!empty($config->oauth->sina)) $sina = json_decode($config->oauth->sina);
if(!empty($config->oauth->qq))   $qq   = json_decode($config->oauth->qq);
if(!empty($sina->verification)) echo $sina->verification; 
if(!empty($qq->verification))   echo $qq->verification;
if(!empty($sina->widget)) js::import('http://tjs.sjs.sinajs.cn/open/api/js/wb.js');

$this->block->printRegion($layouts, 'all', 'header');

if(isset($this->config->site->basestyle)) css::internal($this->config->site->basestyle);
?>
</head>
<body>

<?php $common->printPositionBar($category, $article);?>
<div class='row'>
  <div class='col-md-9 col-main'>
    <div class='article'>
      <header>
        <h1><?php echo $article->title;?></h1>
        <dl class='dl-inline'>
          <dd data-toggle='tooltip' data-placement='top' data-original-title='<?php printf($lang->article->lblAddedDate, formatTime($article->addedDate));?>'><i class='icon-time icon-large'></i> <?php echo formatTime($article->addedDate); ?></dd>
          <dd data-toggle='tooltip' data-placement='top' data-original-title='<?php printf($lang->article->lblAuthor, $article->author);?>'><i class='icon-user icon-large'></i> <?php echo $article->author; ?></dd>
          <?php if($article->source != 'original'):?>
          <dt><?php echo $lang->article->sourceList[$article->source] . $lang->colon;?></dt>
          <dd><?php $article->copyURL ? print(html::a($article->copyURL, $article->copySite, "target='_blank'")) : print($article->copySite); ?></dd>
          <?php else: ?>
          <span class='label label-success'><?php echo $lang->article->sourceList[$article->source]; ?></span>
          <?php endif;?>
          <dd class='pull-right'>
            <?php
            if(!empty($this->config->oauth->sina))
            {
                $sina = json_decode($this->config->oauth->sina);
                if($sina->widget) echo "<div class='sina-widget'>" . $sina->widget . '</div>';
            }
            ?>
            <span class='label label-warning' data-toggle='tooltip' data-placement='top' data-original-title='<?php printf($lang->article->lblViews, $article->views);?>'><i class='icon-eye-open'></i> <?php echo $article->views; ?></span>
          </dd>
        </dl>
        <?php if($article->summary):?>
        <section class='abstract'><strong><?php echo $lang->article->summary;?></strong><?php echo $lang->colon . $article->summary;?></section>
        <?php endif; ?>
      </header>
      <section class='article-content'>
        <?php echo $article->content;?>
      </section>
      <section class="article-files">
        <?php $this->loadModel('file')->printFiles($article->files);?>
      </section>
      <footer>
        <div class='article-moreinfo clearfix'>
          <?php if($article->editor):?> 
          <?php $editor = $this->loadModel('user')->getByAccount($article->editor);?>
          <?php if(!empty($editor)): ?> 
          <p class='text-right pull-right'><?php printf($lang->article->lblEditor, $editor->realname, formatTime($article->editedDate));?></p>
          <?php endif;?>
          <?php endif;?>
          <?php if($article->keywords):?>
          <p class='small'><strong class="text-muted"><?php echo $lang->article->keywords;?></strong><span class="article-keywords"><?php echo $lang->colon . $article->keywords;?></span></p>
          <?php endif; ?>
        </div>
        <?php extract($prevAndNext);?>
        <ul class='pager pager-justify'>
          <?php if($prev): ?>
          <li class='previous'><?php echo html::a(inlink('view', "id=$prev->id", "category={$category->alias}&name={$prev->alias}"), '<i class="icon-arrow-left"></i> ' . $prev->title); ?></li>
          <?php else: ?>
          <li class='preious disabled'><a href='###'><i class='icon-arrow-left'></i> <?php print($lang->article->none); ?></a></li>
          <?php endif; ?>
          <?php if($next):?>
          <li class='next'><?php echo html::a(inlink('view', "id=$next->id", "category={$category->alias}&name={$next->alias}"), $next->title . ' <i class="icon-arrow-right"></i>'); ?></li>
          <?php else:?>
          <li class='next disabled'><a href='###'> <?php print($lang->article->none); ?><i class='icon-arrow-right'></i></a></li>
          <?php endif; ?>
        </ul>
      </footer>
    </div>
    <div id='commentBox'><?php echo $this->fetch('message', 'comment', "objectType=article&objectID={$article->id}");?></div>
  </div>
  <div class='col-md-3 col-side'><?php $this->block->printRegion($layouts, 'article_view', 'side');?></div>
</div>
<?php include TPL_ROOT . 'common/footer.html.php'; ?>
