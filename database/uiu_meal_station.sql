-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 08:14 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiu_meal_station`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$PlsnpegJNWTLDnE2hb0hVeUGMQcSApbTVmfDY7.qWsT/jX9Y3I/66'),
(2, 'a', 'a@gmail.com', '$2y$10$HBqr0Zb.50ToWRY8sFR57.mOXXd87iAmJLjSLrZzE7pZT/LgEFSoG'),
(3, 'admin2', 'admin2@gmail.com', '$2y$10$5H2vwFQ4HIysyQyLnqJQIeLY154dfqJlOdpPxJNFYrTKq8.xVCQw.');

-- --------------------------------------------------------

--
-- Table structure for table `canteen`
--

CREATE TABLE `canteen` (
  `canteen_id` int(11) NOT NULL,
  `canteen_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `canteen`
--

INSERT INTO `canteen` (`canteen_id`, `canteen_name`, `email`, `password`) VALUES
(1, 'm', 'm@gmail.com', '$2y$10$MXoHMilPCPK2Zy50KO8vpefQB.qdtDIBmJSyKnwBZrnNdAzpFKJ2O'),
(2, 'b', 'b@gmail.com', '$2y$10$scjxl0VOEulkpKZNL9Vls.lE4fVWYdx7gAEMd9qIlY79qUZbqP/Aq'),
(3, 's', 's@gmail.com', '$2y$10$9L4x91DfhCrZxj2V27.YAe9TObQjX41WHbNhcfkgVKB4EmuTns.gC'),
(4, 'i', 'i@gmail.com', '$2y$10$F4qPUHUVfSfmfARl4YW5pucE9sBxNHIiyEUmoKaSzxyrsDLp9xXAa'),
(5, 'i', 'i@gmail.com', '$2y$10$LSsR3HjBZWAWRLA.XcR/J.iorO4HxzqH4O78P9y3rJsvhm1Jy5Z2y'),
(6, 'l', 'l@gmail.com', '$2y$10$XJigXzoWEJyT1jP/c6xZMuvnn725leppoKWIhmIXC0SJNw.07Jg.2'),
(7, 'g', 'g@gmail.com', '$2y$10$RcwyMfOmMuiHVXRaCfyLuOi9vOVj.SgHUD0NEQWZ7xxYck.e9A8wa'),
(8, 'a', 'a@gmail.com', '$2y$10$2XPNyaLCDjnx00hXHNOr6uUZ30fZ8Nd.GmfY7wsln4.0t4VdK0Vem'),
(9, 'c1', 'c1@gmail.com', '$2y$10$xGNd3DvLXU8hoYqxOFQceer6E2wsTdUj0R8JIDEzD6v/6iq0MXPli'),
(10, 'c2', 'c2@gmail.com', '$2y$10$S6GAeMNI0fmpKZ2letlClOV8Ao1FByzjufESnitFfC4BXldKGuB66'),
(11, 'c2', 'c2@gmail.com', '$2y$10$AkZ1iEXkkvptACEQpOy0C.p.cGPmmo6Yd6h1Lmm5jbriQBRnQV9yu'),
(12, 'c2', 'c2@gmail.com', '$2y$10$sqhoYPYHSPF9N2Dcw/sk4eCVg3q1q4QJXc/uE/8uqArdlL45Qc3Xi'),
(13, 'c3', 'c3@gmail.com', '$2y$10$315kXMhw.WOi/yfh0ZCIP.ueRHDfA21axX.VT9yxizhtrgPv/1seK');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food_details`
--

CREATE TABLE `food_details` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(30) NOT NULL,
  `food_type` varchar(30) NOT NULL,
  `food_price` varchar(30) NOT NULL,
  `canteen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_details`
--

INSERT INTO `food_details` (`food_id`, `food_name`, `food_type`, `food_price`, `canteen_id`) VALUES
(1, 'j', 'k', '5', 2),
(2, 'j', 'o', '5', 2),
(3, 'j', 'l', '5', 2),
(4, 'b', 'b', '10', 2),
(5, 'd', 'f', '5', 2),
(6, 'd', 'd', '10', 2),
(7, 'f', 'f', '10', 2),
(8, 'f', 'f', '10', 2),
(9, 'f', 'f', '10', 2),
(10, 'f', 'f', '10', 2),
(11, 'h', 'h', '10', 2),
(16, 'j', 'j', '15', 13);

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `order_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `student_id` int(11) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `product_amount` varchar(255) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `student_card_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `email`, `password`, `status`) VALUES
(1, 'Mithila', 'mithila12@gmail.com', '$2y$10$yAIapbVSH0L9w2xCnVrtpejmktHM1Me6SKZCuEojGVG12YtF61hsG', 'approved'),
(3, 'a', 'a@gmail.com', '$2y$10$0bzw4kBc/F3WqeYYxgi2bek19cFpwPecAP4D6l5B63SZY7kaTTxOi', 'pending'),
(4, 'f', 'f@gmail.com', '$2y$10$AxekSSLD8JFkOCqk7Znf7OiWimyMCQYLbsxzDdOMKElRpO6X0KGiC', 'pending'),
(5, 'p', 'p@gmail.com', '$2y$10$zsravFUKqyOKjFfxvbgE/uUxxGINiGppxXrfh4XMa8ZEuluarF.Bq', 'pending'),
(6, 't', 't@gmail.com', '$2y$10$pqiGBSbUx.T1PbsRiQwZtuKLJrPTC.SH8beiqfdQfdYiDqsOKijGu', 'pending'),
(7, 'mili', 'mili@gmail.com', '$2y$10$t5pLAXROLagH7xANSuZIbO0yCyogg4g9.Xm4qqxnvulR0yVFltAYi', 'pending'),
(8, 'eva', 'eva@gmail.com', '$2y$10$MbcgruOMhfFPnDgnhuXO1eSwnubYHbtYb0LX9zaL34CAmL6sGEAFq', 'pending'),
(9, 'r', 'r@gmail.com', '$2y$10$9q6QTJc6W3Nf.l3FLPXrQO4SsCVKuM5adrhUIO7swUwPzHWBHjodm', 'pending'),
(10, 'z', 'z@gmail.com', '$2y$10$w72H1iCaMc8Sxh8tZc3XBOyCY/ejGRYXqIbG921w/RUPCMhJqoPMy', 'pending'),
(11, 'mou', 'mou@gmail.com', '$2y$10$ooFKi1BmWXEV/pxzbomOTe3pag2grGpOZXGVNOY6On5ZpJsz7ZvHO', 'pending'),
(12, 'tapotosh', 'tapotosh@gmail.com', '$2y$10$.6TPtp6KsvPGLpbjIKDvdezZyeYVNCFKItD5at7bv0Z5j1Lmm0raC', 'pending'),
(13, 'moon', 'moon@gmail.com', '$2y$10$lmhJ961vAIgHUMKSFjDxCOM8yebrKmx.ZJlDnqUpT3znaDlvh0zFS', 'pending'),
(14, 'sathi', 'sathi@gmail.com', '$2y$10$8S.xnK6yDwR6jvQ1EXxmc.zvrLLC/Ol/X1zltgdZiWYb7DcMEt1.K', 'approved'),
(15, 'niloya', 'niloya@gmail.com', '$2y$10$m0ImeALuk8cnypR3jSuZ3e7RGfd2JhwHAi.ex2vYdt8S38mC/PyMu', 'approved'),
(16, 'niloya', 'niloya@gmail.com', '$2y$10$LQW7Z0RYpt7fAB50rbAyl.YBoc6MQw6Cosn3ac8VDUnnUh2d/DYXy', 'pending'),
(17, 'niloya', 'niloya@gmail.com', '$2y$10$9HHpqiXlvDWfZRksBq9d.unGzYoB/0ZyYziuQNSzHaq6eD27rg5iW', 'pending'),
(18, 'niloya', 'niloya@gmail.com', '$2y$10$SBDxfwcYraGiNSwlOTo3L.qqvIz8gHK4f23eVuk0l/PNpn1zD28Gq', 'pending'),
(19, 'niloya', 'niloya@gmail.com', '$2y$10$XSkQloMlKAdoy1pWEwKd9uBe5zvF3lInyO8LbjMc8QLBTTEM8UKQ.', 'pending'),
(20, 'niloya', 'niloya@gmail.com', '$2y$10$V9o5CWSyiA4nSNW2OT5.7u2wLOQ50jCkOyR0/8U.FzBTeIifaFxL.', 'pending'),
(21, 'abir', 'abir@gmail.com', '$2y$10$UStK5PHatlLqDCKzDpbqRe1q2kofMDH4SWkpvrFJwpNimBrGQY5JO', 'approved'),
(22, 'keya', 'keya@gmail.com', '$2y$10$DSjbQfcJ0z2uTxIJgg89Qer84QaPo8keUn/8DbdVzKWwfzfwcHEhK', 'approved'),
(23, 's1', 's1@gmail.com', '$2y$10$zJ.qtror2FJGSrWSB7OYKOiB2a4reWi3c/AJI6uK76elwdczXXjcm', 'approved'),
(24, 'rk', 'rk12@gmail.com', '$2y$10$DWdGdirBx3kMKpe2EUFdpuhHfiz5NO/39WavVxovZPEJ3is8SNku.', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `student_card`
--

CREATE TABLE `student_card` (
  `student_card_no` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `expire_date` date NOT NULL,
  `card_amount` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `canteen`
--
ALTER TABLE `canteen`
  ADD PRIMARY KEY (`canteen_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `food_details`
--
ALTER TABLE `food_details`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `canteen_id` (`canteen_id`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `student_card_no` (`student_card_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_card`
--
ALTER TABLE `student_card`
  ADD PRIMARY KEY (`student_card_no`),
  ADD KEY `student_id` (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `canteen`
--
ALTER TABLE `canteen`
  MODIFY `canteen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food_details`
--
ALTER TABLE `food_details`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_details`
--
ALTER TABLE `food_details`
  ADD CONSTRAINT `food_details_ibfk_1` FOREIGN KEY (`canteen_id`) REFERENCES `canteen` (`canteen_id`);

--
-- Constraints for table `food_order`
--
ALTER TABLE `food_order`
  ADD CONSTRAINT `food_order_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `food_order_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
  ADD CONSTRAINT `food_order_ibfk_3` FOREIGN KEY (`food_id`) REFERENCES `food_details` (`food_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`student_card_no`) REFERENCES `student_card` (`student_card_no`);

--
-- Constraints for table `student_card`
--
ALTER TABLE `student_card`
  ADD CONSTRAINT `student_card_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
