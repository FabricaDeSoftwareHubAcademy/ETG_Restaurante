CREATE DATABASE  IF NOT EXISTS `etg` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `etg`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 192.168.22.9    Database: etg
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cadastro_checklist`
--

DROP TABLE IF EXISTS `cadastro_checklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadastro_checklist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_checklist`
--

LOCK TABLES `cadastro_checklist` WRITE;
/*!40000 ALTER TABLE `cadastro_checklist` DISABLE KEYS */;
INSERT INTO `cadastro_checklist` VALUES (2,'PREPOS');
/*!40000 ALTER TABLE `cadastro_checklist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cadastro_perfil`
--

DROP TABLE IF EXISTS `cadastro_perfil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadastro_perfil` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `gerenciar_checklist` enum('0','1') DEFAULT NULL,
  `gerenciar_salas` enum('0','1') DEFAULT NULL,
  `gerenciar_usuarios` enum('0','1') DEFAULT NULL,
  `gerenciar_perfis` enum('0','1') DEFAULT NULL,
  `gerenciar_notificacoes` enum('0','1') DEFAULT NULL,
  `gerenciar_recados` enum('0','1') DEFAULT NULL,
  `realizar_acao_corretiva` enum('0','1') DEFAULT NULL,
  `realizar_checklist` enum('0','1') DEFAULT NULL,
  `gerenciar_perguntas` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_perfil`
--

LOCK TABLES `cadastro_perfil` WRITE;
/*!40000 ALTER TABLE `cadastro_perfil` DISABLE KEYS */;
INSERT INTO `cadastro_perfil` VALUES (1,'Administrador','1','1','1','1','1','1','1','1','1'),(2,'teste','0','0','0','0','1','1','1','0','0');
/*!40000 ALTER TABLE `cadastro_perfil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cadastro_pergunta`
--

DROP TABLE IF EXISTS `cadastro_pergunta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadastro_pergunta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `descricao` text NOT NULL,
  `tipo` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_pergunta`
--

LOCK TABLES `cadastro_pergunta` WRITE;
/*!40000 ALTER TABLE `cadastro_pergunta` DISABLE KEYS */;
INSERT INTO `cadastro_pergunta` VALUES (1,'PRE1','0'),(2,'POS1','1'),(3,'AMBAS1','2'),(4,'PRE2','0'),(5,'PRE3','0'),(6,'POS2','1'),(7,'AMBAS2','2'),(8,'POS3','1'),(9,'AMBAS','0'),(20,'Kk','2');
/*!40000 ALTER TABLE `cadastro_pergunta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cadastro_sala`
--

DROP TABLE IF EXISTS `cadastro_sala`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadastro_sala` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `cor_itens` varchar(45) DEFAULT NULL,
  `img_sala` varchar(80) DEFAULT 'imagempadrao.jpg',
  `descricao` text,
  `status` enum('L','A','B','D') DEFAULT 'L',
  `horarios` json DEFAULT NULL,
  `id_check` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_salas_checklist1_idx` (`id_check`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_sala`
--

LOCK TABLES `cadastro_sala` WRITE;
/*!40000 ALTER TABLE `cadastro_sala` DISABLE KEYS */;
INSERT INTO `cadastro_sala` VALUES (1,'Dasdsa655','Dasdas45','#000000','imagempadrao.jpg','Dsadsa','L','{\"sexta\": \"nao\", \"terca\": \"nao\", \"quarta\": \"sim\", \"quinta\": \"nao\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"nao\"}',2),(2,'NAOCONFPRE','123','#e60000','','Asd','L','{\"sexta\": \"nao\", \"terca\": \"nao\", \"quarta\": \"nao\", \"quinta\": \"nao\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"sim\", \"vespertino\": \"nao\"}, \"segunda\": \"sim\"}',3),(3,'Dsadsa','Dsadsa','#000000','imagempadrao.jpg','Dsadsa','L','{\"sexta\": \"nao\", \"terca\": \"nao\", \"quarta\": \"sim\", \"quinta\": \"nao\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"nao\"}',1),(4,'Não vegana ','Dsadsa','#e90c0c','IMG_4706.65bc0426acb82.jpeg','Dasdsda','L','{\"sexta\": \"nao\", \"terca\": \"sim\", \"quarta\": \"nao\", \"quinta\": \"nao\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"nao\"}',2),(5,'Luiz123','Sdabnmb','#000000','IMG_4830.65bc03425ef5b.jpeg','Dadsa','L','{\"sexta\": \"nao\", \"terca\": \"nao\", \"quarta\": \"nao\", \"quinta\": \"nao\", \"sabado\": \"sim\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',2);
/*!40000 ALTER TABLE `cadastro_sala` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cadastro_usuario`
--

DROP TABLE IF EXISTS `cadastro_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadastro_usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `matricula` char(9) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `id_perfil` int NOT NULL,
  `foto` text DEFAULT (_utf8mb4'profile.png'),
  PRIMARY KEY (`id`),
  KEY `fk_perfil_funcionarios_cargo1_idx` (`id_perfil`),
  CONSTRAINT `fk_perfil_funcionarios_cargo1` FOREIGN KEY (`id_perfil`) REFERENCES `cadastro_perfil` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_usuario`
--

LOCK TABLES `cadastro_usuario` WRITE;
/*!40000 ALTER TABLE `cadastro_usuario` DISABLE KEYS */;
INSERT INTO `cadastro_usuario` VALUES (1,'adm','adm@gmail.com','1','123',1,'65bbde9655315-imagem1.jfif'),(2,'teste4','teste4@gmail.com','3214','123',1,'profile.png'),(3,'teste5','teste5@gmail.com','41341','123',1,'profile.png'),(4,'teste6','teste6@gmail.com','4313','123',1,'profile.png'),(5,'teste7','teste7@gmail.com','31221','123',1,'profile.png'),(6,'zoro','zorosola@gmail.com','2','123',1,'65b93a93819fd-zoro.png'),(7,'teste8','teste8@gmail.com','21412','123',1,'profile.png'),(8,'teste9','teste9@gmail.com','21341','123',1,'profile.png'),(9,'teste10','teste10@gmail.com','4214','123',1,'profile.png'),(10,'teste44','teste44@gmail','3234','123',1,'profile.png'),(11,'teste12','teste12@gmail.com','4131','123',1,'profile.png'),(12,'TESTE13','TESTE13@gmail.com','4231','123',1,'profile.png'),(13,'teste99','testrqwer@gmail.com','923','123',1,'profile.png'),(14,'teste57','teasffd@gmail.com','5432','123',1,'profile.png'),(15,'teste67','teste67@gmail.com','4556','123',1,'profile.png'),(16,'teste95678','asc@gmail.com','41212','123',1,'profile.png'),(17,'teste76','afd@gmail.com','3412','123',1,'profile.png'),(18,'teste344','gfda3@gmail.com','7777','123',1,'profile.png'),(19,'teste989','kfdjs@gmail.com','5565','123',1,'profile.png'),(20,'teste89','teste89@gmail.com','2222','123',1,'profile.png'),(21,'testsfsdfsd','sdfsd@gmail.com','4444','123',1,'profile.png'),(22,'testfSDsfad','dfafadfgad@gmail.com','3321','123',1,'profile.png'),(23,'aaaaasdf','aaaa@gmail.com','14234','123',1,'profile.png'),(24,'teste547368543','teste38472@gmail.com','124235','123',1,'profile.png'),(26,'hajhsdfsdf','testeqqrqrq@gmail.com','55322','123',1,'profile.png'),(27,'sdsadsada','asfsdgfdvcb@gmail.com','424114','123',1,'profile.png'),(28,'gfdgfdssfdg','safddgfsgh@gmail.com','4367','123',2,'profile.png'),(29,'sadasdasafsdgdff','teste3459@gmail.com','45642','123',1,'profile.png'),(30,'fsdfsdfs','testedjsdfjshd@gmail.com','53413','123',1,'profile.png'),(31,'fdsfsdfsfsd','teste487@gmail.com','5321','123',1,'profile.png'),(32,'fsdfsdfsd','teste84848@gmail.com','142352','123',1,'profile.png'),(33,'teste8888','teste8888@gmail.com','54432','123',1,'profile.png'),(34,'teste1481','testeafsdg@gmail.com','54221','123',1,'profile.png'),(35,'teste99999','testeadgdfgs@gmail.com','123231','123',1,'profile.png'),(36,'teset3378529','teste919191@gmail.com','123445','123',1,'profile.png'),(37,'teste472390','teste4719@gmail.com','54321','123',1,'profile.png'),(38,'testesfdgvavcbscvb','teste78562@gmail.com','00000','123',1,'profile.png'),(39,'teste0843053','teste82dfgda9@gmail.com','27835','123',1,'profile.png'),(40,'teste3478232','teste534511@gmail.com','65432','123',1,'profile.png'),(41,'teste3634534','tesetsdffgsdhfghf@gmail.com','5345432','123',1,'profile.png'),(42,'tesethkgaafghfdjd','testeppppp@gmail.com','76542','123',1,'profile.png'),(43,'gfdgdfgdfgsd','testelkghnbv@gmail.com','73423','123',1,'profile.png'),(44,'fbhfdgfdgfdgdf','testedffgfdgbvcb@gmail.com','421321','123',1,'profile.png'),(45,'fsd','saasfafas@gmail.com','4232','\'213',1,'profile.png'),(46,'gsgdfgdfdgdafddaf','teste4329@gmail.com','65743','123',1,'profile.png');
/*!40000 ALTER TABLE `cadastro_usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `check_aberta`
--

DROP TABLE IF EXISTS `check_aberta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `check_aberta` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_reg` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reg_check_aberto_reg_check1_idx` (`id_reg`),
  CONSTRAINT `fk_reg_check_aberto_reg_check1` FOREIGN KEY (`id_reg`) REFERENCES `responder_check` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `check_aberta`
--

LOCK TABLES `check_aberta` WRITE;
/*!40000 ALTER TABLE `check_aberta` DISABLE KEYS */;
INSERT INTO `check_aberta` VALUES (1,1),(2,2),(3,3),(4,4),(5,5),(6,6),(7,7),(8,8),(9,9),(10,10),(11,11),(12,12),(13,13),(14,14);
/*!40000 ALTER TABLE `check_aberta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `check_concluidas`
--

DROP TABLE IF EXISTS `check_concluidas`;
/*!50001 DROP VIEW IF EXISTS `check_concluidas`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `check_concluidas` AS SELECT 
 1 AS `id_responder`,
 1 AS `data_abertura`,
 1 AS `data_fechamento`,
 1 AS `conf_logis`,
 1 AS `nome_sala`,
 1 AS `img_sala`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `conf_logistica`
--

DROP TABLE IF EXISTS `conf_logistica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `conf_logistica` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_prof` int NOT NULL,
  `id_registro` int NOT NULL,
  `houve_NC` enum('s','n') NOT NULL DEFAULT 'n',
  `data_vizu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_conf_logistica_perfil_funcionarios1_idx` (`id_prof`),
  KEY `fk_conf_logistica_reg_check1_idx` (`id_registro`),
  CONSTRAINT `fk_conf_logistica_perfil_funcionarios1` FOREIGN KEY (`id_prof`) REFERENCES `cadastro_usuario` (`id`),
  CONSTRAINT `fk_conf_logistica_reg_check1` FOREIGN KEY (`id_registro`) REFERENCES `responder_check` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conf_logistica`
--

LOCK TABLES `conf_logistica` WRITE;
/*!40000 ALTER TABLE `conf_logistica` DISABLE KEYS */;
/*!40000 ALTER TABLE `conf_logistica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notificacao`
--

DROP TABLE IF EXISTS `notificacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notificacao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_remetente` int NOT NULL,
  `id_destinatario` int NOT NULL,
  `texto` varchar(250) NOT NULL,
  `data_envio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visualizado` enum('0','1') DEFAULT NULL,
  `marcado` enum('0','1') DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_notificacao_perfil_funcionarios1_idx` (`id_remetente`),
  KEY `fk_notificacao_perfil_funcionarios2_idx` (`id_destinatario`),
  CONSTRAINT `fk_notificacao_perfil_funcionarios1` FOREIGN KEY (`id_remetente`) REFERENCES `cadastro_usuario` (`id`),
  CONSTRAINT `fk_notificacao_perfil_funcionarios2` FOREIGN KEY (`id_destinatario`) REFERENCES `cadastro_usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificacao`
--

LOCK TABLES `notificacao` WRITE;
/*!40000 ALTER TABLE `notificacao` DISABLE KEYS */;
INSERT INTO `notificacao` VALUES (1,1,1,'tessdfdfEQ','2024-01-30 20:14:19','1','1');
/*!40000 ALTER TABLE `notificacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `perfil_do_user`
--

DROP TABLE IF EXISTS `perfil_do_user`;
/*!50001 DROP VIEW IF EXISTS `perfil_do_user`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `perfil_do_user` AS SELECT 
 1 AS `id_user`,
 1 AS `gerenciar_usuarios`,
 1 AS `realizar_acao_corretiva`,
 1 AS `realizar_checklist`,
 1 AS `gerenciar_salas`,
 1 AS `gerenciar_checklist`,
 1 AS `gerenciar_recados`,
 1 AS `gerenciar_notificacoes`,
 1 AS `gerenciar_perfis`,
 1 AS `gerenciar_perguntas`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary view structure for view `perguntas_da_sala`
--

DROP TABLE IF EXISTS `perguntas_da_sala`;
/*!50001 DROP VIEW IF EXISTS `perguntas_da_sala`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `perguntas_da_sala` AS SELECT 
 1 AS `id_sala`,
 1 AS `id_pergunta`,
 1 AS `pergunta`,
 1 AS `tipo`,
 1 AS `nome_check`,
 1 AS `nome_sala`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `recados`
--

DROP TABLE IF EXISTS `recados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recados` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_autor` int NOT NULL,
  `texto` varchar(100) NOT NULL,
  `data_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_recados_perfil_funcionarios1_idx` (`id_autor`),
  CONSTRAINT `fk_recados_perfil_funcionarios1` FOREIGN KEY (`id_autor`) REFERENCES `cadastro_usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recados`
--

LOCK TABLES `recados` WRITE;
/*!40000 ALTER TABLE `recados` DISABLE KEYS */;
INSERT INTO `recados` VALUES (1,1,'teste hahahahhahahahhahahahha','2024-01-30 20:13:31'),(2,1,'FORÇA LUIZ VC CONSEGUE','2024-01-30 21:04:48'),(3,6,'Vamo querê aí Luiz!??','2024-01-31 19:12:15');
/*!40000 ALTER TABLE `recados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reg_block`
--

DROP TABLE IF EXISTS `reg_block`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reg_block` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_sala` int NOT NULL,
  `motivo` text NOT NULL,
  `data_bloqueio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_reg_block_salas1_idx` (`id_sala`),
  CONSTRAINT `fk_reg_block_salas1` FOREIGN KEY (`id_sala`) REFERENCES `cadastro_sala` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_block`
--

LOCK TABLES `reg_block` WRITE;
/*!40000 ALTER TABLE `reg_block` DISABLE KEYS */;
/*!40000 ALTER TABLE `reg_block` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reg_correcao`
--

DROP TABLE IF EXISTS `reg_correcao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reg_correcao` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reg_NC_id` int NOT NULL,
  `decricao` varchar(100) NOT NULL,
  `img1` varchar(45) NOT NULL,
  `img2` varchar(45) DEFAULT NULL,
  `img3` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reg_correcao_reg_NC1_idx` (`reg_NC_id`),
  CONSTRAINT `fk_reg_correcao_reg_NC1` FOREIGN KEY (`reg_NC_id`) REFERENCES `reg_nc` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_correcao`
--

LOCK TABLES `reg_correcao` WRITE;
/*!40000 ALTER TABLE `reg_correcao` DISABLE KEYS */;
/*!40000 ALTER TABLE `reg_correcao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reg_nc`
--

DROP TABLE IF EXISTS `reg_nc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reg_nc` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_realiza` int NOT NULL,
  `id_prof` int NOT NULL,
  `id_pergu` int NOT NULL,
  `descricao_NC` text NOT NULL,
  `img1` varchar(45) NOT NULL,
  `img2` varchar(45) DEFAULT NULL,
  `img3` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reg_NC_reg_check1_idx` (`id_realiza`),
  KEY `fk_reg_NC_pergunta1_idx` (`id_pergu`),
  KEY `fk_reg_NC_usuarios1_idx` (`id_prof`),
  CONSTRAINT `fk_reg_NC_pergunta1` FOREIGN KEY (`id_pergu`) REFERENCES `cadastro_pergunta` (`id`),
  CONSTRAINT `fk_reg_NC_reg_check1` FOREIGN KEY (`id_realiza`) REFERENCES `responder_check` (`id`),
  CONSTRAINT `fk_reg_NC_usuarios1` FOREIGN KEY (`id_prof`) REFERENCES `cadastro_usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_nc`
--

LOCK TABLES `reg_nc` WRITE;
/*!40000 ALTER TABLE `reg_nc` DISABLE KEYS */;
INSERT INTO `reg_nc` VALUES (1,9,1,9,'Ambas 3','65b938563d56f_nc.png','65b938563eabc_nc.png','65b938563fadf_nc.png'),(2,9,1,7,'Ambas 2','65b9385647166_nc.png','65b93856482d5_nc.png','65b9385649300_nc.png'),(3,9,1,3,'AMBAS 1','65b938564c731_nc.png','65b938564d899_nc.png','65b938564e6f5_nc.png'),(4,14,1,1,'pre1','65b9672fa1276_nc.png','65b9672fa12dc_nc.png','65b9672fa1310_nc.png'),(5,14,1,4,'pre 2','65b9672fa402c_nc.png','65b9672fa408b_nc.png','65b9672fa40ae_nc.png'),(6,14,1,5,'PRE 3','65b9672fa6760_nc.png','65b9672fa67bf_nc.png','65b9672fa67f2_nc.png');
/*!40000 ALTER TABLE `reg_nc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `relacao_pergunta_checklist`
--

DROP TABLE IF EXISTS `relacao_pergunta_checklist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `relacao_pergunta_checklist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_check` int NOT NULL,
  `id_pergunta` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_checklist_has_perguntas_perguntas1_idx` (`id_pergunta`),
  KEY `fk_checklist_has_perguntas_checklist1_idx` (`id_check`),
  CONSTRAINT `fk_checklist_has_perguntas_checklist1` FOREIGN KEY (`id_check`) REFERENCES `cadastro_checklist` (`id`),
  CONSTRAINT `fk_checklist_has_perguntas_perguntas1` FOREIGN KEY (`id_pergunta`) REFERENCES `cadastro_pergunta` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relacao_pergunta_checklist`
--

LOCK TABLES `relacao_pergunta_checklist` WRITE;
/*!40000 ALTER TABLE `relacao_pergunta_checklist` DISABLE KEYS */;
INSERT INTO `relacao_pergunta_checklist` VALUES (4,2,5),(5,2,4),(6,2,1),(7,2,8),(8,2,6),(9,2,2);
/*!40000 ALTER TABLE `relacao_pergunta_checklist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `responder_check`
--

DROP TABLE IF EXISTS `responder_check`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `responder_check` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_usuario` int NOT NULL,
  `id_sala` int NOT NULL,
  `data_abertura` timestamp NULL DEFAULT (now()),
  `data_fechamento` timestamp NULL DEFAULT NULL,
  `conf_logis` enum('s','n') DEFAULT 'n',
  `id_checklist` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_realiza_check_perfil_funcionarios1_idx` (`id_usuario`),
  KEY `fk_realiza_check_salas1_idx` (`id_sala`),
  CONSTRAINT `fk_realiza_check_perfil_funcionarios1` FOREIGN KEY (`id_usuario`) REFERENCES `cadastro_usuario` (`id`),
  CONSTRAINT `fk_realiza_check_salas1` FOREIGN KEY (`id_sala`) REFERENCES `cadastro_sala` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responder_check`
--

LOCK TABLES `responder_check` WRITE;
/*!40000 ALTER TABLE `responder_check` DISABLE KEYS */;
INSERT INTO `responder_check` VALUES (1,1,4,'2024-01-29 20:38:09','2024-01-30 00:38:16','n',2),(2,1,5,'2024-01-29 20:41:43','2024-01-30 00:41:50','n',2),(3,1,6,'2024-01-29 20:42:50','2024-01-30 00:43:06','n',2),(4,1,6,'2024-01-29 21:11:31','2024-01-30 01:11:41','n',2),(5,1,5,'2024-01-29 21:11:48','2024-01-30 01:24:38','n',2),(6,1,3,'2024-01-29 21:12:08','2024-01-30 01:24:51','n',2),(7,1,5,'2024-01-29 21:25:18','2024-01-30 01:25:26','n',2),(8,1,4,'2024-01-29 21:34:13','2024-01-30 01:34:21','n',2),(9,1,15,'2024-01-30 17:56:38',NULL,'n',2),(10,1,13,'2024-01-30 18:22:17',NULL,'n',2),(11,1,1,'2024-01-30 20:49:57',NULL,'n',2),(12,1,1,'2024-01-30 20:54:21',NULL,'n',2),(13,1,1,'2024-01-30 20:57:11','2024-01-30 19:57:38','n',2),(14,1,2,'2024-01-30 21:16:31','2024-01-31 00:16:41','n',NULL);
/*!40000 ALTER TABLE `responder_check` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`fabrica`@`%`*/ /*!50003 TRIGGER `reg_check_AFTER_INSERT` AFTER INSERT ON `responder_check` FOR EACH ROW BEGIN
	insert into check_aberta values(default,new.id);
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`fabrica`@`%`*/ /*!50003 TRIGGER `reg_check_AFTER_UPDATE` AFTER UPDATE ON `responder_check` FOR EACH ROW BEGIN
	if old.data_fechamento <> new.data_fechamento then 
		delete from reg_check_aberto where reg_check_aberto.id_reg = new.id;
    end if;
END */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `check_concluidas`
--

/*!50001 DROP VIEW IF EXISTS `check_concluidas`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`fabrica`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `check_concluidas` AS select `responder_check`.`id` AS `id_responder`,`responder_check`.`data_abertura` AS `data_abertura`,`responder_check`.`data_fechamento` AS `data_fechamento`,`responder_check`.`conf_logis` AS `conf_logis`,`cadastro_sala`.`nome` AS `nome_sala`,`cadastro_sala`.`img_sala` AS `img_sala` from (`responder_check` join `cadastro_sala` on((`responder_check`.`id_sala` = `cadastro_sala`.`id`))) where (`responder_check`.`data_fechamento` is not null) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `perfil_do_user`
--

/*!50001 DROP VIEW IF EXISTS `perfil_do_user`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`fabrica`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `perfil_do_user` AS select `cadastro_usuario`.`id` AS `id_user`,`cadastro_perfil`.`gerenciar_usuarios` AS `gerenciar_usuarios`,`cadastro_perfil`.`realizar_acao_corretiva` AS `realizar_acao_corretiva`,`cadastro_perfil`.`realizar_checklist` AS `realizar_checklist`,`cadastro_perfil`.`gerenciar_salas` AS `gerenciar_salas`,`cadastro_perfil`.`gerenciar_checklist` AS `gerenciar_checklist`,`cadastro_perfil`.`gerenciar_recados` AS `gerenciar_recados`,`cadastro_perfil`.`gerenciar_notificacoes` AS `gerenciar_notificacoes`,`cadastro_perfil`.`gerenciar_perfis` AS `gerenciar_perfis`,`cadastro_perfil`.`gerenciar_perguntas` AS `gerenciar_perguntas` from (`cadastro_usuario` join `cadastro_perfil` on((`cadastro_perfil`.`id` = `cadastro_usuario`.`id_perfil`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `perguntas_da_sala`
--

/*!50001 DROP VIEW IF EXISTS `perguntas_da_sala`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`fabrica`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `perguntas_da_sala` AS select `cadastro_sala`.`id` AS `id_sala`,`cadastro_pergunta`.`id` AS `id_pergunta`,`cadastro_pergunta`.`descricao` AS `pergunta`,`cadastro_pergunta`.`tipo` AS `tipo`,`cadastro_checklist`.`nome` AS `nome_check`,`cadastro_sala`.`nome` AS `nome_sala` from (((`cadastro_pergunta` join `relacao_pergunta_checklist` on((`cadastro_pergunta`.`id` = `relacao_pergunta_checklist`.`id_pergunta`))) join `cadastro_checklist` on((`relacao_pergunta_checklist`.`id_check` = `cadastro_checklist`.`id`))) join `cadastro_sala` on((`cadastro_checklist`.`id` = `cadastro_sala`.`id_check`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-02 16:41:10
