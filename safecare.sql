-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2021 at 07:05 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `capteur`
--

CREATE TABLE `capteur` (
  `idCapteur` int(11) NOT NULL,
  `nom` text NOT NULL,
  `unit` text NOT NULL,
  `ValeurMin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `capteur`
--

INSERT INTO `capteur` (`idCapteur`, `nom`, `unit`, `ValeurMin`) VALUES
(1, 'Coeur', 'bpm', 70),
(2, 'Temperature', '°', 26),
(3, 'Vision', '/20', 12),
(4, 'Reflexes', 'ms', 125);

-- --------------------------------------------------------

--
-- Table structure for table `cgu`
--

CREATE TABLE `cgu` (
  `idCgu` int(11) NOT NULL,
  `detail` text NOT NULL,
  `numero` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cgu`
--

INSERT INTO `cgu` (`idCgu`, `detail`, `numero`, `idUtilisateur`) VALUES
(2, 'La Société collecte et exploite les informations personnelles du Client le concernant dans la finalité de l’identifier lors du traitement de ses commandes, et de lui simplifier l’accès à ses services. Cette collecte permet aussi de tenir informé le Client de l’évolution de ses services et Produits, ainsi que des offres spéciales. La Société peut collecter les données personnelles lorsque le Client consulte le Site, correspond avec la Société, commande un produit, ou que le Client s’inscrit sur une liste de diffusion.', 1, 64),
(3, 'Les droits de propriété intellectuelle sur l’ensemble des éléments (animations, images, photos, logos, articles, etc.) composant le Site internet wwwsafecare.fr et sur chacun des éléments créés pour ce site sont la propriété exclusive de la société Safeway ou de ses partenaires.', 2, 64),
(4, 'Toutes contestations qui pourraient naître sur l’exécution et l’interprétation des présentes Conditions Générales devront être portées devant les Tribunaux de Paris qui seront seuls compétents.', 3, 64);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `idFaq` int(11) NOT NULL,
  `question` text NOT NULL,
  `reponse` text NOT NULL,
  `numero` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`idFaq`, `question`, `reponse`, `numero`, `idUtilisateur`) VALUES
(23, 'A quoi servent les tests psychotechniques ?', 'Les tests psychotechniques effectués permettent de déterminer si le conducteur est apte à conduire le train aujourd\'hui ou non.', 1, 64),
(24, 'Que faire en cas d\'oubli de votre mot de passe ?', 'Depuis le portail de \"Connexion\", cliquez sur « Mot de passe oublié ? ». \r\nVous serez alors redirigé vers une page dans laquelle vous devez renseigner votre adresse mail, renseignée lors de l\'inscription, puis cliquer sur le bouton « Envoyer ».\r\nDepuis le portail de \"Connexion\", cliquez sur « Mot de passe oublié ? ».', 2, 64),
(27, 'Comment ajouter des résultats à votre profil ?', 'Les résultats sont ajoutés automatiquement dès que vous réalisez un test depuis l’appareil de mesure Safecare.', 5, 64),
(29, 'De quelle manière est calculée ma moyenne ?', 'Votre moyenne est calculée à partir de chacun de vos résultats aux différents tests psychotechniques.', 4, 64),
(31, 'Comment changer mon email/identifiant ?', 'Vous ne pouvez pas changer votre email/identifiant depuis la rubrique \"Editer mon profil\". Contactez un administrateur depuis la page contact pour qu\'il puisse effectuer les changements.', 6, 74),
(32, 'Comment modifier mon profil ?', 'Vous devez cliquer sur votre photo de profil en haut à gauche, puis  appuyer sur \"Modifier mon profil\" afin d\'arriver sur la page \'Édition de profil\' et pouvoir modifier vos informations.', 8, 74),
(33, 'Ma photo de profil n\'est pas la mienne, comment changer ?', 'Pour changer votre photo de profil, allez sur la page \"Edition de profil\" dans votre profil en cliquant sur \"Modifier mon profil\".', 7, 74),
(34, 'Où puis-je trouver les CGU ?', 'Les CGU se trouvent sur le bouton \"CGU\" tout en bas du menu de gauche.', 3, 74),
(35, 'Où puis-je me procurer le dispositif Safecare ?', 'Les produits Safecare sont distribués par votre entreprise afin que vous puissiez réaliser des tests avant de prendre la conduite. Vos résultats seront immédiatement transmis dans notre base de données.', 9, 74),
(36, 'Comment devenir gestionnaire ?', 'Pour utiliser le service Safecare en tant que gestionnaire, veuillez nous contacter à l\'adresse mail suivante : \'safecare.by.safeway@gmail.com\'.', 10, 64);

-- --------------------------------------------------------

--
-- Table structure for table `resultat`
--

CREATE TABLE `resultat` (
  `idResultat` int(11) NOT NULL,
  `valeur` float NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idCapteur` int(11) NOT NULL,
  `dateResult` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resultat`
--

INSERT INTO `resultat` (`idResultat`, `valeur`, `idUtilisateur`, `idCapteur`, `dateResult`) VALUES
(1, 65, 68, 1, '2021-05-17'),
(2, 76, 68, 1, '2021-05-18'),
(3, 72, 68, 1, '2021-05-19'),
(4, 83, 68, 1, '2021-05-20'),
(5, 66, 68, 1, '2021-05-21'),
(6, 27, 68, 2, '2021-05-17'),
(7, 27, 68, 2, '2021-05-18'),
(8, 28, 68, 2, '2021-05-19'),
(9, 26, 68, 2, '2021-05-20'),
(10, 27, 68, 2, '2021-05-21'),
(11, 15, 68, 3, '2021-05-17'),
(12, 12, 68, 3, '2021-05-18'),
(13, 17, 68, 3, '2021-05-19'),
(14, 14, 68, 3, '2021-05-20'),
(15, 16, 68, 3, '2021-05-21'),
(16, 128, 68, 4, '2021-05-17'),
(17, 154, 68, 4, '2021-05-18'),
(18, 102, 68, 4, '2021-05-19'),
(19, 140, 68, 4, '2021-05-20'),
(20, 124, 68, 4, '2021-05-21'),
(25, 73, 70, 1, '2021-05-17'),
(26, 74, 70, 1, '2021-05-18'),
(27, 72, 70, 1, '2021-05-19'),
(28, 71, 70, 1, '2021-05-20'),
(29, 68, 70, 1, '2021-05-21'),
(30, 27, 70, 2, '2021-05-17'),
(31, 25, 70, 2, '2021-05-18'),
(32, 29, 70, 2, '2021-05-19'),
(33, 27, 70, 2, '2021-05-20'),
(34, 25, 70, 2, '2021-05-21'),
(35, 15, 70, 3, '2021-05-17'),
(36, 17, 70, 3, '2021-05-18'),
(37, 17, 70, 3, '2021-05-19'),
(38, 16, 70, 3, '2021-05-20'),
(39, 16, 70, 3, '2021-05-21'),
(40, 126, 70, 4, '2021-05-17'),
(43, 130, 70, 4, '2021-05-18'),
(44, 135, 70, 4, '2021-05-19'),
(45, 125, 70, 4, '2021-05-20'),
(46, 132, 70, 4, '2021-05-21'),
(47, 75, 69, 1, '2021-05-17'),
(48, 27, 69, 2, '2021-05-17'),
(49, 27, 69, 2, '2021-05-18'),
(50, 28, 69, 2, '2021-05-19'),
(51, 27, 69, 2, '2021-05-20'),
(52, 25, 69, 2, '2021-05-21'),
(53, 19, 69, 3, '2021-05-17'),
(54, 18, 69, 3, '2021-05-18'),
(55, 19, 69, 3, '2021-05-19'),
(56, 20, 69, 3, '2021-05-20'),
(57, 20, 69, 3, '2021-05-21'),
(58, 125, 69, 4, '2021-05-17'),
(59, 127, 69, 4, '2021-05-18'),
(60, 127, 69, 4, '2021-05-19'),
(61, 129, 69, 4, '2021-05-20'),
(62, 135, 69, 4, '2021-05-21'),
(63, 72, 69, 1, '2021-05-18'),
(64, 76, 69, 1, '2021-05-19'),
(65, 76, 69, 1, '2021-05-20'),
(66, 75, 69, 1, '2021-05-21'),
(67, 80, 71, 1, '2021-05-17'),
(68, 78, 71, 1, '2021-05-18'),
(69, 76, 71, 1, '2021-05-19'),
(70, 79, 71, 1, '2021-05-20'),
(71, 77, 71, 1, '2021-05-21'),
(72, 25, 71, 2, '2021-05-17'),
(73, 27, 71, 2, '2021-05-18'),
(74, 28, 71, 2, '2021-05-19'),
(75, 27, 71, 2, '2021-05-20'),
(76, 25, 71, 2, '2021-05-21'),
(77, 16, 71, 3, '2021-05-17'),
(78, 17, 71, 3, '2021-05-18'),
(79, 18, 71, 3, '2021-05-19'),
(80, 17, 71, 3, '2021-05-20'),
(81, 17, 71, 3, '2021-05-21'),
(82, 126, 71, 4, '2021-05-17'),
(83, 128, 71, 4, '2021-05-18'),
(84, 130, 71, 4, '2021-05-19'),
(85, 126, 71, 4, '2021-05-20'),
(86, 127, 71, 4, '2021-05-21'),
(87, 86, 72, 1, '2021-05-17'),
(88, 82, 72, 1, '2021-05-18'),
(89, 79, 72, 1, '2021-05-19'),
(90, 80, 72, 1, '2021-05-20'),
(91, 85, 72, 1, '2021-05-21'),
(92, 25, 72, 2, '2021-05-17'),
(93, 27, 72, 2, '2021-05-18'),
(94, 28, 72, 2, '2021-05-19'),
(95, 27, 72, 2, '2021-05-20'),
(96, 27, 72, 2, '2021-05-21'),
(97, 15, 72, 3, '2021-05-17'),
(98, 16, 72, 3, '2021-05-18'),
(99, 15, 72, 3, '2021-05-19'),
(100, 15, 72, 3, '2021-05-20'),
(101, 14, 72, 3, '2021-05-21'),
(102, 125, 72, 4, '2021-05-17'),
(103, 137, 72, 4, '2021-05-18'),
(104, 135, 72, 4, '2021-05-19'),
(105, 140, 72, 4, '2021-05-20'),
(106, 126, 72, 4, '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `mdp` text NOT NULL,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `birthday` date NOT NULL,
  `entreprise` text NOT NULL,
  `statut` text NOT NULL,
  `email` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `mdp`, `nom`, `prenom`, `birthday`, `entreprise`, `statut`, `email`, `photo`) VALUES
(58, '$2y$10$B5q.Bb3gXPs9Autyq6eZWusPq4dMT0YpU82BQswp3g7Oh5wbeIRxq', 'Chhoa', 'Kevin', '2000-11-30', 'RATP', 'gestionnaire', 'kevin.chhoa@eleve.isep.fr', '60b3e5e2eb6ff8.31985927.png'),
(59, '$2y$10$2IIAke//P.EJJlmRgfdKLuZ75iJ.nWnjbY4ROUfqwc4RWiRhzxT4.', 'Peignet', 'Angélique', '2000-12-06', 'SNCF', 'gestionnaire', 'angelique.peignet@eleve.isep.fr', '60b3e69c4c61f4.94531517.png'),
(60, '$2y$10$zNEmdke0FpFzwEH3oyVlKeHfeyDfB/uUlOfEiFmTnPZsBlyG8IEg6', 'Albertini', 'Jean-François', '2000-03-15', 'CFC', 'gestionnaire', 'jean-francois.albertini@eleve.isep.fr', '60b3e734f193e9.05722686.png'),
(61, '$2y$10$wgY6OQoxsxb.WtxUeOSDAejioll5X.roBAlfsIqBBA/b.Fc0zQx3.', 'Massaad', 'Chloé', '2001-01-20', 'Railcoop', 'gestionnaire', 'chloe.massaad@eleve.isep.fr', '60b3e7a4a94034.69243755.png'),
(62, '$2y$10$MtOTIjr80Gk6lQTiKyBCH.ooVLm0MIvIsnCMzWnN46vl5sj8mNuNi', 'Chebbo', 'Nader', '2000-05-31', 'Underground', 'gestionnaire', 'nader.chebbo@eleve.isep.fr', '60b3e8d6605ba1.79661314.png'),
(64, '$2y$10$z4PHhUezzfUWMlH4VvPkYOOfrQKIUzz1.AASJJ8Q419zUApA0Z5ce', 'Peignet', 'Angélique', '2000-12-06', 'Safeway', 'administrateur', 'angelique.peignet@gmail.com', '60b3e9583777e0.57442494.png'),
(65, '$2y$10$NgNP2lwiTlcAQPM/c/pGw.mM95PyOR0zVT/KQ5cjiv9U0O9cpc9Sm', 'Albertini', 'Jean-François', '2000-03-15', 'Safeway', 'administrateur', 'jeanfrancoisalbertini1503@gmail.com', '60b3e98ee825a9.70127450.png'),
(66, '$2y$10$ikgnsISYaGuk/xv4JZ92guFdocSL8ZzXD21mMB6ytJpaJT5SCOamy', 'Massaad', 'Chloé', '2001-01-20', 'Safeway', 'administrateur', 'massaadchlo@gmail.com', '60b3e9c646b910.19189999.png'),
(67, '$2y$10$C1l.fOaef8cVJYtAiFpbI.b7b9sE2szA0FRqh0oqVl2DXnDwQJ6qa', 'Chebbo', 'Nader', '2000-05-31', 'Safeway', 'administrateur', 'nader.chebbo@gmail.com', '60b3e9fb60bc00.91814778.png'),
(68, '$2y$10$s1ZDrBZ23tM7u8aOOrAPPe6NKsCwSBx5wCM2ivHXu4U1G/ZC4MkDC', 'Chhoa', 'Kevin', '2000-11-30', 'MTA', 'utilisateur', 'chhoakevin@yahoo.fr', '60b3eb00ba2791.94472969.png'),
(69, '$2y$10$VaVOFj3VoMgzIyQgUh8Sq.8SnVOEWhUKvQ28e.cRh4N2nXKjS0lTq', 'Peignet', 'Angélique', '2000-12-06', 'Buenos Aires Underground', 'utilisateur', 'angelique.peignet@orange.fr', '60b3eb5bbf54a3.59080693.png'),
(70, '$2y$10$976QxTYX4z5SBzaKM7kxjuy5LoPU7SM.TmgvaNbZOQHSHiz9/QO2K', 'Albertini', 'Jean-François', '2000-03-15', 'Sydney Metro', 'utilisateur', 'jeanfrancoisalbertini@yahoo.fr', '60b3eb8ea93907.01671279.png'),
(71, '$2y$10$nOQt9vmzBuL1UTLSTXV3CetdvKmXM5jYQIbh.odXGposzPYrSRTg2', 'Massaad', 'Chloé', '2001-01-20', 'SkyTrain', 'utilisateur', 'chloemassaad@hotmail.fr', '60b3ebc8a1d7c6.13249229.png'),
(72, '$2y$10$tsLrqYwFnr..GcKwPEWlG.I.8ztr.3YEUsk6ke2e5SE.DPvgcxd1u', 'Chebbo', 'Nader', '2000-05-31', 'Prague metro', 'utilisateur', 'cnader@live.fr', '60b3ebfd623c87.41328782.png'),
(74, '$2y$10$uk/jRIQClSMTIwMaiV2UZ.Gc6v286ftUHccwTgiuIbah3j4szsNGC', 'Chhoa', 'Kevin', '2000-11-30', 'Safeway', 'administrateur', 'kchhoa@gmail.com', '60b4f3459de545.09813537.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`idCapteur`);

--
-- Indexes for table `cgu`
--
ALTER TABLE `cgu`
  ADD PRIMARY KEY (`idCgu`),
  ADD KEY `utilisateur_cgu` (`idUtilisateur`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`idFaq`),
  ADD KEY `utilisateur_faq` (`idUtilisateur`);

--
-- Indexes for table `resultat`
--
ALTER TABLE `resultat`
  ADD PRIMARY KEY (`idResultat`),
  ADD KEY `capteur_resultat` (`idCapteur`),
  ADD KEY `utilisateur_resultat` (`idUtilisateur`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `idCapteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cgu`
--
ALTER TABLE `cgu`
  MODIFY `idCgu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `idFaq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `resultat`
--
ALTER TABLE `resultat`
  MODIFY `idResultat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cgu`
--
ALTER TABLE `cgu`
  ADD CONSTRAINT `utilisateur_cgu` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faq`
--
ALTER TABLE `faq`
  ADD CONSTRAINT `utilisateur_faq` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resultat`
--
ALTER TABLE `resultat`
  ADD CONSTRAINT `capteur_resultat` FOREIGN KEY (`idCapteur`) REFERENCES `capteur` (`idCapteur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `utilisateur_resultat` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`idUtilisateur`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
