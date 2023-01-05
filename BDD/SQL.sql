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
  `is_selected` int DEFAULT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_alim : ~7 rows (environ)
INSERT INTO `composants_alim` (`id_comp`, `price`, `rating`, `brand`, `name`, `img`, `is_available`, `is_modulable`, `wattage`, `is_selected`) VALUES
	(1, 150.00, 2, 'samsung', 'ssd', '../images/composants/board/1.png', 1, 2, 55, NULL),
	(2, 86.00, 3, 'VDIa', 'cartegrap', '../images/composants/alim/1.png', 1, 2, 76, NULL),
	(3, 86.00, 3, 'VDIa', 'cartegrap', '../images/composants/alim/1.png', 1, 2, 76, NULL),
	(4, 868.00, 4, 'nvidia', 'inserrelno', '../images/composants/alim/1.png', 1, 1, 56, NULL),
	(5, 868.00, 4, 'nvidia', 'inserrelno', '../images/composants/alim/1.png', 1, 1, 56, NULL),
	(6, 868.00, 4, 'nvidia', 'inserrelno', '../images/composants/alim/1.png', 1, 1, 56, NULL),
	(7, 86.00, 4, 'Nvidia', 'inserte', '../images/composants/alim/1.png', 1, 1, 56, NULL);

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
  `is_selected` int DEFAULT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_board : ~2 rows (environ)
INSERT INTO `composants_board` (`id_comp`, `price`, `rating`, `brand`, `name`, `img`, `is_available`, `ram`, `socket`, `is_selected`) VALUES
	(1, 150.00, 4, 'samsung', 'test1', '../images/composants/board/1.png', 1, 2, 4, NULL),
	(2, 150.00, 3, 'samsung', 'ssd', '../images/composants/board/1.png', 1, 2, 4, NULL);

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
  `is_selected` int DEFAULT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_boitier : ~4 rows (environ)
INSERT INTO `composants_boitier` (`id_comp`, `price`, `rating`, `brand`, `name`, `img`, `is_available`, `type`, `is_selected`) VALUES
	(1, 104.99, 4, 'Corsair', '4000D Airflow', 'https://drive.google.com/uc?export=view&id=1fpbOgFRmIfknbrwj9VYlUzRwuWvhiwcz', 1, 'ATX Mid Tower', 0),
	(2, 129.99, 5, 'Corsair', 'iCUE 4000X RGB', 'https://drive.google.com/uc?export=view&id=1aTG6fzOgvXkfLwUKuu_iKayreqiaUwsd', 1, 'ATX Mid Tower', 1),
	(3, 89.99, 5, 'NZXT', 'H510 Flow', 'https://drive.google.com/uc?export=view&id=1GtJ99Esono9hzyB9riMo-S4rHLzinfGo', 0, 'ATX Mid Tower', 1),
	(4, 89.99, 5, 'NZXT', 'H510 Flow', 'https://drive.google.com/uc?export=view&id=1pVKb0oi8w14WIobXZSM10TCDf7V4zGJf', 1, 'ATX Mid Tower', 1);

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
  `is_selected` int DEFAULT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_cooler : ~4 rows (environ)
INSERT INTO `composants_cooler` (`id_comp`, `price`, `rating`, `brand`, `name`, `is_available`, `img`, `taille`, `son`, `type`, `speed`, `is_selected`) VALUES
	(1, 150.00, 3, 'samsung', 'ssd', 1, '../images/composants/gpu/1.png', 456, 43, 'VentiRad', 245, NULL),
	(2, 160.00, 3, 'nvidia', 'testajax', 1, '../images/composants/gpu/1.png', 552, 545, 'waterC', 21, NULL),
	(3, 150.00, 3, 'samsung', 'ssd', 1, 'qds', 552, 14, 'VentiRad', 21, NULL),
	(4, 150.00, 3, 'samsung', 'ssd', 1, 'qds', 552, 14, 'VentiRad', 21, NULL);

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
  `puissance` float DEFAULT NULL,
  `is_selected` int DEFAULT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_cpu : ~6 rows (environ)
INSERT INTO `composants_cpu` (`id_comp`, `price`, `rating`, `brand`, `name`, `img`, `is_available`, `wattage`, `nbcore`, `puissance`, `is_selected`) VALUES
	(1, 209.38, 5, 'AMD', 'Ryzen 5 5600X', 'https://drive.google.com/uc?export=view&id=1Ok1FoNKMwdzJQYy9tU9fqr6Co9nI6vPX', 1, 65, 6, 3.7, 0),
	(2, 134.84, 5, 'AMD', 'Ryzen 5 5600', 'https://drive.google.com/uc?export=view&id=1-A-b3yAZdF_ltquko_L-8wOc7Yv1SWe4', 1, 65, 6, 3.5, 0),
	(3, 319.99, 5, 'Intel', 'Core i5-13600K', 'https://drive.google.com/uc?export=view&id=1WdWEfgM65kTm9l--fwFN-OlxhzSQLybB', 1, 125, 14, 3.5, 1),
	(4, 594.99, 5, 'Intel', 'Core i9-13900K', 'https://drive.google.com/uc?export=view&id=1CEELu8BfODdIUYp9ztTHy-V3SlHl88O3', 1, 125, 24, 3.3, 1),
	(5, 450.00, 5, 'Intel', 'Core i7-9700K', 'https://drive.google.com/uc?export=view&id=1xm0tCg3eQjRadlko2EUS0D3Cmuz4qBmj', 1, 95, 8, 3.6, 1),
	(6, 8390.00, 5, 'AMD', 'Threadripper 3990X', 'https://drive.google.com/uc?export=view&id=1RwcrOEYWcrdT7jICodUf5HKYNid6hJ5z', 1, 280, 64, 2.9, 0);

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
  `is_selected` int DEFAULT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_gpu : ~6 rows (environ)
INSERT INTO `composants_gpu` (`id_comp`, `price`, `rating`, `brand`, `name`, `img`, `ram`, `clock`, `is_available`, `is_selected`) VALUES
	(4, 500.00, 4, 'Aorus', 'Gigabyte GTX 1080Ti', ' https://drive.google.com/uc?export=view&id=13jueBPF680fgvWnK2JImyf13PhgjsFBS', 11, 1607, 0, 1),
	(5, 700.00, 5, 'NVIDIA', ' GeForce RTX 3080', ' https://drive.google.com/uc?export=view&id=1G15uq7aSegWRMeY3IEesiv-Kkf7nUddY', 10, 1440, 1, 0),
	(6, 751.00, 4, 'AMD', ' Radeon RX 6800 XT', ' https://drive.google.com/uc?export=view&id=1G15uq7aSegWRMeY3IEesiv-Kkf7nUddY', 16, 1812, 1, 1),
	(7, 300.00, 4, 'NVIDIA', ' GeForce GTX 1660 Ti', ' https://drive.google.com/uc?export=view&id=1OsD8R0Zvm2wGgezJeoj1bN3M4pF_PA6F', 6, 1500, 1, 1),
	(8, 432.00, 4, 'AMD', ' Radeon RX 5700 XT', ' https://drive.google.com/uc?export=view&id=1yISIheYIGKs0QExWuAExO9-UMVv33fPc', 11, 1605, 0, 0),
	(9, 200.00, 3, 'INTEL', 'Iris Xe', ' https://drive.google.com/uc?export=view&id=1OCjgzz5LcxZ7OkH1gl6h_OvUjjj3zsfb', 4, 1200, 1, 0);

-- Listage de la structure de table diggit.me. composants_ram
CREATE TABLE IF NOT EXISTS `composants_ram` (
  `id_comp` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `is_available` tinyint(1) NOT NULL,
  `modules` int DEFAULT NULL,
  `speed` int DEFAULT NULL,
  `is_selected` int DEFAULT NULL,
  PRIMARY KEY (`id_comp`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_ram : ~7 rows (environ)
INSERT INTO `composants_ram` (`id_comp`, `price`, `rating`, `brand`, `name`, `img`, `is_available`, `modules`, `speed`, `is_selected`) VALUES
	(1, 150.00, 2, 'samsung', 'ssd', '../images/composants/board/1.png', 1, 2, 55, NULL),
	(2, 86.00, 3, 'VDIa', 'cartegrap', '../images/composants/alim/1.png', 1, 2, 76, NULL),
	(3, 86.00, 3, 'VDIa', 'cartegrap', '../images/composants/alim/1.png', 1, 2, 76, NULL),
	(4, 868.00, 4, 'nvidia', 'inserrelno', '../images/composants/alim/1.png', 1, 1, 56, NULL),
	(5, 868.00, 4, 'nvidia', 'inserrelno', '../images/composants/alim/1.png', 1, 1, 56, NULL),
	(6, 868.00, 4, 'nvidia', 'inserrelno', '../images/composants/alim/1.png', 1, 1, 56, NULL),
	(7, 86.00, 4, 'Nvidia', 'inserte', '../images/composants/alim/1.png', 1, 1, 56, NULL);

-- Listage de la structure de table diggit.me. composants_stockage
CREATE TABLE IF NOT EXISTS `composants_stockage` (
  `id_comp` int NOT NULL AUTO_INCREMENT,
  `price` decimal(10,2) NOT NULL,
  `rating` tinyint(1) DEFAULT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'LASt INSERT_ID()+''Images''',
  `capacite` int DEFAULT NULL,
  `type_comp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `speed` int DEFAULT NULL,
  `is_available` tinyint(1) NOT NULL,
  `is_selected` int DEFAULT NULL,
  PRIMARY KEY (`id_comp`,`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

-- Listage des données de la table diggit.me.composants_stockage : ~4 rows (environ)
INSERT INTO `composants_stockage` (`id_comp`, `price`, `rating`, `brand`, `name`, `img`, `capacite`, `type_comp`, `speed`, `is_available`, `is_selected`) VALUES
	(17, 150.00, 3, 'samsung', 'test1', '../images/composants/stockage/1', 1000, 'SSD', 541, 1, NULL),
	(18, 150.00, 5, 'nvvidia', 'ssd', '../images/composants/stockage/1.png', 1000, 'SSD', 5656, 1, NULL),
	(19, 150.00, 3, 'samsung', 'testgestionerreur', '../images/composants/stockage/1.png', 1000, 'SSD', 55, 1, NULL),
	(20, 150.00, 3, 'samsung', 'testgestionerreur2', '../images/composants/stockage/1.png', 1000, 'SSD', 55, 1, NULL);

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
