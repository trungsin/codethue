-- phpMyAdmin SQL Dump
-- version 3.4.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 11, 2013 at 12:51 AM
-- Server version: 5.1.54
-- PHP Version: 5.3.24

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codethue`
--

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', '1', NULL, 'N;'),
('hire', '2', NULL, 'N;'),
('hire', '3', NULL, 'N;'),
('Projects.*', '3', NULL, 'N;'),
('Projects.Create', '2', NULL, 'N;'),
('Projects.Create', '3', NULL, 'N;'),
('Projects.Delete', '2', NULL, 'N;'),
('Projects.Delete', '3', NULL, 'N;'),
('Projects.Index', '3', NULL, 'N;'),
('Projects.Update', '3', NULL, 'N;'),
('Projects.View', '3', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Admin', 2, NULL, NULL, 'N;'),
('Authenticated', 2, NULL, NULL, 'N;'),
('Guest', 2, NULL, NULL, 'N;'),
('hire', 2, 'create project', 'ss', 'N;'),
('Projects.*', 1, NULL, NULL, 'N;'),
('Projects.Create', 0, NULL, NULL, 'N;'),
('Projects.Delete', 0, NULL, NULL, 'N;'),
('Projects.Index', 0, NULL, NULL, 'N;'),
('Projects.Update', 0, NULL, NULL, 'N;'),
('Projects.View', 0, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('hire', 'Projects.*'),
('hire', 'Projects.Create'),
('hire', 'Projects.Delete'),
('hire', 'Projects.Index'),
('hire', 'Projects.Update'),
('hire', 'Projects.View');

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE IF NOT EXISTS `bids` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bids`
--

INSERT INTO `bids` (`id`, `projectId`, `userbidId`, `cost`, `comfirm`, `dateComfirm`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 2, 1, 3434, '0', NULL, '2013-06-10 21:08:24', 1, '2013-06-10 21:08:24', 1),
(2, 2, 1, 3434, '0', NULL, '2013-06-10 22:25:04', 1, '2013-06-10 22:25:04', 1),
(3, 2, 1, 2, '0', NULL, '2013-06-10 22:25:10', 1, '2013-06-10 22:25:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`projectId`, `projectName`, `status`, `userId`, `Description`, `startday`, `endday`, `create_time`, `create_user_id`, `update_time`, `update_user_id`, `bid`, `ProjectBudget`) VALUES
(2, 'sfdsf', '0', 1, 'fdsfdsf', '2013-06-18', 434, '2013-06-08 22:24:03', 1, '2013-06-10 22:35:49', 1, 434, 434),
(3, 'rtrt', '0', 1, 'rtrtretet', '2013-06-19', 43, '2013-06-08 22:24:23', 1, NULL, NULL, 43, 434),
(4, 'fdfkjdsfhjk', '0', 1, 'kjhkjhkj', '2013-06-06', 44, '2013-06-09 16:37:19', 1, NULL, NULL, 88, 88),
(5, 'dsfdfjkhjkh', '0', 1, 'kjhkjh', '2013-06-21', 88, '2013-06-09 16:37:42', 1, NULL, NULL, 888, 888),
(6, 'khhjkhkjhkj', '0', 1, 'jkkjhkjhk', '2013-06-14', 88, '2013-06-09 16:38:09', 1, NULL, NULL, 99, 99),
(7, 'huhkhjkjk', '0', 1, 'hjkhjkh', '2013-06-10', 88, '2013-06-09 16:39:22', 1, NULL, NULL, 88, 88),
(8, '4234hkjhfkjdsfhkj', '0', 1, 'kjhkjh', '2013-06-12', 889, '2013-06-09 16:39:39', 1, NULL, NULL, 999, 999),
(9, 'hkjehefbbjk', '0', 1, 'klhjkhjk', '2013-06-20', 8, '2013-06-09 16:39:58', 1, NULL, NULL, 8, 9),
(10, 'pljkjkfldkj', '0', 1, 'hkjhjkhk', '2013-06-09', 888, '2013-06-09 16:40:33', 1, NULL, NULL, 8888, 7777),
(11, 'iyuiyiyiuykjnjkhkj', '0', 1, 'kjhjkhk', '2013-06-07', 888, '2013-06-09 16:40:50', 1, NULL, NULL, 8888, 888),
(12, 'jkhkjhjk', '0', 1, 'jhkjhlk', '2013-06-12', 888, '2013-06-09 16:41:08', 1, NULL, NULL, 888, 888);

-- --------------------------------------------------------

--
-- Table structure for table `projectskills`
--

CREATE TABLE IF NOT EXISTS `projectskills` (
  `id` int(11) DEFAULT NULL,
  `projectId` int(11) DEFAULT NULL,
  `skillId` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE IF NOT EXISTS `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  PRIMARY KEY (`itemname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `skillname` varchar(100) DEFAULT NULL,
  `Description` text,
  `create_time` datetime DEFAULT NULL,
  `create_user_id` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL,
  `update_user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `skillname`, `Description`, `create_time`, `create_user_id`, `update_time`, `update_user_id`) VALUES
(1, 'PHP', 'Programing PHP\r\n', NULL, NULL, NULL, NULL),
(2, 'PHP', 'Lap trinh PHP', '2013-06-08 14:41:53', 3, '2013-06-08 14:41:53', 3),
(3, 'C#', 'Lap trinh C#', '2013-06-08 14:42:15', 3, '2013-06-08 14:42:15', 3),
(4, 'Yiiframework', 'Biet ve framework Yii', '2013-06-08 14:42:41', 3, '2013-06-08 14:42:41', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_profiles`
--

INSERT INTO `tbl_profiles` (`user_id`, `lastname`, `firstname`, `birthday`) VALUES
(1, 'Admin', 'Administrator', '0000-00-00'),
(2, 'Demo', 'Demo', '0000-00-00'),
(4, 'dsds', 'dsd', '2013-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profiles_fields`
--

CREATE TABLE IF NOT EXISTS `tbl_profiles_fields` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_profiles_fields`
--

INSERT INTO `tbl_profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', 50, 3, 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3),
(3, 'birthday', 'Birthday', 'DATE', 0, 0, 2, '', '', '', '', '0000-00-00', 'UWjuidate', '{"ui-theme":"redmond"}', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `email`, `activkey`, `createtime`, `lastvisit`, `superuser`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', '9a24eff8c15a6a141ece27eb6947da0f', 1261146094, 1370883014, 1, 1),
(2, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', 1261146096, 1370623122, 0, 1),
(3, 'hire', 'ffcc0e05b4d178b931922711e35cf553', 'sink@jj.com', '56b6f8a4eaa4ecddd6ac922f3f083caf', 1370624256, 1370658781, 0, 1),
(4, 'hire1', 'ffcc0e05b4d178b931922711e35cf553', 'sink@jfj.com', '46311ee70219bd62dab9120faa4e3da8', 1370624308, 1370624308, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rights`
--
ALTER TABLE `rights`
  ADD CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
