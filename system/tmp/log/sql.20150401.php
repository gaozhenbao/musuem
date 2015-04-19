<?php die();?> 
20150401 00:58:10: 

20150401 00:58:39: /school/
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM eps_block

20150401 01:27:36: /school/admin.php?m=article&f=edit&articleID=4&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150401 01:27:39: /school/admin.php?m=article&f=edit&articleID=4&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`title` = '海蜇的故事',`en_title` = '',`link` = '',`imgurl_f` = '',`img_url` = '',`alias` = 'haizehe',`keywords` = '海蜇的故事',`summary` = '海蜇的故事',`mingzi` = '',`shulei` = '',`fenbu` = '',`xingtai` = '',`content` = '海蜇的故事',`addedDate` = '2015-01-18 20:27:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2015-04-01 01:27:39' WHERE id  = '4'

20150401 01:31:40: /school/admin.php?m=article&f=edit&articleID=4&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`title` = '海蜇的故事',`en_title` = '',`link` = '',`imgurl_f` = '',`img_url` = '',`alias` = 'haizehe',`keywords` = '海蜇的故事',`summary` = '海蜇的故事',`mingzi` = '',`shulei` = '',`fenbu` = '',`xingtai` = '',`content` = '海蜇的故事',`addedDate` = '2015-01-18 20:27:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2015-04-01 01:31:40' WHERE id  = '4'

20150401 01:33:33: /school/admin.php?m=article&f=edit&articleID=4&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`title` = '海蜇的故事',`en_title` = '',`link` = '',`imgurl_f` = '',`img_url` = '',`alias` = 'haizehe',`keywords` = '海蜇的故事',`summary` = '海蜇的故事',`mingzi` = '',`shulei` = '',`fenbu` = '',`xingtai` = '',`content` = '海蜇的故事',`addedDate` = '2015-01-18 20:27:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2015-04-01 01:33:33' WHERE id  = '4'
  SELECT count(*) as count FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,海蜇的故事,%'
  SELECT count(*) as count FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,海蜇的故事,%'
  SELECT count(*) as count FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,海蜇的故事,%'
  SELECT count(*) as count FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,海蜇的故事,%'
  SELECT count(*) as count FROM eps_tag WHERE tag  = '海蜇的故事'
  UPDATE eps_tag SET  `rank`  = '1' WHERE tag  = '海蜇的故事'
  DELETE FROM eps_relation WHERE type  = 'article' AND id  = '4'
  INSERT INTO eps_relation SET `type` = 'article',`id` = '4',`category` = '10'
  INSERT INTO eps_relation SET `type` = 'article',`id` = '4',`category` = '18'
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海'
  REPLACE eps_search_dict SET `key` = '34567',`value` = '蜇'
  REPLACE eps_search_dict SET `key` = '30340',`value` = '的'
  REPLACE eps_search_dict SET `key` = '25925',`value` = '故'
  REPLACE eps_search_dict SET `key` = '20107',`value` = '事'
  REPLACE eps_search_index SET `objectID` = '4',`objectType` = 'article',`title` = ' 28023 34567 30340 25925 20107',`status` = 'normal',`addedDate` = '2015-01-18 20:27:00',`editedDate` = '2015-04-01 01:33:33',`params` = '{\"category\":\"\",\"alias\":\"haizehe\"}',`content` = ' 28023 34567 30340 25925 20107 28023 34567 30340 25925 20107 28023 34567 30340 25925 20107'

20150401 01:33:34: /school/admin.php?m=article&f=admin&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('8','7','6','5','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('8','7','6','5','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '8'
  SELECT * FROM eps_article WHERE id  = '8'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '8'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('8') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '6'
  SELECT * FROM eps_article WHERE id  = '6'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '6'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '5'
  SELECT * FROM eps_article WHERE id  = '5'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '5'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150401 01:33:40: /school/admin.php?m=article&f=edit&articleID=4&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 01:33:41: /school/admin.php?m=article&f=edit&articleID=4&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150401 02:44:00: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`title` = 'asdf',`en_title` = '',`link` = '',`imgurl_f` = '',`img_url` = '',`content` = '默认内容',`mingzi` = '名字&lt;br /&gt;',`shulei` = '舒蕾',`fenlei` = '分类',`fenbu` = '分布',`qixidi` = '栖息地',`xingtai` = '形态',`jiegou` = '结构',`xixing` = '习性',`shixing` = '食性',`fanzhi` = '繁殖',`fayu` = '发育',`qiyuan` = '起源',`wenhua` = '文化',`yongtu` = '用途',`xianzhuang` = '现状',`tupian` = '图片',`qita` = '其他',`dinianji` = '低',`zhongnianji` = '中',`gaonianji` = '高',`addedDate` = '2015-04-01 02:00:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2015-04-01 02:44:00',`keywords` = '',`alias` = '' WHERE id  = '11'

20150401 02:46:57: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`title` = 'asdf',`en_title` = '',`link` = '',`imgurl_f` = '',`img_url` = '',`content` = '默认内容',`mingzi` = '名字&lt;br /&gt;',`shulei` = '舒蕾',`fenlei` = '分类',`fenbu` = '分布',`qixidi` = '栖息地',`xingtai` = '形态',`jiegou` = '结构',`xixing` = '习性',`shixing` = '食性',`fanzhi` = '繁殖',`fayu` = '发育',`qiyuan` = '起源',`wenhua` = '文化',`yongtu` = '用途',`xianzhuang` = '现状',`tupian` = '图片',`qita` = '其他',`dinianji` = '低',`zhongnianji` = '中',`gaonianji` = '高',`addedDate` = '2015-04-01 02:00:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2015-04-01 02:46:57',`keywords` = '',`alias` = '' WHERE id  = '11'

20150401 02:47:35: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`title` = 'asdf',`en_title` = '',`link` = '',`imgurl_f` = '',`img_url` = '',`content` = '默认内容',`mingzi` = '名字&lt;br /&gt;',`shulei` = '舒蕾',`fenlei` = '分类',`fenbu` = '分布',`qixidi` = '栖息地',`xingtai` = '形态',`jiegou` = '结构',`xixing` = '习性',`shixing` = '食性',`fanzhi` = '繁殖',`fayu` = '发育',`qiyuan` = '起源',`wenhua` = '文化',`yongtu` = '用途',`xianzhuang` = '现状',`tupian` = '图片',`qita` = '其他',`dinianji` = '低',`zhongnianji` = '中',`gaonianji` = '高',`addedDate` = '2015-04-01 02:00:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2015-04-01 02:47:35',`keywords` = '',`alias` = '' WHERE id  = '11'
  DELETE FROM eps_relation WHERE type  = 'article' AND id  = '11'
  INSERT INTO eps_relation SET `type` = 'article',`id` = '11',`category` = '19'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  REPLACE eps_search_dict SET `key` = '40664',`value` = '默'
  REPLACE eps_search_dict SET `key` = '35748',`value` = '认'
  REPLACE eps_search_dict SET `key` = '20869',`value` = '内'
  REPLACE eps_search_dict SET `key` = '23481',`value` = '容'
  REPLACE eps_search_index SET `objectID` = '11',`objectType` = 'article',`title` = ' asdf',`status` = 'normal',`addedDate` = '2015-04-01 02:00:00',`editedDate` = '2015-04-01 02:47:35',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 40664 35748 20869 23481'

20150401 02:47:37: /school/admin.php?m=article&f=admin&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','8','7','6','5','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','8','7','6','5','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '8'
  SELECT * FROM eps_article WHERE id  = '8'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '8'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('8') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '6'
  SELECT * FROM eps_article WHERE id  = '6'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '6'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '5'
  SELECT * FROM eps_article WHERE id  = '5'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '5'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150401 02:47:42: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 02:47:42: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150401 02:47:48: /school/admin.php?m=article&f=admin&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','8','7','6','5','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','8','7','6','5','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '8'
  SELECT * FROM eps_article WHERE id  = '8'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '8'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('8') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '6'
  SELECT * FROM eps_article WHERE id  = '6'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '6'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '5'
  SELECT * FROM eps_article WHERE id  = '5'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '5'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150401 02:49:01: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 02:49:01: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150401 02:49:31: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`title` = 'asdf',`en_title` = '',`link` = '',`imgurl_f` = '',`img_url` = '',`content` = '默认内容',`mingzi` = '阿斯蒂芬',`shulei` = '阿斯蒂芬',`fenlei` = '1313',`fenbu` = '123',`qixidi` = '',`xingtai` = '',`jiegou` = '',`xixing` = '',`shixing` = '',`fanzhi` = '',`fayu` = '',`qiyuan` = '',`wenhua` = '',`yongtu` = '',`xianzhuang` = '',`tupian` = '',`qita` = '',`dinianji` = '',`zhongnianji` = '',`gaonianji` = '',`addedDate` = '2015-04-01 02:00:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2015-04-01 02:49:31',`keywords` = '',`alias` = '' WHERE id  = '11'
  DELETE FROM eps_relation WHERE type  = 'article' AND id  = '11'
  INSERT INTO eps_relation SET `type` = 'article',`id` = '11',`category` = '19'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  REPLACE eps_search_dict SET `key` = '40664',`value` = '默'
  REPLACE eps_search_dict SET `key` = '35748',`value` = '认'
  REPLACE eps_search_dict SET `key` = '20869',`value` = '内'
  REPLACE eps_search_dict SET `key` = '23481',`value` = '容'
  REPLACE eps_search_index SET `objectID` = '11',`objectType` = 'article',`title` = ' asdf',`status` = 'normal',`addedDate` = '2015-04-01 02:00:00',`editedDate` = '2015-04-01 02:49:31',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 40664 35748 20869 23481'

20150401 02:49:33: /school/admin.php?m=article&f=admin&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','8','7','6','5','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','8','7','6','5','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '8'
  SELECT * FROM eps_article WHERE id  = '8'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '8'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('8') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '6'
  SELECT * FROM eps_article WHERE id  = '6'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '6'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '5'
  SELECT * FROM eps_article WHERE id  = '5'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '5'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150401 02:49:36: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 02:49:36: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150401 02:54:55: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150401 02:56:18: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  UPDATE eps_article SET `author` = 'admin',`source` = 'original',`title` = 'asdf',`en_title` = '',`link` = '',`imgurl_f` = '',`img_url` = '',`content` = '默认内容',`mingzi` = '名字',`shulei` = '舒蕾',`fenlei` = '分类',`fenbu` = '分布',`qixidi` = '栖息地',`xingtai` = '形态',`jiegou` = '结构&lt;br /&gt;',`xixing` = '习性',`shixing` = '食性',`fanzhi` = '繁殖',`fayu` = '发育',`qiyuan` = '起源',`wenhua` = '文化',`yongtu` = '用途',`xianzhuang` = '现状',`tupian` = '图片',`qita` = '其他',`dinianji` = '低年级',`zhongnianji` = '中年级',`gaonianji` = '高年级',`addedDate` = '2015-04-01 02:00:00',`status` = 'normal',`editor` = 'admin',`editedDate` = '2015-04-01 02:56:18',`keywords` = '',`alias` = '' WHERE id  = '11'
  DELETE FROM eps_relation WHERE type  = 'article' AND id  = '11'
  INSERT INTO eps_relation SET `type` = 'article',`id` = '11',`category` = '19'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  REPLACE eps_search_dict SET `key` = '40664',`value` = '默'
  REPLACE eps_search_dict SET `key` = '35748',`value` = '认'
  REPLACE eps_search_dict SET `key` = '20869',`value` = '内'
  REPLACE eps_search_dict SET `key` = '23481',`value` = '容'
  REPLACE eps_search_index SET `objectID` = '11',`objectType` = 'article',`title` = ' asdf',`status` = 'normal',`addedDate` = '2015-04-01 02:00:00',`editedDate` = '2015-04-01 02:56:18',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 40664 35748 20869 23481'

20150401 02:56:20: /school/admin.php?m=article&f=admin&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','8','7','6','5','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','8','7','6','5','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '8'
  SELECT * FROM eps_article WHERE id  = '8'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '8'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('8') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '6'
  SELECT * FROM eps_article WHERE id  = '6'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '6'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '5'
  SELECT * FROM eps_article WHERE id  = '5'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '5'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150401 02:56:24: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 02:56:24: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150401 02:57:05: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150401 02:57:20: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 02:57:20' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 02:58:18: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 02:58:18' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:00:43: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:00:43' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:00:46: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:00:46' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:01:49: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:01:49' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:02:46: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:02:46' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:03:06: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 03:09:06: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 03:15:06: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 03:17:25: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:17:25' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:17:28: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:17:28' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:17:35: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:17:35' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:17:42: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:17:42' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:19:52: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:19:52' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:20:33: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:20:33' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:20:38: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:20:38' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:21:06: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 03:23:25: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:23:25' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:23:48: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:23:48' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:27:06: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 03:30:01: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:30:01' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:33:06: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 03:35:15: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:35:15' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:36:27: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:36:27' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:39:07: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 03:43:29: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:43:29' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:45:06: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 03:45:24: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:45:24' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:48:21: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:48:21' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:49:07: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:49:07' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:49:45: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:49:45' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:51:06: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 03:53:53: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:53:53' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:54:22: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:54:22' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:54:38: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:54:38' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:55:12: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:55:12' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:55:26: /school/index.php?m=article&f=view&id=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.status  = 'normal' AND t1.addedDate  < '2015-04-01 02:00:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '19' AND t1.addedDate  <= '2015-04-01 03:55:26' AND t1.status  = 'normal' AND t1.addedDate  > '2015-04-01 02:00:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '11'

20150401 03:57:07: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 04:03:07: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 04:09:06: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 04:15:07: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 04:21:07: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 04:27:07: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 04:33:07: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 04:39:06: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 04:50:44: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 04:51:07: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 04:57:07: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 05:03:07: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 05:09:07: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150401 05:15:07: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

