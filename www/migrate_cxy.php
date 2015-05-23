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

echo "现在开始将所有属于畅想园模块的文章中，在‘名字’字段和‘整体介绍’字段录入的图片批处理到当前格式下的图片录入：<br/>";
echo "处理逻辑：先判断“名字”中内容是否为空，非空则将名字中的图片进行处理；如果名字为空则对整体介绍中的图片进行处理,并清空整体介绍字段<br/>";

//连接数据库
$db = new DBMySQLi('localhost','root','123','museum',3306);

$db->query("alter table eps_article modify img_url varchar(2048) DEFAULT NULL ");
$temp = $db->query("SELECT a.id,a.content,a.mingzi FROM eps_relation r,eps_category c,eps_article a where find_in_set(14,c.`path`) and r.category=c.id and r.type='article' and a.id=r.id;");
echo "处理的图片:".'<br/>';
foreach($temp->rows as $k=>$record){
    $flag = false;
    $matches = array();
    if(!empty($record['mingzi'])){
        $str_temp = htmlspecialchars_decode($record['mingzi']);
    }else{
        $flag = true;
        $str_temp = htmlspecialchars_decode($record['content']);
    }
    preg_match_all('/\\/data\\/upload(.)*.(png|jpg)/',$str_temp,$matches);
    $str = '';
    foreach($matches[0] as $val){
        echo ($val."<br/>");
        $str .= $val.'||';
    }
    $str = trim($str,'||');
    $s = '';
    if($flag) $s = ",content=''";
    if(!empty($str))
        $db->query("update eps_article set img_url =  '".$db->escape($str)."'".$s." where id=".(int)$record['id']);
}

echo "批处理完成，请删除本文件并登录后台检查";
exit;

