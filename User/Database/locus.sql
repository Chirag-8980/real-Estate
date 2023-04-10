-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 01:35 PM
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
(123, 40, 'New Property Near Sarthana', 'Flat', '1', 'Sell', 1, 2, 2, 1, 1, 5, 24, 1210000, '123', '49 md park socity simada gam ', 'Surat', 'Gujarat', 'images.jpg', 'download.jpg', 'download (1).jpg', 'images (1).jpg', 'Inactive', 'Yes', '<p>cdfgnhmj, dfgnm dfbn&nbsp; dfbnn dffbn</p>', '<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Maintanace : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Wifi Plan : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Elevator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>', '2023-04-07 07:18:26', 'Success', 'Your Listing Is Live...'),
(124, 43, 'This Is My First Listing On the this wedsite Update', 'Banglow', '1', 'Sell', 1, 1, 1, 1, 1, 1, 13, 12100, '123', 'VIP Road Vesu', 'Surat', 'Gujarat', 'images (5).jpg', 'images (4).jpg', 'images (3).jpg', 'images (2).jpg', 'Active', 'No', '<p>xcvbnm, dfghjk</p>', '<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Maintanace : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Wifi Plan : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Elevator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>', '2023-04-10 10:55:41', 'Success', 'Your Listing Is Live...'),
(125, 43, 'This Is My First Listing On the this wedsite update', 'Farm-House', '3', 'Rent', 1, 1, 1, 1, 1, 1, 13, 12100, '123', 'A-504 Raghuveer Heights VIP Road Vesu ', 'Surat', 'Gujarat', 'download.jpg', 'images (1).jpg', 'download (1).jpg', 'image (4).jpg', 'Active', 'No', '<p>sfdhkjl/ etfhjk. hfjk</p>', '<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Maintanace : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Wifi Plan : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Elevator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>', '2023-04-10 11:02:26', 'Reject', 'InValid information'),
(126, 43, 'This Is My First Listing On the this wedsite Update', 'Farm-House', '2', 'Rent', 1, 2, 1, 1, 1, 5, 13, 12100, '123', 'A-504 Raghuveer Heights VIP Road Vesu ', 'surat', 'Gujarat', 'image (1).jpg', 'image (14).jpg', 'images (1).jpg', 'download (1).jpg', 'Inactive', 'No', '<p>This Is MY property</p>', '<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Property Age : </span>10 Years</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Parking : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Maintanace : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Type : </span>Apartment</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Security : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Wifi Plan : </span>Yes</li>\r\n</ul>\r\n</div>\r\n<div class=\"col-md-4\">\r\n<ul>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">3rd Party : </span>No</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Elevator : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">CCTV : </span>Yes</li>\r\n<li class=\"mb-3\"><span class=\"text-black fw-bold\">Water Supply : </span>Ground Water / Tank</li>\r\n</ul>\r\n</div>', '2023-04-10 11:25:20', 'Success', 'Your Listing Is Live...');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblhouse`
--
ALTER TABLE `tblhouse`
  ADD PRIMARY KEY (`pid`);
ALTER TABLE `tblhouse` ADD FULLTEXT KEY `ptitle` (`ptitle`,`paddress`,`description`,`facilities`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblhouse`
--
ALTER TABLE `tblhouse`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
