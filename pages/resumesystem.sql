-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 03:26 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resumesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `resume_id` int(11) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `url` varchar(256) NOT NULL,
  `jobtitle` varchar(256) NOT NULL,
  `com_name` varchar(256) NOT NULL,
  `start_job` varchar(256) NOT NULL,
  `end_job` varchar(256) NOT NULL,
  `descrip` varchar(256) NOT NULL,
  `school` varchar(256) NOT NULL,
  `degree` varchar(256) NOT NULL,
  `field` varchar(256) NOT NULL,
  `cgpa` varchar(11) NOT NULL,
  `enddg` varchar(256) NOT NULL,
  `skill1` varchar(256) NOT NULL,
  `skill2` varchar(256) NOT NULL,
  `skill3` varchar(256) NOT NULL,
  `language` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`resume_id`, `fname`, `lname`, `phone`, `email`, `url`, `jobtitle`, `com_name`, `start_job`, `end_job`, `descrip`, `school`, `degree`, `field`, `cgpa`, `enddg`, `skill1`, `skill2`, `skill3`, `language`) VALUES
(1, 'Ng', 'Shi Ya', '012-34567890', '70723@siswa.unimas.my', 'shiya.blogspot.com', 'Programming Intern', 'Ace Resource Advisory Services', '2022-01-29', '2022-05-16', 'Gathered requirements and developed project plans. Completed reviews of codes, requirements and project plans. Prepared a variety of different written communications, reports and documents to ensure smooth operations.', 'University Malaysia Sarawak', 'Bachelor of Computer Science', 'Information Systems', '3.28', '2020-09-03', 'Proficient in using Ms Office, Excel and Powerpoint', 'Flexible and Adaptable', 'Excellent work ethic', 'English, Mandarin and Malay'),
(2, 'Wong', 'Sin Wen', '012-34567890', 'sinwen@gmail.com', 'sinwen.blogspot.com', 'Business Intern', 'Business Sdn Bhd', '2021-01-29', '2021-05-16', 'Delivered clerical support by handling range of routine and special requirements. Sorted and organized files, spreadsheets and reports.', 'Singapore Polytechnic', 'Diploma of Business', 'Microeconomics', '3.78', '2020-05-01', 'Proficient in using Ms Office, Excel and Powerpoint', 'Self-motivated Professional', 'Compassion', 'English, Mandarin and Malay'),
(3, 'Safiratul', 'Farhana', '012-34567890', 'sf@gmail.com', 'blogspot.com', 'Programming Intern', 'Ace Resource Advisory Services', '2022-01-29', '2022-05-16', 'Gathered requirements and developed project plans. Completed reviews of codes, requirements and project plans. Prepared a variety of different written communications, reports and documents to ensure smooth operations.', 'University Malaysia Sarawak', 'Bachelor of Computer Science', 'Information Systems', '3.28', '2020-09-03', 'Proficient in using Ms Office, Excel and Powerpoint', 'Flexible and Adaptable', 'Excellent work ethic', 'English, Mandarin and Malay'),
(4, 'Lalitha', 'Samiappan', '012-34567890', 'lal@gmail.com', 'blogspot.com', 'Programming Intern', 'Ace Resource Advisory Services', '2022-01-29', '2022-05-16', 'Gathered requirements and developed project plans. Completed reviews of codes, requirements and project plans. Prepared a variety of different written communications, reports and documents to ensure smooth operations.', 'University Malaysia Sarawak', 'Bachelor of Computer Science', 'Information Systems', '3.28', '2020-09-03', 'Proficient in using Ms Office, Excel and Powerpoint', 'Flexible and Adaptable', 'Excellent work ethic', 'English, Mandarin and Malay'),
(5, 'Leong', 'Hong Yee', '012-34567890', 'hy@gmail.com', 'blogspot.com', 'Programming Intern', 'Ace Resource Advisory Services', '2022-01-29', '2022-05-16', 'Gathered requirements and developed project plans. Completed reviews of codes, requirements and project plans. Prepared a variety of different written communications, reports and documents to ensure smooth operations.', 'University Malaysia Sarawak', 'Bachelor of Computer Science', 'Information Systems', '3.28', '2020-09-03', 'Proficient in using Ms Office, Excel and Powerpoint', 'Flexible and Adaptable', 'Excellent work ethic', 'English, Mandarin and Malay'),
(6, 'Lim', 'Xuan Yee', '012-34567890', 'xy@gmail.com', 'blogspot.com', 'Programming Intern', 'Ace Resource Advisory Services', '2022-01-29', '2022-05-16', 'Gathered requirements and developed project plans. Completed reviews of codes, requirements and project plans. Prepared a variety of different written communications, reports and documents to ensure smooth operations.', 'University Malaysia Sarawak', 'Bachelor of Computer Science', 'Information Systems', '3.28', '2020-09-03', 'Proficient in using Ms Office, Excel and Powerpoint', 'Flexible and Adaptable', 'Excellent work ethic', 'English, Mandarin and Malay'),
(7, 'Choo', 'Zi Ying', '012-34567890', 'zy@gmail.com', 'blogspot.com', 'Programming Intern', 'Ace Resource Advisory Services', '2022-01-29', '2022-05-16', 'Gathered requirements and developed project plans. Completed reviews of codes, requirements and project plans. Prepared a variety of different written communications, reports and documents to ensure smooth operations.', 'University Malaysia Sarawak', 'Bachelor of Computer Science', 'Information Systems', '3.28', '2020-09-03', 'Proficient in using Ms Office, Excel and Powerpoint', 'Flexible and Adaptable', 'Excellent work ethic', 'English, Mandarin and Malay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`resume_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `resume_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
