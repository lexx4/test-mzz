-- MySQL dump 10.11
--
-- Host: localhost    Database: mzz_dummy
-- ------------------------------------------------------
-- Server version	5.0.45-community-nt

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `mzz_dummy`
--

/*!40000 DROP DATABASE IF EXISTS `mzz_dummy`*/;

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `mzz_dummy` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mzz_dummy`;

DROP TABLE IF EXISTS `sys_lang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_lang` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` char(20) default NULL,
  `title` char(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_lang`
--

/*!40000 ALTER TABLE `sys_lang` DISABLE KEYS */;
INSERT INTO `sys_lang` VALUES (1,'ru',''),(2,'en','en');
/*!40000 ALTER TABLE `sys_lang` ENABLE KEYS */;

--
-- Table structure for table `sys_lang_lang`
--

DROP TABLE IF EXISTS `sys_lang_lang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_lang_lang` (
  `id` int(11) unsigned NOT NULL,
  `lang_id` int(11) unsigned NOT NULL,
  `name` char(32) default NULL,
  PRIMARY KEY  (`id`,`lang_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_lang_lang`
--

/*!40000 ALTER TABLE `sys_lang_lang` DISABLE KEYS */;
INSERT INTO `sys_lang_lang` VALUES (1,1,''),(1,2,'russian'),(2,1,''),(2,2,'english');
/*!40000 ALTER TABLE `sys_lang_lang` ENABLE KEYS */;

--
-- Table structure for table `sys_obj_id`
--

DROP TABLE IF EXISTS `sys_obj_id`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_obj_id` (
  `id` int(11) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_obj_id`
--

/*!40000 ALTER TABLE `sys_obj_id` DISABLE KEYS */;
INSERT INTO `sys_obj_id` VALUES (1),(2);
/*!40000 ALTER TABLE `sys_obj_id` ENABLE KEYS */;

--
-- Table structure for table `sys_obj_id_named`
--

DROP TABLE IF EXISTS `sys_obj_id_named`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_obj_id_named` (
  `obj_id` int(11) unsigned NOT NULL auto_increment,
  `name` char(255) default NULL,
  PRIMARY KEY  (`obj_id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_obj_id_named`
--

/*!40000 ALTER TABLE `sys_obj_id_named` DISABLE KEYS */;
INSERT INTO `sys_obj_id_named` VALUES (1,'userFolder'),(2,'groupFolder');
/*!40000 ALTER TABLE `sys_obj_id_named` ENABLE KEYS */;

--
-- Table structure for table `sys_sessions`
--

DROP TABLE IF EXISTS `sys_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_sessions` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `sid` varchar(50) NOT NULL default '',
  `ts` int(11) unsigned NOT NULL default '0',
  `valid` enum('yes','no') NOT NULL default 'yes',
  `data` text,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `sid` (`sid`),
  KEY `valid` (`valid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_sessions`
--

/*!40000 ALTER TABLE `sys_sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sys_sessions` ENABLE KEYS */;

--
-- Table structure for table `sys_skins`
--

DROP TABLE IF EXISTS `sys_skins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sys_skins` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `name` char(32) default NULL,
  `title` char(32) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sys_skins`
--

/*!40000 ALTER TABLE `sys_skins` DISABLE KEYS */;
INSERT INTO `sys_skins` VALUES (1,'default','default'),(2,'light','light');
/*!40000 ALTER TABLE `sys_skins` ENABLE KEYS */;

--
-- Table structure for table `user_group`
--

DROP TABLE IF EXISTS `user_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_group` (
  `id` int(11) NOT NULL auto_increment,
  `name` char(255) NOT NULL,
  `is_default` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_group`
--

/*!40000 ALTER TABLE `user_group` DISABLE KEYS */;
INSERT INTO `user_group` VALUES (1,'unauth',0),(2,'auth',1),(3,'root',0);
/*!40000 ALTER TABLE `user_group` ENABLE KEYS */;

--
-- Table structure for table `user_pamFacebook`
--

DROP TABLE IF EXISTS `user_pamFacebook`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_pamFacebook` (
  `user_id` int(11) unsigned NOT NULL,
  `facebook_uid` int(11) unsigned NOT NULL,
  PRIMARY KEY (`facebook_uid`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_pamFacebook`
--

/*!40000 ALTER TABLE `user_pamFacebook` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_pamFacebook` ENABLE KEYS */;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL auto_increment,
  `group_id` int(11) NOT NULL,
  `module` varchar(32) NOT NULL default '',
  `role` varchar(32) NOT NULL default '',
  PRIMARY KEY  (`id`),
  UNIQUE KEY `group_module_role` (`group_id`,`module`,`role`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;

--
-- Table structure for table `user_user`
--

DROP TABLE IF EXISTS `user_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_user` (
  `id` int(11) NOT NULL auto_increment,
  `login` char(255) NOT NULL,
  `email` char(255) NULL,
  `password` char(32) NOT NULL,
  `created` int(11) NOT NULL default 0,
  `confirmed` char(32) NULL,
  `last_login` int(11) NOT NULL default 0,
  `language_id` int(11) NOT NULL default 0,
  `timezone` int(11) default '3',
  `skin` int(11) unsigned default '1',
  PRIMARY KEY  (`id`),
  KEY `login` (`login`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_user`
--

/*!40000 ALTER TABLE `user_user` DISABLE KEYS */;
INSERT INTO `user_user` VALUES (1,'guest','','',0,'',1225005849,0,3,1),(2,'admin','','098f6bcd4621d373cade4e832627b4f6',0,'',1253665584,1,3,1);
/*!40000 ALTER TABLE `user_user` ENABLE KEYS */;

--
-- Table structure for table `user_userAuth`
--

DROP TABLE IF EXISTS `user_userAuth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_userAuth` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `pam` char(15) DEFAULT NULL,
  `ip` char(15) DEFAULT NULL,
  `hash` char(32) DEFAULT NULL,
  `user_hash` char(32) DEFAULT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `time` (`time`),
  KEY `ip_hash` (`ip`,`hash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_userAuth`
--

/*!40000 ALTER TABLE `user_userAuth` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_userAuth` ENABLE KEYS */;

--
-- Table structure for table `user_userGroup_rel`
--

DROP TABLE IF EXISTS `user_userGroup_rel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_userGroup_rel` (
  `id` int(11) NOT NULL auto_increment,
  `group_id` int(11) default NULL,
  `user_id` int(11) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `group_id` (`group_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_userGroup_rel`
--

/*!40000 ALTER TABLE `user_userGroup_rel` DISABLE KEYS */;
INSERT INTO `user_userGroup_rel` VALUES (1,1,1),(2,2,2),(3,3,2);
/*!40000 ALTER TABLE `user_userGroup_rel` ENABLE KEYS */;

--
-- Table structure for table `user_userOnline`
--

DROP TABLE IF EXISTS `user_userOnline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_userOnline` (
  `id` int(11) unsigned NOT NULL auto_increment,
  `user_id` int(11) default NULL,
  `session` char(32) default NULL,
  `last_activity` int(11) default NULL,
  `url` char(255) default NULL,
  `ip` char(15) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `user_id` (`user_id`,`session`),
  KEY `last_activity` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_userOnline`
--

/*!40000 ALTER TABLE `user_userOnline` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_userOnline` ENABLE KEYS */;

--
-- Dumping routines for database 'mzz_dummy'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2010-02-26 11:26:38
