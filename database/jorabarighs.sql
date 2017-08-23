-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 166.62.8.53
-- Generation Time: Aug 12, 2017 at 10:11 PM
-- Server version: 5.5.43
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jorabarighs`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `acc_id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_date` varchar(255) NOT NULL,
  `acc_desc` varchar(255) NOT NULL,
  `acc_amo` varchar(255) NOT NULL,
  `acc_dr_cr` varchar(255) NOT NULL,
  `acc_total` varchar(255) NOT NULL,
  PRIMARY KEY (`acc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` VALUES(32, 'à§§à§¨/à§§à§§/à§¨à§¦à§§à§©', 'à¦•à¦²à§‡à¦œ à¦«à¦¿ à¦¬à¦¾à¦¬à¦¦', 'à§¨à§¨,à§«à§¦à§¦', 'à¦œà¦®à¦¾', 'à§¨à§¨,à§«à§¦à§¦');
INSERT INTO `accounts` VALUES(33, 'à§§à§©/à§§à§§/à§¨à§¦à§§à§©', 'à¦•à¦²à§‡à¦œ à¦«à¦¿ à¦¬à¦¾à¦¬à¦¦', 'à§©à§§,à§¦à§¦à§¦', 'à¦œà¦®à¦¾', 'à§«à§©,à§«à§¦à§¦ ');
INSERT INTO `accounts` VALUES(34, 'à§§à§©/à§§à§§/à§¨à§¦à§§à§©', 'à¦–à§‡à¦²à¦¾ à¦§à§à¦²à¦¾ à¦¬à¦¾à¦¬à¦¦ ', 'à§«à§¦à§¦', 'à¦–à¦°à¦š', 'à§«à§©,à§¦à§¦à§¦');
INSERT INTO `accounts` VALUES(35, 'à§§à§©/à§§à§§/à§¨à§¦à§§à§©', 'à¦–à§‡à¦²à¦¾ à¦§à§à¦²à¦¾ à¦¬à¦¾à¦¬à¦¦ ', 'à§«à§¦à§¦', 'à¦–à¦°à¦š', 'à§«à§©,à§¦à§¦à§¦');

-- --------------------------------------------------------

--
-- Table structure for table `acln_tbl`
--

CREATE TABLE `acln_tbl` (
  `acln_id` int(11) NOT NULL AUTO_INCREMENT,
  `acln_date` varchar(255) NOT NULL,
  `acln_desc` varchar(255) NOT NULL,
  PRIMARY KEY (`acln_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `acln_tbl`
--

INSERT INTO `acln_tbl` VALUES(2, 'à§¨à§¨ à¦œà¦¾à¦¨à§à§Ÿà¦¾à¦°à§€, à¦¶à§à¦•à§à¦°à¦¬à¦¾à¦°,à§¨à§¦à§§à§¬<br> à§¦à§¦ à¦¦à¦¿à¦¨à¥¤', 'à¦«à¦¾à¦¤à§‡à¦¹à¦¾ à¦‡ à¦‡à§Ÿà¦¾à¦œ à¦¦à¦¾à¦¹à¦®');
INSERT INTO `acln_tbl` VALUES(3, 'à§¨à§§ à¦«à§‡à¦¬à§à¦°à§à§Ÿà¦¾à¦°à§€, à¦°à¦¬à¦¿à¦¬à¦¾à¦°,à§¨à§¦à§§à§¬<br> à§¦à§§à¦¦à¦¿à¦¨ ', 'à¦¶à¦¹à§€à¦¦ à¦¦à¦¿à¦¬à¦¸ à¦“ à¦†à¦¨à§à¦¤à¦°à§à¦œà¦¾à¦¤à¦¿à¦• à¦®à¦¾à¦¤à§ƒà¦­à¦¾à¦·à¦¾ à¦¦à¦¿à¦¬à¦¸');
INSERT INTO `acln_tbl` VALUES(4, 'à§§à§­ à¦®à¦¾à¦°à§à¦š, à¦¬à§ƒà¦¹à¦¶à¦ªà¦¤à¦¿à¦¬à¦¾à¦°,à§¨à§¦à§§à§¬<br>  à§¦à§§ à¦¦à¦¿à¦¨', 'à¦œà¦¾à¦¤à¦¿à¦° à¦ªà¦¿à¦¤à¦¾ à¦¬à¦™à§à¦—à¦¬à¦¨à§à¦§à§ à¦¶à§‡à¦– à¦®à§à¦œà¦¿à¦¬à§à¦° à¦°à¦¹à¦®à¦¾à¦¨ à¦à¦° à¦œà¦¨à§à¦® à¦¦à¦¿à¦¬à¦¸');
INSERT INTO `acln_tbl` VALUES(5, 'à§¨à§¬ à¦®à¦¾à¦°à§à¦š, à¦¶à¦¨à¦¿à¦¬à¦¾à¦°,à§¨à§¦à§§à§¬<br> à§¦à§§ à¦¦à¦¿à¦¨', 'à¦¸à§à¦¬à¦¾à¦§à§€à¦¨à¦¤à¦¾ à¦“ à¦œà¦¾à¦¤à§€à§Ÿ à¦¦à¦¿à¦¬à¦¸');
INSERT INTO `acln_tbl` VALUES(6, 'à§§à§ª à¦à¦ªà§à¦°à¦¿à¦², à¦¬à§ƒà¦¹à¦¶à¦ªà¦¤à¦¿à¦¬à¦¾à¦°,à§¨à§¦à§§à§¬<br> à§¦à§§ à¦¦à¦¿à¦¨', 'à¦¬à¦¾à¦‚à¦²à¦¾ à¦¨à¦¬à¦¬à¦°à§à¦·');
INSERT INTO `acln_tbl` VALUES(7, 'à§¨à§© à¦à¦ªà§à¦°à¦¿à¦² à¦¶à¦¨à¦¿à¦¬à¦¾à¦° à¦¥à§‡à¦•à§‡ à§¦à§« à¦®à§‡ à¦¬à§ƒà¦¹à¦¶à¦ªà¦¤à¦¿à¦¬à¦¾à¦° à¦ªà¦°à§à¦¯à¦¨à§à¦¤<br> à§§à§¨ à¦¦à¦¿à¦¨', 'à¦—à§à¦°à§€à¦¸à§à¦®à¦•à¦¾à¦²à§€à¦¨ à¦…à¦¬à¦•à¦¾à¦¶, à¦®à§‡ à¦¦à¦¿à¦¬à¦¸, à¦ªà¦¬à¦¿à¦¤à§à¦° à¦¶à¦¬-à¦‡-à¦®à¦¿à¦°à¦¾à¦œ');
INSERT INTO `acln_tbl` VALUES(8, 'à§¨à§§ à¦®à§‡,à¦¶à¦¨à¦¿à¦¬à¦¾à¦°,à§¨à§¦à§§à§¬<br>à§¦à§§ à¦¦à¦¿à¦¨ ', 'à¦¬à§à¦¦à§à¦§ à¦ªà§‚à¦°à§à¦£à¦¿à¦®à¦¾ (à¦¬à§ˆà¦¶à¦¾à¦–à§€ à¦ªà§‚à¦°à§à¦£à¦¿à¦®à¦¾)');
INSERT INTO `acln_tbl` VALUES(9, 'à§¨à§© à¦®à§‡,à¦¸à§‹à¦®à¦¬à¦¾à¦°,à§¨à§¦à§§à§¬<br> à§¦à§§ à¦¦à¦¿à¦¨', 'à¦ªà¦¬à¦¿à¦¤à§à¦° à¦¶à¦¬-à¦‡-à¦¬à¦°à¦¾à¦¤');

-- --------------------------------------------------------

--
-- Table structure for table `adinfo_tbl`
--

CREATE TABLE `adinfo_tbl` (
  `adinfo_id` int(11) NOT NULL AUTO_INCREMENT,
  `adinfo_sub` varchar(255) NOT NULL,
  `adinfo_file` varchar(255) NOT NULL,
  `adinfo_date` varchar(255) NOT NULL,
  PRIMARY KEY (`adinfo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adinfo_tbl`
--

INSERT INTO `adinfo_tbl` VALUES(1, 'fazil admission', '1442853907.pdf', '21/09/2015');

-- --------------------------------------------------------

--
-- Table structure for table `admission_tbl`
--

CREATE TABLE `admission_tbl` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_fullnam` varchar(255) NOT NULL,
  `adm_fathnam` varchar(255) NOT NULL,
  `adm_mothnam` varchar(255) NOT NULL,
  `adm_gurdnam` varchar(255) NOT NULL,
  `adm_phone` varchar(255) NOT NULL,
  `adm_pre_adds` varchar(255) NOT NULL,
  `adm_par_adds` varchar(255) NOT NULL,
  `adm_nat` varchar(255) NOT NULL,
  `adm_dbirth` varchar(255) NOT NULL,
  `adm_reli` varchar(255) NOT NULL,
  `adm_sub1` varchar(255) NOT NULL,
  `adm_sub2` varchar(255) NOT NULL,
  `adm_sub3` varchar(255) NOT NULL,
  `adm_sub4` varchar(255) NOT NULL,
  `adm_sub5` varchar(255) NOT NULL,
  `adm_sub6` varchar(255) NOT NULL,
  `adm_sub7` varchar(255) NOT NULL,
  `adm_sub8` varchar(255) NOT NULL,
  `adm_sub9` varchar(255) NOT NULL,
  `adm_past_insnam` varchar(255) NOT NULL,
  `adm_money_resno` varchar(255) NOT NULL,
  `adm_money_resdat` varchar(255) NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admission_tbl`
--

INSERT INTO `admission_tbl` VALUES(3, 'MD Hafizur rahman', 'MD Abul Hasan', 'Jahanara Begul', '', '01918767676', 'Vill: Jaforpur, P.O: Rajghat, P.S: Avoynagar, Dist: Jessore.', 'Vill: Jaforpur, P.O: Rajghat, P.S: Avoynagar, Dist: Jessore.', 'Bangladeshi', '08/08/1988', 'Islam', 'Babgla', 'English', 'Computer', 'Physics', 'Chemistry', 'Biology', 'Information technology', 'Zoology', 'Math', 'Rajghat Jaforpur high School', 'adm_money_resno', 'adm_money_resdat');
INSERT INTO `admission_tbl` VALUES(4, 'ruhul', 'amin', 'sufia', 'jakir', '01730918108', 'keundia kawkhali. pirojpur', 'keundia.kawkhali.', 'bd', '01-09-1989', 'islam', 'aa', 'rr', 'hh', 'bb', 'jj', 'kk', 'll', 'nn', 'mm', 'neharpur', '34', '01-07-2017');

-- --------------------------------------------------------

--
-- Table structure for table `arch_exm`
--

CREATE TABLE `arch_exm` (
  `arch_exm_id` int(11) NOT NULL AUTO_INCREMENT,
  `arch_exm_title` varchar(255) NOT NULL,
  `arch_exm_grp` varchar(255) NOT NULL,
  `arch_exm_pass` mediumtext NOT NULL,
  `arch_exm_regu` mediumtext NOT NULL,
  `arch_exm_iregu` mediumtext NOT NULL,
  PRIMARY KEY (`arch_exm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `arch_exm`
--

INSERT INTO `arch_exm` VALUES(1, 'DAKHIL-2015', 'GENERAL', '219457, 219458, 219459, 219460, 219461, 219462, 219463, 219464, 219465,219466 ,219467,219468, 219469, 219470, 219471, 219472, 219473,', '219457, 219458, 219459, 219460, 219461, 219462, 219463, 219464, 219465, 219466, 219467, 219468  219469, 219470, 219471, 219472, 219473,', 'NO');
INSERT INTO `arch_exm` VALUES(3, 'ALIM-2015', 'GENERAL', '145679, 145680, 145681, 145682, 145683, 145684, 145685, 145686, 145687, 145688,\r\n145689, 145690, 145691, 145692, 145693, 145694, 145695,1456796,', '145679, 145680, 145681, 145682, 145683, 145684, 145685, 145686, 145687, 145688,\r\n145689, 145690, 145691, 145692, 145693, 145694, 145695,1456796,', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `arch_prin`
--

CREATE TABLE `arch_prin` (
  `arch_prin_id` int(11) NOT NULL AUTO_INCREMENT,
  `arch_prin_nam` varchar(255) NOT NULL,
  `arch_prin_yar` varchar(255) NOT NULL,
  `arch_prin_pos` varchar(255) NOT NULL,
  `arch_prin_mob` varchar(255) NOT NULL,
  `arch_prin_pto` varchar(255) NOT NULL,
  PRIMARY KEY (`arch_prin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `arch_prin`
--

INSERT INTO `arch_prin` VALUES(9, 'MD.ABDUL MATIN', '01/07/1984 - Present', 'Principal', '01937585220', '1442856632.jpg');
INSERT INTO `arch_prin` VALUES(10, 'MD YOUNUS ALI', '01/09/1989 - Present', 'Vice-Principal', '01727429905', '1442950543.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `arch_std`
--

CREATE TABLE `arch_std` (
  `arch_std_id` int(11) NOT NULL AUTO_INCREMENT,
  `arch_std_nam` varchar(255) NOT NULL,
  `arch_std_yar` varchar(255) NOT NULL,
  `arch_std_res` varchar(255) NOT NULL,
  `arch_std_sub` varchar(255) NOT NULL,
  `arch_std_pto` varchar(255) NOT NULL,
  PRIMARY KEY (`arch_std_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `arch_std`
--

INSERT INTO `arch_std` VALUES(5, 'à¦®à§‹à¦ƒ à¦†à¦‡à§Ÿà§à¦¬ à¦†à¦²à§€', 'à¦†à¦²à¦¿à¦®- à§¨à§¦à§§à§«', 'A+', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', '1442857001.jpg');
INSERT INTO `arch_std` VALUES(6, 'à¦®à§‹à¦ƒ à¦¸à¦«à¦¿ à¦‰à¦²à§à¦²à¦¾à¦¹', 'à¦†à¦²à¦¿à¦®- à§¨à§¦à§§à§«', 'A+', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', '1443358676.jpg');
INSERT INTO `arch_std` VALUES(7, 'Rohim', '2013', 'A+', 'commarce', '1491026629.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `atten_tbl`
--

CREATE TABLE `atten_tbl` (
  `at_id` int(11) NOT NULL AUTO_INCREMENT,
  `at_date` varchar(255) NOT NULL,
  `at_tec_all` varchar(255) NOT NULL,
  `at_tec_atn` varchar(255) NOT NULL,
  `at_stf_all` varchar(255) NOT NULL,
  `at_stf_atn` varchar(255) NOT NULL,
  `at_scl1_all` varchar(255) NOT NULL,
  `at_scl1_atn` varchar(255) NOT NULL,
  `at_scl2_all` varchar(255) NOT NULL,
  `at_scl2_atn` varchar(255) NOT NULL,
  `at_scl3_all` varchar(255) NOT NULL,
  `at_scl3_atn` varchar(255) NOT NULL,
  `at_scl4_all` varchar(255) NOT NULL,
  `at_scl4_atn` varchar(255) NOT NULL,
  `at_scl5_all` varchar(255) NOT NULL,
  `at_scl5_atn` varchar(255) NOT NULL,
  `at_scl6_all` varchar(255) NOT NULL,
  `at_scl6_atn` varchar(255) NOT NULL,
  `at_scl7_all` varchar(255) NOT NULL,
  `at_scl7_atn` varchar(255) NOT NULL,
  `at_scl8_all` varchar(255) NOT NULL,
  `at_scl8_atn` varchar(255) NOT NULL,
  `at_scl9_all` varchar(255) NOT NULL,
  `at_scl9_atn` varchar(255) NOT NULL,
  `at_scl10_all` varchar(255) NOT NULL,
  `at_scl10_atn` varchar(255) NOT NULL,
  `at_scl11_all` varchar(255) NOT NULL,
  `at_scl11_atn` varchar(255) NOT NULL,
  `at_scl12_all` varchar(255) NOT NULL,
  `at_scl12_atn` varchar(255) NOT NULL,
  `at_scl13_all` varchar(255) NOT NULL,
  `at_scl13_atn` varchar(255) NOT NULL,
  `at_scl14_all` varchar(255) NOT NULL,
  `at_scl14_atn` varchar(255) NOT NULL,
  `at_scl15_all` varchar(255) NOT NULL,
  `at_scl15_atn` varchar(255) NOT NULL,
  `at_scl16_all` varchar(255) NOT NULL,
  `at_scl16_atn` varchar(255) NOT NULL,
  `at_scl17_all` varchar(255) NOT NULL,
  `at_scl17_atn` varchar(255) NOT NULL,
  `at_scl18_all` varchar(255) NOT NULL,
  `at_scl18_atn` varchar(255) NOT NULL,
  `at_scl19_all` varchar(255) NOT NULL,
  `at_scl19_atn` varchar(255) NOT NULL,
  `at_scl20_all` varchar(255) NOT NULL,
  `at_scl20_atn` varchar(255) NOT NULL,
  PRIMARY KEY (`at_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `atten_tbl`
--

INSERT INTO `atten_tbl` VALUES(25, 'à§¦à§«/à§§à§¦/à§¨à§¦à§§à§¬', 'à§§à§ª', 'à§§à§ª', 'à§¦à§©', 'à§¦à§© ', 'à§©à§¨', 'à§¨à§§', 'à§§à§ª', 'à§§à§ª', 'à§§à§¯', 'à§§à§­', 'à§§à§®', 'à§§à§¬', 'à§§à§¬', 'à§§à§ª', 'à§ªà§ª', 'à§©à§©', 'à§ªà§¦', 'à§©à§¨', 'à§©à§¯', 'à§©à§¨', 'à§ªà§­', 'à§©à§¨', 'à§©à§©', 'à§¨à§¨', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `atten_tbl` VALUES(26, 'à§¦à§«/à§§à§§/à§¨à§¦à§§à§¬', 'à§§à§ª', 'à§§à§ª', 'à§¦à§©', 'à§¦à§©', 'à§©à§¨', 'à§¨à§§', 'à§§à§ª', 'à§§à§ª', 'à§§à§¯', 'à§§à§­', 'à§§à§®', 'à§§à§¬', 'à§§à§¬', 'à§§à§ª', 'à§ªà§ª', 'à§©à§©', 'à§ªà§¦', 'à§©à§¨', 'à§©à§¯', 'à§©à§¨', 'à§ªà§­', 'à§©à§¨', 'à§©à§©', 'à§¨à§¨', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `atten_tbl` VALUES(27, '12/12/2016', '11', '11', '04', '04', '00', '00', '00', '00', '00', '00', '00', '00', '00', '00', '34', '34', '33', '33', '00', '00', '34', '34', '19', '18', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `atten_tbl` VALUES(28, '14/02/17', '36', '36', '08', '08', '120', '115', '120', '116', '115', '110', '100', '90', '108', '104', '100', '95', '98', '94', '98', '95', '52', '45', '48', '40', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `atten_tbl` VALUES(29, '14/02/17', '36', '36', '08', '08', '120', '115', '120', '11', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `atten_tbl` VALUES(30, '01/03/2017', '35', '33', '07', '07', '120', '100', '120', '105', '120', '106', '120', '105', '100', '86', '89', '80', '90', '85', '80', '70', '90', '80', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `brdres_fck`
--

CREATE TABLE `brdres_fck` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_class` varchar(50) NOT NULL,
  `res_year` varchar(55) NOT NULL,
  `res_roll` varchar(255) NOT NULL,
  `res_num` varchar(255) NOT NULL,
  `res_dob` varchar(255) NOT NULL,
  `res_fnum` varchar(255) NOT NULL,
  `res_group` varchar(255) NOT NULL,
  `res_mnum` varchar(255) NOT NULL,
  `res_type` varchar(255) NOT NULL,
  `res_gpa` varchar(50) NOT NULL,
  `res_addrs` varchar(255) NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `c3` varchar(50) NOT NULL,
  `c4` varchar(50) NOT NULL,
  `c5` varchar(50) NOT NULL,
  `c6` varchar(50) NOT NULL,
  `c7` varchar(50) NOT NULL,
  `c8` varchar(50) NOT NULL,
  `c9` varchar(50) NOT NULL,
  `c10` varchar(50) NOT NULL,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `s4` varchar(50) NOT NULL,
  `s5` varchar(50) NOT NULL,
  `s6` varchar(50) NOT NULL,
  `s7` varchar(50) NOT NULL,
  `s8` varchar(50) NOT NULL,
  `s9` varchar(50) NOT NULL,
  `s10` varchar(50) NOT NULL,
  `r1` varchar(50) NOT NULL,
  `r2` varchar(50) NOT NULL,
  `r3` varchar(50) NOT NULL,
  `r4` varchar(50) NOT NULL,
  `r5` varchar(50) NOT NULL,
  `r6` varchar(50) NOT NULL,
  `r7` varchar(50) NOT NULL,
  `r8` varchar(50) NOT NULL,
  `r9` varchar(50) NOT NULL,
  `r10` varchar(50) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `brdres_fck`
--


-- --------------------------------------------------------

--
-- Table structure for table `clg_hist_tbl`
--

CREATE TABLE `clg_hist_tbl` (
  `hist_id` int(11) NOT NULL AUTO_INCREMENT,
  `hist_text` text NOT NULL,
  PRIMARY KEY (`hist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `clg_hist_tbl`
--

INSERT INTO `clg_hist_tbl` VALUES(6, '<p>à¦¶à¦¿à¦•à§à¦·à¦¾ à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦®à§Œà¦²à¦¿à¦• à¦…à¦§à¦¿à¦•à¦¾à¦°à¥¤ à¦¸à§-à¦¸à¦¿à¦•à§à¦·à¦¾ à¦›à¦¾à§œà¦¾ à¦•à§‹à¦¨ à¦œà¦¾à¦¤à§€ à¦‰à¦¨à§à¦¨à¦¤à¦¿ à¦²à¦¾à¦­ à¦•à¦°à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à§‡ à¦¨à¦¾à¥¤ à¦¤à¦¾à¦‡ à¦…à¦°à§à¦¥à¦¬à¦¹ à¦“ à¦•à¦²à§à¦¯à¦¾à¦£ à¦®à§‚à¦–à§€ à¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `clg_strc`
--

CREATE TABLE `clg_strc` (
  `clg_str_id` int(11) NOT NULL AUTO_INCREMENT,
  `clg_str_title` varchar(255) NOT NULL,
  `clg_str_date` varchar(255) NOT NULL,
  `clg_str_photo` varchar(255) NOT NULL,
  `clg_str_cap` varchar(255) NOT NULL,
  `clg_str_desc` varchar(50000) NOT NULL,
  PRIMARY KEY (`clg_str_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `clg_strc`
--

INSERT INTO `clg_strc` VALUES(3, 'à¦¬à¦‡ à¦¬à¦¿à¦¤à¦°à¦£ à¦†à¦¨à§à¦·à§à¦ à¦¨à§‡à¦° à¦›à¦¬à¦¿', 'à§§/à§§/à§§à§­', '1501899080.jpg', 'à¦œà§‹à§œà¦¾à¦¬à¦¾à§œà¦¿ à¦¬à¦¾à¦²à¦¿à¦•à¦¾ à¦‰à¦šà§à¦š à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿ', '<p>à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡à¦° à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨ à¦…à¦¬à¦¸à§à¦¥à¦¾</p>\r\n');
INSERT INTO `clg_strc` VALUES(4, 'à¦œà§‹à§œà¦¾à¦¬à¦¾à§œà§€ à¦¬à¦¾à¦²à¦¿à¦•à¦¾ à¦‰à¦šà§à¦š à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿ', 'à§¨/à§¨/à§§à§­', '1501898698.jpg', 'à¦¡à¦¿à¦œà¦¿à¦Ÿà¦¾à¦² à¦•à§à¦²à¦¾à¦¸ à¦°à§à¦®', '<p>à¦¡à¦¿à¦œà¦¿à¦Ÿà¦¾à¦² à¦•à¦œà¦¾à¦¸ à¦°à§à¦®</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `cls_routain`
--

CREATE TABLE `cls_routain` (
  `cr_id` int(11) NOT NULL AUTO_INCREMENT,
  `cr_title` varchar(255) NOT NULL,
  `cr_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`cr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `cls_routain`
--

INSERT INTO `cls_routain` VALUES(7, 'dakhil', '1463570063.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `compln_tbl`
--

CREATE TABLE `compln_tbl` (
  `compln_id` int(11) NOT NULL AUTO_INCREMENT,
  `compln_st_nam` varchar(255) NOT NULL,
  `compln_fath_nam` varchar(255) NOT NULL,
  `compln_cls` varchar(255) NOT NULL,
  `compln_grp` varchar(255) NOT NULL,
  `compln_yer` varchar(255) NOT NULL,
  `compln_title` varchar(255) NOT NULL,
  `compln_desc` varchar(1000) NOT NULL,
  `compln_date` varchar(255) NOT NULL,
  PRIMARY KEY (`compln_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `compln_tbl`
--

INSERT INTO `compln_tbl` VALUES(5, 'jhhgg', 'kkjhg', '10', 'dfghhj', 'kkkll', 'hnn', 'm,,,,..mnhvv', '16-09-2015');
INSERT INTO `compln_tbl` VALUES(6, 'a', 'b', '10', 'science', '2016', 'kk', 'avb', '12/12/2016');
INSERT INTO `compln_tbl` VALUES(7, 'à¦®à¦¿à¦¤à§', 'à¦°à¦«à¦¿à¦•à§à¦²', 'à¦…à¦·à§à¦Ÿà¦®', 'à§¦à§¦', 'à§¨à§¦à§§à§­', 'à¦…à¦¨à§à¦ªà¦¸à§à¦¥à¦¿à¦¤à¦¿', 'à¦†à¦†à¦¤à¦¤à¦¤à¦¤à¦¤', 'à§¦à§¨/à§¦à§®/à§¨à§¦à§§à§­');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

CREATE TABLE `contact_tbl` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(255) NOT NULL,
  `contact_phone` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_msg` varchar(255) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `contact_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `counter_ips`
--

CREATE TABLE `counter_ips` (
  `ip` varchar(15) NOT NULL,
  `visit` datetime NOT NULL,
  UNIQUE KEY `ip` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counter_ips`
--

INSERT INTO `counter_ips` VALUES('116.58.204.168', '2017-08-12 21:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `counter_values`
--

CREATE TABLE `counter_values` (
  `id` bigint(11) NOT NULL,
  `day_id` bigint(11) NOT NULL,
  `day_value` bigint(11) NOT NULL,
  `yesterday_id` bigint(11) NOT NULL,
  `yesterday_value` bigint(11) NOT NULL,
  `week_id` bigint(11) NOT NULL,
  `week_value` bigint(11) NOT NULL,
  `month_id` bigint(11) NOT NULL,
  `month_value` bigint(11) NOT NULL,
  `year_id` bigint(11) NOT NULL,
  `year_value` bigint(11) NOT NULL,
  `all_value` bigint(11) NOT NULL,
  `record_date` datetime NOT NULL,
  `record_value` bigint(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counter_values`
--

INSERT INTO `counter_values` VALUES(1, 224, 11, 223, 2, 32, 219, 8, 1660, 2017, 3557, 22985, '2015-09-27 22:59:26', 1162);

-- --------------------------------------------------------

--
-- Table structure for table `curact_tbl`
--

CREATE TABLE `curact_tbl` (
  `ca_id` int(11) NOT NULL AUTO_INCREMENT,
  `ca_photo` varchar(255) NOT NULL,
  `ca_cap` varchar(255) NOT NULL,
  `ca_disc` varchar(255) NOT NULL,
  PRIMARY KEY (`ca_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `curact_tbl`
--

INSERT INTO `curact_tbl` VALUES(5, '1443406788.jpg', 'Nasrullah', '	\r\n\r\nMONTHLY DEALIKA');
INSERT INTO `curact_tbl` VALUES(10, '1457173078.jpg', 'Nasrullah', '	\r\n\r\nLibrary Working Of Students of Nanguli Nesaria Fazil Madrasah.\r\n(à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦ªà¦¾à¦ à¦¾à¦—à¦¾à¦°à§‡ à¦…à¦§à§à¦¯à§Ÿà¦¨à¦°à¦¤ à¦›à¦¾à¦¤à§à¦°à¦¦à§‡à¦° à¦à¦•à¦¾à¦‚à¦¶) ');
INSERT INTO `curact_tbl` VALUES(12, '1457172839.jpg', 'Nasrullah', 'A View Exchange program With Anwar Hossen (Manju),Honorable Forest& Environment Minister of Bangladesh. \r\n');
INSERT INTO `curact_tbl` VALUES(13, '1457172778.jpg', 'Nasrullah', 'Taking Computer Course');
INSERT INTO `curact_tbl` VALUES(14, '1457172735.jpg', 'Nasrullah', ' Hand writing practice of students of Nanguli Nesaria Fazil Madrasah');

-- --------------------------------------------------------

--
-- Table structure for table `dc_tbl`
--

CREATE TABLE `dc_tbl` (
  `dc_id` int(11) NOT NULL AUTO_INCREMENT,
  `dc_title` varchar(255) NOT NULL,
  `dc_date` varchar(255) NOT NULL,
  `dc_doc` varchar(255) NOT NULL,
  PRIMARY KEY (`dc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `dc_tbl`
--

INSERT INTO `dc_tbl` VALUES(1, 'à¦œà§‡ à¦¡à¦¿ à¦¸à¦¿ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦°à§à¦Ÿà¦¿à¦¨à¥¤', 'à§¨à§¦/à§¦à§¯/à§¨à§¦à§§à§«', '1442852917.pdf');
INSERT INTO `dc_tbl` VALUES(2, 'à¦†à¦°à¦¬à§€à¦¤à§‡ à¦¸à¦‚à¦•à§à¦·à§‡à¦ªà§‡ à¦›à§à¦Ÿà¦¿ à¦¸à¦‚à¦•à§à¦°à¦¾à¦¨à§à¦¤ à¦¦à¦°à¦–à¦¾à¦¸à§à¦¤', 'à§¨à§¨-à§¦à§¯à§¨à§¦à§§à§«', '1442912303.pdf');
INSERT INTO `dc_tbl` VALUES(3, 'à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦°à§à¦Ÿà¦¿à¦¨ (à¦†à¦²à¦¿à¦® à¦ªà§à¦°à¦¾à¦•-à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¨à§€,à¦¦à¦¾à¦–à¦¿à¦² à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¨à§€,à¦…à¦·à§à¦Ÿà¦® à¦“ à¦ªà¦žà§à¦šà¦® à¦®à¦¡à§‡à¦² à¦Ÿà§‡à¦¸à§à¦Ÿ-à§¨à§¦à§§à§«) ', 'à§¨à§¦/à§¦à§¯/à§¨à§¦à§§à§«', '1443012094.pdf');
INSERT INTO `dc_tbl` VALUES(4, 'à¦¦à¦¾à¦–à¦¿à¦² à¦ªà¦°à§€à¦•à§à¦·à¦¾-à§¨à§¦à§§à§¬ à¦à¦° à¦®à¦¾à¦¨à¦¬à¦¨à§à¦Ÿà¦¨à¥¤', 'à§¨à§©-à§¦à§¯-à§¨à§¦à§§à§«', '1443283900.pdf');
INSERT INTO `dc_tbl` VALUES(6, 'à¦«à¦¾à¦¯à¦¿à¦² à¦­à¦°à§à¦¤à¦¿ à¦«à¦°à¦®', 'à§¨à§¦-à§§à§¦-à§¨à§¦à§§à§«', '1445389254.pdf');
INSERT INTO `dc_tbl` VALUES(7, 'à¦«à¦¾à¦¯à¦¿à¦²  à¦­à¦°à§à¦¤à¦¿  à¦«à¦°à¦®', 'à§¨à§¦-à§§à§¦-à§¨à§¦à§§à§«', '1445389519.pdf');
INSERT INTO `dc_tbl` VALUES(8, 'à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦¬à¦¿à¦œà§à¦žà¦ªà§à¦¤à¦¿', 'à§¨à§­/à§§à§¦/à§¨à§¦à§§à§«', '1445918542.pdf');
INSERT INTO `dc_tbl` VALUES(9, 'à¦¦à¦¾à¦–à¦¿à¦² à¦¬à§‹à¦°à§à¦¡ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦°à§à¦Ÿà¦¿à¦¨-à§¨à§¦à§§à§¬', 'à§¦à§§-à§¦à§§-à§¨à§¦à§§à§¬', '1452097958.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `doc_tbl`
--

CREATE TABLE `doc_tbl` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_st_nam` varchar(255) NOT NULL,
  `doc_ft_nam` varchar(255) NOT NULL,
  `doc_mt_nam` varchar(255) NOT NULL,
  `doc_roll` varchar(255) NOT NULL,
  `doc_cls` varchar(255) NOT NULL,
  `doc_yar` varchar(255) NOT NULL,
  `doc_group` varchar(255) NOT NULL,
  `doc_type` varchar(255) NOT NULL,
  `doc_date` varchar(255) NOT NULL,
  `doc_mob` varchar(255) NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `doc_tbl`
--

INSERT INTO `doc_tbl` VALUES(18, 'Md Sahabuddin', 'AKKEL ALI', 'Chan Baru', '142574', 'SSC', '2017', 'Commerce', 'Testimonial', '23/05/2017', '01838088889');

-- --------------------------------------------------------

--
-- Table structure for table `gallary_tbl`
--

CREATE TABLE `gallary_tbl` (
  `gal_id` int(11) NOT NULL AUTO_INCREMENT,
  `gal_cap` varchar(255) NOT NULL,
  `gal_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`gal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `gallary_tbl`
--

INSERT INTO `gallary_tbl` VALUES(60, 'à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡à¦° à¦à¦° à¦›à¦¬à¦¿', '1477898310.jpg');
INSERT INTO `gallary_tbl` VALUES(61, 'à¦ªà¦°à¦¿à¦¦à¦°à§à¦·à¦¨', '1478682750.jpg');
INSERT INTO `gallary_tbl` VALUES(62, 'à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨ à¦—à§à¦°à§à¦¤à§à¦¬à¦ªà§‚à¦°à§à¦£ à¦›à¦¬à¦¿', '1478682886.jpg');
INSERT INTO `gallary_tbl` VALUES(63, 'à¦ªà¦°à¦¿à¦¦à¦°à§à¦¶à¦£', '1478682932.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gb_tbl`
--

CREATE TABLE `gb_tbl` (
  `gb_id` int(11) NOT NULL AUTO_INCREMENT,
  `gb_name` varchar(255) NOT NULL,
  `gb_pos` varchar(255) NOT NULL,
  `gb_adrs` varchar(255) NOT NULL,
  `gb_year` varchar(255) NOT NULL,
  `gb_cmt` varchar(255) NOT NULL,
  PRIMARY KEY (`gb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `gb_tbl`
--

INSERT INTO `gb_tbl` VALUES(5, 'MD.  NAZRUL  SALAM', 'CHAIRMAN', 'JORABARI, DRMAR, NIKPHAMARI..', '30/06/2016-29/06/2018', 'LOCAL SOCIAL WORKER');
INSERT INTO `gb_tbl` VALUES(6, 'MD. LUTFOR RAHMAN.', 'MEMBER', 'JORABARI, DRMAR, NIKPHAMARI..', '30/06/2016-29/06/2018', '');
INSERT INTO `gb_tbl` VALUES(7, 'MD. INSANUL HASQUE', 'FOUNDER ', 'JORABARI, DRMAR, NIKPHAMARI..', '30/06/2016-29/06/2018FO', 'FOUNDER');
INSERT INTO `gb_tbl` VALUES(8, 'MD.MOKSEDS ALI  ', 'MEMBER', 'JORABARI, DRMAR, NIKPHAMARI..', '30/06/2016-29/06/2018', 'REPRESENTATIVE OF GUARDIAN');
INSERT INTO `gb_tbl` VALUES(9, 'MD. NURONNOBI MOSTOFA', 'MEMBER', 'JORABARI, DRMAR, NIKPHAMARI..', '30/06/2016-29/06/2018', 'REPRESENTATIVE OF GUARDIAN');
INSERT INTO `gb_tbl` VALUES(11, 'MD. ABDUR RAZZAK.', 'MEMBER', 'JORABARI, DRMAR, NIKPHAMARI..', '30/06/2016-29/06/2018', 'REPRESENTATIVE OF GURDIAN');
INSERT INTO `gb_tbl` VALUES(12, 'SREE. FULEN CHANDRA ', 'MEMBER', 'HALHALIA, DRMAR, NIKPHAMARI..', '30/06/2016-29/06/2018', 'REPRESENTATIVE OF TEACHER');
INSERT INTO `gb_tbl` VALUES(13, 'MD.FOZLUL HAQUE.', 'TR', 'JORABARI GURLS HIGH SCHOOL, DRMAR, NIKPHAMARI..', '30/06/2016-29/06/2018', 'REPRESENTATIVE OF TEACHER');
INSERT INTO `gb_tbl` VALUES(14, 'MD. RATAN ALI', 'TR', 'JORABARI GURLS HIGH SCHOOL, DRMAR, NIKPHAMARI..', '30/06/2016-29/06/2018', 'REPRESENTATIVE OF TEACHER');
INSERT INTO `gb_tbl` VALUES(15, 'SIFIEA AKTER', 'TR', 'JORABARI GURLS HIGH SCHOOL, DRMAR, NIKPHAMARI..', '30/06/2016-29/06/2018', 'REPRESENTATIVE OF TEACHER');
INSERT INTO `gb_tbl` VALUES(16, 'MD. MOMINUR RAHMAN', 'SECRATARI', 'VOGDABURI, DOMAR, NULPHAMARI.', '30/06/2016-29/06/2018', 'HEAD TEACHER');

-- --------------------------------------------------------

--
-- Table structure for table `girlsuser`
--

CREATE TABLE `girlsuser` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) DEFAULT NULL,
  `UserType` tinyint(4) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `userName` varchar(50) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `girlsuser`
--

INSERT INTO `girlsuser` VALUES(25, 'NASRULLAH', 1, 'nasrulnanguli@gmail.com', 'Nasrullah', '769ac34a4012ab69c069de0bab7d9e81');

-- --------------------------------------------------------

--
-- Table structure for table `hdr_tbl`
--

CREATE TABLE `hdr_tbl` (
  `hdr_id` int(11) NOT NULL AUTO_INCREMENT,
  `hdr_en` varchar(255) NOT NULL,
  `hdr_bn` varchar(255) NOT NULL,
  `hdr_logo` varchar(255) NOT NULL,
  `hdr_code` text NOT NULL,
  `hdr_adrs` text NOT NULL,
  PRIMARY KEY (`hdr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `hdr_tbl`
--

INSERT INTO `hdr_tbl` VALUES(1, 'à¦œà§‹à§œà¦¾à¦¬à¦¾à§œà§€ à¦¬à¦¾à¦²à¦¿à¦•à¦¾ à¦‰à¦šà§à¦š à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿ', 'JORABARI GIRLS HIGH SCHOOL', '1501807282.jpg', 'à¦‡à¦†à¦‡à¦†à¦‡à¦à¦¨à¦ƒ à§§à§¨à§ªà§®à§«à§ª, \r\nà¦¸à§à¦•à§à¦² à¦•à§‹à¦¡à¦ƒ à§¬à§«à§¯à§«\r\nà¦ à¦ªà¦¿ à¦“ à¦•à§‹à¦¡: à§¯à§¦à§¦à§¨à§§à§­à§§à§¨à§¦à§©', ' à¦‰à¦ªà¦œà§‡à¦²à¦¾: à¦¡à§‹à¦®à¦¾à¦°,(à¦‰à¦ªà¦œà§‡à¦²à¦¾ à¦•à§‹à¦¡à¦ƒ à§©à§¨à§¦à§¨), à¦œà§‡à¦²à¦¾: à¦¨à§€à¦²à¦«à¦¾à¦®à¦¾à¦°à§€, (à¦œà§‡à¦²à¦¾ à¦•à§‹à¦¡à¦ƒ à§©à§¨),                    \r\nà¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦° à¦¤à¦¾à¦°à¦¿à¦–: à§¦à§§/à§¦à§§/à§§à§¯à§¯à§©à¦‡à¦‚à¥¤\r\nà¦®à§‹à¦¬à¦¾à¦‡à¦² à¦¨à¦®à§à¦¬à¦°: à§¦à§§à§­à§¨à§¦à§«à§ªà§¬à§¯à§¨à§¯\r\n     (à¦·à¦·à§à¦  à¦¶à§à¦°à§‡à¦£à¦¿ à¦¹à¦¤à§‡ à§§à§¦à¦® à¦¶à§à¦°à§‡à¦£à¦¿ à¦ªà¦°à§à¦¯à¦¨à§à¦¤ à¦¸à§à¦¬à§€à¦•à§ƒà¦¤à¦¿ à¦ªà§à¦°à¦¾à¦ªà§à¦¤ )');

-- --------------------------------------------------------

--
-- Table structure for table `lib_tbl`
--

CREATE TABLE `lib_tbl` (
  `lib_id` int(11) NOT NULL AUTO_INCREMENT,
  `lib_id_no` varchar(255) NOT NULL,
  `lib_isbn` varchar(255) NOT NULL,
  `lib_pub` varchar(255) NOT NULL,
  `lib_title` varchar(255) NOT NULL,
  `lib_desc` varchar(255) NOT NULL,
  `lib_sd` varchar(255) NOT NULL,
  PRIMARY KEY (`lib_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lib_tbl`
--

INSERT INTO `lib_tbl` VALUES(1, '001', '23-24', 'Ø§Ù„Ø¹Ù„Ø§Ù…Ø© Ø¬Ù„Ø§Ù„ Ø§Ù„Ø¯ÙŠÙ† Ø§Ù„Ø³ÙŠÙˆØ·ÙŠ ÙˆØ¬Ù„Ø§Ù„ Ø§Ù„Ø¯ÙŠÙ† Ø§Ù„Ù…Ø­Ù„ÙŠ', 'ØªÙØ³ÙŠØ± Ø§Ù„Ø¬Ù„Ø§Ù„ÙŠÙ† ', 'Ù‡Ø°Ø§ Ø§Ù„ØªÙØ³ÙŠØ±  Ù…Ù‚Ø¨ÙˆÙ„ Ø¹Ù†Ø¯ Ø§Ù„Ø¹Ù„Ù…Ø§Ø¡    ', 'Ù‡Ø°Ø§ Ø§Ù„ØªÙØ³ÙŠØ± Ø¬ÙŠØ¯ Ø¬Ø¯Ø§');
INSERT INTO `lib_tbl` VALUES(2, '02', '23-24', 'Ø§Ù„Ø¹Ù„Ø§Ù…Ø© Ø§Ù„Ù…ÙØªÙŠ Ø§Ù„Ø´ÙÙŠØ¹ Ø±Ø­Ø­', 'ØªÙØ³ÙŠØ± Ù…Ø¹Ø§Ø±Ù Ø§Ù„Ù‚Ø±Ø§Ù†', 'Ù‡Ø°Ø§ Ø§Ù„ØªÙØ³ÙŠØ± Ù…Ø´Ù‡ÙˆØ± ÙÙŠ Ø´Ø¨Ù‡ Ø§Ù„Ù‡Ù†Ø¯ ', 'Ù…Ø´Ù‡ÙˆØ± Ø¬Ø¯Ø§');

-- --------------------------------------------------------

--
-- Table structure for table `lnews_tbl`
--

CREATE TABLE `lnews_tbl` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_date` varchar(255) NOT NULL,
  `news_serial` varchar(255) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `lnews_tbl`
--

INSERT INTO `lnews_tbl` VALUES(9, 'à§§à§¨-à§§à§¦-à§¨à§¦à§§à§¬', '01', ' à¦¦à¦¶à¦® à¦¶à§à¦°à§‡à¦£à§€à¦° à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¨à§€ à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦†à¦—à¦¾à¦®à§€ à§§à§¬-à§§à§¦-à§¨à§¦à§§à§¬ à¦‡à¦‚ à¦¤à¦¾à¦°à¦¿à¦– à¦°à¦¬à¦¿à¦¬à¦¾à¦° à¦¶à§à¦°à§ à¦¹à¦¬à§‡à¥¤');
INSERT INTO `lnews_tbl` VALUES(15, 'à§¦à§«/à§§à§§/à§¨à§¦à§§à§«', 'à§¦à§¨', 'à¦à¦¸ à¦à¦¸ à¦¸à¦¿ à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¨à§€ à¦ªà¦°à§€à¦•à§à¦·à¦¾à§Ÿ à¦‰à¦¤à§à¦¤à§€à¦°à§à¦£ à¦›à¦¾à¦¤à§à¦°à¦¦à§‡à¦° à¦«à¦°à¦® à¦ªà§à¦°à¦¨ à¦†à¦—à¦¾à¦®à§€ à§§à§¦/à§§à§§/à§¨à§¦à§§à§« à¦¤à¦¾à¦°à¦¿à¦–à§‡à¦° à¦®à¦¾à¦à§‡ à¦¸à¦®à§à¦ªà¦¨à§à¦¨ à¦•à¦°à¦');
INSERT INTO `lnews_tbl` VALUES(16, '12-10-2016', '1', 'à¦†à¦®à¦¾à¦° à¦“à§Ÿà§‡à¦¬ à¦¸à¦¾à¦‡à¦Ÿ');
INSERT INTO `lnews_tbl` VALUES(17, '12/12/2016', '01', 'à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡ à§§à§¬ à¦‡ à¦¡à¦¿à¦¸à§‡à¦®à§à¦¬à¦° à¦‰à¦¦à§à¦¯à¦¾à¦ªà¦¨à¥¤');
INSERT INTO `lnews_tbl` VALUES(18, '15/02/2017', '01', 'anondo bromon2017');

-- --------------------------------------------------------

--
-- Table structure for table `mb_tbl`
--

CREATE TABLE `mb_tbl` (
  `mb_id` int(11) NOT NULL AUTO_INCREMENT,
  `mb_bkash` varchar(255) NOT NULL,
  `mb_dbbl` varchar(255) NOT NULL,
  PRIMARY KEY (`mb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mb_tbl`
--

INSERT INTO `mb_tbl` VALUES(1, '01712027143', '017120271435');

-- --------------------------------------------------------

--
-- Table structure for table `notice_tbl`
--

CREATE TABLE `notice_tbl` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `n_title` varchar(255) NOT NULL,
  `n_download` varchar(255) NOT NULL,
  `n_date` varchar(255) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `notice_tbl`
--

INSERT INTO `notice_tbl` VALUES(13, 'à¦ªà¦¿ à¦à¦¸ à¦¸à¦¿ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦«à¦²à¦¾à¦«à¦² à¦¶à¦¤à¦­à¦¾à¦— à¦ªà¦¾à¦¶à¥¤', '1451749157.docx', 'à§¦à§§-à§¦à§§à§§-à§¨à§¦à§§à§¬');
INSERT INTO `notice_tbl` VALUES(14, 'à¦à¦¬à¦¾à¦° à¦“ à¦œà§‡ à¦à¦¸ à¦¸à¦¿ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦«à¦²à¦¾à¦«à¦²à§‡ à¦šà§à§Ÿà¦¾à¦¡à¦¾à¦™à§à¦—à¦¾ à¦•à§ƒà¦·à§à¦£à¦¨à¦—à¦° à¦®à¦¾à¦§à§à¦¯à¦®à¦¿à¦• à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡ à¦¶à¦¤à¦­à¦¾à¦— à¦ªà¦¾à¦¶à¥¤', '1451749466.docx', 'à§¦à§§-à§¦à§§à§§-à§¨à§¦à§§à§¬');
INSERT INTO `notice_tbl` VALUES(15, 'à¦à¦¸ à¦à¦¸ à¦¸à¦¿ à¦¬à§‹à¦°à§à¦¡ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦°à§à¦Ÿà¦¿à¦¨', '1452097232.pdf', 'à§¦à§§/à§§à§§/à§¨à§¦à§§à§¬');

-- --------------------------------------------------------

--
-- Table structure for table `oreg_tbl`
--

CREATE TABLE `oreg_tbl` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `tech_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `res_roll` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `res_year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_eduyear` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_adddate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_regist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_nameb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_fnameb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_mnameb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_namee` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_fnamee` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_mnamee` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_vill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_po` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_ps` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_dist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ovi_oviv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ovi_somp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ovi_prof` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ovi_vill` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ovi_po` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ovi_ps` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ovi_dist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ovi_yearin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ovi_land` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ovi_mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_nation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_relig` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stu_merita` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ex_exam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ex_ins` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ex_roll` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ex_dept` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ex_regist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ex_passy` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ex_sikb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ex_siky` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ex_gpa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_sikb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_dept` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_osik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_osik1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_osik2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_4th` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tech_photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `col` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_add` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=42 ;

--
-- Dumping data for table `oreg_tbl`
--

INSERT INTO `oreg_tbl` VALUES(38, '', '1', '1', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '1', 'à¦¬à§à¦¯à¦¬à¦¸à¦¾à§Ÿ à¦¶à¦¿à¦•à§à¦·à¦¾', 'à¦‰à§Žà¦ªà¦¾à¦¦à¦¨ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾à¦ªà¦¨à¦¾ à¦“ à¦¬à¦¿à¦ªà¦¨à§à¦¨ à§¨à§®à§¬-à§¨à§®à§­', ' à¦ªà§Œà¦°à¦¨à§€à¦¤à¦¿ à¦“ à¦¸à§à¦¶à¦¾à¦¸à¦¨ à§¨à§¬à§¯-à§¨à§­à§¦ ', 'à¦‰à§Žà¦ªà¦¾à¦¦à¦¨ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾à¦ªà¦¨à¦¾ à¦“ à¦¬à¦¿à¦ªà¦¨à§à¦¨ à§¨à§®à§¬-à§¨à§®à§­', 'à¦¸à¦¾à¦šà¦¿à¦¬à¦¿à¦• à¦¬à¦¿à¦¦à§à¦¯à¦¾ à¦“ à¦…à¦«à¦¿à¦¸ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾à¦ªà¦¨à¦¾ à§¨à§©à§«-à§¨à§©à§¬', '1489115854.jpg', 'à¦à¦•à¦¤à¦¾à¦°à¦ªà§à¦° à¦®à¦¡à§‡à¦² à¦‰à¦šà§à¦š à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿ,', 'kapilmuni, khulna');
INSERT INTO `oreg_tbl` VALUES(39, '', '2017010121', '2018', '2016-17', '01/05/2018', '00', 'à¦¶à¦¾à¦¹à¦¾à¦¬ à¦‰à¦¦à¦¿à§à¦¦à¦¨', 'à¦†à¦•à§à¦•à§‡à¦² à¦†à¦²à§€', 'à¦šà¦¾à¦¨à¦¬à¦°à§', 'sahabuddin', 'Akkel Ali', 'chanbaru', 'khila', 'charpadma', 'muladi', 'barishal', '01838088889', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '01', '', '', '', '', '', '1489906898.jpg', 'à¦¨à¦¾à¦°à¦¾à§Ÿà¦£à¦—à¦žà§à¦œ à¦ªà§à¦°à¦¿à¦ªà¦¾à¦°à§‡à¦Ÿà¦°à§€ à¦¸à§à¦•à§à¦², à¦¨à¦¾à¦°à¦¾à§Ÿà¦£à¦—à¦žà§à¦œ', ', à¦¨à¦¾à¦°à¦¾à§Ÿà¦£à¦—à¦žà§à¦œ');
INSERT INTO `oreg_tbl` VALUES(40, '', '2017010121', '2018', '2018-19', '01/05/2018', '00', 'à¦¶à¦¾à¦¹à¦¾à¦¬ à¦‰à¦¦à¦¿à§à¦¦à¦¨', 'à¦†à¦•à§à¦•à§‡à¦² à¦†à¦²à§€', 'à¦šà¦¾à¦¨à¦¬à¦°à§', 'sahabuddin', 'Akkel Ali', 'chanbaru', 'khila', 'charpadma', 'muladi', 'barishal', '01838088889', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '02', '', '', '', '', '', '1491030640.jpg', 'à¦¨à¦¾à¦°à¦¾à§Ÿà¦£à¦—à¦žà§à¦œ à¦ªà§à¦°à¦¿à¦ªà¦¾à¦°à§‡à¦Ÿà¦°à§€ à¦¸à§à¦•à§à¦²', 'à¦¨à¦¾à¦°à¦¾à§Ÿà¦£à¦—à¦žà§à¦œ');
INSERT INTO `oreg_tbl` VALUES(41, '', '25', '2017', '2017', '1/1/17', '1', 'mmmmmmmmm', 'mmmmmm', 'mmmmmmmm', '', '', '', 'j', 'f', 'd', 'd', 'dddd', 'www', 'ww', 'wwww', 'eee', 'ee', 'eeee', 'dd', 'ss', 'dd', 'dd', 'ddd', 'dd', 'e', 'ee', 'ee', 'tt', 'tt', 'g', 'g', 'g', 'g', 'g', '', '6', 'à¦®à¦¾à¦¨à¦¬à¦¿à¦•', 'à¦ªà§Œà¦°à¦¨à§€à¦¤à¦¿ à¦“ à¦¸à§à¦¶à¦¾à¦¸à¦¨ à§¨à§¬à§¯-à§¨à§­à§¦ ', '', 'à¦¬à§à¦¯à¦¬à¦¸à¦¾à§Ÿ à¦¸à¦‚à¦—à¦ à¦¨ à¦“ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾à¦ªà¦¨à¦¾ à§¨à§­à§­-à§¨à§­à§®', 'à¦œà§€à¦¬ à¦¬à¦¿à¦œà§à¦žà¦¾à¦£ à§§à§­à§®-à§§à§­à§¯', '1501982504.jpg', 'JORABARI GIRLS HIGH SCHOOL', 'POST: MIRJAGONJ UPAZILLA: DOMAR ZILLA: NILPHAMARI');

-- --------------------------------------------------------

--
-- Table structure for table `pnl_tbl`
--

CREATE TABLE `pnl_tbl` (
  `pnl_id` int(11) NOT NULL AUTO_INCREMENT,
  `pnl_nam` varchar(255) NOT NULL,
  `pnl_email` varchar(255) NOT NULL,
  `pnl_list` varchar(255) NOT NULL,
  `pnl_title` varchar(255) NOT NULL,
  `pnl_desc` text NOT NULL,
  `pnl_date` varchar(255) NOT NULL,
  PRIMARY KEY (`pnl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `pnl_tbl`
--

INSERT INTO `pnl_tbl` VALUES(8, 'à¦†à¦¬à§à¦² à¦¹à§‹à¦¸à¦¾à¦‡à¦¨ à¦®à§‹à¦ƒ à¦¨à§‡à¦›à¦¾à¦°à§à¦²à§à¦²à¦¾à¦¹', 'nasrulnanguli@gmail.com', 'Student Panel', 'à¦­à¦¾à¦²à§‹ à¦­à¦¾à¦¬à§‡ à¦ªà§œà¦¾à¦¶à§à¦¨à¦¾ à¦•à¦°à¦¿', '<p><em><strong>à¦¬à¦¨à§à¦§à§à¦°à¦¾, </strong></em></p>\r\n\r\n<p><em><strong>à¦†à¦®à¦¾à¦¦à§‡à¦° à¦œà§€à¦¬à¦¨ à¦›à¦¾à¦¤à§à¦° à¦œà§€à¦¬à¦¨à¥¤ à¦ à¦œà§€à¦¬à¦¨ à¦–à§à¦¬à¦‡ à¦¸à¦‚à¦•à§à¦·à¦¿à¦ªà§à¦¤ à¦“ à¦…à¦°à§à¦¥à¦¬à¦¹à¥¤ à¦ à¦œà§€à¦¬à¦¨ à¦¹à§‡à¦²à¦¾à§Ÿ à¦¨à¦·à§à¦Ÿ à¦•à¦°à¦¾ à¦¯à¦¾à¦¬à§‡à¦¨à¦¾à¥¤ à¦¤à¦¾à¦‡ à¦†à¦®à¦¿ à¦¨à¦¿à¦œà§‡ à¦ªà§œà¦¾à¦¶à§à¦¨à¦¾à§Ÿ à¦®à¦¨ à¦¦à¦¿à§Ÿà§‡à¦›à¦¿à¥¤ à¦¤à§‹à¦®à¦°à¦¾à¦“ à¦†à¦¶à¦¾à¦•à¦°à¦¿ à¦ªà§œà¦¾à¦¶à§à¦¨à¦¾à§Ÿ à¦®à¦¨ à¦¦à¦¿à¦¬à§‡à¥¤ à¦†à¦²à§à¦²à¦¾à¦¹ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦¸à¦•à¦²à¦•à§‡ à¦•à¦¬à§à¦² à¦•à¦°à§à¦¨à¥¤ à¦†à¦®à¦¿à¦¨à¥¤</strong></em></p>\r\n', 'à§¨à§¬/à§¦à§¯/à§¨à§¦à§§à§«');
INSERT INTO `pnl_tbl` VALUES(9, 'à¦†à¦¬à§à¦² à¦•à¦¾à¦²à¦¾à¦® à¦¨à§‡à¦›à¦¾à¦°à§€', 'aknesary@yahoo.com ', 'Student Panel', 'à¦…à¦¨à§à¦ªà¦® à¦¹à§‡ à¦¤à§à¦®à¦¿', '<p>à¦šà¦°à¦¾à¦šà¦°&nbsp;à¦¬à§à¦¯à¦¾à¦ªà¦¿&nbsp;à¦šà¦²à¦›à¦¿à¦²&nbsp;à¦¯à¦¬à§‡&nbsp;à¦†à¦à¦§à¦¾à¦°à§‡à¦°&nbsp;à¦˜à¦¨à¦˜à¦Ÿà¦¾,</p>\r\n\r\n<p>à¦ªà¦°à¦¾à¦œà¦¿à¦¤&nbsp;à¦¶à§à¦§à§&nbsp;à¦ªà¦°à¦¾à¦œà¦¿à¦¤&nbsp;à¦¹à¦¯à¦¼&nbsp;à¦¸à¦¤à§à¦¯à§‡à¦°&nbsp;à¦†à¦²à§‹à¦›à¦Ÿà¦¾!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>à¦ªà§à¦¬à§‡&nbsp;à¦ªà¦¶à§à¦šà¦¿à¦®à§‡&nbsp;à¦œà¦¾à¦—à§‡&nbsp;à¦¶à§à¦§à§&nbsp;à¦œà¦¾à¦—à§‡&nbsp;à¦¤à¦¾à¦—à§à¦¤&nbsp;à¦ªà¦¾à¦ªà§€à¦°&nbsp;à¦¦à¦²,</p>\r\n\r\n<p>à¦®à§à¦•à§à¦¤à¦¿à¦°&nbsp;à¦¬à¦¾à¦£à§€&nbsp;à¦®à¦¹à¦¿à¦®à¦¾à¦°&nbsp;à¦¬à¦¾à¦£à§€&nbsp;à¦¹à¦¯à¦¼à§‡&nbsp;à¦ªà¦¡à¦¼à§‡&nbsp;à¦¨à¦¿à¦¶à§à¦šà¦²!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>à¦šà¦¾à¦°à¦¿à¦¦à¦¿à¦•à§‡&nbsp;à¦¶à§à¦§à§&nbsp;à¦šà¦²à¦¿à¦¯à¦¼à¦¾à¦›à§‡&nbsp;à¦ªà¦¾à¦ª&nbsp;à¦ªà¦¾à¦ªà§€à¦¦à§‡à¦°&nbsp;à¦¹à¦¾à¦¤à¦¤à¦¾à¦²à¦¿,</p>\r\n\r\n<p>à¦¸à§‡&nbsp;à¦¦à§à¦°à§à¦¦à¦¿à¦¨à§‡à¦“&nbsp;à¦œà¦¾à¦—à§‡à¦¨à¦¿&nbsp;à¦œà¦¾à¦—à§‡à¦¨à¦¿ à¦­à§à¦¬à¦¨à§‡à¦°&nbsp;à¦¬à¦¨à¦®à¦¾à¦²à§€!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>à¦•à§à¦«à¦°&nbsp;à¦¶à¦¿à¦°à¦•à§‡&nbsp;à¦œà¦¾à¦¨à§à¦¨à¦¾à¦¤à¦¿&nbsp;à¦†à¦²à§‹&nbsp;à¦¨à¦¿à¦¶à§à¦šà§à¦ª&nbsp;à¦®à¦¹à¦¾&nbsp;à¦¹à¦¿à¦®,</p>\r\n\r\n<p>à¦ªà¦¥à¦¿à¦•&nbsp;à¦–à§à¦à¦œà¦¿à¦¯à¦¼à¦¾&nbsp;à¦ªà¦¾à¦¯à¦¼à¦¨à¦¿&nbsp;à¦¸à§‡à¦¦à¦¿à¦¨&nbsp;à¦¸à¦¿à¦°à¦¾à¦¤à§‡&nbsp;à¦®à§à¦¸à§à¦¤à¦¾à¦•à¦¿à¦®!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>à¦†à¦à¦§à¦¾à¦°à§‡à¦°&nbsp;à¦¸à¦¬&nbsp;à¦…à¦°à§à¦—à¦²&nbsp;à¦­à§‡à¦™à§‡&nbsp;à¦‰à¦¦à¦¿à¦¤ à¦¹à¦‡à¦²à§‡ à¦¯à¦¬à§‡,</p>\r\n\r\n<p>à¦œà¦¾à¦¨à§à¦¨à¦¾à¦¤à§‡à¦° à¦&nbsp;à¦²à¦¾à¦²&nbsp;à¦¨à¦¾à¦°à§à¦—à¦¿à¦¸&nbsp;à¦¸à§à¦¬à¦¾à¦¸&nbsp;à¦¬à¦¿à¦²à¦¾à¦¯à¦¼&nbsp;à¦¸à¦¬à§‡!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>à¦¸à¦šà§à¦› à¦šà¦°à¦¿à¦¤à¦¤&nbsp;à¦¤à¦¬&nbsp;à¦†à¦–à¦²à¦¾à¦•&nbsp;à¦®à¦¨à§‹à¦¹à¦°&nbsp;à¦®à¦¨à§‹à¦°à¦®,</p>\r\n\r\n<p>à¦¤à§‹à¦®à¦¾à¦°&nbsp;à¦•à¦¦à¦®à§‡&nbsp;à¦¹à§ƒà¦¦&nbsp;à¦‰à¦œà¦¡à¦¼à¦¿&nbsp;à¦¦à¦°à§‚à¦¦ à¦“&nbsp;à¦¸à¦¾à¦²à¦¾à¦®..!(à¦¸à¦‚à¦•à§à¦·à§‡à¦ªà¦¿à¦¤)</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'à§¨à§­/à§¦à§¯/à§¨à§¦à§§à§«');
INSERT INTO `pnl_tbl` VALUES(10, 'à¦†à¦¬à§à¦² à¦¹à¦¾à¦¸à¦¾à¦¨ à¦®à§‹à¦ƒ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹à¥¤ à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•, à¦¨à¦¾à¦™à§à¦—à§à¦²à§€ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¥¤         ', 'nasrulnanguli@gmail.com', 'Guardian Panel', 'à¦›à¦¾à¦¤à§à¦°à¦¦à§‡à¦°à¦•à§‡ à¦†à¦®à¦¾à¦° à¦ªà¦°à¦¾à¦®à¦°à§à¦¶', '<p>à¦¤à§‹à¦®à¦°à¦¾ à¦…à¦¬à¦¸à¦° à¦¸à¦®à§Ÿà§‡&nbsp; à¦¬à§à¦²à¦—à§‡ à¦²à§‡à¦–à¦¾- à¦²à§‡à¦–à¦¿ à¦•à¦°à§‡ à¦¤à§‹à¦®à¦¾à¦¦à§‡à¦° à¦ªà§à¦°à¦¤à¦¿à¦­à¦¾à¦° à¦¬à¦¿à¦•à¦¾à¦¶ à¦˜à¦Ÿà¦¾à¦¤à§‡ à¦ªà¦¾à¦°à§‹à¥¤ à¦¤à¦¬à§‡ à¦…à¦¬à¦¶à§à¦¯à¦‡ à¦•à§‹à¦¨à§‹ à¦‰à¦ªà¦¦à§‡à¦¶ à¦®à§‚à¦²à¦• à¦•à¦¥à¦¾, à¦¨à¦¿à¦œ à¦°à¦šà¦¿à¦¤&nbsp; à¦›à§œà¦¾, à¦•à¦¬à¦¿à¦¤à¦¾, à¦›à§‹à¦Ÿ à¦ªà§à¦°à¦¬à¦¨à§à¦§ , à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦¸à¦®à§à¦ªà¦°à§à¦•à§‡ à¦¤à§‹à¦®à¦¾à¦° à¦†à¦¬à§‡à¦—- à¦…à¦¨à§à¦­à§à¦¤à¦¿ à¦‡à¦¤à§à¦¯à¦¾à¦¦à¦¿ à¦¬à¦¿à¦·à§Ÿà¦¾à¦¬à¦²à§€ à¦²à¦¿à¦–à¦¬à§‡à¥¤ à¦†à¦°à¦¬à§€/ à¦‡à¦‚à¦°à§‡à¦œà§€à¦¤à§‡ à¦“ à¦•à¦¿à¦›à§ à¦²à¦¿à¦–à¦¤à§‡ à¦ªà¦¾à¦°à§‹à¥¤ à¦à¦¤à§‡ à¦¤à§‹à¦®à¦¾à¦° à¦¯à§‹à¦—à§à¦¯à¦¤à¦¾ à¦¬à¦¾à§œà¦¬à§‡à¥¤</p>\r\n', 'à§¨à§­/à§¦à§¯/à§¨à§¦à§§à§«');
INSERT INTO `pnl_tbl` VALUES(11, 'Abul Kalam Nesary', 'anesary@gmail.com', 'Student Panel', 'The role of Nanguli Madrasah in purifying human soul', '<p>All&nbsp;praise&nbsp;is&nbsp;due&nbsp;to&nbsp;Allah.&nbsp;Because&nbsp;his&nbsp;blessing&nbsp;can never&nbsp;be&nbsp;measured&nbsp;nor&nbsp;be&nbsp;calculated.&nbsp;He&nbsp;is&nbsp;the&nbsp;lord&nbsp;most&nbsp;compassionate&nbsp;and&nbsp;forgiving. &nbsp;Allah&nbsp;taala&nbsp;pities&nbsp;all&nbsp;human&nbsp;beings&nbsp;in&nbsp;the&nbsp;world.&nbsp;He&nbsp;creates&nbsp;and&nbsp;sends&nbsp;everyone&nbsp;the&nbsp;blessing&nbsp;they&nbsp;need.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>after&nbsp;that,&nbsp;blessing&nbsp;and&nbsp;peace&nbsp;be&nbsp;upon&nbsp;his&nbsp;messenger&nbsp;and&nbsp;servant&nbsp;Muhammad&nbsp;SM.&nbsp;and&nbsp;upon&nbsp;his&nbsp;family, companions&nbsp;and&nbsp;whoever&nbsp;follows&nbsp;his&nbsp;guidence&nbsp;untill&nbsp;the&nbsp;day&nbsp;of&nbsp;Resurrection.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Dear&nbsp;readers!&nbsp;If&nbsp;you&nbsp;cast a&nbsp;glance&nbsp;at&nbsp;the&nbsp;page&nbsp;of&nbsp;newspaper&nbsp;you&nbsp;will&nbsp;see a&nbsp;name&nbsp;of&nbsp;institution&nbsp;that&nbsp;has&nbsp;played&nbsp;an&nbsp;important&nbsp;role&nbsp;in&nbsp;the&nbsp;field&nbsp;of&nbsp;education.&nbsp;The&nbsp;name&nbsp;of&nbsp;this&nbsp;institution&nbsp;is&nbsp;Nanguli&nbsp;Nesaria&nbsp;Fazil&nbsp;madrasah.&nbsp;It&nbsp;is&nbsp;an&nbsp;exceptional&nbsp;institution &nbsp;among&nbsp;all&nbsp;the&nbsp;institutions&nbsp;of&nbsp;Bangladesh.&nbsp;Because&nbsp;it&nbsp;not&nbsp;only&nbsp;works&nbsp;in&nbsp;the&nbsp;field&nbsp;of&nbsp;external&nbsp;education&nbsp;but&nbsp;also&nbsp;works&nbsp;in&nbsp;the&nbsp;sectors&nbsp;of&nbsp;soul&nbsp;purification.&nbsp;It&nbsp;has&nbsp;great&nbsp;contribution&nbsp;in&nbsp;purifying&nbsp;soul&nbsp;and&nbsp;mind&nbsp;and&nbsp;removing&nbsp;all&nbsp;kinds&nbsp;of&nbsp;illness&nbsp;from&nbsp;heart.&nbsp;There&nbsp;are&nbsp;many&nbsp;maladies&nbsp;of&nbsp;our&nbsp;heart&nbsp;which&nbsp;stain&nbsp;our&nbsp;heart&nbsp;and&nbsp;make&nbsp;problem&nbsp;to&nbsp;stay&nbsp;in&nbsp;the&nbsp;way&nbsp;of&nbsp;almighty&nbsp;Allah.&nbsp;The&nbsp;maladies&nbsp;of&nbsp;heart&nbsp;are&nbsp;ignorance,&nbsp;following&nbsp;the&nbsp;desires&nbsp;of&nbsp;the&nbsp;soul (nafs), &nbsp;ostentation (Riya),&nbsp;worldly&nbsp;ambition,&nbsp;conceit (kibr),&nbsp;Jealousy (hasad)&nbsp;Harted&nbsp;red (hiqd),&nbsp;cowardice (jubn),&nbsp;perfidy (&nbsp;Hiyanat),&nbsp;sympathy&nbsp;for (fasiqs)&nbsp;Instigation (fitna). e.t.c.&nbsp;These&nbsp;are&nbsp;illness&nbsp;of&nbsp;heart.&nbsp;Nanguli&nbsp;Madrasah&nbsp;has&nbsp;great&nbsp;contribution&nbsp;in&nbsp;removing&nbsp;these&nbsp;and&nbsp;purifying&nbsp;souls&nbsp;from&nbsp;these&nbsp;maladies.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Nanguli&nbsp;madrasah&nbsp;has&nbsp;taken a&nbsp;great&nbsp;step&nbsp;to&nbsp;prevent&nbsp;following&nbsp;the&nbsp;desires&nbsp;of&nbsp;the&nbsp;nafs.&nbsp;which&nbsp;reaches a&nbsp;person&nbsp;to&nbsp;help.&nbsp;Every&nbsp;member&nbsp;of&nbsp;this&nbsp;institution&nbsp;is&nbsp;aware&nbsp;about&nbsp;it.&nbsp;Besides&nbsp;this&nbsp;institution&nbsp;has&nbsp;no&nbsp;co-education.&nbsp;It&nbsp;is&nbsp;helper&nbsp;against&nbsp;nafs.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>We&nbsp;know&nbsp;that &quot;Riya&quot;&nbsp;is a&nbsp;serious&nbsp;problem&nbsp;for&nbsp;every&nbsp;person&nbsp;who&nbsp;desires&nbsp;satisfaction&nbsp;of&nbsp;Allah&nbsp;taala. I&nbsp;must&nbsp;say&nbsp;that&nbsp;this&nbsp;institution&nbsp;makes&nbsp;its&nbsp;every&nbsp;member a&nbsp;real&nbsp;pious&nbsp;person&nbsp;by&nbsp;avoiding&nbsp;or&nbsp;shunning &quot;Riya&quot;.&nbsp;No&nbsp;one&nbsp;can&nbsp;avoid&nbsp;this&nbsp;universal&nbsp;truth.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It&nbsp;is&nbsp;recognized&nbsp;that&nbsp;conceit (Kibr)&nbsp;caused&nbsp;by&nbsp;the&nbsp;following&nbsp;seven&nbsp;reasons&nbsp;knowledge&nbsp;or&nbsp;religious&nbsp;knowledge,&nbsp;performing&nbsp;good&nbsp;deeds&nbsp;or&nbsp;worships&nbsp;lineage,&nbsp;beauty,&nbsp;streangth,&nbsp;property&nbsp;and&nbsp;rank.&nbsp;Existence&nbsp;of&nbsp;these&nbsp;attributes&nbsp;with&nbsp;ignorant&nbsp;peaple&nbsp;causes&nbsp;cinceipt&nbsp;in&nbsp;them. &nbsp;I&nbsp;say, a&nbsp;person&nbsp;who&nbsp;wants&nbsp;to&nbsp;omit&nbsp;his&nbsp;conceit&nbsp;from&nbsp;his&nbsp;heart&nbsp;he&nbsp;should&nbsp;come&nbsp;Nanguli&nbsp;madrasah.&nbsp;Because&nbsp;it&nbsp;has a&nbsp;great&nbsp;importance&nbsp;in&nbsp;this&nbsp;sector.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>It&nbsp;is&nbsp;mentioned&nbsp;that&nbsp;some&nbsp;illness&nbsp;of&nbsp;heart&nbsp;create&nbsp;problem&nbsp;to&nbsp;purify&nbsp;mind&nbsp;and&nbsp;soul.&nbsp;Nanguli&nbsp;is&nbsp;an&nbsp;institution&nbsp;which&nbsp;has&nbsp;tajen&nbsp;steps&nbsp;to&nbsp;remove&nbsp;all types&nbsp;of &nbsp;illness&nbsp;from&nbsp;heart&nbsp;of&nbsp;its&nbsp;member.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>At&nbsp;last, I&nbsp;present&nbsp;my&nbsp;expectation&nbsp;infornt&nbsp;of&nbsp;those&nbsp;who&nbsp;will&nbsp;read&nbsp;this&nbsp;essay&nbsp;that I&nbsp;wish I&nbsp;were a&nbsp;servant&nbsp;of&nbsp;this&nbsp;institution. I&nbsp;would&nbsp;be a&nbsp;devoted&nbsp;servant&nbsp;here.&nbsp;Because&nbsp;it&nbsp;would&nbsp;be a&nbsp;medium&nbsp;for&nbsp;me&nbsp;to&nbsp;get&nbsp;rid&nbsp;of&nbsp;release&nbsp;in&nbsp;the&nbsp;hereafter&nbsp;life..</p>\r\n', '28/09/2015');
INSERT INTO `pnl_tbl` VALUES(13, 'à¦†à¦¬à§à¦² à¦•à¦¾à¦²à¦¾à¦® à¦¨à§‡à¦›à¦¾à¦°à§€ ', 'anesary@gmail.com', 'Student Panel', 'à¦¹à§‡ à¦¨à¦¾à¦™à§à¦—à§à¦²à§€! ', '<p>à¦¹à§‡&nbsp;à¦¨à¦¾à¦™à§à¦—à§à¦²à§€! &nbsp;à¦¤à¦¿à¦®à¦¿&nbsp;à¦¨à¦¿à¦°à§à¦­à§€à¦• à¦¯à§‹à¦¦à§à¦§à¦¾&nbsp;à¦®à§à¦•à§à¦¤&nbsp;à¦¸à¦®à¦°à¦¾à¦™à§à¦—à¦¨à§‡,</p>\r\n\r\n<p>à¦à¦—à¦¿à¦¯à¦¼à§‡&nbsp;à¦šà¦²à§‹&nbsp;à¦†à¦ªà¦¨&nbsp;à¦—à¦¤à¦¿à¦¤à§‡&nbsp;à¦¸à¦¾à¦¹à¦¸&nbsp;à¦°à¦¾à¦–à¦¿à¦“&nbsp;à¦®à¦¨à§‡!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>à¦¤à§à¦®à¦¿&nbsp;à¦šà¦žà§à¦šà¦²,&nbsp;à¦šà¦¿à¦°&nbsp;à¦¦à§à¦°à§à¦œà¦¯à¦¼,&nbsp;à¦¨à¦¹&nbsp;à¦¨à¦¹&nbsp;à¦•à¦­à§&nbsp;à¦°à¦¿à¦•à§à¦¤,</p>\r\n\r\n<p>à¦¶à¦¤&nbsp;à¦†à¦‰à¦²à¦¿à¦¯à¦¼à¦¾à¦°&nbsp;à¦¦à§‹à¦¯à¦¼à¦¾à¦° à¦«à¦¸à¦², à¦•à¦¤ à¦…à¦¶à§à¦°à§à¦œà¦²à§‡&nbsp;à¦¤à§à¦®à¦¿&nbsp;à¦¸à¦¿à¦•à§à¦¤!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>à¦•à§‹à¦°à¦†à¦¨ à¦¤à§‡à¦²à¦¾à¦“à¦¯à¦¼à¦¾à¦¤,&nbsp;à¦œà¦¿à¦•à¦¿à¦°,&nbsp;à¦¦à¦°à§‚à¦¦ à¦¯à§‡à¦¨ à¦®à¦¦à§€à¦¨à¦¾à¦°&nbsp;à¦¦à§ƒà¦¶à§à¦¯,</p>\r\n\r\n<p>à¦¤à¦¬&nbsp;à¦•à¦¾à¦«à§‡à¦²à¦¾à¦‡&nbsp;à¦¸à¦¬à¦¾à¦°&nbsp;à¦…à¦—à§à¦°à§‡&nbsp;à¦œà¦¯à¦¼&nbsp;à¦•à¦°à§à¦• à¦&nbsp;à¦¬à¦¿à¦¶à§à¦¬!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>à¦¶à¦¾à¦¹&nbsp;à¦¸à¦¾à¦²à§‡à¦¹à§‡à¦°&nbsp;à¦¸à§à¦®à§ƒà¦¤à¦¿à¦§à¦¨à§à¦¯&nbsp;à¦¤à§à¦®à¦¿&nbsp;à¦¶à¦¾à¦¹&nbsp;à¦¨à§‡à¦›à¦¾à¦°à§‡à¦°&nbsp;à¦¦à§‹à¦¯à¦¼à¦¾à¦°&nbsp;à¦«à¦²,</p>\r\n\r\n<p>à¦•à¦¾à¦¯à¦¼à§‡à¦¦ à¦›à¦¾à¦¹à§‡à¦¬à§‡à¦°&nbsp;à¦•à¦¤&nbsp;à¦…à¦¶à§à¦°à§à¦¤à§‡&nbsp;à¦‰à¦°à§à¦¬à¦°&nbsp;à¦¹à¦¯à¦¼à§‡à¦›à§‡&nbsp;à¦¤à§‹à¦®à¦¾à¦°&nbsp;à¦•à§‹à¦²!</p>\r\n\r\n<p>à¦¤à§à¦®à¦¿&nbsp;à¦à¦—à¦¿à¦¯à¦¼à§‡&nbsp;à¦šà¦²à§‹&nbsp;à¦¨à¦¾à¦™à§à¦—à§à¦²à§€!&nbsp;à¦à¦—à¦¿à¦¯à¦¼à§‡&nbsp;à¦šà¦²à§‹,&nbsp;à¦•à¦¿à¦¸à§‡à¦°&nbsp;à¦­à¦¯à¦¼&nbsp;à¦¤à§‹à¦®à¦¾à¦°?</p>\r\n\r\n<p>à¦¦à§à¦°à§à¦¬à¦¾à¦°&nbsp;à¦¸à¦¾à¦¹à¦¸à¦¿à¦•à¦¤à¦¾à¦¯à¦¼&nbsp;à¦¤à§à¦®à¦¿&nbsp;à¦šà¦®à¦•à§‡&nbsp;à¦¦à¦¾à¦“ à¦&nbsp;à¦¬à¦¿à¦¶à§à¦¬&nbsp;à¦šà¦°à¦¾à¦šà¦°!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>à¦¶à¦¤&nbsp;à¦¬à¦¾à¦§à¦¾,&nbsp;à¦¬à¦¿à¦˜à§à¦¨,&nbsp;à¦¸à¦™à§à¦•à¦Ÿ&nbsp;à¦¤à¦¬&nbsp;à¦¸à¦®à§à¦®à§à¦–à§‡&nbsp;à¦¹à§‹à¦•&nbsp;à¦¦à¦¾à¦¡à¦¼,</p>\r\n\r\n<p>à¦¹à¦¾à¦°à¦¿à¦¬à§‡&nbsp;à¦¨à¦¾&nbsp;à¦•à¦­à§,&nbsp;à¦ªà¦¿à¦·à§à¦Ÿ&nbsp;à¦•à¦°à§‹&nbsp;à¦ªà¦¦à¦¤à¦²à§‡&nbsp;à¦¸à¦¬&nbsp;à¦¬à¦¾à¦§à¦¾à¦°&nbsp;à¦ªà¦¾à¦¹à¦¾à¦¡à¦¼!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>à¦¹à§‡&nbsp;à¦¨à¦¾à¦™à§à¦—à§à¦²à§€! &nbsp;à¦¤à§à¦®à¦¿&nbsp;à¦¸à§à¦¨à§‡à¦¹,&nbsp;à¦®à¦¾à¦¯à¦¼à¦¾&nbsp;à¦­à¦¾à¦²à§‹à¦¬à¦¾à¦¸à¦¾à¦°&nbsp;à¦‰à¦¦à§à¦¦à§€à¦ªà§à¦¤&nbsp;à¦ªà§à¦°à¦¤à§€à¦•,</p>\r\n\r\n<p>à¦¤à¦¬&nbsp;à¦®à¦®à¦¤à¦¾à¦¯à¦¼&nbsp;à¦®à§à¦—à§à¦§&nbsp;à¦¹à¦¯à¦¼à§‡&nbsp;à¦•à¦¤&nbsp;à¦§à¦°à§‡à¦›à§‡&nbsp;à¦ªà¦¥&nbsp;à¦¸à¦ à¦¿à¦•..!</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>à¦¹à§ƒà¦¦à¦¯à¦¼&nbsp;à¦‰à¦œà¦¾à¦¡à¦¼&nbsp;à¦•à¦°&nbsp;à¦¸à¦¦à¦¾&nbsp;à¦¤à§à¦®à¦¿ à¦°à¦•à§à¦·à¦¿à¦¤à§‡&nbsp;à¦–à§‹à¦¦à¦¾à¦°&nbsp;à¦¦à§à¦¬à§€à¦¨,</p>\r\n\r\n<p>à¦¤à¦¬à§‡&nbsp;à¦¹à¦¬à§‡à¦‡&nbsp;à¦¤à§à¦®à¦¿&nbsp;à¦šà¦¿à¦°&nbsp;à¦…à¦®à¦°&nbsp;à¦•à¦­à§&nbsp;à¦¹à¦¬à§‡&nbsp;à¦¨à¦¾à¦•à§‹&nbsp;à¦¬à¦¿à¦²à§€à¦¨.......&nbsp;:-)</p>\r\n', 'à§¦à§¬/à§§à§¦/à§¨à§¦à§§à§«');
INSERT INTO `pnl_tbl` VALUES(14, 'à¦†à¦¬à§à¦² à¦¹à¦¾à¦¸à¦¾à¦¨ à¦®à§‹à¦ƒ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹à¥¤ à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•, à¦¨à¦¾à¦™à§à¦—à§à¦²à§€ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¥¤', 'nasrulnanguli@gmail.com', 'Guardian Panel', 'à¦¹à§ƒà¦¦à§Ÿ à¦œà§à§œà¦¾à¦¨à§‹ à¦•à¦¬à¦¿à¦¤à¦¾...............', '<p>à¦†à¦¬à§à¦² à¦•à¦¾à¦²à¦¾à¦® à¦¨à§‡à¦›à¦¾à¦°à§€à¦° à¦•à¦¬à¦¿à¦¤à¦¾à¦Ÿà¦¿ à¦ªà§œà§‡ à¦¸à¦¤à§à¦¯à¦¿à¦‡&nbsp; à¦¹à§ƒà¦¦à§Ÿ à¦œà§à§œà¦¿à§Ÿà§‡ à¦—à§‡à¦²à§‹à¥¤ à¦†à¦²à§à¦²à¦¾à¦¹ à¦¤à¦¾à¦•à§‡ à¦…à¦¨à§‡à¦• à¦ªà§à¦°à¦¤à¦¿à¦­à¦¾ à¦¦à¦¿à§Ÿà§‡à¦›à§‡à¦¨à¥¤à§à¦¤à¦¿à¦¨à¦¿ à¦†à¦°à§‹ à¦ªà§à¦°à¦¤à¦¿à¦­à¦¾ à¦¬à¦¾à§œà¦¿à§Ÿà§‡ à¦¦à¦¿à¦¨---------------- à¦ à¦•à¦¾à¦®à¦¨à¦¾ à¦“ à¦¦à§‹à§Ÿà¦¾ à¦®à§‹à¦¦à§‡à¦° à¦¸à¦•à¦²à§‡à¦°à¥¤ à¦†à¦®à§€à¦¨! à¦›à§à¦®à§à¦®à¦¾ à¦†à¦®à§€à¦¨!</p>\r\n', 'à§¦à§¬/à§§à§¦/à§¨à§¦à§§à§«');
INSERT INTO `pnl_tbl` VALUES(15, 'à¦†à¦¬à§à¦² à¦•à¦¾à¦²à¦¾à¦® à¦¨à§‡à¦›à¦¾à¦°à§€ ', 'anesary@gmail.com', 'Student Panel', 'à¦¹à¦¿à¦œà¦°à§€ à¦¸à¦¨', 'à¦¬à¦°à§à¦· à¦˜à§à¦°à§‡ à¦¹à¦°à§à¦· à¦­à¦°à§‡ à¦¹à¦¿à¦œà¦°à§€ à¦¸à¦¨à§‡à¦° à¦†à¦—à¦®à¦¨,\r\nà¦¦à§à¦ƒà¦– à¦­à§à¦²à§‡ à¦‰à¦ à¦²à§‹ à¦¦à§à¦²à§‡ à¦¨à¦¤à§à¦¨ à¦•à¦°à§‡ à¦¸à¦¬à¦¾à¦° à¦®à¦¨!\r\n.\r\nà¦•à¦¾à¦¬à§à¦¯ à¦›à¦¡à¦¼à¦¾à¦¯à¦¼ à¦¯à¦¾à¦¯à¦¼ à¦²à§‡à¦–à¦¾ à¦¯à¦¾à¦¯à¦¼ à¦…à¦¨à§‡à¦• à¦•à¦¥à¦¾ à¦à¦­à¦¾à¦¬à§‡,\r\nà¦¬à¦¾à¦¸à§à¦¤à¦¬à¦¤à¦¾ à¦¸à¦¤à§à¦¯ à¦•à¦¥à¦¾ à¦à¦•à¦Ÿà§ à¦ªà§ƒà¦¥à¦• à¦“à¦­à¦¾à¦¬à§‡!\r\n.\r\nà¦¨à¦¤à§à¦¨ à¦¸à¦¨à§‡ à¦®à§à¦®à¦¿à¦¨ à¦®à¦¨à§‡ à¦¨à§‡à¦‡ à¦•à§‹à¦¨ à¦†à¦œ à¦šà§‡à¦¤à¦¨à¦¾,\r\nà¦¬à§‡à¦¹à§à¦¶ à¦œà¦¾à¦¤à¦¿ à¦†à¦®à¦°à¦¾ à¦…à¦¤à¦¿ à¦¸à¦‚à¦œà§à¦žà¦¾à¦¹à¦¾à¦°à¦¾ à¦•à¦¤à¦¨à¦¾!\r\n.\r\nà¦‡à¦‚à¦°à§‡à¦œà§€à¦¤à§‡ à¦®à§à¦–à§‡ à¦®à§à¦–à§‡ à¦¶à§à¦¨à¦¿ "à¦¹à§à¦¯à¦¾à¦ªà¦¿ à¦¨à¦¿à¦‰ à¦‡à¦¯à¦¼à¦¾à¦°"\r\n"à¦›à¦¾à¦¨à¦¾à¦¤à§à¦¨- à¦œà¦¾à¦¦à§€à¦¦à¦¾à¦¤à§à¦¨" à¦«à§‹à¦Ÿà§‡ à¦¨à¦¾ à¦¯à§‡ à¦•à¦£à§à¦ à§‡ à¦†à¦°!\r\n.\r\nà¦šà¦¨à§à¦¦à§à¦°à¦®à¦¾à¦¸à§‡à¦° à¦–à¦¬à¦° à¦•à§‡à¦¹ à¦†à¦°à¦¤à§‹ à¦à¦–à¦¨ à¦°à¦¾à¦–à§‡ à¦¨à¦¾,\r\nà¦¦à¦¿à¦¨ à¦¤à¦¾à¦°à¦¿à¦–à§‡ à¦¶à§à¦§à§à¦‡ à¦¤à¦¾à¦¹à¦¾ à¦ªà¦žà§à¦œà¦¿à¦•à¦¾à¦¤à§‡ à¦®à§à¦–à§‡ à¦¨à¦¾!\r\n.\r\nà¦·à§‹à¦² à¦•à§‹à¦Ÿà¦¿ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§€à¦° à¦¨à¦¬à§à¦¬à¦‡ à¦­à¦¾à¦— à¦®à§à¦¸à¦²à¦®à¦¾à¦¨,\r\nà¦•à¦œà¦¨à¦‡ à¦¬à¦¾ à¦°à¦¾à¦–à¦›à§‡ à¦–à¦¬à¦° à¦†à¦œà¦•à§‡ à¦¶à§à¦°à§ à¦®à¦¹à¦°à¦°à¦®!\r\n.\r\nà¦…à¦²à¦¸ à¦œà¦¾à¦¤à¦¿ à¦¨à¦¿à¦¦à§à¦°à¦¾ à¦›à§‡à¦¡à¦¼à§‡ à¦à¦•à¦Ÿà§ à¦œà§‡à¦—à§‡ à¦“à¦ à¦¨à¦¾!\r\nà¦—à§‹à¦²à¦¾à¦ª à¦•à¦²à¦¿ à¦ªà§à¦·à§à¦ª à¦¹à¦¯à¦¼à§‡ à¦§à¦°à¦¾à¦° à¦¬à§à¦•à§‡ à¦«à§‹à¦Ÿà¦¨à¦¾!!\r\n.\r\nà¦†à¦° à¦•à¦¤à¦•à¦¾à¦² à¦¥à¦¾à¦•à¦¬à§‡ à¦¤à§à¦®à¦¿ à¦˜à§à¦®à§‡à¦° à¦˜à§‹à¦°à§‡ à¦…à¦šà§‡à¦¤à¦¨,\r\nà¦†à¦²à§à¦²à¦¾à¦¹à§ à¦†à¦•à¦¬à¦¾à¦° à¦¤à¦¾à¦•à¦¬à§€à¦° à¦¤à§à¦²à§‡ à¦¨à¦¬à¦¯à§à¦—à§‡à¦° à¦¨à¦¾à¦“ à¦•à§‡à¦¤à¦¨!!', 'à§¦à§§/à§¦à§§/à§§à§ªà§©à§­');
INSERT INTO `pnl_tbl` VALUES(17, ' à¦†à¦¬à§à¦² à¦•à¦¾à¦²à¦¾à¦® à¦¨à§‡à¦›à¦¾à¦°à§€ ', 'anesary@gmail.com', 'Public Exam Panel', 'à¦•à¦¿ à¦•à¦°à§‡ à¦¤à§‹à¦®à¦¾à¦•à§‡ à¦­à§à¦²à¦¿', 'à¦¹à§‡ à¦¨à¦¾à¦™à§à¦—à§à¦²à§€!\r\nà¦•à¦¿ à¦•à¦°à§‡ à¦¤à§‹à¦®à¦¾à¦•à§‡ à¦­à§à¦²à¦¿..\r\nà¦®à¦¨à§‡ à¦ªà¦¡à¦¼à§‡ à¦¬à¦¾à¦°à¦¬à¦¾à¦° à¦…à¦¤à§€à¦¤à§‡à¦° à¦¸à§à¦®à§ƒà¦¤à¦¿à¦®à¦¾à¦–à¦¾ à¦¸à§‹à¦¨à¦¾à¦²à§€ à¦¸à§‡ à¦¦à¦¿à¦¨à¦—à§à¦²à¦¿..\r\nà¦¹à§‡ à¦¨à¦¾à¦™à§à¦—à§à¦²à§€!\r\nà¦•à¦¿ à¦•à¦°à§‡ à¦¤à§‹à¦®à¦¾à¦•à§‡ à¦­à§à¦²à¦¿...\r\n\r\nà¦¬à¦¸à¦¿ à¦¯à¦¬à§‡ à¦¨à¦¿à¦°à¦¾à¦²à¦¾à¦¯à¦¼\r\nà¦®à¦¨ à¦¶à§à¦§à§ à¦«à¦¿à¦°à§‡ à¦¯à¦¾à¦¯à¦¼\r\nà¦†à¦à¦–à¦¿ à¦®à§à¦¦à§‡ à¦­à¦¾à¦¬à¦¿ à¦†à¦° à¦¡à¦¾à¦¯à¦¼à§‡à¦°à§€à¦° à¦ªà¦¾à¦¤à¦¾à¦—à§à¦²à¦¿ à¦¨à§€à¦°à¦¬à§‡ à¦–à§à¦²à¦¿\r\nà¦•à¦¿ à¦•à¦°à§‡ à¦¤à§‹à¦®à¦¾à¦•à§‡ à¦­à§à¦²à¦¿\r\nà¦¹à§‡ à¦¨à¦¾à¦™à§à¦—à§à¦²à§€!!\r\n\r\n', 'à§§à§®/à§§à§¨/à§¨à§¦à§§à§«');
INSERT INTO `pnl_tbl` VALUES(18, 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹à¥¤ à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•, à¦¨à¦¾à¦‚à¦—à§à¦²à§€ à¦¨à§‡à¦›à¦¾à¦°à¦¿à§Ÿà¦¾ à¦«à¦¾à¦œà¦¿à¦² à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¥¤', 'nasrulnanguli@gmail.com', 'Public Exam Panel', 'à¦à¦¬à¦¾à¦°à§‡à¦° à¦‡à¦¬à¦¤à§‡à¦¦à¦¾à§Ÿà§€ à¦¸à¦®à¦¾à¦ªà¦¨à§€ à¦“ à¦œà§‡à¦¡à¦¿à¦¸à¦¿ à¦ªà¦°à§€à¦•à§à¦·à¦¾à§Ÿà¦“ à¦¨à¦¾à¦‚à¦—à§à¦²à§€ à¦¨à§‡à¦›à¦¾à¦°à¦¿à§Ÿà¦¾ à¦«à¦¾à¦œà¦¿à¦² à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦•à¦¾à¦‰à¦–à¦¾à¦²à§€ à¦‰à¦ªà¦œà§‡à¦²à¦¾à§Ÿ à¦¸à¦°à§', '<p>à¦à¦¬à¦¾à¦°à§‡à¦° à¦‡à¦¬à¦¤à§‡à¦¦à¦¾à§Ÿà§€ à¦¸à¦®à¦¾à¦ªà¦¨à§€ à¦“ à¦œà§‡à¦¡à¦¿à¦¸à¦¿ à¦ªà¦°à§€à¦•à§à¦·à¦¾à§Ÿà¦“ à¦¨à¦¾à¦‚à¦—à§à¦²à§€ à¦¨à§‡à¦›à¦¾à¦°à¦¿à§Ÿà¦¾ à¦«à¦¾à¦œà¦¿à¦² à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦•à¦¾à¦‰à¦–à¦¾à¦²à§€ à¦‰à¦ªà¦œà§‡à¦²à¦¾à§Ÿ à¦¸à¦°à§à¦¬à¦¶à§€à¦°à§à¦·à§‡à¥¤<br />\r\nà¦œà§‡à¦¡à¦¿à¦¸à¦¿à¦¤à§‡ à¦®à§‹à¦Ÿ- à§©à§¨ à¦œà¦¨ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¦° à¦®à¦§à§à¦¯à§‡ (à¦ªà§à¦°à§à¦· à¦“ à¦®à¦¹à¦¿à¦²à¦¾ à¦¶à¦¾à¦–à¦¾)----------------<br />\r\nà§«à¦Ÿà¦¿-- à¦ +,<br />\r\nà§§à§¯à¦Ÿà¦¿-- à¦,<br />\r\nà§¬ à¦Ÿà¦¿-- à¦-,<br />\r\nà§¨ à¦Ÿà¦¿-- à¦¬à¦¿<br />\r\nà¦¸à¦®à¦¾à¦ªà¦¨à§€à¦¤à§‡ à¦®à§‹à¦Ÿ à§¨à§¯ à¦œà¦¨ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¦° à¦®à¦§à§à¦¯à§‡ (à¦ªà§à¦°à§à¦· à¦“ à¦®à¦¹à¦¿à¦²à¦¾ à¦¶à¦¾à¦–à¦¾)-------------------<br />\r\nà§¨à¦Ÿà¦¿--- à¦ +,<br />\r\nà§¨à§­ à¦Ÿà¦¿--- à¦,<br />\r\n(à¦‰à¦²à§à¦²à§‡à¦–à§à¦¯, à¦¸à¦®à¦¾à¦ªà¦¨à§€à¦¤à§‡ à¦•à§‡à¦¨à§à¦¦à§à¦°à§‡à¦° à¦®à§‹à¦Ÿ à§© à¦Ÿà¦¿ à¦+ à¦à¦° à¦®à¦¾à¦à§‡ à§¨ à¦Ÿà¦¿à¦‡ à¦¨à¦¾à¦™à§à¦—à§à¦²à§€ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦ªà§‡à§Ÿà§‡à¦›à§‡à¥¤)</p>\r\n', 'à§¦à§¨-à§¦à§§-à§¨à§¦à§§à§¬ ');
INSERT INTO `pnl_tbl` VALUES(19, 'à¦®à§‹à¦¬à¦¾à§Ÿà§‡à¦¦à§à¦° à¦°à¦¹à¦®à¦¾à¦¨   Copyright Daily Inqilab', 'http://www.dailyinqilab.com', 'Guardian Panel', 'à¦ªà¦¿à¦¨à¦¾à¦•à¦¿ à¦¬à¦¾à¦¬à§à¦° à¦¸à§à¦Ÿà§à¦¯à¦¾à¦Ÿà¦¾à¦¸ à¦“ à¦¬à§à¦°à¦¾à¦¹à§à¦®à¦£à¦¬à¦¾à§œà¦¿à§Ÿà¦¾à¦° à¦˜à¦Ÿà¦¨à¦¾   Copyright Daily Inqilab', '<p><strong>à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡à¦° à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨ à¦°à¦¾à¦œà¦¨à§ˆà¦¤à¦¿à¦• à¦ªà¦°à¦¿à¦¸à§à¦¥à¦¿à¦¤à¦¿ à¦à¦¬à¦‚ à¦°à¦¾à¦œà¦¨à§ˆà¦¤à¦¿à¦• à¦¸à¦‚à¦¸à§à¦•à§ƒà¦¤à¦¿à¦•à§‡ à¦à¦®à¦¨ à¦à¦•à¦Ÿà¦¿ à¦…à¦¬à¦¸à§à¦¥à¦¾à§Ÿ à¦¨à¦¿à§Ÿà§‡ à¦†à¦¸à¦¾ à¦¹à§Ÿà§‡à¦›à§‡ à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦®à¦¨à§‡ à¦¹à§Ÿ à¦¯à§‡, à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦®à¦¾à¦¨à§‡à¦‡ à¦…à¦¶à¦¿à¦•à§à¦·à¦¾ à¦•à§à¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦¸à§à¦¥à¦¾à¦¨ à¦à¦¬à¦‚ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦›à¦¾à¦¤à§à¦° à¦“ à¦¶à¦¿à¦•à§à¦·à¦• à¦®à¦¾à¦¨à§‡à¦‡ à¦…à¦šà§à¦›à§à§Žà¥¤ à¦¤à¦¾à¦¦à§‡à¦° à¦¸à¦®à§à¦ªà¦°à§à¦•à§‡ à¦à¦–à¦¨ à¦à¦®à¦¨ à¦…à¦¬à¦œà§à¦žà¦¾ à¦à¦¬à¦‚ à¦¤à§à¦šà§à¦›-à¦¤à¦¾à¦šà§à¦›à¦¿à¦²à§à¦¯ à¦¦à§‡à¦–à¦¾à¦¨à§‹ à¦¹à§Ÿ à¦¯à§‡, à¦®à¦¨à§‡ à¦¹à§Ÿ, à¦“à¦°à¦¾ à¦®à¦¾à¦¨à§à¦· à¦¨à§Ÿ, à¦“à¦°à¦¾ &lsquo;à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦›à¦¾à¦¤à§à¦°&rsquo;à¥¤ à¦¤à¦¾à¦‡ à¦“à¦¦à§‡à¦° à¦®à§ƒà¦¤à§à¦¯à§à¦¤à§‡à¦“ à¦•à¦¿à¦›à§ à¦à¦¸à§‡ à¦¯à¦¾à§Ÿ à¦¨à¦¾à¥¤ à¦¬à§à¦°à¦¾à¦¹à§à¦®à¦£à¦¬à¦¾à§œà¦¿à§Ÿà¦¾à§Ÿ à¦¯à¦¾ à¦•à¦¿à¦›à§ à¦˜à¦Ÿà¦²à§‹ à¦¤à¦¾à¦° à¦®à§‚à¦²à§‡ à¦›à¦¿à¦² à¦à¦•à¦œà¦¨ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦›à¦¾à¦¤à§à¦°à¦•à§‡ à¦ªà¦¿à¦Ÿà¦¿à§Ÿà§‡ à¦…à¦¥à¦¬à¦¾ à¦—à§à¦²à¦¿ à¦•à¦°à§‡ à¦¹à¦¤à§à¦¯à¦¾ à¦•à¦°à¦¾ (à¦®à¦¤à¦¾à¦¨à§à¦¤à¦°à§‡ à¦›à¦¾à¦¦ à¦¥à§‡à¦•à§‡ à¦«à§‡à¦²à§‡ à¦¦à¦¿à§Ÿà§‡ à¦¹à¦¤à§à¦¯à¦¾ à¦•à¦°à¦¾)à¥¤ à¦à¦°à¦ªà¦° à¦ªà§à¦°à¦¤à¦¿à¦•à§à¦°à¦¿à§Ÿà¦¾ à¦¹à¦¿à¦¸à¦¾à¦¬à§‡ à¦¯à¦¾ à¦•à¦¿à¦›à§ à¦˜à¦Ÿà§‡à¦›à§‡ à¦¸à§‡à¦—à§à¦²à¦¿à¦•à§‡ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦›à¦¾à¦¤à§à¦° à¦“ à¦¶à¦¿à¦•à§à¦·à¦•à¦¦à§‡à¦° &lsquo;à¦¤à¦¾-à¦¬&rsquo; à¦¬à¦²à§‡ à¦¸à§‡à¦•à§à¦¯à§à¦²à¦¾à¦° à¦“ à¦¬à¦¾à¦® à¦˜à¦°à¦¾à¦¨à¦¾à¦° à¦ªà¦²à¦¿à¦Ÿà¦¿à¦¶à¦¿à§Ÿà¦¾à¦¨ à¦“ à¦¬à§à¦¦à§à¦§à¦¿à¦œà§€à¦¬à§€ à¦à¦¬à¦‚ à¦ à¦˜à¦°à¦¾à¦¨à¦¾à¦° à¦ªà¦¤à§à¦°-à¦ªà¦¤à§à¦°à¦¿à¦•à¦¾ à¦“ à¦‡à¦²à§‡à¦•à¦Ÿà§à¦°à¦¨à¦¿à¦• à¦®à¦¿à¦¡à¦¿à§Ÿà¦¾ à¦…à¦­à¦¿à¦¹à¦¿à¦¤ à¦•à¦°à§‡à¦›à§‡à¥¤ à¦…à¦¥à¦š à¦à¦•à¦œà¦¨ à¦¤à¦¾à¦œà¦¾ à¦¤à¦°à§à¦£ à¦ªà§à¦²à¦¿à¦¶à¦¿ à¦¬à¦¾ à¦¦à¦² à¦¬à¦¿à¦¶à§‡à¦·à§‡à¦° à¦•à§à¦¯à¦¾à¦¡à¦¾à¦°à§‡à¦° à¦¨à¦¿à¦°à§à¦¯à¦¾à¦¤à¦¨à§‡ à¦®à¦¾à¦°à¦¾ à¦—à§‡à¦² à¦¸à§‡ à¦¸à¦®à§à¦ªà¦°à§à¦•à§‡ à¦¨à§€à¦°à¦¬à§‡ à¦…à¦¶à§à¦°à§ à¦¬à¦¿à¦¸à¦°à§à¦œà¦¨ à¦¦à§‡à¦“à§Ÿà¦¾ à¦¤à§‹ à¦¦à§‚à¦°à§‡à¦° à¦•à¦¥à¦¾, à¦•à§‹à¦¨ à¦•à§‹à¦¨ à¦®à¦¿à¦¡à¦¿à§Ÿà¦¾ à¦à¦‡ à¦¹à¦¤à§à¦¯à¦¾à¦•à¦¾- à¦¬à¦¾ à¦¨à¦¿à¦¹à¦¤ à¦¹à¦“à§Ÿà¦¾à¦° à¦–à¦¬à¦°à¦Ÿà¦¿à¦“ à¦¬à§‡à¦®à¦¾à¦²à§à¦® à¦šà§‡à¦ªà§‡ à¦—à§‡à¦›à§‡à¥¤ à¦à¦®à¦¨ à¦à¦•à¦Ÿà¦¿ à¦ªà¦°à¦¿à¦¸à§à¦¥à¦¿à¦¤à¦¿à¦¤à§‡ à¦¸à¦‚à¦–à§à¦¯à¦¾à¦²à¦˜à§ à¦¸à¦®à§à¦ªà§à¦°à¦¦à¦¾à§Ÿà§‡à¦° à¦à¦• à¦¤à¦°à§à¦£ à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦•à§‡à¦° à¦à¦•à¦Ÿà¦¿ à¦«à§‡à¦‡à¦¸à¦¬à§à¦• à¦¸à§à¦Ÿà§à¦¯à¦¾à¦Ÿà¦¾à¦¸ à¦…à¦¨à§‡à¦•à§‡à¦°à¦‡ à¦¦à§ƒà¦·à§à¦Ÿà¦¿ à¦†à¦•à¦°à§à¦·à¦£ à¦•à¦°à§‡à¦›à§‡ à¦à¦¬à¦‚ à¦ªà§à¦°à¦—à¦¤à¦¿à¦¬à¦¾à¦¦à§‡à¦° à¦²à§‡à¦¬à¦¾à¦¸à¦§à¦¾à¦°à§€ à¦…à¦¨à§‡à¦• à¦®à§à¦¸à¦²à¦¿à¦® à¦†à¦à¦¤à§‡à¦²à¦•à§‡ à¦²à¦œà§à¦œà¦¾ à¦¦à¦¿à§Ÿà§‡à¦›à§‡à¥¤ à¦ à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦•à§‡à¦° à¦¨à¦¾à¦® à¦ªà¦¿à¦¨à¦¾à¦•à¦¿ à¦­à¦Ÿà§à¦Ÿà¦¾à¦šà¦¾à¦°à§à¦¯à§à¦¯à¥¤ à¦¸à¦®à§à¦®à¦¾à¦¨à¦¿à¦¤ à¦ªà¦¾à¦ à¦• à¦­à¦¾à¦‡à¦¦à§‡à¦° à¦…à¦¬à¦—à¦¤à¦¿à¦° à¦œà¦¨à§à¦¯ à¦ªà¦¿à¦¨à¦¾à¦•à¦¿ à¦­à¦Ÿà§à¦Ÿà¦¾à¦šà¦¾à¦°à§à¦¯à§à¦¯à¦°à§‡ à¦ à¦¸à§à¦Ÿà§à¦¯à¦¾à¦Ÿà¦¾à¦¸à¦Ÿà¦¿ à¦¨à§€à¦šà§‡ à¦¹à§à¦¬à¦¹à§ à¦¤à§à¦²à§‡ à¦¦à¦¿à¦²à¦¾à¦®à¥¤ à¦ªà¦¿à¦¨à¦¾à¦•à¦¿à¦° à¦¸à§à¦Ÿà§à¦¯à¦¾à¦Ÿà¦¾à¦¸ à¦ªà¦¿à¦¨à¦¾à¦•à¦¿ à¦²à¦¿à¦–à¦›à§‡à¦¨, &lsquo;&lsquo;à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡à¦° à¦‡à¦¤à¦¿à¦¹à¦¾à¦¸ à¦¬à¦²à§‡ à¦›à¦¾à¦¤à§à¦°à¦¦à§‡à¦° à¦¸à¦®à§à¦®à¦¿à¦²à¦¿à¦¤ à¦•à§à¦°à§‹à¦§à§‡à¦° à¦¬à¦¹à¦¿à¦ƒà¦ªà§à¦°à¦•à¦¾à¦¶ à¦…à¦§à¦¿à¦•à¦¾à¦‚à¦¶ à¦¸à¦®à§Ÿà§‡à¦‡ à¦¹à¦¿à¦‚à¦¸à¦¾à¦¤à§à¦®à¦• à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦¬à§à¦°à§à¦°à¦¾à¦¹à§à¦®à¦£à¦¬à¦¾à§œà¦¿à§Ÿà¦¾à¦° à¦˜à¦Ÿà¦¨à¦¾à¦“ à¦à¦•à¦‡ à¦§à¦°à¦¨à§‡à¦° à¦›à¦¾à¦¤à§à¦° à¦¬à¦¿à¦•à§à¦·à§‹à¦­à¥¤ à¦¤à¦«à¦¾à§Ž à¦¶à§à¦§à§ à¦à¦‡ à¦›à¦¾à¦¤à§à¦°à¦¦à§‡à¦° à¦®à¦¾à¦¥à¦¾à§Ÿ à¦Ÿà§à¦ªà¦¿ à¦›à¦¿à¦² à¦à¦¬à¦‚ à¦¤à¦¾à¦°à¦¾ à¦ªà¦¾à§Ÿà¦œà¦¾à¦®à¦¾ à¦ªà¦¾à¦žà§à¦œà¦¾à¦¬à§€ à¦ªà¦°à¦¾ à¦›à¦¿à¦²à¥¤ à¦à¦° à¦œà¦¨à§à¦¯ à¦¬à§à¦°à¦¾à¦¹à§à¦®à¦£à¦¬à¦¾à§œà¦¿à§Ÿà¦¾à¦° à¦¸à¦¹à¦¿à¦‚à¦¸à¦¤à¦¾à¦° à¦­à¦¿à¦¨à§à¦¨ à¦¬à§Ÿà¦¾à¦¨ à¦¦à¦¾à¦à§œ à¦•à¦°à¦¾à¦¨à§‹à¦° à¦šà§‡à¦·à§à¦Ÿà¦¾ à¦šà¦²à¦›à§‡à¥¤ à¦¸à¦¨à§à¦¤à§à¦°à¦¾à¦¸à§‡à¦° à¦¬à¦¿à¦°à§à¦¦à§à¦§à§‡ à¦…à¦¨à¦¨à§à¦¤ à¦¯à§à¦¦à§à¦§à§‡à¦° à¦®à§‹à§œà¦² à¦à¦¬à¦‚ à¦¤à¦¾à¦à¦¦à§‡à¦° à¦¸à§à¦¥à¦¾à¦¨à§€à§Ÿ à¦¬à¦°à¦•à¦¨à§à¦¦à¦¾à¦œà¦°à¦¾ à¦¯à§‡à¦­à¦¾à¦¬à§‡ à¦®à§à¦¸à¦²à¦¿à¦® à¦ªà¦°à¦¿à¦šà§Ÿà¦•à§‡à¦‡ à¦¸à¦¨à§à¦¤à§à¦°à¦¾à¦¸à§€ à¦¤à¦•à¦®à¦¾ à¦à¦à¦Ÿà§‡ à¦¦à§‡à§Ÿà¦¾à¦° à¦ªà§à¦°à¦•à¦²à§à¦ª à¦¨à¦¿à§Ÿà§‡à¦›à§‡, à¦…à¦¬à¦šà§‡à¦¤à¦¨à§‡ à¦¸à§‡à¦‡ à¦ªà§à¦°à¦•à¦²à§à¦ªà§‡à¦° à¦¸à¦¹à¦¯à§‹à¦—à§€ à¦¹à§Ÿà§‡ à¦‰à¦ à§‡à¦›à§‡ à¦à¦¦à§‡à¦¶à§‡à¦° à¦¬à¦¾à¦®à¦ªà¦¨à§à¦¥à§€à¦°à¦¾à¦“à¥¤ à¦à¦° à¦šà¦¾à¦‡à¦¤à§‡ à¦¬à§œ à¦¦à§à¦ƒà¦– à¦†à¦° à¦¨à¦¾à¦‡à¥¤ à¦à¦° à¦®à¦§à§à¦¯à§‡ à¦¯à¦¦à¦¿ à¦¤à¦¾à¦¦à§‡à¦° à¦¸à¦¾à¦®à¦¨à§‡ à¦Ÿà§à¦ªà¦¿ à¦ªà¦°à¦¾ à¦›à¦¾à¦¤à§à¦°à¦¦à§‡à¦° à¦¸à¦¹à¦¿à¦‚à¦¸à¦¤à¦¾à¦° à¦›à¦¬à¦¿ à¦¥à¦¾à¦•à§‡ à¦¤à¦¾à¦¹à¦²à§‡ à¦¤à§‹ à¦¤à¦¾à¦¦à§‡à¦° à¦œà¦¨à§à¦¯ à¦¸à§‹à¦¨à¦¾à§Ÿ à¦¸à§‹à¦¹à¦¾à¦—à¦¾à¥¤ à¦“à¦¸à§à¦¤à¦¾à¦¦ à¦†à¦²à¦¾à¦‰à¦¦à§à¦¦à¦¿à¦¨à§‡à¦° à¦¸à§à¦®à§ƒà¦¤à¦¿à¦šà¦¿à¦¹à§à¦¨ à¦¬à¦¿à¦œà§œà¦¿à¦¤ à¦¸à¦™à§à¦—à§€à¦¤ à¦­à¦¬à¦¨ à¦†à¦•à§à¦°à¦¾à¦¨à§à¦¤ à¦¹à¦“à§Ÿà¦¾à¦•à§‡ à¦¯à¦¦à¦¿ à¦¬à¦°à§à¦¬à¦°à¦¤à¦¾ à¦¬à¦²à§‡à¦¨, à¦¤à¦¾à¦¹à¦²à§‡ à¦¸à§à¦¬à§€à¦•à¦¾à¦° à¦•à¦°à§à¦¨, à¦¨à¦•à¦¶à¦¾à¦² à¦†à¦¨à§à¦¦à§‹à¦²à¦¨à§‡ à¦°à¦¬à§€à¦¨à§à¦¦à§à¦°à¦¨à¦¾à¦¥, à¦ˆà¦¶à§à¦¬à¦°à¦šà¦¨à§à¦¦à§à¦° à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦¸à¦¾à¦—à¦°à§‡à¦° à¦­à¦¾à¦¸à§à¦•à¦°à§à¦¯ à¦­à§‡à¦™à§‡ à¦†à¦ªà¦¨à¦¾à¦° à¦•à¦®à¦°à§‡à¦¡à¦°à¦¾à¦“ à¦¬à¦°à§à¦¬à¦°à¦¤à¦¾ à¦•à¦°à§‡à¦›à§‡à¥¤ à¦°à§à¦¶ à¦¬à¦¿à¦ªà§à¦²à¦¬à§‡à¦° à¦¸à¦®à§Ÿ à¦¬à¦²à¦¶à§‡à¦­à¦¿à¦•à¦°à¦¾ à¦…à¦¸à¦‚à¦–à§à¦¯ à¦à¦¤à¦¿à¦¹à¦¾à¦¸à¦¿à¦• à¦†à¦°à§à¦Ÿà¦¿à¦«à§‡à¦•à§à¦Ÿ à¦§à§à¦¬à¦‚à¦¸ à¦•à¦°à§‡à¦›à¦¿à¦², à¦¸à§‡à¦Ÿà¦¾ à¦œà¦¾à¦¨à§‡à¦¨? à¦†à¦®à¦¿ à¦•à§Ÿà§‡à¦•à¦Ÿà¦¾ à¦ªà¦¤à§à¦°à¦¿à¦•à¦¾ à¦ªà§œà§‡ à¦˜à¦Ÿà¦¨à¦¾à¦° à¦¯à§‡ à¦¬à§Ÿà¦¾à¦¨ à¦ªà§‡à¦²à¦¾à¦® à¦¤à¦¾à¦° à¦à¦•à¦Ÿà¦¾à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦¾à¦¸ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦›à¦¿ à¦¨à¦¾à¥¤ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦¸à¦®à§à¦ªà¦°à§à¦•à§‡ à¦¯à¦¾à¦°à¦¾ à¦¸à¦¾à¦®à¦¾à¦¨à§à¦¯ à¦§à¦¾à¦°à¦£à¦¾à¦“ à¦°à¦¾à¦–à§‡à¦¨ à¦¤à¦¾à¦à¦°à¦¾ à¦¨à¦¿à¦¶à§à¦šà§Ÿ à¦¬à§à¦à¦¬à§‡à¦¨; à¦¯à§‡à¦‡ à¦˜à¦Ÿà¦¨à¦¾à§Ÿ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦›à¦¾à¦¤à§à¦°à¦°à¦¾ à¦¸à¦¹à¦¿à¦‚à¦¸ à¦¹à§Ÿà§‡ à¦‰à¦ à§‡à¦›à§‡ à¦¬à¦²à§‡ à¦¦à¦¾à¦¬à§€ à¦•à¦°à¦¾ à¦¹à¦šà§à¦›à§‡, à¦¸à§‡à¦‡ à¦˜à¦Ÿà¦¨à¦¾à§Ÿ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦›à¦¾à¦¤à§à¦°à¦¦à§‡à¦° à¦à¦­à¦¾à¦¬à§‡ à¦ªà§à¦°à¦¤à¦¿à¦•à§à¦°à¦¿à§Ÿà¦¾ à¦¦à§‡à¦–à¦¾à¦¨à§‹à¦° à¦•à¦¥à¦¾ à¦¨à§Ÿà¥¤ à¦¤à¦¾à¦à¦°à¦¾ à¦¯à§‡à¦‡ à¦§à¦°à¦¨à§‡à¦° à¦•à§‡à¦¨à§à¦¦à§à¦°à§€à§Ÿ à¦¨à¦¿à§Ÿà¦¨à§à¦¤à§à¦°à¦£à§‡à¦° à¦­à¦¿à¦¤à¦°à§‡ à¦¥à¦¾à¦•à§‡ à¦¤à¦¾à¦° à¦«à¦²à§‡ à¦•à¦¾à¦‰à¦•à§‡ à¦¦à¦² à¦¬à§‡à¦à¦§à§‡ à¦®à¦¾à¦¸à§à¦¤à¦¾à¦¨à¦¿ à¦•à¦°à§‡ à¦ªà§‡à¦¶à§€ à¦¦à§‡à¦–à¦¿à§Ÿà§‡ à¦¦à§‡à§Ÿà¦¾à¦° à¦¸à¦®à§à¦­à¦¾à¦¬à¦¨à¦¾ à¦•à§à¦·à§€à¦£à¥¤ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à§Ÿ &lsquo;&lsquo;à¦†à¦¦à¦¬&rsquo;&rsquo; à¦¶à¦¿à¦•à§à¦·à¦¾ à¦¦à§‡à§Ÿà¦¾ à¦¹à§Ÿ, à¦¸à§‡à¦‡ à¦†à¦¦à¦¬à§‡à¦° à¦¸à¦‚à¦¸à§à¦•à§ƒà¦¤à¦¿à¦° à¦¸à¦¾à¦¥à§‡ à¦¯à¦¾à¦°à¦¾ à¦ªà¦°à¦¿à¦šà¦¿à¦¤ à¦¨à¦¨, à¦¤à¦¾à¦à¦°à¦¾ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦•à¦¾à¦²à¦šà¦¾à¦° à¦¬à§à¦à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨ à¦¨à¦¾à¥¤ à¦à¦•à¦Ÿà¦¿ à¦ªà¦¤à§à¦°à¦¿à¦•à¦¾à§Ÿ à¦¦à§‡à¦–à¦²à¦¾à¦® à¦“à¦‡ à¦à¦²à¦¾à¦•à¦¾à§Ÿ à¦•à§‹à¦¨ à¦à¦• à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à§Ÿ à¦•à¦¿à¦›à§à¦¦à¦¿à¦¨ à¦†à¦—à§‡ à¦¤à¦¾à¦²à¦¾ à¦®à§‡à¦°à§‡ à¦¦à§‡à§Ÿà¦¾ à¦¹à§Ÿà§‡à¦›à¦¿à¦²à¥¤ à¦°à¦¾à¦¤à§‡ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦›à¦¾à¦¤à§à¦°à¦¾à¦¬à¦¾à¦¸à§‡ à¦¢à§à¦•à§‡ à¦ªà§à¦²à¦¿à¦¶ à¦à¦¬à¦‚ à¦¸à¦°à¦•à¦¾à¦°à¦¿ à¦¦à¦²à§‡à¦° à¦•à¦°à§à¦®à§€à¦°à¦¾ à¦†à¦•à§à¦°à¦®à¦£ à¦•à¦°à§‡à¦›à§‡, à¦›à¦¾à¦¤à§à¦° à¦¨à¦¿à¦¹à¦¤à§‡à¦° à¦˜à¦Ÿà¦¨à¦¾ à¦¸à§‡à¦‡ à¦¸à¦®à§Ÿà§‡à¦°à¥¤&rsquo;&rsquo; à¦‰à¦²à§à¦²à§‡à¦–à§à¦¯, à¦ à¦¸à§à¦Ÿà§à¦¯à¦¾à¦Ÿà¦¾à¦¸à§‡ à§§à§©à§¦à§¦-à¦à¦° à¦¬à§‡à¦¶à¦¿ à¦²à¦¾à¦‡à¦• à¦ªà§œà§‡à¦›à§‡à¥¤ à¦˜à¦Ÿà¦¨à¦¾à¦° à¦‰à§Žà¦ªà¦¤à§à¦¤à¦¿ à¦¦à§à¦ƒà¦–à§‡à¦° à¦¬à¦¿à¦·à§Ÿ, à§§à§¨ à¦‡ à¦œà¦¾à¦¨à§à§Ÿà¦¾à¦°à§€ à¦®à¦™à§à¦—à¦²à¦¬à¦¾à¦° à¦¬à§à¦°à¦¾à¦¹à§à¦®à¦£à¦¬à¦¾à§œà¦¿à§Ÿà¦¾ à¦¶à¦¹à¦° à¦›à¦¾à¦¤à§à¦°-à¦œà¦¨à¦¤à¦¾à¦° à¦ªà¦¦à¦­à¦¾à¦°à§‡ à¦‰à¦¤à§à¦¤à¦¾à¦² à¦¹à§Ÿà§‡ à¦‰à¦ à¦² à¦•à§‡à¦¨ à¦¸à§‡ à¦¬à¦¿à¦·à§Ÿà§‡ à¦¸à§‡à¦•à§à¦¯à§à¦²à¦¾à¦° à¦à¦¬à¦‚ à¦¬à¦¾à¦®à¦ªà¦¨à§à¦¥à§€à¦°à¦¾ à¦†à¦²à§‹à¦•à¦ªà¦¾à¦¤ à¦•à¦°à§‡ à¦¨à¦¿à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ à¦¸à¦¤à§à¦¯ à¦…à¦¨à§à¦¸à¦¨à§à¦§à¦¾à¦¨à§‡à¦° à¦šà§‡à¦·à§à¦Ÿà¦¾ à¦•à¦°à§‡à¦›à§‡à¦¨ à¦ªà¦¿à¦¨à¦¾à¦•à¦¿ à¦­à¦Ÿà§à¦Ÿà¦¾à¦šà¦¾à¦°à§à¦¯à§à¦¯à¥¤ à¦¤à¦¿à¦¨à¦¿ à¦²à¦¿à¦–à§‡à¦›à§‡à¦¨, &lsquo;à¦°à¦¾à¦¤à§‡ (à§§à§§ à¦‡ à¦œà¦¾à¦¨à§à§Ÿà¦¾à¦°à§€ à¦¸à§‹à¦®à¦¬à¦¾à¦°) à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦›à¦¾à¦¤à§à¦°à¦¾à¦¬à¦¾à¦¸à§‡ à¦¢à§à¦•à§‡ à¦ªà§à¦²à¦¿à¦¶ à¦à¦¬à¦‚ à¦¸à¦°à¦•à¦¾à¦°à¦¿ à¦¦à¦²à§‡à¦° à¦•à¦°à§à¦®à§€à¦°à¦¾ à¦†à¦•à§à¦°à¦®à¦£ à¦•à¦°à§‡à¥¤ à¦›à¦¾à¦¤à§à¦° à¦¨à¦¿à¦¹à¦¤à§‡à¦° à¦˜à¦Ÿà¦¨à¦¾ à¦¸à§‡à¦‡ à¦¸à¦®à§Ÿà§‡à¦°&rsquo;à¥¤ à¦ªà¦¿à¦¨à¦¾à¦•à¦¿ à¦¬à¦¾à¦¬à§à¦° à¦¬à¦•à§à¦¤à¦¬à§à¦¯ à¦¸à¦ à¦¿à¦•à¥¤ à¦¬à¦¿à¦·à§Ÿà¦Ÿà¦¿ à¦›à¦¿à¦² à¦…à¦¤à§à¦¯à¦¨à§à¦¤ à¦¤à§à¦šà§à¦›à¥¤ à¦¸à§‹à¦®à¦¬à¦¾à¦° à§§à§§ à¦‡ à¦œà¦¾à¦¨à§à§Ÿà¦¾à¦°à§€ à¦¸à¦¨à§à¦§à§à¦¯à¦¾à§Ÿ à¦¶à¦¹à¦°à§‡à¦° à¦œà§‡à¦²à¦¾ à¦ªà¦°à¦¿à¦·à¦¦ à¦®à¦¾à¦°à§à¦•à§‡à¦Ÿà§‡à¦° à¦®à§‹à¦¬à¦¾à¦‡à¦² à¦¦à§‹à¦•à¦¾à¦¨à§‡à¦° à¦¸à¦¾à¦®à¦¨à§‡ à¦¤à§à¦šà§à¦› à¦˜à¦Ÿà¦¨à¦¾à§Ÿ à¦à¦• à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦›à¦¾à¦¤à§à¦°à¦•à§‡ à¦®à¦¾à¦°à¦§à¦° à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤ à¦¤à¦¾à¦°à¦‡ à¦œà§‡à¦° à¦§à¦°à§‡ à¦•à¦¿à¦›à§ à¦¸à¦‚à¦–à§à¦¯à¦• à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦›à¦¾à¦¤à§à¦° à¦˜à¦Ÿà¦¨à¦¾à¦¸à§à¦¥à¦²à§‡ à¦—à¦¿à§Ÿà§‡ à¦ªà¦¾à¦²à§à¦Ÿà¦¾ à¦ªà§à¦°à¦¤à¦¿à¦ªà¦•à§à¦·à¦•à§‡ à¦®à¦¾à¦°à¦§à¦° à¦•à¦°à§‡à¥¤ à¦ à¦˜à¦Ÿà¦¨à¦¾à§Ÿ à¦¨à¦¿à¦‰ à¦®à§‹à§œà¦¾à¦‡à¦² à¦à¦²à¦¾à¦•à¦¾à¦° à¦•à¦¿à¦›à§à¦²à§‹à¦• à¦¦à§‡à¦¶à§€à§Ÿ à¦…à¦¸à§à¦¤à§à¦°à¦¶à¦¸à§à¦¤à§à¦° à¦¨à¦¿à§Ÿà§‡ à¦¶à¦¹à¦°à§‡à¦° à¦Ÿà¦¿,à¦,à¦°à§‹à¦¡ à¦à¦²à¦¾à¦•à¦¾à§Ÿ à¦¤à¦¾-à¦¬ à¦šà¦¾à¦²à¦¾à§Ÿà¥¤ à¦ à¦¸à¦®à§Ÿ à¦›à¦¾à¦¤à§à¦°à¦²à§€à¦—, à¦¯à§à¦¬à¦²à§€à¦—à§‡à¦° à¦•à¦°à§à¦®à§€à¦°à¦¾ à¦ªà§à¦²à¦¿à¦¶à§‡à¦° à¦¸à¦¾à¦¥à§‡ à¦à¦¸à§‡ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦›à¦¾à¦¤à§à¦°à¦¦à§‡à¦° à¦‰à¦ªà¦° à¦¹à¦¾à¦®à¦²à¦¾ à¦•à¦°à§‡ à¦à¦¬à¦‚ à¦¦à§‡à¦¶à§‡à¦° à¦ªà§à¦°à¦¾à¦šà§€à¦¨à¦¤à¦® à¦¦à§à¦¬à§€à¦¨à¦¿ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨ à¦œà¦¾à¦®à§‡à§Ÿà¦¾ à¦‡à¦‰à¦¨à§à¦¸à¦¿à§Ÿà¦¾ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾ à¦­à¦¾à¦‚à¦šà§à¦° à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤ à¦–à¦¬à¦° à¦ªà§‡à§Ÿà§‡ à¦•à¦¾à¦¨à§à¦¦à¦¿à¦ªà¦¾à§œà¦¾à¦° à¦®à¦¹à¦²à§à¦²à¦¾à¦° à¦²à§‹à¦•à¦œà¦¨ à¦“ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦›à¦¾à¦¤à§à¦°à¦¦à§‡à¦° à¦¸à¦¾à¦¥à§‡ à¦¶à§à¦°à§ à¦¹à§Ÿ à¦§à¦¾à¦“à§Ÿà¦¾ à¦ªà¦¾à¦²à§à¦Ÿà¦¾ à¦§à¦¾à¦“à§Ÿà¦¾à¥¤ à¦ à¦¸à¦®à§Ÿ à¦ªà§à¦°à¦¾à§Ÿ à§«à§¦/à§¬à§¦ à¦Ÿà¦¿ à¦•à¦•à¦Ÿà§‡à¦² à¦¬à¦¿à¦¸à§à¦«à§‹à¦°à¦¿à¦¤ à¦¹à§Ÿà¥¤ à¦¬à¦¨à§à¦§ à¦•à¦°à§‡ à¦¦à§‡à¦“à§Ÿà¦¾ à¦¹à§Ÿ à¦¬à¦¿à¦¦à§à¦¯à§à§Ž à¦¸à¦°à¦¬à¦°à¦¾à¦¹à¥¤ à¦ªà¦°à¦¿à¦¸à§à¦¥à¦¿à¦¤à¦¿ à¦¨à¦¿à§Ÿà¦¨à§à¦¤à§à¦°à¦£à§‡ à¦†à¦¨à¦¤à§‡ à§«à§¦à§¬ à¦°à¦¾à¦‰à¦¨à§à¦¡ à¦°à¦¾à¦¬à¦¾à¦° à¦¬à§à¦²à§‡à¦Ÿ à¦“ à§­à§¬ à¦°à¦¾à¦‰à¦¨à§à¦¡ à¦Ÿà¦¿à§Ÿà¦¾à¦° à¦¸à§‡à¦² à¦¨à¦¿à¦•à§à¦·à§‡à¦ª à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤ à¦œà¦¾à¦®à§‡à§Ÿà¦¾ à¦‡à¦‰à¦¨à§à¦¸à¦¿à§Ÿà¦¾ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦ªà§à¦°à¦¿à¦¨à§à¦¸à¦¿à¦ªà¦¾à¦² à¦®à§à¦«à¦¤à¦¿ à¦®à¦¾à¦“à¦²à¦¾à¦¨à¦¾ à¦®à§‹à¦¬à¦¾à¦°à¦• à¦‰à¦²à§à¦²à¦¾à¦¹ à¦œà¦¾à¦¨à¦¾à¦¨, à¦—à¦­à§€à¦° à¦°à¦¾à¦¤à§‡ à¦ªà§à¦²à¦¿à¦¶ à¦“ à¦›à¦¾à¦¤à§à¦°à¦²à§€à¦—à§‡à¦° à¦•à¦°à§à¦®à§€à¦°à¦¾ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦¹à¦¿à¦«à¦œ à¦¬à¦¿à¦­à¦¾à¦—à§‡à¦° à¦®à§‚à¦² à¦«à¦Ÿà¦• à¦­à§‡à¦™à§à¦—à§‡ à¦ªà§à¦°à¦¬à§‡à¦¶ à¦•à¦°à§‡à¥¤ à¦ªà¦°à§‡ à¦¹à¦¿à¦«à¦œ à¦¬à¦¿à¦­à¦¾à¦—à§‡à¦° à§®à¦Ÿà¦¿ à¦•à¦•à§à¦·à§‡à¦° à¦¦à¦°à¦œà¦¾ à¦­à§‡à¦™à§à¦—à§‡ à¦­à¦¿à¦¤à¦°à§‡ à¦ªà§à¦°à¦¬à§‡à¦¶ à¦•à¦°à§‡ à¦‰à¦ªà¦¸à§à¦¥à¦¿à¦¤ à¦›à¦¾à¦¤à§à¦°à¦¦à§‡à¦° à¦¬à§‡à¦§à§œà¦• à¦®à¦¾à¦°à¦§à¦° à¦•à¦°à¦¾ à¦¹à§Ÿà¥¤ à¦à¦®à¦¨à¦•à¦¿ à¦ªà§à¦²à¦¿à¦¶ à¦“ à¦›à¦¾à¦¤à§à¦°à¦²à§€à¦—à§‡à¦° à¦•à¦°à§à¦®à§€à¦°à¦¾ à¦œà§à¦¤à¦¾ à¦“ à¦¬à§à¦Ÿ à¦¦à¦¿à§Ÿà§‡ à¦•à§‹à¦¨ à¦•à§‹à¦¨ à¦›à¦¾à¦¤à§à¦°à§‡à¦° à¦®à¦¾à¦¥à¦¾ à¦®à¦¾à¦Ÿà¦¿à¦¤à§‡ à¦šà§‡à¦ªà§‡ à¦§à¦°à§‡à¥¤ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à§®à¦® à¦¶à§à¦°à§‡à¦£à§€à¦° à¦›à¦¾à¦¤à§à¦° à¦¹à¦¾à¦«à§‡à¦œ à¦®à¦¾à¦¸à§à¦¦à§à¦° à¦°à¦¹à¦®à¦¾à¦¨ (à§¨à§¦) à¦•à§‡ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦¤à¦¿à¦¨ à¦¤à¦²à¦¾ à¦¥à§‡à¦•à§‡ à¦²à¦¾à¦¥à¦¿ à¦®à§‡à¦°à§‡ à¦¨à§€à¦šà§‡à¦° à¦°à¦¾à¦¸à§à¦¤à¦¾à§Ÿ à¦«à§‡à¦²à§‡ à¦¦à§‡à¦“à§Ÿà¦¾ à¦¹à§Ÿà¥¤ à¦—à§à¦°à§à¦¤à¦° à¦†à¦¹à¦¤ à¦…à¦¬à¦¸à§à¦¥à¦¾à§Ÿ à¦°à¦¾à¦¤ à§¨ à¦Ÿà¦¾à§Ÿ à¦¬à§à¦°à¦¾à¦¹à§à¦®à¦£à¦¬à¦¾à§œà¦¿à§Ÿà¦¾ à¦œà§‡à¦²à¦¾ à¦¸à¦¦à¦° à¦¹à¦¾à¦¸à¦ªà¦¾à¦¤à¦¾à¦²à§‡ à¦¨à¦¿à§Ÿà§‡ à¦†à¦¸à¦²à§‡ à¦¤à¦¾à¦•à§‡ à¦•à¦°à§à¦¤à¦¬à§à¦¯à¦°à¦¤ à¦šà¦¿à¦•à¦¿à§Žà¦¸à¦• à¦®à§ƒà¦¤ à¦˜à§‹à¦·à¦£à¦¾ à¦•à¦°à§‡à¦¨à¥¤ à¦®à¦™à§à¦—à¦²à¦¬à¦¾à¦° à¦¸à¦•à¦¾à¦²à§‡ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦›à¦¾à¦¤à§à¦° à¦¨à¦¿à¦¹à¦¤à§‡à¦° à¦–à¦¬à¦° à¦›à§œà¦¿à§Ÿà§‡ à¦ªà§œà¦²à§‡ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦¬à¦¿à¦•à§à¦·à§à¦¬à§à¦§ à¦›à¦¾à¦¤à§à¦°à¦°à¦¾ à¦à¦¬à¦‚ à¦†à¦¶ à¦ªà¦¾à¦¶à§‡à¦° à¦à¦²à¦¾à¦•à¦¾à¦° à¦¤à§Œà¦¹à¦¿à¦¦à§€ à¦œà¦¨à¦¤à¦¾ à¦¬à¦¿à¦•à§à¦·à§à¦¬à§à¦§ à¦¹à§Ÿà§‡ à¦“à¦ à§‡à¥¤ à¦…à¦¥à¦š à¦“à¦°à¦¾ à¦à¦‡ à¦˜à¦Ÿà¦¨à¦¾ à¦¬à§à¦²à§à¦¯à¦¾à¦• à¦†à¦‰à¦Ÿ à¦•à¦°à§‡à¦›à§‡ à¦“à¦ªà¦°à§‡ à¦¬à¦°à§à¦£à¦¿à¦¤ à¦à¦‡ à¦˜à¦Ÿà¦¨à¦¾ à¦¸à¦®à§à¦ªà§‚à¦°à§à¦£ à¦¬à§à¦²à§à¦¯à¦¾à¦• à¦†à¦‰à¦Ÿ à¦•à¦°à§‡à¦›à§‡ à¦ªà§à¦°à¦—à¦¤à¦¿à¦° à¦¸à§‹à¦² à¦à¦œà§‡à¦¨à§à¦Ÿà¦¦à§‡à¦° à¦®à¦¿à¦¡à¦¿à§Ÿà¦¾à¥¤ à¦ªà¦°à§‡à¦° à¦¦à¦¿à¦¨ à¦…à¦°à§à¦¥à¦¾à§Ž à¦®à¦™à§à¦—à¦²à¦¬à¦¾à¦° à§§à§¨ à¦‡ à¦œà¦¾à¦¨à§à§Ÿà¦¾à¦°à§€ à¦¬à§à¦°à¦¾à¦¹à§à¦®à¦£à¦¬à¦¾à§œà¦¿à§Ÿà¦¾à¦° à¦›à¦¾à¦¤à§à¦°-à¦œà¦¨à¦¤à¦¾à¦° à¦‰à¦¤à§à¦¤à¦¾à¦² à¦¬à¦¿à¦•à§à¦·à§‹à¦­à¦•à§‡ à¦¤à¦¾à¦°à¦¾ à¦¤à¦¾-à¦¬ à¦¬à¦²à§‡ à¦¨à¦¿à¦¨à§à¦¦à¦¾ à¦•à¦°à§‡à¦›à§‡à¥¤ à¦à¦•à¦Ÿà¦¿ à¦¤à¦¾à¦œà¦¾ à¦ªà§à¦°à¦¾à¦£à§‡à¦° à¦®à§‚à¦²à§à¦¯à¦“ à¦¤à¦¾à¦°à¦¾ à¦¦à§‡à§Ÿà¦¨à¦¿à¥¤ à¦ªà¦¿à¦¨à¦¾à¦•à¦¿ à¦ à¦¿à¦•à¦‡ à¦¬à¦²à§‡à¦›à§‡à¦¨ à¦¯à§‡, à¦“à¦¸à§à¦¤à¦¾à¦¦ à¦†à¦²à¦¾à¦‰à¦¦à§à¦¦à¦¿à¦¨à§‡à¦° à¦¸à¦™à§à¦—à§€à¦¤ à¦¨à¦¿à¦•à§‡à¦¤à¦¨à§‡ à¦¹à¦¾à¦®à¦²à¦¾ à¦¯à¦¦à¦¿ à¦…à¦¸à¦­à§à¦¯à¦¤à¦¾ à¦“ à¦¬à¦°à§à¦¬à¦°à¦¤à¦¾ à¦¹à§Ÿ, à¦¤à¦¾à¦¹à¦²à§‡ à¦¨à¦•à¦¶à¦¾à¦² à¦†à¦¨à§à¦¦à§‹à¦²à¦¨à§‡ à¦°à¦¬à§€à¦¨à§à¦¦à§à¦°à¦¨à¦¾à¦¥, à¦ˆà¦¶à§à¦¬à¦°à¦šà¦¨à§à¦¦à§à¦° à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦¸à¦¾à¦—à¦°à§‡à¦° à¦­à¦¾à¦¸à§à¦•à¦°à§à¦¯ à¦­à¦¾à¦™à§à¦—à¦šà§à¦° à¦à¦¬à¦‚ à¦°à§à¦¶ à¦¬à¦¿à¦ªà§à¦²à¦¬à§‡à¦° à¦¸à¦®à§Ÿ à¦¬à¦²à¦¶à§‡à¦­à¦¿à¦•à¦¦à§‡à¦° à¦…à¦¸à¦‚à¦–à§à¦¯ à¦à¦¤à¦¿à¦¹à¦¾à¦¸à¦¿à¦• à¦†à¦°à§à¦Ÿà¦¿à¦«à§‡à¦•à§à¦Ÿ à¦§à§à¦¬à¦‚à¦¸ à¦•à¦°à¦¾à¦•à§‡ à¦†à¦“à§Ÿà¦¾à¦®à§€ à¦“ à¦¬à¦¾à¦® à¦˜à¦°à¦¾à¦¨à¦¾ à¦•à¦¿ à¦¬à¦²à¦¬à§‡à¦¨? à¦¸à¦®à§à¦­à¦¬à¦¤ à¦¸à§‡ à¦•à¦¾à¦°à¦£à§‡à¦‡ à¦•à¦²à¦•à¦¾à¦¤à¦¾à¦° &lsquo;à¦¸à¦¾à¦¨à¦¨à§à¦¦à¦¾&rsquo; à¦®à§à¦¯à¦¾à¦—à¦¾à¦œà¦¿à¦¨à§‡à¦° à¦à¦•à¦Ÿà¦¿ à¦²à§‡à¦–à¦¾à§Ÿ à¦¬à¦²à¦¾ à¦¹à§Ÿà§‡à¦›à¦¿à¦², &lsquo;à¦¦à§‡à¦¬à¦¤à¦¾à¦° à¦¬à§‡à¦²à¦¾ à¦²à§€à¦²à¦¾ à¦–à§‡à¦²à¦¾/à¦ªà¦¾à¦ª à¦¹à§Ÿà§‡à¦›à§‡ à¦®à§‹à¦¦à§‡à¦° à¦¬à§‡à¦²à¦¾&rsquo;à¥¤ - See more at: http://www.dailyinqilab.com/details/34/%E0%A6%AA%E0%A6%BF%E0%A6%A8%E0%A6%BE%E0%A6%95%E0%A6%BF-%E0%A6%AC%E0%A6%BE%E0%A6%AC%E0%A7%81%E0%A6%B0-%E0%A6%B8%E0%A7%8D%E0%A6%9F%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%9F%E0%A6%BE%E0%A6%B8-%E0%A6%93-%E0%A6%AC%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%B9%E0%A7%8D%E0%A6%AE%E0%A6%A3%E0%A6%AC%E0%A6%BE%E0%A7%9C%E0%A6%BF%E0%A7%9F%E0%A6%BE%E0%A6%B0-%E0%A6%98%E0%A6%9F%E0%A6%A8%E0%A6%BE#sthash.zbuUikcK.dpuf<br />\r\n<br />\r\n<br />\r\nCopyright Daily Inqilab</strong></p>\r\n', '17/01/2016');
INSERT INTO `pnl_tbl` VALUES(20, 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹à¥¤ à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•, à¦¨à¦¾à¦‚à¦—à§à¦²à§€ à¦¨à§‡à¦›à¦¾à¦°à¦¿à§Ÿà¦¾ à¦«à¦¾à¦œà¦¿à¦² à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¥¤', 'nasrulnanguli@gmail.com', 'Guardian Panel', 'à¦•à¦¾à¦ à¦¾à¦²à¦¿à§Ÿà¦¾ à¦¹à§à¦œà§à¦° à¦¬à¦¾à¦‚à¦²à¦¾à¦° à¦²à¦•à§à¦· à¦²à¦•à§à¦· à¦†à¦²à§‡à¦®à¦¦à§‡à¦°à¦° à¦®à¦¾à¦¥à¦¾à¦° à¦®à¦•à§à¦Ÿ', 'à¦†à¦œ à¦¸à¦•à¦¾à¦² à¦¸à¦¾à§œà§‡ à§§à§¦ à¦˜à¦Ÿà¦¿à¦•à¦¾à§Ÿ à¦•à¦¾à¦ à¦¾à¦²à¦¿à§Ÿà¦¾ à¦¹à§à¦œà§à¦° à¦‡à¦¨à§à¦¤à§‡à¦•à¦¾à¦² à¦•à¦°à¦²à§‡à¦¨à¥¤ à¦–à¦¬à¦°à¦Ÿà¦¿ à¦¶à§à¦¨à§‡ à¦®à¦¾à¦¥à¦¾à§Ÿ à¦†à¦•à¦¾à¦¶ à¦­à§‡à¦™à§à¦—à§‡ à¦ªà§œà¦¾à¦° à¦®à¦¤ à¦…à¦¬à¦¸à§à¦¥à¦¾à¥¤ à¦†à¦®à¦¾à¦° à¦®à¦¤ à¦ à¦…à¦¬à¦¸à§à¦¥à¦¾ à¦¹à§Ÿà¦¤à§‹ à¦¬à¦¾à¦‚à¦²à¦¾à¦° à¦†à¦°à§‹ à¦²à¦•à§à¦· à¦­à¦•à§à¦¤ à¦…à¦¨à§à¦°à¦¾à¦—à§€à¦°à¥¤ à¦¦à§€à¦°à§à¦˜à¦¦à¦¿à¦¨ à¦…à¦¸à§à¦¸à§à¦¥ à¦¥à¦¾à¦•à¦¾à¦° à¦ªà¦°à§‡à¦“ à¦…à¦¨à§‡à¦•à§‡à¦‡ à¦¤à¦¾à¦°  à¦ à¦…à¦•à¦¾à¦²  à¦¬à¦¿à§Ÿà§‹à¦—à¦•à§‡ à¦¸à¦¹à¦œà§‡ à¦®à§‡à¦¨à§‡ à¦¨à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à¦›à§‡ à¦¨à¦¾à¥¤ à¦•à¦¾à¦°à¦¨, à¦¤à¦¿à¦¨à¦¿ à¦¯à§‡  à¦¬à¦¾à¦‚à¦²à¦¾à¦° à¦²à¦•à§à¦· à¦²à¦•à§à¦· à¦†à¦²à¦®à¦¦à§‡à¦°  à¦®à¦¾à¦¥à¦¾à¦° à¦®à§à¦•à§à¦Ÿ, à¦¹à§ƒà¦¦à§Ÿà§‡à¦° à¦¸à§à¦ªà¦¨à§à¦¦à¦¨à¥¤', 'à§§à§¬-à§¦à§¨-à§¨à§¦à§§à§¬, à¦®à¦™à§à¦—à¦²à¦¬à¦¾à¦°à¥¤');
INSERT INTO `pnl_tbl` VALUES(21, 'nahida', 'nasrulnanguli@gmail.com', 'Student Panel', 'alim exam', 'pray for my alim exam ', '17/02/2016');
INSERT INTO `pnl_tbl` VALUES(22, 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹à¥¤ à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•, à¦¨à¦¾à¦‚à¦—à§à¦²à§€ à¦¨à§‡à¦›à¦¾à¦°à¦¿à§Ÿà¦¾ à¦«à¦¾à¦œà¦¿à¦² à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¥¤', 'nasrulnanguli@gmail.com', 'Student Panel', 'à¦à¦¸à§‹ à¦¬à§à¦²à¦— à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦° à¦•à¦°à¦¿', 'à¦à¦¸à§‹ à¦†à¦®à¦°à¦¾ à¦¨à¦¾à¦™à§à¦—à§à¦²à§€ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¦° à¦“à§Ÿà§‡à¦¬ à¦¸à¦¾à¦‡à¦Ÿà§‡ à¦¸à¦‚à¦¯à§à¦•à§à¦¤ à¦¬à§à¦²à¦— à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦° à¦•à¦°à¦¿ ', 'à§¨à§¦/à§¦à§¨/à§¨à§¦à§§à§¬');
INSERT INTO `pnl_tbl` VALUES(23, 'à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹ à¦¨à¦¾à¦‚à¦—à§à¦²à§€', 'nasrulnanguli@gmail.com', 'Guardian Panel', 'à¦à¦¸à§‹ à¦†à¦°à¦¬à§€à¦•à§‡  à¦¶à¦¿à¦–à¦¿à¥¤', 'à¦ªà§à¦°à¦¿à§Ÿ, à¦›à¦¾à¦¤à§à¦° à¦¬à¦¨à§à¦§à§à¦°à¦¾! à¦à¦¸à§‹ à¦†à¦®à¦°à¦¾ à¦†à¦°à¦¬à§€à¦•à§‡ à¦­à¦¾à¦²à§‹à¦­à¦¾à¦¬à§‡ à¦¶à¦¿à¦–à¦¿à¥¤ à¦•à¦¾à¦°à¦¨ à¦†à¦°à¦¬à§€ à¦­à¦¾à¦²à§‹ à¦¨à¦¾ à¦¬à§à¦à¦²à§‡ à¦†à¦®à¦°à¦¾ à¦•à§à¦°à¦†à¦¨,à¦¹à¦¾à¦¦à§€à¦¸ à¦“ à¦«à¦¿à¦•à¦¹ à¦­à¦¾à¦²à§‹à¦­à¦¾à¦¬à§‡ à¦†à§Ÿà¦¤à§à¦¬ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à¦¨à¦¾à¥¤ à¦†à¦° à¦à¦—à§à¦²à§‹ à¦¨à¦¾ à¦ªà¦¾à¦°à¦²à§‡ à¦­à¦¾à¦²à§‹ à¦†à¦²à§‡à¦® à¦“ à¦¹à¦“à§Ÿà¦¾ à¦¯à¦¾à¦¬à§‡à¦¨à¦¾à¥¤', '20/02/2016');
INSERT INTO `pnl_tbl` VALUES(24, 'Apel Mahmud', 'mamahmud1990@gmail.com', 'Guardian Panel', 'Nanguli Madrasah is an ideal institute.Here we teache the students ideal actions.', 'Nanguli Madrasah is an ideal institute.Here we teache the students ideal actions.', '20/2/2016');
INSERT INTO `pnl_tbl` VALUES(28, 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹à¥¤ à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•, à¦¨à¦¾à¦‚à¦—à§à¦²à§€ à¦¨à§‡à¦›à¦¾à¦°à¦¿à§Ÿà¦¾ à¦«à¦¾à¦œà¦¿à¦² à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¥¤', 'nasrulnanguli@gmail.com', 'Guardian Panel', 'à¦†à¦®à¦¾à¦° à¦®à¦¾à§Ÿà§‡à¦° à¦•à¦¬à¦¿à¦¤à¦¾<br>(à¦†à¦²à§à¦²à¦¾à¦¹à¦° à¦¨à¦¾à¦®)', 'à¦†à¦²à§à¦²à¦¾à¦¹à¦° à¦¨à¦¾à¦®<br>à¦‰à¦®à§à¦®à§‡ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹<br>\r\nà¦†à¦²à§à¦²à¦¾à¦¹ à¦¤à§à¦®à¦¿ à¦°à¦¿à¦œà¦¿à¦• à¦¦à¦¾à¦¤à¦¾<br>à¦¨à¦¾à¦® à¦¤à¦¾à¦‡ à¦°à¦¾à¦œà§à¦œà¦¾à¦•à¥¤<br>\r\nà¦¸à¦¬ à¦ªà§à¦°à¦¾à¦£à§€à¦•à§‡ à¦¦à¦¾à¦“ à¦¯à§‡ à¦°à§à¦œà¦¿<br>à¦¦à¦¾à¦“ à¦¤à§à¦®à¦¿ à¦–à§‹à¦°à¦¾à¦•à¥¤<br>\r\nà¦–à¦¾à¦²à§‡à¦• à¦¤à§‹à¦®à¦¾à¦° à¦¨à¦¾à¦® à¦°à§Ÿà§‡à¦›à§‡<br>à¦¸à§ƒà¦·à§à¦Ÿà¦¿à¦•à¦°à§à¦¤à¦¾ à¦¤à¦¾à¦‡à¥¤<br>\r\nà¦œà§€à¦¬à¦¨ à¦®à¦°à¦£ à¦¤à§‹à¦®à¦¾à¦° à¦¹à¦¾à¦¤à§‡<br>à¦¤à§à¦®à¦¿ à¦®à¦¾à¦²à¦¿à¦• à¦¸à¦¾à¦‡à¥¤<br>\r\nà¦¤à§‹à¦®à¦¾à¦° à¦†à¦°à§‹ à¦¨à¦¾à¦® à¦°à§Ÿà§‡à¦›à§‡<br> "à¦—à¦«à§à¦°" à¦“ "à¦—à¦«à¦«à¦¾à¦°"à¥¤<br>\r\nà¦ à¦¨à¦¾à¦® à¦§à¦°à§‡ à¦¡à¦¾à¦•à¦²à§‡ à¦¤à§à¦®à¦¿ <br>à¦¬à¦¾à¦šà¦¾à¦“ à¦—à§à¦¨à¦¾à¦¹à¦—à¦¾à¦°à¥¤<br>\r\nà¦¤à§‹à¦®à¦¾à¦° à¦†à¦°à§‹ à¦¨à¦¾à¦® à¦°à§Ÿà§‡à¦›à§‡<br> "à¦°à¦¹à¦¿à¦®" à¦“ "à¦°à¦¹à¦®à¦¾à¦¨"<br>\r\nà¦¹à¦¿à¦¨à§à¦¦à§ à¦®à§à¦¸à¦²à¦¿à¦® à¦¸à¦¬à¦¾à¦‡à¦•à§‡ à¦¤à¦¾à¦‡ <br> à¦•à¦°à§‹ à¦•à§ƒà¦ªà¦¾ à¦¦à¦¾à¦¨à¥¤<br>\r\nà¦®à¦¾à¦¨ à¦…à¦ªà¦®à¦¾à¦¨ à¦¤à§‹à¦®à¦¾à¦° à¦¹à¦¾à¦¤à§‡<br> "à¦®à§à¦‡à¦œà§à¦œà§- à¦®à§à¦œà¦¿à¦²à§à¦²à§" à¦¤à§‹à¦®à¦¾à¦° à¦¨à¦¾à¦®à¥¤<br>\r\nà¦•à§à¦¨ à¦«à¦¾à¦‡à§Ÿà¦¾à¦•à§à¦¨ à¦‡à¦¶à¦¾à¦°à¦¾à¦¤à§‡<br> à¦¹à§Ÿ à¦¯à§‡ à¦¸à¦«à¦²à¦•à¦¾à¦®à¥¤<br>\r\n\r\n', 'à§¨à§®/à§¦à§¨/à§¨à§¦à§§à§¬');
INSERT INTO `pnl_tbl` VALUES(30, 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹à¥¤ à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•, à¦¨à¦¾à¦‚à¦—à§à¦²à§€ à¦¨à§‡à¦›à¦¾à¦°à¦¿à§Ÿà¦¾ à¦«à¦¾à¦œà¦¿à¦² à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¥¤', 'nasrulnanguli@gmail.com', 'Guardian Panel', 'à¦†à¦®à¦¾à¦° à¦®à¦¾à§Ÿà§‡à¦° à¦•à¦¬à¦¿à¦¤à¦¾<br>à¦¨à¦¿à¦°à¦•à§à¦·à¦° à¦†à¦®à¦¿<br>à¦‰à¦®à§à¦®à§‡ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹', '\r\nà¦¨à¦¿à¦°à¦•à§à¦·à¦° à¦†à¦®à¦¿<br>à¦‰à¦®à§à¦®à§‡ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹<br> \r\nà¦ªà§œà¦¿à¦¨à¦¿ à¦•à¦­à§ à¦¸à§à¦•à§à¦², à¦•à¦²à§‡à¦œà§‡<br>à¦•à¦¿à¦‚à¦¬à¦¾ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à§Ÿ,<br>\r\nà¦¤à¦¾à¦‡à¦¤à§‹ à¦•à¦²à¦® à¦¹à¦¾à¦¤à§‡ à¦¨à¦¿à¦²à§‡à¦‡<br>à¦­à§Ÿ à¦•à¦°à§‡ à¦†à¦¤à§à¦¨à¦¾à§Ÿà¥¤<br>\r\nà¦®à¦¨à§‡à¦° à¦®à¦¾à¦à§‡ à¦…à¦¨à§‡à¦• à¦†à¦¶à¦¾<br>à¦²à¦¿à¦–à¦¤à§‡ à¦®à¦¨à§‡ à¦šà¦¾à§Ÿ,<br>\r\nà¦²à¦¿à¦–à¦¬ à¦•à¦¿-à¦¯à§‡, à¦ªà¦¾à¦‡à¦¨à¦¾ à¦–à§à¦œà§‡<br>à¦¸à¦ à¦¿à¦• à¦­à¦¾à¦·à¦¾à§Ÿà¥¤<br>\r\nà¦†à¦•à¦¾ à¦¬à¦¾à¦•à¦¾ à¦²à¦¾à¦‡à¦¨ à¦Ÿà§‡à¦¨à§‡ à¦¯à¦¾à¦‡<br>à¦¶à§à¦¨à§à¦¯ à¦•à¦¾à¦—à¦œ à¦ªà¦°à§‡,<br>\r\nà¦®à¦¨à§‡à¦° à¦¸à¦•à¦² à¦¦à§à¦ƒà¦– à¦¬à§à¦¯à¦¾à¦¥à¦¾<br>à¦¦à¦¿à¦²à¦¾à¦® à¦¤à¦¾à¦¤à§‡ à¦­à¦°à§‡à¥¤<br>\r\nà¦šà¦²à¦¿à¦¤ à¦à¦¬à¦‚ à¦¸à¦¾à¦§à§ à¦­à¦¾à¦·à¦¾<br>à¦¸à¦¬ à¦à¦•à¦¤à§à¦° à¦•à¦°à§‡,<br>\r\nà¦…à¦°à§à¦¥à¦¬à¦¿à¦¹à¦¿à¦¨ à¦²à¦¿à¦–à¦›à¦¿ à¦²à§‡à¦–à¦¾<br>à¦¹à¦¾à¦¤ à¦•à¦¾à¦ªà§‡ à¦¤à¦¾à¦‡ à¦¡à¦°à§‡<br>', 'à§¨à§¯/à§¦à§¨/à§¨à§¦à§§à§¬');
INSERT INTO `pnl_tbl` VALUES(31, 'MD Aminul Islam Shamim', 'mdaminulislam677@gmail.com', 'Public Exam Panel', 'à¦•à¦¬à¦¿à¦¤à¦¾', '                    à¦¨à¦¾à¦™à§à¦—à§à¦²à§€ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾\r\nà¦œà§à¦žà¦¾à¦¨à§‡à¦° à¦§à¦¾à¦°à¦• à¦œà§à¦žà¦¾à¦¨à§‡à¦° à¦¬à¦¾à¦¹à¦• à¦¥à¦¾à¦•à¦¬à§‡ à¦šà¦¿à¦°à¦•à¦¾à¦²\r\nà¦¤à§à¦®à¦¿à¦“ à¦†à¦•à¦¡à¦¼à§‡ à¦§à¦° à¦¸à¦¦à¦¾ à¦›à¦¾à¦¡à¦¼à¦¬à§‡à¦¨à¦¾à¦¤à§‹ à¦¹à¦¾à¦²\r\n\r\nà¦¤à§‹à¦®à¦¾à¦° à¦¬à§à¦•à§‡ à¦®à¦¾à¦¥à¦¾ à¦°à§‡à¦–à§‡ à¦§à¦¨à§à¦¯ à¦¹à¦²à¦¾à¦® à¦†à¦®à¦¿\r\nà¦¨à¦¾à¦®à¦¿ à¦¦à¦¾à¦®à§€ à¦¹à¦²à§‹ à¦•à¦¤ à¦¹à¦²à§‹ à¦œà§à¦žà¦¾à¦¨à§€ à¦—à§à¦¨à§€\r\n\r\nà¦¤à§‹à¦®à¦¾à¦° à¦šà¦°à¦£ à¦šà§à¦®à¦¤à§‡ à¦†à¦®à¦¿ à¦¬à¦¾à¦°à§‡ à¦¬à¦¾à¦°à§‡ à¦¯à¦¾à¦‡\r\nà¦¬à¦¨à§à¦§à§ à¦¬à¦¾à¦¨à¦¾à¦²à¦¾à¦® à¦¤à§‹à¦®à¦¾à§Ÿ à¦¤à§à¦®à¦¿ à¦¦à¦¿à¦“ à¦ à¦¾à¦‡\r\n\r\nà¦¸à§à¦¨à¦¾à¦® à¦¤à¦¬ à¦›à¦¡à¦¼à¦¿à§Ÿà§‡ à¦¦à¦¿à¦¬ à¦—à§‹à¦Ÿà¦¾ à¦œà¦—à§Ž à¦œà§à¦¡à¦¼à¦¿\r\nà¦—à§‹à¦Ÿà¦¾ à¦¬à¦¿à¦¶à§à¦¬ à¦†à¦•à¦¡à¦¼à§‡ à¦§à¦° à¦¤à§‹à¦®à¦¾à¦° à¦¸à§à¦°à§‡ à¦¸à§à¦°à§‡\r\n\r\nà¦šà¦¾à¦²à¦¿à§Ÿà§‡ à¦¯à¦¾à¦“ à¦œà§à¦žà¦¾à¦¨à§‡à¦° à¦ªà§à¦°à¦šà¦¾à¦° à¦¸à¦¦à¦¾ à¦¸à¦°à§à¦¬à¦•à§à¦·à¦£\r\nà¦¤à§‹à¦®à¦¾à¦° à¦•à¦¥à¦¾ à¦¹à¦²à§‡ à¦®à¦¨à§‡ à¦¶à¦¾à¦¨à§à¦¤à¦¿ à¦²à¦¾à¦—à§‡ à¦®à¦¨\r\n\r\nà¦®à¦¨ à¦¬à¦²à§‡ à¦†à¦° à¦¦à§‡à¦°à§€ à¦¨à§Ÿ à¦šà¦² à¦›à§à¦Ÿà§‡ à¦¯à¦¾à¦‡\r\nà¦œà§€à¦¬à¦¨ à¦¯à§‡à¦¥à¦¾à§Ÿ à¦—à¦¡à¦¼à¦²à§‡ à¦¸à§‡à¦¥à¦¾à¦° à¦à¦•à¦Ÿà§ à¦¸à§à¦¬à¦¾à¦¸ à¦²à¦‡\r\n\r\nà¦¸à§‡à¦Ÿà¦¾à¦¤à§‹ à¦­à¦¾à¦‡ à¦†à¦° à¦•à¦¿à¦›à§ à¦¨à§Ÿ à¦¨à¦¾à¦™à§à¦—à§à¦²à§€ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾\r\nà¦¸à¦¾à¦¡à¦¼à¦¾ à¦œà§€à¦¬à¦¨ à¦›à¦¡à¦¼à¦¿à§Ÿà§‡ à¦¦à¦¿à¦¬ à¦¤à¦¬ à¦®à¦¨à§‡à¦° à¦†à¦¶à¦¾\r\n\r\nà¦®à§. à¦†à¦®à¦¿à¦¨à§à¦² à¦‡à¦¸à¦²à¦¾à¦® à¦¶à¦¾à¦®à§€à¦®\r\nà¦¢à¦¾à¦•à¦¾ à¦•à¦²à§‡à¦œ . à¦¢à¦¾à¦•à¦¾! ', '2/03/2016');
INSERT INTO `pnl_tbl` VALUES(32, 'h muaj', 'mad102710@gmail.com', 'Student Panel', ' à¦¶à¦¾à¦®à¦¿à¦® à¦­à¦¾à¦‡à§Ÿà§‡à¦° à¦•à¦¬à¦¿à¦¤à¦¾ à¦–à§à¦¬ à¦­à¦¾à¦²à§‹ à¦¹à§Ÿà§‡à¦›à§‡', 'à¦¶à¦¾à¦®à¦¿à¦® à¦­à¦¾à¦‡à§Ÿà§‡à¦° à¦•à¦¬à¦¿à¦¤à¦¾ à¦–à§à¦¬ à¦­à¦¾à¦²à§‹ à¦¹à§Ÿà§‡à¦›à§‡', '2/3/2016');
INSERT INTO `pnl_tbl` VALUES(33, 'H.Md.Muaj khan', 'mad102710@gmail.com', 'Student Panel', 'à¦¬à¦¨à§à¦§à§à¦¤à§à¦¬', 'à¦œà§€à¦¬à¦¨ à¦šà¦²à¦¾à¦° à¦ªà¦¥à§‡ à¦¹à§Ÿà¦¤à§‹à¦¬à¦¾\r\nà¦®à¦¨à§‡à¦° à¦…à¦œà¦¾à¦¨à§à¦¤à§‡ à¦—à¦°à§‡ à¦“à¦ à§‡ à¦¬à¦¨à§à¦§à§à¦¤à§à¦¬ \r\nà¦¤à¦¾ à¦¹à¦¤à§‡ à¦ªà¦¾à¦°à§‡ à¦…à¦ªà§à¦°à¦¤à§à¦¯à¦¾à¦¸à¦¿à¦¤\r\nà¦•à§‹à¦¨ à¦¬à§‡à¦•à§à¦¤à¦¿à¦° à¦¸à¦¾à¦¥à§‡ à¦“,\r\nà¦¸à¦®à§Ÿà§‡à¦° à¦ªà§à¦°à§Ÿà§‹à¦œà¦¨à§‡ à¦œà§€à¦¬à¦¨à§‡à¦° à¦¬à¦¾à¦¸à§à¦¤à¦¬à¦¤à¦¾à§Ÿ\r\nà¦†à¦¬à¦¾à¦° à¦¤à¦¾à¦° à¦¬à¦¿à¦šà§à¦›à§‡à¦¦ à¦“ à¦˜à¦Ÿà§‡à¥¤\r\nà¦ªà§à¦°à§Ÿà§‹à¦œà¦¨à§‡à¦° à¦¤à¦¾à¦—à¦¿à¦¦à§‡ à¦…à¦¨à¦• à¦¦à§à¦°à§‡\r\nà¦šà¦²à§‡ à¦—à§‡à¦²à§‡à¦“ à¦¯à§‡à¦¨à§‹ à¦®à§à¦›à§‡ à¦¨à¦¾ à¦«à§‡à¦²à¦¿ \r\nà¦¸à§à¦®à§ƒà¦¤à¦¿à¦° à¦ªà¦¾à¦¤à¦¾ à¦¥à§‡à¦•à§‡ à¦•à§‡à¦‰ à¦•à¦¾à¦‰à¦•à§‡à¥¤', '2/3/2016');
INSERT INTO `pnl_tbl` VALUES(34, 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹à¥¤ à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•, à¦¨à¦¾à¦‚à¦—à§à¦²à§€ à¦¨à§‡à¦›à¦¾à¦°à¦¿à§Ÿà¦¾ à¦«à¦¾à¦œà¦¿à¦² à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¥¤', 'nasrulnanguli@gmail.com', 'Guardian Panel', 'à¦¤à§à¦°à¦¯à¦¼à§‹à¦¦à¦¶ à¦¶à¦¿à¦•à§à¦·à¦• à¦¨à¦¿à¦¬à¦¨à§à¦§à¦¨ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦†à¦¬à§‡à¦¦à¦¨à§‡à¦° à¦¨à¦¿à¦¯à¦¼à¦®', '\r\n\r\nà¦¬à§‡à¦¸à¦°à¦•à¦¾à¦°à¦¿ à¦¶à¦¿à¦•à§à¦·à¦¾à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡ à¦¶à¦¿à¦•à§à¦·à¦• à¦¹à¦¤à§‡ à¦šà¦¾à¦‡à¦²à§‡ à¦ªà§à¦°à¦¥à¦®à§‡à¦‡ à¦²à¦¾à¦—à¦¬à§‡ à¦¶à¦¿à¦•à§à¦·à¦• à¦¨à¦¿à¦¬à¦¨à§à¦§à¦¨à¥¤ à¦¯à§‹à¦—à§à¦¯ à¦ªà§à¦°à¦¾à¦°à§à¦¥à§€à¦¦à§‡à¦° à¦¨à¦¿à¦¬à¦¨à§à¦§à¦¨ à¦“ à¦ªà§à¦°à¦¤à§à¦¯à¦¯à¦¼à¦¨ à¦¦à§‡à¦¯à¦¼ à¦¬à§‡à¦¸à¦°à¦•à¦¾à¦°à¦¿ à¦¶à¦¿à¦•à§à¦·à¦• à¦¨à¦¿à¦¬à¦¨à§à¦§à¦¨ à¦“ à¦ªà§à¦°à¦¤à§à¦¯à¦¯à¦¼à¦¨ à¦•à¦°à§à¦¤à§ƒà¦ªà¦•à§à¦· à¦à¦¨à¦Ÿà¦¿à¦†à¦°à¦¸à¦¿à¦à¥¤ à¦¸à¦®à§à¦ªà§à¦°à¦¤à¦¿ à¦¤à§à¦°à¦¯à¦¼à§‹à¦¦à¦¶ à¦¶à¦¿à¦•à§à¦·à¦• à¦¨à¦¿à¦¬à¦¨à§à¦§à¦¨ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦¬à¦¿à¦œà§à¦žà¦ªà§à¦¤à¦¿ à¦ªà§à¦°à¦•à¦¾à¦¶ à¦•à¦°à§‡à¦›à§‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à¦Ÿà¦¿à¥¤ à¦†à¦¬à§‡à¦¦à¦¨ à¦•à¦°à¦¾ à¦¯à¦¾à¦¬à§‡ à§¬ à¦®à¦¾à¦°à§à¦š à¦¥à§‡à¦•à§‡ à§© à¦à¦ªà§à¦°à¦¿à¦² à¦ªà¦°à§à¦¯à¦¨à§à¦¤à¥¤\r\n\r\nà¦†à¦¬à§‡à¦¦à¦¨à§‡à¦° à¦¨à¦¿à¦¯à¦¼à¦®\r\nà¦…à¦¨à¦²à¦¾à¦‡à¦¨à§‡ à¦†à¦¬à§‡à¦¦à¦¨ à¦ªà§à¦°à¦•à§à¦°à¦¿à¦¯à¦¼à¦¾ à¦¶à§à¦°à§ à¦¹à¦¬à§‡ à§¬ à¦®à¦¾à¦°à§à¦š à¦¬à¦¿à¦•à§‡à¦² à§©à¦Ÿà¦¾à¦¯à¦¼à¥¤ à¦šà¦²à¦¬à§‡ à§© à¦à¦ªà§à¦°à¦¿à¦² à¦¸à¦¨à§à¦§à§à¦¯à¦¾ à§¬à¦Ÿà¦¾ à¦ªà¦°à§à¦¯à¦¨à§à¦¤à¥¤ à¦†à¦¬à§‡à¦¦à¦¨ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡ ntrca.teletalk.com.bd à¦“à¦¯à¦¼à§‡à¦¬à¦¸à¦¾à¦‡à¦Ÿà§‡à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡à¥¤ à¦ªà§à¦°à¦¥à¦®à§‡ à¦ªà¦¦ à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¨ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡à¥¤ à¦†à¦¬à§‡à¦¦à¦¨à§‡à¦° à¦¸à¦®à¦¯à¦¼ à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¨ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡ à¦²à¦¿à¦–à¦¿à¦¤ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦à¦šà§à¦›à¦¿à¦• à¦¬à¦¿à¦·à¦¯à¦¼ à¦“ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦•à§‡à¦¨à§à¦¦à§à¦°à¥¤ à¦†à¦ªà¦²à§‹à¦¡ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡ à§©à§¦à§¦ à¦¬à¦¾à¦‡ à§©à§¦à§¦ à¦ªà¦¿à¦•à§à¦¸à§‡à¦² à¦†à¦•à¦¾à¦°à§‡à¦° à¦°à¦™à¦¿à¦¨ à¦›à¦¬à¦¿ à¦à¦¬à¦‚ à§©à§¦à§¦ à¦¬à¦¾à¦‡ à§®à§¦ à¦ªà¦¿à¦•à§à¦¸à§‡à¦² à¦†à¦•à¦¾à¦°à§‡à¦° à¦¸à§à¦•à§à¦¯à¦¾à¦¨ à¦•à¦°à¦¾ à¦¸à§à¦¬à¦¾à¦•à§à¦·à¦°à¥¤ à¦…à¦¨à¦²à¦¾à¦‡à¦¨ à¦†à¦¬à§‡à¦¦à¦¨ à¦«à¦°à¦® à¦ªà§‚à¦°à¦£ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡ à¦¨à¦¿à¦°à§à¦­à§à¦²à¦­à¦¾à¦¬à§‡à¥¤ à¦†à¦¬à§‡à¦¦à¦¨à¦ªà¦¤à§à¦° à¦¸à¦¾à¦¬à¦®à¦¿à¦Ÿà§‡à¦° à¦ªà¦° à¦¦à§‡à¦“à¦¯à¦¼à¦¾ à¦¹à¦¬à§‡ à¦‡à¦‰à¦œà¦¾à¦° à¦†à¦‡à¦¡à¦¿à¦¸à¦¹ à¦…à§à¦¯à¦¾à¦ªà§à¦²à¦¿à¦•à§‡à¦¨à§à¦Ÿà¦¸ à¦•à¦ªà¦¿à¥¤ à¦…à§à¦¯à¦¾à¦ªà§à¦²à¦¿à¦•à§‡à¦¨à§à¦Ÿà¦¸ à¦•à¦ªà¦¿ à¦¡à¦¾à¦‰à¦¨à¦²à§‹à¦¡ à¦“ à¦ªà§à¦°à¦¿à¦¨à§à¦Ÿ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡à¥¤ à¦à¦Ÿà¦¿ à¦¸à¦‚à¦°à¦•à§à¦·à¦£ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡à¥¤ \r\n\r\nà¦†à¦¬à§‡à¦¦à¦¨à§‡à¦° à§­à§¨ à¦˜à¦£à§à¦Ÿà¦¾à¦° à¦®à¦§à§à¦¯à§‡ à¦Ÿà§‡à¦²à¦¿à¦Ÿà¦•à§‡à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡ à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦«à¦¿ à¦¬à¦¾à¦¬à¦¦ à§©à§«à§¦ à¦Ÿà¦¾à¦•à¦¾ à¦œà¦®à¦¾ à¦¦à¦¿à¦¤à§‡ à¦¹à¦¬à§‡à¥¤ à¦ªà§à¦°à¦¥à¦®à§‡ à¦˜à¦žà¦œà¦ˆà¦…<à¦¸à§à¦ªà§‡à¦¸>à¦Ÿà¦‚à¦¬à§Ž à¦“à¦‰ à¦²à¦¿à¦–à§‡ à¦ªà¦¾à¦ à¦¾à¦¤à§‡ à¦¹à¦¬à§‡ à§§à§¬à§¨à§¨à§¨ à¦¨à¦®à§à¦¬à¦°à§‡à¥¤ à¦«à¦¿à¦°à¦¤à¦¿ à¦à¦¸à¦à¦®à¦à¦¸à§‡ à¦ªà§à¦°à¦¾à¦ªà§à¦¤ PIN-à¦¸à¦¹ NTRCA<à¦¸à§à¦ªà§‡à¦¸>Yes<à¦¸à§à¦ªà§‡à¦¸>PIN à¦²à¦¿à¦–à§‡ à¦†à¦¬à¦¾à¦° à§§à§¬à§¨à§¨à§¨ à¦¨à¦®à§à¦¬à¦°à§‡ à¦¦à§à¦¬à¦¿à¦¤à§€à¦¯à¦¼ à¦à¦¸à¦à¦®à¦à¦¸ à¦ªà¦¾à¦ à¦¾à¦¤à§‡ à¦¹à¦¬à§‡à¥¤ à¦®à§‹à¦¬à¦¾à¦‡à¦²à§‡à¦° à¦¬à§à¦¯à¦¾à¦²à§‡à¦¨à§à¦¸ à¦¥à§‡à¦•à§‡ à§©à§«à§¦ à¦Ÿà¦¾à¦•à¦¾ à¦•à§‡à¦Ÿà§‡ à¦«à¦¿à¦°à¦¤à¦¿ à¦à¦¸à¦à¦®à¦à¦¸à§‡ User ID à¦à¦¬à¦‚ Password à¦œà¦¾à¦¨à¦¿à¦¯à¦¼à§‡ à¦¦à§‡à¦“à¦¯à¦¼à¦¾ à¦¹à¦¬à§‡, à¦ªà¦°à¦¬à¦°à§à¦¤à§€ à¦§à¦¾à¦ªà§‡à¦° à¦œà¦¨à§à¦¯ à¦à¦Ÿà¦¿ à¦¸à¦‚à¦°à¦•à§à¦·à¦£ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡à¥¤ à¦ªà§à¦°à¦¾à¦ªà§à¦¤ à¦Ÿà¦‚à¦¬à§Ž ID à¦à¦¬à¦‚ Password à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦° à¦•à¦°à§‡ à¦ªà§à¦°à¦¿à¦²à¦¿à¦®à¦¿à¦¨à¦¾à¦°à¦¿ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦ªà§à¦°à¦¬à§‡à¦¶à¦ªà¦¤à§à¦° à¦¡à¦¾à¦‰à¦¨à¦²à§‹à¦¡ à¦•à¦°à¦¤à§‡ à¦¹à¦¬à§‡à¥¤\r\n\r\nà¦•à¦¬à§‡ à¦•à§‹à¦¨ à¦ªà¦°à§€à¦•à§à¦·à¦¾\r\nà¦¸à§à¦•à§à¦² à¦“ à¦¸à§à¦•à§à¦²-à§¨ à¦ªà¦°à§à¦¯à¦¾à¦¯à¦¼à§‡à¦° à¦ªà§à¦°à¦¿à¦²à¦¿à¦®à¦¿à¦¨à¦¾à¦°à¦¿ à¦ªà¦°à§€à¦•à§à¦·à¦¾ à§¬ à¦®à§‡ à¦à¦¬à¦‚ à¦•à¦²à§‡à¦œ à¦ªà¦°à§à¦¯à¦¾à¦¯à¦¼à§‡à¦° à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦¨à§‡à¦“à¦¯à¦¼à¦¾ à¦¹à¦¬à§‡ à§­ à¦®à§‡à¥¤ à¦‰à¦­à¦¯à¦¼ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦¸à¦®à¦¯à¦¼ à¦¸à¦•à¦¾à¦² à§§à§¦à¦Ÿà¦¾ à¦¥à§‡à¦•à§‡ à§§à§§à¦Ÿà¦¾ à¦ªà¦°à§à¦¯à¦¨à§à¦¤à¥¤ à¦¸à§à¦•à§à¦² à¦“ à¦¸à§à¦•à§à¦²-à§¨ à¦ªà¦°à§à¦¯à¦¾à¦¯à¦¼à§‡à¦° à¦²à¦¿à¦–à¦¿à¦¤ à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦¹à¦¬à§‡ à§§à§¨ à¦†à¦—à¦¸à§à¦Ÿ à¦à¦¬à¦‚ à¦•à¦²à§‡à¦œ à¦ªà¦°à§à¦¯à¦¾à¦¯à¦¼à§‡à¦° à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦¹à¦¬à§‡ à§§à§© à¦†à¦—à¦¸à§à¦Ÿà¥¤ à¦²à¦¿à¦–à¦¿à¦¤ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦¸à¦®à¦¯à¦¼ à¦¸à¦•à¦¾à¦² à§¯à¦Ÿà¦¾ à¦¥à§‡à¦•à§‡ à§§à§¨à¦Ÿà¦¾ à¦ªà¦°à§à¦¯à¦¨à§à¦¤à¥¤\r\n\r\nà¦¨à¦¿à¦¬à¦¨à§à¦§à¦¨ à¦ªà¦¦à§à¦§à¦¤à¦¿\r\nà¦¦à§à¦¬à¦¾à¦¦à¦¶ à¦¶à¦¿à¦•à§à¦·à¦• à¦¨à¦¿à¦¬à¦¨à§à¦§à¦¨ à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦¥à§‡à¦•à§‡à¦‡ à¦ªà¦¾à¦²à§à¦Ÿà§‡ à¦—à§‡à¦›à§‡ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦§à¦°à¦¨à¥¤ à¦ªà§à¦°à¦¥à¦®à§‡ à§§à§¦à§¦ à¦¨à¦®à§à¦¬à¦°à§‡à¦° à¦ªà§à¦°à¦¿à¦²à¦¿à¦®à¦¿à¦¨à¦¾à¦°à¦¿ à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦¨à§‡à¦“à¦¯à¦¼à¦¾ à¦¹à¦¬à§‡à¥¤ à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦¹à¦¬à§‡ à¦à¦®à¦¸à¦¿à¦•à¦¿à¦‰ à¦¬à¦¾ à¦¬à¦¹à§ à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¨à§€ à¦ªà¦¦à§à¦§à¦¤à¦¿à¦¤à§‡, à¦¸à¦®à¦¯à¦¼ à§§ à¦˜à¦£à§à¦Ÿà¦¾à¥¤ à¦¬à¦¾à¦‚à¦²à¦¾, à¦‡à¦‚à¦°à§‡à¦œà¦¿, à¦—à¦£à¦¿à¦¤ à¦“ à¦¸à¦¾à¦§à¦¾à¦°à¦£ à¦œà§à¦žà¦¾à¦¨à§‡à¦° à¦ªà§à¦°à¦¤à§à¦¯à§‡à¦• à¦…à¦‚à¦¶ à¦¥à§‡à¦•à§‡ à§¨à§«à¦Ÿà¦¿ à¦•à¦°à§‡ à¦ªà§à¦°à¦¶à§à¦¨ à¦†à¦¸à¦¬à§‡à¥¤ à¦ªà§à¦°à¦¤à¦¿à¦Ÿà¦¿ à¦¸à¦ à¦¿à¦• à¦‰à¦¤à§à¦¤à¦°à§‡à¦° à¦œà¦¨à§à¦¯ à¦¬à¦°à¦¾à¦¦à§à¦¦ à§§ à¦¨à¦®à§à¦¬à¦°, à¦ªà§à¦°à¦¤à§à¦¯à§‡à¦• à¦­à§à¦² à¦‰à¦¤à§à¦¤à¦°à§‡à¦° à¦œà¦¨à§à¦¯ à¦•à¦¾à¦Ÿà¦¾ à¦¯à¦¾à¦¬à§‡ à§¦.à§«à§¦ à¦¨à¦®à§à¦¬à¦°à¥¤ à¦ªà¦¾à¦¸ à¦•à¦°à¦¤à§‡ à¦¹à¦²à§‡ à¦•à¦®à¦ªà¦•à§à¦·à§‡ à§ªà§¦ à¦¨à¦®à§à¦¬à¦° à¦ªà§‡à¦¤à§‡ à¦¹à¦¬à§‡à¥¤\r\n\r\nà¦ªà§à¦°à¦¿à¦²à¦¿à¦®à¦¿à¦¨à¦¾à¦°à¦¿à¦¤à§‡ à¦‰à¦¤à§à¦¤à§€à¦°à§à¦£à¦¦à§‡à¦° à¦ªà§à¦°à¦¯à¦¼à§‹à¦œà¦¨à§€à¦¯à¦¼ à¦•à¦¾à¦—à¦œà¦ªà¦¤à§à¦° à¦ªà¦¾à¦ à¦¾à¦¤à§‡ à¦¹à¦¬à§‡ à¦¢à¦¾à¦•à¦¾ à¦œà¦¿à¦ªà¦¿à¦“ à¦¬à¦•à§à¦¸ à¦¨à¦®à§à¦¬à¦°-à§§à§¦à§©, à¦¢à¦¾à¦•à¦¾-à§§à§¦à§¦à§¦ à¦ à¦¿à¦•à¦¾à¦¨à¦¾à¦¯à¦¼à¥¤ à¦²à¦¾à¦—à¦¬à§‡ à¦¸à¦¬ à¦¶à¦¿à¦•à§à¦·à¦¾à¦—à¦¤ à¦¯à§‹à¦—à§à¦¯à¦¤à¦¾à¦° à¦¸à¦¨à¦¦à¦ªà¦¤à§à¦°, à¦¸à§à¦¨à¦¾à¦¤à¦• (à¦ªà¦¾à¦¸ à¦¬à¦¾ à¦¸à¦®à§à¦®à¦¾à¦¨) à¦ªà¦°à§à¦¯à¦¾à¦¯à¦¼à§‡à¦° à¦¨à¦®à§à¦¬à¦°à¦ªà¦¤à§à¦°, à¦¨à¦¾à¦—à¦°à¦¿à¦•à¦¤à§à¦¬ à¦¸à¦¨à¦¦, à¦œà¦¾à¦¤à§€à¦¯à¦¼ à¦ªà¦°à¦¿à¦šà¦¯à¦¼à¦ªà¦¤à§à¦°, à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£à¦ªà§à¦°à¦¾à¦ªà§à¦¤à¦¦à§‡à¦° à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£ à¦¸à¦¨à¦¦, à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦¶à¦¿à¦•à§à¦·à¦• à¦ªà¦¦à§‡ à¦†à¦¬à§‡à¦¦à¦¨à¦•à¦¾à¦°à§€à¦¦à§‡à¦° à¦…à¦¨à¦²à¦¾à¦‡à¦¨à§‡ à¦†à¦¬à§‡à¦¦à¦¨à§‡à¦° à¦¸à¦®à¦¯à¦¼ à¦‰à¦²à§à¦²à¦¿à¦–à¦¿à¦¤ à¦à¦šà§à¦›à¦¿à¦• à¦¬à¦¿à¦·à¦¯à¦¼à§‡à¦° à¦¸à¦ªà¦•à§à¦·à§‡ à¦ªà§à¦°à¦®à¦¾à¦£ à¦¹à¦¿à¦¸à§‡à¦¬à§‡ à¦¸à§à¦¨à¦¾à¦¤à¦• à¦ªà¦°à§à¦¯à¦¾à¦¯à¦¼à§‡à¦° à¦ªà§à¦°à¦¬à§‡à¦¶à¦ªà¦¤à§à¦°à¥¤ à¦–à¦¾à¦®à§‡à¦° à¦“à¦ªà¦° â€˜à¦¤à§à¦°à¦¯à¦¼à§‹à¦¦à¦¶ à¦¶à¦¿à¦•à§à¦·à¦• à¦¨à¦¿à¦¬à¦¨à§à¦§à¦¨ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦†à¦¬à§‡à¦¦à¦¨à¦ªà¦¤à§à¦°â€™ à¦²à¦¿à¦–à¦¤à§‡ à¦¹à¦¬à§‡à¥¤\r\n\r\nà¦¯à¦¾à¦šà¦¾à¦‡-à¦¬à¦¾à¦›à¦¾à¦‡ à¦¶à§‡à¦·à§‡ à¦¯à§‹à¦—à§à¦¯ à¦ªà§à¦°à¦¾à¦°à§à¦¥à§€à¦°à¦¾ à¦…à¦‚à¦¶ à¦¨à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡ à¦²à¦¿à¦–à¦¿à¦¤ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦¯à¦¼à¥¤ à¦†à¦¬à§‡à¦¦à¦¨à§‡à¦° à¦¸à¦®à¦¯à¦¼ à¦ªà§à¦°à¦¾à¦°à§à¦¥à§€à¦° à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¿à¦¤ à¦à¦šà§à¦›à¦¿à¦• à¦¬à¦¿à¦·à¦¯à¦¼à§‡ à§§à§¦à§¦ à¦¨à¦®à§à¦¬à¦°à§‡à¦° à¦²à¦¿à¦–à¦¿à¦¤ à¦ªà¦°à§€à¦•à§à¦·à¦¾ à¦¹à¦¬à§‡à¥¤ à¦¸à¦®à¦¯à¦¼ à§© à¦˜à¦£à§à¦Ÿà¦¾à¥¤ à¦²à¦¿à¦–à¦¿à¦¤ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦¯à¦¼à¦“ à¦ªà¦¾à¦¸ à¦¨à¦®à§à¦¬à¦° à§ªà§¦à¥¤ à¦ªà§à¦°à¦¿à¦²à¦¿à¦®à¦¿à¦¨à¦¾à¦°à¦¿ à¦“ à¦²à¦¿à¦–à¦¿à¦¤ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦¸à¦¿à¦²à§‡à¦¬à¦¾à¦¸ à¦ªà¦¾à¦“à¦¯à¦¼à¦¾ à¦¯à¦¾à¦¬à§‡ à¦“à¦¯à¦¼à§‡à¦¬à¦¸à¦¾à¦‡à¦Ÿà§‡à¥¤\r\n\r\nà¦¨à¦®à§à¦¬à¦°à§‡à¦° à¦­à¦¿à¦¤à§à¦¤à¦¿à¦¤à§‡ à¦®à§‡à¦§à¦¾à¦¤à¦¾à¦²à¦¿à¦•à¦¾\r\nà¦²à¦¿à¦–à¦¿à¦¤ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦¯à¦¼ à¦‰à¦¤à§à¦¤à§€à¦°à§à¦£ à¦ªà§à¦°à¦¾à¦°à§à¦¥à§€à¦°à¦¾ à¦®à§Œà¦–à¦¿à¦• à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦¯à¦¼ à¦…à¦‚à¦¶ à¦¨à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨à¥¤ à¦®à§Œà¦–à¦¿à¦• à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦œà¦¨à§à¦¯ à¦¨à¦¿à¦°à§à¦¬à¦¾à¦šà¦¿à¦¤ à¦ªà§à¦°à¦¾à¦°à§à¦¥à§€à¦¦à§‡à¦° à¦à¦¸à¦à¦®à¦à¦¸à§‡à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡ à¦¸à¦®à¦¯à¦¼ à¦œà¦¾à¦¨à¦¿à¦¯à¦¼à§‡ à¦¦à§‡à¦“à¦¯à¦¼à¦¾ à¦¹à¦¬à§‡à¥¤ à¦¨à¦¿à¦°à§à¦§à¦¾à¦°à¦¿à¦¤ à¦¤à¦¾à¦°à¦¿à¦–à§‡ à¦¸à¦™à§à¦—à§‡ à¦†à¦¨à¦¤à§‡ à¦¹à¦¬à§‡ à¦ªà§à¦°à¦¯à¦¼à§‹à¦œà¦¨à§€à¦¯à¦¼ à¦•à¦¾à¦—à¦œà¦ªà¦¤à§à¦°à¥¤ à¦²à¦¿à¦–à¦¿à¦¤ à¦“ à¦®à§Œà¦–à¦¿à¦• à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦¯à¦¼ à¦ªà§à¦°à¦¾à¦ªà§à¦¤ à¦¨à¦®à§à¦¬à¦°à§‡à¦° à¦­à¦¿à¦¤à§à¦¤à¦¿à¦¤à§‡ à¦¤à§ˆà¦°à¦¿ à¦•à¦°à¦¾ à¦¹à¦¬à§‡ à¦‰à¦ªà¦œà§‡à¦²à¦¾, à¦œà§‡à¦²à¦¾ à¦“ à¦œà¦¾à¦¤à§€à¦¯à¦¼ à¦®à§‡à¦§à¦¾à¦¤à¦¾à¦²à¦¿à¦•à¦¾à¥¤\r\n\r\nà¦œà§‡à¦¨à§‡ à¦°à¦¾à¦–à¦¾ à¦œà¦°à§à¦°à¦¿\r\nà¦¶à¦¿à¦•à§à¦·à¦¾à¦—à¦¤ à¦¯à§‹à¦—à§à¦¯à¦¤à¦¾à¦° à¦•à§à¦·à§‡à¦¤à§à¦°à§‡ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦¯à¦¼ à¦…à¦¬à¦¤à§€à¦°à§à¦£ à¦ªà§à¦°à¦¾à¦°à§à¦¥à§€à¦°à¦¾ à¦†à¦¬à§‡à¦¦à¦¨ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨ à¦¨à¦¾à¥¤ à¦†à¦—à§‡ à¦¨à¦¿à¦¬à¦¨à§à¦§à¦¨ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦¯à¦¼ à¦‰à¦¤à§à¦¤à§€à¦°à§à¦£ à¦ªà§à¦°à¦¾à¦°à§à¦¥à§€à¦°à¦¾à¦“ à¦†à¦¬à§‡à¦¦à¦¨ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨à¥¤\r\n\r\nà¦ªà¦°à§€à¦•à§à¦·à¦¾à¦¸à¦‚à¦•à§à¦°à¦¾à¦¨à§à¦¤ à¦¤à¦¥à§à¦¯ à¦œà¦¾à¦¨à¦¾à¦° à¦œà¦¨à§à¦¯ à¦¯à§‹à¦—à¦¾à¦¯à§‹à¦— à¦•à¦°à¦¾ à¦¯à¦¾à¦¬à§‡ à§¦à§¨-à§«à§«à§§à§¬à§­à§ªà§§à§­, à§¦à§¨-à§«à§«à§§à§¬à§­à§ªà§§à§®, à§¦à§¨-à§«à§«à§§à§¬à§­à§ªà§§à§¯ à¦à¦¬à¦‚ à§¦à§¨-à§«à§«à§§à§¬à§­à§ªà§¨à§§ à¦¨à¦®à§à¦¬à¦°à§‡à¥¤\r\n', 'à§¦à§ª/à§¦à§©/à§¨à§¦à§§à§¬');
INSERT INTO `pnl_tbl` VALUES(35, 'Samim', 'mdaminulislam677@gmail.com', 'Student Panel', 'Kobita', 'à¦¨à¦¾à¦™à§à¦—à§à¦²à§€ à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾', '11/03/2016');
INSERT INTO `pnl_tbl` VALUES(36, 'à¦¨à¦¾à¦¦à¦¿à¦°à¦¾ à¦¸à§à¦²à¦¤à¦¾à¦¨à¦¾', 'nasrulnanguli@gmail.com', 'Student Panel', 'à¦†à¦®à¦¾à¦° à¦®à¦¾à§Ÿà§‡à¦° à¦•à¦¬à¦¿à¦¤à¦¾<br>(à¦ªà¦¾à¦–à¦¿à¦° à¦¡à¦¾à¦•)', '                                 à¦ªà¦¾à¦–à¦¿à¦° à¦¡à¦¾à¦•<br>\r\n                       à¦•à¦¿à¦šà¦¿à¦° à¦®à¦¿à¦šà¦¿à¦° à¦¶à¦¬à§à¦¦ à¦•à¦°à§‡<br>\r\n                       à¦•à¦¤ à¦ªà¦¾à¦–à¦¿ à¦—à¦¾à¦‡à¦›à§‡ à¦—à¦¾à¦¨,<br>\r\n                       à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§€ à¦ªà¦¾à¦–à¦¿à¦° à¦—à¦¾à¦¨à§‡<br>\r\n                       à¦—à§à¦°à¦¾à¦®à¦¬à¦¾à¦¸à¦¿à¦° à¦œà§à§œà¦¾à§Ÿ à¦®à¦¨à¥¤<br>\r\n\r\n\r\n\r\n                       à¦¸à¦•à¦¾à¦² à¦¸à¦¾à¦à§‡ à¦¬à¦¿à¦²à§‡à¦° à¦®à¦¾à¦à§‡<br>\r\n                       à¦¡à¦¾à¦•à§‡ à¦¶à§à¦§à§ à¦¡à¦¾à¦¹à§à¦•, à¦¬à¦•,<br>\r\n                       à¦§à¦¾à¦¨ à¦ªà¦¾à¦•à¦¿à¦²à§‡ à¦šà§œà§à¦‡ à¦¡à¦¾à¦•à§‡<br>\r\n                       à¦†à¦® à¦ªà¦¾à¦•à¦¿à¦²à§‡ à¦¡à¦¾à¦•à§‡ à¦•à¦¾à¦•à¥¤<br>\r\n\r\n\r\n                       à¦«à¦¿à¦™à§à¦—à§‡ à¦¡à¦¾à¦•à§‡ à¦à¦¿à¦‚à¦—à§‡ à¦®à¦¾à¦šà¦¾à§Ÿ<br>\r\n                       à¦¶à¦¾à¦²à¦¿à¦• à¦¡à¦¾à¦•à§‡ à¦¦à§‚à¦°à§‡<br>\r\n                       à¦¤à¦¾à¦²à§‡à¦° à¦¡à¦—à¦¾à§Ÿ à¦¬à¦¾à¦¬à§à¦‡ à¦¡à¦¾à¦•à§‡<br>\r\n                       à¦•à§‹à¦•à¦¿à¦² à¦®à¦§à§à¦° à¦¸à§à¦°à§‡à¥¤<br>\r\n\r\n\r\n\r\n                       à¦°à¦™ à¦¬à§‡ à¦°à¦™à§‡à¦° à¦ªà¦¾à¦– à¦ªà¦¾à¦–à¦¾à¦²à§€<br>\r\n                       à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡ à¦¬à¦¾à¦¸ à¦•à¦°à§‡<br>\r\n                       à¦­à§‹à¦° à¦¬à¦¿à¦¹à¦¾à¦¨à§‡ à¦ªà¦¾à¦–à¦¿à¦° à¦¡à¦¾à¦•à§‡<br>\r\n                        à¦¸à¦¬à¦¾à¦° à¦¹à§ƒà¦¦à§Ÿ à¦²à§Ÿ à¦•à§‡à§œà§‡à¥¤<br>\r\n', '03/04/2016');
INSERT INTO `pnl_tbl` VALUES(37, 'à¦¨à¦¾à¦¦à¦¿à¦°à¦¾ à¦¸à§à¦²à¦¤à¦¾à¦¨à¦¾', 'nasrulnanguli@gmail.com', 'Student Panel', 'à¦¸à§à¦®à§ƒà¦¤à¦¿à¦¶à¦•à§à¦¤à¦¿ à¦¬à§ƒà¦¦à§à¦§à¦¿à¦° à¦•à¦¿à¦›à§ à¦†à¦®à¦²à¦ƒ', 'à§§à¥¤ à¦¸à§à¦®à¦°à¦£à¦¶à¦•à§à¦¤à¦¿ à¦¬à§ƒà¦¦à§à¦§à¦¿à¦° à¦†à¦®à¦²à¦—à§à¦²à§‹à¦°  à¦®à¦§à§à¦¯à§‡ à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦¶à¦•à§à¦¤à¦¿à¦¶à¦¾à¦²à§€ à¦†à¦®à¦² à¦¹à¦² à¦—à§à¦¨à¦¾à¦¹ à¦¥à§‡à¦•à§‡ à¦¬à§‡à¦šà§‡. à¦¥à¦¾à¦•à¦¾ à¥¤<br>\r\nà§¨à¥¤ à¦²à§‹à¦•à¦œà¦¨à§‡à¦° à¦¸à¦¾à¦¥à§‡ à¦¬à§‡à¦¶à¦¿ à¦®à§‡à¦²à¦¾-à¦®à§‡à¦¶à¦¾ à¦¨à¦¾ à¦•à¦°à§‡ à¦¯à¦¥à¦¾à¦¸à¦®à§à¦­à¦¬ à¦¨à¦¿à¦°à§à¦œà¦¨à¦¤à¦¾ à¦…à¦¬à¦²à¦®à§à¦¬à¦¨ à¦•à¦°à¦¾à¥¤<br>\r\nà§©à¥¤ à¦šà§‹à¦–à§‡à¦° à¦¹à§‡à¦«à¦¾à¦œà¦¤ à¦•à¦°à¦¾à¥¤<br>\r\nà§ªà¥¤ à¦…à¦¬à¦¿à¦°à¦¾à¦® à¦šà§‡à¦·à§à¦Ÿà¦¾ à¦•à¦°à¦¾à¥¤<br>\r\nà§«à¥¤ à¦•à¦® à¦–à¦¾à¦“à§Ÿà¦¾à¥¤<br>\r\nà§¬à¥¤ à¦°à¦¾à¦¤à§‡à¦° à¦¬à§‡à¦²à¦¾à§Ÿ à¦¨à¦«à¦² à¦¨à¦¾à¦®à¦¾à¦¯ à¦ªà§œà¦¾à¥¤<br>\r\nà§­à¥¤ à¦¦à§‡à¦–à§‡-à¦¦à§‡à¦–à§‡ à¦•à§à¦°à¦†à¦¨ à¦ªà§œà¦¾à¥¤<br>\r\nà§®à¥¤ à¦®à§‡à¦¸à¦“à§Ÿà¦¾à¦• à¦•à¦°à¦¾à¥¤<br>\r\nà§¯à¥¤ à¦¯à§‡ à¦¸à¦•à¦² à¦¬à¦¸à§à¦¤à§ à¦•à¦« à¦¬à¦¾à§œà¦¾à§Ÿ à¦¤à¦¾ à¦ªà¦°à¦¿à¦¤à§à¦¯à¦¾à¦— à¦•à¦°à¦¾à¥¤<br>\r\nà§§à§¦à¥¤à¦¨à¦¿à§Ÿà¦®à¦¿à¦¤ à¦®à¦¾à¦¥à¦¾à§Ÿ à¦¤à§‡à¦² à¦¦à§‡à§Ÿà¦¾à¥¤<br>\r\n-à¦®à¦¾à¦¤à§à¦° à¦•à§Ÿà§‡à¦•à¦Ÿà¦¿ à¦¤à§à¦²à§‡ à¦§à¦°à¦²à¦¾à¦®à¥¤ à¦¸à¦¾à¦®à¦¨à§‡ à¦†à¦°à§‹ à¦¤à§à¦²à§‡ à¦§à¦°à¦¬à§‹ à¦‡à¦¨à¦¶à¦¾à¦†à¦²à§à¦²à¦¾à¦¹à¥¤<br>', 'à§¦à§©/à§¦à§ª.à§¨à§¦à§§à§¬');
INSERT INTO `pnl_tbl` VALUES(38, 'Miraj', ' mirajulislam69@yahoo.com', '--Select--', 'à¦‰à¦ªà¦¦à§‡à¦¶', 'â™¥â™¥à¦›à¦¾à¦¤à§à¦° à¦¬à¦¨à§à¦§à§à¦°à¦¾ à¦¤à§‹à¦®à¦°à¦¾ à¦®à¦¨à§‡ à¦°à§‡à¦–à§‹- à¦•à¦–à§‹à¦¨à§‹ à¦¤à§‹à¦®à¦°à¦¾ à¦¨à¦¿à¦°à§à¦¬à§‹à¦§à§‡à¦°  à¦¸à¦¾à¦¥à§‡ à¦¤à¦°à§à¦• à¦•à¦°à¦¤à§‡ à¦¯à§‡à¦“ à¦¨à¦¾, à¦•à§‡à¦¨à§‹à¦¨à¦¾- à¦ªà§à¦°à¦¥à¦®à§‡ à¦¤à§‹à¦®à¦¾à¦•à§‡ à¦¤à¦¾à¦° à¦¨à¦¿à¦œà§‡à¦° à¦¸à§à¦¥à¦°à§‡ à¦¨à¦¾à¦®à¦¿à¦¯à¦¼à§‡ à¦†à¦¨à¦¬à§‡ à¦à¦¬à¦‚ à¦ªà¦°à¦¿à¦¶à§‡à¦·à§‡ à¦¤à§‹à¦®à¦¾à¦•à§‡ à¦•à¦¾à¦¬à§ à¦•à¦°à¦¬à§‡à¥¤', '07-04-16');
INSERT INTO `pnl_tbl` VALUES(39, 'Muraduzzaman Murad', 'murad@gmail.com', 'Guardian Panel', 'à¦†à¦²à§à¦²à¦¾à¦¹ à¦°à¦¾à¦¬à§à¦¬à§à¦² à¦†à¦² à¦†à¦®à§€à¦¨ à¦®à§‚à¦²à¦¤ à§§à§§à¦Ÿà¦¿ à¦¬à¦¿à¦¶à§‡à¦· à¦¸à¦®à§Ÿà§‡à¦° à¦†à¦®à¦² à¦•à¦¬à§à¦² à¦¨à¦¾ à¦•à¦°à§‡ à¦«à§‡à¦²à§‡ à¦¦à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨ à¦¨à¦¾à¥¤ à¦†à¦ªà¦¨à¦¿ à¦¸à§‡à¦‡ à§§à§§à¦Ÿà¦¿ à¦¬à¦¿à¦', 'à¦†à¦²à§à¦²à¦¾à¦¹ à¦°à¦¾à¦¬à§à¦¬à§à¦² à¦†à¦² à¦†à¦®à§€à¦¨ à¦®à§‚à¦²à¦¤ à§§à§§à¦Ÿà¦¿ à¦¬à¦¿à¦¶à§‡à¦· à¦¸à¦®à§Ÿà§‡à¦° à¦†à¦®à¦² à¦•à¦¬à§à¦² à¦¨à¦¾ à¦•à¦°à§‡ à¦«à§‡à¦²à§‡ à¦¦à¦¿à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨ à¦¨à¦¾à¥¤ à¦†à¦ªà¦¨à¦¿ à¦¸à§‡à¦‡ à§§à§§à¦Ÿà¦¿ à¦¬à¦¿à¦¶à§‡à¦· à¦¸à¦®à§Ÿ à¦¸à¦®à§à¦ªà¦°à§à¦•à§‡ à¦œà¦¾à¦¨à§‡à¦¨ à¦•à¦¿?\r\nà¦¯à¦¦à¦¿ à¦¨à¦¾ à¦œà¦¾à¦¨à§‡à¦¨, à¦¤à¦¾à¦¹à¦²à§‡ à¦à¦–à¦¨à¦‡ à¦œà§‡à¦¨à§‡ à¦¨à¦¿à¦¨:\r\n\r\nà§§à¥¤ à¦°à¦¾à¦¤à§‡à¦° à¦¶à§‡à¦· à¦¤à§ƒà¦¤à§€à§Ÿà¦¾à¦‚à¦¶à§‡à¥¤\r\nà§¨à¥¤ à¦†à¦¯à¦¾à¦¨ à¦“ à¦à¦•à¦¾à¦®à¦¤à§‡à¦° à¦®à¦¾à¦à§‡à¥¤\r\nà§©à¥¤ à¦²à¦¾à¦‡à¦²à¦¾à¦¤à§à¦² à¦•à¦¦à¦°à§‡à¥¤\r\nà§ªà¥¤ à¦†à¦°à¦¾à¦«à¦¾à¦° à¦¦à¦¿à¦¬à¦¸à§‡à¥¤\r\nà§«à¥¤ à¦‡à¦«à¦¤à¦¾à¦°à¦¿à¦° à¦ªà§‚à¦°à§à¦¬ à¦®à§‚à¦¹à§à¦°à§à¦¤à§‡à¥¤\r\nà§¬à¥¤ à¦¸à¦«à¦° à¦…à¦¬à¦¸à§à¦¥à¦¾à§Ÿà¥¤\r\nà§­à¥¤ à¦œà¦®à¦œà¦® à¦•à§‚à¦ªà§‡à¦° à¦ªà¦¾à¦¨à¦¿ à¦ªà¦¾à¦¨à§‡à¦° à¦¸à¦®à§Ÿà¥¤\r\nà§®à¥¤ à¦¸à¦¿à¦œà¦¦à¦¾à¦¹ à¦…à¦¬à¦¸à§à¦¥à¦¾à§Ÿà¥¤\r\nà§¯à¥¤ à¦¸à¦¾à¦²à¦¾à¦¤à§‡à¦° à¦¶à§‡à¦·à¦¾à¦‚à¦¶à§‡à¥¤\r\nà§§à§¦à¥¤ à¦¨à¦¿à¦°à§à¦¯à¦¾à¦¤à¦¨à§‡à¦° à¦¶à¦¿à¦•à¦° à¦¬à¦¾ à¦¬à¦¿à¦ªà¦¦à§‡à¦° à¦®à§‚à¦¹à§à¦°à§à¦¤à§‡à¥¤\r\nà§§à§§à¥¤ à¦¯à§‡ à¦•à§‹à¦¨ à¦¨à§‡à¦• à¦•à¦¾à¦œ à¦•à¦°à¦¾à¦° à¦ªà¦° (à¦¯à§‡à¦®à¦¨ à¦¸à¦¾à¦²à¦¾à¦¤ à¦†à¦¦à¦¾à§Ÿ, à¦ªà¦¬à¦¿à¦¤à§à¦° à¦•à§‹à¦°à¦†à¦¨ à¦¤à§‡à¦²à¦¾à¦“à§Ÿà¦¾à¦¤, à¦¦à¦¾à¦¨', '20/04/2016');
INSERT INTO `pnl_tbl` VALUES(40, 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹à¥¤ à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•, à¦¨à¦¾à¦‚à¦—à§à¦²à§€ à¦¨à§‡à¦›à¦¾à¦°à¦¿à§Ÿà¦¾ à¦«à¦¾à¦œà¦¿à¦² à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¥¤', 'nasrulnanguli@gmail.com', 'Guardian Panel', ' à¦‡à¦‚à¦°à§‡à¦œà§€ à¦¸à¦¾à¦²-à¦¤à¦¾à¦°à¦¿à¦– à¦¥à§‡à¦•à§‡ à¦¬à¦¾à¦‚à¦²à¦¾ à¦¸à¦¾à¦²-à¦¤à¦¾à¦°à¦¿à¦– à¦¬à§‡à¦° à¦•à¦°à¦¾à¦° à¦¸à¦¹à¦œ à¦•à§Œà¦¶à¦²', 'à¦…à¦¨à§‡à¦• à¦¸à¦®à§Ÿ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦¬à¦¾à¦‚à¦²à¦¾ à¦•à¦¤ à¦¤à¦¾à¦°à¦¿à¦– à¦†à¦®à¦¾à¦¦à§‡à¦° à¦®à¦¨à§‡ à¦¥à¦¾à¦•à§‡ à¦¨à¦¾à¥¤ à¦¤à¦¾à¦‡ à¦†à¦œ à¦†à¦®à¦°à¦¾ à¦¶à¦¿à¦–à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦‡à¦‚à¦°à§‡à¦œà§€ à¦¤à¦¾à¦°à¦¿à¦– à¦¥à§‡à¦•à§‡ à¦¬à¦¾à¦‚à¦²à¦¾ à¦¤à¦¾à¦°à¦¿à¦– à¦¬à§‡à¦° à¦•à¦°à¦¾ à¦¯à¦¾à§Ÿà¥¤<br>\r\nà¦ªà§à¦°à¦¥à¦®à§‡ à¦‡à¦‚à¦°à§‡à¦œà§€ à¦¸à¦¨ à¦¥à§‡à¦•à§‡ à§«à§¯à§© à¦¬à¦¿à§Ÿà§‹à¦— à¦•à¦°à§‡ à¦¬à¦¾à¦‚à¦²à¦¾ à¦¸à¦¨ à¦¬à§‡à¦° à¦•à¦°à§‡ à¦¨à¦¿à¦¤à§‡ à¦¹à¦¬à§‡à¥¤ à¦¬à¦¾à¦‚à¦²à¦¾ à§§à¦²à¦¾ à¦¬à§ˆà¦¶à¦¾à¦– à¦¸à¦¬ à¦¸à¦®à§Ÿ à¦‡à¦‚à¦°à§‡à¦œà§€ à¦à¦ªà§à¦°à¦¿à¦² à¦®à¦¾à¦¸à§‡à¦° à§§à§ª à¦¤à¦¾à¦°à¦¿à¦– à¦¥à§‡à¦•à§‡ à¦¶à§à¦°à§ à¦¹à§Ÿ à¦à¦¬à¦‚ à¦¬à¦¾à¦‚à¦²à¦¾à§Ÿ à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯ à¦®à¦¾à¦¸à¦—à§à¦²à¦¿ à¦ªà¦°à§à¦¯à¦¾à§Ÿà¦•à§à¦°à¦®à§‡ à¦‡à¦‚à¦°à§‡à¦œà¦¿ à¦®à¦¾à¦¸à§‡à¦° à§§à§© à¦¥à§‡à¦•à§‡ à§§à§¬ à¦¤à¦¾à¦°à¦¿à¦–à§‡à¦° à¦®à¦§à§à¦¯à§‡à¦‡ à¦¶à§à¦°à§ à¦¹à§Ÿà§‡ à¦¥à¦¾à¦•à§‡à¥¤\r\nà¦¯à§‡à¦¹à§‡à¦¤à§ à¦‡à¦‚à¦°à§‡à¦œà¦¿ à¦®à¦¾à¦¸à§‡à¦° à§§à§©-à§§à§¬ à¦¤à¦¾à¦°à¦¿à¦–à§‡à¦° à¦®à¦§à§à¦¯à§‡ à¦¬à¦¾à¦‚à¦²à¦¾ à¦®à¦¾à¦¸à¦—à§à¦²à¦¿à¦° à§§ à¦¤à¦¾à¦°à¦¿à¦– à¦¶à§à¦°à§ à¦¹à§Ÿà§‡ à¦¥à¦¾à¦•à§‡ à¦¤à¦¾à¦‡ à¦¨à¦¿à¦šà§‡à¦° à¦•à§‹à¦¡à¦Ÿà¦¿ à¦®à¦¨à§‡ à¦°à¦¾à¦–à§à¦¨à¥¤<br>\r\n \r\nà¦•à§‹à¦¡à¦ƒ à§ª à§«à§« à§¬à§¬à§¬à§¬ à§«à§« à§ªà§©à§«à¥¤<br>\r\nà¦à¦–à¦¾à¦¨à§‡ à¦¬à¦¾à¦‚à¦²à¦¾à¦° à§§à§¨ à¦®à¦¾à¦¸à§‡à¦° à§§à§¨à¦Ÿà¦¿ à¦•à§‹à¦¡ à¦†à¦›à§‡ à¦ªà¦°à§à¦¯à¦¾à§Ÿà¦•à§à¦°à¦®à¦¿à¦•à¦­à¦¾à¦¬à§‡à¥¤\r\nà¦•à§‹à¦¡à¦Ÿà¦¿à¦¤à§‡ à§ª à¦®à¦¾à¦¨à§‡ à¦‡à¦‚à¦°à§‡à¦œà§€ à¦®à¦¾à¦¸à§‡à¦° à§§à§ª à¦¤à¦¾à¦°à¦¿à¦–, à§« à¦®à¦¾à¦¨à§‡ à¦‡à¦‚à¦°à§‡à¦œà§€ à¦®à¦¾à¦¸à§‡à¦° à§§à§« à¦¤à¦¾à¦°à¦¿à¦–, à§¬ à¦®à¦¾à¦¨à§‡ à¦‡à¦‚à¦°à§‡à¦œà§€ à¦®à¦¾à¦¸à§‡à¦° à§§à§¬ à¦¤à¦¾à¦°à¦¿à¦– à¦à¦‡à¦­à¦¾à¦¬à§‡ à¦¯à¦¾ à¦¬à¦¾à¦‚à¦²à¦¾ à¦®à¦¾à¦¸à¦—à§à¦²à¦¿à¦° à§§à¦® à¦¤à¦¾à¦°à¦¿à¦– à¦ªà¦°à§à¦¯à¦¾à§Ÿà¦•à§à¦°à¦®à§‡ à¦¶à§à¦°à§ à¦¹à¦“à§Ÿà¦¾ à¦¨à¦¿à¦°à§à¦¦à§‡à¦¶ à¦•à¦°à§‡à¥¤<br>\r\nà¦‰à¦¦à¦¹à¦°à¦£à¦ƒ <br>\r\nà¦•à¦¾à¦œà§€ à¦¨à¦œà¦°à§à¦² à¦‡à¦¸à¦²à¦¾à¦®à§‡à¦° à¦œà¦¨à§à¦® à§§à§®à§¯à§¯ à¦¸à¦¾à¦²à§‡à¦° à§¨à§« à¦®à§‡à¥¤ à¦à¦Ÿà¦¾à¦•à§‡ à¦†à¦®à¦°à¦¾ à¦¬à¦¾à¦‚à¦²à¦¾ à¦¸à¦¨-à¦¤à¦¾à¦°à¦¿à¦–à§‡ à¦°à§‚à¦ªà¦¾à¦¨à§à¦¤à¦°à¦¿à¦¤ à¦•à¦°à¦¬à§‹à¥¤\r\nà¦à¦–à¦¨, à§§à§®à§¯à§¯ à¦¥à§‡à¦•à§‡ à§«à§¯à§© à¦¬à¦¿à§Ÿà§‹à¦— à¦•à¦°à¦²à§‡ à¦ªà¦¾à¦‡ à§§à§©à§¦à§¬, à¦¯à¦¾ à¦•à¦¾à¦œà§€ à¦¨à¦œà¦°à§à¦²à§‡à¦° à¦¬à¦¾à¦‚à¦²à¦¾ à¦œà¦¨à§à¦® à¦¸à¦¾à¦² à¦¨à¦¿à¦°à§à¦¦à§‡à¦¶ à¦•à¦°à§‡à¥¤<br>\r\nà¦à¦¬à¦¾à¦° à§¨à§« à¦®à§‡ à¦¥à§‡à¦•à§‡ à¦¬à¦¾à¦‚à¦²à¦¾ à¦®à¦¾à¦¸à§‡à¦° à¦¤à¦¾à¦°à¦¿à¦–à¦Ÿà¦¿ à¦¬à§‡à¦° à¦•à¦°à¦¬à§‹à¥¤\r\nà¦à¦–à¦¨, à¦†à¦®à¦¾à¦¦à§‡à¦° à¦•à§‹à¦¡à§‡à¦° à¦¦à¦¿à¦•à§‡ à¦¨à¦œà¦° à¦¦à¦¿à¦‡à¥¤ à¦•à§‹à¦¡à§‡à¦° à§§à¦® à¦…à¦‚à¦•à¦Ÿà¦¿ à§ª, à¦®à¦¾à¦¨à§‡ à¦à¦ªà§à¦°à¦¿à¦² à¦®à¦¾à¦¸à§‡à¦° à§§à§ª à¦¤à¦¾à¦°à¦¿à¦– à¦¬à¦¾ à¦¬à¦¾à¦‚à¦²à¦¾à¦° à§§ à¦²à¦¾ à¦¬à§ˆà¦¶à¦¾à¦–à¥¤ à¦•à§‹à¦¡à§‡à¦° à§¨à§Ÿ à¦…à¦‚à¦•à¦Ÿà¦¿ à§«, à¦®à¦¾à¦¨à§‡ à¦®à§‡ à¦®à¦¾à¦¸à§‡à¦° à§§à§« à¦¤à¦¾à¦°à¦¿à¦– à¦¬à¦¾ à¦¬à¦¾à¦‚à¦²à¦¾à§Ÿ à¦œà§à¦¯à§ˆà¦·à§à¦  à¦®à¦¾à¦¸à§‡à¦° à§§à¦²à¦¾ à¦¤à¦¾à¦°à¦¿à¦–à¥¤ à¦à¦–à¦¨, à§§à§«à¦®à§‡ à¦¥à§‡à¦•à§‡ à§¨à§«à¦®à§‡ à¦®à¦¾à¦¨à§‡ à§§à§§ à¦¦à¦¿à¦¨à¥¤\r\nà¦…à¦°à§à¦¥à§à¦¯à¦¾à§Ž à§§à§©à§¦à§¬ à¦¸à¦¾à¦²à§‡à¦° à§§à§§à¦‡ à¦œà§à¦¯à§ˆà¦·à§à¦ à¥¤<br>\r\nà¦¸à§à¦¤à¦°à¦¾à¦‚, à¦•à¦¾à¦œà§€ à¦¨à¦œà¦°à§à¦² à¦‡à¦¸à¦²à¦¾à¦®à§‡à¦° à¦œà¦¨à§à¦® à¦‡à¦‚à¦°à§‡à¦œà¦¿à¦° à§§à§®à§¯à§¯ à¦¸à¦¾à¦²à§‡à¦° à§¨à§«à¦®à§‡ à¦¹à¦šà§à¦›à§‡ à¦¬à¦¾à¦‚à¦²à¦¾à§Ÿ  à§§à§©à§¦à§¬ à¦¸à¦¾à¦²à§‡à¦° à§§à§§à¦‡ à¦œà§à¦¯à§ˆà¦·à§à¦ à¥¤<br>\r\n(à¦ªà§à¦°à§Ÿà§‹à¦œà¦¨à§‡ à¦ªà¦°à¦¬à¦°à§à¦¤à§€ à¦®à¦¾à¦¸à¦—à§à¦²à§‹à¦° à¦œà¦¨à§à¦¯ à¦à¦­à¦¾à¦¬à§‡ à¦à¦—à§à¦¤à§‡ à¦¹à¦¬à§‡)à¥¤<br>\r\n', '02/05/2016');
INSERT INTO `pnl_tbl` VALUES(41, 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹à¥¤ à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•, à¦¨à¦¾à¦‚à¦—à§à¦²à§€ à¦¨à§‡à¦›à¦¾à¦°à¦¿à§Ÿà¦¾ à¦«à¦¾à¦œà¦¿à¦² à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à¥¤', 'masuma41972@gmail.com', 'Guardian Panel', 'à¦°à¦¿à¦•à¦¶à¦¾à¦“à¦¯à¦¼à¦¾à¦²à¦¾à¦° à¦›à§‡à¦²à§‡ à¦œà§‡à¦²à¦¾ à¦ªà§à¦°à¦¶à¦¾à¦¸à¦•, à¦¹à¦¾à¦° à¦¨à¦¾ à¦®à¦¾à¦¨à¦¾à¦° à¦—à¦²à§à¦ª', 'à¦›à§‡à¦¾à¦Ÿ à¦¬à§‡à¦²à¦¾ à¦¥à§‡à¦•à§‡à¦‡ à¦¬à¦¾à¦¬à¦¾ à¦°à¦¿à¦•à¦¶à¦¾à¦“à§Ÿà¦¾à¦²à¦¾ à¦¬à¦²à§‡ à¦…à¦¨à§‡à¦• à¦…à¦¬à¦¹à§‡à¦²à¦¾ à¦¸à¦¹à§à¦¯ à¦•à¦°à¦¤à§‡ à¦¹à§Ÿà§‡à¦›à§‡ à¦¤à¦¾à¦•à§‡à¥¤ à¦§à¦¨à§€ à¦¬à¦¨à§à¦§à§à¦¦à§‡à¦° à¦¬à¦¾à¦¬à¦¾ à¦®à¦¾à§Ÿà§‡à¦° à¦¤à¦¾à¦šà§à¦›à¦¿à¦²à§à¦¯ à¦¤à¦¾à¦•à§‡ à¦…à¦¨à§‡à¦• à¦•à¦·à§à¦Ÿ à¦¦à¦¿à§Ÿà§‡à¦›à§‡à¥¤ à¦¤à¦¬à§à¦“ à¦¦à¦®à§‡ à¦¯à¦¾à¦¨à¦¨à¦¿ à¦¤à¦¿à¦¨à¦¿à¥¤ à¦¬à¦¾à¦¬à¦¾à¦° à¦°à¦¿à¦•à¦¶à¦¾ à¦šà¦¾à¦²à¦¾à¦¨à§‹ à¦Ÿà¦¾à¦•à¦¾à§Ÿ à¦²à§‡à¦–à¦¾à¦ªà§œà¦¾ à¦•à¦°à§‡ à¦¡à¦¿à¦¸à¦¿ à¦¹à§Ÿà§‡à¦›à§‡à¦¨à¥¤ à¦†à¦° à¦°à¦¿à¦•à¦¶à¦¾à¦“à§Ÿà¦¾à¦²à¦¾ à¦¬à¦¾à¦¬à¦¾à¦•à§‡ à¦¨à¦¿à§Ÿà§‡ à¦•à§‹à¦¨à§‹ à¦•à¦·à§à¦Ÿ à¦¨à§Ÿ à¦¬à¦°à¦‚ à¦—à¦°à§à¦¬ à¦¹à§Ÿ à¦¤à¦¾à¦°à¥¤<br>\r\nà¦­à¦¾à¦°à¦¤à§‡à¦° à¦¬à¦¾à¦°à¦¾à¦¨à¦¶à§€à¦° à¦—à§‹à¦¬à¦¿à¦¨à§à¦¦ à¦œà¦¿à¦¸à¦“à§Ÿà¦¾à¦² à¦¨à¦¾à¦®à§‡à¦° à¦à¦‡ à¦¬à§à¦¯à¦•à§à¦¤à¦¿ à§¨à§¦à§¦à§¬ à¦¸à¦¾à¦²à§‡à¦° à¦¬à§à¦¯à¦¾à¦šà§‡ à¦¸à¦¿à¦­à¦¿à¦² à¦¸à¦¾à¦°à§à¦­à¦¿à¦¸à§‡à¦° à§ªà§® à¦¤à¦® à¦¸à§à¦¥à¦¾à¦¨ à¦…à¦§à¦¿à¦•à¦¾à¦° à¦•à¦°à§‡à¦›à¦¿à¦²à§‡à¦¨à¥¤<br>\r\nà¦­à¦¾à¦°à¦¤à§‡à¦° à¦à¦•à¦Ÿà¦¿ à¦¬à§‡à¦¸à¦°à¦•à¦¾à¦°à§€ à¦Ÿà¦¿à¦­à¦¿ à¦šà§à¦¯à¦¾à¦¨à§‡à¦²à§‡à¦° à¦¨à¦¾à¦‡à¦¨ à¦¡à§à¦°à¦¿à¦® à¦ªà§à¦°à¦œà§‡à¦•à§à¦Ÿ à¦¨à¦¾à¦®à§‡à¦° à¦à¦•à¦Ÿà¦¿ à¦…à¦¨à§à¦·à§à¦ à¦¾à¦¨à§‡ à¦à¦• à¦¸à¦¾à¦•à§à¦·à¦¾à§Žà¦•à¦¾à¦°à§‡ à¦¤à¦¿à¦¨à¦¿ à¦¤à¦¾à¦° à¦œà§€à¦¬à¦¨à§‡à¦° à¦—à¦²à§à¦ª à¦–à§à¦²à§‡ à¦¬à¦²à§‡à¦¨à¥¤<br>\r\nà¦¤à¦¾à¦•à§‡ à¦ªà§à¦°à¦¶à§à¦¨ à¦•à¦°à¦¾ à¦¹à§Ÿà§‡ à¦¯à§‡, à¦›à§‹à¦Ÿà¦¬à§‡à¦²à¦¾ à¦¬à¦¨à§à¦§à§à¦¦à§‡à¦° à¦¸à¦¾à¦¥à§‡ à¦–à§‡à¦²à¦¤à§‡ à¦—à§‡à¦²à§‡ à¦¤à¦¾à¦•à§‡ à¦¤à¦¾à§œà¦¿à§Ÿà§‡ à¦¦à§‡à§Ÿà¦¾ à¦¹à§Ÿà§‡à¦›à¦¿à¦²à§‹à¥¤ à¦¸à§‡à¦¦à¦¿à¦¨à§‡à¦° à¦•à¦¥à¦¾ à¦•à¦¿ à¦®à¦¨à§‡ à¦ªà§œà§‡?<br>\r\nà¦‰à¦¤à§à¦¤à¦°à§‡ à¦—à§‹à¦¬à¦¿à¦¨à§à¦¦ à¦œà¦¿à¦¸à¦“à§Ÿà¦¾à¦² à¦¬à¦²à§‡à¦¨, â€à¦ à¦¸à¦®à§Ÿà¦Ÿà¦¿ à¦†à¦®à¦¾à¦° à¦œà§€à¦¬à¦¨à§‡à¦° à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦•à¦ à¦¿à¦¨ à¦¸à¦®à§Ÿà¥¤ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦¬à¦¾à¦¸à¦¸à§à¦¥à¦¾à¦¨ à¦›à¦¿à¦²à§‹ à¦¶à¦¿à¦²à§à¦ª à¦à¦²à¦¾à¦•à¦¾à§Ÿà¥¤ à¦ à¦•à¦¾à¦°à¦£à§‡ à¦¸à§‡à¦–à¦¾à¦¨à§‡ à¦…à¦¨à§‡à¦• à¦§à¦¨à§€ à¦²à§‹à¦•à§‡à¦° à¦¬à¦¸à¦¬à¦¾à¦¸ à¦›à¦¿à¦²à§‹à¥¤ à¦à¦•à¦¦à¦¿à¦¨ à¦†à¦®à¦¾à¦° à¦à¦• à¦¬à¦¨à§à¦§à§à¦° à¦¬à¦¾à¦¸à¦¾à§Ÿ à¦–à§‡à¦²à¦¤à§‡ à¦—à§‡à¦²à§‡ à¦¤à¦¾à¦° à¦¬à¦¾à¦¬à¦¾ à¦œà¦¾à¦¨à¦¤à§‡ à¦šà¦¾à¦¨ à¦¸à§‡ à¦•à§€à¦­à¦¾à¦¬à§‡ à¦˜à¦°à§‡ à¦ªà§à¦°à¦¬à§‡à¦¶ à¦•à¦°à§‡à¦›à§‡à¥¤ à¦¤à¦–à¦¨ à¦†à¦®à¦¾à¦•à§‡ à¦˜à¦° à¦¥à§‡à¦•à§‡ à¦¬à§‡à¦° à¦•à¦°à§‡ à¦¦à¦¿à§Ÿà§‡ à¦¬à¦²à¦²à§‹ à¦¤à§‹à¦®à¦¾à¦° à¦®à¦¤ à¦«à§à¦¯à¦¾à¦®à¦¿à¦²à¦¿à¦° à¦›à§‡à¦²à§‡ à¦à¦‡ à¦˜à¦°à§‡ à¦†à¦¸à¦¾à¦° à¦¸à¦¾à¦¹à¦¸ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦¹à¦²à§‹?â€<br>\r\nâ€à¦…à¦¨à§‡à¦• à¦¦à¦¿à¦¨ à¦§à¦°à§‡ à¦†à¦®à¦¿ à¦à¦° à¦•à§‹à¦¨à§‹ à¦‰à¦¤à§à¦¤à¦° à¦–à§à¦à¦œà§‡ à¦ªà¦¾à¦‡à¦¨à¦¿à¥¤ à¦¤à¦¬à§‡ à¦¸à§‡à¦¦à¦¿à¦¨ à¦¸à¦¬à¦¾à¦‡ à¦¬à¦²à§‡à¦›à¦¿à¦²à§‹ à¦¤à§‹à¦®à¦¾à¦° à¦¸à¦¾à¦®à¦¾à¦œà¦¿à¦• à¦…à¦¬à¦¸à§à¦¥à¦¾à¦¨à§‡à¦° à¦•à¦¾à¦°à¦£à§‡ à¦à¦Ÿà¦¾ à¦¬à¦²à¦¾ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦¯à¦¦à¦¿à¦“ à¦†à¦®à¦¿ à¦²à§‡à¦–à¦¾à¦ªà§œà¦¾à§Ÿ à¦–à§à¦¬ à¦­à¦¾à¦²à§‹ à¦›à¦¿à¦²à¦¾à¦®à¥¤â€<br>\r\nà¦œà¦¿à¦¸à¦“à§Ÿà¦¾à¦² à¦œà¦¾à¦¨à¦¾à¦¨, â€à¦†à¦®à¦¿ à¦¤à¦–à¦¨ à¦œà¦¿à¦œà§à¦žà¦¾à¦¸à¦¾ à¦•à¦°à§‡à¦›à¦¿à¦²à¦¾à¦® à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦†à¦®à¦¾à¦° à¦à¦‡ à¦¸à¦¾à¦®à¦¾à¦œà¦¿à¦• à¦…à¦¬à¦¸à§à¦¥à¦¾à¦¨ à¦ªà¦°à¦¿à¦¬à¦°à§à¦¤à¦¨ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¿? à¦¤à¦–à¦¨ à¦‰à¦¤à§à¦¤à¦° à¦ªà§‡à§Ÿà§‡à¦›à¦¿à¦²à§‹, à¦à¦‡ à¦¸à¦®à¦¾à¦œà§‡ à¦¤à§à¦®à¦¿ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¿à¦¤ à¦¹à¦¤à§‡ à¦ªà¦¾à¦°à¦²à§‡ à¦¤à§‹à¦®à¦¾à¦° à¦à¦‡ à¦¸à¦¾à¦®à¦¾à¦œà¦¿à¦• à¦…à¦¬à¦¸à§à¦¥à¦¾ à¦¬à¦¦à¦²à§‡ à¦¯à¦¾à¦¬à§‡à¥¤â€<br>\r\nâ€à¦¤à¦–à¦¨ à¦†à¦®à¦¿ à¦¬à¦²à§‡à¦›à¦¿à¦²à¦¾à¦® à¦•à§‹à¦¨ à¦šà¦¾à¦•à¦°à¦¿ à¦•à¦°à¦²à§‡ à¦†à¦®à¦¿ à¦¬à¦¾à¦¬à¦¾à¦° à¦…à¦¸à¦®à§à¦®à¦¾à¦¨ à¦¦à§‚à¦° à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‹? à¦†à¦° à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦¬à§œ à¦šà¦¾à¦•à¦°à¦¿ à¦•à§€? à¦¯à¦¾à¦° à¦‰à¦ªà¦°à§‡ à¦†à¦° à¦•à¦¿à¦›à§ à¦¨à§‡à¦‡à¥¤â€<br>\r\nâ€à¦¤à¦–à¦¨ à¦®à¦œà¦¾ à¦•à¦°à§‡ à¦¸à§‡ à¦¬à¦²à§‡à¦›à¦¿à¦²à§‹ à¦¤à§à¦®à¦¿ à¦†à¦‡à¦à¦à¦¸ à¦¹à¦“à¥¤ à¦¤à¦¾à¦° à¦‰à¦ªà¦°à§‡ à¦à¦¦à§‡à¦¶à§‡ à¦†à¦° à¦¬à§œ à¦šà¦¾à¦•à¦°à¦¿ à¦¨à§‡à¦‡à¥¤ à¦¤à¦–à¦¨ à¦†à¦®à¦¿ à¦†à¦‡à¦à¦à¦¸ à¦¹à¦“à§Ÿà¦¾à¦° à¦‡à¦šà§à¦›à¦¾ à¦•à¦°à¦¿ à¦à¦¬à¦‚ à¦ªà§à¦°à¦¥à¦® à¦šà§‡à¦·à§à¦Ÿà¦¾à§Ÿà¦‡ à¦¸à¦«à¦² à¦¹à¦‡à¥¤â€à¦†à¦®à¦°à¦¾ à¦ªà¦°à¦¿à¦¬à¦¾à¦°à§‡à¦° à¦ªà¦¾à¦à¦š à¦¸à¦¦à¦¸à§à¦¯ à¦à¦•à¦‡ à¦°à§à¦®à§‡ à¦¥à¦¾à¦•à¦¤à¦¾à¦® à¦à¦¬à¦‚ à¦–à¦¾à¦“à§Ÿà¦¾-à¦¦à¦¾à¦“à§Ÿà¦¾à¦“ à¦šà¦²à¦¤ à¦ à¦°à§à¦®à§‡à¥¤ à¦¸à§‡à¦–à¦¾à¦¨à§‡à¦‡ à¦†à¦®à¦¿ à¦ªà§œà§‡à¦›à¦¿à¥¤â€™<br>\r\nà¦à¦°à¦•à¦® à¦œà§€à¦¬à¦¨à§‡à¦° à¦…à¦¨à§‡à¦• à¦•à¦ à¦¿à¦¨ à¦‡à¦¤à¦¿à¦¹à¦¾à¦¸ à¦¶à§à¦¨à¦¿à§Ÿà§‡à¦›à§‡à¦¨à¥¤<br>\r\nà¦²à§‡à¦Ÿà§‡à¦¸à§à¦Ÿà¦¬à¦¿à¦¡à¦¿à¦¨à¦¿à¦‰à¦œ.à¦•à¦®/à¦à¦¸', '03/05/2016');
INSERT INTO `pnl_tbl` VALUES(42, 'à¦®à§‡à¦¾à¦¹à¦¾à¦®à§à¦®à¦¦ à¦•à¦¾à§Ÿà¦•à§‡à¦¾à¦¬à¦¾à¦¦: à¦…à¦§à§à¦¯à¦¾à¦ªà¦•, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦ªà§à¦°à¦•à§‡à§—à¦¶à¦² à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿ (à¦¬à§à§Ÿà§‡à¦Ÿ) à¦“ à¦«à§‡à¦²à§‡à¦¾, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦à¦•à¦¾à¦¡à§‡à¦®à¦¿', 'nasrulnanguli@gmail.com', 'Guardian Panel', 'à¦¸à§à¦°à§‹à¦¤à§‡à¦° à¦¬à¦¿à¦ªà¦°à§€à¦¤à§‡ à¦šà¦²à¦¾ à¦à¦•à¦œà¦¨ à¦®à¦¾à¦¨à§à¦·', 'à§§à§¯à§¯à§® à¦¸à¦¾à¦²à§‡ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡à¦° à¦®à¦¾à¦Ÿà¦¿à¦¤à§‡ à¦ªà§à¦°à¦¥à¦®à¦¬à¦¾à¦°à§‡à¦° à¦®à¦¤à§‹ â€˜à¦‡à¦¨à§à¦Ÿà¦¾à¦°à¦¨à§à¦¯à¦¾à¦¶à¦¨à¦¾à¦² à¦•à¦¨à¦«à¦¾à¦°à§‡à¦¨à§à¦¸ à¦…à¦¨ à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦° à¦…à§à¦¯à¦¾à¦¨à§à¦¡ à¦‡à¦¨à¦«à¦°à¦®à§‡à¦¶à¦¨ à¦Ÿà§‡à¦•à¦¨à§‹à¦²à¦œà¦¿â€™ à¦¶à§€à¦°à§à¦·à¦• à¦•à¦¨à¦«à¦¾à¦°à§‡à¦¨à§à¦¸à§‡à¦° à¦¸à§‚à¦šà¦¨à¦¾ à¦¹à§Ÿà¥¤ à¦ªà¦°à§‡à¦° à¦¬à¦›à¦° à§§à§¯à§¯à§¯ à¦¸à¦¾à¦²à§‡ à¦…à¦§à§à¦¯à¦¾à¦ªà¦• à¦®à§à¦¹à¦®à§à¦®à¦¦ à¦œà¦¾à¦«à¦° à¦‡à¦•à¦¬à¦¾à¦² à¦•à¦¨à¦«à¦¾à¦°à§‡à¦¨à§à¦¸à¦Ÿà¦¿ à¦¸à¦¿à¦²à§‡à¦Ÿà§‡ à¦•à¦°à¦¤à§‡ à¦°à¦¾à¦œà¦¿ à¦¹à§Ÿà§‡ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦‰à§Žà¦•à¦£à§à¦ à¦¾à¦®à§à¦•à§à¦¤ à¦•à¦°à¦²à§‡à¦¨à¥¤ à¦•à¦¿à¦¨à§à¦¤à§ à¦“à¦‡ à¦¬à¦›à¦° à¦¯à¦–à¦¨ à¦•à¦¨à¦«à¦¾à¦°à§‡à¦¨à§à¦¸ à¦†à§Ÿà§‹à¦œà¦¨à§‡à¦° à¦¸à¦®à§Ÿ à¦¹à¦²à§‹, à¦¤à¦–à¦¨ à¦¶à¦¾à¦¹à¦œà¦¾à¦²à¦¾à¦² à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨ à¦“ à¦ªà§à¦°à¦¯à§à¦•à§à¦¤à¦¿ à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡à¦° à¦à¦•à¦Ÿà¦¿ à¦¹à¦²à§‡à¦° à¦¨à¦¾à¦®à¦•à¦°à¦£à¦•à§‡ à¦•à§‡à¦¨à§à¦¦à§à¦° à¦•à¦°à§‡ à¦¤à§à¦®à§à¦² à¦†à¦¨à§à¦¦à§‹à¦²à¦¨ à¦¶à§à¦°à§ à¦¹à¦²à§‹à¥¤ à¦«à¦²à§‡ à¦•à¦¨à¦«à¦¾à¦°à§‡à¦¨à§à¦¸à§‡à¦° à¦†à§Ÿà§‹à¦œà¦¨à¦“ à¦…à¦¨à¦¿à¦¶à§à¦šà§Ÿà¦¤à¦¾à¦° à¦®à§à¦–à§‡ à¦ªà§œà§‡à¥¤ à¦¤à¦–à¦¨ à¦œà¦¾à¦«à¦° à¦­à¦¾à¦‡ à¦¶à§‡à¦· à¦®à§à¦¹à§‚à¦°à§à¦¤à§‡ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦ªà§à¦°à¦•à§Œà¦¶à¦² à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡ à¦•à¦¨à¦«à¦¾à¦°à§‡à¦¨à§à¦¸ à¦†à§Ÿà§‹à¦œà¦¨à§‡ à¦¬à¦¾à¦§à§à¦¯ à¦¹à¦²à§‡à¦¨à¥¤ à¦œà¦¾à¦«à¦° à¦‡à¦•à¦¬à¦¾à¦² à¦¬à¦²à¦²à§‡à¦¨, à¦¬à¦¿à¦­à¦¿à¦¨à§à¦¨ à¦¸à§‡à¦¶à¦¨à§‡à¦° à¦œà¦¨à§à¦¯ à¦¸à§‡à¦¶à¦¨ à¦šà§‡à§Ÿà¦¾à¦° à¦ªà§à¦°à§Ÿà§‹à¦œà¦¨à¥¤ à¦†à¦®à¦¾à¦•à§‡ à¦œà¦¿à¦œà§à¦žà¦¾à¦¸à¦¾ à¦•à¦°à¦¾à¦¤à§‡ à¦¬à¦²à¦²à¦¾à¦®, à¦à¦•à¦œà¦¨ à¦¯à§‹à¦—à§à¦¯ à¦®à¦¾à¦¨à§à¦· à¦†à¦›à§‡à¦¨, à¦¤à¦¬à§‡ à¦†à¦®à¦¾à¦° à¦®à¦¨à§‡ à¦¹à§Ÿ à¦¨à¦¾ à¦¤à¦¿à¦¨à¦¿ à¦°à¦¾à¦œà¦¿ à¦¹à¦¬à§‡à¦¨à¥¤ à¦œà¦¾à¦«à¦° à¦­à¦¾à¦‡ à¦¸à¦™à§à¦—à§‡ à¦¸à¦™à§à¦—à§‡ à¦¤à¦¾à¦à¦° à¦Ÿà§‡à¦²à¦¿à¦«à§‹à¦¨ à¦¨à¦®à§à¦¬à¦° à¦¨à¦¿à§Ÿà§‡ à¦«à§‹à¦¨ à¦•à¦°à¦²à§‡à¦¨à¥¤ à¦…à¦¨à§à¦¯ à¦ªà§à¦°à¦¾à¦¨à§à¦¤ à¦¥à§‡à¦•à§‡ à¦‰à¦¤à§à¦¤à¦° à¦à¦², à¦…à¦¨à§à¦·à§à¦ à¦¾à¦¨à§‡ à¦ªà¦°à¦¾à¦° à¦®à¦¤à§‹ à¦œà¦¾à¦®à¦¾à¦•à¦¾à¦ªà§œ, à¦ªà§à¦¯à¦¾à¦¨à§à¦Ÿ, à¦œà§à¦¤à¦¾ à¦•à¦¿à¦›à§à¦‡ à¦¨à§‡à¦‡à¥¤ à¦¸à§à¦¤à¦°à¦¾à¦‚ à¦¸à§‡à¦¶à¦¨ à¦šà§‡à§Ÿà¦¾à¦° à¦¹à¦¤à§‡ à¦ªà¦¾à¦°à¦¬à§‡à¦¨ à¦¨à¦¾à¥¤ à¦œà¦¾à¦«à¦° à¦­à¦¾à¦‡ à¦¬à¦²à¦²à§‡à¦¨, à¦¤à¦¿à¦¨à¦¿ à¦ à¦°à¦•à¦® à¦ªà§à¦¯à¦¾à¦¨à§à¦Ÿ-à¦¶à¦¾à¦°à§à¦Ÿ-à¦œà§à¦¤à¦¾-à¦¸à§à¦¯à¦¾à¦¨à§à¦¡à§‡à¦²à¦¬à¦¿à¦¹à§€à¦¨ à¦à¦•à¦œà¦¨ à¦®à¦¾à¦¨à§à¦· à¦–à§à¦à¦œà¦›à§‡à¦¨ à¦¸à§‡à¦¶à¦¨ à¦šà§‡à§Ÿà¦¾à¦° à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯à¥¤ à¦œà¦¾à¦«à¦° à¦­à¦¾à¦‡à§Ÿà§‡à¦° à¦ªà§à¦°à¦¤à§à¦¯à§Ÿà§€ à¦¯à§à¦•à§à¦¤à¦¿à¦¤à§‡ à¦¤à¦¿à¦¨à¦¿ à¦°à¦¾à¦œà¦¿ à¦¹à§Ÿà§‡à¦›à¦¿à¦²à§‡à¦¨à¥¤ à¦à¦‡ à¦¤à¦¿à¦¨à¦¿ à¦¹à¦²à§‡à¦¨ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦ªà§à¦°à¦•à§Œà¦¶à¦² à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡à¦° à¦‡à¦²à§‡à¦•à¦Ÿà§à¦°à¦¿à¦•à§à¦¯à¦¾à¦² à¦…à§à¦¯à¦¾à¦¨à§à¦¡ à¦‡à¦²à§‡à¦•à¦Ÿà§à¦°à¦¨à¦¿à¦•à¦¸ à¦‡à¦žà§à¦œà¦¿à¦¨à¦¿à§Ÿà¦¾à¦°à¦¿à¦‚ (à¦‡à¦‡à¦‡) à¦¬à¦¿à¦­à¦¾à¦—à§‡à¦° à¦…à¦§à§à¦¯à¦¾à¦ªà¦• à¦®à§‹à¦¹à¦¾à¦®à§à¦®à¦¦ à¦†à¦²à§€ à¦šà§Œà¦§à§à¦°à§€à¥¤ à¦¸à§à¦°à§‹à¦¤à§‡à¦° à¦¬à¦¿à¦ªà¦°à§€à¦¤à§‡ à¦šà¦²à¦¾ à¦¶à¦•à§à¦¤à¦¿à¦¶à¦¾à¦²à§€ à¦®à¦¨à§‹à¦¬à¦²à§‡à¦° à¦à¦•à¦œà¦¨ à¦¨à¦¿à¦¬à§‡à¦¦à¦¿à¦¤à¦ªà§à¦°à¦¾à¦£, à¦ªà§à¦°à¦šà¦¾à¦°à¦¬à¦¿à¦®à§à¦– à¦¶à¦¿à¦•à§à¦·à¦¾à¦¬à¦¿à¦¦à¥¤ à¦‰à¦²à§à¦²à§‡à¦– à¦•à¦°à¦¾ à¦¯à§‡à¦¤à§‡ à¦ªà¦¾à¦°à§‡, à¦¤à¦¿à¦¨à¦¿ à¦ªà§à¦°à¦¥à¦®à§‡ à¦¢à¦¾à¦•à¦¾ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦•à¦²à§‡à¦œà§‡ à¦­à¦°à§à¦¤à¦¿ à¦¹à§Ÿà§‡à¦›à¦¿à¦²à§‡à¦¨à¥¤ à¦ªà§à¦°à¦¥à¦® à¦•à§à¦²à¦¾à¦¸à§‡à¦° à¦¦à¦¿à¦¨ à¦¸à§à¦ªà¦žà§à¦œ à¦ªà¦°à¦¾ à¦à¦‡ à¦›à¦¾à¦¤à§à¦°à¦•à§‡ à¦•à§à¦²à¦¾à¦¸à¦¶à¦¿à¦•à§à¦·à¦¿à¦•à¦¾ à¦¬à¦²à§‡à¦›à¦¿à¦²à§‡à¦¨, â€˜à¦¸à§à¦ªà¦žà§à¦œ à¦ªà¦°à§‡ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦²à§‡ à¦†à¦¸à¦¾ à¦¯à¦¾à¦¬à§‡ à¦¨à¦¾à¥¤â€™ à¦‰à¦¨à¦¿ à¦¸à§à¦ªà¦žà§à¦œ à¦›à¦¾à§œà¦¤à§‡ à¦ªà¦¾à¦°à¦²à§‡à¦¨ à¦¨à¦¾à¥¤ à¦¤à¦¾à¦‡ à¦®à§‡à¦¡à¦¿à¦•à§‡à¦² à¦›à§‡à§œà§‡ à¦¦à¦¿à§Ÿà§‡ à¦¬à§à§Ÿà§‡à¦Ÿà§‡ à¦­à¦°à§à¦¤à¦¿ à¦¹à¦²à§‡à¦¨ à¦¸à§à¦ªà¦žà§à¦œà¦•à§‡ à¦¸à¦™à§à¦—à§€ à¦•à¦°à§‡à¥¤<br>à¦…à¦¸à§à¦Ÿà§à¦°à§‡à¦²à¦¿à§Ÿà¦¾ à¦¥à§‡à¦•à§‡ à¦«à¦¿à¦°à§‡ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦ªà¦°à¦®à¦¾à¦£à§ à¦¶à¦•à§à¦¤à¦¿ à¦—à¦¬à§‡à¦·à¦£à¦¾à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨à§‡ à¦šà¦¾à¦•à¦°à¦¿ à¦¨à¦¿à§Ÿà§‡à¦›à¦¿à¥¤ à¦à¦° à¦®à¦§à§à¦¯à§‡ à¦†à¦¬à¦¾à¦° à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦ªà§à¦°à¦•à§Œà¦¶à¦² à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡à¦° à¦¸à¦¿à¦à¦¸à¦‡ à¦¬à¦¿à¦­à¦¾à¦—à§‡ à¦–à¦£à§à¦¡à¦•à¦¾à¦²à§€à¦¨ à¦¶à¦¿à¦•à§à¦·à¦•à¦¤à¦¾à¦° à¦¸à§à¦¯à§‹à¦— à¦¹à¦²à§‹à¥¤ à¦ªà¦°à¦¿à¦¶à§‡à¦·à§‡ à¦ªà§‚à¦°à§à¦£à¦•à¦¾à¦²à§€à¦¨ à¦¶à¦¿à¦•à§à¦·à¦•à¦¤à¦¾, à¦¯à¦¾à¦¤à§‡ à¦†à¦®à¦¾à¦° à¦¸à¦¹à¦•à¦°à§à¦®à§€ à¦†à¦²à¦®à¦—à§€à¦° à¦­à¦¾à¦‡à§Ÿà§‡à¦° à¦‰à§Žà¦¸à¦¾à¦¹à§‡à¦° à¦…à¦¬à¦¦à¦¾à¦¨ à¦…à¦¨à§‡à¦•à¥¤ à¦‡à¦à¦®à¦‡ à¦­à¦¬à¦¨à§‡ à¦à¦–à¦¨ à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦²à¦¿à¦«à¦Ÿ à¦¹à§Ÿà§‡à¦›à§‡, à¦¸à§‡à¦–à¦¾à¦¨à§‡ à¦®à§‹à¦¹à¦¾à¦®à§à¦®à¦¦ à¦†à¦²à§€ à¦­à¦¾à¦‡à§Ÿà§‡à¦° à¦•à¦•à§à¦·à§‡ à¦¸à¦•à¦¾à¦²à§‡ à¦…à¦¨à§‡à¦• à¦¶à¦¿à¦•à§à¦·à¦•à¦‡ à¦¬à¦¸à§‡à¦¨, à¦†à¦²à¦¾à¦ª à¦•à¦°à§‡à¦¨à¥¤ à¦¸à¦®à¦¾à¦œ, à¦¶à¦¿à¦•à§à¦·à¦¾, à¦—à¦¬à§‡à¦·à¦£à¦¾ à¦¬à¦¾ à¦§à¦°à§à¦®à¦¤à¦¤à§à¦¤à§à¦¬à¦¸à¦¹ à¦¨à¦¾à¦¨à¦¾ à¦¬à¦¿à¦·à§Ÿà§‡ à¦¤à¦¾à¦à¦° à¦¬à¦¿à¦¸à§à¦¤à¦¾à¦°à¥¤ à¦¶à§à¦§à§ à¦¤à¦¾-à¦‡ à¦¨à§Ÿ, à¦†à¦²à¦¾à¦ªà¦šà¦¾à¦°à¦¿à¦¤à¦¾ à¦œà¦®à¦¿à§Ÿà§‡ à¦¤à§‹à¦²à¦¾à¦° à¦œà¦¨à§à¦¯ à¦¯à§‡ à¦†à¦ªà§à¦¯à¦¾à§Ÿà¦¨ à¦ªà§à¦°à§Ÿà§‹à¦œà¦¨, à¦¤à¦¾à¦°à¦“ à¦•à§‹à¦¨à§‹ à¦•à¦®à¦¤à¦¿ à¦¨à§‡à¦‡à¥¤ à¦®à§à§œà¦¿, à¦šà¦¾à¦¨à¦¾à¦šà§à¦°, à¦«à¦²à¦®à§‚à¦², à¦¬à¦¿à¦¸à§à¦•à§à¦Ÿ à¦†à¦° à¦•à¦¾à¦°à§à¦Ÿà¦¨-à¦•à¦¾à¦°à§à¦Ÿà¦¨ à¦•à§‹à¦•à¦¾-à¦•à§‹à¦²à¦¾à¥¤ à¦…à¦§à¦¿à¦•à¦¾à¦‚à¦¶ à¦¸à¦®à§Ÿ à¦¦à¦°à¦œà¦¾-à¦–à§‹à¦²à¦¾ à¦•à¦•à§à¦·à§‡à¦° à¦–à§‹à¦²à¦¾ à¦¦à§‡à¦°à¦¾à¦œà§‡ à¦Ÿà¦¾à¦•à¦¾ à¦à¦®à¦¨à¦•à¦¿ à¦¬à¦¿à¦¦à§‡à¦¶à¦¿ à¦®à§à¦¦à§à¦°à¦¾ à¦°à§‡à¦–à§‡ à¦¦à§‡à¦¨; à¦¯à¦¾ à¦¦à§à¦ƒà¦¸à¦®à§Ÿà§‡ à¦†à¦®à¦¿à¦¸à¦¹ à¦¨à¦¾à¦¨à¦¾à¦œà¦¨à§‡à¦° à¦•à¦¾à¦œà§‡ à¦à¦¸à§‡à¦›à§‡à¥¤ à¦›à§‹à¦Ÿà§à¦Ÿ à¦•à¦•à§à¦·à§‡ à¦®à§‡à¦§à¦¾à¦¬à§€ à¦®à¦¾à¦¨à§à¦·à¦¦à§‡à¦° à¦œà¦¨à§à¦¯ à¦°à§€à¦¤à¦¿à¦®à¦¤à§‹ à¦‰à¦¦à§à¦¦à§€à¦ªà¦¨à¦¾à¦ªà§‚à¦°à§à¦£ à¦ªà¦°à¦¿à¦¬à§‡à¦¶ à¦¤à§ˆà¦°à¦¿ à¦•à¦°à¦¤à§‡ à¦ªà§‡à¦°à§‡à¦›à§‡à¦¨, à¦¯à§‡à¦®à¦¨à¦Ÿà¦¿ à¦•à¦°à¦¤ à¦ªà§à¦°à§‹à¦¨à§‹ à¦¦à¦¿à¦¨à§‡à¦° à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨ à¦à¦•à¦¾à¦¡à§‡à¦®à¦¿à¦—à§à¦²à§‹à¥¤ à¦à¦° à¦¸à¦™à§à¦—à§‡ à¦†à¦®à¦¿à¦“ à¦à¦•à¦¦à¦¿à¦¨ à¦¯à§à¦•à§à¦¤ à¦¹à¦²à¦¾à¦®; à¦¯à¦¦à¦¿à¦“ à¦†à¦®à¦¾à¦° à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦¬à§à¦¦à§à¦§à¦¿à¦° à¦¬à§à¦¯à¦¾à¦ªà§à¦¤à¦¿ à¦à¦¸à¦¬ à¦†à¦²à¦¾à¦ªà§‡à¦° à¦œà¦¨à§à¦¯ à¦¯à¦¥à§‡à¦·à§à¦Ÿ à¦¨à§Ÿà¥¤\r\nà¦®à§‹à¦¹à¦¾à¦®à§à¦®à¦¦ à¦†à¦²à§€ à¦•à¦¾à¦¨à¦¾à¦¡à¦¾ à¦¥à§‡à¦•à§‡ à¦ªà¦¿à¦à¦‡à¦šà¦¡à¦¿ à¦•à¦°à§‡à¦›à§‡à¦¨à¥¤ à¦†à¦œ à¦¥à§‡à¦•à§‡ à¦¸à¦¿à¦•à¦¿ à¦¶à¦¤à¦¾à¦¬à§à¦¦à§€ à¦†à¦—à§‡ à¦¶à§à¦°à§‡à¦·à§à¦  à¦—à¦¬à§‡à¦·à¦£à¦¾à¦ªà¦¤à§à¦°à§‡à¦° à¦œà¦¨à§à¦¯ à¦†à¦‡à¦‡à¦‡à¦‡à¦° à¦ªà§à¦°à¦¸à§à¦•à¦¾à¦°à¦“ à¦ªà§‡à§Ÿà§‡à¦›à§‡à¦¨à¥¤ à¦…à¦°à§à¦¥à§‡à¦° à¦ªà§à¦°à¦¤à¦¿, à¦¬à¦¿à¦¤à§à¦¤à¦¬à§ˆà¦­à¦¬à§‡à¦° à¦ªà§à¦°à¦¤à¦¿ à¦•à§‹à¦¨à§‹ à¦†à¦•à¦°à§à¦·à¦£ à¦¤à¦¾à¦à¦° à¦®à¦§à§à¦¯à§‡ à¦¦à§‡à¦–à¦¿à¦¨à¦¿à¥¤ à¦¯à¦¦à¦¿à¦“ à¦‰à¦ªà¦¾à¦°à§à¦œà¦¿à¦¤ à¦…à¦°à§à¦¥à§‡à¦° à¦•à¦° à¦ªà¦°à¦¿à¦¶à§‹à¦§à§‡ à¦†à¦—à§à¦°à¦¹ à¦¤à¦¾à¦à¦° à¦¸à§€à¦®à¦¾à¦¹à§€à¦¨à¥¤ à¦¶à¦¿à¦•à§à¦·à¦•à§‡à¦°à¦¾ à¦¯à¦–à¦¨ à¦•à§à¦·à§‹à¦­ à¦ªà§à¦°à¦•à¦¾à¦¶à§‡à¦° à¦œà¦¨à§à¦¯ à¦•à§à¦²à¦¾à¦¸ à¦¬à¦°à§à¦œà¦¨ à¦•à¦°à¦¾à¦° à¦¸à¦¿à¦¦à§à¦§à¦¾à¦¨à§à¦¤ à¦¨à§‡à¦¨, à¦¤à¦–à¦¨ à¦à¦•à¦®à¦¾à¦¤à§à¦° à¦…à¦§à§à¦¯à¦¾à¦ªà¦• à¦®à§‹à¦¹à¦¾à¦®à§à¦®à¦¦ à¦†à¦²à§€ à¦šà§Œà¦§à§à¦°à§€ à¦•à§à¦·à§‹à¦­à¦•à§‡ à¦¸à¦¨à§à¦¦à§‡à¦¹à¦¾à¦¤à§€à¦¤à¦­à¦¾à¦¬à§‡ à¦ªà§à¦°à¦®à¦¾à¦£ à¦•à¦°à¦¾à¦° à¦œà¦¨à§à¦¯ à¦¬à¦°à§à¦œà¦¿à¦¤ à¦•à§à¦²à¦¾à¦¸à§‡à¦° à¦¦à¦¿à¦¨à¦—à§à¦²à§‹à¦¤à§‡ à¦¬à§‡à¦¤à¦¨ à¦—à§à¦°à¦¹à¦£ à¦¨à¦¾ à¦•à¦°à¦¾à¦° à¦ªà§à¦°à¦¸à§à¦¤à¦¾à¦¬ à¦¦à§‡à¦¨à¥¤ à¦†à¦®à¦¿ à¦¯à¦¦à¦¿ à¦•à¦¦à¦¾à¦šà¦¿à§Ž à¦à¦•à¦Ÿà¦¾ à¦ªà§‡à¦ªà¦¾à¦° à¦•à§‹à¦¨à§‹ à¦œà¦¾à¦°à§à¦¨à¦¾à¦²à§‡ à¦ªà¦¾à¦ à¦¾à¦¤à¦¾à¦®, à¦¤à¦¾ à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡à¦° à¦¡à¦¾à¦•à§‡à¦° à¦®à¦¾à¦°à¦«à¦¤à§‡ à¦ªà¦¾à¦ à¦¿à§Ÿà§‡ à¦¨à¦¿à¦¶à§à¦šà¦¿à¦¤ à¦•à¦°à¦¤à¦¾à¦® à¦¯à§‡ à¦†à¦®à¦¾à¦° à¦ªà¦•à§‡à¦Ÿ à¦¯à¦¾à¦¤à§‡ à¦•à§‹à¦¨à§‹à¦­à¦¾à¦¬à§‡à¦‡ à¦•à§à¦·à¦¤à¦¿à¦—à§à¦°à¦¸à§à¦¤ à¦¨à¦¾ à¦¹à§Ÿà¥¤ à¦…à¦¨à§à¦¯à¦ªà¦•à§à¦·à§‡ à¦¤à¦¿à¦¨à¦¿ à¦¨à¦¿à¦œà§‡à¦° à¦•à§‡à¦¨à¦¾ à¦–à¦¾à¦®à§‡ à¦¨à¦¿à¦œà§‡à¦° à¦ªà§Ÿà¦¸à¦¾à§Ÿ à¦¸à§à¦Ÿà§à¦¯à¦¾à¦®à§à¦ª à¦•à¦¿à¦¨à§‡ à¦ªà¦¾à¦ à¦¾à¦¤à§‡à¦¨à¥¤ à¦¸à¦¾à¦§à¦¾à¦°à¦£à¦¤ à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡à¦° à¦•à¦¾à¦—à¦œ-à¦•à¦²à¦®à¦¸à¦¹ à¦¨à¦¾à¦¨à¦¾ à¦¸à§à¦¯à§‹à¦—-à¦¸à§à¦¬à¦¿à¦§à¦¾ à¦†à¦®à¦¿ à¦¯à¦–à¦¨-à¦¤à¦–à¦¨ à¦—à§à¦°à¦¹à¦£ à¦•à¦°à¦²à§‡à¦“ à¦ à¦¬à¦¿à¦·à§Ÿà§‡ à¦¤à¦¿à¦¨à¦¿ à¦›à¦¿à¦²à§‡à¦¨ à¦°à§€à¦¤à¦¿à¦®à¦¤à§‹ à¦…à¦¨à¦¾à¦—à§à¦°à¦¹à§€à¥¤ à¦†à¦®à¦¾à¦¦à§‡à¦° à¦¬à¦¿à¦­à¦¾à¦—à§‡ à¦•à§‹à¦¨à§‡à¦¾ à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦° à¦ à¦¿à¦•à¦®à¦¤à§‹ à¦•à¦¾à¦œ à¦¨à¦¾ à¦•à¦°à¦²à§‡ à¦¹à¦¾à¦¤à§à§œà¦¿-à¦¬à¦¾à¦Ÿà¦¾à¦² à¦¨à¦¿à§Ÿà§‡ à¦²à§‡à¦—à§‡ à¦ªà§œà¦¤à§‡à¦¨, à¦¨à¦¾à¦¨à¦¾ à¦¸à¦®à§Ÿà§‡ à¦ªà§à¦°à§Ÿà§‹à¦œà¦¨à§€à§Ÿ à¦¯à¦¨à§à¦¤à§à¦°à¦¾à¦‚à¦¶ à¦¤à¦¿à¦¨à¦¿ à¦¨à¦¿à¦¶à§à¦šà§Ÿà¦‡ à¦¨à¦¿à¦œà§‡à¦° à¦ªà§Ÿà¦¸à¦¾à§Ÿ à¦•à¦¿à¦¨à¦¤à§‡à¦¨à¥¤ à¦•à¦¾à¦°à¦£, à¦à¦‡ à¦ªà§Ÿà¦¸à¦¾ à¦…à¦¨à§à¦®à§‹à¦¦à¦¨ à¦•à¦°à¦¾à¦¤à§‡ à¦¯à§‡ à¦à¦¾à¦®à§‡à¦²à¦¾ à¦ªà§‹à¦¹à¦¾à¦¤à§‡ à¦¹à¦¬à§‡, à¦¤à¦¾ à¦¤à¦¾à¦à¦° à¦šà¦°à¦¿à¦¤à§à¦°à§‡à¦° à¦¸à¦™à§à¦—à§‡ à¦¬à§‡à¦®à¦¾à¦¨à¦¾à¦¨ à¦›à¦¿à¦²à¥¤ à¦†à¦®à¦¿ à¦¤à§‹ à¦°à§€à¦¤à¦¿à¦®à¦¤à§‹ à¦…à¦¬à¦¾à¦•! à¦…à¦¨à§à¦¯ à¦¬à¦¿à¦­à¦¾à¦—à§‡à¦° à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°à¦¸à¦¹ à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯ à¦•à§€ à¦•à§€ à¦¯à¦¨à§à¦¤à§à¦°à¦¾à¦‚à¦¶ à¦•à¦¾à¦œ à¦•à¦°à§‡ à¦¨à¦¾, à¦¤à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦®à¦¾à¦¥à¦¾à¦¬à§à¦¯à¦¥à¦¾â€”à¦¨à¦¿à¦œà§‡à¦° à¦–à§‡à§Ÿà§‡ à¦¬à¦¨à§‡à¦° à¦®à§‹à¦· à¦¤à¦¾à§œà¦¾à¦¨à§‹!!! à¦à¦Ÿà¦¾ à¦•à§‡à¦¬à¦²à¦®à¦¾à¦¤à§à¦° à¦…à¦§à§à¦¯à¦¾à¦ªà¦• à¦®à§‹à¦¹à¦¾à¦®à§à¦®à¦¦ à¦†à¦²à§€ à¦šà§Œà¦§à§à¦°à§€à¦‡ à¦•à¦°à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨à¥¤ à¦¯à§‡à¦¸à¦¬ à¦•à¦¾à¦œà§‡ à¦ªà§à¦°à¦¾à¦ªà§à¦¤à¦¿ à¦¨à§‡à¦‡ à¦¤à¦¾à¦¤à§‡ à¦¤à¦¾à¦à¦° à¦¸à§€à¦®à¦¾à¦¹à§€à¦¨ à¦†à¦—à§à¦°à¦¹, à¦ªà¦¾à¦°à§à¦¥à¦¿à¦¬ à¦‰à¦¨à§à¦¨à¦¤à¦¿à¦° à¦¯à§‡à¦•à§‹à¦¨à§‹ à¦¬à¦¿à¦·à§Ÿà§‡ à¦¤à¦¾à¦à¦° à¦…à¦¨à¦¾à¦—à§à¦°à¦¹à¦“ à¦²à¦•à§à¦·à¦£à§€à§Ÿà¥¤ à¦›à¦¾à¦¤à§à¦°à¦¦à§‡à¦° à¦‰à¦šà§à¦šà¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§‡ à¦†à¦¬à§‡à¦¦à¦¨à¦ªà¦¤à§à¦°à§‡à¦° à¦¸à¦™à§à¦—à§‡ à¦¯à§‡ à¦ªà§à¦°à¦¤à§à¦¯à§Ÿà¦¨à¦ªà¦¤à§à¦° à¦²à¦¾à¦—à§‡, à¦¤à¦¾ à¦¸à¦¬ à¦¸à¦®à§Ÿ à¦¤à¦¿à¦¨à¦¿ à¦¨à¦¿à¦œà§‡à¦‡ à¦²à§‡à¦–à§‡à¦¨ à¦à¦¬à¦‚ à¦¨à¦¿à¦œà§‡à¦‡ à¦ªà§‹à¦¸à§à¦Ÿ à¦•à¦°à§‡à¦¨ à¦ªà§à¦°à¦¤à§à¦¯à§‡à¦• à¦›à¦¾à¦¤à§à¦°à§‡à¦° à¦œà¦¨à§à¦¯ à¦†à¦²à¦¾à¦¦à¦¾ à¦•à¦°à§‡à¥¤ à¦›à¦¾à¦¤à§à¦°à¦¦à§‡à¦° à¦¥à¦¿à¦¸à¦¿à¦¸ à¦¸à¦®à§à¦ªà¦¾à¦¦à¦¨à¦¾à§Ÿ à¦¸à¦®à§Ÿ à¦¦à§‡à¦¨ à¦ªà§à¦°à¦šà§à¦°â€”à¦—à§‹à¦Ÿà¦¾ à¦¥à¦¿à¦¸à¦¿à¦¸ à§§à§«-à§¨à§¦ à¦¬à¦¾à¦° à¦¤à§‹ à¦¦à§‡à¦–à§‡à¦¨à¦‡à¥¤<br>\r\nà¦¤à¦¾à¦à¦° à¦°à§‹à¦œà¦¨à¦¾à¦®à¦šà¦¾ à¦…à¦¸à¦¾à¦§à¦¾à¦°à¦£à¥¤ à¦«à¦œà¦°à§‡à¦° à¦¨à¦¾à¦®à¦¾à¦œ à¦ªà§œà§‡à¦‡ à¦…à¦«à¦¿à¦¸à§‡ à¦šà¦²à§‡ à¦†à¦¸à§‡à¦¨à¥¤ à¦¦à§‡à¦¶à¦¿ à¦•à¦¿à¦‚à¦¬à¦¾ à¦…à¦¤à¦¿à¦¥à¦¿ à¦ªà¦¾à¦–à¦¿à¦° à¦–à¦¾à¦¬à¦¾à¦°à§‡à¦° à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾ à¦•à¦°à¦¾, à¦šà¦¾à¦°à¦¾ à¦—à¦¾à¦›à§‡ à¦ªà¦¾à¦¨à¦¿ à¦¦à§‡à¦“à§Ÿà¦¾, à¦²à§‡à¦–à¦¾à¦²à§‡à¦–à¦¿, à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°à§‡ à¦•à¦¾à¦œ, à¦‡à¦²à§‡à¦•à¦Ÿà§à¦°à¦¿à¦•à§à¦¯à¦¾à¦² à¦‡à¦žà§à¦œà¦¿à¦¨à¦¿à§Ÿà¦¾à¦°à¦¿à¦‚à§Ÿà§‡à¦° à¦¨à¦¾à¦¨à¦¾ à¦¬à¦‡ à¦¡à¦¾à¦‰à¦¨à¦²à§‹à¦¡ à¦•à¦°à§‡ à¦²à¦¾à¦‡à¦¬à§à¦°à§‡à¦°à¦¿à¦¤à§‡ à¦¦à§‡à¦“à§Ÿà¦¾, à¦•à§à¦²à¦¾à¦¸à§‡ à¦¯à¦¾à¦“à§Ÿà¦¾à¦° à¦†à¦—à§‡ à¦ªà§à¦°à§‹ à¦¬à¦•à§à¦¤à§ƒà¦¤à¦¾ à¦¸à§à¦¬à¦¹à¦¸à§à¦¤à§‡ à¦²à§‡à¦–à¦¾, à¦¸à¦®à¦¸à§à¦¯à¦¾ à¦¸à¦®à¦¾à¦§à¦¾à¦¨ à¦•à¦°à¦¾à¥¤ à¦à¦° à¦®à¦¾à¦à§‡ à¦¬à¦¾à¦œà¦¾à¦°, à¦­à§à¦°à¦®à¦£ à¦•à¦°à¦¾ à¦à¦¬à¦‚ à¦¦à¦¿à¦¨ à¦¶à§‡à¦·à§‡ à¦°à¦¾à¦¤ à¦¨à§Ÿ-à¦¦à¦¶à¦Ÿà¦¾à¦° à¦¦à¦¿à¦•à§‡ à¦¬à¦¾à¦¸à¦¾à§Ÿ à¦«à§‡à¦°à¦¾à¥¤ à¦¸à¦¾à¦°à¦¾ à¦¦à¦¿à¦¨, à¦¸à¦ªà§à¦¤à¦¾à¦¹à§‡ à¦¸à¦¾à¦¤ à¦¦à¦¿à¦¨, à¦¬à¦›à¦°à§‡ à§«à§¨ à¦¸à¦ªà§à¦¤à¦¾à¦¹à¥¤ à¦à¦° à¦®à¦§à§à¦¯à§‡ à¦›à§‡à¦¦ à¦˜à¦Ÿà§‡à¦›à§‡ à¦•à§‡à¦¬à¦²à¦®à¦¾à¦¤à§à¦° à¦¨à¦¿à¦•à¦Ÿà¦¤à¦® à¦ªà¦¾à¦°à¦¿à¦¬à¦¾à¦°à¦¿à¦• à¦¸à¦¦à¦¸à§à¦¯à¦¦à§‡à¦° à¦®à§ƒà¦¤à§à¦¯à§à¦° à¦•à¦¾à¦°à¦£à¥¤ à¦à¦‡ à¦°à§‹à¦œà¦¨à¦¾à¦®à¦šà¦¾ à¦šà¦²à¦›à§‡ à§¨à§­-à§¨à§® à¦¬à¦›à¦° à¦§à¦°à§‡, à¦à¦• à¦¬à¦›à¦° à¦¦à§à¦‡ à¦¬à¦›à¦° à¦§à¦°à§‡ à¦¨à§Ÿà¥¤ à¦†à¦®à¦¿ à¦¯à¦¦à¦¿ à¦•à¦–à¦¨à§‹ à¦¸à¦•à¦¾à¦²à§‡ à¦…à¦«à¦¿à¦¸à§‡ à¦†à¦¸à¦¿, à¦«à¦²à§‡à¦° à¦°à¦¸ à¦¥à§‡à¦•à§‡ à¦šà¦¾à¦¨à¦¾à¦šà§à¦° à¦“ à¦…à¦¨à§à¦¯à¦¾à¦¨à§à¦¯ à¦²à§‹à¦­à¦¨à§€à§Ÿ à¦–à¦¾à¦¬à¦¾à¦° à¦¸à§à¦¬à¦¹à¦¸à§à¦¤à§‡ à¦ªà¦°à¦¿à¦¬à§‡à¦¶à¦¨ à¦•à¦°à§‡à¦¨à¥¤ à¦†à¦®à¦¾à¦° à¦…à¦«à¦¿à¦¸à§‡ à¦¶ à¦¦à§-à¦à¦•à§‡à¦° à¦¬à§‡à¦¶à¦¿ à¦à¦•à¦•à¦¾à¦²à§€à¦¨ à¦¬à§à¦¯à¦¬à¦¹à¦¾à¦°à§à¦¯ à¦¯à§‡ à¦—à§à¦²à¦¾à¦¸, à¦¸à¦¬à¦‡ à¦¤à¦¾à¦à¦° à¦¦à§‡à¦“à§Ÿà¦¾, à¦«à¦²à§‡à¦° à¦°à¦¸à¦¸à¦¹à¥¤ à¦†à¦®à¦¾à¦° à¦…à¦«à¦¿à¦¸à§‡ à¦à¦¸à§‡ à¦¯à¦¦à¦¿ à¦¦à§‡à¦–à¦¤à§‡ à¦ªà¦¾à¦¨ à¦†à¦°à¦“ à¦šà¦¾à¦°-à¦ªà¦¾à¦à¦šà¦œà¦¨ à¦›à¦¾à¦¤à§à¦° à¦¬à¦¸à§‡ à¦†à¦›à§‡, à¦¤à¦¬à§‡ à¦¸à¦¬à¦¾à¦° à¦œà¦¨à§à¦¯à¦‡ à¦•à¦¿à¦›à§ à¦–à¦¾à¦¬à¦¾à¦°à§‡à¦° à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾ à¦•à¦°à§‡à¦¨à¥¤ à¦à¦Ÿà¦¾ à¦¹à¦²à§‹ à¦¶à¦¿à¦•à§à¦·à¦¾à¦° à¦œà¦¨à§à¦¯ à¦ªà§à¦°à¦£à§‹à¦¦à¦¨à¦¾â€”à¦¶à§‡à¦–à¦¾à¦° à¦œà¦¨à§à¦¯, à¦¶à§‡à¦–à¦¾à¦¨à§‹à¦° à¦œà¦¨à§à¦¯à¦“à¥¤ à¦¤à¦¬à§‡ à¦•à§‹à¦¨à§‹à¦•à§à¦°à¦®à§‡à¦‡ à¦¤à¦¾à¦à¦•à§‡ à¦†à¦ªà§à¦¯à¦¾à§Ÿà¦¨ à¦•à¦°à¦¾ à¦¸à¦®à§à¦­à¦¬ à¦¨à§Ÿà¥¤ à¦ªà§à¦°à¦¤à¦¿ à¦§à¦°à§à¦®à§€à§Ÿ à¦‰à§Žà¦¸à¦¬à§‡ à¦¸à§à¦¬à¦¿à¦§à¦¾à¦¬à¦žà§à¦šà¦¿à¦¤ à¦¦à¦¾à¦°à¦¿à¦¦à§à¦°à§à¦¯à¦ªà§€à§œà¦¿à¦¤ à¦²à§‹à¦•à¦¦à§‡à¦° à¦°à¦¿à¦•à¦¶à¦¾ à¦•à¦¿à¦¨à§‡ à¦¦à¦¿à¦¤à§‡à¦¨, à¦¯à¦¾à¦¤à§‡ à¦¤à¦¾à¦à¦°à¦¾ à¦¸à§à¦¬à¦¾à¦¬à¦²à¦®à§à¦¬à§€ à¦¹à§Ÿà¥¤ à¦…à¦¨à§‡à¦•à§‡à¦‡ à¦à¦‡ à¦¸à§à¦¯à§‹à¦—à§‡à¦° à¦…à¦ªà¦¬à§à¦¯à¦¬à¦¹à¦¾à¦° à¦•à¦°à§‡à¦›à§‡à¥¤ à¦¤à¦¾à¦‡ à¦à¦–à¦¨ à¦…à¦°à§à¦§à¦¶à¦¤à¦• à¦°à¦¿à¦•à¦¶à¦¾à¦“à§Ÿà¦¾à¦²à¦¾à¦•à§‡ à¦§à¦°à§à¦®à§€à§Ÿ à¦‰à§Žà¦¸à¦¬à§‡ à¦à¦•à¦•à¦¾à¦²à§€à¦¨ à¦…à¦°à§à¦¥ à¦ªà§à¦°à¦¦à¦¾à¦¨ à¦•à¦°à§‡à¦¨à¥¤ à¦†à¦®à¦¾à¦° à¦¯à§‡à¦•à§‹à¦¨à§‹ à¦†à¦—à¦¨à§à¦¤à§à¦• à¦¤à¦¾à¦à¦° à¦¸à¦®à§à¦®à¦¾à¦¨à¦¿à¦¤ à¦…à¦¤à¦¿à¦¥à¦¿ à¦à¦¬à¦‚ à¦¸à¦¬ à¦…à¦¤à¦¿à¦¥à¦¿à¦•à§‡à¦‡ à¦¤à¦¿à¦¨à¦¿ à¦†à¦ªà§à¦¯à¦¾à§Ÿà¦¨ à¦•à¦°à§‡à¦¨à¥¤ à¦à¦‡ à¦†à¦¤à¦¿à¦¥à§‡à§Ÿà¦¤à¦¾, à¦¬à¦¿à¦¨à§Ÿ à¦¤à¦¾à¦à¦° à¦šà¦°à¦¿à¦¤à§à¦°à§‡à¦° à¦…à¦¤à§à¦¯à¦¨à§à¦¤ à¦—à§à¦°à§à¦¤à§à¦¬à¦ªà§‚à¦°à§à¦£ à¦…à¦‚à¦¶à¥¤ à¦à¦Ÿà¦¾ à¦¤à¦¾à¦à¦•à§‡ à¦•à¦–à¦¨à§‹ à¦šà¦¿à¦¨à§à¦¤à¦¾à¦­à¦¾à¦¬à¦¨à¦¾ à¦•à¦°à§‡ à¦•à¦°à¦¤à§‡ à¦¹à§Ÿ à¦¨à¦¾à¥¤ à¦¨à¦¾à¦¨à¦¾ à¦¸à§à¦¬à¦¾à¦¸à§à¦¥à§à¦¯-à¦¸à¦®à¦¸à§à¦¯à¦¾à§Ÿ à¦­à§à¦—à§‡à¦›à§‡à¦¨, à¦…à¦¨à§‡à¦• à¦›à¦¾à¦¤à§à¦° à¦“ à¦¶à§à¦­à¦¾à¦•à¦¾à¦™à§à¦•à§à¦·à§€ à¦¥à¦¾à¦•à¦¾ à¦¸à¦¤à§à¦¤à§à¦¬à§‡à¦“ à¦•à¦¾à¦°à¦“ à¦®à§à¦–à¦¾à¦ªà§‡à¦•à§à¦·à§€ à¦•à¦–à¦¨à§‹ à¦¹à¦¨à¦¨à¦¿ à¦†à¦œà§€à¦¬à¦¨ à¦…à¦•à§ƒà¦¤à¦¦à¦¾à¦° à¦à¦‡ à¦®à¦¾à¦¨à§à¦·à¦Ÿà¦¿à¥¤ à¦•à§‹à¦¨à§‹ à¦¬à¦¿à¦·à§Ÿà§‡à¦‡ à¦¤à§‡à¦®à¦¨ à¦•à§‹à¦¨à§‹ à¦…à¦­à¦¿à¦¯à§‹à¦— à¦¨à§‡à¦‡ à¦•à¦¾à¦°à¦“ à¦ªà§à¦°à¦¤à¦¿à¥¤ à¦¸à¦¾à¦°à¦¾ à¦œà§€à¦¬à¦¨ à¦¸à§à¦°à§‹à¦¤à§‡à¦° à¦¬à¦¿à¦ªà¦°à§€à¦¤à§‡ à¦šà¦²à¦¾ à¦à¦‡ à¦®à¦¾à¦¨à§à¦·à¦Ÿà¦¿ à¦à¦­à¦¾à¦¬à§‡à¦‡ à¦¯à§‡à¦¨ à¦¬à¦¾à¦•à¦¿ à¦œà§€à¦¬à¦¨ à¦¨à¦¿à¦°à§à¦à¦žà§à¦à¦¾à¦Ÿ à¦“ à¦¸à§à¦¸à§à¦¥à¦­à¦¾à¦¬à§‡ à¦•à¦¾à¦Ÿà¦¾à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¦¨â€”à¦à¦‡ à¦•à¦¾à¦®à¦¨à¦¾ à¦•à¦°à¦¿à¥¤<br>\r\nà¦®à§‡à¦¾à¦¹à¦¾à¦®à§à¦®à¦¦ à¦•à¦¾à§Ÿà¦•à§‡à¦¾à¦¬à¦¾à¦¦: à¦…à¦§à§à¦¯à¦¾à¦ªà¦•, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦ªà§à¦°à¦•à§‡à§—à¦¶à¦² à¦¬à¦¿à¦¶à§à¦¬à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿ (à¦¬à§à§Ÿà§‡à¦Ÿ) à¦“ à¦«à§‡à¦²à§‡à¦¾, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦à¦•à¦¾à¦¡à§‡à¦®à¦¿ à¦…à¦¬ à¦¸à¦¾à§Ÿà§‡à¦¨à§à¦¸à§‡à¦¸à¥¤', '6/5/16');
INSERT INTO `pnl_tbl` VALUES(43, 'Muraduzzaman Murad', 'murad@gmail.com', 'Guardian Panel', 'à¥¥à¥¥à¦¶à¦¿à¦•à§à¦·à¦¨à§€à§Ÿ à¦—à¦²à§à¦ªà¥¥', 'à¥¥à¥¥à¦¶à¦¿à¦•à§à¦·à¦¨à§€à§Ÿ à¦—à¦²à§à¦ªà¥¥ <br>"à¦…à¦¤à§€à¦¤ à¦¹à¦šà§à¦›à§‡ à¦à¦•à¦œà¦¨ à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦¸à¦¬à¦šà§‡à§Ÿà§‡ à¦­à¦¾à¦²à§‹ à¦¶à¦¿à¦•à§à¦·à¦•,,,,,!  <br> "à¦¬à¦¿à¦² à¦—à§‡à¦Ÿà¦¸ à¦à¦•à¦Ÿà¦¿ à¦°à§‡à¦¸à§à¦Ÿà§à¦°à§‡à¦¨à§à¦Ÿà§‡ à¦–à§‡à¦¤à§‡ à¦—à§‡à¦›à§‡,à¦–à¦¾à¦“à§Ÿà¦¾à¦° à¦ªà¦° à¦¬à¦¿à¦² à¦—à§‡à¦Ÿà¦¸ à¦“à§Ÿà§‡à¦Ÿà¦¾à¦° à¦•à§‡ à§« à¦¡à¦²à¦¾à¦° à¦¬à¦–à¦¸à¦¿à¦¸ à¦¦à¦¿à¦²à§‹,,,,à¦¬à¦–à¦¸à¦¿à¦¸ à¦ªà§‡à§Ÿà§‡ à¦“à§Ÿà§‡à¦Ÿà¦¾à¦° à¦¬à¦¿à¦² à¦—à§‡à¦Ÿà¦¸à§‡à¦° à¦¦à¦¿à¦•à§‡ à¦¹à¦¾ à¦•à¦°à§‡ à¦¤à¦¾à¦•à¦¿à§Ÿà§‡ à¦°à¦‡à¦²à§‹,,,à¥¤à¦“à§Ÿà§‡à¦Ÿà¦¾à¦°à§‡à¦° à¦•à¦¾à¦¨à§à¦¡ à¦¦à§‡à¦–à§‡ à¦¬à¦¿à¦² à¦—à§‡à¦Ÿà¦¸ à¦œà¦¿à¦™à§à¦—à§‡à¦¸ à¦•à¦°à¦²à§‹,à¦•à¦¿ à¦¹à§Ÿà§‡à¦›à§‡!!! à¦†à¦®à¦¾à¦° à¦¦à¦¿à¦•à§‡ à¦à¦­à¦¾à¦¬à§‡ à¦¤à¦¾à¦•à¦¿à§Ÿà§‡ à¦†à¦› à¦•à§‡à¦¨!! à¦“à§Ÿà§‡à¦Ÿà¦¾à¦° à¦¬à¦²à¦²à§‹ à¦¸à§à¦¯à¦¾à¦° à¦—à¦¤à¦•à¦¾à¦² à¦†à¦ªà¦¨à¦¾à¦° à¦›à§‡à¦²à§‡ à¦à¦‡à¦–à¦¾à¦¨à§‡ à¦¨à¦¾à¦¸à§à¦¤à¦¾ à¦•à¦°à¦¾à¦° à¦ªà¦° à¦†à¦®à¦¾à¦•à§‡ à§§à§¦à§¦ à¦¡à¦²à¦¾à¦° à¦¬à¦–à¦¸à¦¿à¦¸ à¦¦à¦¿à§Ÿà§‡à¦›à§‡,,à¦†à¦° à¦†à¦ªà¦¨à¦¿ à¦¤à¦¾à¦° à¦¬à¦¾à¦¬à¦¾ à¦à¦¬à¦‚ à¦à¦¤ à¦¬à§œ à¦§à¦¨à§€ à¦¹à§Ÿà§‡,à¦†à¦®à¦¾à¦•à§‡ à§« à¦¡à¦²à¦¾à¦° à¦¬à¦–à¦¶à¦¿à¦¸ à¦¦à¦¿à¦²à§‡à¦¨!! à¦¬à¦¿à¦² à¦—à§‡à¦Ÿà¦¸ à¦¹à§‡à¦¸à§‡ à¦“à§Ÿà§‡à¦Ÿà¦¾à¦° à¦•à§‡ à¦¬à¦²à¦²à§‹ "à¦¸à§‡ à¦¹à¦šà§à¦›à§‡ à¦¬à¦¿à¦¶à§à¦¬à§‡à¦° à§§ à¦¨à¦®à§à¦¬à¦° à¦§à¦¨à§€ à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦›à§‡à¦²à§‡" à¦†à¦° à¦†à¦®à¦¿ à¦¹à¦šà§à¦›à¦¿ à¦à¦•à¦œà¦¨ à¦•à¦¾à¦ à§à¦°à¦¿à§Ÿà¦¾à¦° à¦›à§‡à¦²à§‡!!! "à¦¤à¦¾à¦‡ à¦•à¦–à¦¨à§‹ à¦†à¦ªà¦¨à¦¾à¦° à¦…à¦¤à§€à¦¤ à¦•à§‡ à¦­à§à¦²à§‡ à¦¯à¦¾à¦¬à§‡à¦¨ à¦¨à¦¾à¥¤à¥¤', '08/05/2016');

-- --------------------------------------------------------

--
-- Table structure for table `pos_tbl`
--

CREATE TABLE `pos_tbl` (
  `pos_id` int(11) NOT NULL AUTO_INCREMENT,
  `pos_title` varchar(255) NOT NULL,
  `pos_info` varchar(255) NOT NULL,
  `pos_file` varchar(255) NOT NULL,
  PRIMARY KEY (`pos_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pos_tbl`
--

INSERT INTO `pos_tbl` VALUES(1, 'ZERO POSITION (à¦¶à§à¦¨à§à¦¯ à¦ªà¦¦)', 'à¦¨à¦¾à¦™à§à¦—à§à¦²à§€ à¦¨à§‡à¦›à¦¾à¦°à¦¿à§Ÿà¦¾ à¦«à¦¾à¦œà¦¿à¦² à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾à§Ÿ à¦¶à§‚à¦¨à§à¦¯ à¦ªà¦¦à§‡ à¦à¦•à¦œà¦¨ à¦¬à¦¿, à¦à¦¸, à¦¸à¦¿ (à¦—à¦¨à¦¿à¦¤)à¦¶à¦¿à¦•à§à¦·à¦• à¦†à¦¬à¦¶à§à¦¯à¦•à¥¤ ', '1442911543.pdf');
INSERT INTO `pos_tbl` VALUES(2, 'à¦¶à§‚à¦¨à§à¦¯ à¦ªà¦¦-[ à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦¶à¦¿à¦•à§à¦·à¦•', '1. duty time: 8- 04\r\n2.', '1491026243.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `prestaff_tbl`
--

CREATE TABLE `prestaff_tbl` (
  `stf_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(255) NOT NULL,
  `staff_designation` varchar(255) NOT NULL,
  `staff_indxno` varchar(255) NOT NULL,
  `staff_contact` varchar(255) NOT NULL,
  `staff_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stf_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `prestaff_tbl`
--

INSERT INTO `prestaff_tbl` VALUES(3, 'MD SHAFIQ GONI', 'LIBRARIAN ASSISTEN', '00', '01717442192', '1457100254.jpg');
INSERT INTO `prestaff_tbl` VALUES(5, 'MD. HABIBUR RAHMAN', 'OFFICE ASSISTANT', '557243', '01751467998', '1457100292.jpg');
INSERT INTO `prestaff_tbl` VALUES(6, 'MD. ROFIQUL ISLAM', 'M L S S', '557244', '01753647707', '1457100633.jpg');
INSERT INTO `prestaff_tbl` VALUES(7, 'HASNA KHATUN', 'M L S S', '557245', '00', '1501664254.jpg');
INSERT INTO `prestaff_tbl` VALUES(8, 'MD. MOYNUL ISLAM', 'M L S S', '00', '000', '1501664464.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `preteach_tbl`
--

CREATE TABLE `preteach_tbl` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `tech_id` varchar(255) NOT NULL,
  `tech_name` varchar(255) NOT NULL,
  `tech_designation` varchar(255) NOT NULL,
  `tech_indxno` varchar(255) NOT NULL,
  `tech_contact` varchar(255) NOT NULL,
  `tech_sub` varchar(255) NOT NULL,
  `tech_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `preteach_tbl`
--

INSERT INTO `preteach_tbl` VALUES(2, '01', 'MD. MOMINUR RAHMAN', 'HEAD MASTER', '557241', '01720546929', 'HEAD MASTER', '1501565802.jpg');
INSERT INTO `preteach_tbl` VALUES(3, '002', 'MST. ROKEYA KHATUN', 'ASSISTANT HEAD TEACHER', '562421', '01723325101', 'AGRICULTURE ', '1455199209.jpg');
INSERT INTO `preteach_tbl` VALUES(4, '003', ' MD. FOZLUL HAQUE', 'ASST. TEACHER', '560571', '01745383903', 'SOCIAL SCIENCE', '1455200015.jpg');
INSERT INTO `preteach_tbl` VALUES(5, '004', 'ZANNATUL FARDUSHI', 'ASSISTANT TEACHER', '1075063', '01816164657', 'BANGLA', '1455209410.jpg');
INSERT INTO `preteach_tbl` VALUES(6, '005', 'RUMA LAYLA', 'ASSISTANT TEACHER', '00', '01913381463', 'ENGLISH', '1455209486.jpg');
INSERT INTO `preteach_tbl` VALUES(7, '006', 'MD. NAZRUL ISLAM', 'ASSISTANT TEACHER', '1063047', '01722842459', 'MATHEMATICS', '1455209752.jpg');
INSERT INTO `preteach_tbl` VALUES(9, '007', 'MD. ABDUL KADER', 'ASSISTANT TEACHER', '557242', '01737425839', 'RELIGIOUS ISLAM', '1455210049.jpg');
INSERT INTO `preteach_tbl` VALUES(10, '008', 'RABINDRA NATH ROY', 'ASSISTANT TEACHER', '00', '01761265436', 'RELIGIOUS HINDU', '1455210464.jpg');
INSERT INTO `preteach_tbl` VALUES(11, '009', 'MD. RATAN ALI', 'ASSISTANT TEACHER', '558602', '01716863871', 'PHYSICAL TEACHER', '1455210497.jpg');
INSERT INTO `preteach_tbl` VALUES(12, '010', 'SUFIA AKTER', 'ASSISTANT TEACHER', '1075062', '01740353546', 'BANGLA', '1455210527.jpg');
INSERT INTO `preteach_tbl` VALUES(13, '011', 'LUTFA BEGUM', 'ASSISTANT TEACHER', '00', '01', 'ICT TEACHER', '1455210565.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pr_tbl`
--

CREATE TABLE `pr_tbl` (
  `pr_id` int(11) NOT NULL AUTO_INCREMENT,
  `pr_pic` varchar(255) NOT NULL,
  `pr_desc` mediumtext NOT NULL,
  PRIMARY KEY (`pr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pr_tbl`
--

INSERT INTO `pr_tbl` VALUES(1, '1501564279.jpg', '<p><span class="marker"><strong>Education is the backbone of a nation . No nation can prosper without education</strong>.&nbsp; à¦œà§‡à¦²à¦¾ à¦¨à§€à¦²à¦«à¦¾à¦®à¦¾à¦°à§€&nbsp; à¦‰à¦ªà¦œà§‡à¦²à¦¾ à¦¡à§‹à¦®à¦¾à¦°&nbsp; à¦œà¦¨à¦¬à¦¹à§à¦² à¦—à§à¦°à¦¾à¦®à§€à¦¨ à¦à¦²à¦¾à¦•à¦¾à§Ÿ à¦…à¦¬à¦¸à§à¦¥à¦¿à¦¤ à¦œà§‹à§œà¦¾à¦¬à¦¾à§œà§€ à¦¬à¦¾à¦²à¦¿à¦•à¦¾ à¦‰à¦šà§à¦š à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà¦Ÿà¦¿ à§§à§¯à§¯à§© à¦¸à¦¾à¦² à¦¥à§‡à¦•à§‡ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾ à¦²à¦¾à¦­ à¦•à¦°à§‡ à¦…à¦¤à§à¦¯à¦¨à§à¦¤ à¦¸à§à¦¨à¦¾à¦®à§‡à¦° à¦¸à¦¾à¦¥à§‡ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦•à¦¾à¦°à§à¦¯à¦•à§à¦°à¦® à¦…à¦¬à§à¦¯à¦¾à¦¹à¦¤ à¦°à§‡à¦–à§‡à¦›à§‡à¥¤à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà¦Ÿà¦¿à¦¤à§‡ à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨ à¦“ à¦®à¦¾à¦¨à¦¬à¦¿à¦• à¦¬à¦¿à¦­à¦¾à¦—à¦¸à¦¹ à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦° à¦¬à¦¿à¦­à¦¾à¦— à¦šà¦¾à¦²à§ à¦†à¦›à§‡à¥¤à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦¿à¦¤ à¦“ à¦¦à¦•à§à¦· à¦¶à¦¿à¦•à§à¦·à¦• à¦¦à§à¦¬à¦¾à¦°à¦¾ à¦†à¦‡.à¦¸à¦¿.à¦Ÿà¦¿ à¦ªà§à¦°à¦¯à§à¦•à§à¦¤à¦¿à¦° à¦®à¦¾à¦§à§à¦¯à¦®à§‡ à¦¶à§à¦°à§‡à¦£à¦¿ à¦ªà¦¾à¦ à¦¦à¦¾à¦¨ à¦šà¦¾à¦²à§ à¦†à¦›à§‡à¥¤ à¦¦à¦•à§à¦· à¦“ à¦ªà§à¦°à¦¶à¦¿à¦•à§à¦·à¦£à¦ªà§à¦°à¦¾à¦ªà§à¦¤ à¦¶à¦¿à¦•à§à¦·à¦•à¦—à¦£ à¦¨à¦¿à¦°à¦²à¦¸à¦­à¦¾à¦¬à§‡ à¦¤à¦¾à¦¦à§‡à¦° à¦¦à¦¾à§Ÿà¦¿à¦¤à§à¦¬ à¦ªà¦¾à¦²à¦¨ à¦•à¦°à¦›à§‡à¦¨à¥¤ à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡à¦° à¦®à¦¾à¦¨ à¦‰à¦¨à§à¦¨à¦¤à¥¤ à¦ªà¦°à§€à¦•à§à¦·à¦¾à¦° à¦«à¦²à¦¾à¦«à¦² à¦¸à¦¨à§à¦¤à§‹à¦·à¦œà¦¨à¦• à¥¤ à¦—à¦°à§€à¦¬ à¦“ à¦®à§‡à¦§à¦¾à¦¬à§€ à¦›à¦¾à¦¤à§à¦°-à¦›à¦¾à¦¤à§à¦°à§€à¦¦à§‡à¦° à¦œà¦¨à§à¦¯ à¦°à§Ÿà§‡à¦›à§‡ à¦…à¦¬à§ˆà¦¤à¦¨à¦¿à¦• à¦ªà§œà¦¾à¦° à¦¸à§à¦¯à§‹à¦— à¦“ à¦†à¦¨à§à¦¸à¦™à§à¦—à¦¿à¦• à¦¸à¦¹à¦¯à§‹à¦—à¦¿à¦¤à¦¾ à¥¤ à¦ à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà¦Ÿà¦¿ à¦¸à¦®à§à¦ªà§‚à¦°à§à¦£ à¦°à¦¾à¦œà¦¨à§€à¦¤à¦¿ à¦“ à¦§à§à¦®à¦ªà¦¾à¦¨à¦®à§à¦•à§à¦¤ à¦¶à¦¿à¦•à§à¦·à¦¾ à¦ªà§à¦°à¦¤à¦¿à¦·à§à¦ à¦¾à¦¨ à¦¹à¦¿à¦¸à§‡à¦¬à§‡ à¦¸à¦°à§à¦¬à¦œà¦¨ à¦¬à¦¿à¦¦à¦¿à¦¤à¥¤ à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà¦Ÿà¦¿à¦° à§§à§¦à§¨ à¦¶à¦¤à¦¾à¦‚à¦¶ à¦œà¦®à¦¿à¦° à¦®à¦¾à¦²à¦¿à¦•à¦¾à¦¨à¦¾à§Ÿ à¦°à§Ÿà§‡à¦›à§‡ à¦‰à¦¨à§à¦¨à¦¤ à¦–à§‡à¦²à¦¾à¦° à¦®à¦¾à¦  à¥¤ à¦®à¦¹à¦¾à¦¨ à¦†à¦²à§à¦²à¦¾à¦¹ à¦¤à¦¾à§Ÿà¦¾à¦²à¦¾à¦° à¦¨à¦¿à¦•à¦Ÿ à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿà§‡à¦° à¦‰à¦¤à§à¦¤à¦°à§‹à¦¤à§à¦¤à¦° à¦¶à§à¦°à§€à¦¬à§ƒà¦¦à§à¦§à¦¿ à¦•à¦¾à¦®à¦¨à¦¾ à¦•à¦°à¦¿à¥¤</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `restday`
--

CREATE TABLE `restday` (
  `rd_id` int(11) NOT NULL AUTO_INCREMENT,
  `rd_nam` varchar(255) NOT NULL,
  `rd_pos` varchar(255) NOT NULL,
  `rd_section` varchar(255) NOT NULL,
  `rd_type` varchar(255) NOT NULL,
  `rd_cause` varchar(255) NOT NULL,
  `rd_from` varchar(255) NOT NULL,
  `rd_to` varchar(255) NOT NULL,
  `rd_total` varchar(255) NOT NULL,
  `rd_adrs` varchar(255) NOT NULL,
  `rd_mob` varchar(255) NOT NULL,
  PRIMARY KEY (`rd_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `restday`
--

INSERT INTO `restday` VALUES(2, 'gfdgvdf', 'gfdg', 'dfgdf', 'à¦®à§‡à¦¡à¦¿à¦•à§‡à¦²', 'dfgdfg', 'dfgdf', 'gdf', 'gdfgd', 'fgfdg', 'gdfg');
INSERT INTO `restday` VALUES(3, 'à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹', 'à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•', 'à¦¶à¦¿à¦•à§à¦·à¦•', 'à¦¨à§ˆà¦®à¦¿à¦¤à§à¦¤à¦¿à¦•', 'à¦¶à¦¶à§à¦°à¦¬à¦¾à§œà§€  à¦—à¦®à¦¨', 'à§¨à§¨/à§¦à§¯/à§¨à§¦à§§à§«', 'à§¨à§«/à§¦à§¯/à§¨à§¦à§§à§«', 'à§©', 'à§¦à§§à§®à§¬à§¦à§©à§¯à§«à§®à§®à§®', 'à§¦à§§à§®à§¬à§¦à§©à§¯à§«à§®à§®à§®');

-- --------------------------------------------------------

--
-- Table structure for table `result_tbl`
--

CREATE TABLE `result_tbl` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_class` varchar(50) NOT NULL,
  `res_year` varchar(55) NOT NULL,
  `res_roll` varchar(255) NOT NULL,
  `res_num` varchar(255) NOT NULL,
  `res_dob` varchar(255) NOT NULL,
  `res_fnum` varchar(255) NOT NULL,
  `res_group` varchar(255) NOT NULL,
  `res_mnum` varchar(255) NOT NULL,
  `res_type` varchar(255) NOT NULL,
  `res_gpa` varchar(50) NOT NULL,
  `res_addrs` varchar(255) NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `c3` varchar(50) NOT NULL,
  `c4` varchar(50) NOT NULL,
  `c5` varchar(50) NOT NULL,
  `c6` varchar(50) NOT NULL,
  `c7` varchar(50) NOT NULL,
  `c8` varchar(50) NOT NULL,
  `c9` varchar(50) NOT NULL,
  `c10` varchar(50) NOT NULL,
  `c11` varchar(50) NOT NULL,
  `c12` varchar(50) NOT NULL,
  `c13` varchar(50) NOT NULL,
  `c14` varchar(50) NOT NULL,
  `c15` varchar(50) NOT NULL,
  `c16` varchar(50) NOT NULL,
  `c17` varchar(50) NOT NULL,
  `c18` varchar(50) NOT NULL,
  `c19` varchar(50) NOT NULL,
  `c20` varchar(50) NOT NULL,
  `c21` varchar(50) NOT NULL,
  `c22` varchar(50) NOT NULL,
  `c23` varchar(50) NOT NULL,
  `c24` varchar(50) NOT NULL,
  `s1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `s4` varchar(50) NOT NULL,
  `s5` varchar(50) NOT NULL,
  `s6` varchar(50) NOT NULL,
  `s7` varchar(50) NOT NULL,
  `s8` varchar(50) NOT NULL,
  `s9` varchar(50) NOT NULL,
  `s10` varchar(50) NOT NULL,
  `s11` varchar(50) NOT NULL,
  `s12` varchar(50) NOT NULL,
  `s13` varchar(50) NOT NULL,
  `s14` varchar(50) NOT NULL,
  `s15` varchar(50) NOT NULL,
  `s16` varchar(50) NOT NULL,
  `s17` varchar(50) NOT NULL,
  `s18` varchar(50) NOT NULL,
  `s19` varchar(50) NOT NULL,
  `s20` varchar(50) NOT NULL,
  `s21` varchar(50) NOT NULL,
  `s22` varchar(50) NOT NULL,
  `s23` varchar(50) NOT NULL,
  `s24` varchar(50) NOT NULL,
  `mt1` varchar(50) NOT NULL,
  `mt2` varchar(50) NOT NULL,
  `mt3` varchar(50) NOT NULL,
  `mt4` varchar(50) NOT NULL,
  `mt5` varchar(50) NOT NULL,
  `mt6` varchar(50) NOT NULL,
  `mt7` varchar(50) NOT NULL,
  `mt8` varchar(50) NOT NULL,
  `mt9` varchar(50) NOT NULL,
  `mt10` varchar(50) NOT NULL,
  `mt11` varchar(50) NOT NULL,
  `mt12` varchar(50) NOT NULL,
  `mt13` varchar(50) NOT NULL,
  `mt14` varchar(50) NOT NULL,
  `mt15` varchar(50) NOT NULL,
  `mt16` varchar(50) NOT NULL,
  `mt17` varchar(50) NOT NULL,
  `mt18` varchar(50) NOT NULL,
  `mt19` varchar(50) NOT NULL,
  `mt20` varchar(50) NOT NULL,
  `mt21` varchar(50) NOT NULL,
  `mt22` varchar(50) NOT NULL,
  `mt23` varchar(50) NOT NULL,
  `mt24` varchar(50) NOT NULL,
  `mp1` varchar(50) NOT NULL,
  `mp2` varchar(50) NOT NULL,
  `mp3` varchar(50) NOT NULL,
  `mp4` varchar(50) NOT NULL,
  `mp5` varchar(50) NOT NULL,
  `mp6` varchar(50) NOT NULL,
  `mp7` varchar(50) NOT NULL,
  `mp8` varchar(50) NOT NULL,
  `mp9` varchar(50) NOT NULL,
  `mp10` varchar(50) NOT NULL,
  `mp11` varchar(50) NOT NULL,
  `mp12` varchar(50) NOT NULL,
  `mp13` varchar(50) NOT NULL,
  `mp14` varchar(50) NOT NULL,
  `mp15` varchar(50) NOT NULL,
  `mp16` varchar(50) NOT NULL,
  `mp17` varchar(50) NOT NULL,
  `mp18` varchar(50) NOT NULL,
  `mp19` varchar(50) NOT NULL,
  `mp20` varchar(50) NOT NULL,
  `mp21` varchar(50) NOT NULL,
  `mp22` varchar(50) NOT NULL,
  `mp23` varchar(50) NOT NULL,
  `mp24` varchar(50) NOT NULL,
  `mm1` varchar(50) NOT NULL,
  `mm2` varchar(50) NOT NULL,
  `mm3` varchar(50) NOT NULL,
  `mm4` varchar(50) NOT NULL,
  `mm5` varchar(50) NOT NULL,
  `mm6` varchar(50) NOT NULL,
  `mm7` varchar(50) NOT NULL,
  `mm8` varchar(50) NOT NULL,
  `mm9` varchar(50) NOT NULL,
  `mm10` varchar(50) NOT NULL,
  `mm11` varchar(50) NOT NULL,
  `mm12` varchar(50) NOT NULL,
  `mm13` varchar(50) NOT NULL,
  `mm14` varchar(50) NOT NULL,
  `mm15` varchar(50) NOT NULL,
  `mm16` varchar(50) NOT NULL,
  `mm17` varchar(50) NOT NULL,
  `mm18` varchar(50) NOT NULL,
  `mm19` varchar(50) NOT NULL,
  `mm20` varchar(50) NOT NULL,
  `mm21` varchar(50) NOT NULL,
  `mm22` varchar(50) NOT NULL,
  `mm23` varchar(50) NOT NULL,
  `mm24` varchar(50) NOT NULL,
  `mh1` varchar(50) NOT NULL,
  `mh2` varchar(50) NOT NULL,
  `mh3` varchar(50) NOT NULL,
  `mh4` varchar(50) NOT NULL,
  `mh5` varchar(50) NOT NULL,
  `mh6` varchar(50) NOT NULL,
  `mh7` varchar(50) NOT NULL,
  `mh8` varchar(50) NOT NULL,
  `mh9` varchar(50) NOT NULL,
  `mh10` varchar(50) NOT NULL,
  `mh11` varchar(50) NOT NULL,
  `mh12` varchar(50) NOT NULL,
  `mh13` varchar(50) NOT NULL,
  `mh14` varchar(50) NOT NULL,
  `mh15` varchar(50) NOT NULL,
  `mh16` varchar(50) NOT NULL,
  `mh17` varchar(50) NOT NULL,
  `mh18` varchar(50) NOT NULL,
  `mh19` varchar(50) NOT NULL,
  `mh20` varchar(50) NOT NULL,
  `mh21` varchar(50) NOT NULL,
  `mh22` varchar(50) NOT NULL,
  `mh23` varchar(50) NOT NULL,
  `mh24` varchar(50) NOT NULL,
  `mtl1` varchar(50) NOT NULL,
  `mtl2` varchar(50) NOT NULL,
  `mtl3` varchar(50) NOT NULL,
  `mtl4` varchar(50) NOT NULL,
  `mtl5` varchar(50) NOT NULL,
  `mtl6` varchar(50) NOT NULL,
  `mtl7` varchar(50) NOT NULL,
  `mtl8` varchar(50) NOT NULL,
  `mtl9` varchar(50) NOT NULL,
  `mtl10` varchar(50) NOT NULL,
  `mtl11` varchar(50) NOT NULL,
  `mtl12` varchar(50) NOT NULL,
  `mtl13` varchar(50) NOT NULL,
  `mtl14` varchar(50) NOT NULL,
  `mtl15` varchar(50) NOT NULL,
  `mtl16` varchar(50) NOT NULL,
  `mtl17` varchar(50) NOT NULL,
  `mtl18` varchar(50) NOT NULL,
  `mtl19` varchar(50) NOT NULL,
  `mtl20` varchar(50) NOT NULL,
  `mtl21` varchar(50) NOT NULL,
  `mtl22` varchar(50) NOT NULL,
  `mtl23` varchar(50) NOT NULL,
  `mtl24` varchar(50) NOT NULL,
  `r1` varchar(50) NOT NULL,
  `r2` varchar(50) NOT NULL,
  `r3` varchar(50) NOT NULL,
  `r4` varchar(50) NOT NULL,
  `r5` varchar(50) NOT NULL,
  `r6` varchar(50) NOT NULL,
  `r7` varchar(50) NOT NULL,
  `r8` varchar(50) NOT NULL,
  `r9` varchar(50) NOT NULL,
  `r10` varchar(50) NOT NULL,
  `r11` varchar(50) NOT NULL,
  `r12` varchar(50) NOT NULL,
  `r13` varchar(50) NOT NULL,
  `r14` varchar(50) NOT NULL,
  `r15` varchar(50) NOT NULL,
  `r16` varchar(50) NOT NULL,
  `r17` varchar(50) NOT NULL,
  `r18` varchar(50) NOT NULL,
  `r19` varchar(50) NOT NULL,
  `r20` varchar(50) NOT NULL,
  `r21` varchar(50) NOT NULL,
  `r22` varchar(50) NOT NULL,
  `r23` varchar(50) NOT NULL,
  `r24` varchar(50) NOT NULL,
  `res_ins` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'Status',
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `result_tbl`
--

INSERT INTO `result_tbl` VALUES(49, 'Class Six Pre-test Examination', '2017', '2', 'MOST.  TARMIN AKTET', '28/08/2005', 'MD. ASADUL ISLAM', 'A', 'MOST. OJIFA  KHATUN', 'REGULAR ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(50, 'Class Six Pre-test Examination', '2017', '3', 'MOST. RAJVI AKTER', '28/01/2004', 'MD. RAJIBUL ISLAM', 'A', 'MOST. BABY BANU', 'REGULAR   ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(51, 'Class Six Pre-test Examination', '2017', '4', 'MOST. RUJINA AKTET', '01/01/2005', 'MD. ROFIQUL ISLAM', 'A', 'MOST. ANJU BEGUM', 'REGULAR ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `result_tbl` VALUES(52, 'Class Six Pre-test Examination', '2017', '5', 'MOST. MAHAMUDA AKTET', '12/10/2006', 'MD. MOYNUL ISLAM', 'A', 'MOST. DULALI BEGUM', 'REGULAR ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `result_tbl` VALUES(53, 'Class Six Pre-test Examination', '2017', '6', 'MOST. SUMA AKTET', '29/11/2005', 'MD. SOHIDUL ISLAM', 'A', 'MOST. ANWARA BEGUM', 'REGULAR  ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(54, 'Class Six Pre-test Examination', '2017', '7', 'SATHI RANI SIL', '12/05/2004', 'SUKUMAR CHANDRA SIL', 'A', 'SABI RANI ROY', 'REGULAR ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(55, 'Class Six Pre-test Examination', '2017', '8', 'MOST. SHARMIN  AKTET', '06/01/2005', 'MD. ROFIQUL ISLAM', 'A', 'MOST. NUR BANU BEGUM', 'REGULAR ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(56, 'Class Six Pre-test Examination', '2017', '9', 'MOST. SATHI MOMI', '01/02/2005', 'MD. TOFA', 'A', 'MOST. ROKEYA BEGUM', 'REGULAR ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(57, 'Class Six Pre-test Examination', '2017', '10', 'MOST.  CHUMKI AKTET', '11/05/2006', 'MD. HACHUBUL ISLAM', 'A', 'MOST. MORJINA BEGUM', 'REGULAR ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(58, 'Class Six Pre-test Examination', '2017', '11', 'MOST. MITU AKTET', '11/02/2006', 'MD. ABDUR RAZZAK ', 'A', 'MOST. ROHIMA KHATUN', 'REGULAR  ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(59, 'Class Six Pre-test Examination', '', '12', 'MOST. RAHENA AKTET', '01/12/2005', 'MD. ABUL HOSSAIN', 'A', 'MOST. AMINA KHATUN', 'REGULAR ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(60, 'Class Six Pre-test Examination', '2017', '13', 'MOST. KHUSHI AKTET', '12/06/2005', 'MD. ASRAF ALI', 'A', 'MOST. ARJINA BEGUM', 'REGULAR  ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'HEAD TEACHER JORABARI GIRLS HIGH SCHOOL', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(61, 'Class Six Pre-test Examination', '2017', '14', 'MOST. FARJANA AKTET', '10/02/2005', 'MD. OKIL', 'A', 'MOST. ANJU BEGUM', 'REGULAR  ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'SIGNATURE & SIL OF HEAD TEACHER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(62, 'Class Six Pre-test Examination', '2017', '15', 'MOST. LAJINA AKTET', '10/11/2004', 'MD. WOAHED ALI', 'A', 'MOST. MOHICHANA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', '', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(63, 'Class Six Pre-test Examination', '2017', '16', 'MOST. SHARMIN  AKTET', '10/11/2005', 'MD. KADINUL ISLAM', 'A', 'MOST. MOHECHANA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(64, 'Class Six Pre-test Examination', '2017', '17', 'MOST. ANESI BEGUM', '08/08/2005', 'MD. AMDADUL HAQUE', 'A', 'MOST. TAJKINA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(65, 'Class Six Pre-test Examination', '2017', '18', 'MOST. SHAHANAKJ AKTET', '12/04/2005', 'MD. MOSTIFA', 'A', 'MOST. MORJINA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(66, 'Class Six Pre-test Examination', '2017', '19', 'MOST. NUSRAT JAHAN', '12/11/2006', 'MOHAMMAD ALI', 'A', 'MOST. SHANUARA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(67, 'Class Six Pre-test Examination', '2017', '20', 'MOST. RINA AKTET', '01/09/2004', 'MD. HAMIUL ISLAM', 'A', 'MOST. GOLAPI BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(68, 'Class Six Pre-test Examination', '2017', '21', 'MOST. RANU BEGUM', '04/06/2004', 'MD. AINUL ISLAM', 'A', 'MOST. TANJILA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(69, 'Class Six Pre-test Examination', '2017', '22', 'MOST. MONALISA BEGUM', '15/10/2006', 'MD. MOTIAR RAHMAN', 'A', 'MOST. MONOARA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(70, 'Class Six Pre-test Examination', '2017', '23', 'MOST. MONURA  AKTET', '03/02/2005', 'MOJNU', 'A', 'MOST. FERIJA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(71, 'Class Six Pre-test Examination', '2017', '24', 'MOST. MIMMA AKTET', '15/08/2006', 'MD. ALAMGIR', 'A', 'MOST. TAJMINA BEGUM', 'REGULAR', '', 'VILLAGE: HALHALIA, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(72, 'Class Six Pre-test Examination', '2017', '25', 'MOST. ARIFA JANNAT BORSHA', '10/02/2005', 'MD. AMDADUL HAQUE', 'A', 'MOST. YESMAN', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(73, 'Class Six Pre-test Examination', '2017', '26', 'MOST. BITHI BEGUM', '01/03/3005', 'MD. NOBIR HOSSAIN', 'A', 'MOST. BILKIS BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(74, 'Class Six Pre-test Examination', '2017', '27', 'MOST. JANI AKTET', 'O9/06/2005', 'MD. JOHORUL ISLAM', 'A', 'MOST. LAILA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(75, 'Class Six Pre-test Examination', '2017', '28', 'MOST. RUBINA AKTET', '08/10/2005', 'MD. RABIUL ISLAM', 'A', 'MOST. TOHOMINA AKTER', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-1', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(76, 'Class Six Pre-test Examination', '2017', '29', 'MOST. RITA MONI', '05/03/2003', 'MD. ROHIDUL ISLAM', 'A', 'MOST. MORJINA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(77, 'Class Six Pre-test Examination', '2017', '30', 'MOST. FATEMA BEGUM', '12/12/2003', 'MD. JOYNAL HOSSAIN', 'A', 'MOST. HAJERA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(78, 'Class Six Pre-test Examination', '2017', '1', 'MOST. SULTANA AKTER', '10/08/2006', 'MD. NAZRUL ISLAM', 'A', 'MOST. NOBINA BEGUM', 'REGULAR ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(79, 'Class Seven Pre-test Examination', '2017', '1', 'MOST. HABIBA AKTET', '04/03/2004', 'MD. HAMIDUR RAHMAN', 'A', 'MOST. ROSHIDA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(80, 'Class Seven Pre-test Examination', '2017', '2', 'MOST. RABIEA BOSURI', '05/12/2005', 'MD. ROJOB ALI', 'A', 'MOST. ROJINA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'SIGNATURE & SIL OF HEAD TEACHER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(81, 'Class Seven Pre-test Examination', '2017', '3', 'MOST. MITU AKTET', '28/12/2005', 'MD. MOYNUL HAQUE', 'A', 'MOST. ROHEDA BEGUM', 'REGULAR', '', 'VILLAGE: MIRJAGONJ, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'SIGNATURE & SIL OF HEAD TEACHER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(82, 'Class Seven Pre-test Examination', '2017', '4', 'MOST. LISHA BEGUM', '01/01/2004', 'MD. SOFIQUL HAQUE', 'A', 'MOST. ORINA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'SIGNATURE & SIL OF HEAD TEACHER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(83, '', '', '5', 'MOST. ISRAT JAHAN', '18/10/2004', 'ISLAM', 'A', 'MOST. MARINA BEGUM', 'REGULAR', '', 'VILLAGE: MIRJAGONJ, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'SIGNATURE & SIL OF HEAD TEACHER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(84, 'Class Seven Pre-test Examination', '2017', '6', 'MOST. MINU AKTET', '01/02/2004', 'MD. ROFIQUL ISLAM', 'A', 'MOST. SHAFALI BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'SIGNATURE & SIL OF HEAD TEACHER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(85, 'Class Seven Pre-test Examination', '2017', '7', 'MOST. MOUMITA BENTHE MITHELA', '02/05/2006', 'MD. MOKSED ALI', 'A', 'MOST. ROWSON JAHAN', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', 'SIGNATURE & SIL OF HEAD TEACHER', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(86, 'Class Seven Pre-test Examination', '2017', '8', 'MOST. MONI BEGUM', '10/12/2004', 'MD. HAFIJAR RAHMAN', 'A', 'MOST. MUTLUBA KHATUN', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(87, 'Class Seven Pre-test Examination', '2017', '9', 'MOST. SUMIEA AKTER', '02/04/2004', 'MD. SOHIR UDDIN', 'A', 'MOST. MORJINA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(88, 'Class Seven Pre-test Examination', '2017', '10', 'MOST. ASMA BEGUM', '01/03/3005', 'MD. HAMIDUL ISLAM', 'A', 'MOST. RONJONA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(89, 'Class Seven Pre-test Examination', '2017', '11', 'MOST. MOSTARINA AKTET', '28/10/2005', 'MD. MOSTAKIN', 'A', 'MOST. RSHENA BEGUM', 'REGULAR', '', 'VILLAGE: MIRJAGONJ, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(90, 'Class Seven Pre-test Examination', '2017', '12', 'MOST. KULSUM BEGUM', '09/12/2005', 'MD. ABDULLA HABIB', 'A', 'MOST. RINA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(91, 'Class Seven Pre-test Examination', '2017', '13', 'MOST. RUBI AKTET', '03/11/2004', 'MD. ROSIDUL ISLAM', 'A', 'MOST. NABINA KHATUN', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(92, 'Class Seven Pre-test Examination', '2017', '14', 'MOST. MONI AKTET', '27/10/2004', 'MD. RAMJAN ALI', 'A', 'MOST. FIRU BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(93, 'Class Seven Pre-test Examination', '2017', '15', 'MOST. SUMI AKTET', '04/09/2005', 'MD. AMDADUL HAQUE', 'A', 'MOST. RINA BEGUM', 'REGULAR', '', 'VILLAGE: MIRJAGONJ, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(94, 'Class Seven Pre-test Examination', '2017', '16', 'MOST. RIPA AKTET', '15/06/2004', 'MD. JAHIDUL ISLAM', 'A', 'MOST. SHAFILI KHATUN', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(95, 'Class Seven Pre-test Examination', '2017', '17', 'MOST. NASRIN  AKTET', '09/12/2005', 'MD. ABDUL LATIF', 'A', 'MOST. SHEULI BEGUM', 'REGULAR', '', 'VILLAGE: MIRJAGONJ, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(96, 'Class Seven Pre-test Examination', '2017', '18', 'MOST. SHIMU AKTET', '12/06/2005', 'MD. BULBUL ISLAM', 'A', 'MOST. TAJKINA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(97, 'Class Seven Pre-test Examination', '2017', '19', 'MOST. NASRIN  BEGUM', '02/11/2002', 'MD. NIJAMUL HAQUE', 'A', 'MOST. NORIJA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(98, 'Class Seven Pre-test Examination', '2017', '20', 'MOST. RINA AKTET', '11/06/2005', 'MD. ABDUL LATIF', 'A', 'MOST. DULALI BEGUM', 'REGULAR ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(99, 'Class Seven Pre-test Examination', '2017', '21', 'MOST. MAJU BEGUM', '10/01/2004', 'MD. ROFIQUL ISLAM', 'A', 'MOST. MOHECHANA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(100, 'Class Seven Pre-test Examination', '2017', '22', 'MOST. AKHI MONI', '15/06/2004', 'MD. FORIDUL ISLAM', 'A', 'MOST. JAHIMA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(101, 'Class Seven Pre-test Examination', '2017', '23', 'MOST. MIM AKTET', '25/07/2002', 'MD. KHADEUL HAQUE', 'A', 'MOST. RENJU BEGUM', 'REGULAR', '', 'VILLAGE: MIRJAGONJ, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(102, 'Class Seven Pre-test Examination', '2017', '25', 'MOST. SHANTONA AKTET', '06/08/2003', 'MD. AMIR HOSSAIN', 'A', 'MOST. SAFIA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(103, 'Class Seven Pre-test Examination', '2017', '25', 'MOST. RANI BEGUM', '04/01/2004', 'MD. RUHUL AMIN', 'A', 'MOST. ANJU BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(104, 'Class Seven Pre-test Examination', '2017', '26', 'MOST. SHARMIN  AKTET', '20/06/2006', 'MD. DELOUR HOSSAIN', 'A', 'MOST. LOTIFA BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(105, 'Class Seven Pre-test Examination', '2017', '27', 'MOST. PINKI  AKTET', '17/01/2005', 'MD. ALAMGIR ISLAM', 'A', 'MOST. RUMA BEGUM', 'REGULAR ', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(106, 'Class Seven Pre-test Examination', '2017', '28', 'MOST. PAYEL  AKTET', '04/11/2005', 'MD. MIJANUR RAHMAN', 'A', 'MOST. SARINA BEGUM', 'REGULAR ', '', 'VILLAGE: MIRJAGONJ, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(107, 'Class Seven Pre-test Examination', '2017', '29', 'MOST. SAHERA  AKTET', '01/01/2003', 'MD. DULAL HOSSAIN', 'A', 'MOST. JOYTUN BEGUM', 'REGULAR', '', 'VILLAGE: MIRJAGONJ, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(108, 'Class Seven Pre-test Examination', '2017', '30', 'MOST. MOMOTAJ  AKTET', '18/12/2005', 'MD. MINTU ISLAM', 'A', 'MOST. MONOARA BEGUM', 'REGULAR ', '', 'VILLAGE: MIRJAGONJ, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(109, 'Class Seven Pre-test Examination', '2017', '31', 'MOST. JUI MONI', '25/11/2005', 'MD. ZIAUR RAHMAN', 'A', 'MOST. LOVELY BEGUM', 'REGULAR', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '101', '102', '107', '108', '109', '111', '127', '147', '148', '150', '154', '155', '134', '', '', '', '', '', '', '', '', '', '', '', 'BANGLA-1', 'BANGLA-2', 'ENGLISH-1', 'ENGLISH-2', 'MATHEMATICS', 'RELIEGION & MORAL EDUCATIOM  (ISLAM)', 'SCIENCE', 'PHYSICAL EDUCATION & HEALTH', 'ARTS & CRAFTS', 'BANGLADESH & GLOBAL STUDIES', 'INFORMATION & COMMUNICATION TECHNOLOGY', 'WORK & LIFE ORIENTED EDUCATION', 'AGRICULTURE STUDIES', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'JORABARI GIRLS HIGH SCHOOL', 0);
INSERT INTO `result_tbl` VALUES(110, 'Class Six Pre-test Examination', '2017', '1000', 'MOST. SULTANA AKTER', '', '', '', '', '', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'à¦œà§‹à§œà¦¾à¦¬à¦¾à§œà§€ à¦¬à¦¾à¦²à¦¿à¦•à¦¾ à¦‰à¦šà§à¦š à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿ ', 0);
INSERT INTO `result_tbl` VALUES(111, 'Class Six Pre-test Examination', '2017', '1000', 'MOST. SULTANA AKTER', '', '', '', '', '', '', 'VILLAGE: JORABARI, POST: MIRJAGONJ, UPAZILLA: DOMAR, ZILLA: NILPHAMARI', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'à¦œà§‹à§œà¦¾à¦¬à¦¾à§œà§€ à¦¬à¦¾à¦²à¦¿à¦•à¦¾ à¦‰à¦šà§à¦š à¦¬à¦¿à¦¦à§à¦¯à¦¾à¦²à§Ÿ ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sli_tbl`
--

CREATE TABLE `sli_tbl` (
  `sli_id` int(11) NOT NULL AUTO_INCREMENT,
  `sli_cap` varchar(255) NOT NULL,
  `sli_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`sli_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `sli_tbl`
--

INSERT INTO `sli_tbl` VALUES(88, '3', 'IMG_20151006_174813.jpg');
INSERT INTO `sli_tbl` VALUES(89, '2', 'IMG_20150228_171126.jpg');
INSERT INTO `sli_tbl` VALUES(90, '4', 'IMG_20150430_164950.jpg');
INSERT INTO `sli_tbl` VALUES(91, '5', 'IMG_20150430_165055.jpg');
INSERT INTO `sli_tbl` VALUES(92, '6', 'IMG_20151006_174429.jpg');
INSERT INTO `sli_tbl` VALUES(93, '7', 'IMG_20150606_171008.jpg');
INSERT INTO `sli_tbl` VALUES(94, '8', 'IMG_20150322_172739.jpg');
INSERT INTO `sli_tbl` VALUES(95, '9', 'IMG_20150606_175827.jpg');
INSERT INTO `sli_tbl` VALUES(96, '10', 'Untitled - 1.jpg');
INSERT INTO `sli_tbl` VALUES(97, '11', 'IMG_20150228_172643.jpg');
INSERT INTO `sli_tbl` VALUES(99, '13', 'mah10.jpg');
INSERT INTO `sli_tbl` VALUES(100, '14', 'IMG_20151006_174556.jpg');
INSERT INTO `sli_tbl` VALUES(101, '12', 'IMG_20151117_081244.jpg');
INSERT INTO `sli_tbl` VALUES(102, '1', 'IMG_20160102_144541.jpg');
INSERT INTO `sli_tbl` VALUES(104, 'à§§', '20160128_132331.jpg');
INSERT INTO `sli_tbl` VALUES(105, 'à§¨', '20160101_112458.jpg');
INSERT INTO `sli_tbl` VALUES(106, 'à§©', '20151216_090614.jpg');
INSERT INTO `sli_tbl` VALUES(108, 'à§ª', '20160101_112206.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slri_sht_p1`
--

CREATE TABLE `slri_sht_p1` (
  `slri_sht_p1_id` int(11) NOT NULL AUTO_INCREMENT,
  `slri_sht_p1_insnam` varchar(255) NOT NULL,
  `slri_sht_p1_po` varchar(255) NOT NULL,
  `slri_sht_p1_dist` varchar(255) NOT NULL,
  `slri_sht_p1_srkno` varchar(255) NOT NULL,
  `slri_sht_p1_date` varchar(255) NOT NULL,
  `slri_sht_p1_yar` varchar(255) NOT NULL,
  `slri_sht_p1_month` varchar(255) NOT NULL,
  `slri_sht_p1_bank` varchar(255) NOT NULL,
  PRIMARY KEY (`slri_sht_p1_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `slri_sht_p1`
--

INSERT INTO `slri_sht_p1` VALUES(3, 'à¦¨à¦¾à¦‚à¦—à§à¦²à§€ à¦¨à§‡à¦›à¦¾à¦°à¦¿à§Ÿà¦¾ à¦«à¦¾à¦¯à¦¿à¦² à¦®à¦¾à¦¦à§à¦°à¦¾à¦¸à¦¾', 'à¦•à§‡à¦‰à¦¨à§à¦¦à¦¿à§Ÿà¦¾-à§®à§«à§§à§§', 'à¦ªà¦¿à¦°à§‹à¦œà¦ªà§à¦°', 'à¦•/à§¦à§¯à§®à§®-à¦¹à§®à§¬à§­à§­à§«à§­à§¬à§­à§ªà§«à§­-à§¯à§¦à§¯à§¯à§¯à§«', 'à§¦à§ª/à§¦à§©/à§¨à§¦à§§à§¬ à¦‡à¦‚', 'à§¨à§¦à§§à§¬', 'à¦®à¦¾à¦°à§à¦š', 'à¦°à§‚à¦ªà¦¾à¦²à§€ à¦¬à§à¦¯à¦¾à¦‚à¦• à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦²à¦¿à¦ƒ,à¦•à¦¾à¦‰à¦–à¦¾à¦²à§€ à¦¶à¦¾à¦–à¦¾à¥¤');

-- --------------------------------------------------------

--
-- Table structure for table `slri_sht_p2`
--

CREATE TABLE `slri_sht_p2` (
  `slri_sht_p2_id` int(11) NOT NULL AUTO_INCREMENT,
  `slri_sht_p2_nam` varchar(255) NOT NULL,
  `slri_sht_p2_pos` varchar(255) NOT NULL,
  `slri_sht_p2_code` varchar(255) NOT NULL,
  `slri_sht_p2_sck` varchar(255) NOT NULL,
  `slri_sht_p2_brth` varchar(255) NOT NULL,
  `slri_sht_p2_slry` varchar(255) NOT NULL,
  `slri_sht_p2_mslry` varchar(255) NOT NULL,
  `slri_sht_p2_incr` varchar(255) NOT NULL,
  `slri_sht_p2_mp` varchar(255) NOT NULL,
  `slri_sht_p2_bk` varchar(255) NOT NULL,
  `slri_sht_p2_wft` varchar(255) NOT NULL,
  `slri_sht_p2_pain` varchar(255) NOT NULL,
  `slri_sht_p2_scut` varchar(255) NOT NULL,
  `slri_sht_p2_etp` varchar(255) NOT NULL,
  `slri_sht_p2_bnk` varchar(255) NOT NULL,
  PRIMARY KEY (`slri_sht_p2_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `slri_sht_p2`
--

INSERT INTO `slri_sht_p2` VALUES(3, 'à¦®à§‹à¦ƒ à¦†à¦¬à§à¦¦à§à¦² à¦®à¦¤à¦¿à¦¨', 'à¦…à¦§à§à¦¯à¦•à§à¦·', 'à§«', 'à§¦à§¬à§­à§§à§«à§©', 'à§¦à§§-à§¦à§©-à§§à§¯à§¬à§¬', 'à§ªà§©,à§¦à§¦à§¦,à§¦à§¦', 'à§ªà§©,à§®à§¦à§¦,à§¦à§¦', '--', 'à§ªà§©,à§®à§¦à§¦,à§¦à§¦', '--', 'à§®à§¬à§¦,à§¦à§¦', 'à§§,à§­à§¨à§¦,à§¦à§¦', '--', 'à§ªà§§,à§¨à§¨à§¦,à§¦à§¦', 'à§®à§¨à§¨à§­');
INSERT INTO `slri_sht_p2` VALUES(4, 'à¦®à§à¦¹à¦¾à¦®à§à¦®à¦¦ à¦‡à¦‰à¦¨à§à¦› à¦†à¦²à§€', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦…à¦§à§à¦¯à¦¾à¦ªà¦•', 'à§¬', 'à§©à§«à§¬à§¦à§ªà§©', 'à§¦à§§-à§¦à§©-à§§à§¯à§¬à§¯', 'à§©à§«,à§¦à§¦à§¦,à§¦à§¦', 'à§©à§¬,à§©à§¦à§¦,à§¦à§¦', '--', 'à§©à§¬,à§©à§¦à§¦,à§¦à§¦', '--', 'à§­à§§à§¦,à§¦à§¦', 'à§§,à§ªà§¨à§¦,à§¦à§¦', '--', 'à§©à§ª,à§§à§­à§¦,à§¦à§¦', 'à§®à§¨à§¨à§®');
INSERT INTO `slri_sht_p2` VALUES(5, 'à¦®à§à¦¹à¦¾à¦®à§à¦®à¦¦ à¦¬à¦¦à¦°à§à¦¦à§à¦¦à§‹à¦œà¦¾', 'à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•', 'à§­', 'à§©à§«à§®à§ªà§¦à§¦', 'à§¦à§§-à§¦à§¨-à§§à§¯à§­à§¦', 'à§¨à§¯,à§¦à§¦à§¦,à§¦à§¦', 'à§¨à§¯,à§®à§¦à§¦,à§¦à§¦', '--', 'à§¨à§¯,à§®à§¦à§¦,à§¦à§¦', '--', 'à§«à§®à§¦,à§¦à§¦', 'à§§,à§§à§¬à§¦,à§¦à§¦', '--', 'à§¨à§®,à§¦à§¬à§¦,à§¦à§¦', 'à§®à§¨à§¨à§¯');
INSERT INTO `slri_sht_p2` VALUES(6, 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹', 'à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•', 'à§¯', 'à§¨à§§à§¦à§®à§©à§©à§­', 'à§¦à§§-à§¦à§©-à§§à§¯à§®à§¯', 'à§¨à§¨,à§¦à§¦à§¦,à§¦à§¦', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§ªà§ªà§¦,à§¦à§¦', 'à§®à§®à§¦,à§¦à§¦', '--', 'à§¨à§§,à§ªà§®à§¦,à§¦à§¦', 'à§§à§¨à§¨à§©à§¯');
INSERT INTO `slri_sht_p2` VALUES(7, 'à¦®à§‹à¦ƒ à¦†à¦¨à§‹à§Ÿà¦¾à¦° à¦¹à§‹à¦¸à¦¾à¦‡à¦¨', 'à¦¬à¦¾à¦‚à¦²à¦¾ à¦ªà§à¦°à¦­à¦¾à¦·à¦•', 'à§­', 'à§©à§­à§©à§¯à§©à§ª', 'à§¦à§§-à§¦à§¨-à§§à§¯à§­à§©', 'à§¨à§¯,à§¦à§¦à§¦,à§¦à§¦', 'à§¨à§¯,à§®à§¦à§¦,à§¦à§¦', '--', 'à§¨à§¯,à§®à§¦à§¦,à§¦à§¦', '--', 'à§«à§®à§¦,à§¦à§¦', 'à§§,à§§à§¬à§¦,à§¦à§¦', '--', 'à§¨à§®.à§¦à§¬à§¦,à§¦à§¦', 'à§®à§­à§­à§¬');
INSERT INTO `slri_sht_p2` VALUES(8, 'à¦®à§‹à¦ƒ à¦œà¦¾à¦®à¦¾à¦² à¦‰à¦¦à§à¦¦à¦¿à¦¨', 'à¦‡à¦¤à¦¿à¦¹à¦¾à¦¸ à¦ªà§à¦°à¦­à¦¾à¦·à¦•', 'à§­', 'à§©à§­à§¦à§®à§§à§®', 'à§¦à§§-à§¦à§©-à§§à§¯à§­à§¨', 'à§¨à§¯,à§¦à§¦à§¦,à§¦à§¦', 'à§¨à§¯,à§®à§¦à§¦,à§¦à§¦', '--', 'à§¨à§¯,à§®à§¦à§¦,à§¦à§¦', '--', 'à§«à§®à§¦,à§¦à§¦', 'à§§,à§§à§¬à§¦,à§¦à§¦', '--', 'à§¨à§®.à§¦à§¬à§¦,à§¦à§¦', 'à§®à§«à§«à§©');
INSERT INTO `slri_sht_p2` VALUES(9, 'à¦†à¦¬à§à¦¦à§à¦² à¦¹à¦¾à¦¨à§à¦¨à¦¾à¦¨', 'à¦‡à¦‚à¦°à§‡à¦œà§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•', 'à§¯', 'à§¨à§¦à§¨à§®à§­à§©à§­', 'à§¦à§§-à§¦à§§-à§§à§¯à§®à§¨', 'à§¨à§¨,à§¦à§¦à§¦,à§¦à§¦', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§ªà§ªà§¦,à§¦à§¦', 'à§®à§®à§¦,à§¦à§¦', '--', 'à§¨à§§,à§ªà§®à§¦,à§¦à§¦', 'à§§à§§à§¯à§®à§ª');
INSERT INTO `slri_sht_p2` VALUES(10, 'à¦®à§‹à¦ƒ à¦‡à¦¬à§à¦°à¦¾à¦¹à§€à¦® à¦®à§€à¦°', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦®à§Œà¦²à¦­à§€', 'à§¯', 'à§©à§«à§®à§©à§¯à§¯', 'à§©à§§-à§§à§¨-à§§à§¯à§­à§¦', 'à§¨à§¨,à§¦à§¦à§¦,à§¦à§¦', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§ªà§ªà§¦,à§¦à§¦', 'à§®à§®à§¦,à§¦à§¦', '--', 'à§¨à§§,à§ªà§®à§¦,à§¦à§¦', 'à§®à§¨à§©à§§');
INSERT INTO `slri_sht_p2` VALUES(11, 'à¦®à§‹à¦ƒ à¦†à¦¬à§ à¦¬à¦•à¦° à¦›à¦¿à¦¦à§à¦¦à¦¿à¦•', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦®à§Œà¦²à¦­à§€', 'à§¯', 'à§¦à§¬à§­à§§à§«à§«', 'à§¦à§§-à§¦à§¯-à§§à§¯à§¬à§©', 'à§¨à§¨,à§¦à§¦à§¦,à§¦à§¦', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§ªà§ªà§¦,à§¦à§¦', 'à§®à§®à§¦,à§¦à§¦', '--', 'à§¨à§§,à§ªà§®à§¦,à§¦à§¦', 'à§®à§¨à§©à§¨');
INSERT INTO `slri_sht_p2` VALUES(12, 'à¦®à§‹à¦ƒ à¦†à¦¬à§à¦¦à§à¦² à¦–à¦¾à¦²à§‡à¦•', 'à¦¸à¦¹à¦ƒ à¦¶à¦¿à¦•à§à¦·à¦• (à¦¸à¦®à¦¾à¦œ à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨)', 'à§¯', 'à§¦à§¬à§­à§§à§«à§®', 'à§©à§¦-à§§à§¨-à§§à§¯à§¬à§«', 'à§¨à§¨,à§¦à§¦à§¦,à§¦à§¦', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§ªà§ªà§¦,à§¦à§¦', 'à§®à§®à§¦,à§¦à§¦', '--', 'à§¨à§§,à§ªà§®à§¦,à§¦à§¦', 'à§®à§¨à§©à§©');
INSERT INTO `slri_sht_p2` VALUES(13, 'à¦®à§‹à¦ƒ à¦®à¦¾à¦¸à§à¦¦à§à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'à¦¸à¦¹à¦ƒ à¦¶à¦¿à¦•à§à¦·à¦• (à¦¸à¦®à¦¾à¦œ à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨)', 'à§§à§¦', 'à§©à§¬à§§à§­à§«à§¦', 'à§¦à§®-à§¦à§§-à§§à§¯à§¬à§¨', 'à§§à§¬,à§¦à§¦à§¦,à§¦à§¦', 'à§§à§¬,à§®à§¦à§¦,à§¦à§¦', '--', 'à§§à§¬,à§®à§¦à§¦,à§¦à§¦', '--', 'à§©à§¨à§¦,à§¦à§¦', 'à§¬à§ªà§¦,à§¦à§¦', '--', 'à§§à§«,à§®à§ªà§¦,à§¦à§¦', 'à§®à§¨à§©à§ª');
INSERT INTO `slri_sht_p2` VALUES(14, 'à¦®à§‹à¦ƒ à¦«à¦¾à¦°à§à¦• à¦¹à§‹à¦¸à§‡à¦¨', 'à¦¸à¦¹à¦ƒ à¦¶à¦¿à¦•à§à¦·à¦• (à¦•à§ƒà¦·à¦¿)', 'à§§à§¦', 'à§©à§«à§­à§©à§«à§®', 'à§¦à§­-à§¦à§®-à§§à§¯à§¬à§­', 'à§§à§¬,à§¦à§¦à§¦,à§¦à§¦', 'à§§à§¬,à§®à§¦à§¦,à§¦à§¦', '--', 'à§§à§¬,à§®à§¦à§¦,à§¦à§¦', '--', 'à§©à§¨à§¦,à§¦à§¦', 'à§¬à§ªà§¦,à§¦à§¦', '--', 'à§§à§«,à§®à§ªà§¦,à§¦à§¦', 'à§®à§¨à§©à§«');
INSERT INTO `slri_sht_p2` VALUES(15, 'à¦®à§‹à¦ƒ à¦†à¦¬à¦¦à§à¦² à¦¹à¦¾à¦•à¦¿à¦®', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦®à§Œà¦²à¦­à§€', 'à§§à§¦', 'à§©à§¬à§§à§­à§ªà§¯', 'à§§à§¨-à§§à§¨-à§§à§¯à§­à§¦', 'à§§à§¬,à§¦à§¦à§¦,à§¦à§¦', 'à§§à§¬,à§®à§¦à§¦,à§¦à§¦', '--', 'à§§à§¬,à§®à§¦à§¦,à§¦à§¦', '--', 'à§©à§¨à§¦,à§¦à§¦', 'à§¬à§ªà§¦,à§¦à§¦', '--', 'à§§à§«,à§®à§ªà§¦,à§¦à§¦', 'à§®à§¨à§©à§¬');
INSERT INTO `slri_sht_p2` VALUES(16, 'à¦®à§‹à¦ƒ à¦†à¦ªà§‡à¦² à¦®à¦¾à¦¹à¦®à§à¦¦', 'à¦¸à¦¹à¦ƒ à¦¶à¦¿à¦•à§à¦·à¦• (à¦—à¦¨à¦¿à¦¤)', 'à§§à§§', 'à§¨à§§à§§à§«à§­à§¦à§¦', 'à§¦à§§-à§¦à§©-à§§à§¯à§¯à§¦', 'à§§à§¨,à§«à§¦à§¦,à§¦à§¦', 'à§§à§©,à§©à§¦à§¦,à§¦à§¦', '--', 'à§§à§©,à§©à§¦à§¦,à§¦à§¦', '--', 'à§¨à§«à§¦.à§¦à§¦', 'à§«à§¦à§¦,à§¦à§¦', '--', 'à§§à§¨,à§«à§«à§¦,à§¦à§¦', 'à§§à§¨à§­à§ªà§«');
INSERT INTO `slri_sht_p2` VALUES(17, 'à¦®à§‹à¦ƒ à¦†à¦¬à§à¦¦à§à¦² à¦†à¦‰à§Ÿà¦¾à¦² à¦¹à¦¾à¦‚', 'à¦œà§à¦¨à¦¿à§Ÿà¦° à¦‡à¦¬à¦¤à§‡à¦¦à¦¾à§Ÿà§€', 'à§§à§«', 'à§©à§¬à§§à§­à§ªà§®', 'à§¦à§¨-à§§à§¦-à§§à§¯à§¬à§«', 'à§¯,à§­à§¦à§¦,à§¦à§¦', 'à§§à§¦,à§«à§¦à§¦,à§¦à§¦', '--', 'à§§à§¦,à§«à§¦à§¦,à§¦à§¦', '--', 'à§§à§¯à§ª,à§¦à§¦', 'à§©à§®à§®,à§¦à§¦', '--', 'à§¯,à§¯à§§à§®,à§¦à§¦', 'à§®à§¨à§©à§­');
INSERT INTO `slri_sht_p2` VALUES(18, 'à¦ à¦•à§‡ à¦à¦® à¦†à¦¤à¦¿à¦•à§à¦° à¦°à¦¹à¦®à¦¾à¦¨ 	', 'à¦¸à¦¹à¦ƒ à¦¶à¦¿à¦•à§à¦·à¦• (à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°)', 'à§¯', 'à§«à§®à§¨à§¨à§ªà§­', 'à§¦à§§-à§¦à§©-à§§à§¯à§­à§®', 'à§¨à§¨,à§¦à§¦à§¦,à§¦à§¦', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§ªà§ªà§¦,à§¦à§¦', 'à§®à§®à§¦,à§¦à§¦', '--', 'à§¨à§§,à§ªà§®à§¦,à§¦à§¦', 'à§¯à§ªà§®à§¨');
INSERT INTO `slri_sht_p2` VALUES(19, 'à¦®à§‹à¦ƒ à¦‡à¦–à¦¤à¦¿à§Ÿà¦¾à¦° à¦‰à¦¦à§à¦¦à¦¿à¦¨', 'à¦¸à¦¹à¦ƒ à¦¶à¦¿à¦•à§à¦·à¦• (à¦¶à¦°à§€à¦° à¦šà¦°à§à¦šà¦¾)', 'à§¯', 'à§«à§®à§¨à§¨à§ªà§®', 'à§¦à§§-à§¦à§§-à§§à§¯à§®à§¦', 'à§¨à§¨,à§¦à§¦à§¦,à§¦à§¦', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§¨à§¨,à§®à§¦à§¦,à§¦à§¦', '--', 'à§ªà§ªà§¦,à§¦à§¦', 'à§®à§®à§¦,à§¦à§¦', '--', 'à§¨à§§,à§ªà§®à§¦,à§¦à§¦', 'à§¯à§ªà§®à§§');
INSERT INTO `slri_sht_p2` VALUES(20, 'à¦†à¦¬à§à¦² à¦¬à¦¾à¦¶à¦¾à¦° à¦®à§‹à¦ƒ à¦†à¦ƒ à¦œà¦¬à§à¦¬à¦¾à¦° à¦–à¦¾à¦¨', 'à¦‡à¦¬à¦¤à§‡à¦¦à¦¾à§Ÿà§€ à¦ªà§à¦°à¦§à¦¾à¦¨', 'à§§à§ª', 'à§¦à§¬à§­à§§à§¬à§¨', 'à§¦à§¬-à§¦à§ª-à§§à§¯à§¬à§§', 'à§§à§¦,à§¨à§¦à§¦,à§¦à§¦', 'à§§à§§,à§¦à§¦à§¦,à§¦à§¦', '--', 'à§§à§§,à§¦à§¦à§¦,à§¦à§¦', '--', 'à§¨à§¦à§ª,à§¦à§¦', 'à§ªà§¦à§®,à§¦à§¦', '--', 'à§§à§¦,à§©à§®à§®,à§¦à§¦', 'à§®à§¨à§©à§®');
INSERT INTO `slri_sht_p2` VALUES(21, 'à¦®à§à¦¹à¦¾à¦®à§à¦®à¦¦ à¦®à§à¦œà¦¿à¦¬à§à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'à¦œà§à¦¨à¦¿à§Ÿà¦° à¦®à§Œà¦²à¦­à§€', 'à§§à§«', 'à§©à§«à§­à§©à§«à§­', 'à§¦à§§-à§¦à§§-à§§à§¯à§­à§§', 'à§¯,à§­à§¦à§¦,à§¦à§¦', 'à§§à§¦,à§«à§¦à§¦,à§¦à§¦', '--', 'à§§à§¦,à§«à§¦à§¦,à§¦à§¦', '--', 'à§§à§¯à§ª,à§¦à§¦', 'à§©à§®à§®,à§¦à§¦', '--', 'à§¯,à§¯à§§à§®,à§¦à§¦', 'à§®à§¨à§ªà§¦');
INSERT INTO `slri_sht_p2` VALUES(22, 'à¦®à§‹à¦ƒ à¦¶à¦¹à§€à¦¦à§à¦² à¦‡à¦¸à¦²à¦¾à¦® ', 'à¦‡à¦¬à¦¤à§‡à¦¦à¦¾à§Ÿà§€ à¦•à¦¾à¦°à§€', 'à§§à§¬', 'à§¨à§§à§§à§ªà§©à§ªà§¯', 'à§¦à§§-à§¦à§¨-à§§à§¯à§¯à§¬', 'à§¯,à§©à§¦à§¦,à§¦à§¦', 'à§§à§¦,à§§à§¦à§¦,à§¦à§¦', '--', 'à§§à§¦,à§§à§¦à§¦,à§¦à§¦', '--', 'à§§à§®à§¬,à§¦à§¦', 'à§©à§­à§¨,à§¦à§¦', '--', 'à§¯,à§«à§ªà§¨,à§¦à§¦', 'à§§à§¨à§«à§­à§¨');
INSERT INTO `slri_sht_p2` VALUES(23, 'à¦®à§‹à¦ƒ à¦†à¦¬à§à¦² à¦¬à¦¾à¦¶à¦¾à¦°', 'à¦…à¦«à¦¿à¦¸ à¦¸à¦¹à¦•à¦¾à¦°à§€', 'à§§à§«', 'à§©à§­à§¦à§®à§§à§¬', 'à§¦à§§-à§§à§¨-à§§à§¯à§¬à§¯', 'à§¯,à§©à§¦à§¦,à§¦à§¦', 'à§§à§¦,à§«à§¦à§¦,à§¦à§¦', '--', 'à§§à§¦,à§«à§¦à§¦,à§¦à§¦', '--', 'à§§à§¯à§ª,à§¦à§¦', 'à§©à§®à§®,à§¦à§¦', '--', 'à§¯,à§¯à§§à§®,à§¦à§¦', 'à§®à§«à§«à§§');
INSERT INTO `slri_sht_p2` VALUES(24, 'à¦®à§‹à¦ƒ à¦¶à¦«à¦¿à¦•à§à¦²à§à¦²à¦¾à¦¹', 'à¦¨à§ˆà¦¶ à¦ªà§à¦°à¦¹à¦°à§€', 'à§§à§¯', 'à§«à§®à§¦à§®à§¨à§¯', 'à§¦à§§-à§¦à§©-à§§à§¯à§®à§¨', 'à§®,à§«à§¦à§¦,à§¦à§¦', 'à§¯,à§©à§¦à§¦,à§¦à§¦', '--', 'à§¯,à§©à§¦à§¦,à§¦à§¦', '--', 'à§§à§­à§¦,à§¦à§¦', 'à§©à§ªà§¦,à§¦à§¦', '--', 'à§®,à§­à§¯à§¦,à§¦à§¦', 'à§¯à§«à§¦à§¯');
INSERT INTO `slri_sht_p2` VALUES(25, 'à¦®à§‹à¦ƒ à¦¸à¦¾à¦¨à¦¾à¦‰à¦²à§à¦²à¦¾à¦¹', 'à¦¦à¦ªà§à¦¤à¦°à§€', 'à§¨à§¦', 'à§¨à§¦à§¯à§­à§ªà§§à§®', 'à§¦à§§-à§¦à§©-à§§à§¯à§®à§­', 'à§®,à§¨à§«à§¦,à§¦à§¦', 'à§¯,à§¦à§«à§¦,à§¦à§¦', '--', 'à§¯,à§¦à§«à§¦,à§¦à§¦', '--', 'à§§à§¬à§«,à§¦à§¦', 'à§©à§©à§¦,à§¦à§¦', '--', 'à§®,à§«à§«à§«,à§¦à§¦', 'à§§à§§à§®à§¬à§¦');

-- --------------------------------------------------------

--
-- Table structure for table `std_class1_tbl`
--

CREATE TABLE `std_class1_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `std_class1_tbl`
--

INSERT INTO `std_class1_tbl` VALUES(1, '097737723', '113', 'Class 1', 'Panna', 'Hasan', 'Jahanara', 'Day', 'B', 'Science', '08/08/1988', 'Islam', 'Male', 'Bangla, English, Math, General knowledge,', '1437887067.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_class2_tbl`
--

CREATE TABLE `std_class2_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `std_class2_tbl`
--

INSERT INTO `std_class2_tbl` VALUES(1, '097737723', '113', 'Class 2', 'Panna', 'Hasan', 'Jahanara', 'Night', 'B', 'Science', '08/08/1988', 'Islam', 'Male', '101_102, 107_108, 275, 277_278, 253_254, 286_287, 235_237', '1437887067.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_class3_tbl`
--

CREATE TABLE `std_class3_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `std_class3_tbl`
--

INSERT INTO `std_class3_tbl` VALUES(1, '097737723', '113', 'Class 3', 'Panna', 'Hasan', 'Jahanara', 'Night', 'B', 'Science', '08/08/1988', 'Islam', 'Male', '101_102, 107_108, 275, 277_278, 253_254, 286_287, 235_237', '1437887067.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_class4_tbl`
--

CREATE TABLE `std_class4_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `std_class4_tbl`
--

INSERT INTO `std_class4_tbl` VALUES(2, '0900089', '190', 'Class 4', 'Sajeda', 'Rohim', 'Amena', 'Day', 'A', 'Business', '10/09/1997', 'Islam', 'Female', '101_102, 107_108, 275, 235_237', '1437887044.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_class5_tbl`
--

CREATE TABLE `std_class5_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `std_class5_tbl`
--

INSERT INTO `std_class5_tbl` VALUES(2, '0900089', '190', 'Class 5', 'Sajeda', 'Rohim', 'Amena', 'Day', 'A', 'Business', '10/09/1997', 'Islam', 'Female', '101_102, 107_108, 275, 235_237', '1437887044.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_class6_tbl`
--

CREATE TABLE `std_class6_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `std_class6_tbl`
--

INSERT INTO `std_class6_tbl` VALUES(2, 'à§¦à§¬à§¦à§§', 'à§¦à§§', 'Class 6', 'à¦®à§‹à¦ƒ à¦®à¦¾à¦¹à¦®à§à¦¦à§à¦² à¦¹à¦¾à¦¸à¦¾à¦¨', 'à¦®à§‹à¦ƒ à¦®à§‹à¦¤à¦¾à¦²à§‡à¦¬ à¦¹à§‹à¦¸à§‡à¦¨', '--------', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§®--à§©-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452590912.gif');
INSERT INTO `std_class6_tbl` VALUES(3, 'à§¦à§¬à§¦à§¨', 'à§¦à§¨', 'Class 6', 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦œà¦®à§à¦² à¦¹à¦¾à¦¸à¦¾à¦¨', 'à¦®à§‹à¦ƒ à¦†à¦¬à§à¦² à¦¬à¦¾à¦¶à¦¾à¦°', 'à¦«à¦¾à¦¤à¦¿à¦®à¦¾ à¦†à¦«à¦°à§€à¦¨', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¨à§ª-à§¦à§«-à§¨à§¦à§¦à§«', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452591182.gif');
INSERT INTO `std_class6_tbl` VALUES(4, 'à§¦à§¬à§¦à§©', 'à§¦à§©', 'Class 6', 'à¦®à§‹à¦ƒ à¦†à¦¬à§à¦¦à§à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'à¦®à§‹à¦ƒ à¦†à¦ƒ à¦¶à§à¦•à§à¦•à§à¦° à¦¹à¦¾à¦“à¦²à¦¾à¦¦à¦¾à¦°', 'à¦«à¦¾à¦¤à§‡à¦®à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§¨-à§¦à§®-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452591378.gif');
INSERT INTO `std_class6_tbl` VALUES(5, 'à§¦à§¬à§¦à§ª', 'à§¦à§ª', 'Class 6', 'à¦®à§‹à¦ƒ à¦¶à¦¾à¦•à¦¿à¦² à¦¹à¦¾à¦“à¦²à¦¾à¦¦à¦¾à¦°', 'à¦®à§‹à¦ƒ à¦›à¦¿à¦¦à§à¦¦à¦¿à¦•à§à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'à¦°à§‡à¦¹à¦¾à¦¨à¦¾ à¦ªà¦¾à¦°à¦­à§€à¦¨', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§§-à§¦à§¨-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452591940.gif');
INSERT INTO `std_class6_tbl` VALUES(6, 'à§¦à§¬à§¦à§«', 'à§¦à§«', 'Class 6', 'à¦®à§‹à¦ƒ à¦œà¦¾à§Ÿà§‡à¦¦ à¦¹à§‹à¦¸à§‡à¦¨', 'à¦®à§‹à¦ƒ à¦®à§à¦¸à¦¾ à¦†à¦²à¦®', 'à¦ªà¦°à¦¿ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¨à§«-à§§à§¨-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452592950.gif');
INSERT INTO `std_class6_tbl` VALUES(7, 'à§¦à§¬à§¦à§¬', 'à§¦à§¬', 'Class 6', 'à¦®à§‹à¦ƒ à¦®à§à§Ÿà¦¾à¦œ', 'à¦®à§‹à¦ƒ à¦®à¦¾à¦¸à¦‰à¦¦à§à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'à¦®à¦¾à¦›à§à¦®à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¨à§ª-à§§à§¨-à§¨à§¦à§¦à§«', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452593146.gif');
INSERT INTO `std_class6_tbl` VALUES(8, 'à§¦à§¬à§¦à§­', 'à§¦à§­', 'Class 6', 'à¦®à§‹à¦ƒ à¦†à¦®à¦¾à¦¨ à¦‰à¦²à§à¦²à¦¾à¦¹', 'à¦®à§‹à¦ƒ à¦œà¦¹à¦¿à¦° à¦‰à¦¦à§à¦¦à¦¿à¦¨', 'à¦¸à¦¾à¦®à¦›à§à¦¨ à¦¨à¦¾à¦¹à¦¾à¦°', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§§-à§¦à§­-à§¨à§¦à§¦à§«', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452593292.gif');
INSERT INTO `std_class6_tbl` VALUES(9, 'à§¦à§¬à§¦à§®', 'à§¦à§®', 'Class 6', 'à¦®à§‹à¦ƒ à¦†à¦¬à§ à¦®à§à¦›à¦¾', 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦¨à§à¦¨à§ à¦¹à¦¾à¦“à¦²à¦¾à¦¦à¦¾à¦°', 'à¦–à¦¾à¦¦à¦¿à¦œà¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§§-à§§à§¦-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452593432.gif');
INSERT INTO `std_class6_tbl` VALUES(10, 'à§¦à§¬à§¦à§¯', 'à§¦à§¯', 'Class 6', 'à¦®à§‹à¦ƒ à¦¨à§‡à§Ÿà¦¾à¦®à¦¤ à¦‰à¦²à§à¦²à¦¾à¦¹', 'à¦®à§‹à¦ƒ à¦œà¦¹à¦¿à¦° à¦‰à¦¦à§à¦¦à¦¿à¦¨', 'à¦¸à¦¾à¦®à¦›à§à¦¨ à¦¨à¦¾à¦¹à¦¾à¦°', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¨à§ª-à§¦à§¬-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452595523.gif');
INSERT INTO `std_class6_tbl` VALUES(11, 'à§¦à§¬à§§à§¦', 'à§§à§¦', 'Class 6', 'à¦®à§‹à¦ƒ à¦¸à¦¾à¦‡à¦«à§à¦¦à§à¦¦à¦¿à¦¨ à¦®à§‹à¦¹à¦¾à¦®à§à¦®à¦¦ à¦–à¦¾à¦²à¦¿à¦¦', 'à¦®à§‹à¦ƒ à¦†à¦ƒ à¦¬à¦¾à¦°à§‡à¦•', 'à¦®à¦¾à¦¹à¦®à§à¦¦à¦¾', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§¨-à§¦à§­-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452595752.gif');
INSERT INTO `std_class6_tbl` VALUES(12, 'à§¦à§¬à§§à§§', 'à§§à§§', 'Class 6', 'à¦®à§‹à¦ƒ à¦®à§‹à¦°à¦¶à§‡à¦¦à§à¦² à¦‡à¦¸à¦²à¦¾à¦®', 'à¦®à§‹à¦ƒ à¦¹à§à¦®à¦¾à¦‰à¦¨ à¦†à¦•à¦¨', 'à¦¶à¦¾à¦¹à¦¾à¦¨à¦¾ à¦ªà¦¾à¦°à¦­à§€à¦¨', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¨à§§-à§§à§§-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452596253.gif');
INSERT INTO `std_class6_tbl` VALUES(13, 'à§¦à§¬à§§à§¨', 'à§§à§¨', 'Class 6', 'à¦®à§‹à¦ƒ à¦¤à¦°à¦¿à¦•à§à¦² à¦‡à¦¸à¦²à¦¾à¦®', 'à¦®à§‹à¦ƒ à¦¤à§‹à¦«à¦¾à¦œà§à¦œà§‡à¦² à¦¹à§‹à¦¸à§‡à¦¨', 'à¦°à¦¾à¦¶à§‡à¦¦à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§§à§ª-à§¦à§®-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452596399.gif');
INSERT INTO `std_class6_tbl` VALUES(14, 'à§¦à§¬à§§à§©', 'à§§à§©', 'Class 6', 'à¦«à§Ÿà¦œà§à¦² à¦¹à¦•', 'à¦®à§‹à¦ƒ à¦¶à¦¾à¦¹à§€à¦¨', 'à¦›à¦¾à¦²à¦®à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§­-à§¦à§¯à§¦à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452596614.gif');
INSERT INTO `std_class6_tbl` VALUES(15, 'à§¦à§¬à§§à§ª', 'à§§à§ª', 'Class 6', 'à¦®à§‹à¦ƒ à¦¶à¦¿à¦¹à¦¾à¦¬à§à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'à¦®à§‹à¦ƒ à¦¤à§‹à¦¤à¦¾ à¦®à¦¿à§Ÿà¦¾ ', 'à¦¶à¦¾à¦¹à¦¾à¦¨à¦¾à¦œ à¦ªà¦¾à¦°à¦­à§€à¦¨', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§¯-à§¦à§¯-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452596835.gif');
INSERT INTO `std_class6_tbl` VALUES(16, 'à§¦à§¬à§§à§«', 'à§§à§«', 'Class 6', 'à¦®à§‹à¦ƒ à¦¬à§‡à¦²à¦¾à¦² à¦¹à§‹à¦¸à§‡à¦¨', 'à¦®à§‹à¦ƒ à¦†à¦‡à¦‰à¦¬ à¦†à¦²à§€', 'à¦°à¦¿à¦¨à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§©-à§¦à§«-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452596998.gif');
INSERT INTO `std_class6_tbl` VALUES(17, 'à§¦à§¬à§§à§¬', 'à§§à§¬', 'Class 6', 'à¦®à§‹à¦ƒ à¦®à§‹à¦¹à§‡à¦¬à§à¦¬à§à¦²à§à¦²à¦¾à¦¹', 'à¦®à§‹à¦ƒ à¦œà§Ÿà¦¨à¦¾à¦² à¦†à¦¬à§‡à¦¦à§€à¦¨', 'à¦°à¦¹à¦¿à¦®à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§§-à§¦à§­-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452605317.gif');
INSERT INTO `std_class6_tbl` VALUES(18, 'à§¦à§¬à§§à§­', 'à§§à§­', 'Class 6', 'à¦®à§‹à¦ƒ à¦«à§‡à¦°à¦¦à¦¾à¦‰à¦¸ à¦†à¦¹à¦®à§‡à¦¦', 'à¦®à§‹à¦ƒ à¦¶à¦¹à¦¿à¦¦à§à¦² à¦‡à¦¸à¦²à¦¾à¦®', 'à¦«à¦¾à¦°à¦œà¦¾à¦¨à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§©à§§-à§§à§¨-à§¨à§¦à§¦à§«', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452605827.gif');
INSERT INTO `std_class6_tbl` VALUES(19, 'à§¦à§¬à§§à§®', 'à§§à§®', 'Class 6', 'à¦®à§‹à¦ƒ à¦¶à¦¾à¦“à¦¨', 'à¦®à§‹à¦ƒ à¦¬à§‡à¦²à¦¾à§Ÿà§‡à¦¤ à¦¹à§‹à¦¸à§‡à¦¨', 'à¦¹à§‹à¦¸à¦¨à§‡à§Ÿà¦¾à¦°à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§§-à§¦à§§-à§¨à§¦à§¦à§«', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452606848.gif');
INSERT INTO `std_class6_tbl` VALUES(20, 'à§¦à§¬à§§à§¯', 'à§§à§¯', 'Class 6', 'à¦®à§‹à¦ƒ à¦œà¦¾à¦•à¦¾à¦°à¦¿à§Ÿà¦¾', 'à¦®à§‹à¦ƒ à¦«à¦¿à¦°à§‹à¦œ à¦¹à¦¾à¦“à¦²à¦¾à¦¦à¦¾à¦°', 'à¦ªà¦¿à§Ÿà¦¾à¦°à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§§à§¦-à§¦à§¬-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452607254.gif');
INSERT INTO `std_class6_tbl` VALUES(21, 'à§¦à§¬à§¨à§¦', 'à§¨à§¦', 'Class 6', 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦¹à¦¿à¦¦ à¦¹à¦¾à¦¸à¦¾à¦¨', 'à¦®à§‹à¦ƒ à¦†à¦ƒ à¦¹à¦¾à¦®à¦¿à¦¦', 'à¦¸à¦¾à¦¹à¦¾à¦¨à¦¾à¦°à¦¾ à¦†à¦•à§à¦¤à¦¾à¦° ', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§§à§¨-à§¦à§¬-à§¨à§¦à§¦à§«', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452609799.gif');
INSERT INTO `std_class6_tbl` VALUES(22, 'à§¦à§¬à§¨à§§', 'à§¨à§§', 'Class 6', 'à¦®à§‹à¦ƒ à¦°à¦¾à¦•à¦¿à¦¬ à¦¹à§‹à¦¸à§‡à¦¨', 'à¦®à§‹à¦ƒ à¦œà§Ÿà¦¨à¦¾à¦² à¦¹à§‹à¦¸à§‡à¦¨', 'à¦«à¦œà¦¿à¦²à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§§-à§¦à§ª-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452609948.gif');
INSERT INTO `std_class6_tbl` VALUES(23, 'à§¦à§¬à§¨à§¨', 'à§¨à§¨', 'Class 6', 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦›à¦°à§à¦²à§à¦²à¦¾à¦¹', 'à¦®à§‹à¦ƒ à¦œà¦¾à¦•à¦¿à¦° à¦®à¦¾à¦à¦¿ ', 'à¦¤à¦¾à¦¸à¦²à¦¿à¦®à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§§-à§¦à§§-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452611303.gif');
INSERT INTO `std_class6_tbl` VALUES(24, 'à§¦à§¬à§¨à§©', 'à§¨à§©', 'Class 6', 'à¦®à§‹à¦ƒ à¦¶à¦¾à¦“à¦¨ à¦¹à§‹à¦¸à§‡à¦¨', 'à¦®à§‹à¦ƒ à¦œà¦¾à¦•à¦¿à¦° à¦¹à§‹à¦¸à§‡à¦¨', 'à¦¹à§‡à¦ªà¦¿ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¨à§¨-à§¦à§­-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452611484.gif');
INSERT INTO `std_class6_tbl` VALUES(25, 'à§¦à§¬à§¨à§ª', 'à§¨à§ª', 'Class 6', 'à¦®à§‹à¦ƒ à¦¬à§‡à¦²à¦¾à¦² à¦¹à§‹à¦¸à§‡à¦¨', 'à¦®à§‹à¦ƒ à¦¸à§‡à¦°à¦¾à¦œà§à¦² à¦¹à¦•', 'à¦¨à¦¾à¦œà¦®à¦¿à¦¨ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§§à§©-à§¦à§­-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452611651.gif');
INSERT INTO `std_class6_tbl` VALUES(26, 'à§¦à§¬à§¨à§«', 'à§¨à§«', 'Class 6', 'à¦®à§‹à¦ƒ à¦°à¦¾à¦•à¦¿à¦¬à§à¦²à§à¦²à¦¾à¦¹', 'à¦®à§‹à¦ƒ à¦†à¦²à¦®', 'à¦°à¦¾à¦œà¦¿à§Ÿà¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§¨-à§¦à§§-à§¨à§¦à§¦à§«', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452611862.gif');
INSERT INTO `std_class6_tbl` VALUES(27, 'à§¦à§¬à§¨à§¬', 'à§¨à§¬', 'Class 6', 'à¦®à§‹à¦ƒ à¦†à¦°à¦¿à¦« à¦¹à§‹à¦¸à§‡à¦¨', 'à¦®à§‹à¦ƒ à¦†à¦ƒ à¦®à¦¨à§à¦¨à¦¾à¦¨ à¦¹à¦¾à¦“à¦²à¦¾à¦¦à¦¾à¦°', 'à¦°à¦“à¦¶à¦¨à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¦à§§-à§¦à§§-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452612058.gif');
INSERT INTO `std_class6_tbl` VALUES(28, 'à§¦à§¬à§¨à§­', 'à§¨à§­', 'Class 6', 'à¦®à§‹à¦ƒ à¦†à¦¬à§à¦² à¦¬à¦¾à¦¶à¦¾à¦° à¦¨à¦¾à¦ˆà¦®', 'à¦®à§‹à¦ƒ à¦®à¦¨à¦¿à¦°à§à¦œà§à¦œà¦¾à¦®à¦¾à¦¨', 'à¦«à¦¾à¦¤à§‡à¦®à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§§à§ª-à§§à§¨-à§¨à§¦à§¦à§«', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452612298.gif');
INSERT INTO `std_class6_tbl` VALUES(29, 'à§¦à§¬à§¨à§®', 'à§¨à§®', 'Class 6', 'à¦®à§‹à¦ƒ à¦¬à¦¾à¦ªà§à¦ªà¦¿ à¦¹à§‹à¦¸à§‡à¦¨', 'à¦®à§‹à¦ƒ à¦•à¦¬à¦¿à¦° à¦¹à§‹à¦¸à§‡à¦¨ ', 'à¦ªà¦¾à¦°à§à¦² à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§§à§«-à§¦à§«-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452612634.gif');
INSERT INTO `std_class6_tbl` VALUES(30, 'à§¦à§¬à§¨à§¯', 'à§¨à§¯', 'Class 6', 'à¦®à§‹à¦ƒ à¦œà¦¾à¦•à¦¾à¦°à¦¿à§Ÿà¦¾ à¦†à¦¹à¦®à§‡à¦¦', 'à¦®à§‹à¦ƒ à¦«à¦°à¦¿à¦¦', 'à¦œà¦¹à§‹à¦°à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§§à§¯-à§¦à§©-à§¨à§¦à§¦à§©', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452612844.gif');
INSERT INTO `std_class6_tbl` VALUES(31, 'à§¦à§¬à§©à§¦', 'à§©à§¦', 'Class 6', 'à¦®à§‹à¦ƒ à¦†à¦°à¦¿à¦«à§à¦² à¦‡à¦¸à¦²à¦¾à¦®', 'à¦®à§‹à¦ƒ à¦¶à¦¹à¦¿à¦¦à§à¦² à¦‡à¦¸à¦²à¦¾à¦® à¦¹à¦¾à¦“à¦ƒ', 'à¦®à§‹à¦›à¦¾à¦ƒ à¦°à§à¦®à¦¿à¦›à¦¾ à¦†à¦•à§à¦¤à¦¾à¦°', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§¨à§ª-à§§à§§-à§¨à§¦à§¦à§«', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452613215.gif');
INSERT INTO `std_class6_tbl` VALUES(32, 'à§¦à§¬à§©à§§', 'à§©à§§', 'Class 6', 'à¦®à§‹à¦ƒ à¦¹à¦¾à¦«à¦¿à¦œà§à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'à¦œà¦¾à¦•à¦¿à¦° à¦¹à§‹à¦¸à§‡à¦¨', 'à¦¹à¦¾à¦šà¦¿à¦¨à¦¾ à¦¬à§‡à¦—à¦®', 'Day', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¾à¦§à¦¾à¦°à¦£', 'à§©à§§-à§¦à§©-à§¨à§¦à§¦à§ª', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à¦•à§à¦°à¦†à¦¨,à¦«à¦¿à¦•à¦¹,à¦†à¦°à¦¬à§€,à¦¬à¦¾à¦‚à¦²à¦¾,à¦‡à¦‚à¦°à§‡à¦œà§€,à¦—à¦¨à¦¿à¦¤,à¦¤à¦¥à§à¦¯,à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨, à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦“ à¦¬à¦¿à¦¶à§à¦¬à¦ªà¦°à¦¿à¦šà§Ÿ,à¦¶à¦¾à¦°à§€à¦°à¦¿à¦• à¦¶à¦¿à¦•à§à¦·à¦¾à¥¤', '1452613469.gif');

-- --------------------------------------------------------

--
-- Table structure for table `std_class7_tbl`
--

CREATE TABLE `std_class7_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `std_class7_tbl`
--

INSERT INTO `std_class7_tbl` VALUES(1, '097737723', '113', 'Class 7', 'Panna', 'Hasan', 'Jahanara', 'Night', 'B', 'Science', '08/08/1988', 'Islam', 'Male', '101_102, 107_108, 275, 277_278, 253_254, 286_287, 235_237', '1437887067.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_class8_tbl`
--

CREATE TABLE `std_class8_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `std_class8_tbl`
--

INSERT INTO `std_class8_tbl` VALUES(1, '097737723', '113', 'Degree 1st Year', 'Panna', 'Hasan', 'Jahanara', 'Night', 'B', 'Science', '08/08/1988', 'Islam', 'Male', '101_102, 107_108, 275, 277_278, 253_254, 286_287, 235_237', '1437887067.jpg');
INSERT INTO `std_class8_tbl` VALUES(2, '0900089', '190', 'Degree 1st Year', 'Sajeda', 'Rohim', 'Amena', 'Day', 'A', 'Business', '10/09/1997', 'Islam', 'Female', '101_102, 107_108, 275, 235_237', '1437887044.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_class9_tbl`
--

CREATE TABLE `std_class9_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `std_class9_tbl`
--

INSERT INTO `std_class9_tbl` VALUES(1, '097737723', '113', 'Degree 1st Year', 'Panna', 'Hasan', 'Jahanara', 'Night', 'B', 'Science', '08/08/1988', 'Islam', 'Male', '101_102, 107_108, 275, 277_278, 253_254, 286_287, 235_237', '1437887067.jpg');
INSERT INTO `std_class9_tbl` VALUES(2, '0900089', '190', 'Degree 1st Year', 'Sajeda', 'Rohim', 'Amena', 'Day', 'A', 'Business', '10/09/1997', 'Islam', 'Female', '101_102, 107_108, 275, 235_237', '1437887044.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_class10_tbl`
--

CREATE TABLE `std_class10_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `std_class10_tbl`
--

INSERT INTO `std_class10_tbl` VALUES(1, '097737723', '113', 'Degree 1st Year', 'Panna', 'Hasan', 'Jahanara', 'Night', 'B', 'Science', '08/08/1988', 'Islam', 'Male', '101_102, 107_108, 275, 277_278, 253_254, 286_287, 235_237', '1437887067.jpg');
INSERT INTO `std_class10_tbl` VALUES(2, '0900089', '190', 'Degree 1st Year', 'Sajeda', 'Rohim', 'Amena', 'Day', 'A', 'Business', '10/09/1997', 'Islam', 'Female', '101_102, 107_108, 275, 235_237', '1437887044.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_girls_tbl`
--

CREATE TABLE `std_girls_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `std_girls_tbl`
--

INSERT INTO `std_girls_tbl` VALUES(1, '097737723', '113', 'HSC 1st Year', 'Panna', 'Hasan', 'Jahanara', 'Night', 'B', 'Science', '08/08/1988', 'Islam', 'Male', '101_102, 107_108, 275, 277_278, 253_254, 286_287, 235_237', '1437887067.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_hsc1_tbl`
--

CREATE TABLE `std_hsc1_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `std_hsc1_tbl`
--

INSERT INTO `std_hsc1_tbl` VALUES(3, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§¦à§§', 'à¦°à§‹à¦²-à§¦à§§', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦®à§‹à¦ƒ à¦¹à¦¾à¦¸à¦¿à¦¬', 'à¦ªà¦¿à¦¤à¦¾- à¦®à§‹à¦ƒ à¦†à¦¬à§à¦¦à§à¦² à¦•à§à¦¦à§à¦¦à§à¦¸', 'à¦®à¦¾à¦¤à¦¾- à¦«à¦°à¦¿à¦¦à¦¾', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§¦à§¬/à§¦à§§/à§§à§¯à§¯à§¯', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443187019.jpg');
INSERT INTO `std_hsc1_tbl` VALUES(4, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§¦à§¨', 'à¦°à§‹à¦²- à§¦à§¨', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦¹à¦¾à¦ƒ à¦®à§‹à¦ƒ à¦‡à¦¬à§à¦°à¦¾à¦¹à§€à¦®', 'à¦ªà¦¿à¦¤à¦¾- à¦®à§‹à¦ƒ à¦†à¦¬à§à¦¦à§à¦² à¦¹à¦¾à¦¨à§à¦¨à¦¾à¦¨', 'à¦®à¦¾à¦¤à¦¾-à¦œà¦¾à¦•à¦¿à§Ÿà¦¾', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§¦à§¨/à§¦à§¨/à§§à§¯à§¯à§¯', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443187649.jpg');
INSERT INTO `std_hsc1_tbl` VALUES(5, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§¦à§©', 'à¦°à§‹à¦²- à§¦à§©', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦®à§‹à¦ƒ à¦†à¦¬à§à¦¦à§à¦²à§à¦²à¦¾à¦¹', 'à¦ªà¦¿à¦¤à¦¾- à¦®à§‹à¦ƒ à¦†à¦¬à§à¦¦à§à¦² à¦¹à¦¾à¦•à¦¿à¦®', 'à¦®à¦¾à¦¤à¦¾- à¦¹à¦¾à¦²à¦¿à¦®à¦¾ à¦¬à§‡à¦—à¦®', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§§à§¦/à§¦à§®/à§¨à§¦à§¦à§¦', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443188135.jpg');
INSERT INTO `std_hsc1_tbl` VALUES(6, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§¦à§ª', 'à¦°à§‹à¦²- à§¦à§ª', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦®à§‹à¦ƒ à¦¸à¦¾à¦‡à¦«à§à¦² à¦‡à¦¸à¦²à¦¾à¦®', 'à¦ªà¦¿à¦¤à¦¾- à¦®à§‹à¦ƒ à¦†à¦¬à§à¦² à¦•à¦¾à¦²à¦¾à¦®', 'à¦®à¦¾à¦¤à¦¾- à¦†à§Ÿà¦¶à¦¾ à¦¬à§‡à¦—à¦®', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§¦à§§/à§¦à§¬/à§§à§¯à§¯à§¯', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443188536.jpg');
INSERT INTO `std_hsc1_tbl` VALUES(7, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§¦à§«', 'à¦°à§‹à¦²- à§¦à§«', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦®à§‹à¦ƒ à¦¸à¦¾à¦‡à¦«à§à¦²à§à¦²à¦¾à¦¹', 'à¦ªà¦¿à¦¤à¦¾- à¦®à§‹à¦ƒ à¦¶à¦¾à¦œà¦¾à¦¹à¦¾à¦¨', 'à¦®à¦¾à¦¤à¦¾- à¦•à§à¦°à¦›à¦¿à§Ÿà¦¾', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§©à§§/à§§à§¨/à§§à§¯à§¯à§¯', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443188867.jpg');
INSERT INTO `std_hsc1_tbl` VALUES(8, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§¦à§¬', 'à¦°à§‹à¦²- à§¦à§¬', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦®à§‹à¦ƒ à¦“à¦¸à¦®à¦¾à¦¨ à¦—à¦¨à¦¿', 'à¦ªà¦¿à¦¤à¦¾- à¦®à§‹à¦ƒ à¦œà¦¾à¦¹à¦¾à¦™à§à¦—à§€à¦° à¦¹à§‹à¦¸à§‡à¦¨', 'à¦®à¦¾à¦¤à¦¾- à¦ªà¦¾à¦°à§à¦² à¦¬à§‡à¦—à¦®', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§¦à§§/à§¦à§§/à§¨à§¦à§¦à§¦', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443189320.jpg');
INSERT INTO `std_hsc1_tbl` VALUES(9, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§¦à§­', 'à¦°à§‹à¦²- à§¦à§­', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦®à§‹à¦ƒ à¦†à¦¬à§ à¦¬à¦•à¦° à¦›à¦¿à¦¦à§à¦¦à¦¿à¦•', 'à¦ªà¦¿à¦¤à¦¾- à¦®à§‹à¦ƒ à¦¸à¦¾à¦–à¦¾à¦“à§Ÿà¦¾à¦¤ à¦¹à§‹à¦¸à§‡à¦¨', 'à¦œà¦¾à¦•à¦¿à§Ÿà¦¾ à¦–à¦¾à¦¨à¦®', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§§à§­/à§¦à§­/à§§à§¯à§¯à§¯', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443189678.jpg');
INSERT INTO `std_hsc1_tbl` VALUES(10, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§¦à§®', 'à¦°à§‹à¦²- à§¦à§®', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦®à§‹à¦ƒ à¦¨à¦¾à¦œà¦®à§à¦² à¦‡à¦¸à¦²à¦¾à¦®', 'à¦ªà¦¿à¦¤à¦¾- à¦®à§‹à¦ƒ à¦†à¦¬à§à¦² à¦¬à¦¾à¦¶à¦¾à¦°', 'à¦®à¦¾à¦¤à¦¾- à¦¨à¦¾à¦°à¦—à¦¿à¦›', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§©à§§/à§§à§¦/à§§à§¯à§¯à§¯', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443190026.jpg');
INSERT INTO `std_hsc1_tbl` VALUES(11, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§¦à§¯', 'à¦°à§‹à¦²- à§¦à§¯', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦®à§‹à¦ƒ à¦à¦®à¦°à¦¾à¦¨ à¦¹à§‹à¦¸à§‡à¦¨', 'à¦ªà¦¿à¦¤à¦¾- à¦®à§‹à¦ƒ à¦®à¦¤à¦¿à¦‰à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'à¦®à¦¾à¦¤à¦¾- à¦œà¦¾à¦¹à¦¾à¦¨à¦¾à¦°à¦¾ à¦¬à§‡à¦—à¦®', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§©à§§/à§§à§¦/à§§à§¯à§¯à§¯', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443190359.jpg');
INSERT INTO `std_hsc1_tbl` VALUES(12, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§§à§¦', 'à¦°à§‹à¦²- à§§à§¦', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦®à§‹à¦ƒ à¦†à¦¬à§ à¦¸à¦¾à¦ˆà§Ÿà§‡à¦¦', 'à¦ªà¦¿à¦¤à¦¾- à¦®à§‹à¦ƒ à¦à¦¸à¦•à§‡à¦¨à§à¦¦à¦¾à¦° à¦†à¦²à§€', 'à¦®à¦¾à¦¤à¦¾- à¦¨à¦¾à¦œà¦°à¦¿à¦¨ à¦¬à§‡à¦—à¦®', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§¦à§§/à§¦à§§/à§§à§¯à§¯à§¯', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443190734.jpg');
INSERT INTO `std_hsc1_tbl` VALUES(13, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§§à§§', 'à¦°à§‹à¦²- à§§à§§', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦®à§‹à¦ƒ à¦¸à§‹à¦¹à¦°à¦¾à¦¬ à¦®à¦¿à§Ÿà¦¾', 'à¦ªà¦¿à¦¤à¦¾-  à¦†à¦¬à§à¦¦à§à¦² à¦†à¦²à§€', 'à¦®à¦¾à¦¤à¦¾- à¦°à¦¾à¦¶à¦¿à¦¦à¦¾ à¦¬à§‡à¦—à¦®', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§¦à§«/à§¦à§©à¥¤à§§à§¯à§¯à§­', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443190972.jpg');
INSERT INTO `std_hsc1_tbl` VALUES(14, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§§à§¨', 'à¦°à§‹à¦²- à§§à§¨', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦®à§‹à¦ƒ à¦†à¦² à¦†à¦®à¦¿à¦¨', 'à¦ªà¦¿à¦¤à¦¾- à¦®à§‹à¦ƒ à¦‡à¦¦à§à¦°à¦¿à¦¸ à¦†à¦²à§€', 'à¦®à¦¾à¦¤à¦¾- à¦°à¦¿à¦œà¦¿à§Ÿà¦¾ à¦¬à§‡à¦—à¦®', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§¨à§­/à§¦à§§/à§§à§¯à§¯à§¯', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443191247.jpg');
INSERT INTO `std_hsc1_tbl` VALUES(15, 'à¦†à¦‡à¦¡à¦¿- à§§à§¨à§§à§§à§©', 'à¦°à§‹à¦²- à§§à§©', 'HSC 1st Year', 'à¦¨à¦¾à¦®- à¦®à§‹à¦ƒ à¦œà¦¾à¦®à¦¾à¦²', 'à¦ªà¦¿à¦¤à¦¾- à¦®à§‹à¦ƒ à¦°à§à¦¸à§à¦¤à§à¦® à¦†à¦²à§€', 'à¦®à¦¾à¦¤à¦¾- à¦°à¦¾à¦¹à¦¿à¦²à¦¾ à¦–à¦¾à¦¤à§à¦¨', 'Day', '----', 'à¦¸à¦¾à¦§à¦¾à¦°à¦¨', 'à§¦à§§/à§¦à§§/à§¨à§¦à§¦à§¦', 'à¦‡à¦¸à¦²à¦¾à¦®', 'Male', 'à§¨à§¦à§§,à§¨à§¦à§¨,à§¨à§¦à§©,à§¨à§¦à§ª,à§¨à§¦à§«,à§¨à§¦à§¬,à§¨à§¦à§¯,à§¨à§§à§¦,à§¨à§©à§¬,à§¨à§©à§­,à§¨à§©à§®,à§¨à§©à§¯,à§¨à§ªà§¦', '1443191487.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_hsc2_tbl`
--

CREATE TABLE `std_hsc2_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `std_hsc2_tbl`
--

INSERT INTO `std_hsc2_tbl` VALUES(1, '097737723', '113', 'HSC 2nd Year', 'Rajib', 'Hasan', 'Jahanara', 'Night', 'B', 'Science', '08/08/1988', 'Islam', 'Male', '101_102, 107_108, 275, 277_278, 253_254, 286_287, 235_237', '1437887067.jpg');
INSERT INTO `std_hsc2_tbl` VALUES(2, '0900089', '190', 'HSC 2nd Year', 'Rohim', 'Karim', 'Amena', 'Day', 'A', 'Business', '10/09/1997', 'Islam', 'Female', '101_102, 107_108, 275, 235_237', '1437887044.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std_registry`
--

CREATE TABLE `std_registry` (
  `std_reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_reg_num` varchar(255) NOT NULL,
  `std_reg_father` varchar(255) NOT NULL,
  `std_reg_mother` varchar(255) NOT NULL,
  `std_reg_addrs` text NOT NULL,
  `std_reg_dob` varchar(255) NOT NULL,
  `std_reg_instit` varchar(255) NOT NULL,
  `std_reg_passyear` varchar(255) NOT NULL,
  `std_reg_section` varchar(255) NOT NULL,
  `std_reg_roll` varchar(255) NOT NULL,
  `std_reg_resyear` varchar(255) NOT NULL,
  `std_reg_gpa` varchar(255) NOT NULL,
  `std_reg_admission` varchar(255) NOT NULL,
  `std_reg_sakha` varchar(255) NOT NULL,
  `std_reg_class` varchar(255) NOT NULL,
  `std_reg_subcode` text NOT NULL,
  `std_reg_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`std_reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `std_registry`
--


-- --------------------------------------------------------

--
-- Table structure for table `std_ssc_tbl`
--

CREATE TABLE `std_ssc_tbl` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_id` varchar(255) NOT NULL,
  `std_roll` varchar(255) NOT NULL,
  `std_cls` varchar(255) NOT NULL,
  `std_name` varchar(255) NOT NULL,
  `std_father` varchar(255) NOT NULL,
  `std_mother` varchar(255) NOT NULL,
  `std_sft` varchar(255) NOT NULL,
  `std_sec` varchar(255) NOT NULL,
  `std_grp` varchar(255) NOT NULL,
  `std_dob` varchar(255) NOT NULL,
  `std_reli` varchar(255) NOT NULL,
  `std_gen` varchar(255) NOT NULL,
  `std_sub` text NOT NULL,
  `std_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `std_ssc_tbl`
--

INSERT INTO `std_ssc_tbl` VALUES(3, 'DE-161001', '01', 'SSC', 'MD. ABU BAKAR ', 'MOHAMMAD HOWLADER', 'AYSA BEGUM', 'Day', 'Male', 'General', '13/05/1999', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453052836.jpg');
INSERT INTO `std_ssc_tbl` VALUES(4, 'DE-161002', '02', 'SSC', 'MD. RUHUL AMIN', 'MD. SANAULLAH', 'JAHANARA BEGUM', 'Day', 'Male', 'General', '05/03/1998', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137 	', '1452688257.gif');
INSERT INTO `std_ssc_tbl` VALUES(5, 'DE-161003', '03', 'SSC', 'MD. SAHIDUL ISLAM', 'TOFAZZEL HOSSEN', 'JAEDA BEGUM', 'Day', 'Male', 'General', '29/04/1999', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137 	', '1453049836.jpg');
INSERT INTO `std_ssc_tbl` VALUES(6, 'DE-161004', '04', 'SSC', 'MD. IMRAN HOSSEN', 'MD. HUMAYUN KABIR', 'KHADIJA BEGUM', 'Day', 'Male', 'General', '01/06/2000', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137 	', '1453051470.jpg');
INSERT INTO `std_ssc_tbl` VALUES(7, 'DE-161005', '05', 'SSC', 'MD. MIRAJUL ISLAM', 'MD. RUHUL AMIN', 'RASIDA BEGUM', 'Day', 'Male', 'General', '10/11/2000', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137 	', '1452689486.gif');
INSERT INTO `std_ssc_tbl` VALUES(8, 'DE-161006', '06', 'SSC', 'MD. A. HANNAN', 'MD. IMAM HOSSEN', 'FARIDA BEGUM', 'Day', 'Male', 'General', '01/12/2000', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453051580.jpg');
INSERT INTO `std_ssc_tbl` VALUES(9, 'DE-161007', '07', 'SSC', 'MD. MAHADI HASSAN', 'MD. NURUL ISLAM', 'TAHERA BEGUM', 'Day', 'Male', 'General', '01/04/1999', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453080100.jpg');
INSERT INTO `std_ssc_tbl` VALUES(10, 'DE-161008', '08', 'SSC', 'MD. ABU NAIM', 'MD. MOTALEB', 'PARVIN BEGUM', 'Day', 'Male', 'General', '15/04/1999', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1452753705.gif');
INSERT INTO `std_ssc_tbl` VALUES(11, 'DE-161009', '09', 'SSC', 'MD. SAKIL AHAMMED', 'MD. ABDUL KHALAQUE', 'SELINA BEGUM', 'Day', 'Male', 'General', '31/07/1999', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453051738.jpg');
INSERT INTO `std_ssc_tbl` VALUES(12, 'DE-161010', '10', 'SSC', 'MD. SAMSUDDIN', 'MD. AMIR HOSSEN', 'SELINA BEGUM', 'Day', 'Male', 'General', '09/11/1999', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453051857.jpg');
INSERT INTO `std_ssc_tbl` VALUES(13, 'DE-161011', '11', 'SSC', 'MD. ABU BAKAR SIDDIQUE', 'MD. SAHIDUL ISLAM RARI', 'EASMIN BEGUM', 'Day', 'Male', 'General', '01/01/2001', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453050003.jpg');
INSERT INTO `std_ssc_tbl` VALUES(14, 'DE-161012', '12', 'SSC', 'MD. RASEL HOSSEN', 'MD. CHAN MIA', 'PARVIN BEGUM', 'Day', 'Male', 'General', '01/03/2000', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137 	', '1453050566.jpg');
INSERT INTO `std_ssc_tbl` VALUES(15, 'DE-161013', '13', 'SSC', 'MD. RAISUDDIN', 'MD. JOYNAL ABEDIN', 'RAHIMA BEGUM', 'Day', 'Male', 'General', '10/09/2000', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453052891.jpg');
INSERT INTO `std_ssc_tbl` VALUES(16, 'DE-161014', '14', 'SSC', 'MD. HIJBULLAH', 'MD. BABUL KHAN', 'RABEA BEGUM', 'Day', 'Male', 'General', '01/02/2000', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453052413.jpg');
INSERT INTO `std_ssc_tbl` VALUES(17, 'DE-161015', '15', 'SSC', 'MD. RASEL SHEK', 'MD. HIRON SHEK', 'RINA BEGUM', 'Day', 'Male', 'General', '02/05/1999', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453052573.jpg');
INSERT INTO `std_ssc_tbl` VALUES(18, 'DE-161016', '16', 'SSC', 'MD. ASADULLA HEL GALIB', 'MD. JILLUR RAHMAN', 'MAMOTAJ BEGUM', 'Day', 'Male', 'General', '31/12/2000', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453052956.jpg');
INSERT INTO `std_ssc_tbl` VALUES(19, 'DE-161017', '17', 'SSC', 'MD. MORSALIN', 'MD. SOHRAB HOSSEN', 'TASLIMA BEGUM', 'Day', 'Male', 'General', '31/01/2000', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453051939.jpg');
INSERT INTO `std_ssc_tbl` VALUES(20, 'DE-161018', '18', 'SSC', 'MD. RUBEL HOSSEN', 'MD. CHAN MIA', 'PARVIN BEGUM', 'Day', 'Male', 'General', '10/01/1999', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453052316.jpg');
INSERT INTO `std_ssc_tbl` VALUES(21, 'DE-161019', '19', 'SSC', 'MD. LIMON SIKDER', 'MD. MAJID SIKDER', 'KAHINUR BEGUM', 'Day', 'Male', 'General', '10/04/1999', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453080146.jpg');
INSERT INTO `std_ssc_tbl` VALUES(22, 'DE-161020', '20', 'SSC', 'MD.TAJUL ISLAM', 'MD. A. MANNAN RARI', 'MAMOTAJ BEGUM', 'Day', 'Male', 'General', '05/03/2000', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453033881.gif');
INSERT INTO `std_ssc_tbl` VALUES(23, 'DE-161021', '21', 'SSC', 'MD. AL MAMUN', 'MD. JAFOR ALI KHAN', 'FATIMA BEGUM', 'Day', 'Male', 'General', '01/08/2000', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453050399.jpg');
INSERT INTO `std_ssc_tbl` VALUES(24, 'DE-161022', '22', 'SSC', 'MD. BELAL HOSEEN', 'MD. RUHUL AMIN', 'LAILI', 'Day', 'Male', 'General', '20/01/1999', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453052153.jpg');
INSERT INTO `std_ssc_tbl` VALUES(25, 'DE-161023', '23', 'SSC', 'MD. ABDULLAH AL- NOMAN', 'MD.ABDUL MANNAN', 'SAHINA  BEGUM', 'Day', 'Male', 'General', '01/04/1999', 'Islam', 'Male', '101,102,103,104,108,109,125,129,133,134,135,136,137', '1453045404.gif');

-- --------------------------------------------------------

--
-- Table structure for table `stipend_tbl`
--

CREATE TABLE `stipend_tbl` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `n_title` varchar(255) NOT NULL,
  `n_download` mediumblob NOT NULL,
  `n_date` varchar(255) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `stipend_tbl`
--

INSERT INTO `stipend_tbl` VALUES(5, 'HSC stipend 2015 both male and femal students', 0x313434393034333339382e706466, '02/12/2015');
INSERT INTO `stipend_tbl` VALUES(7, 'Ã Â¦Â¬Ã Â¦Â²Ã Â§ÂÃ Â¦Â²Ã Â¦Â¾Ã Â¦Â°Ã Â¦Å¸Ã Â§â€¹Ã Â¦Âª Ã Â¦â€ Ã Â¦â€¡Ã Â¦Â¡Ã Â¦Â¿Ã Â§Å¸Ã Â¦Â¾Ã Â¦Â² Ã Â¦â€¢Ã Â¦Â²Ã Â§â€¡Ã Â¦Å“, Ã Â¦Â¬Ã Â¦Â²Ã Â§ÂÃ Â¦Â²Ã Â¦Â¾Ã Â¦Â°Ã Â¦Å¸Ã Â§â€¹Ã Â¦Âª Ã Â¦ÂÃ Â¦Â° Ã Â§Â¨Ã Â§Â¦Ã Â§Â§Ã Â§Â« Ã Â¦Â¸Ã Â¦Â¾Ã Â¦Â²Ã Â§â€¡Ã Â¦Â° ', 0x313434393634353036322e706466, 'Ã Â§Â¦Ã Â§Â¯/Ã Â§Â§Ã Â§Â¨/Ã Â§Â¨Ã Â§Â¦Ã Â§Â§Ã Â§Â«');
INSERT INTO `stipend_tbl` VALUES(8, 'murad', 0x313435333137373630342e706466, '100000000/12/2015');
INSERT INTO `stipend_tbl` VALUES(9, 'monir', 0x313435333137373632392e706466, 'à§¦à§¯/à§§à§¨/à§¨à§¦à§§à§«');
INSERT INTO `stipend_tbl` VALUES(10, '1styear16', 0x313435333236373537332e706466, '20/1/16');
INSERT INTO `stipend_tbl` VALUES(11, 'new', 0x313436393332393532362e706466, 'à§¦à§¯/à§§à§¨/à§¨à§¦à§§à§«');

-- --------------------------------------------------------

--
-- Table structure for table `stu_cls1_tbl`
--

CREATE TABLE `stu_cls1_tbl` (
  `stu_cls1_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_cls1_name` varchar(255) NOT NULL,
  `stu_cls1_father` varchar(255) NOT NULL,
  `stu_cls1_roll` varchar(255) NOT NULL,
  `stu_cls1_contact` varchar(255) NOT NULL,
  `stu_cls1_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_cls1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `stu_cls1_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `stu_cls2_tbl`
--

CREATE TABLE `stu_cls2_tbl` (
  `stu_cls2_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_cls2_name` varchar(255) NOT NULL,
  `stu_cls2_father` varchar(255) NOT NULL,
  `stu_cls2_roll` varchar(255) NOT NULL,
  `stu_cls2_contact` varchar(255) NOT NULL,
  `stu_cls2_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_cls2_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `stu_cls2_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `stu_cls3_tbl`
--

CREATE TABLE `stu_cls3_tbl` (
  `stu_cls3_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_cls3_name` varchar(255) NOT NULL,
  `stu_cls3_father` varchar(255) NOT NULL,
  `stu_cls3_roll` varchar(255) NOT NULL,
  `stu_cls3_contact` varchar(255) NOT NULL,
  `stu_cls3_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_cls3_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stu_cls3_tbl`
--

INSERT INTO `stu_cls3_tbl` VALUES(1, 'Sharif Rahman', 'Abul Hasan', '012', '01915090900', '1433577783.jpg');
INSERT INTO `stu_cls3_tbl` VALUES(2, 'Shafiq', 'Mahabub', '0111', '01912090909', '1433660370.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stu_cls4_tbl`
--

CREATE TABLE `stu_cls4_tbl` (
  `stu_cls4_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_cls4_name` varchar(255) NOT NULL,
  `stu_cls4_father` varchar(255) NOT NULL,
  `stu_cls4_roll` varchar(255) NOT NULL,
  `stu_cls4_contact` varchar(255) NOT NULL,
  `stu_cls4_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_cls4_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stu_cls4_tbl`
--

INSERT INTO `stu_cls4_tbl` VALUES(1, 'Sharif Rahman', 'Abul Hasan', '012', '01915090900', '1433577783.jpg');
INSERT INTO `stu_cls4_tbl` VALUES(2, 'Shafiq', 'Mahabub', '0111', '01912090909', '1433660370.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stu_cls5_tbl`
--

CREATE TABLE `stu_cls5_tbl` (
  `stu_cls5_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_cls5_name` varchar(255) NOT NULL,
  `stu_cls5_father` varchar(255) NOT NULL,
  `stu_cls5_roll` varchar(255) NOT NULL,
  `stu_cls5_contact` varchar(255) NOT NULL,
  `stu_cls5_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_cls5_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stu_cls5_tbl`
--

INSERT INTO `stu_cls5_tbl` VALUES(1, 'Sharif Rahman', 'Abul Hasan', '012', '01915090900', '1433577783.jpg');
INSERT INTO `stu_cls5_tbl` VALUES(2, 'Shafiq', 'Mahabub', '0111', '01912090909', '1433660370.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stu_cls6_tbl`
--

CREATE TABLE `stu_cls6_tbl` (
  `stu_cls6_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_cls6_name` varchar(255) NOT NULL,
  `stu_cls6_father` varchar(255) NOT NULL,
  `stu_cls6_roll` varchar(255) NOT NULL,
  `stu_cls6_contact` varchar(255) NOT NULL,
  `stu_cls6_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_cls6_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stu_cls6_tbl`
--

INSERT INTO `stu_cls6_tbl` VALUES(1, 'Sharif Rahman', 'Abul Hasan', '012', '01915090900', '1433577783.jpg');
INSERT INTO `stu_cls6_tbl` VALUES(2, 'Shafiq', 'Mahabub', '0111', '01912090909', '1433660370.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stu_cls7_tbl`
--

CREATE TABLE `stu_cls7_tbl` (
  `stu_cls7_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_cls7_name` varchar(255) NOT NULL,
  `stu_cls7_father` varchar(255) NOT NULL,
  `stu_cls7_roll` varchar(255) NOT NULL,
  `stu_cls7_contact` varchar(255) NOT NULL,
  `stu_cls7_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_cls7_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stu_cls7_tbl`
--

INSERT INTO `stu_cls7_tbl` VALUES(1, 'Sharif Rahman', 'Abul Hasan', '012', '01915090900', '1433577783.jpg');
INSERT INTO `stu_cls7_tbl` VALUES(2, 'Shafiq', 'Mahabub', '0111', '01912090909', '1433660370.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stu_cls8_tbl`
--

CREATE TABLE `stu_cls8_tbl` (
  `stu_cls8_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_cls8_name` varchar(255) NOT NULL,
  `stu_cls8_father` varchar(255) NOT NULL,
  `stu_cls8_roll` varchar(255) NOT NULL,
  `stu_cls8_contact` varchar(255) NOT NULL,
  `stu_cls8_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_cls8_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stu_cls8_tbl`
--

INSERT INTO `stu_cls8_tbl` VALUES(2, 'Shafiq', 'Mahabub', '0111', '01912090909', '1433660370.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stu_cls9_tbl`
--

CREATE TABLE `stu_cls9_tbl` (
  `stu_cls9_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_cls9_name` varchar(255) NOT NULL,
  `stu_cls9_father` varchar(255) NOT NULL,
  `stu_cls9_roll` varchar(255) NOT NULL,
  `stu_cls9_contact` varchar(255) NOT NULL,
  `stu_cls9_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_cls9_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stu_cls9_tbl`
--

INSERT INTO `stu_cls9_tbl` VALUES(1, 'Sharif Rahman', 'Abul Hasan', '012', '01915090900', '1433577783.jpg');
INSERT INTO `stu_cls9_tbl` VALUES(2, 'Shafiq', 'Mahabub', '0111', '01912090909', '1433660370.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stu_cls10_tbl`
--

CREATE TABLE `stu_cls10_tbl` (
  `stu_cls10_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_cls10_name` varchar(255) NOT NULL,
  `stu_cls10_father` varchar(255) NOT NULL,
  `stu_cls10_roll` varchar(255) NOT NULL,
  `stu_cls10_contact` varchar(255) NOT NULL,
  `stu_cls10_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_cls10_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `stu_cls10_tbl`
--

INSERT INTO `stu_cls10_tbl` VALUES(1, 'Sharif Rahman', 'Abul Hasan', '012', '01915090900', '1433577783.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stu_hsc1_tbl`
--

CREATE TABLE `stu_hsc1_tbl` (
  `stu_hsc1_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_hsc1_name` varchar(255) NOT NULL,
  `stu_hsc1_father` varchar(255) NOT NULL,
  `stu_hsc1_roll` varchar(255) NOT NULL,
  `stu_hsc1_contact` varchar(255) NOT NULL,
  `stu_hsc1_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_hsc1_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `stu_hsc1_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `stu_hsc2_tbl`
--

CREATE TABLE `stu_hsc2_tbl` (
  `stu_hsc2_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_hsc2_name` varchar(255) NOT NULL,
  `stu_hsc2_father` varchar(255) NOT NULL,
  `stu_hsc2_roll` varchar(255) NOT NULL,
  `stu_hsc2_contact` varchar(255) NOT NULL,
  `stu_hsc2_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_hsc2_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `stu_hsc2_tbl`
--


-- --------------------------------------------------------

--
-- Table structure for table `stu_ssc_tbl`
--

CREATE TABLE `stu_ssc_tbl` (
  `stu_ssc_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_ssc_name` varchar(255) NOT NULL,
  `stu_ssc_father` varchar(255) NOT NULL,
  `stu_ssc_roll` varchar(255) NOT NULL,
  `stu_ssc_contact` varchar(255) NOT NULL,
  `stu_ssc_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`stu_ssc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `stu_ssc_tbl`
--

INSERT INTO `stu_ssc_tbl` VALUES(1, 'Sharif Rahman', 'Abul Hasan', '012', '01915090900', '1433577783.jpg');
INSERT INTO `stu_ssc_tbl` VALUES(2, 'Shafiq', 'Mahabub', '0111', '01912090909', '1433660370.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `suborno_tbl`
--

CREATE TABLE `suborno_tbl` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `tech_id` varchar(255) NOT NULL,
  `res_class` varchar(50) NOT NULL,
  `res_roll` varchar(255) NOT NULL,
  `tech_name` varchar(255) NOT NULL,
  `tech_designation` varchar(255) NOT NULL,
  `tech_indxno` varchar(255) NOT NULL,
  `tech_contact` varchar(255) NOT NULL,
  `tech_sub` varchar(255) NOT NULL,
  `tech_photo` varchar(255) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `suborno_tbl`
--

INSERT INTO `suborno_tbl` VALUES(2, '001', '001', '001', 'MIHIR BARAN MONDAL', 'PRINCIPAL', '407069', '01718019250', 'ECONOMICS', '1475384980.jpg');
INSERT INTO `suborno_tbl` VALUES(23, '1995', 'SSC', '166016', 'Md. Muraduzzaman', 'Managing Director', 'Momtaj Trading (Pvt.) Ltd.', '01710855843', 'noapara', '1480081058.jpg');
INSERT INTO `suborno_tbl` VALUES(24, '1995', 'SSC', '266016', 'à¦®à§‹: à¦¸à¦¾à¦‡à¦¦à§à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'à¦…à¦§à§à¦¯à¦¾à¦•à§à¦·', 'keshabkur college', '01911124860', 'keshabpur', '1480081147.jpg');
INSERT INTO `suborno_tbl` VALUES(25, '1992', 'Class Seven Pre-test Examination', '25', 'LUTFA BEGUM', 'ASSISTANT HEAD TEACHER', '1063047', '01716863871', 'à¦°à¦°à¦°à¦°à¦°à¦°à¦°à¦°à¦°à¦°à¦°à¦°', '1502114303.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tech_detailinfo_tbl`
--

CREATE TABLE `tech_detailinfo_tbl` (
  `tech_detailinfo_id` int(11) NOT NULL AUTO_INCREMENT,
  `tech_detailinfo_num` varchar(255) NOT NULL,
  `tech_detailinfo_sex` varchar(255) NOT NULL,
  `tech_detailinfo_desig` varchar(255) NOT NULL,
  `tech_detailinfo_attenddate` varchar(255) NOT NULL,
  `tech_detailinfo_presentdate` varchar(255) NOT NULL,
  `tech_detailinfo_mpodate` varchar(255) NOT NULL,
  `tech_detailinfo_dob` varchar(255) NOT NULL,
  `tech_detailinfo_ssc` varchar(255) NOT NULL,
  `tech_detailinfo_hsc` varchar(255) NOT NULL,
  `tech_detailinfo_deg` varchar(255) NOT NULL,
  `tech_detailinfo_hon` varchar(255) NOT NULL,
  `tech_detailinfo_bed` varchar(255) NOT NULL,
  `tech_detailinfo_med` varchar(255) NOT NULL,
  `tech_detailinfo_ma` varchar(255) NOT NULL,
  `tech_detailinfo_salary` varchar(255) NOT NULL,
  `tech_detailinfo_pic` varchar(255) NOT NULL,
  PRIMARY KEY (`tech_detailinfo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tech_detailinfo_tbl`
--

INSERT INTO `tech_detailinfo_tbl` VALUES(2, 'à¦®à§‹à¦ƒ à¦†à¦¬à§à¦¦à§à¦² à¦®à¦¤à¦¿à¦¨', 'à¦ªà§à¦°à§à¦·', 'à¦…à¦§à§à¦¯à¦•à§à¦·', 'à§¦à§§/à§¦à§­/à§§à§¯à§®à§ª', '---', 'à§¦à§§/à§¦à§¬/à§§à§¯à§®à§«', 'à§¦à§§/à§¦à§©/à§§à§¯à§¬à§¬', 'à§¨à§Ÿ', 'à§§à¦®', 'à§§à¦®', '---', '---', '---', 'à§¨à§Ÿ', 'à§¨à§¨,à§¨à§«à§¦', '1457101589.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(3, 'à¦®à§à¦¹à¦¾à¦®à§à¦®à¦¦ à¦‡à¦‰à¦¨à§à¦› à¦†à¦²à§€', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦…à¦§à§à¦¯à¦¾à¦ªà¦•', 'à§¦à§§/à§¦à§¯/à§§à§¯à§®à§¯', '---', 'à§¦à§§/à§§à§¨/à§§à§¯à§®à§¯', 'à§¦à§§/à§¦à§©/à§§à§¯à§¬à§¯', 'à§¨à§Ÿ', 'à§§à¦®', 'à§¨à§Ÿ', '---', '---', '---', 'à§¨à§Ÿ', 'à§§à§®à§«à§¦à§¦', '1457101623.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(4, 'à¦®à§à¦¹à¦¾à¦®à§à¦®à¦¦ à¦¬à¦¦à¦°à§à¦¦à§à¦¦à§‹à¦œà¦¾', 'à¦ªà§à¦°à§à¦·', 'à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•', 'à§¦à§§/à§¦à§¯/à§§à§¯à§®à§¯', '---', 'à§¦à§§/à§§à§¨/à§§à§¯à§®à§¯', 'à§¦à§§/à§¦à§¨/à§§à§¯à§­à§¦', 'à§¨à§Ÿ', 'à§¨à§Ÿ', 'à§¨à§Ÿ', '---', '---', '---', 'à§¨à§Ÿ', 'à§§à§«à§¦à§¦à§¦', '1457101676.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(5, 'à¦®à§‹à¦ƒ à¦¨à¦¾à¦¸à¦°à§à¦²à§à¦²à¦¾à¦¹', 'à¦ªà§à¦°à§à¦·', 'à¦†à¦°à¦¬à§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•', 'à§¨à§§/à§¦à§¯/à§¨à§¦à§§à§ª ', '---', 'à§¦à§§/à§¦à§§/à§¨à§¦à§§à§«', 'à§¦à§§/à§¦à§©/à§§à§¯à§®à§¯', 'à¦œà¦¿,à¦ªà¦¿,à¦- à§ª.à§©à§©', 'à¦œà¦¿,à¦ªà¦¿,à¦- à§ª.à§«à§¦', 'à¦¸à¦¿,à¦œà¦¿,à¦ªà¦¿,à¦- à§ª.à§¦à§®', 'à¦¸à¦¿,à¦œà¦¿,à¦ªà¦¿,à¦- à§©.à§¯à§¬ (Out Of 4.00) ', '---', '---', 'à¦¸à¦¿,à¦œà¦¿,à¦ªà¦¿,à¦- à§ª.à§­à§¦ (à¦¤à¦¾à¦«à¦¸à§€à¦°)', 'à§§à§§à§¦à§¦à§¦', '1457101961.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(6, 'à¦®à§‹à¦ƒ à¦†à¦¨à§‹à§Ÿà¦¾à¦° à¦¹à§‹à¦¸à¦¾à¦‡à¦¨', 'à¦ªà§à¦°à§à¦·', 'à¦¬à¦¾à¦‚à¦²à¦¾ à¦ªà§à¦°à¦­à¦¾à¦·à¦•', 'à§¦à§§/à§¦à§©/à§§à§¯à§¯à§¯', '---', 'à§¦à§§-à§¦à§«-à§§à§¯à§¯à§¯', 'à§¦à§§-à§¦à§¨-à§§à§¯à§­à§©', 'à§¨à§Ÿ', 'à§¨à§Ÿ', '---', 'à§¨à§Ÿ', '---', '---', 'à§©à§Ÿ', 'à§§à§«à§¦à§¦à§¦', '1457102096.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(7, 'à¦®à§‹à¦ƒ à¦œà¦¾à¦®à¦¾à¦² à¦‰à¦¦à§à¦¦à¦¿à¦¨', 'à¦ªà§à¦°à§à¦·', 'à¦‡à¦¤à¦¿à¦¹à¦¾à¦¸ à¦ªà§à¦°à¦­à¦¾à¦·à¦•', 'à§§à§ª/à§¦à§¯/à§§à§¯à§¯à§­', '---', 'à§¦à§§/à§¦à§¨/à§§à§¯à§¯à§®', 'à§¦à§§/à§¦à§©/à§§à§¯à§­à§¨', 'à§¨à§Ÿ', 'à§¨à§Ÿ', '---', 'à§¨à§Ÿ', '---', '---', 'à§¨à§Ÿ', 'à§§à§«à§¦à§¦à§¦', '1457102165.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(8, 'à¦†à¦¬à§à¦¦à§à¦² à¦¹à¦¾à¦¨à§à¦¨à¦¾à¦¨', 'à¦ªà§à¦°à§à¦·', 'à¦‡à¦‚à¦°à§‡à¦œà§€ à¦ªà§à¦°à¦­à¦¾à¦·à¦•', 'à§¨à§¦/à§¦à§«/à§¨à§¦à§§à§¦', '---', 'à§¦à§§/à§¦à§¯/à§¨à§¦à§§à§¦,  à§§à§©/à§§à§¦/à§¨à§¦à§§à§©', 'à§¦à§§/à§¦à§§/à§§à§¯à§®à§¨', 'à§§à¦®', 'à§§à¦®', 'à§§à¦®', '---', 'à§§à¦®', '---', 'à¦à¦®, à¦- à§§à¦®,  à¦•à¦¾à¦®à¦¿à¦²- à§§à¦®', 'à§§à§§à§¦à§¦à§¦', '1457102210.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(9, 'à¦®à§‹à¦ƒ à¦‡à¦¬à§à¦°à¦¾à¦¹à§€à¦® à¦®à§€à¦°', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦®à§Œà¦²à¦­à§€', 'à§¦à§§/à§¦à§¯/à§§à§¯à§®à§¯', '---', 'à§¦à§§/à§¦à§¯/à§§à§¯à§®à§¯', 'à§©à§§/à§§à§¨/à§§à§¯à§­à§¦', 'à§¨à§Ÿ', 'à§¨à§Ÿ', 'à§¨à§Ÿ', '---', '---', '---', 'à§¨à§Ÿ', 'à§§à§§à§¦à§¦à§¦', '1457102418.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(10, 'à¦®à§‹à¦ƒ à¦†à¦¬à§ à¦¬à¦•à¦° à¦›à¦¿à¦¦à§à¦¦à¦¿à¦•', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦®à§Œà¦²à¦­à§€', 'à§¦à§§-à§¦à§§-à§§à§¯à§®à§¨', '---', 'à§¦à§§/à§¦à§¬/à§§à§¯à§®à§«', 'à§¦à§§/à§¦à§¯/à§§à§¯à§¬à§©', 'à§©à§Ÿ', 'à§©à§Ÿ', 'à§©à§Ÿ', '---', '---', '---', '---', 'à§§à§§à§¦à§¦à§¦', '1457102473.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(11, 'à¦®à§‹à¦ƒ à¦†à¦¬à§à¦¦à§à¦² à¦–à¦¾à¦²à§‡à¦•', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦¶à¦¿à¦•à§à¦·à¦• (à¦¸à¦®à¦¾à¦œ à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨)', 'à§§à§ª/à§¦à§¬/à§§à§¯à§®à§¯', '---', 'à§§à§ª/à§¦à§¬/à§§à§¯à§®à§¯, à§¦à§§/à§§à§¨/à§§à§¯à§¯à§§', 'à§©à§¦/à§§à§¨/à§§à§¯à§¬à§«', 'à§¨à§Ÿ', 'à§¨à§Ÿ', 'à§©à§Ÿ', '---', '---', '---', '---', 'à§§à§§à§¦à§¦à§¦', '1457102516.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(12, 'à¦®à§‹à¦ƒ à¦®à¦¾à¦¸à§à¦¦à§à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦¶à¦¿à¦•à§à¦·à¦• (à¦¸à¦®à¦¾à¦œ à¦¬à¦¿à¦œà§à¦žà¦¾à¦¨)', 'à§¦à§§/à§¦à§¬/à§§à§¯à§¯à§¨', '---', 'à§¦à§§/à§¦à§¬/à§§à§¯à§¯à§¨', 'à§¦à§®/à§¦à§§/à§§à§¯à§¬à§¨', 'à§¨à§Ÿ', 'à§©à§Ÿ', 'à§©à§Ÿ', '---', '---', '---', '---', 'à§®à§¦à§¦à§¦', '1457102555.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(13, 'à¦®à§‹à¦ƒ à¦«à¦¾à¦°à§à¦• à¦¹à§‹à¦¸à§‡à¦¨', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦¶à¦¿à¦•à§à¦·à¦• (à¦•à§ƒà¦·à¦¿)', 'à§¦à§®/à§¦à§ª/à§§à§¯à§®à§¯', '---', 'à§§à§¦/à§¦à§«/à§§à§¯à§®à§¯', 'à§¦à§­/à§¦à§®/à§§à§¯à§¬à§­', 'à§¨à§Ÿ', 'à§©à§Ÿ', 'à§©à§Ÿ', '---', '---', '---', '---', 'à§®à§¦à§¦à§¦', '1457102611.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(14, 'à¦®à§‹à¦ƒ à¦†à¦¬à¦¦à§à¦² à¦¹à¦¾à¦•à¦¿à¦®', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦®à§Œà¦²à¦­à§€', 'à§¦à§§/à§¦à§¬/à§§à§¯à§¯à§¨', '---', 'à§¦à§§/à§¦à§¬/à§§à§¯à§¯à§¨', 'à§§à§¨/à§§à§¨/à§§à§¯à§­à§¦', 'à§©à§Ÿ', 'à§©à§Ÿ', 'à§©à§Ÿ', '---', '---', '---', '---', 'à§®à§¦à§¦à§¦', '1457102685.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(15, 'à¦®à§‹à¦ƒ à¦†à¦¬à§à¦¦à§à¦² à¦†à¦‰à§Ÿà¦¾à¦² à¦¹à¦¾à¦‚', 'à¦ªà§à¦°à§à¦·', 'à¦œà§à¦¨à¦¿à§Ÿà¦° à¦¶à¦¿à¦•à§à¦·à¦• à¦‡à¦¬à¦¤à§‡à¦¦à¦¾à§Ÿà§€', 'à§¦à§§/à§¦à§¬/à§§à§¯à§¯à§¨', '---', 'à§¦à§§/à§¦à§¬/à§§à§¯à§¯à§¨', 'à§¦à§¨/à§§à§¦/à§§à§¯à§¬à§«', 'à§©à§Ÿ', 'à§¨à§Ÿ', '---', '---', '---', '---', '---', 'à§ªà§¯à§¦à§¦', '1457102726.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(16, 'à¦ à¦•à§‡ à¦à¦® à¦†à¦¤à¦¿à¦•à§à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦¶à¦¿à¦•à§à¦·à¦• (à¦•à¦®à§à¦ªà¦¿à¦‰à¦Ÿà¦¾à¦°)', 'à§¦à§§/à§¦à§¯/à§¨à§¦à§¦à§§', '---', 'à§¦à§§/à§§à§¦/à§¨à§¦à§¦à§¨', 'à§¦à§§/à§¦à§©/à§§à§¯à§­à§®', 'à§§à¦®', 'à§¨à§Ÿ', 'à§¨à§Ÿ', '---', 'à§¨à§Ÿ', '---', '---', 'à§§à§§à§¦à§¦à§¦', '1457103007.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(17, 'à¦®à§‹à¦ƒ à¦‡à¦–à¦¤à¦¿à§Ÿà¦¾à¦° à¦‰à¦¦à§à¦¦à¦¿à¦¨', 'à¦ªà§à¦°à§à¦·', 'à¦¸à¦¹à¦•à¦¾à¦°à§€ à¦¶à¦¿à¦•à§à¦·à¦• (à¦¶à¦°à§€à¦° à¦šà¦°à§à¦šà¦¾)', 'à§¦à§§/à§¦à§¯/à§¨à§¦à§¦à§§', '---', 'à§¦à§§/à§¦à§§/à§¨à§¦à§¦à§¨', 'à§¦à§§/à§§à§¦/à§¨à§¦à§¦à§¨', 'à§§à¦®', 'à§§à¦®', 'à§¨à§Ÿ', '---', 'à§§à¦®', '---', '---', 'à§§à§§à§¦à§¦à§¦', '1457103114.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(18, 'à¦†à¦¬à§à¦² à¦¬à¦¾à¦¶à¦¾à¦° à¦®à§‹à¦ƒ à¦†à¦ƒ à¦œà¦¬à§à¦¬à¦¾à¦° à¦–à¦¾à¦¨', 'à¦ªà§à¦°à§à¦·', 'à¦‡à¦¬à¦¤à§‡à¦¦à¦¾à§Ÿà§€ à¦ªà§à¦°à¦§à¦¾à¦¨', 'à§¦à§§/à§¦à§­/à§§à§¯à§®à§ª', '---', 'à§¦à§§/à§¦à§¬/à§§à§¯à§®à§«', 'à§¦à§¬/à§¦à§ª/à§§à§¯à§¬à§§', 'à§¨à§Ÿ', 'à§¨à§Ÿ', 'à§¨à§Ÿ', '---', '---', '---', '---', 'à§«à§¨à§¦à§¦', '1457103202.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(19, 'à¦®à§à¦¹à¦¾à¦®à§à¦®à¦¦ à¦®à§à¦œà¦¿à¦¬à§à¦° à¦°à¦¹à¦®à¦¾à¦¨', 'à¦ªà§à¦°à§à¦·', 'à¦‡à¦¬à¦¤à§‡à¦¦à¦¾à§Ÿà§€ à¦œà§à¦¨à¦¿à§Ÿà¦° à¦®à§Œà¦²à¦­à§€', 'à§¦à§®/à§¦à§ª/à§§à§¯à§®à§¯', '---', 'à§¦à§§/à§¦à§«/à§§à§¯à§®à§¯', 'à§¦à§§/à§¦à§§/à§§à§¯à§­à§§', 'à§¨à§Ÿ', 'à§©à§Ÿ', '---', '---', '---', '---', '---', 'à§ªà§¯à§¦à§¦', '1457103268.jpg');
INSERT INTO `tech_detailinfo_tbl` VALUES(20, 'à¦®à§‹à¦ƒ à¦¶à¦¹à§€à¦¦à§à¦² à¦‡à¦¸à¦²à¦¾à¦® ', 'à¦ªà§à¦°à§à¦·', 'à¦‡à¦¬à¦¤à§‡à¦¦à¦¾à§Ÿà§€ à¦•à¦¾à¦°à§€', 'à§¨à§ª/à§¦à§¬/à§¨à§¦à§§à§«', '---', '---', 'à§¦à§§/à§¦à§¨/à§§à§¯à§¯à§¬', 'à¦œà¦¿,à¦ªà¦¿,à¦- à§ª.à§§à§«', '---', '---', '---', '---', '---', '---', 'à§ªà§­à§¦à§¦', '1457103328.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(150) DEFAULT NULL,
  `UserType` tinyint(4) DEFAULT NULL,
  `Email` varchar(150) DEFAULT NULL,
  `userName` varchar(50) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` VALUES(20, 'bari', 1, 'su319991@gmail.com', 'bari', '53b937338b7f2f0279343ca336cef9ed');
INSERT INTO `userinfo` VALUES(22, 'sahab', 2, 's133700nps@gmail.com', 'sahab', '9f63f60e455e0b40033d70c9a5609f95');
INSERT INTO `userinfo` VALUES(24, 'Md.Mominur Rahman', 1, 'jbghs.m@gmil.com', 'momin', 'a437c07f621651d0fb6f2197082d7273');
