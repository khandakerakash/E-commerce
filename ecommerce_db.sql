-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2016 at 04:03 PM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `pro_id` int(10) NOT NULL,
  `ip_address` varchar(200) NOT NULL,
  `pro_quantity` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`pro_id`, `ip_address`, `pro_quantity`) VALUES
(1, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'APPLE'),
(2, 'MOTOROLA'),
(3, 'LENEVO'),
(4, 'HP'),
(5, 'SAMSUNG'),
(6, 'DELL'),
(7, 'MICROSOFT'),
(8, 'OOP');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'COMPUTERS'),
(2, 'LAPTOPS'),
(3, 'TABLETS'),
(4, 'IPAD'),
(5, 'MOBILES'),
(6, 'CAMERAS');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 2, 1, 'Apple Mac Book Pro', 1079, '<p>The new MacBook Pro elevates the notebook to a whole new level of performance and portability.</p>', 'macbook_mac_og.jpg', 'Apple Mac Book Pro, New, Mac Pro'),
(2, 5, 1, 'iPhone-7', 479, '<p>iPhone 7 dramatically improves the most important aspects of the iPhone experience. It introduces advanced new camera systems.</p>', 'Iphone-7.jpg', 'iPhone-7, iPhone-7s, iPhone-7 s plus, Apple New Phone'),
(3, 2, 4, 'HP Spectre', 1020, '<p>This is design and technology taken to a whole new level. Artisan materials and striking craftsmanship create an experience unlike anything else.</p>', 'HP Spectre.jpg', 'HP Spectre, New HP Laptop, Spectre'),
(4, 2, 3, 'Lenovo Yoga 710', 790, '<p>Form meets function with the 35.56cm (14) Yoga 710. An innovative antenna hinge provides stronger, more stable Wi-Fi and more.</p>', 'lenovo-laptop-yoga.png', 'Lenovo Yoga 710, New Yoga, Lenovo Laptop'),
(5, 5, 3, 'Zuk Z1 Smartphone', 379, '<p>Sporting a reliable and powerful operating system and processor, the Lenovo Zuk Z1 is the smart choice.</p>', 'lenovo-smartphone.png', 'Zuk Z1 Smartphone, New Lanevo Phone'),
(6, 2, 4, 'Notebook9 Marquee 2', 457, '<p>This is nice Notebook. It is so faster. Ram paerformance is better.</p>', 'Notebook9_Marquee_2.png', 'Notebook9 Marquee 2, New, Notebook9'),
(7, 2, 4, 'HP Inspiron', 567, '<p>This is very nice laptiop.</p>', 'hp-pav-laptop.jpg', 'HP Laptop, New'),
(8, 2, 4, 'HP Inspiron', 567, '<p>This is very nice laptiop.</p>', 'hp-pav-laptop.jpg', 'HP Laptop, New'),
(9, 2, 1, 'Apple MAC Book Pro', 1309, '<p>Apple Mac Book Pro\n\nThe new MacBook Pro elevates the notebook to a whole new level of performance and portability.</p>', 'macbook_mac.png', 'Apple MAC Book Pro, New, Apple, Pro'),
(10, 5, 1, 'iPhone 6s Plus', 434, '<p>Available space is less and varies due to many factors. A standard configuration uses approximately 4GB to 6GB of space (including iOS and built-in apps) depending on the model and settings.</p>', 'iPhone-6s.jpg', 'Apple Phone, iPhone 6s Plus, 6s Plus, New'),
(11, 5, 5, 'Galaxy S6', 330, '<p>Inspired by the works of glass blowers and artisan metal-smiths, the Samsung Galaxy S6 represents a unique fusion of glass moulding and metal sculpturing techniques.</p>', 'Galaxy S6.jpg', 'Galaxy S6, New S6, Samsung Mobile'),
(12, 5, 5, 'Galaxy S7', 543, '<p>Running on powerful processors, Galaxy S7 and S7 edge run smooth and fast, handling every bit of the additional data on your microSD card with confidence. And even with the bigger battery, charging&rsquo;s still fast.</p>', 'galaxy-s7.png', 'Galaxy S7, New S7, Samsung Mobile'),
(13, 3, 7, 'Surface 2', 449, '<p>&nbsp;At just under 1.5lbs, and pre-loaded with Office 2013 RT,1 Surface 2 lets you carry less while you do more. Also available with AT&amp;T 4G LTE.2</p>', 'surface-2.jpg', 'Surface 2, Microsoft Surface 2, New Surface 2'),
(14, 5, 7, 'Lumia 950 XL', 324, '<p>With a stunning 5.7&rdquo; Quad HD display and a powerful octa-core processor, it&rsquo;s the Lumia you&rsquo;ve been waiting for. Get the phone that works like your PC and push the limits of what&rsquo;s possible.</p>', 'Lumia 950 XL.jpg', 'Lumia 950 XL, Microsoft Lumia 950 XL, 950 XL, Lumia 950, New Lumia'),
(15, 5, 8, 'Oppo F1 Plus', 235, '<p>Phase detection autofocus, LED flash, f/2.2 aperture, auto face detection, HDR, panorama modePhase detection autofocus, LED flash, f/2.2 aperture, auto face detection, HDR, panorama mode. 16 Megapixel (f/2.0, 4x incoming light, 1/3.1 inch image sensor, beautify 4.0, selfie panorama)</p>', 'Oppo-F1-Plus.jpg', 'Oppo F1 Plus, New Oppo F1, F1 Plus'),
(16, 4, 1, 'iPad Pro', 567, '<p>Your iPad comes with powerful apps for the things you do every day. The App Store has a million more apps specifically designed for the big, beautiful Retina display of your iPad. Whatever you love to do, there&rsquo;s an iPad app to help you do it.</p>', 'iPad Pro.JPG', 'iPad Pro, Apple iPad, iPad New'),
(17, 1, 6, 'Dell Inspiron Signature Edition Desktop', 649, '<p>From creating multimedia masterpieces to blasting away on the latest shooter games, the Dell Inspiron has the power and speed to handle it all. Its 6th Gen Intel Core i5 processor and 12GB of memory bring fantastic multitasking speed, and its compact frame fits right in wherever you place it.</p>', 'Dell Inspiron.jpg', 'Dell Inspiron,  Inspiron Signature Edition,  Desktop, Dell Inspiron New');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
