-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 08:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `activity_id` int(15) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `action` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`activity_id`, `name`, `date`, `action`) VALUES
(6, 'selam m', '2022-12-21 05:33:11', 'add device name keboard '),
(7, 'selam m', '2022-12-21 05:38:10', 'add device name pc '),
(8, 'jeri', '2022-12-22 08:43:32', ' lab Asistant delete device name 3 '),
(9, 'jeri', '2022-12-22 08:43:44', ' lab Asistant delete device name 4 '),
(10, 'jeri', '2022-12-22 08:46:32', ' lab Asistant delete device name  '),
(11, 'jeri', '2022-12-22 08:52:28', ' lab Asistant delete device name 12 '),
(12, 'jeri', '2022-12-22 13:55:55', ' lab Asistant delete device name 11 '),
(13, 'jeri', '2022-12-24 03:50:05', 'update device name keboard  '),
(14, 'jeri', '2022-12-24 03:54:27', 'update device name keboard  '),
(15, 'jeri', '2022-12-24 03:57:41', 'update device name pc  '),
(16, 'jeri', '2022-12-24 04:01:02', 'update device name keboard  '),
(17, 'jeri', '2022-12-24 04:01:27', 'update device name keboard  '),
(18, 'jeri', '2022-12-24 04:05:06', 'update device name keboard  '),
(19, 'jeri', '2022-12-24 04:09:28', 'update device name keboard  '),
(20, 'jeri', '2022-12-24 04:11:24', 'update device name keboard  '),
(21, 'jeri', '2022-12-24 04:13:13', 'update device name keboard  '),
(22, 'jeri', '2022-12-24 04:15:01', 'update device name keboard '),
(23, 'jeri', '2022-12-24 04:18:10', 'update device name keboard '),
(24, 'jeri', '2022-12-24 04:18:34', 'update device name keboard '),
(25, 'jeri', '2022-12-24 04:21:25', 'update device name keboard '),
(26, 'jeri', '2022-12-24 04:22:31', 'update device name keboard  '),
(27, 'jeri', '2022-12-24 04:23:35', 'update device name keboard  '),
(28, 'jeri', '2022-12-24 04:24:10', 'update device name keboard  '),
(29, 'jeri', '2022-12-24 04:25:13', 'update device name keboard   '),
(30, 'jeri', '2022-12-24 04:31:20', 'update device name keboard    '),
(31, 'jeri', '2022-12-24 04:32:20', 'update device name keboard     '),
(32, 'jeri', '2022-12-24 04:44:22', 'update device name keboard      '),
(33, 'jeri', '2022-12-24 04:52:38', 'update device name keboard       '),
(34, 'jeri', '2022-12-24 04:58:12', 'update device name keboard        '),
(35, 'jeri', '2022-12-24 05:03:17', 'update device name keboard         '),
(36, 'jeri', '2022-12-24 05:05:02', 'update device name keboard          '),
(37, 'jeri', '2022-12-24 05:07:30', 'update device name keboard           '),
(38, 'jeri', '2022-12-24 05:08:42', 'update device name keboard            '),
(39, 'jeri', '2022-12-24 05:09:16', 'update device name keboard             '),
(40, 'jeri', '2022-12-24 05:16:54', 'update device name keboard              '),
(41, 'jeri', '2022-12-24 05:17:19', 'update device name keboard              '),
(42, 'jeri', '2022-12-24 05:18:23', 'update device name keboard              '),
(43, 'jeri', '2022-12-24 05:19:04', 'update device name keboard              '),
(44, 'jeri', '2022-12-24 05:21:57', 'update device name keboard              '),
(45, 'jeri', '2022-12-24 05:22:46', 'update device name keboard              '),
(46, 'jeri', '2022-12-24 05:23:02', ' lab Asistant delete device id 5 '),
(47, 'jeri', '2022-12-24 05:23:46', 'update device name keboard              '),
(48, 'jeri', '2022-12-24 05:24:12', 'update device name keboard               '),
(49, 'mani', '2022-12-24 11:21:22', 'admin delete user id 9 '),
(50, 'mani', '2022-12-24 11:25:04', 'admin delete user id '),
(51, 'sola', '2022-12-24 15:19:16', 'submit assignment title homwork tow'),
(52, 'admin', '2022-12-30 05:06:32', 'add course name programing'),
(53, 'admin', '2022-12-30 05:08:41', 'admin delete user id 1 '),
(54, 'admin', '2022-12-30 05:37:28', 'add course name introduction to programming'),
(55, 'admin', '2022-12-30 06:01:00', 'add course name programing'),
(56, 'admin', '2022-12-30 06:02:31', 'add course name programing'),
(57, 'admin', '2022-12-30 06:12:17', 'add course name programing'),
(58, 'admin', '2022-12-30 06:12:28', 'add course name programing'),
(59, 'admin', '2022-12-30 06:14:30', 'add course name programing'),
(60, 'admin', '2022-12-30 06:40:25', 'admin delete user id 21 '),
(61, 'temi', '2022-12-30 06:43:54', 'submit assignment title individual assignment'),
(62, 'solam    ', '2022-12-30 08:51:50', 'give assignment  result 45 '),
(63, 'solam    ', '2022-12-30 08:58:04', 'give assignment  result 3 '),
(64, 'solam    ', '2022-12-30 10:04:32', 'give assignment  result 3 '),
(65, 'solam    ', '2022-12-30 10:17:04', 'give assignment  result 10 '),
(66, 'solam    ', '2022-12-30 10:20:30', 'give assignment  result 10 '),
(67, 'solam    ', '2022-12-30 10:21:38', 'give assignment  result 10 '),
(68, 'solam    ', '2022-12-30 10:21:47', 'give assignment  result 3 '),
(69, 'solam    ', '2022-12-30 10:21:58', 'give assignment  result 45 '),
(70, 'solam    ', '2022-12-30 10:23:10', 'give assignment  result 3 '),
(71, 'solam    ', '2022-12-30 10:24:16', 'give assignment  result 15 '),
(72, 'solam    ', '2022-12-30 11:07:21', 'give assignment  result  programing'),
(73, 'solam    ', '2022-12-30 11:08:18', 'give assignment  result  programing'),
(74, 'solam    ', '2022-12-30 11:10:34', 'give assignment  result  programing'),
(75, 'admin', '2022-12-30 11:13:49', 'add course name AI'),
(76, 'solam    ', '2022-12-30 11:14:28', 'give assignment  result  AI'),
(77, 'solam    ', '2022-12-30 11:41:27', 'give assignment  result  AI'),
(78, 'solam    ', '2022-12-30 11:42:53', 'give assignment  result  programing'),
(79, 'solam    ', '2022-12-30 11:43:55', 'give assignment  result  programing'),
(80, 'solam    ', '2022-12-30 11:44:24', 'give assignment  result  programing'),
(81, 'solam    ', '2022-12-30 11:45:11', 'give assignment  result  AI'),
(82, 'solam    ', '2022-12-30 11:55:46', 'give assignment  result  programing'),
(83, 'solam    ', '2022-12-30 11:58:10', 'give assignment  result  programing'),
(84, 'solam    ', '2022-12-30 12:09:50', 'give assignment  result  programing');

-- --------------------------------------------------------

--
-- Table structure for table `aresult`
--

CREATE TABLE `aresult` (
  `rid` int(100) NOT NULL,
  `specialization` varchar(500) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `marks` int(100) NOT NULL,
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aresult`
--

INSERT INTO `aresult` (`rid`, `specialization`, `course_name`, `roll`, `marks`, `description`) VALUES
(13, 'CS&SE ', 'programing', ' CSE_362241_23', 34, 'yes3'),
(14, 'CS&SE ', 'AI', ' CSE_105878_24', 23, 'pum'),
(15, 'CS&SE ', 'programing', ' CSE_362241_23', 5, 'hh'),
(16, 'CS&SE ', 'programing', ' CSE_362241_23', 34, 'yop'),
(17, 'CS&SE ', 'programing', ' CSE_362241_23', 5, 'rrrr');

-- --------------------------------------------------------

--
-- Table structure for table `assesment`
--

CREATE TABLE `assesment` (
  `AS_id` int(100) NOT NULL,
  `course_name` varchar(300) NOT NULL,
  `specialization` varchar(20) NOT NULL,
  `sgroup` varchar(100) NOT NULL,
  `B_year` varchar(100) DEFAULT NULL,
  `B_session` varchar(100) NOT NULL,
  `assesment_name` varchar(1000) DEFAULT NULL,
  `teacher_name` varchar(100) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `duDate` date DEFAULT NULL,
  `lastSubDate` date DEFAULT NULL,
  `document` text NOT NULL,
  `marks` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assesment`
--

INSERT INTO `assesment` (`AS_id`, `course_name`, `specialization`, `sgroup`, `B_year`, `B_session`, `assesment_name`, `teacher_name`, `dates`, `duDate`, `lastSubDate`, `document`, `marks`) VALUES
(33, 'programing', 'CS&SE', '6', '5th', '2010', 'this is it', 'solomon', '2022-12-30', '2023-01-03', '2023-01-07', ' problem/IRJET-V7I2283.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `ass_id` int(20) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `upload_document` text NOT NULL,
  `upload_document2` text NOT NULL,
  `marks` text NOT NULL,
  `upload_date` varchar(100) NOT NULL,
  `assessment_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`ass_id`, `title`, `description`, `upload_document`, `upload_document2`, `marks`, `upload_date`, `assessment_id`, `email`) VALUES
(2, 'yya', ' nno', 'Assignment_doc/solomon mekonnen 11910.docx', '', '15', '2022/12/19', '10', 'as@gmail.com'),
(3, 'fra', ' dgds', 'Assignment_doc/solomon mekonnen 11910.docx', '', '15', '2022/12/19', '9', 'as@gmail.com'),
(4, 'boo', ' baba', 'Assignment_doc/lecture04-s13 sol.pdf', '', '15', '2022/12/20', '16', 'as@gmail.com'),
(5, 'homwork tow', ' teacher this assigment is so hard ', 'Assignment_doc/chap-3-large-scale-propagation.pdf', '', '15', '2022/12/25', '17', 'mcode2990@gmail.com'),
(6, 'individual assignment', ' this is my individual assignment', 'Assignment_doc/20221115_083017.jpg', '', '15', '2022/12/30', '33', 'temi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_report`
--

CREATE TABLE `assignment_report` (
  `Rp_id` int(11) NOT NULL,
  `title` int(11) DEFAULT NULL,
  `upload_document` varchar(2000) DEFAULT NULL,
  `upload_document1` varchar(2000) DEFAULT NULL,
  `upload_document2` varchar(2000) DEFAULT NULL,
  `upload_date` date DEFAULT NULL,
  `assesment_id` int(20) NOT NULL,
  `reportStatus` varchar(500) DEFAULT NULL,
  `processignStatus` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `co_id` int(15) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `credit` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`co_id`, `course_code`, `course_name`, `type`, `year`, `credit`) VALUES
(7, 'CT-1213', 'programing', 'Theory and lab', '1-1', 3),
(8, 'CT-3123', 'AI', 'Theory and lab', 'select', 4);

-- --------------------------------------------------------

--
-- Table structure for table `issue_device`
--

CREATE TABLE `issue_device` (
  `rol_as` enum('0','1','2','3') NOT NULL,
  `Did` int(100) NOT NULL,
  `approve` varchar(300) NOT NULL,
  `issue` date NOT NULL,
  `dev_return` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_device`
--

INSERT INTO `issue_device` (`rol_as`, `Did`, `approve`, `issue`, `dev_return`) VALUES
('3', 6, 'yes', '2022-12-24', '2022-12-31'),
('3', 7, '', '0000-00-00', '0000-00-00'),
('3', 6, 'yes', '2022-12-24', '2022-12-31'),
('3', 10, '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `laba`
--

CREATE TABLE `laba` (
  `tid` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `troll` varchar(100) NOT NULL,
  `labn` varchar(100) NOT NULL,
  `user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laba`
--

INSERT INTO `laba` (`tid`, `fname`, `lname`, `troll`, `labn`, `user`) VALUES
(11, 'edel', 'lab', 'CSE_350335_11', 'lab2', 40);

-- --------------------------------------------------------

--
-- Table structure for table `stdevice`
--

CREATE TABLE `stdevice` (
  `Did` int(11) NOT NULL,
  `dev_name` varchar(100) NOT NULL,
  `dev_brand` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `dev_type` varchar(100) NOT NULL,
  `dev_modal` varchar(100) NOT NULL,
  `dev_desc` varchar(1000) NOT NULL,
  `time` date NOT NULL,
  `labn` varchar(100) NOT NULL,
  `Lab_asis_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stdevice`
--

INSERT INTO `stdevice` (`Did`, `dev_name`, `dev_brand`, `quantity`, `status`, `dev_type`, `dev_modal`, `dev_desc`, `time`, `labn`, `Lab_asis_name`) VALUES
(6, 'keboard             ', 'Acer', 1, 'available', 'old', 'model12', 'yep  ', '2022-12-24', 'lab5', 'mekdi '),
(7, 'keboard            ', 'other', 8, 'select', 'select', 'model14', 'z8  uy       ', '2022-12-24', 'labttt      ', 'mekdiddd          '),
(8, 'keboard            ', 'other', 8, 'select', 'select', 'mod', 'z8  uy       ', '2022-12-24', 'labttt      ', 'mekdiddd          '),
(9, 'keboard            ', 'Hp', 8, 'select', 'select', 'el12', 'z8  uy       ', '2022-12-24', 'labttt      ', 'mekdiddd          '),
(10, 'keboard              ', 'other', 7, 'select', 'select', 'model2', 'yaaa ', '0000-00-00', 'lab5    ', 'mekdi    ');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `tid` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `Troll` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`tid`, `fname`, `lname`, `Troll`, `type`, `qualification`, `course`, `status`, `user`) VALUES
(9, 'solomon', 'S', 'CSE_754207_9', 'Lecturer', 'ms', 'DIP....', 'Present', 39);

-- --------------------------------------------------------

--
-- Table structure for table `uam`
--

CREATE TABLE `uam` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `rol_as` enum('0','1','2','3') NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uam`
--

INSERT INTO `uam` (`id`, `name`, `email`, `rol_as`, `password`) VALUES
(1, 'admin', 'admin@gmail.com     ', '0', '34e6d02a30a3e1b14359f83581bf16f9'),
(13, 'solam    ', 'as@gmail.com     ', '1', '34e6d02a30a3e1b14359f83581bf16f9'),
(29, 'mekedi', 'labA@gmail.com     ', '2', '34e6d02a30a3e1b14359f83581bf16f9'),
(36, 'solam    ', 'as@gmail.com     ', '2', '34e6d02a30a3e1b14359f83581bf16f9'),
(39, 'Tsolomon', 'techer@gmail.com', '1', '34e6d02a30a3e1b14359f83581bf16f9'),
(40, 'edelawit', 'labAsis@gmail.com', '2', '34e6d02a30a3e1b14359f83581bf16f9'),
(41, 'solomon', 'SOL@gmail.com', '3', '34e6d02a30a3e1b14359f83581bf16f9'),
(43, 'temi', 'temi@gmail.com', '3', '34e6d02a30a3e1b14359f83581bf16f9'),
(44, 'jos', 'jos@gmail.com', '3', '34e6d02a30a3e1b14359f83581bf16f9');

-- --------------------------------------------------------

--
-- Table structure for table `usera`
--

CREATE TABLE `usera` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `roll` varchar(300) NOT NULL,
  `B_session` varchar(100) NOT NULL,
  `B_year` varchar(100) NOT NULL,
  `sgroup` varchar(100) NOT NULL,
  `specialization` varchar(20) NOT NULL,
  `user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usera`
--

INSERT INTO `usera` (`id`, `fname`, `lname`, `roll`, `B_session`, `B_year`, `sgroup`, `specialization`, `user`) VALUES
(23, 'kebede', 'temam', 'CSE_362241_23', '2010', '5th ', '6', 'CS&SE', 43),
(24, 'kends', 'yosef', 'CSE_105878_24', '2010', '5th', '7', 'CS&SE', 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `aresult`
--
ALTER TABLE `aresult`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `assesment`
--
ALTER TABLE `assesment`
  ADD PRIMARY KEY (`AS_id`);

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`ass_id`);

--
-- Indexes for table `assignment_report`
--
ALTER TABLE `assignment_report`
  ADD PRIMARY KEY (`Rp_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `issue_device`
--
ALTER TABLE `issue_device`
  ADD KEY `Did` (`Did`);

--
-- Indexes for table `laba`
--
ALTER TABLE `laba`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `laba_ibfk_1` (`user`);

--
-- Indexes for table `stdevice`
--
ALTER TABLE `stdevice`
  ADD PRIMARY KEY (`Did`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `uam`
--
ALTER TABLE `uam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usera`
--
ALTER TABLE `usera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `activity_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `aresult`
--
ALTER TABLE `aresult`
  MODIFY `rid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `assesment`
--
ALTER TABLE `assesment`
  MODIFY `AS_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `ass_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `assignment_report`
--
ALTER TABLE `assignment_report`
  MODIFY `Rp_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `co_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `laba`
--
ALTER TABLE `laba`
  MODIFY `tid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `stdevice`
--
ALTER TABLE `stdevice`
  MODIFY `Did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `tid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `uam`
--
ALTER TABLE `uam`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `usera`
--
ALTER TABLE `usera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issue_device`
--
ALTER TABLE `issue_device`
  ADD CONSTRAINT `issue_device_ibfk_1` FOREIGN KEY (`Did`) REFERENCES `stdevice` (`Did`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`user`) REFERENCES `uam` (`id`);

--
-- Constraints for table `usera`
--
ALTER TABLE `usera`
  ADD CONSTRAINT `usera_ibfk_1` FOREIGN KEY (`user`) REFERENCES `uam` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
