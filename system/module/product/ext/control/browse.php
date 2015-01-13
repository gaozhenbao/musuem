<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/11
 * Time: 20:50
 */
include '../../control.php';
class myProduct extends product
{
    public function browse($categoryID = 0, $pageID = 1)
    {
        $category = $this->loadModel('tree')->getByID($categoryID, 'product');

        if($category && $category->link) helper::header301($category->link);

        $this->app->loadClass('pager', $static = true);
        $pager = new pager(0, $this->config->product->recPerPage, $pageID);

        $categoryID = is_numeric($categoryID) ? $categoryID : $category->id;
        $search = isset($_GET['s'])?strtoupper($_GET['s']):null;// 获取按首字母查询时的首字母
        $products   = $this->product->myGetList($this->tree->getFamily($categoryID), '`order` desc', $pager,$search);

        if(!$category and $categoryID != 0) die($this->fetch('error', 'index'));

        if($categoryID == 0)
        {
            $category = new stdclass();
            $category->id       = 0;
            $category->name     = $this->lang->product->home;
            $category->alias    = '';
            $category->keywords = '';
            $category->desc     = '';
        }

        $title    = $category->name;
        $keywords = trim($category->keywords . ' ' . $this->config->site->keywords);
        $desc     = strip_tags($category->desc) . ' ';
        $this->session->set('productCategory', $category->id);

        $this->view->title     = $title;
        $this->view->keywords  = $keywords;
        $this->view->desc      = $desc;
        $this->view->category  = $category;
        $this->view->products  = $products;
        $this->view->pager     = $pager;
        $this->view->contact   = $this->loadModel('company')->getContact();

        $this->display();
   }
}