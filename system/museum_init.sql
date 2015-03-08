/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : museum

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2015-03-08 21:06:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `eps_article`
-- ----------------------------
DROP TABLE IF EXISTS `eps_article`;
CREATE TABLE `eps_article` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `source` enum('original','copied','translational') NOT NULL,
  `copySite` varchar(60) NOT NULL,
  `copyURL` varchar(255) NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `type` varchar(30) NOT NULL,
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `sticky` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL,
  `link` varchar(255) NOT NULL,
  `css` text NOT NULL,
  `js` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order` (`order`),
  KEY `views` (`views`),
  KEY `sticky` (`sticky`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_article
-- ----------------------------
INSERT INTO `eps_article` VALUES ('1', '单页', 'danye1', '', '', '单页单页单页单页单页单页单页单页单页', 'original', '', '', '', '', '2014-12-30 21:11:00', '2014-12-30 21:16:52', 'normal', 'page', '5', '0', '0', '', '', '');
INSERT INTO `eps_article` VALUES ('2', '啊哈哈哈', '', '阿萨德发顺丰', '阿萨德fad', '阿萨德发射点发烧饭', 'original', '', '', 'admin', '', '2015-01-10 10:06:00', '2015-01-10 10:07:06', 'normal', 'blog', '1', '0', '0', '', '', '');
INSERT INTO `eps_article` VALUES ('4', '海蜇的故事', 'haizehe', '海蜇的故事', '海蜇的故事', '海蜇的故事', 'original', '', '', 'admin', 'admin', '2015-01-18 20:27:00', '2015-03-08 17:42:11', 'normal', 'article', '10', '0', '0', '', '', '');
INSERT INTO `eps_article` VALUES ('5', '人文馆', '', '', '', 'dsdsa', 'original', '', '', 'admin', '', '2015-02-01 11:26:00', '2015-02-01 11:26:21', 'normal', 'article', '2', '0', '0', '', '', '');
INSERT INTO `eps_article` VALUES ('6', '欢乐厅', '', '', '', 'dfsf', 'original', '', '', 'admin', '', '2015-02-01 11:26:00', '2015-02-01 11:26:51', 'normal', 'article', '10', '0', '0', '', '', '');
INSERT INTO `eps_article` VALUES ('7', '是多少', '', '速度', '', '速度', 'original', '', '', 'admin', '', '2015-03-08 17:42:00', '2015-03-08 17:42:33', 'normal', 'article', '1', '0', '0', '', '', '');

-- ----------------------------
-- Table structure for `eps_block`
-- ----------------------------
DROP TABLE IF EXISTS `eps_block`;
CREATE TABLE `eps_block` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `template` varchar(30) NOT NULL DEFAULT 'default',
  `type` varchar(20) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_block
-- ----------------------------
INSERT INTO `eps_block` VALUES ('1', 'default', 'latestArticle', '最新文章', '{\"category\":\"0\",\"limit\":\"7\"}');
INSERT INTO `eps_block` VALUES ('2', 'default', 'hotArticle', '热门文章', '{\"category\":\"0\",\"limit\":\"7\"}');
INSERT INTO `eps_block` VALUES ('3', 'default', 'latestProduct', '最新产品', '{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}');
INSERT INTO `eps_block` VALUES ('4', 'default', 'hotProduct', '热门产品', '{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}');
INSERT INTO `eps_block` VALUES ('5', 'default', 'slide', '幻灯片', '');
INSERT INTO `eps_block` VALUES ('6', 'default', 'articleTree', '文章分类', '{\"showChildren\":\"0\"}');
INSERT INTO `eps_block` VALUES ('7', 'default', 'productTree', '产品分类', '{\"showChildren\":\"0\"}');
INSERT INTO `eps_block` VALUES ('8', 'default', 'blogTree', '博客分类', '{\"showChildren\":\"1\"}');
INSERT INTO `eps_block` VALUES ('9', 'default', 'contact', '联系我们', '');
INSERT INTO `eps_block` VALUES ('10', 'default', 'about', '公司简介', '');
INSERT INTO `eps_block` VALUES ('11', 'default', 'links', '友情链接', '');
INSERT INTO `eps_block` VALUES ('12', 'default', 'header', '网站头部', '');
INSERT INTO `eps_block` VALUES ('13', 'default', 'followUs', '关注我们', '');

-- ----------------------------
-- Table structure for `eps_book`
-- ----------------------------
DROP TABLE IF EXISTS `eps_book`;
CREATE TABLE `eps_book` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `summary` text NOT NULL,
  `content` text NOT NULL,
  `type` enum('book','chapter','article') NOT NULL,
  `parent` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `order` (`order`),
  KEY `parent` (`parent`),
  KEY `path` (`path`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_book
-- ----------------------------

-- ----------------------------
-- Table structure for `eps_category`
-- ----------------------------
DROP TABLE IF EXISTS `eps_category`;
CREATE TABLE `eps_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL DEFAULT '',
  `alias` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `parent` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path` char(255) NOT NULL DEFAULT '',
  `grade` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` char(30) NOT NULL,
  `readonly` enum('0','1') NOT NULL DEFAULT '0',
  `moderators` varchar(255) NOT NULL,
  `threads` smallint(5) NOT NULL,
  `posts` smallint(5) NOT NULL,
  `postedBy` varchar(30) NOT NULL,
  `postedDate` datetime NOT NULL,
  `postID` mediumint(9) NOT NULL,
  `replyID` mediumint(8) unsigned NOT NULL,
  `link` varchar(255) NOT NULL,
  `imgurl` varchar(255) DEFAULT NULL COMMENT '标题图片地址',
  PRIMARY KEY (`id`),
  KEY `tree` (`type`),
  KEY `order` (`order`),
  KEY `parent` (`parent`),
  KEY `path` (`path`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_category
-- ----------------------------
INSERT INTO `eps_category` VALUES ('1', '论坛-资料库', 'zlk', '测试论坛功能', '', '0', ',1,', '1', '10', 'forum', '0', ',高振宝,', '0', '0', '', '2014-12-29 22:02:49', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('2', '论坛-畅想园', 'cxy', '', '', '0', ',2,', '1', '20', 'forum', '0', '', '0', '0', '', '2014-12-29 22:02:49', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('3', '海洋资料库', 'hyzlk', '二级资料库<br />', '', '1', ',1,3,', '2', '10', 'forum', '1', ',高振宝,', '0', '0', '', '2014-12-29 22:05:22', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('4', '动物资料库', 'dongwu', '动物', '动物', '1', ',1,4,', '2', '20', 'forum', '0', ',gaozhenbao,', '0', '0', '', '2014-12-29 22:08:51', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('5', '板块A', 'abc', '', '', '2', ',2,5,', '2', '10', 'forum', '0', '', '0', '0', '', '2014-12-29 22:12:03', '0', '0', 'http://localhost/school/index.php', null);
INSERT INTO `eps_category` VALUES ('6', '123', '', '', '', '0', ',6,', '1', '10', 'product', '0', '', '0', '0', '', '2015-01-05 22:15:14', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('10', '资料库', 'zlk', '', '', '0', ',10,', '1', '10', 'article', '0', '', '0', '0', '', '2015-01-18 20:27:29', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('8', '我的博客', '', '', '', '0', ',8,', '1', '10', 'blog', '0', '', '0', '0', '', '2015-01-10 10:06:25', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('9', '博客', '', '', '', '8', ',8,9,', '2', '10', 'blog', '0', '', '0', '0', '', '2015-01-10 10:06:37', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('15', '动物馆', '', '', '', '10', ',10,15,', '2', '10', 'article', '0', '', '0', '0', '', '2015-03-08 17:35:10', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('11', '人文馆', 'rwg', '', '', '0', ',11,', '1', '20', 'article', '0', '', '0', '0', '', '2015-02-01 11:25:34', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('12', '体验宫', 'tyg', '', '', '0', ',12,', '1', '30', 'article', '0', '', '0', '0', '', '2015-02-01 11:25:34', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('13', '快乐厅', 'klt', '', '', '0', ',13,', '1', '40', 'article', '0', '', '0', '0', '', '2015-02-01 11:25:34', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('14', '畅想园', 'cxy', '', '', '0', ',14,', '1', '50', 'article', '0', '', '0', '0', '', '2015-02-01 11:25:34', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('16', '植物馆', '', '', '', '10', ',10,16,', '2', '20', 'article', '0', '', '0', '0', '', '2015-03-08 17:35:10', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('17', '矿产馆', '', '', '', '10', ',10,17,', '2', '30', 'article', '0', '', '0', '0', '', '2015-03-08 17:35:10', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('18', '鱼类馆', '', '', '', '15', ',10,15,18,', '3', '10', 'article', '0', '', '0', '0', '', '2015-03-08 17:36:19', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('19', '爬行馆', '', '', '', '15', ',10,15,19,', '3', '20', 'article', '0', '', '0', '0', '', '2015-03-08 17:36:19', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('20', '贝类馆', '', '', '', '15', ',10,15,20,', '3', '30', 'article', '0', '', '0', '0', '', '2015-03-08 17:36:19', '0', '0', '', '/data/upload/201503/ef5d781990ae45e9dff0bfbe3d07deb2.png');
INSERT INTO `eps_category` VALUES ('21', '海兽馆', '', '', '', '15', ',10,15,21,', '3', '40', 'article', '0', '', '0', '0', '', '2015-03-08 17:36:19', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('22', '虾蟹馆', '', '', '', '15', ',10,15,22,', '3', '50', 'article', '0', '', '0', '0', '', '2015-03-08 17:36:19', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('23', '珊瑚馆', '', '', '', '15', ',10,15,23,', '3', '60', 'article', '0', '', '0', '0', '', '2015-03-08 17:36:19', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('24', '海鸟馆', '', '', '', '15', ',10,15,24,', '3', '70', 'article', '0', '', '0', '0', '', '2015-03-08 17:36:19', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('25', '藻类植物馆', '', '', '', '16', ',10,16,25,', '3', '10', 'article', '0', '', '0', '0', '', '2015-03-08 17:36:50', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('26', '蕨类植物馆', '', '', '', '16', ',10,16,26,', '3', '20', 'article', '0', '', '0', '0', '', '2015-03-08 17:36:50', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('27', '种子植物馆', '', '', '', '16', ',10,16,27,', '3', '30', 'article', '0', '', '0', '0', '', '2015-03-08 17:36:50', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('28', '矿物馆一', '', '', '', '17', ',10,17,28,', '3', '10', 'article', '0', '', '0', '0', '', '2015-03-08 17:37:24', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('29', '矿物馆二', '', '', '', '17', ',10,17,29,', '3', '20', 'article', '0', '', '0', '0', '', '2015-03-08 17:37:24', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('30', '矿物馆三', '', '', '', '17', ',10,17,30,', '3', '30', 'article', '0', '', '0', '0', '', '2015-03-08 17:37:24', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('31', '矿物馆四', '', '', '', '17', ',10,17,31,', '3', '40', 'article', '0', '', '0', '0', '', '2015-03-08 17:37:24', '0', '0', '', null);
INSERT INTO `eps_category` VALUES ('32', '矿物馆五', '', '', '', '17', ',10,17,32,', '3', '50', 'article', '0', '', '0', '0', '', '2015-03-08 17:37:24', '0', '0', '', null);

-- ----------------------------
-- Table structure for `eps_config`
-- ----------------------------
DROP TABLE IF EXISTS `eps_config`;
CREATE TABLE `eps_config` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `owner` char(30) NOT NULL DEFAULT '',
  `module` varchar(30) NOT NULL,
  `section` char(30) NOT NULL DEFAULT '',
  `key` char(30) DEFAULT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique` (`owner`,`module`,`section`,`key`)
) ENGINE=MyISAM AUTO_INCREMENT=236 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_config
-- ----------------------------
INSERT INTO `eps_config` VALUES ('1', 'system', 'common', 'global', 'version', '3.3');
INSERT INTO `eps_config` VALUES ('183', 'system', 'common', 'site', 'lang', 'zh-cn');
INSERT INTO `eps_config` VALUES ('227', 'system', 'common', 'template', 'name', 'default');
INSERT INTO `eps_config` VALUES ('228', 'system', 'common', 'template', 'theme', 'default');
INSERT INTO `eps_config` VALUES ('229', 'system', 'common', 'template', 'parser', 'default');
INSERT INTO `eps_config` VALUES ('230', 'system', 'common', 'template', 'customTheme', 'default');
INSERT INTO `eps_config` VALUES ('179', 'system', 'common', 'site', 'status', 'normal');
INSERT INTO `eps_config` VALUES ('180', 'system', 'common', 'site', 'type', 'portal');
INSERT INTO `eps_config` VALUES ('181', 'system', 'common', 'site', 'name', '青岛太平路小学海洋数字博物馆');
INSERT INTO `eps_config` VALUES ('184', 'system', 'common', 'site', 'copyright', '');
INSERT INTO `eps_config` VALUES ('185', 'system', 'common', 'site', 'keywords', '');
INSERT INTO `eps_config` VALUES ('186', 'system', 'common', 'site', 'indexKeywords', '');
INSERT INTO `eps_config` VALUES ('187', 'system', 'common', 'site', 'slogan', '');
INSERT INTO `eps_config` VALUES ('188', 'system', 'common', 'site', 'meta', '');
INSERT INTO `eps_config` VALUES ('189', 'system', 'common', 'site', 'desc', '');
INSERT INTO `eps_config` VALUES ('190', 'system', 'common', 'site', 'icpSN', '');
INSERT INTO `eps_config` VALUES ('191', 'system', 'common', 'site', 'icpLink', 'http://www.miitbeian.gov.cn');
INSERT INTO `eps_config` VALUES ('182', 'system', 'common', 'site', 'modules', 'user,forum,blog,book,message');
INSERT INTO `eps_config` VALUES ('224', 'system', 'common', 'nav', 'top', '[{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"1\",\"system\":\"home\",\"title\":\"\\u9996\\u9875\",\"url\":\"\\/school\\/\",\"key\":\"0\",\"target\":\"\",\"class\":\"nav-system-home\",\"children\":[]},{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"1\",\"system\":\"company\",\"title\":\"\\u5173\\u4e8e\\u6211\\u4eec\",\"url\":\"\\/school\\/index.php?m=company&f=index\",\"key\":\"1\",\"target\":\"\",\"class\":\"nav-system-company\",\"children\":[]},{\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"1\",\"system\":\"forum\",\"title\":\"\\u8bba\\u575b\",\"url\":\"\\/school\\/index.php?m=forum&f=index\",\"key\":\"2\",\"target\":\"\",\"class\":\"nav-system-forum\",\"children\":[]},{\"type\":\"product\",\"article\":\"0\",\"product\":\"0\",\"page\":\"1\",\"system\":\"home\",\"title\":\"\\u4ea7\\u54c1\",\"url\":\"\",\"key\":\"3\",\"target\":\"\",\"class\":\"nav-product-0\",\"children\":[]}]');
INSERT INTO `eps_config` VALUES ('235', 'system', 'common', 'site', 'lastUpload', '1425807687');
INSERT INTO `eps_config` VALUES ('234', 'system', 'common', 'site', 'logo', '{\"fileID\":\"6\",\"pathname\":\"201502\\/f_12560462cc360841b8e6e85e3bdcb88f.jpg\",\"webPath\":\"\\/data\\/upload\\/201502\\/f_12560462cc360841b8e6e85e3bdcb88f.jpg\",\"addedBy\":\"admin\",\"addedDate\":\"2015-02-01 12:32:34\"}');
INSERT INTO `eps_config` VALUES ('232', 'system', 'common', 'site', 'favicon', '{\"fileID\":\"5\",\"pathname\":\"201501\\/f_b47c6b090b5e09402c7dc7e0ca516008.ico\",\"webPath\":\"\\/data\\/upload\\/201501\\/f_b47c6b090b5e09402c7dc7e0ca516008.ico\",\"addedBy\":\"admin\",\"addedDate\":\"2015-01-18 12:10:32\"}');

-- ----------------------------
-- Table structure for `eps_cosler`
-- ----------------------------
DROP TABLE IF EXISTS `eps_cosler`;
CREATE TABLE `eps_cosler` (
  `PY` varchar(1) DEFAULT NULL,
  `HZ1` int(11) DEFAULT NULL,
  `HZ2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_cosler
-- ----------------------------
INSERT INTO `eps_cosler` VALUES ('A', '-20319', '-20284');
INSERT INTO `eps_cosler` VALUES ('B', '-20283', '-19776');
INSERT INTO `eps_cosler` VALUES ('C', '-19775', '-19219');
INSERT INTO `eps_cosler` VALUES ('D', '-19218', '-18711');
INSERT INTO `eps_cosler` VALUES ('E', '-18710', '-18527');
INSERT INTO `eps_cosler` VALUES ('F', '-18526', '-18240');
INSERT INTO `eps_cosler` VALUES ('G', '-18239', '-17923');
INSERT INTO `eps_cosler` VALUES ('H', '-17922', '-17418');
INSERT INTO `eps_cosler` VALUES ('J', '-17417', '-16475');
INSERT INTO `eps_cosler` VALUES ('K', '-16474', '-16213');
INSERT INTO `eps_cosler` VALUES ('L', '-16212', '-15641');
INSERT INTO `eps_cosler` VALUES ('M', '-15640', '-15166');
INSERT INTO `eps_cosler` VALUES ('N', '-15165', '-14923');
INSERT INTO `eps_cosler` VALUES ('O', '-14922', '-14915');
INSERT INTO `eps_cosler` VALUES ('P', '-14914', '-14631');
INSERT INTO `eps_cosler` VALUES ('Q', '-14630', '-14150');
INSERT INTO `eps_cosler` VALUES ('R', '-14149', '-14091');
INSERT INTO `eps_cosler` VALUES ('S', '-14090', '-13319');
INSERT INTO `eps_cosler` VALUES ('T', '-13318', '-12839');
INSERT INTO `eps_cosler` VALUES ('W', '-12838', '-12557');
INSERT INTO `eps_cosler` VALUES ('X', '-12556', '-11848');
INSERT INTO `eps_cosler` VALUES ('Y', '-11847', '-11056');
INSERT INTO `eps_cosler` VALUES ('Z', '-11055', '-10247');

-- ----------------------------
-- Table structure for `eps_down`
-- ----------------------------
DROP TABLE IF EXISTS `eps_down`;
CREATE TABLE `eps_down` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `account` char(30) DEFAULT NULL,
  `file` mediumint(5) DEFAULT NULL,
  `ip` char(15) NOT NULL,
  `time` datetime NOT NULL,
  `referer` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fileID` (`file`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_down
-- ----------------------------

-- ----------------------------
-- Table structure for `eps_file`
-- ----------------------------
DROP TABLE IF EXISTS `eps_file`;
CREATE TABLE `eps_file` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `pathname` char(50) NOT NULL,
  `title` char(90) NOT NULL,
  `extension` char(30) NOT NULL,
  `size` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `width` smallint(5) unsigned NOT NULL DEFAULT '0',
  `height` smallint(5) unsigned NOT NULL DEFAULT '0',
  `objectType` char(20) NOT NULL,
  `objectID` mediumint(9) NOT NULL,
  `addedBy` char(30) NOT NULL DEFAULT '',
  `addedDate` datetime NOT NULL,
  `public` enum('1','0') NOT NULL DEFAULT '1',
  `downloads` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `extra` varchar(255) NOT NULL,
  `primary` enum('1','0') DEFAULT '0',
  `editor` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `object` (`objectType`,`objectID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_file
-- ----------------------------
INSERT INTO `eps_file` VALUES ('1', '201501/f_4183e4644cb93642f97f5edc9505fb48.png', 'IMG_0215.PN', 'png', '161689', '640', '960', '', '0', 'admin', '2015-01-06 21:46:27', '1', '0', '', '0', '1');
INSERT INTO `eps_file` VALUES ('2', '201501/f_5a95dfacf6fa5ff720b8aec3b1c0bbbb.swf', 'flash3329', 'swf', '3787', '0', '0', 'product', '2', 'admin', '2015-01-06 22:35:43', '1', '0', '', '0', '1');
INSERT INTO `eps_file` VALUES ('3', '201501/f_ce06b0298fb245de0f2fa2ae88fe15c1.swf', 'flash3329', 'swf', '3787', '0', '0', 'product', '2', 'admin', '2015-01-06 22:36:11', '1', '0', '', '0', '1');
INSERT INTO `eps_file` VALUES ('6', '201502/f_12560462cc360841b8e6e85e3bdcb88f.jpg', 'logo', 'jpg', '23678', '330', '56', 'logo', '0', 'admin', '2015-02-01 12:32:34', '1', '0', '', '0', '0');
INSERT INTO `eps_file` VALUES ('5', '201501/f_b47c6b090b5e09402c7dc7e0ca516008.ico', 'fa', 'ico', '4286', '0', '0', 'favicon', '0', 'admin', '2015-01-18 12:10:32', '1', '0', '', '0', '0');
INSERT INTO `eps_file` VALUES ('7', '201503/f_4e2dc148231ca3e89b76c8aab60bb34b.jpg', 'hyhlt_img1', 'jpg', '15520', '236', '238', 'article', '4', 'admin', '2015-03-08 17:41:27', '1', '0', '', '1', '0');

-- ----------------------------
-- Table structure for `eps_layout`
-- ----------------------------
DROP TABLE IF EXISTS `eps_layout`;
CREATE TABLE `eps_layout` (
  `template` varchar(30) NOT NULL DEFAULT 'default',
  `page` varchar(30) NOT NULL,
  `region` varchar(30) NOT NULL,
  `blocks` text NOT NULL,
  UNIQUE KEY `layout` (`template`,`page`,`region`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_layout
-- ----------------------------
INSERT INTO `eps_layout` VALUES ('default', 'all', 'top', '[{\"id\":\"12\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'index_index', 'top', '[{\"id\":\"5\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'index_index', 'middle', '[{\"id\":3,\"grid\":12,\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":4,\"titleless\":0,\"borderless\":0},{\"id\":\"1\",\"grid\":4,\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":4,\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'index_index', 'bottom', '[{\"id\":\"11\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'company_index', 'side', '[{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"13\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'article_browse', 'side', '[{\"id\":\"6\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'article_view', 'side', '[{\"id\":\"6\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'product_browse', 'side', '[{\"id\":\"4\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"7\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'product_view', 'side', '[{\"id\":\"4\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"7\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'message_index', 'side', '[{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'blog_index', 'side', '[{\"id\":\"8\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'blog_view', 'side', '[{\"id\":\"8\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'page_index', 'side', '[{\"id\":\"2\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');
INSERT INTO `eps_layout` VALUES ('default', 'page_view', 'side', '[{\"id\":\"2\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]');

-- ----------------------------
-- Table structure for `eps_message`
-- ----------------------------
DROP TABLE IF EXISTS `eps_message`;
CREATE TABLE `eps_message` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `type` char(20) NOT NULL,
  `objectType` varchar(30) NOT NULL DEFAULT '',
  `objectID` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `account` char(30) DEFAULT NULL,
  `from` char(30) NOT NULL,
  `to` char(30) NOT NULL,
  `phone` char(30) NOT NULL,
  `email` varchar(90) NOT NULL,
  `qq` char(30) NOT NULL,
  `date` datetime NOT NULL,
  `content` text NOT NULL,
  `link` varchar(100) NOT NULL,
  `ip` varchar(15) NOT NULL,
  `status` char(20) NOT NULL,
  `public` enum('0','1') NOT NULL DEFAULT '1',
  `readed` enum('0','1') NOT NULL,
  `receiveEmail` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `object` (`objectType`,`objectID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_message
-- ----------------------------

-- ----------------------------
-- Table structure for `eps_oauth`
-- ----------------------------
DROP TABLE IF EXISTS `eps_oauth`;
CREATE TABLE `eps_oauth` (
  `account` varchar(30) NOT NULL,
  `provider` varchar(30) NOT NULL,
  `openID` varchar(60) NOT NULL,
  UNIQUE KEY `account` (`account`,`provider`,`openID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_oauth
-- ----------------------------

-- ----------------------------
-- Table structure for `eps_package`
-- ----------------------------
DROP TABLE IF EXISTS `eps_package`;
CREATE TABLE `eps_package` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `code` varchar(30) NOT NULL,
  `version` varchar(50) NOT NULL,
  `author` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  `license` text NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'extension',
  `site` varchar(150) NOT NULL,
  `chanzhiCompatible` varchar(100) NOT NULL,
  `templateCompatible` varchar(100) NOT NULL,
  `installedTime` datetime NOT NULL,
  `depends` varchar(100) NOT NULL,
  `dirs` text NOT NULL,
  `files` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`),
  KEY `name` (`name`),
  KEY `addedTime` (`installedTime`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_package
-- ----------------------------
INSERT INTO `eps_package` VALUES ('1', '蝉知全站搜索', 'search', '1.0', 'Xiying guan<guanxiying@xirangit.com>', '这个插件提供整站文章、产品、博客、单页、帖子的搜索功能', 'http://api.chanzhi.org/goto.php?item=license', 'extension', 'http://www.chanzhi.org', 'all', '', '2014-12-29 21:54:03', '', '[\"D:\\/wamp\\/apps\\/musuem\\/www\\\\template\\/default\\/view\\/search\\/css\",\"D:\\/wamp\\/apps\\/musuem\\/www\\\\template\\/default\\/view\\/block\\/ext\",\"D:\\\\wamp\\\\apps\\\\musuem\\\\system\\/module\\/common\\/ext\\/lang\\/zh-cn\",\"D:\\\\wamp\\\\apps\\\\musuem\\\\system\\/module\\/common\\/ext\\/lang\\/zh-tw\",\"D:\\\\wamp\\\\apps\\\\musuem\\\\system\\/module\\/common\\/ext\\/lang\\/en\",\"D:\\\\wamp\\\\apps\\\\musuem\\\\system\\/module\\/common\\/ext\\/model\",\"D:\\\\wamp\\\\apps\\\\musuem\\\\system\\/module\\/search\",\"D:\\\\wamp\\\\apps\\\\musuem\\\\system\\/module\\/search\\/lang\",\"D:\\\\wamp\\\\apps\\\\musuem\\\\system\\/module\\/book\\/ext\\/model\",\"D:\\\\wamp\\\\apps\\\\musuem\\\\system\\/module\\/product\\/ext\\/model\",\"D:\\\\wamp\\\\apps\\\\musuem\\\\system\\/module\\/article\\/ext\\/model\",\"D:\\\\wamp\\\\apps\\\\musuem\\\\system\\/module\\/thread\\/ext\\/model\",\"D:\\\\wamp\\\\apps\\\\musuem\\\\system\\/lib\\/spliter\",\"D:\\\\wamp\\\\apps\\\\musuem\\\\system\\/config\\/ext\"]', '{\"config\\\\ext\\/search.php\":\"e03b28181522e324df26cba91ea783a6\",\"lib\\\\spliter\\/spliter.class.php\":\"832187c092f727fb78cf3cf1a2c7462b\",\"module\\\\article\\\\ext\\\\model\\/search.php\":\"ecd1e11fa1bef6e43dc5956f337540cb\",\"module\\\\book\\\\ext\\\\model\\/search.php\":\"c74f554428890f8ab9e4395279d01ba6\",\"module\\\\common\\\\ext\\\\lang\\\\en\\/search.php\":\"5800b5822c48887f85f0b294e489b834\",\"module\\\\common\\\\ext\\\\lang\\\\zh-cn\\/search.php\":\"89c4c64598f6bf3976b2648c2b324f7d\",\"module\\\\common\\\\ext\\\\lang\\\\zh-tw\\/search.php\":\"89c4c64598f6bf3976b2648c2b324f7d\",\"module\\\\common\\\\ext\\\\model\\/search.php\":\"01a51e7540cd7e34f6c7d52a369b00f4\",\"module\\\\product\\\\ext\\\\model\\/search.php\":\"922dd91c95d0e6e1cebb9308fa13f026\",\"module\\\\search\\/config.php\":\"66eeb7a90285d3d0e3a2cea418e1fa75\",\"module\\\\search\\/control.php\":\"ad0cac1b09737f30c8054d25fa74db09\",\"module\\\\search\\\\lang\\/zh-cn.php\":\"3b4fe205611b38e4e06c0c95750624c0\",\"module\\\\search\\/model.php\":\"217a65bc1f46b163a464a5105638ec31\",\"module\\\\thread\\\\ext\\\\model\\/search.php\":\"c316232db1b07670b83bcbc8e80901c9\"}', 'installed');

-- ----------------------------
-- Table structure for `eps_product`
-- ----------------------------
DROP TABLE IF EXISTS `eps_product`;
CREATE TABLE `eps_product` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `alias` varchar(100) NOT NULL,
  `mall` varchar(255) NOT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `model` char(30) DEFAULT NULL,
  `color` char(20) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `unit` char(20) NOT NULL,
  `price` float(8,2) NOT NULL,
  `promotion` float(8,2) NOT NULL,
  `amount` mediumint(8) unsigned DEFAULT NULL,
  `keywords` varchar(150) NOT NULL,
  `desc` text NOT NULL,
  `content` text NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'normal',
  `views` mediumint(5) unsigned NOT NULL DEFAULT '0',
  `sticky` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `order` smallint(5) unsigned NOT NULL,
  `css` text NOT NULL,
  `js` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `order` (`order`),
  KEY `views` (`views`),
  KEY `sticky` (`sticky`),
  KEY `model` (`model`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_product
-- ----------------------------
INSERT INTO `eps_product` VALUES ('1', 'a', '', '', 'AAA', 'BBB', 'CCC', 'EEE', 'FFFF', '12.00', '11.00', '12', 'ASDFASD', 'ASDFASDFASDF', 'ASDFASDFASF', 'admin', '', '2015-01-05 22:18:45', '2015-01-05 22:18:45', 'normal', '4', '0', '1', '', '');
INSERT INTO `eps_product` VALUES ('2', '吗', '', '', '', '', '', '', '', '0.00', '0.00', '0', '错错错', '<embed src=\"/school/data/upload/201501/f_5a95dfacf6fa5ff720b8aec3b1c0bbbb.swf\" type=\"application/x-shockwave-flash\" width=\"550\" height=\"400\" quality=\"high\" />', '呃呃呃<embed src=\"/school/data/upload/201501/f_ce06b0298fb245de0f2fa2ae88fe15c1.swf\" type=\"application/x-shockwave-flash\" width=\"550\" height=\"400\" quality=\"high\" />', 'admin', '', '2015-01-06 22:36:17', '2015-01-06 22:36:17', 'normal', '11', '0', '2', '', '');

-- ----------------------------
-- Table structure for `eps_product_custom`
-- ----------------------------
DROP TABLE IF EXISTS `eps_product_custom`;
CREATE TABLE `eps_product_custom` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `product` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `label` varchar(100) NOT NULL,
  `value` varchar(200) NOT NULL,
  `order` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `label` (`product`,`label`),
  KEY `product` (`product`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_product_custom
-- ----------------------------
INSERT INTO `eps_product_custom` VALUES ('1', '1', 'ASDF', '', '0');
INSERT INTO `eps_product_custom` VALUES ('2', '1', 'BBB', 'CCCC', '1');
INSERT INTO `eps_product_custom` VALUES ('3', '2', '', '', '0');

-- ----------------------------
-- Table structure for `eps_relation`
-- ----------------------------
DROP TABLE IF EXISTS `eps_relation`;
CREATE TABLE `eps_relation` (
  `type` char(20) NOT NULL,
  `id` mediumint(9) NOT NULL,
  `category` smallint(5) NOT NULL,
  UNIQUE KEY `relation` (`type`,`id`,`category`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_relation
-- ----------------------------
INSERT INTO `eps_relation` VALUES ('article', '4', '10');
INSERT INTO `eps_relation` VALUES ('article', '4', '18');
INSERT INTO `eps_relation` VALUES ('article', '5', '11');
INSERT INTO `eps_relation` VALUES ('article', '6', '13');
INSERT INTO `eps_relation` VALUES ('article', '7', '17');
INSERT INTO `eps_relation` VALUES ('blog', '2', '9');
INSERT INTO `eps_relation` VALUES ('product', '1', '6');
INSERT INTO `eps_relation` VALUES ('product', '2', '6');

-- ----------------------------
-- Table structure for `eps_reply`
-- ----------------------------
DROP TABLE IF EXISTS `eps_reply`;
CREATE TABLE `eps_reply` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `thread` mediumint(8) unsigned NOT NULL,
  `content` text NOT NULL,
  `author` char(30) NOT NULL,
  `editor` char(30) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `hidden` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `thread` (`thread`),
  KEY `author` (`author`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_reply
-- ----------------------------

-- ----------------------------
-- Table structure for `eps_search_dict`
-- ----------------------------
DROP TABLE IF EXISTS `eps_search_dict`;
CREATE TABLE `eps_search_dict` (
  `key` smallint(5) unsigned NOT NULL,
  `value` char(3) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_search_dict
-- ----------------------------
INSERT INTO `eps_search_dict` VALUES ('21333', '单');
INSERT INTO `eps_search_dict` VALUES ('39029', '页');
INSERT INTO `eps_search_dict` VALUES ('25308', '拜');
INSERT INTO `eps_search_dict` VALUES ('21543', '吧');
INSERT INTO `eps_search_dict` VALUES ('21571', '呃');
INSERT INTO `eps_search_dict` VALUES ('38169', '错');
INSERT INTO `eps_search_dict` VALUES ('21834', '啊');
INSERT INTO `eps_search_dict` VALUES ('21704', '哈');
INSERT INTO `eps_search_dict` VALUES ('38463', '阿');
INSERT INTO `eps_search_dict` VALUES ('33832', '萨');
INSERT INTO `eps_search_dict` VALUES ('24503', '德');
INSERT INTO `eps_search_dict` VALUES ('21457', '发');
INSERT INTO `eps_search_dict` VALUES ('23556', '射');
INSERT INTO `eps_search_dict` VALUES ('28857', '点');
INSERT INTO `eps_search_dict` VALUES ('28903', '烧');
INSERT INTO `eps_search_dict` VALUES ('39277', '饭');
INSERT INTO `eps_search_dict` VALUES ('39034', '顺');
INSERT INTO `eps_search_dict` VALUES ('20016', '丰');
INSERT INTO `eps_search_dict` VALUES ('28023', '海');
INSERT INTO `eps_search_dict` VALUES ('34567', '蜇');
INSERT INTO `eps_search_dict` VALUES ('30340', '的');
INSERT INTO `eps_search_dict` VALUES ('25925', '故');
INSERT INTO `eps_search_dict` VALUES ('20107', '事');
INSERT INTO `eps_search_dict` VALUES ('20154', '人');
INSERT INTO `eps_search_dict` VALUES ('25991', '文');
INSERT INTO `eps_search_dict` VALUES ('39302', '馆');
INSERT INTO `eps_search_dict` VALUES ('27426', '欢');
INSERT INTO `eps_search_dict` VALUES ('20048', '乐');
INSERT INTO `eps_search_dict` VALUES ('21381', '厅');
INSERT INTO `eps_search_dict` VALUES ('26159', '是');
INSERT INTO `eps_search_dict` VALUES ('22810', '多');
INSERT INTO `eps_search_dict` VALUES ('23569', '少');
INSERT INTO `eps_search_dict` VALUES ('36895', '速');
INSERT INTO `eps_search_dict` VALUES ('24230', '度');

-- ----------------------------
-- Table structure for `eps_search_index`
-- ----------------------------
DROP TABLE IF EXISTS `eps_search_index`;
CREATE TABLE `eps_search_index` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `objectType` char(20) NOT NULL,
  `objectID` mediumint(9) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `params` text NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `status` char(30) NOT NULL DEFAULT 'normal',
  PRIMARY KEY (`id`),
  UNIQUE KEY `object` (`objectType`,`objectID`),
  KEY `addedDate` (`addedDate`),
  FULLTEXT KEY `content` (`title`,`content`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_search_index
-- ----------------------------
INSERT INTO `eps_search_index` VALUES ('1', 'article', '1', ' 21333 39029', ' 21333 39029 21333 39029 21333 39029 21333 39029 21333 39029 21333 39029 21333 39029 21333 39029 21333 39029', '{\"category\":\"\",\"alias\":\"danye1\"}', '2014-12-30 21:11:00', '2014-12-30 21:16:52', 'normal');
INSERT INTO `eps_search_index` VALUES ('2', 'product', '1', ' CHANPIN1', ' ASDFASDFASDFASDFASDFASFASDFASD', '{\"category\":\"\",\"alias\":\"\"}', '2015-01-05 22:18:45', '2015-01-05 22:18:45', 'normal');
INSERT INTO `eps_search_index` VALUES ('3', 'product', '2', ' 25308 25308 25308 25308 21543', ' 21571 21571 21571 38169 38169 38169', '{\"category\":\"\",\"alias\":\"\"}', '2015-01-06 22:36:17', '2015-01-06 22:36:17', 'normal');
INSERT INTO `eps_search_index` VALUES ('4', 'article', '2', ' 21834 21704 21704 21704', ' 38463 33832 24503 fad 38463 33832 24503 21457 23556 28857 21457 28903 39277 38463 33832 24503 21457 39034 20016', '{\"category\":\"\",\"alias\":\"\"}', '2015-01-10 10:06:00', '2015-01-10 10:07:06', 'normal');
INSERT INTO `eps_search_index` VALUES ('9', 'article', '4', ' 28023 34567 30340 25925 20107', ' 28023 34567 30340 25925 20107 28023 34567 30340 25925 20107 28023 34567 30340 25925 20107', '{\"category\":\"\",\"alias\":\"haizehe\"}', '2015-01-18 20:27:00', '2015-03-08 17:42:11', 'normal');
INSERT INTO `eps_search_index` VALUES ('7', 'article', '5', ' 20154 25991 39302', ' dsdsa', '{\"category\":\"\",\"alias\":\"\"}', '2015-02-01 11:26:00', '2015-02-01 11:26:21', 'normal');
INSERT INTO `eps_search_index` VALUES ('8', 'article', '6', ' 27426 20048 21381', ' dfsf', '{\"category\":\"\",\"alias\":\"\"}', '2015-02-01 11:26:00', '2015-02-01 11:26:51', 'normal');
INSERT INTO `eps_search_index` VALUES ('10', 'article', '7', ' 26159 22810 23569', ' 36895 24230 36895 24230', '{\"category\":\"\",\"alias\":\"\"}', '2015-03-08 17:42:00', '2015-03-08 17:42:33', 'normal');

-- ----------------------------
-- Table structure for `eps_tag`
-- ----------------------------
DROP TABLE IF EXISTS `eps_tag`;
CREATE TABLE `eps_tag` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `tag` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `rank` smallint(5) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`),
  KEY `rank` (`rank`),
  KEY `link` (`link`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_tag
-- ----------------------------
INSERT INTO `eps_tag` VALUES ('1', 'ASDFASD', '', '1');
INSERT INTO `eps_tag` VALUES ('2', '错错错', '', '1');
INSERT INTO `eps_tag` VALUES ('3', '阿萨德发顺丰', '', '1');
INSERT INTO `eps_tag` VALUES ('4', '海蜇的故事', '', '1');
INSERT INTO `eps_tag` VALUES ('5', '速度', '', '1');

-- ----------------------------
-- Table structure for `eps_thread`
-- ----------------------------
DROP TABLE IF EXISTS `eps_thread`;
CREATE TABLE `eps_thread` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `board` mediumint(9) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(60) NOT NULL,
  `editor` varchar(60) NOT NULL,
  `addedDate` datetime NOT NULL,
  `editedDate` datetime NOT NULL,
  `readonly` tinyint(1) NOT NULL DEFAULT '0',
  `views` smallint(5) unsigned NOT NULL DEFAULT '0',
  `stick` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `replies` smallint(6) NOT NULL,
  `repliedBy` varchar(30) NOT NULL,
  `repliedDate` datetime NOT NULL,
  `replyID` mediumint(8) unsigned NOT NULL,
  `hidden` enum('0','1') NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`board`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_thread
-- ----------------------------

-- ----------------------------
-- Table structure for `eps_user`
-- ----------------------------
DROP TABLE IF EXISTS `eps_user`;
CREATE TABLE `eps_user` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `account` char(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `realname` char(30) NOT NULL DEFAULT '',
  `nickname` char(60) NOT NULL DEFAULT '',
  `admin` enum('no','common','super') NOT NULL DEFAULT 'no',
  `avatar` char(30) NOT NULL DEFAULT '',
  `birthday` date NOT NULL,
  `gender` enum('f','m','u') NOT NULL DEFAULT 'u',
  `email` char(90) NOT NULL DEFAULT '',
  `skype` char(90) NOT NULL,
  `qq` char(20) NOT NULL DEFAULT '',
  `yahoo` char(90) NOT NULL DEFAULT '',
  `gtalk` char(90) NOT NULL DEFAULT '',
  `wangwang` char(90) NOT NULL DEFAULT '',
  `site` varchar(100) NOT NULL,
  `mobile` char(11) NOT NULL DEFAULT '',
  `phone` char(20) NOT NULL DEFAULT '',
  `company` varchar(255) NOT NULL,
  `address` char(120) NOT NULL DEFAULT '',
  `zipcode` char(10) NOT NULL DEFAULT '',
  `visits` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `last` datetime NOT NULL,
  `fails` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `referer` varchar(255) NOT NULL,
  `join` datetime NOT NULL,
  `reset` char(64) NOT NULL,
  `locked` datetime NOT NULL,
  `public` varchar(30) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `admin` (`admin`),
  KEY `account` (`account`,`password`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_user
-- ----------------------------
INSERT INTO `eps_user` VALUES ('1', 'admin', '5df5c29ae86331e1b5b526ad90d767e4', 'admin', '', 'super', '', '0000-00-00', 'u', '', '', '', '', '', '', '', '', '', '', '', '', '8', '127.0.0.1', '2015-03-08 17:34:15', '0', '', '2014-12-29 21:29:48', '', '0000-00-00 00:00:00', '0');
INSERT INTO `eps_user` VALUES ('2', 'gaozhenbao', '97b423e48a56f1bec6b5dbf1d5cd8946', '高振宝', '', 'common', '', '0000-00-00', 'u', '11917496@qq.com', '', '', '', '', '', '', '', '1234567', '随便', '', '', '2', '127.0.0.1', '2014-12-29 21:58:57', '0', '', '2014-12-29 21:58:57', '', '0000-00-00 00:00:00', '0');
INSERT INTO `eps_user` VALUES ('3', 'gzb', '3f5e6c55d80b7c0ca5a45b25268a05e9', 'gao', '', 'no', '', '0000-00-00', 'u', 'gao@123.com', '', '', '', '', '', '', '', '', '', '', '', '2', '127.0.0.1', '2014-12-30 21:54:39', '0', '', '2014-12-30 21:54:39', '', '0000-00-00 00:00:00', '0');

-- ----------------------------
-- Table structure for `eps_wx_message`
-- ----------------------------
DROP TABLE IF EXISTS `eps_wx_message`;
CREATE TABLE `eps_wx_message` (
  `id` mediumint(10) unsigned NOT NULL AUTO_INCREMENT,
  `public` smallint(3) NOT NULL,
  `wid` char(64) NOT NULL,
  `to` varchar(50) NOT NULL,
  `from` varchar(50) NOT NULL,
  `response` mediumint(8) unsigned NOT NULL,
  `content` text NOT NULL,
  `type` char(30) NOT NULL,
  `replied` tinyint(3) NOT NULL DEFAULT '0',
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_wx_message
-- ----------------------------

-- ----------------------------
-- Table structure for `eps_wx_public`
-- ----------------------------
DROP TABLE IF EXISTS `eps_wx_public`;
CREATE TABLE `eps_wx_public` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `appID` char(30) NOT NULL,
  `appSecret` char(32) NOT NULL,
  `url` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `qrcode` varchar(100) NOT NULL,
  `primary` tinyint(3) NOT NULL DEFAULT '0',
  `type` enum('subscribe','service') NOT NULL,
  `status` enum('wait','normal') NOT NULL,
  `certified` enum('1','0') NOT NULL DEFAULT '0',
  `addedDate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_wx_public
-- ----------------------------

-- ----------------------------
-- Table structure for `eps_wx_response`
-- ----------------------------
DROP TABLE IF EXISTS `eps_wx_response`;
CREATE TABLE `eps_wx_response` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `public` smallint(3) NOT NULL,
  `key` varchar(100) NOT NULL,
  `group` varchar(100) NOT NULL,
  `type` enum('text','news','link') NOT NULL DEFAULT 'text',
  `source` varchar(100) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`public`,`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of eps_wx_response
-- ----------------------------

-- ----------------------------
-- View structure for `eps_class`
-- ----------------------------
DROP VIEW IF EXISTS `eps_class`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `eps_class` AS select `t1`.`id` AS `classId`,`t1`.`name` AS `name`,`t1`.`postedDate` AS `postedDate`,`t1`.`order` AS `order`,`t2`.`gradeId` AS `gradeId` from (`eps_category` `t1` join `eps_grade` `t2`) where ((`t1`.`parent` = `t2`.`gradeId`) and (`t1`.`grade` = 2) and (`t1`.`type` = 'grade')) ;

-- ----------------------------
-- View structure for `eps_grade`
-- ----------------------------
DROP VIEW IF EXISTS `eps_grade`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `eps_grade` AS select `t1`.`id` AS `gradeId`,`t1`.`name` AS `name`,`t1`.`postedDate` AS `postedDate`,`t1`.`order` AS `order` from `eps_category` `t1` where ((`t1`.`parent` = 0) and (`t1`.`grade` = 1) and (`t1`.`type` = 'grade')) ;

-- ----------------------------
-- Function structure for `hzcode`
-- ----------------------------
DROP FUNCTION IF EXISTS `hzcode`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` FUNCTION `hzcode`(s CHAR(255)) RETURNS char(1) CHARSET utf8
BEGIN
DECLARE hz_code int;
DECLARE hz_py char;
IF(ORD(s)>=64 && ORD(s) <=122) THEN
RETURN UPPER(substring(s,1,1));
END IF;
SET hz_code = ORD(CONVERT( s USING gbk ) COLLATE gbk_chinese_ci) - 65536 ;
select py into hz_py from eps_cosler where  hz_code>=eps_cosler.hz1 and hz_code<=eps_cosler.hz2;               
RETURN hz_py;
END
;;
DELIMITER ;
