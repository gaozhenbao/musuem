$(document).ready(function(){

	$("#reback,#reback_img").click(function(){
		history.back();
	})
    $("#reback_img").click(function(){
        history.back();
    })
	$("#menu_hidden").click(function(){
		$(".bottom").animate({bottom:'-44px'},200);
		$(".show_btn").animate({bottom:'0px'},200);
	})
	$(".show_btn").click(function(){
		$(".bottom").animate({bottom:'0px'},200);
		$(".show_btn").animate({bottom:'-51px'},200);
	})
})

function play_click(url)
{
    var div = document.getElementById('div_bg');

    div.innerHTML = '<embed src="'+url+'" loop="-1" id="bofangqi" autostart="true" hidden="true"></embed>';
}
function stop_click()
{
    var bofangqi = document.getElementById('bofangqi');
    try{
        bofangqi.pause();
    }catch(e){
        document.getElementById('div_bg').innerHTML = '';
    }
}
