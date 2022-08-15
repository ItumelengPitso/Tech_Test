-- MySQL dump 10.13  Distrib 5.7.39, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: tech_test
-- ------------------------------------------------------
-- Server version	5.7.39-0ubuntu0.18.04.2

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
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interests`
--

DROP TABLE IF EXISTS `interests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interests`
--

LOCK TABLES `interests` WRITE;
/*!40000 ALTER TABLE `interests` DISABLE KEYS */;
INSERT INTO `interests` VALUES (1,'Chess'),(2,'Playing a musical instrument'),(3,'Reading'),(4,'Writing'),(5,'Sketching'),(6,'Photography'),(7,'Design'),(8,'Blog writin'),(9,' Long distance running'),(10,' Weight lifting');
/*!40000 ALTER TABLE `interests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=143 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'Afrikaans','af'),(2,'Albanian - shqip','sq'),(3,'Amharic','am'),(4,'Arabic','ar'),(5,'Aragonese','an'),(6,'Armenian','hy'),(7,'Asturian','ast'),(8,'Azerbaijani','az'),(9,'Basque','eu'),(10,'Belarusian','be'),(11,'Bengali','bn'),(12,'Bosnian','bs'),(13,'Breton','br'),(14,'Bulgarian','bg'),(15,'Catalan','ca'),(16,'Central Kurdish','ckb'),(17,'Chinese','zh'),(18,'Chinese Hong Kong','zh-HK'),(19,'Chinese Simplified','zh-CN'),(20,'Chinese Traditional','zh-TW'),(21,'Corsican','co'),(22,'Croatian','hr'),(23,'Czech','cs'),(24,'Danish','da'),(25,'Dutch ','nl'),(26,'English','en'),(27,'English (Australia)','en-AU'),(28,'English (Canada)','en-CA'),(29,'English (India)','en-IN'),(30,'English (New Zealand)','en-NZ'),(31,'English (South Africa)','en-ZA'),(32,'English (United Kingdom)','en-GB'),(33,'English (United States)','en-US'),(34,'Esperanto - esperanto','eo'),(35,'Estonian','et'),(36,'Faroese','fo'),(37,'Filipino','fil'),(38,'Finnish','fi'),(39,'French','fr'),(40,'French (Canada)','fr-CA'),(41,'French (France)','fr-FR'),(42,'French (Switzerland)','fr-CH'),(43,'Galician','gl'),(44,'Georgian','ka'),(45,'German','de'),(46,'German (Austria)','de-AT'),(47,'German (Germany)','de-DE'),(48,'German (Liechtenstein)','de-LI'),(49,'German (Switzerland)','de-CH'),(50,'Greek','el'),(51,'Guarani','gn'),(52,'Gujarati','gu'),(53,'Hausa','ha'),(54,'Hawaiian','haw'),(55,'Hebrew','he'),(56,'Hindi','hi'),(57,'Hungarian','hu'),(58,'Icelandic','is'),(59,'Indonesian ','id'),(60,'Interlingua','ia'),(61,'Irish','ga'),(62,'Italian','it'),(63,'Italian (Italy)','it-IT'),(64,'Italian (Switzerland)','it-CH'),(65,'Japanese','ja'),(66,'Kannada','kn'),(67,'Kazakh','kk'),(68,'Khmer','km'),(69,'Korean','ko'),(70,'Kurdish','ku'),(71,'Kyrgyz','ky'),(72,'Lao','lo'),(73,'Latin','la'),(74,'Latvian','lv'),(75,'Lingala','ln'),(76,'Lithuanian','lt'),(77,'Macedonian','mk'),(78,'Malay','ms'),(79,'Malayalam','ml'),(80,'Maltese Malti','mt'),(81,'Marathi','mr'),(82,'Mongolian','mn'),(83,'Nepali','ne'),(84,'Norwegian','no'),(85,'Norwegian','nb'),(86,'Norwegian Nynorsk','nn'),(87,'Occitan','oc'),(88,'Oriya','or'),(89,'Oromo','om'),(90,'Pashto','ps'),(91,'Persian','fa'),(92,'Polish','pl'),(93,'Portuguese','pt'),(94,'Portuguese (Brazil)','pt-BR'),(95,'Portuguese (Portugal)','pt-PT'),(96,'Punjabi','pa'),(97,'Quechua','qu'),(98,'Romanian','ro'),(99,'Romanian (Moldova)','mo'),(100,'Romansh','rm'),(101,'Russian','ru'),(102,'Scottish Gaelic','gd'),(103,'Serbian','sr'),(104,'Serbo','sh'),(105,'Shona','sn'),(106,'Sindhi','sd'),(107,'Sinhala','si'),(108,'Slovak','sk'),(109,'Slovenian','sl'),(110,'Somali','so'),(111,'Southern Sotho','st'),(112,'Spanish','es'),(113,'Spanish (Argentina)','es-AR'),(114,'Spanish (Latin America)','es-419'),(115,'Spanish (Mexico)','es-MX'),(116,'Spanish (Spain)','es-ES'),(117,'Spanish (United States)','es-US'),(118,'Sundanese','su'),(119,'Swahili','sw'),(120,'Swedish ','sv'),(121,'Tajik','tg'),(122,'Tamil','ta'),(123,'Tatar','tt'),(124,'Telugu ','te'),(125,'Thai','th'),(126,'Tigrinya','ti'),(127,'Tongan','to'),(128,'Turkish','tr'),(129,'Turkmen','tk'),(130,'Twi','tw'),(131,'Ukrainian','uk'),(132,'Urdu','ur'),(133,'Uyghur','ug'),(134,'Uzbek','uz'),(135,'Vietnamese','vi'),(136,'Walloon','wa'),(137,'Welsh','cy'),(138,'Western Frisian','fy'),(139,'Xhosa','xh'),(140,'Yiddish','yi'),(141,'Yoruba','yo'),(142,'Zulu','zu');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_register`
--

DROP TABLE IF EXISTS `user_register`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) DEFAULT NULL,
  `surname` varchar(25) DEFAULT NULL,
  `sa_id` varchar(25) DEFAULT NULL,
  `mobile` float DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `birth_date` datetime DEFAULT NULL,
  `languages` int(11) DEFAULT NULL,
  `interests` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_register`
--

LOCK TABLES `user_register` WRITE;
/*!40000 ALTER TABLE `user_register` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_register` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2022-08-15  4:21:36
