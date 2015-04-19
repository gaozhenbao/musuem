<?php 
include TPL_ROOT . 'common/header.html.php';
$path = array_keys($category->pathNames);
	$prex = $_GET['pt'];
	$type = $_GET['type'];
	if($type <> ''){
		$type_url = '_'.$type;
	}else{
        $type_url = '';
    }
	$file_url = $prex.$type_url.'/'.$prex.$type_url.'.html.php';

	if($type == 'list'){
		include 'news_list/news_list.php';
	}else if(file_exists($file_url)){
		include $file_url;
	}else{
		echo "<script>alert('链接不存在！');window.location.href='./';</script>";
		die();
	}
?>