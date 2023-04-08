-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 01:09 PM
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
(12, 'About Our Company Real Estate', '<div class=\"bd-intro pt-2 ps-lg-2\">\n<p class=\"bd-lead\">Using our built-in grid Sass variables and maps, it&rsquo;s possible to completely customize the predefined grid classes. Change the number of tiers, the media query dimensions, and the container widths&mdash;then recompile.</p>\n</div>', 'about.jpg');

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
  `dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `password`, `email`, `mno`, `dob`) VALUES
(1, 'admin', 'admin123', 'admin123@gmail.com', '8980750691', '2014-03-12'),
(2, 'Chirag', '$2y$10$HO.Bj23aRQs1lc8jCdy7WugluAGTiKO5Rw6jO0uswQiw5cmhE/zNq', 'chirag@gmail.com', '8980750691', '2002-12-31'),
(3, 'Jaimil', '$2y$10$68/LGiLkwQaVlxCG6SK/Uu6NhiruoeOjLOC2wUMe1ecsmTAc8iud2', 'jaimilkanejeeya630@gmail.com', '8238378852', '2002-11-10');

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
  `response` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`id`, `uid`, `name`, `email`, `subject`, `msg`, `response`, `status`, `date`) VALUES
(14, 24, 'Chirag', 'chiragkachhadiya000@gmail.com', 'jbbdkjdfkjdf', 'sdvsv', 'dvsvs', 1, '0000-00-00'),
(17, 24, 'Kunj', 'kunj@gmail.com', 'dfsdfsf', 'dfsdfsf', 'vsdvsvds', 1, '0000-00-00'),
(19, 27, 'Chirag', 'chiragkachhadiya000@gmail.com', 'fbgnhmj,k.k,jhg', 'cvbnm,.mjhngfd', 'ghj,khgf', 1, '0000-00-00'),
(21, 31, 'Chirag', 'chiragkachhadiya000@gmail.com', 'Kai MAja No avi', 'Bov Maja No avi', 'Hamare Yaha Isa hi  hota jai', 1, '0000-00-00'),
(22, 30, 'Chirag', 'chiragkachhadiya000@gmail.com', 'Problem In Listing', 'dfghdfbg fgnhhfgbnh dsfbg', 'dfghmj,k sfdghmj', 1, '0000-00-00'),
(23, 30, 'Kunj', 'kunj@gmail.com', 'sfdghjm', 'sdfghmj', 'fghnjm', 1, '0000-00-00'),
(24, 30, 'Harsh', 'harsh@gmail.com', 'Prolem In Booking Property', 'fdghjk fghmj frgthjm', 'Your Prolbem Solve in 3 hours', 1, '2023-03-28'),
(26, 37, 'Harsh Munjpara', 'harshmunjapara005@gmail.com', 'Payments Related issues', 'bkjvkfn vnjv', 'Your Problem Is Solves', 1, '2023-04-03'),
(27, 37, 'Harsh Munjpara', 'harshmunjapara005@gmail.com', 'Payment Related issue', 'nhmdvfbgn', 'Done', 1, '2023-04-03');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `fid` int(255) NOT NULL,
  `uid` int(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`fid`, `uid`, `name`, `email`, `message`, `status`) VALUES
(73, 37, 'Harsh Munjpara', 'harshmunjapara005@gmail.com', 'Your Website IS Good', 1),
(74, 37, 'Harsh Munjpara', 'harshmunjapara005@gmail.com', 'Your Website IS Good', NULL),
(75, 37, 'Harsh Munjpara', 'harshmunjapara005@gmail.com', 'Good', 1),
(76, 37, 'Harsh Munjpara', 'harshmunjapara005@gmail.com', 'Good', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblhouse`
--

CREATE TABLE `tblhouse` (
  `pid` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `ptitle` longtext NOT NULL,
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
  `price` int(250) NOT NULL,
  `sqft` varchar(250) NOT NULL,
  `paddress` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `img1` varchar(250) NOT NULL,
  `img2` varchar(250) NOT NULL,
  `img3` varchar(250) NOT NULL,
  `img4` varchar(250) NOT NULL,
  `status` enum('Active','Inactive','','') NOT NULL DEFAULT 'Active',
  `featured` longtext NOT NULL,
  `description` longtext NOT NULL,
  `facilities` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `qc` enum('Pending','Reject','Success','') NOT NULL DEFAULT 'Pending',
  `response` varchar(255) NOT NULL DEFAULT 'Your Listing Is Live...'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblhouse`
--

INSERT INTO `tblhouse` (`pid`, `uid`, `ptitle`, `ptype`, `bhk`, `stype`, `bedroom`, `balcony`, `bathroom`, `kitchen`, `hall`, `floor`, `tfloor`, `price`, `sqft`, `paddress`, `city`, `state`, `img1`, `img2`, `img3`, `img4`, `status`, `featured`, `description`, `facilities`, `date`, `qc`, `response`) VALUES
(122, 40, 'New Property Near Vesu Road', 'Banglow', '3', 'Rent', 3, 4, 4, 1, 1, 2, 2, 12000, '2199', 'VIP Road Vesu', 'Surat', 'Gujarat', 'images (2).jpg', 'images (1).jpg', 'images.jpg', 'download (2).jpg', 'Inactive', 'No', '<p>sdfgh ghmj hjh g hjfj gdhfg&nbsp; &nbsp;gfh fhfh&nbsp; fg gm</p>', '<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Maintanace : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Wifi Plan : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Elevator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>', '2023-04-07 06:41:11', 'Success', 'Your Listing Is Live...'),
(123, 40, 'New Property Near Sarthana', 'Flat', '1', 'Sell', 1, 2, 2, 1, 1, 5, 24, 1210000, '123', '49 md park socity simada gam ', 'Surat', 'Gujarat', 'images.jpg', 'download.jpg', 'download (1).jpg', 'images (1).jpg', 'Inactive', 'Yes', '<p>cdfgnhmj, dfgnm dfbn&nbsp; dfbnn dffbn</p>', '<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Maintanace : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Wifi Plan : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Elevator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>', '2023-04-07 07:18:26', 'Success', 'Your Listing Is Live...');

-- --------------------------------------------------------

--
-- Table structure for table `tblpbooking`
--

CREATE TABLE `tblpbooking` (
  `bid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `seller_id` int(255) NOT NULL,
  `buyer_id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cindate` varchar(255) NOT NULL,
  `coutdate` varchar(255) NOT NULL,
  `bdate` date NOT NULL DEFAULT current_timestamp(),
  `status` enum('Pending','Success','Reject') NOT NULL DEFAULT 'Pending',
  `details` longtext NOT NULL,
  `reason` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpbooking`
--

INSERT INTO `tblpbooking` (`bid`, `name`, `pid`, `seller_id`, `buyer_id`, `email`, `cindate`, `coutdate`, `bdate`, `status`, `details`, `reason`) VALUES
(39, 'Kunj', 122, 40, 41, 'ckcreation3112@gmail.com', '2023-04-07', '2023-05-08', '2023-04-07', 'Success', 'I Want This Property', 'wadergh'),
(40, 'Kunj', 123, 40, 41, 'ckcreation3112@gmail.com', '', '', '2023-04-07', 'Reject', 'I Want This Property', 'ertj'),
(41, 'Chirag', 123, 40, 42, 'chiragkachhadiya8980@gmail.com', '', '', '2023-04-07', 'Success', 'Deal', 'dfn');

-- --------------------------------------------------------

--
-- Table structure for table `tblplan`
--

CREATE TABLE `tblplan` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(250) NOT NULL,
  `p_price` int(250) NOT NULL,
  `p_credit` int(250) NOT NULL,
  `p_description` varchar(250) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblplan`
--

INSERT INTO `tblplan` (`p_id`, `p_name`, `p_price`, `p_credit`, `p_description`, `date`) VALUES
(4, 'Gold', 500, 4, '<p>This Is Gold Plan</p>', '2023-04-01'),
(10, 'Standard', 100, 1, '<p>This Is A Gold Plan</p>', '2023-04-07'),
(11, 'Premium', 5000, 10, '<p>This Is Premium Plan</p>', '2023-04-07');

-- --------------------------------------------------------

--
-- Table structure for table `tblpmt`
--

CREATE TABLE `tblpmt` (
  `pmid` int(255) NOT NULL,
  `uid` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `pstatus` varchar(255) NOT NULL DEFAULT 'Paid',
  `pmtid` varchar(255) NOT NULL,
  `amt` int(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `p_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpmt`
--

INSERT INTO `tblpmt` (`pmid`, `uid`, `p_id`, `pstatus`, `pmtid`, `amt`, `date`, `p_name`) VALUES
(7, 34, 0, 'Paid', 'pay_LY64blk3522TQk', 1000, '2023-03-31 10:23:02', ''),
(8, 33, 0, 'Paid', 'pay_LY7m5pU4zg9QVB', 100, '2023-03-31 12:02:55', 'Pro'),
(9, 33, 0, 'Paid', 'pay_LY82hQzJd8792a', 100, '2023-03-31 12:18:36', 'Pro'),
(10, 33, 0, 'Paid', 'pay_LY8cdnQotJOgpe', 100, '2023-03-31 12:52:38', 'Pro'),
(11, 33, 0, 'Paid', 'pay_LYSyGyQqPF5tls', 100, '2023-04-01 08:47:02', 'Pro'),
(12, 33, 0, 'Paid', 'pay_LYVVARj7SYslH8', 889, '2023-04-01 11:15:31', 'Pro'),
(13, 33, 0, 'Paid', 'pay_LYVZD3ZrptBWfJ', 200, '2023-04-01 11:19:20', 'Standard'),
(14, 33, 4, 'Paid', 'pay_LYVyMbDiNGS7dY', 800, '2023-04-01 11:43:08', 'Gold'),
(15, 33, 4, 'Paid', 'pay_LYW0oPnsAGfoA4', 800, '2023-04-01 11:45:29', 'Gold'),
(16, 37, 4, 'Paid', 'pay_LZC8Y3EZdHushW', 800, '2023-04-03 04:57:56', 'Gold'),
(17, 37, 4, 'Paid', 'pay_LZD7z02l14AtGb', 500, '2023-04-03 05:56:05', 'Gold'),
(18, 37, 7, 'Paid', 'pay_LZgDcSgQil7bCA', 100, '2023-04-04 10:23:31', 'Standard'),
(19, 37, 4, 'Paid', 'pay_LZgOOu0KxdY5yt', 500, '2023-04-04 10:33:44', 'Gold'),
(20, 38, 4, 'Paid', 'pay_La10z7J3vbWYd8', 500, '2023-04-05 06:44:09', 'Gold'),
(21, 40, 4, 'Paid', 'pay_LaUayeHThoQlR9', 500, '2023-04-06 11:40:20', 'Gold'),
(22, 40, 4, 'Paid', 'pay_LapahG5tppKHMb', 500, '2023-04-07 08:12:38', 'Gold'),
(23, 40, 11, 'Paid', 'pay_LapcOZgiJc0nLd', 5000, '2023-04-07 08:14:16', 'Premium'),
(24, 40, 4, 'Paid', 'pay_LbGTyDEdo933Sl', 500, '2023-04-08 10:31:17', 'Gold');

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
  `p_img` varchar(250) NOT NULL DEFAULT 'Pending',
  `address` varchar(250) NOT NULL,
  `instagram` varchar(250) NOT NULL,
  `facebook` varchar(250) NOT NULL,
  `twitter` varchar(250) NOT NULL,
  `credit` int(250) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `mno`, `email`, `password`, `p_img`, `address`, `instagram`, `facebook`, `twitter`, `credit`) VALUES
(40, 'Chirag', '8980750691', 'chiragkachhadiya000@gmail.com', '$2y$10$VJWIE4A.3HL2IyDoF9QLcelVb2q6z35RvXT7zUr/vxMAj22ZctI7u', 'Pending', '49 MD Park Socity Simada Gam', 'instagram', 'facebook', 'twitter', 21),
(41, 'Kunj', '7435904428', 'ckcreation3112@gmail.com', '$2y$10$BVH2gBwLQMQSh./.olG83.eu3go.rur.86G/KX9ImZlfPDt0FX3qq', 'Pending', '49,md park', 'instagram', 'facebook', 'twitter', 3),
(42, 'Chirag', '7435904428', 'chiragkachhadiya8980@gmail.com', '$2y$10$tFp6J8qQapb3B/e3H79bAe7mO8Lnjamd8tlTLccyzdxH9ED8f0mHS', 'Pending', '49,md park', 'instagram', 'facebook', 'twitter', 3);

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
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `tblhouse`
--
ALTER TABLE `tblhouse`
  ADD PRIMARY KEY (`pid`);
ALTER TABLE `tblhouse` ADD FULLTEXT KEY `ptitle` (`ptitle`,`paddress`,`description`,`facilities`);

--
-- Indexes for table `tblpbooking`
--
ALTER TABLE `tblpbooking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `tblplan`
--
ALTER TABLE `tblplan`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tblpmt`
--
ALTER TABLE `tblpmt`
  ADD PRIMARY KEY (`pmid`);

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
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `fid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tblhouse`
--
ALTER TABLE `tblhouse`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `tblpbooking`
--
ALTER TABLE `tblpbooking`
  MODIFY `bid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tblplan`
--
ALTER TABLE `tblplan`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblpmt`
--
ALTER TABLE `tblpmt`
  MODIFY `pmid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
