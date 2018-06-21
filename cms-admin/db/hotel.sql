-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 02:21 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `authorize_user`
--

CREATE TABLE `authorize_user` (
  `id` int(20) NOT NULL,
  `pc_name` text,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authorize_user`
--

INSERT INTO `authorize_user` (`id`, `pc_name`, `date`, `status`) VALUES
(1, 'SUL-LABPC-11', '2015-09-15', 1),
(2, 'fahad-PC', NULL, NULL),
(4, 'Khairul-PC', NULL, NULL),
(5, 'SUL-Soft-PC', '2015-11-25', 1),
(7, 'USER-PC-Monira', '2015-12-13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `career_postings`
--

CREATE TABLE `career_postings` (
  `id` int(20) NOT NULL,
  `system_file_no` varchar(255) DEFAULT NULL,
  `employee_id` varchar(255) DEFAULT NULL,
  `employee_name` varchar(255) DEFAULT NULL,
  `passport_no` varchar(255) DEFAULT NULL,
  `country_of_origin` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) DEFAULT NULL,
  `employer_business_name` varchar(255) DEFAULT NULL,
  `business_address` text,
  `contract_period` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career_postings`
--

INSERT INTO `career_postings` (`id`, `system_file_no`, `employee_id`, `employee_name`, `passport_no`, `country_of_origin`, `job_title`, `employer_business_name`, `business_address`, `contract_period`, `date`, `status`) VALUES
(1, '1', 'emp001', 'Aminul', '1993150215', 'Bangladesh', 'Programmer', 'SOft', 'Mirpur', '001112233', '2017-03-02', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `career_postings_view`
--
CREATE TABLE `career_postings_view` (
`id` int(20)
,`system_file_no` varchar(255)
,`employee_id` varchar(255)
,`employee_name` varchar(255)
,`passport_no` varchar(255)
,`country_of_origin` varchar(255)
,`job_title` varchar(255)
,`employer_business_name` varchar(255)
,`business_address` text
,`contract_period` varchar(255)
,`date` date
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `custom_table_field`
--

CREATE TABLE `custom_table_field` (
  `id` int(20) NOT NULL,
  `table_id` int(20) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom_table_field`
--

INSERT INTO `custom_table_field` (`id`, `table_id`, `name`, `date`, `status`) VALUES
(112, 25, 'system_file_no', '2017-03-02', 1),
(113, 25, 'employee_id', '2017-03-02', 1),
(114, 25, 'employee_name', '2017-03-02', 1),
(115, 25, 'passport_no', '2017-03-02', 1),
(116, 25, 'country_of_origin', '2017-03-02', 1),
(117, 25, 'job_title', '2017-03-02', 1),
(118, 25, 'employer_business_name', '2017-03-02', 1),
(119, 25, 'business_address', '2017-03-02', 1),
(120, 25, 'contract_period', '2017-03-02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `blood_group` varchar(20) NOT NULL,
  `dob` date DEFAULT NULL,
  `contactnumber` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `gender`, `blood_group`, `dob`, `contactnumber`, `address`, `username`, `password`, `date`, `status`) VALUES
(3, 'CMS Admin', '1', '1', '2015-12-09', '01927608261', 'asdS', 'cms', '7e8a32176a113a7ba3d2b1f85834e828', '2015-09-13', 1),
(4, 'Shanto', '1', '1', '1988-08-16', '13231312', 'wesaqweqw', 'shanto', '7e8a32176a113a7ba3d2b1f85834e828', '2015-11-25', 1),
(5, 'Sirajum Munira', '1', '1', '1986-08-29', '01923318408', 'adasdsad', 'munira', '7e8a32176a113a7ba3d2b1f85834e828', '2015-12-13', 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `login`
--
CREATE TABLE `login` (
`id` int(20)
,`name` varchar(255)
,`username` varchar(255)
,`password` varchar(255)
,`status` int(2)
);

-- --------------------------------------------------------

--
-- Table structure for table `page_info`
--

CREATE TABLE `page_info` (
  `id` int(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `page_name_view` varchar(255) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `status` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_info`
--

INSERT INTO `page_info` (`id`, `name`, `page_name`, `page_name_view`, `menu_name`, `date`, `status`) VALUES
(25, 'career_postings', 'career_postings.php', '', 'Career Postings', '2017-03-02', 1);

-- --------------------------------------------------------

--
-- Structure for view `career_postings_view`
--
DROP TABLE IF EXISTS `career_postings_view`;

CREATE  VIEW `career_postings_view`  AS  select `career_postings`.`id` AS `id`,`career_postings`.`system_file_no` AS `system_file_no`,`career_postings`.`employee_id` AS `employee_id`,`career_postings`.`employee_name` AS `employee_name`,`career_postings`.`passport_no` AS `passport_no`,`career_postings`.`country_of_origin` AS `country_of_origin`,`career_postings`.`job_title` AS `job_title`,`career_postings`.`employer_business_name` AS `employer_business_name`,`career_postings`.`business_address` AS `business_address`,`career_postings`.`contract_period` AS `contract_period`,`career_postings`.`date` AS `date`,`career_postings`.`status` AS `status` from `career_postings` ;

-- --------------------------------------------------------

--
-- Structure for view `login`
--
DROP TABLE IF EXISTS `login`;

CREATE  VIEW `login`  AS  select `employee`.`id` AS `id`,`employee`.`name` AS `name`,`employee`.`username` AS `username`,`employee`.`password` AS `password`,`employee`.`status` AS `status` from `employee` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authorize_user`
--
ALTER TABLE `authorize_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_postings`
--
ALTER TABLE `career_postings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_table_field`
--
ALTER TABLE `custom_table_field`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_info`
--
ALTER TABLE `page_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorize_user`
--
ALTER TABLE `authorize_user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `career_postings`
--
ALTER TABLE `career_postings`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `custom_table_field`
--
ALTER TABLE `custom_table_field`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `page_info`
--
ALTER TABLE `page_info`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
