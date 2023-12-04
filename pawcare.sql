-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 05:21 PM
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
-- Database: `pawcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `description` varchar(10000) NOT NULL,
  `size` varchar(20) NOT NULL,
  `age` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `vaccinated` varchar(3) NOT NULL,
  `trained` varchar(3) NOT NULL,
  `breed` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `donee_id_fk` int(11) NOT NULL,
  `donor_name` varchar(30) NOT NULL,
  `donor_email` varchar(50) NOT NULL,
  `donor_phone` int(15) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`id`, `name`, `picture`, `description`, `size`, `age`, `gender`, `vaccinated`, `trained`, `breed`, `status`, `donee_id_fk`, `donor_name`, `donor_email`, `donor_phone`, `state`, `city`) VALUES
(21, 'loki', 'gal1.jpg', 'good dog', '34', '4', 'male', 'yes', 'yes', 'dog', 1, 9, 'vijay', 'vijay@123', 1234567890, 'Tamil Nadu', 'coimbatore'),
(22, 'joe', 'gal3.jpg', 'good dog', '43', '5', 'male', 'yes', 'yes', 'dog', 1, 9, 'vijay', 'vijay@123', 1234567890, 'Tamil Nadu', 'selam'),
(33, 'prem', '6569bdac17b81.webp', 'good dog', '35', '4', 'female', 'yes', 'yes', 'dog', 1, 9, 'hemanth', 'user1@gmail.com', 1234567890, 'Tamil Nadu', 'coimbatore'),
(34, 'nishant', '6569bf1922773.webp', 'good cat', '42', '8', 'male', 'yes', 'yes', 'cat', 1, 9, 'vijay', 'user@123', 1234567890, 'Tamil Nadu', 'coimbatore'),
(36, 'dang', '656a264a5c2ef.jpg', 'good pet', '58', '5', 'female', 'yes', 'yes', 'other', 1, 9, 'vijay', 'vijay@123', 1234567890, 'Tamil Nadu', 'Mumbai'),
(37, 'dhanush', '656cac883bc90.jpg', 'aamai', '23', '20', 'male', 'yes', 'yes', 'other', 1, 9, 'vijay', 'vijay@123', 1234567890, 'Tamil Nadu', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `pet_adoptions`
--

CREATE TABLE `pet_adoptions` (
  `id` int(11) NOT NULL,
  `adopt_date` date DEFAULT NULL,
  `user_id_fk` int(11) NOT NULL,
  `animal_id_fk` int(11) NOT NULL,
  `request_date` date NOT NULL,
  `living_condition` varchar(2000) NOT NULL,
  `previous_experience` varchar(2000) NOT NULL,
  `adoption_reason` varchar(2000) NOT NULL,
  `shelter_id` int(25) DEFAULT NULL,
  `seen` int(11) NOT NULL DEFAULT 0,
  `adoptername` varchar(30) NOT NULL,
  `adopteremail` varchar(30) NOT NULL,
  `contactnumber` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `status`) VALUES
(6, 'admin', 'admin@123', 'admin', 'admin'),
(7, 'joe', 'joe@123', 'joe', 'user'),
(8, 'Vijay Keerthy', 'vijaykeerthy101@gmail.com', '123', 'user'),
(9, 'admin', 'user@123', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donee_id_fk` (`donee_id_fk`);

--
-- Indexes for table `pet_adoptions`
--
ALTER TABLE `pet_adoptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id_fk` (`user_id_fk`),
  ADD KEY `animal_id_fk` (`animal_id_fk`),
  ADD KEY `pet_adoptions_ibfk_3` (`shelter_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pet_adoptions`
--
ALTER TABLE `pet_adoptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `animals`
--
ALTER TABLE `animals`
  ADD CONSTRAINT `animals_ibfk_1` FOREIGN KEY (`donee_id_fk`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pet_adoptions`
--
ALTER TABLE `pet_adoptions`
  ADD CONSTRAINT `pet_adoptions_ibfk_1` FOREIGN KEY (`user_id_fk`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `pet_adoptions_ibfk_2` FOREIGN KEY (`animal_id_fk`) REFERENCES `animals` (`id`),
  ADD CONSTRAINT `pet_adoptions_ibfk_3` FOREIGN KEY (`shelter_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
