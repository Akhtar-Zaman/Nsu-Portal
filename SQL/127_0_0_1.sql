-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 05:12 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nsu_portal`
--
CREATE DATABASE IF NOT EXISTS `nsu_portal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nsu_portal`;

-- --------------------------------------------------------

--
-- Table structure for table `after_graduation`
--

CREATE TABLE `after_graduation` (
  `Name_Of_Degree` varchar(225) NOT NULL,
  `Major` varchar(225) NOT NULL,
  `Minor` varchar(225) NOT NULL,
  `Institute` varchar(225) NOT NULL,
  `Year` varchar(225) NOT NULL,
  `Result` varchar(225) NOT NULL,
  `Initial` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `after_graduation`
--

INSERT INTO `after_graduation` (`Name_Of_Degree`, `Major`, `Minor`, `Institute`, `Year`, `Result`, `Initial`) VALUES
(' B.Sc. ', 'dcsdcdcsdc', 'sdsdf', 'sdsddcsd', 'dcsdf', 'dcsdc', '1611319042'),
(' M.Sc. ', 'dcszc', 'xczcs', 'dvcz', 'dcssdcsd', 'dcsdzcszdc', '1611319042'),
(' Ph.D. ', 'dcscd', 'dscsd', 'sdvcsz', 'dcsdc', 'dsdc', '1611319042');

-- --------------------------------------------------------

--
-- Table structure for table `before_graduation`
--

CREATE TABLE `before_graduation` (
  `Name_Of_Degree` varchar(225) NOT NULL,
  `Institute` varchar(225) NOT NULL,
  `Board` varchar(225) NOT NULL,
  `Year` varchar(225) NOT NULL,
  `Result` varchar(225) NOT NULL,
  `Initial` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `before_graduation`
--

INSERT INTO `before_graduation` (`Name_Of_Degree`, `Institute`, `Board`, `Year`, `Result`, `Initial`) VALUES
(' JSC/JDC ', 'czc', 'dscddsvs', 'dvs', 'sdvsdvc', '1611319042'),
(' SSC/DAKHIL ', 'dsdfsd', 'sdsdc', 'dcs', 'dvsd', '1611319042'),
(' HSC/ALIM ', 'dcfsdfc', 'ddcs', 'dssd', 'dsc', '1611319042');

-- --------------------------------------------------------

--
-- Table structure for table `educational_qualification`
--

CREATE TABLE `educational_qualification` (
  `Name_Of_Degree` varchar(225) NOT NULL,
  `Institute` varchar(225) NOT NULL,
  `Board` varchar(225) NOT NULL,
  `Year` varchar(225) NOT NULL,
  `Result` varchar(225) NOT NULL,
  `Id` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_qualification`
--

INSERT INTO `educational_qualification` (`Name_Of_Degree`, `Institute`, `Board`, `Year`, `Result`, `Id`) VALUES
(' JSC/JDC ', 'Tahfizul Quranil Karim', 'Madrasha', '2011', 'GPA 3.94', '1611319042'),
(' SSC/DAKHIL ', 'Tahfizul Quranil Karim ', 'Madrasha ', '2013', 'GPA 5.00', '1611319042'),
(' HSC/ALIM ', 'Dhaka City College', 'Dhaka', '2015', 'GPA 4.67', '1611319042'),
(' JSC/JDC ', '', ' ', ' ', ' ', '1611319042'),
(' SSC/DAKHIL ', 'dvsfvsf', 'dvsfs', ' ', ' ', '1611319042'),
(' HSC/ALIM ', ' ', ' ', ' ', ' ', '1611319042');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `Position` varchar(225) NOT NULL,
  `Organization` varchar(225) NOT NULL,
  `Time_From` varchar(225) NOT NULL,
  `Time_To` varchar(225) NOT NULL,
  `Remarks` varchar(225) NOT NULL,
  `Initial` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`Position`, `Organization`, `Time_From`, `Time_To`, `Remarks`, `Initial`) VALUES
(' Lecturer ', 'sadscdsfsd', 'sdvfsdfv', 'fvsdvf', 'dfsdfssdfsd', '1611319042'),
(' Asst.professor ', 'fdsfsd', 'dfvsfv', 'dsvsdf', 'dvs', '1611319042'),
(' Associate professor ', 'dfvsdf', 'dvsvdvsd', 'scddvsz', 'dvsddcv', '1611319042'),
(' professor ', 'dfsfds', 'dvsfdv', 'dvsfd', 'dvcs', '1611319042'),
(' Post-Doc', 'sfdvsfv', 'dvsd', 'dfsdf', 'dvfsdf', '1611319042');

-- --------------------------------------------------------

--
-- Table structure for table `students_info`
--

CREATE TABLE `students_info` (
  `id` varchar(225) NOT NULL,
  `First_Name` varchar(225) NOT NULL,
  `Last_Name` varchar(225) NOT NULL,
  `Fathers_Name` varchar(225) NOT NULL,
  `Mothers_Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Phone_No` varchar(225) NOT NULL,
  `Date_Of_Birth` varchar(225) NOT NULL,
  `New_Password` varchar(225) NOT NULL,
  `Confirm_Pass` varchar(225) NOT NULL,
  `House_No` varchar(225) NOT NULL,
  `Location` varchar(225) NOT NULL,
  `Village/Street` varchar(225) NOT NULL,
  `Thana` varchar(225) NOT NULL,
  `District` varchar(225) NOT NULL,
  `Post_Code` varchar(225) NOT NULL,
  `pictures` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_info`
--

INSERT INTO `students_info` (`id`, `First_Name`, `Last_Name`, `Fathers_Name`, `Mothers_Name`, `Email`, `Phone_No`, `Date_Of_Birth`, `New_Password`, `Confirm_Pass`, `House_No`, `Location`, `Village/Street`, `Thana`, `District`, `Post_Code`, `pictures`) VALUES
('1611319042', 'Akhtaruzzaman', 'Khan', 'Abdul Latif Khan', 'Mahmuda Begum', 'mr.akhtar.bd@gmail.com', '01835667987', '18/9/2018', '12', '12', '20/15', 'Mipur', 'Abul Kashem Road', 'Darussalam', 'Dhaka', '1216', 'Students Picture/Akhtar.jpg'),
('123456', 'Tanjila rahman ', 'tania', 'dsklfkslkdsjf', 'sdjnnfjns', '', '', '', '123', '123', '', '', '', '', '', '', 'Students Picture/');

-- --------------------------------------------------------

--
-- Table structure for table `taken_courses`
--

CREATE TABLE `taken_courses` (
  `Courses` varchar(225) NOT NULL,
  `Section` varchar(20) NOT NULL,
  `Credit` int(50) NOT NULL,
  `Fees` int(225) NOT NULL,
  `Id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taken_courses`
--

INSERT INTO `taken_courses` (`Courses`, `Section`, `Credit`, `Fees`, `Id`) VALUES
('cse 311', '1', 3, 16500, '1611319042'),
('cse 332', '1', 3, 16500, '1611319042'),
('cse 315', '5', 3, 16500, '1611319042'),
('cse 311', '1', 3, 16500, '1611319042'),
('cse 312', '1', 3, 16500, '1611319042');

-- --------------------------------------------------------

--
-- Table structure for table `teachers_info`
--

CREATE TABLE `teachers_info` (
  `Initial` varchar(225) NOT NULL,
  `First_Name` varchar(225) NOT NULL,
  `Last_Name` varchar(225) NOT NULL,
  `Fathers_Name` varchar(225) NOT NULL,
  `Mothers_Name` varchar(225) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Phone_No` varchar(225) NOT NULL,
  `Date_Of_Birth` varchar(225) NOT NULL,
  `New_Password` varchar(225) NOT NULL,
  `Confirm_Pass` varchar(225) NOT NULL,
  `House_No` varchar(225) NOT NULL,
  `Location` varchar(225) NOT NULL,
  `Village/Street` varchar(225) NOT NULL,
  `Thana` varchar(225) NOT NULL,
  `District` varchar(225) NOT NULL,
  `Post_Code` varchar(225) NOT NULL,
  `pictures` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_info`
--

INSERT INTO `teachers_info` (`Initial`, `First_Name`, `Last_Name`, `Fathers_Name`, `Mothers_Name`, `Email`, `Phone_No`, `Date_Of_Birth`, `New_Password`, `Confirm_Pass`, `House_No`, `Location`, `Village/Street`, `Thana`, `District`, `Post_Code`, `pictures`) VALUES
('a', 'Akhtar', 'zaman', 'Abdul Latif Khan', 'Mahmuda Begum', 'mr.akhtar.bd@gmail.com', '01835667987', '18/9/2018', '', '', '', '', '', '', '', '', 'Teachers Picture/Akhtar.jpg'),
('aku', 'Akhtar', 'zaman', 'Abdul Latif Khan', 'Mahmuda Begum', 'mr.akhtar.bd@gmail.com', '01835667987', '18/9/2018', '12', '12', '20/15', 'Mipur', 'Abul Kashem Road', 'Darussalam', 'Dhaka', '1216', 'Teachers Picture/Akhtar.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teach_courses`
--

CREATE TABLE `teach_courses` (
  `course` varchar(225) NOT NULL,
  `section` varchar(225) NOT NULL,
  `faculty` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teach_courses`
--

INSERT INTO `teach_courses` (`course`, `section`, `faculty`) VALUES
('cse 311', '1', 'aku'),
('cse 332', '1', 'aku');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
