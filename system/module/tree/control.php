<?php

/**
 * The control file of tree module of chanzhiEPS.
 *
 * @copyright   Copyright 2013-2013 青岛息壤网络信息有限公司 (QingDao XiRang Network Infomation Co,LTD www.xirangit.com)
 * @license     http://api.chanzhi.org/goto.php?item=license
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     tree
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
<<<<<<< HEAD
class tree extends control {

    const NEW_CHILD_COUNT = 5;
=======
class tree extends control
{
    const NEW_CHILD_COUNT        = 1;
>>>>>>> 3868a6c90e915c73217ca7684ed13e1edd4164c8
    const WEICHAT_MAINMENU_COUNT = 3;
    const WEICHAT_SUBMENU_COUNT = 5;

    /**
     * Browse the categories and print manage links.
     * 
     * @param  string $type 
     * @param  int    $root 
     * @access public
     * @return void
     */
    public function browse($type = 'article', $root = 0) {
        if ($type == 'forum') {
            $this->lang->category = $this->lang->board;
            $this->lang->tree->menu = $this->lang->forum->menu;
            $this->lang->menuGroups->tree = 'forum';
        }

        if ($type == 'blog') {
            $this->lang->tree->menu = $this->lang->blog->menu;
            $this->lang->menuGroups->tree = 'blog';
        }

        if ($type == 'grade') {
            $this->lang->tree->menu = $this->lang->grade->menu;
            $this->lang->menuGroups->tree = 'grade';
        }

        if ($type == 'product') {
            $this->lang->tree->menu = $this->lang->product->menu;
            $this->lang->menuGroups->tree = 'product';
        }

        $isWechatMenu = treeModel::isWechatMenu($type);
        $this->view->isWechatMenu = $isWechatMenu;

        if ($isWechatMenu) {
            $this->lang->tree = $this->lang->wechatMenu;
            $this->lang->category = $this->lang->wechatMenu;
            $this->lang->tree->menu = $this->lang->wechat->menu;
            $this->lang->menuGroups->tree = 'wechat';
        }

        $userFunc = $isWechatMenu ? array('treeModel', 'createWechatMenuLink') : array('treeModel', 'createManageLink');
        $this->view->treeMenu = $this->tree->getTreeMenu($type, 0, $userFunc);

<<<<<<< HEAD
        $this->view->title = $this->lang->tree->common;
        $this->view->type = $type;
        $this->view->root = $root;
=======
        if($type == 'grade'){
            $this->view->title    = $this->lang->tree->commonGrade;
        }else{
            $this->view->title    = $this->lang->tree->common;
        }
        $this->view->type     = $type;
        $this->view->root     = $root;
>>>>>>> 3868a6c90e915c73217ca7684ed13e1edd4164c8
        $this->view->children = $this->tree->getChildren($root, $type);

        $this->display();
    }

    /**
     * @DESC 上传图片
     * * */
    public function uploadimg($categoryID) {
        $Root = $_SERVER['DOCUMENT_ROOT'];
        $file = '/data/upload/'.date('Ym').'/';
        //上传大小为500kb
        $s_size = 500 * 1024 * 1024;
        $s_file_url = $Root.$file;
        $error = "";
        $msg = "";
        $s_file_name = $_FILES['imgurl_f']['name'];
        $s_file_size = $_FILES['imgurl_f']['size'];
        $s_file_Tmpname = $_FILES['imgurl_f']['tmp_name'];
        $a_file_types = explode(".", $_FILES['imgurl_f']['name']);
        $s_file_type = $a_file_types[count($a_file_types) - 1];
        if (empty($s_file_Tmpname) || 'none' == $s_file_Tmpname) {
            $error = '请选择要上传的文件';
        } else {
            //验证上传文件大小
            if ($s_size < $s_file_size) {
                $error = '图片大小超出限制，请重新上传';
            }
            //验证图片格式,支持jpg,png,gif,bmp
            if ("jpg" != strtolower($s_file_type) & "gif" != strtolower($s_file_type) & "bmp" != strtolower($s_file_type) & "png" != strtolower($s_file_type)) {
                $error = '上传格式错误,请重新上传';
            }
            //验证目录
            if(!file_exists($s_file_url)){
                mkdir($s_file_url);
            }
            //满足条件则上传
            $s_news_name = md5(time()) . '.' . $s_file_type;
            move_uploaded_file($s_file_Tmpname, $s_file_url . $s_news_name);
            if (!file_exists($s_file_url . $s_news_name)) {
                $error = '上传失败！';
            }
        }
        $this->OutputMessage($error, $file . $s_news_name);
    }

    /**
     * @Description   :输出上传提示信息
     * @Author        :fxw
     * @Param         : $error 上传错误返回信息  $msg 上传成功返回信息
     * @Output         :error 和 msg JSON格式数据
     * */
    public function OutputMessage($error, $msg) {
        header('Content-Type:text/html;charset=utf-8 ');
        //输出错误信息
        echo "{";
        echo "error: '" . $error . "',\n";
        echo "msg: '" . $msg . "'\n";
        echo "}";
        exit;
    }

    /**
     * Edit a category.
     * 
     * @param  int      $categoryID 
     * @access public
     * @return void
     */
    public function edit($categoryID) {
        /* Get current category. */
        $category = $this->tree->getById($categoryID);
        /* If type is forum, assign board to category. */
        if ($category->type == 'forum')
            $this->lang->category = $this->lang->board;

        if (!empty($_POST)) {
            $result = $this->tree->update($categoryID);
            if ($result === true)
                $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess));

            $this->send(array('result' => 'fail', 'message' => dao::isError() ? dao::getError() : $result));
        }

        /* Get option menu and remove the families of current category from it. */
        $optionMenu = $this->tree->getOptionMenu($category->type);
        $families = $this->tree->getFamily($categoryID);
        foreach ($families as $member)
            unset($optionMenu[$member]);

        /* Assign. */
        $this->view->category = $category;
        $this->view->optionMenu = $optionMenu;
        $this->view->aliasAddon = trim("http://" . $this->server->http_host . $this->config->webRoot, '/') . '/';

        if (strpos('forum,blog', $category->type) !== false)
            $this->view->aliasAddon .= $category->type . '/';

        if ($category->type == 'forum') {
            $this->lang->menuGroups->tree = 'forum';
            $this->view->users = $this->loadModel('user')->getPairs('admin');
        } else if ($category->type == 'blog') {
            $this->lang->menuGroups->tree = 'blog';
        }

        /* remove left menu. */
        unset($this->lang->tree->menu);

        $this->display();
    }

    /**
     * Manage children.
     *
     * @param  string    $type 
     * @param  int       $category    the current category id.
     * @access public
     * @return void
     */
    public function children($type, $category = 0) {
        /* If type is forum, assign board to category. */
        if ($type == 'forum') {
            $this->lang->category = $this->lang->board;
            $this->view->boardChildrenCount = $this->dao->select('count(*) as count')->from(TABLE_CATEGORY)->where('grade')->eq(2)->andWhere('type')->eq('forum')->fetch('count');
        }

        $isWechatMenu = treeModel::isWechatMenu($type);
        if ($isWechatMenu)
            $this->lang->category = $this->lang->wechatMenu;

        if (!empty($_POST)) {
            $result = $this->tree->manageChildren($type, $this->post->parent, $this->post->children);
            $locate = $this->inLink('browse', "type=$type&root={$this->post->parent}");
            if ($result === true)
                $this->send(array('result' => 'success', 'message' => $this->lang->saveSuccess, 'locate' => $locate));
            $this->send(array('result' => 'fail', 'message' => dao::isError() ? dao::getError() : $result));
        }

        $this->view->isWechatMenu = $isWechatMenu;
        $this->view->title = $this->lang->tree->manage;
        $this->view->type = $type;
        $this->view->children = $this->tree->getChildren($category, $type);
        $this->view->origins = $this->tree->getOrigin($category);
        $this->view->parent = $category;

        $this->display();
    }

    /**
     * Delete a category.
     * 
     * @param  int    $categoryID 
     * @access public
     * @return void
     */
    public function delete($categoryID) {
        /* If type is 'forum' and has children, warning. */
        $category = $this->tree->getByID($categoryID);
        $children = $this->tree->getChildren($categoryID, $category->type);
        if ($children)
            $this->send(array('result' => 'fail', 'message' => $this->lang->tree->hasChildren));

        if ($this->tree->delete($categoryID))
            $this->send(array('result' => 'success'));
        $this->send(array('result' => 'fail', 'message' => dao::getError()));
    }

    /**
     * Redirect to tree browse when no categories
     * 
     * @param  string $message 
     * @access public
     * @return void
     */
    public function redirect($type = 'article', $message = '') {
        unset($this->lang->tree->menu);
        $this->view->message = ($message && $message != '') ? $message : $this->lang->tree->noCategories;
        $this->view->type = $type;

        $this->display();
    }

}
