/*
SQLyog Community v11.42 (64 bit)
MySQL - 5.6.17 : Database - paf
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`paf` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `paf`;

/*Table structure for table `pafs` */

DROP TABLE IF EXISTS `pafs`;

CREATE TABLE `pafs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `EmployeeName` varchar(255) DEFAULT NULL,
  `EmploymentStatus` varchar(255) DEFAULT NULL,
  `DateHired` datetime DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `DateEvaluated` datetime DEFAULT NULL,
  `NextEvaluation` datetime DEFAULT NULL,
  `Supervisor` varchar(255) DEFAULT NULL,
  `PeriodFrom` datetime DEFAULT NULL,
  `PeriodTo` datetime DEFAULT NULL,
  `ResultsEScore` float DEFAULT NULL,
  `ResultsSScore` float DEFAULT NULL,
  `ResultsComment` text,
  `AttendanceEScore` float DEFAULT NULL,
  `AttendanceSScore` float DEFAULT NULL,
  `AttendanceComment` text,
  `CommsEScore` float DEFAULT NULL,
  `CommsSScore` float DEFAULT NULL,
  `CommsComment` text,
  `QualityWorkEScore` float DEFAULT NULL,
  `QualityWorkSScore` float DEFAULT NULL,
  `QualityWorkComment` text,
  `TeamworkEScore` float DEFAULT NULL,
  `TeamworkSScore` float DEFAULT NULL,
  `TeamworkComment` text,
  `JobKnowEScore` float DEFAULT NULL,
  `JobKnowSScore` float DEFAULT NULL,
  `JobKnowComment` text,
  `WorkEthEScore` float DEFAULT NULL,
  `WorkEthSScore` float DEFAULT NULL,
  `WorkEthicsComment` text,
  `ques1` text,
  `ques2` text,
  `ques3` text,
  `ques4` text,
  `ques5` text,
  `ques6` text,
  `ques7` text,
  `EmployeeSign` varchar(255) DEFAULT NULL,
  `DiscussedBy` varchar(255) DEFAULT NULL,
  `DiscussedByDate` datetime DEFAULT NULL,
  `AppraisersSign` varchar(255) DEFAULT NULL,
  `DiscussedTo` varchar(255) DEFAULT NULL,
  `DiscussedToDate` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `pafs` */

insert  into `pafs`(`id`,`EmployeeName`,`EmploymentStatus`,`DateHired`,`Position`,`DateEvaluated`,`NextEvaluation`,`Supervisor`,`PeriodFrom`,`PeriodTo`,`ResultsEScore`,`ResultsSScore`,`ResultsComment`,`AttendanceEScore`,`AttendanceSScore`,`AttendanceComment`,`CommsEScore`,`CommsSScore`,`CommsComment`,`QualityWorkEScore`,`QualityWorkSScore`,`QualityWorkComment`,`TeamworkEScore`,`TeamworkSScore`,`TeamworkComment`,`JobKnowEScore`,`JobKnowSScore`,`JobKnowComment`,`WorkEthEScore`,`WorkEthSScore`,`WorkEthicsComment`,`ques1`,`ques2`,`ques3`,`ques4`,`ques5`,`ques6`,`ques7`,`EmployeeSign`,`DiscussedBy`,`DiscussedByDate`,`AppraisersSign`,`DiscussedTo`,`DiscussedToDate`,`created_at`,`updated_at`) values (2,'Joene Floresca','Probitionary','2015-06-05 20:17:00','Programmer','2015-06-01 20:18:00','2015-06-02 20:18:00','Krishna Rao','2015-06-05 20:18:00','2015-06-06 20:18:00',1,1,'Results',2,2,'Attendance, Punctuality & Production Hours',3,3,'Communication Skills',4,4,'Quality of Work',5,5,'Teamwork',6,6,'Job Knowledge',7,7,'Work Ethics','AAAAAAAAAAAAAAAA','AAAAAAAAAAAAAAAA','AAAAAAAAAAAAAAAA','AAAAAAAAAAAAAAAA','AAAAAAAAAAAAAAAA','AAAAAAAAAAAAAAAA','AAAAAAAAAAAAAAAA','AAAAAAAAAAAAAAAA','AAAAAAAAAAAAAAAA','2015-06-05 20:19:00','AAAAAAAAAAAAAAAA','AAAAAAAAAAAAAAAA','2015-06-05 20:19:00','2015-06-05 12:19:40','2015-06-05 12:19:40');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
