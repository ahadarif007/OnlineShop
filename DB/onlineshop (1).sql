-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 11:16 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

CREATE TABLE `admindata` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dateOfBirth` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `permanentAddress` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `Picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`firstname`, `lastname`, `dateOfBirth`, `gender`, `phone`, `email`, `permanentAddress`, `password`, `Picture`) VALUES
('ahad', 'arif', '4 january 2015', 'male', '01720513318', 'ahadarif444@gmail.com', 'jbadjbAS.KFBsdl,jjfhvbvdsljhfb ', '25f9e794323b453885f5181f1b624d0b', '../signup/userImages/Capture.PNG'),
('ahad', 'arif', '1 january 2020', 'male', '01720513318', 'ahadarif444@gmail.com', 'jbadjbAS.KFBsdl,jjfhvbvdsljhfb ', '25f9e794323b453885f5181f1b624d0b', '../signup/userImages/ProfileImage.jpg'),
('ahad', 'arif', '1 january 2020', 'male', '01720513318', 'ahadarif444@gmail.com', 'jbadjbAS.KFBsdl,jjfhvbvdsljhfb ', '25f9e794323b453885f5181f1b624d0b', '../signup/userImages/ProfileImage.jpg'),
('ahad', 'arif', '1 january 2020', 'male', '01720513318', 'ahadarif444@gmail.com', 'jbadjbAS.KFBsdl,jjfhvbvdsljhfb ', '25f9e794323b453885f5181f1b624d0b', '../signup/userImages/ProfileImage.jpg'),
('ahad', 'arif', '1 january 2020', 'male', '01720513318', 'ahadarif444@gmail.com', 'jbadjbAS.KFBsdl,jjfhvbvdsljhfb ', '25f9e794323b453885f5181f1b624d0b', '../signup/userImages/ProfileImage.jpg'),
('shanto', 'hasan', '2 february 2017', 'male', '01720513318', 'ahadarif111@gmail.com', 'lkajsdjbkjlwdhfg', '25f9e794323b453885f5181f1b624d0b', '../signup/userImages/Data Insertion In EMV.png'),
('shanto', 'hasan', '2 february 2017', 'male', '01750295578', 'shanto.zs34@gmail.com', 'london', '25d55ad283aa400af464c76d713c07ad', '../signup/userImages/ProfileImage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderNo` varchar(150) NOT NULL,
  `orderID` varchar(150) NOT NULL,
  `userid` varchar(150) NOT NULL,
  `pid` varchar(150) NOT NULL,
  `qty` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` varchar(150) NOT NULL,
  `qtyXprice` varchar(150) NOT NULL,
  `isDelivered` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderNo`, `orderID`, `userid`, `pid`, `qty`, `name`, `price`, `qtyXprice`, `isDelivered`) VALUES
('ordNo-5e08358bb2c48', 'PK-5e08358bb6124', 'ahadarif@gmail.com', 'pid5dfef3c1a50a5', '5', '123456', '655464', '3277320', 'no'),
('ordNo-5e0835c337ee5', 'PK-5e0835c33b043', 'ahadarif@gmail.com', 'pid5dfef3c1a50a5', '5', '123456', '655464', '3277320', 'no'),
('ordNo-5e08360236c16', 'PK-5e0836023c50c', 'ahadarif@gmail.com', 'pid5dfef3c1a50a5', '5', '123456', '655464', '3277320', 'no'),
('ordNo-5e083605c7bc0', 'PK-5e083605ccf65', 'ahadarif@gmail.com', 'pid5dfef3c1a50a5', '5', '123456', '655464', '3277320', 'no'),
('ordNo-5e0892ccd8527', 'PK-5e0892ccdf0a1', 'ahadarif@gmail.com', 'pid5dfef3c1a50a5', '5', '123456', '655464', '3277320', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` varchar(100) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `ProductCategory` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL,
  `productDescription` varchar(250) NOT NULL,
  `availableQuantity` varchar(50) NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `ProductCategory`, `price`, `productDescription`, `availableQuantity`, `picture`) VALUES
('pid5dfef3c1a50a5', '123456', 'ball', '655464', 'kjhvkjghvkjhgv', '15', '../Insert/productImages/Capture.PNG'),
('pid5dfffbc26f8a7', '123456', 'ball', '3165', 'kwenbfkwejfnhkljn', '365697', '../Insert/productImages/Untitled Diagram.png'),
('pid5e045b55e029e', 'denim jeans', 'pants', '5500', 'soft flexible', '100', '../Insert/productImages/images.jpg'),
('pid5e080805e5035', 'denim jeans', 'pants', '89', 'soft flexible', '800', '../Insert/productImages/images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `dateOfBirth` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `shippingAddress` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`firstname`, `lastname`, `dateOfBirth`, `gender`, `phone`, `email`, `shippingAddress`, `password`, `Picture`) VALUES
('a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
('ahad', 'arif', '1 february 2020', 'male', '01720513318', 'ahadarif444@gmail.com', 'hiuhikhi', '25d55ad283aa400af464c76d713c07ad', '../signup/userImages/Untitled Diagram.png'),
('shanto1', 'hasan', '3 march 2018', 'male', '01720513319', 'ahadarif@gmail.com', 'lkhkuyhfikuyhgf  ', 'c44a471bd78cc6c2fea32b9fe028d30a', '../signup/userImages/ProfileImage.jpg'),
('shanto1', 'hasan', '3 march 2018', 'male', '01720513319', 'ahadarif@gmail.com', 'lkhkuyhfikuyhgf  ', 'c44a471bd78cc6c2fea32b9fe028d30a', '../signup/userImages/ProfileImage.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
