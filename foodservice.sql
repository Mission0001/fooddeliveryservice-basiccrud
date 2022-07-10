-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2021 at 12:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `orders` (
  `orders_id` int(11) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
  `food_name` varchar(100) NOT NULL,
  `price` varchar(800) DEFAULT NULL,
  `date` varchar(100) NOT NULL,
  `payment_type` varchar(16) NOT NULL DEFAULT 'Wallet',
  `total` int(11) NOT NULL COMMENT '$ Value',
  `status` varchar(25) NOT NULL DEFAULT 'Yet to be delivered'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `details_id` int(11) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
  `name` varchar(50) NOT NULL,
  `email` varchar(35) DEFAULT NULL,
  `address` varchar(800) DEFAULT NULL,
  `contact` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `wallet_details` (
  `wallet_id` int(11) NOT NULL  AUTO_INCREMENT PRIMARY KEY,
  `card_number` varchar(16) NOT NULL,
  `cvv` int(3) NOT NULL,
  `balance` int(11) NOT NULL DEFAULT 2000 COMMENT '$ Value'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


