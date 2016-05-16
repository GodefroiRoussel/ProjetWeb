-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Host: mysql1.paris1.alwaysdata.com
-- Generation Time: May 16, 2016 at 10:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emploitech_projetweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateNaiss` date NOT NULL,
  `civilité` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `num` int(11) NOT NULL,
  PRIMARY KEY (`idAdmin`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`idAdmin`, `nom`, `prenom`, `dateNaiss`, `civilité`, `email`, `passwd`, `telephone`, `ville`, `rue`, `num`) VALUES
(7, 'Roussel', 'Godefroi', '1995-07-10', 'Monsieur', 'admin@a', 'f71dbe52628a3f83a77ab494817525c6', 201050406, 'Montpellier', 'de la république', 12),
(8, 'nou', 'nouv', '2016-05-10', 'Monsieur', 'nouveau@a', 'f71dbe52628a3f83a77ab494817525c6', 25164152, 'Montpellier', 'dsfdsfs', 15);

-- --------------------------------------------------------

--
-- Table structure for table `contrat`
--

CREATE TABLE IF NOT EXISTS `contrat` (
  `idContrat` int(11) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(255) DEFAULT NULL,
  `dateDeb` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `idInterim` int(11) DEFAULT NULL,
  `refMis` int(11) DEFAULT NULL,
  PRIMARY KEY (`idContrat`),
  KEY `idInterim` (`idInterim`),
  KEY `refMis` (`refMis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contrat`
--

INSERT INTO `contrat` (`idContrat`, `lieu`, `dateDeb`, `dateFin`, `idInterim`, `refMis`) VALUES
(1, 'test encore', '2016-05-26', '2016-06-24', 10, 6),
(2, 'Mairie de Montpellier', '2016-05-17', '2016-05-25', 2, 2),
(3, 'Montpellier', '2016-05-17', '2016-05-28', 10, 52),
(4, 'Marseille', '2016-05-16', '2016-05-28', 14, 53);

--
-- Triggers `contrat`
--
DROP TRIGGER IF EXISTS `contratSigne`;
DELIMITER //
CREATE TRIGGER `contratSigne` AFTER INSERT ON `contrat`
 FOR EACH ROW BEGIN 

DELETE FROM postuler WHERE refMission IN (SELECT m.refMission FROM mission m 
WHERE (m.dateDeb>= NEW.dateDeb AND m.dateDeb <= NEW.dateFin)
OR (m.dateDeb<= NEW.dateDeb AND m.dateFin >= NEW.dateDeb) ) AND
idInterim = NEW.idInterim;

DELETE FROM postuler WHERE refMission = NEW.refMis;
END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `interimaire`
--

CREATE TABLE IF NOT EXISTS `interimaire` (
  `idInterimaire` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `dateNaiss` date NOT NULL,
  `civilité` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `rue` varchar(255) NOT NULL,
  `num` int(11) NOT NULL,
  PRIMARY KEY (`idInterimaire`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `interimaire`
--

INSERT INTO `interimaire` (`idInterimaire`, `nom`, `prenom`, `dateNaiss`, `civilité`, `email`, `passwd`, `telephone`, `ville`, `rue`, `num`) VALUES
(2, 'Roussel', 'Godefroi', '2016-05-13', 'Monsieur', 'gofff110@gmail.com', 'f71dbe52628a3f83a77ab494817525c6', 641822661, 'Montpellier', 'route de mende', 1424),
(6, 'Masson', 'Yoann', '2014-01-20', 'Monsieur', 'gaga@a', 'deb27aa43bf1a1659fa099169fe6490a', 201050406, 'Toulouse', 'de l''étoile', 1521),
(8, 'Cervoise', 'Quentin', '0000-00-00', 'Monsieur', 'qcervoise@gmail.com', '6e5c02414c9dd971efc2babfed9fb0a1', 0, 'Montpellier', '', 0),
(10, 'Cabourg', 'Max', '2125-05-10', 'Monsieur', 'max@a', 'd41d8cd98f00b204e9800998ecf8427e', 201050406, 'Montpellier', 'de Polytech', 12),
(14, 'Masson', 'Yoann', '1994-03-10', 'Monsieur', 'test12@e', 'f71dbe52628a3f83a77ab494817525c6', 201050407, 'Montpellier', 'de proby', 122),
(16, 'Roussel', 'Godefroi', '1995-07-10', 'Monsieur', 'test52@gmail.com', 'f71dbe52628a3f83a77ab494817525c6', 2147483647, 'Montpellier', 'de Polytech', 45);

--
-- Triggers `interimaire`
--
DROP TRIGGER IF EXISTS `interimaireSupprimee`;
DELIMITER //
CREATE TRIGGER `interimaireSupprimee` AFTER DELETE ON `interimaire`
 FOR EACH ROW BEGIN 

DELETE FROM postuler WHERE idInterim = OLD.idInterimaire;

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE IF NOT EXISTS `mission` (
  `refMission` int(11) NOT NULL AUTO_INCREMENT,
  `lieu` varchar(255) NOT NULL,
  `dateDeb` date NOT NULL,
  `dateFin` date NOT NULL,
  `domaine` varchar(255) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `diplome` varchar(255) DEFAULT NULL,
  `salaire` int(11) DEFAULT NULL,
  PRIMARY KEY (`refMission`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`refMission`, `lieu`, `dateDeb`, `dateFin`, `domaine`, `experience`, `diplome`, `salaire`) VALUES
(2, 'Mairie de Montpellier', '2016-05-17', '2016-05-25', 'Batiment', 2, '', 412),
(6, 'test encore', '2016-05-26', '2016-06-24', 'Environnement', 1, 'Aucun', 120),
(8, 'Lille', '2016-05-13', '2016-05-16', 'Polytech', 3, 'Bac +3', 0),
(10, 'Paris', '2016-05-06', '2016-05-31', 'Polytech', 2, 'Bac +2', 455),
(11, 'srtdyfg', '2016-05-14', '2016-05-20', 'ghbjnk', 0, '', 0),
(12, 'Polytech', '2016-05-24', '2016-06-10', 'Informatique et Gestion', 2, 'Bac +3', 1210),
(14, 'gbgdfgdgsfdds', '2016-05-11', '2016-05-18', 'fdsfsd', 0, 'fsd', 25),
(51, 'Montpellier', '2016-05-15', '2016-05-25', 'Agroalimentaire', 2, 'Bac +3', 1320),
(52, 'Montpellier', '2016-05-17', '2016-05-28', 'Agroalimentaire', 2, 'Bac +3', 1200),
(53, 'Marseille', '2016-05-16', '2016-05-28', 'Agroalimentaire', 2, 'Bac +1', 1200),
(54, 'IBM Montpellier', '2016-05-20', '2016-06-12', 'Informatique', 3, 'Bac +5', 1700),
(55, 'Polytech Montepellier', '2016-05-18', '2016-05-25', 'Enseignement', 1, 'Doctorat', 1450);

--
-- Triggers `mission`
--
DROP TRIGGER IF EXISTS `missionSupprimee`;
DELIMITER //
CREATE TRIGGER `missionSupprimee` AFTER DELETE ON `mission`
 FOR EACH ROW BEGIN 

DELETE FROM postuler WHERE refMission = OLD.refMission;

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `postuler`
--

CREATE TABLE IF NOT EXISTS `postuler` (
  `idInterim` int(11) NOT NULL,
  `refMission` int(11) NOT NULL,
  PRIMARY KEY (`idInterim`,`refMission`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postuler`
--

INSERT INTO `postuler` (`idInterim`, `refMission`) VALUES
(2, 12),
(2, 54),
(14, 12),
(14, 54);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contrat`
--
ALTER TABLE `contrat`
  ADD CONSTRAINT `contrat_ibfk_1` FOREIGN KEY (`idInterim`) REFERENCES `interimaire` (`idInterimaire`),
  ADD CONSTRAINT `contrat_ibfk_2` FOREIGN KEY (`refMis`) REFERENCES `mission` (`refMission`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
