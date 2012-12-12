-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 21, 2010 at 10:27 PM
-- Server version: 5.1.50
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gala`
--

-- --------------------------------------------------------

--
-- Table structure for table `chicken`
--

CREATE TABLE IF NOT EXISTS `chicken` (
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chicken`
--

INSERT INTO `chicken` (`c1`, `c2`, `c3`, `c4`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course1`
--

CREATE TABLE IF NOT EXISTS `course1` (
  `c1` int(11) NOT NULL DEFAULT '0',
  `c2` int(11) NOT NULL DEFAULT '0',
  `c3` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course1`
--

INSERT INTO `course1` (`c1`, `c2`, `c3`) VALUES
(1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course2`
--

CREATE TABLE IF NOT EXISTS `course2` (
  `c1` int(11) NOT NULL DEFAULT '0',
  `c2` int(11) NOT NULL DEFAULT '0',
  `c3` int(11) NOT NULL DEFAULT '0',
  `c4` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course2`
--

INSERT INTO `course2` (`c1`, `c2`, `c3`, `c4`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course3`
--

CREATE TABLE IF NOT EXISTS `course3` (
  `c1` int(11) NOT NULL DEFAULT '0',
  `c2` int(11) NOT NULL DEFAULT '0',
  `c3` int(11) NOT NULL DEFAULT '0',
  `c4` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course3`
--

INSERT INTO `course3` (`c1`, `c2`, `c3`, `c4`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rice`
--

CREATE TABLE IF NOT EXISTS `rice` (
  `r1` int(11) NOT NULL,
  `r2` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `r4` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rice`
--

INSERT INTO `rice` (`r1`, `r2`, `r3`, `r4`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `starter`
--

CREATE TABLE IF NOT EXISTS `starter` (
  `s1` int(11) NOT NULL DEFAULT '0',
  `s2` int(11) NOT NULL DEFAULT '0',
  `s3` int(11) NOT NULL DEFAULT '0',
  `s4` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `starter`
--

INSERT INTO `starter` (`s1`, `s2`, `s3`, `s4`) VALUES
(2, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sweet`
--

CREATE TABLE IF NOT EXISTS `sweet` (
  `s1` int(11) NOT NULL,
  `s2` int(11) NOT NULL,
  `s3` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sweet`
--

INSERT INTO `sweet` (`s1`, `s2`, `s3`) VALUES
(1, 0, 0);
