CREATE TABLE `games` (
	  `idGame` int(11) NOT NULL AUTO_INCREMENT,
	  `pseudo` varchar(32) NOT NULL,
	  `score` int(11) NOT NULL,
	  `date` datetime NOT NULL,
	  PRIMARY KEY (`idGame`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

CREATE TABLE `cheaters` (
	  `idGame` int(32) NOT NULL,
	  `comments` text NOT NULL,
	  UNIQUE KEY `idGame` (`idGame`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

SELECT * FROM `games`
RIGHT JOIN `cheaters` ON games.idGame = cheaters.idGame
