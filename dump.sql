/*
SQLyog Professional v13.1.2 (64 bit)
MySQL - 5.7.16 : Database - tasks_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tbl_tasks` */

DROP TABLE IF EXISTS `tbl_tasks`;

CREATE TABLE `tbl_tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txt` text COLLATE utf8_unicode_ci,
  `isEdit` int(1) DEFAULT '0',
  `isDone` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tbl_tasks` */

insert  into `tbl_tasks`(`id`,`email`,`user`,`txt`,`isEdit`,`isDone`) values 
(1,'q12@qwe.ru','qwerty2','Полить цветы',0,0),
(2,'a14@qmail.com','qwerty5','Прочитать книгу 2',1,1),
(3,'asd56@alpha.org','qwerty1','Приготовить обед',0,0),
(4,'www@yandex.com','qwerty8','Составить план',0,0),
(5,'info@gmail.com','qwerty6','Нарисовать картину',0,0),
(6,'eee@yandex.ru','qwerty3','Сделать скворешник',0,0),
(7,'zzz@gmail.com','aaaaaa','Закрыть окно',0,0),
(8,'e64f@yandex.ru','bbbbbb','<script>alert(‘test2’);</script>',1,1),
(9,'sedf@ya.ru','ddddddd','Отправить письмо',0,0),
(10,'s123@none.org','nnnnnnnn','Купить продукты',0,0),
(11,'kkk33@gogo.com','aaaac','Посадить дерево',0,0);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
