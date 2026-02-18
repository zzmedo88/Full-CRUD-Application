-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 فبراير 2026 الساعة 19:23
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybooks`
--

-- --------------------------------------------------------

--
-- بنية الجدول `books`
--

CREATE TABLE `books` (
  `Bookname` varchar(150) NOT NULL,
  `Writer` varchar(150) NOT NULL,
  `rate` tinyint(5) NOT NULL,
  `type` varchar(100) NOT NULL,
  `id` int(150) NOT NULL,
  `user_id` tinyint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `books`
--

INSERT INTO `books` (`Bookname`, `Writer`, `rate`, `type`, `id`, `user_id`) VALUES
('تحقيقات نوح الالفي:مخالب القط', 'ميرنا المهدي', 5, 'رواية', 17, 12),
('تحقيقات نوح الالفي:مخالب القط', 'ميرنا المهدي', 5, 'رواية', 20, 13),
('تحقيقات نوح الالفي:مخالب القط', 'ميرنا المهدي', 5, 'رواية', 21, 13),
('تحقيقات نوح الالفي:مخالب القط', 'ميرنا المهدي', 5, 'رواية', 23, 15),
('تحقيقات نوح الالفي:مخالب القط', 'ميرنا المهدي', 5, 'رواية', 26, 1),
('تحقيقات نوح الالفي:مخالب القط', 'ميرنا المهدي', 5, 'رواية', 27, 1);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `user_id` tinyint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`username`, `password`, `user_id`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('medo', '81dc9bdb52d04dc20036dbd8313ed055', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user-id` (`user_id`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` tinyint(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
