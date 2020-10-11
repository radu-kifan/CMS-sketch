-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 10:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articole`
--

CREATE TABLE `articole` (
  `id` int(11) NOT NULL,
  `titlu` varchar(100) NOT NULL,
  `continut` varchar(250) NOT NULL,
  `id_utilizatori` int(11) DEFAULT NULL,
  `autor` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articole`
--

INSERT INTO `articole` (`id`, `titlu`, `continut`, `id_utilizatori`, `autor`, `created_at`) VALUES
(2, 'Titlu 1', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaq', 1, 'admin', '2019-05-25 19:31:45'),
(3, 'Titlu 2', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec qu', 1, 'admin', '2019-05-25 19:31:45'),
(4, 'Titlu 3', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.', 1, 'admin', '2019-05-25 19:31:45'),
(5, 'Titlu 4', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues differe solmen in li grammatica, li pro', 1, 'admin', '2019-05-25 19:31:45'),
(6, 'Titlu 5', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was', 1, 'admin', '2019-05-25 19:31:45'),
(7, 'Titlu 6', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was', 1, 'admin', '2019-05-25 19:31:45'),
(8, 'Titlu 7', 'One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could se', 1, 'admin', '2019-05-25 19:31:45'),
(9, 'Titlu 8', 'The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog. Junk MTV quiz graced by fox whelps. Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymph', 1, 'admin', '2019-05-25 19:31:45'),
(10, 'Titlu 9', 'The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ in their grammar', 1, 'admin', '2019-05-25 19:31:45'),
(11, 'Titlu 10', 'But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the gre', 1, 'admin', '2019-05-25 19:31:45');

-- --------------------------------------------------------

--
-- Table structure for table `utilizatori`
--

CREATE TABLE `utilizatori` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(50) DEFAULT 'utilizator',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizatori`
--

INSERT INTO `utilizatori` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `status`, `created_at`) VALUES
(1, 'Radu', 'Kifan', 'Admin', '8287458823facb8ff918dbfabcd22ccb', 'admin@example.com', 'administrator', '2019-05-25 17:12:29'),
(13, 'Edit', 'Edit', 'Editor1', '1cb251ec0d568de6a929b520c4aed8d1', 'edit@yahoo.com', 'editor', '2019-05-25 17:13:24'),
(14, 'Edit2', 'Edit2', 'Editor2', 'fe6123a759017e4a2af4a2d19961ed71', 'edit2@yahoo.com', 'utilizator', '2019-05-25 17:14:28'),
(15, 'Util', 'Util', 'Utilizator1', '098f6bcd4621d373cade4e832627b4f6', 'util@yahoo.com', 'utilizator', '2019-05-25 17:14:59'),
(16, 'Util2', 'Util2', 'Utilizator2', 'ad0234829205b9033196ba818f7a872b', 'util2@yahoo.com', 'utilizator', '2019-05-25 17:15:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articole`
--
ALTER TABLE `articole`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_util` (`id_utilizatori`);

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articole`
--
ALTER TABLE `articole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articole`
--
ALTER TABLE `articole`
  ADD CONSTRAINT `fk_util` FOREIGN KEY (`id_utilizatori`) REFERENCES `utilizatori` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
