<?php
/**
 * The router file of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     LGPL
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     chanzhiEPS
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
include_once '../system/lib/dao/mysqli.php';


//连接数据库
$db = new DBMySQLi('localhost','root','123','tplxx',3306);

$temp = $db->query("select a.* from eps_article a,eps_category b,eps_relation c WHERE (b.parent ='14' or b.parent='84') and b.id=c.category and a.id=c.id");
//echo "处理的图片:".'<br/>';
foreach($temp->rows as $k=>$record){
    if(empty($record['content'])){
        if($record['mingzi'] != ''){
            $db->query("update eps_article set content =  '".$record['mingzi']."',mingzi='' where id=".(int)$record['id']);
        }else if($record['shulei'] != ''){
            $db->query("update eps_article set content =  '".$record['shulei']."',shulei='' where id=".(int)$record['id']);
        }
    }
    $flag = false;
    $matches = array();
    if(!strpos($record["img_url"],'||')){
        echo $record['id'];
        echo "<br/>";
    };
    if(!empty($record['mingzi'])){
        $str_temp = htmlspecialchars_decode($record['mingzi']);
    }else{
        $flag = true;
        $str_temp = htmlspecialchars_decode($record['content']);
    }
    preg_match_all('/\\/data\\/upload(.)*.(png|jpg|PNG|JPG|Jpg|Png)/',$str_temp,$matches);
    $str = '';
    foreach($matches[0] as $val){
//        echo ($val."<br/>");
        $str .= $val.'||';
    }
    $str = trim($str,'||');
    $s = '';
    $content = preg_replace('/\\/data\\/upload(.)*.(png|jpg|PNG|JPG|Jpg|Png)/','',$str_temp);
//    $s = ",content='".strip_tags($content)."',mingzi='' ";
    $s = '';
    if(!empty($str))
//        echo "update eps_article set img_url =  '".$db->escape($str)."'".$s." where id=".(int)$record['id'].'<br/>';
        $db->query("update eps_article set img_url =  '".$db->escape($str)."'".$s." where id=".(int)$record['id']);
}

//echo "批处理完成，请删除本文件并登录后台检查";
exit;

