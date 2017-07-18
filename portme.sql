-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 18, 2017 at 09:22 PM
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
  `shipping_street` longtext NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_state` varchar(255) NOT NULL,
  `shipping_zip` varchar(255) NOT NULL,
  `notes` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `business_id` varchar(255) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `salutation`, `firstname`, `lastname`, `company_name`, `email`, `work_phone`, `mobile`, `website`, `billing_street`, `billing_city`, `billing_state`, `billing_zip`, `shipping_street`, `shipping_city`, `shipping_state`, `shipping_zip`, `notes`, `date`, `added_by`, `business_id`) VALUES
(2, 'Mr.', 'Debashis', 'Nath', 'PORT', 'portme@bp.com', '123456', 'Debashis', 'portme@bp.in', 'santibazaar', 'barrackpore', 'west', '700120', 'santibazaar', 'barrackpore', 'west', '700120', '', '', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(255) NOT NULL AUTO_INCREMENT,
  `product_type` varchar(255) NOT NULL,
  `category_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `quantity` int(255) NOT NULL,
  `tax_name` varchar(255) NOT NULL,
  `tax_rate` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `attribute_value` varchar(255) NOT NULL,
  `attribute_option` varchar(255) NOT NULL,
  `business_id` int(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_type`, `category_id`, `product_name`, `description`, `quantity`, `tax_name`, `tax_rate`, `price`, `attribute_value`, `attribute_option`, `business_id`) VALUES
(1, 'Product', 1, 'Lenovo', 'VIBE K5 NOTE', 150, 'ST', '15', '14000', 'COLOR,COLOR', 'RED,WHITE', 4),
(2, 'Product', 1, 'MORPHI', 'ITS A RADIO', 25, 'CGST', '15', '10000', 'color,type', 'red,radio', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `category_id` int(255) NOT NULL AUTO_INCREMENT,
  `category_type` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `attribute_name` longtext NOT NULL,
  `attribute_options` longtext NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `business_id` int(255) NOT NULL,
  `tax` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_type`, `category_name`, `description`, `attribute_name`, `attribute_options`, `item_type`, `business_id`, `tax`) VALUES
(1, 'Service', 'Mobile', 'sfasfdfsg', 'sasf,dasfdsvs,bal', 'qdf,ffsgs,bichi', 'Inventory', 4, 'GST 28%,ST 10%'),
(6, 'Product', 'LAPTOP', 'adbjfiwgv', 'asfsdgs,dafwe', 'fsgth,FWEGEA', 'Inventory', 4, 'GST 28%,ST 10%'),
(7, 'Service', 'afg', 'fwgtrsh', 'xfr,feg', 'eergeath,qfwgwrg', 'Inventory', 4, 'GST 28%,VAT 17%'),
(8, 'Product', 'fsdv', 'dfwsgv', 'fsgg', 'wgeget', 'Inventory', 4, 'ST 10%'),
(9, 'Product', 'fghggf', 'fgfgjffu', '', '', 'Inventory', 4, 'CGST 9%,ST 10%'),
(12, 'Product', 'dewfwnvkfb', 'dfjwk', 'red', 'red', 'Inventory', 4, 'GST 28%,VAT 17%');

-- --------------------------------------------------------

--
-- Table structure for table `staff_details`
--

CREATE TABLE IF NOT EXISTS `staff_details` (
  `staff_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `commision` int(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(255) NOT NULL,
  `business_id` int(255) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `staff_details`
--

INSERT INTO `staff_details` (`staff_id`, `name`, `email`, `phone`, `commision`, `document`, `street`, `city`, `state`, `zip`, `business_id`) VALUES
(1, 'ascd', 'krish@gmail.com', 1097, 5, '', 'Safce', '', 'sAD', 0, 4),
(2, 'asfd', 'krish@gmail.com', 1234, 3, '', 'Safce', 'SAD', 'sAD', 0, 4),
(3, 'krish', 'krish@gmail.com', 12345, 3, '', 'ASACd', 'aSd', 'ASd', 0, 3),
(5, 'adade', 'dadef@ewfwf.fwf', 454488, 45, '', 'afafe', 'afgf', 'fwgwrg', 0, 4);

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
-- Table structure for table `tax`
--

CREATE TABLE IF NOT EXISTS `tax` (
  `tax_id` int(255) NOT NULL AUTO_INCREMENT,
  `tax_name` varchar(255) NOT NULL,
  `tax_rate` varchar(255) NOT NULL,
  `business_id` int(255) NOT NULL,
  PRIMARY KEY (`tax_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`tax_id`, `tax_name`, `tax_rate`, `business_id`) VALUES
(1, 'GST', '28', 4),
(2, 'CGST', '9', 4),
(3, 'VAT', '17', 4),
(4, 'ST', '10', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `logo_image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `type_business` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` enum('active','pending','cancel') NOT NULL,
  `date` varchar(255) NOT NULL,
  `subscription_package` varchar(255) NOT NULL,
  `subscription_expdate` varchar(255) NOT NULL,
  `subscription_price` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `adhaar` varchar(255) NOT NULL,
  `business` varchar(255) NOT NULL,
  `street` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `logo_image`, `username`, `email`, `business_name`, `type_business`, `password`, `phone`, `country`, `status`, `date`, `subscription_package`, `subscription_expdate`, `subscription_price`, `pan`, `adhaar`, `business`, `street`, `city`, `state`, `zip`) VALUES
(4, '3611favicon.png', 'deep', 'deepbratt@gmail.com', '', 'Care Givers', 'aaa', '123123', 'India', 'pending', '1489688597', '', '', '', '4543654', '12345acb', '123456', '12345acb', '12345acb', '12345acb', '123456'),
(5, '', '', 'indro@new.com', '', '', 'rimuloveindu', '1097', 'India', 'pending', '1500054577', '', '', '', '', '', '', '', '', '', ''),
(6, '721007.png', 'debashis nath', 'debashisnath1992@gmail.com', 'portme', 'Finance and Insurance', 'aaaa', '7074459217', '', '', '', '', '', '', '4565', '456465465', 'portme', 'afrg', 'frge', 'fwrge', '423534'),
(7, '', '', 'dev@g.c', '51515151', 'Accounting Services', 'aaa', '7074459217', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '7621', 'debashis', 'fweqfwr@fewfw.qff', '46545646', 'Agriculture, Farming, Fishing and Forestry', 'aaa', '7074459217', '', '', '', '', '', '', 'dqfwef', 'qfqf', 'wfwv', 'fewgrw', 'ewfwrgrw', 'qfwefw', '4254');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_access_levels`
--

INSERT INTO `user_access_levels` (`access_id`, `user_id`, `access_type`, `business_id`, `access_menu`) VALUES
(1, '4', 'admin', '1', 'all'),
(2, '5', 'admin', '0', 'all'),
(3, '6', 'admin', '0', 'all'),
(4, '0', 'admin', '0', 'all'),
(5, '0', 'admin', '0', 'all'),
(6, '0', 'admin', '0', 'all'),
(7, '0', 'admin', '0', 'all'),
(8, '0', 'admin', '0', 'all'),
(9, '0', 'admin', '0', 'all'),
(10, '0', 'admin', '0', 'all'),
(11, '0', 'admin', '0', 'all'),
(12, '7', 'admin', '0', 'all'),
(13, '0', 'admin', '0', 'all');

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
  `shipping_street` longtext NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_state` varchar(255) NOT NULL,
  `shipping_zip` varchar(255) NOT NULL,
  `notes` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `business_id` varchar(255) NOT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendor_id`, `salutation`, `firstname`, `lastname`, `company_name`, `email`, `work_phone`, `mobile`, `website`, `billing_street`, `billing_city`, `billing_state`, `billing_zip`, `shipping_street`, `shipping_city`, `shipping_state`, `shipping_zip`, `notes`, `date`, `added_by`, `business_id`) VALUES
(4, 'Miss.', 'abcde', 'xyz', 'portme', 'portme@bkp.com', '7557012578', '7074459217', 'portme.co', 'abcde', 'abcde', 'abcde', '012345', 'abcde', 'abcde', 'abcde', '012345', '', '', '4', '4');
