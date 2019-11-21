-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2019 at 11:24 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prepskill`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Q_ID` int(11) NOT NULL,
  `TEST_NAME` varchar(30) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL,
  `Q` varchar(225) DEFAULT NULL,
  `OPA` varchar(225) DEFAULT NULL,
  `OPB` varchar(225) DEFAULT NULL,
  `OPC` varchar(225) DEFAULT NULL,
  `OPD` varchar(225) DEFAULT NULL,
  `ANSWER` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `RUSER` varchar(15) NOT NULL,
  `RTEST_NAME` varchar(30) NOT NULL,
  `CATEGORY` varchar(30) DEFAULT NULL,
  `MARKS` int(11) NOT NULL,
  `ATTEMPT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `TUSER` varchar(15) NOT NULL,
  `CONTENT` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_ID` int(11) NOT NULL,
  `USERNAME` varchar(15) NOT NULL,
  `PWD` varchar(225) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `GENDER` varchar(3) NOT NULL,
  `DEM` varchar(10) DEFAULT NULL,
  `DP` blob,
  `RESUME` longblob
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Q_ID`,`TEST_NAME`,`CATEGORY`),
  ADD KEY `TEST_NAME` (`TEST_NAME`),
  ADD KEY `CATEGORY` (`CATEGORY`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`RUSER`,`RTEST_NAME`,`ATTEMPT`),
  ADD KEY `FK_RES2` (`RTEST_NAME`),
  ADD KEY `FK_RES3` (`CATEGORY`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`TUSER`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_ID`,`USERNAME`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `Q_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `FK_RES1` FOREIGN KEY (`RUSER`) REFERENCES `user` (`USERNAME`),
  ADD CONSTRAINT `FK_RES2` FOREIGN KEY (`RTEST_NAME`) REFERENCES `questions` (`TEST_NAME`),
  ADD CONSTRAINT `FK_RES3` FOREIGN KEY (`CATEGORY`) REFERENCES `questions` (`CATEGORY`);

--
-- Constraints for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD CONSTRAINT `FK_TEST` FOREIGN KEY (`TUSER`) REFERENCES `user` (`USERNAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
