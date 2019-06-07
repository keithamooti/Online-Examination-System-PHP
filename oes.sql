-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2019 at 11:53 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `oes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `qid` text NOT NULL,
  `ansid` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `qid`, `ansid`) VALUES
(1, '58027e82e62e3', '58027e82f2412'),
(2, '58027e833dd54', '58027e8347514'),
(3, '58027e8371483', '58027e838f19a'),
(4, '5cdd87def2731', '5cdd87df0af97'),
(5, '5cdd87df53318', '5cdd87df6af07');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `period` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `course_code`, `faculty`, `period`) VALUES
(1, 'Bachelor of Agriculture', 'GUA', 'Agriculture and Environment', 4);

-- --------------------------------------------------------

--
-- Table structure for table `course_unit`
--

CREATE TABLE IF NOT EXISTS `course_unit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_code` varchar(255) NOT NULL,
  `unit_name` varchar(255) NOT NULL,
  `unit_course_id` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `unit_year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `course_unit`
--

INSERT INTO `course_unit` (`id`, `unit_code`, `unit_name`, `unit_course_id`, `semester`, `unit_year`) VALUES
(1, 'GUA 1101', 'Animal Husbundry', 'GUA', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` text NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `eid` text NOT NULL,
  `cunit` varchar(255) NOT NULL,
  `score` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `history`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'keith@gmail.com', '6505042520d1fd87c853a2358a5869cf7c2bdd1c');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `qid` varchar(50) NOT NULL,
  `option` varchar(5000) NOT NULL,
  `optionid` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `qid`, `option`, `optionid`) VALUES
(1, '58027e82e62e3', 'Yes', '58027e82f2412'),
(2, '58027e82e62e3', 'No', '58027e82f2427'),
(3, '58027e82e62e3', 'Don''t want to', '58027e82f2433'),
(4, '58027e82e62e3', 'Why should I', '58027e82f243d'),
(5, '58027e833dd54', 'sonudoo', '58027e8347505'),
(6, '58027e833dd54', 'sunnygkp10', '58027e8347514'),
(7, '58027e833dd54', 'markzuckerberg', '58027e834751b'),
(8, '58027e833dd54', 'me', '58027e8347521'),
(9, '58027e8371483', 'sonudoo', '58027e838f19a'),
(10, '58027e8371483', 'sunnygkp10', '58027e838f1b0'),
(11, '58027e8371483', 'me', '58027e838f1ba'),
(12, '58027e8371483', 'markzuckerberg', '58027e838f1c4'),
(13, '5cdd87def2731', 'Keith', '5cdd87df0af75'),
(14, '5cdd87def2731', 'Oloya', '5cdd87df0af8c'),
(15, '5cdd87def2731', 'All of the above', '5cdd87df0af97'),
(16, '5cdd87def2731', 'none of the above', '5cdd87df0afa0'),
(17, '5cdd87df53318', 'Northern', '5cdd87df6af07'),
(18, '5cdd87df53318', 'Central', '5cdd87df6af1b'),
(19, '5cdd87df53318', 'Western', '5cdd87df6af24'),
(20, '5cdd87df53318', 'Eastern', '5cdd87df6af2f');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `eid` text NOT NULL,
  `qid` text NOT NULL,
  `qns` text NOT NULL,
  `choice` int(10) NOT NULL,
  `sn` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `eid`, `qid`, `qns`, `choice`, `sn`) VALUES
(1, '5802790f793b1', '58027e82e62e3', 'Have you read the README file?', 4, 1),
(2, '5802790f793b1', '58027e833dd54', 'Who is the Original creator of this quizzing site?', 4, 2),
(3, '5802790f793b1', '58027e8371483', 'Who improved the original version of this quizzing site?', 4, 3),
(4, '5cdd875c397fa', '5cdd87def2731', 'Who has Developed this system', 4, 1),
(5, '5cdd875c397fa', '5cdd87df53318', 'Which region is Gulu University', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE IF NOT EXISTS `quiz` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `eid` text NOT NULL,
  `cunit` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `correct` int(11) NOT NULL,
  `wrong` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `time` bigint(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `eid`, `cunit`, `title`, `correct`, `wrong`, `total`, `time`, `date`, `status`) VALUES
(1, '5cde549bafaf8', 'GUA 1101', 'Test 1', 2, 2, 3, 1, '0000-00-00 00:00:00', 'disabled');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE IF NOT EXISTS `rank` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `eid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `rank`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_answer`
--

CREATE TABLE IF NOT EXISTS `user_answer` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `qid` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  `correctans` varchar(50) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `user_answer`
--

