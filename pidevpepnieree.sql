-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 12:35 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pidevpepnieree`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

CREATE TABLE `annonce` (
  `id_annonce` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_annonce` date NOT NULL,
  `prix` double NOT NULL,
  `img_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `produit_proposee` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `produit_demandee` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marge` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_produit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `command`
--

CREATE TABLE `command` (
  `id_command` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `quantite` int(11) NOT NULL,
  `prix_total` double DEFAULT NULL,
  `date_ajout` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categorie_produit` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categorie_plante` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_produit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `date_deb` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `description` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adresse_event` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom_event` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `frais_particpation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `img_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datelogout` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nb_Participation` int(11) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`, `img_url`, `datelogout`, `name`, `first_name`, `adress`, `nb_Participation`, `telephone`, `sex`, `description`) VALUES
(1, 'hh', 'hh', 'hhhh@gmail.com', 'hhhh@gmail.com', 1, NULL, '$2y$13$Vr.ZKWPZVMw0U9X3Iz8SzOoNpPP8Ga.TeiE/m4Ya4nQyWQshOIUDu', '2019-04-10 22:23:42', NULL, NULL, 'a:0:{}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ferid', 'ferid', 'hhhhb@gmail.com', 'hhhhb@gmail.com', 1, NULL, '$2y$13$ywZOKqYEeBscedEZcKe9SuulnOIuq8tQO1yJF.xSpYMEkdjjK7w0C', '2019-04-10 22:49:11', NULL, NULL, 'a:1:{i:0;s:11:"ROLE_CLIENT";}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'root', 'root', 'hhhhhhb@gmail.com', 'hhhhhhb@gmail.com', 1, NULL, '$2y$13$mj.y4CVzgCl.1UevfaBtd.WW1ovNUPxWsRSgR6N4D0gCNC4JLyMmq', '2019-04-10 22:48:14', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `participation`
--

CREATE TABLE `participation` (
  `id_p` int(11) NOT NULL,
  `id_event` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `confirmer` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participation`
--

INSERT INTO `participation` (`id_p`, `id_event`, `id`, `confirmer`) VALUES
(47, 49, 9, 1),
(46, 48, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id_user` int(11) DEFAULT NULL,
  `id_Produit` int(11) NOT NULL,
  `nom` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categorieProduit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `prix` double DEFAULT NULL,
  `categorieplants` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `types` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dure_vie` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `origine` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `saison` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `taille` int(11) DEFAULT NULL,
  `couleur` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reference` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marque` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `titre` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `auteur` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tempsvie` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_plantsitting`
--

CREATE TABLE `service_plantsitting` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_annonce`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Indexes for table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`id_command`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produit` (`id_produit`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

--
-- Indexes for table `participation`
--
ALTER TABLE `participation`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_event` (`id_event`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_Produit`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `service_plantsitting`
--
ALTER TABLE `service_plantsitting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `command`
--
ALTER TABLE `command`
  MODIFY `id_command` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `participation`
--
ALTER TABLE `participation`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_Produit` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service_plantsitting`
--
ALTER TABLE `service_plantsitting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `FK_F65593E56B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`);

--
-- Constraints for table `command`
--
ALTER TABLE `command`
  ADD CONSTRAINT `FK_8ECAEAD46B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `FK_5387574A6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`);

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC276B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `fos_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
