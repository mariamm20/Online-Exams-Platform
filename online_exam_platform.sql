-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 09:56 PM
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
(437, 179, ' set of programs, documentation & configuration of data', 1),
(438, 179, 'set of programs', 0),
(439, 179, 'documentation and configuration of data', 0),
(440, 179, 'None of the mentioned', 0),
(441, 180, 'Designing a software', 0),
(442, 180, 'Testing a software', 0),
(443, 180, 'Application of engineering principles to the design a software', 1),
(444, 180, 'None of the above', 0),
(445, 181, 'Margaret Hamilton', 0),
(446, 181, 'Watts S. Humphrey', 1),
(447, 181, 'Alan Turing', 0),
(448, 181, 'Boris Beizer', 0),
(449, 182, 'Simplicity', 0),
(450, 182, 'Accessibility', 0),
(451, 182, 'Modularity', 0),
(452, 182, ' All of the above', 1),
(453, 183, 'Validation', 0),
(454, 183, 'Specification', 0),
(455, 183, 'Development', 0),
(456, 183, 'Dependence', 1),
(457, 184, 'project management that emphasizes incremental progress', 1),
(458, 184, 'project management that emphasizes decremental progress', 0),
(459, 184, 'project management that emphasizes neutral progress', 0),
(460, 184, 'project management that emphasizes no progress', 0),
(461, 185, 'True', 1),
(462, 185, 'False', 0),
(463, 186, 'True', 0),
(464, 186, 'False', 1),
(465, 187, 'True', 0),
(466, 187, 'False', 1),
(467, 188, 'True', 1),
(468, 188, 'False', 0),
(469, 189, 'True', 0),
(470, 189, 'False', 1),
(471, 190, 'True', 0),
(472, 190, 'False', 1),
(473, 191, 'An Algorithm', 1),
(474, 191, 'A Plan', 0),
(475, 191, 'A List', 0),
(476, 191, 'Sequential Structure', 0),
(477, 192, 'Quality', 1),
(478, 192, 'Complexity', 0),
(479, 192, 'Efficiency', 0),
(480, 192, 'Accuracy', 0),
(481, 193, 'Transformation of a textual problem description into a graphic model', 0),
(482, 193, 'Functional decomposition', 0),
(483, 193, 'All the functions represented in the DFD are mapped to a module structure', 1),
(484, 193, ' All of the mentioned', 0),
(485, 194, 'For strategic purposes', 0),
(486, 194, 'To minimize the development schedule.', 0),
(487, 194, 'To evaluate the ongoing project\'s quality on a daily basis', 0),
(488, 194, 'To minimize the development schedule and evaluate the ongoing project\'s quality on a daily basis', 1),
(489, 195, 'Function point analysis', 0),
(490, 195, 'Control Chart', 0),
(491, 195, 'DRE (Defect Removal Efficiency)', 1),
(492, 195, 'None of the above', 0),
(493, 196, 'Change management', 0),
(494, 196, 'System management', 0),
(495, 196, 'Internship management', 1),
(496, 196, 'Version management', 0);

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
(21, 20, 'chapter one'),
(22, 20, 'chapter two'),
(23, 20, 'chapter three');

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
(9, 'alaa attia', 'alaaattia147@gmail.com', 'i have a problem in my life', 'Rejected'),
(10, 'alaa attia', 'alaaattia147@gmail.com', 'dfghjkl', 'Rejected'),
(11, 'amr ali', 'amr@gmail.com', 'cgjvhkbjlnkml/', NULL),
(12, 'amr ali', 'amr@gmail.com', 'cgjvhkbjlnkml/', NULL),
(13, 'alaa attia', 'alaaattia147@gmail.com', 'thgjfvhkjblkn;lm', NULL),
(14, 'heba nasser', 'heba@gmail.com', 'srdtfyguhlij;o', NULL);

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
(22, 'IS', 15),
(23, 'IT', 15);

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

-- --------------------------------------------------------

--
-- Table structure for table `ids`
--

CREATE TABLE `ids` (
  `academic_id` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ids`
--

INSERT INTO `ids` (`academic_id`) VALUES
('1618120190100097');

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
(10, 'amr ali', '1618151416121454', 'amr@gmail.com', '$2y$10$/fe0rxhpRN0Rh1Z6XznTRuxIErUyrJrIJudQJjr9/10pU8WIFoZsC', 'professor', 1, '2022-05-16 15:47:37', '2022-05-24 19:54:44', 'IMG_0471.JPG'),
(11, 'reda mabrouk', '1618129105487968', 'reda@gmail.com', '$2y$10$bt4HX8r2Bw/VIeXDOc15A./Fbk3miur1bLMxo5gzvOFrl6JukuzFu', 'professor', 1, '2022-05-23 09:39:27', '2022-05-23 09:41:18', ''),
(12, 'admin', '1618129105487941', 'admin@gmail.com', '$2y$10$P8ENR/p/FHF910Vk06ibBeigT94LWtUHcSGZfk6cBCeUcLVrvftC.', 'admin', 1, '2022-05-24 09:14:15', '2022-05-24 19:54:12', ''),
(13, 'mai ramadan', '1618129105487988', 'mai@gmail.com', '$2y$10$OLArXhtGbRcVHrUJHGtJo.vwgkKtV.piG/GNlspVGa2u1GBhk/IhG', 'professor', NULL, '2022-05-24 12:30:01', '2022-05-24 12:30:01', '');

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
(10, 20);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `chapter_id` int(11) NOT NULL,
  `question_text` text NOT NULL,
  `type` varchar(20) NOT NULL,
  `difficulty` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `chapter_id`, `question_text`, `type`, `difficulty`, `created_at`) VALUES
(179, 21, 'Software is defined as ___________', 'choice', 'easy', '2022-05-24 11:08:10'),
(180, 21, 'What is Software Engineering?', 'choice', 'medium', '2022-05-24 11:09:08'),
(181, 21, 'Who is the father of Software Engineering?', 'choice', 'hard', '2022-05-24 11:10:20'),
(182, 21, 'What are the features of Software Code?', 'choice', 'easy', '2022-05-24 11:11:14'),
(183, 21, '_________ is a software development activity that is not a part of software processes.', 'choice', 'medium', '2022-05-24 11:12:19'),
(184, 21, 'Define Agile scrum methodology.', 'choice', 'hard', '2022-05-24 11:13:30'),
(185, 21, 'Utility software is system software designed to help analyze, configure, optimize or maintain a computer.', 'true&false', 'easy', '2022-05-24 11:28:06'),
(186, 21, 'Application software focuses on how the computer operates.', 'true&false', 'medium', '2022-05-24 11:28:29'),
(187, 21, 'The productivity of a software engineer can be reduced by using a 4GT.', 'true&false', 'hard', '2022-05-24 11:29:52'),
(188, 21, 'Software maintenance costs are expensive in contrast to software development.', 'true&false', 'easy', '2022-05-24 11:30:21'),
(189, 21, 'Model-driven engineering is nothing but a theoretical concept. It can never be transmuted into a working/executable code', 'true&false', 'medium', '2022-05-24 11:30:53'),
(190, 21, 'code and fix is an agile method?', 'true&false', 'hard', '2022-05-24 11:32:23'),
(191, 22, 'What is the name of the approach that follows step-by-step instructions for solving a problem?', 'choice', 'easy', '2022-05-24 11:35:39'),
(192, 22, 'Which of the following word correctly summarized the importance of software design?', 'choice', 'medium', '2022-05-24 11:36:54'),
(193, 22, ' __________ is not considered as an activity of Structured Analysis (SA).', 'choice', 'hard', '2022-05-24 11:37:52'),
(194, 22, ' What is the main intent of project metrics?', 'choice', 'hard', '2022-05-24 11:39:04'),
(195, 22, 'Name the graphical practice that depicts the meaningful changes that occurred in metrics data.', 'choice', 'easy', '2022-05-24 11:40:04'),
(196, 22, 'Which of the following is an incorrect activity for the configuration management of a software system?', 'choice', 'medium', '2022-05-24 11:41:24');

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
(11, 'alaa attia', '1618129105487965', 'alaaattia147@gmail.com', '$2y$10$zaLAYl8.oK/kyqJAMvG5HuuezNscl92XJiTNe9.Q/WLYOnXOEIk0y', 'three', 'SE', 'student', '2022-05-16 15:40:39', '2022-05-24 19:30:02', 15, 20, 'lolla2.jpg'),
(12, 'mariem mohamed', '1618129105487961', 'mero@gmail.com', '$2y$10$d0.wXMmfunfpjlAHGrmEBuAXF1EeER/y.9Am39losQ3rV7aZlBkLa', 'one', 'General', 'student', '2022-05-23 11:52:28', '2022-05-23 11:52:28', 13, 18, 'student.png'),
(13, 'heba nasser', '1618129105487985', 'heba@gmail.com', '$2y$10$l0nCjiwlf2RgwXaEzhQYTOVQOW8AWbLx52ZDYvGKu7O7Kqm/QtWeG', 'three', 'SE', 'student', '2022-05-24 12:02:21', '2022-05-24 12:06:47', 15, 20, 'IMG_0462.JPG');

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
(20, 'Software Engineering', 15, 20);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=497;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `exam_structure`
--
ALTER TABLE `exam_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_answers`
--
ALTER TABLE `student_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
