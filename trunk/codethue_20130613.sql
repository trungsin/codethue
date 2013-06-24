/*
 Navicat Premium Data Transfer

 Source Server         : XAMPP
 Source Server Type    : MySQL
 Source Server Version : 50144
 Source Host           : localhost
 Source Database       : codethue

 Target Server Type    : MySQL
 Target Server Version : 50144
 File Encoding         : utf-8

 Date: 06/13/2013 16:16:18 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `authassignment`
-- ----------------------------
DROP TABLE IF EXISTS `authassignment`;
CREATE TABLE `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`),
  CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `authassignment`
-- ----------------------------
BEGIN;
INSERT INTO `authassignment` VALUES ('Admin', '1', null, 'N;'), ('hire', '2', null, 'N;'), ('hire', '3', null, 'N;'), ('Projects.*', '3', null, 'N;'), ('Projects.Create', '2', null, 'N;'), ('Projects.Create', '3', null, 'N;'), ('Projects.Delete', '2', null, 'N;'), ('Projects.Delete', '3', null, 'N;'), ('Projects.Index', '3', null, 'N;'), ('Projects.Update', '3', null, 'N;'), ('Projects.View', '3', null, 'N;');
COMMIT;

-- ----------------------------
--  Table structure for `authitem`
-- ----------------------------
DROP TABLE IF EXISTS `authitem`;
CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `authitem`
-- ----------------------------
BEGIN;
INSERT INTO `authitem` VALUES ('Admin', '2', null, null, 'N;'), ('Authenticated', '2', null, null, 'N;'), ('Guest', '2', null, null, 'N;'), ('hire', '2', 'create project', 'ss', 'N;'), ('Projects.*', '1', null, null, 'N;'), ('Projects.Create', '0', null, null, 'N;'), ('Projects.Delete', '0', null, null, 'N;'), ('Projects.Index', '0', null, null, 'N;'), ('Projects.Update', '0', null, null, 'N;'), ('Projects.View', '0', null, null, 'N;');
COMMIT;

-- ----------------------------
--  Table structure for `authitemchild`
-- ----------------------------
DROP TABLE IF EXISTS `authitemchild`;
CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `authitemchild`
-- ----------------------------
BEGIN;
INSERT INTO `authitemchild` VALUES ('hire', 'Projects.*'), ('hire', 'Projects.Create'), ('hire', 'Projects.Delete'), ('hire', 'Projects.Index'), ('hire', 'Projects.Update'), ('hire', 'Projects.View');
COMMIT;

-- ----------------------------
--  Table structure for `bids`
-- ----------------------------
DROP TABLE IF EXISTS `bids`;
CREATE TABLE `bids` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projectId` int(11) DEFAULT NULL,
  `userbidId` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `comfirm` char(1) DEFAULT '0',
  `dateComfirm` date DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `update_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `bids`
-- ----------------------------
BEGIN;
INSERT INTO `bids` VALUES ('1', '2', '1', '3434', '0', null, '2013-06-10 21:08:24', '1', '2013-06-10 21:08:24', '1'), ('2', '2', '1', '3434', '0', null, '2013-06-10 22:25:04', '1', '2013-06-10 22:25:04', '1'), ('3', '2', '1', '2', '0', null, '2013-06-10 22:25:10', '1', '2013-06-10 22:25:10', '1');
COMMIT;

-- ----------------------------
--  Table structure for `projects`
-- ----------------------------
DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `projectId` int(11) NOT NULL AUTO_INCREMENT,
  `projectName` varchar(100) CHARACTER SET ucs2 NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  `userId` int(11) DEFAULT NULL,
  `Description` text,
  `startday` date DEFAULT NULL,
  `endday` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `update_user_id` int(11) DEFAULT NULL,
  `bid` int(11) DEFAULT NULL,
  `ProjectBudget` int(11) DEFAULT NULL,
  PRIMARY KEY (`projectId`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `projects`
-- ----------------------------
BEGIN;
INSERT INTO `projects` VALUES ('2', 'Dự án số 1', '0', '1', 'Mô tả ở đây. Lorem ipsum dolor sit amet, vim nemore antiopam ea. In nam iracundia vituperata. Est no commodo quaestio, sea et dictas postulant, dicit aliquam neglegentur sed ea. Nec ei salutandi mnesarchum persequeris. Tale sanctus qui in, diam idque pericula his at. Qui ad zril soluta.', '2013-06-18', '434', '2013-06-08 22:24:03', '1', '2013-06-13 16:07:03', '1', '434', '434'), ('3', 'Dự án số 2', '0', '1', 'Mô tả ở đây. Lorem ipsum dolor sit amet, vim nemore antiopam ea. In nam iracundia vituperata. Est no commodo quaestio, sea et dictas postulant, dicit aliquam neglegentur sed ea. Nec ei salutandi mnesarchum persequeris. Tale sanctus qui in, diam idque pericula his at. Qui ad zril soluta.', '2013-06-19', '43', '2013-06-08 22:24:23', '1', '2013-06-13 16:13:28', '1', '43', '434'), ('4', 'Dự án số 3', '0', '1', 'Mô tả ở đây. Lorem ipsum dolor sit amet, vim nemore antiopam ea. In nam iracundia vituperata. Est no commodo quaestio, sea et dictas postulant, dicit aliquam neglegentur sed ea. Nec ei salutandi mnesarchum persequeris. Tale sanctus qui in, diam idque pericula his at. Qui ad zril soluta.', '2013-06-06', '44', '2013-06-09 16:37:19', '1', '2013-06-13 16:13:53', '1', '88', '88'), ('5', 'Dự án số 4', '0', '1', 'Mô tả ở đây. Lorem ipsum dolor sit amet, vim nemore antiopam ea. In nam iracundia vituperata. Est no commodo quaestio, sea et dictas postulant, dicit aliquam neglegentur sed ea. Nec ei salutandi mnesarchum persequeris. Tale sanctus qui in, diam idque pericula his at. Qui ad zril soluta.', '2013-06-21', '88', '2013-06-09 16:37:42', '1', '2013-06-13 16:14:05', '1', '888', '888'), ('6', 'Dự án số 5', '0', '1', 'Mô tả ở đây. Lorem ipsum dolor sit amet, vim nemore antiopam ea. In nam iracundia vituperata. Est no commodo quaestio, sea et dictas postulant, dicit aliquam neglegentur sed ea. Nec ei salutandi mnesarchum persequeris. Tale sanctus qui in, diam idque pericula his at. Qui ad zril soluta.', '2013-06-14', '88', '2013-06-09 16:38:09', '1', '2013-06-13 16:14:19', '1', '99', '99'), ('7', 'Dự án số 6', '0', '1', 'Mô tả ở đây. Lorem ipsum dolor sit amet, vim nemore antiopam ea. In nam iracundia vituperata. Est no commodo quaestio, sea et dictas postulant, dicit aliquam neglegentur sed ea. Nec ei salutandi mnesarchum persequeris. Tale sanctus qui in, diam idque pericula his at. Qui ad zril soluta.', '2013-06-10', '88', '2013-06-09 16:39:22', '1', '2013-06-13 16:15:19', '1', '88', '88'), ('8', '4234hkjhfkjdsfhkj', '0', '1', 'Mô tả ở đây. Lorem ipsum dolor sit amet, vim nemore antiopam ea. In nam iracundia vituperata. Est no commodo quaestio, sea et dictas postulant, dicit aliquam neglegentur sed ea. Nec ei salutandi mnesarchum persequeris. Tale sanctus qui in, diam idque pericula his at. Qui ad zril soluta.', '2013-06-12', '889', '2013-06-09 16:39:39', '1', null, null, '999', '999'), ('9', 'hkjehefbbjk', '0', '1', 'Mô tả ở đây. Lorem ipsum dolor sit amet, vim nemore antiopam ea. In nam iracundia vituperata. Est no commodo quaestio, sea et dictas postulant, dicit aliquam neglegentur sed ea. Nec ei salutandi mnesarchum persequeris. Tale sanctus qui in, diam idque pericula his at. Qui ad zril soluta.', '2013-06-20', '8', '2013-06-09 16:39:58', '1', null, null, '8', '9'), ('10', 'pljkjkfldkj', '0', '1', 'Mô tả ở đây. Lorem ipsum dolor sit amet, vim nemore antiopam ea. In nam iracundia vituperata. Est no commodo quaestio, sea et dictas postulant, dicit aliquam neglegentur sed ea. Nec ei salutandi mnesarchum persequeris. Tale sanctus qui in, diam idque pericula his at. Qui ad zril soluta.', '2013-06-09', '888', '2013-06-09 16:40:33', '1', null, null, '8888', '7777'), ('11', 'iyuiyiyiuykjnjkhkj', '0', '1', 'Mô tả ở đây. Lorem ipsum dolor sit amet, vim nemore antiopam ea. In nam iracundia vituperata. Est no commodo quaestio, sea et dictas postulant, dicit aliquam neglegentur sed ea. Nec ei salutandi mnesarchum persequeris. Tale sanctus qui in, diam idque pericula his at. Qui ad zril soluta.', '2013-06-07', '888', '2013-06-09 16:40:50', '1', null, null, '8888', '888'), ('12', 'jkhkjhjk', '0', '1', 'Mô tả ở đây. Lorem ipsum dolor sit amet, vim nemore antiopam ea. In nam iracundia vituperata. Est no commodo quaestio, sea et dictas postulant, dicit aliquam neglegentur sed ea. Nec ei salutandi mnesarchum persequeris. Tale sanctus qui in, diam idque pericula his at. Qui ad zril soluta.', '2013-06-12', '888', '2013-06-09 16:41:08', '1', null, null, '888', '888');
COMMIT;

-- ----------------------------
--  Table structure for `projectskills`
-- ----------------------------
DROP TABLE IF EXISTS `projectskills`;
CREATE TABLE `projectskills` (
  `id` int(11) DEFAULT NULL,
  `projectId` int(11) DEFAULT NULL,
  `skillId` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `rights`
-- ----------------------------
DROP TABLE IF EXISTS `rights`;
CREATE TABLE `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`),
  CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `skills`
-- ----------------------------
DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skillname` varchar(100) DEFAULT NULL,
  `Description` text,
  `create_time` datetime DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `update_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `skills`
-- ----------------------------
BEGIN;
INSERT INTO `skills` VALUES ('1', 'PHP', 'Programing PHP\r\n', null, null, null, null), ('2', 'PHP', 'Lap trinh PHP', '2013-06-08 14:41:53', '3', '2013-06-08 14:41:53', '3'), ('3', 'C#', 'Lap trinh C#', '2013-06-08 14:42:15', '3', '2013-06-08 14:42:15', '3'), ('4', 'Yiiframework', 'Biet ve framework Yii', '2013-06-08 14:42:41', '3', '2013-06-08 14:42:41', '3');
COMMIT;

-- ----------------------------
--  Table structure for `tbl_profiles`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_profiles`;
CREATE TABLE `tbl_profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tbl_profiles`
-- ----------------------------
BEGIN;
INSERT INTO `tbl_profiles` VALUES ('1', 'Admin', 'Administrator', '0000-00-00'), ('2', 'Demo', 'Demo', '0000-00-00'), ('4', 'dsds', 'dsd', '2013-06-07');
COMMIT;

-- ----------------------------
--  Table structure for `tbl_profiles_fields`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_profiles_fields`;
CREATE TABLE `tbl_profiles_fields` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` int(3) NOT NULL DEFAULT '0',
  `field_size_min` int(3) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(255) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `varname` (`varname`,`widget`,`visible`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tbl_profiles_fields`
-- ----------------------------
BEGIN;
INSERT INTO `tbl_profiles_fields` VALUES ('1', 'lastname', 'Last Name', 'VARCHAR', '50', '3', '1', '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', '1', '3'), ('2', 'firstname', 'First Name', 'VARCHAR', '50', '3', '1', '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', '0', '3'), ('3', 'birthday', 'Birthday', 'DATE', '0', '0', '2', '', '', '', '', '0000-00-00', 'UWjuidate', '{\"ui-theme\":\"redmond\"}', '3', '2');
COMMIT;

-- ----------------------------
--  Table structure for `tbl_users`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `lastvisit` int(10) NOT NULL DEFAULT '0',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `status` (`status`),
  KEY `superuser` (`superuser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tbl_users`
-- ----------------------------
BEGIN;
INSERT INTO `tbl_users` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', '1261146094', '1371109175', '1', '1'), ('2', 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', '1261146096', '1370623122', '0', '1'), ('3', 'hire', 'ffcc0e05b4d178b931922711e35cf553', 'sink@jj.com', '56b6f8a4eaa4ecddd6ac922f3f083caf', '1370624256', '1370658781', '0', '1'), ('4', 'hire1', 'ffcc0e05b4d178b931922711e35cf553', 'sink@jfj.com', '46311ee70219bd62dab9120faa4e3da8', '1370624308', '1370624308', '0', '1');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` int(11) DEFAULT NULL,
  `stars` int(11) DEFAULT NULL,
  `fullname` varchar(1) DEFAULT NULL,
  `location` varchar(256) DEFAULT NULL,
  `type` varchar(1) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `update_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
