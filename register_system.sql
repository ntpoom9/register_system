-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 10:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `edu_branch`
--

CREATE TABLE `edu_branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `level_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edu_branch`
--

INSERT INTO `edu_branch` (`branch_id`, `branch_name`, `level_id`, `type_id`, `faculty_id`) VALUES
(1, 'สาขาวิศวกรรมซอฟต์แวร์', 1, 1, 1),
(2, 'สาขาคอมพิวเตอร์ธุรกิจ', 1, 1, 1),
(3, 'สาขา3', 1, 1, 1),
(4, 'สาขา4', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `edu_faculty`
--

CREATE TABLE `edu_faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(255) NOT NULL,
  `level_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edu_faculty`
--

INSERT INTO `edu_faculty` (`faculty_id`, `faculty_name`, `level_id`, `type_id`) VALUES
(1, 'คณะวิทยาศาสตร์และเทคโนโลยี', 1, 1),
(2, 'คณะครุศาสตร์', 1, 1),
(3, 'คณะมนุษย์ศาสตร์และสังคมศาสตร์', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `edu_level`
--

CREATE TABLE `edu_level` (
  `level_id` int(11) NOT NULL,
  `level_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edu_level`
--

INSERT INTO `edu_level` (`level_id`, `level_name`) VALUES
(1, 'ปริญญาตรี'),
(2, 'ปริญญาโท'),
(3, 'ปริญญาเอก');

-- --------------------------------------------------------

--
-- Table structure for table `edu_type`
--

CREATE TABLE `edu_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `edu_type`
--

INSERT INTO `edu_type` (`type_id`, `type_name`, `level_id`) VALUES
(1, 'ภาคปกติ(ทั่วไป)', 1),
(2, 'ภาคกศ.พป.(เรียนวันอาทิตย์)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `auth_id` int(11) NOT NULL,
  `auth_fname` varchar(255) NOT NULL,
  `auth_lname` varchar(255) NOT NULL,
  `auth_idCard` varchar(13) NOT NULL,
  `auth_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`auth_id`, `auth_fname`, `auth_lname`, `auth_idCard`, `auth_password`) VALUES
(1, 'ณัฐภูมิ', 'พันธ์มี', '1730201363493', '$2y$10$yX0ZHjHM8cOUua/PQZjSme478nXXSCAcDH1KkZgUQ1dezEvC41GcC');

-- --------------------------------------------------------

--
-- Table structure for table `user_enroll`
--

CREATE TABLE `user_enroll` (
  `profile_id` int(11) NOT NULL,
  `fname_th` varchar(255) NOT NULL,
  `lname_th` varchar(255) NOT NULL,
  `fname_en` varchar(255) NOT NULL,
  `lname_en` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` datetime NOT NULL,
  `address` varchar(255) NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `idCard` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `old_school` varchar(255) NOT NULL,
  `old_edu` varchar(255) NOT NULL,
  `gpax_m6` double NOT NULL,
  `admission_date` datetime NOT NULL,
  `level_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_enroll`
--

INSERT INTO `user_enroll` (`profile_id`, `fname_th`, `lname_th`, `fname_en`, `lname_en`, `gender`, `birthday`, `address`, `telephone`, `idCard`, `email`, `old_school`, `old_edu`, `gpax_m6`, `admission_date`, `level_id`, `type_id`, `faculty_id`, `branch_id`) VALUES
(1, 'ณัฐภูมิ', 'พันธ์มี', 'Nattapoom', 'Punmee', 'ชาย', '2022-11-13 00:00:00', '96/1 ม.18', '0123456789', '1730201363493', 'nattapoom1@gmail.com', 'บอสโกพิทักษ์', 'ม.6', 3.21, '2022-11-27 00:00:00', 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `edu_branch`
--
ALTER TABLE `edu_branch`
  ADD PRIMARY KEY (`branch_id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `edu_faculty`
--
ALTER TABLE `edu_faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `edu_level`
--
ALTER TABLE `edu_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `edu_type`
--
ALTER TABLE `edu_type`
  ADD PRIMARY KEY (`type_id`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`auth_id`);

--
-- Indexes for table `user_enroll`
--
ALTER TABLE `user_enroll`
  ADD PRIMARY KEY (`profile_id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `type_id` (`type_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `edu_branch`
--
ALTER TABLE `edu_branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `edu_faculty`
--
ALTER TABLE `edu_faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `edu_level`
--
ALTER TABLE `edu_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `edu_type`
--
ALTER TABLE `edu_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `auth_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_enroll`
--
ALTER TABLE `user_enroll`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `edu_branch`
--
ALTER TABLE `edu_branch`
  ADD CONSTRAINT `edu_branch_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `edu_level` (`level_id`),
  ADD CONSTRAINT `edu_branch_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `edu_type` (`type_id`),
  ADD CONSTRAINT `edu_branch_ibfk_3` FOREIGN KEY (`faculty_id`) REFERENCES `edu_faculty` (`faculty_id`);

--
-- Constraints for table `edu_faculty`
--
ALTER TABLE `edu_faculty`
  ADD CONSTRAINT `edu_faculty_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `edu_level` (`level_id`),
  ADD CONSTRAINT `edu_faculty_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `edu_type` (`type_id`);

--
-- Constraints for table `edu_type`
--
ALTER TABLE `edu_type`
  ADD CONSTRAINT `edu_type_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `edu_level` (`level_id`);

--
-- Constraints for table `user_enroll`
--
ALTER TABLE `user_enroll`
  ADD CONSTRAINT `user_enroll_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `edu_level` (`level_id`),
  ADD CONSTRAINT `user_enroll_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `edu_type` (`type_id`),
  ADD CONSTRAINT `user_enroll_ibfk_3` FOREIGN KEY (`faculty_id`) REFERENCES `edu_faculty` (`faculty_id`),
  ADD CONSTRAINT `user_enroll_ibfk_4` FOREIGN KEY (`branch_id`) REFERENCES `edu_branch` (`branch_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
