-- MySQL dump 10.13  Distrib 5.6.24, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: dermacom
-- ------------------------------------------------------
-- Server version	5.6.26

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
-- Dumping data for table `classificacoes`
--

LOCK TABLES `classificacoes` WRITE;
/*!40000 ALTER TABLE `classificacoes` DISABLE KEYS */;
INSERT INTO `classificacoes` VALUES (1,'Neuropática',1,'2016-09-07 18:30:15',NULL),(2,'Isquêmica',1,'2016-09-07 18:30:15',NULL),(3,'Venosa',2,'2016-09-07 18:30:15',NULL),(4,'Arterial',2,'2016-09-07 18:30:15',NULL),(5,'Mista',2,'2016-09-07 18:30:15',NULL),(6,'Lesão por Pressão',3,'2016-09-07 18:30:15',NULL),(7,'Lesão por Queimadura',4,'2016-09-07 18:30:15',NULL),(8,'Curativo Cirúrgico',5,'2016-09-07 18:30:15',NULL),(9,'Deiscência',5,'2016-09-07 18:30:15',NULL),(10,'Infecção Local',5,'2016-09-07 18:30:15',NULL);
/*!40000 ALTER TABLE `classificacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `comissoes`
--

LOCK TABLES `comissoes` WRITE;
/*!40000 ALTER TABLE `comissoes` DISABLE KEYS */;
INSERT INTO `comissoes` VALUES (1,'sdfasfasdf',NULL,NULL,NULL,NULL,'2016-09-14 21:30:27'),(6,'',NULL,NULL,NULL,NULL,'2016-09-14 21:42:42');
/*!40000 ALTER TABLE `comissoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `comissoes_correcoes`
--

LOCK TABLES `comissoes_correcoes` WRITE;
/*!40000 ALTER TABLE `comissoes_correcoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `comissoes_correcoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `conselhos`
--

LOCK TABLES `conselhos` WRITE;
/*!40000 ALTER TABLE `conselhos` DISABLE KEYS */;
/*!40000 ALTER TABLE `conselhos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `contatos`
--

LOCK TABLES `contatos` WRITE;
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `contatos_tipos`
--

LOCK TABLES `contatos_tipos` WRITE;
/*!40000 ALTER TABLE `contatos_tipos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contatos_tipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `convenios`
--

LOCK TABLES `convenios` WRITE;
/*!40000 ALTER TABLE `convenios` DISABLE KEYS */;
/*!40000 ALTER TABLE `convenios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `cores`
--

LOCK TABLES `cores` WRITE;
/*!40000 ALTER TABLE `cores` DISABLE KEYS */;
INSERT INTO `cores` VALUES (1,'Branca','2016-09-09 00:36:53','2016-09-10 11:00:50'),(2,'Preta','2016-09-09 00:37:07','2016-09-10 11:01:17'),(3,'Amarela','2016-09-10 11:01:37','2016-09-10 11:01:37'),(4,'Parda','2016-09-10 11:01:53','2016-09-10 11:01:53'),(5,'Indígena','2016-09-10 11:02:08','2016-09-10 11:02:08');
/*!40000 ALTER TABLE `cores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `corporais`
--

LOCK TABLES `corporais` WRITE;
/*!40000 ALTER TABLE `corporais` DISABLE KEYS */;
/*!40000 ALTER TABLE `corporais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `corporais_lesoes`
--

LOCK TABLES `corporais_lesoes` WRITE;
/*!40000 ALTER TABLE `corporais_lesoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `corporais_lesoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `escolaridades`
--

LOCK TABLES `escolaridades` WRITE;
/*!40000 ALTER TABLE `escolaridades` DISABLE KEYS */;
INSERT INTO `escolaridades` VALUES (1,'Fundamental - Incompleto','2016-09-10 11:39:01','2016-09-10 11:39:14'),(2,'Fundamental - Completo','2016-09-10 11:39:32','2016-09-10 11:39:32'),(3,'Médio - Incompleto','2016-09-10 11:39:56','2016-09-10 11:39:56'),(4,'Médio - Completo','2016-09-10 11:40:15','2016-09-10 11:40:15'),(5,'Superior - Incompleto','2016-09-10 11:40:39','2016-09-10 11:40:39'),(6,'Superior - Completo','2016-09-10 11:40:52','2016-09-10 11:41:09'),(7,'Pós-graduação(lato senso) - Incompleto','2016-09-10 11:41:52','2016-09-10 11:41:52'),(8,'Pós-graduação(lato senso) - Completo','2016-09-10 11:42:27','2016-09-10 11:42:42'),(9,'Pós-graduação(Stricto sensu, nível mestrado) - Incompleto','2016-09-10 11:43:08','2016-09-10 11:43:50'),(10,'Pós-graduação(Stricto sensu, nível mestrado) - Completo','2016-09-10 11:44:25','2016-09-10 11:44:25'),(11,'Pós-graduação(Stricto sensu, nível doutor) - Incompleto','2016-09-10 11:45:04','2016-09-10 11:45:04'),(12,'Pós-graduação(Stricto sensu, nível doutor) - Completo','2016-09-10 11:45:33','2016-09-10 11:45:33');
/*!40000 ALTER TABLE `escolaridades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `especialidades`
--

LOCK TABLES `especialidades` WRITE;
/*!40000 ALTER TABLE `especialidades` DISABLE KEYS */;
INSERT INTO `especialidades` VALUES (1,'Dentista','2016-09-10 13:15:59','2016-09-10 13:15:59'),(2,'Enfermeiro','2016-09-10 13:16:15','2016-09-10 13:16:15'),(3,'Farmacêutico','2016-09-10 13:16:30','2016-09-10 13:16:30'),(4,'Fisioterapeuta','2016-09-10 13:16:44','2016-09-10 13:16:44'),(5,'Fonoaudiólogo','2016-09-10 13:16:57','2016-09-10 13:16:57'),(6,'Gerentólogo','2016-09-10 13:17:21','2016-09-10 13:17:21'),(7,'Médico','2016-09-10 13:17:35','2016-09-10 13:17:35'),(8,'Nutricionista','2016-09-10 13:17:48','2016-09-10 13:17:48'),(9,'Nutrólogo','2016-09-10 13:18:04','2016-09-10 13:18:04'),(10,'Odontólogo','2016-09-10 13:18:19','2016-09-10 13:18:19'),(11,'Psicólogo','2016-09-10 13:18:37','2016-09-10 13:18:37'),(12,'Radiologista','2016-09-10 13:18:50','2016-09-10 13:18:50'),(13,'Técnico Enfermagem','2016-09-10 13:19:07','2016-09-10 13:19:07'),(14,'Terapeuta Ocupacional','2016-09-10 13:19:20','2016-09-10 13:19:20');
/*!40000 ALTER TABLE `especialidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `estados_civis`
--

LOCK TABLES `estados_civis` WRITE;
/*!40000 ALTER TABLE `estados_civis` DISABLE KEYS */;
INSERT INTO `estados_civis` VALUES (1,'Solteira(o)','2016-09-10 13:26:20','2016-09-10 13:26:20'),(2,'Casada(o)','2016-09-10 13:26:20','2016-09-10 13:26:20'),(3,'Separada(o)','2016-09-10 13:26:20','2016-09-10 13:26:20'),(4,'Divorciada(o)','2016-09-10 13:26:20','2016-09-10 13:26:20'),(5,'Viúva(o)','2016-09-10 13:26:20','2016-09-10 13:26:20');
/*!40000 ALTER TABLE `estados_civis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `estagios`
--

LOCK TABLES `estagios` WRITE;
/*!40000 ALTER TABLE `estagios` DISABLE KEYS */;
INSERT INTO `estagios` VALUES (1,'0','Pé de alto risco, sem úlcera, pele integra',0,1,1,'2016-09-07 18:30:15',NULL),(2,'1','Úlcera superficaial, chegando até subcutâneo',1,1,1,'2016-09-07 18:30:15',NULL),(3,'2','Úlcera profunda, sem envolvimento ósseo',2,1,1,'2016-09-07 18:30:15',NULL),(4,'3','Úlcera profunda, com formção de abscesso ou envolvimento ósseo',3,1,1,'2016-09-07 18:30:15',NULL),(5,'4','Gangrena parcial, ou localizada',4,1,1,'2016-09-07 18:30:15',NULL),(6,'5','Gangrena externa, ou de todo pé',5,1,1,'2016-09-07 18:30:15',NULL),(7,'0','Pé de alto risco, sem úlcera, pele integra',0,1,2,'2016-09-07 18:30:15',NULL),(8,'1','Úlcera superficaial, chegando até subcutâneo',1,1,2,'2016-09-07 18:30:15',NULL),(9,'2','Úlcera profunda, sem envolvimento ósseo',2,1,2,'2016-09-07 18:30:15',NULL),(10,'3','Úlcera profunda, com formção de abscesso ou envolvimento ósseo',3,1,2,'2016-09-07 18:30:15',NULL),(11,'4','Gangrena parcial, ou localizada',4,1,2,'2016-09-07 18:30:15',NULL),(12,'5','Gangrena externa, ou de todo pé',5,1,2,'2016-09-07 18:30:15',NULL),(13,'1','Aguardar',1,2,3,'2016-09-07 18:30:15',NULL),(14,'1','Aguardar',1,2,4,'2016-09-07 18:30:15',NULL),(15,'1','Aguardar',1,2,5,'2016-09-07 18:30:15',NULL),(16,'I','Comprometimnento da epiderme',1,3,6,'2016-09-07 18:30:15',NULL),(17,'II','Comprometimento até a derme',2,3,6,'2016-09-07 18:30:15',NULL),(18,'III','Comprometimento até o subcutâneo',3,3,6,'2016-09-07 18:30:15',NULL),(19,'IV','Comprometimento do músculo e tecido adjacente',4,3,6,'2016-09-07 18:30:15',NULL),(20,'1','Superficial (1º grau)',1,4,7,'2016-09-07 18:30:15',NULL),(21,'2','Parcial (2º grau)',2,4,7,'2016-09-07 18:30:15',NULL),(22,'3','Totasl (3º grau)',3,4,7,'2016-09-07 18:30:15',NULL),(23,'1','Sem comprometimento',0,5,8,'2016-09-07 18:30:15',NULL),(24,'I','Comprometimento da epiderme',1,5,9,'2016-09-07 18:30:15',NULL),(25,'II','Comprometimento até a derme',2,5,9,'2016-09-07 18:30:15',NULL),(26,'III','Comprometimento até o subcutâneo',3,5,9,'2016-09-07 18:30:15',NULL),(27,'IV','Comprometimento do músculo e tecido adjacente',4,5,9,'2016-09-07 18:30:15',NULL),(28,'1','Infecção local',1,5,10,'2016-09-07 18:30:15',NULL);
/*!40000 ALTER TABLE `estagios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `lesoes`
--

LOCK TABLES `lesoes` WRITE;
/*!40000 ALTER TABLE `lesoes` DISABLE KEYS */;
INSERT INTO `lesoes` VALUES (1,'Pé Diabético','2016-09-07 18:30:15',NULL),(2,'Lesão de Perna','2016-09-07 18:30:15',NULL),(3,'Lesão por Pressão','2016-09-07 18:30:15',NULL),(4,'Lesão por Queimadura','2016-09-07 18:30:15',NULL),(5,'Lesão Cirúrgica','2016-09-07 18:30:15',NULL);
/*!40000 ALTER TABLE `lesoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'Lesoes',NULL,'Lesoes','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(2,'edit',NULL,'Lesoes','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(3,'add',NULL,'Lesoes','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(4,'delete',NULL,'Lesoes','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(5,'Estados Civis',NULL,'EstadosCivis','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(6,'edit',NULL,'EstadosCivis','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(7,'add',NULL,'EstadosCivis','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(8,'delete',NULL,'EstadosCivis','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(9,'Nacionalidades',NULL,'Nacionalidades','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(10,'edit',NULL,'Nacionalidades','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(11,'add',NULL,'Nacionalidades','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(12,'delete',NULL,'Nacionalidades','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(13,'Escolaridades',NULL,'Escolaridades','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(14,'edit',NULL,'Escolaridades','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(15,'add',NULL,'Escolaridades','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(16,'delete',NULL,'Escolaridades','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(17,'Convenios',NULL,'Convenios','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(18,'edit',NULL,'Convenios','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(19,'add',NULL,'Convenios','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(20,'delete',NULL,'Convenios','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(21,'Corporais Lesoes',NULL,'CorporaisLesoes','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(22,'edit',NULL,'CorporaisLesoes','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(23,'add',NULL,'CorporaisLesoes','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(24,'delete',NULL,'CorporaisLesoes','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(25,'Tabelas Valores Historicos',NULL,'TabelasValoresHistoricos','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(26,'edit',NULL,'TabelasValoresHistoricos','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(27,'add',NULL,'TabelasValoresHistoricos','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(28,'delete',NULL,'TabelasValoresHistoricos','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(29,'Contatos Tipos',NULL,'ContatosTipos','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(30,'edit',NULL,'ContatosTipos','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(31,'add',NULL,'ContatosTipos','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(32,'delete',NULL,'ContatosTipos','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(33,'Religioes',NULL,'Religioes','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(34,'edit',NULL,'Religioes','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(35,'add',NULL,'Religioes','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(36,'delete',NULL,'Religioes','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(37,'Pacientes Soube',NULL,'PacientesSoube','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(38,'edit',NULL,'PacientesSoube','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(39,'add',NULL,'PacientesSoube','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(40,'delete',NULL,'PacientesSoube','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(41,'Corporais',NULL,'Corporais','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(42,'edit',NULL,'Corporais','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(43,'add',NULL,'Corporais','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(44,'delete',NULL,'Corporais','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(45,'Funcionarios',NULL,'Funcionarios','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(46,'edit',NULL,'Funcionarios','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(47,'add',NULL,'Funcionarios','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(48,'delete',NULL,'Funcionarios','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(49,'Parentescos',NULL,'Parentescos','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(50,'edit',NULL,'Parentescos','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(51,'add',NULL,'Parentescos','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(52,'delete',NULL,'Parentescos','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(53,'Cores',NULL,'Cores','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(54,'edit',NULL,'Cores','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(55,'add',NULL,'Cores','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(56,'delete',NULL,'Cores','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(57,'Estagios',NULL,'Estagios','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(58,'edit',NULL,'Estagios','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(59,'add',NULL,'Estagios','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(60,'delete',NULL,'Estagios','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(61,'Comissoes',NULL,'Comissoes','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(62,'edit',NULL,'Comissoes','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(63,'add',NULL,'Comissoes','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(64,'delete',NULL,'Comissoes','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(65,'Usuarios',NULL,'Usuarios','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(66,'edit',NULL,'Usuarios','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(67,'add',NULL,'Usuarios','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(68,'delete',NULL,'Usuarios','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(69,'Pacientes Acompanhamentos',NULL,'PacientesAcompanhamentos','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(70,'edit',NULL,'PacientesAcompanhamentos','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(71,'add',NULL,'PacientesAcompanhamentos','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(72,'delete',NULL,'PacientesAcompanhamentos','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(73,'Sexos',NULL,'Sexos','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(74,'edit',NULL,'Sexos','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(75,'add',NULL,'Sexos','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(76,'delete',NULL,'Sexos','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(77,'Comissoes Correcoes',NULL,'ComissoesCorrecoes','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(78,'edit',NULL,'ComissoesCorrecoes','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(79,'add',NULL,'ComissoesCorrecoes','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(80,'delete',NULL,'ComissoesCorrecoes','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(81,'Pacientes Emergencias',NULL,'PacientesEmergencias','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(82,'edit',NULL,'PacientesEmergencias','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(83,'add',NULL,'PacientesEmergencias','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(84,'delete',NULL,'PacientesEmergencias','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(85,'Especialidades',NULL,'Especialidades','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(86,'edit',NULL,'Especialidades','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(87,'add',NULL,'Especialidades','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(88,'delete',NULL,'Especialidades','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(89,'Conselhos',NULL,'Conselhos','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(90,'edit',NULL,'Conselhos','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(91,'add',NULL,'Conselhos','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(92,'delete',NULL,'Conselhos','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(93,'Tabelas Valores',NULL,'TabelasValores','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(94,'edit',NULL,'TabelasValores','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(95,'add',NULL,'TabelasValores','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(96,'delete',NULL,'TabelasValores','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(97,'Tabelas Precos',NULL,'TabelasPrecos','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(98,'edit',NULL,'TabelasPrecos','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(99,'add',NULL,'TabelasPrecos','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(100,'delete',NULL,'TabelasPrecos','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(101,'Servicos Clinicas',NULL,'ServicosClinicas','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(102,'edit',NULL,'ServicosClinicas','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(103,'add',NULL,'ServicosClinicas','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(104,'delete',NULL,'ServicosClinicas','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(105,'Contatos',NULL,'Contatos','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(106,'edit',NULL,'Contatos','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(107,'add',NULL,'Contatos','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(108,'delete',NULL,'Contatos','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(109,'Pacientes Convenios',NULL,'PacientesConvenios','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(110,'edit',NULL,'PacientesConvenios','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(111,'add',NULL,'PacientesConvenios','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(112,'delete',NULL,'PacientesConvenios','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(113,'Profissoes',NULL,'Profissoes','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(114,'edit',NULL,'Profissoes','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(115,'add',NULL,'Profissoes','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(116,'delete',NULL,'Profissoes','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(117,'Tabelas Reajustes',NULL,'TabelasReajustes','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(118,'edit',NULL,'TabelasReajustes','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(119,'add',NULL,'TabelasReajustes','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(120,'delete',NULL,'TabelasReajustes','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(121,'Menus',NULL,'Menus','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(122,'edit',NULL,'Menus','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(123,'add',NULL,'Menus','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(124,'delete',NULL,'Menus','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(125,'Classificacoes',NULL,'Classificacoes','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(126,'edit',NULL,'Classificacoes','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(127,'add',NULL,'Classificacoes','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(128,'delete',NULL,'Classificacoes','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(129,'Prestadores',NULL,'Prestadores','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(130,'edit',NULL,'Prestadores','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(131,'add',NULL,'Prestadores','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(132,'delete',NULL,'Prestadores','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(133,'Pacientes Midias',NULL,'PacientesMidias','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(134,'edit',NULL,'PacientesMidias','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(135,'add',NULL,'PacientesMidias','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(136,'delete',NULL,'PacientesMidias','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(137,'Pacientes Servicos',NULL,'PacientesServicos','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(138,'edit',NULL,'PacientesServicos','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(139,'add',NULL,'PacientesServicos','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(140,'delete',NULL,'PacientesServicos','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(141,'Midias',NULL,'Midias','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(142,'edit',NULL,'Midias','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(143,'add',NULL,'Midias','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(144,'delete',NULL,'Midias','delete',1,0,NULL,'2016-09-17 01:21:38',NULL),(145,'Pacientes',NULL,'Pacientes','index',1,1,NULL,'2016-09-17 01:21:38',NULL),(146,'edit',NULL,'Pacientes','edit',1,0,NULL,'2016-09-17 01:21:38',NULL),(147,'add',NULL,'Pacientes','add',1,0,NULL,'2016-09-17 01:21:38',NULL),(148,'delete',NULL,'Pacientes','delete',1,0,NULL,'2016-09-17 01:21:38',NULL);
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `midias`
--

LOCK TABLES `midias` WRITE;
/*!40000 ALTER TABLE `midias` DISABLE KEYS */;
/*!40000 ALTER TABLE `midias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nacionalidades`
--

LOCK TABLES `nacionalidades` WRITE;
/*!40000 ALTER TABLE `nacionalidades` DISABLE KEYS */;
INSERT INTO `nacionalidades` VALUES (1,'Brasileiro(a)','Brasil','2016-09-10 11:08:18','2016-09-10 11:10:00'),(2,'Alemão(ã)','Alemanha','2016-09-10 11:08:34','2016-09-10 11:10:13'),(3,'Argentino(a)','Argentina','2016-09-10 11:08:56','2016-09-10 11:10:25'),(4,'Australianao(a)','Austrália','2016-09-10 11:09:49','2016-09-10 11:09:49'),(5,'Belga','Bélgica','2016-09-10 11:10:56','2016-09-10 11:10:56'),(6,'Boliviano(a)','Bolívia','2016-09-10 11:11:20','2016-09-10 11:11:20'),(7,'Canadense','Canadá','2016-09-10 11:11:36','2016-09-10 11:11:36'),(8,'Chileno(a)','Chile','2016-09-10 11:11:55','2016-09-10 11:12:12'),(9,'Chines(a)','China','2016-09-10 11:12:40','2016-09-10 11:12:40'),(10,'Colombiano(a)','Colômbia','2016-09-10 11:13:04','2016-09-10 11:13:04'),(11,'Cubano(a)','Cuba','2016-09-10 11:13:23','2016-09-10 11:13:23'),(12,'Equatoriano(a)','Equador','2016-09-10 11:13:44','2016-09-10 11:13:57'),(13,'Espanhol(a)','Espanha','2016-09-10 11:14:35','2016-09-10 11:14:35'),(14,'Norte Americano(a)','Estados Unidos','2016-09-10 11:15:05','2016-09-10 11:15:05'),(15,'Francês/Francesa','França','2016-09-10 11:15:36','2016-09-10 11:16:31'),(16,'Holandês/Holandesa','Holanda','2016-09-10 11:16:18','2016-09-10 11:16:18'),(17,'Húngaro/Hungara','Hungria','2016-09-10 11:16:56','2016-09-10 11:16:56'),(18,'Inglês/Inglesa','Inglaterra','2016-09-10 11:17:19','2016-09-10 11:17:19'),(19,'Iraquiano(a)','Iraque','2016-09-10 11:17:40','2016-09-10 11:17:40'),(20,'Italiano(a)','Itália','2016-09-10 11:18:01','2016-09-10 11:18:28'),(21,'Jamaicano(a)','Jamaica','2016-09-10 11:18:59','2016-09-10 11:18:59'),(22,'Japonês/Japonesa','Japão','2016-09-10 11:19:23','2016-09-10 11:19:23'),(24,'Mexicano(a)','México','2016-09-10 11:20:41','2016-09-10 11:20:41'),(25,'Paraguaio(a)','Paraguai','2016-09-10 11:21:03','2016-09-10 11:21:03'),(26,'Russo(a)','Rússia','2016-09-10 11:21:21','2016-09-10 11:21:21'),(27,'Sueco(a)','Suécia','2016-09-10 11:22:08','2016-09-10 11:22:08'),(28,'Suíço(a)','Suíça','2016-09-10 11:22:28','2016-09-10 11:22:28'),(29,'Turco(a)','Turquia','2016-09-10 11:22:44','2016-09-10 11:22:44'),(30,'Uruguai(a)','Uruguai','2016-09-10 11:23:07','2016-09-10 11:23:07');
/*!40000 ALTER TABLE `nacionalidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pacientes_acompanhamentos`
--

LOCK TABLES `pacientes_acompanhamentos` WRITE;
/*!40000 ALTER TABLE `pacientes_acompanhamentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacientes_acompanhamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pacientes_convenios`
--

LOCK TABLES `pacientes_convenios` WRITE;
/*!40000 ALTER TABLE `pacientes_convenios` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacientes_convenios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pacientes_emergencias`
--

LOCK TABLES `pacientes_emergencias` WRITE;
/*!40000 ALTER TABLE `pacientes_emergencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacientes_emergencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pacientes_midias`
--

LOCK TABLES `pacientes_midias` WRITE;
/*!40000 ALTER TABLE `pacientes_midias` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacientes_midias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pacientes_servicos`
--

LOCK TABLES `pacientes_servicos` WRITE;
/*!40000 ALTER TABLE `pacientes_servicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacientes_servicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `pacientes_soube`
--

LOCK TABLES `pacientes_soube` WRITE;
/*!40000 ALTER TABLE `pacientes_soube` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacientes_soube` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `parentescos`
--

LOCK TABLES `parentescos` WRITE;
/*!40000 ALTER TABLE `parentescos` DISABLE KEYS */;
INSERT INTO `parentescos` VALUES (1,'Esposa(o)','2016-09-10 12:49:38','2016-09-10 12:49:38'),(2,'Pai','2016-09-10 12:49:49','2016-09-10 12:49:49'),(3,'Mãe','2016-09-10 12:49:59','2016-09-10 12:49:59'),(4,'Filha(o)','2016-09-10 12:50:13','2016-09-10 12:50:13'),(5,'Sogra(o)','2016-09-10 12:50:29','2016-09-10 12:50:29'),(6,'Irmã(o)','2016-09-10 12:50:49','2016-09-10 12:50:49');
/*!40000 ALTER TABLE `parentescos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `prestadores`
--

LOCK TABLES `prestadores` WRITE;
/*!40000 ALTER TABLE `prestadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `prestadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `profissoes`
--

LOCK TABLES `profissoes` WRITE;
/*!40000 ALTER TABLE `profissoes` DISABLE KEYS */;
INSERT INTO `profissoes` VALUES (1,'Açougueiro','2016-09-10 11:24:21','2016-09-10 11:24:21'),(2,'Agente Imobiliário','2016-09-10 11:24:36','2016-09-10 11:24:36'),(3,'Agricultor','2016-09-10 11:24:52','2016-09-10 11:24:52'),(4,'Analista de Sistemas de Computação','2016-09-10 11:25:12','2016-09-10 11:25:12'),(5,'Assistente Social','2016-09-10 11:25:50','2016-09-10 11:25:50'),(6,'Astrônomo','2016-09-10 11:26:05','2016-09-10 11:26:05'),(7,'Ator','2016-09-10 11:26:16','2016-09-10 11:26:16'),(8,'Bombeiro','2016-09-10 11:26:32','2016-09-10 11:26:32'),(9,'Caixa','2016-09-10 11:26:44','2016-09-10 11:26:44'),(10,'Carpinteiro','2016-09-10 11:26:57','2016-09-10 11:26:57'),(11,'Carteiro','2016-09-10 11:27:09','2016-09-10 11:27:09'),(12,'Comissário de Vôo','2016-09-10 11:27:26','2016-09-10 11:27:26'),(13,'Contador','2016-09-10 11:27:37','2016-09-10 11:27:37'),(14,'Controlador de Tráfico Aéreo','2016-09-10 11:27:59','2016-09-10 11:27:59'),(15,'Costureira/Alfaiate','2016-09-10 11:28:19','2016-09-10 11:28:19'),(16,'Dentista','2016-09-10 11:28:35','2016-09-10 11:28:35'),(17,'Dermatologista','2016-09-10 11:28:51','2016-09-10 11:28:51'),(18,'Doméstica','2016-09-10 11:29:18','2016-09-10 11:29:18'),(19,'Engenheiro Ambiental','2016-09-10 11:29:34','2016-09-10 11:29:34'),(20,'Engenheiro Biomédico','2016-09-10 11:29:51','2016-09-10 11:29:51'),(21,'Engenheiro Civil','2016-09-10 11:30:05','2016-09-10 11:30:05'),(22,'Estoquista','2016-09-10 11:30:18','2016-09-10 11:30:18'),(23,'Farmacêutico','2016-09-10 11:30:32','2016-09-10 11:30:32'),(24,'Faxineiro','2016-09-10 11:30:43','2016-09-10 11:30:43'),(25,'Fisioterapeuta','2016-09-10 11:30:58','2016-09-10 11:30:58'),(26,'Fonoaudiólogo','2016-09-10 11:31:15','2016-09-10 11:31:15'),(27,'Fotógrafo','2016-09-10 11:31:27','2016-09-10 11:31:27'),(28,'Garcom/Garçonete','2016-09-10 11:31:44','2016-09-10 11:31:44'),(29,'Marinheiro','2016-09-10 11:31:57','2016-09-10 11:31:57'),(30,'Médico','2016-09-10 11:32:09','2016-09-10 11:32:09'),(31,'Médico Veterinário','2016-09-10 11:32:24','2016-09-10 11:32:24'),(32,'Militar','2016-09-10 11:32:35','2016-09-10 11:32:35'),(33,'Motorista','2016-09-10 11:32:46','2016-09-10 11:32:46'),(34,'Nutricionista','2016-09-10 11:33:01','2016-09-10 11:33:01'),(35,'Pintor','2016-09-10 11:33:21','2016-09-10 11:33:21'),(36,'Podólogo','2016-09-10 11:33:34','2016-09-10 11:33:34'),(37,'Pediatra','2016-09-10 11:33:47','2016-09-10 11:33:47'),(38,'Policial','2016-09-10 11:34:02','2016-09-10 11:34:02'),(39,'Professor','2016-09-10 11:34:15','2016-09-10 11:34:15'),(40,'Programador de Computador','2016-09-10 11:34:33','2016-09-10 11:34:33'),(41,'Psiquiatra','2016-09-10 11:34:54','2016-09-10 11:34:54'),(42,'Radialista','2016-09-10 11:35:07','2016-09-10 11:35:07'),(43,'Repórter','2016-09-10 11:35:19','2016-09-10 11:35:19'),(44,'Terapeuta Ocupacional','2016-09-10 11:35:44','2016-09-10 11:36:04');
/*!40000 ALTER TABLE `profissoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `religioes`
--

LOCK TABLES `religioes` WRITE;
/*!40000 ALTER TABLE `religioes` DISABLE KEYS */;
INSERT INTO `religioes` VALUES (1,'Batista','2016-09-10 11:03:18','2016-09-10 11:03:18'),(2,'Budista','2016-09-10 11:03:30','2016-09-10 11:03:30'),(3,'Católica Apostólica Romana','2016-09-10 11:03:49','2016-09-10 11:03:49'),(4,'Católica Ortodoxa','2016-09-10 11:04:17','2016-09-10 11:04:17'),(5,'Espirita','2016-09-10 11:04:30','2016-09-10 11:04:30'),(6,'Evangelica','2016-09-10 11:04:41','2016-09-10 11:04:41'),(7,'Igreja Adventista do Sétimo Dia','2016-09-10 11:05:02','2016-09-10 11:05:21'),(8,'Islamismo','2016-09-10 11:05:39','2016-09-10 11:05:39'),(9,'Judaismo','2016-09-10 11:05:51','2016-09-10 11:05:51'),(10,'Luterana','2016-09-10 11:06:06','2016-09-10 11:06:06'),(11,'Metodista','2016-09-10 11:06:18','2016-09-10 11:06:18'),(12,'Morman','2016-09-10 11:06:29','2016-09-10 11:06:29'),(13,'Presbiteriana','2016-09-10 11:06:46','2016-09-10 11:06:46'),(14,'Umbanda','2016-09-10 11:06:57','2016-09-10 11:06:57');
/*!40000 ALTER TABLE `religioes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `servicos_clinicas`
--

LOCK TABLES `servicos_clinicas` WRITE;
/*!40000 ALTER TABLE `servicos_clinicas` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicos_clinicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `sexos`
--

LOCK TABLES `sexos` WRITE;
/*!40000 ALTER TABLE `sexos` DISABLE KEYS */;
INSERT INTO `sexos` VALUES (1,'Mascolino','2016-09-10 13:26:20','2016-09-10 13:26:20'),(2,'Feminino','2016-09-10 13:26:31','2016-09-10 13:26:31'),(3,'Outros','2016-09-10 13:26:39','2016-09-10 13:26:39');
/*!40000 ALTER TABLE `sexos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tabelas_precos`
--

LOCK TABLES `tabelas_precos` WRITE;
/*!40000 ALTER TABLE `tabelas_precos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabelas_precos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tabelas_reajustes`
--

LOCK TABLES `tabelas_reajustes` WRITE;
/*!40000 ALTER TABLE `tabelas_reajustes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabelas_reajustes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tabelas_valores`
--

LOCK TABLES `tabelas_valores` WRITE;
/*!40000 ALTER TABLE `tabelas_valores` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabelas_valores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `tabelas_valores_historicos`
--

LOCK TABLES `tabelas_valores_historicos` WRITE;
/*!40000 ALTER TABLE `tabelas_valores_historicos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabelas_valores_historicos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Super Administrador do Sistema','super','$2y$10$2XV67/X//PEj/EBVUQal0uxKCTZpOahecHy16AipaiYLeFHhlGiQm',1,'2016-09-07 18:30:15','2016-09-17 14:05:43');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-19  9:01:37
