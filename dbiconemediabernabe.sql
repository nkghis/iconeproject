-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: dbiconemedia
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

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
-- Table structure for table `communes`
--

DROP TABLE IF EXISTS `communes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `communes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `communes`
--

LOCK TABLES `communes` WRITE;
/*!40000 ALTER TABLE `communes` DISABLE KEYS */;
INSERT INTO `communes` VALUES (1,'Abobo',NULL,NULL),(2,'Adjamé',NULL,NULL),(3,'Attécoubé',NULL,NULL),(4,'Bingerville',NULL,NULL),(5,'Cocody',NULL,NULL),(6,'Koumassi',NULL,NULL),(7,'Marcory',NULL,NULL),(8,'Plateau',NULL,NULL),(9,'Port-Bouet',NULL,NULL),(10,'Treichville',NULL,NULL),(11,'Yopougon',NULL,NULL),(12,'Assinie',NULL,NULL);
/*!40000 ALTER TABLE `communes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gmaps_geocache`
--

DROP TABLE IF EXISTS `gmaps_geocache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gmaps_geocache` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gmaps_geocache`
--

LOCK TABLES `gmaps_geocache` WRITE;
/*!40000 ALTER TABLE `gmaps_geocache` DISABLE KEYS */;
/*!40000 ALTER TABLE `gmaps_geocache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nameimage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,'aaa.jpg','2018-11-06 10:39:40','2018-11-06 10:39:40'),(2,'ib.jpg','2018-11-06 10:40:24','2018-11-06 10:40:24'),(3,'i.jpg','2018-11-06 10:43:00','2018-11-06 10:43:00'),(4,'1DF Bd du Cameroun,  ligne 11 sens aller Khahira, au niveau du carrefour Colombe, face pharmacie Khahira (2).jpg','2018-12-16 19:35:27','2018-12-16 19:35:27'),(5,'1DF Bd du Cameroun,  ligne 11 sens aller Khahira, au niveau du carrefour Colombe, face pharmacie Khahira (2).jpg','2018-12-16 20:34:01','2018-12-16 20:34:01'),(6,'KOUMASSI-Bd Cameroun Carefour Colombe.jpg','2018-12-16 20:35:21','2018-12-16 20:35:21'),(7,'YOPOUGON Autoroute du nord  après la station OILIBYA sens retour yopougon.jpg','2018-12-16 20:43:27','2018-12-16 20:43:27'),(8,'YOPOUGON autoroute du nord en venant d\'adjamé avant 2e pont direction yopougon....jpg','2018-12-16 20:43:55','2018-12-16 20:43:55'),(9,'YOPOUGON BD de la paix Niveau Sanctuaire Marial sens Plateau.jpg','2018-12-16 20:44:26','2018-12-16 20:44:26'),(10,'YOPOUGON Route de  Dabou  sens  aller  au  Rond-point  Sonaco,.jpg','2018-12-16 20:44:51','2018-12-16 20:44:51'),(11,'TREICHVILLE Bd VGE après le feu du palais des sports devant CONFORT PLUS sens Pont FHB.jpg','2018-12-16 20:45:27','2018-12-16 20:45:27'),(12,'PORT-BOUET ROUTE DE BASSAM SENS CORRIDOR AKWABA CARREFOUR 43EME BIMA FACE BASSAM.jpg','2018-12-16 20:46:01','2018-12-16 20:46:01'),(13,'PORT-BOUET Route de bassam carrefour mosquée, face bassam....jpg','2018-12-16 20:46:27','2018-12-16 20:46:27'),(14,'KOUMASSI-Bd Cameroun Carefour Colombe.jpg','2018-12-16 20:47:00','2018-12-16 20:47:00'),(15,'KOUMASSI Bd VGE CHATEAU D\'EAU GRAND CARREFOUR DE KOUMASSI FACE A MARCORY.jpg','2018-12-16 20:47:24','2018-12-16 20:47:24'),(16,'YOPOUGON autoroute du nord en venant d adjame avant 2e pont direction yopougon....jpg','2018-12-16 20:59:19','2018-12-16 20:59:19'),(17,'YOPOUGON Autoroute du nord  apres la station OILIBYA sens retour yopougon.jpg','2018-12-16 20:59:48','2018-12-16 20:59:48'),(18,'TREICHVILLE Bd VGE apres le feu du palais des sports devant CONFORT PLUS sens Pont FHB.jpg','2018-12-16 21:03:59','2018-12-16 21:03:59'),(19,'PORT-BOUET Route de bassam carrefour mosquee face bassam.jpg','2018-12-16 21:07:41','2018-12-16 21:07:41'),(20,'IMG_20181217_110315_HDR.jpg','2018-12-20 18:57:43','2018-12-20 18:57:43'),(21,'COCODY Route Bonoumin après ABIDJAN MALL  sens aller Collège André Malreaux.jpg','2018-12-22 18:21:29','2018-12-22 18:21:29'),(22,'COCODY ROUTE DU LYCEE FRANCAIS MONTEE ENTRE FEU ARDOISE ET CARREFOUR MOSQUEE FACE A  KILOS.jpg','2018-12-22 18:24:16','2018-12-22 18:24:16'),(23,'COCODY Route Lycée Technique apres pont Lycee Technique sens aller cocody-adjame-plateau face carrefour la vie.jpg','2018-12-22 18:26:03','2018-12-22 18:26:03'),(24,'COCODY Sortie par rond point de Riviera Palmeraie avant le feu tricolor.jpg','2018-12-22 18:27:40','2018-12-22 18:27:40'),(25,'COCODY LYCEE TECHNIQUE SENS  PALM CLUB LYCEE TECHNIQUE FACE PALM CLUB.jpg','2018-12-22 18:35:40','2018-12-22 18:35:40'),(26,'COCODY Voie express Riviera sens aller Vallons-Riviera.jpg','2018-12-22 18:37:47','2018-12-22 18:37:47'),(27,'COCODY Route Lycée Technique apres pont Lycee Technique sens aller cocody-adjame-plateau face carrefour la vie.jpg','2018-12-22 18:45:00','2018-12-22 18:45:00'),(28,'ADJAME-Bd Lagunaire Echangeur 220 Lgts.jpg','2018-12-22 18:51:51','2018-12-22 18:51:51');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (34,'2014_10_12_000000_create_users_table',1),(35,'2014_10_12_100000_create_password_resets_table',1),(36,'2018_05_04_154955_create_permission_tables',1),(37,'2018_11_03_105418_create_gmaps_geocache_table',1),(38,'2018_11_04_142900_create_communes_table',1),(39,'2018_11_04_142933_create_images_table',1),(40,'2018_11_04_143215_create_visuels_table',1),(41,'2018_11_04_150345_foreign_key',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
INSERT INTO `model_has_permissions` VALUES (13,'App\\User',1),(13,'App\\User',3),(14,'App\\User',1),(14,'App\\User',3),(15,'App\\User',1),(15,'App\\User',3),(16,'App\\User',1),(16,'App\\User',3),(17,'App\\User',3),(17,'App\\User',4),(18,'App\\User',3),(19,'App\\User',3),(20,'App\\User',3);
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\User',1),(1,'App\\User',3),(2,'App\\User',2),(2,'App\\User',4);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
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
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'view_users','web','2018-11-06 10:39:15','2018-11-06 10:39:15'),(2,'add_users','web','2018-11-06 10:39:15','2018-11-06 10:39:15'),(3,'edit_users','web','2018-11-06 10:39:15','2018-11-06 10:39:15'),(4,'delete_users','web','2018-11-06 10:39:15','2018-11-06 10:39:15'),(5,'view_roles','web','2018-11-06 10:39:15','2018-11-06 10:39:15'),(6,'add_roles','web','2018-11-06 10:39:15','2018-11-06 10:39:15'),(7,'edit_roles','web','2018-11-06 10:39:15','2018-11-06 10:39:15'),(8,'delete_roles','web','2018-11-06 10:39:15','2018-11-06 10:39:15'),(9,'view_posts','web','2018-11-06 10:39:15','2018-11-06 10:39:15'),(10,'add_posts','web','2018-11-06 10:39:15','2018-11-06 10:39:15'),(11,'edit_posts','web','2018-11-06 10:39:15','2018-11-06 10:39:15'),(12,'delete_posts','web','2018-11-06 10:39:15','2018-11-06 10:39:15'),(13,'view_visuels','web','2018-12-10 17:19:21','2018-12-10 17:19:21'),(14,'add_visuels','web','2018-12-10 17:19:21','2018-12-10 17:19:21'),(15,'edit_visuels','web','2018-12-10 17:19:21','2018-12-10 17:19:21'),(16,'delete_visuels','web','2018-12-10 17:19:21','2018-12-10 17:19:21'),(17,'view_maps','web','2018-12-10 17:45:02','2018-12-10 17:45:02'),(18,'add_maps','web','2018-12-10 17:45:02','2018-12-10 17:45:02'),(19,'edit_maps','web','2018-12-10 17:45:02','2018-12-10 17:45:02'),(20,'delete_maps','web','2018-12-10 17:45:02','2018-12-10 17:45:02');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(17,2),(18,1),(19,1),(20,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','web','2018-11-06 10:39:26','2018-11-06 10:39:26'),(2,'User','web','2018-11-06 10:39:26','2018-11-06 10:39:26');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Dr. Rhea Stiedemann','ics@ics.ci','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','slskufgceZdobygwISX86OVyjTZc8eAijAf3Ia2bVzGurehNs18rxHNYK1eY','2018-11-06 10:39:26','2018-11-06 10:39:26'),(2,'Delpha Corkery','cornelius.hill@example.net','$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm','Az6btabXa6','2018-11-06 10:39:26','2018-11-06 10:39:26'),(3,'Jonas Kacou DEDOMEY','jonas.dedomey@iconecom.net','$2y$10$t/mHxY4xY17WFsVpOklkIe139C6t7b9qV2PWbYGMNv4yvd2VniJCS','dJBgIrFsY1I2iqGzFRVUvaHmVR9Mi1RiMvjr40oswHN4NGSAuLFOeDCJWf2Y','2018-12-17 12:33:03','2018-12-17 13:16:45'),(4,'BERNABE','client@bernabe.ci','$2y$10$b2xELPXNyk7w2ewTjNu0uubXgYCdjt0Dz19Fjw64WHf7mDXb8Wsam','BZYfbjBhdDPq1PBL5I5OxVAhAyesAfWG4ZP5XLwwNPBYNb3z1pM9os2HikyJ','2018-12-17 12:34:29','2018-12-17 12:34:29');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visuels`
--

DROP TABLE IF EXISTS `visuels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visuels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(10) unsigned NOT NULL,
  `commune_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `visuels_commune_id_foreign` (`commune_id`),
  KEY `visuels_image_id_foreign` (`image_id`),
  CONSTRAINT `visuels_commune_id_foreign` FOREIGN KEY (`commune_id`) REFERENCES `communes` (`id`),
  CONSTRAINT `visuels_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visuels`
--

LOCK TABLES `visuels` WRITE;
/*!40000 ALTER TABLE `visuels` DISABLE KEYS */;
INSERT INTO `visuels` VALUES (9,'YOPOUGON BD de la paix Niveau Sanctuaire Marial sens Plateau','5.3563054999999995','-4.040337527777778',9,11,'2018-12-16 20:44:26','2018-12-16 20:44:26'),(10,'YOPOUGON Route de  Dabou  sens  aller  au  Rond-point  Sonaco','5.355028361111111','-4.102699638888889',10,11,'2018-12-16 20:44:51','2018-12-16 20:44:51'),(12,'PORT-BOUET ROUTE DE BASSAM SENS CORRIDOR AKWABA CARREFOUR 43EME BIMA FACE BASSAM','5.256310083333333','-3.9571732500000003',12,9,'2018-12-16 20:46:01','2018-12-16 20:46:01'),(14,'KOUMASSI-Bd Cameroun Carefour Colombe','5.296437916666666','-3.9657485833333337',14,6,'2018-12-16 20:47:00','2018-12-16 20:47:00'),(15,'KOUMASSI Bd VGE CHATEAU D\'EAU GRAND CARREFOUR DE KOUMASSI FACE A MARCORY','5.286196638888889','-3.9703001666666666',15,6,'2018-12-16 20:47:24','2018-12-16 20:47:24'),(16,'YOPOUGON autoroute du nord en venant d adjame avant 2e pont direction yopougon','5.360214472222222','-4.073365916666666',16,11,'2018-12-16 20:59:19','2018-12-16 20:59:19'),(17,'YOPOUGON Autoroute du nord  apres la station OILIBYA sens retour yopougon','5.358069416666666','-4.055600888888889',17,11,'2018-12-16 20:59:48','2018-12-16 20:59:48'),(18,'TREICHVILLE Bd VGE apres le feu du palais des sports devant CONFORT PLUS sens Pont FHB','5.300768388888889','-4.0093379166666665',18,10,'2018-12-16 21:03:59','2018-12-16 21:03:59'),(19,'PORT-BOUET Route de bassam carrefour mosquee face bassam','5.2437469722222225','-3.923560361111111',19,9,'2018-12-16 21:07:41','2018-12-16 21:07:41'),(20,'ADJAME-Bd Lagunaire Echangeur 220 Lgts','5.353150583333333','-4.013992',20,2,'2018-12-20 18:57:43','2018-12-20 18:57:43'),(21,'COCODY Route Bonoumin après ABIDJAN MALL  sens aller Collège André Malreaux','5.360277777777777','-3.9719444444444445',21,5,'2018-12-22 18:21:29','2018-12-22 18:21:29'),(22,'COCODY ROUTE DU LYCEE FRANCAIS MONTEE ENTRE FEU ARDOISE ET CARREFOUR MOSQUEE FACE A  KILOS','5.3502777777777775','-3.9544444444444444',22,5,'2018-12-22 18:24:16','2018-12-22 18:24:16'),(23,'COCODY Route Lycée Technique apres pont Lycee Technique sens aller cocody-adjame-plateau face carrefour la vie','5.347222222222222','-4.011111111111111',23,5,'2018-12-22 18:26:03','2018-12-22 18:26:03'),(24,'COCODY Sortie par rond point de Riviera Palmeraie avant le feu tricolor','5.3625','-3.9622222222222225',24,5,'2018-12-22 18:27:40','2018-12-22 18:27:40'),(25,'COCODY LYCEE TECHNIQUE SENS  PALM CLUB LYCEE TECHNIQUE FACE PALM CLUB','5.352943','-4.004749138888889',25,5,'2018-12-22 18:35:40','2018-12-22 18:35:40'),(26,'COCODY Voie express Riviera sens aller Vallons-Riviera','5.353859583333333','-3.999086777777778',26,5,'2018-12-22 18:37:47','2018-12-22 18:37:47'),(27,'COCODY Route Lycée Technique apres pont Lycee Technique sens aller cocody-adjame-plateau face carrefour la vie','5.347222222222222','-4.011111111111111',27,5,'2018-12-22 18:45:00','2018-12-22 18:45:00'),(28,'ADJAME-Bd Lagunaire Echangeur 220 Lgts','5.353150583333333','-4.013992',28,2,'2018-12-22 18:51:51','2018-12-22 18:51:51');
/*!40000 ALTER TABLE `visuels` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-01-09 11:26:22
