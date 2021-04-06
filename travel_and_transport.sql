-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 12:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_and_transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `ID` int(10) UNSIGNED NOT NULL,
  `LICENSE` varchar(111) DEFAULT NULL,
  `BUS_MODEL` varchar(111) DEFAULT NULL,
  `ROUTE_FROM` varchar(111) DEFAULT NULL,
  `ROUTE_TO` varchar(111) DEFAULT NULL,
  `BUS_NUMBER` varchar(111) DEFAULT NULL,
  `DRIVER_NAME` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`ID`, `LICENSE`, `BUS_MODEL`, `ROUTE_FROM`, `ROUTE_TO`, `BUS_NUMBER`, `DRIVER_NAME`) VALUES
(1, 'casnm', 'SCANNIA', 'peshawar', 'fateh jang', NULL, NULL),
(2, 'awbdyjbwd', 'VOLVO', 'peshawar', 'sawabi', 'bsdjhbdb', 'dajhbdawbdhj'),
(3, '37201-3511749-5', 'VOLVO', 'peshawar', 'peshawar', '', ''),
(4, 'dajjdjh', 'VOLVO', 'peshawar', 'peshawar', '', ''),
(5, '123213dqwe', 'VOLVO', 'peshawar', 'peshawar', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `busdepot`
--

CREATE TABLE `busdepot` (
  `NUMBER` int(111) NOT NULL,
  `BUS_NUMBER` varchar(111) DEFAULT NULL,
  `MODEL` varchar(111) DEFAULT NULL,
  `ROUTE_FROM` varchar(111) DEFAULT NULL,
  `ROUTE_TO` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `DRIVER_ID` int(10) UNSIGNED NOT NULL,
  `DRIVER_NAME` varchar(111) DEFAULT NULL,
  `ADDRESS` varchar(111) DEFAULT NULL,
  `CONTACT_NUMBER` varchar(111) DEFAULT NULL,
  `CNIC` varchar(111) DEFAULT NULL,
  `LICENSE` varchar(111) DEFAULT NULL,
  `SALARY` int(111) DEFAULT NULL,
  `RATING` int(111) DEFAULT NULL,
  `BUS_NUMBER` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`DRIVER_ID`, `DRIVER_NAME`, `ADDRESS`, `CONTACT_NUMBER`, `CNIC`, `LICENSE`, `SALARY`, `RATING`, `BUS_NUMBER`) VALUES
(4, 'Hassan Mansoor', 'dadawd', '2313213', '23123123', 'd334ww3wr', 1213123213, 1, 'dqe2234');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(111) DEFAULT NULL,
  `CONTACT` varchar(111) DEFAULT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSCODE` varchar(255) NOT NULL,
  `CATEGORY` varchar(111) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `NAME`, `CONTACT`, `USERNAME`, `PASSCODE`, `CATEGORY`) VALUES
(1, NULL, NULL, 'arslankaleem71@gmail.com', '123456789', 'user'),
(2, 'arslan kaleem', '03102020135', 'arslankaleem7229@gmail.com', '987654321', 'user'),
(3, 'bhutta` hasnat', '287398179237', 'bhutta123@gmail.com', '123', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `ROUTE_NUMBER` int(10) UNSIGNED NOT NULL,
  `ROUTE_FROM` varchar(111) DEFAULT NULL,
  `ROUTE_TO` varchar(111) DEFAULT NULL,
  `BUS_MODEL` varchar(111) DEFAULT NULL,
  `CLASS` varchar(111) DEFAULT NULL,
  `FARE` int(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`ROUTE_NUMBER`, `ROUTE_FROM`, `ROUTE_TO`, `BUS_MODEL`, `CLASS`, `FARE`) VALUES
(1, 'peshawar', 'muzafarabad', 'VOLVO', 'ECONOMYCLASS', 3000),
(2, ' ', ' ', ' ', ' ', 0),
(3, ' ', ' ', ' ', ' ', 0),
(4, ' ', ' ', ' ', ' ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `TICKET_NUMBER` int(10) UNSIGNED NOT NULL,
  `PASSENGERNAME` varchar(111) DEFAULT NULL,
  `CNIC` varchar(111) DEFAULT NULL,
  `DEPARTURE_DATE` date DEFAULT NULL,
  `DEPARTURE_TIME` time(6) DEFAULT NULL,
  `ADDRESS` varchar(111) DEFAULT NULL,
  `NO_OF_SEATS` int(111) DEFAULT NULL,
  `ROUTE_FROM` varchar(111) DEFAULT NULL,
  `ROUTE_TO` varchar(111) DEFAULT NULL,
  `STATUS` varchar(111) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`TICKET_NUMBER`, `PASSENGERNAME`, `CNIC`, `DEPARTURE_DATE`, `DEPARTURE_TIME`, `ADDRESS`, `NO_OF_SEATS`, `ROUTE_FROM`, `ROUTE_TO`, `STATUS`) VALUES
(1, 'Hassan Mansoor', '23817637821783', '0000-00-00', '00:00:00.000000', 'kjsubvybsr', 2, 'peshawar', 'lahore', 'verified'),
(5, 'Hassan Mansoor', '23817637821783', '0000-00-00', '00:00:00.000000', 'kjsubvybsr', 2, 'peshawar', 'lahore', 'verified'),
(6, 'arslan kaleem', '37201-3511749-5', '0000-00-00', '00:00:00.000000', 'dawdawdad', 30, 'peshawar', 'karachi', 'verified'),
(7, 'kamran ', 'adhwqbd', '0000-00-00', '00:00:00.000000', 'bdbjhabfh', 3, 'ehbshfjf', 'efbbejhbjfe', 'verified'),
(8, 'kamran ', 'adhwqbd', '0000-00-00', '00:00:00.000000', 'bdbjhabfh', 3, 'ehbshfjf', 'efbbejhbjfe', 'verified'),
(9, 'jfhebsfjsb', 'jfhshebhfb', '0000-00-00', '00:00:00.000000', 'jhbfsjebf', 8, 'sjfjbefhj', 'jfbsjehbfhs', 'verified'),
(10, 'sns jfeh', 'sefjs h fhs', '0000-00-00', '00:00:00.000000', 'jejehfbese', 8, 'sfjhsefb', 'ejebfjwehb', 'verified'),
(11, 'fsenfjbhesbfj', 'jhfe hshfsjehfh', '0000-00-00', '00:00:00.000000', 'kbfesjehsbbjhfbhse', 0, 'sese fjhwesbf', 'jhjsesbfjhbfejwsbh', 'verified'),
(12, 'fsenfjbhesbfj', 'jhfe hshfsjehfh', '0000-00-00', '00:00:00.000000', 'kbfesjehsbbjhfbhse', 0, 'sese fjhwesbf', 'jhjsesbfjhbfejwsbh', 'verified'),
(13, 'dawydjabjb', 'jhbhjwbdjwb', '0000-00-00', '00:00:00.000000', 'jbjebbwu3brw', 1, 'sefnesfbue', 'jesbejfhbjwbf', 'verified'),
(14, 'dawydjabjb', 'jhbhjwbdjwb', '0000-00-00', '00:00:00.000000', 'jbjebbwu3brw', 1, 'sefnesfbue', 'jesbejfhbjwbf', 'verified'),
(16, 'aw djhad jhdjehbsd', ' ajdjhqd', '2016-01-26', '20:42:00.000000', 'manwh wd', 5, 'peshawar', 'taxila', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `ticketprice`
--

CREATE TABLE `ticketprice` (
  `ROUTE_FROM` varchar(111) DEFAULT NULL,
  `ROUTE_TO` varchar(111) DEFAULT NULL,
  `BUS_MODEL` varchar(111) DEFAULT NULL,
  `PRICE` int(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticketprice`
--

INSERT INTO `ticketprice` (`ROUTE_FROM`, `ROUTE_TO`, `BUS_MODEL`, `PRICE`) VALUES
('islamabad', 'karachi', NULL, 10000),
('sawabi', 'tarnol', 'DAEWOO', 1000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `busdepot`
--
ALTER TABLE `busdepot`
  ADD PRIMARY KEY (`NUMBER`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD KEY `DRIVER_ID` (`DRIVER_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD KEY `ROUTE_NUMBER` (`ROUTE_NUMBER`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD KEY `TICKET_NUMBER` (`TICKET_NUMBER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `busdepot`
--
ALTER TABLE `busdepot`
  MODIFY `NUMBER` int(111) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `DRIVER_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `ROUTE_NUMBER` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `TICKET_NUMBER` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
