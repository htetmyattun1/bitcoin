/*
SQLyog Community v9.63 
MySQL - 5.5.5-10.1.21-MariaDB : Database - bitcoin
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bitcoin` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bitcoin`;

/*Table structure for table `assetverify` */

DROP TABLE IF EXISTS `assetverify`;

CREATE TABLE `assetverify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) DEFAULT NULL,
  `asset` float DEFAULT NULL,
  `currency` char(3) DEFAULT NULL,
  `assetverify` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Table structure for table `bankasset` */

DROP TABLE IF EXISTS `bankasset`;

CREATE TABLE `bankasset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) DEFAULT NULL,
  `bankasset` varchar(50) DEFAULT NULL,
  `content` mediumblob,
  `verify` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Table structure for table `buyoffer` */

DROP TABLE IF EXISTS `buyoffer`;

CREATE TABLE `buyoffer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `orderid` int(11) DEFAULT NULL,
  `trade` float DEFAULT NULL,
  `bitt` char(3) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `currency` char(3) DEFAULT NULL,
  `offeruserid` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `cryptowallet` */

DROP TABLE IF EXISTS `cryptowallet`;

CREATE TABLE `cryptowallet` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `userid` varchar(100) DEFAULT NULL,
  `cryptowallet` varchar(100) DEFAULT NULL,
  `content` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `order1` */

DROP TABLE IF EXISTS `order1`;

CREATE TABLE `order1` (
  `userid` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trade1` float DEFAULT NULL,
  `trade2` float DEFAULT NULL,
  `bitt` char(3) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `currency` char(3) DEFAULT NULL,
  `buysell` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Table structure for table `passport` */

DROP TABLE IF EXISTS `passport`;

CREATE TABLE `passport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) DEFAULT NULL,
  `passport` varchar(50) DEFAULT NULL,
  `content` mediumblob,
  `passportverify` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Table structure for table `utilitybill` */

DROP TABLE IF EXISTS `utilitybill`;

CREATE TABLE `utilitybill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) DEFAULT NULL,
  `utilitybill` varchar(50) DEFAULT NULL,
  `content` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
