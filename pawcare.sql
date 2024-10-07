-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 05:40 AM
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
(21, 'loki', 'dog4.jpg', 'good dogs', '24', '4', 'male', 'Yes', 'yes', 'dog', 1, 15, 'vijay', 'vijay@123', 1234567890, 'Tamil Nadu', 'coimbatore'),
(22, 'joe', 'gal3.jpg', 'good dog', '13', '5', 'male', 'Yes', 'yes', 'dog', 1, 15, 'vijay', 'vijay@123', 1234567890, 'Tamil Nadu', 'selam'),
(33, 'prem', '6569bdac17b81.webp', 'good dog', '7', '4', 'female', 'yes', 'yes', 'dog', 1, 15, 'hemanth', 'user1@gmail.com', 1234567890, 'Tamil Nadu', 'coimbatore'),
(34, 'nishant', '6569bf1922773.webp', 'good cat', '3', '8', 'male', 'yes', 'yes', 'cat', 1, 15, 'vijay', 'user@123', 1234567890, 'Tamil Nadu', 'coimbatore'),
(36, 'dang', '656a264a5c2ef.jpg', 'good pet', '4', '5', 'female', 'yes', 'yes', 'other', 1, 15, 'vijay', 'vijay@123', 1234567890, 'Tamil Nadu', 'Mumbai'),
(37, 'dhanush', '656cac883bc90.jpg', 'aamai', '6', '20', 'male', 'yes', 'yes', 'other', 1, 15, 'vijay', 'vijay@123', 1234567890, 'Tamil Nadu', 'Mumbai'),
(38, 'Arun', '656e017d370b4.jfif', 'good other', '8', '3', 'male', 'yes', 'yes', 'other', 1, 15, 'vijay', 'vijay@123', 1234567890, 'Tamil Nadu', 'Coidbatore'),
(42, 'pon', '656f74c393570.jpg', 'nalla puna', '4', '2', 'male', 'yes', 'yes', 'cat', 1, 15, 'vijay', 'vijay@123', 2147483647, 'Tamil Nadu', 'Coidbatore'),
(43, 'saran', '657196e8bf082.jpg', 'nallla silanthi', '12', '1', 'male', 'no', 'no', 'other', 1, 15, 'vijay', 'vijay@123', 1234567890, 'Tamil Nadu', 'Coidbatore');

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

--
-- Dumping data for table `pet_adoptions`
--

INSERT INTO `pet_adoptions` (`id`, `adopt_date`, `user_id_fk`, `animal_id_fk`, `request_date`, `living_condition`, `previous_experience`, `adoption_reason`, `shelter_id`, `seen`, `adoptername`, `adopteremail`, `contactnumber`) VALUES
(35, NULL, 14, 36, '2023-12-11', 'home', 'no', 'I need this pet', 15, 1, 'vijay', 'vijay@123', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `status`) VALUES
(3, 'test1', 'test1@123', 'user', 'user'),
(6, 'test2', 'test2@123', 'admin', 'adm'),
(8, 'test3', 'test3@123', '831c237928e6212bedaa4451a514ace3174562f6761f6a157a2fe5082b36e2fb', 'user'),
(10, 'test4', 'test4@123', 'e606e38b0d8c19b24cf0ee3808183162ea7cd63ff7912dbb22b5e803286b4446', 'adm'),
(14, 'user', 'user@123', '831c237928e6212bedaa4451a514ace3174562f6761f6a157a2fe5082b36e2fb', 'user'),
(15, 'donate', 'donate@123', '86a49b447e02db87a579d0eab782fdc5955011a1302111d6e05c6bf03836f7dd', 'user'),
(16, 'admin', 'admin@123', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', 'adm'),
(17, 'nived', '23mx221@psgtech.ac.in', 'e50a63ef8c3023e4572dbad39a13d7bc7af644fa7b6566c48394410c06eb46a1', 'user'),
(18, 'nived', '23mx221@gmail.com', 'c775e7b757ede630cd0aa1113bd102661ab38829ca52a6422ab782862f268646', 'user');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pet_adoptions`
--
ALTER TABLE `pet_adoptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
