-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 19, 2023 at 08:43 AM
-- Server version: 8.0.33-cll-lve
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anandcho_notes`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax`
--

CREATE TABLE `ajax` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `c`
--

CREATE TABLE `c` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cpp`
--

CREATE TABLE `cpp` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `css`
--

CREATE TABLE `css` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `figma`
--

CREATE TABLE `figma` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flutter`
--

CREATE TABLE `flutter` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

CREATE TABLE `html` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `javascript`
--

CREATE TABLE `javascript` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mysql`
--

CREATE TABLE `mysql` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nextjs`
--

CREATE TABLE `nextjs` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nodejs`
--

CREATE TABLE `nodejs` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `php_PTR`
--

CREATE TABLE `php_PTR` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `php_PTR`
--

INSERT INTO `php_PTR` (`id`, `unique_id`, `heading`, `code`) VALUES
('isset_function', 1, 'Isset function ', '<p>The isset function in PHP is used to determine whether a variable is set or not. A variable is considered as a set variable if it has a value other than NULL. In other words, you can also say that the isset function is used to determine whether you have used a variable in your code or not before.</p>\r\n<code>\r\n if(isset($_POST[\'submit\'])){}\r\n</code>'),
('random_value_generator_function', 2, 'Random value generator function', '<p>It generate random value. It contains two parameter which provide nothing but the range between which random function will generate the value</p>\r\n<code>\r\n  rand(from, to);\r\n</code>'),
('str_ireplace_function', 4, 'str_ireplace function', '<p>It is used to replace string including white space, special character etc. It can replace white space with underscore or anything like that. It is case insensitive</p>\r\n<code>\r\n  str_<span class=\"redText\">i</span>replace(\"Replace this word\", \"With this word\", \"In this string\");\r\n</code>\r\n<p>A variable can also be given instead of string in the last parameter. It is case insensitive that <span class=\"redText\">i</span> means insensitive</p>\r\n'),
('str_replace_function', 3, 'str_replace function', '<p>It is used to replace string including white space, special character etc. It can replace white space with underscore or anything like that. It is case sensitive</p>\r\n<code>\r\nstr_replace(\"Replace this word\", \"With this word\", \"In this string\");\r\n</code>\r\n<p>A variable can also be given instead of string in the last parameter.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `reactjs`
--

CREATE TABLE `reactjs` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `uiux`
--

CREATE TABLE `uiux` (
  `id` varchar(400) NOT NULL,
  `unique_id` int NOT NULL,
  `heading` text NOT NULL,
  `code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax`
--
ALTER TABLE `ajax`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `c`
--
ALTER TABLE `c`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `cpp`
--
ALTER TABLE `cpp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `css`
--
ALTER TABLE `css`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `figma`
--
ALTER TABLE `figma`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `flutter`
--
ALTER TABLE `flutter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `javascript`
--
ALTER TABLE `javascript`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `mysql`
--
ALTER TABLE `mysql`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `nextjs`
--
ALTER TABLE `nextjs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `nodejs`
--
ALTER TABLE `nodejs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `php_PTR`
--
ALTER TABLE `php_PTR`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `reactjs`
--
ALTER TABLE `reactjs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- Indexes for table `uiux`
--
ALTER TABLE `uiux`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax`
--
ALTER TABLE `ajax`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `c`
--
ALTER TABLE `c`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cpp`
--
ALTER TABLE `cpp`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `css`
--
ALTER TABLE `css`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `figma`
--
ALTER TABLE `figma`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `flutter`
--
ALTER TABLE `flutter`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `html`
--
ALTER TABLE `html`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `javascript`
--
ALTER TABLE `javascript`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mysql`
--
ALTER TABLE `mysql`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nextjs`
--
ALTER TABLE `nextjs`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nodejs`
--
ALTER TABLE `nodejs`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `php_PTR`
--
ALTER TABLE `php_PTR`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reactjs`
--
ALTER TABLE `reactjs`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uiux`
--
ALTER TABLE `uiux`
  MODIFY `unique_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
