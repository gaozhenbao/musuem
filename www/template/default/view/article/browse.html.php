<?php 
include TPL_ROOT . 'common/header.html.php';
$path = array_keys($category->pathNames);
include $category->alias.'/'.$category->alias.'.html.php';
?>