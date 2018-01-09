-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2018 at 01:48 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `globe_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `position` int(3) DEFAULT NULL,
  `visible` int(1) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `subject_id`, `page_name`, `position`, `visible`, `content`) VALUES
(1, 1, 'Globe Bank', 1, 1, NULL),
(2, 1, 'History', 2, 1, NULL),
(3, 1, 'Leadership', 3, 1, NULL),
(4, 1, 'Contact Us ', 4, 1, NULL),
(5, 2, 'Banking', 1, 1, NULL),
(6, 2, 'Credit Cards', 2, 1, NULL),
(7, 2, 'mortgages', 3, 1, NULL),
(8, 3, 'Checking', 1, 1, NULL),
(9, 3, 'Loans', 2, 1, NULL),
(10, 3, 'Merchant Service', 3, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) DEFAULT NULL,
  `position` int(3) DEFAULT NULL,
  `visible` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `menu_name`, `position`, `visible`) VALUES
(1, 'About Globe Bank', 1, 1),
(2, 'Consumer', 2, 1),
(3, 'Small Business', 2, 1),
(4, 'Commecial', 3, 1),
(5, 'PhpBB 5 Forums', 1, 1),
(6, 'Non-commercial 1@£$', 1, 0),
(7, 'subject not delete ', 1, 0),
(8, 'Object has been edited ', 1, 0),
(9, 'no-commercial ', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_subject_id` (`subject_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
