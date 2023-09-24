-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2023 at 02:33 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diett`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE `breakfast` (
  `name` varchar(255) NOT NULL,
  `veg` int(255) NOT NULL,
  `calories` int(255) NOT NULL,
  `bp` int(255) NOT NULL,
  `diabetes` int(255) NOT NULL,
  `gas` int(255) NOT NULL,
  `kidneystone` int(255) NOT NULL,
  `heartdisease` int(255) NOT NULL,
  `ibs` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`name`, `veg`, `calories`, `bp`, `diabetes`, `gas`, `kidneystone`, `heartdisease`, `ibs`) VALUES
('Idli sambar', 0, 150, 0, 0, 0, 0, 0, 0),
('Bread pakoda', 0, 200, 1, 1, 1, 0, 1, 1),
('Medu vada', 0, 250, 1, 0, 1, 1, 1, 1),
('Rava idli ', 0, 100, 0, 0, 0, 0, 0, 0),
('Rava upma ', 0, 250, 0, 0, 0, 0, 0, 0),
('Sada dosa', 0, 120, 0, 0, 0, 0, 0, 0),
('Masala dosa', 0, 250, 0, 0, 0, 0, 0, 0),
('Moong daal chila', 0, 80, 0, 0, 0, 0, 0, 0),
('Poha', 0, 300, 0, 0, 0, 0, 0, 0),
('Upma', 0, 250, 0, 0, 0, 0, 0, 0),
('Shira', 0, 250, 0, 0, 0, 0, 0, 0),
('Uttapa ', 0, 200, 0, 0, 0, 0, 0, 0),
('Oats dosa', 0, 80, 0, 0, 0, 0, 0, 0),
('Oats', 0, 150, 0, 0, 0, 0, 0, 0),
('Oats upma ', 0, 200, 0, 0, 0, 0, 0, 0),
('Overnight oats', 0, 270, 0, 0, 0, 0, 0, 0),
('Sprouted moong salad ', 0, 200, 0, 0, 0, 0, 0, 0),
('Egg bhurji 2 eggs', 1, 216, 0, 0, 1, 0, 0, 1),
('Chicken soup ', 1, 200, 0, 0, 1, 0, 0, 1),
('Chicken tikka', 1, 222, 0, 0, 1, 0, 0, 1),
('Masala omelette', 1, 213, 0, 0, 1, 0, 0, 0),
('Fish curry', 1, 243, 0, 0, 1, 0, 1, 1),
('Grilled chicken sandwich', 1, 416, 0, 0, 1, 0, 1, 1),
('Oatmeal with berries', 0, 240, 0, 0, 0, 0, 0, 0),
('Oatmeal with milk berries', 0, 285, 0, 0, 0, 0, 0, 0),
('Smoothie bowl', 0, 285, 0, 0, 0, 0, 0, 0),
('Paratha', 0, 200, 0, 1, 1, 0, 1, 0),
('Thepla', 0, 180, 0, 0, 0, 0, 0, 0),
('Vada pav', 0, 250, 1, 1, 1, 1, 1, 1),
('Misal pav', 0, 400, 1, 1, 1, 0, 1, 1),
('Vegetable omelette ', 0, 212, 0, 0, 0, 0, 0, 0),
('Sabudana ', 0, 350, 0, 0, 0, 0, 0, 0),
('Aloo Paratha', 0, 30, 0, 1, 1, 0, 1, 1),
('Panner Paratha', 0, 300, 0, 1, 1, 0, 1, 1),
('Methi Paratha', 0, 200, 0, 1, 1, 0, 1, 1),
('Palak Paratha', 0, 200, 0, 1, 1, 0, 1, 1),
('Sandwich', 0, 200, 0, 1, 1, 0, 1, 1),
('Puri bhaji', 0, 400, 1, 1, 1, 1, 1, 1),
('Grilled Cheese Sandwich', 0, 400, 0, 1, 1, 0, 1, 1),
('Peanut Butter sandwich ', 0, 450, 0, 0, 0, 0, 0, 0),
('Chole bhature', 0, 800, 1, 1, 1, 1, 1, 1),
('Aloo paratha with yoghurt', 0, 400, 0, 1, 1, 0, 1, 1),
('Channa masala with naan', 0, 750, 0, 0, 1, 0, 0, 1),
('Dal makhani with roti', 0, 550, 0, 0, 1, 0, 0, 1),
('Panner bhurji with rice', 0, 650, 0, 0, 1, 0, 0, 1),
('Rajma with naan', 0, 500, 0, 0, 1, 0, 0, 1),
('Panner makhani with rice', 0, 500, 0, 0, 1, 0, 0, 1),
('Egg omlette with toast ', 1, 500, 0, 0, 0, 0, 0, 0),
('mutton kheema with paratha ', 1, 550, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `diethistory`
--

CREATE TABLE `diethistory` (
  `username` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `meal_type` varchar(255) NOT NULL,
  `food_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `name` varchar(255) NOT NULL,
  `veg` int(11) NOT NULL,
  `calorie` int(11) NOT NULL,
  `bp` int(11) NOT NULL,
  `diabetes` int(11) NOT NULL,
  `gas` int(11) NOT NULL,
  `kidneystone` int(11) NOT NULL,
  `heartdiesease` int(11) NOT NULL,
  `ibs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`name`, `veg`, `calorie`, `bp`, `diabetes`, `gas`, `kidneystone`, `heartdiesease`, `ibs`) VALUES
('Grilled panner with mixed veggies', 0, 230, 0, 0, 1, 0, 0, 1),
('Bhakri and sabzi', 0, 300, 0, 0, 0, 0, 0, 0),
('Moong daal khichdi', 0, 200, 0, 0, 0, 0, 0, 0),
('Methi sabzi with bhakri', 0, 250, 0, 1, 0, 0, 0, 0),
('Sabudana khichdi', 0, 350, 0, 0, 1, 0, 0, 1),
('Chana masala with brown rice', 0, 290, 0, 0, 1, 0, 0, 1),
('Baked sweet potatoes with veggies', 0, 170, 1, 1, 0, 0, 0, 0),
('Paneer roasted veggies', 0, 300, 0, 0, 0, 0, 0, 1),
('Spinach & mushroom omlette', 0, 285, 1, 1, 1, 0, 0, 1),
('Roti sabzi', 0, 200, 0, 0, 0, 0, 0, 1),
('Grilled fish with salad', 1, 250, 0, 0, 1, 0, 1, 0),
('Egg bhurji with roti', 1, 250, 0, 0, 1, 0, 0, 0),
('Chicken vegtable soup with wheat bread', 1, 220, 0, 1, 1, 0, 0, 0),
('Fish curry with rice', 1, 250, 0, 1, 1, 0, 0, 0),
('Egg curry with chapati', 1, 350, 0, 0, 1, 0, 0, 0),
('Grilled or baked fish', 1, 300, 0, 1, 1, 0, 0, 0),
('Panner tikka masala with naan', 0, 620, 0, 0, 1, 0, 1, 1),
('Chickpea with rice', 0, 500, 0, 0, 1, 0, 1, 1),
('Panner makhnai with rice', 0, 450, 0, 0, 1, 0, 1, 1),
('Aloo paratha', 0, 300, 0, 0, 1, 0, 1, 1),
('Banana shake', 0, 300, 1, 1, 0, 0, 1, 0),
('Pulao ', 0, 250, 0, 0, 0, 0, 1, 0),
('Palak paneer rice', 0, 400, 0, 0, 1, 0, 1, 1),
('Dal makhani with rice', 0, 500, 0, 0, 1, 0, 1, 1),
('Chicken biryani ', 1, 500, 0, 0, 1, 0, 1, 1),
('Mutton curry with naan ', 1, 440, 0, 1, 1, 1, 1, 1),
('Channa masala with naan', 0, 580, 0, 0, 1, 1, 1, 1),
('Rajm chawal', 0, 450, 0, 0, 1, 0, 1, 1),
('Mutton curry with rice', 1, 440, 0, 0, 1, 1, 1, 1),
('Litti chikha and muton curry', 1, 600, 0, 1, 1, 1, 1, 1),
('Paneer tikka masala with naan ', 0, 630, 0, 1, 1, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `name` varchar(255) NOT NULL,
  `veg` int(11) NOT NULL,
  `calories` int(11) NOT NULL,
  `bp` int(11) NOT NULL,
  `diabetes` int(11) NOT NULL,
  `gas` int(11) NOT NULL,
  `kidneystone` int(11) NOT NULL,
  `heartdiesease` int(11) NOT NULL,
  `ibs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`name`, `veg`, `calories`, `bp`, `diabetes`, `gas`, `kidneystone`, `heartdiesease`, `ibs`) VALUES
('Chickpea salad', 0, 223, 0, 0, 1, 0, 0, 1),
('Vegetable curry with chapati ', 0, 160, 0, 0, 0, 0, 0, 0),
('Grilled vegetable wrap', 0, 260, 0, 0, 0, 0, 0, 0),
('Baigan bharta', 0, 300, 0, 0, 0, 0, 0, 0),
('Chana dal', 0, 350, 0, 0, 1, 0, 0, 1),
('Dal pitha', 0, 250, 0, 0, 1, 0, 0, 1),
('Lauki chana dal with rice', 0, 300, 0, 0, 0, 0, 0, 0),
('Sambar rice', 0, 250, 0, 0, 1, 0, 0, 1),
('Chicke curry rice', 0, 334, 0, 0, 1, 1, 1, 1),
('Grilled fish with mixed vegetables', 1, 160, 0, 0, 1, 1, 1, 1),
('Fish curry with brown rice', 1, 281, 0, 0, 1, 1, 1, 1),
('Grilled chicken salad', 1, 263, 0, 0, 1, 1, 1, 1),
('Chicken bhunna masala', 1, 350, 0, 0, 1, 1, 1, 1),
('Lemon rice', 0, 250, 0, 0, 1, 0, 0, 1),
('Dal rice', 0, 360, 0, 0, 1, 0, 0, 1),
('Paneer makhani rice', 0, 620, 0, 0, 1, 0, 0, 1),
('Masala dosa with sambar', 0, 430, 0, 0, 0, 0, 0, 0),
('Rajma chawal', 0, 480, 0, 0, 1, 0, 0, 1),
('Palak paneer with roti', 0, 490, 0, 0, 0, 0, 0, 0),
('Vegetable biryani', 0, 400, 0, 1, 1, 1, 1, 1),
('Litti chokha', 0, 400, 0, 1, 0, 0, 0, 1),
('Sattu paratha', 0, 300, 0, 1, 0, 0, 0, 1),
('Chana dal khichdi', 0, 450, 0, 0, 0, 0, 0, 0),
('Sabzi pulao', 0, 400, 0, 0, 0, 0, 0, 0),
('Chicken biryani', 1, 580, 0, 1, 1, 1, 1, 1),
('Chicken tikka masla with rice', 1, 550, 1, 1, 1, 1, 1, 1),
('Egg fried rice', 1, 450, 0, 0, 1, 1, 0, 1),
('Chicken fried rice', 1, 400, 0, 0, 1, 1, 1, 1),
('Non veg thali', 1, 1350, 0, 1, 1, 1, 1, 1),
('Thalipeeth', 0, 350, 0, 0, 0, 1, 0, 1),
('Dal tadka with rice', 0, 400, 0, 0, 1, 0, 0, 1),
('Veg thali', 0, 700, 0, 1, 1, 1, 0, 1),
('Veg biryani', 0, 500, 0, 1, 1, 1, 1, 1),
('Chicken curry with chapati', 1, 650, 1, 1, 1, 1, 1, 1),
('palak paneer rice', 0, 350, 0, 0, 0, 0, 0, 0),
('Mutton stew', 1, 500, 1, 1, 1, 1, 1, 1),
('Pav bhaji', 0, 400, 1, 1, 1, 1, 1, 1),
('Masoor dal rice', 0, 400, 0, 0, 0, 1, 0, 0),
('Tomato rice', 0, 250, 0, 0, 1, 0, 0, 1),
('Rasam with roti', 0, 150, 0, 0, 0, 0, 0, 1),
('Batata vada with chapati', 0, 350, 1, 1, 1, 0, 1, 1),
('Chicke biryani', 1, 650, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `name` varchar(255) NOT NULL,
  `veg` int(11) NOT NULL,
  `calorie` int(11) NOT NULL,
  `bp` int(11) NOT NULL,
  `diabetes` int(11) NOT NULL,
  `gas` int(11) NOT NULL,
  `kidneystone` int(11) NOT NULL,
  `heartdiesease` int(11) NOT NULL,
  `ibs` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`name`, `veg`, `calorie`, `bp`, `diabetes`, `gas`, `kidneystone`, `heartdiesease`, `ibs`) VALUES
('Sabudana vada', 0, 120, 0, 0, 1, 0, 0, 1),
('Kothimbir vada', 0, 80, 0, 0, 1, 0, 0, 1),
('Batata vada', 0, 100, 1, 0, 1, 0, 0, 1),
('Medu vada', 0, 100, 0, 0, 1, 0, 0, 1),
('Poha chivda', 0, 130, 0, 0, 1, 0, 0, 1),
('Uthappam', 0, 200, 0, 0, 0, 0, 0, 0),
('Kanda poha', 0, 250, 0, 0, 0, 0, 0, 0),
('Misal pav', 0, 400, 1, 1, 1, 0, 1, 1),
('Peanut butter with sandwhich', 0, 450, 0, 0, 0, 0, 0, 1),
('Vegetable utthapam', 0, 280, 0, 0, 0, 0, 0, 0),
('Channa chat', 0, 310, 0, 1, 0, 0, 0, 0),
('Panner tikka ', 0, 250, 0, 0, 1, 1, 0, 0),
('Sweet potata chat', 0, 210, 1, 1, 1, 0, 0, 1),
('Chicken tikka', 1, 140, 0, 1, 1, 1, 1, 1),
('Chicken keema samosa', 1, 250, 0, 1, 1, 1, 1, 1),
('Mutton kheema', 1, 300, 0, 1, 1, 1, 1, 1),
('Fish cutlets', 1, 200, 0, 1, 1, 1, 1, 1),
('Chicken sandwhich', 1, 190, 0, 1, 1, 1, 1, 1),
('Grilled chicken skewers ', 1, 300, 0, 1, 1, 1, 1, 1),
('Mutton keema samosa', 1, 350, 0, 1, 1, 1, 1, 1),
('Sprout salad', 0, 150, 0, 1, 0, 0, 0, 0),
('Baked litti', 0, 150, 0, 1, 0, 0, 0, 0),
('Seekh kebab', 1, 250, 1, 0, 0, 1, 0, 1),
('Kebab', 1, 200, 1, 0, 0, 1, 0, 1),
('Sattu drink', 0, 150, 0, 1, 0, 0, 0, 0),
('Chicken lettuce wrap', 1, 270, 0, 0, 1, 0, 0, 1),
('Crispy chicken', 1, 250, 0, 0, 1, 1, 1, 1),
('Egg salad', 1, 185, 0, 0, 0, 0, 0, 1),
('Egg salad cucumber', 1, 195, 0, 0, 0, 0, 0, 1),
('Baked fish fingers', 1, 200, 0, 0, 0, 1, 0, 1),
('Prawns cutlets', 1, 200, 0, 0, 0, 1, 0, 1),
('Idli sambar', 0, 70, 0, 0, 0, 0, 0, 0),
('Dosa', 0, 120, 0, 0, 0, 0, 0, 0),
('Masala dosa', 0, 150, 0, 1, 0, 0, 0, 0),
('kachori', 0, 150, 1, 1, 0, 0, 0, 1),
('Dhokla', 0, 100, 0, 0, 0, 0, 0, 0),
('Kanda bhajiya', 0, 200, 0, 0, 1, 0, 0, 1),
('Aloo bhajiya', 0, 200, 0, 1, 1, 0, 0, 1),
('Jalebi fafda', 0, 350, 1, 1, 0, 0, 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
