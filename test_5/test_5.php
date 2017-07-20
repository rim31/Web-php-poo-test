<?php

// CREATE TABLE `games` (
// 	  `idGame` int(11) NOT NULL AUTO_INCREMENT,
// 	  `pseudo` varchar(32) NOT NULL,
// 	  `score` int(11) NOT NULL,
// 	  `date` datetime NOT NULL,
// 	  PRIMARY KEY (`idGame`)
// ) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
//
// CREATE TABLE `cheaters` (
// 	  `idGame` int(32) NOT NULL,
// 	  `comments` text NOT NULL,
// 	  UNIQUE KEY `idGame` (`idGame`)
// ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
//
// INSERT INTO `games` (`pseudo`, `score`, `date`)
// VALUES ('rim', '67', NOW());
// INSERT INTO `games` (`pseudo`, `score`, `date`)
// VALUES ('rim1', '67', NOW());
// INSERT INTO `games` (`pseudo`, `score`, `date`)
// VALUES ('rim2', '67', NOW());
// INSERT INTO `games` (`pseudo`, `score`, `date`)
// VALUES ('rim3', '67', NOW());
//
// insert into `cheaters` (`idGame`, `comments`)
// values (2, 'sale noob');
// insert into `cheaters` (`idGame`, `comments`)
// values (4, 'sale noob 2');


//Question_1

SELECT score FROM games
WHERE Pseudo='john' ORDER BY date;

//Question_2

SELECT * FROM `games`
RIGHT JOIN `cheaters` ON games.idGame = cheaters.idGame

//Question_3

SELECT * FROM `games` WHERE games.idGame NOT IN (
  SELECT games.idGame FROM `games`
  RIGHT JOIN `cheaters` ON games.idGame = cheaters.idGame
);

 ?>
