-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2025 at 02:42 PM
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
-- Database: `movies1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `movie_id` int(255) NOT NULL,
  `nr_tickets` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_id`, `movie_id`, `nr_tickets`, `date`, `time`) VALUES
(1, 9, 3, 15, '2022-07-21', '12:00'),
(2, 6, 1, 1, '2021-12-30', '17:00'),
(3, 12, 1, 3, '2025-06-25', '15:00');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(255) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `movie_desc` varchar(255) NOT NULL,
  `movie_quality` varchar(255) NOT NULL,
  `movie_rating` int(255) NOT NULL,
  `movie_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `movie_desc`, `movie_quality`, `movie_rating`, `movie_image`) VALUES
(1, 'T. Randolph Lombardo', 'From 1973 until 1976, Dr. Lombardo graduated with his undergraduate degree from Tulane University. He then went on to earn his medical degree from the University of Texas Southwestern Medical School in 1981.', 'Cardiology', 10, 'doctor1.png'),
(2, 'Howard Farran', 'Howard Farran has been involved in the field of dentistry for over 30 years. He graduated from UMKC School of Dentistry in 1987 and started a family practice in Phoenix. He is a dental specialist.', 'Dentistry', 8, 'doctor2.jpg'),
(3, 'Dr. Cynthia R. Strohmeyer', 'is a board-certified Dermatologist as well as a highly-regarded and sought-after Dermatologic Surgeon, who specializes in Cosmetic Dermatology. She is a dermatology specialist', 'Dermatology', 7, 'doctor3.jpg'),
(4, 'Chris Brandt', 'Licensed Physical Therapist, PT, DPT // Director of Marketing and Sales // Certified Dry Needling Specialist // EW Motion Therapy Homewood', 'Physical Therapist', 6, 'doctor4.jpg'),
(5, 'Hasnat Khan', 'Hasnat Ahmed Khan is a well-known British-Pakistani heart and lung surgeon who has achieved success in the medical field. He is recognized for his exceptional skills and expertise in surgery, particularly in the specialized areas of heart and lungs.', 'Cardiology', 9, 'doctor5.jpg'),
(6, 'Martha Somerman', 'Martha Somerman is the director of NIDCR and leads scientific research in the field of oral health and disease. Martha was dean at the University of Washington School of Dentistry and started teaching at the Baltimore College of Dental Surgery in 1984.', 'Dentistry', 10, 'doctor6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `emri` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirm_password` varchar(255) NOT NULL,
  `is_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emri`, `username`, `email`, `password`, `confirm_password`, `is_admin`) VALUES
(6, 'taulant', 'taulant', 'taulant@gmail.com', '$2y$10$fqCnjHudiouNiquBUtyy7uSY8LWdINi8WGq6PYmv8IpGh6JbZ5iqa', '$2y$10$VHPFGwlvC4pDMLvfB2C1HeoGAF9/L1TkzYtbXOH1m/QcDWMYgMDRa', 'false'),
(9, 'test', 'test', 'test@gmail.com', '1234', '1234', 'false'),
(10, 'drin', 'drindalipi', 'drindalipi.dd@gmail.com', '$2y$10$qlLSq511GfasN/hEMh2e5eN0zt7jhgNQi12zoz6Glts1/RF1oBrhi', '$2y$10$0ttx8IkEizYf19u7lQF1b.7g83WCbUZpYXVKhC615hC2r691aCAVG', 'true'),
(11, 'erion', 'erionazemi', 'eri@gmail.com', '$2y$10$wtsftwwQ5jUXjG4d1V4HjO5lk.Dj0u4.akVz.K42JrOhoUaEUPrrG', '$2y$10$NeLuY7HjIPpNHzteM7P7h.FevL4Qg8pJTJ5kGmCHmAYFP6iKAZ.kW', 'true'),
(12, 'test1', 'test1', 'test1@gmail.com', '$2y$10$WNrlFU7Z/leL0hBtik7zH.tOnlqN6pmSEUHVWmXJGIF3u5XwiSy8a', '$2y$10$QygA5M9cMj.zbaSSPlKaN.rosdKB.dVhRPb0iz2VmJjivLM9.7sxG', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
