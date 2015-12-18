-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2015 at 11:37 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandwidthhistory`
--

CREATE TABLE IF NOT EXISTS `bandwidthhistory` (
`SL` int(11) NOT NULL,
  `cid` varchar(20) NOT NULL,
  `currentB` varchar(20) NOT NULL,
  `proposedB` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `doneBy` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `bandwidthhistory`
--

INSERT INTO `bandwidthhistory` (`SL`, `cid`, `currentB`, `proposedB`, `type`, `date`, `doneBy`) VALUES
(1, '198', '1MB', '2MB', 'Shared', '2015-04-09', 'Tanjid'),
(2, '123', '512KBPS', '1MB', 'Shared', '2015-04-09', 'Saha'),
(4, '125', '1.5 Mbps', '1 Mbps', 'Dedicated', '2015-04-07', 'furkan'),
(5, '125', '1.5 Mbps', '1 Mbps', 'Dedicated', '2015-04-07', 'furkan'),
(6, '123', '2 Mbps', '5 Mbps', 'Shared', '2015-04-09', 'furkan'),
(7, '123', '5 Mbps', '5+ Mbps', 'Shared', '2015-04-07', 'furkan'),
(8, '125', '1 Mbps', '10 MB', 'Dedicated', '2015-04-09', 'furkan'),
(9, '123', '5+ Mbps', '2MB', 'Dedicated', '2015-04-09', 'furkan'),
(10, '123', '5+ Mbps', '200MB', 'Dedicated', '2015-04-09', 'furkan'),
(11, '125', '1 Mbps', '500 MB', 'Dedicated', '2015-04-09', 'furkan'),
(12, '125', '1 Mbps', '5000', 'Shared', '2015-04-09', 'furkan'),
(13, '125', '1 Mbps', '5000', 'Dedicated', '2015-04-09', 'furkan'),
(14, '125', '5000', '5+ MB', 'Shared', '2015-04-09', 'furkan');

-- --------------------------------------------------------

--
-- Table structure for table `bandwidth_update`
--

CREATE TABLE IF NOT EXISTS `bandwidth_update` (
`sl` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `currentB` varchar(20) DEFAULT NULL,
  `proposed_bandwidth` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bandwidth_update`
--

INSERT INTO `bandwidth_update` (`sl`, `cid`, `currentB`, `proposed_bandwidth`, `date`, `type`) VALUES
(1, 123, NULL, '3 Mbps', '2015-04-09', 'Dedicated'),
(2, 123, NULL, '10+ Mbps', '2015-04-11', 'Dedicated'),
(3, 125, NULL, '3 Mbps', '2015-04-12', 'Dedicated');

-- --------------------------------------------------------

--
-- Table structure for table `billshistory`
--

CREATE TABLE IF NOT EXISTS `billshistory` (
`sl` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `Wdate` date NOT NULL,
  `Pdate` date NOT NULL,
  `bandwidth` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `via` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `Reference` varchar(30) NOT NULL DEFAULT 'N/A',
  `rname` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `billshistory`
--

INSERT INTO `billshistory` (`sl`, `cid`, `Wdate`, `Pdate`, `bandwidth`, `amount`, `via`, `type`, `status`, `Reference`, `rname`, `comment`) VALUES
(7, 197, '2015-04-02', '2015-05-08', '1.5 Mbps', 1000, 'uCash', 'Bill', 'Accepted', '2147483647', 'g', 'Thank you!'),
(8, 197, '2015-04-02', '2015-04-09', '1.5 Mbps', 1000, 'uCash', 'Bill', 'Accepted', '2147483647', 'g', 'Thank you!'),
(9, 123, '2015-04-17', '2015-03-10', '2 Mbps', 500, 'mCash', 'Bill', 'Accepted', '253', 'g', 'Thank you!'),
(10, 123, '2015-04-17', '2015-02-17', '2 Mbps', 500, 'mCash', 'Bill', 'Accepted', '253', 'g', 'Thank you!'),
(11, 198, '2015-04-03', '2015-04-09', '324 kbps', 45654, 'mCash', 'Bill', 'Accepted', '545365463', 'g', 'Thank you!'),
(12, 253, '2015-04-09', '2015-04-08', '2MB', 5000, 'uCash', 'Bill', 'Accepted', 'N/A', 'furkan', 'Thank you!'),
(13, 563, '2015-03-02', '2015-04-10', '2MB', 2000, 'bKash', 'Bill', 'Accepted', 'N/A', 'furkan', 'Thank you!'),
(14, 125, '2015-04-09', '2015-01-12', '1MB', 100, 'uCash', 'Bill', 'Accepted', 'N/A', 'furkan Islam', 'Thank you!'),
(15, 123, '2015-04-02', '2015-04-12', '5+ Mbps', 1200, 'mCash', 'Bill', 'Accepted', '123987', 'Rajib saha', 'Thank you!'),
(16, 31, '2015-04-01', '2015-04-12', '1MB', 1000, 'Cash', 'Bill', 'Accepted', 'N/A', 'Rajib saha', 'Thank you!'),
(17, 31, '2015-01-01', '2015-04-13', '1 Mbps', 5000, 'mCash', 'Bill', 'Accepted', '9002', 'Rajib saha', 'Thank you!'),
(18, 123, '2014-11-11', '2014-11-11', '1 MB', 1500, 'bKash', 'bill', 'Accept', 'N/A', 'furkan', 'thank you!');

-- --------------------------------------------------------

--
-- Table structure for table `clientinfo`
--

CREATE TABLE IF NOT EXISTS `clientinfo` (
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `address` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `bandwidth` varchar(20) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `mac` varchar(40) NOT NULL,
  `picture` varchar(20) NOT NULL DEFAULT 'default.png',
  `status` varchar(20) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientinfo`
--

INSERT INTO `clientinfo` (`cid`, `name`, `fname`, `mobile`, `email`, `bdate`, `address`, `type`, `bandwidth`, `ip`, `mac`, `picture`, `status`) VALUES
(16, 'md furkanul islam', 'hanif', '01824053343', 'mfislam_adhoa@live.com', '2015-04-16', 'house#18,Road#23,\r\nSector#10, \r\nUttara model town, Dhaka', 'Dedicated', '2 Mbps', '165.25.36.05', 'CA:A2:34:9A::3AB', 'tm.png', 'Active'),
(31, 'rajib saha', 'ab', '016565554554546', 'rajib.saha@gmail.com', '2015-04-02', 'house#\r\nctor#10, U\r\ntown, Dhaka-1230', 'Shared', '1 Mbps', '5454465', '56564654', '20150212_233659.jpg', 'Active'),
(123, 'md furkanul islam', 'hanif', '01824053343', 'mfislam_adhoa@live.com', '2015-04-16', 'house#18,Road#23,Sector#10, Uttara model town, Dha', 'Dedicated', '5+ Mbps', '56456', '45646', 'tm.png', 'Active'),
(125, 'md furkan', 'jjkl', '01824053343', 'mfi7391@gmail.comkkkk', '2015-04-15', 'house#18,Road#23,Sector#10, Uttara model town, Dha', 'Shared', '5+ MB', '896786786+', '4566546', '1427914198tm2.png', 'Deactive'),
(197, 'md furkan', 'jjkl', '01824053343', 'mfi7391@gmail.comkkkk', '2015-04-15', 'house#18,Road#23,Sector#10, Uttara model town, Dha', 'Dedicated', '1.5 Mbps', 'kjkjhkjh', 'hlkl', 'image_uploads/142791', 'Active'),
(198, 'md furkan', 'hanif', '01824053343', 'mfi7391@gmail.comkkkk', '2015-04-15', 'house#18,Road#23,Sector#10, Uttara model town, Dha', 'Shared', '324 kbps', '5676456', '45646456', '1427917695tm.png', 'Deactive'),
(241, 'Tanjid', 'n/a', '01715689541', '12303029@iubat.edu', '1994-10-18', 'malibug\r\nmogbazar\r\ndhaka', 'Dedicated', '1.5 Mbps', '', '', 'default.png', 'Active'),
(258, 'Tanjid', 'n/a', '01715689541', '12303029@iubat.edu', '1994-10-18', 'malibug\r\nmogbazar\r\ndhaka', 'Dedicated', '1.5 Mbps', '', '', 'default.png', 'Deactive'),
(280, 'Tanjid', 'n/a', '01715689541', '12303029@iubat.edu', '1994-10-18', 'malibug\r\nmogbazar\r\ndhaka', 'Dedicated', '1.5 Mbps', '192.168.3.62', '25.36.45.78', 'default.png', 'Active'),
(1402, 'Tanjid', 'jfhj', '01715689541', 'mfi7391@gmail.comkkkk', '2015-04-08', 'house#18,Road#2\r\nmodel town, Dhaka-1230', 'Shared', '786 kbps', '4575', '5678679698', '20150212_223306.jpg', 'Deactive'),
(5674, 'md furkan', 'jjkl', '01824053343', 'mfi7391@gmail.comkkkk', '2015-04-15', 'house#18,Road#23,Sector#10, Uttara model town, Dha', 'Dedicated', '1.5 Mbps', '198.36', '57566575675', '1427914198tm2.png', 'Active'),
(24141, 'Tanjid', 'n/a', '01715689541', '12303029@iubat.edu', '1994-10-18', 'malibug\r\nmogbazar\r\ndhaka', 'Dedicated', '1.5 Mbps', '192.56.2.45', 'B1:24:A3:CA:10', 'default.png', 'Active'),
(27123, 'md furkan', 'hanif', '01824053343', 'mfi7391@gmail.comkkkk', '2015-04-15', 'house#18,Road#23,Sector#10, Uttara model town, Dha', 'Shared', '324 kbps', '786786', '7867896', '1427917749tm.png', 'Deactive'),
(12303047, 'Shahariar alam', 'N/A', '01681555114', '12303047@iubat.edu', '1968-04-12', 'uttara-11,dhaka-1230', 'Dedicated', '1 MB', '192.168.24.56', '25:BC:25:B1:CA:B6', 'default.png', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `cid` int(11) DEFAULT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`cid`, `uname`, `email`, `pass`) VALUES
(125, 'futureNet', 'nai', 'f'),
(1402, 'mfislambdkkk', 'mfi7391@gmail.comkkkk', '58'),
(31, 'rajibsaha', 'rajib.saha@gmail.com', '12'),
(12303047, 'shahariaralam', '12303047@iubat.edu', '12303047'),
(24141, 'tanjidbd', '12303029@iubat.edu', '1'),
(123, 'uname', 'mfi7391@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `onlinepaybill`
--

CREATE TABLE IF NOT EXISTS `onlinepaybill` (
  `tid` int(50) NOT NULL,
  `cid` int(11) NOT NULL,
  `ref` varchar(20) NOT NULL,
  `wdate` date NOT NULL,
  `date` date NOT NULL,
  `cat` varchar(10) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onlinepaybill`
--

INSERT INTO `onlinepaybill` (`tid`, `cid`, `ref`, `wdate`, `date`, `cat`, `amount`, `status`) VALUES
(253, 123, 'rakib', '2015-04-17', '2015-04-08', 'mCash', 500, 'Accepted'),
(9002, 31, 'kkk', '2015-01-01', '2015-04-13', 'mCash', 5000, 'Accepted'),
(59632, 198, 'rakibullah', '2015-04-01', '2015-04-09', 'uCash', 500, 'pending'),
(89979, 123, 'kljkl', '2015-04-17', '2015-04-09', 'uCash', 522, 'Accepted'),
(123987, 123, 'Saha', '2015-04-02', '2015-04-11', 'mCash', 1200, 'Accepted'),
(193000, 31, 'gh', '2015-03-04', '2015-04-13', 'mCash', 1000, 'pending'),
(256316, 125, 'alam', '2015-04-16', '2015-04-12', 'uCash', 5000, 'pending'),
(694515, 123, 'Shahariar alam', '2015-03-11', '2015-04-09', 'bKash', 1500, 'pending'),
(545365463, 198, 'bcvbncn', '2015-04-03', '2015-04-09', 'mCash', 45654, 'Accepted'),
(2147483647, 197, 'tt', '2015-04-02', '2015-04-09', 'uCash', 1000, 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `pendingreq`
--

CREATE TABLE IF NOT EXISTS `pendingreq` (
`sl` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `address` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `bandwidth` varchar(20) NOT NULL DEFAULT 'default.png',
  `picture` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `pendingreq`
--

INSERT INTO `pendingreq` (`sl`, `name`, `uname`, `pass`, `fname`, `mobile`, `email`, `bdate`, `address`, `type`, `bandwidth`, `picture`, `status`) VALUES
(29, 'furkan', 'mfi73kmail', '12', 'hanif', '01824053343', 'mehedihasan758@gmail.com', '1993-01-11', 'house#18,Road#23,Sector#10,\r\n Uttara model town, Dhaka-1230', 'Dedicated', '1 Mbps', 'default.png', 'Pending'),
(30, 'Tanjid', 'mfislambdkkk', '58', 'jfhj', '01715689541', 'mfi7391@gmail.comkkkk', '2015-04-08', 'house#18,Road#2\r\nmodel town, Dhaka-1230', 'Shared', '786 kbps', '20150212_223306.jpg', 'Active'),
(31, 'rajib saha', 'rajibsaha', '12', 'ab', '016565554554546', 'rajib.saha@gmail.com', '2015-04-02', 'house#\r\nctor#10, U\r\ntown, Dhaka-1230', 'Shared', '1 Mbps', '20150212_233659.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE IF NOT EXISTS `problems` (
`pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`pid`, `cid`, `title`, `message`, `date`, `status`) VALUES
(1, 123, 'fcghfgh', 'fghgf', '2015-04-06', 'Pending'),
(5, 123, 'vbhjb', 'vjhkjk', '2015-04-14', 'Solved'),
(6, 123, 'vbhjb', 'vjhkjk', '2015-04-15', 'Solved'),
(7, 123, 'furkan', 'jjkk lko kol kom kom lkkl', '2015-04-14', 'Solved'),
(8, 123, 'Furkan nets slow', 'please speed up net', '2015-04-20', 'Pending'),
(9, 125, 'hfghfg', ' ghfgh', '2015-04-14', 'Solved'),
(10, 123, 'Furkan nets slow', 'Consecutive 3 days net was so slow. please solved this problems within todays......... ', '2015-04-20', 'Solved'),
(11, 123, 'helo test', 'dfgdh\r\ngkhjklhj\r\njlhklkhllllllllllllllll\r\nlkhlklhkl\r\nkhllh\r\nhlhl', '2015-04-13', 'Solved'),
(12, 123, 'saiful', 'sdgdfgh jfhjkjh\r\njjkl;lk;\r\n;kl;lk;\r\n;kl;lk;\r\n;kl;kl;\r\nlk;kl;k\r\n;kl;kl', '2015-04-14', 'Solved'),
(13, 123, 'IP forgot!!', 'PLZ sent my configuration', '2015-04-01', 'Reviewing'),
(14, 123, 'MAC how can change', 'please give me tips to\r\n change mt MAC address!!', '2015-04-12', 'Pending'),
(15, 125, 'net slow', 'please resolve it as soon as possible', '2015-04-12', 'Pending'),
(16, 258, 'NEED some cable', 'i need a 5 feet cable to connect another pc with my router.', '2015-04-12', 'Pending'),
(17, 31, 'net slow', 'please solve this problem as .......', '2015-04-13', 'Solved'),
(18, 31, 'rtest client id', 'jkljlkjkll', '2015-04-13', 'Solved');

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE IF NOT EXISTS `solution` (
  `psid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `solver` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(200) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`psid`, `cid`, `status`, `solver`, `date`, `title`, `Message`) VALUES
(0, 123, 'Solved', 'Furkan', '2015-04-05', 'hello', 'Some Message'),
(5, 123, 'Accepted', 'furkan', '2015-04-08', 'vbhjb', 'ljkhjkh'),
(6, 123, 'Accepted', 'furkan', '2015-04-11', 'vbhjb', 'thank you'),
(7, 123, 'Accepted', 'furkan', '2015-04-07', 'furkan', 'jkkljhl'),
(8, 123, 'Accepted', 'furkan', '2015-04-09', 'Furkan nets slow', 'jhkj'),
(9, 125, 'Accepted', 'furkan', '2015-04-01', 'hfghfg', 'hhfjghjk'),
(10, 123, 'Accepted', 'furkan', '2015-04-11', 'Furkan nets slow', 'jghjdfkghdfg\nkhjgkhj\nfgjh;lh\nfg'),
(11, 123, 'Accepted', 'furkan', '2015-04-11', 'helo test', 'now check!!\nthank you!!'),
(12, 123, 'Accepted', 'furkan', '2015-04-11', 'saiful', 'hie dear now chexk!\n\nthank you to stay with us!'),
(17, 31, 'Accepted', 'Rajib saha', '2015-04-12', 'net slow', 'now check your net speed'),
(18, 31, 'Accepted', 'Rajib saha', '2015-04-12', 'rtest client id', 'jghjghk hjg\nhj fff\n\nk\niii'),
(25, 123, 'pending', 'furkan ino', '2015-04-06', 'kamal', 'solved thankxxx\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
`sl` int(11) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`sl`, `Name`, `Email`, `Mobile`, `Password`, `status`) VALUES
(1, 'furkan', 'f@g.com', '01681666115', '12', 'Deactive'),
(6, 'furkan', 'mfi7391@gmail.com', '01681666115', '1', 'Active'),
(8, 'saha', 'saha@g.com', '01681564754', '45', 'Pending'),
(9, 'furkan Islam', 'admin', '01824053343', '1', 'Active'),
(10, 'tanjid', 'tan@jid.com', '01825659874', '1', 'Active'),
(11, 'imran', 'imran@gmail.com', '01685478596', '1', 'Active'),
(12, 'furkanbd', 'a@g.com', '01824556633', '1', 'Deactive'),
(13, 'shipon', '12@t.com', '01651857412', '1', 'pending'),
(14, 'JAM', 'JAM@null.com', '01621874520', '12', 'Active'),
(15, 'Rajib saha', 'rajib.saha@gmail.com', '01687152698', '12', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandwidthhistory`
--
ALTER TABLE `bandwidthhistory`
 ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `bandwidth_update`
--
ALTER TABLE `bandwidth_update`
 ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `billshistory`
--
ALTER TABLE `billshistory`
 ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `clientinfo`
--
ALTER TABLE `clientinfo`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`uname`), ADD UNIQUE KEY `cid` (`cid`);

--
-- Indexes for table `onlinepaybill`
--
ALTER TABLE `onlinepaybill`
 ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `pendingreq`
--
ALTER TABLE `pendingreq`
 ADD PRIMARY KEY (`sl`), ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
 ADD PRIMARY KEY (`psid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
 ADD PRIMARY KEY (`sl`), ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bandwidthhistory`
--
ALTER TABLE `bandwidthhistory`
MODIFY `SL` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `bandwidth_update`
--
ALTER TABLE `bandwidth_update`
MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `billshistory`
--
ALTER TABLE `billshistory`
MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pendingreq`
--
ALTER TABLE `pendingreq`
MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
