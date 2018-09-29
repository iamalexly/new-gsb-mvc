-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: gsb_new
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `lignesFraisHorsForfait`
--

DROP TABLE IF EXISTS `lignesFraisHorsForfait`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lignesFraisHorsForfait` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idVisiteur` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` decimal(6,2) NOT NULL,
  `dateAjout` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idVisiteur` (`idVisiteur`),
  CONSTRAINT `lignesFraisHorsForfait_ibfk_1` FOREIGN KEY (`idVisiteur`) REFERENCES `visiteurs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lignesFraisHorsForfait`
--

LOCK TABLES `lignesFraisHorsForfait` WRITE;
/*!40000 ALTER TABLE `lignesFraisHorsForfait` DISABLE KEYS */;
INSERT INTO `lignesFraisHorsForfait` VALUES (1,1,'Bouteille d\'eau',1.50,'2018-09-27'),(2,1,'Garagiste',173.25,'2018-09-29'),(3,1,'Médecin',20.00,'2018-09-30');
/*!40000 ALTER TABLE `lignesFraisHorsForfait` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visiteurs`
--

DROP TABLE IF EXISTS `visiteurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visiteurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mdp` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adresse` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` char(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateEmbauche` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visiteurs`
--

LOCK TABLES `visiteurs` WRITE;
/*!40000 ALTER TABLE `visiteurs` DISABLE KEYS */;
INSERT INTO `visiteurs` VALUES (1,'Lebailly','Alexandre','root','root','56 rue ASSE','42100','Saint-Etienne','2018-09-12'),(2,'Doe','John','jdoe','pass','1er Avenue Charles de Gaulle','75000','Paris','2018-09-15');
/*!40000 ALTER TABLE `visiteurs` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-29 22:30:37
