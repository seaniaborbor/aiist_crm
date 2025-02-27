-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2025 at 08:01 AM
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
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `SubProgramID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseID`, `CourseName`, `SubProgramID`) VALUES
(1, 'Diploma in Office Productivity', 1),
(2, 'Diploma in Business Management System', 1),
(3, 'Diploma in Information Management System', 1),
(4, 'Diploma in Entrepreneurship', 1),
(5, 'Diploma in Computerize Accounting', 1),
(6, 'Diploma in Hotel Management', 1),
(7, 'Diploma in Electricity Installation & Maintenance', 1),
(8, 'Diploma in Customer Relations Management', 1),
(9, 'Diploma in Standard English', 1),
(10, 'Certificate in Computer Literacy 182', 2),
(11, 'Certificate in Office Applications', 2),
(12, 'B&C Certificate in Teachers Education', 2),
(13, 'Certificate in Accelerated English Language art.', 2),
(14, 'Certificate in cosmetology', 2),
(15, 'Certificate in Pastry', 2),
(16, 'Certificate in Fashion Design', 2),
(17, 'Certificate in Catering', 2),
(18, 'Certificate in Microsoft Excel Masterclass', 2),
(19, 'Certificate in Plumbing', 2),
(20, 'AlIST Certificate in Cisco Certified Technician', 3),
(21, 'AlIST Professional Certificate in Cisco Network Associate', 3),
(22, 'AlIST Professional Certificate in Cisco Network Professional', 3),
(23, 'AlIST Foundation Certificate in Ethical Hacking', 4),
(24, 'AlIST Associate Diploma in Certified Ethical Hacking', 4),
(25, 'AlIST Professional Diploma in Certified Ethical Hacking', 4),
(26, 'AlIST Expert Diploma in Certified Ethical Hacking', 4),
(27, 'AllST Professional Diploma in Information Technology', 5),
(28, 'AllST Professional Diploma in Database Technology', 5),
(29, 'AllST Professional Diploma in Software Engineering', 5),
(30, 'AllST Professional Diploma in Graphic & Web Design', 5),
(31, 'AllST Professional Diploma in Graphic & Print Media', 5),
(32, 'AllST VONORA Certificate in Hair Installation', 6),
(33, 'AllST VONORA Certificate in Make-Up', 6),
(34, 'AllST VONORA Certificate in Mink Lash', 6),
(35, 'AllST VONORA Certificate in Braids', 6),
(36, 'AllST VONORA Certificate in Pedicure & Manicure', 6),
(37, 'AllST VONORA Certificate in Advance Acrylic Nails/Design', 6),
(38, 'AllST VONORA Certificate in Pixie Hair/Dread Locs', 6),
(39, 'AllST VONORA Certificate in Facials', 6),
(40, 'AllST VONORA Certificate in Microblading', 6),
(41, 'AllST VONORA Certificate in Waxing', 6),
(42, 'AllST VONORA Certificate in Holistic Massage/Body Enhancement/Cellulite Therapy, Body Scrub', 6),
(43, 'Associate of Science Degree in Computer Information System', 7),
(44, 'Associate of Science Degree in Computer Programming', 7),
(45, 'Associate of Science Degree in Cyber Security & Assurance', 7),
(46, 'Associate of Science Degree in Computer Science', 7),
(47, 'Associate of Science Degree in Database Administration', 7),
(48, 'Associate of Science Degree in Cloud Computing', 7),
(49, 'Associate of Science Degree in Computer Networking', 7),
(50, 'Associate of Science Degree in Environmental Science', 8),
(51, 'Associate of Science Degree in Electrical Technology', 9),
(52, 'Associate of Science Degree in Electronics Technology', 9),
(53, 'Associate of Science Degree in Business Administration', 10),
(54, 'Associate of Science Degree in Business Management', 10),
(55, 'Associate of Arts Degree in Sociology', 11),
(56, 'Associate of Arts Degree in Social Work', 11),
(57, 'Associate of Arts Degree in Islamic Education', 12),
(58, 'Associate of Arts Degree in Arabic Language', 12);

-- --------------------------------------------------------

--
-- Table structure for table `enrollmentform`
--

CREATE TABLE `enrollmentform` (
  `studId` int(11) NOT NULL,
  `formNum` varchar(50) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) NOT NULL,
  `sex` enum('male','female') NOT NULL,
  `dob` date NOT NULL,
  `placeOfBirth` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `countryOfOrigin` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `highSchool` varchar(255) NOT NULL,
  `yearGraduated` varchar(10) NOT NULL,
  `highSchoolContact` varchar(50) NOT NULL,
  `fatherName` varchar(100) NOT NULL,
  `fatherPhone` varchar(20) NOT NULL,
  `fatherAddress` varchar(255) NOT NULL,
  `motherName` varchar(100) NOT NULL,
  `motherPhone` varchar(20) NOT NULL,
  `motherAddress` varchar(255) NOT NULL,
  `sponsorName` varchar(100) NOT NULL,
  `sponsorPhone` varchar(20) NOT NULL,
  `schoolRecords` enum('Yes','No') NOT NULL,
  `whichOne` varchar(255) DEFAULT NULL,
  `programType` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `preferredClassTime` enum('Mon, Wed, Fri','Tue, Thur, Sat') NOT NULL,
  `timeSlot` enum('8AM-10AM','10AM-12PM','12PM-2PM','2PM-4PM','4PM-6PM') NOT NULL,
  `shirtSize` enum('M','L','XL','XXL') NOT NULL,
  `source` enum('Radio','Internet','Friends','Stickers','Others') NOT NULL,
  `stud_id_num` int(6) NOT NULL,
  `stud_enroll_by` int(10) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollmentform`
--

INSERT INTO `enrollmentform` (`studId`, `formNum`, `firstName`, `middleName`, `lastName`, `sex`, `dob`, `placeOfBirth`, `city`, `countryOfOrigin`, `nationality`, `address`, `phone`, `email`, `highSchool`, `yearGraduated`, `highSchoolContact`, `fatherName`, `fatherPhone`, `fatherAddress`, `motherName`, `motherPhone`, `motherAddress`, `sponsorName`, `sponsorPhone`, `schoolRecords`, `whichOne`, `programType`, `program`, `course`, `preferredClassTime`, `timeSlot`, `shirtSize`, `source`, `stud_id_num`, `stud_enroll_by`, `created_at`, `updated_at`) VALUES
(1, '8999', 'Tarnue ', 'P.', 'Borbor', 'male', '2025-02-20', 'voinjama', 'Monrovia', 'Liberia', 'Liberian', 'New Georgia Gulf', '0777169180', 'admin@gmail.com', 'Johnson Fallah', '2024', 'Jennie High School', 'Momolu Paul', '0777169180', 'New Georgia Gulf', 'Fanta Momolule', '0777169180', 'New Georgia ', 'Prince', '0775576272', 'No', 'Mother', 'Certificate & Diploma Programs', 'Diploma Programs', 'Diploma in Business Management System', 'Mon, Wed, Fri', '8AM-10AM', 'M', 'Internet', 0, 0, '2025-02-23 03:19:05.000000', '2025-02-23 03:19:05.000000'),
(2, '8999', 'Maary ', 'S', 'Tarr', 'male', '0000-00-00', 'voinjama', 'Monrovia', 'Liberia', 'Liberian', 'New Georgia Gulf', '0777169180', 'admin@gmail.com', 'Johnson Fallah', '2024', 'Jennie High School', 'Momolu Paul', '0777169180', 'New Georgia Gulf', 'Fanta Momolule', '0777169180', 'New Georgia ', 'Prince', '0775576272', 'No', 'Mother', 'Certificate & Diploma Programs', 'Diploma Programs', 'Diploma in Business Management System', 'Mon, Wed, Fri', '8AM-10AM', 'M', 'Friends', 0, 0, '2025-02-23 20:47:08.038139', '2025-02-23 20:47:08.000000'),
(3, '8999', 'Peter', 'S', 'Johnney', 'female', '2025-02-12', 'voinjama', 'Monrovia', 'Liberia', 'Liberian', 'New Georgia Gulf', '0777169180', 'admin@gmail.com', 'Johnson Fallah', '2024', 'Jennie High School', 'Momolu Paul', '0777169180', 'New Georgia Gulf', 'Fanta Momolule', '0777169180', 'New Georgia ', 'Prince', '0775576272', 'No', 'Mother', 'Non Degree Programs', 'Aiist Career Path', 'AllST Professional Diploma in Information Technology', 'Mon, Wed, Fri', '8AM-10AM', 'M', 'Friends', 0, 0, '2025-02-23 20:48:20.048764', '2025-02-23 20:48:20.000000'),
(4, '8999', 'Jessica', 'S', 'Johnney', 'male', '2025-02-06', 'voinjama', 'Monrovia', 'Liberia', 'Liberian', 'New Georgia Gulf', '0777169180', 'admin@gmail.com', 'Johnson Fallah', '2024', 'Jennie High School', 'Momolu Paul', '0777169180', 'New Georgia Gulf', 'Fanta Momolule', '0777169180', 'New Georgia ', 'Prince', '0775576272', 'No', 'Mother', 'Non Degree Programs', 'Aiist Career Path', 'AllST Professional Diploma in Database Technology', 'Mon, Wed, Fri', '8AM-10AM', 'M', 'Friends', 0, 0, '2025-02-23 20:49:55.677623', '2025-02-23 20:49:55.000000'),
(5, '8999', 'Mark', 'H', 'Nehn', 'female', '2025-02-14', 'voinjama', 'Monrovia', 'Liberia', 'Liberian', 'New Georgia Gulf', '0777169180', 'admin@gmail.com', 'Johnson Fallah', '2024', 'Jennie High School', 'Momolu Paul', '0777169180', 'New Georgia Gulf', 'Fanta Momolule', '0777169180', 'New Georgia ', 'Prince', '0775576272', 'No', 'Mother', 'Certificate & Diploma Programs', 'Diploma Programs', 'Diploma in Office Productivity', 'Mon, Wed, Fri', '8AM-10AM', 'M', 'Internet', 0, 0, '2025-02-23 20:52:01.446119', '2025-02-23 20:52:01.000000'),
(6, '8999', 'Isaac', 'K', 'Dweh', 'female', '2025-02-20', 'voinjama', 'Monrovia', 'Liberia', 'Liberian', 'New Georgia Gulf', '0777169180', 'admin@gmail.com', 'Johnson Fallah', '2024', 'Jennie High School', 'Momolu Paul', '0777169180', 'New Georgia Gulf', 'Fanta Momolule', '0775576272', 'New Georgia ', 'Prince', '0775576272', 'No', 'Mother', 'Degree Programs', 'Degree in Environmental Science', 'Associate of Science Degree in Environmental Science', 'Mon, Wed, Fri', '8AM-10AM', 'M', 'Friends', 0, 0, '2025-02-23 20:54:36.499365', '2025-02-23 20:54:36.000000'),
(7, '22', 'Johnson', 'K', 'Fallah', 'female', '2025-02-12', 'voinjama', 'Monrovia', 'Liberia', 'Liberian', 'New Georgia Gulf', '0777169180', 'admin@gmail.com', 'Johnson Fallah', '2024', 'Jennie High School', 'Momolu Paul', '0777169180', 'New Georgia Gulf', 'Fanta Momolule', '0777169180', 'New Georgia ', 'Prince', '0777169180', 'No', 'Mother', 'Certificate & Diploma Programs', 'Certificate Programs', 'Certificate in Accelerated English Language art.', 'Mon, Wed, Fri', '8AM-10AM', 'M', 'Internet', 0, 0, '2025-02-26 13:50:22.142388', '2025-02-26 13:50:22.000000');

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
  `prospectiveStatus` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formsaletable`
--

INSERT INTO `formsaletable` (`formSaleId`, `prospectiveFullName`, `prospectiveContact1`, `prospectiveContact2`, `prospectiveWhatAppContact`, `prospectiveAddress`, `prspectiveFormPurchase`, `prospectiveInvoiceNum`, `prospectiveFormNo`, `formSaleCreatedLoggedBy`, `formSaleCreated`, `formSaleUpdated`, `prospectiveStatus`) VALUES
(1, 'Prince Tulay', '+231775577736', '+231775577736', '+231775577736', 'New Georgia Gulf', 'BBM', 53, 22, '7', '2025-01-17 22:55:25', '2025-02-23 01:58:03', 'Enrolled'),
(2, 'Prince Tulay', '+231775577736', '+231775577736', '+231775577736', 'New Georgia Gulf', 'BBM', 56, 256, '7', '2025-01-17 23:16:20', '2025-01-18 13:02:43', 'Pending'),
(3, 'Prince Tulay', '+231775577736', '+231775577736', '+231775577736', 'New Georgia Gulf', 'BBM', 5690, 25677, '7', '2025-01-17 23:40:13', '2025-01-18 13:11:08', 'Pending'),
(4, 'Paul Mark', '+231775577736', '+231775577736', '', 'this is the comment example', 'BBM', 89, 767, '8', '2025-01-18 13:34:13', '2025-01-18 21:41:16', 'Pending'),
(6, 'Momolu Kolleh', '+231775577736', '+231775577736', '+231775577736', 'Sinkor Monrovia', 'BBM', 34577, 98778, '11', '2025-02-25 22:32:32', '2025-02-25 22:32:32', 'Pending');

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
  `leadStatus` varchar(40) DEFAULT NULL,
  `leadCreatedLoggedBy` varchar(255) DEFAULT NULL,
  `aedIfoogAt` datetime DEFAULT current_timestamp(),
  `leadUpdatedAt` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `olineinquirytable`
--

INSERT INTO `olineinquirytable` (`onlineInquiryId`, `LeadFullName`, `leadMainContact`, `leadContact2`, `leadWhatappNum`, `leadAddress`, `leadStatus`, `leadCreatedLoggedBy`, `aedIfoogAt`, `leadUpdatedAt`) VALUES
(2, 'Johnson Fallah', '+2313434343', '+23155673567', '+23130303030', 'this is the comment example kk', 'Has Purchased Form', '7', '2025-01-17 23:15:04', '2025-02-26 13:39:09'),
(3, 'Johnson Fallah', '+2313434343', '+23155673567', '+23130303030', 'New Georgia Gulf', 'Inquirey Closed', '7', '2025-01-17 23:39:27', '2025-02-23 01:59:42'),
(4, 'Paul Mark', '+2313434343', '+23155673567', '+23130303030', 'this is the comment example', 'Inquirey Closed', '7', '2025-01-17 23:39:36', '2025-01-17 23:52:54'),
(5, 'Paul Mark', '+2313434343', '+23155673567', '+23130303030', 'this is the comment example', 'Contacted', '7', '2025-01-17 23:52:26', '2025-01-18 21:39:59'),
(6, 'Paul Mark', '+2313434343', '+23155673567', '+23130303030', 'this is the comment example', 'Inquirey Closed', '7', '2025-01-17 23:52:39', '2025-01-18 13:21:59'),
(7, 'Tarnue P. Borbor', '+2313434343', '+23155673567', '39393939393', 'Township of New Georgia, Montserrado county, RL', 'Not Contacted', '11', '2025-02-25 22:33:10', '2025-02-25 22:33:10'),
(8, 'Paul Taylor', '+2313434343', '+23155673567', '39393939393', 'Township of New Georgia, Montserrado county, RL', 'Not Contacted', '11', '2025-02-25 22:37:01', '2025-02-25 22:37:01'),
(9, 'Felix Gaaye', '+2313434343', '+23155673567', '39393939393', 'New Georgia Estate, Monrovia Liberia', 'Has Purchased Form', '11', '2025-02-25 22:39:04', '2025-02-25 22:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `ProgramID` int(11) NOT NULL,
  `ProgramName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`ProgramID`, `ProgramName`) VALUES
(1, 'Certificate & Diploma Programs'),
(2, 'Non Degree Programs'),
(3, 'Degree Programs');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusID` int(11) NOT NULL,
  `ClassStatus` enum('Active','Inactive','Pending','Dropped','Not Started','Started','Completed','Not Completed','Graduated') NOT NULL,
  `IDCardStatus` enum('Not Printed','Not Received') NOT NULL,
  `TShirtStatus` enum('Not Printed','Not Received') NOT NULL,
  `StudID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studprofileimages`
--

CREATE TABLE `studprofileimages` (
  `profileImgId` int(10) NOT NULL,
  `profileImg` varchar(225) NOT NULL,
  `student_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studprofileimages`
--

INSERT INTO `studprofileimages` (`profileImgId`, `profileImg`, `student_id`) VALUES
(1, '1740578410_aa93bdead0472b67c1b1.jpg', 1),
(2, '1740578376_d74b527e62509e2a9fe0.jpg', 7),
(3, '1740578440_3f81b382a1913026dc7b.jpg', 2),
(4, '1740578486_231c3b57b871abe857db.jpg', 3),
(5, '1740578509_474b6c8bfc3c90ac1032.jpg', 5),
(6, '1740578529_3007e404d9190794be47.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `subprograms`
--

CREATE TABLE `subprograms` (
  `SubProgramID` int(11) NOT NULL,
  `SubProgramName` varchar(255) NOT NULL,
  `ProgramID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subprograms`
--

INSERT INTO `subprograms` (`SubProgramID`, `SubProgramName`, `ProgramID`) VALUES
(1, 'Diploma Programs', 1),
(2, 'Certificate Programs', 1),
(3, 'Cisco Networking Programs', 1),
(4, 'Ethical Hacking Programs', 1),
(5, 'Aiist Career Path', 2),
(6, 'Vonora Cosmetology', 2),
(7, 'Degree in Information Technology', 3),
(8, 'Degree in Environmental Science', 3),
(9, 'Degree in Electrical Engineering', 3),
(10, 'Degree in Business Administration', 3),
(11, 'Degree in Social Works', 3),
(12, 'Degree in Islamic Education', 3);

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
(59, 6, '2025-02-07 04:20:34'),
(60, 7, '2025-02-19 02:50:20'),
(61, 7, '2025-02-21 19:10:37'),
(62, 7, '2025-02-22 13:41:49'),
(63, 7, '2025-02-23 01:40:32'),
(64, 6, '2025-02-23 01:43:30'),
(65, 6, '2025-02-23 01:49:20'),
(66, 6, '2025-02-23 01:49:47'),
(67, 7, '2025-02-23 01:57:15'),
(68, 6, '2025-02-23 02:00:10'),
(69, 6, '2025-02-23 02:16:19'),
(70, 6, '2025-02-23 02:16:20'),
(71, 12, '2025-02-23 02:20:09'),
(72, 12, '2025-02-23 02:25:45'),
(73, 12, '2025-02-23 20:23:59'),
(74, 12, '2025-02-24 13:47:57'),
(75, 12, '2025-02-24 15:10:52'),
(76, 12, '2025-02-24 15:18:24'),
(77, 6, '2025-02-24 16:45:15'),
(78, 6, '2025-02-25 04:17:26'),
(79, 12, '2025-02-25 04:17:50'),
(80, 6, '2025-02-25 04:43:38'),
(81, 6, '2025-02-25 15:45:25'),
(82, 7, '2025-02-25 17:47:42'),
(83, 6, '2025-02-25 17:53:59'),
(84, 7, '2025-02-25 18:50:12'),
(85, 6, '2025-02-25 19:00:18'),
(86, 6, '2025-02-25 20:08:32'),
(87, 12, '2025-02-25 20:50:04'),
(88, 6, '2025-02-25 20:50:28'),
(89, 11, '2025-02-25 20:54:19'),
(90, 10, '2025-02-25 20:54:47'),
(91, 11, '2025-02-25 21:00:38'),
(92, 6, '2025-02-25 21:01:05'),
(93, 11, '2025-02-25 22:11:44'),
(94, 6, '2025-02-25 22:40:18'),
(95, 11, '2025-02-25 22:41:36'),
(96, 7, '2025-02-25 23:42:41'),
(97, 12, '2025-02-25 23:43:09'),
(98, 6, '2025-02-25 23:53:33'),
(99, 12, '2025-02-26 00:27:11'),
(100, 7, '2025-02-26 00:27:36'),
(101, 7, '2025-02-26 00:29:33'),
(102, 12, '2025-02-26 00:29:50'),
(103, 7, '2025-02-26 00:32:45'),
(104, 12, '2025-02-26 00:33:32'),
(105, 12, '2025-02-26 00:36:24'),
(106, 6, '2025-02-26 00:36:37'),
(107, 12, '2025-02-26 00:39:29'),
(108, 7, '2025-02-26 00:39:46'),
(109, 7, '2025-02-26 00:41:03'),
(110, 6, '2025-02-26 00:50:33'),
(111, 7, '2025-02-26 00:51:03'),
(112, 6, '2025-02-26 01:21:25'),
(113, 6, '2025-02-26 12:39:44'),
(114, 7, '2025-02-26 12:45:13'),
(115, 6, '2025-02-26 13:40:20'),
(116, 12, '2025-02-26 13:47:51'),
(117, 6, '2025-02-26 14:03:08'),
(118, 6, '2025-02-26 14:10:44'),
(119, 12, '2025-02-26 18:34:24'),
(120, 12, '2025-02-26 18:53:17'),
(121, 12, '2025-02-27 06:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userAccessType` enum('admin','contactlogger','enrollment') NOT NULL,
  `userStatus` enum('active','inactive') NOT NULL DEFAULT 'active',
  `userCreatedLoggedBy` varchar(255) NOT NULL,
  `userPic` varchar(225) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPassword`, `userAccessType`, `userStatus`, `userCreatedLoggedBy`, `userPic`, `createdAt`, `updatedAt`) VALUES
(6, 'Tarnue P Borbor', 'admin@gmail.com', '$2y$10$ASd7Shp8eZ5vvPNINH5MQuklmFUKszgjtS27MYv4PUBj7CDp32tbq', 'admin', 'active', '1', '1740579017_35431711904d4ab07ce3.png', '2025-01-14 00:01:48', '2025-02-26 14:10:17'),
(7, 'Jassa V. Dorley', 'testuser@gmail.com', '$2y$10$ASd7Shp8eZ5vvPNINH5MQuklmFUKszgjtS27MYv4PUBj7CDp32tbq', 'contactlogger', 'active', '1', '1740578708_658e44df243b465d59ac.jpg', '2025-01-14 00:10:44', '2025-02-26 14:05:08'),
(8, 'Mr. Test User2', 'testuser2@gmail.com', '$2y$10$ASd7Shp8eZ5vvPNINH5MQuklmFUKszgjtS27MYv4PUBj7CDp32tbq', 'contactlogger', 'active', '1', '1740578889_f9c0a2269a3c499c68b7.jpg', '2025-01-14 20:35:27', '2025-02-26 14:08:09'),
(9, 'Prince Tulay', 'Prince@gmail.com', '$2y$10$ASd7Shp8eZ5vvPNINH5MQuklmFUKszgjtS27MYv4PUBj7CDp32tbq', 'contactlogger', 'inactive', '1', '1740578923_f3febc1dfad407a726f7.jpg', '2025-01-14 20:55:23', '2025-02-26 14:08:43'),
(10, 'Tarnue Pythagoras Borbor', 'testuser3@gmail.com', '$2y$10$ASd7Shp8eZ5vvPNINH5MQuklmFUKszgjtS27MYv4PUBj7CDp32tbq', 'admin', 'active', '1', '1740578962_b2f16b4249e02a816e69.png', '2025-01-14 20:56:12', '2025-02-26 14:09:22'),
(11, 'Marcus Xavy', 'admintt@gmail.com', '$2y$10$ASd7Shp8eZ5vvPNINH5MQuklmFUKszgjtS27MYv4PUBj7CDp32tbq', 'contactlogger', 'active', '1', '1740578774_eccb76b3b54a13f89d66.jpg', '2025-01-18 08:37:08', '2025-02-26 14:06:14'),
(12, 'Daniel T Barba', 'enrollment@gmail.com', '$2y$10$KTRu9P18hjEvW1IMuULoUOFAcgtVb6fOzr9OY/0i68M84Ww7vKZWa', 'enrollment', 'active', '1', '1740578822_6902f82434f87096f543.jpg', '2025-02-23 02:17:09', '2025-02-26 14:07:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseID`),
  ADD KEY `SubProgramID` (`SubProgramID`);

--
-- Indexes for table `enrollmentform`
--
ALTER TABLE `enrollmentform`
  ADD PRIMARY KEY (`studId`);

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
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`ProgramID`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusID`);

--
-- Indexes for table `studprofileimages`
--
ALTER TABLE `studprofileimages`
  ADD PRIMARY KEY (`profileImgId`);

--
-- Indexes for table `subprograms`
--
ALTER TABLE `subprograms`
  ADD PRIMARY KEY (`SubProgramID`),
  ADD KEY `ProgramID` (`ProgramID`);

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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `enrollmentform`
--
ALTER TABLE `enrollmentform`
  MODIFY `studId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `formsaletable`
--
ALTER TABLE `formsaletable`
  MODIFY `formSaleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `olineinquirytable`
--
ALTER TABLE `olineinquirytable`
  MODIFY `onlineInquiryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `ProgramID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `StatusID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studprofileimages`
--
ALTER TABLE `studprofileimages`
  MODIFY `profileImgId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subprograms`
--
ALTER TABLE `subprograms`
  MODIFY `SubProgramID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userloginlog`
--
ALTER TABLE `userloginlog`
  MODIFY `logInUserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`SubProgramID`) REFERENCES `subprograms` (`SubProgramID`);

--
-- Constraints for table `subprograms`
--
ALTER TABLE `subprograms`
  ADD CONSTRAINT `subprograms_ibfk_1` FOREIGN KEY (`ProgramID`) REFERENCES `programs` (`ProgramID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
