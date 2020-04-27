-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 17 avr. 2020 à 13:30
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `kbk`
--

-- --------------------------------------------------------

--
-- Structure de la table `h2020_employes`
--

DROP TABLE IF EXISTS `h2020_employes`;
CREATE TABLE IF NOT EXISTS `h2020_employes` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id employe',
  `nom` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaissance` date NOT NULL,
  `photo` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courriel` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` bigint(20) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `h2020_employes`
--

INSERT INTO `h2020_employes` (`id`, `nom`, `prenom`, `fonction`, `datenaissance`, `photo`, `courriel`, `telephone`) VALUES
(1, 'Michel', 'Jean', 'Directeur des Ressources', '1984-03-21', 'HTML/images/Bman_F_f00.png', 'jean.michel@kin-brazza-kitendi.com', 5795891177),
(2, 'Pierre', 'Martine', 'Gestionnaire de stocks', '1998-08-08', 'HTML/images/gerant.png', 'martine.pierre@kin-brazza-kitendi.com', 5795891178),
(3, 'Bertra', 'Julie', 'Responsable Marketing', '1987-11-03', 'HTML/images/Creep_F_f00.png', 'julie.bertra@kin-brazza-kitendi.com', 5795891179),
(4, 'Nohel', 'Pierre', 'ChargÃ© de distribution', '2001-11-25', 'HTML/images/Bman_F_f00.png', 'pierre.nohel@kin-brazza-kitendi.com', 5795891180),
(5, 'Maous', 'Miket', 'Publicitaire', '1928-11-18', 'HTML/images/gerant.png', 'miket.maous@kin-brazza-kitendi.com', 5795891181),
(6, 'Mairie', 'Marie', 'ChargÃ©e de communication', '2000-02-29', 'HTML/images/Creep_F_f00.png', 'marie.mairie@kin-brazza-kitendi.com', 5795891182),
(7, 'GÃ©gÃ©', 'GÃ©rald', 'SecrÃ©taire gÃ©nÃ©ral', '1993-04-17', 'HTML/images/Bman_F_f00.png', 'gerald.gege@kin-brazza-kitendi.com', 5795891183);

-- --------------------------------------------------------

--
-- Structure de la table `h2020_produits`
--

DROP TABLE IF EXISTS `h2020_produits`;
CREATE TABLE IF NOT EXISTS `h2020_produits` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'numero produit',
  `nom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nom produit',
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fabricant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` decimal(10,4) NOT NULL DEFAULT 0.0000,
  `photo` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'chemin du fichier image',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Info produits';

--
-- Déchargement des données de la table `h2020_produits`
--

INSERT INTO `h2020_produits` (`id`, `nom`, `description`, `fabricant`, `prix`, `photo`) VALUES
(1, 'chaussures', 'Ut enim benefici liberalesque sumus, non ut exigamus gratiam (neque enim beneficium faeneramur sed natura propensi ad liberalitatem sumus), sic amicitiam non spe mercedis adducti sed quod omnis eius fructus in ipso amore inest, expetendam putamus.', 'Luc Ronoa', '45.9900', 'HTML/images/vetement3.jpg'),
(2, 'chaussettes', 'Abusus enim multitudine hominum, quam tranquillis in rebus diutius rexit, ex agrestibus habitaculis urbes construxit multis opibus firmas et viribus, quarum ad praesens pleraeque licet Graecis nominibus appellentur, quae isdem ad arbitrium inposita sunT.', 'HÃ©lÃ¨ne Miki', '30.0000', 'HTML/images/vetement3.jpg'),
(3, 'pantalon', 'Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.', 'Martin Grix', '79.9999', 'HTML/images/vetement1.jpg'),
(4, 't-shirt', 'Tantum autem cuique tribuendum, primum quantum ipse efficere possis, deinde etiam quantum ille quem diligas atque adiuves, sustinere. Non enim neque tu possis, quamvis excellas, omnes tuos ad honores amplissimos perducere, ut Scipio P. Rupilium potuit con.', 'Thomas Samoht', '49.6780', 'HTML/images/vetement1.jpg'),
(5, 'Pull', 'Et prima post Osdroenam quam, ut dictum est, ab hac descriptione discrevimus, Commagena, nunc Euphratensis, clementer adsurgit, Hierapoli, vetere Nino et Samosata civitatibus amplis inlustris.', 'Jacque Quartier', '99.9990', 'HTML/images/vetement2.jpg'),
(6, 'Lunettes', 'Sin autem ad adulescentiam perduxissent, dirimi tamen interdum contentione vel uxoriae condicionis vel commodi alicuius, quod idem adipisci uterque non posset. Quod si qui longius in amicitia provecti essent, tamen saepe labefactari, si in honoris.', 'Ola KÃ©tal', '4.2500', 'HTML/images/vetement1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
