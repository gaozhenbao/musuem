<?php
helper::import('/home/tplxxcn/system/module/product/model.php');
class extproductModel extends productModel 
{

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/1/11
 * Time: 20:59
 */

public function myGetList($categories, $orderBy, $pager = null,$search = null)
{
    /* Get products(use groupBy to distinct products).  */

    $products = $this->dao->select('t1.*, t2.category')->from(TABLE_PRODUCT)->alias('t1')
        ->leftJoin(TABLE_RELATION)->alias('t2')->on('t1.id = t2.id')
        ->where('1 = 1')
        ->beginIF($categories)->andWhere('t2.category')->in($categories)->fi()
        ->beginIF(RUN_MODE == 'front')->andWhere('t1.status')->eq('normal')->fi()
        ->beginIF(!empty($search))->andWhere('hzcode(t1.name)')->eq($search)->fi()
        ->groupBy('t2.id')
        ->orderBy($orderBy)
        ->page($pager)
        ->fetchAll('id');
    if(!$products) return array();

    /* Get categories for these products. */
    $categories = $this->dao->select('t2.id, t2.name, t2.alias, t1.id AS product')
        ->from(TABLE_RELATION)->alias('t1')
        ->leftJoin(TABLE_CATEGORY)->alias('t2')->on('t1.category = t2.id')
        ->where('t2.type')->eq('product')
        ->beginIF($categories)->andWhere('t1.category')->in($categories)->fi()
        ->fetchGroup('product', 'id');

    /* Assign categories to it's product. */
    foreach($products as $product) $product->categories = !empty($categories[$product->id]) ? $categories[$product->id] : array();

    /* Get images for these products. */
    $images = $this->loadModel('file')->getByObject('product', array_keys($products), $isImage = true);

    /* Assign images to it's product. */
    foreach($products as $product)
    {
        if(empty($images[$product->id])) continue;
        $product->image = new stdclass();
        if(isset($images[$product->id]))  $product->image->list = $images[$product->id];
        if(!empty($product->image->list)) $product->image->primary = $product->image->list[0];
    }

    /* Assign desc to it's product. */
    foreach($products as $product) $product->desc = empty($product->desc) ? helper::substr(strip_tags($product->content), 250) : $product->desc;

    return $products;
}

/**
 * Extend create funtion to build index after create.
 * 
 * @access public
 * @return void
 */
public function create()
{
    $productID = parent::create();
    if(!$productID) return false;

    $product = $this->getByID($productID);
    $this->loadModel('search')->save('product', $product);

    return $productID;
}

/**
 * Extend update function to build index.
 * 
 * @param  int    $productID 
 * @access public
 * @return void
 */
public function update($productID)
{
    $result = parent::update($productID);
    if(!$result) return false;

    $product = $this->getByID($productID);
    if(empty($product)) return false;
    return $this->loadModel('search')->save('product', $product);
}

/**
 * Extendsion for delete index.
 * 
 * @param  int    $productID 
 * @param  null   $null 
 * @access public
 * @return void
 */
public function delete($productID , $null = null)
{
    $result = parent::delete($productID);   
    if(!$result) return false;

    return $this->loadModel('search')->deleteIndex('product', $productID);
}
}