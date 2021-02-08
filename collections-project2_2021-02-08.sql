# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: collections-project2
# Generation Time: 2021-02-08 13:59:25 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table collections
# ------------------------------------------------------------

DROP TABLE IF EXISTS `collections`;

CREATE TABLE `collections` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `food` varchar(30) DEFAULT 'null',
  `colour` varchar(20) DEFAULT NULL,
  `size-rating` int(2) DEFAULT NULL,
  `healty-rating` int(2) DEFAULT NULL,
  `image-path` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `collections` WRITE;
/*!40000 ALTER TABLE `collections` DISABLE KEYS */;

INSERT INTO `collections` (`id`, `food`, `colour`, `size-rating`, `healty-rating`, `image-path`)
VALUES
	(1,'chocolate','5',3,1,'images/chocolate.jpeg'),
	(2,'banana','7',4,9,'images/banana.jpeg'),
	(3,'olives','3',1,6,'images/olives.jpeg'),
	(4,'cheese','4',10,6,'images/cheese.jpeg'),
	(5,'caramel','6',3,2,'images/caramel.jpeg'),
	(6,'carrots','9',4,10,'images/carrots.jpeg'),
	(7,'blueberry','8',1,9,'images/blueberry.jpeg'),
	(8,'vienetta','6',6,0,'images/vienetta.jpeg'),
	(9,'ice','0',2,10,'images/ice.jpeg'),
	(10,'baking powder','3',0,0,'images/bakingpowder.jpeg');

/*!40000 ALTER TABLE `collections` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
