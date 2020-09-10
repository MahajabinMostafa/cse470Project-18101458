-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2015 at 05:57 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `www_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `pass` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pass`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `book_title` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_author` varchar(60) COLLATE latin1_general_ci DEFAULT NULL,
  `book_image` varchar(40) COLLATE latin1_general_ci DEFAULT NULL,
  `book_descr` text COLLATE latin1_general_ci,
  `book_price` decimal(6,2) NOT NULL,
  `genreid` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_isbn`, `book_title`, `book_author`, `book_image`, `book_descr`, `book_price`, `genreid`) VALUES
('978-4-06-384591-4', 'Attack On Titan VOL.6', 'Hajime Isayama', 'attack_on_titan.jpg', 'In this post-apocalytpic sci-fi story, humanity has been devastated by the bizarre, giant humanoids known as the Titans. Little is known about where they came from or why they are bent on consuming mankind. Seemingly unintelligent, they have roamed the world for years, killing everyone they see. For the past century, what''s left of man has hidden in a giant, three-walled city. People believe their 50-meter-high walls will protect them from the Titans, but the sudden appearance of an immense Titan is about to change everything', '585.00', 1),
('978-4-08-873435-4', 'Bleach 3-in1 edition (Vol 8, 9, 10)', 'Tite Kubo', 'bleach.jpg', 'Where Hollows Fear to Tread Contains volumes 7, 8 and 9 of Bleach! Rukia Kuchiki, the ex-Soul Reaper responsible for Ichigo''s transformation, is on the lam. \r\n\r\n Her brethren at the Soul Society are quite displeased with the fact that she transferred the powers of a Soul Reaper to a human and have dispatched two of their strongest agents to neutralize the situation. Their mission is twofold: to return Rukia to the Soul Society so that she may pay for her crime and to deal with Ichigo--permanently. But an unlikely third party is standing in their way: Uryu Ishida, the Quincy!', '770.00', 1),
('978-4-08-846818-1', 'Ao Haru Ride VOL.5', 'Io Sakisaka', 'ao_haru_ride.jpg', 'Futaba Yoshioka thought all boys were loud and obnoxious until she met Kou Tanaka in junior high. But as soon as she realized she really liked him, he had already moved away because of family issues. Now, in high school, Kou has reappeared, but is he still the same boy she fell in love with. \r\n\r\nFutaba Yoshioka has encountered her first love again in high school, but he seems different from the boy she once knew. Kou asks Futaba to go on a date with him to the summer festival. But as the two grow closer, fellow student Toma Kikuchi sets his sights on Futaba.', '680.00', 2),
('978-4-08-880153-7', 'Haikyuu!! VOL.12', 'Haruichi Furudate', 'haikyuu.jpg', 'Ever since he saw the legendary player known as "the Little Giant" compete at the national volleyball finals, Shoyo Hinata has been aiming to be the best volleyball player ever! He decides to join the team at the high school the Little Giant went to—and then surpass him. Who says you need to be tall to play volleyball when you can jump higher than anyone else?', '705.00', 3),
('978-1-59-182282-0', 'Samurai Champloo VOL.1', 'Masaru Gotsubo', 'samurai_champloo.jpg', 'Three strangers--a hardworking waitress, an arrogant mercenary, and a mysterious samurai--form an uneasy alliance as they search for the enigmatic Sunflower Samurai and cross paths with numerous characters, including ninjas, assassins, and princes in disguise.', '730.00', 7),
('978-4-08-870563-7', 'Anohana VOL.2', 'Okada Mari', 'anohana.jpg', 'We Still Don''t Know the Name of the Flower We Saw That Day ( Ano Hi Mita Hana no Namae wo Bokutachi wa Mada Shiranai) is a MangaStore written by Okada Mari and illustrated by Izumi Mitsu. It began serialization in the May 2012 issue of Shueisha''s Jump Square magazine from April 4, 2012 and ended in March 2013, compiled in three volumes.', '455.00', 5),
('978-4-08-880826-0', 'Kimetsu No Yaiba VOL.4 ', 'Koyoharu Gotoge', 'kimetsu_no_yaiba.jpg', 'Tanjiro sets out on the path of the Demon Slayer to save his sister and avenge his family!\r\n\r\nIn Taisho-era Japan, Tanjiro Kamado is a kindhearted boy who makes a living selling charcoal. But his peaceful life is shattered when a demon slaughters his entire family. His little sister Nezuko is the only survivor, but she has been transformed into a demon herself! Tanjiro sets out on a dangerous journey to find a way to return his sister to normal and destroy the demon who ruined his life.', '736.00', 4),
('978-4-56-931714-3', 'Uzumaki VOL.1', 'Junji Ito', 'uzumaki.jpg', 'Kurôzu-cho, a small fogbound town on the coast of Japan, is cursed. According to Shuichi Saito, the withdrawn boyfriend of teenager Kirie Goshima, their town is haunted not by a person or being but by a pattern: uzumaki, the spiral, the hypnotic secret shape of the world.\r\n\r\n It manifests itself in small ways: seashells, ferns, whirlpools in water, whirlwinds in air. And in large ways: the spiral marks on people''s bodies, the insane obsessions of Shuichi''s father, the voice from the cochlea in your inner ear. As the madness spreads, the inhabitants of Kurôzu-cho are pulled ever deeper, as if into a whirlpool from which there is no return...', '594.00', 6),
('978-1-42-158270-2', 'My Hero Academia VOL.2', '	Kohei Hirokoshi', 'hero_academia.jpg', 'Getting into U.A. High School was difficult enough, but it was only the beginning of Izuku’s long road toward becoming a superhero.\r\n\r\nThe new students all have some amazing powers, and although Izuku has inherited All Might’s abilities, he can barely control them. Then the first-year students are told they will have to compete just to avoid being expelled!', '709.00', 4),
('978-4-75-750966-5', 'Fullmetal Alchemist VOL.5 (Special!)', 'Hiromu Arakawa', 'full_metal.jpg', 'A hardcover, deluxe collector’s edition of one of the most beloved MangaStore and anime of all time! Fully remastered with an updated translation and completely fresh lettering, and presented with color pages on large-trim archival-quality paper, this gorgeous hardcover edition presents the timeless dark adventures of the Elric brothers as they were truly meant to be seen.\r\n\r\n Includes brand-new cover art, with color insert and behind-the-scenes character sketches from author Hiromu Arakawa!', '741.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customerid` int(10) unsigned NOT NULL,
  `name` varchar(60) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `zip_code` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `country` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `address`, `city`, `zip_code`, `country`) VALUES
(1, 'a', 'a', 'a', 'a', 'a'),
(2, 'b', 'b', 'b', 'b', 'b'),
(3, 'test', '123 test', '12121', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `orderid` int(10) unsigned NOT NULL,
  `customerid` int(10) unsigned NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ship_name` char(60) COLLATE latin1_general_ci NOT NULL,
  `ship_address` char(80) COLLATE latin1_general_ci NOT NULL,
  `ship_city` char(30) COLLATE latin1_general_ci NOT NULL,
  `ship_zip_code` char(10) COLLATE latin1_general_ci NOT NULL,
  `ship_country` char(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `ship_name`, `ship_address`, `ship_city`, `ship_zip_code`, `ship_country`) VALUES
(1, 1, '2035.00', '2015-12-03 13:30:12', 'a', 'a', 'a', 'a', 'a'),
(2, 2, '2044.00', '2015-12-03 13:31:12', 'b', 'b', 'b', 'b', 'b'),
(3, 3, '680.00', '2015-12-03 19:34:21', 'test', '123 test', '12121', 'test', 'test'),
(4, 1, '594.00', '2015-12-04 10:19:14', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `orderid` int(10) unsigned NOT NULL,
  `book_isbn` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(3) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderid`, `book_isbn`, `item_price`, `quantity`) VALUES
(1, '978-4-06-384591-4', '585.00', 1),
(1, '978-4-08-873435-4', '770.00', 1),
(1, '978-4-08-846818-1', '680.00', 1),
(2, '978-4-75-750966-5', '741.00', 1),
(2, '978-1-42-158270-2', '709.00', 1),
(2, '978-4-56-931714-3', '594.00', 1),
(3, '978-4-08-846818-1', '680.00', 1),
(1, '978-4-56-931714-3', '594.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `genreid` int(10) unsigned NOT NULL,
  `genre_name` varchar(60) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `genre` (`genreid`, `genre_name`) VALUES
(1, 'Action'),
(2, 'Romance'),
(3, 'Sports'),
(4, 'Shounen'),
(5, 'Slice Of Life'),
(6, 'Horror'),
(7, 'Historical');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`name`,`pass`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_isbn`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genreid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `genre`
  MODIFY `genreid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
