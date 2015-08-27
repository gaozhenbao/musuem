<?php

/**
 * The control file of article module of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     http://api.chanzhi.org/goto.php?item=license
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     article
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
class article extends control {

    /**
     * The index page, locate to the first category or home page if no category.
     * 
     * @access public
     * @return void
     */
    public function index() {
        $category = $this->loadModel('tree')->getFirst('article');
        if ($category)
            $this->locate(inlink('browse', "category=$category->id"));
        $this->locate($this->createLink('index'));
    }

    /**
     * Browse article in front.
     * 
     * @param int    $categoryID   the category id
     * @param int    $pageID       current page id
     * @access public
     * @return void
     */
    public function browse($categoryID = 0, $pageID = 1) {
        $category = $this->loadModel('tree')->getByID($categoryID, 'article');
        if ($category->link)
            helper::header301($category->link);

        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal = 0, $this->config->article->recPerPage, $pageID);
        $categoryID = is_numeric($categoryID) ? $categoryID : $category->id;
        $articles = $this->article->getList('article', $this->tree->getFamily($categoryID, 'article'), 'addedDate_desc', $pager);

        if ($category) {
            $title = $category->name;
            $keywords = trim($category->keywords . ' ' . $this->config->site->keywords);
            $desc = strip_tags($category->desc);
            $this->session->set('articleCategory', $category->id);
        } else {
            die($this->fetch('error', 'index'));
        }
        $types = $this->dao->select(' c.id,c.name,c.imgurl,c.`desc`,a.id as article_id ,a.title,a.img_url,a.content')->from('eps_category')->alias('c')
                       ->leftJoin('eps_relation')->alias('r')->on('r.category = c.id')
                       ->leftJoin('eps_article')->alias('a')->on('r.id = a.id')
                       ->where('parent')->eq($_GET['categoryID'])
                       ->orderBy('c.id,a.id desc')->fetchAll();
        $key_array = array();
        foreach ($types as $key=>$value) {
            if(in_array($value->id,$key_array)){
                unset($types[$key]);
            }else{
                $key_array[] = $value->id;
                $chid = $value->id;
                $ch_types = $this->dao->select('id,name,imgurl,`desc`')->from('eps_category')
                    ->where('parent')->eq($chid)
                    ->fetchAll();
                $types[$key]->child = $ch_types;
            }
        }
		if($_GET['sj'] == 'json'){
			foreach($articles as $val){
                $imgs = explode('||',$val->img_url);
                foreach($imgs as $k=> $v){
                    if(!empty($v)){
                        $val->img_url = $v;
                        break;
                    }
                }
				$newarticles[] = $val;
			}
			echo json_encode($newarticles);
		}else{
            if($categoryID == '14' && $_GET['pt']=='cxy' && !isset($_GET['type'])){
                $this->view->dchy = '100';
                $this->view->hyqm = '83';
                $this->view->smhy = '84';
                $this->view->hyjy = '85';
                $this->view->hywl = '86';
                $query = $this->db->query("SELECT id,name FROM ".TABLE_CATEGORY." WHERE parent=14;");
                foreach($query->rows as $record){
                    if($record['name'] == '我绘多彩海洋'){
                        $this->view->dchy = $record['id'];
                        $this->view->dchy_title = $record['name'];
                        $query_dchy = $this->db->query("SELECT id as categoryID,name,(SELECT COUNT(1) FROM ".TABLE_CATEGORY." WHERE parent=categoryID) AS isFinal FROM ".TABLE_CATEGORY." WHERE parent=".(int)$record['id']." ORDER BY id ASC LIMIT 6");
                        $this->view->dchy_children = $query_dchy->rows;
                    }
                    if($record['name'] == '我看海洋奇妙'){
                        $this->view->hyqm = $record['id'];
                        $this->view->hyqm_title = $record['name'];
                        $query_hyqm = $this->db->query("SELECT id as categoryID,name,(SELECT COUNT(1) FROM ".TABLE_CATEGORY." WHERE parent=categoryID) AS isFinal FROM ".TABLE_CATEGORY." WHERE parent=".(int)$record['id']." ORDER BY id ASC LIMIT 6");
                        $this->view->hyqm_children = $query_hyqm->rows;
                    }
                    if($record['name'] == '我探神秘海洋' || $record['name'] == '我探海洋神秘'){
                        $this->view->smhy = $record['id'];
                        $this->view->smhy_title = $record['name'];
                        $query_smhy = $this->db->query("SELECT id as categoryID,name,(SELECT COUNT(1) FROM ".TABLE_CATEGORY." WHERE parent=categoryID) AS isFinal FROM ".TABLE_CATEGORY." WHERE parent=".(int)$record['id']." ORDER BY id ASC LIMIT 6");
                        $this->view->smhy_children = $query_smhy->rows;
                    }
                    if($record['name'] == '我护海洋家园'){
                        $this->view->hyjy = $record['id'];
                        $this->view->hyjy_title = $record['name'];
                        $query_hyjy = $this->db->query("SELECT id as categoryID,name,(SELECT COUNT(1) FROM ".TABLE_CATEGORY." WHERE parent=categoryID) AS isFinal FROM ".TABLE_CATEGORY." WHERE parent=".(int)$record['id']." ORDER BY id ASC LIMIT 6");
                        $this->view->hyjy_children = $query_hyjy->rows;
                    }
                    if($record['name'] == '畅想未来海洋' || $record['name'] == '畅想海洋未来' || $record['name'] == '我的海洋畅想'){
                        $this->view->hywl = $record['id'];
                        $this->view->hywl_title = $record['name'];
                        $query_hywl = $this->db->query("SELECT id as categoryID,name,(SELECT COUNT(1) FROM ".TABLE_CATEGORY." WHERE parent=categoryID) AS isFinal FROM ".TABLE_CATEGORY." WHERE parent=".(int)$record['id']." ORDER BY id ASC LIMIT 6");
                        $this->view->hywl_children = $query_hywl->rows;
                    }
                }

                $query2 = $this->db->query("SELECT a.*,r.category FROM ".TABLE_ARTICLE. " a INNER JOIN eps_relation r ON a.id=r.id WHERE a.id in (SELECT id from eps_relation e where e.category in (select id from eps_category c where find_in_set(14,c.path))) order by a.addedDate desc limit 4;");
                $this->view->latest_cxy_articles = $query2->rows;
                $this->view->latest_cxy_count = $query2->num;
            }

			$this->view->title = $title;
			$this->view->keywords = $keywords;
			$this->view->desc = $desc;
			$this->view->category = $category;
			$this->view->articles = $articles;
			$this->view->pager = $pager;
			$this->view->content_img = $types[0]->img_url;
            $this->view->types = $types;
			$this->view->contact = $this->loadModel('company')->getContact();
	
			$this->display();
		}
       
    }

    private function isFinalCategory($category_id){
        $result = $this->db->query("SELECT id FROM ".TABLE_CATEGORY." WHERE parent=".(int)$category_id);
        if($result->num_rows > 0 ){
            return false;
        }else{
            return true;
        }
    }

    /**
     * Browse article in admin.
     * 
     * @param string $type        the article type
     * @param int    $categoryID  the category id
     * @param int    $recTotal 
     * @param int    $recPerPage 
     * @param int    $pageID 
     * @access public
     * @return void
     */
    public function admin($type = 'article', $categoryID = 0, $orderBy = 'id_desc', $recTotal = 0, $recPerPage = 20, $pageID = 1) {
        $this->lang->article->menu = $this->lang->$type->menu;
        $this->lang->menuGroups->article = $type;

        $this->app->loadClass('pager', $static = true);
        $pager = new pager($recTotal, $recPerPage, $pageID);

        $families = $categoryID ? $this->loadModel('tree')->getFamily($categoryID, $type) : '';
        $articles = $this->article->getList($type, $families, $orderBy, $pager);


        if ($type != 'page') {
            $this->view->treeModuleMenu = $this->loadModel('tree')->getTreeMenu($type, $categoryID, array('treeModel', 'createAdminLink'));
            if ($type != 'grade') {
                $this->view->treeManageLink = html::a(helper::createLink('tree', 'browse', "type={$type}"), $this->lang->tree->manage);
            } else {
                $this->view->treeManageLink = html::a(helper::createLink('tree', 'browse', "type={$type}"), $this->lang->tree->manageGrade);
            }
        }

        $this->view->title = $this->lang->$type->admin;
        $this->view->type = $type;
        $this->view->categoryID = $categoryID;
        $this->view->articles = $articles;
        $this->view->pager = $pager;
        $this->view->orderBy = $orderBy;

        $this->display();
    }

    /**
     * Create an article.
     * 
     * @param  string $type 
     * @param  int    $categoryID
     * @access public
     * @return void
     */
    public function create($type = 'article', $categoryID = '') {
        $this->lang->article->menu = $this->lang->{$type}->menu;
        $this->lang->menuGroups->article = $type;

        $categoryID = isset($_GET['categoryID'])?$_GET['categoryID']:0;
        $result = $this->db->query("SELECT `path` FROM eps_category WHERE find_in_set(14,`path`) AND id=".(int)$categoryID);
        if($categoryID == '14' || $result->num_rows > 0 ){
            $this->view->isCxy = 1;
        }else{
            $this->view->isCxy = 0;
        }
        $result2 = $this->db->query("SELECT `path` FROM eps_category WHERE find_in_set(10,`path`) AND id=".(int)$categoryID);
        if($categoryID == '10' || $result2->num_rows > 0 ){
            $this->view->isZlk = 1;
        }else{
            $this->view->isZlk = 0;
        }

        $result3 = $this->db->query("SELECT `path` FROM eps_category WHERE find_in_set(13,`path`) AND id=".(int)$categoryID);
        if($categoryID == '13' || $result3->num_rows > 0 ){
            $this->view->isKlt = 1;
        }else{
            $this->view->isKlt = 0;
        }

        $categories = $this->loadModel('tree')->getOptionMenu($type, $categoryID, $removeRoot = true);
        if (empty($categories) && $type != 'page') {
            die(js::locate($this->createLink('tree', 'redirect', "type=$type")));
        }

        if ($_POST) {
            $this->article->create($type);
            if (dao::isError())
                $this->send(array('result' => 'fail', 'message' => dao::getError()));
            $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => inlink('admin', "type=$type&categoryID=$categoryID")));
        }

        if ($type != 'page') {
            $this->view->treeModuleMenu = $this->loadModel('tree')->getTreeMenu($type, $categoryID, array('treeModel', 'createAdminLink'));
            if ($type != 'grade') {
                $this->view->treeManageLink = html::a(helper::createLink('tree', 'browse', "type={$type}"), $this->lang->tree->manage);
            } else {
                $this->view->treeManageLink = html::a(helper::createLink('tree', 'browse', "type={$type}"), $this->lang->tree->manageGrade);
            }
        }

        $this->view->title = $this->lang->{$type}->create;
        $this->view->currentCategory = $categoryID;
        $this->view->categories = $categories;
        $this->view->type = $type;

        $this->display();
    }

    /**
     * Edit an article.
     * 
     * @param  int    $articleID 
     * @param  string $type 
     * @access public
     * @return void
     */
    public function edit($articleID, $type) {
        $this->lang->article->menu = $this->lang->$type->menu;
        $this->lang->menuGroups->article = $type;

        $article = $this->article->getByID($articleID, $replaceTag = false);
        $categoryID = isset($_GET['categoryID'])?$_GET['categoryID']:0;
        $categories = $this->loadModel('tree')->getOptionMenu($type, $categoryID, $removeRoot = true);

        $result = $this->db->query("SELECT `path` FROM eps_category WHERE find_in_set(14,`path`) AND id=".(int)$categoryID);
        if($categoryID == '14' || $result->num_rows > 0 ){
            $this->view->isCxy = 1;
        }else{
            $this->view->isCxy = 0;
        }
        $result2 = $this->db->query("SELECT `path` FROM eps_category WHERE find_in_set(10,`path`) AND id=".(int)$categoryID);
        if($categoryID == '10' || $result2->num_rows > 0 ){
            $this->view->isZlk = 1;
        }else{
            $this->view->isZlk = 0;
        }

        $result3 = $this->db->query("SELECT `path` FROM eps_category WHERE find_in_set(13,`path`) AND id=".(int)$categoryID);
        if($categoryID == '13' || $result3->num_rows > 0 ){
            $this->view->isKlt = 1;
        }else{
            $this->view->isKlt = 0;
        }
        if (empty($categories) && $type != 'page') {
            die(js::alert($this->lang->tree->noCategories) . js::locate($this->createLink('tree', 'browse', "type=$type")));
        }

        if ($_POST) {
            $this->article->update($articleID, $type);
            if (dao::isError())
                $this->send(array('result' => 'fail', 'message' => dao::getError()));
            $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => inlink('admin', "type=$type&categoryID=$categoryID")));
        }

        if ($type != 'page') {
            $this->view->treeModuleMenu = $this->loadModel('tree')->getTreeMenu($type, $categoryID, array('treeModel', 'createAdminLink'));
            if ($type != 'grade') {
                $this->view->treeManageLink = html::a(helper::createLink('tree', 'browse', "type={$type}"), $this->lang->tree->manage);
            } else {
                $this->view->treeManageLink = html::a(helper::createLink('tree', 'browse', "type={$type}"), $this->lang->tree->manageGrade);
            }
        }

        $this->view->title = $this->lang->article->edit;
        $this->view->article = $article;
        $this->view->categories = $categories;
        $this->view->type = $type;
        $this->display();
    }

    /**
     * View an article.
     * 
     * @param int $articleID 
     * @access public
     * @return void
     */
    public function view($articleID) {
		$categoryID = $_GET['categoryID'];
		 $id = $_GET['id'];
        if(isset($_GET['s'])){
            $result = $this->db->query("select distinct a.id,a.title,c.name,c.id as category_id from ".TABLE_ARTICLE." a INNER JOIN ".TABLE_CATEGORY." c ON find_in_set(10,c.path) INNER JOIN ".TABLE_RELATION." r ON r.type='article' AND r.id=a.id and r.category=c.id WHERE a.id <> '".$articleID."' AND hzcode(a.title) = '".$this->db->escape($_GET['s'])."'");
            $searchResult = array();
            $html = '';
            foreach($result->rows as $key=>$value){
                if(!isset($searchResult[$value['category_id']])){
                    $html .= '<div class="search_txt_1">';
                    $html .= html::a(helper::createLink('article', 'browse', 'categoryID='.$value['category_id'].'&type=list&pt=zlk'), $value['name']);
                    $html .= '</div>';
                }
                $html .= '<div class="search_txt_2">';
                $html .= html::a(helper::createLink('article', 'view', 'id='.$value['id'].'&categoryID='.$value['category_id'].'&pt=zlk'), $value['title']);
                $html .= '</div>';
                $searchResult[$value['category_id']][] = $value;
            }

            echo json_encode(array('html'=>$html));
            return;
        }else{
			if($id <> 0){
				$article = $this->article->getByID($articleID);
			}else{
				 $article = $this->db->query("select A.* from eps_article A LEFT JOIN eps_relation B ON A.id = B.id WHERE B.category = $categoryID ORDER BY A.id DESC limit 1"); 
				if(!empty($article->row)){
					$new = $article->row;
					$article = new stdClass();
					foreach($new AS $key => $val){
						$article->$key = $val;
					}
					$id = $article->id;
				}else{
					$this->view->ans = '<h1>暂无内容</h1>';
				}
				
			}
            if (!$article)
                die($this->fetch('error', 'index'));

            if ($article->link) {
                $this->dao->update(TABLE_ARTICLE)->set('views = views + 1')->where('id')->eq($articleID)->exec();
                helper::header301($article->link);
            }

            /* fetch category for display. */
            $category = array_slice($article->categories, 0, 1);
            $category = $category[0]->id;

            $currentCategory = $this->session->articleCategory;
            if ($currentCategory > 0) {
                if (isset($article->categories[$currentCategory])) {
                    $category = $currentCategory;
                } else {
                    foreach ($article->categories as $articleCategory) {
                        if (strpos($articleCategory->path, $currentCategory))
                            $category = $articleCategory->id;
                    }
                }
            }

            $category = $this->loadModel('tree')->getByID($category);

            $title = $article->title . ' - ' . $category->name;
            $keywords = $article->keywords . ' ' . $category->keywords . ' ' . $this->config->site->keywords;
            $desc = strip_tags($article->summary);
            //取上一个，下一个ID
            if( $id <> ''){
                $pre = $this->dao->select('id')->from('eps_relation')->where("id < $id AND category = $categoryID")->orderBy("id DESC")->limit(1)->fetchAll();
                $next = $this->dao->select('id')->from('eps_relation')->where("id > $id AND category = $categoryID")->orderBy("id ASC")->limit(1)->fetchAll();
            }
            foreach ($types as $key=>$value) {
                $chid = $value->id;
                $ch_types = $this->dao->select('id,name,imgurl,`desc`')->from('eps_category')->where('parent')->eq($chid)->fetchAll();
                $types[$key]->child = $ch_types;
            }
            $this->view->preid = $pre[0]->id <>''?$pre[0]->id:'';
            $this->view->nextid = $next[0]->id <>''?$next[0]->id:'';
            $this->view->title = $title;
            $this->view->keywords = $keywords;
            $this->view->desc = $desc;
            $this->view->article->preid = $pre[0]->id;
            $this->view->article->nextid = $next[0]->id;
            $this->view->article = $article;
            if($_GET['pt'] == 'cxy'){
                $this->view->imgs = explode('||',$article->img_url);
                foreach($this->view->imgs as $k=>$val){
                    if(empty($val)) unset($this->view->imgs[$k]);
                }
            }
            $this->view->prevAndNext = $this->article->getPrevAndNext($article->id, $category->id);
            $this->view->category = $category;
            $this->view->contact = $this->loadModel('company')->getContact();

            $this->dao->update(TABLE_ARTICLE)->set('views = views + 1')->where('id')->eq($articleID)->exec();

            $this->display();
        }

    }

    /**
     * Delete an article.
     * 
     * @param  int      $articleID 
     * @access public
     * @return void
     */
    public function delete($articleID) {
        if ($this->article->delete($articleID))
            $this->send(array('result' => 'success'));
        $this->send(array('result' => 'fail', 'message' => dao::getError()));
    }

    /**
     * Set css.
     * 
     * @param  int      $articleID 
     * @access public
     * @return void
     */
    public function setCss($articleID) {
        $article = $this->article->getByID($articleID);
        if ($_POST) {
            if ($this->article->setCss($articleID))
                $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => inlink('admin', "type={$article->type}")));
            $this->send(array('result' => 'fail', 'message' => dao::getError()));
        }

        $this->view->title = $this->lang->article->css;
        $this->view->article = $article;
        $this->display();
    }

    /**
     * Set js.
     * 
     * @param  int      $articleID 
     * @access public
     * @return void
     */
    public function setJs($articleID) {
        $article = $this->article->getByID($articleID);
        if ($_POST) {
            if ($this->article->setJs($articleID))
                $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => inlink('admin', "type={$article->type}")));
            $this->send(array('result' => 'fail', 'message' => dao::getError()));
        }

        $this->view->title = $this->lang->article->js;
        $this->view->article = $article;
        $this->display();
    }

}
