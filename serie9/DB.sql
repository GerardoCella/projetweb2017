SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE DATABASE `test` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `test`;

-- --------------------------------------------------------

--
-- Structure de la table `tabletest`
--

DROP TABLE IF EXISTS `tabletest`;
CREATE TABLE IF NOT EXISTS `tabletest` (
  `ID` bigint(20) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(250) NOT NULL,
  `PRENOM` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `tabletest`
--

INSERT INTO `tabletest` (`ID`, `NOM`, `PRENOM`) VALUES
(1, 'de guglielmo', 'roberto'),
(2, 'Cella', 'Gerardo');


