/*
SQLyog Ultimate v11.33 (64 bit)
MySQL - 10.1.13-MariaDB : Database - dashboard
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `option_category_list` */

DROP TABLE IF EXISTS `option_category_list`;

CREATE TABLE `option_category_list` (
  `id` char(36) NOT NULL COMMENT 'id',
  `category_name` varchar(225) NOT NULL COMMENT 'Category Name',
  `category_color` varchar(10) NOT NULL COMMENT 'Category Color Code',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Created Date and Time',
  `deleted` tinyint(1) DEFAULT '0' COMMENT 'Deleted state 0/1',
  `last_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'last updated date and time',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `option_category_list` */

insert  into `option_category_list`(`id`,`category_name`,`category_color`,`created_date`,`deleted`,`last_updated`) values ('8467689e-3264-11e7-8740-84a6c87866de','Technology','#ee3377','2017-05-07 13:42:03',0,'2017-05-06 22:02:07'),('9ed73098-3264-11e7-8740-84a6c87866de','Test Management','#0099cc','2017-05-07 13:42:24',0,'2017-05-06 22:02:51'),('ad789700-3264-11e7-8740-84a6c87866de','Monitoring','#66bb44','2017-05-07 13:42:50',0,'2017-05-06 22:03:16'),('b3613e59-3264-11e7-8740-84a6c87866de','Others','#ff8800','2017-05-07 13:43:00',0,'2017-05-06 22:03:26'),('bd8a52f2-3264-11e7-8740-84a6c87866de','SIM Management','#8700ff','2017-05-07 13:46:17',0,'2017-05-06 22:03:43');

/*Table structure for table `option_url` */

DROP TABLE IF EXISTS `option_url`;

CREATE TABLE `option_url` (
  `id` char(36) NOT NULL COMMENT 'id',
  `option_name` varchar(225) NOT NULL COMMENT 'Option Name',
  `category_id` char(36) NOT NULL COMMENT 'Category Id',
  `option_url` varchar(225) NOT NULL COMMENT 'Option Url',
  `permission` int(10) NOT NULL COMMENT 'Permission',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Created Date and Time',
  `deleted` tinyint(1) DEFAULT '0' COMMENT 'Deleted state 0/1',
  `last_updated` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'last updated date and time',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `option_url` */

insert  into `option_url`(`id`,`option_name`,`category_id`,`option_url`,`permission`,`created_date`,`deleted`,`last_updated`) values ('0e3d127b-519f-11e7-b677-84a6c87866de','FRMS','ad789700-3264-11e7-8740-84a6c87866de','http://14.1.194.47:8180/step/frms/index.php/frms/',1,'2017-06-15 15:49:43',0,'2017-06-15 15:49:43'),('200e6d36-3394-11e7-8740-84a6c87866de','Training Plan','ad789700-3264-11e7-8740-84a6c87866de','http://10.28.19.245:8088/step/ttlt/index.php/ttlt/training',1,'2017-05-08 10:15:45',0,'2017-05-08 10:15:45'),('29869414-339a-11e7-8740-84a6c87866de','Feedback','ad789700-3264-11e7-8740-84a6c87866de','http://10.28.19.245:8088/step/ttlt/index.php/ttlt/feedback',1,'2017-05-08 10:58:58',0,'2017-05-08 10:58:58'),('351cc07e-3263-11e7-8740-84a6c87866de','PTRMS','ad789700-3264-11e7-8740-84a6c87866de','http://10.28.19.245:8088/ptrms/index.php/ptrms',1,'2017-05-06 22:06:11',0,'2017-05-06 21:52:44'),('49d0eec8-3263-11e7-8740-84a6c87866de','ZOOM','9ed73098-3264-11e7-8740-84a6c87866de','http://10.28.19.245:8088/zoom',1,'2017-05-06 22:05:57',0,'2017-05-06 21:53:19'),('5a465a91-3263-11e7-8740-84a6c87866de','PMAS','ad789700-3264-11e7-8740-84a6c87866de','http://10.28.19.245:8088/step/pmas/index.php/pmas/login',1,'2017-05-06 22:07:38',0,'2017-05-06 21:53:47'),('75c057a9-3265-11e7-8740-84a6c87866de','E-Bill','8467689e-3264-11e7-8740-84a6c87866de','http://10.28.19.245:8088/step/ebill/index.php/ebill/login',1,'2017-05-06 22:08:52',0,'2017-05-06 22:08:52'),('8154080f-3263-11e7-8740-84a6c87866de','Leave Plan','ad789700-3264-11e7-8740-84a6c87866de','http://10.28.19.245:8088/step/ttlt/index.php/ttlt/login',1,'2017-05-06 22:07:19',0,'2017-05-06 21:54:52'),('ac3da429-32e9-11e7-8740-84a6c87866de','JMT Test','8467689e-3264-11e7-8740-84a6c87866de','http://14.1.194.47:8180/step/jmt/index.php/jmt/',1,'2017-06-10 08:42:40',0,'2017-05-07 13:55:23'),('cf67a5d1-32e8-11e7-8740-84a6c87866de','KNOWLEDGE BASE WIKI','9ed73098-3264-11e7-8740-84a6c87866de','http://14.1.194.47:8180/step/wp_mywiki/',1,'2017-05-07 13:49:13',0,'2017-05-07 13:49:13');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
