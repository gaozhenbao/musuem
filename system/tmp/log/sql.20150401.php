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

