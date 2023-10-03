-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 08:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oes`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `is_correct` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `answer`, `is_correct`, `created_at`, `updated_at`) VALUES
(5, 2, 'SRK', 0, '2023-10-02 06:34:09', '2023-10-02 06:34:09'),
(6, 2, 'Hritik Roshan', 0, '2023-10-02 06:34:09', '2023-10-02 06:34:09'),
(7, 2, 'Shahid Kapoor', 1, '2023-10-02 06:34:09', '2023-10-02 06:34:09'),
(8, 2, 'Varun Dhawan', 0, '2023-10-02 06:34:09', '2023-10-02 06:34:09'),
(9, 3, 'London', 0, '2023-10-02 06:36:07', '2023-10-02 06:36:07'),
(10, 3, 'Berlin', 1, '2023-10-02 06:36:07', '2023-10-02 06:36:07'),
(11, 3, 'Paris', 0, '2023-10-02 06:36:07', '2023-10-02 06:36:07'),
(12, 3, 'Madrid', 0, '2023-10-02 06:36:07', '2023-10-02 06:36:07'),
(13, 4, 'Oxygen', 1, '2023-10-02 06:36:43', '2023-10-02 06:36:43'),
(14, 4, 'Carbon dioxide', 0, '2023-10-02 06:36:43', '2023-10-02 06:36:43'),
(15, 4, 'Nitrogen', 0, '2023-10-02 06:36:43', '2023-10-02 06:36:43'),
(16, 4, 'Hydrogen', 0, '2023-10-02 06:36:43', '2023-10-02 06:36:43'),
(17, 5, 'George Orwell', 0, '2023-10-02 06:37:17', '2023-10-02 06:37:17'),
(18, 5, 'Harper Lee', 0, '2023-10-02 06:37:17', '2023-10-02 06:37:17'),
(19, 5, 'J.K. Rowling', 0, '2023-10-02 06:37:17', '2023-10-02 06:37:17'),
(20, 5, 'Charles Dickens', 1, '2023-10-02 06:37:17', '2023-10-02 06:37:17'),
(21, 6, 'Go', 0, '2023-10-02 06:37:54', '2023-10-02 10:16:32'),
(22, 6, 'Au', 0, '2023-10-02 06:37:54', '2023-10-02 10:16:32'),
(23, 6, 'Ag', 0, '2023-10-02 06:37:54', '2023-10-02 10:16:32'),
(24, 6, 'Ge', 0, '2023-10-02 06:37:54', '2023-10-02 10:16:32'),
(25, 7, 'Venus', 0, '2023-10-02 06:38:24', '2023-10-02 06:38:24'),
(26, 7, 'Earth', 0, '2023-10-02 06:38:24', '2023-10-02 06:38:24'),
(27, 7, 'Mars', 1, '2023-10-02 06:38:24', '2023-10-02 06:38:24'),
(28, 7, 'Jupiter', 0, '2023-10-02 06:38:24', '2023-10-02 06:38:24'),
(29, 8, 'Elephant', 0, '2023-10-02 06:38:59', '2023-10-02 06:38:59'),
(30, 8, 'Giraffe', 0, '2023-10-02 06:38:59', '2023-10-02 06:38:59'),
(31, 8, 'Blue Whale', 1, '2023-10-02 06:38:59', '2023-10-02 06:38:59'),
(32, 8, 'Polar Bear', 0, '2023-10-02 06:38:59', '2023-10-02 06:38:59'),
(33, 9, 'Vincent van Gogh', 0, '2023-10-02 06:39:28', '2023-10-02 06:39:28'),
(34, 9, 'Leonardo da Vinci', 1, '2023-10-02 06:39:28', '2023-10-02 06:39:28'),
(35, 9, 'Pablo Picasso', 0, '2023-10-02 06:39:28', '2023-10-02 06:39:28'),
(36, 9, 'Michelangelo', 0, '2023-10-02 06:39:28', '2023-10-02 06:39:28'),
(37, 10, 'Red', 0, '2023-10-02 06:39:57', '2023-10-02 06:39:57'),
(38, 10, 'Green', 0, '2023-10-02 06:39:57', '2023-10-02 06:39:57'),
(39, 10, 'Blue', 1, '2023-10-02 06:39:57', '2023-10-02 06:39:57'),
(40, 10, 'Yellow', 0, '2023-10-02 06:39:57', '2023-10-02 06:39:57'),
(41, 11, '0', 0, '2023-10-02 06:40:16', '2023-10-02 06:40:16'),
(42, 11, '1', 1, '2023-10-02 06:40:16', '2023-10-02 06:40:16'),
(43, 11, '2', 0, '2023-10-02 06:40:16', '2023-10-02 06:40:16'),
(44, 11, '3', 0, '2023-10-02 06:40:16', '2023-10-02 06:40:16'),
(45, 12, 'Oxygen', 0, '2023-10-02 06:40:46', '2023-10-02 06:40:46'),
(46, 12, 'Carbon dioxide', 0, '2023-10-02 06:40:46', '2023-10-02 06:40:46'),
(47, 12, 'Chlorofluorocarbons', 1, '2023-10-02 06:40:46', '2023-10-02 06:40:46'),
(48, 12, 'Nitrogen', 0, '2023-10-02 06:40:46', '2023-10-02 06:40:46'),
(49, 13, 'Mitochondria', 1, '2023-10-02 06:41:14', '2023-10-02 06:41:14'),
(50, 13, 'Nucleus', 0, '2023-10-02 06:41:14', '2023-10-02 06:41:14'),
(51, 13, 'Endoplasmic reticulum', 0, '2023-10-02 06:41:14', '2023-10-02 06:41:14'),
(52, 13, 'Golgi apparatus', 0, '2023-10-02 06:41:14', '2023-10-02 06:41:14'),
(53, 14, 'Isaac Newton', 1, '2023-10-02 06:42:02', '2023-10-02 06:42:02'),
(54, 14, 'Galileo Galilei', 0, '2023-10-02 06:42:02', '2023-10-02 06:42:02'),
(55, 14, 'Albert Einstein', 0, '2023-10-02 06:42:02', '2023-10-02 06:42:02'),
(71, 16, 'Object Relational Mapping', 1, '2023-10-03 10:40:12', '2023-10-03 10:40:12'),
(72, 16, 'Open Remote Mapping', 0, '2023-10-03 10:40:12', '2023-10-03 10:40:12'),
(73, 16, 'Online Reputation Management', 0, '2023-10-03 10:40:12', '2023-10-03 10:40:12'),
(74, 16, 'Operational Risk Management', 0, '2023-10-03 10:40:12', '2023-10-03 10:40:12'),
(75, 17, 'if', 0, '2023-10-03 18:02:40', '2023-10-03 12:34:11'),
(76, 17, 'if…else', 0, '2023-10-03 18:02:40', '2023-10-03 12:34:11'),
(77, 17, 'if…elif…else', 1, '2023-10-03 18:02:40', '2023-10-03 12:34:11'),
(78, 17, 'all of these', 0, '2023-10-03 18:02:40', '2023-10-03 12:34:11'),
(79, 17, 'both a & b', 0, '2023-10-03 18:02:40', '2023-10-03 12:34:11'),
(80, 17, 'none of above', 0, '2023-10-03 18:02:40', '2023-10-03 12:34:11'),
(81, 18, 'SRC', 1, '2023-10-03 18:02:40', '2023-10-03 18:02:40'),
(82, 18, 'FRAME', 0, '2023-10-03 18:02:40', '2023-10-03 18:02:40'),
(83, 18, 'HEIGHT', 0, '2023-10-03 18:02:40', '2023-10-03 18:02:40'),
(84, 18, 'BORDER', 0, '2023-10-03 18:02:40', '2023-10-03 18:02:40'),
(85, 19, 'Chat', 0, '2023-10-03 18:02:40', '2023-10-03 18:02:40'),
(86, 19, 'Google Drive', 1, '2023-10-03 18:02:40', '2023-10-03 18:02:40'),
(87, 19, 'E-Mail', 0, '2023-10-03 18:02:40', '2023-10-03 18:02:40'),
(88, 19, 'VoIP', 0, '2023-10-03 18:02:40', '2023-10-03 18:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `exam_name` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `attempt` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `exam_name`, `subject_id`, `date`, `time`, `attempt`, `created_at`, `updated_at`) VALUES
(1, 'Basics of Spring and IOC Container', 1, '2023-09-30', '10:30', 0, '2023-09-27 13:09:48', '2023-09-27 13:09:48'),
(2, 'Types of Collections in Python', 3, '2023-10-07', '08:00', 0, '2023-09-27 14:24:52', '2023-09-27 14:24:52'),
(3, 'Network Protocols and Routing', 9, '2023-10-03', '08:30', 0, '2023-09-28 06:17:20', '2023-09-28 06:07:35'),
(4, 'Operator Overloading and Type Conversion', 10, '2023-10-03', '14:30', 0, '2023-09-28 06:18:23', '2023-09-28 06:07:23'),
(5, 'Data and Transmission Control Commands', 11, '2023-10-04', '11:00', 0, '2023-09-28 06:23:44', '2023-09-28 06:23:44'),
(7, 'Exception Handling, Threading and Streams', 2, '2023-10-04', '12:15', 0, '2023-09-28 06:25:47', '2023-09-28 06:25:47'),
(8, 'Unix Shell Commands', 8, '2023-10-05', '08:00', 0, '2023-09-28 06:26:52', '2023-09-28 06:26:52'),
(9, 'Searching and Sorting', 13, '2023-10-06', '10:30', 0, '2023-09-28 06:27:50', '2023-09-28 06:27:50'),
(10, 'Form Handling and Session Tracking', 14, '2023-10-07', '12:00', 0, '2023-09-28 06:29:32', '2023-09-28 06:29:32'),
(11, 'SDLC and Automated Testing', 15, '2023-10-09', '09:00', 2, '2023-09-28 06:31:24', '2023-09-28 09:05:08'),
(12, 'Validation Controls and State Management', 5, '2023-10-09', '17:15', 0, '2023-09-28 06:33:02', '2023-09-28 06:33:02'),
(14, 'Eloquent Methods in Laravel', 18, '2023-10-11', '10:15', 2, '2023-10-03 10:35:45', '2023-10-03 10:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('joshianshu045@gmail.com', 'xfPmSsJWFAdBIm0D5RMaVjaRjAFBCuVPgSKbBO67', '2023-10-03 05:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `created_at`, `updated_at`) VALUES
(2, 'Who was lead actor in kabir singh?', '2023-10-02 06:34:09', '2023-10-02 06:34:09'),
(3, 'What is the capital of France?', '2023-10-02 06:36:07', '2023-10-02 06:36:07'),
(4, 'What gas do plants primarily absorb from the atmosphere during photosynthesis?', '2023-10-02 06:36:42', '2023-10-02 06:36:42'),
(5, 'Who is the author of the famous novel \"To Kill a Mockingbird\"?', '2023-10-02 06:37:17', '2023-10-02 06:37:17'),
(6, 'What is the chemical symbol for gold?', '2023-10-02 06:37:54', '2023-10-02 10:16:32'),
(7, 'Which planet in our solar system is known as the \"Red Planet\"?', '2023-10-02 06:38:24', '2023-10-02 06:38:24'),
(8, 'What is the largest mammal on Earth?', '2023-10-02 06:38:59', '2023-10-02 06:38:59'),
(9, 'Who painted the Mona Lisa?', '2023-10-02 06:39:28', '2023-10-02 06:39:28'),
(10, 'Which of the following is not a primary color in subtractive color mixing?', '2023-10-02 06:39:57', '2023-10-02 06:39:57'),
(11, 'What is the smallest prime number?', '2023-10-02 06:40:16', '2023-10-02 06:40:16'),
(12, 'Which gas is responsible for the Earth\'s ozone layer depletion?', '2023-10-02 06:40:46', '2023-10-02 06:40:46'),
(13, 'What is the powerhouse of the cell?', '2023-10-02 06:41:14', '2023-10-02 06:41:14'),
(14, 'Who is known as the father of modern physics and formulated the theory of relativity?', '2023-10-02 06:42:02', '2023-10-02 06:42:02'),
(16, 'ORM in laravel stands for?', '2023-10-03 10:40:12', '2023-10-03 10:40:12'),
(17, 'Which of the following conditional statements is used to test multiple conditions', '2023-10-03 18:02:40', '2023-10-03 12:34:11'),
(18, 'Which of the following attributes is not used with the <IMG> tag', '2023-10-03 18:02:40', '2023-10-03 18:02:40'),
(19, 'Which of the following is not a communication service of the Internet?', '2023-10-03 18:02:40', '2023-10-03 18:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'Advanced Programming in Java', '2023-09-26 09:10:36', '2023-09-26 09:10:36'),
(2, 'Programming in Java', '2023-09-26 09:33:01', '2023-09-26 09:33:01'),
(3, 'Python Programming', '2023-09-26 09:38:53', '2023-09-26 09:38:53'),
(5, 'Programming with ASP.Net', '2023-09-26 09:42:36', '2023-09-26 09:42:36'),
(6, 'App Development in Android', '2023-09-26 09:43:16', '2023-09-26 09:43:16'),
(7, 'Programming in C#', '2023-09-26 09:43:38', '2023-09-26 09:43:38'),
(8, 'Unix and Shell Programming', '2023-09-26 09:44:06', '2023-09-26 06:51:17'),
(9, 'Network Administration and Programming', '2023-09-26 09:44:42', '2023-09-26 09:44:42'),
(10, 'OOP using C++', '2023-09-26 09:45:01', '2023-09-26 09:45:01'),
(11, 'Oracle with RDBMS', '2023-09-26 09:45:24', '2023-09-26 09:45:24'),
(12, 'CMS using Wordpress', '2023-09-26 09:45:41', '2023-09-26 09:45:41'),
(13, 'Programming & Data Structures in C', '2023-09-26 09:46:19', '2023-09-26 06:53:44'),
(14, 'Fundamentals of Website Design & Development', '2023-09-26 09:47:03', '2023-09-26 09:47:03'),
(15, 'Software Designing & Testing', '2023-09-26 09:47:39', '2023-09-26 07:15:48'),
(17, 'Introduction to NoSQL: MongoDB', '2023-10-03 10:30:20', '2023-10-03 10:30:20'),
(18, 'Advanced Web Programming in Laravel', '2023-10-03 10:34:11', '2023-10-03 10:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'demo', 'anshujoshi045@gmail.com', NULL, 0, '$2y$10$tjz/ZBNIYTfvFC25HhTI1.mfmGOF9/vC4mu9zK/pkHFp4F5EJAlna', NULL, '2023-09-11 07:37:42', '2023-09-24 07:13:40'),
(3, 'anshu', 'anshujoshi@proton.me', NULL, 1, '$2y$10$J4B3hCa5Ll2jeJ5cHjMaRuLkQ5aNNK5BfdqDVaqLTKNf06vuCAf/m', NULL, '2023-09-23 07:31:01', '2023-09-25 23:54:04'),
(4, 'Kreet', 'KreetJoshi.312@gmail.com', NULL, 0, '$2y$10$N4DnbaHJnXxh9gQQ8HrFaui0CgHB32zy7XjNr4wHyY6bRuo7QMRBK', NULL, '2023-09-24 07:28:33', '2023-09-24 07:31:26'),
(6, 'Anshuman Joshi', 'joshianshu045@gmail.com', NULL, 0, '$2y$10$vtS26SfWr1uUN7.fCHqsweYUos6Zk82Q8H03aNTMBeqVOBP1nI6uu', NULL, '2023-10-03 05:15:29', '2023-10-03 05:15:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
