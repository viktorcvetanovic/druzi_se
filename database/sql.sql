-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.5.8-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for druzi_se
CREATE DATABASE IF NOT EXISTS `druzi_se` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `druzi_se`;

-- Dumping structure for table druzi_se.buyment
CREATE TABLE IF NOT EXISTS `buyment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_buy` date DEFAULT current_timestamp(),
  `fk_user` int(11) DEFAULT NULL,
  `fk_post` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_user` (`fk_user`),
  KEY `fk_post_post` (`fk_post`),
  CONSTRAINT `fk_post_post` FOREIGN KEY (`fk_post`) REFERENCES `post` (`id`),
  CONSTRAINT `fk_user_user` FOREIGN KEY (`fk_user`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table druzi_se.buyment: ~0 rows (approximately)
/*!40000 ALTER TABLE `buyment` DISABLE KEYS */;
/*!40000 ALTER TABLE `buyment` ENABLE KEYS */;

-- Dumping structure for table druzi_se.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentar_body` varchar(200) DEFAULT NULL,
  `user_fk` int(11) DEFAULT NULL,
  `post_fk` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_comments` (`user_fk`),
  KEY `post_comments` (`post_fk`),
  CONSTRAINT `post_comments` FOREIGN KEY (`post_fk`) REFERENCES `post` (`id`),
  CONSTRAINT `user_comments` FOREIGN KEY (`user_fk`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- Dumping data for table druzi_se.comments: ~3 rows (approximately)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `commentar_body`, `user_fk`, `post_fk`) VALUES
	(40, 'probni komentar', 23, 122),
	(41, 'svaki user moze da unese komentar', 23, 122),
	(42, 'komentar ', 23, 123),
	(43, '', 23, 123);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Dumping structure for table druzi_se.message
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(40) DEFAULT NULL,
  `last_name` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Dumping data for table druzi_se.message: ~0 rows (approximately)
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;

-- Dumping structure for table druzi_se.post
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(100) DEFAULT NULL,
  `body` varchar(500) DEFAULT NULL,
  `created_date` date DEFAULT curdate(),
  `user_fk` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `post_photo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user_comment` (`user_fk`),
  CONSTRAINT `fk_user_comment` FOREIGN KEY (`user_fk`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8;

-- Dumping data for table druzi_se.post: ~2 rows (approximately)
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` (`id`, `header`, `body`, `created_date`, `user_fk`, `price`, `post_photo`) VALUES
	(122, 'Dobrodosli', 'Prikaz kako aplikacija radi', '2021-05-29', 23, 2500, 'uploads/1.jpg'),
	(123, 'Prodajem domaci', ' Matematika', '2021-05-29', 23, 5000, 'uploads/2.jpg');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;

-- Dumping structure for table druzi_se.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `photo` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- Dumping data for table druzi_se.user: ~1 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `password`, `email`, `photo`) VALUES
	(23, 'viktor', 'viktor123', 'viktorcvetanovic@gmail.com', NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
