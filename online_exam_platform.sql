-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 09:49 PM
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
(496, 196, 'Version management', 0),
(497, 197, 'True', 1),
(498, 197, 'False', 0),
(499, 198, 'True', 1),
(500, 198, 'False', 0),
(501, 199, 'Builder Pattern', 0),
(502, 199, 'Bridge Pattern', 0),
(503, 199, 'Prototype Pattern', 1),
(504, 199, ' Filter Pattern', 0),
(505, 200, 'Proxy Pattern', 0),
(506, 200, 'Chain of responsibilty Pattern', 0),
(507, 200, 'Command Pattern', 0),
(508, 200, 'Interpreter Pattern', 1),
(509, 201, 'In this pattern, a class behavior changes based on its state.', 1),
(510, 201, 'In this pattern, a null object replaces check of NULL object instance.', 0),
(511, 201, 'In this pattern, a class behavior or its algorithm can be changed at run time.', 0),
(512, 201, 'In this pattern, an abstract class exposes defined way(s)/template(s) to execute its methods.', 0),
(513, 202, 'State Pattern', 1),
(514, 202, 'Null Object Pattern', 0),
(515, 202, 'Strategy Pattern', 0),
(516, 202, 'Template Pattern', 0),
(517, 203, 'This pattern is used to separate low level data accessing API or operations from high level business services.', 0),
(518, 203, 'This pattern is used to provide a centralized request handling mechanism so that all requests will be handled by a single handler.', 1),
(519, 203, 'This pattern is used when we want to do some pre-processing / post-processing with request or response of the application.', 0),
(520, 203, 'This pattern is used when we want to locate various services using JNDI lookup.', 0),
(521, 204, 'True', 1),
(522, 204, 'False', 0),
(523, 205, 'True', 0),
(524, 205, 'False', 1),
(525, 206, 'Behavioral', 0),
(526, 206, 'Structural', 0),
(527, 206, 'Abstract Factory', 0),
(528, 206, 'All of the mentioned', 1),
(529, 207, 'Adapter Pattern', 0),
(530, 207, 'Singleton Pattern', 0),
(531, 207, 'Delegation pattern', 1),
(532, 207, 'Immutable Pattern', 0),
(533, 208, 'Abstraction-Occurrence Pattern', 0),
(534, 208, 'Player-Role Pattern', 1),
(535, 208, 'General Hierarchy Pattern', 0),
(536, 208, 'Singleton Pattern', 0),
(537, 209, 'patterns', 1),
(538, 209, 'documents', 0),
(539, 209, 'structures', 0),
(540, 209, 'methods', 0),
(541, 210, 'True', 1),
(542, 210, 'False', 0),
(543, 211, 'True', 0),
(544, 211, 'False', 1),
(545, 212, 'True', 1),
(546, 212, 'False', 0),
(547, 213, 'True', 1),
(548, 213, 'False', 0),
(549, 214, 'encapsulating the knowledge of which document subclass to is to be created', 0),
(550, 214, 'moving this knowledge out of the framework', 0),
(551, 214, 'instantiating the application specific documents without knowing their class', 0),
(552, 214, 'all of the mentioned', 1),
(553, 215, 'Inheritance', 0),
(554, 215, 'Composition', 0),
(555, 215, 'All of the mentioned', 1),
(556, 215, 'None of the mentioned', 0),
(557, 216, 'True', 0),
(558, 216, 'False', 1),
(559, 217, 'True', 0),
(560, 217, 'False', 1),
(561, 218, 'Documentation', 1),
(562, 218, 'Seek Permission', 0),
(563, 218, 'Un-Bias Licensing', 0),
(564, 218, 'Software Requirement', 0),
(565, 219, 'Redistribution at no cost', 1),
(566, 219, 'Freedom of Modification', 0),
(567, 219, 'Scope', 0),
(568, 219, 'Free to Use', 0),
(569, 220, 'True', 1),
(570, 220, 'False', 0),
(571, 221, 'Languages- Developers', 0),
(572, 221, 'Languages-Crowd', 0),
(573, 221, 'Structure-Developers', 0),
(574, 221, 'Structure-Crowd', 1),
(575, 222, 'True', 0),
(576, 222, 'False', 1),
(577, 223, 'Community Involvement', 0),
(578, 223, 'Feedbacks', 0),
(579, 223, 'Documentation', 0),
(580, 223, 'Maintenance of the Project', 1),
(581, 224, 'Linux Distribution', 0),
(582, 224, 'Command Lines', 0),
(583, 224, 'GUI Based Linux', 1),
(584, 224, 'File Framework', 0),
(585, 225, 'Linus Torvalds', 1),
(586, 225, 'IBM', 0),
(587, 225, 'Christopher Markin', 0),
(588, 225, 'Bill Gates', 0),
(589, 226, 'True', 0),
(590, 226, 'False', 1),
(591, 227, 'True', 0),
(592, 227, 'False', 1),
(593, 228, 'True', 0),
(594, 228, 'False', 1),
(595, 229, 'True', 1),
(596, 229, 'False', 0),
(597, 230, 'True', 1),
(598, 230, 'False', 0),
(605, 233, '30', 1),
(606, 233, '20', 0),
(607, 233, '10', 0),
(608, 233, '40', 0),
(609, 234, 'True', 1),
(610, 234, 'False', 0),
(615, 236, 'kjlhj', 0),
(616, 236, 'jihug', 1),
(617, 236, 'ojihu', 0),
(618, 236, 'lk;jh', 0),
(621, 238, 'True', 1),
(622, 238, 'False', 0),
(623, 239, '1', 1),
(624, 239, '1', 1),
(625, 239, '1', 1),
(626, 239, '1', 1),
(627, 245, '5', 0),
(628, 245, '5', 0),
(629, 245, '53', 1),
(630, 245, '3', 0),
(631, 246, '1', 1),
(632, 246, '5', 0),
(633, 246, '2', 0),
(634, 246, '4', 0),
(635, 247, '5', 0),
(636, 247, '6', 1),
(637, 247, '1', 0),
(638, 247, '5', 0),
(639, 248, '7', 1),
(640, 248, '8', 0),
(641, 248, '1', 0),
(642, 248, '2', 0);

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
(23, 20, 'chapter three'),
(24, 21, 'Chapter one'),
(25, 21, 'Chapter Two'),
(27, 20, 'Chapter four'),
(28, 21, 'chapter 3');

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
(14, 'heba nasser', 'heba@gmail.com', 'srdtfyguhlij;o', NULL),
(15, 'alaa attia', 'alaaattia147@gmail.com', 'I didn\'t submit at the time, Is here any solution ?', 'Rejected');

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
(19, 'General', 14),
(20, 'SE', 15),
(21, 'CS', 15),
(22, 'IS', 15),
(23, 'IT', 15),
(25, 'cyber sec', 15);

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
  `total_mark` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `subject_id`, `exam_name`, `exam_date`, `start_time`, `duration`, `total_mark`) VALUES
(46, 20, 'exam 1', '2022-05-27', '21:18:00', 3, 4),
(47, 20, 'exam 2', '2022-05-27', '21:24:00', 2, 3);

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
(289, 46, 21, 1, 'choice', 'easy'),
(290, 46, 21, 1, 'choice', 'medium'),
(291, 46, 21, 1, 'choice', 'hard'),
(292, 47, 21, 1, 'choice', 'easy'),
(293, 47, 21, 1, 'choice', 'medium'),
(294, 47, 21, 1, 'choice', 'hard');

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
('1618120190100097'),
('1618120190100091'),
('1618120190100092'),
('1618120190100093'),
('1618120190100094'),
('1618120190100095'),
('1618120190100096'),
('1618120190100098'),
('1618120190100099'),
('1618120190100080'),
('1618120190100081'),
('1618120190100082'),
('1618120190100083'),
('1618120190100084'),
('1618120190100085'),
('1618120190100086'),
('1618120190100087'),
('1618120190100088'),
('1618120190100089');

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
(10, 'amr ali', '1618120190100093', 'amr@gmail.com', '$2y$10$/fe0rxhpRN0Rh1Z6XznTRuxIErUyrJrIJudQJjr9/10pU8WIFoZsC', 'professor', 1, '2022-05-16 15:47:37', '2022-05-27 19:29:34', 'dr.jpg'),
(11, 'reda mabrouk', '1618120190100094', 'reda@gmail.com', '$2y$10$bt4HX8r2Bw/VIeXDOc15A./Fbk3miur1bLMxo5gzvOFrl6JukuzFu', 'professor', 1, '2022-05-23 09:39:27', '2022-05-23 09:41:18', ''),
(13, 'mai ramadan', '1618120190100096', 'mai@gmail.com', '$2y$10$OLArXhtGbRcVHrUJHGtJo.vwgkKtV.piG/GNlspVGa2u1GBhk/IhG', 'professor', NULL, '2022-05-24 12:30:01', '2022-05-24 12:30:01', ''),
(14, 'Admin', '1618120190100097', 'admin@gmail.com', '$2y$10$D5X5fTVZUtzug8g8Zs8m/OG7TisdgfhXiKJBgnJafkgOJV38dc75i', 'admin', 1, '2022-05-25 07:08:37', '2022-05-25 08:28:57', '');

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
(10, 20),
(10, 21);

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
  `mark` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `chapter_id`, `question_text`, `type`, `difficulty`, `mark`, `created_at`) VALUES
(179, 21, 'Software is defined as ___________', 'choice', 'easy', 1, '2022-05-24 11:08:10'),
(180, 21, 'What is Software Engineering?', 'choice', 'medium', 1, '2022-05-24 11:09:08'),
(181, 21, 'Who is the father of Software Engineering?', 'choice', 'medium', 1, '2022-05-24 11:10:20'),
(182, 21, 'What are the features of Software Code?', 'choice', 'easy', 1, '2022-05-24 11:11:14'),
(183, 21, '_________ is a software development activity that is not a part of software processes.', 'choice', 'medium', 1, '2022-05-24 11:12:19'),
(184, 21, 'Define Agile scrum methodology.', 'choice', 'hard', 1, '2022-05-24 11:13:30'),
(185, 21, 'Utility software is system software designed to help analyze, configure, optimize or maintain a computer.', 'true&false', 'easy', 1, '2022-05-24 11:28:06'),
(186, 21, 'Application software focuses on how the computer operates.', 'true&false', 'medium', 1, '2022-05-24 11:28:29'),
(187, 21, 'The productivity of a software engineer can be reduced by using a 4GT.', 'true&false', 'hard', 1, '2022-05-24 11:29:52'),
(188, 21, 'Software maintenance costs are expensive in contrast to software development.', 'true&false', 'easy', 1, '2022-05-24 11:30:21'),
(189, 21, 'Model-driven engineering is nothing but a theoretical concept. It can never be transmuted into a working/executable code', 'true&false', 'medium', 1, '2022-05-24 11:30:53'),
(190, 21, 'code and fix is an agile method?', 'true&false', 'hard', 1, '2022-05-24 11:32:23'),
(191, 22, 'What is the name of the approach that follows step-by-step instructions for solving a problem?', 'choice', 'easy', 1, '2022-05-24 11:35:39'),
(192, 22, 'Which of the following word correctly summarized the importance of software design?', 'choice', 'medium', 1, '2022-05-24 11:36:54'),
(193, 22, ' __________ is not considered as an activity of Structured Analysis (SA).', 'choice', 'hard', 1, '2022-05-24 11:37:52'),
(194, 22, ' What is the main intent of project metrics?', 'choice', 'hard', 1, '2022-05-24 11:39:04'),
(195, 22, 'Name the graphical practice that depicts the meaningful changes that occurred in metrics data.', 'choice', 'easy', 1, '2022-05-24 11:40:04'),
(196, 22, 'Which of the following is an incorrect activity for the configuration management of a software system?', 'choice', 'medium', 1, '2022-05-24 11:41:24'),
(197, 24, 'Can we create a clone of a singleton object?', 'true&false', 'easy', 0, '2022-05-25 00:52:42'),
(198, 24, 'Integer class is an example of Decorator pattern.', 'true&false', 'medium', 0, '2022-05-25 00:53:10'),
(199, 24, 'Which of the following pattern refers to creating duplicate object while keeping performance in mind?', 'choice', 'hard', 0, '2022-05-25 00:56:43'),
(200, 24, 'Which of the following pattern provides a way to evaluate language grammar or expression?', 'choice', 'medium', 0, '2022-05-25 00:58:16'),
(201, 24, ' Which of the following describes the State pattern correctly?', 'choice', 'hard', 0, '2022-05-25 00:59:48'),
(202, 24, 'In which of the following pattern, a class behavior changes based on its state?', 'choice', 'easy', 0, '2022-05-25 01:00:49'),
(203, 24, 'Which of the following describes the Front Controller pattern correctly?', 'choice', 'easy', 0, '2022-05-25 01:02:28'),
(204, 24, 'Behavioral Design Pattern specifically concerned with communication between objects.', 'true&false', 'hard', 0, '2022-05-25 01:03:19'),
(205, 24, 'MVC pattern is Model, View, Control.', 'true&false', 'medium', 0, '2022-05-25 01:04:11'),
(206, 24, 'Which of the following is a design pattern?', 'choice', 'easy', 0, '2022-05-25 01:05:37'),
(207, 25, 'You want to minimize development cost by reusing methods? Which design pattern would you choose?', 'choice', 'easy', 0, '2022-05-25 01:12:48'),
(208, 25, ' You want to avoid multiple inheritance. Which design pattern would you choose?', 'choice', 'medium', 0, '2022-05-25 01:13:46'),
(209, 25, 'The recurring aspects of designs are called design', 'choice', 'hard', 0, '2022-05-25 01:16:50'),
(210, 25, 'Design pattern is a solution to a problem that occurs repeatedly in a variety of contexts.', 'true&false', 'easy', 0, '2022-05-25 01:17:20'),
(211, 25, 'Singleton pattern not prevents one from creating more than one instance of a variable', 'true&false', 'medium', 0, '2022-05-25 01:18:47'),
(212, 25, 'Facade pattern promotes weak coupling between subsystem and its clients.', 'true&false', 'hard', 0, '2022-05-25 01:20:48'),
(213, 25, 'Facade pattern couples a subsystem from its clients.', 'true&false', 'easy', 0, '2022-05-25 01:21:55'),
(214, 25, ' In factory method pattern, the framework must instantiate classes but it only knows about the abstract classes, which it cannot initiate. How would one solve this problem?', 'choice', 'hard', 0, '2022-05-25 01:23:00'),
(215, 25, 'Which mechanism is applied to use a design pattern in an OO system?', 'choice', 'medium', 0, '2022-05-25 01:24:39'),
(216, 25, 'Design patterns does not follow the concept of software reuse.', 'true&false', 'medium', 0, '2022-05-25 01:25:03'),
(217, 23, 'The hardware equipment which you purchase and can modify it accordingly is called Open Source Hardware?', 'true&false', 'easy', 0, '2022-05-25 01:46:49'),
(218, 23, 'What all percepts are required to create an Open Source Hardware so that any individual(Single entity/corporates) can utilize it and make a profit out of it? Choose all the correct options:', 'choice', 'medium', 0, '2022-05-25 01:48:23'),
(219, 23, '\"Open Source Hardware should not restrict any user-no matter if used for commercial purpose from making profits out of the design or selling the Open Source Hardware Project\" This is a regulation followed by Open Source Hardware in which of the following percept?', 'choice', 'hard', 0, '2022-05-25 01:49:25'),
(220, 23, 'Need-Announcement-Source Code the Cycle of Starting an Open Source Project', 'true&false', 'medium', 0, '2022-05-25 01:50:40'),
(221, 23, 'Documentation can come in numerous ________ and can target various ________. Choose the correct options.', 'choice', 'hard', 0, '2022-05-25 01:51:50'),
(222, 23, 'All the feedbacks that are received on an Open Source Project deal with Bugs and Errors?', 'true&false', 'hard', 0, '2022-05-25 01:52:26'),
(223, 23, 'What makes your Open Source Project successful once Released?', 'choice', 'easy', 0, '2022-05-25 01:53:54'),
(224, 23, 'What do you understand from GNOME and KDE?', 'choice', 'easy', 0, '2022-05-25 01:54:59'),
(225, 23, 'Who was the founder of Linux?', 'choice', 'medium', 0, '2022-05-25 01:56:19'),
(226, 23, ' Running Linux on your system requires a High-End System capable of high processing powers!', 'true&false', 'easy', 0, '2022-05-25 01:56:53'),
(227, 22, 'Software is a product and can be manufactured using the same technologies used for other engineering artifacts.', 'true&false', 'easy', 0, '2022-05-25 02:01:04'),
(228, 22, 'WebApps are a mixture of print publishing and software development, making their development outside the realm of software engineering practice', 'true&false', 'medium', 0, '2022-05-25 02:01:40'),
(229, 22, 'In its simplest form an external computing device may access cloud data services using a web browser.', 'true&false', 'hard', 0, '2022-05-25 02:02:06'),
(230, 22, 'Product line software development depends the reuse of existing software components to provide software engineering leverage.', 'true&false', 'easy', 0, '2022-05-25 02:02:31'),
(233, 27, 'what is your ages', 'choice', 'medium', 0, '2022-05-25 08:37:11'),
(234, 27, 'true false', 'true&false', 'medium', 0, '2022-05-25 08:37:53'),
(236, 21, 'knp;kouf', 'choice', 'easy', 0, '2022-05-25 09:39:25'),
(238, 21, 'alaaaaaaaaaaaaaaa', 'true&false', 'easy', 2, '2022-05-27 12:10:44'),
(239, 21, 'alaaaaaaaaaaaaaa', 'choice', 'easy', 2, '2022-05-27 12:12:07'),
(245, 21, 'ghkjk', 'choice', 'medium', 2, '2022-05-27 14:18:34'),
(246, 28, 'a', 'choice', 'easy', 2, '2022-05-27 17:17:48'),
(247, 28, 'b', 'choice', 'medium', 2, '2022-05-27 17:18:10'),
(248, 28, 'c', 'choice', 'hard', 2, '2022-05-27 17:19:16');

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
(47, 11, 46, 2),
(48, 13, 46, 3),
(49, 11, 47, 3),
(50, 13, 47, 2);

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
(11, 'alaa attia', '1618120190100091', 'alaaattia147@gmail.com', '$2y$10$zaLAYl8.oK/kyqJAMvG5HuuezNscl92XJiTNe9.Q/WLYOnXOEIk0y', 'three', 'SE', 'student', '2022-05-16 15:40:39', '2022-05-27 19:25:10', 15, 20, 'lola.jpg'),
(13, 'heba nasser', '1618120190100092', 'heba@gmail.com', '$2y$10$l0nCjiwlf2RgwXaEzhQYTOVQOW8AWbLx52ZDYvGKu7O7Kqm/QtWeG', 'three', 'SE', 'student', '2022-05-24 12:02:21', '2022-05-27 19:28:56', 15, 20, 'IMG_0462.JPG');

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
(228, 11, 46, 239, 626),
(229, 11, 46, 180, 444),
(230, 11, 46, 184, 458),
(231, 13, 46, 239, 625),
(232, 13, 46, 183, 456),
(233, 13, 46, 184, 459),
(234, 11, 47, 182, 452),
(235, 11, 47, 245, 629),
(236, 13, 47, 182, 452),
(237, 13, 47, 183, 456),
(238, 13, 47, 184, 459);

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
(17, 'data base', 14, 19),
(20, 'Software Engineering', 15, 20),
(21, 'Design Patterns', 15, 20),
(22, 'Operating System', 15, 20);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=643;

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `exam_structure`
--
ALTER TABLE `exam_structure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=295;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_answers`
--
ALTER TABLE `student_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
