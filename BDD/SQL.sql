CREATE DATABASE IF NOT EXISTS `diggit.me` 
  /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ 
  /*!80016 DEFAULT ENCRYPTION='N' */;

USE `diggit.me`;

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

-- Listage de la structure de table diggit.me. board
CREATE TABLE board LIKE composants(
 `typesocket` varchar(255) NOT NULL,
 `nbram` tinyint(1) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;