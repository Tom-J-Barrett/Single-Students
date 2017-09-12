-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2016 at 02:10 AM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `group19db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `USERNAME` varchar(15) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`USERNAME`, `PASSWORD`) VALUES
('admin', '$1$PQsphKAz$gHzkaDjo0AWlGHTihgV/01'),
('Jack_D', '$2a$04$AonGQliXyIBkJPdr30tvNORGY0Lk0mmM2DFwrPYL1sw...'),
('Tom141', '$2a$04$AonGQliXyIBkJPdr30tvNORGY0Lk0mmM2DFwrPYL1swq4LPzf7Pvy'),
('Will_F', '$2a$04$AonGQliXyIBkJPdr30tvNORGY0Lk0mmM2DFwrPYL1sw...');

-- --------------------------------------------------------

--
-- Table structure for table `banned`
--

CREATE TABLE IF NOT EXISTS `banned` (
  `USERNAME` varchar(15) NOT NULL,
  `EMAIL` varchar(35) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bio`
--

CREATE TABLE IF NOT EXISTS `bio` (
  `USERNAME` varchar(15) NOT NULL,
  `INFO` varchar(150) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bodytype`
--

CREATE TABLE IF NOT EXISTS `bodytype` (
  `BODYNUMBER` int(3) NOT NULL,
  `BODYNAME` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`BODYNUMBER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bodytype`
--

INSERT INTO `bodytype` (`BODYNUMBER`, `BODYNAME`) VALUES
(1, 'Slim'),
(2, 'Muscular'),
(3, 'Skinny'),
(4, 'Athletic '),
(5, 'Large'),
(6, 'Chubby'),
(7, 'Average'),
(8, 'Fit');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
  `USERNAME` varchar(15) NOT NULL,
  `NAMECARD` varchar(30) NOT NULL,
  `CARDMONTH` varchar(10) NOT NULL,
  `NUMBER` varchar(60) NOT NULL,
  `CVV` varchar(60) NOT NULL,
  `TYPE` varchar(10) NOT NULL,
  `CARDYEAR` varchar(10) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE IF NOT EXISTS `college` (
  `COLLEGENUMBER` int(3) NOT NULL,
  `COLLEGENAME` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`COLLEGENUMBER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`COLLEGENUMBER`, `COLLEGENAME`) VALUES
(1, 'UL'),
(2, 'LIT'),
(3, 'UCC'),
(4, 'UCD'),
(5, 'DCU'),
(6, 'CIT'),
(7, 'DIT'),
(8, 'GMIT'),
(9, 'UCG'),
(10, 'OTHER');

-- --------------------------------------------------------

--
-- Table structure for table `county`
--

CREATE TABLE IF NOT EXISTS `county` (
  `COUNTYNUMBER` int(3) NOT NULL,
  `COUNTYNAME` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`COUNTYNUMBER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `county`
--

INSERT INTO `county` (`COUNTYNUMBER`, `COUNTYNAME`) VALUES
(1, 'clare'),
(2, 'antrim'),
(3, 'armagh'),
(4, 'carlow'),
(5, 'cavan'),
(6, 'cork'),
(7, 'derry'),
(8, 'donegal'),
(9, 'down'),
(10, 'dublin'),
(11, 'fermanagh'),
(12, 'galway'),
(13, 'kerry'),
(14, 'kildare'),
(15, 'kilkenny'),
(16, 'laois'),
(17, 'limerick'),
(18, 'leitrim'),
(19, 'longford'),
(20, 'louth'),
(21, 'mayo'),
(22, 'meath'),
(23, 'monaghan'),
(24, 'offaly'),
(25, 'roscommon'),
(26, 'sligo'),
(27, 'tipperary'),
(28, 'tyrone'),
(29, 'waterford'),
(30, 'westmeath'),
(31, 'wexford'),
(32, 'wicklow');

-- --------------------------------------------------------

--
-- Table structure for table `eyecolors`
--

CREATE TABLE IF NOT EXISTS `eyecolors` (
  `EYENUMBER` int(3) NOT NULL AUTO_INCREMENT,
  `EYECOLOR` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`EYENUMBER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `eyecolors`
--

INSERT INTO `eyecolors` (`EYENUMBER`, `EYECOLOR`) VALUES
(1, 'Blue'),
(2, 'Grey'),
(3, 'Green'),
(4, 'Brown'),
(5, 'Hazel'),
(6, 'Olive');

-- --------------------------------------------------------

--
-- Table structure for table `haircolors`
--

CREATE TABLE IF NOT EXISTS `haircolors` (
  `HAIRNUMBER` int(3) NOT NULL,
  `HAIRCOLOR` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`HAIRNUMBER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `haircolors`
--

INSERT INTO `haircolors` (`HAIRNUMBER`, `HAIRCOLOR`) VALUES
(1, 'Brown'),
(2, 'Blond'),
(3, 'Black'),
(4, 'Darkbrown'),
(5, 'Light Brown'),
(6, 'Dark Blond'),
(7, 'Light Blond'),
(8, 'Strawberry Blond'),
(9, 'Red'),
(10, 'Dyed'),
(11, 'Bald');

-- --------------------------------------------------------

--
-- Table structure for table `hairlengths`
--

CREATE TABLE IF NOT EXISTS `hairlengths` (
  `HAIRLENNUMBER` int(11) NOT NULL,
  `HAIRLENNAME` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`HAIRLENNUMBER`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hairlengths`
--

INSERT INTO `hairlengths` (`HAIRLENNUMBER`, `HAIRLENNAME`) VALUES
(1, 'Short'),
(2, 'Long'),
(3, 'Middle');

-- --------------------------------------------------------

--
-- Table structure for table `likeoptions`
--

CREATE TABLE IF NOT EXISTS `likeoptions` (
  `LIKENUMBER` int(3) NOT NULL AUTO_INCREMENT,
  `LIKENAME` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`LIKENUMBER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `likeoptions`
--

INSERT INTO `likeoptions` (`LIKENUMBER`, `LIKENAME`) VALUES
(1, 'American Football'),
(2, 'Art'),
(3, 'Athletics'),
(4, 'Badminton'),
(5, 'Basketball'),
(6, 'Camping'),
(7, 'Climbing'),
(8, 'Clubbing'),
(9, 'Coding'),
(10, 'Cricket'),
(11, 'Cycling'),
(12, 'Dance'),
(13, 'Diving'),
(14, 'Driving'),
(15, 'Drama'),
(16, 'Eating'),
(17, 'Fashion'),
(18, 'Fishing'),
(19, 'Frisbee'),
(20, 'GAA'),
(21, 'Gaming'),
(22, 'Golf'),
(23, 'Handball'),
(24, 'Hiking'),
(25, 'Hockey'),
(26, 'Horseriding'),
(27, 'Kayaking'),
(28, 'Movies'),
(29, 'Music'),
(30, 'Netball'),
(31, 'Netflix'),
(32, 'Reading'),
(33, 'Rugby'),
(34, 'Running'),
(35, 'Singing'),
(36, 'Skateboarding'),
(37, 'Skiing'),
(38, 'Soccer'),
(39, 'Socializing'),
(40, 'Surfing'),
(41, 'Swimming'),
(42, 'Tennis'),
(43, 'Walking');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `USERNAME` varchar(15) NOT NULL,
  `HOBBY` int(3) NOT NULL,
  `HOBBY2` int(3) NOT NULL,
  `HOBBY3` int(3) NOT NULL,
  `HOBBY4` int(3) NOT NULL,
  `HOBBY5` int(2) NOT NULL,
  PRIMARY KEY (`USERNAME`),
  KEY `likeIndex` (`USERNAME`),
  KEY `FK_LIKES_LIKEOPTIONS` (`HOBBY2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `USERNAME` varchar(15) NOT NULL,
  `COLLEGE` int(3) NOT NULL,
  `CITY` varchar(20) NOT NULL,
  `COUNTY` int(3) NOT NULL,
  PRIMARY KEY (`USERNAME`),
  KEY `FK_LOCATION_COLLEGE` (`COLLEGE`),
  KEY `FK_LOCATION_COUNTY` (`COUNTY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personality`
--

CREATE TABLE IF NOT EXISTS `personality` (
  `USERNAME` varchar(15) NOT NULL,
  `TRAIT` int(3) NOT NULL,
  `TRAIT2` int(3) NOT NULL,
  `TRAIT3` int(3) NOT NULL,
  PRIMARY KEY (`USERNAME`),
  KEY `personIndex` (`USERNAME`),
  KEY `FK_PERSONALITY_PERSONALITYOPTIONS` (`TRAIT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personalityoptions`
--

CREATE TABLE IF NOT EXISTS `personalityoptions` (
  `PERSONALITYNUMBER` int(3) NOT NULL AUTO_INCREMENT,
  `PERSONALITYTRAIT` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`PERSONALITYNUMBER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `personalityoptions`
--

INSERT INTO `personalityoptions` (`PERSONALITYNUMBER`, `PERSONALITYTRAIT`) VALUES
(1, 'Adventurous'),
(2, 'Ambitious'),
(3, 'Charismatic'),
(4, 'Charming'),
(5, 'Clever'),
(6, 'Clumsy'),
(7, 'Confident'),
(8, 'Enthuasiastic'),
(9, 'Friendly'),
(10, 'Fun'),
(11, 'Funny'),
(12, 'Generous'),
(13, 'Happy'),
(14, 'Hardworking'),
(15, 'Kind'),
(16, 'Lazy'),
(17, 'Optimistic'),
(18, 'Outgoing'),
(19, 'Quiet'),
(20, 'Relaxed'),
(21, 'Smart'),
(22, 'Stylish'),
(23, 'Trustworthy'),
(24, 'Witty');

-- --------------------------------------------------------

--
-- Table structure for table `physical`
--

CREATE TABLE IF NOT EXISTS `physical` (
  `USERNAME` varchar(15) NOT NULL,
  `EYES` int(3) NOT NULL,
  `HAIR` int(3) NOT NULL,
  `HAIRLEN` int(3) NOT NULL,
  `BODY` int(3) NOT NULL,
  `HEIGHT` int(3) NOT NULL,
  `ETHNICITY` int(3) NOT NULL,
  PRIMARY KEY (`USERNAME`),
  KEY `FK_PHYSICAL_BODYTYPE` (`BODY`),
  KEY `FK_PHYSICAL_EYECOLORS` (`EYES`),
  KEY `FK_PHYSICAL_HAIRCOLORS` (`HAIR`),
  KEY `FK_PHYSICAL_HAIRLENGTHS` (`HAIRLEN`),
  KEY `FK_PHYSICAL_HEIGHT` (`HEIGHT`),
  KEY `FK_PHYSICAL_SKINTONES` (`ETHNICITY`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `USERNAME` varchar(60) NOT NULL,
  `FORENAME` varchar(15) NOT NULL,
  `SURNAME` varchar(20) NOT NULL,
  `PASSWORD` varchar(60) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `PREFERENCE` varchar(15) NOT NULL,
  `SEX` varchar(15) NOT NULL,
  `IMAGE` varchar(60) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reported`
--

CREATE TABLE IF NOT EXISTS `reported` (
  `USERNAME` varchar(15) NOT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `REQUEST_ID` int(10) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(15) NOT NULL,
  `USER` varchar(15) NOT NULL,
  `LEVEL` varchar(10) NOT NULL,
  PRIMARY KEY (`REQUEST_ID`),
  KEY `USERNAME_INDEX` (`USERNAME`) USING BTREE,
  KEY `USER_INDEX` (`USER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `skintones`
--

CREATE TABLE IF NOT EXISTS `skintones` (
  `TONENUMBER` int(3) NOT NULL AUTO_INCREMENT,
  `TONE` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`TONENUMBER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `skintones`
--

INSERT INTO `skintones` (`TONENUMBER`, `TONE`) VALUES
(1, 'Fair'),
(2, 'Olive'),
(3, 'Very Fair'),
(4, 'Black');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bio`
--
ALTER TABLE `bio`
  ADD CONSTRAINT `FK_BIO_REGISTER` FOREIGN KEY (`USERNAME`) REFERENCES `register` (`USERNAME`) ON DELETE CASCADE;

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `FK_CARD_REGISTER` FOREIGN KEY (`USERNAME`) REFERENCES `register` (`USERNAME`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `FK_LIKES_REGISTER` FOREIGN KEY (`USERNAME`) REFERENCES `register` (`USERNAME`) ON DELETE CASCADE;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `FK_LOCATION_COLLEGE` FOREIGN KEY (`COLLEGE`) REFERENCES `college` (`COLLEGENUMBER`),
  ADD CONSTRAINT `FK_LOCATION_COUNTY` FOREIGN KEY (`COUNTY`) REFERENCES `county` (`COUNTYNUMBER`),
  ADD CONSTRAINT `FK_LOCATION_REGISTER` FOREIGN KEY (`USERNAME`) REFERENCES `register` (`USERNAME`) ON DELETE CASCADE;

--
-- Constraints for table `personality`
--
ALTER TABLE `personality`
  ADD CONSTRAINT `FK_PERSONALITY_REGISTER` FOREIGN KEY (`USERNAME`) REFERENCES `register` (`USERNAME`) ON DELETE CASCADE;

--
-- Constraints for table `physical`
--
ALTER TABLE `physical`
  ADD CONSTRAINT `FK_PHYSICAL_SKINTONE` FOREIGN KEY (`ETHNICITY`) REFERENCES `skintones` (`TONENUMBER`),
  ADD CONSTRAINT `FK_PHYSICAL_BODYTYPE` FOREIGN KEY (`BODY`) REFERENCES `bodytype` (`BODYNUMBER`),
  ADD CONSTRAINT `FK_PHYSICAL_EYECOLORS` FOREIGN KEY (`EYES`) REFERENCES `eyecolors` (`EYENUMBER`),
  ADD CONSTRAINT `FK_PHYSICAL_HAIRCOLORS` FOREIGN KEY (`HAIR`) REFERENCES `haircolors` (`HAIRNUMBER`),
  ADD CONSTRAINT `FK_PHYSICAL_HAIRLENGTHS` FOREIGN KEY (`HAIRLEN`) REFERENCES `hairlengths` (`HAIRLENNUMBER`),
  ADD CONSTRAINT `FK_PHYSICAL_REGISTER` FOREIGN KEY (`USERNAME`) REFERENCES `register` (`USERNAME`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
