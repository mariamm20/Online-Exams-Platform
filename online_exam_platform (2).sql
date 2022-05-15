-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 07:23 PM
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
(343, 140, 'alaa', 0),
(344, 140, 'lolla', 1),
(345, 140, 'lolo', 0),
(346, 140, 'loza', 0),
(347, 141, 'helmy', 1),
(348, 141, 'el sakka', 0),
(349, 141, 'karim', 0),
(350, 141, 'karara', 0),
(351, 142, 'True', 0),
(352, 142, 'False', 1),
(353, 143, 'True', 0),
(354, 143, 'False', 1),
(355, 144, 'kedaho', 0),
(356, 144, 'aw kedaho', 0),
(357, 144, '3aady', 1),
(358, 144, 'brahty', 0);

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
(14, 14, 'chapter one'),
(15, 15, 'data base fundamentals');

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
(5, 'alaa attia', 'alaaattia147@gmail.com', 'any thing', 'Accepted'),
(6, 'heba', 'hebanasser@gmail.com', 'all things', 'Rejected'),
(7, 'howida', 'howida@gmail.com', 'sdfghjkfvgbhnjmkgyhujkl', 'Accepted');

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
(16, 'General', 8),
(17, 'software department', 11);

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
  `duration` int(3) NOT NULL,
  `total_mark` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `subject_id`, `exam_name`, `exam_date`, `start_time`, `duration`, `total_mark`) VALUES
(9, 14, 'first exam', '2022-05-12', '13:00:00', 30, 20),
(10, 15, 'database exam', '2022-05-12', '17:00:00', 15, 25),
(11, 15, 'exam 4', '2022-05-18', '18:00:00', 45, 20);

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
(133, 9, 14, 1, 'choice', 'easy'),
(134, 9, 14, 2, 'choice', 'medium'),
(135, 9, 14, 3, 'choice', 'hard'),
(136, 10, 15, 4, 'true&false', 'easy'),
(137, 10, 15, 2, 'true&false', 'medium'),
(138, 10, 15, 1, 'true&false', 'hard'),
(139, 11, 15, 1, 'choice', 'easy'),
(140, 11, 15, 1, 'choice', 'medium'),
(141, 11, 15, 1, 'choice', 'hard');

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
(8, 'one'),
(11, 'two'),
(12, 'three');

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
(5, 'amr abohany', '1618120190100013', 'amr@gmail.com', '$2y$10$D7z4mi.2PCqiFfRXN50Qm.to3/tGPZzu1s5mA9J3gcnwPeLD0Sz3e', 'professor', 1, '2022-05-05 21:29:18', '2022-05-11 23:23:03'),
(6, 'reda mabrouk', '1618120190100041', 'reda@gnail.com', '$2y$10$gRFVPR7y0Qae6oe1kbKojOnJWTXwFOZuzfdlFoam6K4e3sOJ4AVHC', 'professor', 1, '2022-05-05 21:31:49', '2022-05-05 21:34:55'),
(8, 'amna mahmoad', '1618120190100099', 'amna@gmail.com', '$2y$10$ZTX/OYCC1HqcCGAmbsAp4eJqKag4HyNTNMO2HLnGdAldcTE8JkpXi', 'professor', 1, '2022-05-07 00:55:37', '2022-05-07 00:56:39'),
(9, 'alaa nasser', '1618120190100066', 'alaaattia147@gmail.com', '$2y$10$IXcn/eacGeOOzpb5uZcYgOjIbwIQn8Gn3AVZpu1uWtX0z1k4J/jwe', 'professor', 1, '2022-05-12 01:53:41', '2022-05-15 15:32:08');

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
(9, 14),
(9, 15);

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
(140, NULL, 14, 'what is your favourite name?', 'choice', 'hard', '2022-05-15 11:31:21'),
(141, NULL, 14, 'who is your favourite celebrity?', 'choice', 'medium', '2022-05-15 11:32:13'),
(142, NULL, 14, 'is it true to hurt people?', 'true&false', 'easy', '2022-05-15 11:32:44'),
(143, NULL, 14, 'is it true to love peole who don\'t love us?', 'true&false', 'hard', '2022-05-15 11:33:22'),
(144, NULL, 14, 'hont 3leek ezaay?', 'choice', 'medium', '2022-05-15 11:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `result` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_name`, `academic_id`, `email`, `password`, `level`, `department`, `role`, `created_at`, `login_at`, `level_id`, `dept_id`) VALUES
(9, 'alaa nasser', '1618120190100045', 'alaanasser2@gmail.com', '$2y$10$NdY8drKP8Iu7NY4knVY6Lu8efTDZ.a3J0gapmHlkUWzyfmycDqYoC', 'one', 'General', 'student', '2022-05-15 11:16:53', '2022-05-15 15:37:55', 8, 16),
(10, 'heba nasser', '1618120190100047', 'hebanasser@gmail.com', '$2y$10$Tb1KXYf/cmubp9PPPaEKm.FC78o9bCFb2AJa65yAJLPEguPKwIiz.', 'two', 'software department', 'student', '2022-05-15 15:08:15', '2022-05-15 15:23:44', 11, 17);

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
(12, 'information technology', 8, 16),
(13, 'privacy', 8, 16),
(14, 'digital circuits', 8, 16),
(15, 'data base', 11, 17);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=359;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exam_structure`
--
ALTER TABLE `exam_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subjects_ibfk_2` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
