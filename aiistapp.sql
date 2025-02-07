-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2025 at 05:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aiistapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `formsaletable`
--

CREATE TABLE `formsaletable` (
  `formSaleId` int(11) NOT NULL,
  `prospectiveFullName` varchar(255) NOT NULL,
  `prospectiveContact1` varchar(15) NOT NULL,
  `prospectiveContact2` varchar(15) DEFAULT NULL,
  `prospectiveWhatAppContact` varchar(15) DEFAULT NULL,
  `prospectiveAddress` varchar(255) NOT NULL,
  `prspectiveFormPurchase` varchar(5) NOT NULL,
  `prospectiveInvoiceNum` int(11) NOT NULL,
  `prospectiveFormNo` int(11) NOT NULL,
  `formSaleCreatedLoggedBy` varchar(255) DEFAULT NULL,
  `formSaleCreated` datetime DEFAULT current_timestamp(),
  `formSaleUpdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `prospectiveStatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formsaletable`
--

INSERT INTO `formsaletable` (`formSaleId`, `prospectiveFullName`, `prospectiveContact1`, `prospectiveContact2`, `prospectiveWhatAppContact`, `prospectiveAddress`, `prspectiveFormPurchase`, `prospectiveInvoiceNum`, `prospectiveFormNo`, `formSaleCreatedLoggedBy`, `formSaleCreated`, `formSaleUpdated`, `prospectiveStatus`) VALUES
(1, 'Prince Tulay', '+231775577736', '+231775577736', '+231775577736', 'New Georgia Gulf', 'BBM', 53, 22, '7', '2025-01-17 22:55:25', '2025-01-18 13:29:29', 'Pending'),
(2, 'Prince Tulay', '+231775577736', '+231775577736', '+231775577736', 'New Georgia Gulf', 'BBM', 56, 256, '7', '2025-01-17 23:16:20', '2025-01-18 13:02:43', 'Pending'),
(3, 'Prince Tulay', '+231775577736', '+231775577736', '+231775577736', 'New Georgia Gulf', 'BBM', 5690, 25677, '7', '2025-01-17 23:40:13', '2025-01-18 13:11:08', 'Pending'),
(4, 'Paul Mark', '+231775577736', '+231775577736', '', 'this is the comment example', 'BBM', 89, 767, '8', '2025-01-18 13:34:13', '2025-01-18 21:41:16', 'Pending'),
(5, 'David Paye', '393939393939', '+231775577736', '+231775577736', 'this is the comment example', 'AA', 898, 7670, '7', '2025-01-18 21:43:06', '2025-01-18 21:43:26', 'Enrolled');

-- --------------------------------------------------------

--
-- Table structure for table `olineinquirytable`
--

CREATE TABLE `olineinquirytable` (
  `onlineInquiryId` int(11) NOT NULL,
  `LeadFullName` varchar(255) NOT NULL,
  `leadMainContact` varchar(15) NOT NULL,
  `leadContact2` varchar(15) DEFAULT NULL,
  `leadWhatappNum` varchar(15) DEFAULT NULL,
  `leadAddress` varchar(255) NOT NULL,
  `leadStatus` varchar(15) DEFAULT NULL,
  `leadCreatedLoggedBy` varchar(255) DEFAULT NULL,
  `aedIfoogAt` datetime DEFAULT current_timestamp(),
  `leadUpdatedAt` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `olineinquirytable`
--

INSERT INTO `olineinquirytable` (`onlineInquiryId`, `LeadFullName`, `leadMainContact`, `leadContact2`, `leadWhatappNum`, `leadAddress`, `leadStatus`, `leadCreatedLoggedBy`, `aedIfoogAt`, `leadUpdatedAt`) VALUES
(2, 'Johnson Fallah', '+2313434343', '+23155673567', '+23130303030', 'this is the comment example', 'Contacted', '7', '2025-01-17 23:15:04', '2025-01-18 21:46:03'),
(3, 'Johnson Fallah', '+2313434343', '+23155673567', '+23130303030', 'New Georgia Gulf', 'Contacted', '7', '2025-01-17 23:39:27', '2025-01-17 23:52:07'),
(4, 'Paul Mark', '+2313434343', '+23155673567', '+23130303030', 'this is the comment example', 'Inquirey Closed', '7', '2025-01-17 23:39:36', '2025-01-17 23:52:54'),
(5, 'Paul Mark', '+2313434343', '+23155673567', '+23130303030', 'this is the comment example', 'Contacted', '7', '2025-01-17 23:52:26', '2025-01-18 21:39:59'),
(6, 'Paul Mark', '+2313434343', '+23155673567', '+23130303030', 'this is the comment example', 'Inquirey Closed', '7', '2025-01-17 23:52:39', '2025-01-18 13:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `userloginlog`
--

CREATE TABLE `userloginlog` (
  `logInUserId` int(11) NOT NULL,
  `userRealId` int(11) NOT NULL,
  `loginInTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userloginlog`
--

INSERT INTO `userloginlog` (`logInUserId`, `userRealId`, `loginInTime`) VALUES
(1, 7, '2025-01-14 15:46:51'),
(2, 6, '2025-01-14 15:58:02'),
(3, 7, '2025-01-14 16:01:29'),
(4, 6, '2025-01-14 16:01:39'),
(5, 6, '2025-01-14 16:06:42'),
(6, 7, '2025-01-14 16:16:47'),
(7, 6, '2025-01-14 16:25:06'),
(8, 6, '2025-01-14 20:32:48'),
(9, 6, '2025-01-14 22:33:44'),
(10, 7, '2025-01-14 22:34:25'),
(11, 6, '2025-01-14 22:35:29'),
(12, 7, '2025-01-14 22:36:01'),
(13, 6, '2025-01-14 22:36:49'),
(14, 8, '2025-01-15 00:09:01'),
(15, 8, '2025-01-15 00:09:35'),
(16, 8, '2025-01-15 15:17:19'),
(17, 7, '2025-01-15 15:19:20'),
(18, 8, '2025-01-17 14:37:52'),
(19, 6, '2025-01-17 14:40:56'),
(20, 7, '2025-01-17 14:41:59'),
(21, 7, '2025-01-17 16:34:43'),
(22, 6, '2025-01-17 18:38:50'),
(23, 6, '2025-01-17 19:12:11'),
(24, 7, '2025-01-17 19:29:22'),
(25, 6, '2025-01-17 19:32:12'),
(26, 8, '2025-01-17 19:33:27'),
(27, 6, '2025-01-17 19:33:53'),
(28, 7, '2025-01-17 22:49:38'),
(29, 6, '2025-01-17 23:15:23'),
(30, 7, '2025-01-17 23:15:53'),
(31, 6, '2025-01-17 23:17:00'),
(32, 7, '2025-01-17 23:19:23'),
(33, 6, '2025-01-17 23:27:28'),
(34, 7, '2025-01-17 23:39:13'),
(35, 6, '2025-01-17 23:40:26'),
(36, 7, '2025-01-17 23:51:04'),
(37, 6, '2025-01-17 23:51:30'),
(38, 7, '2025-01-17 23:51:59'),
(39, 6, '2025-01-17 23:53:12'),
(40, 6, '2025-01-18 06:40:37'),
(41, 7, '2025-01-18 10:42:45'),
(42, 6, '2025-01-18 10:43:59'),
(43, 11, '2025-01-18 10:47:49'),
(44, 6, '2025-01-18 10:48:04'),
(45, 6, '2025-01-18 10:52:17'),
(46, 6, '2025-01-18 10:53:36'),
(47, 6, '2025-01-18 10:53:49'),
(48, 7, '2025-01-18 11:21:44'),
(49, 7, '2025-01-18 11:25:52'),
(50, 7, '2025-01-18 11:27:34'),
(51, 7, '2025-01-18 11:31:12'),
(52, 6, '2025-01-18 13:31:16'),
(53, 8, '2025-01-18 13:33:27'),
(54, 6, '2025-01-18 13:34:41'),
(55, 6, '2025-01-18 21:37:25'),
(56, 7, '2025-01-18 21:37:55'),
(57, 6, '2025-01-18 21:43:48'),
(58, 7, '2025-01-18 21:45:09'),
(59, 6, '2025-02-07 04:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userAccessType` enum('admin','contactlogger') NOT NULL,
  `userStatus` enum('active','inactive') NOT NULL DEFAULT 'active',
  `userCreatedLoggedBy` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPassword`, `userAccessType`, `userStatus`, `userCreatedLoggedBy`, `createdAt`, `updatedAt`) VALUES
(6, 'Tarnue i Borbor', 'admin@gmail.com', '$2y$10$ASd7Shp8eZ5vvPNINH5MQuklmFUKszgjtS27MYv4PUBj7CDp32tbq', 'admin', 'active', '1', '2025-01-14 00:01:48', '2025-02-07 04:19:53'),
(7, 'Jassa V. Dorley', 'testuser@gmail.com', '$2y$10$ASd7Shp8eZ5vvPNINH5MQuklmFUKszgjtS27MYv4PUBj7CDp32tbq', 'contactlogger', 'active', '1', '2025-01-14 00:10:44', '2025-02-07 04:20:07'),
(8, 'Mr. Test User2', 'testuser2@gmail.com', '$2y$10$ASd7Shp8eZ5vvPNINH5MQuklmFUKszgjtS27MYv4PUBj7CDp32tbq', 'contactlogger', 'active', '1', '2025-01-14 20:35:27', '2025-02-07 04:20:12'),
(9, 'Prince Tulay', 'Prince@gmail.com', '$2y$10$ASd7Shp8eZ5vvPNINH5MQuklmFUKszgjtS27MYv4PUBj7CDp32tbq', 'contactlogger', 'inactive', '1', '2025-01-14 20:55:23', '2025-02-07 04:20:03'),
(10, 'Tarnue Pythagoras Borbor', 'testuser3@gmail.com', '$2y$10$ASd7Shp8eZ5vvPNINH5MQuklmFUKszgjtS27MYv4PUBj7CDp32tbq', 'admin', 'active', '1', '2025-01-14 20:56:12', '2025-02-07 04:19:58'),
(11, 'adminr@gmail.com', 'admintt@gmail.com', '$2y$10$ASd7Shp8eZ5vvPNINH5MQuklmFUKszgjtS27MYv4PUBj7CDp32tbq', 'contactlogger', 'active', '1', '2025-01-18 08:37:08', '2025-02-07 04:19:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formsaletable`
--
ALTER TABLE `formsaletable`
  ADD PRIMARY KEY (`formSaleId`);

--
-- Indexes for table `olineinquirytable`
--
ALTER TABLE `olineinquirytable`
  ADD PRIMARY KEY (`onlineInquiryId`);

--
-- Indexes for table `userloginlog`
--
ALTER TABLE `userloginlog`
  ADD PRIMARY KEY (`logInUserId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formsaletable`
--
ALTER TABLE `formsaletable`
  MODIFY `formSaleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `olineinquirytable`
--
ALTER TABLE `olineinquirytable`
  MODIFY `onlineInquiryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userloginlog`
--
ALTER TABLE `userloginlog`
  MODIFY `logInUserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
