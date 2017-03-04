-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 04, 2017 at 04:46 AM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: chantry_island
--

-- --------------------------------------------------------

--
-- Table structure for table tbl_images
--

CREATE TABLE tbl_images (
  images_id smallint(5) UNSIGNED NOT NULL,
  images_thumb varchar(50) NOT NULL DEFAULT 'noThumb.jpg',
  images_image varchar(50) NOT NULL DEFAULT 'noImage.jpg',
  images_title varchar(150) NOT NULL,
  images_desc text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table tbl_images
--

INSERT INTO tbl_images (images_id, images_thumb, images_image, images_title, images_desc) VALUES
(1, 'arial-thumb.jpg', 'arial.jpg', 'Lighthouse arial', 'An arial shot of our beautiful lighthouse and beach front.'),
(2, 'chantry-island-base-thumb.jpg', 'chantry-island-base.jpg', 'The Chantry Tour Base', 'Our tour base and gift shop is where you will find all your needed info on Chantry Island.'),
(3, 'chantry-island-thumb.jpg', 'chantry-island.jpg', 'Chantry Island', 'A beautiful long shot of our gorgeous island.'),
(4, 'island-flower-thumb.jpg', 'island-flower.jpg', 'Chantry Rose', 'Chantry Island is filled with beautiful scenery and forestry.'),
(5, 'peerless-2-boat-thumb.jpg', 'peerless-2-boat.jpg', 'The Peerless 2 Tour Boat', 'Our new and improved tour boat.'),
(6, 'peerless-thumb.jpg', 'peerless.jpg', 'Peerless in Action', 'Our original Peerless tour boat in action.'),
(7, 'peerless-tour-boat-thumb.jpg', 'peerless-tour-boat.jpg', 'The Peerless Tour Boat', 'Our Original Peerless tour boat, which was refurbished from the original tour boat on the island.'),
(8, 'top-34-thumb.jpg', 'top-34.jpg', 'Dining Room', 'Our dining room is remodelled after the original with all refurbished furniture.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_images
--
ALTER TABLE tbl_images
  ADD PRIMARY KEY (images_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_images
--
ALTER TABLE tbl_images
  MODIFY images_id smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
