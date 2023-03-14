-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 06:31 AM
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
-- Database: `locus`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`) VALUES
(12, 'About Our Company Real Estate', '<div class=\"bd-intro pt-2 ps-lg-2\">\n<p class=\"bd-lead\">Using our built-in grid Sass variables and maps, it&rsquo;s possible to completely customize the predefined grid classes. Change the number of tiers, the media query dimensions, and the container widths&mdash;then recompile.</p>\n</div>', 'pexels-eziz-charyyev-1475938.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mno` text NOT NULL,
  `dob` date DEFAULT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `password`, `email`, `mno`, `dob`, `profile`) VALUES
(1, 'admin', 'admin123', 'admin123@gmail.com', '8980750691', '2014-03-12', '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblbusiness`
--

CREATE TABLE `tblbusiness` (
  `pid` int(255) NOT NULL,
  `cid` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `ptitle` text NOT NULL,
  `paddress` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `sqft` int(255) NOT NULL,
  `rooms` int(255) NOT NULL,
  `stype` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `facilities` longtext NOT NULL,
  `description` longtext NOT NULL,
  `qc` tinyint(1) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbusiness`
--

INSERT INTO `tblbusiness` (`pid`, `cid`, `uid`, `ptitle`, `paddress`, `state`, `city`, `price`, `sqft`, `rooms`, `stype`, `img1`, `img2`, `img3`, `img4`, `facilities`, `description`, `qc`, `date`) VALUES
(1, 0, 23, 'This Is My First Listing On the this wedsite Update', '49 md park socity simada gam surat3', 'Gujarat', 'Surat', 12100, 123, 2, 'Sell', 'pexels-pixabay-273244.jpg', 'pexels-eziz-charyyev-1475938.jpg', 'pexels-jessica-bryant-1370704.jpg', 'pexels-jessica-bryant-1370704.jpg', '<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Maintanace : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Wifi Plan : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Elevator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-secondary font-weight-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>', '<p>qwdadad</p>', 1, '2023-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `tblcate`
--

CREATE TABLE `tblcate` (
  `cid` int(255) NOT NULL,
  `ctype` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qc` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblhouse`
--

INSERT INTO `tblhouse` (`pid`, `cid`, `uid`, `ptitle`, `ptype`, `bhk`, `stype`, `bedroom`, `balcony`, `bathroom`, `kitchen`, `hall`, `floor`, `tfloor`, `price`, `sqft`, `paddress`, `city`, `state`, `img1`, `img2`, `img3`, `img4`, `status`, `featured`, `description`, `date`, `qc`) VALUES
(78, 0, 21, 'This Is My First Listing On the this wedsite', 'House', '2', 'Sell', 1, 1, 1, 1, 1, 1, 13, '12100', '123', '49 md park socity simada gam surat3', 'surat', 'Gujarat', 'pexels-binyamin-mellish-186077.jpg', 'pexels-alex-staudinger-1732414.jpg', 'pexels-pixabay-259588.jpg', 'pexels-alex-staudinger-1732414.jpg', 'Unsold', 'Yes', '<p>&nbsp;bdbbfbb dfjsoiijfwfijo dfjiojwoigjw dfbjsio diojsoi dj0 bj</p>', '2023-03-09 07:38:38', 1),
(79, 0, 23, 'This Is My First Listing On the this wedsite Update', 'Apartment', '1', 'Rent', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', 'pexels-pixabay-273244.jpg', 'pexels-eziz-charyyev-1475938.jpg', 'pexels-pixabay-259588.jpg', 'pexels-jessica-bryant-1370704.jpg', 'Sold', 'Yes', '<p>vsdvsdv dfsdss dbbw</p>', '2023-03-11 07:00:56', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `mno`, `email`, `password`, `designation`, `address`, `instagram`, `facebook`, `twitter`) VALUES
(21, 'Chirag', '8980750691', 'chirag@gmail.com', '$2y$10$978ew/I9NjvQff2/BUiJqud6fVxkbwffGAfxfHadeAXX6KeYwFgqK', 'designation', '', 'instagram', 'facebook', 'twitter'),
(22, 'Kunj', '7435904428', 'kunj@gmail.com', '$2y$10$i9Bw1mBva133d8cxlq2bAOaXTB6woMOk5S5LzH9hb7Zgc0td4SepO', 'designation', '', 'instagram', 'facebook', 'twitter'),
(23, 'Chirag', '8980750691', 'ckcreation3112@gmail.com', '$2y$10$jnTYwPskWX6mI1XVZbF/LOm1hCg9SYaosQOw5ajFWsFhxqQjz0cra', 'designation', '', 'instagram', 'facebook', 'twitter'),
(24, 'Chirag', '7435904428', 'chiragkachhadiya000@gmail.com', '$2y$10$robeckJrECn/qPNgkwhWtOwWghR5/ptQkxWZd.ChOZIMjE.N8TGOO', 'designation', '', 'instagram', 'facebook', 'twitter');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `pbook`
--
ALTER TABLE `pbook`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `tblbusiness`
--
ALTER TABLE `tblbusiness`
  ADD PRIMARY KEY (`pid`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pbook`
--
ALTER TABLE `pbook`
  MODIFY `bid` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblbusiness`
--
ALTER TABLE `tblbusiness`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcate`
--
ALTER TABLE `tblcate`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblhouse`
--
ALTER TABLE `tblhouse`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
