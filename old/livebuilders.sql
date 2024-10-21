-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2023 at 03:04 PM
-- Server version: 10.1.48-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `livebuilders`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_project`
--

CREATE TABLE `assign_project` (
  `id` int(11) NOT NULL,
  `assign_project_id` int(11) DEFAULT NULL,
  `assign_project_user_id` int(11) DEFAULT NULL,
  `assign_project_description` varchar(1000) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time_in` varchar(10) NOT NULL,
  `time_out` varchar(10) DEFAULT NULL,
  `states` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `status`) VALUES
(1, 'Completed Projects', 'Active'),
(2, 'Progress Projects', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `chat_message` varchar(500) DEFAULT NULL,
  `to_id` int(10) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` int(11) NOT NULL,
  `equipment_name` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `stock` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `more_images`
--

CREATE TABLE `more_images` (
  `id` int(10) NOT NULL,
  `products_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) NOT NULL,
  `project_id` int(10) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `payed` varchar(100) DEFAULT NULL,
  `balance` varchar(100) DEFAULT NULL,
  `old_balance` varchar(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `states` varchar(10) DEFAULT NULL,
  `staff_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `category_id` int(10) NOT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `project_owner` varchar(50) DEFAULT NULL,
  `project_mobile` varchar(20) DEFAULT NULL,
  `project_email` varchar(50) DEFAULT NULL,
  `project_amount` varchar(10) DEFAULT NULL,
  `project_address` varchar(500) DEFAULT NULL,
  `photo` varchar(10) DEFAULT NULL,
  `pro_old_balance` varchar(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `category_id`, `project_name`, `project_owner`, `project_mobile`, `project_email`, `project_amount`, `project_address`, `photo`, `pro_old_balance`, `user_id`, `date`) VALUES
(1, 1, 'Building 1', 'Live Builders', '8608007005', 'infolivebuilders@yahoo.com', '50,0000', 'Tambaram(Chennai)', '1.jpg', NULL, 1, NULL),
(2, 1, 'Building 2', 'Live Builders', '8608007005', 'infolivebuilders@yahoo.com', '50,0000', 'Tambaram(Chennai)', '2.jpg', NULL, 1, NULL),
(3, 1, 'Building 3', 'Live Builders', '8608007005', 'infolivebuilders@yahoo.com', '50,0000', 'Tambaram(Chennai)', '3.jpg', NULL, 1, NULL),
(4, 1, 'Building 4', 'Live Builders', '8608007005', 'infolivebuilders@yahoo.com', '50,000', 'Tambaram(Chennai)', '4.jpg', NULL, 1, NULL),
(5, 1, 'Building 5', 'Live Builders', '8608007005', 'infolivebuilders@yahoo.com', '50,000', 'Tambaram(Chennai)', '5.jpg', NULL, 1, NULL),
(6, 1, 'Building 6', 'Live Builders', '8608007005', 'infolivebuilders@yahoo.com', '50,00000', 'Tambaram(Chennai)', '6.jpg', NULL, 1, NULL),
(7, 2, 'Iniya 2 & 3 BHK Apartments', '', '', '', '50,00000', '<div class=\"wt-post-media wt-img-effect zoom-slow\">\r\n   <img src=\"admin/photo/image/liveo1-6.jpg\" alt=\"\">\r\n</div>', '7.jpg', NULL, 1, NULL),
(8, 1, 'Building 7', 'Live Builders', '8608007005', 'infolivebuilders@yahoo.com', '50,0000', 'East Tambaram(Chennai)', '8.jpg', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(10) NOT NULL,
  `project_id` int(10) NOT NULL,
  `hours` varchar(10) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `payed` varchar(100) DEFAULT NULL,
  `balance` varchar(100) DEFAULT NULL,
  `old_balance` varchar(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `states` varchar(10) DEFAULT NULL,
  `staff_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sda_image`
--

CREATE TABLE `sda_image` (
  `id` int(10) NOT NULL,
  `project_id` varchar(10) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sda_image`
--

INSERT INTO `sda_image` (`id`, `project_id`, `photo`) VALUES
(1, '6', '1.jpg'),
(2, '6', '2.jpg'),
(3, '6', '3.jpg'),
(4, '6', '4.jpg'),
(5, '6', '5.jpg'),
(6, '6', '6.jpg'),
(7, '6', '7.jpg'),
(8, '6', '8.jpg'),
(9, '7', '9.jpg'),
(10, '7', '10.jpg'),
(11, '7', '11.jpg'),
(12, '7', '12.jpg'),
(13, '7', '13.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `equ_id` int(11) DEFAULT NULL,
  `qty` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `equ_id` int(11) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `mobile` int(11) NOT NULL,
  `facebook` varchar(1000) NOT NULL,
  `twitter` varchar(1000) NOT NULL,
  `linkedin` varchar(1000) NOT NULL,
  `address` varchar(200) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `user_id` int(10) NOT NULL,
  `photo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `designation`, `mobile`, `facebook`, `twitter`, `linkedin`, `address`, `user_type`, `status`, `date`, `user_id`, `photo`) VALUES
(1, 'Live Builders', 'livebuilders@gmail.com', 'Admin', '12345', 1234567890, 'CEO', 'Managing Director', 'linked.com', 'Kanyakumari', 'admin', 'Active', '2019-05-15', 0, '1-u.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_project`
--
ALTER TABLE `assign_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `more_images`
--
ALTER TABLE `more_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sda_image`
--
ALTER TABLE `sda_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
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
-- AUTO_INCREMENT for table `assign_project`
--
ALTER TABLE `assign_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `more_images`
--
ALTER TABLE `more_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sda_image`
--
ALTER TABLE `sda_image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
