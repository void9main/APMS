# Host: localhost  (Version: 5.5.40)
# Date: 2016-01-26 22:28:24
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "content"
#

DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) DEFAULT NULL,
  `content` text COMMENT '留言',
  `post` text COMMENT '评论',
  `date` varchar(255) DEFAULT NULL COMMENT '留言日期',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='留言板';

#
# Data for table "content"
#

/*!40000 ALTER TABLE `content` DISABLE KEYS */;
INSERT INTO `content` VALUES (1,'0','今天天气不错啊。',NULL,''),(2,'2','看看就这样，我的程序我做主！！',NULL,NULL),(3,NULL,'这是第五条插入信息',NULL,NULL),(4,NULL,'这是第六条信息！',NULL,NULL),(5,NULL,'刘亦菲说实话还是挺漂亮的：-）',NULL,NULL),(6,NULL,'话说老板什么时候加工资呢？',NULL,NULL),(7,NULL,'看看测试文件',NULL,NULL),(8,NULL,'对于这个bug我正在修改问题所在',NULL,NULL),(9,NULL,'可能是数据的的get的错误',NULL,NULL),(10,NULL,'但是我目前测试的十条以上的数据试试看',NULL,NULL),(11,NULL,'在我的预计中十一条以上的数据应该是可以达到显示目的的',NULL,NULL);
/*!40000 ALTER TABLE `content` ENABLE KEYS */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) DEFAULT NULL COMMENT 'uid',
  `name` varchar(255) DEFAULT NULL COMMENT '账号',
  `pwd` varchar(255) DEFAULT NULL COMMENT '密码',
  `apart` varchar(255) DEFAULT NULL COMMENT '宿舍',
  `type` varchar(255) DEFAULT NULL COMMENT '1学生0管理员',
  `money` varchar(255) DEFAULT NULL COMMENT '网费',
  `time` varchar(255) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='用户信息';

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'0','admin','123456','102','0','1000',NULL),(2,'1','刘看山','123456','101','1','100','2016-01-25 22:24:39'),(3,'2','张萌萌','123456','102','1','123456','2016-01-25 22:24:39'),(4,'4','王超','123456','103','1','1000','2016-01-26 09:20:05'),(5,'5','王小柱','123456','105','1','100','2016-01-26 09:20:05'),(6,'6','田志祥','123456','108','1','100','2016-01-26 09:21:37'),(7,'7','魏顺利','123456','109','1','100','2016-01-26 09:21:37'),(8,'8','秦飞','123456','201','1','250','2016-01-26 09:23:04'),(9,'9','老周','123456','250','1','250','2016-01-26 09:23:04'),(10,'10','刘倩男','123456','516','1','250','2016-01-26 09:24:23'),(12,'11','鹿晗','123456','256','1','250','2016-01-26 09:38:31'),(13,'12','张艺兴','123456','126','1','120','2016-01-26 09:38:31'),(14,NULL,'$name','$pwd','$apart','1','0','2016-01-26 10:18:38'),(15,NULL,'void9main','123456','205','1','0','2016-01-26 10:26:57'),(16,NULL,'范冰冰','123456','213','1','0','2016-01-26 10:30:06'),(17,NULL,'','','','1','0','2016-01-26 13:58:13'),(18,NULL,'121111','111111','256','1','0','2016-01-26 14:04:00');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
