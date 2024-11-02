-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2023 at 06:04 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skill`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `catid` int(50) NOT NULL,
  `catname` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`catid`, `catname`) VALUES
(2, 'Web Design'),
(3, 'Full Stack Developer'),
(5, 'Software Testing');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `regid` int(50) NOT NULL,
  `reg_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `college` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`regid`, `reg_name`, `address`, `gender`, `phone`, `college`, `email`, `password`) VALUES
(5, 'elson', 'kaniyakudi (h)\r\nkacherpaddy P.O, mannor\r\nErnakulam', 'Male', '8908876545', 'Mar Elias College', 'elson@gmail.com', 'elson'),
(6, 'Jincy Shaji', 'pamakuda(h),N.Nellad P.O, Mudavor (via), Ernakulam', 'Female', '7987654456', 'ST Kuriakose College', 'jincy@gmail.com', 'jincy'),
(7, 'Jisha Eldhose', 'kariyankudi, Ernakulam', 'Female', '8997856767', 'Mar Elias College', 'jisha@gmail.com', 'jisha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addsubject`
--

CREATE TABLE `tbl_addsubject` (
  `subid` int(50) NOT NULL,
  `video` varchar(250) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `descption` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `catid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_addsubject`
--

INSERT INTO `tbl_addsubject` (`subid`, `video`, `subname`, `descption`, `image`, `catid`) VALUES
(25, '\r\n\r\nhttps://www.youtube.com/embed/2TfED5L4c3M?si=qCQ2ajOzGTIxfwDM', 'HTML', 'HTML Malayalam Tutorial for Beginners', 'html.png', 2),
(26, 'https://www.youtube.com/embed/1PnVor36_40?si=7fgYSLXwasXoZPD6', 'css', 'CSS - The Complete Guide </BR>Use basic as well as advanced CSS features', 'css.jpeg', 2),
(27, 'https://www.youtube.com/embed/W6NZfCO5SIk?si=igVY2dUIMUsGNBvL', 'JavaScript', 'The Complete JavaScript Course  From Zero to Expert!', 'javascrp.jpeg', 2),
(28, 'https://www.youtube.com/embed/at19OmH2Bg4?si=H8741zpGcTg19klz', 'PHP', 'Complete Modern PHP Developer Course</br> PHP course with a project, challenges and theory. Includes SQL', 'php.png', 3),
(29, 'https://www.youtube.com/embed/sO8eGL6SFsA?si=C7z7mXoUA7UCOLRg', 'Manual Software Testing', 'Everything you need to learn about software testing and begin your career as a Quality Assurance Specialist', 'test.jpeg', 5),
(30, 'https://www.youtube.com/embed/SEzPFlnI7mY?si=cmz4zto6LFo7c1oO', 'Automation Software Testing', 'Everything you need to learn about software testing and begin your career as a Quality Assurance Specialist', 'test.jpeg', 5),
(31, 'https://www.youtube.com/embed/ImtZ5yENzgE?si=DLeWsR4P3dBV_VlU', 'PHP Laravel', 'PHP with Laravel for beginners - Become a Master in Laravel', 'lar.png', 3),
(32, 'https://www.youtube.com/embed/fnTs-daHqyw?si=lhIJCPOmvv-GZvcM', 'Bootstrap', 'Bootstrap 5 Course - The Complete Guide Step by Step ', 'boot.jpeg', 2),
(33, 'https://www.youtube.com/embed/2n5EBLBHx-A?si=5vw0-b_eEU6_PMp5', 'jQuery', 'The Complete jQuery Course: From Beginner To Advanced!', 'j.png', 2),
(34, 'https://www.youtube.com/embed/fQcv2P-mVKM?si=KPaUe9b6bMn3QCav', 'Ajax', 'AJAX JSON JavaScript Dynamic and Interactive Web Content', 'aj.jpeg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `regid` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`regid`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_placement`
--

CREATE TABLE `tbl_placement` (
  `place_id` int(50) NOT NULL,
  `compname` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `descp` varchar(200) NOT NULL,
  `dates` varchar(80) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_placement`
--

INSERT INTO `tbl_placement` (`place_id`, `compname`, `image`, `descp`, `dates`, `salary`, `url`) VALUES
(9, 'TCS', 'tcs.webp', 'Software Engineer 3 Year Experince', '2023-10-31', '60000', 'https://www.tcs.com/'),
(10, 'Infosys', 'inf.png', 'PHP Developer Fresher', '2023-11-01', '30000', 'https://www.google.com/search?q=infosys+job&sca_es'),
(11, 'Wipro', 'wip.png', 'Web Designer Freshers', '2023-11-03', '500000', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `rateid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`rateid`, `name`, `rating`, `comment`) VALUES
(4, 'Elson Eldhose', '5', 'Welldone class. I Learned Lot of thing . </br> Thanks Nosce '),
(6, 'Jincy Shaji ', '5', 'Amazing Variety Class . Useful class </br> Thanks '),
(7, 'Cebin C Paul', '4', 'Good Class . Appreciate your efforts. </br> Thanks all Team '),
(9, 'Basil Babu', '4', 'Welldone class, Keep it up');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `taskid` int(50) NOT NULL,
  `task` varchar(100) NOT NULL,
  `subid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`taskid`, `task`, `subid`) VALUES
(14, 'Task 1 : Develop Hr Application Form </br> Task 2 : Create Time table using html', 25),
(15, 'Task : Create a Static  Website  of a startup bussiness', 26),
(16, 'Task 1 : Develop a Web Application Calculator </br> </br>Task 2: Develop a Quiz app using javascript', 27);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `testid` int(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desc` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`testid`, `title`, `desc`) VALUES
(2, 'HTML', 'HTML is the standard markup la'),
(3, 'CSS', 'Well Structure boader color'),
(4, 'PHP', 'Check Your Skill in PHP'),
(7, 'Javascript', 'Well Structure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `tbl_addsubject`
--
ALTER TABLE `tbl_addsubject`
  ADD PRIMARY KEY (`subid`),
  ADD KEY `FK_tbl_addsubject` (`catid`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`regid`);

--
-- Indexes for table `tbl_placement`
--
ALTER TABLE `tbl_placement`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`rateid`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`taskid`),
  ADD KEY `subname` (`subid`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`testid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `catid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `regid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_addsubject`
--
ALTER TABLE `tbl_addsubject`
  MODIFY `subid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `regid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_placement`
--
ALTER TABLE `tbl_placement`
  MODIFY `place_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `rateid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `taskid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `testid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD CONSTRAINT `subname` FOREIGN KEY (`subid`) REFERENCES `tbl_addsubject` (`subid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
