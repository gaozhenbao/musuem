$(document).ready(function(){
	$("#reback").click(function(){
		history.back();
	})
	$("#menu_hidden").click(function(){
		$(".bottom").animate({bottom:'-44px'},200);
	})
})