-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 02:32 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locus`
--

-- --------------------------------------------------------

--
-- Table structure for table `pbook`
--

CREATE TABLE `pbook` (
  `bid` int(255) NOT NULL,
  `uid` int(250) NOT NULL,
  `pid` int(250) NOT NULL,
  `name` varchar(255) NOT NULL,
  `member` int(255) NOT NULL,
  `adrs` varchar(255) NOT NULL,
  `pin` int(11) NOT NULL,
  `cindate` varchar(255) NOT NULL,
  `coutdate` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcate`
--

CREATE TABLE `tblcate` (
  `cid` int(255) NOT NULL,
  `ctype` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcate`
--

INSERT INTO `tblcate` (`cid`, `ctype`, `location`) VALUES
(1, 'Home', 'addhouse'),
(2, 'Business', 'addbusiness'),
(3, 'Occasion', 'addoccasion');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `id` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `response` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`id`, `uid`, `name`, `email`, `subject`, `msg`, `response`) VALUES
(1, 0, '$name', '$email', '$subject', '$message', ''),
(2, 12, 'Chirag', 'kunj@gmail.com', 'bxdfx', 'nxgnfnxfgnv cvnx', ''),
(3, 12, 'Chirag', 'kunj@gmail.com', 'bxdfx', 'nxgnfnxfgnv cvnx', ''),
(4, 12, 'Chirag', 'kunj@gmail.com', 'bxdfx', 'nxgnfnxfgnv cvnx', ''),
(5, 12, 'Chirag', 'kunj@gmail.com', 'bxdfx', 'nxgnfnxfgnv cvnx', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblhouse`
--

CREATE TABLE `tblhouse` (
  `pid` int(100) NOT NULL,
  `cid` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `ptitle` text NOT NULL,
  `ptype` varchar(250) NOT NULL,
  `bhk` varchar(100) NOT NULL,
  `stype` varchar(100) NOT NULL,
  `bedroom` int(100) NOT NULL,
  `balcony` int(100) NOT NULL,
  `bathroom` int(100) NOT NULL,
  `kitchen` int(100) NOT NULL,
  `hall` int(100) NOT NULL,
  `floor` int(100) NOT NULL,
  `tfloor` int(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `sqft` varchar(250) NOT NULL,
  `paddress` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `img3` varchar(250) NOT NULL,
  `img4` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `featured` varchar(250) NOT NULL,
  `description` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblhouse`
--

INSERT INTO `tblhouse` (`pid`, `cid`, `uid`, `ptitle`, `ptype`, `bhk`, `stype`, `bedroom`, `balcony`, `bathroom`, `kitchen`, `hall`, `floor`, `tfloor`, `price`, `sqft`, `paddress`, `city`, `state`, `img1`, `img2`, `img3`, `img4`, `status`, `featured`, `description`, `date`) VALUES
(1, 0, 1, 'Chirag', 'house', '2', 'Rent', 1, 1, 1, 1, 1, 3, 4, '123', '123', 'fbbfdbxdfb xb', 'surat', '', '', '', '', '', 'Sold', 'Yes', '<p>THis is My First Listing</p>', '2023-02-20 13:34:47'),
(44, 0, 0, '$ptitle', '$ptype', '$bhk', '$stype', 0, 0, 0, 0, 0, 0, 0, '$price', '$sqft', '$paddress', '$city', '$state', '', '', '', '', '$status', '$featured', '$description', '2023-02-23 13:53:33'),
(46, 0, 16, '', 'House', '1', 'Rent', 0, 0, 0, 0, 0, 1, 1, '', '', '', '', '', '', '', '', '', 'Sold', 'Yes', '', '2023-02-24 04:29:04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(50) NOT NULL,
  `uname` varchar(250) NOT NULL,
  `mno` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `mno`, `email`, `password`, `designation`, `address`, `instagram`, `facebook`, `twitter`) VALUES
(1, 'Chirag Kachhadiya', '8980750691', 'chiragkachhadiya000@gmail.com', '123123123', 'Agent', '49 MD Park Socity Simada Gam', 'www.instagram.com', 'www.facebook.com', 'www.twitter.com'),
(12, 'Kunj', '8980750691', 'kunj@gmail.com', '11', 'designation', '49 MD Park Socity Simada Gam', 'instagram', 'facebook', 'twitter'),
(13, 'Chirag', '8980750691', 'chirag@gmail.com', '111', 'designation', '', 'instagram', 'facebook', 'twitter'),
(14, 'Chirag', '7435904428', 'ckcreation3112@gmail.com', '123123123', 'designation', '', 'instagram', 'facebook', 'twitter'),
(15, 'Chirag Kachhadiya', '8980750691', 'fena@gmail.com', '12', 'designation', '49,md park', 'instagram 1', 'facebook 3', 'twitter 2'),
(16, 'Harsh Munjpara', '8238273464', 'harsh@gmail.com', '123123123', 'designation', '', 'instagram', 'facebook', 'twitter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pbook`
--
ALTER TABLE `pbook`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `tblcate`
--
ALTER TABLE `tblcate`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhouse`
--
ALTER TABLE `tblhouse`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pbook`
--
ALTER TABLE `pbook`
  MODIFY `bid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcate`
--
ALTER TABLE `tblcate`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblhouse`
--
ALTER TABLE `tblhouse`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
