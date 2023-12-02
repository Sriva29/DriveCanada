-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 08:26 PM
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
-- Database: `drivecanada`
--

-- --------------------------------------------------------

--
-- Table structure for table `g1test`
--

CREATE TABLE `g1test` (
  `questionId` int(11) NOT NULL,
  `questions` varchar(200) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `g1test`
--

INSERT INTO `g1test` (`questionId`, `questions`, `option1`, `option2`, `option3`, `option4`) VALUES
(1, 'If one of your tires suddenly blows out while you\'re driving, what should you do?', 'Bring the vehicle to a stop off the road.', 'Take your foot off the gas pedal.', 'Concentrate on steering.', 'Do all of the above.'),
(2, 'While driving on a two-way street, you hear the siren of an approaching emergency vehicle. What does the law require you to do?', 'Signal the driver to pass.', 'Pull to the right as far as possible and stop.', 'Continue at the same speed.', 'Speed up and get out of the way.'),
(3, 'If you change your name or address, you must notify the Ministry of Transportation within', '45 days', '6 days', '30 days', '14 days'),
(4, 'A G2 driver age 19 or younger who has more than 6 months of driving experience may carry ____ unrelated passenger(s) age 19 or younger between midnight and 5:00 a.m.', '3', '2', '1', '4'),
(5, 'A G1 or G2 driver who is caught drinking and driving will face which of the following penalties?', 'A fine of up to $500 if convicted', 'An immediate 3-day license suspension.', 'A 30-day license suspension if convicted.', 'All of the above.'),
(6, 'At an intersection, the traffic light is red, but a police officer motions you to go through. What should you do?', 'Go through.', 'Wait for the light to turn green.', 'Stop and make sure that the police officer really wants you to go through.', 'Tell the police officer that the light is red.'),
(7, 'If you are approaching an intersection at which the traffic lights are not working, you should', 'Stop until no other vehicles are approaching and then go.', 'Slow down and proceed with caution.', 'Yield to the traffic to your right.', 'Treat it as if there were all-way stop signs.'),
(8, 'When passing a cyclist, you must leave at least ____ of space between your vehicle and the cyclist.', '0.5 metre', '2 metres', '1.5 metres', '1 metre'),
(9, 'While driving, you receive a call on your hand-held cell phone. There are no passengers who can take the call for you. What should you do?', 'Answer the phone and promise to call the person back later.', 'Answer the phone only if you\'ve been expecting an important call.', 'Pull over and park before using your cell phone.', 'Text back the caller to let him know that you\'re driving.'),
(10, 'If you are convicted of careless driving, you will receive six demerit points and you may face', 'license suspension for up to two years.', 'a jail sentence of up to six months.', 'a fine of up to $2,000.', 'all of the above.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `passWord` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `email`, `userName`, `passWord`) VALUES
(1, 'mahasri@gmail.com', 'mahasri', 'canada');

-- --------------------------------------------------------

--
-- Table structure for table `users-answers`
--

CREATE TABLE `users-answers` (
  `questionId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `answers` varchar(100) NOT NULL,
  `correctanswers` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `g1test`
--
ALTER TABLE `g1test`
  ADD PRIMARY KEY (`questionId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `g1test`
--
ALTER TABLE `g1test`
  MODIFY `questionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
