-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 13, 2021 at 06:43 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demarches_publiques`
--

-- --------------------------------------------------------

--
-- Table structure for table `actededeces`
--

DROP TABLE IF EXISTS `actededeces`;
CREATE TABLE IF NOT EXISTS `actededeces` (
  `id_deces` int(11) NOT NULL AUTO_INCREMENT,
  `acte_en_tant_que` varchar(55) NOT NULL,
  `type_acte` varchar(55) NOT NULL,
  `nb_copie` varchar(55) NOT NULL,
  `civilite` varchar(55) NOT NULL,
  `nom_naissance` varchar(55) NOT NULL,
  `prenom` varchar(55) NOT NULL,
  `date_naissance` varchar(55) NOT NULL,
  `ville_naissance` varchar(55) NOT NULL,
  `code_postal_naissance` varchar(55) NOT NULL,
  `pays_naissance` varchar(55) NOT NULL,
  `information_deces` varchar(55) NOT NULL,
  `ville_deces` varchar(55) NOT NULL,
  `pays_deces` varchar(55) NOT NULL,
  `nom_usage` varchar(55) NOT NULL,
  `prenom_acte` varchar(55) NOT NULL,
  `adresse_acte` varchar(55) NOT NULL,
  `code_postal_acte` varchar(55) NOT NULL,
  `ville_acte` varchar(55) NOT NULL,
  `pays_acte` varchar(55) NOT NULL,
  `email_acte` varchar(55) NOT NULL,
  `telephone_acte` varchar(55) NOT NULL,
  PRIMARY KEY (`id_deces`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actededeces`
--

INSERT INTO `actededeces` (`id_deces`, `acte_en_tant_que`, `type_acte`, `nb_copie`, `civilite`, `nom_naissance`, `prenom`, `date_naissance`, `ville_naissance`, `code_postal_naissance`, `pays_naissance`, `information_deces`, `ville_deces`, `pays_deces`, `nom_usage`, `prenom_acte`, `adresse_acte`, `code_postal_acte`, `ville_acte`, `pays_acte`, `email_acte`, `telephone_acte`) VALUES
(8, 'Son Ã©poux- Son Ã©pouse', 'Extrait plurilingue', '3', 'Monsieur', 'ACTEDEDECES', 'ACTEDEDECES', '2021-07-13', 'ACTEDEDECES', 'ACTEDEDECES', 'ACTEDEDECES', '2021-07-28', 'ACTEDEDECES', 'ACTEDEDECES', 'ACTEDEDECES', 'ACTEDEDECES', 'ACTEDEDECES', 'ACTEDEDECES', 'ACTEDEDECES', 'ACTEDEDECES', 'ACTEDEDECES', 'ACTEDEDECES');

-- --------------------------------------------------------

--
-- Table structure for table `actedemariage`
--

DROP TABLE IF EXISTS `actedemariage`;
CREATE TABLE IF NOT EXISTS `actedemariage` (
  `id_mariage` int(11) NOT NULL AUTO_INCREMENT,
  `acte_en_tant_que` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type_acte` varchar(55) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nb_copie` varchar(55) NOT NULL,
  `date_mariage` varchar(55) NOT NULL,
  `ville_mariage` varchar(55) NOT NULL,
  `code_postal_mariage` varchar(55) NOT NULL,
  `pays_mariage` varchar(55) NOT NULL,
  `civilite` varchar(55) NOT NULL,
  `nom_naissance` varchar(55) NOT NULL,
  `prenom_naissance` varchar(55) NOT NULL,
  `date_naissance` varchar(55) NOT NULL,
  `ville_naissance` varchar(55) NOT NULL,
  `code_postal_naissance` varchar(55) NOT NULL,
  `pays_naissance` varchar(55) NOT NULL,
  `nationalite` varchar(55) NOT NULL,
  `nom_naissance_pere` varchar(55) NOT NULL,
  `prenom_pere` varchar(55) NOT NULL,
  `nom_naissance_mere` varchar(55) NOT NULL,
  `prenom_mere` varchar(55) NOT NULL,
  `civilite_deux` varchar(55) NOT NULL,
  `nom_naissance_deux` varchar(55) NOT NULL,
  `prenom_deux` varchar(55) NOT NULL,
  `date_naissance_deux` varchar(55) NOT NULL,
  `ville_naissance_deux` varchar(55) NOT NULL,
  `code_postal_naissance_deux` varchar(55) NOT NULL,
  `pays_naissance_deux` varchar(55) NOT NULL,
  `nationalite_deux` varchar(55) NOT NULL,
  `nom_naissance_pere_deux` varchar(55) NOT NULL,
  `prenom_pere_deux` varchar(55) NOT NULL,
  `nom_naissance_mere_deux` varchar(55) NOT NULL,
  `prenom_mere_deux` varchar(55) NOT NULL,
  `nom_usage` varchar(55) NOT NULL,
  `prenom_acte` varchar(55) NOT NULL,
  `adresse_acte` varchar(55) NOT NULL,
  `code_postal_acte` varchar(55) NOT NULL,
  `ville_acte` varchar(55) NOT NULL,
  `pays_acte` varchar(55) NOT NULL,
  `email_acte` varchar(55) NOT NULL,
  `telephone` varchar(55) NOT NULL,
  PRIMARY KEY (`id_mariage`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actedemariage`
--

INSERT INTO `actedemariage` (`id_mariage`, `acte_en_tant_que`, `type_acte`, `nb_copie`, `date_mariage`, `ville_mariage`, `code_postal_mariage`, `pays_mariage`, `civilite`, `nom_naissance`, `prenom_naissance`, `date_naissance`, `ville_naissance`, `code_postal_naissance`, `pays_naissance`, `nationalite`, `nom_naissance_pere`, `prenom_pere`, `nom_naissance_mere`, `prenom_mere`, `civilite_deux`, `nom_naissance_deux`, `prenom_deux`, `date_naissance_deux`, `ville_naissance_deux`, `code_postal_naissance_deux`, `pays_naissance_deux`, `nationalite_deux`, `nom_naissance_pere_deux`, `prenom_pere_deux`, `nom_naissance_mere_deux`, `prenom_mere_deux`, `nom_usage`, `prenom_acte`, `adresse_acte`, `code_postal_acte`, `ville_acte`, `pays_acte`, `email_acte`, `telephone`) VALUES
(4, 'Son Ã©poux- Son Ã©pouse', 'Extrait sans filiation', '2', '2021-07-09', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'Monsieur', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', '2021-08-04', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'Monsieur', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', '2021-07-21', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE', 'ACTEDEMARIAGE');

-- --------------------------------------------------------

--
-- Table structure for table `actedenaissance`
--

DROP TABLE IF EXISTS `actedenaissance`;
CREATE TABLE IF NOT EXISTS `actedenaissance` (
  `id_naissance` int(11) NOT NULL AUTO_INCREMENT,
  `acte_en_tant_que` varchar(255) NOT NULL,
  `type_acte` varchar(255) NOT NULL,
  `nb_copie` varchar(255) NOT NULL,
  `civilite` varchar(55) NOT NULL,
  `nom_naissance` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_naissance` varchar(255) NOT NULL,
  `ville_naissance` varchar(255) NOT NULL,
  `code_postal_naissance` varchar(255) NOT NULL,
  `pays_naissance` varchar(255) NOT NULL,
  `nom_naissance_pere` varchar(255) NOT NULL,
  `prenom_pere` varchar(255) NOT NULL,
  `nom_naissance_mere` varchar(255) NOT NULL,
  `prenom_mere` varchar(255) NOT NULL,
  `nom_usage` varchar(255) NOT NULL,
  `prenom_acte` varchar(255) NOT NULL,
  `adresse_acte` varchar(255) NOT NULL,
  `code_postal_acte` varchar(255) NOT NULL,
  `ville_acte` varchar(255) NOT NULL,
  `pays_acte` varchar(255) NOT NULL,
  `email_acte` varchar(255) NOT NULL,
  `telephone_acte` varchar(255) NOT NULL,
  PRIMARY KEY (`id_naissance`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actedenaissance`
--

INSERT INTO `actedenaissance` (`id_naissance`, `acte_en_tant_que`, `type_acte`, `nb_copie`, `civilite`, `nom_naissance`, `prenom`, `date_naissance`, `ville_naissance`, `code_postal_naissance`, `pays_naissance`, `nom_naissance_pere`, `prenom_pere`, `nom_naissance_mere`, `prenom_mere`, `nom_usage`, `prenom_acte`, `adresse_acte`, `code_postal_acte`, `ville_acte`, `pays_acte`, `email_acte`, `telephone_acte`) VALUES
(8, 'Son pÃ¨re - Sa mÃ¨re', 'Extrait sans filiation', '1', 'Madame', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', '2021-07-13', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', 'ACTEDENAISSANCE', 'ACTEDENAISSANCEACTEDENAISSANCE', 'ACTEDENAISSANCE');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre_art` varchar(255) CHARACTER SET utf8 NOT NULL,
  `image_art` varchar(255) NOT NULL,
  `contenu_art` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_pub_art` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `titre_art`, `image_art`, `contenu_art`, `date_pub_art`) VALUES
(44, 'Covd19  Olivier VÃ©ran alerte les antivaccins', 'decret2.png', 'ace Ã  la menace du variant Delta, \"un ennemi nouveau parce que beaucoup plus contagieux\" selon le ministre, l\'inquiÃ©tude de la rÃ©pÃ©tition du schÃ©ma de l\'annÃ©e derniÃ¨re monte dans les rangs du gouvernement. \"Lâ€™Ã©pidÃ©mie repart au cÅ“ur de lâ€™Ã©tÃ©. Elle repart Ã  partir des jeunes. Il va se passer la mÃªme chose que lâ€™Ã©tÃ© dernier : les jeunes vont contaminer les moins jeunes et vous allez avoir une augmentation de la pression hospitaliÃ¨re\" confirme Olivier VÃ©r', '2021-07-21'),
(45, 'Covd-21 : Olivier VÃ©ran alerte les antivaccins', 'decret3.png', 'ace Ã  la menace du variant Delta, \"un ennemi nouveau parce que beaucoup plus contagieux\" selon le ministre, l\'inquiÃ©tude de la rÃ©pÃ©tition du schÃ©ma de l\'annÃ©e derniÃ¨re monte dans les rangs du gouvernement. \"Lâ€™Ã©pidÃ©mie repart au cÅ“ur de lâ€™Ã©tÃ©. Elle repart Ã  partir des jeunes. Il va se passer la mÃªme chose que lâ€™Ã©tÃ© dernier : les jeunes vont contaminer les moins jeunes et vous allez avoir une augmentation de la pression hospitaliÃ¨re\" confirme Olivier VÃ©r', '2021-07-15'),
(42, 'Covd-19 : Olivier VÃ©ran alerte les antivaccins', 'decret1.png', 'Face Ã  la menace du variant Delta, \"un ennemi nouveau parce que beaucoup plus contagieux\" selon le ministre, l\'inquiÃ©tude de la rÃ©pÃ©tition du schÃ©ma de l\'annÃ©e derniÃ¨re monte dans les rangs du gouvernement. \"Lâ€™Ã©pidÃ©mie repart au cÅ“ur de lâ€™Ã©tÃ©. Elle repart Ã  partir des jeunes. Il va se passer la mÃªme chose que lâ€™Ã©tÃ© dernier : les jeunes vont contaminer les moins jeunes et vous allez avoir une augmentation de la pression hospitaliÃ¨re\" confirme Olivier VÃ©ran.', '2021-07-12');

-- --------------------------------------------------------

--
-- Table structure for table `casierjudiciaire`
--

DROP TABLE IF EXISTS `casierjudiciaire`;
CREATE TABLE IF NOT EXISTS `casierjudiciaire` (
  `id_casier` int(11) NOT NULL AUTO_INCREMENT,
  `lieu_naissance` text CHARACTER SET utf8 NOT NULL,
  `adresse` varchar(55) NOT NULL,
  `traduction` varchar(55) NOT NULL,
  `langue_traduction` varchar(55) NOT NULL,
  `civilite` varchar(55) NOT NULL,
  `nom_naissance` varchar(55) NOT NULL,
  `prenom` varchar(55) NOT NULL,
  `date_naissance` varchar(55) NOT NULL,
  `ville_naissance` varchar(55) NOT NULL,
  `code_postal` varchar(55) NOT NULL,
  `pays_naissance` varchar(55) NOT NULL,
  `piece_un` varchar(255) NOT NULL,
  `piece_deux` varchar(255) NOT NULL,
  `piece_trois` varchar(255) NOT NULL,
  `piece_quatre` varchar(255) NOT NULL,
  `nom_usage` varchar(55) NOT NULL,
  `prenom_casier` varchar(55) NOT NULL,
  `adresse_casier` varchar(55) NOT NULL,
  `code_postal_casier` varchar(55) NOT NULL,
  `ville_acte` varchar(55) NOT NULL,
  `pays_acte` varchar(55) NOT NULL,
  `email_acte` varchar(55) NOT NULL,
  `telephone_acte` varchar(55) NOT NULL,
  PRIMARY KEY (`id_casier`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `casierjudiciaire`
--

INSERT INTO `casierjudiciaire` (`id_casier`, `lieu_naissance`, `adresse`, `traduction`, `langue_traduction`, `civilite`, `nom_naissance`, `prenom`, `date_naissance`, `ville_naissance`, `code_postal`, `pays_naissance`, `piece_un`, `piece_deux`, `piece_trois`, `piece_quatre`, `nom_usage`, `prenom_casier`, `adresse_casier`, `code_postal_casier`, `ville_acte`, `pays_acte`, `email_acte`, `telephone_acte`) VALUES
(18, 'A lâ€™Ã©tranger, hors de France', 'Oui', 'Non', '- Choisir votre rÃ©ponse -', 'Monsieur', 'TESTCASIER', 'TESTCASIER', '2021-07-21', 'TESTCASIER', 'TESTCASIER', 'TESTCASIER', 'TEST UPLOAD - (1).pdf', 'TEST UPLOAD - (2).pdf', 'TEST UPLOAD - (3).pdf', 'TEST UPLOAD - (4) .pdf', 'TESTCASIER', 'TESTCASIER', 'TESTCASIER', 'TESTCASIER', 'TESTCASIER', 'TESTCASIER', 'TESTCASIER', 'TESTCASIER');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_identifiant` varchar(55) NOT NULL,
  `login_password` varchar(55) NOT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_identifiant`, `login_password`) VALUES
(1, 'admin', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
