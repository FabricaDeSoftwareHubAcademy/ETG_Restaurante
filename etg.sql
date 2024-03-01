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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_checklist`
--

LOCK TABLES `cadastro_checklist` WRITE;
/*!40000 ALTER TABLE `cadastro_checklist` DISABLE KEYS */;
INSERT INTO `cadastro_checklist` VALUES (1,'Lucas'),(9,'Leadnri'),(11,'Pre Pos'),(22,'MEU CHECK'),(23,'teste'),(24,'Laboratórios');
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
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_perfil`
--

LOCK TABLES `cadastro_perfil` WRITE;
/*!40000 ALTER TABLE `cadastro_perfil` DISABLE KEYS */;
INSERT INTO `cadastro_perfil` VALUES (1,'Administrador','1','1','1','1','1','1','1','1','1'),(6,'High power','1','1','1','1','1','1','1','1','1'),(32,'Estagiário do Crime','1','1','1','1','1','1','1','0','1'),(34,'estagiaria Antiga','1','1','1','1','1','1','1','1','1'),(36,'teste ','0','0','0','0','0','0','0','0','0'),(40,'Estagiário Logística','0','0','0','0','1','1','1','1','0'),(42,'Docente','0','0','0','0','0','0','0','1','0');
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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_pergunta`
--

LOCK TABLES `cadastro_pergunta` WRITE;
/*!40000 ALTER TABLE `cadastro_pergunta` DISABLE KEYS */;
INSERT INTO `cadastro_pergunta` VALUES (1,'\nOs equipamentos e /ou utensílios estão lim1, organizados e em\ncondições de uso?\n','0'),(3,'\nOs equipamentos e /ou utensílios estão lim1, organizados e em\ncondições de uso?\n','0'),(4,'\nAs bancadas estão limpas e organizadas?\n','0'),(5,'\nOs refrigeradores estão em bom estado de conservação,\nfuncionamento, lim1 e organizados?\n','0'),(6,'\nTodos os equipamentos estão sendo recebidos deligados?\n','0'),(7,'\nOs alimentos entregues pela logística estão conformes,\netiquetados e no prazo de validade?\n','0'),(8,'\nAs lixeiras estão limpas e com presença de sacos\ndiferenciados para descarte de resíduos orgânicos e\nreciclados?\n','0'),(9,'\nAs placas de corte estão armazenadas no suporte?\n','0'),(10,'\nPresença de produtos para limpeza como: detergente, esponjas e\nborrifador de álcool 70°?\n','0'),(11,'\nPresença de sanitizante para desinfecção de hortifrutis?\n','0'),(12,'&#13;&#10;Os descartáveis foram entregues: luvas, máscara,&#13;&#10;acendedor fogão, papel filme PVC, papel alumínio e papel&#13;&#10;manteiga, etiquetas, wapper ?&#13;&#10;','2'),(13,'&#13;&#10;Presença de Equipamentos e /ou utensílios e bancadas foram deixados lim1&#13;&#10;sem presença de resíduos e organizados nos seus devidos&#13;&#10;locais? para desinfecção de hortifrutis? Bom dia serviços didáticos do Senac hu&#13;&#10;','1'),(14,'\nPia e fogão estão sendo entregues lim1?\n','1'),(15,'\nOs refrigeradores estão lim1 e organizados. Sem\npresença de insumos?\n','1'),(16,'\nTodos os insumos não utilizados estão retornando para logística\ndevidamente etiquetados?\n','1'),(17,'\nSobras de alimentos que foram produzidos na aula e não\nconsumidos foram descartados corretamente?\n','1'),(18,'\nAs placas de corte estão armazenadas no suporte?\n','1'),(19,'\nOs resíduos orgânicos e reciclados foram descartados\ncorretamente?\n','1'),(20,'\nUtensílios e/ou equipamentos estão em perfeitas condições de\nuso?\n','1'),(21,'\nUtensílios e/ou equipamentos emprestados de outros\nambientes foram devolvidos?\n','1'),(22,'Escrevendo a pergunta','1'),(23,'Limpou todos os objetos da sala?','1'),(38,'Presença de Equipamentos e /ou utensílios e bancadas foram deixados lim1 wWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWWsem presença de resíduos e organizados nos seus devidos locais? para desinfecção de hortifrutis?','0');
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
  `status` enum('A','L','B','D') DEFAULT 'L',
  `horarios` json DEFAULT NULL,
  `id_check` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_salas_checklist1_idx` (`id_check`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_sala`
--

LOCK TABLES `cadastro_sala` WRITE;
/*!40000 ALTER TABLE `cadastro_sala` DISABLE KEYS */;
INSERT INTO `cadastro_sala` VALUES (1,'Sala lucas','123','#00ff91','testandosefoi.65de27e82f2ad.jpg','Dsadsad','B','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"nao\", \"quinta\": \"nao\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"nao\"}',1),(2,'TIO-REX','1245','#256393','jo.65df98e3b8f4e.png','localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"sim\", \"matutino\": \"sim\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',9),(3,'Dwadwa','12321','#000000','gato_brothers.65de2df8962df.jpg','Awdwad','L','{\"sexta\": \"nao\", \"terca\": \"nao\", \"quarta\": \"nao\", \"quinta\": \"nao\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',1),(4,'Pre pos 123','123','#ff0000','06f21a161921919.63cd7887d0a70.65de44ba17cb3.gif','Decriçãooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo','B','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"sim\", \"turnos\": {\"noturno\": \"sim\", \"matutino\": \"sim\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',11),(5,'Em uso','123','#00ff2a','06f21a161921919.63cd7887d0a70.65de4583cd1ee.gif','123','B','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"sim\", \"turnos\": {\"noturno\": \"sim\", \"matutino\": \"sim\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',1),(6,'Pre pos 3','3212','#ff1f1f','imagempadrao.jpg','31123','B','{\"sexta\": \"nao\", \"terca\": \"nao\", \"quarta\": \"nao\", \"quinta\": \"nao\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"sim\", \"vespertino\": \"nao\"}, \"segunda\": \"sim\"}',1),(7,'Sala para teste','321','#ce0909','OG-1200x800-jpeg.65de517153c26.jpg','Dasdsadsadsadsadsadsasdldnsajkfndsjkabfsabjhfsbajkdbsjkabfsabfjksdabfjkdsbjkdsankfbjkdabsdsjkafjsabfjksabfjksabfgjkdbajkfsbdkjsfbjkdvfbsdjk','B','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"nao\", \"quinta\": \"nao\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"nao\"}',1),(8,'Starwars','9090','#000000','imagempadrao.jpg','Nenhum','L','{\"sexta\": \"nao\", \"terca\": \"nao\", \"quarta\": \"sim\", \"quinta\": \"nao\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"nao\"}',22),(9,'Start','909','#000000','imagempadrao.jpg','','B','{\"sexta\": \"nao\", \"terca\": \"nao\", \"quarta\": \"sim\", \"quinta\": \"nao\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"nao\"}, \"segunda\": \"nao\"}',22),(10,'Redes de computadores','307','#d017de','fyekgbPyN5.65df99dd7e882.gif','Laboratório com equipamentos cisco para as aulas de redes de computadores.','B','{\"sexta\": \"sim\", \"terca\": \"nao\", \"quarta\": \"sim\", \"quinta\": \"nao\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"sim\", \"matutino\": \"sim\", \"vespertino\": \"nao\"}, \"segunda\": \"sim\"}',24),(11,'Sala testando1243242','4634','#000000','imagempadrao.jpg','Hgfhxhdghxgf','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"sim\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',1),(12,'Joceyrteste','1','#000000','soba.65e21e322ea31.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(13,'Joceyrteste','1','#000000','soba.65e21e379c1f0.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(14,'Joceyrteste','1','#000000','soba.65e21f61a6fc4.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(15,'Joceyrteste','1','#000000','soba.65e21f63cf835.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(16,'Joceyrteste','1','#000000','soba.65e21f68c7797.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(17,'Joceyrteste','1','#000000','soba.65e21f694925d.jpg','Sala de sobá','B','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(18,'Joceyrteste','1','#000000','soba.65e21f699656c.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(19,'Joceyrteste','1','#000000','soba.65e21f69d3c9c.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(20,'Joceyrteste','1','#000000','soba.65e21f6a186f5.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(21,'Joceyrteste','1','#000000','soba.65e21f6a49143.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(22,'Joceyrteste','1','#000000','soba.65e21f6a7de8e.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(23,'Joceyrteste','1','#000000','soba.65e21f6aa6dde.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(24,'Joceyrteste','1','#000000','soba.65e21f6adfa72.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(25,'Joceyrteste','1','#000000','soba.65e21f6b20660.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(26,'Joceyrteste','1','#000000','soba.65e21f6b5967c.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(27,'Joceyrteste','1','#000000','soba.65e21f7354e2a.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(28,'Joceyrteste','1','#000000','soba.65e21f73bec13.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(29,'Joceyrteste','1','#000000','soba.65e21f743c9ba.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(30,'Joceyrteste','1','#000000','soba.65e21f749a0f9.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(31,'Joceyrteste','1','#000000','soba.65e21f74e7aec.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(32,'Joceyrteste','1','#000000','soba.65e21f7544d31.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(33,'Joceyrteste','1','#000000','soba.65e21f7591f92.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(34,'Joceyrteste','1','#000000','soba.65e21f75df2f9.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(35,'Joceyrteste','1','#000000','soba.65e21f77698d7.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(36,'Joceyrteste','1','#000000','soba.65e21f779a17b.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(37,'Joceyrteste','1','#000000','soba.65e21f77d3388.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(38,'Joceyrteste','1','#000000','soba.65e21f78182b7.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(39,'Joceyrteste','1','#000000','soba.65e21f7848b08.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(40,'Joceyrteste','1','#000000','soba.65e21f7875a48.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(41,'Joceyrteste','1','#000000','soba.65e21f78a6a50.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(42,'Joceyrteste','1','#000000','soba.65e21f78ceeb1.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(43,'Joceyrteste','1','#000000','soba.65e21f7a302c1.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(44,'Joceyrteste','1','#000000','soba.65e21f7a5d1b8.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(45,'Joceyrteste','1','#000000','soba.65e21f7a91dac.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(46,'Joceyrteste','1','#000000','soba.65e21f7ac2a9e.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(47,'Joceyrteste','1','#000000','soba.65e21f7b03638.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(48,'Joceyrteste','1','#000000','soba.65e21f7b3010c.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(49,'Joceyrteste','1','#000000','soba.65e21f7b650d0.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(50,'Joceyrteste','1','#000000','soba.65e21f7b89ddc.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(51,'Joceyrteste','1','#000000','soba.65e21f7bb26c9.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(52,'Joceyrteste','1','#000000','soba.65e21f7c48ce0.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(53,'Joceyrteste','1','#000000','soba.65e21f7c6d2e5.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(54,'Joceyrteste','1','#000000','soba.65e21f7c9de35.jpg','Sala de sobá','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(55,'Joceyrteste','1','#000000','soba.65e21f92b1a37.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(56,'Joceyrteste','1','#000000','soba.65e21f93400b7.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(57,'Joceyrteste','1','#000000','soba.65e21f9380c73.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(58,'Joceyrteste','1','#000000','soba.65e21f93b9cf8.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(59,'Joceyrteste','1','#000000','soba.65e21f93f2b6f.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(60,'Joceyrteste','1','#000000','soba.65e21f9437a30.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(61,'Joceyrteste','1','#09daf6','soba.65e21f99e6691.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(62,'Joceyrteste','1','#09daf6','soba.65e21fb62eed8.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','B','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(63,'Joceyrteste','1','#09daf6','soba.65e21fb6802be.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(64,'Joceyrteste','1','#09daf6','soba.65e21fb6c94f1.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(65,'Joceyrteste','1','#09daf6','soba.65e21fb71e9dd.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(66,'Joceyrteste','1','#09daf6','soba.65e21fb767a93.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(67,'Joceyrteste','1','#09daf6','soba.65e21fb7acd82.jpg','Localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/19','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"nao\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23),(68,'Sala de sobá','1','#37d4fb','soba.65e22038393d7.jpg','Slalocalhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost/192.168.22.9localhost','L','{\"sexta\": \"sim\", \"terca\": \"sim\", \"quarta\": \"sim\", \"quinta\": \"sim\", \"sabado\": \"sim\", \"turnos\": {\"noturno\": \"nao\", \"matutino\": \"nao\", \"vespertino\": \"sim\"}, \"segunda\": \"sim\"}',23);
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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastro_usuario`
--

LOCK TABLES `cadastro_usuario` WRITE;
/*!40000 ALTER TABLE `cadastro_usuario` DISABLE KEYS */;
INSERT INTO `cadastro_usuario` VALUES (1,'Kingnaldo','adm@gmail.com','1','123',1,'65e247dd1c8c0-testandosefoi.jpg'),(5,'Enilda','teste1@gmail.comm','6','123',1,'profile.png'),(9,'Professor','Professor@gmail.com','12','123',32,'65de54a315274-jose.png'),(11,'lucasssssss','lucas@gmail.com','321','123',36,'profile.png'),(14,'Frantz','frantz@gmail.com','5','123',1,'profile.png'),(15,'Arthur Frantz','coelhojogos@hotmail.com','9','123',1,'65e2267a9292b-testandosefoi.jpg'),(16,'JOAO','joaozinho@joao.com','987','123',1,'profile.png'),(17,'arthur simoes da silva','adm2000@gmail.com','999','999',1,'profile.png'),(20,'fdhfdhd','testeuihgdfgyfhdzgjknvbhd@gmail','457453','123',1,'profile.png'),(21,'igor teste','igor@gmail.com','123123','123',6,'profile.png'),(22,'dasdsa','dadssa@gadsa.com','231','123',6,'profile.png'),(23,'Enilda','professora.enilda@gmail.com','1886','123',1,'65df98a7240b9-20180111_131151.jpg'),(24,'jyhjdyjgd','jdgjgjdgjd@gmail.com','46544','123',1,'profile.png'),(25,'wd40','w@gamil.com','1233333','123',34,'profile.png'),(26,'testando se esta cadastrando usuario','testando@gmail.com','123213','123',1,'profile.png'),(27,'THIAGO','thiagoalmeida@live.com','98','989898',40,'profile.png'),(28,'Didjdjjdjd','arrozcomfeijao@gmal','9493','123',1,'profile.png'),(29,'vbvcn','adm234634@gmail.com','14363','123',1,'65df97e1875f8-fotoperfil.webp'),(30,'Gabriela da Rosa Cáceres','gabi@gmail.com','55','123',6,'profile.png'),(31,'Karol','karol@gmail.com','309','123',42,'profile.png'),(32,'zoro','zorosola@gmail.com','2','123',6,'65e0f43d077d2-zoro.png'),(33,'Igor','igor666@gmail.com','123','123',42,'profile.png'),(34,'hdfhf','ifhgfdgfdgsdg@gmail.com','75633','123',6,'profile.png'),(35,'ghfghfghg','igor66@gmail.com','463546','123',1,'profile.png'),(36,'hfghfgh','igor6@gmail.com','124154','123',1,'profile.png'),(37,'hjghjfg','ythfhdfhhgdf@gmail.com','53363','123',1,'profile.png');
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `check_aberta`
--

LOCK TABLES `check_aberta` WRITE;
/*!40000 ALTER TABLE `check_aberta` DISABLE KEYS */;
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
 1 AS `nome`,
 1 AS `nome_sala`,
 1 AS `img_sala`,
 1 AS `cor`,
 1 AS `codigo`*/;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notificacao`
--

LOCK TABLES `notificacao` WRITE;
/*!40000 ALTER TABLE `notificacao` DISABLE KEYS */;
INSERT INTO `notificacao` VALUES (1,1,14,'50tao?\r\n','2024-02-27 18:45:52',NULL,'0'),(2,1,14,'teste luiz','2024-02-27 18:52:52',NULL,'0'),(3,1,15,'teste luiz','2024-02-27 18:53:00','1','0'),(4,1,33,'Não foi sua mensagem','2024-03-01 21:12:49',NULL,'0');
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
-- Temporary view structure for view `quem_abriu`
--

DROP TABLE IF EXISTS `quem_abriu`;
/*!50001 DROP VIEW IF EXISTS `quem_abriu`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `quem_abriu` AS SELECT 
 1 AS `id`,
 1 AS `nome`,
 1 AS `codigo`,
 1 AS `cor_itens`,
 1 AS `img_sala`,
 1 AS `descricao`,
 1 AS `status`,
 1 AS `horarios`,
 1 AS `id_check`,
 1 AS `responsavel`*/;
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
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recados`
--

LOCK TABLES `recados` WRITE;
/*!40000 ALTER TABLE `recados` DISABLE KEYS */;
INSERT INTO `recados` VALUES (11,23,'A responsividade do menu não está funcionando.\nNo menu apena os ícones são clicáveis,','2024-02-28 20:04:52'),(12,23,'colocar a descrição do icone do menu também clicável.','2024-02-28 20:06:20'),(13,1,'tela de cadastro, quando finalizar o cadastro e clicar no botão OK do modal, ir para a lista.','2024-02-28 20:09:57'),(15,23,'Colocar a validação do checklist caso esteja sendo usando em um ambiente.','2024-02-28 20:36:57'),(16,15,'Limitar as perguntas até no maximo 5 linhas e diminuir a area de escrita do pop-up cadastro de perg.','2024-02-28 20:47:48'),(17,15,'enviar notificação não esta puxando os usuario do banco, ta faltando popup de error email nao existe','2024-02-28 20:52:41'),(18,1,'faltando popup de notificação enviada para o usuario \"jão\", para o usuario saber pra quem foi .','2024-02-28 20:53:45'),(23,23,'Entrega para teste:\nDia 06/03/2024 às 13:20, no ETG Escola, todos deverão chegar até as 13:20. Conto','2024-03-01 21:02:17');
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_nc`
--

LOCK TABLES `reg_nc` WRITE;
/*!40000 ALTER TABLE `reg_nc` DISABLE KEYS */;
INSERT INTO `reg_nc` VALUES (1,1,1,7,'dsadsadsadsadasdas','65de51fd2dcdf_nc.png','65de51fd2e9bd_nc.png','65de51fd2f250_nc.png'),(2,1,11,21,'ddddddd','65de521353526_nc.png','',''),(3,2,27,14,'caiu no chao e quebrou','65de55ae43d52_nc.png','',''),(4,5,1,10,'fdgfgdfgf','65e22cb35efd6_nc.png','','');
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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `relacao_pergunta_checklist`
--

LOCK TABLES `relacao_pergunta_checklist` WRITE;
/*!40000 ALTER TABLE `relacao_pergunta_checklist` DISABLE KEYS */;
INSERT INTO `relacao_pergunta_checklist` VALUES (1,1,12),(2,1,11),(3,1,10),(4,1,9),(5,1,8),(6,1,7),(7,1,6),(8,1,5),(9,1,21),(10,1,20),(11,1,18),(12,1,17),(13,1,16),(14,1,14),(15,9,12),(16,9,11),(17,9,21),(18,9,20),(23,11,12),(24,11,11),(25,11,10),(26,11,21),(27,11,20),(28,11,19),(39,22,12),(40,22,11),(41,22,10),(42,22,9),(43,22,22),(44,22,21),(45,22,20),(46,23,12),(47,23,22),(48,24,6),(49,24,23),(50,24,21),(51,24,20);
/*!40000 ALTER TABLE `relacao_pergunta_checklist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `relatorio`
--

DROP TABLE IF EXISTS `relatorio`;
/*!50001 DROP VIEW IF EXISTS `relatorio`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `relatorio` AS SELECT 
 1 AS `id_nc`,
 1 AS `nome_reg_nc`,
 1 AS `id_pergunta`,
 1 AS `id_aula`,
 1 AS `data_abertura`,
 1 AS `data_fechamento`,
 1 AS `nome_responsavel`,
 1 AS `nome_sala`*/;
SET character_set_client = @saved_cs_client;

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `responder_check`
--

LOCK TABLES `responder_check` WRITE;
/*!40000 ALTER TABLE `responder_check` DISABLE KEYS */;
INSERT INTO `responder_check` VALUES (1,1,7,'2024-02-27 21:19:57','2024-02-28 01:20:19','n',1),(2,27,1,'2024-02-27 21:35:05','2024-02-28 01:35:42','n',1),(3,1,2,'2024-02-28 20:36:38','2024-02-29 00:36:48','n',9),(4,23,10,'2024-02-28 20:39:27','2024-02-29 22:24:36','n',24),(5,1,9,'2024-03-01 19:29:55','2024-03-01 22:30:03','n',22),(6,15,17,'2024-03-01 21:09:18','2024-03-02 01:09:23','n',23),(7,15,62,'2024-03-01 21:24:40','2024-03-02 01:24:46','n',23);
/*!40000 ALTER TABLE `responder_check` ENABLE KEYS */;
UNLOCK TABLES;

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
/*!50001 VIEW `check_concluidas` AS select `responder_check`.`id` AS `id_responder`,`responder_check`.`data_abertura` AS `data_abertura`,`responder_check`.`data_fechamento` AS `data_fechamento`,`responder_check`.`conf_logis` AS `conf_logis`,`cadastro_usuario`.`nome` AS `nome`,`cadastro_sala`.`nome` AS `nome_sala`,`cadastro_sala`.`img_sala` AS `img_sala`,`cadastro_sala`.`cor_itens` AS `cor`,`cadastro_sala`.`codigo` AS `codigo` from ((`responder_check` join `cadastro_sala` on((`responder_check`.`id_sala` = `cadastro_sala`.`id`))) join `cadastro_usuario` on((`responder_check`.`id_usuario` = `cadastro_usuario`.`id`))) where (`responder_check`.`data_fechamento` is not null) */;
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

--
-- Final view structure for view `quem_abriu`
--

/*!50001 DROP VIEW IF EXISTS `quem_abriu`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`fabrica`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `quem_abriu` AS select `cadastro_sala`.`id` AS `id`,`cadastro_sala`.`nome` AS `nome`,`cadastro_sala`.`codigo` AS `codigo`,`cadastro_sala`.`cor_itens` AS `cor_itens`,`cadastro_sala`.`img_sala` AS `img_sala`,`cadastro_sala`.`descricao` AS `descricao`,`cadastro_sala`.`status` AS `status`,`cadastro_sala`.`horarios` AS `horarios`,`cadastro_sala`.`id_check` AS `id_check`,`responder_check`.`id_usuario` AS `responsavel` from (`cadastro_sala` left join `responder_check` on((`cadastro_sala`.`id` = `responder_check`.`id_sala`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `relatorio`
--

/*!50001 DROP VIEW IF EXISTS `relatorio`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`fabrica`@`%` SQL SECURITY DEFINER */
/*!50001 VIEW `relatorio` AS select `reg_nc`.`id` AS `id_nc`,`user_nc`.`nome` AS `nome_reg_nc`,`reg_nc`.`id_pergu` AS `id_pergunta`,`responder_check`.`id` AS `id_aula`,`responder_check`.`data_abertura` AS `data_abertura`,`responder_check`.`data_fechamento` AS `data_fechamento`,`cadastro_usuario`.`nome` AS `nome_responsavel`,`cadastro_sala`.`nome` AS `nome_sala` from (((`responder_check` left join (`reg_nc` join `cadastro_usuario` `user_nc` on((`reg_nc`.`id_prof` = `user_nc`.`id`))) on((`responder_check`.`id` = `reg_nc`.`id_realiza`))) join `cadastro_usuario` on((`responder_check`.`id_usuario` = `cadastro_usuario`.`id`))) join `cadastro_sala` on((`cadastro_sala`.`id` = `responder_check`.`id_sala`))) */;
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

-- Dump completed on 2024-03-01 17:40:38
