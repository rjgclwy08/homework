-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 12 月 20 日 14:39
-- 服务器版本: 5.1.50
-- PHP 版本: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `phys_teacher`
--

-- --------------------------------------------------------

--
-- 表的结构 `choice`
--

CREATE TABLE IF NOT EXISTS `choice` (
  `teacher_name` varchar(255) DEFAULT NULL,
  `teacher_id` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `student_name` varchar(255) DEFAULT NULL,
  `student_id` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `time` date DEFAULT NULL,
  `classtime` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `choice`
--

INSERT INTO `choice` (`teacher_name`, `teacher_id`, `student_name`, `student_id`, `time`, `classtime`) VALUES
('周岩', '05392', '张奇', '1100310106', '2001-01-01', '1'),
('周岩', '05392', '刘旭泽', '1110310106', '2001-01-01', '1'),
('李雄', '96543', '刘旭泽', '1110310106', '2013-12-24', '5-6'),
('周岩', '05392', '刘旭泽', '1110310106', '2001-01-01', '1');

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `student_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `student_id` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`student_name`, `student_id`) VALUES
('??', '11111'),
('??', '11111'),
('??', '11111'),
('??', '11111'),
('??', '11111'),
('a', '1'),
('??', '11111'),
('??', '110310106'),
('???', '1110310106'),
('???', '1110310106'),
('??', '1110310106');

-- --------------------------------------------------------

--
-- 表的结构 `student_pj`
--

CREATE TABLE IF NOT EXISTS `student_pj` (
  `uni_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xq` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pjf` int(11) NOT NULL,
  PRIMARY KEY (`uni_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `student_pj`
--

INSERT INTO `student_pj` (`uni_id`, `teacher_id`, `xq`, `kc`, `pjf`) VALUES
(1, '09435', '09', '计算机导论', 90);

-- --------------------------------------------------------

--
-- 表的结构 `teacher_award`
--

CREATE TABLE IF NOT EXISTS `teacher_award` (
  `uni_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` date NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uni_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `teacher_award`
--

INSERT INTO `teacher_award` (`uni_id`, `teacher_id`, `time`, `p_name`, `jb`) VALUES
(1, '126726', '2013-02-04', 'xxxx奖', 'xx级');

-- --------------------------------------------------------

--
-- 表的结构 `teacher_bk`
--

CREATE TABLE IF NOT EXISTS `teacher_bk` (
  `uni_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xq` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kcm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kcxz` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `zks` int(11) NOT NULL,
  `zhks` int(10) NOT NULL,
  `bzks` int(11) NOT NULL,
  `pjf` int(10) NOT NULL,
  PRIMARY KEY (`uni_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `teacher_bk`
--


-- --------------------------------------------------------

--
-- 表的结构 `teacher_bl`
--

CREATE TABLE IF NOT EXISTS `teacher_bl` (
  `uni_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `xq` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nj` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  PRIMARY KEY (`uni_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `teacher_bl`
--


-- --------------------------------------------------------

--
-- 表的结构 `teacher_info`
--

CREATE TABLE IF NOT EXISTS `teacher_info` (
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `birthday` date NOT NULL,
  `xl` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `zw` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jx` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `teacher_info`
--

INSERT INTO `teacher_info` (`name`, `id`, `sex`, `birthday`, `xl`, `zc`, `zw`, `phone`, `email`, `jx`) VALUES
('王强', '89032', 0, '1967-09-23', '博士', '教授', '主任', '17383743872', '38483246@qq.com', NULL),
('王芳', '09435', 1, '1978-09-30', '博士', '导师', '主任', '13598706743', '3135786@qq.com', NULL),
('张明', '89021', 0, '1980-10-10', '博士', '讲师', '教师', '18392037834', '187293020@qq.com', NULL),
('王明', '78123', 0, '1987-09-20', '博士', '教授', '主任', '12344428472', '14474633@qq.com', NULL),
('周岩', '05392', 0, '1980-01-01', '博士', '导师', '主任', '17829304536', '78902342@qq.com', NULL),
('李雄', '96543', 0, '1965-07-03', '博士', '教授', '副主任', '17539283623', '22377435@qq.com', NULL),
('李汉阳', '126726', 0, '1980-01-01', '博士', '副教授', '主任', '17286357279', '1235674@qq.com', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `teacher_project`
--

CREATE TABLE IF NOT EXISTS `teacher_project` (
  `uni_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `term` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uni_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `teacher_project`
--


-- --------------------------------------------------------

--
-- 表的结构 `teacher_release`
--

CREATE TABLE IF NOT EXISTS `teacher_release` (
  `uni_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` date NOT NULL,
  `q_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `p_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uni_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `teacher_release`
--

INSERT INTO `teacher_release` (`uni_id`, `teacher_id`, `time`, `q_name`, `p_name`, `pm`) VALUES
(1, '05392', '2013-04-05', 'xxxx', 'xxxx', '2'),
(2, '89021', '2012-12-12', 'as', 'as', '1'),
(3, '09435', '2012-09-08', 'ae', 'de', '1');

-- --------------------------------------------------------

--
-- 表的结构 `teacher_time`
--

CREATE TABLE IF NOT EXISTS `teacher_time` (
  `uni_id` int(11) DEFAULT NULL,
  `teacher_id` varchar(255) DEFAULT NULL,
  `time` date DEFAULT NULL,
  `classtime` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `teacher_time`
--

INSERT INTO `teacher_time` (`uni_id`, `teacher_id`, `time`, `classtime`) VALUES
(NULL, '09435', '2003-04-05', '6-9'),
(NULL, '09435', '2003-04-05', '6-9'),
(NULL, '89021', '2003-04-05', '6-9'),
(NULL, 'd', '2000-01-02', '1-2'),
(NULL, '05392', '2001-01-01', '1'),
(NULL, '96543', '2013-12-24', '5-6'),
(NULL, '126726', '2013-07-08', '6-9');
