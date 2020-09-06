-- MySQL dump 10.13  Distrib 5.7.22, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	5.7.22-log

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
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `privacy` varchar(255) NOT NULL,
  `latitude` decimal(22,11) NOT NULL,
  `longitude` decimal(22,11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (0,'labmanager','Linckia - Huai Hai Community','Co-working Space','Public',31.22467100000,121.48020600000,'17th Floor, 1 Huai Hai Zhong Road, Huangpu, Shanghai, China','Shanghai','China','1'),(1,'labmanager','Linckia - Dong Hai 7th','Co-working Space','Public',31.22626700000,121.44921400000,'7th Floor, Dong Hai Plaza Building 3, Yuyuan East Road, Shanghai, China','Shanghai','China','1'),(2,'labmanager','Chuangzhi Community','Co-working Space','Public',31.30823000000,121.50768000000,'6F, Tower 2, Chuangzhi Science & Technology Center, 477 Zhengli Road, Shanghai, China','Shanghai','China','1'),(3,'labmanager','COWORK - Chuanzhi World Business Center','Co-working Space','Public',31.33215400000,121.52473100000,'3th Floor, Chuanzhi World Business Center Building 6,7, 500 Zheng Yue Road, Yangpu District, Shanghai, China','Shanghai','China','1'),(4,'labmanager','SOHO 3Q - Bund 3Q l','Co-working Space','Public',31.23155340000,121.49272300000,'Bund SOHO, 88 2nd East Zhongshan Road, Huangpu District, Shanghai, China','Shanghai','China','1'),(5,'labmanager','SOHO3Q - Bund 3Q II','Co-working Space','Public',31.23155340000,121.49272300000,'Bund SOHO, 88 2nd East Zhongshan Road, Huangpu District, Shanghai, China','Shanghai','China','1'),(6,'labmanager','SOHO3Q - Sky 3Q','Co-working Space','Public',31.22085830000,121.35243000000,'968 Jin Zhong Road, Changning District, Shanghai, China','Shanghai','China','1'),(7,'labmanager','Linckia - Tongji Community','Co-working Space','Public',31.27877800000,121.50476400000,'1st Floor, Design Center Promotion Center, 1230 Siping Road, Yangpu District, Shanghai, China','Shanghai','China','1'),(8,'labmanager','XNode - Zhang Jiang','Co-working Space','Public',31.18120770000,121.60505100000,'4F, 800 Naxian Road, Pudong District, Shanghai, China','Shanghai','China','1'),(9,'labmanager','XNode - Hong Qiao','Co-working Space','Public',31.20498400000,121.40254800000,'5F, Building D, Orient International Mansion, 85 Loushanguan Road, Changning District, Shanghai, China','Shanghai','China','1'),(10,'labmanager','Naked Hub - Xikang','Co-working Space','Public',31.24338000000,121.43949600000,'189 Changshou Road, Putuo District, Shanghai, China','Shanghai','China','1'),(11,'labmanager','MIXPACE Townhide','Co-working Space','Public',31.23082800000,121.46544500000,'612 Nan Jing Xi Lu, Shanghai, China','Shanghai','China','1'),(12,'labmanager','Naked Hub - Fu Xing Lu','Co-working Space','Public',31.21257800000,121.45818400000,'3th Floor, 1237 Fu Xing Zhong Road, Xuhui District, Shanghai, China','Shanghai','China','1'),(13,'labmanager','We Geek','Co-working Space','Public',31.09247645167,121.32741400000,'Xinzhuang Lu 258, Palm Plaza, Building 32, Shanghai, China','Shanghai','China','1'),(14,'labmanager','Terminal','Co-working Space','Public',41.70744290000,44.76550640000,'34-36 Irakli Abashidze Street, Tbilisi, Georgia','Tbilisi','Georgia','1'),(15,'labmanager','UG Startup Factory','Co-working Space','Public',41.72295540000,44.77977850000,'77a Merab Kostava Street, Tbilisi, Georgia','Tbilisi','Georgia','1'),(16,'labmanager','Vere Loft','Co-working Space','Public',41.70628920000,44.78358600000,'Khorava Street 3, Tbilisi, Georgia','Tbilisi','Georgia','1'),(17,'labmanager','Generator 9.8','Co-working Space','Public',41.69978590000,44.80206770000,'Antoneli street #29, Tbilisi, Georgia','Tbilisi','Georgia','1'),(18,'labmanager','Publica','Co-working Space','Public',41.69745122514,44.79993280000,'18 Lado Gudiashvili Street, Tbilisi, Georgia','Tbilisi','Georgia','1'),(19,'labmanager','Dev X','Co-working Space','Public',23.02900010000,72.53016890000,'B/H Keshav Baugh Party Plot,, Near Shivalik High-Street., I I M, Vastrapur, Ahmedabad, Gujarat 380015, India, Vastrapur, Ahmedabad, India','Ahmedabad','India','1'),(20,'labmanager','Uncubate','Co-working Space','Public',23.04323480000,72.54965500000,'308, Aeon Complex, Vijay Cross Road, Near Angira Society, Ahmedabad, India','Ahmedabad','India','1'),(21,'labmanager','DoubleO','Co-working Space','Public',23.03244700000,72.51095500000,'B501 Krishna Complex, Bodakdev, Ahmedabad, India','Ahmedabad','India','1'),(22,'labmanager','Pravel CoWorking Space','Co-working Space','Public',22.99469660000,72.49916820000,'Makarba, Ahmedabad, Gujarat, Makarba Road, S.G. Highway, Sarkhej, Ahmedabad, India','Ahmedabad','India','1'),(23,'labmanager','14 The Hub','Co-working Space','Public',23.04182320000,72.51680640000,'605 Venus Benecia Maruti Nexa Building Pakwaan restaurant service lane S.G. Highway, Ahmedabad, India','Ahmedabad','India','1'),(24,'labmanager','Daftar - The coworking space','Co-working Space','Public',23.02826460000,72.54231200000,'Panjara Pol, Ambawadi, Ahmedabad, Gujarat 380015, India, IIM Road, Ahmedabad, India','Ahmedabad','India','1'),(25,'labmanager','5B Colab','Co-working Space','Public',23.03156937364,72.55911300000,'5B Vishwabharti society, Opp BSNL office, Opposite BSNL telephone exchange, Ahmedabad, India','Ahmedabad','India','1'),(26,'labmanager','Pravel Solutions','Co-working Space','Public',23.01195479946,72.51487380000,'Dev Auram, Prahlad Nagar, Ahmedabad, India','Ahmedabad','India','1'),(27,'labmanager','Next57 Coworking','Co-working Space','Public',23.03265539652,72.50821210000,'2nd Floor, Block N, S.G. Road, Safal Mondeal Retail Park, Bodakdev Near, Rajpath Rangoli Rd, Ahmedabad, India','Ahmedabad','India','1'),(28,'labmanager','InstaOffice','Co-working Space','Public',23.15863960000,72.68311360000,'Gujarat International Finance Tec-City, Gujarat, Building 56A, Block No. 56, Road-5C, Zone-5, Gandhinagar, India','Gandhinagar','India','1'),(29,'labmanager','Spaces','Co-working Space','Public',23.02633870000,72.52439440000,'Iscon Emporio, Next to Star Bazaar, Jodhpur Crossroads, Ahmedabad, India','Ahmedabad','India','1');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-09-06  1:56:07
