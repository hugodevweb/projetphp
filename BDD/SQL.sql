-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           8.0.30 - MySQL Community Server - GPL
-- SE du serveur:                Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour diggit.me
CREATE DATABASE IF NOT EXISTS `diggit.me` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `diggit.me`;

-- Listage de la structure de table diggit.me. alim
CREATE TABLE IF NOT EXISTS `alim` (
  `id_alim` int NOT NULL,
  `wattage` int NOT NULL,
  `modulable` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_alim`),
  CONSTRAINT `alim_ibfk_1` FOREIGN KEY (`id_alim`) REFERENCES `composants` (`id_comp`),
  CONSTRAINT `alim_chk_1` CHECK ((`modulable` between 0 and 2))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.alim : ~0 rows (environ)

-- Listage de la structure de table diggit.me. board
CREATE TABLE IF NOT EXISTS `board` (
  `id_board` int NOT NULL,
  `typesocket` varchar(255) NOT NULL,
  `nbram` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_board`),
  CONSTRAINT `board_ibfk_1` FOREIGN KEY (`id_board`) REFERENCES `composants` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.board : ~0 rows (environ)

-- Listage de la structure de table diggit.me. boiter
CREATE TABLE IF NOT EXISTS `boiter` (
  `id_case` int NOT NULL,
  `type_case` varchar(105) NOT NULL,
  PRIMARY KEY (`id_case`),
  CONSTRAINT `boitier_ibfk_1` FOREIGN KEY (`id_case`) REFERENCES `composants` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.boiter : ~0 rows (environ)

-- Listage de la structure de table diggit.me. client
CREATE TABLE IF NOT EXISTS `client` (
  `id_client` int NOT NULL AUTO_INCREMENT,
  `mail` varchar(70) NOT NULL,
  `pseudo` varchar(50) NOT NULL,
  `statut` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_client`),
  KEY `FK_client_statut` (`statut`),
  CONSTRAINT `FK_client_statut` FOREIGN KEY (`statut`) REFERENCES `statut` (`statut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.client : ~0 rows (environ)

-- Listage de la structure de table diggit.me. composants
CREATE TABLE IF NOT EXISTS `composants` (
  `id_comp` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `is_available` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`id_comp`),
  CONSTRAINT `composants_chk_1` CHECK ((`rating` between 1 and 5))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.composants : ~0 rows (environ)

-- Listage de la structure de table diggit.me. configurations
CREATE TABLE IF NOT EXISTS `configurations` (
  `id_config` int NOT NULL AUTO_INCREMENT,
  `idclient` int NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_config`),
  KEY `client_config` (`idclient`),
  CONSTRAINT `client_config` FOREIGN KEY (`idclient`) REFERENCES `client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.configurations : ~0 rows (environ)

-- Listage de la structure de table diggit.me. configurations_prebuild
CREATE TABLE IF NOT EXISTS `configurations_prebuild` (
  `id_config_prebuild` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_config_prebuild`),
  CONSTRAINT `prebuild_ibfk_1` FOREIGN KEY (`id_config_prebuild`) REFERENCES `configurations` (`id_config`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.configurations_prebuild : ~0 rows (environ)

-- Listage de la structure de table diggit.me. cooler
CREATE TABLE IF NOT EXISTS `cooler` (
  `id_cooler` int NOT NULL,
  `sondb` decimal(10,2) NOT NULL,
  `rpm` decimal(10,2) NOT NULL,
  `largeur` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_cooler`),
  CONSTRAINT `cooler_ibfk_1` FOREIGN KEY (`id_cooler`) REFERENCES `composants` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.cooler : ~0 rows (environ)

-- Listage de la structure de table diggit.me. cpu
CREATE TABLE IF NOT EXISTS `cpu` (
  `id_cpu` int NOT NULL,
  `puissance` decimal(10,2) NOT NULL,
  `nbrcore` decimal(2,0) NOT NULL,
  `conso` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id_cpu`),
  CONSTRAINT `proc_ibfk_1` FOREIGN KEY (`id_cpu`) REFERENCES `composants` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.cpu : ~0 rows (environ)

-- Listage de la structure de table diggit.me. gpu
CREATE TABLE IF NOT EXISTS `gpu` (
  `id_gpu` int NOT NULL,
  `puissance` decimal(10,2) NOT NULL,
  `ram` int NOT NULL,
  PRIMARY KEY (`id_gpu`),
  CONSTRAINT `gpu_ibfk_1` FOREIGN KEY (`id_gpu`) REFERENCES `composants` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.gpu : ~0 rows (environ)

-- Listage de la structure de table diggit.me. hdd
CREATE TABLE IF NOT EXISTS `hdd` (
  `id_hdd` int NOT NULL,
  PRIMARY KEY (`id_hdd`),
  CONSTRAINT `hdd_ibfk_1` FOREIGN KEY (`id_hdd`) REFERENCES `stockage` (`id_stockage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.hdd : ~0 rows (environ)

-- Listage de la structure de table diggit.me. ssd
CREATE TABLE IF NOT EXISTS `ssd` (
  `id_ssd` int NOT NULL,
  PRIMARY KEY (`id_ssd`),
  CONSTRAINT `sdd_ibfk_1` FOREIGN KEY (`id_ssd`) REFERENCES `stockage` (`id_stockage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.ssd : ~0 rows (environ)

-- Listage de la structure de table diggit.me. statut
CREATE TABLE IF NOT EXISTS `statut` (
  `statutchar` varchar(50) NOT NULL,
  `statut` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`statutchar`),
  KEY `statut` (`statut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.statut : ~0 rows (environ)

-- Listage de la structure de table diggit.me. stockage
CREATE TABLE IF NOT EXISTS `stockage` (
  `id_stockage` int NOT NULL,
  `taille` int NOT NULL,
  `vitesse` int DEFAULT NULL,
  PRIMARY KEY (`id_stockage`),
  CONSTRAINT `stockage_ibfk_1` FOREIGN KEY (`id_stockage`) REFERENCES `composants` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.stockage : ~0 rows (environ)

-- Listage de la structure de table diggit.me. tj_config_compo
CREATE TABLE IF NOT EXISTS `tj_config_compo` (
  `id_jt` int NOT NULL,
  `id_config` int DEFAULT NULL,
  `id_compo` int DEFAULT NULL,
  PRIMARY KEY (`id_jt`),
  KEY `FK__configurations` (`id_config`),
  KEY `FK__composants` (`id_compo`),
  CONSTRAINT `FK__composants` FOREIGN KEY (`id_compo`) REFERENCES `composants` (`id_comp`),
  CONSTRAINT `FK__configurations` FOREIGN KEY (`id_config`) REFERENCES `configurations` (`id_config`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.tj_config_compo : ~0 rows (environ)

-- Listage de la structure de table diggit.me. vent
CREATE TABLE IF NOT EXISTS `vent` (
  `id_vent` int NOT NULL,
  PRIMARY KEY (`id_vent`),
  CONSTRAINT `vent_ibfk_1` FOREIGN KEY (`id_vent`) REFERENCES `cooler` (`id_cooler`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.vent : ~0 rows (environ)

-- Listage de la structure de table diggit.me. waterc
CREATE TABLE IF NOT EXISTS `waterc` (
  `id_waterC` int NOT NULL,
  PRIMARY KEY (`id_waterC`),
  CONSTRAINT `waterC_ibfk_1` FOREIGN KEY (`id_waterC`) REFERENCES `cooler` (`id_cooler`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.waterc : ~0 rows (environ)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
