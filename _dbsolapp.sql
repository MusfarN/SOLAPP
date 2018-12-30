-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2018 at 08:00 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `_dbsolapp`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SPGETLOGINDETAILS`(IN `inuserid` varchar(50),IN `inpassword` varchar(100))
BEGIN
DECLARE userCount int;
DECLARE outRetVal int;
SELECT 
    COUNT(*) AS userCount
FROM
    TBLUSER
WHERE
    lower(USER_ID) = lower(inuserid)
        AND PASSWORD = inpassword
        AND IS_ACTIVE = 1
        AND STATUS = 1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SPGETSYSTEMDETAILS`()
BEGIN
SELECT SYSTEM_NAME AS SYSTEMNAME, 
SITE_TITLE AS SITETITLE
FROM TBLSYSTEMDETAILS;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SPGETUSERDETAILS`(IN `inuserid` varchar(50))
BEGIN
SELECT 
    CONCAT(TU.FIRSTNAME, ' ', TU.LASTNAME) AS USERNAME,
    TU.EMAIL_ID AS EMAILID,
    TU.CONTACT_NUMBER AS CONTACTNUMBER
FROM
    TBLUSER TU
WHERE LOWER(TU.USER_ID) = LOWER(inuserid);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SPGETUSERPERMISSIONS`(IN `inuserid` varchar(50))
BEGIN
DECLARE systemURL varchar(20);
SELECT 
    SYSTEM_NAME
INTO systemURL FROM
    tblsystemdetails;
SELECT 
    TCP.DISPLAY_NAME AS DISPLAYNAME,
    CONCAT('/', systemURL, TCP.PAGE_URL) AS PAGEURL,
    TCP.PARENT_ID AS PARENTID,
    TCP.FONT_AWESOME_ICON AS FAICON
FROM
    tblcfgguipermission TCP
        INNER JOIN
    tblguirolepermission TRP ON TRP.PERMISSION_ID = TCP.PERMISSION_ID
        INNER JOIN
    tblguirole TR ON TR.ROLE_ID = TRP.ROLE_ID
        INNER JOIN
    tbluser TU ON TR.ROLE_ID = TU.ROLE_ID
WHERE
    LOWER(TU.USER_ID) = LOWER(inuserid)
        AND TCP.IS_VISIBLE = 1
ORDER BY TCP.SEQUENCE;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tblcfgguipermission`
--

CREATE TABLE IF NOT EXISTS `tblcfgguipermission` (
  `PERMISSION_ID` varchar(50) NOT NULL,
  `DISPLAY_NAME` varchar(50) NOT NULL,
  `IS_VISIBLE` int(11) NOT NULL DEFAULT '1' COMMENT 'Value can be 0 or 1. If 1 column will be shown on UI.',
  `PAGE_URL` varchar(100) NOT NULL,
  `PARENT_ID` varchar(50) DEFAULT NULL,
  `FONT_AWESOME_ICON` varchar(100) DEFAULT NULL,
  `SEQUENCE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcfgguipermission`
--

INSERT INTO `tblcfgguipermission` (`PERMISSION_ID`, `DISPLAY_NAME`, `IS_VISIBLE`, `PAGE_URL`, `PARENT_ID`, `FONT_AWESOME_ICON`, `SEQUENCE`) VALUES
('MANAGE_FORM', 'MANAGE FORMS', 1, '/p_forms.php', NULL, 'fa fa-list-ul', 1),
('REPORT_MODULE', 'REPORTS', 1, '/p_login.php', NULL, 'fa fa-clipboard', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblguirole`
--

CREATE TABLE IF NOT EXISTS `tblguirole` (
  `ROLE_ID` varchar(50) NOT NULL,
  `DISPLAY_NAME` varchar(50) NOT NULL,
  `IS_ACTIVE` int(11) NOT NULL DEFAULT '1' COMMENT 'Value can be 0 or 1. If 1 Role is Active one.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblguirole`
--

INSERT INTO `tblguirole` (`ROLE_ID`, `DISPLAY_NAME`, `IS_ACTIVE`) VALUES
('teamEventManagement', 'Event Management Team', 1),
('teamFinance', 'Finance Team', 1),
('teamMarketing', 'Marketing Team', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblguirolepermission`
--

CREATE TABLE IF NOT EXISTS `tblguirolepermission` (
  `PERMISSION_ID` varchar(50) NOT NULL,
  `ROLE_ID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblguirolepermission`
--

INSERT INTO `tblguirolepermission` (`PERMISSION_ID`, `ROLE_ID`) VALUES
('MANAGE_FORM', 'teamMarketing'),
('REPORT_MODULE', 'teamMarketing');

-- --------------------------------------------------------

--
-- Table structure for table `tblsystemdetails`
--

CREATE TABLE IF NOT EXISTS `tblsystemdetails` (
  `SYSTEM_NAME` varchar(20) NOT NULL DEFAULT 'mfs system',
  `ROW_ID` int(11) NOT NULL,
  `SITE_TITLE` varchar(20) NOT NULL DEFAULT 'MFS SYSTEM'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsystemdetails`
--

INSERT INTO `tblsystemdetails` (`SYSTEM_NAME`, `ROW_ID`, `SITE_TITLE`) VALUES
('SOLAPP', 1, 'SOL APP');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE IF NOT EXISTS `tbluser` (
  `USER_ID` varchar(50) NOT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `ROLE_ID` varchar(50) NOT NULL,
  `FIRSTNAME` varchar(50) DEFAULT NULL,
  `LASTNAME` varchar(50) DEFAULT NULL,
  `CONTACT_NUMBER` varchar(50) DEFAULT NULL,
  `EMAIL_ID` varchar(50) DEFAULT NULL,
  `IS_ACTIVE` int(11) DEFAULT '1' COMMENT 'Value can be 0 or 1. If 1 USER is active.',
  `STATUS` int(11) DEFAULT '1' COMMENT 'Value can be 0 or 1. If 1 USER is active and not locked.'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`USER_ID`, `PASSWORD`, `ROLE_ID`, `FIRSTNAME`, `LASTNAME`, `CONTACT_NUMBER`, `EMAIL_ID`, `IS_ACTIVE`, `STATUS`) VALUES
('marketingUser', '3051fef103f828697a9717b022b6988d', 'teamMarketing', 'Marketing', 'Admin', '03002146167', 'someemail@domain.com', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcfgguipermission`
--
ALTER TABLE `tblcfgguipermission`
  ADD PRIMARY KEY (`PERMISSION_ID`);

--
-- Indexes for table `tblguirole`
--
ALTER TABLE `tblguirole`
  ADD PRIMARY KEY (`ROLE_ID`);

--
-- Indexes for table `tblguirolepermission`
--
ALTER TABLE `tblguirolepermission`
  ADD PRIMARY KEY (`PERMISSION_ID`,`ROLE_ID`);

--
-- Indexes for table `tblsystemdetails`
--
ALTER TABLE `tblsystemdetails`
  ADD PRIMARY KEY (`ROW_ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblsystemdetails`
--
ALTER TABLE `tblsystemdetails`
  MODIFY `ROW_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
