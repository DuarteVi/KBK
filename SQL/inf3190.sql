SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE IF NOT EXISTS `h2020_employes` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id employe',
  `nom` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datenaissance` date NOT NULL,
  `photo` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courriel` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `h2020_produits` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'numero produit',
  `nom` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nom produit',
  `description` text COLLATE utf8mb4_unicode_ci,
  `fabricant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` decimal(10,4) NOT NULL DEFAULT '0.0000',
  `photo` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'chemin du fichier image',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Info produits';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
