<?php 
$pt = $_GET['pt'];
$file_path = "view/".$pt."_view.html.php";
if(file_exists($file_path)){
	include $file_path;
}else{
	include "view/default_view.html.php";
}
?>
