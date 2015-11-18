-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2015 at 11:17 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jknowledge`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `id_course` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `price` decimal(11,0) NOT NULL COMMENT 'ค่าเรียน คอร์ด ต่อคน ',
  `is_require_room` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `id_create` int(11) NOT NULL,
  `dt_create` datetime NOT NULL,
  `id_update` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id_course`, `course_name`, `price`, `is_require_room`, `status`, `comment`, `id_create`, `dt_create`, `id_update`) VALUES
(4, 'BIG J DAY', '9000', 0, 1, 'o 1-4 คนคนละ 900 บาท\no 5 คนขึ้น ไปคนละ 700 บาท', 11111, '2015-11-17 20:39:34', 2222),
(5, 'J Summer Camp 2016', '5000', 1, 1, 'ครู , วิศวะ , เภสชั/พยาบาล มนษุย์/นิติ/วิทยาการ', 11111, '2015-11-17 20:41:14', 2222),
(7, 'J MED Camp', '5000', 1, 1, '', 11111, '2015-11-17 20:45:05', 2222);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id_member` int(10) unsigned NOT NULL COMMENT 'running number',
  `is_type` int(10) unsigned NOT NULL COMMENT 'ID ประเภทพนักงาน',
  `memp_code` varchar(50) NOT NULL COMMENT 'รหัสพนักงาน',
  `firstname` varchar(100) NOT NULL COMMENT 'ชื่อพนักงาน ภาษาอังกฤษ',
  `lastname` varchar(100) NOT NULL COMMENT 'นามสกุลพนักงาน ภาษาอังกฤษ',
  `email` varchar(50) NOT NULL COMMENT 'อีเมลล์',
  `line_id` varchar(50) DEFAULT NULL COMMENT 'เบอร์โทรศัพท์',
  `mobile` varchar(50) DEFAULT NULL COMMENT 'เบอร์มือถือ',
  `username` varchar(50) NOT NULL COMMENT 'ชื่อ Login Name',
  `password` varchar(50) NOT NULL COMMENT 'Password  MD5 CODE',
  `comment` varchar(4000) DEFAULT NULL COMMENT 'หมายเหตุ',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'สถานะรายการ',
  `id_create` int(10) unsigned DEFAULT NULL COMMENT 'ID ผู้สร้าง',
  `dt_create` datetime DEFAULT NULL COMMENT 'datetime สร้างครั้งแรก',
  `id_update` int(10) unsigned DEFAULT NULL COMMENT 'ID ผู้แก้ไขล่าสุด',
  `dt_update` datetime DEFAULT NULL COMMENT 'datetime แก้ไขล่าสุด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE IF NOT EXISTS `province` (
  `id_province` int(10) unsigned NOT NULL COMMENT 'running number',
  `province_code` varchar(50) DEFAULT NULL COMMENT 'รหัสจังหวัด',
  `province_name` varchar(150) DEFAULT NULL COMMENT 'ชื่อจังหวัด ภาษาอังกฤษ',
  `comment` varchar(1000) DEFAULT NULL COMMENT 'หมายเหตุ',
  `status` tinyint(4) NOT NULL COMMENT 'สถานะรายการ',
  `id_create` int(10) unsigned NOT NULL COMMENT 'id ผู้สร้าง',
  `dt_create` datetime NOT NULL COMMENT 'datetime สร้างครั้งแรก',
  `id_update` int(10) unsigned NOT NULL COMMENT 'id ผู้แก้ไขล่าสุด',
  `dt_update` datetime NOT NULL COMMENT 'datetime แก้ไขล่าสุด'
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id_province`, `province_code`, `province_name`, `comment`, `status`, `id_create`, `dt_create`, `id_update`, `dt_update`) VALUES
(1, '00', 'Undefine', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(2, '10', 'Bangkok', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(3, '11', 'Samut Prakarn', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(4, '12', 'Nonthaburi', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(5, '13', 'Pathum Thani', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(6, '14', 'Phra Nakhon Sri Ayutthaya', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(7, '15', 'Ang Thong', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(8, '16', 'Lopburi', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(9, '17', 'Sing Buri', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(10, '18', 'Chainat', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(11, '19', 'Saraburi', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(12, '20', 'Chonburi', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(13, '21', 'Rayong', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(14, '22', 'Chantaburi', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(15, '23', 'Trat', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(16, '24', 'Chachoengsao', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(17, '25', 'Prachinburi', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(18, '26', 'Nakhon Nayok', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(19, '27', 'Sa Kaeo', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(20, '31', 'Buri Ram', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(21, '32', 'Surin', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(22, '33', 'Si Sa Ket', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(23, '30', 'Nakorn Rajsima', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(24, '34', 'Ubon Ratchathani', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(25, '35', 'Yasothon', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(26, '36', 'Chaiyaphum', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(27, '37', 'Amnat Charoen', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(28, '39', 'Nong Bua Lam Phu', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(29, '40', 'Khon Kaen', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(30, '41', 'Udon Thani', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(31, '42', 'Loei', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(32, '43', 'Nong Khai', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(33, '44', 'Maha Sarakham', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(34, '45', 'Roi Et', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(35, '46', 'Kalasin', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(36, '47', 'Sakon Nakhon', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(37, '48', 'Nakhon Phanom', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(38, '49', 'Mukdahan', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(39, '50', 'Chiang Mai', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(40, '51', 'Lamphun', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(41, '52', 'Lampang', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(42, '53', 'Uttaradit', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(43, '55', 'Nan', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(44, '56', 'Phayao', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(45, '57', 'Chiang Rai', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(46, '58', 'Mae Hong Son', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(47, '60', 'Nakhon Sawan', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(48, '61', 'Uthai Thani', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(49, '62', 'Kamphaeng Phet', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(50, '63', 'Tak', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(51, '64', 'Sukhothai', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(52, '65', 'Phitsanulok', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(53, '66', 'Phichit', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(54, '67', 'Phetchabun', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(55, '70', 'Ratchaburi', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(56, '99', 'New Province', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(57, '54', 'Phrae', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(58, '71', 'Kanchanaburi', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(59, '73', 'Nakhon Pathom', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(60, '72', 'Suphanburi', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(61, '76', 'Phetchaburi', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(62, '77', 'Prachuap Khiri Khan', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(63, '74', 'Samut Sakhon', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(64, '75', 'Samut Songkhram', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(65, '80', 'Nakhon Si Thammarat', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(66, '81', 'Krabi', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(67, '82', 'Phang Nga', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(68, '83', 'Phuket', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(69, '84', 'Surat Thani', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(70, '85', 'Ranong', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(71, '86', 'Chumphon', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(72, '90', 'Songkhla', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(73, '91', 'Satun', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(74, '92', 'Trang', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(75, '93', 'Phatthalung', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(76, '94', 'Pattani', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(77, '95', 'Yala', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00'),
(78, '96', 'Narathiwat', '', 1, 1, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `register_dtl`
--

CREATE TABLE IF NOT EXISTS `register_dtl` (
  `id_register_dtl` int(11) NOT NULL COMMENT 'ID Runnumber',
  `id_register_hdr` int(11) NOT NULL COMMENT 'ID การสมัคร Header',
  `idcard` varchar(13) NOT NULL COMMENT 'รหัสประจำตัวประชาชน',
  `is_iti` tinyint(1) NOT NULL COMMENT 'คำนำหน้าชื่อ 1=นาย , 2=นางสาว',
  `firstname` varchar(100) NOT NULL COMMENT 'ชื่อผู้สมัคร',
  `lastname` varchar(100) NOT NULL COMMENT 'นามสกุลผู้สมัคร',
  `nicname` varchar(100) DEFAULT NULL,
  `birth_date` date NOT NULL,
  `mobile` varchar(15) NOT NULL COMMENT 'เบอร์ติดต่อ',
  `email` varchar(100) DEFAULT NULL COMMENT 'Email',
  `facebook` varchar(100) DEFAULT NULL COMMENT 'Facebook URL',
  `line_id` varchar(100) DEFAULT NULL COMMENT 'Line ID',
  `school` varchar(500) DEFAULT NULL COMMENT 'ชื่อโรงเรียน',
  `id_province` int(10) DEFAULT NULL COMMENT 'ID จังหวัด',
  `is_class` tinyint(1) DEFAULT NULL COMMENT '1= ม.1 ,2=ม2, --- 6=ม6',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'สถานะการสมัคร 1=Create, 2=ยืนยันการสมัคร, 3=ตรวจสอบการสมัครแล้ว, 4=หมดอายุการสมัคร, 0=ยกเลิกการสมัคร',
  `comment` varchar(1000) DEFAULT NULL,
  `id_create` int(11) DEFAULT NULL,
  `dt_create` datetime DEFAULT NULL,
  `id_update` int(11) DEFAULT NULL,
  `dt_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `register_hdr`
--

CREATE TABLE IF NOT EXISTS `register_hdr` (
  `id_register_hdr` int(11) NOT NULL COMMENT 'ID Runnumber',
  `register_code` varchar(50) NOT NULL COMMENT 'รหัสการสมัคร',
  `register_date` datetime NOT NULL COMMENT 'วันที่สมัคร',
  `confirm_date` datetime DEFAULT NULL COMMENT 'วันที่ยืนยันการโอน / ยืนยันการสมัคร ',
  `approve_date` datetime DEFAULT NULL COMMENT 'วันที่ตรวจสอบ และ อนุมัติ',
  `idcard` varchar(13) NOT NULL COMMENT 'รหัสประจำตัวประชาชน',
  `is_iti` tinyint(1) NOT NULL COMMENT 'คำนำหน้าชื่อ 1=นาย , 2=นางสาว',
  `firstname` varchar(100) NOT NULL COMMENT 'ชื่อผู้สมัคร',
  `lastname` varchar(100) NOT NULL COMMENT 'นามสกุลผู้สมัคร',
  `birth_date` date NOT NULL,
  `id_course` int(11) NOT NULL COMMENT 'ID โครงการที่สมัคร',
  `mobile` varchar(15) NOT NULL COMMENT 'เบอร์ติดต่อ',
  `email` varchar(100) DEFAULT NULL COMMENT 'Email',
  `facebook` varchar(100) DEFAULT NULL COMMENT 'Facebook URL',
  `line_id` varchar(100) DEFAULT NULL COMMENT 'Line ID',
  `amount` int(100) NOT NULL COMMENT 'จำนวนผู้สมัคร',
  `price` decimal(10,2) NOT NULL COMMENT 'จำนวนเงินค่าสมัคร',
  `school` varchar(500) DEFAULT NULL COMMENT 'ชื่อโรงเรียน',
  `id_province` int(10) DEFAULT NULL COMMENT 'ID จังหวัด',
  `is_class` tinyint(1) DEFAULT NULL COMMENT '1= ม.1 ,2=ม2, --- 6=ม6',
  `ref_regis_file` varchar(200) DEFAULT NULL COMMENT 'เอกสารอ้างอิงการสมัคร',
  `ref_regis_con` varchar(200) DEFAULT NULL COMMENT 'เอกสารอ้างอิง ยืนยันการการโอนเงิน',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'สถานะการสมัคร 1=ยังไม่จ่ายเงิน, 2=จ่ายเงินแล้ว, 3=ตรวจสอบการสมัครแล้ว, 4=หมดอายุการสมัคร, 0=ยกเลิกการสมัคร',
  `comment` varchar(1000) DEFAULT NULL,
  `id_create` int(11) DEFAULT NULL,
  `dt_create` datetime DEFAULT NULL,
  `id_update` int(11) DEFAULT NULL,
  `dt_update` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `register_hdr`
--

INSERT INTO `register_hdr` (`id_register_hdr`, `register_code`, `register_date`, `confirm_date`, `approve_date`, `idcard`, `is_iti`, `firstname`, `lastname`, `birth_date`, `id_course`, `mobile`, `email`, `facebook`, `line_id`, `amount`, `price`, `school`, `id_province`, `is_class`, `ref_regis_file`, `ref_regis_con`, `status`, `comment`, `id_create`, `dt_create`, `id_update`, `dt_update`) VALUES
(1, '001', '2015-11-13 00:00:00', '2015-11-13 00:00:00', '2015-11-13 00:00:00', '1111000223400', 1, 'เต้', 'ไชยวัฒน์', '2015-11-13', 4, '1220345670', 'te@hotmail.com', 'te@facebook.com', 'te@line.me', 1, '5000.00', 'โรงเรียนวัด', 10, 6, NULL, NULL, 1, 'ไม่พัก', NULL, NULL, NULL, NULL),
(3, '003', '2015-11-14 00:00:00', '2015-11-14 00:00:00', '2015-11-14 00:00:00', '', 1, 'ทดสอบ', 'ทดสอบ', '2015-11-13', 5, '', NULL, NULL, NULL, 0, '0.00', NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_gender` enum('male','female') NOT NULL,
  `user_status` enum('user','admin') NOT NULL,
  `user_password` char(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `user_gender`, `user_status`, `user_password`) VALUES
(1, 'te', 'te', 'te@hotmail.com', 'male', 'admin', '1234'),
(2, 'ch', 'ch', 'ch@hotmail.com', 'male', 'admin', '1234'),
(3, 'chaiwat', 'chaiwat', 'chaiwat@exam.com', 'male', '', '1234'),
(4, 'tete_subper', 'tete_subper', 'tete@example.com', 'male', '', '1234'),
(5, 'homsang', 'homsang', 'homsang@example.com', 'male', '', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id_course`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`),
  ADD KEY `idx_memp_code` (`memp_code`) USING BTREE,
  ADD KEY `idx_memp_name_en` (`firstname`,`lastname`) USING BTREE,
  ADD KEY `idx_fk_memp_id_memp_cat` (`is_type`) USING BTREE;

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id_province`),
  ADD KEY `idx_mprv_code` (`province_code`) USING BTREE,
  ADD KEY `idx_mprv_name_en` (`province_name`) USING BTREE;

--
-- Indexes for table `register_dtl`
--
ALTER TABLE `register_dtl`
  ADD PRIMARY KEY (`id_register_dtl`);

--
-- Indexes for table `register_hdr`
--
ALTER TABLE `register_hdr`
  ADD PRIMARY KEY (`id_register_hdr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id_course` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'running number';
--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id_province` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'running number',AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `register_dtl`
--
ALTER TABLE `register_dtl`
  MODIFY `id_register_dtl` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Runnumber';
--
-- AUTO_INCREMENT for table `register_hdr`
--
ALTER TABLE `register_hdr`
  MODIFY `id_register_hdr` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Runnumber',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
