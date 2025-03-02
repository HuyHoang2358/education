-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2025 at 04:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` enum('class','subject','sub_subject','section','topic') NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `type`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Tuyển sinh lớp 9 -10', 'section', 'tuyen-sinh-lop-9-10', '2025-02-26 21:50:10', '2025-02-26 21:50:10'),
(3, 'Tốt nghiệp THPT Quốc Gia', 'section', 'tot-nghiep-thpt-quoc-gia', '2025-02-26 21:50:31', '2025-02-26 21:50:31'),
(4, 'Đánh giá năng lực lớp 6', 'section', 'danh-gia-nang-luc-lop-6', '2025-02-26 21:50:48', '2025-02-26 21:50:48'),
(5, 'Tiếng anh', 'subject', 'tieng-anh', '2025-02-26 21:52:54', '2025-02-26 21:52:54'),
(6, 'Toán', 'subject', 'toan', '2025-02-26 21:53:03', '2025-02-26 21:53:03'),
(7, 'Ngữ văn', 'subject', 'ngu-van', '2025-02-26 21:53:10', '2025-02-26 21:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE `contests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `type` varchar(255) NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contests`
--

INSERT INTO `contests` (`id`, `image`, `title`, `description`, `content`, `type`, `exam_id`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1, 'contest_images/2uBxUiFnJBlTF1aTrhZhql4zDzPJkVWMyN5AuPoW.png', 'Cuộc thi “Tự Tin Vươn Thế Giới\"', 'Tự Tin Vươn Thế Giới là cuộc thi Tiếng Anh Hàng Năm do Liên Hợp Quốc các nước Đông Nam Á tổ chức nhằm tạo sân chơi lành mạnh cho các bạn trẻ.', '<p><strong>GIỚI THIỆU VỀ CUỘC THI:</strong><br>Adipiscing gravida feugiat mattis sollicitudin nulla. Sed fermentum lobortis tristique feugiat tortor libero non neque imperdiet. Condimentum posuere montes sit faucibus turpis. Ut cras pharetra euismod quis. Aliquet senectus viverra est bibendum montes elementum accumsan turpis.<br>Vitae sit commodo nunc enim quis nam accumsan egestas quisque. Sem adipiscing in non vel dui et sit. Ultrices sed at vitae sagittis sagittis. Mi tincidunt justo blandit gravida maecenas morbi blandit elementum quis. Ultrices maecenas facilisis id cras. Pellentesque in eu proin fermentum arcu arcu donec eget. At elementum massa vitae libero. Feugiat vitae a nunc libero scelerisque id.<br>Ac nunc arcu neque pharetra enim quis. Sagittis ligula nisl gravida arcu eu. Tellus vulputate blandit netus velit purus in facilisis fames. In velit lorem egestas eu adipiscing egestas quis. Fringilla quam nulla enim in dolor elit lacus tellus. Ut amet eget lacinia quis suspendisse diam scelerisque. Fermentum platea elementum velit a nec. Turpis leo ornare purus tempor dolor. In convallis gravida elit proin. Quam donec cum gravida orci. Diam nunc hac sed leo etiam augue. Pulvinar dui sed ut nec morbi in massa nisl.<br><strong>C&Aacute;CH THỨC THAM GIA:</strong><br>A vel sed egestas sapien varius arcu id netus. Commodo praesent senectus accumsan sit donec ut velit in. Ut interdum sit faucibus augue sociis. Arcu sed venenatis morbi etiam sit egestas leo lectus. Vitae sit iaculis iaculis rhoncus.<br>Magna senectus in mollis placerat aliquam scelerisque aliquam pellentesque. Enim nam facilisi convallis nec arcu quisque eu mi interdum. Sed a amet consequat quisque at tortor. Faucibus ullamcorper vel accumsan scelerisque dui amet neque. Maecenas eget risus nunc amet. Nunc elementum amet vitae ornare pulvinar urna. Nulla natoque facilisis ultricies diam duis amet mauris. Massa feugiat dolor faucibus quis hac scelerisque feugiat mattis. Arcu orci pretium sit eu commodo morbi. Urna pellentesque tempor et nec.<br>Magna sagittis lectus eget morbi dignissim. Sagittis pulvinar diam in id consectetur vel facilisis lobortis. Ullamcorper non imperdiet neque id sit faucibus urna molestie amet. Vitae vitae aenean leo iaculis faucibus vitae. Laoreet eu id ornare sagittis congue diam volutpat a auctor. Imperdiet dolor varius purus feugiat. Fringilla dignissim tempor ornare at enim. Euismod lectus lectus pharetra viverra est dictum diam. Vitae ultrices sit arcu eu quis. In vel congue commodo arcu consectetur cursus amet vestibulum. Euismod bibendum pellentesque elit purus habitant sagittis eu. Adipiscing sed orci donec sed.</p>', 'Cuộc thi tiếng anh', 1, '2025-02-28 12:00:00', '2025-02-28 13:00:00', '2025-02-28 00:24:03', '2025-02-28 00:24:43');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL DEFAULT 0,
  `year` int(11) NOT NULL,
  `province` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `title`, `file`, `subject_id`, `rating`, `year`, `province`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Đề thi tiếng anh', 'exams/CR1STUwugRru5tGt26HKqrqKgSD4J6yPGuyY5Oc8.pdf', 5, 5, 2024, 'TP. Hồ Chí Minh', 'de-thi-tieng-anh', '2025-02-26 22:20:48', '2025-02-26 22:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `exam_rooms`
--

CREATE TABLE `exam_rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `exam_time` datetime NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `rating` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_room_students`
--

CREATE TABLE `exam_room_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_room_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `score` decimal(5,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exercises`
--

CREATE TABLE `exercises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exercises`
--

INSERT INTO `exercises` (`id`, `title`, `content`, `subject_id`, `created_at`, `updated_at`) VALUES
(7, 'Chuyên đề 12 thì chủ động trong Tiếng Anh', '[{\"file\":\"exercises\\/ADqaIFcCjebbxMXGhFT7hhHiA78ABBWgVXboWxa2.pdf\",\"title\":\"Th\\u00ec ch\\u1ee7 \\u0111\\u1ed9ng \\u0111\\u1ea7u ti\\u00ean trong Ti\\u1ebfng Anh - Hi\\u1ec7n T\\u1ea1i \\u0110\\u01a1n\"},{\"file\":\"exercises\\/TxKErQQyIWyGnxLARikNg9bmYcvr3IiGEAynfht1.pdf\",\"title\":\"Th\\u00ec ch\\u1ee7 \\u0111\\u1ed9ng \\u0111\\u1ea7u ti\\u00ean trong Ti\\u1ebfng Anh - Hi\\u1ec7n T\\u1ea1i \\u0110\\u01a1n\"}]', 5, '2025-02-28 21:32:36', '2025-02-28 21:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_02_21_102126_create_categories_table', 1),
(6, '2025_02_21_103229_create_exam_rooms_table', 1),
(7, '2025_02_21_103709_create_exam_room_students_table', 1),
(8, '2025_02_21_102727_create_exams_table', 2),
(12, '2025_02_27_144129_create_contests_table', 3),
(13, '2025_02_28_140002_create_exercises_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('super_admin','admin','instructor','student','parent') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'superadmin@gmail.com', NULL, '$2y$12$MNTTolFctZNoQ8v9HlClXe3.E2TFjf4G4eC7TcovlneCMeYn4H64m', 'super_admin', NULL, NULL, '2025-02-23 04:03:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contests`
--
ALTER TABLE `contests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contests_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `exam_rooms`
--
ALTER TABLE `exam_rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_rooms_teacher_id_foreign` (`teacher_id`),
  ADD KEY `exam_rooms_subject_id_foreign` (`subject_id`),
  ADD KEY `exam_rooms_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `exam_room_students`
--
ALTER TABLE `exam_room_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_room_students_exam_room_id_foreign` (`exam_room_id`),
  ADD KEY `exam_room_students_student_id_foreign` (`student_id`);

--
-- Indexes for table `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exercises_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contests`
--
ALTER TABLE `contests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_rooms`
--
ALTER TABLE `exam_rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_room_students`
--
ALTER TABLE `exam_room_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contests`
--
ALTER TABLE `contests`
  ADD CONSTRAINT `contests_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_rooms`
--
ALTER TABLE `exam_rooms`
  ADD CONSTRAINT `exam_rooms_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_rooms_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_rooms_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_room_students`
--
ALTER TABLE `exam_room_students`
  ADD CONSTRAINT `exam_room_students_exam_room_id_foreign` FOREIGN KEY (`exam_room_id`) REFERENCES `exam_rooms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `exam_room_students_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exercises`
--
ALTER TABLE `exercises`
  ADD CONSTRAINT `exercises_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
