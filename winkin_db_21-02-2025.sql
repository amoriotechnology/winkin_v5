-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 21, 2025 at 05:02 AM
-- Server version: 8.3.0
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `winkin_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_modules`
--

DROP TABLE IF EXISTS `access_modules`;
CREATE TABLE IF NOT EXISTS `access_modules` (
  `fld_accessid` int NOT NULL AUTO_INCREMENT,
  `fld_access_module` text NOT NULL,
  `fld_status` varchar(255) NOT NULL DEFAULT 'Active',
  `fld_created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fld_accessid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `access_modules`
--

INSERT INTO `access_modules` (`fld_accessid`, `fld_access_module`, `fld_status`, `fld_created_date`, `fld_modified_date`) VALUES
(1, 'Dashboard', 'Active', '2025-01-30 13:24:46', '2025-01-30 13:24:46'),
(2, 'Bookings', 'Active', '2025-01-30 13:24:46', '2025-01-30 13:24:46'),
(3, 'Staff', 'Active', '2025-01-30 13:25:06', '2025-01-30 13:25:06'),
(4, 'Customers', 'Active', '2025-01-30 13:25:06', '2025-01-30 13:25:06'),
(5, 'Coupons', 'Active', '2025-01-30 13:25:24', '2025-01-30 13:25:24'),
(6, 'Calander', 'Active', '2025-01-30 13:25:24', '2025-01-30 13:25:24'),
(7, 'Settings', 'Active', '2025-01-30 13:25:59', '2025-01-30 13:25:59'),
(8, 'Reports', 'Active', '2025-01-30 13:25:59', '2025-01-30 13:25:59'),
(9, 'Court Status', 'Active', '2025-02-10 04:50:33', '2025-02-10 04:50:33');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `fld_aid` int NOT NULL AUTO_INCREMENT,
  `fld_appointid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_payment_id` text,
  `fld_order_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `fld_signature` text,
  `fld_adate` date NOT NULL,
  `fld_atime` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_acustid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_astaffid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_acpid` int DEFAULT NULL,
  `fld_acppercent` varchar(10) DEFAULT NULL,
  `fld_acpamt` float DEFAULT NULL,
  `fld_aserv` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_aduring` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_arate` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_gst_amt` decimal(10,2) NOT NULL,
  `fld_pay_charge` decimal(10,2) NOT NULL,
  `fld_astatus` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'confirm, hold, cancel',
  `fld_acancel_date` datetime DEFAULT NULL,
  `fld_acancel_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_apaymode` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fld_apaystatus` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_abalance` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_booked_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_cancel_reason` text,
  `fld_anotes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `fld_conf_email` text,
  PRIMARY KEY (`fld_aid`),
  KEY `fld_acustid` (`fld_acustid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_meta`
--

DROP TABLE IF EXISTS `appointment_meta`;
CREATE TABLE IF NOT EXISTS `appointment_meta` (
  `fld_amid` int NOT NULL AUTO_INCREMENT,
  `fld_amappid` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Appointment ID',
  `fld_amsid` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'Service ID',
  `fld_amstaffid` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'Staff ID',
  `fld_amstaff_time` varchar(25) NOT NULL,
  `fld_amserv_name` varchar(80) NOT NULL,
  `fld_amserv_dura` varchar(50) NOT NULL,
  `fld_amserv_rate` varchar(50) NOT NULL,
  `fld_amstatus` varchar(15) NOT NULL,
  PRIMARY KEY (`fld_amid`),
  KEY `fld_amappid` (`fld_amappid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

DROP TABLE IF EXISTS `categorys`;
CREATE TABLE IF NOT EXISTS `categorys` (
  `fld_cateid` int NOT NULL AUTO_INCREMENT,
  `fld_catename` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_catetype` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_catestatus` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Active',
  `fld_catecreated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fld_cateid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`fld_cateid`, `fld_catename`, `fld_catetype`, `fld_catestatus`, `fld_catecreated_date`) VALUES
(1, 'Nail Care Services', 'Both', 'Active', '2024-12-05 16:37:35'),
(2, 'Nail Art and Design', 'Both', 'Active', '2024-12-05 16:49:47'),
(3, 'Polishing and Finishing', 'Both', 'Active', '2024-12-05 16:51:42'),
(4, 'Special Treatments', 'Both', 'Active', '2024-12-05 17:07:57'),
(5, 'Additional Service', 'Both', 'Active', '2024-12-06 16:23:18'),
(6, 'Packages', 'Both', 'Active', '2024-12-11 10:24:26'),
(7, 'Tests', 'Both', 'Active', '2024-12-31 15:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `countrycodes`
--

DROP TABLE IF EXISTS `countrycodes`;
CREATE TABLE IF NOT EXISTS `countrycodes` (
  `fld_id` int NOT NULL AUTO_INCREMENT,
  `fld_countrycode` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fld_countryname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fld_dialingcode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `required_length` int NOT NULL,
  PRIMARY KEY (`fld_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countrycodes`
--

INSERT INTO `countrycodes` (`fld_id`, `fld_countrycode`, `fld_countryname`, `fld_dialingcode`, `required_length`) VALUES
(1, 'US', 'United States', '+1 ', 10),
(2, 'CA', 'Canada', '+1 ', 0),
(3, 'GB', 'United Kingdom', '+44', 10),
(4, 'AU', 'Australia', '+61', 0),
(5, 'IN', 'India', '+91', 10),
(6, 'DE', 'Germany', '+49', 10),
(7, 'FR', 'France', '+33', 0),
(8, 'CN', 'China', '+86', 0),
(9, 'JP', 'Japan', '+81', 0),
(10, 'MX', 'Mexico', '+52', 0),
(11, 'BR', 'Brazil', '+55', 0),
(12, 'ZA', 'South Africa', '+27', 0),
(13, 'RU', 'Russia', '+7', 0),
(14, 'IT', 'Italy', '+39', 0),
(15, 'ES', 'Spain', '+34', 0),
(16, 'KR', 'South Korea', '+82', 0),
(17, 'TR', 'Turkey', '+90', 0),
(18, 'ID', 'Indonesia', '+62', 0),
(19, 'SA', 'Saudi Arabia', '+966', 0),
(20, 'AR', 'Argentina', '+54', 0),
(21, 'PK', 'Pakistan', '+92', 0),
(22, 'BD', 'Bangladesh', '+880', 0),
(23, 'VN', 'Vietnam', '+84', 0),
(24, 'PH', 'Philippines', '+63', 0),
(25, 'MY', 'Malaysia', '+60', 0),
(26, 'TH', 'Thailand', '+66', 0),
(27, 'EG', 'Egypt', '+20', 0),
(28, 'NG', 'Nigeria', '+234', 0),
(29, 'KE', 'Kenya', '+254', 0),
(30, 'ET', 'Ethiopia', '+251', 0),
(31, 'TZ', 'Tanzania', '+255', 0),
(32, 'UG', 'Uganda', '+256', 0),
(33, 'PL', 'Poland', '+48', 0),
(34, 'NL', 'Netherlands', '+31', 0),
(35, 'BE', 'Belgium', '+32', 0),
(36, 'SE', 'Sweden', '+46', 0),
(37, 'CH', 'Switzerland', '+41', 0),
(38, 'AT', 'Austria', '+43', 0),
(39, 'NO', 'Norway', '+47', 0),
(40, 'FI', 'Finland', '+358', 0),
(41, 'DK', 'Denmark', '+45', 0),
(42, 'IE', 'Ireland', '+353', 0),
(43, 'NZ', 'New Zealand', '+64', 0),
(44, 'SG', 'Singapore', '+65', 0),
(45, 'HK', 'Hong Kong', '+852', 0),
(46, 'IL', 'Israel', '+972', 0),
(47, 'AE', 'United Arab Emirates', '+971', 0),
(48, 'GR', 'Greece', '+30', 0),
(49, 'PT', 'Portugal', '+351', 0);

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `fld_cpid` int NOT NULL AUTO_INCREMENT,
  `fld_cpname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_cp_expdate` date NOT NULL,
  `fld_cp_percentage` varchar(10) NOT NULL,
  `fld_cplimit` int NOT NULL,
  `fld_cpused` int NOT NULL DEFAULT '0',
  `fld_cpstatus` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Active',
  `fld_cpflag` varchar(15) NOT NULL DEFAULT '1',
  `fld_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fld_cpid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`fld_cpid`, `fld_cpname`, `fld_cp_expdate`, `fld_cp_percentage`, `fld_cplimit`, `fld_cpused`, `fld_cpstatus`, `fld_cpflag`, `fld_created`, `fld_modified`) VALUES
(1, 'Test12', '2025-02-27', '10', 10, 7, 'Active', '1', '2025-01-18 10:28:45', '2025-01-18 10:28:45'),
(2, 'Test23', '2025-01-31', '20', 10, 10, 'Active', '1', '2025-01-18 10:59:51', '2025-01-18 10:59:51'),
(3, 'Test8045', '0000-00-00', '5', 2, 0, 'Active', '1', '2025-01-18 14:10:11', '2025-01-18 14:10:11'),
(4, 'Test80451903', '2025-01-25', '5', 2, 0, 'Active', '1', '2025-01-18 14:12:40', '2025-01-18 14:12:40'),
(5, 'Test8045', '2025-05-20', '5', 2, 0, 'Deactive', '1', '2025-01-18 14:13:22', '2025-01-18 14:13:22'),
(6, 'Winkin4567', '2025-05-20', '10', 15, 0, 'Active', '1', '2025-01-18 14:17:58', '2025-01-18 14:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `fld_id` int NOT NULL AUTO_INCREMENT,
  `fld_custid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_name` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_lastname` varchar(100) NOT NULL,
  `fld_phone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_phone_cc` varchar(20) NOT NULL,
  `fld_alternatephone` varchar(20) NOT NULL,
  `fld_alternatecc` varchar(20) NOT NULL,
  `fld_email` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_pass` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_dob` date NOT NULL,
  `fld_maritial_sts` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_anniversary` date DEFAULT NULL,
  `fld_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_type` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_status` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Active',
  `fld_notes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_otp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fld_otp_date` datetime DEFAULT NULL,
  `fld_wishes` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_wishdate` datetime DEFAULT NULL,
  `fld_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_updated_date` date DEFAULT NULL,
  PRIMARY KEY (`fld_id`),
  UNIQUE KEY `cust_id` (`fld_custid`),
  UNIQUE KEY `cemail` (`fld_email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `day_close`
--

DROP TABLE IF EXISTS `day_close`;
CREATE TABLE IF NOT EXISTS `day_close` (
  `fld_id` int NOT NULL AUTO_INCREMENT,
  `fld_date` date NOT NULL,
  `fld_opening_balance` decimal(10,2) NOT NULL,
  `fld_closing_balance` varchar(255) DEFAULT NULL,
  `fld_opening_notes` text,
  `fld_closing_notes` text,
  `fld_cash_amount` decimal(10,2) DEFAULT NULL,
  `fld_paymode` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 => Not Closed, 1 => Closed',
  `fld_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fld_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

DROP TABLE IF EXISTS `leaves`;
CREATE TABLE IF NOT EXISTS `leaves` (
  `fld_lid` int NOT NULL AUTO_INCREMENT,
  `fld_create_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_ldate` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_lperson` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_lstaff_id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_applied_by` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_lreason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_lrej_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_req_reject` text NOT NULL,
  `fld_lstatus` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_modified_date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fld_lid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`fld_lid`, `fld_create_date`, `fld_ldate`, `fld_lperson`, `fld_lstaff_id`, `fld_applied_by`, `fld_lreason`, `fld_lrej_reason`, `fld_req_reject`, `fld_lstatus`, `fld_modified_date`) VALUES
(1, '2025-01-09 11:45:53', 'Jan 13/2025 to Jan 15/2025', 'Madan', '3', '1', 'holiday leave', '', '', 'Approved', NULL),
(2, '2025-01-09 11:46:27', 'Jan 16/2025 to Jan 18/2025', 'Madan', '3', '1', 'Holiday', '', 'No need', 'Approved', NULL),
(3, '2025-01-09 11:53:40', 'Jan 19/2025 to Jan 21/2025', 'Madan', '3', '1', 'Test', '', '', 'Deleted', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `fld_pid` int NOT NULL AUTO_INCREMENT,
  `fld_appid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_prate` float NOT NULL,
  `fld_ppaid` float NOT NULL,
  `fld_pbalance` float NOT NULL,
  `fld_pdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_phistory` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`fld_pid`),
  KEY `fld_appid` (`fld_appid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `fld_sid` int NOT NULL AUTO_INCREMENT,
  `fld_scate` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_sname` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_sduration` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_srate` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_stype` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'like male or female',
  `fld_sdesc` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_sstatus` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Active',
  `fld_screated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fld_sid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `fld_setid` int NOT NULL AUTO_INCREMENT,
  `fld_cmpyname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_cmpyphone` varchar(20) NOT NULL,
  `fld_cmpyemail` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_cmpyaddr` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_cmpylogo` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_cmpyfav` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_weekdays` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_hours` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '08:00 - 18:00',
  `fld_bdaysubj` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_bdaytemp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_annisubj` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_annitemp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_host` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_fromemail` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_emailpass` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_action` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Active',
  `fld_created_date` datetime NOT NULL,
  `fld_modified_date` datetime DEFAULT NULL,
  PRIMARY KEY (`fld_setid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`fld_setid`, `fld_cmpyname`, `fld_cmpyphone`, `fld_cmpyemail`, `fld_cmpyaddr`, `fld_cmpylogo`, `fld_cmpyfav`, `fld_weekdays`, `fld_hours`, `fld_bdaysubj`, `fld_bdaytemp`, `fld_annisubj`, `fld_annitemp`, `fld_host`, `fld_fromemail`, `fld_emailpass`, `fld_action`, `fld_created_date`, `fld_modified_date`) VALUES
(1, 'WINKIN', '', 'winkin@gmail.com', 'chennai, India', 'winkin_logo.png', 'winkin_fav.png', '[\"Sun\",\"Mon\",\"Tue\",\"Wed\",\"Thu\",\"Fri\",\"Sat\"]', '06:00 - 23:00', 'Happy Birthday to', 'May the year ahead bring you continued success, good health, and endless moments of happiness.    I hope today is just the beginning of a beautiful chapter in your life!   Enjoy every moment of your day, and know that I’m thinking of you and sending my warmest wishes your way. Have an incredible celebration!', 'Happy Anniversary to', 'May your love continue to grow stronger with each passing year, and may you always find joy and happiness in one another\'s company.   It\'s truly inspiring to witness the beautiful bond you share, and I hope the years ahead bring even more love, laughter, and unforgettable moments.  Wishing you both many more years of love, health, and happiness. Enjoy every moment of this special day!!', 'mail.amoriotech.com', 'sales@amoriotech.com', 'Amorio@2025', '', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `split_payments`
--

DROP TABLE IF EXISTS `split_payments`;
CREATE TABLE IF NOT EXISTS `split_payments` (
  `fld_split_id` int NOT NULL AUTO_INCREMENT,
  `fld_dayid` int NOT NULL,
  `fld_date` date NOT NULL,
  `fld_paymethod` varchar(100) NOT NULL,
  `fld_split_amt` decimal(10,2) NOT NULL,
  `fld_created_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`fld_split_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendance`
--

DROP TABLE IF EXISTS `staff_attendance`;
CREATE TABLE IF NOT EXISTS `staff_attendance` (
  `fld_said` int NOT NULL AUTO_INCREMENT,
  `fld_sastaffid` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_leaveid` int NOT NULL,
  `fld_sadate` date NOT NULL,
  `fld_saday` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_sahours` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_sastatus` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_satitle` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_saperson` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_sadayon` datetime NOT NULL,
  `fld_saflag` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`fld_said`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff_attendance`
--

INSERT INTO `staff_attendance` (`fld_said`, `fld_sastaffid`, `fld_leaveid`, `fld_sadate`, `fld_saday`, `fld_sahours`, `fld_sastatus`, `fld_satitle`, `fld_saperson`, `fld_sadayon`, `fld_saflag`) VALUES
(1, '1', 0, '2025-01-01', 'Wed', '', 'H', 'New Year', '1', '2025-01-06 00:00:00', ''),
(26, '1', 0, '2025-01-14', 'Tue', '', 'H', 'Pongal', '1', '2025-01-06 00:00:00', 'disabled'),
(27, '1', 0, '2025-01-13', 'Mon', '', 'H', 'Boggi', '1', '2025-01-06 00:00:00', 'disabled'),
(28, '1', 0, '2025-01-15', 'Wed', '', 'H', 'Mattu Pongal', '1', '2025-01-06 00:00:00', 'disabled'),
(29, '1', 0, '2025-01-16', 'Thu', '', 'H', 'Kanum Pongal', '1', '2025-01-06 00:00:00', 'disabled'),
(30, '1', 0, '2025-01-26', 'Sun', '', 'H', 'Republic Day', '1', '2025-01-07 00:00:00', ''),
(136, '1', 0, '2025-01-20', 'Mon', '', 'H', 'Martin Luther King Jr. Day', '1', '2025-01-09 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `fld_uid` int NOT NULL AUTO_INCREMENT,
  `fld_staffid` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_uname` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_uphone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_uemail` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_staff_designation` varchar(155) NOT NULL,
  `fld_ugender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_uexperience` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_uaddress` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_umarital_sts` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fld_uanniversary` date DEFAULT NULL,
  `fld_uservices` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `fld_ueduca` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fld_upass` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'default:staff@123',
  `fld_uotp` int NOT NULL,
  `fld_uotp_date` datetime DEFAULT NULL,
  `fld_udob` date NOT NULL,
  `fld_udoj` date NOT NULL,
  `fld_uroles` int NOT NULL,
  `fld_access` json DEFAULT NULL,
  `fld_ustatus` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'Active',
  `fld_ucreated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fld_uupdated_date` date DEFAULT NULL,
  PRIMARY KEY (`fld_uid`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fld_uid`, `fld_staffid`, `fld_uname`, `fld_uphone`, `fld_uemail`, `fld_staff_designation`, `fld_ugender`, `fld_uexperience`, `fld_uaddress`, `fld_umarital_sts`, `fld_uanniversary`, `fld_uservices`, `fld_ueduca`, `fld_upass`, `fld_uotp`, `fld_uotp_date`, `fld_udob`, `fld_udoj`, `fld_uroles`, `fld_access`, `fld_ustatus`, `fld_ucreated_date`, `fld_uupdated_date`) VALUES
(1, 'WS1000', 'Admin', '1234567990', 'admin@winkin.in', '', 'Male', '1, 3', 'Chennai, Indias', 'Single', '0000-00-00', 'Facial, Massages', '', '00c536dd7b55152e1e03cdb4de52c07dd05a87528977a3672dfa796f44327077e48d44973584940f47c0ba1403f700c3a51038d52dc7cb8ec4144319f7e14e9dc1Ty5ihenmw3BAdHwLAWidsvnAc3r7U9JwjmP9T1oUg=', 311146, '2025-01-10 10:00:00', '2004-01-01', '2024-01-31', 1, '{}', 'Active', '2024-12-05 11:25:33', '2025-02-21'),
(13, 'WS1001', 'Syed', '9879879879', 'syed@gmail.com', '', 'Male', '4, 0', 'Chennai', 'Single', '0000-00-00', NULL, '', '2a7413b94bacb9c702eba80ccbce1be7a59a00ccce33e5be09370947fe0842bcea78d21357a2202dc77ffbffb761027bceb02258cc92a67b0504541c77320a0fLSu3B1aJZ9MDfAmd3Ce3RXPDvKV/Zy9r9JjP5sAufiA=', 0, NULL, '2000-02-01', '2025-02-13', 2, '[{\"value\": \"Bookings\"}]', 'Active', '2025-02-13 16:22:37', '2025-02-13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
