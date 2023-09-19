-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2023 at 07:28 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int NOT NULL,
  `doctor_id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `doctor_id`, `name`, `email`, `phone`, `created_at`) VALUES
(1, 1, 'zeyad', 'ahmedomar1423@gmail.com', 1063760442, '2023-09-16 21:52:17'),
(5, 1, 'eslam', 'eslam@gmail.com', 165777578, '2023-09-16 22:00:35'),
(6, 1, 'esraa', 'esraamohamed@gmail.com', 1063760443, '2023-09-16 22:02:10'),
(8, 1, 'eyad', 'ahmedomar1423@gmail.com', 1068674589, '2023-09-16 22:06:36'),
(13, 1, 'ahmed', 'test@gmail.com', 1063760442, '2023-09-16 22:23:30'),
(15, 1, 'zoz', 'zoz@gmail.com', 1063869551, '2023-09-16 22:25:00'),
(16, 2, 'mohamed', 'mohamed@gmail.com', 1063762554, '2023-09-16 22:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `message` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `bio` varchar(300) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `major_id` int NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `email`, `bio`, `password`, `major_id`, `image`) VALUES
(1, 'Gillian', 'gfist0@tmall.com', 'I am a doctor specializing in surgery', 'dE2\'ezNduSBg!w', 1, 'assets/images/women.jpg'),
(2, 'Daffy', 'dpygott1@cloudflare.com', 'I am a doctor specializing in surgery', 'xZ7,j))+0YohWU', 1, 'assets/images/major.jpg'),
(3, 'Marven', 'msconce2@elegantthemes.com', 'I am a doctor specializing in surgery', 'fP3&F/>OE%!', 1, 'assets/images/major.jpg'),
(4, 'Torr', 'tlenox3@dagondesign.com', 'I am a doctor specializing in surgery', 'eB9|{vTH3NE~', 1, 'assets/images/major.jpg'),
(5, 'Marni', 'mklimko4@chicagotribune.com', 'I am a doctor specializing in surgery', 'nB1%+Ti\"?DSbXY', 1, 'assets/images/women.jpg'),
(6, 'Minta', 'mqueyeiro5@hao123.com', 'I am a doctor specializing in surgery', 'mM0\"?4=4,t{cU1', 1, 'assets/images/women.jpg'),
(7, 'Martica', 'mkellert6@mapquest.com', 'I am a doctor specializing in surgery', 'mC3`Cc+`@71B', 1, 'assets/images/major.jpg'),
(8, 'Joye', 'jdallicoat7@miitbeian.gov.cn', 'I am a doctor specializing in surgery', 'rW6(`(u+YPY7+m3o', 1, 'assets/images/major.jpg'),
(9, 'Ermanno', 'echave8@topsy.com', 'I am a doctor specializing in surgery', 'oF8|#6%{g$v?bJ+\"', 1, 'assets/images/major.jpg'),
(10, 'Mindy', 'mmetschke9@phpbb.com', 'I am a doctor specializing in surgery', 'yM6&)FQD92fP', 1, 'assets/images/major.jpg'),
(11, 'Reinaldos', 'rdandya@cisco.com', 'I am a doctor specialized in dentistry', 'vO0\'@,F{t+', 2, 'assets/images/major.jpg'),
(12, 'Marcel', 'mcranchb@nydailynews.com', 'I am a doctor specialized in dentistry', 'yF7?`Yo@QJ7y#)W', 2, 'assets/images/major.jpg'),
(13, 'Muffin', 'mbonnettec@hhs.gov', 'I am a doctor specialized in dentistry', 'bI6|jG2sQ#NP+G{?', 2, 'assets/images/major.jpg'),
(14, 'Wendeline', 'wbothed@tumblr.com', 'I am a doctor specialized in dentistry', 'nQ7\"`>?@pZ', 2, 'assets/images/women.jpg'),
(15, 'Krishnah', 'kcrossmane@google.com.hk', 'I am a doctor specialized in dentistry', 'cS7%kbUCxYJ8#*P', 2, 'assets/images/women.jpg'),
(16, 'Therine', 'talchinf@cam.ac.uk', 'I am a doctor specialized in dentistry', 'dA7@G!uXe\r..SnA', 2, 'assets/images/women.jpg'),
(17, 'Honey', 'hkollachg@shinystat.com', 'I am a doctor specialized in dentistry', 'lH9}@Z*x%d2', 2, 'assets/images/women.jpg'),
(18, 'Nathan', 'nduchanh@desdev.cn', 'I am a doctor specialized in dentistry', 'qG0%O>!L}OhD', 2, 'assets/images/major.jpg'),
(19, 'Brigid', 'bmenendezi@bluehost.com', 'I am a doctor specialized in dentistry', 'kT7\'\"O*BL', 2, 'assets/images/major.jpg'),
(20, 'Natale', 'naudibertj@naver.com', 'I am a doctor specialized in dentistry', 'fI7@\'k4Qm~obdO', 2, 'assets/images/women.jpg'),
(21, 'Chris', 'cwhittyk@whitehouse.gov', 'I am a doctor specializing in orthopedics', 'iM7|8h8Wto{', 3, 'assets/images/major.jpg'),
(22, 'Kacy', 'klebarrl@berkeley.edu', 'I am a doctor specializing in orthopedics', 'iU5`z4vr$Y(', 3, 'assets/images/major.jpg'),
(23, 'Stillmann', 'smacalpinm@geocities.jp', 'I am a doctor specializing in orthopedics', 'cI8\'(X#n).1', 3, 'assets/images/major.jpg'),
(24, 'Kimmie', 'kwallentinn@hexun.com', 'I am a doctor specializing in orthopedics', 'lZ5&Dm+o{5b`j', 3, 'assets/images/major.jpg'),
(25, 'Storm', 'sfermoro@desdev.cn', 'I am a doctor specializing in orthopedics', 'dY8_pUWeb6=7=8', 3, 'assets/images/major.jpg'),
(26, 'Rozamond', 'rsheadp@springer.com', 'I am a doctor specializing in orthopedics', 'zL6&oLW,)#\'_<SC', 3, 'assets/images/women.jpg'),
(27, 'Ainsley', 'amintoffq@constantcontact.com', 'I am a doctor specializing in orthopedics', 'dZ9\"%GHmo.BE', 3, 'assets/images/major.jpg'),
(28, 'Angie', 'achadbourner@hubpages.com', 'I am a doctor specializing in orthopedics', 'uX8$LEFiUM2qO0', 3, 'assets/images/women.jpg'),
(29, 'Rickard', 'rreijmerss@ezinearticles.com', 'I am a doctor specializing in orthopedics', 'mU7%B8Op+ZdW', 3, 'assets/images/major.jpg'),
(30, 'Sarine', 'sprucet@plala.or.jp', 'I am a doctor specializing in orthopedics', 'uE0(D/`1n/*C@', 3, 'assets/images/women.jpg'),
(31, 'Sara Ezzet', 'sara@gmail.com', 'im a dentist', 'sara1423', 2, 'women.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` int NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `title`, `image`) VALUES
(1, 'Surgery', './assets/images/surgery.jpg'),
(2, 'dentist', './assets/images/dentist.jpg'),
(3, 'bones', './assets/images/bones.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) DEFAULT NULL,
  `id` int NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` int DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `id`, `email`, `password`, `phone`, `role`) VALUES
('zeyad', 1, 'zeyad@gmail.com', 'password_hash(123456, PASSWORD_BCRYPT)', NULL, NULL),
('eslam', 2, 'eslam@gmail.com', 'password_hash(123456, PASSWORD_BCRYPT)', NULL, NULL),
('eyad', 3, 'eyad@gmail.com', '123456', NULL, NULL),
('zeyad_admid', 4, 'zeyadadmin@gmail.com', '123456', NULL, 'admin'),
('test', 5, 'test@gmail.com', '1234567890', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `major_id` (`major_id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`);

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
