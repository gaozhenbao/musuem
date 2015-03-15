<link href="<?php echo $themeRoot?>zlk_3/zlk_3.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $themeRoot?>common/common_footer.css" rel="stylesheet" type="text/css" />
<div class="center">
  <div class="center_s">
    <div class="center_content">
      <div class="center_list">
        <ul>
          <?php $i=0; foreach($types as $val){ $i++;?>
          <?php if($i%2 <> 0){
			  $str = '<li><div class="center_listtxt">
                    	<div class="center_listimg"><a href="./?m=article&f=browse&moduleID='.$val->id.'&type=list&pt=zlk"><img src="'.$val->imgurl.'"></a></div>
                        <div class="center_listtitle">'.$val->name.'</div>
                    </div><div class="center_listtxtspace"></div>';
			  if($i == count($types)){
				  echo $str;
				}
		  	  
          }else{
				$str .= '<div class="center_listtxt">
                    	<div class="center_listimg"><a href="./?m=article&f=browse&moduleID='.$val->id.'&type=list&pt=zlk"><img src="'.$val->imgurl.'"></a></div>
                        <div class="center_listtitle">'.$val->name.'</div>
                    </div></li>'; 
				echo $str; 
				$str = '';
		 }?>
         <div class="center_listspace"></div>
          <?php } ?>
        </ul>
      </div>
    </div>
  </div>
  <div class="left_nav left_navbg1"></div>
  <div class="right_nav right_navbg1"></div>
</div>
<?php include TPL_ROOT . 'common/footer.html.php';?>
