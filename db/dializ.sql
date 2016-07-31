/*
SQLyog Enterprise - MySQL GUI v7.15 
MySQL - 5.5.5-10.1.13-MariaDB : Database - dializ
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`dializ` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_persian_ci */;

USE `dializ`;

/*Table structure for table `addmission` */

DROP TABLE IF EXISTS `addmission`;

CREATE TABLE `addmission` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `addmissionDate` date NOT NULL,
  `ward` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `doctor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addmissionType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insuranceType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insuranceNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `room` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bed` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `addmission` */

/*Table structure for table `condition` */

DROP TABLE IF EXISTS `condition`;

CREATE TABLE `condition` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `condition` */

/*Table structure for table `diseasecode` */

DROP TABLE IF EXISTS `diseasecode`;

CREATE TABLE `diseasecode` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `diseasecode` */

/*Table structure for table `doctor` */

DROP TABLE IF EXISTS `doctor`;

CREATE TABLE `doctor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `family` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `doctor` */

insert  into `doctor`(`id`,`name`,`family`,`mobile`,`phone`,`address`,`created_at`,`updated_at`,`deleted_at`) values (1,'بهروز','سبک دست','0912839289','021389289','','2016-07-31 00:25:20','2016-07-31 00:25:20',NULL),(2,'ایمان','شریف النسب','09123782787','02147387843','شهرک غرب - گیشا','2016-07-31 00:25:53','2016-07-31 00:25:53',NULL),(3,'دکتر مهدی','عین الهی','09123782787','9127953485','تیسنتنستی','2016-07-31 00:26:14','2016-07-31 00:26:14',NULL);

/*Table structure for table `doctororder` */

DROP TABLE IF EXISTS `doctororder`;

CREATE TABLE `doctororder` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `dateTimeOrder` datetime NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `nurse_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `doctororder` */

/*Table structure for table `gender` */

DROP TABLE IF EXISTS `gender`;

CREATE TABLE `gender` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `gender` */

insert  into `gender`(`id`,`title`,`created_at`,`updated_at`,`deleted_at`) values (1,'مرد','2016-07-28 21:55:04','2016-07-28 21:55:04',NULL),(2,'زن','2016-07-28 21:55:09','2016-07-28 21:55:09',NULL);

/*Table structure for table `introductionletter` */

DROP TABLE IF EXISTS `introductionletter`;

CREATE TABLE `introductionletter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `introductionletter` */

insert  into `introductionletter`(`id`,`title`,`created_at`,`updated_at`,`deleted_at`) values (1,'تست','2016-07-30 21:29:16','2016-07-30 21:29:21','2016-07-30 21:29:21'),(2,'تست','2016-07-30 21:34:32','2016-07-30 21:34:38','2016-07-30 21:34:38');

/*Table structure for table `kindofadm` */

DROP TABLE IF EXISTS `kindofadm`;

CREATE TABLE `kindofadm` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `kindofadm` */

/*Table structure for table `maritalstatus` */

DROP TABLE IF EXISTS `maritalstatus`;

CREATE TABLE `maritalstatus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `maritalstatus` */

insert  into `maritalstatus`(`id`,`title`,`created_at`,`updated_at`,`deleted_at`) values (1,'مجرد','2016-07-28 21:55:27','2016-07-28 21:55:27',NULL),(2,'متاهل','2016-07-28 21:55:32','2016-07-28 21:55:32',NULL),(3,'مطلقه','2016-07-28 21:55:40','2016-07-28 21:55:40',NULL),(4,'بیوه','2016-07-28 21:55:51','2016-07-30 21:28:55','2016-07-30 21:28:55'),(5,'بیوه','2016-07-30 21:29:03','2016-07-30 21:29:03',NULL);

/*Table structure for table `menu_role` */

DROP TABLE IF EXISTS `menu_role`;

CREATE TABLE `menu_role` (
  `menu_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  UNIQUE KEY `menu_role_menu_id_role_id_unique` (`menu_id`,`role_id`),
  KEY `menu_role_menu_id_index` (`menu_id`),
  KEY `menu_role_role_id_index` (`role_id`),
  CONSTRAINT `menu_role_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  CONSTRAINT `menu_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `menu_role` */

insert  into `menu_role`(`menu_id`,`role_id`) values (3,1),(3,2),(4,1),(4,2),(5,1),(5,2),(6,1),(6,2),(7,1),(7,2),(8,1),(8,2),(9,1),(9,2),(10,2),(11,1),(11,2),(12,1),(12,2),(13,1),(13,2),(17,1),(17,2),(18,1),(18,2),(19,1),(19,2),(20,1),(20,2),(23,1),(23,2),(24,1),(24,2);

/*Table structure for table `menus` */

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `position` int(11) DEFAULT NULL,
  `menu_type` int(11) NOT NULL DEFAULT '1',
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `menus` */

insert  into `menus`(`id`,`position`,`menu_type`,`icon`,`name`,`title`,`parent_id`,`created_at`,`updated_at`) values (1,NULL,0,NULL,'User','User',NULL,NULL,NULL),(2,NULL,0,NULL,'Role','Role',NULL,NULL,NULL),(3,0,2,'fa-database','BasicInformation','اطلاعات پایه',NULL,NULL,'2016-07-29 21:56:55'),(4,0,1,'fa-database','MaritalStatus','وضعیت تاهل',3,NULL,'2016-07-29 21:57:08'),(5,0,1,'fa-database','Gender','جنسیت',3,NULL,'2016-07-29 21:57:18'),(6,0,1,'fa-database','Occupation','شغل ها',3,NULL,'2016-07-29 21:57:30'),(7,0,1,'fa-database','KindOfAdm','نوع پذیرش',3,NULL,'2016-07-29 21:58:53'),(8,0,1,'fa-database','DiseaseCode','بیماری ها',3,NULL,'2016-07-29 21:59:08'),(9,0,1,'fa-database','OperationCode','انواع جراحی',3,NULL,'2016-07-29 21:59:25'),(10,0,1,'fa-database','Condition','وضعیت های بیمار',3,NULL,'2016-07-29 21:59:43'),(11,0,1,'fa-database','IntroductionLetter','معرفی نامه ها',3,NULL,'2016-07-29 21:59:55'),(12,0,1,'fa-user','Patient','بیماران',13,'2016-07-28 21:54:43','2016-07-30 19:59:41'),(13,0,2,'fa-user','بیماران','بیماران',NULL,'2016-07-30 19:59:31','2016-07-30 19:59:31'),(17,0,1,'fa-database','Addmission','اطلاعات پذیرش',13,'2016-07-30 20:13:30','2016-07-30 20:13:30'),(18,0,2,'fa-report','گزارشات','گزارشات',NULL,'2016-07-30 23:52:41','2016-07-30 23:52:41'),(19,0,1,'fa-user','Nurse','پرستاران',3,'2016-07-30 23:59:32','2016-07-30 23:59:32'),(20,0,1,'fa-user','Doctor','پزشکان',3,'2016-07-31 00:01:03','2016-07-31 00:01:03'),(23,0,1,'fa-database','NurseAttention','ملاحظات پرستاری',13,'2016-07-31 00:17:53','2016-07-31 00:17:53'),(24,0,1,'fa-database','DoctorOrder','دستورات پزشک',13,'2016-07-31 00:20:13','2016-07-31 00:20:13');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_10_10_000000_create_menus_table',1),('2015_10_10_000000_create_roles_table',1),('2015_10_10_000000_update_users_table',1),('2015_12_11_000000_create_users_logs_table',1),('2016_03_14_000000_update_menus_table',1),('2016_07_19_100943_create_maritalstatus_table',1),('2016_07_20_063356_create_gender_table',1),('2016_07_20_063856_create_occupation_table',1),('2016_07_20_064137_create_kindofadm_table',1),('2016_07_20_064825_create_diseasecode_table',1),('2016_07_20_064900_create_operationcode_table',1),('2016_07_20_064949_create_condition_table',1),('2016_07_20_065219_create_introductionletter_table',1),('2016_07_18_000000_update_menus_table',2),('2016_07_28_215443_create_patient_table',3),('2016_07_30_200119_create_addmission_table',4),('2016_07_30_201330_create_addmission_table',5),('2016_07_30_235933_create_nurse_table',6),('2016_07_31_000104_create_doctor_table',7),('2016_07_31_000318_create_nurseattention_table',8),('2016_07_31_000651_create_doctororders_table',9),('2016_07_31_001753_create_nurseattention_table',10),('2016_07_31_002013_create_doctororder_table',11);

/*Table structure for table `nurse` */

DROP TABLE IF EXISTS `nurse`;

CREATE TABLE `nurse` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `family` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `nurse` */

insert  into `nurse`(`id`,`name`,`family`,`mobile`,`phone`,`address`,`created_at`,`updated_at`,`deleted_at`) values (1,'شقایق','جان نثار','09194945900','02122961419','تهران - لویزان - شیان - شیان 3 - پلاک 26 واحد 9','2016-07-31 00:23:26','2016-07-31 00:23:26',NULL),(2,'امین','شریف النسب','09127953485','02122961419','شهرک غرب - گیشا','2016-07-31 00:24:16','2016-07-31 00:24:16',NULL),(3,'مصطفی','طاهری','0921783287','021278878','پارک فناوری پردیس - آریا طب','2016-07-31 00:24:57','2016-07-31 00:24:57',NULL);

/*Table structure for table `nurseattention` */

DROP TABLE IF EXISTS `nurseattention`;

CREATE TABLE `nurseattention` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `dateTimeAtt` datetime NOT NULL,
  `nurse_id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `nurseattention` */

/*Table structure for table `occupation` */

DROP TABLE IF EXISTS `occupation`;

CREATE TABLE `occupation` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `occupation` */

insert  into `occupation`(`id`,`title`,`created_at`,`updated_at`,`deleted_at`) values (1,'مهندس','2016-07-28 21:56:23','2016-07-28 21:56:23',NULL),(2,'مدیر','2016-07-28 21:56:29','2016-07-28 21:56:29',NULL),(3,'کارمند','2016-07-28 21:56:35','2016-07-28 21:56:35',NULL),(4,'خانه دار','2016-07-28 21:56:43','2016-07-28 21:56:43',NULL),(5,'نگهبان','2016-07-28 21:56:50','2016-07-28 21:56:50',NULL);

/*Table structure for table `operationcode` */

DROP TABLE IF EXISTS `operationcode`;

CREATE TABLE `operationcode` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `operationcode` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `patient` */

DROP TABLE IF EXISTS `patient`;

CREATE TABLE `patient` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unitNumber` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `family` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fatherName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender_id` int(11) NOT NULL,
  `maritalstatus_id` int(11) NOT NULL,
  `idNo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recordHosp` tinyint(4) DEFAULT '0',
  `numOfHosp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `placeOfBirth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `placeOfId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `occupation_id` int(11) DEFAULT NULL,
  `placeOfWork` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneNumber` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reffered` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `addressOfReffered` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneOfReffered` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `patient` */

insert  into `patient`(`id`,`unitNumber`,`family`,`name`,`fatherName`,`gender_id`,`maritalstatus_id`,`idNo`,`recordHosp`,`numOfHosp`,`dateOfBirth`,`placeOfBirth`,`placeOfId`,`religion`,`occupation_id`,`placeOfWork`,`address`,`phoneNumber`,`reffered`,`addressOfReffered`,`phoneOfReffered`,`created_at`,`updated_at`,`deleted_at`) values (1,'123','رزاقی طاهری','محمدرضا','محمدعلی',1,2,'229',1,'1','1395-05-09','تهران','12','شیعه',1,'آریا طب','تهران - لویزان - شیان - شیان 3 - پلاک 26 واحد 9','9127953485','','','','2016-07-28 22:19:16','2016-07-30 14:53:12',NULL);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`title`,`created_at`,`updated_at`) values (1,'Administrator','2016-07-28 20:59:12','2016-07-28 20:59:12'),(2,'User','2016-07-28 20:59:13','2016-07-28 20:59:13');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`role_id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,1,'محمدرضا رزاقی طاهری','razzaghi@jjo.ir','$2y$10$0J9QwyvPVcEWTPGKVrMvp.SE7NRioLJWx6WkxhDBZrZkeY2JYPz2i','IWb6x39w6c3Zru4qWrwcN7rismS7ulqgh9J8SkoC1O5x3Exn3UzPoHMUOo9b','2016-07-28 20:59:36','2016-07-30 10:35:35');

/*Table structure for table `users_logs` */

DROP TABLE IF EXISTS `users_logs`;

CREATE TABLE `users_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `action_model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users_logs` */

insert  into `users_logs`(`id`,`user_id`,`action`,`action_model`,`action_id`,`created_at`,`updated_at`) values (1,1,'updated','users',1,'2016-07-28 21:03:30','2016-07-28 21:03:30'),(2,1,'updated','users',1,'2016-07-28 21:22:45','2016-07-28 21:22:45'),(3,1,'created','gender',1,'2016-07-28 21:55:04','2016-07-28 21:55:04'),(4,1,'created','gender',2,'2016-07-28 21:55:09','2016-07-28 21:55:09'),(5,1,'created','maritalstatus',1,'2016-07-28 21:55:27','2016-07-28 21:55:27'),(6,1,'created','maritalstatus',2,'2016-07-28 21:55:32','2016-07-28 21:55:32'),(7,1,'created','maritalstatus',3,'2016-07-28 21:55:40','2016-07-28 21:55:40'),(8,1,'created','maritalstatus',4,'2016-07-28 21:55:51','2016-07-28 21:55:51'),(9,1,'created','occupation',1,'2016-07-28 21:56:23','2016-07-28 21:56:23'),(10,1,'created','occupation',2,'2016-07-28 21:56:29','2016-07-28 21:56:29'),(11,1,'created','occupation',3,'2016-07-28 21:56:35','2016-07-28 21:56:35'),(12,1,'created','occupation',4,'2016-07-28 21:56:43','2016-07-28 21:56:43'),(13,1,'created','occupation',5,'2016-07-28 21:56:50','2016-07-28 21:56:50'),(14,1,'created','patient',1,'2016-07-28 22:19:16','2016-07-28 22:19:16'),(15,1,'updated','users',1,'2016-07-30 00:15:34','2016-07-30 00:15:34'),(16,1,'updated','users',1,'2016-07-30 00:51:01','2016-07-30 00:51:01'),(17,1,'updated','users',1,'2016-07-30 10:35:35','2016-07-30 10:35:35'),(18,1,'updated','patient',1,'2016-07-30 14:24:41','2016-07-30 14:24:41'),(19,1,'updated','patient',1,'2016-07-30 14:53:12','2016-07-30 14:53:12'),(20,1,'updated','maritalstatus',1,'2016-07-30 21:18:13','2016-07-30 21:18:13'),(21,1,'deleted','maritalstatus',4,'2016-07-30 21:28:55','2016-07-30 21:28:55'),(22,1,'created','maritalstatus',5,'2016-07-30 21:29:03','2016-07-30 21:29:03'),(23,1,'created','introductionletter',1,'2016-07-30 21:29:16','2016-07-30 21:29:16'),(24,1,'deleted','introductionletter',1,'2016-07-30 21:29:21','2016-07-30 21:29:21'),(25,1,'created','introductionletter',2,'2016-07-30 21:34:32','2016-07-30 21:34:32'),(26,1,'created','nurse',1,'2016-07-31 00:23:26','2016-07-31 00:23:26'),(27,1,'created','nurse',2,'2016-07-31 00:24:16','2016-07-31 00:24:16'),(28,1,'created','nurse',3,'2016-07-31 00:24:57','2016-07-31 00:24:57'),(29,1,'created','doctor',1,'2016-07-31 00:25:20','2016-07-31 00:25:20'),(30,1,'created','doctor',2,'2016-07-31 00:25:53','2016-07-31 00:25:53'),(31,1,'created','doctor',3,'2016-07-31 00:26:14','2016-07-31 00:26:14');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
