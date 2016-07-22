-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Feb 01, 2013, 12:01 PM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `phpclass`
-- 

-- --------------------------------------------------------

-- 
-- 資料表格式： `adminuser`
-- 

CREATE TABLE `adminuser` (
  `No` int(11) NOT NULL auto_increment,
  `Name` varchar(10) collate utf8_unicode_ci NOT NULL,
  `PassWord` varchar(10) collate utf8_unicode_ci NOT NULL,
  `Pri` int(11) NOT NULL,
  PRIMARY KEY  (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

-- 
-- 列出以下資料庫的數據： `adminuser`
-- 

INSERT INTO `adminuser` VALUES (2, 'a', '4', 2);
INSERT INTO `adminuser` VALUES (3, 'a', 'a1', 2);
INSERT INTO `adminuser` VALUES (4, 'b', '2', 1);
INSERT INTO `adminuser` VALUES (5, 'c', '3', 2);
INSERT INTO `adminuser` VALUES (6, 'b', '3', 1);
INSERT INTO `adminuser` VALUES (7, 'gg', '11', 1);
INSERT INTO `adminuser` VALUES (8, 'aa', 'aaa', 1);
INSERT INTO `adminuser` VALUES (10, '22', '21', 1);
INSERT INTO `adminuser` VALUES (11, '', '', 1);
INSERT INTO `adminuser` VALUES (12, 's', 'a', 1);
INSERT INTO `adminuser` VALUES (13, 'r', '2', 1);
INSERT INTO `adminuser` VALUES (14, 'test', 'test', 1);
INSERT INTO `adminuser` VALUES (15, 'aaa', 'aaa', 1);
INSERT INTO `adminuser` VALUES (16, 'testjeter', '123456', 1);
INSERT INTO `adminuser` VALUES (18, 'a', '3', 1);

-- --------------------------------------------------------

-- 
-- 資料表格式： `ordered`
-- 

CREATE TABLE `ordered` (
  `No` int(11) NOT NULL auto_increment,
  `Oyear` int(11) default NULL,
  `Omonth` int(11) default NULL,
  `Oday` int(11) default NULL,
  `Pno` int(11) default NULL,
  `Uno` int(11) default NULL,
  `Num` int(11) default NULL,
  PRIMARY KEY  (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- 
-- 列出以下資料庫的數據： `ordered`
-- 

INSERT INTO `ordered` VALUES (1, 13, 2, 1, 25, 2, 1);
INSERT INTO `ordered` VALUES (2, 13, 2, 1, 22, 5, 1);

-- --------------------------------------------------------

-- 
-- 資料表格式： `products`
-- 

CREATE TABLE `products` (
  `No` int(11) NOT NULL auto_increment,
  `Name` char(20) collate utf8_unicode_ci default NULL,
  `Price` int(11) default NULL,
  `Quility` int(11) default NULL,
  `StoreNo` int(11) default NULL,
  PRIMARY KEY  (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=26 ;

-- 
-- 列出以下資料庫的數據： `products`
-- 

INSERT INTO `products` VALUES (25, 'h', 2, 1, 3);
INSERT INTO `products` VALUES (22, '1', 2, 0, 1);
INSERT INTO `products` VALUES (23, '1', 2, 0, 1);
INSERT INTO `products` VALUES (24, 'ggg', 3, 0, 3);

-- --------------------------------------------------------

-- 
-- 資料表格式： `store`
-- 

CREATE TABLE `store` (
  `No` int(11) NOT NULL auto_increment,
  `Name` char(20) collate utf8_unicode_ci default NULL,
  `Tel` char(10) collate utf8_unicode_ci default NULL,
  `Address` char(50) collate utf8_unicode_ci default NULL,
  `Email` char(20) collate utf8_unicode_ci default NULL,
  `userName` char(10) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- 
-- 列出以下資料庫的數據： `store`
-- 

INSERT INTO `store` VALUES (1, 'A', '1', '2', '3', '4');
INSERT INTO `store` VALUES (2, '2', '3', '4', '5', '6');
INSERT INTO `store` VALUES (3, '小福便當', '234', 'asdf', '123', '4');

-- --------------------------------------------------------

-- 
-- 資料表格式： `student`
-- 

CREATE TABLE `student` (
  `No` int(11) NOT NULL auto_increment,
  `Name` varchar(10) NOT NULL,
  `Phone` varchar(10) default NULL,
  `Email` varchar(20) NOT NULL,
  PRIMARY KEY  (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=77 ;

-- 
-- 列出以下資料庫的數據： `student`
-- 

INSERT INTO `student` VALUES (1, 'pecu', '', 'pecu610@gmail.com');
INSERT INTO `student` VALUES (2, '123', '345', '456');
INSERT INTO `student` VALUES (3, '', '', '');
INSERT INTO `student` VALUES (4, 'test', '', '123');
INSERT INTO `student` VALUES (5, 'test', '', '123');
INSERT INTO `student` VALUES (6, 'test', '', '123');
INSERT INTO `student` VALUES (7, '', '', '');
INSERT INTO `student` VALUES (8, '', '', '');
INSERT INTO `student` VALUES (9, '', '', '');
INSERT INTO `student` VALUES (10, '', '', '');
INSERT INTO `student` VALUES (11, '', '', '');
INSERT INTO `student` VALUES (12, '', '', '');
INSERT INTO `student` VALUES (13, '', '', '');
INSERT INTO `student` VALUES (14, '', '', '');
INSERT INTO `student` VALUES (15, '', '', '');
INSERT INTO `student` VALUES (16, 'TEST', 'T12345', 't12345@gmail.com');
INSERT INTO `student` VALUES (17, '', '', '');
INSERT INTO `student` VALUES (18, '', '', '');
INSERT INTO `student` VALUES (19, '', '', '');
INSERT INTO `student` VALUES (20, '', '', '');
INSERT INTO `student` VALUES (21, '', '', '');
INSERT INTO `student` VALUES (22, '', '', '');
INSERT INTO `student` VALUES (23, '', '', '');
INSERT INTO `student` VALUES (24, '', '', '');
INSERT INTO `student` VALUES (25, '', '', '');
INSERT INTO `student` VALUES (26, '', '', '');
INSERT INTO `student` VALUES (27, '', '', '');
INSERT INTO `student` VALUES (28, '', '', '');
INSERT INTO `student` VALUES (29, '', '', '');
INSERT INTO `student` VALUES (30, '', '', '');
INSERT INTO `student` VALUES (31, '', '', '');
INSERT INTO `student` VALUES (32, '', '', '');
INSERT INTO `student` VALUES (33, '', '', '');
INSERT INTO `student` VALUES (34, '', '', '');
INSERT INTO `student` VALUES (35, '', '', '');
INSERT INTO `student` VALUES (36, '', '', '');
INSERT INTO `student` VALUES (37, '', '', '');
INSERT INTO `student` VALUES (38, '', '', '');
INSERT INTO `student` VALUES (39, '', '', '');
INSERT INTO `student` VALUES (40, '', '', '');
INSERT INTO `student` VALUES (41, '', '', '');
INSERT INTO `student` VALUES (42, '', '', '');
INSERT INTO `student` VALUES (43, '', '', '');
INSERT INTO `student` VALUES (44, '', '', '');
INSERT INTO `student` VALUES (45, '', '', '');
INSERT INTO `student` VALUES (46, '', '', '');
INSERT INTO `student` VALUES (47, '', '', '');
INSERT INTO `student` VALUES (48, '', '', '');
INSERT INTO `student` VALUES (49, '', '', '');
INSERT INTO `student` VALUES (50, '', '', '');
INSERT INTO `student` VALUES (51, '', '', '');
INSERT INTO `student` VALUES (52, '', '', '');
INSERT INTO `student` VALUES (53, '', '', '');
INSERT INTO `student` VALUES (54, '', '', '');
INSERT INTO `student` VALUES (55, '', '', '');
INSERT INTO `student` VALUES (56, '', '', '');
INSERT INTO `student` VALUES (57, '', '', '');
INSERT INTO `student` VALUES (58, '', '', '');
INSERT INTO `student` VALUES (59, '', '', '');
INSERT INTO `student` VALUES (60, '', '', '');
INSERT INTO `student` VALUES (61, '', '', '');
INSERT INTO `student` VALUES (62, '', '', '');
INSERT INTO `student` VALUES (63, 'test', 'test', 'test');
INSERT INTO `student` VALUES (64, 'test', 'test', 'test');
INSERT INTO `student` VALUES (65, '', '', '');
INSERT INTO `student` VALUES (66, '', '', '');
INSERT INTO `student` VALUES (67, '', '', '');
INSERT INTO `student` VALUES (68, 'test', 'test', 'test');
INSERT INTO `student` VALUES (69, '', '', '');
INSERT INTO `student` VALUES (70, '', '', '');
INSERT INTO `student` VALUES (71, '', '', '');
INSERT INTO `student` VALUES (72, '', '', '');
INSERT INTO `student` VALUES (73, '', '', '');
INSERT INTO `student` VALUES (74, '', '', '');
INSERT INTO `student` VALUES (75, '', '', '');
INSERT INTO `student` VALUES (76, '', '', '');

-- --------------------------------------------------------

-- 
-- 資料表格式： `users`
-- 

CREATE TABLE `users` (
  `No` int(11) NOT NULL auto_increment,
  `Name` char(10) collate utf8_unicode_ci default NULL,
  `PassWord` char(10) collate utf8_unicode_ci default NULL,
  `Tel` char(20) collate utf8_unicode_ci default NULL,
  `Bir` char(10) collate utf8_unicode_ci default NULL,
  `Address` char(50) collate utf8_unicode_ci default NULL,
  `Email` char(20) collate utf8_unicode_ci default NULL,
  PRIMARY KEY  (`No`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

-- 
-- 列出以下資料庫的數據： `users`
-- 

INSERT INTO `users` VALUES (1, 'NONE', '10', '500000', '12345', 'sdfsg', 'sdfsg');
INSERT INTO `users` VALUES (2, 'NONE', '10', '500000', '12345', 'sdfsg', 'sdfsg');
INSERT INTO `users` VALUES (3, 'NONE', 'abcde', '500000', '12345', 'sdfsg', 'sdfsg');
INSERT INTO `users` VALUES (4, 'NONE', '10', '500000', '12345', 'sdfsg', 'sdfsg');
INSERT INTO `users` VALUES (5, 'NONE', '10', '500000', '12345', 'sdfsg', 'sdfsg');
INSERT INTO `users` VALUES (6, 'f', 'g', 'g', 's', '1', '2');
