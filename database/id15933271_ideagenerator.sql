-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2021 at 09:56 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15933271_ideagenerator`
--

-- --------------------------------------------------------

--
-- Table structure for table `ideas`
--

CREATE TABLE `ideas` (
  `TopicID` int(11) NOT NULL,
  `Idea` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ideas`
--

INSERT INTO `ideas` (`TopicID`, `Idea`) VALUES
(1, 'ADULT COLORING PAGES - https://www.momsandcrafters.com/tag/adult-coloring-pages/'),
(1, 'TAPE RESIST ART - https://craftulate.com/train-track-art/'),
(1, 'PAINT BY NUMBERS - https://paintbynumbershome.com/'),
(1, 'QUILLING - https://en.wikipedia.org/wiki/Quilling'),
(1, 'SIDEWALK ART - https://craftwhack.com/easy-sidewalk-paint-recipe/'),
(2, 'A smoke detector that listens - A smoke detector that would instantly turn off if you yelled, “I’m cooking!”'),
(2, 'Connected soil monitor - A small monitor placed in soil that would tell you when a plant needs to be watered. The hardware would be connected to an app on your phone. '),
(2, 'Pic to fit - The ability to hold up your smartphone’s camera and it tell you the exact dimensions of everything in its sight.'),
(2, 'Sunglasses with solar-powered fans - Tiny fans built into the temples (also called the arms) of a pair of sunglasses that are solar-powered. Feel as cool as you look.'),
(2, 'Fandom website - A website that enables raving fans of particular books/celebrities/movies/musicians, etc. to connect and interact. '),
(3, 'Dropshipping - https://www.youtube.com/watch?v=we1eCDUt8sU'),
(3, 'BUSINESS BROKER - A business broker is someone who assists buyers and sellers of privately owned businesses in the buying and selling process.'),
(3, 'LANGUAGE TRANSLATION - Despite the impressive advancements of machine translation, the demand for skilled translators is still very high and will probably remain so for quite some time.'),
(3, 'AFFILIATE MARKETING - Affiliate marketers promote products of other people and earn commissions on their sales.'),
(3, 'DATA ANALYST CONSULTING - With the rise of “big data,” increasingly more companies need to make sense of heaps of information to adjust their overall business strategies.'),
(4, 'Ivation Foot Spa Massager'),
(4, 'A personalized calendar'),
(4, 'Dyson Pure Hot + Cool Cryptomic'),
(4, 'Fitness tracker'),
(4, 'Sony Noise-Canceling Headphones'),
(4, 'A custom-illustrated set of mugs'),
(4, ' A stamp featuring a custom carving'),
(5, 'HANG INTERESTING PENDANT LIGHTS'),
(5, 'ADOPT AN OPEN PLAN DESIGN'),
(5, 'ADD SOME EYE-CATCHING SHINE'),
(5, 'DECORATE WITH LARGE PLANTS'),
(5, 'DRESS-UP YOUR WALLS'),
(5, 'ELEVATE WITH WHITE WOODWORK'),
(5, 'INVEST IN ART DISPLAYS'),
(5, 'ARRANGE ATTRACTIVE CHAIRS NEAR THE ENTRANCE'),
(5, 'INSTALL HARDWOOD FLOORING'),
(6, 'Text to speech conversion'),
(6, 'Balance ball game'),
(6, 'Math puzzle'),
(6, 'Random number generator '),
(6, 'Parking managment system'),
(6, 'Age calculator'),
(6, 'Snake game'),
(6, 'Online word counter'),
(6, 'Length converter'),
(6, 'Speech to text convertor'),
(6, 'Mini word game'),
(6, 'Time counter'),
(6, 'Navigation bar animation'),
(6, 'Glitch Effect'),
(6, 'To do list'),
(10, 'The trial of the chicago 7'),
(10, 'The gentlemen'),
(10, 'Narcos'),
(10, 'Vikings'),
(10, 'Queen\'s gambit'),
(10, 'Palm Springs'),
(10, 'Soul'),
(10, 'Tenet'),
(10, 'Sound of metal'),
(10, 'The invisible man'),
(10, 'The call of the wild'),
(11, 'Dance and Visual Performances - New technologies have allowed performers to take their dance and visual performances to the next level as humans and computers merge.'),
(11, 'Art Stroll that Supports your Mission - Create an art gallery stroll involving a special charity. You can even auction off the creations.'),
(11, 'Hot Air Balloon Rides or Launches - This is a bucket list item for many people but weather conditions have to be just right.'),
(11, 'Cultural Parade - Use your geographic area to influence your entertainment.'),
(11, 'Laughter Yoga and Humor Therapists - Laughter yoga will get your corporate group laughing their way out of a stressful situation. '),
(11, 'Snow Fall - Snow falling can bring a romance and childlike wonder to any event, especially if it’s occurring in an unexpected area.'),
(11, 'Glow Show - Everything looks better lit up.'),
(11, 'Human Fountains - Water dancers will amaze audiences with their fountain dancing.');

-- --------------------------------------------------------

--
-- Table structure for table `savedideas`
--

CREATE TABLE `savedideas` (
  `user` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Idea` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `savedideas`
--

INSERT INTO `savedideas` (`user`, `Idea`) VALUES
('Amar', 'Speech to text convertor'),
('Sara', 'Vikings'),
('Osama', 'Time counter');

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `TopicID` int(11) NOT NULL,
  `TopicName` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`TopicID`, `TopicName`) VALUES
(1, 'Art'),
(2, 'Product'),
(3, 'Business'),
(4, 'Gift'),
(5, 'Interior Design'),
(6, 'Programming Project'),
(10, 'Movie'),
(11, 'Entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Password`) VALUES
('Admin', 'admin2127'),
('Amar', 'amaramar'),
('Mohammad', 'mohmohmoh'),
('Osama', 'osamaosa'),
('Sara', 'sarasara'),
('Yousef', '11111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`TopicID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
