-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2017 at 05:06 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qad`
--

-- --------------------------------------------------------

--
-- Table structure for table `goal`
--

CREATE TABLE `goal` (
  `Gid` int(11) NOT NULL,
  `Gname` text COLLATE utf8_unicode_ci NOT NULL,
  `Gnote` text COLLATE utf8_unicode_ci NOT NULL,
  `Gscoope` text COLLATE utf8_unicode_ci NOT NULL,
  `Gtime` text COLLATE utf8_unicode_ci NOT NULL,
  `Gdate` date NOT NULL,
  `G_status` text COLLATE utf8_unicode_ci NOT NULL,
  `Sduration` text COLLATE utf8_unicode_ci NOT NULL,
  `Eduration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Geval` text COLLATE utf8_unicode_ci NOT NULL,
  `Gicon` tinyint(4) NOT NULL,
  `Gcost` int(11) NOT NULL,
  `U_name` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `goal`
--

INSERT INTO `goal` (`Gid`, `Gname`, `Gnote`, `Gscoope`, `Gtime`, `Gdate`, `G_status`, `Sduration`, `Eduration`, `Geval`, `Gicon`, `Gcost`, `U_name`) VALUES
(1, '77', 'test', 'edu', '', '0000-00-00', 'private', '08/04/2017', '0000-00-00', '', 0, 0, '0'),
(2, '77', 'test', 'other', '', '0000-00-00', 'private', '08/03/2017', '0000-00-00', '', 0, 0, '0'),
(3, '77', 'test', 'other', '', '0000-00-00', 'private', '08/04/2017', '0000-00-00', '', 0, 0, '3'),
(4, 'قراءة 10 كتب', 'قراءة', 'edu', '', '0000-00-00', 'public', '08/09/2017', '0000-00-00', '', 0, 0, '3'),
(5, 'قراءة 10 كتب', 'قراءة', 'edu', '', '0000-00-00', 'public', '08/09/2017', '0000-00-00', '', 0, 0, '3'),
(6, 'تعلم اليونتي ', 'لا يوجد', 'edu', '', '0000-00-00', 'public', '09/01/2017', '0000-00-00', '', 0, 0, '3'),
(7, '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, 0, '3'),
(8, 'صناعة لعبة', 'لعبة سهلة', 'fun', '', '0000-00-00', 'public', '10/23/2017', '0000-00-00', '', 0, 0, 'raneem'),
(9, 'قراءة 10 كتب', 'قراءة', 'edu', '', '0000-00-00', 'public', '08/11/2017', '0000-00-00', '', 0, 0, 'raneem'),
(10, '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, 0, 'raneem'),
(11, 'اصدار كتاب', 'كتاب تعليمي يفيد فئة الاطفال', 'edu', '', '0000-00-00', 'public', '08/25/2017', '0000-00-00', '', 0, 0, 'ارياف'),
(12, '', '', '', '', '0000-00-00', '', '', '0000-00-00', '', 0, 0, 'ارياف'),
(13, 'كتابة', 'اا', 'edu', '', '0000-00-00', 'public', '08/17/2017', '0000-00-00', '', 0, 0, 'ارياف'),
(14, 'test', 'test test', 'reg', '', '0000-00-00', 'public', '08/01/2017', '0000-00-00', '', 0, 0, 'ارياف'),
(15, 'test', 'test test', 'reg', '', '0000-00-00', 'public', '08/01/2017', '0000-00-00', '', 0, 0, 'ارياف'),
(16, 'test', 'test test test', 'reg', '', '0000-00-00', 'public', '08/01/2017', '08/02/2017', '', 0, 0, 'ارياف'),
(17, 'حفظ', 'حفظ قران', 'reg', '', '0000-00-00', 'private', '10/23/2017', '08/29/2017', '', 0, 0, 'ارياف'),
(18, 'تعلم برمجة', 'صص', 'edu', '', '0000-00-00', 'public', '08/22/2017', '09/20/2017', '', 0, 0, 'ارياف'),
(19, 'مشي 1000م', '', 'sport', '', '0000-00-00', 'public', '08/21/2017', '09/21/2017', '', 0, 0, 'ارياف'),
(20, 'مشي 1000م يوميا', '', 'sport', '', '0000-00-00', 'public', '08/22/2017', '09/22/2017', '', 0, 0, 'sajaali'),
(26, '1', '1', 'edu', '', '0000-00-00', 'public', '08/10/2017', '08/29/2017', '', 0, 0, 'رنيم الغامدي'),
(27, 'qwertyui', 'rtyu', 'reg', '', '0000-00-00', 'private', '08/16/2017', '08/24/2017', '', 0, 0, 'رنيم الغامدي'),
(28, '2', '', 'edu', '', '0000-00-00', 'private', '08/24/2017', '08/25/2017', '', 0, 0, 'رنيم الغامدي'),
(29, '4', '', 'edu', '', '0000-00-00', 'private', '08/25/2017', '08/26/2017', '10', 0, 0, 'رنيم الغامدي'),
(30, '7', '777777', 'other', '', '0000-00-00', 'public', '08/24/2017', '08/30/2017', '90', 0, 0, 'رنيم الغامدي'),
(31, '', '', '', '', '0000-00-00', '', '', '', '', 0, 0, 'رنيم الغامدي'),
(32, 'السفر حول العالم', 'السفر الممتع', 'fun', '', '0000-00-00', 'public', '08/24/2017', '12/31/2017', '', 0, 0, 'رنيم الغامدي'),
(33, 'يونتي ', '1', 'edu', '', '0000-00-00', 'public', '08/25/2017', '08/27/2017', '100', 0, 0, 'احمد'),
(34, '1', '', 'sport', '', '0000-00-00', 'private', '08/25/2017', '08/31/2017', '100', 0, 0, 'تغريد'),
(35, '2', '7', 'edu', '', '0000-00-00', 'public', '08/25/2017', '08/30/2017', '100', 0, 0, 'تغريد');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `Tid` int(11) NOT NULL,
  `Tname` text COLLATE utf8_unicode_ci NOT NULL,
  `Tnote` text COLLATE utf8_unicode_ci NOT NULL,
  `Sduration` text COLLATE utf8_unicode_ci NOT NULL,
  `Eduration` text COLLATE utf8_unicode_ci NOT NULL,
  `Tdone` text COLLATE utf8_unicode_ci NOT NULL,
  `Toprat` text COLLATE utf8_unicode_ci NOT NULL,
  `goal_id` int(11) NOT NULL,
  `Tstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`Tid`, `Tname`, `Tnote`, `Sduration`, `Eduration`, `Tdone`, `Toprat`, `goal_id`, `Tstatus`) VALUES
(1, 'test', 'good', '20/02/5k', '20/02/58lk', '', '', 3, 0),
(2, 'eee', 'eeee', '01/02/2017', '12/2/2018', '', '', 22, 1),
(4, 'التاني', '2', '01/02/2017', '01/03/2017', '', '', 22, 1),
(5, 'الثاني', '2', '01/02/2017', '01/03/2017', '', '', 22, 1),
(6, 'read', 'ات', '01/02/2017', '01/03/2017', '', '', 22, 1),
(7, 'yyyy', '44', '20/2/2017', '01/03/2017', '', '', 22, 1),
(8, '123', '23', '01/02/2017', '01/03/2017', '', '', 26, 1),
(9, 'ertyuio', '345', '01/02/2017', '01/03/2017', '', '', 27, 1),
(10, 'j', 'j', 'j', 'j', '', '', 26, 1),
(11, '2', '', '03/04/2018', '03/05/2018', '', '', 26, 1),
(12, '3', '3', '04/04/2018', '04/08/2018', '', '', 26, 1),
(13, '4', 'tyu', '05/03/2018', '05/07/2018', '', '', 26, 1),
(14, '567', '89', '01/02/2017', '05/07/2018', '', '', 26, 1),
(15, 'nm,', 'njmk,', 'nm', 'bhnj', '', '', 26, 1),
(16, 'ghj', 'jk', 'ghj', 'yujikhjui', '', '', 26, 1),
(17, 'ن', 'ى', 'ن', 'ن', '', '', 26, 0),
(19, 'السفر في اسيا', 'شهر لقارة اسيا', '2017-08-25', '2017-09-26', '', '', 32, 0),
(20, 'الاول', '1', '2017-08-25', '2017-08-26', '', '', 33, 1),
(21, 'الثاني', '2', '2017-08-25', '2017-08-26', '', '', 33, 1),
(22, '123', '1', '2017-08-25', '2017-08-26', '', '', 34, 1),
(23, '6', 'u', '2017-08-26', '2017-08-30', '', '', 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Uid` int(11) NOT NULL,
  `Uname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Upass` text COLLATE utf8_unicode_ci NOT NULL,
  `Umail` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `Upio` text COLLATE utf8_unicode_ci NOT NULL,
  `Upic` tinyint(4) NOT NULL,
  `Ufolder` tinyint(4) NOT NULL,
  `paths` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Uid`, `Uname`, `Upass`, `Umail`, `Upio`, `Upic`, `Ufolder`, `paths`) VALUES
(1, 'jana', '90c1df86c21e0cca6c9f6534d78f032b', 'jana@gmail.com', '', 0, 0, ''),
(2, 'جنى', '90c1df86c21e0cca6c9f6534d78f032b', 'jan@gmail.com', '', 0, 0, ''),
(3, 'raneem', 'b552ad00f90c9f5cd211f52fca597886', 'art3848@gmail.com', 'qq', 0, 0, ''),
(4, 'امجد محمد', '6604fb89a9e287b88dbf168b8572c6b4', 'amjd@a.com', '', 0, 0, ''),
(5, 'جنى الغامدي', '9439aec52eb100234ad0d3bf4471b575', 'jana@hotmal.com', '', 0, 0, ''),
(6, 'احمد محمد', '81dc9bdb52d04dc20036dbd8313ed055', 'ahmad@a.com', '', 0, 0, ''),
(7, 'saja', '594f803b380a41396ed63dca39503542', 'aaa@gmail.com', '', 0, 0, ''),
(8, 'ارياف', '38c97a13ba1502f0bef0193fefd06c8c', 'a123@a.com', 'طموحة', 0, 0, ''),
(9, 'Ijana', '9439aec52eb100234ad0d3bf4471b575', 'Ijana@a.com', '', 0, 0, ''),
(11, 'sajaali', '2cf05839c01ec66c9723b407ea6bf7b7', 'saja2002@s.com', '', 0, 0, ''),
(12, 'رنيم الغامدي', '2c7ab334dad8c49795293a77789f572e', 'raneem1@r.com', 'قدها', 0, 0, 'assets/img/find_user.png'),
(13, 'احمد', '532eb6d6a459ee67bf111c9a19884d61', 'ahmd1@a.com', '', 0, 0, 'image/tm.jpg'),
(14, 'تغريد', '069b0618399b118fe1c706508ba9c175', 'tgh@t.com', '', 0, 0, 'image/babyblue2-460x335.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goal`
--
ALTER TABLE `goal`
  ADD PRIMARY KEY (`Gid`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`Tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Uid`),
  ADD UNIQUE KEY `Umail` (`Umail`),
  ADD UNIQUE KEY `Uname` (`Uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goal`
--
ALTER TABLE `goal`
  MODIFY `Gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `Tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
