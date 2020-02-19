-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: questionrace
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.18.10.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_12_09_140229_create_preguntas_table',1),(4,'2019_12_09_140458_create_respuestas_table',1),(5,'2019_12_17_202040_create_ranking_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preguntas`
--

DROP TABLE IF EXISTS `preguntas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preguntas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pregunta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preguntas`
--

LOCK TABLES `preguntas` WRITE;
/*!40000 ALTER TABLE `preguntas` DISABLE KEYS */;
INSERT INTO `preguntas` VALUES (1,'2020-02-18 01:52:24','2020-02-18 01:52:24','2+2'),(2,'2020-02-18 01:52:50','2020-02-18 01:52:50','5+5'),(3,'2020-02-18 01:52:50','2020-02-18 01:52:50','Como se llama la esposa de Homero?'),(4,'2020-02-18 02:15:50','2020-02-18 02:15:50','50+50'),(5,'2020-02-18 02:16:24','2020-02-18 02:16:24','como se dice hola en ingles?'),(6,'2020-02-18 02:18:11','2020-02-18 02:18:11','cuantos paises son mienbros del mercosur?'),(7,'2020-02-18 02:19:28','2020-02-18 02:19:28','como se llama el hijo mayor de Homero?'),(8,'2020-02-18 02:20:42','2020-02-18 02:20:42','cuantos dias tiene un año bisiesto?'),(9,'2020-02-18 02:21:45','2020-02-18 02:21:45','cuantas provincias tiene Argentina?'),(10,'2020-02-18 02:23:01','2020-02-18 02:23:01','Cual es el pais mas grande del mundo?'),(11,'2020-02-18 02:24:40','2020-02-18 02:24:40','Como se llama el actual presidente de Argentina?'),(12,'2020-02-18 02:25:17','2020-02-18 02:25:17','A partir de que edad es obligatorio votar en Argentina?'),(13,'2020-02-18 02:26:38','2020-02-18 02:26:38','Cuantas horas tiene un año?'),(14,'2020-02-18 02:27:36','2020-02-18 02:27:36','Cuantos oceanos hay en el mundo?'),(15,'2020-02-18 02:31:52','2020-02-18 02:31:52','Como se dice perro en Ingles?'),(16,'2020-02-18 02:32:24','2020-02-18 02:32:24','Cuantos minutos tiene una hora?'),(17,'2020-02-18 02:33:25','2020-02-18 02:33:25','Cuantos horas tiene un dia?'),(18,'2020-02-18 02:34:01','2020-02-18 02:34:01','Cuantos son los mienbros de la serie Friends?'),(19,'2020-02-18 02:35:18','2020-02-18 02:35:18','Como se llama el personaje principla de la serie Stranger Things?'),(20,NULL,NULL,'ASDASDAS');
/*!40000 ALTER TABLE `preguntas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ranking`
--

DROP TABLE IF EXISTS `ranking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ranking` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `puntaje` int(11) DEFAULT NULL,
  `usuario` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ranking`
--

LOCK TABLES `ranking` WRITE;
/*!40000 ALTER TABLE `ranking` DISABLE KEYS */;
INSERT INTO `ranking` VALUES (1,2,'admin','2020-02-18 01:56:04','2020-02-18 01:56:04'),(2,12,'asdasdsa','2020-02-19 20:58:19','2020-02-19 20:58:19');
/*!40000 ALTER TABLE `ranking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `respuestas`
--

DROP TABLE IF EXISTS `respuestas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `respuestas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `respuesta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validacion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pregunta` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `respuestas_id_pregunta_foreign` (`id_pregunta`),
  CONSTRAINT `respuestas_id_pregunta_foreign` FOREIGN KEY (`id_pregunta`) REFERENCES `preguntas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `respuestas`
--

LOCK TABLES `respuestas` WRITE;
/*!40000 ALTER TABLE `respuestas` DISABLE KEYS */;
INSERT INTO `respuestas` VALUES (1,'2020-02-18 01:52:24','2020-02-18 01:52:24','3','i',1),(2,'2020-02-18 01:52:24','2020-02-18 01:52:24','6','i',1),(3,'2020-02-18 01:52:24','2020-02-18 01:52:24','4','c',1),(4,'2020-02-18 01:52:51','2020-02-18 01:52:51','3','i',2),(5,'2020-02-18 01:52:51','2020-02-18 01:52:51','5','i',2),(6,'2020-02-18 01:52:51','2020-02-18 01:52:51','10','c',2),(7,'2020-02-18 02:35:18','2020-02-18 02:35:18','Marta','i',3),(8,'2020-02-18 02:35:19','2020-02-18 02:35:19','June','i',3),(9,'2020-02-18 02:35:20','2020-02-18 02:35:20','Marge','c',3),(10,'2020-02-18 02:15:51','2020-02-18 02:15:51','67','i',4),(11,'2020-02-18 02:15:51','2020-02-18 02:15:51','38','i',4),(12,'2020-02-18 02:15:51','2020-02-18 02:15:51','100','c',4),(13,'2020-02-18 02:16:24','2020-02-18 02:16:24','hell','i',5),(14,'2020-02-18 02:16:24','2020-02-18 02:16:24','hola','i',5),(15,'2020-02-18 02:16:24','2020-02-18 02:16:24','hellow','c',5),(16,'2020-02-18 02:18:11','2020-02-18 02:18:11','9','i',6),(17,'2020-02-18 02:18:11','2020-02-18 02:18:11','6','i',6),(18,'2020-02-18 02:18:11','2020-02-18 02:18:11','5','c',6),(19,'2020-02-18 02:19:28','2020-02-18 02:19:28','juan','i',7),(20,'2020-02-18 02:19:28','2020-02-18 02:19:28','john','i',7),(21,'2020-02-18 02:19:28','2020-02-18 02:19:28','Bart','c',7),(22,'2020-02-18 02:20:42','2020-02-18 02:20:42','370','i',8),(23,'2020-02-18 02:20:42','2020-02-18 02:20:42','365','i',8),(24,'2020-02-18 02:20:42','2020-02-18 02:20:42','366','c',8),(25,'2020-02-18 02:21:45','2020-02-18 02:21:45','67','i',9),(26,'2020-02-18 02:21:45','2020-02-18 02:21:45','26','i',9),(27,'2020-02-18 02:21:46','2020-02-18 02:21:46','23','c',9),(28,'2020-02-18 02:23:01','2020-02-18 02:23:01','Estados Unidos','i',10),(29,'2020-02-18 02:23:01','2020-02-18 02:23:01','Japon','i',10),(30,'2020-02-18 02:23:01','2020-02-18 02:23:01','Rusia','c',10),(31,'2020-02-18 02:24:40','2020-02-18 02:24:40','Mauricio Macri','i',11),(32,'2020-02-18 02:24:40','2020-02-18 02:24:40','Cristina Kirchner','i',11),(33,'2020-02-18 02:24:40','2020-02-18 02:24:40','Alberto Fernandez','c',11),(34,'2020-02-18 02:25:17','2020-02-18 02:25:17','13','i',12),(35,'2020-02-18 02:25:17','2020-02-18 02:25:17','16','i',12),(36,'2020-02-18 02:25:17','2020-02-18 02:25:17','18','c',12),(37,'2020-02-18 02:26:38','2020-02-18 02:26:38','4500','i',13),(38,'2020-02-18 02:26:38','2020-02-18 02:26:38','6720','i',13),(39,'2020-02-18 02:26:38','2020-02-18 02:26:38','8760','c',13),(40,'2020-02-18 02:27:36','2020-02-18 02:27:36','3','i',14),(41,'2020-02-18 02:27:36','2020-02-18 02:27:36','6','i',14),(42,'2020-02-18 02:27:36','2020-02-18 02:27:36','5','c',14),(43,'2020-02-18 02:31:53','2020-02-18 02:31:53','cat','i',15),(44,'2020-02-18 02:31:53','2020-02-18 02:31:53','dogo','i',15),(45,'2020-02-18 02:31:53','2020-02-18 02:31:53','dog','c',15),(46,'2020-02-18 02:32:24','2020-02-18 02:32:24','56','i',16),(47,'2020-02-18 02:32:24','2020-02-18 02:32:24','34','i',16),(48,'2020-02-18 02:32:24','2020-02-18 02:32:24','60','c',16),(49,'2020-02-18 02:33:25','2020-02-18 02:33:25','45','i',17),(50,'2020-02-18 02:33:25','2020-02-18 02:33:25','23','i',17),(51,'2020-02-18 02:33:25','2020-02-18 02:33:25','24','c',17),(52,'2020-02-18 02:34:01','2020-02-18 02:34:01','5','i',18),(53,'2020-02-18 02:34:01','2020-02-18 02:34:01','4','i',18),(54,'2020-02-18 02:34:01','2020-02-18 02:34:01','6','c',18);
/*!40000 ALTER TABLE `respuestas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_id_unique` (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_user_unique` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'adrian','adrian@adrian.com','adrian',NULL,NULL,'$2y$10$Z3V58iSdVI5xcLjr.dexnOPHG47EJ8rNzpv4xAGQEpYdrjJ2xv9FK','BpxJRITskKINtkhle08t0gZPAdR9E3a0S8D0lk75.jpeg',NULL,'2020-02-16 17:46:19','2020-02-16 17:46:19'),(2,'administrador','administrador@questionrace.com','admin',NULL,'admin','$2y$10$4PW7PbM.C4ZYmEg2ss.Ywedfmk.D7Ts/4hnh2mLA5ZGG6t6JuZXpG',NULL,NULL,NULL,NULL),(3,'adrian','adrianbogado67@gmail.com','juan',NULL,NULL,'$2y$10$78cFn7PFBO0Ew3./M.F97eGWSYzJr5F5WByZuyK4YqWAv38TPaR.C','QtuElkQ84KgSTHZFPtA4Qbbx6ppNUrH8ZOe3z4MW.jpeg',NULL,'2020-02-18 02:10:42','2020-02-18 02:10:42'),(4,'asdasd','asd@asd.com','asdasdsa',NULL,NULL,'$2y$10$aFaPhz6uKBugVs1pbM5EAO6Ka8z1C2eVC5mnko.T0xNcZHEo0yyzu','TyLBGHD9NsBiIeG4VhrstXc66LBlW5xoI685QbXV.txt',NULL,'2020-02-19 20:27:17','2020-02-19 20:27:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-19 16:01:24
