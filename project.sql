-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2019 at 10:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_players`
--

CREATE TABLE `my_players` (
  `username` varchar(30) NOT NULL,
  `player_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_players`
--

INSERT INTO `my_players` (`username`, `player_id`) VALUES
('Brohi', 3),
('Brohi', 9),
('Brohi', 10),
('Brohi', 11),
('Brohi', 14),
('Brohi', 17),
('Brohi', 20),
('Brohi', 27),
('Brohi', 23),
('Brohi', 26),
('Brohi', 34),
('Brohi', 35),
('Brohi', 32),
('Tahseen', 3),
('Tahseen', 7),
('Tahseen', 8),
('Tahseen', 13),
('Tahseen', 10),
('Tahseen', 18),
('Tahseen', 17),
('Tahseen', 20),
('Tahseen', 21),
('Tahseen', 23),
('Tahseen', 35),
('Tahseen', 31),
('Tahseen', 34),
('Nayon', 3),
('Nayon', 1),
('Nayon', 14),
('Nayon', 12),
('Nayon', 14),
('Nayon', 19),
('Nayon', 24),
('Nayon', 25),
('Nayon', 27),
('Nayon', 29),
('Nayon', 30),
('Nayon', 34),
('Nayon', 33),
('Tamim', 9),
('Tamim', 2),
('Tamim', 3),
('Tamim', 11),
('Tamim', 13),
('Tamim', 14),
('Tamim', 17),
('Tamim', 19),
('Tamim', 20),
('Tamim', 22),
('Tamim', 25),
('Tamim', 30),
('Tamim', 31);

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `player_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `Club` varchar(30) NOT NULL,
  `Goals_Scored` int(11) NOT NULL,
  `Assist` int(11) NOT NULL,
  `Red_Cards` int(11) NOT NULL,
  `Yellow_Cards` int(11) NOT NULL,
  `Clean_Sheets` int(11) NOT NULL,
  `Goals_Conceded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`player_id`, `Name`, `Age`, `Position`, `Nationality`, `Club`, `Goals_Scored`, `Assist`, `Red_Cards`, `Yellow_Cards`, `Clean_Sheets`, `Goals_Conceded`) VALUES
(1, 'Alission Ramses Becker', 26, 'Goalkeeper', 'Brazil', 'Liverpool', 0, 0, 0, 1, 17, 19),
(2, 'Ederson Moraed', 25, 'Goalkeeper', 'Brazil', 'Manchester City', 0, 1, 0, 2, 16, 21),
(3, 'David De Gea', 28, 'Goalkeeper', 'Spain', 'Manchester United', 0, 0, 0, 1, 7, 43),
(7, 'Hugo Lloris', 32, 'Goalkeeper', 'Drance', 'Tottenham Hotspur', 0, 0, 0, 0, 10, 29),
(8, 'Rui Patricio', 31, 'Goalkeeper', 'Portugal', 'Wolverhampton Wanderers', 0, 0, 0, 0, 6, 39),
(9, 'Kepa Arrizabalaga', 24, 'Goalkeeper', 'Spain', 'Chelsea', 0, 0, 0, 1, 12, 34),
(10, 'Luke Shaw', 23, 'Defender', 'England', 'Manchester United', 1, 4, 0, 10, 6, 35),
(11, 'Victor Lindelof', 24, 'Defender', 'Sweden', 'Manchester United', 1, 1, 0, 1, 6, 32),
(12, 'Andre Robertson', 25, 'Defender', 'Scotland', 'Liverpool', 0, 10, 0, 3, 17, 17),
(13, 'Virgil Dijk', 27, 'Defender', 'Netherland', 'Liverpool', 3, 3, 0, 1, 16, 19),
(14, 'Saed Kolasinac', 25, 'Defender', 'Germany', 'Arsenal', 0, 7, 0, 5, 5, 22),
(15, 'Cesar Azpilicueta', 29, 'Defender', 'Spain', 'Chelsea', 1, 5, 0, 1, 16, 19),
(16, 'Aymeric Laporte', 24, 'Defender', 'France', 'Arsenal', 0, 7, 0, 5, 13, 34),
(17, 'Matt Doherty', 27, 'Defender', 'Ireland', 'Wolverhampton Wanderers', 0, 2, 0, 4, 6, 36),
(18, 'Aaron Wan-Bissaka', 21, 'Defender', 'England', 'Crystal Palace', 0, 2, 1, 4, 10, 37),
(19, 'Lucas Digne', 25, 'Defender', 'France', 'Everton', 3, 4, 0, 4, 9, 34),
(20, 'Mohamed Salah', 26, 'Midfielder', 'Egypt', 'Liverpool', 17, 10, 0, 0, 17, 17),
(21, 'Raheem Sterling', 24, 'Midfielder', 'England', 'Manchester City', 15, 13, 0, 2, 13, 17),
(22, 'Eden Hazard', 28, 'Midfielder', 'Belgium', 'Chelsea', 14, 12, 0, 2, 10, 30),
(23, 'Paul Pogba', 26, 'Midfielder', 'France', 'Manchester United', 11, 10, 0, 5, 8, 32),
(24, 'Hueng-Min Son', 26, 'Midfielder', 'South Korea', 'Tottenham Hotspur', 12, 7, 0, 2, 9, 20),
(25, 'Gerard Deulofeu', 25, 'Midfielder', 'Scotland', 'Watford', 7, 5, 0, 2, 8, 21),
(26, 'Ryan Fraser', 25, 'Midfielder', 'Germany', 'AFC Bournemouth', 6, 10, 0, 2, 7, 53),
(27, 'Leroy Sane', 23, 'Midfielder', 'Germany', 'Manchester City', 9, 11, 0, 2, 15, 19),
(28, 'Sadio Mane', 26, 'Midfielder', 'Senegal', 'Liverpool', 17, 3, 0, 2, 15, 19),
(29, 'Gylfi Sigurdsson', 29, 'Midfielder', 'Iceland', 'Everton', 12, 4, 0, 3, 11, 37),
(30, 'Aubameyang', 29, 'Forward', 'Gabon', 'Arsenal', 17, 7, 0, 0, 6, 34),
(31, 'Harry Kane', 25, 'Forward', 'England', 'Tottenham Hotspur', 17, 6, 0, 5, 9, 31),
(32, 'Sergio Aguero', 30, 'Forward', 'Argentina', 'Manchester City', 19, 10, 0, 4, 12, 14),
(33, 'Raul Jimenez', 27, 'Forward', 'Mexico', 'Wolverhampton Wanderers', 12, 10, 0, 3, 10, 33),
(34, 'Romelu Lukaku', 25, 'Forward', 'Belgium', 'Manchester United', 12, 1, 0, 4, 4, 32),
(35, 'Jamie Vardy', 32, 'Forward', 'England', 'Leicester City', 13, 4, 1, 3, 9, 31);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', 'admin'),
('asd', 'sad'),
('Brohi', 'asdf'),
('Nayon', 'nayon'),
('Tahseen', '1234'),
('Tamim', 'dslr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_players`
--
ALTER TABLE `my_players`
  ADD KEY `username` (`username`),
  ADD KEY `player_id` (`player_id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `my_players`
--
ALTER TABLE `my_players`
  ADD CONSTRAINT `my_players_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `my_players_ibfk_2` FOREIGN KEY (`player_id`) REFERENCES `players` (`player_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
