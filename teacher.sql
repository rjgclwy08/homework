-- phpMyAdmin SQL Dump
-- version 2.11.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 03 月 02 日 05:12
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `phys_teacher`
--

-- --------------------------------------------------------

--
-- 表的结构 `student_pj`
--

DROP TABLE IF EXISTS `student_pj`;
CREATE TABLE IF NOT EXISTS `student_pj` (
  `uni_id` int(11) NOT NULL auto_increment,
  `teacher_id` varchar(255) collate utf8_unicode_ci NOT NULL,
  `xq` varchar(255) collate utf8_unicode_ci NOT NULL,
  `kc` varchar(255) collate utf8_unicode_ci NOT NULL,
  `pjf` int(11) NOT NULL,
  PRIMARY KEY  (`uni_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `teacher_award`
--

DROP TABLE IF EXISTS `teacher_award`;
CREATE TABLE IF NOT EXISTS `teacher_award` (
  `uni_id` int(11) NOT NULL auto_increment,
  `teacher_id` varchar(255) collate utf8_unicode_ci NOT NULL,
  `time` date NOT NULL,
  `p_name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `jb` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`uni_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `teacher_bk`
--

DROP TABLE IF EXISTS `teacher_bk`;
CREATE TABLE IF NOT EXISTS `teacher_bk` (
  `uni_id` int(11) NOT NULL auto_increment,
  `teacher_id` varchar(255) collate utf8_unicode_ci NOT NULL,
  `xq` varchar(255) collate utf8_unicode_ci NOT NULL,
  `kcm` varchar(255) collate utf8_unicode_ci NOT NULL,
  `kcxz` varchar(255) collate utf8_unicode_ci NOT NULL,
  `class` varchar(255) collate utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `zks` int(11) NOT NULL,
  `zhks` int(10) NOT NULL,
  `bzks` int(11) NOT NULL,
  `pjf` int(10) NOT NULL,
  PRIMARY KEY  (`uni_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- 表的结构 `teacher_bl`
--

DROP TABLE IF EXISTS `teacher_bl`;
CREATE TABLE IF NOT EXISTS `teacher_bl` (
  `uni_id` int(11) NOT NULL auto_increment,
  `teacher_id` varchar(255) collate utf8_unicode_ci NOT NULL,
  `xq` varchar(255) collate utf8_unicode_ci NOT NULL,
  `nj` varchar(255) collate utf8_unicode_ci NOT NULL,
  `zy` varchar(255) collate utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY  (`uni_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `teacher_info`
--

DROP TABLE IF EXISTS `teacher_info`;
CREATE TABLE IF NOT EXISTS `teacher_info` (
  `name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `id` varchar(255) collate utf8_unicode_ci NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `birthday` date NOT NULL,
  `xl` varchar(255) collate utf8_unicode_ci NOT NULL,
  `zc` varchar(255) collate utf8_unicode_ci NOT NULL,
  `zw` varchar(255) collate utf8_unicode_ci default NULL,
  `phone` varchar(255) collate utf8_unicode_ci NOT NULL,
  `email` varchar(255) collate utf8_unicode_ci NOT NULL,
  `jx` text collate utf8_unicode_ci,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


-- --------------------------------------------------------

--
-- 表的结构 `teacher_project`
--

DROP TABLE IF EXISTS `teacher_project`;
CREATE TABLE IF NOT EXISTS `teacher_project` (
  `uni_id` int(11) NOT NULL auto_increment,
  `teacher_id` varchar(255) collate utf8_unicode_ci NOT NULL,
  `term` varchar(255) collate utf8_unicode_ci NOT NULL,
  `p_name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `jb` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`uni_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `teacher_release`
--

DROP TABLE IF EXISTS `teacher_release`;
CREATE TABLE IF NOT EXISTS `teacher_release` (
  `uni_id` int(11) NOT NULL auto_increment,
  `teacher_id` varchar(255) collate utf8_unicode_ci NOT NULL,
  `time` date NOT NULL,
  `q_name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `p_name` varchar(255) collate utf8_unicode_ci NOT NULL,
  `pm` varchar(255) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`uni_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;
