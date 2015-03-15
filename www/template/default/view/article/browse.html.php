<?php 
include TPL_ROOT . 'common/header.html.php';
$path = array_keys($category->pathNames);
if($category->alias == 'zlk' || $_GET['pt'] == 'zlk' ){
	$prex = 'zlk';
	$type = $_GET['type'];
	if($type == 2 || $type == 3){
		include $prex.'_'.$type.'/'.$prex.'_'.$type.'.html.php';
	}else if($type == 'list'){
		include 'zlk_list/zlk_list.php';
	}else{
		echo "<script>alert('链接不存在！');window.location.href='./';</script>";
		die();
	}
	
}else{
	include $category->alias.'/'.$category->alias.'.html.php';
}
?>