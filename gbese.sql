/*
SQLyog Ultimate v11.5 (64 bit)
MySQL - 5.0.51b-community-nt : Database - gbeseapp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gbeseapp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `gbeseapp`;

/*Table structure for table `gbesetable` */

DROP TABLE IF EXISTS `gbesetable`;

CREATE TABLE `gbesetable` (
  `id` int(255) NOT NULL auto_increment,
  `lender` varchar(255) NOT NULL,
  `g_name` varchar(255) NOT NULL,
  `g_email` varchar(255) NOT NULL,
  `g_phone` varchar(255) NOT NULL,
  `g_amount` int(255) NOT NULL,
  `g_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `g_returnDate` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `suretee_name` varchar(255) NOT NULL,
  `suretee_address` varchar(255) NOT NULL,
  `suretee_phone` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

/*Data for the table `gbesetable` */

insert  into `gbesetable`(`id`,`lender`,`g_name`,`g_email`,`g_phone`,`g_amount`,`g_date`,`g_returnDate`,`address`,`suretee_name`,`suretee_address`,`suretee_phone`) values (20,'johndoe@gmail.com','Damian Rosy','damian@roxy','08024687451',20000,'2019-07-31 00:00:00','2019-08-01','222, Meiran road.','Fred Alonso','213, Meiran road','2341657898'),(21,'jane@doe.com','Shane Marney','shane@gmail.com','09086745682',100000,'2019-07-31 00:00:00','2019-08-31','14, Meiran road','James Mason','234, Meiran road','1234561123'),(22,'jane@doe.com','Alex John','alex@john','09024135372',500000,'2019-07-31 00:00:00','2019-08-01','12, Oakland road','Andrew maurice','14, Oakland street','07098742136'),(23,'alex@adam','Alex Iwobi','iwobi@alex','07045721995',1000000,'2019-07-31 00:00:00','2019-08-31','12, Chester road','Muse Isreal','14, Chester street','08078964329'),(24,'jane@doe.com','Harry Kane','harry@kane','08176532416',250000,'0000-00-00 00:00:00','2019-08-10','12, Fulham road','Raheem sterlin','13, Fulham road','09087389213'),(25,'qwe@gmail.com','onigbese','onigbese@gmail.com','456',456,'0000-00-00 00:00:00','2020-03-03','789,onigese street','oni','0,oni street','789'),(27,'jane@doe.com','Dane','Dann@g','2345641',500000,'2019-08-03 01:00:22','2019-08-31','asdfg','','',''),(29,'alex@adam','onigbese','onigbese@gmail.com','527372892794',245000,'2019-08-03 06:47:45','2019-08-17','dsfsgg','','','');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(255) NOT NULL auto_increment,
  `password` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `income` varchar(255) NOT NULL,
  `expenses` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL default '0000-00-00 00:00:00' on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`password`,`Name`,`email`,`phone`,`income`,`expenses`,`reg_date`) values (1,'11111','John Doe','johndoe@gmail.com','08012345678','','','0000-00-00 00:00:00'),(2,'12345','Jane Doe','jane@doe.com','09012345678','','','0000-00-00 00:00:00'),(3,'00000','Alex Adam','alex@adam','09023415768','','','0000-00-00 00:00:00'),(4,'123','qwe','qwe@gmail.com','123','','','0000-00-00 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
