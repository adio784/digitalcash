-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 10:02 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giditalcashsys`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `report` varchar(255) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `username`, `report`, `created`) VALUES
(1, '1', 'loggedin', '2022-06-24 19:06:49'),
(2, '1', 'loggedin', '2022-06-24 19:06:54'),
(3, '1', 'loggedin', '2022-06-24 19:06:12'),
(4, '1', 'loggedin', '2022-08-06 09:08:03'),
(5, '2', 'loggedin', '2022-08-06 09:08:25'),
(6, '9', 'loggedin', '2022-08-08 08:08:53'),
(7, '3', 'loggedin', '2022-08-08 08:08:21'),
(8, '1', 'loggedin', '2022-08-08 08:08:10'),
(9, '9', 'loggedin', '2022-08-08 08:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `reference` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `trans_type` int(11) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `reference`, `account_number`, `amount`, `bank_name`, `trans_type`, `created`) VALUES
(1, '1', '43564224', '76537960', '6000', 'WestEnd Bank', 1, '2022-06-22 17:02:40'),
(2, '1', '43564224', '76537960', '6000', 'WestEnd Bank', 1, '2022-06-22 17:02:47'),
(3, '1', '34802379', '76537960', '6000', 'WestEnd Bank', 1, '2022-06-22 17:14:07'),
(4, '1', '38591369', '76537960', '1000', 'WestEnd Bank', 1, '2022-06-22 17:14:45'),
(5, '1', '20996891', '76537960', '6000', 'WestEnd Bank', 1, '2022-06-22 17:15:46'),
(6, '1', '98430646', '76537960', '3500', 'WestEnd Bank', 1, '2022-06-22 17:50:36'),
(7, NULL, '91898149', '76537960', '1000', 'WestEnd Bank', 3, '2022-06-23 15:30:45'),
(8, NULL, '71999927', '76537960', '6000', 'WestEnd Bank', 3, '2022-06-23 15:32:35'),
(9, NULL, '36081847', '76537960', '1000', 'WestEnd Bank', 3, '2022-06-23 15:36:00'),
(10, NULL, '36081847', '76537960', '1000', 'WestEnd Bank', 3, '2022-06-23 15:36:29'),
(11, NULL, '42248574', '76537960', '6000', 'WestEnd Bank', 3, '2022-06-23 15:37:22'),
(12, NULL, '63102243', '76537960', '6000', 'WestEnd Bank', 3, '2022-06-23 15:38:01'),
(13, NULL, '41416249', '76537960', '1000', 'WestEnd Bank', 3, '2022-06-23 15:39:05'),
(14, NULL, '41416249', '76537960', '1000', 'WestEnd Bank', 3, '2022-06-23 15:39:09'),
(15, NULL, '77773722', '76537960', '1000', 'WestEnd Bank', 3, '2022-06-23 15:39:53'),
(16, NULL, '44769539', '76537960', '6000', 'WestEnd Bank', 3, '2022-06-23 15:40:08'),
(17, NULL, '47495471', '76537960', '6000', 'WestEnd Bank', 3, '2022-06-23 15:50:10'),
(18, NULL, '34006614', '76537960', '6000', 'WestEnd Bank', 3, '2022-06-23 15:51:39'),
(19, '1', '50713721', '76537960', '6000', 'WestEnd Bank', 1, '2022-06-23 15:53:42'),
(20, NULL, '92870128', '76537960', '6000', 'WestEnd Bank', 3, '2022-06-24 05:26:21'),
(21, NULL, '76537923', '76537960', '6000', 'WestEnd Bank', 2, '2022-06-24 05:30:09'),
(22, NULL, '7108840', '76537960', '6000', 'WestEnd', 2, '2022-06-24 05:32:04'),
(23, NULL, '27692291', '13247617', '1000', 'WestEnd', 2, '2022-08-08 07:48:52'),
(24, NULL, '50107375', '13247617', '2000', 'United Bank for Africa', 3, '2022-08-08 07:49:43'),
(25, NULL, '25492662', '76537960', '2000', 'WestEnd', 2, '2022-08-08 07:52:33'),
(26, NULL, '25492662', '76537960', '2000', 'WestEnd', 2, '2022-08-08 07:52:37'),
(27, NULL, '25492662', '76537960', '2000', 'WestEnd', 2, '2022-08-08 07:52:52'),
(28, NULL, '25492662', '76537960', '2000', 'WestEnd', 2, '2022-08-08 07:53:10'),
(29, NULL, '25492662', '76537960', '2000', 'WestEnd', 2, '2022-08-08 07:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(55) DEFAULT NULL,
  `lastname` varchar(55) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` int(2) DEFAULT NULL,
  `unique_id` int(11) DEFAULT NULL,
  `gender` varchar(55) DEFAULT NULL,
  `mstatus` varchar(55) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL COMMENT '0=inactive, 1=active',
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `phone`, `password`, `role`, `unique_id`, `gender`, `mstatus`, `address`, `status`, `created`) VALUES
(1, 'Admin', 'Super', 'admin', 'admin@admin.com', '070123456789', '$2y$10$j6hLYjPoLDkMg276P7rum.84LAYbst7wnQApXrhkLK.Pd2apEb9fS', 1, NULL, NULL, NULL, NULL, 1, '2022-03-25 17:21:13'),
(2, 'Abiodun', 'Odusanya', 'Absya', 'odus@yahoo.com', '090000111002', '$2y$10$L4ndzBQUjrWNb1klGySjne9tJY9spr7Qy8704EztyeD/LxycIc122', 2, NULL, NULL, NULL, NULL, 1, '2022-05-13 03:55:30'),
(3, 'Adelowo', 'Olaitan', NULL, 'olat@yahoo.com', '08123456718', '$2y$10$FFewiq0FYMzOUHpryQwKlOQzpTDdOjZcFtqoftRegBbq7QRtJXHkK', 2, NULL, NULL, NULL, NULL, NULL, '2022-06-13 14:09:34'),
(4, 'Emmanuel', 'Adeleke', NULL, 'emadkez@gmail.com', '090111222333', '$2y$10$1yl7OpksaOveHe5z.V68iuGlgJeZl5zm9dYHbzYopCrrFcyBVbHKG', 2, NULL, NULL, NULL, NULL, 1, '2022-06-13 14:10:28'),
(5, 'Tope', 'Oluwa', NULL, 'olutp@gmail.com', '07044533423', '$2y$10$rmS8RHlXWMh3aV5Lw2yVQ.yZz5G6tyxumKhsnvGQOiVXru6CxZRe.', 2, NULL, NULL, NULL, NULL, 1, '2022-05-16 14:52:54'),
(6, 'Olorunda', 'Omolewa', NULL, 'omolewadara@gmail.com', '08067564529', '$2y$10$o9ceDrdufnhZdLTGjBerdupRzsELHrbDKtiG1oAKLsYjAVI6LQazu', 2, NULL, NULL, NULL, NULL, NULL, '2022-05-16 14:56:25'),
(7, 'Josua', 'Jame', NULL, 'jjob@yahoo.com', '09067452678', '$2y$10$FqjH4Pod.ZwQNDh6ShBWHeLUGZ.9ocBrWyrhLr6Vlh8BFRvM4R0Q.', 2, NULL, NULL, NULL, NULL, 1, '2022-05-16 14:57:07'),
(8, 'Ridwan', 'Abdulhammed', NULL, 'adioridwan784@gmail.com', '09098146934', '$2y$10$3usZIRFKoBa/mLZLmKxCXu2SXovkvMLHOLAJL9zLWGTVavtwanSkG', 2, 43443696, 'Male', 'Married', 'Iba Ojo Lagos', 1, '2022-06-21 18:07:43'),
(9, 'Olaoye', 'Sodiq', NULL, 'olaoyesq@yahoo.com', '080123456789', '$2y$10$l4B.Z0/NalLMFcpiuPJNMu7buKnGjhhk0af2xpkOeAwZYLAkEEzqW', 3, 76537960, 'Male', 'Single', 'Ikeja, Lagos', 1, '2022-06-21 18:30:30'),
(10, 'Ola', 'Ade', NULL, 'olade@gmail.com', '0908753672', '$2y$10$g8fxmXoIgjWlSf654mSfJu7Vklchy5jOTceUDg4DBaziQQYpzIz2m', 3, 13247617, 'Female', 'Married', 'Ogun State', 1, '2022-08-08 07:46:55'),
(11, 'idowu', 'Agba', NULL, 'idwou@gmail.com', '09167382368', '$2y$10$WTNxgW3LikFOJEJeFUYe9et0tfTCwCfEyZoZuvqdN7FBVfHSgr7c.', 3, 28627545, 'Male', 'Single', 'Osun State', 1, '2022-08-08 07:48:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `account_number` int(11) DEFAULT NULL,
  `user_balance` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `user_email`, `account_number`, `user_balance`, `status`, `created`) VALUES
(1, 'olaoyesq@yahoo.com', 76537960, 29000, 1, '2022-06-21 18:30:30'),
(2, 'olade@gmail.com', 13247617, 1000, 1, '2022-08-08 07:46:55'),
(3, 'idwou@gmail.com', 28627545, 0, 1, '2022-08-08 07:48:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
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
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
