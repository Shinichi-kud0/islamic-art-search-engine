-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 fév. 2023 à 10:49
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mido`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `un` varchar(300) NOT NULL,
  `pw` varchar(300) NOT NULL,
  `demo` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `un`, `pw`, `demo`) VALUES
(1, 'administrator', '21232f297a57a5a743894a0e4a801fc3', 'N');

-- --------------------------------------------------------

--
-- Structure de la table `crawl`
--

CREATE TABLE `crawl` (
  `id` int(11) NOT NULL,
  `base_url` varchar(1000) NOT NULL,
  `actual_url` varchar(2000) NOT NULL,
  `title` varchar(2500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varbinary(200) DEFAULT NULL,
  `content` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_url` varchar(2000) NOT NULL,
  `last_update` timestamp NULL DEFAULT current_timestamp(),
  `deleted` enum('Y','N') DEFAULT 'N',
  `block_update` enum('Y','N') DEFAULT 'N',
  `visits` int(11) DEFAULT 0,
  `manual` enum('Y','N') DEFAULT 'N',
  `crawlRun` varchar(255) DEFAULT NULL,
  `crawlRunImages` varchar(255) DEFAULT NULL,
  `pdf` enum('Y','N') DEFAULT 'N',
  `ContentType` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `crawl`
--

INSERT INTO `crawl` (`id`, `base_url`, `actual_url`, `title`, `description`, `keywords`, `content`, `current_url`, `last_update`, `deleted`, `block_update`, `visits`, `manual`, `crawlRun`, `crawlRunImages`, `pdf`, `ContentType`) VALUES
(1, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', '', NULL, NULL, NULL, 'http://islamicartsmagazine.com', '2023-02-11 09:44:56', 'N', 'N', 14, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(2, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', '', NULL, NULL, NULL, 'http://islamicartsmagazine.com/magazine/', '2023-02-11 09:42:54', 'N', 'N', 17, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(3, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', '', NULL, NULL, NULL, 'http://islamicartsmagazine.com/shop/', '2023-02-11 09:44:32', 'N', 'N', 2, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(4, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', '', NULL, NULL, NULL, 'http://islamicartsmagazine.com/gallery/', '2023-02-11 09:44:37', 'N', 'N', 2, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(5, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', 'Wallpapers | Islamic Arts Magazine', 'Islamic Arts Magazine - The International Visual Arts Magazine', NULL, ' Magazine Shop Gallery Wallpapers Sign Up / Log in username password Auto-login on future visits Forgot password? email address WallpapersTo download please LOG IN Newsletter Email Address * First Name Last Name Stay in touch Keep up to date with IAMs special offers, giveaways and news in your preferred format. Follow us on Twitter Find us on Facebook Read us via RSS About us Press Advertise Contact TERMS / POLICY © 2020 Monolit. All rights reserved | No content can be copied or re-published w', 'http://islamicartsmagazine.com/wallpapers/', '2020-09-02 10:16:34', 'N', 'N', 0, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(6, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', 'Sign up - Account | Islamic Arts Magazine', 'Islamic Arts Magazine - The International Visual Arts Magazine', NULL, ' Magazine Shop Gallery Wallpapers Sign Up / Log in username password Auto-login on future visits Forgot password? email address Published by MONOLITAssociation for promoting Islamic Arts Address:Rustempašina 29, 71210 Ilidža, Sarajevo, BiH, Europe E-mail:&#105;&#110;&#102;&#111;&#064;&#105;&#115;&#108;&#097;&#109;&#105;&#099;&#097;&#114;&#116;&#115;&#109;&#097;&#103;&#097;&#122;&#105;&#110;&#101;&#046;&#099;&#111;&#109; We have published 7 digital issues. In 2012 Islamic Arts Magazine became a', 'http://islamicartsmagazine.com/account/register/', '2020-09-02 10:16:37', 'N', 'N', 0, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(7, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', '', NULL, NULL, NULL, 'http://islamicartsmagazine.com/javascript:;', '2023-02-11 09:43:06', 'N', 'N', 1, 'N', NULL, NULL, 'N', 'Array'),
(8, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', 'New Waves: Mohamed Melehi and the Casablanca Art School Archives - Magazine | Islamic Arts Magazine', 'Islamic Arts Magazine - The International Visual Arts Magazine', NULL, ' Magazine Shop Gallery Wallpapers Sign Up / Log in username password Auto-login on future visits Forgot password? email address Exhibition (19 Sep – 10 Oct 2020) New Waves: Mohamed Melehi and the Casablanca Art School Archives Aug 19, 2020 &nbsp;&nbsp;INSPIRATION, Exhibition by Islamic Arts Magazine Newsletter Email Address * First Name Last Name Stay in touch Keep up to date with IAMs special offers, giveaways and news in your preferred format. Follow us on Twitter Find us on Facebook Read u', 'http://islamicartsmagazine.com/magazine/view/new_waves_mohamed_melehi_and_the_casablanca_art_school_archives1/', '2020-09-02 10:16:44', 'N', 'N', 0, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(9, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', '', NULL, NULL, NULL, 'http://islamicartsmagazine.com/magazine/C67/', '2023-02-11 09:47:14', 'N', 'N', 1, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(10, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', 'Magazine | Islamic Arts Magazine', 'Islamic Arts Magazine - The International Visual Arts Magazine', NULL, ' Magazine Shop Gallery Wallpapers Sign Up / Log in username password Auto-login on future visits Forgot password? email address Category EVENTSAwardsArt FairsArt AuctionsArt NewsFestivalsArt EventFEATURESArchitectureArt CollectionsArt HistoryArtistsIAMInterviewsManuscriptsINSPIRATIONBook ReviewGraphic DesignExhibitionFashion DesignFilm/VideoGraffiti artJewelryPhotographyTypographyOpen CallTRADITIONCalligraphyCeramic ArtEbruTezhip Newsletter Email Address * First Name Last Name Stay in touch Keep', 'http://islamicartsmagazine.com/magazine/C22/', '2020-09-02 10:16:58', 'N', 'N', 0, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(11, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', 'Inscriptions at the Topkapi Palace in Istanbul - Magazine | Islamic Arts Magazine', 'Islamic Arts Magazine - The International Visual Arts Magazine', NULL, ' Magazine Shop Gallery Wallpapers Sign Up / Log in username password Auto-login on future visits Forgot password? email address ART HISTORY Inscriptions at the Topkapi Palace in Istanbul Aug 04, 2020 &nbsp;&nbsp;FEATURES, Art History by Kenan Šurković, Art Historian Newsletter Email Address * First Name Last Name Stay in touch Keep up to date with IAMs special offers, giveaways and news in your preferred format. Follow us on Twitter Find us on Facebook Read us via RSS The inscriptions of the ', 'http://islamicartsmagazine.com/magazine/view/inscriptions_at_the_topkapi_palace_in_istanbul/', '2020-09-02 10:17:00', 'N', 'N', 0, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(12, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', 'Magazine | Islamic Arts Magazine', 'Islamic Arts Magazine - The International Visual Arts Magazine', NULL, ' Magazine Shop Gallery Wallpapers Sign Up / Log in username password Auto-login on future visits Forgot password? email address Category EVENTSAwardsArt FairsArt AuctionsArt NewsFestivalsArt EventFEATURESArchitectureArt CollectionsArt HistoryArtistsIAMInterviewsManuscriptsINSPIRATIONBook ReviewGraphic DesignExhibitionFashion DesignFilm/VideoGraffiti artJewelryPhotographyTypographyOpen CallTRADITIONCalligraphyCeramic ArtEbruTezhip Newsletter Email Address * First Name Last Name Stay in touch Keep', 'http://islamicartsmagazine.com/magazine/C68/', '2020-09-02 10:17:02', 'N', 'N', 0, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(13, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', 'Magazine | Islamic Arts Magazine', 'Islamic Arts Magazine - The International Visual Arts Magazine', NULL, ' Magazine Shop Gallery Wallpapers Sign Up / Log in username password Auto-login on future visits Forgot password? email address Category EVENTSAwardsArt FairsArt AuctionsArt NewsFestivalsArt EventFEATURESArchitectureArt CollectionsArt HistoryArtistsIAMInterviewsManuscriptsINSPIRATIONBook ReviewGraphic DesignExhibitionFashion DesignFilm/VideoGraffiti artJewelryPhotographyTypographyOpen CallTRADITIONCalligraphyCeramic ArtEbruTezhip Newsletter Email Address * First Name Last Name Stay in touch Keep', 'http://islamicartsmagazine.com/magazine/C25/', '2020-09-02 10:17:05', 'N', 'N', 0, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(14, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', 'Over 50 Alserkal Avenue Organisations Unite in the Face of the COVID-19 Crisis - Magazine | Islamic Arts Magazine', 'Islamic Arts Magazine - The International Visual Arts Magazine', NULL, ' Magazine Shop Gallery Wallpapers Sign Up / Log in username password Auto-login on future visits Forgot password? email address Alserkal Pay It Forward Programme Over 50 Alserkal Avenue Organisations Unite in the Face of the COVID-19 Crisis Jul 29, 2020 &nbsp;&nbsp;EVENTS, Art Event by Islamic Arts Magazine Newsletter Email Address * First Name Last Name Stay in touch Keep up to date with IAMs special offers, giveaways and news in your preferred format. Follow us on Twitter Find us on Facebook ', 'http://islamicartsmagazine.com/magazine/view/over_50_alserkal_avenue_organisations_unite_in_the_face_of_the_covid-19/', '2020-09-02 10:17:08', 'N', 'N', 0, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(15, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', 'Magazine | Islamic Arts Magazine', 'Islamic Arts Magazine - The International Visual Arts Magazine', NULL, ' Magazine Shop Gallery Wallpapers Sign Up / Log in username password Auto-login on future visits Forgot password? email address Category EVENTSAwardsArt FairsArt AuctionsArt NewsFestivalsArt EventFEATURESArchitectureArt CollectionsArt HistoryArtistsIAMInterviewsManuscriptsINSPIRATIONBook ReviewGraphic DesignExhibitionFashion DesignFilm/VideoGraffiti artJewelryPhotographyTypographyOpen CallTRADITIONCalligraphyCeramic ArtEbruTezhip Newsletter Email Address * First Name Last Name Stay in touch Keep', 'http://islamicartsmagazine.com/magazine/C69/', '2020-09-02 10:17:10', 'N', 'N', 0, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(16, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', 'Magazine | Islamic Arts Magazine', 'Islamic Arts Magazine - The International Visual Arts Magazine', NULL, ' Magazine Shop Gallery Wallpapers Sign Up / Log in username password Auto-login on future visits Forgot password? email address Category EVENTSAwardsArt FairsArt AuctionsArt NewsFestivalsArt EventFEATURESArchitectureArt CollectionsArt HistoryArtistsIAMInterviewsManuscriptsINSPIRATIONBook ReviewGraphic DesignExhibitionFashion DesignFilm/VideoGraffiti artJewelryPhotographyTypographyOpen CallTRADITIONCalligraphyCeramic ArtEbruTezhip Newsletter Email Address * First Name Last Name Stay in touch Keep', 'http://islamicartsmagazine.com/magazine/C41/', '2020-09-02 10:17:13', 'N', 'N', 0, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8'),
(17, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', 'Arte Laguna Prize Announced the 4 Winners of It&#8217;s 14th Edition - Magazine | Islamic Arts Magazine', 'Islamic Arts Magazine - The International Visual Arts Magazine', NULL, ' Magazine Shop Gallery Wallpapers Sign Up / Log in username password Auto-login on future visits Forgot password? email address AWARDS Arte Laguna Prize Announced the 4 Winners of It&#8217;s 14th Edition Jul 25, 2020 &nbsp;&nbsp;EVENTS, Awards by Islamic Arts Magazine Newsletter Email Address * First Name Last Name Stay in touch Keep up to date with IAMs special offers, giveaways and news in your preferred format. Follow us on Twitter Find us on Facebook Read us via RSS Arte Laguna Prize announ', 'http://islamicartsmagazine.com/magazine/view/arte_laguna_prize_announced_the_4_winners_of_its_14th_edition/', '2020-09-02 10:17:15', 'N', 'N', 0, 'N', NULL, NULL, 'N', 'text/html; charset=utf-8');

-- --------------------------------------------------------

--
-- Structure de la table `crawl_images`
--

CREATE TABLE `crawl_images` (
  `id` int(11) NOT NULL,
  `base_url` varchar(1000) NOT NULL,
  `actual_url` varchar(2000) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `keywords` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_url` varchar(2000) NOT NULL,
  `last_update` timestamp NULL DEFAULT current_timestamp(),
  `deleted` enum('Y','N') DEFAULT 'N',
  `block_update` enum('Y','N') DEFAULT 'N',
  `visits` int(11) DEFAULT 0,
  `manual` enum('Y','N') DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `crawl_settings`
--

CREATE TABLE `crawl_settings` (
  `id` int(11) NOT NULL,
  `batch` int(11) NOT NULL DEFAULT 25,
  `image_width` int(11) NOT NULL DEFAULT 200,
  `image_height` int(11) NOT NULL DEFAULT 200,
  `body_lengh` int(11) NOT NULL DEFAULT 2000,
  `max_links_per_site` int(11) DEFAULT 20
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `crawl_settings`
--

INSERT INTO `crawl_settings` (`id`, `batch`, `image_width`, `image_height`, `body_lengh`, `max_links_per_site`) VALUES
(1, 25, 200, 200, 500, 20);

-- --------------------------------------------------------

--
-- Structure de la table `log`
--

CREATE TABLE `log` (
  `id` int(11) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `results` int(11) NOT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `count` int(11) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `log`
--

INSERT INTO `log` (`id`, `keyword`, `date`, `time`, `results`, `ip`, `count`) VALUES
(1, 'islamic art', '2020-09-02', '13:12:12', 17, '::1', 1),
(2, 'islamic art', '2020-09-02', '13:14:22', 17, '::1', 2),
(3, 'art', '2020-09-02', '13:39:11', 17, '::1', 1),
(4, 'art', '2020-09-02', '13:39:16', 17, '::1', 2),
(5, 'art', '2020-09-02', '13:39:33', 17, '::1', 3),
(6, 'art', '2020-09-02', '13:39:54', 17, '::1', 4),
(7, 'art', '2020-09-02', '13:39:57', 17, '::1', 5),
(8, 'art', '2020-09-02', '13:40:07', 17, '::1', 6),
(9, 'art', '2020-09-02', '13:43:55', 17, '::1', 7),
(10, 'art', '2020-09-02', '13:43:59', 17, '::1', 8),
(11, 'art', '2020-09-02', '13:44:01', 17, '::1', 9),
(12, 'art', '2020-09-02', '13:44:33', 17, '::1', 10),
(13, 'art', '2020-09-02', '13:45:47', 17, '::1', 11),
(14, 'art', '2020-09-02', '13:45:52', 17, '::1', 12),
(15, 'art', '2020-09-02', '13:46:40', 17, '::1', 13),
(16, 'islamic art', '2020-09-02', '13:47:18', 17, '::1', 3),
(17, 'islamic art', '2020-09-17', '11:00:40', 17, '::1', 4),
(18, 'islamic art', '2020-09-22', '12:51:45', 17, '::1', 5),
(19, 'islamic art', '2023-02-11', '10:39:42', 17, '::1', 6),
(20, 'islamic art', '2023-02-11', '10:44:20', 14, '::1', 7),
(21, 'art', '2023-02-11', '10:44:27', 17, '::1', 14),
(22, 'art', '2023-02-11', '10:45:48', 17, '::1', 15),
(23, 'art', '2023-02-11', '10:45:48', 17, '::1', 16),
(24, 'art', '2023-02-11', '10:46:56', 17, '::1', 17),
(25, 'design', '2023-02-11', '10:47:07', 6, '::1', 1);

-- --------------------------------------------------------

--
-- Structure de la table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `base_url` varchar(1000) NOT NULL,
  `actual_url` varchar(2000) NOT NULL,
  `spidered_url` varchar(2000) DEFAULT 'N/A',
  `visits` int(11) DEFAULT 0,
  `demo` enum('Y','N') DEFAULT 'N',
  `crawlRun` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT 'administrator',
  `time` int(11) DEFAULT 1477728575,
  `spider_mode` enum('Y','N') DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `settings`
--

INSERT INTO `settings` (`id`, `base_url`, `actual_url`, `spidered_url`, `visits`, `demo`, `crawlRun`, `user`, `time`, `spider_mode`) VALUES
(1, 'islamicartsmagazine.com', 'http://islamicartsmagazine.com/', 'N/A', 0, 'N', 'MTU5OTA0MTc3Nw==', 'WebUser', 1599041441, 'N'),
(2, 'islartist.com', 'http://islartist.com/', 'N/A', 0, 'N', NULL, 'administrator', 1599044076, 'Y');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crawl`
--
ALTER TABLE `crawl`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crawl_images`
--
ALTER TABLE `crawl_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `crawl_settings`
--
ALTER TABLE `crawl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `crawl`
--
ALTER TABLE `crawl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `crawl_images`
--
ALTER TABLE `crawl_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `crawl_settings`
--
ALTER TABLE `crawl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
