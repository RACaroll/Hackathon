-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: gestor
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `cadastroaluno`
--

DROP TABLE IF EXISTS `cadastroaluno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cadastroaluno` (
  `idAluno` int NOT NULL AUTO_INCREMENT,
  `nomeAluno` varchar(150) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `dtNasc` date NOT NULL,
  PRIMARY KEY (`idAluno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cadastroaluno`
--

LOCK TABLES `cadastroaluno` WRITE;
/*!40000 ALTER TABLE `cadastroaluno` DISABLE KEYS */;
INSERT INTO `cadastroaluno` VALUES (1,'jhonatan','11111111111','jhonatan.m.barros@gmail.com','2024-06-24'),(2,'eduarda','22222222222','maria@gmail.com','2024-06-18'),(3,'carol','22222222222','carol@gmail.com','2024-06-25');
/*!40000 ALTER TABLE `cadastroaluno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curriculo`
--

DROP TABLE IF EXISTS `curriculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `curriculo` (
  `idcurriculo` int NOT NULL,
  `aluno` int NOT NULL,
  `curso` int NOT NULL,
  `nomeArquivo` varchar(150) NOT NULL,
  `dataEnvio` date NOT NULL,
  `caminho` varchar(255) NOT NULL,
  PRIMARY KEY (`idcurriculo`),
  KEY `fk_aluno_idx` (`aluno`),
  KEY `fk_cursos_idx` (`curso`),
  CONSTRAINT `fk_aluno` FOREIGN KEY (`aluno`) REFERENCES `cadastroaluno` (`idAluno`),
  CONSTRAINT `fk_cursos` FOREIGN KEY (`curso`) REFERENCES `cursos` (`idCursos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curriculo`
--

LOCK TABLES `curriculo` WRITE;
/*!40000 ALTER TABLE `curriculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `curriculo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cursos`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cursos` (
  `idCursos` int NOT NULL,
  `nomeCursos` varchar(150) NOT NULL,
  PRIMARY KEY (`idCursos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cursos`
--

LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
INSERT INTO `cursos` VALUES (1,'Administração'),(2,'Contabilidade'),(3,'Desenvolvimento de Sistemas'),(4,'Design Gráfico'),(5,'Enfermagem'),(6,'Marketing'),(7,'Novotec Administração'),(8,'Novotec Contabilidade'),(9,'Novotec Desenvolvimento de Sistemas'),(10,'Novotec Marketing'),(11,'Novotec Meio Ambiente'),(12,'Recursos Humanos');
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-25 19:55:57
