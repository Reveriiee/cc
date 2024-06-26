-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 04:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cookiecrumb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `about_us_id` int(11) NOT NULL,
  `about_us_image` text NOT NULL,
  `about_us_desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_us_id`, `about_us_image`, `about_us_desc`) VALUES
(1, 'various-indonesian-pastry-jar (1) (1) 1.png', 'Kami hadirkan kelezatan kue kering homemade dengan cita rasa yang autentik dan khas. Setiap gigitan mengungkapkan sentuhan cinta dan keterampilan tangan yang kami tanamkan dalam setiap kreasi.');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `cart_status` tinyint(4) NOT NULL,
  `insert_date` datetime NOT NULL,
  `last_update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `herosection`
--

CREATE TABLE `herosection` (
  `banner_id` int(11) NOT NULL,
  `text1` varchar(100) NOT NULL,
  `text2` varchar(100) NOT NULL,
  `text3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `herosection`
--

INSERT INTO `herosection` (`banner_id`, `text1`, `text2`, `text3`) VALUES
(1, 'Ingin cari kue kering yang lezat?', 'Mau makan kue kering dengan harga terjangkau?', 'Lagi cari camilan kue kering yang praktis?');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` tinyint(4) NOT NULL,
  `total_price` int(11) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `order_date`, `order_status`, `total_price`, `createdAt`) VALUES
(1, 1, '2024-06-13', 2, 50000, '2024-06-11 18:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `payment_step` varchar(200) NOT NULL,
  `insert_date` datetime NOT NULL,
  `lastUpdate_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `order_id`, `payment_type`, `payment_step`, `insert_date`, `lastUpdate_date`) VALUES
(1, 1, 'bca', '1. pesan\r\n2. bayar', '2024-06-11 18:50:23', '2024-06-11 18:50:23');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_recommend` tinyint(1) NOT NULL,
  `insert_date` datetime NOT NULL,
  `last_update_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_image`, `product_name`, `product_desc`, `product_price`, `product_recommend`, `insert_date`, `last_update_time`) VALUES
(1, 'kue_nastar(1).jpg', 'kue nastar', 'Kue nastar kami menawarkan perpaduan sempurna antara adonan lembut dan isian selai nanas yang manis. Dibuat dengan bahan-bahan pilihan dan resep terpercaya, kue ini cocok untuk dinikmati di berbagai kesempatan. Rasakan kelezatan klasik kue nastar yang selalu menjadi favorit banyak orang.', 80000, 1, '2024-06-04 14:19:50', '2024-06-04 14:19:50'),
(2, 'kue_sagukeju.jpg', 'kue sagu keju', 'Kue sagu keju kami menghadirkan kombinasi yang sempurna antara kelembutan sagu dan kelezatan keju yang meleleh di lidah. Tiap gigitan memancarkan aroma menggoda dan rasa yang menggugah selera, menciptakan pengalaman rasa yang tak terlupakan.', 60000, 1, '2024-06-04 14:19:50', '2024-06-04 14:19:50'),
(3, 'kue_kacang(1).jpg', 'kue kacang', 'Kue kacang kami adalah perpaduan yang sempurna antara kelembutan kacang yang renyah dan cita rasa manis yang lezat. Menghadirkan kenangan manis dari setiap momen bersama keluarga dan teman.', 65000, 1, '2024-06-04 14:29:48', '2024-06-04 14:29:48'),
(4, 'kue_putrisalju.jpg', 'kue putri salju', 'Kue putri salju kami memiliki tekstur lembut yang dilapisi gula halus, memberikan rasa manis yang pas di setiap gigitan. Dibuat dengan bahan-bahan berkualitas dan resep yang teruji, kue ini cocok untuk menemani berbagai momen spesial Anda. Nikmati kelembutan dan kesederhanaan rasa dari kue putri salju kami yang selalu jadi favorit.', 62000, 0, '2024-06-04 14:29:48', '2024-06-04 14:29:48'),
(7, 'kue_kastengel.jpg', 'Kue Kastengel', 'Kastengel kami adalah kue keju gurih dengan tekstur renyah yang dibuat dari bahan-bahan berkualitas. Setiap gigitan memberikan rasa keju yang kaya dan memuaskan. Cocok untuk dinikmati di berbagai momen spesial. Rasakan kenikmatan sederhana dari kastengel kami yang selalu menjadi favorit.', 70000, 1, '2024-06-22 06:20:30', '2024-06-22 06:20:30'),
(8, 'kue_semprit.jpg', 'Kue Semprit', 'Kue semprit kami memiliki tekstur renyah dan rasa manis yang pas. Dibuat dari bahan-bahan pilihan dengan bentuk cantik yang khas, kue ini cocok untuk menemani berbagai momen spesial. Nikmati kelezatan sederhana kue semprit yang selalu jadi favorit keluarga', 65000, 0, '2024-06-22 06:20:30', '2024-06-22 06:20:30'),
(9, 'kue_chocochips.jpg', 'Kue Choco Chips', 'Kue choco chips kami menawarkan tekstur renyah dengan potongan cokelat yang melimpah di setiap gigitan. Dibuat dari bahan-bahan berkualitas, kue ini menghadirkan rasa manis dan cokelat yang sempurna. Cocok dinikmati kapan saja.', 63000, 0, '2024-06-22 06:26:30', '2024-06-22 06:26:30'),
(10, 'kue_lidahkucing.jpg', 'Kue Lidah Kucing', 'Kue lidah kucing kami memiliki tekstur yang tipis dan renyah dengan rasa manis yang pas. Dibuat dari bahan-bahan pilihan, kue ini cocok untuk menemani waktu santai Anda.', 68000, 0, '2024-06-22 06:26:30', '2024-06-22 06:26:30'),
(11, 'kue_thumbprint.jpg', 'Kue Thumbprint', 'Kue thumbprint strawberry kami memiliki tekstur lembut dengan isian selai stroberi segar di tengahnya. Dibuat dari bahan-bahan berkualitas, kue ini memberikan kombinasi manis dan asam yang sempurna, cocok untuk dinikmati kapan saja.', 64000, 0, '2024-06-22 06:44:46', '2024-06-22 06:44:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `password` char(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `insert_date` datetime NOT NULL,
  `last_update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `customer_name`, `email`, `phoneNumber`, `password`, `alamat`, `insert_date`, `last_update_date`) VALUES
(1, 'tes123', 'tes123@gmail.com', '0823', '123', 'jl galunggung', '2024-06-08 23:34:24', '2024-06-08 23:34:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_us_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `herosection`
--
ALTER TABLE `herosection`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `fk_order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `herosection`
--
ALTER TABLE `herosection`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `fk_order_id` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
