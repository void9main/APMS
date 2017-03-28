# Host: localhost  (Version: 5.5.40)
# Date: 2016-01-25 22:26:16
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "content"
#

DROP TABLE IF EXISTS `content`;
CREATE TABLE `content` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL COMMENT '留言',
  `post` varchar(255) DEFAULT NULL COMMENT '评论',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='留言板';

#
# Data for table "content"
#

/*!40000 ALTER TABLE `content` DISABLE KEYS */;
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='用户信息';

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'0','admin','123456','102','0','1000',NULL),(2,'1','刘看山','123456','101','1','100','2016-01-25 22:24:39'),(3,'2','张萌萌','123456','102','1','123456','2016-01-25 22:24:39');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
