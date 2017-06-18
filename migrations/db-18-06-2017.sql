-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: nicegames
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `buy`
--

DROP TABLE IF EXISTS `buy`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `buy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_produto` (`id_produto`),
  CONSTRAINT `buy_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  CONSTRAINT `buy_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `buy`
--

LOCK TABLES `buy` WRITE;
/*!40000 ALTER TABLE `buy` DISABLE KEYS */;
/*!40000 ALTER TABLE `buy` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(32) NOT NULL,
  `sobrenome` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `cidade` varchar(64) NOT NULL,
  `cpf` varchar(25) DEFAULT NULL,
  `cep` varchar(10) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cliente`
--

LOCK TABLES `cliente` WRITE;
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` VALUES (11,'cliente','The first ','cliente@ng.com','202cb962ac59075b964b07152d234b70','av franscisco matarazo','SÃ£o Paulo','2147483647','03444000','(11) 1111-1111');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionario`
--

LOCK TABLES `funcionario` WRITE;
/*!40000 ALTER TABLE `funcionario` DISABLE KEYS */;
INSERT INTO `funcionario` VALUES (5,'admin','admin@ng.com','202cb962ac59075b964b07152d234b70');
/*!40000 ALTER TABLE `funcionario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mensagem`
--

DROP TABLE IF EXISTS `mensagem`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `mensagem` varchar(800) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mensagem`
--

LOCK TABLES `mensagem` WRITE;
/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;
/*!40000 ALTER TABLE `mensagem` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `genero` varchar(32) NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `lancamento` date DEFAULT NULL,
  `audio` varchar(32) DEFAULT NULL,
  `legenda` varchar(32) DEFAULT NULL,
  `tamanho` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'Grand Theft Auto V','AÃ§Ã£o',129.00,'2013-09-17','EN','PT-BR',65,50,'494ccccf5fd10732ca4e38a0c9b066ae.png'),(2,'Dragon ageâ„¢: Inquisition','RPG',85.00,'2014-11-18','EN','PT-BR',24,50,'bdd0152a31164d7da88fc50fbfb16f62.png'),(3,'Fifa 2016','Esportes',85.00,'2016-03-05','PT-BR','PT-BR',40,50,'077ea32cfd16ba3b7a5fe0bc9e98fd4e.png'),(4,'Minecraft','Survive',45.00,'2009-05-17','EN','PT-BR',5,50,'9070e3f686fa163ca7c079a87bcf6404.png'),(5,'Need for Speed','Corrida',129.00,'2015-11-03','PT-BR','PT-BR',45,50,'2829abd1e9f02b5424aeda90a01d7d24.png'),(6,'Gears of War 4','First-person shooter',229.00,'2016-10-11','EN','PT-BR',40,50,'5d820c7963c322a7a5e1b4278e5c74fc.png'),(7,'Doom 4','First-person shooter',229.00,'2016-05-13','EN','PT-BR',50,50,'e48046d2878ca464b720196dd95eedd3.png'),(8,'Forza Horizon 3','Corrida',229.00,'2016-09-27','PT-BR','PT-BR',65,50,'be37d8c8ae760e9d9b67d999233128f5.png'),(9,'Mafia III','AcÃ£o-aventura',229.00,'2016-10-07','PT-BR','PT-BR',65,50,'39c29d10521661d6d2a1832e526b14b8.png'),(10,'Street Fighter V','Luta',229.00,'2016-02-18','PT-BR','PT-BR',50,50,'3e78376f0a145b7784d78a1183a41cc7.png'),(11,'Overwatch','First-person shooter',229.00,'2016-05-24','PT-BR','PT-BR',45,50,'8ad3ce1da8b6a2b276c5bd32663c2974.png'),(12,'Battlefield 1','First-person shooter',229.00,'2016-10-21','EN','PT-BR',50,50,'1b6211115aa086c456f150a346e3be94.png');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responsesupport`
--

DROP TABLE IF EXISTS `responsesupport`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `responsesupport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_message` int(11) NOT NULL,
  `response` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_message` (`id_message`),
  CONSTRAINT `responsesupport_ibfk_1` FOREIGN KEY (`id_message`) REFERENCES `supportmessage` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responsesupport`
--

LOCK TABLES `responsesupport` WRITE;
/*!40000 ALTER TABLE `responsesupport` DISABLE KEYS */;
INSERT INTO `responsesupport` VALUES (1,1,'Boa tarde Cliente,\r\nA mÃ­dia jÃ¡ esta vinculada na sua conta da Live, basta procurar o jogo nos seus downloads e executar para conseguir jogar.\r\n\r\nEspero ter ajudado.\r\n\r\nAtt,\r\n\r\nEquipe Nicegames.');
/*!40000 ALTER TABLE `responsesupport` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supportmessage`
--

DROP TABLE IF EXISTS `supportmessage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supportmessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email_cliente` varchar(32) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supportmessage`
--

LOCK TABLES `supportmessage` WRITE;
/*!40000 ALTER TABLE `supportmessage` DISABLE KEYS */;
INSERT INTO `supportmessage` VALUES (1,'cliente@ng.com','reclamacao','Boa tarde,\r\nFiz a compra mas nÃ£o sei como proceder, nunca tinha comprado jogos online.\r\n\r\nAguardo a ajuda de vocÃªs.\r\n\r\nObrigado!');
/*!40000 ALTER TABLE `supportmessage` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-18 16:32:11
