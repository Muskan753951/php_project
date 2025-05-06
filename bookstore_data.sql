-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 09:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `admin_id` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`admin_id`, `uname`, `email`, `phone`, `pass`, `cpass`, `pic`) VALUES
(1, 'Kamini Rathore', 'kaminirath@gmail.com', '7846569875', 'kamini123', 'kamini123', 'p.jpg'),
(2, 'Rahul Gupta', 'rahulgup@gmail.com', '8647768456', 'rahul123', 'rahul123', 'p.jpg'),
(3, 'Kajal Jha', 'kajalj@gmail.com', '8745678945', 'kajal0909', 'kajal0909', 'p.jpg'),
(4, 'Yamini Gautum', 'yamini12@gmail.com', '6784789784', 'yamini066', 'yamini066', 'p.jpg'),
(5, 'Ravi Kumar', 'ravikm123@gmail.com', '8679469734', 'ravi6767', 'ravi6767', 'p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books_data`
--

CREATE TABLE `books_data` (
  `bookid` int(100) NOT NULL,
  `booksname` varchar(100) NOT NULL,
  `bookscode` varchar(100) NOT NULL,
  `authorsname` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `bcount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books_data`
--

INSERT INTO `books_data` (`bookid`, `booksname`, `bookscode`, `authorsname`, `edition`, `status`, `quantity`, `department`, `bcount`) VALUES
(1, 'Digital Electronics', 'D-101', 'Anand Kumar', '5', 'Available', 25, 'BCA', 0),
(2, 'Networking', 'N-102', 'Forauzen', '6', 'Available', 14, 'BCA', 1),
(3, 'C++ Programming', 'C-103', 'E Balagurswami', '4', 'Available', 10, 'BCA', 0),
(4, 'Calculas', 'C-104', 'Maithy Ghosh', '4', 'Available', 9, 'BCA', 1),
(5, 'Higher Algebra', 'H-105', 'S K Mapa', '4', 'Not Available', 0, 'BCA', 0),
(6, 'Software Engineering', 'S-106', 'Rajib Mal', '6', 'Available', 20, 'BCA', 0),
(7, 'Business Study', 'B-107', 'Rajib Jha', '4', 'Available', 15, 'BBA', 0),
(8, 'Business Communication', 'B-108', 'Galvin', '4', 'Available', 15, 'BBA', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(200) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `comment` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `uname`, `comment`) VALUES
(1, 'muskan gupta', 'Please, Available Higher Algebra Book'),
(2, 'radha gupta', 'Higher Algebra book is not available in books list'),
(3, 'admin', 'Higher Algebra book available soon, please wait');

-- --------------------------------------------------------

--
-- Table structure for table `fines`
--

CREATE TABLE `fines` (
  `uname` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `returned` varchar(100) NOT NULL,
  `days` int(100) NOT NULL,
  `fine` double NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `uname` varchar(100) NOT NULL,
  `bookid` int(100) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `authorname` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`uname`, `bookid`, `bookname`, `authorname`, `edition`, `department`, `approve`, `issue_date`, `return_date`) VALUES
('shreya gupta', 2, 'Networking', 'forauzen', '6', 'BCA', 'yes', '2024-05-06', '2024-06-08'),
('shreya gupta', 3, 'C++ Programming', 'E Balagurswami', '4', 'BCA', '', '0000-00-00', '0000-00-00'),
('muskan gupta', 5, 'Higher Algebra', 'S K Mapa ', '4', 'BCA', '', '0000-00-00', '0000-00-00'),
('raj gupta', 7, 'Business Study', 'Rajib Jha', '4', 'BBA', '', '0000-00-00', '0000-00-00'),
('raj gupta', 8, 'Business Communication', 'Galvin', '4', 'BBA', '', '0000-00-00', '0000-00-00'),
('radha gupta', 5, 'Higher Algebra', 'S K Mapa ', '4', 'BCA', '', '0000-00-00', '0000-00-00'),
('radha gupta', 4, 'Calculas', 'Maithy Ghosh', '4', 'BCA', 'Expired', '2024-05-24', '2024-05-27');

-- --------------------------------------------------------

--
-- Table structure for table `stu_register`
--

CREATE TABLE `stu_register` (
  `uname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stu_register`
--

INSERT INTO `stu_register` (`uname`, `email`, `phone`, `pass`, `cpass`, `pic`) VALUES
('muskan gupta', 'xyz@email.com', '6759485697', 'abc', 'abc', 'p.jpg'),
('shreya gupta', 'abc@gmail.com', '7957894796', 'xyz', 'xyz', 'p.jpg'),
('radha gupta', 'radha@gmail.com', '8757857847', 'radha123', 'radha123', 'p.jpg'),
('shiv gupta', 'shiv123@gmail.com', '8647847846', 'shiv0967', 'shiv0967', 'p.jpg'),
('komal gupta', 'komal@gmail.com', '7853684647', 'komal123', 'komal123', 'p.jpg'),
('raj gupta', 'rag6754@gmail.com', '7537953786', 'raj123', 'raj123', 'p.jpg'),
('kamini gupta', 'kamini@gmail.com', '9754785784', 'kamini05', 'kamini05', ''),
('kamini rathore', 'kamini@gmaill.com', '6954795379', 'kamini05', 'kamini05', 'p.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- Indexes for table `books_data`
--
ALTER TABLE `books_data`
  ADD UNIQUE KEY `bookid` (`bookid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books_data`
--
ALTER TABLE `books_data`
  MODIFY `bookid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
