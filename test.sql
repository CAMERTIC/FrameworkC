--
-- Base de données: `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `entite`
--

CREATE TABLE IF NOT EXISTS `entite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `numero` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;