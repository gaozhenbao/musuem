<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>cxy/cxy.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js"></script>
<script>
    var num = 0;
    var length = 860;
    var li = 187;
    var space = 28;
    $(document).ready(function(){
        $(".center_leftnav").click(function(){
            var offsetleft = parseInt($('#scroling').css("left"));
            var allpage = parseInt($(".center_list li").size());
            if(allpage <= 4){
                $(this).removeClass("center_leftnavbg1").addClass("center_leftnavbg2");
                return false;
            }else{
                var allpage = $(".center_list li").size();
                var page = Math.ceil(parseInt(allpage)/4);
                if(num==(page-1)){
                    num++;
                    offset = ((allpage-(num*4))*li)+((allpage-(num*4))*space);
                    $("#scroling").animate({left:(offsetleft-offset)+'px'});
                    $(this).removeClass("center_leftnavbg1").addClass("center_leftnavbg2");
                    $(".center_rightnav").removeClass("center_rightnavbg2").addClass("center_rightnavbg1");
                    return false;
                }else if(num < page){
                    num++;
                    $("#scroling").animate({left:(offsetleft-length)+'px'});
                    $(".center_rightnav").removeClass("center_rightnavbg2").addClass("center_rightnavbg1");
                }else{
                    $(this).removeClass("center_leftnavbg1").addClass("center_leftnavbg2");
                    return false;
                }
            }
        })
        $(".center_rightnav").click(function(){
            var allpage = $(".center_list li").size();
            var offsetleft = parseInt($('#scroling').css("left"));
            if(allpage <= 4){
                $(this).removeClass("center_leftnavbg1").addClass("center_leftnavbg2");
                return false;
            }else{
                if(offsetleft >= -length && offsetleft != 0){
                    num--;
                    $("#scroling").animate({left:'0px'});
                    $(this).removeClass("center_rightnavbg1").addClass("center_rightnavbg2");
                    $(".center_leftnav").removeClass("center_leftnavbg2").addClass("center_leftnavbg1");
                }else if(offsetleft != 0){
                    $("#scroling").animate({left:(offsetleft+length)+'px'});
                }else{
                    return false;
                }
            }
        })
    })

</script>
<div class="center">
    <div class="center_nav">
<!--        <div class="center_leftnav center_leftnavbg1"></div>-->
<!--        <div class="center_rightnav center_rightnavbg2"></div>-->
        <div class="center_list">
            <ul id="scroling">
                <?php foreach($latest_cxy_articles as $record): $img_url = explode('||',$record['img_url']);?>
                    <li><a href="?m=article&f=view&id=<?php echo $record['id'];?>&pt=cxy&categoryID=<?php echo $record['category'];?>"><img src="<?php echo getWebRoot(true).$img_url[0];?>"></a></li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
<div class="center_bototm">
    <ul>
        <li class="lititlebg1">
            <div class="licontent">
                <div class="lititle">
                    <i class="titlenum">1</i>
                    <span class="titletitle"><a href="?m=article&f=browse&categoryID=<?php echo $dchy;?>&pt=cxy&type=list"><?php echo $dchy_title;?></a></span>
                </div>
                <div class="litxt">
                    <?php foreach($dchy_children as $dchy_child):?>
                        <div class="txt_list"><a href="<?php if($dchy_child['isFinal']=='0') echo '?m=article&f=browse&categoryID='.$dchy_child['categoryID'].'&pt=cxy&type=list';else echo '?m=article&f=browse&categoryID='.$dchy_child['categoryID'].'&pt=cxy&type=2';?>"><?php echo $dchy_child['name'];?></a></div>
                    <?php endforeach;?>
                </div>
            </div>
        </li>
        <li class="lititlebg2">
            <div class="licontent">
                <div class="lititle">
                    <i class="titlenum">2</i>
                    <span class="titletitle"><a href="?m=article&f=browse&categoryID=<?php echo $hyqm?>&pt=cxy&type=list"><?php echo $hyqm_title;?></a></span>
                </div>
                <div class="litxt">
                    <?php foreach($hyqm_children as $hyqm_child):?>
                        <div class="txt_list"><a href="<?php if($hyqm_child['isFinal']=='0') echo '?m=article&f=browse&categoryID='.$hyqm_child['categoryID'].'&pt=cxy&type=list';else echo '?m=article&f=browse&categoryID='.$hyqm_child['categoryID'].'&pt=cxy&type=2';?>"><?php echo $hyqm_child['name'];?></a></div>
                    <?php endforeach;?>
                </div>
            </div>
        </li>
        <li class="lititlebg3">
            <div class="licontent">
                <div class="lititle">
                    <i class="titlenum">3</i>
                    <span class="titletitle"><a href="?m=article&f=browse&categoryID=<?php echo $smhy;?>&pt=cxy&type=list"><?php echo $smhy_title;?></a></span>
                </div>
                <div class="litxt">
                    <?php foreach($smhy_children as $smhy_child):?>
                        <div class="txt_list"><a href="<?php if($smhy_child['isFinal']=='0') echo '?m=article&f=browse&categoryID='.$smhy_child['categoryID'].'&pt=cxy&type=list';else echo '?m=article&f=browse&categoryID='.$smhy_child['categoryID'].'&pt=cxy&type=2';?>"><?php echo $smhy_child['name'];?></a></div>
                    <?php endforeach;?>
                </div>
            </div>
        </li>
        <li class="lititlebg4">
            <div class="licontent">
                <div class="lititle">
                    <i class="titlenum">4</i>
                    <span class="titletitle"><a href="?m=article&f=browse&categoryID=<?php echo $hyjy;?>&pt=cxy&type=list"><?php echo $hyjy_title;?></a></span>
                </div>
                <div class="litxt">
                    <?php foreach($hyjy_children as $hyjy_child):?>
                        <div class="txt_list"><a href="<?php if($hyjy_child['isFinal']=='0') echo '?m=article&f=browse&categoryID='.$hyjy_child['categoryID'].'&pt=cxy&type=list';else echo '?m=article&f=browse&categoryID='.$hyjy_child['categoryID'].'&pt=cxy&type=2';?>"><?php echo $hyjy_child['name'];?></a></div>
                    <?php endforeach;?>
                </div>
            </div>
        </li>
        <li class="lititlebg5">
            <div class="licontent">
                <div class="lititle">
                    <i class="titlenum">5</i>
                    <span class="titletitle"><a href="?m=article&f=browse&categoryID=<?php echo $hywl;?>&pt=cxy&type=list"><?php echo $hywl_title;?></a></span>
                </div>
                <div class="litxt">
                    <?php foreach($hywl_children as $hywl_child):?>
                        <div class="txt_list"><a href="<?php if($hywl_child['isFinal']=='0') echo '?m=article&f=browse&categoryID='.$hywl_child['categoryID'].'&pt=cxy&type=list';else echo '?m=article&f=browse&categoryID='.$hywl_child['categoryID'].'&pt=cxy&type=2';?>"><?php echo $hywl_child['name'];?></a></div>
                    <?php endforeach;?>
                </div>
            </div>
        </li>
    </ul>
    <img src="<?php echo $themeRoot?>cxy/images/center_bottom_top.png" class="bottom_img">
</div>
<?php $mp3="cxy_bg.mp3";include TPL_ROOT . 'common/footer.html.php';?>
