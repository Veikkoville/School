-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 01:45 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lambs_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `album_id` int(11) NOT NULL,
  `album_name` varchar(255) NOT NULL,
  `release_year` int(11) DEFAULT NULL,
  `record_label` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`album_id`, `album_name`, `release_year`, `record_label`) VALUES
(1, 'Lambs', 2000, 'Devil Doll Records'),
(2, 'Random Radio', 2002, 'Devil Doll Records'),
(3, 'Finis Fidei', 2003, 'Verikauha Records'),
(4, 'With Every Bullet So Far', 2005, 'Uho Productions'),
(5, 'Twist of Pain', 2005, 'Uho Productions'),
(6, 'Short on Leash and Still Running', 2011, 'Boat Island Studios'),
(7, 'Short on Outtakes EP', 2013, 'Boat Island Studios'),
(8, 'Electric Lie', 2014, 'Boat Island Studios'),
(9, 'They Live You Sleep', 2017, 'Boat Island Studios'),
(10, 'Guns n\' Ammo', 2022, 'Boat Island Studios'),
(11, 'Your TV is Broken', 2021, 'Boat Island Studios'),
(12, 'Find Another One', 2021, 'Boat Island Studios'),
(13, 'Last Time for a Fight', 2021, 'Boat Island Studios');

-- --------------------------------------------------------

--
-- Table structure for table `albumsartists`
--

CREATE TABLE `albumsartists` (
  `album_id` int(11) DEFAULT NULL,
  `band_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `albumsartists`
--

INSERT INTO `albumsartists` (`album_id`, `band_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bands`
--

CREATE TABLE `bands` (
  `band_id` int(11) NOT NULL,
  `band_name` varchar(255) NOT NULL,
  `formed_year` int(11) DEFAULT NULL,
  `origin` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bands`
--

INSERT INTO `bands` (`band_id`, `band_name`, `formed_year`, `origin`, `description`) VALUES
(1, 'Lambs', 1994, 'Tornio, Finland', 'Lambs is a Finnish rock band that has been making music since 1994. The band was formed in Tornio, Finland. The band consists of A. Lindholm on guitar and vocals, Timo on drums, and Tommy on bass. \r\n\r\nLambs\' sound is a unique blend of rock, metal, and punk synthesizing influences from bands like Motörhead, Corrosion of Conformity, Danzig, Iron Maiden, AC/DC, Kiss, and the Ramones. The band\'s music has been described by its raw energy, robust riffs, and strong melodic sense.');

-- --------------------------------------------------------

--
-- Table structure for table `compilationalbums`
--

CREATE TABLE `compilationalbums` (
  `band_id` int(11) DEFAULT NULL,
  `compilation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `concerts`
--

CREATE TABLE `concerts` (
  `id` int(11) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(1, 'Rock'),
(2, 'Metal'),
(3, 'Punk');

-- --------------------------------------------------------

--
-- Table structure for table `influences`
--

CREATE TABLE `influences` (
  `band_id` int(11) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `influences`
--

INSERT INTO `influences` (`band_id`, `genre_id`) VALUES
(1, 1),
(1, 2),
(1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `livealbums`
--

CREATE TABLE `livealbums` (
  `band_id` int(11) DEFAULT NULL,
  `live_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL,
  `member_name` varchar(255) NOT NULL,
  `band_id` int(11) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `member_name`, `band_id`, `role`) VALUES
(1, 'A. Lindholm', 1, 'Guitar, Vocals'),
(2, 'Timo', 1, 'Drums'),
(3, 'Tommy', 1, 'Bass');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `song_id` int(11) NOT NULL,
  `song_name` varchar(255) NOT NULL,
  `album_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`song_id`, `song_name`, `album_id`) VALUES
(1, 'Song 1', 1),
(2, 'Song 2', 1),
(3, 'Song 3', 2),
(4, 'Song 4', 2),
(5, 'Song 5', 3),
(6, 'Song 6', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `albumsartists`
--
ALTER TABLE `albumsartists`
  ADD KEY `album_id` (`album_id`),
  ADD KEY `band_id` (`band_id`);

--
-- Indexes for table `bands`
--
ALTER TABLE `bands`
  ADD PRIMARY KEY (`band_id`);

--
-- Indexes for table `compilationalbums`
--
ALTER TABLE `compilationalbums`
  ADD KEY `band_id` (`band_id`),
  ADD KEY `compilation_id` (`compilation_id`);

--
-- Indexes for table `concerts`
--
ALTER TABLE `concerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `influences`
--
ALTER TABLE `influences`
  ADD KEY `band_id` (`band_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Indexes for table `livealbums`
--
ALTER TABLE `livealbums`
  ADD KEY `band_id` (`band_id`),
  ADD KEY `live_id` (`live_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `band_id` (`band_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`song_id`),
  ADD KEY `album_id` (`album_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concerts`
--
ALTER TABLE `concerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albumsartists`
--
ALTER TABLE `albumsartists`
  ADD CONSTRAINT `albumsartists_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`album_id`),
  ADD CONSTRAINT `albumsartists_ibfk_2` FOREIGN KEY (`band_id`) REFERENCES `bands` (`band_id`);

--
-- Constraints for table `compilationalbums`
--
ALTER TABLE `compilationalbums`
  ADD CONSTRAINT `compilationalbums_ibfk_1` FOREIGN KEY (`band_id`) REFERENCES `bands` (`band_id`),
  ADD CONSTRAINT `compilationalbums_ibfk_2` FOREIGN KEY (`compilation_id`) REFERENCES `albums` (`album_id`);

--
-- Constraints for table `influences`
--
ALTER TABLE `influences`
  ADD CONSTRAINT `influences_ibfk_1` FOREIGN KEY (`band_id`) REFERENCES `bands` (`band_id`),
  ADD CONSTRAINT `influences_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`);

--
-- Constraints for table `livealbums`
--
ALTER TABLE `livealbums`
  ADD CONSTRAINT `livealbums_ibfk_1` FOREIGN KEY (`band_id`) REFERENCES `bands` (`band_id`),
  ADD CONSTRAINT `livealbums_ibfk_2` FOREIGN KEY (`live_id`) REFERENCES `albums` (`album_id`);

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`band_id`) REFERENCES `bands` (`band_id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `albums` (`album_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
