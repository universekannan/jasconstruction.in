-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2026 at 06:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasconstruction`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounting_year`
--

CREATE TABLE `accounting_year` (
  `id` int(10) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `accounting_year_name` varchar(20) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `current_hand_cash` decimal(10,2) DEFAULT 0.00,
  `current_bank_cash` decimal(10,2) DEFAULT 0.00,
  `current_hand_gold` decimal(10,2) DEFAULT 0.00,
  `current_bank_gold` decimal(10,2) DEFAULT 0.00,
  `capital_fund` decimal(10,2) NOT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounting_year`
--

INSERT INTO `accounting_year` (`id`, `year`, `accounting_year_name`, `from_date`, `to_date`, `current_hand_cash`, `current_bank_cash`, `current_hand_gold`, `current_bank_gold`, `capital_fund`, `status`) VALUES
(1, 2025, '2025-2026', '2025-04-01', '2026-03-31', 0.00, NULL, 0.00, 0.00, 0.00, '2');

-- --------------------------------------------------------

--
-- Table structure for table `activation_type`
--

CREATE TABLE `activation_type` (
  `id` int(11) NOT NULL,
  `activation_module_type` int(11) DEFAULT NULL,
  `activation_name` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activation_type`
--

INSERT INTO `activation_type` (`id`, `activation_module_type`, `activation_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gold Loans', 1, '2026-01-25 18:55:25', '2026-03-13 23:57:21'),
(2, 1, 'Loan ', 1, '2026-01-25 18:55:42', '2026-03-13 23:57:25'),
(3, 1, 'Deposit ', 1, '2026-01-25 18:55:53', '2026-03-13 23:57:27'),
(4, 1, 'Chits', 1, '2026-01-25 18:55:53', '2026-03-13 23:56:49'),
(5, 2, 'Mouriya Chit', 1, '2026-01-25 18:55:25', '2026-03-13 23:56:40'),
(6, 2, 'Current bill', 1, '2026-01-25 18:55:42', '2026-03-13 23:56:40'),
(7, 2, 'Rent', 1, '2026-01-25 18:55:53', '2026-03-13 23:56:40'),
(8, 2, 'Telephone internet', 1, '2026-01-25 18:57:04', '2026-03-13 23:56:40'),
(9, 2, 'Salary', 1, '2026-01-25 18:57:16', '2026-03-13 23:56:40'),
(10, 2, 'Donation', 1, '2026-01-25 18:57:30', '2026-03-13 23:56:40'),
(11, 2, 'Petrol', 1, '2026-01-25 18:57:43', '2026-03-13 23:56:40'),
(12, 2, 'Car service', 1, '2026-01-25 18:58:04', '2026-03-13 23:57:09'),
(13, 2, 'Bike service', 1, '2026-01-25 18:58:17', '2026-03-13 23:57:11'),
(14, 2, 'Maintanance', 1, '2026-01-25 18:58:54', '2026-03-13 23:56:40'),
(15, 2, 'Petty expenses', 1, '2026-01-25 18:59:25', '2026-03-13 23:56:40'),
(16, 2, 'LIC', 1, '2026-01-25 18:59:46', '2026-03-13 23:56:40'),
(17, 2, 'Vechile Insurance', 1, '2026-01-25 19:00:31', '2026-03-13 23:56:40'),
(18, 2, 'Medical Insurance', 1, '2026-01-25 19:01:03', '2026-03-13 23:56:40'),
(19, 2, 'Post office RD', 1, '2026-01-25 19:01:22', '2026-03-13 23:56:40'),
(20, 2, 'SIP', 1, '2026-01-25 19:01:32', '2026-03-13 23:56:40'),
(21, 2, 'Life Insurances', 1, '2026-01-25 19:01:59', '2026-03-13 23:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time_in` varchar(20) DEFAULT NULL,
  `time_out` varchar(10) DEFAULT NULL,
  `hours` varchar(10) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `message` varchar(50) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner_name` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `banner_title` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `banner_url` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_name`, `status`, `photo`, `banner_title`, `description`, `banner_url`) VALUES
(1, 'Welcome to Jas Construction', '1', '1.jpg', 'welcome_to_jas_construction', 'Jas Construction is the best Construction Company in south india', 'welcome_to_jas_construction');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) DEFAULT '0',
  `subject` varchar(50) DEFAULT '0',
  `message` varchar(200) DEFAULT NULL,
  `email_address` varchar(50) DEFAULT '0',
  `phone` varchar(50) DEFAULT '0',
  `status` varchar(20) DEFAULT NULL,
  `enquiry_date` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `activation_type_id` int(11) DEFAULT NULL,
  `expense` varchar(100) DEFAULT NULL,
  `expense_date` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `project_status_id` int(11) DEFAULT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `project_owner` varchar(50) DEFAULT NULL,
  `project_sqft` varchar(20) DEFAULT NULL,
  `project_description` varchar(1000) DEFAULT NULL,
  `project_amount` varchar(10) DEFAULT NULL,
  `project_address` varchar(500) DEFAULT NULL,
  `photo` varchar(10) DEFAULT NULL,
  `pro_old_balance` varchar(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `category_id`, `project_status_id`, `project_name`, `project_owner`, `project_sqft`, `project_description`, `project_amount`, `project_address`, `photo`, `pro_old_balance`, `user_id`, `date`) VALUES
(1, NULL, 1, 'Mithra 3BHK Apartments', 'Mithra', '23', '7y5rt9i7y-0p987=[', NULL, '36w54896709754u87', '1.png', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_image`
--

CREATE TABLE `project_image` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `id` int(11) NOT NULL,
  `project_status_name` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime(6) DEFAULT NULL,
  `updated_at` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_status`
--

INSERT INTO `project_status` (`id`, `project_status_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Upcoming Projects', 1, NULL, NULL),
(2, 'Progress Projects', 1, NULL, NULL),
(3, 'Completed Projects', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `value` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'name', 'Devi Finance', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(2, 'interest_month', '12', '2026-01-21 10:58:13', NULL),
(3, 'metadata', 'Devi Finance', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(4, 'description', 'Devi Finance', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(5, 'header', 'upload/settings/header_1768825523.PNG', '2026-01-19 17:55:23', NULL),
(6, 'logo', 'upload/settings/logo_1768820678.png', '2026-01-19 16:34:38', NULL),
(7, 'share_image', 'upload/settings/share_image_1748686209.png', '2025-05-31 15:40:09', NULL),
(8, 'email', 'Subadurai1978@gmail.com', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(9, 'phone', '+91 96551 67607', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(10, 'address', '15-1c, udayarvilai junction\r\nColachel Post - 629251', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(11, 'map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63187.12470749036!2d77.2029486216797!3d8.183072200000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b04fdfc3ba4b191%3A0xc66536303d932c80!2sUdayaarvilai!5e0!3m2!1sen!2sin!4v1768824918031!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(12, 'facebook', 'https://www.facebook.com/', '2025-06-23 12:53:44', NULL),
(13, 'youtube', 'https://www.youtube.com/@ANAKUZHIASAN', '2025-06-23 12:53:44', NULL),
(14, 'instagram', 'https://www.instagram.com/', '2025-06-23 12:53:44', NULL),
(15, 'thread', 'https://www.threads.com/?hl=en', '2025-06-23 12:53:44', NULL),
(16, 'bussiness_area', 'South India, Nagercoil', '2025-06-23 12:53:44', NULL),
(17, 'website_url', 'https://devifinance.aotsinc.com/', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(18, 'interest_type', '2', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(19, 'interst_terms', '2', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(20, 'loan_interest_type', '2', '2026-01-22 12:21:46', '2026-01-22 09:49:01'),
(21, 'loan_interst_terms', '1', '2026-01-22 12:21:46', '2026-01-22 09:49:01'),
(22, 'loan_interest_month', '1', '2026-01-21 10:58:13', NULL),
(23, 'home_title', 'Devi Finance', '2026-01-23 14:07:04', NULL),
(24, 'home_description', 'Devi Finance offers quick and secure gold loans with transparent pricing and instant approval. Turn your gold into financial support when you need it most.', '2026-01-23 14:07:04', NULL),
(25, 'home_image', 'upload/settings/home_image_1768820614.png', '2026-01-19 16:33:34', NULL),
(26, 'about_us_description', 'Devi Finance is a trusted gold loan finance company committed to helping individuals meet their financial needs with ease and security. We offer quick approvals, fair valuations, and  ensuring your gold is safe while you receive reliable financial support.', '2026-01-23 14:07:04', NULL),
(27, 'about_us_image', 'upload/settings/about_us_image_1768821185.jpg', '2026-01-19 16:43:05', NULL),
(28, 'about_us_vision', 'To be a trusted and leading gold loan finance company, empowering people with quick, secure, and transparent financial solutions.', '2026-01-23 14:07:04', NULL),
(29, 'about_us_mission', 'To provide fast and hassle-free gold loans with fair value, secure handling, and customer-focused service while maintaining trust, transparency, and integrity in every transaction.', '2026-01-23 14:07:04', NULL),
(30, 'gold_loan', '1', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(31, 'loan', '1', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(32, 'deposit', '1', '2026-01-23 12:28:11', '2026-01-22 09:49:01'),
(33, 'compound_interest', '1', NULL, NULL),
(34, 'compound_days', '15', NULL, NULL),
(35, 'favicon', 'upload/settings/favicon_1770895125.png', NULL, NULL),
(36, 'deposit_interest_type', '1', NULL, NULL),
(37, 'deposit_interst_terms', '1', NULL, NULL),
(38, 'chit', '1', NULL, NULL),
(39, 'maximum_amount', '9000', NULL, NULL),
(40, 'receipts_ype', 'goldreceipt', NULL, NULL),
(41, 'template', 'index_2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stafs_salery`
--

CREATE TABLE `stafs_salery` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `working_days` varchar(10) DEFAULT NULL,
  `present` varchar(10) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT 0.00,
  `salary_month` varchar(20) DEFAULT NULL,
  `paid_amount` decimal(10,2) DEFAULT 0.00,
  `balance` decimal(10,2) DEFAULT 0.00,
  `leaves` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(10) NOT NULL,
  `activation_type_id` int(2) DEFAULT NULL,
  `table_no` int(1) DEFAULT NULL,
  `old_hand_cash` varchar(10) DEFAULT NULL,
  `old_bank_cash` varchar(10) DEFAULT NULL,
  `old_bank_gold` varchar(10) DEFAULT NULL,
  `old_hand_gold` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `login_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_types_id` int(11) DEFAULT NULL,
  `full_name` varchar(191) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `mobile_number` varchar(12) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `password` varchar(191) DEFAULT NULL,
  `cpassword` varchar(20) DEFAULT NULL,
  `status` varchar(191) DEFAULT '1',
  `wallet` decimal(10,2) NOT NULL DEFAULT 0.00,
  `salery` decimal(10,0) NOT NULL DEFAULT 0,
  `gold_loan` int(1) DEFAULT 0,
  `chit` int(2) DEFAULT 0,
  `loan` int(1) NOT NULL DEFAULT 0,
  `deposit` int(1) NOT NULL DEFAULT 0,
  `dashboard` int(1) NOT NULL DEFAULT 0,
  `add_user` int(1) NOT NULL DEFAULT 0,
  `edit_user` int(1) NOT NULL DEFAULT 0,
  `delete_user` int(1) NOT NULL DEFAULT 0,
  `view_user` int(1) NOT NULL DEFAULT 0,
  `add_customers` int(1) NOT NULL DEFAULT 0,
  `edit_customers` int(1) NOT NULL DEFAULT 0,
  `delete_customers` int(1) NOT NULL DEFAULT 0,
  `view_customers` int(1) NOT NULL DEFAULT 0,
  `gold_customers` int(1) NOT NULL DEFAULT 0,
  `deposit_customers` int(1) NOT NULL DEFAULT 0,
  `loan_customers` int(1) NOT NULL DEFAULT 0,
  `gold_loan_activity` int(1) NOT NULL DEFAULT 0,
  `deposit_loan_activity` int(1) NOT NULL DEFAULT 0,
  `customer_loan_activity` int(1) NOT NULL DEFAULT 0,
  `gold_report` int(1) NOT NULL DEFAULT 0,
  `deposit_report` int(1) NOT NULL DEFAULT 0,
  `loan_report` int(1) NOT NULL DEFAULT 0,
  `expense` int(1) NOT NULL DEFAULT 0,
  `remind` int(1) NOT NULL DEFAULT 0,
  `view_bank` int(1) NOT NULL DEFAULT 0,
  `add_bank` int(1) NOT NULL DEFAULT 0,
  `edit_bank` int(1) NOT NULL DEFAULT 0,
  `move_to_bank` int(1) NOT NULL DEFAULT 0,
  `setting` int(1) NOT NULL DEFAULT 0,
  `backup` int(1) NOT NULL DEFAULT 0,
  `general` int(11) NOT NULL DEFAULT 0,
  `view_expense_type` int(1) NOT NULL DEFAULT 0,
  `add_expense_type` int(1) NOT NULL DEFAULT 0,
  `edit_expense_type` int(1) NOT NULL DEFAULT 0,
  `delete_expense_type` int(1) NOT NULL DEFAULT 0,
  `view_expense` int(1) NOT NULL DEFAULT 0,
  `add_expense` int(1) NOT NULL DEFAULT 0,
  `edit_expense` int(1) NOT NULL DEFAULT 0,
  `delete_expense` int(1) NOT NULL DEFAULT 0,
  `dob` varchar(33) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `states` varchar(10) DEFAULT '1',
  `district_id` int(11) DEFAULT NULL,
  `taluk_id` int(11) DEFAULT NULL,
  `village_id` int(11) DEFAULT NULL,
  `address` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `center_id` int(11) DEFAULT 0,
  `profile_photo` text DEFAULT NULL,
  `aadhar_number` varchar(12) DEFAULT NULL,
  `accountNo` varchar(25) DEFAULT NULL,
  `bankName` varchar(25) DEFAULT NULL,
  `bankBranch` varchar(25) DEFAULT NULL,
  `ifscCode` varchar(25) DEFAULT NULL,
  `pancardNo` varchar(25) DEFAULT NULL,
  `fcm_token` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_types_id`, `full_name`, `first_name`, `last_name`, `gender`, `mobile_number`, `email`, `password`, `cpassword`, `status`, `wallet`, `salery`, `gold_loan`, `chit`, `loan`, `deposit`, `dashboard`, `add_user`, `edit_user`, `delete_user`, `view_user`, `add_customers`, `edit_customers`, `delete_customers`, `view_customers`, `gold_customers`, `deposit_customers`, `loan_customers`, `gold_loan_activity`, `deposit_loan_activity`, `customer_loan_activity`, `gold_report`, `deposit_report`, `loan_report`, `expense`, `remind`, `view_bank`, `add_bank`, `edit_bank`, `move_to_bank`, `setting`, `backup`, `general`, `view_expense_type`, `add_expense_type`, `edit_expense_type`, `delete_expense_type`, `view_expense`, `add_expense`, `edit_expense`, `delete_expense`, `dob`, `created_at`, `updated_at`, `states`, `district_id`, `taluk_id`, `village_id`, `address`, `login_id`, `center_id`, `profile_photo`, `aadhar_number`, `accountNo`, `bankName`, `bankBranch`, `ifscCode`, `pancardNo`, `fcm_token`) VALUES
(1, 1, 'Software', NULL, 'a', 'Male', '1234567890', 'universekannan@gmail.com', '$2y$10$xQbKheWI/acrAKRmLD9AYOtOwt8THcgh4A2I.vwVQOdtUVklLx2A.', NULL, '1', 0.00, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, '2026-01-21 05:00:27', '1', NULL, NULL, NULL, 'Nagercovil', NULL, 1, 'upload/profile_photo/1.png', '1', '1', '1', '1', '11', '1', 0),
(9, 2, 'Admin', NULL, 'Manager', 'male', '+91 96551676', 'jasconstruction@gmail.com', '$2y$10$wHxOlzJllm8OWPA6Vw2piOF0DzqGozEo27cVLbCSL0ep68W/fdDtq', NULL, '1', 0.00, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, NULL, '2026-01-22 22:52:32', '2026-02-18 12:18:35', '1', NULL, NULL, NULL, 'Nagercoil', NULL, 0, NULL, '502865657653', '16400100013956', 'federal', 'eraniel', 'FDRL0001640', 'DWVPS6818G', NULL),
(10, 5, 'Laila jeyanthi', NULL, 'Finance', 'female', '7904070274', 'lailarajan33@gmail.com', '$2y$10$DTVGzM5u7AsQx2B0Dv.dleyasEg9b0c1nXufM6pc90/QGGeNJm2Zi', NULL, '1', 0.00, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 0, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, NULL, '2026-02-20 10:46:42', '2026-02-21 11:10:51', '1', NULL, NULL, NULL, 'Udaiyarvillai', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 5, 'Ramya', NULL, NULL, 'female', '6374513480', 'ramya141999@gmail.com', '$2y$10$ssXNv1K0D8jdG/AH7HTVgeN9bG/Zg9Ef9ZPAVU5pYSF8cd7f50oRu', NULL, '1', 0.00, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 0, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, NULL, '2026-02-21 11:12:29', '2026-02-21 11:12:29', '1', NULL, NULL, NULL, 'Uadayarvalai', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(11) NOT NULL,
  `user_types_id` int(11) DEFAULT NULL,
  `user_types_name` varchar(191) NOT NULL,
  `gold_loan` int(1) DEFAULT 0,
  `chit` int(2) DEFAULT 0,
  `loan` int(1) NOT NULL DEFAULT 0,
  `deposit` int(1) NOT NULL DEFAULT 0,
  `dashboard` int(1) NOT NULL DEFAULT 0,
  `add_user` int(1) NOT NULL DEFAULT 0,
  `edit_user` int(1) NOT NULL DEFAULT 0,
  `delete_user` int(1) NOT NULL DEFAULT 0,
  `view_user` int(1) NOT NULL DEFAULT 0,
  `add_customers` int(1) NOT NULL DEFAULT 0,
  `edit_customers` int(1) NOT NULL DEFAULT 0,
  `delete_customers` int(1) NOT NULL DEFAULT 0,
  `view_customers` int(1) NOT NULL DEFAULT 0,
  `gold_customers` int(1) NOT NULL DEFAULT 0,
  `deposit_customers` int(1) NOT NULL DEFAULT 0,
  `loan_customers` int(1) NOT NULL DEFAULT 0,
  `gold_loan_activity` int(1) NOT NULL DEFAULT 0,
  `deposit_loan_activity` int(1) NOT NULL DEFAULT 0,
  `customer_loan_activity` int(1) NOT NULL DEFAULT 0,
  `gold_report` int(1) NOT NULL DEFAULT 0,
  `deposit_report` int(1) NOT NULL DEFAULT 0,
  `loan_report` int(1) NOT NULL DEFAULT 0,
  `expense` int(1) NOT NULL DEFAULT 0,
  `remind` int(1) NOT NULL DEFAULT 0,
  `view_bank` int(1) NOT NULL DEFAULT 0,
  `add_bank` int(1) NOT NULL DEFAULT 0,
  `edit_bank` int(1) NOT NULL DEFAULT 0,
  `move_to_bank` int(1) NOT NULL DEFAULT 0,
  `setting` int(1) NOT NULL DEFAULT 0,
  `backup` int(1) NOT NULL DEFAULT 0,
  `general` int(11) NOT NULL DEFAULT 0,
  `view_expense_type` int(1) NOT NULL DEFAULT 0,
  `add_expense_type` int(1) NOT NULL DEFAULT 0,
  `edit_expense_type` int(1) NOT NULL DEFAULT 0,
  `delete_expense_type` int(1) NOT NULL DEFAULT 0,
  `view_expense` int(1) NOT NULL DEFAULT 0,
  `add_expense` int(1) NOT NULL DEFAULT 0,
  `edit_expense` int(1) NOT NULL DEFAULT 0,
  `delete_expense` int(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `user_types_id`, `user_types_name`, `gold_loan`, `chit`, `loan`, `deposit`, `dashboard`, `add_user`, `edit_user`, `delete_user`, `view_user`, `add_customers`, `edit_customers`, `delete_customers`, `view_customers`, `gold_customers`, `deposit_customers`, `loan_customers`, `gold_loan_activity`, `deposit_loan_activity`, `customer_loan_activity`, `gold_report`, `deposit_report`, `loan_report`, `expense`, `remind`, `view_bank`, `add_bank`, `edit_bank`, `move_to_bank`, `setting`, `backup`, `general`, `view_expense_type`, `add_expense_type`, `edit_expense_type`, `delete_expense_type`, `view_expense`, `add_expense`, `edit_expense`, `delete_expense`, `created_at`, `updated_at`, `status`) VALUES
(1, 1, 'Superadmin', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-06-07 11:42:03', '2022-06-07 11:42:08', 1),
(2, 2, 'Manager', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-06-07 06:11:55', '2022-06-07 06:11:55', 1),
(3, 3, 'Cashier', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-06-07 06:12:39', '2022-06-07 06:12:39', 1),
(4, 4, 'Appraiser', 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2022-06-07 06:12:39', '2022-06-07 06:12:39', 1),
(5, NULL, 'User', 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounting_year`
--
ALTER TABLE `accounting_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activation_type`
--
ALTER TABLE `activation_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_image`
--
ALTER TABLE `project_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_status`
--
ALTER TABLE `project_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stafs_salery`
--
ALTER TABLE `stafs_salery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounting_year`
--
ALTER TABLE `accounting_year`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activation_type`
--
ALTER TABLE `activation_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_image`
--
ALTER TABLE `project_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_status`
--
ALTER TABLE `project_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `stafs_salery`
--
ALTER TABLE `stafs_salery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
