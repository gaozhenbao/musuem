$(document).ready(function(){

	$("#reback,#reback_img").click(function(){
		history.back();
	})
    $("#reback_img").click(function(){
        history.back();
    })
	$("#menu_hidden").click(function(){
        setCookie('hide_menu',1);
		$(".bottom").animate({bottom:'-88px'},200);
		$(".show_btn").animate({bottom:'0px'},200);
	})
	$(".show_btn").click(function(){
        setCookie('hide_menu','',-7);
		$(".bottom").animate({bottom:'0px'},200);
		$(".show_btn").animate({bottom:'-88px'},200);
	})
})

function setCookie(c_name,value,expiredays)
{
    var exdate=new Date()
    exdate.setDate(exdate.getDate()+expiredays)
    document.cookie=c_name+ "=" +escape(value)+
    ((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
}

function getCookie(c_name)
{
    if (document.cookie.length>0)
    {
        c_start=document.cookie.indexOf(c_name + "=")
        if (c_start!=-1)
        {
            c_start=c_start + c_name.length+1
            c_end=document.cookie.indexOf(";",c_start)
            if (c_end==-1) c_end=document.cookie.length
            return unescape(document.cookie.substring(c_start,c_end))
        }
    }
    return ""
}
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
