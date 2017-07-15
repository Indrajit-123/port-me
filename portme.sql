-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 15, 2017 at 10:23 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `portme`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE IF NOT EXISTS `company_details` (
  `company_id` int(255) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `work_phone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`company_id`, `category_name`, `email`, `work_phone`, `mobile`, `website`) VALUES
(1, 'PORT ME', 'portme@bp.com', '12345', '54321', 'portme.in');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(255) NOT NULL AUTO_INCREMENT,
  `salutation` enum('1','2','3','4','5') NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `work_phone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `billing_street` longtext NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_state` varchar(255) NOT NULL,
  `billing_zip` varchar(255) NOT NULL,
  `billing_country` varchar(255) NOT NULL,
  `shipping_street` longtext NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_state` varchar(255) NOT NULL,
  `shipping_zip` varchar(255) NOT NULL,
  `shipping_country` varchar(255) NOT NULL,
  `notes` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `business_id` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `salutation`, `firstname`, `lastname`, `company_name`, `email`, `work_phone`, `mobile`, `website`, `billing_street`, `billing_city`, `billing_state`, `billing_zip`, `billing_country`, `shipping_street`, `shipping_city`, `shipping_state`, `shipping_zip`, `shipping_country`, `notes`, `date`, `added_by`, `business_id`) VALUES
(2, '1', 'Debashis', 'Nath', 'PORT', 'portme@bp.com', '123456', 'Debashis', 'portme@bp.in', 'santibazaar', 'barrackpore', 'west', '700120', 'INDIA', 'santibazaar', 'barrackpore', 'west', '700120', 'INDIA', '', '', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_package`
--

CREATE TABLE IF NOT EXISTS `subscription_package` (
  `subs_id` int(255) NOT NULL AUTO_INCREMENT,
  `subscription_name` varchar(255) NOT NULL,
  `subscription_price` varchar(255) NOT NULL,
  PRIMARY KEY (`subs_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subscription_package`
--

INSERT INTO `subscription_package` (`subs_id`, `subscription_name`, `subscription_price`) VALUES
(1, 'STARTER', '0'),
(2, 'ECONOMY', '199'),
(3, 'DELUXE', '399'),
(4, 'ULTIMATE', '699');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` enum('active','pending','cancel') NOT NULL,
  `date` varchar(255) NOT NULL,
  `subscription_package` varchar(255) NOT NULL,
  `subscription_expdate` varchar(255) NOT NULL,
  `subscription_price` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `phone`, `country`, `status`, `date`, `subscription_package`, `subscription_expdate`, `subscription_price`) VALUES
(4, 'deepbratt@gmail.com', 'aaa', '123123', 'India', 'pending', '1489688597', '', '', ''),
(5, 'indro@new.com', 'rimuloveindu', '1097', 'India', 'pending', '1500054577', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_levels`
--

CREATE TABLE IF NOT EXISTS `user_access_levels` (
  `access_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `access_type` varchar(255) NOT NULL,
  `business_id` varchar(255) NOT NULL,
  `access_menu` varchar(255) NOT NULL,
  PRIMARY KEY (`access_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_access_levels`
--

INSERT INTO `user_access_levels` (`access_id`, `user_id`, `access_type`, `business_id`, `access_menu`) VALUES
(1, '4', 'admin', '1', 'all'),
(2, '5', 'admin', '0', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
  `vendor_id` int(255) NOT NULL AUTO_INCREMENT,
  `salutation` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `work_phone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `billing_street` longtext NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_state` varchar(255) NOT NULL,
  `billing_zip` varchar(255) NOT NULL,
  `billing_country` varchar(255) NOT NULL,
  `shipping_street` longtext NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_state` varchar(255) NOT NULL,
  `shipping_zip` varchar(255) NOT NULL,
  `shipping_country` varchar(255) NOT NULL,
  `notes` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `business_id` varchar(255) NOT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `salutation`, `firstname`, `lastname`, `company_name`, `email`, `work_phone`, `mobile`, `website`, `billing_street`, `billing_city`, `billing_state`, `billing_zip`, `billing_country`, `shipping_street`, `shipping_city`, `shipping_state`, `shipping_zip`, `shipping_country`, `notes`, `date`, `added_by`, `business_id`) VALUES
(1, 'Mr', 'Ram', 'Raheem', 'bakchodbaba incorp', '', '9230841054', '9230841054', 'www.syspider.com', '177 old calcutta road , 14no. railway gate , Barrackpore\r\n101/B A Road Anandapuri Barrackpore', 'kolkata', 'West Bengal', '700122', 'India', '177 old calcutta road , 14no. railway gate , Barrackpore\r\n101/B A Road Anandapuri Barrackpore', 'kolkata', 'West Bengal', '700122', 'India', 'bakchodi ki jay hoo.. asdasd asd a', '1492154399', '4', '1'),
(2, 'Mr', 'test', 'test', 'asdasda', '', '9230841054', '9230841054', '', '177 old calcutta road , 14no. railway gate , Barrackpore\r\n101/B A Road Anandapuri Barrackpore', 'kolkata', 'West Bengal', '700122', 'India', '177 old calcutta road , 14no. railway gate , Barrackpore\r\n101/B A Road Anandapuri Barrackpore', 'kolkata', 'West Bengal', '700122', 'India', 'brand fac', '1492161060', '4', '1');
