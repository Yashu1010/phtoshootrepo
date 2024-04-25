-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 07:20 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sourcecodester_weddingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin123', 'admin123'),
(16, 'janobe', 'janobe');

-- --------------------------------------------------------

--
-- Table structure for table `photographer`
--

CREATE TABLE `photographer` (
  `id` int(6) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographer`
--

INSERT INTO `photographer` (`id`, `name`, `last`, `number`, `email`) VALUES
(1, 'Peter', 'Evero', '0916548758', 'petermanyakol@gmail.com'),
(2, 'Joyce', 'Castro', '09154581354', 'joycecastro@hotmail.com'),
(3, 'Gabo', 'Dela Cruz', '0915484268', 'gabomanyakol@rocketmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `id` int(6) NOT NULL, 
  `date` date NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  `event` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `isConfirmed` tinyint(1) NOT NULL,
  `photographer_id` int(6) NOT NULL,
  `album_id` int(6) NOT NULL,
  `video_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `date`, `name`, `email`, `number`, `isConfirmed`, `photographer_id`) VALUES
(5, '2017-12-21', 'Ryan Tesoro', 'ryantesoro@yahoo.com', '12312312', 1, 1),
(6, '2020-11-06', 'janobe sourcecode', 'janobe@gmail.com', '21123123123', 0, 1);

--
-- Indexes for dumped tables
--
CREATE TABLE `album`(
`id` int(6) NOT NULL,
`name` varchar(50) NOT NULL,
`size` varchar(40) NOT NULL,
`price` int(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographer`
--
ALTER TABLE `photographer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id`);

  CREATE TABLE `video`(
`id` int(6) NOT NULL,
`name` varchar(50) NOT NULL,
`price` int(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;




  CREATE TABLE `payment`(
    `id` int(6) NOT NULL,
    `total` int(40) NOT NULL,
    `advance` int(50) NOT NULL,
    `due` int(50) NOT NULL,
    `reserve_id` int(6) NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `photographer`
--
ALTER TABLE `photographer`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
