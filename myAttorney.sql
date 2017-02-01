-- MySQL dump 10.13  Distrib 5.7.17, for Linux (x86_64)
--
-- Host: localhost    Database: myAttorney
-- ------------------------------------------------------
-- Server version	5.7.13-0ubuntu0.16.04.2

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `publicationDate` date NOT NULL,
  `title` varchar(255) NOT NULL,
  `summary` text NOT NULL,
  `content` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (3,'2017-01-30','Reliance Law Firm','Reliance Law Firm ','Reliance Law Firm have strived for excellence, commitment, and quality. Today our firm stands as a hallmark in the legal sector gaining both, national and international recognition for our exceptional work in the legal field. Our transformational journey over time can be best ascertained through the testimonials of innumerable satisfied clients who have availed of our services. Our ability to work in conjunction with our clients as reliable advisors and facilitators of growth within an assortment of complex legal frameworks has helped us expand as captains in our field. Committed to delivering outstanding legal solutions we stand proud as pioneers in our field with the capability of providing cutting edge legal solutions under the most challenging circumstances.\r\nHISTORY\r\n\r\nFounded by Senior Advocate Mr.Purna Man Shakya in the year 1995 the Reliance Law Firm has diversified and expanded its area of practice into all major areas of law. With a degree from the Columbia University Law School, Mr. Shakya left no stone unturned in creating a solution based law firm that prides itself in providing the best quality services available to fulfill a client\'s objectives. Under his guidance, the Reliance Law Firm has transformed into a leading firm of the country. He is assisted by a group of trained lawyers with expertise in various fields of law thus imbibing a dynamic and collaborative work culture with an independent streak of creativity and commitment in providing high quality services to clients worldwide.'),(4,'2017-01-31','Prime Law Associates','Prime Law Associates at Maitighar, Kathmandu','Prime Law Associates (PLA) is a dynamic law firm, founded by a group of young and energetic lawyers. PLA has been a successful firm with a good repute among its clients and the legal fraternity in Nepal. Owing to our strong responsiveness to clients need and innovative approach to solve legal issues faced by our clients, we have outstand ourselves as client-centered firm. PLA has already grown into a large full service law firm in Nepal.\r\n\r\nOur legal team has an excellent combination of professional dynamism and passion for qualify legal service to our clients. Our mission is to provide pragmatic and result-oriented services to our clients at a competitive rate.\r\n\r\nThe Firm has an office at Maitighar, Kathmandu. We are conveniently located in a close proximity from business and financial hub of Kathmandu where number of government offices and courts are also nearby from our office. PLA has associate law offices throughout Nepal because of referral agreement with number of local law firms in major cities and business centers in Nepal. We have retained a panel of distinguished practitioners who may be available for rendering services in the areas of general legal matters, hydro-power, aviation, foreign Investment, arbitration, taxation, intellectual property, business incorporation, and allied services.\r\n\r\nOur lawyers have wide experience in handling wide variety of corporate litigation and transactions matters. We handle various cases in District Courts, Appellate Courts across the country and in the Supreme Court of Nepal. We are very responsive to client\'s need and legal issues and we always strive to provide excellent legal services to our clients. Client satisfaction is our motto. We offer full service of domestic as well as foreign clients. We establish open and clear\r\ncommunication with client to understand their business need. All cases and transactions are appropriately staffed to ensure efficient and effective handling of the matters. We have highly trained paralegals and support staffs.\r\n\r\nPLA assist our clients to succeed in their businesses. We understand increasing needs of our clients to tap into international investment and domestic business opportunities. ');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `forum`
--

DROP TABLE IF EXISTS `forum`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `forum` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `latitude` varchar(30) DEFAULT NULL,
  `longitude` varchar(30) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `forum`
--

LOCK TABLES `forum` WRITE;
/*!40000 ALTER TABLE `forum` DISABLE KEYS */;
INSERT INTO `forum` VALUES (1,'reliancelawfirm@gmail.com','27.67355299999999','85.31725100000001','Reliance Law Firm'),(2,'neupaneassociates@gmail.com','27.691221','85.31811900000001','Neupane Law Associates | Law Firm in Nepal'),(3,'thekusumforum@gmail.com','27.688836','85.32731199999999','Kusum law firm'),(4,'shreejanalaw@gmail.com','27.676732','85.3171759','Shreejana Law Firm'),(5,'sunshilelaw@gmail.com','27.702344','85.321612','Sunshine Law Firm'),(6,'thealefirm@yahoo.com','27.6990334','85.32890189999999','Ale Law Firm Pvt. Ltd.'),(7,'pradhanassociates@gmail.com','27.6942111','85.3211412','Pradhan & Associates'),(8,NULL,'27.7150088','85.3267041','NBSM'),(9,NULL,'27.702976','85.3226059','PYC & ASSOCIATES'),(10,NULL,'27.6985927','85.3288042','Prime Law Associates'),(11,NULL,'27.7126651','85.3207479','TR Upadhya & Co.'),(12,NULL,'27.715111','85.326883','NBSM'),(13,NULL,'27.7040523','85.32271569999999','Global Law Associates'),(14,NULL,'27.711779','85.329065','BRS NEUPANE & CO.'),(15,NULL,'27.713487','85.32028','Thompson Nepal Pvt Ltd (Part of J. Walter Thompson Worldwide)'),(16,NULL,'27.6926394','85.3193763','Apex Law Chamber'),(17,NULL,'27.6864923','85.3199154','KB Chitracar & Co, Chartered Accountants'),(18,NULL,'27.697571','85.32893299999999','Pioneer Law Associates'),(19,NULL,'27.6927647','85.3123342','Social Legal Services');
/*!40000 ALTER TABLE `forum` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lawyers`
--

DROP TABLE IF EXISTS `lawyers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lawyers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lawyers`
--

LOCK TABLES `lawyers` WRITE;
/*!40000 ALTER TABLE `lawyers` DISABLE KEYS */;
INSERT INTO `lawyers` VALUES (1,'Pradeep Thapa','pthapa@primelawnepal.com','2033/07/15','Male','9813678953'),(2,'Sitaram Adhikari','adhikarisitaram2011@yahoo.com','2035/01/21','Male','9851175921'),(3,'Kedar Pyakurel','kpyakurel@primelawnepal.com','2030/11/14','Male','9852056567'),(4,'Purna Man Shakya','pshakya@yahoo.com','2027/10/12','Male','9851874523');
/*!40000 ALTER TABLE `lawyers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'ravi','$1$YGkb2mjW$C2t0ALgtISWLuPzXr1Hic1','ravi.adhikari@deerwalk.edu.np'),(2,'shila','$1$eiNQj.Xr$yRvuVgSVeVjO2ub3Hte3H0','shila.parajuli@deerwalk.edu.np'),(3,'anon','$1$CUNN0lLI$iUhwS6IclMX8kQmYilc7/0','anon@anon.com');
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

-- Dump completed on 2017-02-02  4:25:27
