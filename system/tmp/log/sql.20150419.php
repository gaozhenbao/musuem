<?php die();?> 
20150419 14:15:24: /school/
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','index_index') AND template  = 'default'
  SELECT * FROM eps_block

20150419 14:19:27: /school/?m=article&f=browse&categoryID=11&pt=rwg
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:19:27' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:19:27' AND t1.status  = 'normal' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:19:27' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '11'

20150419 14:19:27: /school/?m=article&f=browse&categoryID=11&pt=rwg
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:19:27' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:19:27' AND t1.status  = 'normal' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:19:27' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '11'

20150419 14:19:40: /school/?m=article&f=browse&categoryID=12&pt=tyg
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '12' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '12' 
  SELECT id, name FROM eps_category WHERE id IN ('','12','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '12' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '12' 
  SELECT id, name FROM eps_category WHERE id IN ('','12','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',12,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:19:40' AND t1.status  = 'normal' AND t2.category IN ('12') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:19:40' AND t1.status  = 'normal' AND t2.category IN ('12') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:19:40' AND t1.status  = 'normal' AND t2.category IN ('12') GROUP BY t2.id ORDER BY addedDate desc
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '12'

20150419 14:19:40: /school/?m=article&f=browse&categoryID=12&pt=tyg
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '12' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '12' 
  SELECT id, name FROM eps_category WHERE id IN ('','12','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '12' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '12' 
  SELECT id, name FROM eps_category WHERE id IN ('','12','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',12,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:19:40' AND t1.status  = 'normal' AND t2.category IN ('12') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:19:40' AND t1.status  = 'normal' AND t2.category IN ('12') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:19:40' AND t1.status  = 'normal' AND t2.category IN ('12') GROUP BY t2.id ORDER BY addedDate desc
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '12'

20150419 14:22:41: /school/?m=article&f=browse&categoryID=12&pt=tyg
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '12' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '12' 
  SELECT id, name FROM eps_category WHERE id IN ('','12','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '12' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '12' 
  SELECT id, name FROM eps_category WHERE id IN ('','12','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',12,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:22:41' AND t1.status  = 'normal' AND t2.category IN ('12') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:22:41' AND t1.status  = 'normal' AND t2.category IN ('12') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:22:41' AND t1.status  = 'normal' AND t2.category IN ('12') GROUP BY t2.id ORDER BY addedDate desc
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '12'

20150419 14:22:44: /school/?m=article&f=browse&categoryID=11&pt=rwg
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:22:44' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:22:44' AND t1.status  = 'normal' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:22:44' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '11'

20150419 14:22:44: /school/?m=article&f=browse&categoryID=11&pt=rwg
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:22:44' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:22:44' AND t1.status  = 'normal' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:22:44' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '11'

20150419 14:25:03: /school/?m=article&f=browse&categoryID=11&pt=rwg
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:25:03' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:25:03' AND t1.status  = 'normal' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:25:03' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '11'

20150419 14:25:07: /school/?m=article&f=browse&categoryID=11&pt=rwg
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:25:07' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:25:07' AND t1.status  = 'normal' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:25:07' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '11'

20150419 14:27:53: /school/?m=article&f=browse&categoryID=11&pt=rwg
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:27:53' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:27:53' AND t1.status  = 'normal' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:27:53' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '11'

20150419 14:28:06: /school/admin.php
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:28:06: /school/admin.php?m=user&f=login&referer=L3NjaG9vbC9hZG1pbi5waHA=
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_wx_public ORDER BY addedDate

20150419 14:28:11: /school/admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_wx_public ORDER BY addedDate
  SELECT * FROM eps_user WHERE account  = 'admin'
  UPDATE eps_user SET `id` = '1',`account` = 'admin',`password` = '5df5c29ae86331e1b5b526ad90d767e4',`realname` = 'admin',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '10',`ip` = '127.0.0.1',`last` = '2015-04-19 14:28:11',`fails` = '0',`referer` = '',`join` = '2014-12-29 21:29:48',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0' WHERE account  = 'admin'

20150419 14:28:11: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:28:23: /school/admin.php?m=company&f=setBasic
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:28:24: /school/admin.php?m=company&f=setBasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:28:31: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:28:31: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:29:34: /school/?m=article&f=browse&categoryID=11&pt=rwg
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:29:34' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:29:34' AND t1.status  = 'normal' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:29:34' AND t1.status  = 'normal' AND t2.category IN ('11') GROUP BY t2.id ORDER BY addedDate desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '11'

20150419 14:29:37: /school/?m=article&f=browse&categoryID=13&pt=klt
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',13,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:29:37' AND t1.status  = 'normal' AND t2.category IN ('13') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:29:37' AND t1.status  = 'normal' AND t2.category IN ('13') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:29:37' AND t1.status  = 'normal' AND t2.category IN ('13') GROUP BY t2.id ORDER BY addedDate desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('13')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('6') AND status  = '1' GROUP BY objectID
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '13'

20150419 14:29:37: /school/?m=article&f=browse&categoryID=13&pt=klt
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',13,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:29:37' AND t1.status  = 'normal' AND t2.category IN ('13') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:29:37' AND t1.status  = 'normal' AND t2.category IN ('13') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:29:37' AND t1.status  = 'normal' AND t2.category IN ('13') GROUP BY t2.id ORDER BY addedDate desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('13')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('6') AND status  = '1' GROUP BY objectID
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '13'

20150419 14:30:06: /school/?m=article&f=browse&categoryID=13&pt=klt
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_browse') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',13,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:30:06' AND t1.status  = 'normal' AND t2.category IN ('13') GROUP BY t2.id ORDER BY addedDate desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:30:06' AND t1.status  = 'normal' AND t2.category IN ('13') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t1.addedDate  <= '2015-04-19 14:30:06' AND t1.status  = 'normal' AND t2.category IN ('13') GROUP BY t2.id ORDER BY addedDate desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('13')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('6') AND status  = '1' GROUP BY objectID
  SELECT id,name,imgurl,`desc` FROM eps_category WHERE parent  = '13'

20150419 14:30:16: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:30:16: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:30:34: /school/admin.php?m=article&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:30:34: /school/admin.php?m=article&f=admin
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

20150419 14:31:02: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:31:03: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:31:08: /school/admin.php?m=nav&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:31:08: /school/admin.php?m=nav&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '0' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '0' 
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:31:08' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:31:08' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:31:08' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:31:08' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:31:08' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:31:08' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:31:08' AND status  = 'normal' ORDER BY id desc

20150419 14:32:24: /school/admin.php?m=nav&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'nav',`key` = 'top',`value` = '[{\"type\":\"article\",\"article\":\"13\",\"product\":\"0\",\"page\":\"1\",\"system\":\"home\",\"title\":\"\\u5feb\\u4e50\\u5385\",\"url\":\"\\/school\\/\",\"key\":\"0\",\"target\":\"\",\"class\":\"nav-article-13\",\"children\":[]},{\"type\":\"article\",\"article\":\"12\",\"product\":\"0\",\"page\":\"1\",\"system\":\"company\",\"title\":\"\\u4f53\\u9a8c\\u5bab\",\"url\":\"\\/school\\/index.php?m=company&f=index\",\"key\":\"1\",\"target\":\"\",\"class\":\"nav-article-12\",\"children\":[]},{\"type\":\"article\",\"article\":\"10\",\"product\":\"0\",\"page\":\"1\",\"system\":\"forum\",\"title\":\"\\u8d44\\u6599\\u5e93\",\"url\":\"\\/school\\/index.php?m=forum&f=index\",\"key\":\"2\",\"target\":\"\",\"class\":\"nav-article-10\",\"children\":[]},{\"type\":\"article\",\"article\":\"11\",\"product\":\"0\",\"page\":\"1\",\"system\":\"home\",\"title\":\"\\u4eba\\u6587\\u9986\",\"url\":\"\\/school\\/index.php?m=product&f=index\",\"key\":\"3\",\"target\":\"\",\"class\":\"nav-article-11\",\"children\":[]},{\"type\":\"article\",\"article\":\"14\",\"product\":\"0\",\"page\":\"1\",\"system\":\"home\",\"title\":\"\\u7545\\u60f3\\u56ed\",\"url\":\"\",\"key\":\"4\",\"target\":\"\",\"class\":\"nav-article-14\",\"children\":[]}]'

20150419 14:32:26: /school/admin.php?m=site&f=setupload
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:26: /school/admin.php?m=site&f=setupload
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:34: /school/admin.php?m=site&f=setupload
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'file',`key` = 'allowed',`value` = ',txt,doc,docx,dot,wps,wri,pdf,ppt,xls,xlsx,ett,xlt,xlsm,csv,jpg,jpeg,png,psd,gif,ico,bmp,swf,avi,rmvb,rm,mp3,mp4,3gp,flv,mov,movie,rar,zip,bz,bz2,tar,gz,'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'allowUpload',`value` = '1'
  SELECT * FROM eps_config WHERE 1 = 1  AND owner IN ('system') AND module IN ('common') AND section IN ('site') AND `key` IN ('lang')

20150419 14:32:35: /school/admin.php?m=site&f=setupload
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:35: /school/admin.php?m=tag&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:37: /school/admin.php?m=tag&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:38: /school/admin.php?m=tag&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_tag ORDER BY rank asc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_tag 
  SELECT * FROM eps_tag ORDER BY rank asc

20150419 14:32:43: /school/admin.php?m=site&f=setoauth
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:43: /school/admin.php?m=site&f=setoauth
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:46: /school/admin.php?m=links&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:46: /school/admin.php?m=links&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:49: /school/admin.php?m=mail&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:49: /school/admin.php?m=mail&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:50: /school/admin.php?m=mail&f=detect
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:52: /school/admin.php?m=wechat&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:52: /school/admin.php?m=wechat&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_wx_public ORDER BY addedDate

20150419 14:32:52: /school/admin.php?m=wechat&f=create
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:54: /school/admin.php?m=search&f=buildindex
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:54: /school/admin.php?m=search&f=buildindex
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT id,alias FROM eps_category
  SELECT t1.*, t2.category as category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id=t2.id  WHERE t2.type IN ('article','blog')
  SELECT t1.*, t2.category as category FROM eps_product AS t1  LEFT JOIN eps_relation AS t2  ON t1.id=t2.id  WHERE t2.type  = 'product'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海'
  REPLACE eps_search_dict SET `key` = '34567',`value` = '蜇'
  REPLACE eps_search_dict SET `key` = '30340',`value` = '的'
  REPLACE eps_search_dict SET `key` = '25925',`value` = '故'
  REPLACE eps_search_dict SET `key` = '20107',`value` = '事'
  REPLACE eps_search_index SET `objectID` = '4',`objectType` = 'article',`title` = ' 28023 34567 30340 25925 20107',`status` = 'normal',`addedDate` = '2015-01-18 20:27:00',`editedDate` = '2015-04-01 01:33:33',`params` = '{\"category\":\"\",\"alias\":\"haizehe\"}',`content` = ' 28023 34567 30340 25925 20107 28023 34567 30340 25925 20107 28023 34567 30340 25925 20107'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人'
  REPLACE eps_search_dict SET `key` = '25991',`value` = '文'
  REPLACE eps_search_dict SET `key` = '39302',`value` = '馆'
  REPLACE eps_search_index SET `objectID` = '5',`objectType` = 'article',`title` = ' 20154 25991 39302',`status` = 'normal',`addedDate` = '2015-02-01 11:26:00',`editedDate` = '2015-02-01 11:26:21',`params` = '{\"category\":\"rwg\",\"alias\":\"\"}',`content` = ' dsdsa'
  REPLACE eps_search_dict SET `key` = '27426',`value` = '欢'
  REPLACE eps_search_dict SET `key` = '20048',`value` = '乐'
  REPLACE eps_search_dict SET `key` = '21381',`value` = '厅'
  REPLACE eps_search_index SET `objectID` = '6',`objectType` = 'article',`title` = ' 27426 20048 21381',`status` = 'normal',`addedDate` = '2015-02-01 11:26:00',`editedDate` = '2015-03-22 18:24:16',`params` = '{\"category\":\"klt\",\"alias\":\"\"}',`content` = ' dfsf'
  REPLACE eps_search_dict SET `key` = '26159',`value` = '是'
  REPLACE eps_search_dict SET `key` = '22810',`value` = '多'
  REPLACE eps_search_dict SET `key` = '23569',`value` = '少'
  REPLACE eps_search_dict SET `key` = '36895',`value` = '速'
  REPLACE eps_search_dict SET `key` = '24230',`value` = '度'
  REPLACE eps_search_index SET `objectID` = '7',`objectType` = 'article',`title` = ' 26159 22810 23569',`status` = 'normal',`addedDate` = '2015-03-08 17:42:00',`editedDate` = '2015-03-08 17:42:33',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 36895 24230 36895 24230'
  REPLACE eps_search_dict SET `key` = '40664',`value` = '默'
  REPLACE eps_search_dict SET `key` = '35748',`value` = '认'
  REPLACE eps_search_dict SET `key` = '20869',`value` = '内'
  REPLACE eps_search_dict SET `key` = '23481',`value` = '容'
  REPLACE eps_search_index SET `objectID` = '11',`objectType` = 'article',`title` = ' asdf',`status` = 'normal',`addedDate` = '2015-04-01 02:00:00',`editedDate` = '2015-04-01 02:56:18',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 40664 35748 20869 23481'
  REPLACE eps_search_dict SET `key` = '21834',`value` = '啊'
  REPLACE eps_search_dict SET `key` = '21704',`value` = '哈'
  REPLACE eps_search_dict SET `key` = '38463',`value` = '阿'
  REPLACE eps_search_dict SET `key` = '33832',`value` = '萨'
  REPLACE eps_search_dict SET `key` = '24503',`value` = '德'
  REPLACE eps_search_dict SET `key` = '21457',`value` = '发'
  REPLACE eps_search_dict SET `key` = '23556',`value` = '射'
  REPLACE eps_search_dict SET `key` = '28857',`value` = '点'
  REPLACE eps_search_dict SET `key` = '28903',`value` = '烧'
  REPLACE eps_search_dict SET `key` = '39277',`value` = '饭'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺'
  REPLACE eps_search_dict SET `key` = '20016',`value` = '丰'
  REPLACE eps_search_index SET `objectID` = '2',`objectType` = 'blog',`title` = ' 21834 21704 21704 21704',`status` = 'normal',`addedDate` = '2015-01-10 10:06:00',`editedDate` = '2015-01-10 10:07:06',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 38463 33832 24503 fad 38463 33832 24503 21457 23556 28857 21457 28903 39277 38463 33832 24503 21457 39034 20016'
  REPLACE eps_search_index SET `objectID` = '1',`objectType` = 'product',`title` = ' a',`status` = 'normal',`addedDate` = '2015-01-05 22:18:45',`editedDate` = '2015-01-05 22:18:45',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' ASDFASDFASDFASDFASDFASFASDFASD'
  REPLACE eps_search_dict SET `key` = '21527',`value` = '吗'
  REPLACE eps_search_dict SET `key` = '21571',`value` = '呃'
  REPLACE eps_search_dict SET `key` = '38169',`value` = '错'
  REPLACE eps_search_index SET `objectID` = '2',`objectType` = 'product',`title` = ' 21527',`status` = 'normal',`addedDate` = '2015-01-06 22:36:17',`editedDate` = '2015-01-06 22:36:17',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 21571 21571 21571 38169 38169 38169'
  SELECT * FROM eps_article
  REPLACE eps_search_dict SET `key` = '21333',`value` = '单'
  REPLACE eps_search_dict SET `key` = '39029',`value` = '页'
  REPLACE eps_search_index SET `objectID` = '1',`objectType` = 'page',`title` = ' 21333 39029',`status` = 'normal',`addedDate` = '2014-12-30 21:11:00',`editedDate` = '2014-12-30 21:16:52',`params` = '{\"category\":\"\",\"alias\":\"danye1\"}',`content` = ' 21333 39029 21333 39029 21333 39029 21333 39029 21333 39029 21333 39029 21333 39029 21333 39029 21333 39029'
  REPLACE eps_search_dict SET `key` = '21834',`value` = '啊'
  REPLACE eps_search_dict SET `key` = '21704',`value` = '哈'
  REPLACE eps_search_dict SET `key` = '38463',`value` = '阿'
  REPLACE eps_search_dict SET `key` = '33832',`value` = '萨'
  REPLACE eps_search_dict SET `key` = '24503',`value` = '德'
  REPLACE eps_search_dict SET `key` = '21457',`value` = '发'
  REPLACE eps_search_dict SET `key` = '23556',`value` = '射'
  REPLACE eps_search_dict SET `key` = '28857',`value` = '点'
  REPLACE eps_search_dict SET `key` = '28903',`value` = '烧'
  REPLACE eps_search_dict SET `key` = '39277',`value` = '饭'
  REPLACE eps_search_dict SET `key` = '39034',`value` = '顺'
  REPLACE eps_search_dict SET `key` = '20016',`value` = '丰'
  REPLACE eps_search_index SET `objectID` = '2',`objectType` = 'page',`title` = ' 21834 21704 21704 21704',`status` = 'normal',`addedDate` = '2015-01-10 10:06:00',`editedDate` = '2015-01-10 10:07:06',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 38463 33832 24503 fad 38463 33832 24503 21457 23556 28857 21457 28903 39277 38463 33832 24503 21457 39034 20016'
  REPLACE eps_search_dict SET `key` = '28023',`value` = '海'
  REPLACE eps_search_dict SET `key` = '34567',`value` = '蜇'
  REPLACE eps_search_dict SET `key` = '30340',`value` = '的'
  REPLACE eps_search_dict SET `key` = '25925',`value` = '故'
  REPLACE eps_search_dict SET `key` = '20107',`value` = '事'
  REPLACE eps_search_index SET `objectID` = '4',`objectType` = 'page',`title` = ' 28023 34567 30340 25925 20107',`status` = 'normal',`addedDate` = '2015-01-18 20:27:00',`editedDate` = '2015-04-01 01:33:33',`params` = '{\"category\":\"\",\"alias\":\"haizehe\"}',`content` = ' 28023 34567 30340 25925 20107 28023 34567 30340 25925 20107 28023 34567 30340 25925 20107'
  REPLACE eps_search_dict SET `key` = '20154',`value` = '人'
  REPLACE eps_search_dict SET `key` = '25991',`value` = '文'
  REPLACE eps_search_dict SET `key` = '39302',`value` = '馆'
  REPLACE eps_search_index SET `objectID` = '5',`objectType` = 'page',`title` = ' 20154 25991 39302',`status` = 'normal',`addedDate` = '2015-02-01 11:26:00',`editedDate` = '2015-02-01 11:26:21',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' dsdsa'
  REPLACE eps_search_dict SET `key` = '27426',`value` = '欢'
  REPLACE eps_search_dict SET `key` = '20048',`value` = '乐'
  REPLACE eps_search_dict SET `key` = '21381',`value` = '厅'
  REPLACE eps_search_index SET `objectID` = '6',`objectType` = 'page',`title` = ' 27426 20048 21381',`status` = 'normal',`addedDate` = '2015-02-01 11:26:00',`editedDate` = '2015-03-22 18:24:16',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' dfsf'
  REPLACE eps_search_dict SET `key` = '26159',`value` = '是'
  REPLACE eps_search_dict SET `key` = '22810',`value` = '多'
  REPLACE eps_search_dict SET `key` = '23569',`value` = '少'
  REPLACE eps_search_dict SET `key` = '36895',`value` = '速'
  REPLACE eps_search_dict SET `key` = '24230',`value` = '度'
  REPLACE eps_search_index SET `objectID` = '7',`objectType` = 'page',`title` = ' 26159 22810 23569',`status` = 'normal',`addedDate` = '2015-03-08 17:42:00',`editedDate` = '2015-03-08 17:42:33',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 36895 24230 36895 24230'
  REPLACE eps_search_index SET `objectID` = '8',`objectType` = 'page',`title` = ' wwwwwwww',`status` = 'normal',`addedDate` = '2015-03-15 22:41:00',`editedDate` = '2015-03-22 18:15:53',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' wwwwwwwwwwwwwwwwwwwwwwwwwww'
  REPLACE eps_search_index SET `objectID` = '9',`objectType` = 'page',`title` = ' dddddddddddddddddd',`status` = 'normal',`addedDate` = '2015-03-22 17:17:00',`editedDate` = '2015-03-22 18:12:35',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' ddddddddddddddddddddddddd'
  REPLACE eps_search_index SET `objectID` = '10',`objectType` = 'page',`title` = ' sss',`status` = 'normal',`addedDate` = '2015-03-22 18:06:00',`editedDate` = '2015-03-22 18:27:46',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' ssssssssssssssss'
  REPLACE eps_search_dict SET `key` = '40664',`value` = '默'
  REPLACE eps_search_dict SET `key` = '35748',`value` = '认'
  REPLACE eps_search_dict SET `key` = '20869',`value` = '内'
  REPLACE eps_search_dict SET `key` = '23481',`value` = '容'
  REPLACE eps_search_index SET `objectID` = '11',`objectType` = 'page',`title` = ' asdf',`status` = 'normal',`addedDate` = '2015-04-01 02:00:00',`editedDate` = '2015-04-01 02:56:18',`params` = '{\"category\":\"\",\"alias\":\"\"}',`content` = ' 40664 35748 20869 23481'
  SELECT *, 'normal' as status FROM eps_thread
  SELECT id,alias FROM eps_book WHERE type  = 'book'
  SELECT * FROM eps_book WHERE type  = 'article'

20150419 14:32:57: /school/admin.php?m=wechat&f=create
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:32:59: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:33:00: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:33:23: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'status',`value` = 'normal'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'type',`value` = 'portal'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'name',`value` = '青岛太平路小学海洋数字博物馆'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'modules',`value` = 'user,message'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'lang',`value` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'copyright',`value` = ''
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'keywords',`value` = ''
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'indexKeywords',`value` = ''
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'slogan',`value` = ''
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'meta',`value` = ''
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'desc',`value` = ''
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpSN',`value` = ''
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpLink',`value` = 'http://www.miitbeian.gov.cn'
  SELECT * FROM eps_config WHERE 1 = 1  AND owner IN ('system') AND module IN ('common') AND section IN ('site') AND `key` IN ('lang')

20150419 14:33:24: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:33:30: /school/admin.php?m=ui&f=setlogo
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:33:31: /school/admin.php?m=ui&f=setlogo
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:33:36: /school/admin.php?m=ui&f=settemplate
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:33:36: /school/admin.php?m=ui&f=settemplate
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:33:38: /school/admin.php?m=block&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:33:38: /school/admin.php?m=block&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_block WHERE template  = 'default' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_block wHeRe template  = 'default' 
  SELECT * FROM eps_block WHERE template  = 'default' ORDER BY id desc

20150419 14:33:49: /school/admin.php?m=block&f=pages
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:33:49: /school/admin.php?m=block&f=pages
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:33:57: /school/admin.php?m=company&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:33:57: /school/admin.php?m=company&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:34:02: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:34:02: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_wx_public ORDER BY addedDate
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc
  SELECT SQL_CALC_FOUND_ROWS  u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  wHeRe 1  
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc

20150419 14:34:05: /school/admin.php?m=message&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:34:06: /school/admin.php?m=message&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_message wHeRe type  = 'message' AND status  = '0' 
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT id, title FROM eps_article WHERE id IN ('')
  SELECT id, name FROM eps_product WHERE id IN ('')
  SELECT id, title FROM eps_book WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')

20150419 14:34:10: /school/admin.php?m=package&f=browse
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:34:10: /school/admin.php?m=package&f=browse
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_package WHERE status  = 'installed'

20150419 14:34:14: /school/admin.php?m=package&f=structure&package=search
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:34:14: /school/admin.php?m=package&f=structure&package=search
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_package WHERE code  = 'search'

20150419 14:35:52: /school/admin.php?m=article&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:35:52: /school/admin.php?m=article&f=admin
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

20150419 14:35:54: /school/admin.php?m=article&f=create&type=article&category=0
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:35:54: /school/admin.php?m=article&f=create&type=article&category=0
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 14:39:09: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:39:09: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:39:22: /school/admin.php?m=article&f=admin&type=page
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:39:23: /school/admin.php?m=article&f=admin&type=page
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE type  = 'page' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_article wHeRe type  = 'page' 
  SELECT * FROM eps_article WHERE type  = 'page' ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'page'
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('1') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('1') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_article WHERE alias  = '1'
  SELECT * FROM eps_article WHERE id  = '1'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '1'
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('1') ORDER BY `primary`, editor desc

20150419 14:39:26: /school/admin.php?m=article&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:39:26: /school/admin.php?m=article&f=admin
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

20150419 14:39:33: /school/index.php?m=article&f=view&articleID=8
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '8'
  SELECT * FROM eps_article WHERE id  = '8'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '8'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('8') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '' AND type  = 'article'
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '8'
  SELECT * FROM eps_article WHERE id  = '8'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '8'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('8') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '15' AND t1.status  = 'normal' AND t1.addedDate  < '2015-03-15 22:41:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '15' AND t1.addedDate  <= '2015-04-19 14:39:33' AND t1.status  = 'normal' AND t1.addedDate  > '2015-03-15 22:41:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '8'

20150419 14:39:33: /school/index.php?m=article&f=view&articleID=8
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_layout WHERE page IN ('all','article_view') AND template  = 'default'
  SELECT * FROM eps_block
  SELECT * FROM eps_article WHERE alias  = '8'
  SELECT * FROM eps_article WHERE id  = '8'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '8'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('8') ORDER BY `primary`, editor desc
  SELECT * FROM eps_category WHERE alias  = '' AND type  = 'article'
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','') ORDER BY grade
  SELECT * FROM eps_article WHERE alias  = '8'
  SELECT * FROM eps_article WHERE id  = '8'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '8'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('8') ORDER BY `primary`, editor desc
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '15' AND t1.status  = 'normal' AND t1.addedDate  < '2015-03-15 22:41:00' ORDER BY t1.addedDate desc LIMIT 1 
  SELECT t1.id, title, alias FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t2.category  = '15' AND t1.addedDate  <= '2015-04-19 14:39:33' AND t1.status  = 'normal' AND t1.addedDate  > '2015-03-15 22:41:00' ORDER BY t1.addedDate LIMIT 1 
  UPDATE eps_article SET  views = views + 1  WHERE id  = '8'

20150419 14:39:43: /school/admin.php?m=article&f=edit&articleID=11&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:39:43: /school/admin.php?m=article&f=edit&articleID=11&type=article
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

20150419 14:40:22: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:40:22: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:41:24: /school/admin.php?m=nav&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:41:24: /school/admin.php?m=nav&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '12' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '12' 
  SELECT id, name FROM eps_category WHERE id IN ('','12','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '10' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '10' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT * FROM eps_category WHERE alias  = '14' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '14' 
  SELECT id, name FROM eps_category WHERE id IN ('','14','') ORDER BY grade
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:41:24' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:41:24' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:41:24' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:41:24' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:41:24' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:41:24' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:41:24' AND status  = 'normal' ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'product' ORDER BY grade desc, `order`
  SELECT id, title FROM eps_article WHERE type  = 'page' AND addedDate  <= '2015-04-19 14:41:24' AND status  = 'normal' ORDER BY id desc

20150419 14:41:29: /school/admin.php?m=nav&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'nav',`key` = 'top',`value` = '[{\"type\":\"article\",\"article\":\"13\",\"product\":\"0\",\"page\":\"1\",\"system\":\"home\",\"title\":\"\\u5feb\\u4e50\\u5385\",\"url\":\"\\/school\\/index.php?m=article&f=browse&categoryID=13\",\"key\":\"0\",\"target\":\"\",\"class\":\"nav-article-13\",\"children\":[]},{\"type\":\"article\",\"article\":\"12\",\"product\":\"0\",\"page\":\"1\",\"system\":\"company\",\"title\":\"\\u4f53\\u9a8c\\u5bab\",\"url\":\"\\/school\\/index.php?m=article&f=browse&categoryID=12\",\"key\":\"1\",\"target\":\"\",\"class\":\"nav-article-12\",\"children\":[]},{\"type\":\"article\",\"article\":\"10\",\"product\":\"0\",\"page\":\"1\",\"system\":\"home\",\"title\":\"\\u8d44\\u6599\\u5e93\",\"url\":\"\\/school\\/index.php?m=article&f=browse&categoryID=10\",\"key\":\"2\",\"target\":\"\",\"class\":\"nav-article-10\",\"children\":[]},{\"type\":\"article\",\"article\":\"11\",\"product\":\"0\",\"page\":\"1\",\"system\":\"home\",\"title\":\"\\u4eba\\u6587\\u9986\",\"url\":\"\\/school\\/index.php?m=article&f=browse&categoryID=11\",\"key\":\"3\",\"target\":\"\",\"class\":\"nav-article-11\",\"children\":[]},{\"type\":\"article\",\"article\":\"14\",\"product\":\"0\",\"page\":\"1\",\"system\":\"home\",\"title\":\"\\u7545\\u60f3\\u56ed\",\"url\":\"\\/school\\/index.php?m=article&f=browse&categoryID=14\",\"key\":\"4\",\"target\":\"\",\"class\":\"nav-article-14\",\"children\":[]}]'

20150419 14:41:33: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:41:33: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:41:41: /school/admin.php?m=site&f=setBasic
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:41:41: /school/admin.php?m=site&f=setBasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:41:46: /school/admin.php?m=site&f=setupload
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:41:46: /school/admin.php?m=site&f=setupload
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:41:48: /school/admin.php?m=tag&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:41:48: /school/admin.php?m=tag&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_tag ORDER BY rank asc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_tag 
  SELECT * FROM eps_tag ORDER BY rank asc

20150419 14:41:54: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:41:54: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:44:43: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:45:04: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:45:27: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:46:14: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:47:22: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:47:52: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:48:01: /school/admin.php?m=company&f=setcontact
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:48:01: /school/admin.php?m=company&f=setcontact
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:48:03: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:48:10: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:48:27: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:49:18: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:49:44: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:50:01: /school/admin.php?m=message&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:50:01: /school/admin.php?m=message&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_message wHeRe type  = 'message' AND status  = '0' 
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT id, title FROM eps_article WHERE id IN ('')
  SELECT id, name FROM eps_product WHERE id IN ('')
  SELECT id, title FROM eps_book WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')

20150419 14:50:04: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:50:04: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:50:09: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:50:09: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:50:29: /school/admin.php?m=article&f=create
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:50:29: /school/admin.php?m=article&f=create
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 14:52:34: /school/admin.php?m=article&f=create
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 14:52:52: /school/admin.php?m=article&f=create
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 14:53:46: /school/admin.php?m=article&f=create
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 14:53:57: /school/admin.php?m=article&f=create
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 14:54:28: /school/admin.php?m=article&f=create
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 14:54:56: /school/admin.php?m=article&f=create
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 14:56:54: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:56:54: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'grade' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'grade' ORDER BY grade desc, `order`

20150419 14:57:03: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'grade' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'grade' ORDER BY grade desc, `order`

20150419 14:57:05: /school/admin.php?m=tree&f=browse&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:57:05: /school/admin.php?m=tree&f=browse&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'grade' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE parent  = '0' AND type  = 'grade' ORDER BY `order`

20150419 14:57:06: /school/admin.php?m=tree&f=children&t=html&type=grade&root=0
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE parent  = '0' AND type  = 'grade' ORDER BY `order`

20150419 14:57:12: /school/admin.php?m=tree&f=browse&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'grade' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE parent  = '0' AND type  = 'grade' ORDER BY `order`

20150419 14:57:13: /school/admin.php?m=tree&f=children&t=html&type=grade&root=0
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE parent  = '0' AND type  = 'grade' ORDER BY `order`

20150419 14:57:17: /school/admin.php?m=article&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 14:57:17: /school/admin.php?m=article&f=admin
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

20150419 14:57:21: /school/admin.php?m=article&f=admin
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

20150419 15:00:18: /school/admin.php?m=article&f=admin
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

20150419 15:01:25: /school/admin.php?m=article&f=admin
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

20150419 15:01:36: /school/admin.php?m=article&f=admin
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

20150419 15:01:47: /school/admin.php?m=article&f=admin
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

20150419 15:01:59: /school/admin.php?m=article&f=admin
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

20150419 15:02:02: /school/admin.php?m=article&f=admin
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

20150419 15:02:21: /school/admin.php?m=article&f=admin
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

20150419 15:04:37: /school/admin.php?m=article&f=admin
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

20150419 15:05:30: /school/admin.php?m=article&f=admin
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

20150419 15:05:37: /school/admin.php?m=article&f=admin
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

20150419 15:06:18: /school/admin.php?m=article&f=admin
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

20150419 15:06:25: /school/admin.php?m=article&f=admin&type=article&categoryID=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:06:25: /school/admin.php?m=article&f=admin&type=article&categoryID=11
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('11') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('11') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '5'
  SELECT * FROM eps_article WHERE id  = '5'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '5'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') ORDER BY `primary`, editor desc

20150419 15:06:27: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:06:27: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '10' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '10' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','7','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','7','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:06:29: /school/admin.php?m=article&f=admin&type=article&categoryID=15
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:06:29: /school/admin.php?m=article&f=admin&type=article&categoryID=15
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '15' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '15' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('15','18','19','20','21','22','23','24')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:06:37: /school/admin.php?m=article&f=admin&type=article&categoryID=15
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '15' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '15' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('15','18','19','20','21','22','23','24')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:08:58: /school/admin.php?m=article&f=admin&type=article&categoryID=15
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '15' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '15' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('15','18','19','20','21','22','23','24')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:09:47: /school/admin.php?m=article&f=admin&type=article&categoryID=15
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '15' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '15' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('15','18','19','20','21','22','23','24')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:09:56: /school/admin.php?m=article&f=admin&type=article&categoryID=15
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '15' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '15' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('15','18','19','20','21','22','23','24')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:10:04: /school/admin.php?m=article&f=admin&type=article&categoryID=15
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '15' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '15' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('15','18','19','20','21','22','23','24')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:10:06: /school/admin.php?m=article&f=admin&type=article&categoryID=15
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '15' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '15' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('15','18','19','20','21','22','23','24') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('15','18','19','20','21','22','23','24')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:10:27: /school/admin.php?m=article&f=admin&type=article&categoryID=18
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:10:27: /school/admin.php?m=article&f=admin&type=article&categoryID=18
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '18' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '18' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','18','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,18,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('18') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('18') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('18') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('18')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:11:38: /school/admin.php?m=article&f=admin&type=article&categoryID=18
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '18' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '18' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','18','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,18,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('18') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('18') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('18') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('18')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:11:40: /school/admin.php?m=article&f=admin&type=article&categoryID=18
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '18' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '18' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','18','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,18,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('18') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('18') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('18') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('18')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:12:00: /school/admin.php?m=article&f=admin&type=article&categoryID=18
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '18' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '18' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','18','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,18,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('18') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('18') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('18') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('18')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:12:39: /school/admin.php?m=article&f=admin&type=article&categoryID=18
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '18' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '18' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','18','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,18,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('18') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('18') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('18') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('18')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:12:47: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:12:47: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'grade' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'grade' ORDER BY grade desc, `order`

20150419 15:12:52: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'grade' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'grade' ORDER BY grade desc, `order`

20150419 15:12:55: /school/admin.php?m=article&f=admin&type=page
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:12:55: /school/admin.php?m=article&f=admin&type=page
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE type  = 'page' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_article wHeRe type  = 'page' 
  SELECT * FROM eps_article WHERE type  = 'page' ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'page'
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('1') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('1') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_article WHERE alias  = '1'
  SELECT * FROM eps_article WHERE id  = '1'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '1'
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('1') ORDER BY `primary`, editor desc

20150419 15:13:11: /school/admin.php?m=article&f=admin&type=page
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE type  = 'page' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_article wHeRe type  = 'page' 
  SELECT * FROM eps_article WHERE type  = 'page' ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'page'
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('1') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('1') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_article WHERE alias  = '1'
  SELECT * FROM eps_article WHERE id  = '1'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '1'
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('1') ORDER BY `primary`, editor desc

20150419 15:13:23: /school/admin.php?m=article&f=admin&type=page
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE type  = 'page' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_article wHeRe type  = 'page' 
  SELECT * FROM eps_article WHERE type  = 'page' ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'page'
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('1') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('1') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_article WHERE alias  = '1'
  SELECT * FROM eps_article WHERE id  = '1'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '1'
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('1') ORDER BY `primary`, editor desc

20150419 15:13:36: /school/admin.php?m=article&f=admin&type=page
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE type  = 'page' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_article wHeRe type  = 'page' 
  SELECT * FROM eps_article WHERE type  = 'page' ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'page'
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('1') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('1') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_article WHERE alias  = '1'
  SELECT * FROM eps_article WHERE id  = '1'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '1'
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('1') ORDER BY `primary`, editor desc

20150419 15:15:18: /school/admin.php?m=article&f=admin&type=page
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_article WHERE type  = 'page' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_article wHeRe type  = 'page' 
  SELECT * FROM eps_article WHERE type  = 'page' ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'page'
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('1') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('1') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_article WHERE alias  = '1'
  SELECT * FROM eps_article WHERE id  = '1'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND t1.id  = '1'
  SELECT * FROM eps_file WHERE objectType  = 'page' AND objectID IN ('1') ORDER BY `primary`, editor desc

20150419 15:15:22: /school/admin.php?m=article&f=admin
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

20150419 15:15:25: /school/admin.php?m=article&f=admin&type=article&categoryID=18
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:15:25: /school/admin.php?m=article&f=admin&type=article&categoryID=18
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '18' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '18' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','18','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,18,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('18') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('18') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('18') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('18')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:15:30: /school/admin.php?m=article&f=admin&type=article&categoryID=19
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:15:31: /school/admin.php?m=article&f=admin&type=article&categoryID=19
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '19' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '19' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','15','19','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,15,19,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('19') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('19') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('19') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('19')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc

20150419 15:15:34: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:15:34: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '10' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '10' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','7','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','7','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:15:40: /school/admin.php?m=article&f=admin&type=article&categoryID=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:15:40: /school/admin.php?m=article&f=admin&type=article&categoryID=11
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('11') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('11') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '5'
  SELECT * FROM eps_article WHERE id  = '5'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '5'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') ORDER BY `primary`, editor desc

20150419 15:15:45: /school/admin.php?m=article&f=admin&type=article&categoryID=13
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:15:45: /school/admin.php?m=article&f=admin&type=article&categoryID=13
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',13,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('13') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('13') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('13') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('13')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('6') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '6'
  SELECT * FROM eps_article WHERE id  = '6'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '6'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') ORDER BY `primary`, editor desc

20150419 15:16:19: /school/admin.php?m=article&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:16:19: /school/admin.php?m=article&f=admin
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

20150419 15:16:23: /school/admin.php?m=message&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:16:23: /school/admin.php?m=message&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_message wHeRe type  = 'message' AND status  = '0' 
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT id, title FROM eps_article WHERE id IN ('')
  SELECT id, name FROM eps_product WHERE id IN ('')
  SELECT id, title FROM eps_book WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')

20150419 15:16:25: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:16:25: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_wx_public ORDER BY addedDate
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc
  SELECT SQL_CALC_FOUND_ROWS  u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  wHeRe 1  
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc

20150419 15:16:35: /school/admin.php?m=company&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:16:35: /school/admin.php?m=company&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:16:43: /school/admin.php?m=company&f=setcontact
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:16:44: /school/admin.php?m=company&f=setcontact
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:16:50: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:16:50: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:17:02: /school/admin.php?m=site&f=setoauth
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:17:02: /school/admin.php?m=site&f=setoauth
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:17:04: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:17:04: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:17:38: /school/admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:17:41: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:17:41: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:17:57: /school/admin.php?m=article&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:17:57: /school/admin.php?m=article&f=admin
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

20150419 15:18:00: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:18:00: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '10' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '10' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','7','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','7','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:19:01: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '10' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '10' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','7','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','7','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:19:07: /school/admin.php?m=article&f=admin&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = '10' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = '10' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = '10' GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = '10' ORDER BY grade desc, `order`

20150419 15:19:15: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:19:15: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'grade' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'grade' ORDER BY grade desc, `order`

20150419 15:19:17: /school/admin.php?m=article&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:19:17: /school/admin.php?m=article&f=admin
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

20150419 15:19:19: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:19:19: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '10' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '10' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','7','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','7','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:19:34: /school/admin.php?m=article&f=admin&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:19:34: /school/admin.php?m=article&f=admin&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = '10' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = '10' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = '10' GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = '10' ORDER BY grade desc, `order`

20150419 15:20:21: /school/admin.php?m=article&f=admin&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = '10' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = '10' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = '10' GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = '10' ORDER BY grade desc, `order`

20150419 15:20:28: /school/admin.php?m=article&f=admin&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:20:28: /school/admin.php?m=article&f=admin&type=article
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

20150419 15:20:41: /school/admin.php?m=article&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:20:41: /school/admin.php?m=article&f=admin
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

20150419 15:20:47: /school/admin.php?m=article&f=admin&type=article
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:20:47: /school/admin.php?m=article&f=admin&type=article
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

20150419 15:21:05: /school/admin.php?m=article&f=admin&type=article
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

20150419 15:21:07: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:21:07: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '10' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '10' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','7','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','7','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:21:21: /school/admin.php?m=article&f=create&type=article&category=10
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:21:21: /school/admin.php?m=article&f=create&type=article&category=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:21:47: /school/admin.php?m=article&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:21:47: /school/admin.php?m=article&f=admin
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

20150419 15:22:36: /school/admin.php?m=article&f=admin&type=article&categoryID=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:22:36: /school/admin.php?m=article&f=admin&type=article&categoryID=11
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('11') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('11') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '5'
  SELECT * FROM eps_article WHERE id  = '5'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '5'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') ORDER BY `primary`, editor desc

20150419 15:22:58: /school/admin.php?m=article&f=admin&type=article&categoryID=12
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:22:58: /school/admin.php?m=article&f=admin&type=article&categoryID=12
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '12' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '12' 
  SELECT id, name FROM eps_category WHERE id IN ('','12','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',12,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('12') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('12') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('12') GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:23:01: /school/admin.php?m=article&f=admin&type=article&categoryID=13
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:23:02: /school/admin.php?m=article&f=admin&type=article&categoryID=13
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',13,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('13') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('13') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('13') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('13')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('6') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '6'
  SELECT * FROM eps_article WHERE id  = '6'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '6'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') ORDER BY `primary`, editor desc

20150419 15:23:59: /school/admin.php?m=article&f=admin&type=article&categoryID=13
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',13,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('13') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('13') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('13') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('13')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('6') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '6'
  SELECT * FROM eps_article WHERE id  = '6'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '6'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') ORDER BY `primary`, editor desc

20150419 15:24:05: /school/admin.php?m=article&f=admin&type=article&categoryID=12
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:05: /school/admin.php?m=article&f=admin&type=article&categoryID=12
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '12' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '12' 
  SELECT id, name FROM eps_category WHERE id IN ('','12','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',12,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('12') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('12') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('12') GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:24:10: /school/admin.php?m=article&f=admin&type=article&categoryID=14
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:10: /school/admin.php?m=article&f=admin&type=article&categoryID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '14' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '14' 
  SELECT id, name FROM eps_category WHERE id IN ('','14','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',14,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('14') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('14') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('14') GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:24:14: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:14: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'grade' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'grade' ORDER BY grade desc, `order`

20150419 15:24:17: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:17: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '10' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '10' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','7','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','7','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:24:18: /school/admin.php?m=article&f=admin&type=article&categoryID=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:18: /school/admin.php?m=article&f=admin&type=article&categoryID=11
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('11') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('11') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '5'
  SELECT * FROM eps_article WHERE id  = '5'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '5'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') ORDER BY `primary`, editor desc

20150419 15:24:21: /school/admin.php?m=article&f=admin&type=article&categoryID=12
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:21: /school/admin.php?m=article&f=admin&type=article&categoryID=12
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '12' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '12' 
  SELECT id, name FROM eps_category WHERE id IN ('','12','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',12,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('12') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('12') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('12') GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:24:23: /school/admin.php?m=article&f=admin&type=article&categoryID=13
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:23: /school/admin.php?m=article&f=admin&type=article&categoryID=13
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',13,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('13') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('13') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('13') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('13')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('6') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '6'
  SELECT * FROM eps_article WHERE id  = '6'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '6'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') ORDER BY `primary`, editor desc

20150419 15:24:24: /school/admin.php?m=article&f=admin&type=article&categoryID=14
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:24: /school/admin.php?m=article&f=admin&type=article&categoryID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '14' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '14' 
  SELECT id, name FROM eps_category WHERE id IN ('','14','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',14,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('14') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('14') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('14') GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:24:29: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:29: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_wx_public ORDER BY addedDate
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc
  SELECT SQL_CALC_FOUND_ROWS  u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  wHeRe 1  
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc

20150419 15:24:33: /school/admin.php?m=message&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:33: /school/admin.php?m=message&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_message wHeRe type  = 'message' AND status  = '0' 
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT id, title FROM eps_article WHERE id IN ('')
  SELECT id, name FROM eps_product WHERE id IN ('')
  SELECT id, title FROM eps_book WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')

20150419 15:24:36: /school/admin.php?m=message&f=admin&type=comment
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:36: /school/admin.php?m=message&f=admin&type=comment
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_message WHERE type  = 'comment' AND status  = '0' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_message wHeRe type  = 'comment' AND status  = '0' 
  SELECT * FROM eps_message WHERE type  = 'comment' AND status  = '0' ORDER BY id desc
  SELECT id, title FROM eps_article WHERE id IN ('')
  SELECT id, name FROM eps_product WHERE id IN ('')
  SELECT id, title FROM eps_book WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')

20150419 15:24:38: /school/admin.php?m=message&f=admin&type=reply
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:38: /school/admin.php?m=message&f=admin&type=reply
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_message WHERE type  = 'reply' AND status  = '0' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_message wHeRe type  = 'reply' AND status  = '0' 
  SELECT * FROM eps_message WHERE type  = 'reply' AND status  = '0' ORDER BY id desc
  SELECT id, title FROM eps_article WHERE id IN ('')
  SELECT id, name FROM eps_product WHERE id IN ('')
  SELECT id, title FROM eps_book WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')

20150419 15:24:40: /school/admin.php?m=forum&f=admin&tab=feedback
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:40: /school/admin.php?m=forum&f=admin&tab=feedback
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = 'feedback' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '0' 
  SELECT id FROM eps_category WHERE type  = 'forum'
  SELECT * FROM eps_thread WHERE 1  AND board IN ('1','2','3','4','5') ORDER BY repliedDate desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_thread wHeRe 1  AND board IN ('1','2','3','4','5') 
  SELECT * FROM eps_thread WHERE 1  AND board IN ('1','2','3','4','5') ORDER BY repliedDate desc
  SELECT * FROM eps_category WHERE alias  = 'feedback' AND type  = 'forum'
  SELECT * FROM eps_category WHERE `id` = '0' 

20150419 15:24:41: /school/admin.php?m=reply&f=admin&order=id_desc&tab=feedback
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:41: /school/admin.php?m=reply&f=admin&order=id_desc&tab=feedback
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_reply ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_reply 
  SELECT * FROM eps_reply ORDER BY id desc
  SELECT account, realname FROM eps_user WHERE account IN ('')

20150419 15:24:42: /school/admin.php?m=wechat&f=message&mode=replied&replied=0
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:43: /school/admin.php?m=wechat&f=message&mode=replied&replied=0
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_wx_message WHERE type  != 'reply' AND replied  = '0' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_wx_message wHeRe type  != 'reply' AND replied  = '0' 
  SELECT * FROM eps_wx_message WHERE type  != 'reply' AND replied  = '0' ORDER BY id desc
  SELECT r.id as rid, c.* FROM eps_category AS c  LEFT JOIN eps_wx_response AS r  ON concat('m_', c.id) = r.key  WHERE c.type  LIKE 'wechat%'
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc
  SELECT * FROM eps_wx_public ORDER BY addedDate

20150419 15:24:45: /school/admin.php?m=message&f=admin&type=comment
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:45: /school/admin.php?m=message&f=admin&type=comment
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_message WHERE type  = 'comment' AND status  = '0' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_message wHeRe type  = 'comment' AND status  = '0' 
  SELECT * FROM eps_message WHERE type  = 'comment' AND status  = '0' ORDER BY id desc
  SELECT id, title FROM eps_article WHERE id IN ('')
  SELECT id, name FROM eps_product WHERE id IN ('')
  SELECT id, title FROM eps_book WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')

20150419 15:24:47: /school/admin.php?m=message&f=admin&type=message
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:24:47: /school/admin.php?m=message&f=admin&type=message
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_message wHeRe type  = 'message' AND status  = '0' 
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT id, title FROM eps_article WHERE id IN ('')
  SELECT id, name FROM eps_product WHERE id IN ('')
  SELECT id, title FROM eps_book WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')

20150419 15:25:29: /school/admin.php?m=message&f=admin&type=message
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_message wHeRe type  = 'message' AND status  = '0' 
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT id, title FROM eps_article WHERE id IN ('')
  SELECT id, name FROM eps_product WHERE id IN ('')
  SELECT id, title FROM eps_book WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')

20150419 15:25:33: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:25:33: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'grade' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'grade' ORDER BY grade desc, `order`

20150419 15:25:34: /school/admin.php?m=tree&f=browse&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:25:34: /school/admin.php?m=tree&f=browse&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'grade' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE parent  = '0' AND type  = 'grade' ORDER BY `order`

20150419 15:25:36: /school/admin.php?m=tree&f=children&t=html&type=grade&root=0
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE parent  = '0' AND type  = 'grade' ORDER BY `order`

20150419 15:25:42: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:25:42: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_wx_public ORDER BY addedDate
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc
  SELECT SQL_CALC_FOUND_ROWS  u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  wHeRe 1  
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc

20150419 15:25:57: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_wx_public ORDER BY addedDate
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc
  SELECT SQL_CALC_FOUND_ROWS  u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  wHeRe 1  
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc

20150419 15:27:00: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:27:00: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:31:48: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:31:48: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '10' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '10' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','7','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','7','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:31:55: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:32:01: /school/admin.php?m=article&f=create
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:32:01: /school/admin.php?m=article&f=create
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:32:56: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:32:56: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:33:04: /school/admin.php?m=article&f=create&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:33:05: /school/admin.php?m=article&f=create&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:37:49: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:39:06: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:40:26: /school/admin.php?m=article&f=create&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:40:44: /school/admin.php?m=article&f=create&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:40:49: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:41:02: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:41:02: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_wx_public ORDER BY addedDate
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc
  SELECT SQL_CALC_FOUND_ROWS  u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  wHeRe 1  
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc

20150419 15:41:05: /school/admin.php?m=message&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:41:05: /school/admin.php?m=message&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  * FROM eps_message wHeRe type  = 'message' AND status  = '0' 
  SELECT * FROM eps_message WHERE type  = 'message' AND status  = '0' ORDER BY id desc
  SELECT id, title FROM eps_article WHERE id IN ('')
  SELECT id, name FROM eps_product WHERE id IN ('')
  SELECT id, title FROM eps_book WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')
  SELECT id, `from` FROM eps_message WHERE id IN ('')

20150419 15:41:09: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:41:09: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:41:37: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:42:32: /school/admin.php?m=admin&f=index
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:42:47: /school/admin.php?m=article&f=create&type=article&categoryID=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:42:47: /school/admin.php?m=article&f=create&type=article&categoryID=11
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:43:06: /school/admin.php?m=article&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:43:07: /school/admin.php?m=article&f=admin
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

20150419 15:43:09: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:43:09: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '10' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '10' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','7','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','7','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:43:12: /school/admin.php?m=article&f=admin&type=article&categoryID=12
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:43:13: /school/admin.php?m=article&f=admin&type=article&categoryID=12
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '12' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '12' 
  SELECT id, name FROM eps_category WHERE id IN ('','12','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',12,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('12') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('12') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('12') GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:43:19: /school/admin.php?m=article&f=admin&type=article&categoryID=13
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:43:19: /school/admin.php?m=article&f=admin&type=article&categoryID=13
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',13,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('13') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('13') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('13') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('13')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('6') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '6'
  SELECT * FROM eps_article WHERE id  = '6'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '6'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') ORDER BY `primary`, editor desc

20150419 15:43:22: /school/admin.php?m=article&f=admin&type=article&categoryID=14
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:43:22: /school/admin.php?m=article&f=admin&type=article&categoryID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '14' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '14' 
  SELECT id, name FROM eps_category WHERE id IN ('','14','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',14,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('14') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('14') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('14') GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:43:26: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:43:26: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'grade' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'grade' ORDER BY grade desc, `order`

20150419 15:43:49: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:49:27: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:49:49: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:52:01: /school/admin.php?m=article&f=admin&type=article&categoryID=11
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:52:01: /school/admin.php?m=article&f=admin&type=article&categoryID=11
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '11' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '11' 
  SELECT id, name FROM eps_category WHERE id IN ('','11','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',11,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('11') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('11') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('11') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('11')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('5') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '5'
  SELECT * FROM eps_article WHERE id  = '5'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '5'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('5') ORDER BY `primary`, editor desc

20150419 15:52:04: /school/admin.php?m=article&f=admin&type=article&categoryID=12
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:52:04: /school/admin.php?m=article&f=admin&type=article&categoryID=12
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '12' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '12' 
  SELECT id, name FROM eps_category WHERE id IN ('','12','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',12,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('12') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('12') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('12') GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:52:07: /school/admin.php?m=article&f=admin&type=article&categoryID=13
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:52:07: /school/admin.php?m=article&f=admin&type=article&categoryID=13
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '13' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '13' 
  SELECT id, name FROM eps_category WHERE id IN ('','13','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',13,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('13') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('13') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('13') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('13')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('6') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '6'
  SELECT * FROM eps_article WHERE id  = '6'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '6'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('6') ORDER BY `primary`, editor desc

20150419 15:52:10: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:52:10: /school/admin.php?m=article&f=admin&type=article&categoryID=10
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '10' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '10' 
  SELECT id, name FROM eps_category WHERE id IN ('','10','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',10,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32') GROUP BY t2.id ORDER BY id desc
  SELECT t2.id, t2.name, t2.alias, t1.id AS article FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t2.type  = 'article' AND t1.category IN ('10','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32')
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11','7','4') AND extension IN ('jpeg','jpg','gif','png') ORDER BY `primary`, editor desc
  SELECT objectID, count(*) as count FROM eps_message WHERE type  = 'comment' AND objectType  = 'article' AND objectID IN ('11','7','4') AND status  = '1' GROUP BY objectID
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`
  SELECT * FROM eps_article WHERE alias  = '11'
  SELECT * FROM eps_article WHERE id  = '11'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '11'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('11') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '7'
  SELECT * FROM eps_article WHERE id  = '7'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '7'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('7') ORDER BY `primary`, editor desc
  SELECT * FROM eps_article WHERE alias  = '4'
  SELECT * FROM eps_article WHERE id  = '4'
  SELECT * FROM eps_tag WHERE link  != '' ORDER BY length(tag) desc
  SELECT t2.* FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND t1.id  = '4'
  SELECT * FROM eps_file WHERE objectType  = 'article' AND objectID IN ('4') ORDER BY `primary`, editor desc

20150419 15:53:52: /school/admin.php?m=article&f=admin&type=article&categoryID=14
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:53:52: /school/admin.php?m=article&f=admin&type=article&categoryID=14
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_category WHERE alias  = '14' AND type  = 'article'
  SELECT * FROM eps_category WHERE `id` = '14' 
  SELECT id, name FROM eps_category WHERE id IN ('','14','') ORDER BY grade
  SELECT id FROM eps_category WHERE path  LIKE ',14,%'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('14') GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'article' AND t2.category IN ('14') gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'article' AND t2.category IN ('14') GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'article' ORDER BY grade desc, `order`

20150419 15:53:54: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:53:54: /school/admin.php?m=article&f=admin&type=grade
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT SQL_CALC_FOUND_ROWS  t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  wHeRe t1.type  = 'grade' gRoUp bY t2.id 
  SELECT t1.*, t2.category FROM eps_article AS t1  LEFT JOIN eps_relation AS t2  ON t1.id = t2.id  WHERE t1.type  = 'grade' GROUP BY t2.id ORDER BY id desc
  SELECT * FROM eps_category WHERE type  = 'grade' ORDER BY grade desc, `order`

20150419 15:53:56: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','guest') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 15:53:56: /school/admin.php?m=user&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'
  SELECT * FROM eps_wx_public ORDER BY addedDate
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc
  SELECT SQL_CALC_FOUND_ROWS  u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  wHeRe 1  
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE 1  ORDER BY id asc

20150419 21:35:58: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 21:35:59: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 21:41:58: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

20150419 21:41:59: /school/admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','admin') ORDER BY id
  SELECT alias, id as category, type as module FROM eps_category WHERE alias  != '' AND type IN ('article','product')
  SELECT alias, id, 'page' as module FROM eps_article WHERE type  = 'page'
  SELECT id, alias FROM eps_category WHERE type  = 'forum'
  SELECT id, alias FROM eps_category WHERE type  = 'blog'

