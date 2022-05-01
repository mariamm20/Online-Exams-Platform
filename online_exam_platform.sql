-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 06:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam_platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(100) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `dept_name`, `level_id`) VALUES
(1, 'SE', 1),
(2, 'CS', 2);

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level_name`) VALUES
(1, 'one'),
(2, 'two');

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `academic_id` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(70) NOT NULL,
  `role` varchar(15) NOT NULL,
  `state` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `login_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`id`, `user_name`, `academic_id`, `email`, `password`, `role`, `state`, `created_at`, `login_at`) VALUES
(1, 'amr', '16181201010007', 'amr@gmail.com', '12345', 'prof', 1, '2022-05-01 02:06:26', '2022-05-01 02:06:26'),
(2, 'reda', '161815456872', 'reda@gmail.com', '12345', 'prof', 1, '2022-05-01 02:06:26', '2022-05-01 02:06:26');

-- --------------------------------------------------------

--
-- Table structure for table `professor_subjects`
--

CREATE TABLE `professor_subjects` (
  `prof_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professor_subjects`
--

INSERT INTO `professor_subjects` (`prof_id`, `subject_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `academic_id` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(70) NOT NULL,
  `level` varchar(20) NOT NULL,
  `department` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `login_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `level_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `level_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `level_id`, `dept_id`) VALUES
(1, 'software', 1, 1),
(2, 'dat', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor_subjects`
--
ALTER TABLE `professor_subjects`
  ADD KEY `prof_id` (`prof_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `level_id` (`level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `professor_subjects`
--
ALTER TABLE `professor_subjects`
  ADD CONSTRAINT `professor_subjects_ibfk_1` FOREIGN KEY (`prof_id`) REFERENCES `professors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `professor_subjects_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
