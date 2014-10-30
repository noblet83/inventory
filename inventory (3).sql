-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 30, 2014 at 02:24 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
`item_id` int(50) NOT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `item_desc` varchar(100) DEFAULT NULL,
  `barcode` varchar(50) NOT NULL,
  `serial` varchar(50) DEFAULT NULL,
  `instock` int(20) DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`item_id`, `item_name`, `item_desc`, `barcode`, `serial`, `instock`) VALUES
(5, 'Apex BrailleNote', '<p>Braille Note Taker by Humanware.</p>', 'Bar 45157', '2626416516', 0),
(9, 'test', '<p>test</p>', '', '', 2323),
(11, 'love test', '<p>love them</p>', '', '', 23232),
(14, 'asdasdf', '<p>adfadfdsfd</p>', '', NULL, 0),
(15, 'asdasdf', '<p>adfadfdsfd</p>', '', NULL, 0),
(16, 'Focus 80 Blue', '<p>80 Cell refreshable display for blind users</p>', '', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
`order_id` int(50) NOT NULL,
  `order_title` varchar(100) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `order_quantity` int(20) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `order_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `order_note` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_title`, `order_status`, `order_quantity`, `item_name`, `order_date`, `order_note`) VALUES
(2, 'Focus 80''s, April Order', 'ordered', 10, 'Focus 80', '2014-09-28 11:22:56', 'vendor informed me of 6 month delay'),
(3, 'Focus 40 For Andy', 'received', 4, 'Focus 40', '2014-09-28 11:36:34', 'focus 40''s requested by Tom'),
(4, 'test', 'test', 56, 'test', NULL, '<p>adfadfa</p>'),
(5, 'another', 'someting', 53, 'item', '2014-10-05 20:41:47', '<p>blah</p>');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
`trans_id` int(50) NOT NULL,
  `trans_status` varchar(100) NOT NULL,
  `trans_note` text NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `user_sid` int(11) NOT NULL,
  `trans_time` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`trans_id`, `trans_status`, `trans_note`, `item_name`, `user_sid`, `trans_time`) VALUES
(7, 'deployed', 'Deployed to Andy''s new desk', 'Focus 80', 1, '2014-09-26 12:25:00'),
(8, 'in inventory', 'barcoded and now ready to be deployed', 'Focus 40', 1, '2014-10-24 11:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(50) NOT NULL,
  `user_sid` varchar(10) NOT NULL,
  `user_pw` varchar(100) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_sid`, `user_pw`, `fname`, `lname`) VALUES
(1, 'tmnobl2', '', 'Tom', 'Noble'),
(2, 'mgbyrd', '', 'Mike', 'Byrd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
 ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
 ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
 ADD PRIMARY KEY (`trans_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
MODIFY `item_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
MODIFY `order_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
MODIFY `trans_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
