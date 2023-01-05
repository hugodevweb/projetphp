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

-- Listage de la structure de table diggit.me. composants_alim
CREATE TABLE IF NOT EXISTS `composants_alim` (
  `id_comp` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `is_available` tinyint(1) NOT NULL,
  `is_modulable` int DEFAULT NULL,
  `wattage` int DEFAULT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_alim : ~7 rows (environ)
INSERT INTO `composants_alim` (`id_comp`, `price`, `rating`, `brand`, `name`, `img`, `is_available`, `is_modulable`, `wattage`) VALUES
	(1, 150.00, 2, 'samsung', 'ssd', '../images/composants/board/1.png', 1, 2, 55),
	(2, 86.00, 3, 'VDIa', 'cartegrap', '../images/composants/alim/1.png', 1, 2, 76),
	(3, 86.00, 3, 'VDIa', 'cartegrap', '../images/composants/alim/1.png', 1, 2, 76),
	(4, 868.00, 4, 'nvidia', 'inserrelno', '../images/composants/alim/1.png', 1, 1, 56),
	(5, 868.00, 4, 'nvidia', 'inserrelno', '../images/composants/alim/1.png', 1, 1, 56),
	(6, 868.00, 4, 'nvidia', 'inserrelno', '../images/composants/alim/1.png', 1, 1, 56),
	(7, 86.00, 4, 'Nvidia', 'inserte', '../images/composants/alim/1.png', 1, 1, 56);

-- Listage de la structure de table diggit.me. composants_board
CREATE TABLE IF NOT EXISTS `composants_board` (
  `id_comp` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `is_available` tinyint(1) NOT NULL,
  `ram` int DEFAULT NULL,
  `socket` int DEFAULT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_board : ~2 rows (environ)
INSERT INTO `composants_board` (`id_comp`, `price`, `rating`, `brand`, `name`, `img`, `is_available`, `ram`, `socket`) VALUES
	(1, 150.00, 4, 'samsung', 'test1', '../images/composants/board/1.png', 1, 2, 4),
	(2, 150.00, 3, 'samsung', 'ssd', '../images/composants/board/1.png', 1, 2, 4);

-- Listage de la structure de table diggit.me. composants_boitier
CREATE TABLE IF NOT EXISTS `composants_boitier` (
  `id_comp` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `is_available` tinyint(1) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_boitier : ~21 rows (environ)
INSERT INTO `composants_boitier` (`id_comp`, `price`, `rating`, `brand`, `name`, `img`, `is_available`, `type`) VALUES
	(1, 150.00, 5, 'samsung', 'ssd', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(2, 150.00, 3, 'samsung', 'testajax1', '../images/composants/gpu/1.png', 0, 'btx 5825'),
	(3, 15.00, 4, 'test', 'testajax 2', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(4, 15.00, 5, 'nvidia', 'testnotif', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(5, 25.00, 5, 'niek', 'testannim', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(6, 4.00, 5, 'nike', 'testannim2', '../images/composants/gpu/1.png', 0, 'btx 5825'),
	(7, 150.00, 3, 'dsf', 'ssd', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(8, 150.00, 3, 'nvidia', 'ssd', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(9, 456.00, 2, 'nvidia', 'ssd', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(10, 54.00, 2, 'samsung', 'ssd', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(11, 45.00, 4, 'xcv', 'dsf', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(12, 150.00, 4, 'test', 'ssd', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(13, 150.00, 4, 'test', 'ssd', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(14, 45.00, 4, 'niek', 'test1', '../images/composants/gpu/1.png', 0, 'btx 5825'),
	(15, 52.00, 5, 'nike', 'test1', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(16, 52.00, 5, 'nike', 'test1', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(17, 546.00, 3, 'samsung', 'test1', '../images/composants/gpu/1.png', 1, 'btx 5825'),
	(18, 150.00, 5, 'dsf', 'ssd', '../images/composants/gpu/1.png', 0, 'btx 5825'),
	(19, 150.00, 5, 'dsf', 'ssd', '../images/composants/gpu/1.png', 0, 'btx 5825'),
	(20, 150.00, 5, 'dsf', 'ssd', '../images/composants/gpu/1.png', 0, 'btx 5825'),
	(21, 150.00, 5, 'dsf', 'ssd', '../images/composants/gpu/1.png', 0, 'btx 5825'),
	(22, 150.00, 3, 'samsung', 'ssd', 'https://drive.google.com/file/d/1ct1C3oRdzCox6tsVvWiCduxZPofuwqS2/edit', 1, 'btx 5825');

-- Listage de la structure de table diggit.me. composants_cooler
CREATE TABLE IF NOT EXISTS `composants_cooler` (
  `id_comp` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `is_available` tinyint(1) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `taille` int DEFAULT NULL,
  `son` int DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `speed` int DEFAULT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_cooler : ~2 rows (environ)
INSERT INTO `composants_cooler` (`id_comp`, `price`, `rating`, `brand`, `name`, `is_available`, `img`, `taille`, `son`, `type`, `speed`) VALUES
	(1, 150.00, 3, 'samsung', 'ssd', 1, '../images/composants/gpu/1.png', 456, 43, 'VentiRad', 245),
	(2, 160.00, 3, 'nvidia', 'testajax', 1, '../images/composants/gpu/1.png', 552, 545, 'waterC', 21);

-- Listage de la structure de table diggit.me. composants_cpu
CREATE TABLE IF NOT EXISTS `composants_cpu` (
  `id_comp` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `is_available` tinyint(1) NOT NULL,
  `wattage` int DEFAULT NULL,
  `nbcore` int DEFAULT NULL,
  `puissance` int DEFAULT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_cpu : ~0 rows (environ)
INSERT INTO `composants_cpu` (`id_comp`, `price`, `rating`, `brand`, `name`, `img`, `is_available`, `wattage`, `nbcore`, `puissance`) VALUES
	(1, 150.00, 5, 'nvidia', 'ssd', '../images/composants/gpu/1.png', 1, 44, 8, 55);

-- Listage de la structure de table diggit.me. composants_gpu
CREATE TABLE IF NOT EXISTS `composants_gpu` (
  `id_comp` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ram` int DEFAULT NULL,
  `clock` int DEFAULT NULL,
  `is_available` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_gpu : ~6 rows (environ)
INSERT INTO `composants_gpu` (`id_comp`, `price`, `rating`, `brand`, `name`, `img`, `ram`, `clock`, `is_available`) VALUES
	(4, 500.00, 4, 'Aorus', 'Gigabyte Aorus GeForce GTX 1080Ti Xtreme Edition 11G', ' https://drive.google.com/uc?export=view&id=13jueBPF680fgvWnK2JImyf13PhgjsFBS', 11, 1607, 0),
	(5, 700.00, 5, 'NVIDIA', 'NVIDIA GeForce RTX 3080', ' https://drive.google.com/uc?export=view&id=1G15uq7aSegWRMeY3IEesiv-Kkf7nUddY', 10, 1440, 1),
	(6, 751.00, 4, 'AMD', 'AMD Radeon RX 6800 XT', ' https://drive.google.com/uc?export=view&id=1G15uq7aSegWRMeY3IEesiv-Kkf7nUddY', 16, 1812, 1),
	(7, 300.00, 4, 'NVIDIA', 'NVIDIA GeForce GTX 1660 Ti', ' https://drive.google.com/uc?export=view&id=1OsD8R0Zvm2wGgezJeoj1bN3M4pF_PA6F', 6, 1500, 1),
	(8, 432.00, 4, 'AMD', 'AMD Radeon RX 5700 XT', ' https://drive.google.com/uc?export=view&id=1yISIheYIGKs0QExWuAExO9-UMVv33fPc', 11, 1605, 0),
	(9, 200.00, 3, 'INTEL', 'Intel Iris Xe', ' https://drive.google.com/uc?export=view&id=1OCjgzz5LcxZ7OkH1gl6h_OvUjjj3zsfb', 4, 1200, 1);

-- Listage de la structure de table diggit.me. composants_stockage
CREATE TABLE IF NOT EXISTS `composants_stockage` (
  `id_comp` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name_comp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'LASt INSERT_ID()+''Images''',
  `capacite` int DEFAULT NULL,
  `type_comp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `speed` int DEFAULT NULL,
  `is_available` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_comp`,`name_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_stockage : ~4 rows (environ)
INSERT INTO `composants_stockage` (`id_comp`, `price`, `rating`, `brand`, `name_comp`, `img`, `capacite`, `type_comp`, `speed`, `is_available`) VALUES
	(17, 150.00, 3, 'samsung', 'test1', '../images/composants/stockage/1', 1000, 'SSD', 541, 1),
	(18, 150.00, 5, 'nvvidia', 'ssd', '../images/composants/stockage/1.png', 1000, 'SSD', 5656, 1),
	(19, 150.00, 3, 'samsung', 'testgestionerreur', '../images/composants/stockage/1.png', 1000, 'SSD', 55, 1),
	(20, 150.00, 3, 'samsung', 'testgestionerreur2', '../images/composants/stockage/1.png', 1000, 'SSD', 55, 1);

-- Listage de la structure de table diggit.me. configurations
CREATE TABLE IF NOT EXISTS `configurations` (
  `id_config` int NOT NULL AUTO_INCREMENT,
  `id_client` int NOT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_config`),
  KEY `client_config` (`id_client`),
  CONSTRAINT `client_config` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.configurations : ~0 rows (environ)

-- Listage de la structure de table diggit.me. configurations_prebuild
CREATE TABLE IF NOT EXISTS `configurations_prebuild` (
  `id_config_prebuild` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_config_prebuild`),
  CONSTRAINT `prebuild_ibfk_1` FOREIGN KEY (`id_config_prebuild`) REFERENCES `configurations` (`id_config`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.configurations_prebuild : ~0 rows (environ)

-- Listage de la structure de table diggit.me. statut
CREATE TABLE IF NOT EXISTS `statut` (
  `statutchar` varchar(50) NOT NULL,
  `statut` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`statutchar`),
  KEY `statut` (`statut`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Listage des données de la table diggit.me.statut : ~0 rows (environ)

-- Listage de la structure de table diggit.me. tj_config_comp
CREATE TABLE IF NOT EXISTS `tj_config_comp` (
  `id_config` int NOT NULL AUTO_INCREMENT,
  `id_alim` int NOT NULL DEFAULT '0',
  `id_board` int NOT NULL DEFAULT '0',
  `id_boitier` int NOT NULL DEFAULT '0',
  `id_cooler` int NOT NULL DEFAULT '0',
  `id_cpu` int NOT NULL DEFAULT '0',
  `id_gpu` int NOT NULL DEFAULT '0',
  `id_stockage` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_config`) USING BTREE,
  KEY `FK_tj_config_comp_composants_alim` (`id_alim`),
  KEY `FK_tj_config_comp_composants_board` (`id_board`),
  KEY `FK_tj_config_comp_composants_boitier` (`id_boitier`),
  KEY `FK_tj_config_comp_composants_cooler` (`id_cooler`),
  KEY `FK_tj_config_comp_composants_cpu` (`id_cpu`),
  KEY `FK_tj_config_comp_composants_gpu` (`id_gpu`),
  KEY `FK_tj_config_comp_composants_stockage` (`id_stockage`),
  CONSTRAINT `FK_configurations_copy_configurations` FOREIGN KEY (`id_config`) REFERENCES `configurations` (`id_config`),
  CONSTRAINT `FK_tj_config_comp_composants_alim` FOREIGN KEY (`id_alim`) REFERENCES `composants_alim` (`id_comp`),
  CONSTRAINT `FK_tj_config_comp_composants_board` FOREIGN KEY (`id_board`) REFERENCES `composants_board` (`id_comp`),
  CONSTRAINT `FK_tj_config_comp_composants_boitier` FOREIGN KEY (`id_boitier`) REFERENCES `composants_boitier` (`id_comp`),
  CONSTRAINT `FK_tj_config_comp_composants_cooler` FOREIGN KEY (`id_cooler`) REFERENCES `composants_cooler` (`id_comp`),
  CONSTRAINT `FK_tj_config_comp_composants_cpu` FOREIGN KEY (`id_cpu`) REFERENCES `composants_cpu` (`id_comp`),
  CONSTRAINT `FK_tj_config_comp_composants_gpu` FOREIGN KEY (`id_gpu`) REFERENCES `composants_gpu` (`id_comp`),
  CONSTRAINT `FK_tj_config_comp_composants_stockage` FOREIGN KEY (`id_stockage`) REFERENCES `composants_stockage` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.tj_config_comp : ~0 rows (environ)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
