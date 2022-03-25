-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 02:31 PM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u117929562_Partyak`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability_calendar`
--

CREATE TABLE `availability_calendar` (
  `user_id` int(10) NOT NULL,
  `availability_calendar_id` int(10) NOT NULL,
  `status` varchar(256) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `calendar_note` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `availability_calendar`
--

INSERT INTO `availability_calendar` (`user_id`, `availability_calendar_id`, `status`, `start_date`, `end_date`, `calendar_note`) VALUES
(20, 1, 'pending', '2022-01-30', '2022-01-31', 'wedding'),
(20, 2, 'pending', '2022-03-10', '2022-03-17', 'wed'),
(20, 3, 'pending', '2022-03-23', '2022-03-24', 'gather');

-- --------------------------------------------------------

--
-- Table structure for table `availability_update`
--

CREATE TABLE `availability_update` (
  `planning_id` int(11) NOT NULL,
  `availability_calendar_id` int(10) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `availability_updateplanning_id`
--

CREATE TABLE `availability_updateplanning_id` (
  `planning_id` int(11) NOT NULL,
  `availability_calendar_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `service_id` int(10) NOT NULL,
  `event_date` date NOT NULL,
  `event_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noOfGuest` int(11) NOT NULL,
  `package_id` int(10) NOT NULL,
  `full_payment` decimal(10,2) NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `planning_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `customer_id`, `service_id`, `event_date`, `event_type`, `noOfGuest`, `package_id`, `full_payment`, `status`, `planning_id`) VALUES
(2, 17, 11, '2022-05-08', 'party', 0, 2, '0.00', 'Accepted', 0),
(18, 20, 30, '2022-01-20', 'Wedding', 45, 2, '0.00', 'Accepted', 0),
(19, 20, 30, '2022-01-14', 'Party', 55, 1, '0.00', 'accept', 0),
(23, 51, 10, '2022-01-26', 'Wedding', 100, 0, '0.00', 'accept', 0),
(24, 51, 30, '2022-01-18', 'Wedding', 100, 2, '0.00', 'Accepted', 0),
(25, 51, 30, '2022-01-13', 'Wedding', 100, 2, '0.00', 'Accepted', 0),
(26, 20, 30, '2022-01-14', 'Wedding', 24, 1, '0.00', 'reject', 0),
(27, 20, 30, '2022-01-14', 'Wedding', 24, 1, '0.00', 'pending', 0),
(29, 17, 30, '2022-01-20', 'Personal', 25, 2, '75000.00', 'pending', 0),
(30, 1494, 10, '2022-03-23', 'Party', 100, 0, '0.00', 'accept', 0),
(31, 1494, 10, '2022-03-23', 'Party', 100, 0, '0.00', 'accept', 0),
(32, 1494, 10, '2022-03-23', 'Party', 100, 0, '0.00', 'accept', 0),
(33, 1494, 10, '2022-03-23', 'Party', 100, 0, '0.00', 'accept', 0),
(34, 1494, 10, '2022-03-23', 'Party', 100, 0, '0.00', 'accept', 0),
(35, 1494, 10, '2022-03-23', 'Party', 100, 0, '0.00', 'accept', 0),
(36, 1494, 10, '2022-03-23', 'Party', 100, 0, '0.00', 'accept', 0),
(37, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'accept', 0),
(38, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'accept', 0),
(39, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'accept', 0),
(40, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'accept', 0),
(41, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'pending', 0),
(42, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'pending', 0),
(43, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'pending', 0),
(44, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'pending', 0),
(45, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'pending', 0),
(46, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'pending', 0),
(47, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'pending', 0),
(48, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'pending', 0),
(50, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'pending', 0),
(51, 18, 10, '2022-03-24', 'Wedding', 100, 0, '0.00', 'accept', 0),
(52, 18, 11, '2022-03-16', 'Wedding', 200, 3, '30000.00', 'pending', 0),
(54, 17, 54, '2022-03-17', 'Wedding', 100, 0, '0.00', 'pending', 0),
(56, 18, 54, '2022-03-26', 'Party', 100, 0, '0.00', 'pending', 0),
(57, 18, 54, '2022-03-26', 'Party', 100, 0, '0.00', 'pending', 0),
(58, 18, 54, '2022-03-27', 'Personal', 100, 0, '0.00', 'pending', 0),
(59, 18, 54, '2022-03-26', 'Cooperative event', 200, 0, '0.00', 'pending', 117),
(60, 17, 54, '2022-03-30', 'Party', 55, 0, '0.00', 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contacting_event_planner`
--

CREATE TABLE `contacting_event_planner` (
  `event_planner_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `planning_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact_service_provider`
--

CREATE TABLE `contact_service_provider` (
  `service_provider_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `planning_id` int(10) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `event_planner_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `planning_id` int(11) NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `location` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noOfGuest` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `plan_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`planning_id`, `event_name`, `event_type`, `description`, `start_date`, `end_date`, `location`, `noOfGuest`, `user_id`, `booking_id`, `plan_type`) VALUES
(1, 'Shero', 'Wedding', '', '2021-11-30', '2021-12-02', 'Galle', 200, 16, 0, 'On Your Own'),
(40, 'Shero', 'Wedding', '', '2022-01-14', '2022-01-16', 'Monaragala', 100, 16, 0, 'On Your Own'),
(78, 'DesignX', 'Wedding', '', '2022-03-24', '0000-00-00', 'Kurunegala', 100, 17, 0, 'On Your Own'),
(96, 'Shero', 'Wedding', '', '2022-03-23', '0000-00-00', 'Matale', 100, 17, 0, 'On Your Own'),
(112, 'Partyak', 'Party/Festival', '', '2022-03-26', '0000-00-00', 'Badulla', 100, 20, 0, 'Through Event Planner'),
(114, 'Event', 'Personalize Event', '', '2022-03-26', '0000-00-00', 'Kegalle', 125, 17, 0, 'Through Event Planner'),
(116, 'drfhreh', 'Wedding', '', '2022-03-10', '0000-00-00', 'Matale', 55, 52, 0, 'Through Event Planner'),
(117, 'dscsd', 'Wedding', '', '2022-03-25', '2022-03-26', 'Galle', 100, 18, 0, 'Through Event Planner'),
(139, 'Event', 'Corparate Event', '', '2022-03-26', '0000-00-00', 'Badulla', 100, 17, 0, 'Through Event Planner');

-- --------------------------------------------------------

--
-- Table structure for table `event_planner_details`
--

CREATE TABLE `event_planner_details` (
  `user_id` int(10) NOT NULL,
  `event_name` varchar(256) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `event_host__name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `event_planner_event_pages`
--

CREATE TABLE `event_planner_event_pages` (
  `user_id` int(11) NOT NULL,
  `event_page_id` int(11) NOT NULL,
  `event_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `no_of_guests` int(11) NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_planner_event_pages`
--

INSERT INTO `event_planner_event_pages` (`user_id`, `event_page_id`, `event_type`, `date`, `no_of_guests`, `image1`, `image2`, `image3`, `image4`, `image5`, `location`, `description`) VALUES
(20, 33, 'Wedding', '2022-03-09', 55, '2016478451460.jpeg', '2016478451461.jpg', '2016478451462.jpg', '2016478451463.jpeg', '2016478451464.jpg', 'Galadari Hotel', 'Good and cool');

-- --------------------------------------------------------

--
-- Table structure for table `event_planner_note`
--

CREATE TABLE `event_planner_note` (
  `customer_id` int(255) NOT NULL,
  `customer_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `note_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_planner_note_body`
--

CREATE TABLE `event_planner_note_body` (
  `note_id` int(11) NOT NULL,
  `vendor_note_id` int(11) NOT NULL,
  `vendor_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_planner_note_body`
--

INSERT INTO `event_planner_note_body` (`note_id`, `vendor_note_id`, `vendor_name`) VALUES
(24, 24, 'rewgwerg'),
(25, 26, 'ygyufy'),
(27, 33, 'jhvgyhv'),
(27, 34, 'iyugyg'),
(27, 35, 'dfveg'),
(29, 39, 'dinil'),
(54, 40, 'dsfsdf'),
(63, 49, 'yes yes');

-- --------------------------------------------------------

--
-- Table structure for table `event_planner_service`
--

CREATE TABLE `event_planner_service` (
  `service_id` int(11) NOT NULL,
  `event_planner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancellation_policy` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_schedule_board`
--

CREATE TABLE `event_schedule_board` (
  `task_id` int(10) NOT NULL,
  `task_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `planning_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_schedule_board`
--

INSERT INTO `event_schedule_board` (`task_id`, `task_name`, `status`, `planning_id`) VALUES
(40, 'hh', '', 42),
(42, 'jj', '', 42),
(53, 'sd', '', 42),
(55, 'ss', '', 42),
(58, 'sd', '', 96),
(59, 'df', '', 103),
(60, 'df', '', 103),
(61, 'as', '', 78),
(62, 'as', '', 78);

-- --------------------------------------------------------

--
-- Table structure for table `how_it_works`
--

CREATE TABLE `how_it_works` (
  `section_id` int(10) NOT NULL,
  `heading` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_info` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `how_it_works`
--

INSERT INTO `how_it_works` (`section_id`, `heading`, `heading_type`, `description`, `additional_info`) VALUES
(1, 'Life is an event. Make it memorable.', 'Intro', 'Online event management system which provides platform for\r\nUsers to search and hire event related service providers and event planners. Event related service providers and event planners to offer their services.\r\nWide variety of services being offered and opportunity for a customer to organize and keep track of the event through the website.', 'Intro'),
(2, 'Everything right from your screen', 'Intro', 'Event planning will never be scary and overwhelming again when you can plan and monitor your entire event from your screen.\r\nPlan your next event in Sri Lanka from anywhere anytime. Your Planboard will help you keep things organized from your theme colours to vendors to your team member tasks progress.', 'Intro'),
(3, 'Partyak offers you following unique features', 'main heading unique', '', ''),
(4, 'Event planning features...', 'unique features', 'Enables to hire event planner and services from one flow(Event planner recommendations included). Here the user gets to create an event. Then that user can hire event planner and service provider from one flow. When event planner is integrated to the event that is been created. Event planner can give recommendations about service providers in the system then after hiring them. All the hired vendors can work cooperatively towards getting the event organized successfully.', 'unique features'),
(5, 'Quick access browsing features....', 'unique features', 'Pathway to browse service providers efficiently(Questionnaire type)This is a browsing method where we ask some event related questions to get an idea about the event that they want to get organized and the service that they want. Then the system gives a filtered list of services and they can hire the service providers they prefer.', 'unique features'),
(6, 'Event schedule board', 'unique features', 'Upgraded kanban board style to do list to organize events efficiently. Which Shows the processes not started yet, in progress and completed.Through this you can keep track of the processes in an event and from the processes list service providers can also be added. When services are added then the board will be accessible to all the vendors including event planners and they can work together in the board successfully towards the completion of that event.', 'unique features'),
(7, 'Quick notification feature\r\n', 'unique features', 'Urgent messages to be sent as notifications through the website.', 'unique features'),
(8, 'Plan any event in 4 steps', 'steps', 'Event planning shouldn’t be so much work. Because with Partyak now you can plan any event just in 4 steps.', 'how.png'),
(9, 'More details for Vendors', 'vendor details heading', '', ''),
(10, 'Vendor Services....', 'vendor details', 'After the vendor service verification process done by the system admin your service will be published in PARTYAK', ''),
(11, 'Marketing content', 'vendor details', 'When you uploading marketing content first of all admin should accept it & then the vendor should do the payment for marketing content. After the payment the marketing content will be published', ''),
(12, 'Vendor Payment', 'vendor details', 'The system will be pay your payment per monthly. Vendor can request vendor payment when your wallet total balance checked and other wise the system restrict you to do request payment.', ''),
(13, 'Instruction for event planner for contributing customer event planning', 'vendor details', 'After customer requesting, event planner can accept the requesting and recommend services for event and maintain event schedule board with customer', ''),
(14, 'Customer payments', 'customer details', 'When the customer book the vendor service the customer should do the reservation payment and after that the service will reserve for customer. The reservation payment consist of vendor advanced payment and & system service charges (3% of reservation price of service) Customer should pay the full payment the prior the event day.', ''),
(15, 'Browsing Feature', 'unique features', 'The user will be able to apply filters and browse for the best event planning services available which matches their budget.', '');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_content`
--

CREATE TABLE `marketing_content` (
  `content_id` int(10) NOT NULL,
  `content` varchar(256) NOT NULL,
  `upload_date` date NOT NULL DEFAULT current_timestamp(),
  `user_id` int(10) NOT NULL,
  `upload_status` varchar(50) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketing_content`
--

INSERT INTO `marketing_content` (`content_id`, `content`, `upload_date`, `user_id`, `upload_status`) VALUES
(14, '61afcfe1b87157.50856614.Dilsithmi Abeywickrama.jpg', '2021-12-07', 20, 'online'),
(15, '61afcff4156947.75614356.Dinil Ratnayake.jpeg', '2021-12-07', 20, 'online'),
(16, '61afd01b5ab370.62160143.Piyumi and Pivithuru.jpeg', '2021-12-07', 20, 'Accepted'),
(19, '61e190108058c3.49071621.mt.lavinia.jpg', '2022-01-14', 20, 'Accepted'),
(20, '6238c64fbf4d00.95985431.200261935_3564848743618686_6146440787569135760_n.jpg', '2022-03-21', 20, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_payment`
--

CREATE TABLE `marketing_payment` (
  `content_id` int(11) NOT NULL,
  `paid_date` date NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `marketing_payment`
--

INSERT INTO `marketing_payment` (`content_id`, `paid_date`, `amount`) VALUES
(16, '2022-01-14', 5000),
(19, '2022-01-14', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(10) NOT NULL,
  `sender_id` int(10) NOT NULL,
  `reciever_id` int(10) NOT NULL,
  `message` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `sender_id`, `reciever_id`, `message`) VALUES
(1, 12, 6, 'Hi Man'),
(2, 6, 12, 'What the hell man'),
(3, 12, 6, 'Hi Man'),
(4, 6, 12, 'What the hell man'),
(5, 16, 12, 'Hi admin 1'),
(6, 12, 17, 'Hi Chamathka'),
(7, 12, 6, 'Hi'),
(8, 18, 12, 'Hiiii'),
(9, 12, 18, 'howru'),
(10, 18, 12, 'hiiii'),
(11, 18, 12, 'hiiiii'),
(12, 18, 12, 'woop wopp'),
(13, 18, 12, 'wooop'),
(14, 18, 12, 'great'),
(15, 18, 12, 'lets see'),
(16, 18, 12, 'lets see man'),
(17, 12, 16, 'Hello '),
(18, 12, 16, 'hello moda piyumi '),
(19, 16, 12, 'hello motta dinil'),
(20, 16, 12, 'hello'),
(21, 12, 16, 'moko wenne ithin '),
(22, 12, 16, 'meka thmai ithin chat eka '),
(23, 12, 16, 'lassanathe'),
(24, 16, 12, 'mukuth na halo koo ara danapala'),
(25, 12, 16, 'danapala went to the jungle'),
(26, 12, 16, 'byeee'),
(27, 20, 12, 'Hi, admin!'),
(28, 20, 11, 'hi'),
(29, 20, 16, 'hi'),
(30, 20, 16, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(10) NOT NULL,
  `notification_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) NOT NULL,
  `notification_status` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `notification_type`, `heading`, `description`, `url`, `user_id`, `notification_status`, `date`) VALUES
(1, 'new_service', 'New Service Request', 'Fly Foods have just requested to be accepted on Partyak', 'http://localhost/partyak/adminRequest', 12, 0, '2022-03-17 00:00:00'),
(2, 'new_service', 'New Service Request', 'Freed Hotels have just requested to be accepted on Partyak', 'http://localhost/partyak/adminRequest', 12, 1, '2022-03-18 00:00:00'),
(3, 'booking_request', 'New Booking Request', 'Dinil Ratnayake have requested the service of Avendra', 'http://localhost/partyak/adminRequest', 12, 0, '2022-03-21 06:53:59'),
(4, 'booking_request', 'New Booking Request', 'dinil ratnayake have requested the service of avendra', 'http://localhost/partyak/adminRequest', 12, 0, '2022-03-21 07:27:33'),
(5, 'booking_request', 'New Booking Request', 'dfviudzfviu', 'http://localhost/partyak/adminRequest', 12, 0, '2022-03-21 09:33:13'),
(6, 'booking_request', 'New Booking Request', 'Dinil Ratnayake have requested the service of Avendra', 'http://localhost/partyak/adminBookings', 12, 1, '2022-03-21 09:37:03'),
(7, 'booking_request', 'New Booking Request', 'Dinil Ratnayake have requested the service of Angel Beach', 'http://localhost/partyak/adminBookings', 12, 1, '2022-03-21 09:51:32'),
(9, 'online_marketing', 'Online Advertisment', 'Your advertisment is made online in Partyak', '', 20, 1, '2022-03-21 17:10:10'),
(10, 'online_marketing', 'Online Advertisment', 'Your advertisment is made online in Partyak', '', 20, 1, '2022-03-21 17:12:07'),
(11, 'new_marketing', 'New marketing content', 'Pivithuru Batuwangala have uploaded an Advertisment', 'http://localhost/partyak/adminMarketing', 12, 0, '2022-03-21 18:39:14'),
(18, 'booking_request', 'New Booking Request', 'Chamathka Shehani have requested the service of piyumi hansamali', 'http://localhost/partyak/adminBookings', 12, 0, '2022-03-22 10:25:18'),
(19, 'booking_request', 'New Booking Request', 'Chamathka Shehani have requested the service of piyumi hansamali', 'http://localhost/partyak/adminBookings', 12, 0, '2022-03-22 10:30:04'),
(20, 'new_service', 'New service added', 'A new service is created and waiting to be accepted', 'http://localhost/partyak/adminRequest', 12, 0, '2022-03-22 16:27:46'),
(21, 'booking_request', 'New Booking Request', 'Dinil Ratnayake have requested the service of Mount Lavinia Hotel', 'http://localhost/partyak/adminBookings', 12, 0, '2022-03-23 05:18:25'),
(22, 'new_settlment', 'New Settlent Done', 'Admin have done a settlement of amonunt Rs.10,000.00', 'http://localhost/partyak/adminBookings', 12, 0, '2022-03-23 09:56:44'),
(23, 'new_settlment', 'New Settlent Done', 'Admin have done a settlement of amonunt Rs.10,000.00', 'http://localhost/partyak/adminBookings', 12, 1, '2022-03-23 09:58:26'),
(24, 'new_settlment', 'New Settlent Done', 'Admin have done a settlement of amonunt Rs.12,000.00', 'http://localhost/partyak/adminBookings', 20, 0, '2022-03-23 09:59:55'),
(25, 'booking_request', 'New Booking Request', 'Dinil Ratnayake have requested the service of piyumi hansamali', 'http://localhost/partyak/adminBookings', 12, 0, '2022-03-24 05:31:37'),
(26, 'booking_request', 'New Booking Request', 'Dinil Ratnayake have requested the service of piyumi hansamali', 'http://localhost/partyak/adminBookings', 12, 0, '2022-03-24 05:32:08'),
(27, 'booking_request', 'New Booking Request', 'Dinil Ratnayake have requested the service of piyumi hansamali', 'http://localhost/partyak/adminBookings', 12, 0, '2022-03-24 05:33:38'),
(28, 'booking_request', 'New Booking Request', 'Dinil Ratnayake have requested the service of piyumi hansamali', 'http://localhost/partyak/adminBookings', 12, 0, '2022-03-24 05:35:16'),
(29, 'booking_request', 'New Booking Request', 'Chamathka Shehani have requested the service of piyumi hansamali', 'http://localhost/partyak/adminBookings', 12, 0, '2022-03-24 09:02:16');

-- --------------------------------------------------------

--
-- Table structure for table `other_service`
--

CREATE TABLE `other_service` (
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `service_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_areas` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_terms_and_conditions` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_information` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancellation_policy` int(10) NOT NULL,
  `advance_price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preparation_time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial_discount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial_count` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `simultaneous_booking` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb_url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram_url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin_url` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `standing_capacity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venue_features` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meal_time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_attendants` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_provider_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dancing_type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saloon_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplying_services` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cake_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sweet_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seating_arrangement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floral_arrangement` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decoration_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dress_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dress_sections` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_location` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_planner_skills` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_service`
--

INSERT INTO `other_service` (`user_id`, `service_id`, `status`, `service_name`, `service_type`, `event_type`, `description`, `service_areas`, `payment_terms_and_conditions`, `additional_information`, `cancellation_policy`, `advance_price`, `preparation_time`, `initial_discount`, `initial_count`, `simultaneous_booking`, `video_url`, `fb_url`, `instagram_url`, `linkedin_url`, `image`, `caption`, `standing_capacity`, `venue_type`, `venue_features`, `meal_time`, `no_of_attendants`, `music_provider_type`, `dancing_type_name`, `saloon_type`, `supplying_services`, `cake_type`, `sweet_type`, `seating_arrangement`, `floral_arrangement`, `decoration_type`, `dress_type`, `dress_sections`, `service_location`, `service_image`, `event_planner_skills`) VALUES
(20, 10, 'pending', 'Avendra', 'venues_halls', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Negambo', '', ''),
(20, 11, 'rejected', 'Angel Beach', 'venues_halls', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Galle', '', ''),
(20, 30, 'pending', 'Mount Lavinia Hotel', 'venues_halls', 'wedding , party , cooperative', 'This luxurious sea view hotel, situated 12 kilometers from Colombo, is located five minutes from the domestic airport. Guests will enjoy easy access to a myriad of scenic locations, including fertile tropical rainforests, primeval cities, and pristine beaches. The hotel is located in a prime location for recreational outdoors activities as well as cultural expeditions. The 275 rooms are elegantly appointed with a fusion of modern and traditional decoration with some boasting panoramic vistas of the azure sea. The on-site Governors Restaurant serves a variety of Eastern and Western specialties and is the perfect complement to the Sea Food Cove Restaurant and lobby bar. The Mount Lavinia Hotel is the perfect property for guests that want a lavish atmosphere with many on-site facilities.', 'Western', 'Reserve the date by paying the reservation fee online on Partyak. The payment have to be done one day prior to the event date.', '', 14, '35000', '5 Hours', '15', '5', 'accept', 'https://youtu.be/G9Sf5IUsHfI', 'https://www.facebook.com/mount.lavinia', 'https://www.instagram.com/mount_l', 'https://www.linkedin.com/in/mount-lavinia', '', 'Wait till the sunset to shine like a star.', '600', 'indoor', 'parking , reception , setiback , garden , dancingfloor , poruwa', 'Null', '', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'banquet , board , classroom , informal', 'Null', 'Null', 'Null', 'Null', 'Colombo', '', ''),
(22, 34, 'pending', 'Stigmata Band', 'musical', 'wedding,party', 'Stigmata is a Sri Lankan heavy-metal band based in Colombo, Sri Lanka, formed in 1998.', 'Southern,Western,Sabaragamuwa,Uva,Central,Eastern,North western,North Central,Nouthern', 'Payment should be provided cash only. Full Payment have to be paid within 24 hours of the performance', '', 3, '5000', '5', '0', '0', 'accept', '#stigmata #puresrilankanmetal', 'https://www.facebook.com/stigmatasrilanka', 'https://www.instagram.com/stigmataofficial/', 'https://www.linkedin.com/stigmataofficial/', '61e3f700d95755.78240325.270787646_454081302956507_5278760240194126080_n.jpg', 'Null', '', 'Null', 'Null', '61e3f700d95755.78240325.270787646_454081302956507_5278760240194126080_n.jpg', 'Null', '', 'band', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Colombo, Sri Lanka', '', ''),
(52, 54, 'pending', 'piyumi hansamali', 'eventPlanner', 'wedding,party,cooperative', 'good', 'Southern,Western', 'payment', 'payment', 3, '5000', '5 days', '10', '8', 'accept', 'cap', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', '6239a264600183.55776330.WhatsApp Image 2022-03-19 at 12.01.55 AM.jpeg', 'Null', '', 'Null', 'Null', '6239a264600183.55776330.WhatsApp Image 2022-03-19 at 12.01.55 AM.jpeg', 'Null', '', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Galle', '', ''),
(20, 55, 'pending', 'Saloon කෙස්', 'saloon', 'wedding,party,cooperative', 'hair', 'Central', '', '', 3, '10000', '10 days', '5', '100', 'accept', '', 'https://www.facebook.com/Saloon-%E0%B6%9A%E0%B7%99%E0%B7%83%E0%B7%8A-111842101303311/?ref=page_internal', 'https://www.instagram.com/Saloon-%E0%B6%9A%E0%B7%99%E0%B7%83%E0%B7%8A-111842101303311/?ref=page_internal', 'https://www.linkedin.com/Saloon-%E0%B6%9A%E0%B7%99%E0%B7%83%E0%B7%8A-111842101303311/?ref=page_internal', '6239f9009f5204.63938641.saloon kes 2.jpg', 'Null', '', 'Null', 'Null', '6239f9009f5204.63938641.saloon kes 2.jpg', 'Null', '', 'Null', 'Null', 'both', 'hair', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Kandy', '', ''),
(20, 56, 'pending', 'Saloon spice', 'saloon', 'wedding,party,cooperative', 'Hiarcuts by spice', 'Western', '', '', 3, '10000', '10 days', '5', '100', 'accept', '', 'https://www.facebook.com/Saloon-%E0%B6%9A%E0%B7%99%E0%B7%83%E0%B7%8A-111842101303311/?ref=page_internal', 'https://www.instagram.com/Saloon-%E0%B6%9A%E0%B7%99%E0%B7%83%E0%B7%8A-111842101303311/?ref=page_internal', 'https://www.linkedin.com/Saloon-%E0%B6%9A%E0%B7%99%E0%B7%83%E0%B7%8A-111842101303311/?ref=page_internal', '6239f9d9b50839.75590393.saloon kes.jpg', 'Null', '', 'Null', 'Null', '6239f9d9b50839.75590393.saloon kes.jpg', 'Null', '', 'Null', 'Null', 'both', 'hair,makeup', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Colombo, Sri Lanka', '', ''),
(52, 57, 'pending', 'Justin Event Planning', 'eventPlanner', 'wedding,party', 'We plan everything you only have to wait!', 'Southern', 'payment', 'add info', 3, '5000', '3 days', '10', '5', 'accept', 'Caption', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', '623b6ce215fbb4.87012417.Wallpaper 4k The Batman 2021 4k Wallpaper.jpg', 'Null', '', 'Null', 'Null', '623b6ce215fbb4.87012417.Wallpaper 4k The Batman 2021 4k Wallpaper.jpg', 'Null', '', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Null', 'Colombo', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `service_id` int(10) NOT NULL,
  `package_id` int(10) NOT NULL,
  `service_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `per_unit_price` decimal(10,0) NOT NULL,
  `fixed_price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`service_id`, `package_id`, `service_name`, `package_name`, `description`, `valid_from`, `valid_to`, `per_unit_price`, `fixed_price`) VALUES
(30, 1, 'Mount Lavinia', 'Summer', 'Romantically decorated Overnight stay for the bridal couple at the Mount Lavinia Hotel, with bubbly breakfast in bed or international breakfast buffet at the Governors restaurant.\r\nStrawberries with chocolate dip in the room\r\nComplimentary 30 minutes massage at the Coco SPA\r\nComplimentary day room for arrangements and Bridle dressing.\r\nBeautifully frilled table for the cake structure.\r\nAntique settee with coffee table.\r\nTraditional 5 ½ ft Brass Oil Lamp.\r\nComplementary candle lit dinner for your first wedding anniversary on our romantic paradise beach.\r\nModern air conditioned Studio to take photographs and magnificent photo locations.\r\nEntrance flower arrangement.\r\nComplimentary pressing of going away attire.', '2021-10-16', '2021-12-31', '5000', '0'),
(30, 2, 'Mount Lavinia', 'Big deal', 'Complimentary Honeymoon Suite inclusive of breakfast\r\nOne complimentary changing rooms on the day of the wedding (for a maximum of 8 hours)\r\nComplimentary welcome drink\r\nComplimentary use of the band stand & dance floor\r\nTraditional oil lamp (décor by guest)\r\n50 % discount on chair covers\r\nComplimentary dinner for two voucher for 1st year anniversary', '2021-10-16', '2021-11-10', '3000', '0'),
(11, 3, 'Crystal Catering', 'Wedding Package', 'Roast Beef with Mushroom or Lengua \r\nChicken Cordon Bleu \r\nSweet and Sour Meatball (Bonus) \r\nButtered Vegetable with Ham and Cashew Nut \r\nBaked Macaroni or Carbonara \r\nRice \r\nSteamed Pandan Rice \r\nRocky Road or Choco Fudge \r\nPineapple Juice or Iced Tea (Bottomless) \r\nVegetarian Menu also Available \r\nAmenities: \r\nFlower and Table Arrangements \r\nTwo Layer Cake and Chocolate Fountain with Dippers \r\nPair of Dove \r\nWine for Toasting \r\nPresidential Table / Gift Table / Cake Table \r\nSignature Frame', '2021-10-16', '2021-12-31', '0', '30000'),
(0, 23, 'qweqwe', 'dsdvsdvsdfdfbfdb', 'nfgnfgnfgnf', '2022-03-23', '2022-03-25', '0', '2000'),
(0, 24, 'rrggg', 'rtrerrfdbbsfg', 'sfsdfdfhgfhjyuuykhjmn  b gbgfbfvdf', '2022-03-23', '2022-03-25', '0', '2000'),
(30, 25, 'dhghdgh', 'Hello', 'hfghgfhfh', '2022-03-24', '2022-03-31', '3500', '0');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL,
  `payment_date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` varchar(256) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_date`, `amount`, `status`, `vendor_id`, `customer_id`, `booking_id`) VALUES
(3, '2022-01-11', '300000.00', 'Fully Paid', 20, 51, 25),
(4, '2022-01-11', '35000.00', 'Advance Paid', 20, 51, 24),
(6, '2022-02-09', '50000.00', 'Advance paid', 20, 10, 2),
(7, '2022-02-19', '50000.00', 'Advance paid', 20, 20, 18),
(12, '2022-03-23', '35000.00', 'Advance Paid', 20, 18, 55),
(13, '2022-03-24', '30000.00', 'Fully Paid', 20, 18, 52);

-- --------------------------------------------------------

--
-- Table structure for table `service_preferences`
--

CREATE TABLE `service_preferences` (
  `preference_id` int(10) NOT NULL,
  `planning_id` int(10) NOT NULL,
  `service_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_planner_flag` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seating_arrangement` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indoor_venue` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outdoor_venue` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seti_back` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poruwa` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dancing_floor` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breakfast` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lunch` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dinner` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buffet` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tea_time` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_servents` int(11) NOT NULL,
  `estimated_budget_range` int(8) NOT NULL,
  `photo_shoot_details` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_band` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solo_singer` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dj` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kandyan` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sabaragamuwa` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `low_country` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `western` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saloon_type` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hair_style` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_dressers` int(5) NOT NULL,
  `make_up` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wedding_cake` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sweet` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `party_cake` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setibackP` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floral` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sound_service` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lighting_service` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indoor_event` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outdoor_event` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `male_dress` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `female_dress` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue_handle_EP` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catering_handle_EP` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_handle_EP` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_handle_EP` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dance_handle_EP` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salon_handle_EP` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cake_handle_EP` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deco_handle_EP` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sound_handle_EP` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dressers_handle_EP` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_preferences`
--

INSERT INTO `service_preferences` (`preference_id`, `planning_id`, `service_type`, `event_planner_flag`, `seating_arrangement`, `indoor_venue`, `outdoor_venue`, `seti_back`, `poruwa`, `dancing_floor`, `breakfast`, `lunch`, `dinner`, `buffet`, `tea_time`, `no_of_servents`, `estimated_budget_range`, `photo_shoot_details`, `music_band`, `solo_singer`, `dj`, `kandyan`, `sabaragamuwa`, `low_country`, `western`, `saloon_type`, `hair_style`, `no_of_dressers`, `make_up`, `wedding_cake`, `sweet`, `party_cake`, `setibackP`, `floral`, `sound_service`, `lighting_service`, `indoor_event`, `outdoor_event`, `male_dress`, `female_dress`, `venue_handle_EP`, `catering_handle_EP`, `photo_handle_EP`, `music_handle_EP`, `dance_handle_EP`, `salon_handle_EP`, `cake_handle_EP`, `deco_handle_EP`, `sound_handle_EP`, `dressers_handle_EP`) VALUES
(1193, 1, '', 'no', 'board', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1194, 0, '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1195, 1, '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1196, 1, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1197, 24, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1198, 24, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1199, 25, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1200, 26, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1201, 27, '', 'no', 'board', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1202, 27, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1203, 28, '', 'no', 'banquet', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1204, 29, '', 'yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'male', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1206, 1, '', 'yes', 'board', 'yes', 'yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes'),
(1207, 1, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes'),
(1208, 40, '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1209, 0, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1210, 0, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1211, 41, '', 'yes', 'banquet', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1212, 0, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1213, 99, '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1214, 99, '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1215, 100, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1219, 100, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1220, 101, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1221, 101, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1222, 102, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1223, 106, '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1224, 106, '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1225, 106, '', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1226, 106, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1227, 106, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1228, 106, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1229, 106, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1230, 106, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1231, 106, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1232, 109, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1233, 110, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1234, 110, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1235, 110, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1236, 111, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1237, 112, '', 'yes', 'classroom', 'yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1238, 113, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes'),
(1239, 114, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1240, 115, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1241, 117, '', 'yes', 'board', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1242, 117, '', 'yes', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1243, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1244, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1245, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1246, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1247, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1248, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1249, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1250, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', '', '', '', '', '', '', '', '', '', ''),
(1251, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1252, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1253, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1254, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1255, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1256, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1257, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1258, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1259, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1260, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1261, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1262, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1263, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1264, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1265, 135, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1266, 136, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', '', '', '', '', '', '', '', '', '', ''),
(1267, 139, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no'),
(1268, 155, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes'),
(1269, 158, '', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 0, 0, '', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'null', 'no ', 0, 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'yes', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `service_provided_area`
--

CREATE TABLE `service_provided_area` (
  `user_id` int(10) NOT NULL,
  `district` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service_review`
--

CREATE TABLE `service_review` (
  `review_id` int(10) NOT NULL,
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ratedStar` int(11) NOT NULL,
  `textReview` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_review`
--

INSERT INTO `service_review` (`review_id`, `service_id`, `user_id`, `ratedStar`, `textReview`, `Date`) VALUES
(2, 30, 17, 4, 'One of the most oldest Hotels in the world. More than 200 years old. Very nice scenery with lovely food.', '2022-03-23 06:29:50'),
(3, 30, 20, 4, 'Magnificent hotel wonderfully located right on the edge of the ocean. The staff could not have been nicer. The buffet-style food was delicious and offered a huge choice. Probably the best hotel experience we have ever had.', '2022-03-23 06:30:14'),
(4, 10, 51, 5, 'I and my best half stayed in this place for 2 nights and it was the most amazing place we have stayed in Colombo. The secret path to the wine cellar is a must to see. The staff are so kind  also.', '2022-01-16 07:06:01'),
(5, 10, 20, 5, 'The staff were very helpful and they made to ensure our safety and comfort throughout our stay.', '2022-03-23 07:01:04'),
(6, 30, 51, 3, 'Nice hotel with classy look both outside and inside. Hotel is nice and clean and well maintained. Has spacious function hall,stairs and corridors. One side of the hotel faces ocean.\r\n', '2022-03-23 07:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `age`) VALUES
(20, 'hiruni', '20');

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `t_c_id` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms_and_conditions`
--

INSERT INTO `terms_and_conditions` (`t_c_id`, `title`, `content`) VALUES
(1, 'Privacy Policy', 'partyak will collect information from customers and Vendors related to the services attained and offered. It is a condition of use of the partyak that each User consents and authorises Partyak to collect and use this information. Partyak also reserves the right to disclose it to Company Affiliates and any other person for the purposes of administering, supporting and maintaining Partyak, as well as for improving Partyak, for example by using the information for research, marketing, product development and planning.'),
(4, 'Cookies', 'This site uses cookies, which means that you must have cookies enabled on your computer in order for all functionality on this site to work properly. A cookie is a small data file that is written to your hard drive when you visit certain Web sites. Cookie files contain certain information, such as a random number user ID that the site assigns to a visitor to track the pages visited. A cookie cannot read data off your hard disk or read cookie files created by other sites. Cookies, by themselves, cannot be used to find out the identity of any user.'),
(21, 'Email address of users', 'Users are required to submit a valid email address, before they are allowed to get registered. The email address of the User shall not be publicly displayed and other users are permitted to send email to the User through Partyak');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `test_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`test_id`, `amount`) VALUES
(1, 10),
(2, 12500),
(3, 55),
(4, 18),
(5, 20),
(6, 0),
(7, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nic` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `profilePicture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `user_type`, `f_name`, `l_name`, `address`, `nic`, `gender`, `profilePicture`) VALUES
(11, 'piyumi.rathnayaka2018@gmail.com', '$2y$10$YlbMxuhnaH1L0j6aSYKciOHTt7vxqWGncNuFIpmwFLqmD.UsK16Ki', 'vendor', 'Piyumi', 'Rthnayaka', '', '', 'Female', '0'),
(12, 'admin@gmail.com', 'admin', 'admin', 'Admin', '1', '', '', '', '0'),
(17, 'chamathka98@gmail.com', '$2y$10$29ITcJweVHD1su5GjYpJm.0RukyJo4sO2s7gozAMOKMOp48xoY4By', 'customer', 'Chamathka', 'Shehani', '\"Hiruni\",Thelijjawila,Mathara', '977942885V', 'Female', '171647438466.png'),
(18, 'dinilr123@gmail.com', '$2y$10$gEYQK5VznaBTQPrNUuyWeukBhrJuQrMqcvCcvI6qEYFnhFOuk5So2', 'customer', 'Dinil', 'Ratnayake', '234/3, Moratuwa Road, Piliyandala', '199935012181', 'Male', '181647320642.jpeg'),
(20, 'batuwangalapivithuru@gmail.com', '$2y$10$Op7yc0z1AXpGhT.iSdaiWuHOl1JvfO83BkQg0M8ts8gXrqST7B1Zq', 'vendor', 'Pivithuru', 'Batuwangala', 'No 17, Heen ela Road', '200184903891V', 'Male', '201642635752.jpg'),
(21, 'hiru@gmail.com', '$2y$10$uSkUPB2FcQOm2TvaT/lx..M4u6CMoQLglSLsQjnnpTjtBBBE5MQFy', 'vendor', 'Hiru', 'Abeywickrama', '', '', 'Female', '0'),
(22, 'anudiathukorala@gmail.com', '$2y$10$1G3z6.GxYj40P5H2qOSucOP9FdrHIm2COZwogC8iSJHsOGjBKciz2', 'customer', 'Anudhi', 'Athukorala', '', '', 'Female', '0'),
(33, 'risini@gmail.com', '$2y$10$VyJTyg5gvtl7sBQ.gKr/luS62pi6TiiDXbiW4ocAYVGv4eH3vfm4G', 'customer', 'Risini', 'Lahandapurage', '', '', '', ''),
(34, 'ajith64@gmail.com', '$2y$10$VIpkRI5ymBOzMR2XFCBGMO74nY1qTog0tJbDKwlLORVN9h1jF/V7m', 'customer', 'Ajith', 'Rathnayka', '', '', '', ''),
(35, 'chamath@g.com', '$2y$10$KQL9z4OvFn5KXbjP53D9h.jW0hzkQhDUDhiNBp7NrW6j1frNmIbwy', 'customer', 'Chamath', 'Mahatha', '', '', '', ''),
(36, 'sanduni@gmail.com', '$2y$10$hFz1fK9CaGUMh/9L6l8y6OgbgxFeGdhcxLh9UPS8em79F9PLjXsDS', 'customer', 'Sanduni', 'Sewwandi', '', '', '', ''),
(37, 'justin@123.com', '$2y$10$R9e.tk0rFgFCAn/UZjzkV.74ib4WYHWdPTK2MskzimqfhNKlBKc4m', 'customer', 'justin', 'kamilka', '', '', '', ''),
(45, 'mj@gmail.com', '$2y$10$OjZmNmnwkaXLNajraiRvL.JJhZTEs6jJ6h1jxAww1i5q2IeSS9BRu', 'customer', 'micheal', 'jordan', '', '', '', ''),
(46, 'dini@gmail.com', '$2y$10$2tQ/VKiAdoGUUxXMmWFfkOdD4bV5HjxzSYQIwOzqBH7da9/jSQPdu', 'customer', 'dsdv', 'sdvsdav', '', '', '', ''),
(51, 'seniru@gmail.com', '$2y$10$3dKgn3mzNoTL26t.HwWkxebd7r2RAatbdt12bVVQDcGGXPyN.JBl.', 'customer', 'Dinil', 'Seniru', '', '', '', ''),
(52, 'geforcegtx1650yt@gmail.com', '$2y$10$ToTkparEdznqQmadBQ0p3uQz1gh3lL1lVPRRcsVs.L74m2DwLzJp6', 'vendor', 'kasuni', 'malshika', '', '', '', ''),
(53, 'customer@123.com', '$2y$10$du3eFgM3hRD2Yy/gslg7HO/Lcc.U2iP8pHm9tl4i4L3crwJ7BlwHS', 'customer', 'justin', 'kamilka', '', '', '', ''),
(54, 'naveesha@gmail.com', '$2y$10$UHuAgHou4cbonGVBj1M.X.Om9Gs4WTp/yE7raXQGZmntXjs42yZtC', 'customer', 'Naveesha', 'Rathnayaka', '\"Piyumi\", Anganaketiya, Karandeniya.', '200184903891V', 'Female', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE `user_online` (
  `userName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `user_id` int(10) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_holder_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`user_id`, `account_number`, `bank_name`, `account_holder_name`, `branch`) VALUES
(11, '100113156876', 'Sampath Bank', 'P. Rathnayaka', 'Ambalangoda'),
(18, '100113156823', 'Hatton National Bank', 'B.G.D.S.B. RATNAYAKE', 'piliyandala'),
(20, '0', '0', '', ''),
(21, '0', '0', '', ''),
(22, '0', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payment`
--

CREATE TABLE `vendor_payment` (
  `payment_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `content` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `type` varchar(50) NOT NULL,
  `request_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_payment`
--

INSERT INTO `vendor_payment` (`payment_id`, `date`, `amount`, `vendor_id`, `content`, `description`, `type`, `request_id`) VALUES
(4, '2022-01-15', '10000', 22, '61e1d21c0818c1.48142881.WhatsApp Image 2022-01-14 at 17.53.27.jpeg', 'Requested Amount Paid', '', NULL),
(14, '2022-01-16', '10000', 22, '61e1e4c6eb0483.31639865.WhatsApp Image 2022-01-14 at 17.53.27.jpeg', 'Requested Amount Paid', 'Requested Payment', 1),
(16, '2022-03-23', '10000', 20, '623aef409d26d5.33753283.saloon kes.jpg', 'Monthly Payment', 'Monthly Payment', 0),
(17, '2022-03-22', '12000', 20, '623aef9999a2d4.71246301.saloon kes.jpg', 'Monthly Payment', 'Monthly Payment', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_request`
--

CREATE TABLE `vendor_request` (
  `request_id` int(10) NOT NULL,
  `req_amount` decimal(10,2) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_request`
--

INSERT INTO `vendor_request` (`request_id`, `req_amount`, `user_id`, `status`) VALUES
(1, '10000.00', 22, 'Paid'),
(2, '25000.00', 11, 'Requested');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `user_id` int(10) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `withdrawable_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`user_id`, `amount`, `withdrawable_amount`) VALUES
(11, '120000.00', '116400.00'),
(12, '11298.97', '11298.97'),
(20, '302010.31', '292950.00'),
(22, '89690.72', '87000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability_calendar`
--
ALTER TABLE `availability_calendar`
  ADD PRIMARY KEY (`user_id`,`availability_calendar_id`) USING BTREE;

--
-- Indexes for table `availability_update`
--
ALTER TABLE `availability_update`
  ADD PRIMARY KEY (`planning_id`,`availability_calendar_id`),
  ADD KEY `availability_update_ibfk_1` (`vendor_id`);

--
-- Indexes for table `availability_updateplanning_id`
--
ALTER TABLE `availability_updateplanning_id`
  ADD PRIMARY KEY (`planning_id`,`availability_calendar_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contacting_event_planner`
--
ALTER TABLE `contacting_event_planner`
  ADD PRIMARY KEY (`event_planner_id`),
  ADD KEY `contacting_event_planner_ibfk_1` (`customer_id`);

--
-- Indexes for table `contact_service_provider`
--
ALTER TABLE `contact_service_provider`
  ADD PRIMARY KEY (`service_provider_id`,`customer_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`planning_id`);

--
-- Indexes for table `event_planner_details`
--
ALTER TABLE `event_planner_details`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `event_planner_event_pages`
--
ALTER TABLE `event_planner_event_pages`
  ADD PRIMARY KEY (`event_page_id`);

--
-- Indexes for table `event_planner_note`
--
ALTER TABLE `event_planner_note`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `event_planner_note_body`
--
ALTER TABLE `event_planner_note_body`
  ADD PRIMARY KEY (`vendor_note_id`),
  ADD KEY `note_id_constraint` (`note_id`);

--
-- Indexes for table `event_planner_service`
--
ALTER TABLE `event_planner_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `event_schedule_board`
--
ALTER TABLE `event_schedule_board`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `planning_id` (`planning_id`);

--
-- Indexes for table `how_it_works`
--
ALTER TABLE `how_it_works`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `marketing_content`
--
ALTER TABLE `marketing_content`
  ADD PRIMARY KEY (`content_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `marketing_payment`
--
ALTER TABLE `marketing_payment`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `other_service`
--
ALTER TABLE `other_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `payment_ibfk_2` (`vendor_id`),
  ADD KEY `payment_ibfk_3` (`customer_id`);

--
-- Indexes for table `service_preferences`
--
ALTER TABLE `service_preferences`
  ADD PRIMARY KEY (`preference_id`);

--
-- Indexes for table `service_provided_area`
--
ALTER TABLE `service_provided_area`
  ADD PRIMARY KEY (`user_id`,`district`);

--
-- Indexes for table `service_review`
--
ALTER TABLE `service_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`t_c_id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vendor_payment`
--
ALTER TABLE `vendor_payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `vendor_payment_ibfk_1` (`vendor_id`);

--
-- Indexes for table `vendor_request`
--
ALTER TABLE `vendor_request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `vendor_request_ibfk_2` (`user_id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `planning_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `event_planner_event_pages`
--
ALTER TABLE `event_planner_event_pages`
  MODIFY `event_page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `event_planner_note`
--
ALTER TABLE `event_planner_note`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `event_planner_note_body`
--
ALTER TABLE `event_planner_note_body`
  MODIFY `vendor_note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `event_planner_service`
--
ALTER TABLE `event_planner_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_schedule_board`
--
ALTER TABLE `event_schedule_board`
  MODIFY `task_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `how_it_works`
--
ALTER TABLE `how_it_works`
  MODIFY `section_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `marketing_content`
--
ALTER TABLE `marketing_content`
  MODIFY `content_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `marketing_payment`
--
ALTER TABLE `marketing_payment`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `other_service`
--
ALTER TABLE `other_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service_preferences`
--
ALTER TABLE `service_preferences`
  MODIFY `preference_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1270;

--
-- AUTO_INCREMENT for table `service_review`
--
ALTER TABLE `service_review`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `t_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `test_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `vendor_payment`
--
ALTER TABLE `vendor_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `vendor_request`
--
ALTER TABLE `vendor_request`
  MODIFY `request_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `availability_calendar`
--
ALTER TABLE `availability_calendar`
  ADD CONSTRAINT `availability_calendar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `vendor` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `availability_update`
--
ALTER TABLE `availability_update`
  ADD CONSTRAINT `availability_update_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contacting_event_planner`
--
ALTER TABLE `contacting_event_planner`
  ADD CONSTRAINT `contacting_event_planner_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contacting_event_planner_ibfk_2` FOREIGN KEY (`event_planner_id`) REFERENCES `event_planner` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact_service_provider`
--
ALTER TABLE `contact_service_provider`
  ADD CONSTRAINT `contact_service_provider_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `contact_service_provider_ibfk_2` FOREIGN KEY (`service_provider_id`) REFERENCES `service_provider` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_planner_details`
--
ALTER TABLE `event_planner_details`
  ADD CONSTRAINT `event_planner_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `event_planner` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marketing_content`
--
ALTER TABLE `marketing_content`
  ADD CONSTRAINT `marketing_content_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `vendor` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `service_provided_area`
--
ALTER TABLE `service_provided_area`
  ADD CONSTRAINT `service_provided_area_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `vendor` (`user_id`);

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `user_id constraint` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vendor_payment`
--
ALTER TABLE `vendor_payment`
  ADD CONSTRAINT `vendor_payment_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
