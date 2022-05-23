-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 09:28 PM
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
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `is_correct` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `is_correct`) VALUES
(375, 158, '5', 0),
(376, 158, '2', 1),
(377, 158, '3', 0),
(378, 158, '4', 0),
(379, 159, 'supportives', 0),
(380, 159, 'disinterested', 0),
(381, 159, 'cvbnm,', 0),
(382, 159, 'process oriented', 1),
(383, 160, 'connective', 0),
(384, 160, 'contemplative', 0),
(385, 160, 'collaborative', 1),
(386, 160, 'connectivity', 0),
(387, 161, 'True', 1),
(388, 161, 'False', 0),
(389, 162, 'True', 1),
(390, 162, 'False', 0),
(391, 163, 'True', 0),
(392, 163, 'False', 1),
(393, 164, 'True', 0),
(394, 164, 'False', 1),
(395, 165, 'True', 1),
(396, 165, 'False', 0),
(397, 166, 'True', 0),
(398, 166, 'False', 1),
(399, 167, 'True', 0),
(400, 167, 'False', 1),
(401, 168, 'plan driven', 0),
(402, 168, 'structured', 0),
(403, 168, 'agile', 0),
(404, 168, 'both a and b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `chapter_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chapters`
--

INSERT INTO `chapters` (`id`, `subject_id`, `chapter_name`) VALUES
(17, 18, 'chapter one'),
(18, 18, 'chapter two');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `state` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`, `state`) VALUES
(8, 'amr abohany', 'amr@gmail.com', 'this site is beautiful', 'Accepted'),
(9, 'alaa attia', 'alaaattia147@gmail.com', 'i have a problem in my life', NULL),
(10, 'alaa attia', 'alaaattia147@gmail.com', 'dfghjkl', NULL);

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
(18, 'General', 13),
(19, 'General', 14),
(20, 'SE', 15),
(21, 'CS', 15),
(22, 'IS', 15);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `exam_date` date DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `total_mark` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `subject_id`, `exam_name`, `exam_date`, `start_time`, `end_time`, `total_mark`) VALUES
(24, 18, 'CS', '2022-05-21', '21:58:00', '00:00:00', 6),
(25, 18, 'exam 3', '2022-05-23', '11:00:00', '11:30:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `exam_structure`
--

CREATE TABLE `exam_structure` (
  `id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `num_of_questions` int(5) NOT NULL,
  `type` varchar(25) NOT NULL,
  `difficulty` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_structure`
--

INSERT INTO `exam_structure` (`id`, `exam_id`, `chapter_id`, `num_of_questions`, `type`, `difficulty`) VALUES
(184, 24, 17, 1, 'true&false', 'easy'),
(185, 24, 17, 1, 'true&false', 'medium'),
(186, 24, 17, 1, 'true&false', 'hard'),
(187, 25, 17, 1, 'true&false', 'easy'),
(188, 25, 17, 1, 'true&false', 'medium'),
(189, 25, 17, 1, 'true&false', 'hard');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level_name` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level_name`) VALUES
(13, 'one'),
(14, 'two'),
(15, 'three');

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
  `login_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`id`, `user_name`, `academic_id`, `email`, `password`, `role`, `state`, `created_at`, `login_at`, `image`) VALUES
(10, 'amr ali', '1618151416121454', 'amr@gmail.com', '$2y$10$/fe0rxhpRN0Rh1Z6XznTRuxIErUyrJrIJudQJjr9/10pU8WIFoZsC', 'professor', 1, '2022-05-16 15:47:37', '2022-05-23 18:50:53', 'R.jpg'),
(11, 'reda mabrouk', '1618129105487968', 'reda@gmail.com', '$2y$10$bt4HX8r2Bw/VIeXDOc15A./Fbk3miur1bLMxo5gzvOFrl6JukuzFu', 'professor', 1, '2022-05-23 09:39:27', '2022-05-23 09:41:18', '');

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
(10, 18);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `chapter_id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `difficulty` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `subject_id`, `chapter_id`, `question_text`, `type`, `difficulty`, `created_at`) VALUES
(158, NULL, 17, 'how many types of requirements?', 'choice', 'easy', '2022-05-16 16:12:39'),
(159, NULL, 17, 'is a charachteristic of an agile leader?', 'choice', 'meduim', '2022-05-16 16:16:07'),
(160, NULL, 17, 'which of the following is the working calture of an agile method?', 'choice', 'hard', '2022-05-16 16:18:05'),
(161, NULL, 17, 'is there any difference betweem incremental and iterative development?', 'true&false', 'meduim', '2022-05-16 16:19:14'),
(162, NULL, 17, 'waterfall model is useful in large projects?', 'true&false', 'medium', '2022-05-16 16:19:55'),
(163, NULL, 17, 'code and fix is an agile development model?', 'true&false', 'hard', '2022-05-16 16:21:10'),
(164, NULL, 17, 'is agile useless in large projects?', 'true&false', 'medium', '2022-05-18 06:45:33'),
(165, NULL, 18, 'does sc refer to softwre construction?', 'true&false', 'easy', '2022-05-20 05:41:22'),
(166, NULL, 17, 'is it write for your code to be not clean?', 'true&false', 'medium', '2022-05-20 06:06:35'),
(167, NULL, 17, 'waterfall methodology is good for small projects?', 'true&false', 'easy', '2022-05-23 09:00:50'),
(168, NULL, 17, 'waterfall methodology is a ......?', 'choice', 'medium', '2022-05-23 09:02:30');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `result` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id`, `exam_id`, `result`) VALUES
(27, 11, 24, 6),
(28, 11, 25, 0);

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
  `dept_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'student.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_name`, `academic_id`, `email`, `password`, `level`, `department`, `role`, `created_at`, `login_at`, `level_id`, `dept_id`, `image`) VALUES
(11, 'alaa attia', '1618129105487965', 'alaaattia147@gmail.com', '$2y$10$zaLAYl8.oK/kyqJAMvG5HuuezNscl92XJiTNe9.Q/WLYOnXOEIk0y', 'three', 'SE', 'student', '2022-05-16 15:40:39', '2022-05-23 18:49:06', 15, 20, 'OIP.jpg'),
(12, 'mariem mohamed', '1618129105487961', 'mero@gmail.com', '$2y$10$d0.wXMmfunfpjlAHGrmEBuAXF1EeER/y.9Am39losQ3rV7aZlBkLa', 'one', 'General', 'student', '2022-05-23 11:52:28', '2022-05-23 11:52:28', 13, 18, 'student.png');

-- --------------------------------------------------------

--
-- Table structure for table `student_answers`
--

CREATE TABLE `student_answers` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_answers`
--

INSERT INTO `student_answers` (`id`, `student_id`, `exam_id`, `question_id`, `answer_id`) VALUES
(148, 11, 24, 161, 387),
(149, 11, 24, 166, 398),
(150, 11, 24, 163, 392);

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
(16, 'privacy', 13, 18),
(17, 'data base', 14, 19),
(18, 'software construction', 15, 20),
(19, 'software requirements', 15, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_id` (`question_id`);

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_id` (`level_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `exam_structure`
--
ALTER TABLE `exam_structure`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `chapter_id` (`chapter_id`);

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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `chapter_id` (`chapter_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `exam_id` (`exam_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `student_answers`
--
ALTER TABLE `student_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `exam_id` (`exam_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `answer_id` (`answer_id`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `exam_structure`
--
ALTER TABLE `exam_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=190;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student_answers`
--
ALTER TABLE `student_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_structure`
--
ALTER TABLE `exam_structure`
  ADD CONSTRAINT `exam_structure_ibfk_1` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_structure_ibfk_2` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `professor_subjects`
--
ALTER TABLE `professor_subjects`
  ADD CONSTRAINT `professor_subjects_ibfk_1` FOREIGN KEY (`prof_id`) REFERENCES `professors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `professor_subjects_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`chapter_id`) REFERENCES `chapters` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_answers`
--
ALTER TABLE `student_answers`
  ADD CONSTRAINT `student_answers_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_answers_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_answers_ibfk_3` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_answers_ibfk_4` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE;

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
