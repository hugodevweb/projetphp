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


-- Listage de la structure de la base pour panier_bio
CREATE DATABASE IF NOT EXISTS `panier_bio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `panier_bio`;

-- Listage de la structure de table panier_bio. commande
CREATE TABLE IF NOT EXISTS `commande` (
  `com_num` int NOT NULL,
  `com_date` datetime NOT NULL,
  `ptr_id` int NOT NULL,
  `com_etat` varchar(45) NOT NULL,
  `com_date_retrait` datetime DEFAULT NULL,
  `prix` int DEFAULT NULL,
  PRIMARY KEY (`com_num`),
  KEY `fk_com_ptr_id` (`ptr_id`),
  CONSTRAINT `fk_com_ptr_id` FOREIGN KEY (`ptr_id`) REFERENCES `point_retrait` (`ptr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table panier_bio.commande : ~5 rows (environ)
INSERT INTO `commande` (`com_num`, `com_date`, `ptr_id`, `com_etat`, `com_date_retrait`, `prix`) VALUES
	(1, '2020-04-12 00:00:00', 7, 'Retirée', '2020-04-17 00:00:00', 12),
	(2, '2020-04-27 00:00:00', 5, 'Retirée', '2020-04-30 00:00:00', 28),
	(3, '2020-05-08 00:00:00', 1, 'Retirée', '2020-05-12 00:00:00', 7),
	(4, '2020-06-01 00:00:00', 8, 'Retirée', '2020-06-05 00:00:00', 15),
	(5, '2020-06-02 00:00:00', 4, 'Retirée', '2020-06-04 00:00:00', 8);

-- Listage de la structure de table panier_bio. formule
CREATE TABLE IF NOT EXISTS `formule` (
  `for_id` int NOT NULL AUTO_INCREMENT,
  `for_nom` varchar(45) NOT NULL,
  `for_duree` int NOT NULL,
  `pro_id` int DEFAULT NULL,
  PRIMARY KEY (`for_id`),
  KEY `fk_for_pro_id` (`pro_id`),
  CONSTRAINT `fk_for_pro_id` FOREIGN KEY (`pro_id`) REFERENCES `produits` (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table panier_bio.formule : ~12 rows (environ)
INSERT INTO `formule` (`for_id`, `for_nom`, `for_duree`, `pro_id`) VALUES
	(1, 'Panier 5 légumes', 1, 11),
	(2, 'Panier 5 légumes', 3, 11),
	(3, 'Panier 5 légumes', 6, 11),
	(4, 'Panier 5 légumes', 12, 11),
	(5, 'Panier 9 légumes', 1, 12),
	(6, 'Panier 9 légumes', 3, 12),
	(7, 'Panier 9 légumes', 6, 12),
	(8, 'Panier 9 légumes', 12, 12),
	(9, 'Panier 12 légumes', 1, 13),
	(10, 'Panier 12 légumes', 3, 13),
	(11, 'Panier 12 légumes', 6, 13),
	(12, 'Panier 12 légumes', 12, 13);

-- Listage de la structure de table panier_bio. point_retrait
CREATE TABLE IF NOT EXISTS `point_retrait` (
  `ptr_id` int NOT NULL AUTO_INCREMENT,
  `ptr_nom` varchar(45) NOT NULL,
  `ptr_adresse` varchar(256) NOT NULL,
  `ptr_horaire` varchar(256) DEFAULT NULL,
  `ptr_image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ptr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table panier_bio.point_retrait : ~8 rows (environ)
INSERT INTO `point_retrait` (`ptr_id`, `ptr_nom`, `ptr_adresse`, `ptr_horaire`, `ptr_image`) VALUES
	(1, 'AquaBlue', 'Rue de Cornouaille, Landerneau', 'Mardi : 9h-19h', 'aquablue.jpg'),
	(2, 'La Cervoiserie', 'Rue de la petite Palud, Landerneau', 'Mardi : 9h30 - 20h', 'cervoiserie.jpg'),
	(3, 'Vit Net', '20 Rue de Jérusalem, Lesneven', 'Mercredi : 9h - 19h30', 'vitnet.jpg'),
	(4, 'Les Vignes de Merlin', '2 Rue Comté Even, Lesneven', 'Mercredi : 10h - 19h', 'merlin.jpg'),
	(5, 'La cave de Landi', '1 Rue Tour d\'Auvergne, Landivisiau', 'Jeudi : 9h30 - 19h', 'cave.jpg'),
	(6, 'Pressing du Ponant', '12 Rue Joseph Pinvidic, Landivisiau', 'Jeudi : 8h30 - 18h30', 'ponant.jpg'),
	(7, 'Vins sur 20', '59 Rue Amiral Romain Desfossés, Brest', 'Vendredi : 10h - 19h', 'vins.jpg'),
	(8, 'Day by Day', 'Place St Louis, Brest', 'Vendredi : 9h - 18h30', 'day.jpg');

-- Listage de la structure de table panier_bio. produits
CREATE TABLE IF NOT EXISTS `produits` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `pro_nom` varchar(45) NOT NULL,
  `pro_prix` int NOT NULL,
  `pro_qte` varchar(45) NOT NULL,
  `pro_image` varchar(45) DEFAULT NULL,
  `typ_id` int NOT NULL,
  PRIMARY KEY (`pro_id`),
  KEY `fk_pro_typ_id` (`typ_id`),
  CONSTRAINT `fk_pro_typ_id` FOREIGN KEY (`typ_id`) REFERENCES `type` (`typ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table panier_bio.produits : ~15 rows (environ)
INSERT INTO `produits` (`pro_id`, `pro_nom`, `pro_prix`, `pro_qte`, `pro_image`, `typ_id`) VALUES
	(1, 'Bettrave rouge', 2, 'l\'unité', 'bettrave.jpg', 1),
	(2, 'Concombre', 2, 'l\'unité', 'concombre.png', 1),
	(3, 'Laitue', 2, ' l\'unité', 'laitue.jpg', 1),
	(4, 'Radis', 3, 'la botte', 'radis.jpeg', 1),
	(5, 'Oignons', 1, '400g', 'oignon.png', 1),
	(6, 'Fraises', 3, '250g', 'fraises.png', 2),
	(7, 'Tomates', 2, '300g', 'tomates.png', 2),
	(8, 'Pêches', 1, '300g', 'peches.png', 2),
	(9, 'Bananes', 3, '450g', 'banane.jpg', 2),
	(10, 'Melon', 2, 'l\'unité', 'melon.jpeg', 2),
	(11, 'Panier 5 légumes', 9, 'l\'unité', 'panier_legumes.jpg', 3),
	(12, 'Panier 9 légumes', 16, 'l\'unité', 'panier_legumes.jpg', 3),
	(13, 'Panier 12 légumes', 21, 'l\'unité', 'panier_legumes.jpg', 3),
	(14, 'Panier de fruits', 10, 'l\'unité', 'panier_fruits.jpg', 3),
	(15, 'Panier fruits et légumes', 20, 'l\'unité', 'panier_fruits_et_legumes.png', 3);

-- Listage de la structure de table panier_bio. profil
CREATE TABLE IF NOT EXISTS `profil` (
  `user_pseudo` varchar(45) NOT NULL,
  `pfl_prenom` varchar(45) NOT NULL,
  `pfl_nom` varchar(45) NOT NULL,
  `pfl_adresse` varchar(256) NOT NULL,
  `pfl_num` varchar(10) NOT NULL,
  PRIMARY KEY (`user_pseudo`),
  CONSTRAINT `fk_user_pseudo` FOREIGN KEY (`user_pseudo`) REFERENCES `user` (`user_pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table panier_bio.profil : ~7 rows (environ)
INSERT INTO `profil` (`user_pseudo`, `pfl_prenom`, `pfl_nom`, `pfl_adresse`, `pfl_num`) VALUES
	('acheteur', 'Martin', 'D', 'Route du four, Le Folgeot', '0298249374'),
	('producteur', 'Michel', 'B', '1 Route de Quimper, Landerneau', '0234567891'),
	('testform2', 'sdvl', 'dklsv', 'dsv', '03838'),
	('testfrom', 'testoption', 'test', 'ftrg', '08980080'),
	('vendeur', 'Agnes', 'A', 'Rue de Cornouaille, Landerneau', '0203040506');

-- Listage de la structure de table panier_bio. tj_com_pro
CREATE TABLE IF NOT EXISTS `tj_com_pro` (
  `com_num` int NOT NULL,
  `pro_id` int NOT NULL,
  `quantite` int NOT NULL,
  PRIMARY KEY (`com_num`,`pro_id`),
  KEY `fk_tj_pro_id` (`pro_id`),
  CONSTRAINT `fk_tj_com_id` FOREIGN KEY (`com_num`) REFERENCES `commande` (`com_num`),
  CONSTRAINT `fk_tj_pro_id` FOREIGN KEY (`pro_id`) REFERENCES `produits` (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table panier_bio.tj_com_pro : ~12 rows (environ)
INSERT INTO `tj_com_pro` (`com_num`, `pro_id`, `quantite`) VALUES
	(1, 1, 1),
	(1, 2, 1),
	(2, 3, 1),
	(2, 4, 1),
	(2, 6, 1),
	(3, 8, 1),
	(3, 9, 1),
	(4, 4, 1),
	(4, 7, 1),
	(5, 1, 1),
	(5, 2, 1),
	(5, 6, 1);

-- Listage de la structure de table panier_bio. tj_cpt_com
CREATE TABLE IF NOT EXISTS `tj_cpt_com` (
  `user_pseudo` varchar(45) NOT NULL,
  `com_num` int NOT NULL,
  PRIMARY KEY (`user_pseudo`,`com_num`),
  KEY `fk_tj_cpt_com_num` (`com_num`),
  CONSTRAINT `fk_tj_cpt_com_num` FOREIGN KEY (`com_num`) REFERENCES `commande` (`com_num`),
  CONSTRAINT `fk_tj_user_pseudo` FOREIGN KEY (`user_pseudo`) REFERENCES `user` (`user_pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table panier_bio.tj_cpt_com : ~5 rows (environ)
INSERT INTO `tj_cpt_com` (`user_pseudo`, `com_num`) VALUES
	('acheteur', 1),
	('test', 2),
	('test', 3),
	('acheteur', 4),
	('test', 5);

-- Listage de la structure de table panier_bio. tj_for_com
CREATE TABLE IF NOT EXISTS `tj_for_com` (
  `for_id` int NOT NULL,
  `com_num` int NOT NULL,
  PRIMARY KEY (`for_id`,`com_num`),
  KEY `fk_tj_for_com_num` (`com_num`),
  CONSTRAINT `fk_tj_com_for_id` FOREIGN KEY (`for_id`) REFERENCES `formule` (`for_id`),
  CONSTRAINT `fk_tj_for_com_num` FOREIGN KEY (`com_num`) REFERENCES `commande` (`com_num`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table panier_bio.tj_for_com : ~2 rows (environ)
INSERT INTO `tj_for_com` (`for_id`, `com_num`) VALUES
	(1, 1),
	(1, 4);

-- Listage de la structure de table panier_bio. type
CREATE TABLE IF NOT EXISTS `type` (
  `typ_id` int NOT NULL AUTO_INCREMENT,
  `typ_nom` varchar(45) NOT NULL,
  PRIMARY KEY (`typ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table panier_bio.type : ~3 rows (environ)
INSERT INTO `type` (`typ_id`, `typ_nom`) VALUES
	(1, 'légumes'),
	(2, 'fruits'),
	(3, 'panier');

-- Listage de la structure de table panier_bio. user
CREATE TABLE IF NOT EXISTS `user` (
  `user_pseudo` varchar(45) NOT NULL,
  `user_mdp` varchar(256) NOT NULL,
  `user_type` varchar(1) NOT NULL,
  PRIMARY KEY (`user_pseudo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- Listage des données de la table panier_bio.user : ~11 rows (environ)
INSERT INTO `user` (`user_pseudo`, `user_mdp`, `user_type`) VALUES
	('acheteur', 'acheteur', 'A'),
	('producteur', 'producteur', 'P'),
	('test', 'test', 'A'),
	('testform2', 'mdp', 'V'),
	('testfrom', 'mdp', ''),
	('vendeur', 'vendeur', 'V');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
