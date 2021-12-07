-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 07:53 AM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'DesignX', 'Wedding', '', '2021-12-04', '2021-12-06', 'Kandy', 100, 16, 0, 'Through Event Planner'),
(4, 'DesignX', 'Wedding', '', '2021-12-16', '2021-12-20', 'Ampara', 100, 16, 0, 'On Your Own'),
(6, 'Shero', 'Wedding', '', '2021-12-20', '2021-12-24', 'Badulla', 125, 16, 0, 'On Your Own'),
(12, '', 'Wedding', '', '2021-12-18', '2021-12-20', 'Monaragala', 125, 16, 0, 'On Your Own'),
(13, '', 'Party/Festival', '', '2021-12-28', '2021-12-29', 'Badulla', 250, 16, 0, 'On Your Own');

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
-- Table structure for table `event_planner_note`
--

CREATE TABLE `event_planner_note` (
  `note_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_planner_note`
--

INSERT INTO `event_planner_note` (`note_id`, `user_id`, `event_name`, `customer_name`, `note`) VALUES
(19, 23, 'Wedding', 'Kamal', 'Kamal 123'),
(23, 29, 'Event show', 'Amal', 'Ex note');

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
  `vendor_added` varchar(50) NOT NULL,
  `description` varchar(256) NOT NULL,
  `column_name` varchar(50) NOT NULL,
  `deadline` date NOT NULL,
  `planning_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `marketing_content`
--

CREATE TABLE `marketing_content` (
  `content_id` int(10) NOT NULL,
  `content` varchar(256) NOT NULL,
  `publish_date` date NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketing_content`
--

INSERT INTO `marketing_content` (`content_id`, `content`, `publish_date`, `user_id`) VALUES
(1, '61aef9c562c0b0.84058409.jpeg', '0000-00-00', 20);

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
(6, 12, 17, 'Hi Chamathka');

-- --------------------------------------------------------

--
-- Table structure for table `other_service`
--

CREATE TABLE `other_service` (
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_terms_and_conditions` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_information` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cancellation_policy` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advance_price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preparation_time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initial_discount` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `simultanoeus_booking` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dancing_floor` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `standing_capacity` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meal_time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buffet` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_attendants` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_provider_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dancing_type_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saloon_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cake_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sweet_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `setiback_poruwa` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seating_arrangement` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floral_arrangement` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age_range` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dress_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `other_service`
--

INSERT INTO `other_service` (`user_id`, `service_id`, `service_name`, `description`, `payment_terms_and_conditions`, `additional_information`, `cancellation_policy`, `advance_price`, `preparation_time`, `initial_discount`, `simultanoeus_booking`, `video_url`, `image`, `document`, `caption`, `dancing_floor`, `standing_capacity`, `meal_time`, `buffet`, `no_of_attendants`, `music_provider_type`, `dancing_type_name`, `saloon_type`, `cake_type`, `sweet_type`, `setiback_poruwa`, `seating_arrangement`, `floral_arrangement`, `age_range`, `dress_type`) VALUES
(20, 1, 'Solis', 'Best service', 'no', 'no', 'no', '50000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(20, 1, 'Mount Lavinia', 'Summer', 'Romantically decorated Overnight stay for the bridal couple at the Mount Lavinia Hotel, with bubbly breakfast in bed or international breakfast buffet at the Governors restaurant.\r\nStrawberries with chocolate dip in the room\r\nComplimentary 30 minutes massage at the Coco SPA\r\nComplimentary day room for arrangements and Bridle dressing.\r\nBeautifully frilled table for the cake structure.\r\nAntique settee with coffee table.\r\nTraditional 5 ½ ft Brass Oil Lamp.\r\nComplementary candle lit dinner for your first wedding anniversary on our romantic paradise beach.\r\nModern air conditioned Studio to take photographs and magnificent photo locations.\r\nEntrance flower arrangement.\r\nComplimentary pressing of going away attire.', '2021-10-16', '2021-12-31', '5000', '0'),
(20, 2, 'Mount Lavinia', 'Big deal', 'Complimentary Honeymoon Suite inclusive of breakfast\r\nOne complimentary changing rooms on the day of the wedding (for a maximum of 8 hours)\r\nComplimentary welcome drink\r\nComplimentary use of the band stand & dance floor\r\nTraditional oil lamp (décor by guest)\r\n50 % discount on chair covers\r\nComplimentary dinner for two voucher for 1st year anniversary', '2021-10-16', '2021-11-10', '3000', '0'),
(20, 3, 'Crystal Catering', 'Wedding Package', 'Roast Beef with Mushroom or Lengua \r\nChicken Cordon Bleu \r\nSweet and Sour Meatball (Bonus) \r\nButtered Vegetable with Ham and Cashew Nut \r\nBaked Macaroni or Carbonara \r\nRice \r\nSteamed Pandan Rice \r\nRocky Road or Choco Fudge \r\nPineapple Juice or Iced Tea (Bottomless) \r\nVegetarian Menu also Available \r\nAmenities: \r\nFlower and Table Arrangements \r\nTwo Layer Cake and Chocolate Fountain with Dippers \r\nPair of Dove \r\nWine for Toasting \r\nPresidential Table / Gift Table / Cake Table \r\nSignature Frame', '2021-10-16', '2021-12-31', '0', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(10) NOT NULL,
  `payment_date` date NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `status` varchar(256) NOT NULL,
  `wallet_id` int(10) NOT NULL,
  `vendor_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_planner_flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_preferences`
--

CREATE TABLE `service_preferences` (
  `preference_id` int(10) NOT NULL,
  `planning_id` int(10) NOT NULL,
  `service_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_planner_flag` tinyint(1) NOT NULL,
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
  `no_of_servents` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estimated_budget_range` int(8) NOT NULL,
  `photo_shoot_details` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `music_band` tinyint(1) NOT NULL,
  `solo_singer` tinyint(1) NOT NULL,
  `dj` tinyint(1) NOT NULL,
  `kandyan` tinyint(1) NOT NULL,
  `sabaragamuwa` tinyint(1) NOT NULL,
  `low_country` tinyint(1) NOT NULL,
  `western` tinyint(1) NOT NULL,
  `saloon_type` tinyint(1) NOT NULL,
  `hair_style` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_dressers` int(5) NOT NULL,
  `make_up` tinyint(1) NOT NULL,
  `wedding_cake` tinyint(1) NOT NULL,
  `sweet` tinyint(1) NOT NULL,
  `party_cake` tinyint(1) NOT NULL,
  `floral` tinyint(1) NOT NULL,
  `sound_service` tinyint(1) NOT NULL,
  `lighting_service` tinyint(1) NOT NULL,
  `indoor_event` tinyint(1) NOT NULL,
  `outdoor_event` tinyint(1) NOT NULL,
  `male_dress` tinyint(1) NOT NULL,
  `female_dress` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_preferences`
--

INSERT INTO `service_preferences` (`preference_id`, `planning_id`, `service_type`, `event_planner_flag`, `seating_arrangement`, `indoor_venue`, `outdoor_venue`, `seti_back`, `poruwa`, `dancing_floor`, `breakfast`, `lunch`, `dinner`, `buffet`, `tea_time`, `no_of_servents`, `estimated_budget_range`, `photo_shoot_details`, `music_band`, `solo_singer`, `dj`, `kandyan`, `sabaragamuwa`, `low_country`, `western`, `saloon_type`, `hair_style`, `no_of_dressers`, `make_up`, `wedding_cake`, `sweet`, `party_cake`, `floral`, `sound_service`, `lighting_service`, `indoor_event`, `outdoor_event`, `male_dress`, `female_dress`) VALUES
(4, 0, '', 0, 'board', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(11, 0, '', 0, 'banquet', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(18, 0, '', 0, 'banquet', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
(6, 'dilsithmiabeywickrama@gmail.com', '$2y$10$WxVKnWe4Bjy1iAlXofsu7e87ro36K3jxfOizitXh.HGHIvZC2CEH2', 'customer', 'Hiruni ', 'Danapala', '', '', 'Female', '161637948726.jpg'),
(10, 'batuwangalapivithuru@gmail.com', '$2y$10$/4LjFphLOiMWPbdh4eahROKmkFO2dZO.AY1vM2Q6vfmXI7QoO6lAy', 'customer', 'Pivithuru', 'Hiruthma', '', '', 'Male', '0'),
(11, 'piyumi.rathnayaka2018@gmail.com', '$2y$10$YlbMxuhnaH1L0j6aSYKciOHTt7vxqWGncNuFIpmwFLqmD.UsK16Ki', 'vendor', 'Piyumi', 'Rthnayaka', '', '', 'Female', '0'),
(12, 'admin@gmail.com', 'admin', 'admin', 'Admin', '1', '', '', '', '0'),
(16, 'naveesha@gmail.com', '$2y$10$8mfL5c9oeMzRw7hO31eqGOsAiKda.6u1iDCKzIC3qrYH11lEgGg9C', 'customer', 'Naveesha', 'Rathnayaka', '\"Piyumi\", Anganaketiya, Karandeniya.', '200184903891V', 'Female', '161638639430.jpg'),
(17, 'chamathka98@gmail.com', '$2y$10$29ITcJweVHD1su5GjYpJm.0RukyJo4sO2s7gozAMOKMOp48xoY4By', 'customer', 'Chamathka', 'Shehani', '\"56/A\", Kirinuge, Karandeniya', '977942885V', 'Female', '171637857166.png'),
(18, 'dinilr123@gmail.com', '$2y$10$cQUnwrz30FQ0T2o0fDYfnuI8TS5oKHfepG14g2X/dyxtYEMmjiyhK', 'vendor', 'Dinil', 'Ratnayake', '', '', 'Male', '0'),
(19, 'partyak@gmail.com', '$2y$10$wCL2clZA3iqd6bys.itL1.mkbNG3FRPS4NqpORKUImxaXs9id7Yw.', 'vendor', '', '', '', '', '', '0'),
(20, '2019cs032@stu.ucsc.lk', '$2y$10$Op7yc0z1AXpGhT.iSdaiWuHOl1JvfO83BkQg0M8ts8gXrqST7B1Zq', 'vendor', 'Dilshithmi ', 'Abeyvickrma', '', '', 'Female', '0'),
(21, 'hiru@gmail.com', '$2y$10$uSkUPB2FcQOm2TvaT/lx..M4u6CMoQLglSLsQjnnpTjtBBBE5MQFy', 'vendor', 'Hiru', 'Abeywickrama', '', '', 'Female', '0'),
(22, 'anudiathukorala@gmail.com', '$2y$10$in.QH.FH83fC9j1jtDdUM.1jT2Qd1li2iGtdMVltHSix1wS0fPqbK', 'vendor', 'Anudhi', 'Athukorala', '', '', 'Female', '0'),
(23, 'andersonsilva@gmail.com', '$2y$10$48IGM9LE5s9bJdfjMBp3Xu0j6pqPeMxZUm21g9aX1Qj/rE4JcO7ti', 'vendor', 'Anderson ', 'De Silva', '', '', 'Male', '0'),
(27, 'dean@gmail.com', '$2y$10$G8JKhiq/3Oio7.fAHjYADePfJXOj5HmtSd.rnr1768UrM4zGHsPSa', 'vendor', 'Charitha', 'Attalage', '', '', 'Male', '0'),
(29, 'homalobi@livinginsurance.co.uk', '$2y$10$PWV6FGXmBGkJGL5I7Ui0Pekm7WWRDgGINEzcT1gm.7qc2YXgIfehi', 'vendor', 'Diana', 'Fernando', '', '', 'Female', '0'),
(30, 'nayana@gmail.com', '$2y$10$WrZT.HCn04XJahGPcyb7/ekZvmCD.yFs3n/8lwefN1U7pbLgTquRi', 'customer', 'Nayana', 'Nethsara', '', '', 'Male', '0'),
(32, 'jdratnayake@gmail.com', '$2y$10$xM13UavwUiLJOq.ObHBav.4LFjEOqwQ/eYm7Sa6JHh9IKjxYNSWpy', 'customer', 'Janitha', 'Ratnayake', '', '', '', ''),
(33, 'risini@gmail.com', '$2y$10$VyJTyg5gvtl7sBQ.gKr/luS62pi6TiiDXbiW4ocAYVGv4eH3vfm4G', 'customer', 'Risini', 'Lahandapurage', '', '', '', ''),
(34, 'ajith64@gmail.com', '$2y$10$VIpkRI5ymBOzMR2XFCBGMO74nY1qTog0tJbDKwlLORVN9h1jF/V7m', 'customer', 'Ajith', 'Rathnayka', '', '', '', ''),
(35, 'chamath@g.com', '$2y$10$KQL9z4OvFn5KXbjP53D9h.jW0hzkQhDUDhiNBp7NrW6j1frNmIbwy', 'customer', 'Chamath', 'Mahatha', '', '', '', '');

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
  `vendor_type` varchar(20) NOT NULL,
  `location` varchar(256) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_holder_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`user_id`, `vendor_type`, `location`, `account_number`, `bank_name`, `account_holder_name`, `branch`) VALUES
(11, 'service', '', '0', '0', '', ''),
(18, 'service', '', '0', '0', '', ''),
(19, 'event', '', '0', '0', '', ''),
(20, 'service', '', '0', '0', '', ''),
(21, 'service', '', '0', '0', '', ''),
(22, 'event', '', '0', '0', '', ''),
(23, 'event', '', '0', '0', '', ''),
(27, 'event', '', '0', '0', '', ''),
(29, 'event', '', '0', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `vendor_payment`
--

CREATE TABLE `vendor_payment` (
  `payment_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `wallet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_request`
--

CREATE TABLE `vendor_request` (
  `request_id` int(10) NOT NULL,
  `req_amount` decimal(10,2) NOT NULL,
  `user_id` int(10) NOT NULL,
  `payment_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `user_id` int(10) NOT NULL,
  `wallet_id` int(10) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `withdrawable_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `event_planner_note`
--
ALTER TABLE `event_planner_note`
  ADD PRIMARY KEY (`note_id`);

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
-- Indexes for table `marketing_content`
--
ALTER TABLE `marketing_content`
  ADD PRIMARY KEY (`content_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

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
  ADD KEY `wallet_id` (`wallet_id`),
  ADD KEY `payment_ibfk_2` (`vendor_id`),
  ADD KEY `payment_ibfk_3` (`customer_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

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
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`t_c_id`);

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
  ADD KEY `vendor_payment_ibfk_1` (`vendor_id`),
  ADD KEY `vendor_payment_ibfk_2` (`wallet_id`);

--
-- Indexes for table `vendor_request`
--
ALTER TABLE `vendor_request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `vendor_request_ibfk_2` (`user_id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`wallet_id`,`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `planning_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event_planner_note`
--
ALTER TABLE `event_planner_note`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `event_planner_service`
--
ALTER TABLE `event_planner_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_schedule_board`
--
ALTER TABLE `event_schedule_board`
  MODIFY `task_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketing_content`
--
ALTER TABLE `marketing_content`
  MODIFY `content_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `other_service`
--
ALTER TABLE `other_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_preferences`
--
ALTER TABLE `service_preferences`
  MODIFY `preference_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1088;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `t_c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `vendor_payment`
--
ALTER TABLE `vendor_payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `event_schedule_board`
--
ALTER TABLE `event_schedule_board`
  ADD CONSTRAINT `event_schedule_board_ibfk_1` FOREIGN KEY (`planning_id`) REFERENCES `on_your_own_planning` (`planning_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marketing_content`
--
ALTER TABLE `marketing_content`
  ADD CONSTRAINT `marketing_content_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `vendor` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`wallet_id`) REFERENCES `wallet` (`wallet_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payment_ibfk_3` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `vendor_payment_ibfk_1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vendor_payment_ibfk_2` FOREIGN KEY (`wallet_id`) REFERENCES `wallet` (`wallet_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vendor_request`
--
ALTER TABLE `vendor_request`
  ADD CONSTRAINT `vendor_request_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vendor_request_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `customer` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
