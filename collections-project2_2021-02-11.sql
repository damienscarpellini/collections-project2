# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.33)
# Database: collections-project2
# Generation Time: 2021-02-11 19:52:27 +0000
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
  `colour` tinyint(2) unsigned NOT NULL,
  `size_rating` tinyint(2) unsigned NOT NULL,
  `healthy_rating` tinyint(2) unsigned NOT NULL,
  `image_path` varchar(50) DEFAULT NULL,
  `delete` tinyint(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `collections` WRITE;
/*!40000 ALTER TABLE `collections` DISABLE KEYS */;

INSERT INTO `collections` (`id`, `food`, `colour`, `size_rating`, `healthy_rating`, `image_path`, `delete`)
VALUES
	(1,'Chocolate',5,3,1,'images/chocolate.jpeg',0),
	(2,'Banana',7,4,9,'images/banana.jpeg',0),
	(3,'Olives',3,1,6,'images/olives.jpeg',0),
	(4,'Cheese',4,10,6,'images/cheese.jpeg',0),
	(5,'Caramel',6,3,2,'images/caramel.jpeg',0),
	(6,'Carrots',9,4,10,'images/carrots.jpeg',0),
	(7,'Blueberry',8,1,9,'images/blueberry.jpeg',0),
	(8,'Vienetta',6,6,0,'images/vienetta.jpeg',0),
	(9,'Ice',0,2,10,'images/ice.jpeg',0),
	(10,'Baking Powder',3,0,0,'images/bakingpowder.jpeg',0),
	(11,'test',1,1,1,'test/test.jpeg',0);

/*!40000 ALTER TABLE `collections` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
