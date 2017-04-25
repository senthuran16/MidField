-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 03:04 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcwdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentId` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Comments` varchar(1000) NOT NULL,
  `UserRating` varchar(10) NOT NULL,
  `ReceiveEmails` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentId`, `Name`, `Email`, `Comments`, `UserRating`, `ReceiveEmails`) VALUES
(1, 'Senthuran Ambalavanar', 'senthuranrc16@gmail.com', 'Good layout guys...', '4', 'no'),
(2, 'Juliana', 'juliana.20@gmail.com', 'It is a clean site', '5', 'yes'),
(3, 'Gowthamy Vaseekaran', 'vthamy.20@gmail.com', 'Well done & clean looking', '4', 'yes'),
(4, 'Sharon', '', 'professional website  ', '3', 'no'),
(5, 'Sana', 'sana@gmail.com', 'Need some improvement', '2', 'yes'),
(6, 'Paul', 'paul.20@yahoo.com', 'Color scheme is effective ', '5', 'yes'),
(7, 'Sahana Sivaraj', 'sahana_sivaraj@yahoo.com', 'The site feels great..', '5', 'no'),
(8, 'Anitha', 'ani.23@hotmail.com', 'Not bad', '3', 'yes'),
(9, 'Thinesharan Vaseekaran', 'thinesh91@live.com', 'Simply superb', '4', 'yes'),
(10, 'James', 'jama.32@hotmail.com', 'very effective ', '3', 'no'),
(11, 'Sanjayan Ambalavanar', 'sanjayan1997@gmail.com', 'design is very  consistent', '', 'yes'),
(12, 'Sanjana', 'sanjana.32@gmail.com', 'Good work', '3', 'yes'),
(13, 'Bala Raman', 'bala.32@gmail.com', 'effective work', '5', 'yes'),
(14, 'Paul Walker', 'walky.21@yahoo.com', 'It is a simple layout', '5', 'no'),
(15, 'Thisha', 'thisha.20@yahoo.com', 'The design is very effective', '4', 'yes'),
(16, 'Shimak Ahamed', 'shimak2013@gmail.com', 'simply superb...', '5', 'yes'),
(17, 'Ranveer', 'ranveer.25@hotmail.com', 'It is easy', '4', 'no'),
(18, 'Peter Kennedy', 'peter40@gmail.com', 'The colors are effective ', '3', 'no'),
(19, 'Wally', 'wally.32@gmail.com', 'Wow great site', '5', 'no'),
(20, 'Ishaani', 'ishu.30@hotmail.com', 'Interesting.. ', '5', 'yes'),
(21, 'Test', 'sss.@kk.bb', 'nice', '4', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `salesId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `totalPrice` double NOT NULL,
  `currentCheckout` varchar(3) NOT NULL,
  `creditCardNo` varchar(50) NOT NULL,
  `deliveryAddress` varchar(100) NOT NULL,
  `orderTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `orderStatus` varchar(50) NOT NULL DEFAULT 'Placed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`salesId`, `username`, `totalPrice`, `currentCheckout`, `creditCardNo`, `deliveryAddress`, `orderTime`, `orderStatus`) VALUES
(1, 'Senthuran', 64000, 'NO', '123123', '03, 1/5, 42nd Lane, Colombo 6', '2016-08-16 18:16:44', 'Delivered'),
(2, 'Thamy', 34000, 'NO', '123456', '23, 3/4, Arethusa Lane, Colombo 6', '2016-08-16 18:18:06', 'Delivered'),
(3, 'Sahana', 16000, 'NO', '13579', '53, Hospital Road, Colombo 3', '2016-08-16 18:19:32', 'Delivered'),
(4, 'Shimak', 93000, 'NO', '0246810', '12, Main Road, Borella', '2016-08-16 18:21:02', 'Dispatched'),
(5, 'Thinesh', 22500, 'NO', '25689741', '23, 3/4, Arethusa Lane, Colombo 6', '2016-08-16 18:22:14', 'Dispatched'),
(6, 'Sanjayan', 107000, 'NO', '109876541', '30, 1/5, 42nd Lane, Colombo 6', '2016-08-16 18:23:40', 'Placed'),
(7, 'Senthuran', 52000, 'NO', '123123', '03, 1/5, 42nd Lane, Colombo 6', '2016-08-16 18:26:43', 'Placed'),
(8, 'Thamy', 51000, 'NO', '123456', '23, 3/4, Arethusa Lane, Colombo 6', '2016-08-16 18:32:42', 'Placed'),
(9, 'Sahana', 22500, 'NO', '13579', '53, Hospital Road, Colombo 3', '2016-08-16 18:34:42', 'Placed'),
(10, 'Shimak', 64000, 'NO', '0246810', '12, Main Road, Borella', '2016-08-16 18:39:31', 'Placed'),
(11, 'Senthuran', 26000, 'NO', '123123', '03, 1/5, 42nd Lane, Colombo 6', '2016-08-16 18:41:19', 'Placed'),
(12, 'Thamy', 30000, 'NO', '123456', '23, 3/4, Arethusa Lane, Colombo 6', '2016-08-16 18:42:16', 'Placed'),
(13, 'Sherin', 44000, 'NO', '232323', '20, James Road, Colombo 15', '2016-08-16 19:46:37', 'Dispatched'),
(14, 'Test', 30500, 'NO', '12312356', '20, Somewhere, City', '2016-08-17 17:19:19', 'Dispatched'),
(15, 'Test', 27000, 'NO', '12345', '23,Test Street, City', '2016-08-19 08:07:07', 'Placed'),
(16, 'Senthuran', 15000, 'NO', '1123456', '03, 1/5, 42nd Lane, Colombo 6', '2016-10-28 06:42:07', 'Delivered'),
(17, 'Senthuran', 52000, 'NO', '123412341234', '03, 1/5, 42nd Lane, Colombo 6', '2017-04-05 12:12:10', 'Placed');

-- --------------------------------------------------------

--
-- Table structure for table `pollanswers`
--

CREATE TABLE `pollanswers` (
  `id` int(8) NOT NULL,
  `pid` int(4) NOT NULL,
  `question` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pollanswers`
--

INSERT INTO `pollanswers` (`id`, `pid`, `question`) VALUES
(1, 1, 'Lionel Messi'),
(2, 1, 'Cristiano Ronaldo'),
(3, 1, 'Neymar'),
(4, 1, 'Zlatan Ibrahimovic ');

-- --------------------------------------------------------

--
-- Table structure for table `pollquestions`
--

CREATE TABLE `pollquestions` (
  `id` int(4) NOT NULL,
  `name` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pollquestions`
--

INSERT INTO `pollquestions` (`id`, `name`) VALUES
(1, 'Who will win the FIFA ball on d''or for 2017?');

-- --------------------------------------------------------

--
-- Table structure for table `pollresponses`
--

CREATE TABLE `pollresponses` (
  `id` int(16) NOT NULL,
  `qid` int(8) NOT NULL,
  `user` varchar(50) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `pollresponses`
--

INSERT INTO `pollresponses` (`id`, `qid`, `user`) VALUES
(1, 1, 'Senthuran'),
(2, 1, 'Thamy'),
(3, 2, 'Sahana'),
(4, 4, 'Shimak'),
(5, 2, 'Sanjayan'),
(6, 1, 'Thinesh'),
(7, 3, 'Peter'),
(8, 1, 'Sherin'),
(9, 2, 'Test'),
(10, 1, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` varchar(50) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` double NOT NULL,
  `availableQty` int(11) NOT NULL,
  `productDescription` varchar(1000) NOT NULL DEFAULT 'We are still reviewing this product to ensure reliability when buying online. You can still buy the product if you wish to do so. Thank you for your patience. Check back soon for the description.',
  `productImageLocation` varchar(100) NOT NULL DEFAULT 'Images\\Products\\NA.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `productPrice`, `availableQty`, `productDescription`, `productImageLocation`) VALUES
('PA001', 'Nike Catalyst Ball', 8000, 39, 'The perfect ball to take you all the way. Geometric Precision distributes pressure evenly for consistent, accurate, and powerful strikes.  <br/>  Perfect sphericity allows ball to fly faster, farther, more accurately. Radar technology creates an optimal flicker allowing the player to identify and track the ball.', 'Images\\Products\\Accessories\\PA001.jpg'),
('PA002', 'Pro Ligue 1 Glider Ball', 7500, 22, 'Top match ball made from high-end materials in the cover, backing and bladder to ensure perfect on-field performance.  <br/>  Outer:Thermally bonded seamless surface for a more predictable trajectory, better touch, and minimal water uptake.Made from 100% polyurethane', 'Images\\Products\\Accessories\\PA002.jpg'),
('PA003', 'Ace Goal Keeper Gloves', 4000, 24, 'Removable FingerSave finger spines offer support. Exchangeable wrist control stabilizes and supports the wrist. Special cut to maximize contact. Stretch-strap bandage wrist for custom fit.', 'Images\\Products\\Accessories\\PA003.jpg'),
('PA004', ' Mercurial Shin Guards', 3000, 38, 'The Nike Mercurial Lite Soccer Shin Guards are designed with a tough yet lightweight shell to help guard against the impacts of the game. A breathable, contoured sleeve offers a comfortable, secure fit during intense action.', 'Images\\Products\\Accessories\\PA004.jpg'),
('PB001', 'Adidas Ace Focus', 15000, 33, 'Part two of the new era in adidas history comes in the form of ACE15.1. This is a boot focused toward a staple player on the market, except in a completely new way.', 'Images\\Products\\Boots\\PB001.jpg'),
('PB002', 'Adidas Ace Primeknit', 20000, 21, 'The Primeknit material covers the whole upper of the boot for total 360 degree control allowing players to "boss everyone".A higher Primecut collar matched with a visually prominent Solar Green colorway.', 'Images\\Products\\Boots\\PB002.jpg'),
('PB003', 'Adidas Gloro', 18000, 26, 'Keep your opponents guessing while you keep control in these men''s football boots. They have a K-leather upper with a fold-over tongue and feature a firm ground outsole with a transparent comfort frame that stands out on the pitch.', 'Images\\Products\\Boots\\PB003.jpg'),
('PB004', 'Adidas Messi', 26000, 38, 'In one of the more unusual moves in recent history, Adidas replaced their entire boot line-up for some next level, revolutionary performing boots It provides a dynamic speed feel, while holding a new type of performance for players to check out.', 'Images\\Products\\Boots\\PB004.jpg'),
('PC001', 'Man United Jersey', 4000, 48, 'You are shopping for a genuine Manchester United Adidas home replica shirt.   Red home soccer jersey; V-Neck, short sleeve shirt; Adidas 3-stripes and logo; Printed sponsor logo; 100% polyester', 'Images\\Products\\Clothing\\PC001.jpg'),
('PC002', 'Chelsea Jersey', 4000, 24, 'This football shirt offers a comfortable fit thanks to the classic short sleeve design and ribbed polo collar with front placket. The away jersey features adidas climacool materials to manage the heat and moisture to keep the blues comfortable on the soccer field. ', 'Images\\Products\\Clothing\\PC002.jpg'),
('PC003', 'Liverpool Jersey', 4500, 25, 'Tonal jacquard print with incorporated LIVERPOOL FC design to the front body| Under-arm moisture-wicking mesh panel for breathability and flex fit| Integrated mock collar with heat transfer tipping and mesh insert|  Materials:100% Polyester. ', 'Images\\Products\\Clothing\\PC003.jpg'),
('PC004', 'Arsenal Jersey', 4500, 46, 'The collar is a round neck design which is navy blue with a pointed navy triangle shape at the front.On the right hand side of the Arsenal away shirt there is a navy Puma logo which is pressed onto the away jersey.', 'Images\\Products\\Clothing\\PC004.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productsdummy`
--

CREATE TABLE `productsdummy` (
  `productId` varchar(50) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` double NOT NULL,
  `availableQty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productsdummy`
--

INSERT INTO `productsdummy` (`productId`, `productName`, `productPrice`, `availableQty`) VALUES
('PA001', 'Nike Catalyst Ball', 8000, 39),
('PA002', 'Pro Ligue 1 Glider Ball', 7500, 22),
('PA003', 'Ace Goal Keeper Gloves', 4000, 24),
('PA004', ' Mercurial Shin Guards', 3000, 38),
('PB001', 'Adidas Ace Focus', 15000, 33),
('PB002', 'Adidas Ace Primeknit', 20000, 21),
('PB003', 'Adidas Gloro', 18000, 26),
('PB004', 'Adidas Messi', 26000, 38),
('PC001', 'Man United Jersey', 4000, 48),
('PC002', 'Chelsea Jersey', 4000, 24),
('PC003', 'Liverpool Jersey', 4500, 25),
('PC004', 'Arsenal Jersey', 4500, 46);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `salesId` int(11) NOT NULL,
  `productId` varchar(50) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productQty` int(11) NOT NULL,
  `productPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`salesId`, `productId`, `productName`, `productQty`, `productPrice`) VALUES
(1, 'PB004', 'Adidas Messi', 2, 26000),
(1, 'PA001', 'Nike Catalyst Ball', 1, 8000),
(1, 'PC001', 'Man United Jersey', 1, 4000),
(2, 'PB003', 'Adidas Gloro', 1, 18000),
(2, 'PA001', 'Nike Catalyst Ball', 2, 8000),
(3, 'PC002', 'Chelsea Jersey', 3, 4000),
(3, 'PC001', 'Man United Jersey', 1, 4000),
(4, 'PB002', 'Adidas Ace Primeknit', 3, 20000),
(4, 'PC004', 'Arsenal Jersey', 2, 4500),
(4, 'PA003', 'Ace Goal Keeper Gloves', 6, 4000),
(5, 'PC003', 'Liverpool Jersey', 5, 4500),
(6, 'PB001', 'Adidas Ace Focus', 4, 15000),
(6, 'PC002', 'Chelsea Jersey', 8, 4000),
(6, 'PA002', 'Pro Ligue 1 Glider Ball', 2, 7500),
(7, 'PB002', 'Adidas Ace Primeknit', 2, 20000),
(7, 'PA004', ' Mercurial Shin Guards', 4, 3000),
(8, 'PA002', 'Pro Ligue 1 Glider Ball', 5, 7500),
(8, 'PC004', 'Arsenal Jersey', 3, 4500),
(9, 'PC003', 'Liverpool Jersey', 5, 4500),
(10, 'PA003', 'Ace Goal Keeper Gloves', 4, 4000),
(10, 'PC002', 'Chelsea Jersey', 2, 4000),
(10, 'PB002', 'Adidas Ace Primeknit', 2, 20000),
(11, 'PC002', 'Chelsea Jersey', 5, 4000),
(11, 'PA004', ' Mercurial Shin Guards', 2, 3000),
(12, 'PB001', 'Adidas Ace Focus', 2, 15000),
(13, 'PB001', 'Adidas Ace Focus', 1, 15000),
(13, 'PB001', 'Adidas Ace Focus', 1, 15000),
(13, 'PC002', 'Chelsea Jersey', 2, 4000),
(13, 'PA004', ' Mercurial Shin Guards', 2, 3000),
(14, 'PB001', 'Adidas Ace Focus', 1, 15000),
(14, 'PC001', 'Man United Jersey', 2, 4000),
(14, 'PA002', 'Pro Ligue 1 Glider Ball', 1, 7500),
(15, 'PB001', 'Adidas Ace Focus', 1, 15000),
(15, 'PC002', 'Chelsea Jersey', 2, 4000),
(15, 'PA003', 'Ace Goal Keeper Gloves', 1, 4000),
(16, 'PA002', 'Pro Ligue 1 Glider Ball', 2, 7500),
(17, 'PB004', 'Adidas Messi', 2, 26000);

-- --------------------------------------------------------

--
-- Table structure for table `websiteusers`
--

CREATE TABLE `websiteusers` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `emailAddress` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `websiteusers`
--

INSERT INTO `websiteusers` (`username`, `password`, `fullName`, `address`, `emailAddress`) VALUES
('admin', 'admin', 'System Administrator', '60, Maker, City', 'admin@admin.com'),
('new', '1234', 'New', 'ee', 'se@se.in'),
('Peter', 'peter1234', 'Peter Kennedy', '40, Moor Road, Colombo 6', 'peter40@gmail.com'),
('Sahana', '1234', 'Sahana Sivaraj', '53, Hospital Road, Colombo 3', 'sahana_sivaraj@yahoo.com'),
('Sanjayan', 'sanjayan1234', 'Sanjayan Ambalavanar', '30, 1/5, 42nd Lane, Colombo 6', 'sanjayan1997@gmail.com'),
('Senthuran', '1234', 'Senthuran Ambalavanar', '03, 1/5, 42nd Lane, Colombo 6', 'senthuranrc16@gmail.com'),
('Sherin', '1234', 'Sherin Laavanya', '20, James Road, Colombo 15', 'sherin_laavanya23@hotmail.com'),
('Shimak', '1234', 'Shimak Ahamed', '12, Main Road, Borella', 'shimak2013@gmail.com'),
('Test', '1234', 'Test User', '23,Test Street, City', 'test@test.com'),
('Thamy', '1234', 'Gowthamy Vaseekaran', '23, 3/4, Arethusa Lane, Colombo 6', 'vthamy.20@gmail.com'),
('Thinesh', 'thinesh1234', 'Thinesharan Vaseekaran', '23, 3/4, Arethusa Lane, Colombo 6', 'thinesh91@live.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`salesId`);

--
-- Indexes for table `pollanswers`
--
ALTER TABLE `pollanswers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pollquestions`
--
ALTER TABLE `pollquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pollresponses`
--
ALTER TABLE `pollresponses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `productsdummy`
--
ALTER TABLE `productsdummy`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `websiteusers`
--
ALTER TABLE `websiteusers`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `salesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pollanswers`
--
ALTER TABLE `pollanswers`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pollquestions`
--
ALTER TABLE `pollquestions`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pollresponses`
--
ALTER TABLE `pollresponses`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
