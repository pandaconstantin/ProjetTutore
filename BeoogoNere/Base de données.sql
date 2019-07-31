

CREATE TABLE `Entreprise` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `Entreprise` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `detail` text NOT NULL,
  `delete_status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


CREATE TABLE `ville` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `ville` varchar(255) NOT NULL,
  `classnum` int(12) NOT NULL,
  `classteacher` varchar(11) NOT NULL,
  `delete_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO ville VALUES("1","Koudougou","0","","0");







CREATE TABLE `pollution` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `stdid` varchar(255) NOT NULL,
  `paid` int(255) NOT NULL,
  `submitdate` date NOT NULL,
  `transcation_remark` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;




CREATE TABLE `activites` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `joindate` int(11) NOT NULL,
  `about` text NOT NULL,
  `contact` varchar(255) NOT NULL,
  `fees` int(255) NOT NULL,
  `Entreprise` varchar(255) NOT NULL,
  `balance` int(255) NOT NULL,
  `delete_status` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;




CREATE TABLE `user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `lastlogin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("1","esi","6503eda487e939e2a4980e215ab455e8","esi","esi@gmail",CURRENT_TIMESTAMP);

