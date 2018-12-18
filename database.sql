-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 18, 2018 at 01:28 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `doctorfont`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `post_id`, `date`, `created_by`) VALUES
(1, 'snygg!', 16, '2018-12-04 19:36:52', 5),
(3, 'Måste ha!', 15, '2018-12-04 20:10:41', 5),
(7, 'snyggsnyggsnygg', 15, '2018-12-11 10:28:32', 5),
(14, 'Jaaa! Varje stund solen är framme så tar jag fram mina älsklingar!', 24, '2018-12-15 14:55:21', 5),
(23, 'Bara när jag är i alperna och schteeeker', 24, '2018-12-17 13:51:17', 8),
(24, 'Jag gör det! Tänkte till och med köpa ett par till min tjej i julklapp :)', 24, '2018-12-17 13:52:28', 7),
(25, 'Det är bara wannabe celebrities som använder solglajjor på vintern och inomhus....', 24, '2018-12-17 13:54:36', 9),
(26, 'Va sån då, Fredrik', 24, '2018-12-17 13:55:08', 5),
(27, 'Oh my god! Älska solglasögon året om! speciellt ett par riktigt feta bågar.', 24, '2018-12-17 13:56:49', 10),
(28, 'Vilka färger finns det?', 25, '2018-12-17 13:58:09', 10),
(29, 'LISA PILLOW?! Jag har dom hemma i gråa. Men är lite sugen på andra färger, vilka kommer dom in i?', 21, '2018-12-17 13:59:50', 10),
(30, 'Dom finns i svart, grått, ljusrosa och vitt :) ', 25, '2018-12-17 14:01:01', 11),
(31, 'ÅH vad roligt! dom är så sköna. Dom finns i rosa, grå, vita och olika mönster :)', 21, '2018-12-17 14:03:29', 11);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `image`, `description`, `category`, `date`, `created_by`) VALUES
(14, 'BRA DAG IDAG', '../uploads/Shopping-People-Girl-Female-Woman-Fashion-2594683.jpg', '<p><b>Idag sprider vi glädje med denna shoppingbrud!!</b></p>', 'mode', '2018-11-30 17:27:27', 5),
(15, 'NYTT NYTT NYTT!! ', '../uploads/earrings-274251_1280.jpg', '<p>Dessa måste ni bara in o köpa direkt! våra nya örhängen som kom in i veckan. Dom säljer som smör. Det finns bara ett fåtal kvar!&nbsp;</p><p>Skynda skynda!</p>', 'mode', '2018-11-30 17:36:13', 5),
(16, 'ÄNTLIGEN FREDAG', '../uploads/handbag-1478814_1280.jpg', '<p>Äntligen fredag!</p><p>Passa på att komma in och unna er vår fina Erina bag eller varför inte Evelina clutch, när du är påväg hem från jobbet. Dessa passar perfekt till utekvällen. Woopwoop!!</p>', 'mode', '2018-12-14 14:11:20', 5),
(20, 'WOW WOW WOW...', '../uploads/aj-garcia-230650-unsplash.jpg', '<p><span style=\"color: rgb(33, 37, 41); font-family: &quot;Open Sans&quot;, sans-serif; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; text-align: center;\">Sanna watch är klockan man bara måste ha hemma. Den passar lika bra till fest som till vardags!</span><br></p>', 'klockor', '2018-12-15 14:12:07', 5),
(21, 'TIPS TILL VARDAGSRUMMET', '../uploads/peter-goldberg-1168390-unsplash.jpg', '<p>Är ni trötta på samma gammla vas eller kanske dom där kuddarna ni haft i soffan i 10 år?</p><p><br></p><p>Då tycker jag ni ska kolla in Lisa pillow som finns i olika färger. Riktigt snygga!</p>', 'inredningsartiklar', '2018-12-15 14:24:24', 5),
(22, 'LA FEELING!', '../uploads/philipe-cavalcante-539505-unsplash.jpg', '<p><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;\"=\"\">Visste får man lite feeling att åka till LA när man ser den här bilden... Solbrillorna är ifrån <u>Rayban&nbsp;</u></span><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;\"=\"\">och dom är ett måste till sommaren! <span style=\"color: rgb(99, 99, 99);\">Eller till sistaminuten resan!</span></span><br></p>', 'solglasögon', '2018-12-15 14:30:30', 5),
(23, 'PLANERAR FRAMTIDEN', '../uploads/ella-jardim-683098-unsplash.jpg', '<p>Här sitter vi och planerar inför mycket nytt som kommer att hända på Millhouse under det senaste halvåret. Vi är sååå exalterade över detta, men häng kvar här på bloggen så kommer ni att få följa med på äventyret! så <span style=\"color: rgb(115, 165, 173);\">STAY TUNED!!</span></p>', 'inredningsartiklar', '2018-12-15 14:35:08', 5),
(24, 'ÄNTLIGEN LITE SOL', '../uploads/people-2560747_1280.jpg', '<p>Som vi har längtat efter en gnutta sol i detta mörker. Så härligt att få använda solglasögonen lite. </p><p><b style=\"color: rgb(66, 66, 66);\"><br></b></p><p><b style=\"color: rgb(66, 66, 66);\">Använder ni solglasögon även på hösten/vintern?</b></p>', 'solglasögon', '2018-12-15 14:38:19', 5),
(25, 'VI SER DE SNÖA IDAG', '../uploads/freestocks-org-188096-unsplash.jpg', '<p>Då har första snön kommit för i vinter. Tänk på att hålla er varma!</p><p>Det går att klä sig snyggt utan att frysa nuförtiden. Till exempel med populära Casandra earmuff håller ni er varma om öronen hela vintern! plus att ni ser riktigt fashion ut!</p>', 'mode', '2018-12-17 08:56:22', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mail`, `is_admin`) VALUES
(5, 'Felicia', '$2y$10$zx5um.H9kGqP64a.vLQcWOXMSAIpmNwwU8tTHSUjB0NFNP7l6Lbee', 'felicia.e.wallin@gmail.com', 1),
(6, 'nyny', '$2y$10$mLZN/zPygpeGqJkolxtD/umdlGqKRhEm0U3/EZvqickz.W51hybkW', 'nyny@ny.se', 0),
(7, 'erik', '$2y$10$Av7Zyr99/d22s/mTulpI5.ypA8zqJMp.RyK/xP3rDVuRDWXCPkVwi', 'erik@erik.se', 0),
(8, 'Rebecca', '$2y$10$rKextOTvQUfiQmVJmVEntuiAf.wVssLXXz3Dg4xIFp7BSVhkSgzPG', 'rebeccakling@gmail.com', 0),
(9, 'Fredrik', '$2y$10$4SEH/WQJKW7wCAjvjz1FHO8Rlp/hQ0eJXd8zb74EdeeFMTNIlv/Dq', 'fredrik@fredrik.se', 0),
(10, 'Julia', '$2y$10$yjfNKZKxUnVInw1VGbUTmuS5PNxQPYh3a/p.xc.eI1lR0XkU3vpL.', 'julia@julia.se', 0),
(11, 'Millhouse', '$2y$10$HsQRwSGidMNRLA5FZ77a2.DAZPnK4urZrKcKqJ.8k02VOaKSft4sq', 'millhouse@mill.se', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
