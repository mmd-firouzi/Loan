-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
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


-- Dumping database structure for mmdproject
CREATE DATABASE IF NOT EXISTS `mmdproject` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mmdproject`;

-- Dumping structure for table mmdproject.funds
CREATE TABLE IF NOT EXISTS `funds` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `fund_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `admin_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `total_amount` int NOT NULL,
  `create_date` timestamp NOT NULL,
  `entry` int NOT NULL,
  `monthly_pay` int NOT NULL,
  `bank_account` bigint NOT NULL,
  `max_member` int NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mmdproject.funds: ~6 rows (approximately)
INSERT INTO `funds` (`ID`, `fund_name`, `admin_name`, `total_amount`, `create_date`, `entry`, `monthly_pay`, `bank_account`, `max_member`, `info`) VALUES
	(1, 'فاند', 'محمد', 0, '2024-06-15 05:09:12', 15, 666, 255, 888, '4484'),
	(2, 'صنذدوق قرضالحسنه', 'csacaca', 0, '2024-06-15 05:10:57', 5000, 2555, 62198610000000, 9, 'فتست'),
	(4, 'bvsfd', 'svds', 0, '2024-06-15 07:24:53', 55, 55, 55, 5, '5'),
	(5, 'iraj', 'ممم', 0, '2024-06-16 09:21:44', 6326, 1542, 151, 66, '555'),
	(8, 'اصلی', 'sdcsdc', 0, '2024-06-22 02:55:24', 222, 222, 222, 222, '222'),
	(9, 'برای دی', '2ثث', 0, '2024-06-22 02:55:43', 33, 33, 33, 33, '33'),
	(10, 'ثثیث', 'ثیث', 0, '2024-06-22 02:55:59', 2221, 11, 321, 12, '2ثص');

-- Dumping structure for table mmdproject.loans
CREATE TABLE IF NOT EXISTS `loans` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `userID` int unsigned NOT NULL,
  `fundID` int unsigned NOT NULL,
  `loan_amount` int NOT NULL,
  `payment_amount` int NOT NULL,
  `interest` int NOT NULL,
  `installment` int NOT NULL,
  `installment_count` int NOT NULL,
  `start_date` timestamp NOT NULL,
  `info` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `uKey` (`userID`),
  KEY `fKey` (`fundID`),
  CONSTRAINT `fKey` FOREIGN KEY (`fundID`) REFERENCES `funds` (`ID`),
  CONSTRAINT `uKey` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mmdproject.loans: ~5 rows (approximately)
INSERT INTO `loans` (`ID`, `userID`, `fundID`, `loan_amount`, `payment_amount`, `interest`, `installment`, `installment_count`, `start_date`, `info`) VALUES
	(1, 4, 2, 56, 0, 5, 0, 18, '2024-06-18 03:56:37', '1454'),
	(2, 4, 2, 56, 0, 5, 0, 18, '2024-06-18 03:57:34', '1454'),
	(3, 1, 5, 54, 0, 5, 0, 12, '2024-06-18 04:20:02', '54154'),
	(4, 7, 4, 66, 0, 5, 0, 12, '2024-06-18 05:38:13', '65'),
	(5, 13, 1, 123456, 0, 5, 0, 18, '2024-06-18 05:39:07', 'ssssss');

-- Dumping structure for table mmdproject.payments
CREATE TABLE IF NOT EXISTS `payments` (
  `userID` int unsigned NOT NULL,
  `loanID` int unsigned NOT NULL,
  `fundID` int unsigned NOT NULL,
  `amount` int NOT NULL,
  `pay_date` timestamp NOT NULL,
  `payment_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `info` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`userID`,`fundID`,`loanID`),
  KEY `lKey` (`loanID`),
  KEY `fundKey` (`fundID`),
  CONSTRAINT `fundKey` FOREIGN KEY (`fundID`) REFERENCES `funds` (`ID`),
  CONSTRAINT `lKey` FOREIGN KEY (`loanID`) REFERENCES `loans` (`ID`),
  CONSTRAINT `userKey` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mmdproject.payments: ~0 rows (approximately)

-- Dumping structure for table mmdproject.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `payload` text NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mmdproject.sessions: ~3 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('5PuseBNWLe2HXI8hyb0Tl2kbGW4KdHdFo0XsFGbc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSXFVUnpaajk1TGxUVmNqUUNEUHFIakM0SjRPVW9wYjRFUjJRWHZoeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719219427);

-- Dumping structure for table mmdproject.users
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `nationID` int NOT NULL,
  `phone_number` int unsigned DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mmdproject.users: ~13 rows (approximately)
INSERT INTO `users` (`ID`, `name`, `nationID`, `phone_number`, `email`, `address`) VALUES
	(1, 'lمحمد', 5656, 10564, 'aaa@adsad.com', '9999'),
	(2, 'محمد فیر', 45234, 545, 'aaa@adsad.com', 'بلوار وکیل آباد، بلوار حافظ، حافظ ۴، پلاک ۱۵، واحد ۴'),
	(3, 'xx', 2, 4524, 'gerg@AEFAER.cpm', '\';\'\''),
	(4, 'scs', 4155, 112564, 'gerg@AEFAER.cpm', 'asdad'),
	(5, 'محمد فیروزی', 54154, 22, 'gerg@AEFAER.cpm', 'بلوار'),
	(6, 'jl.j', 78987, 789, 'gerg@AEFAER.cpm', '797'),
	(7, 'uou7', 797, 7978, 'gerg@AEFAER.cpm', 'بلوار وکیل آباد، بلوار حافظ،'),
	(8, 'yuhdtr', 56765, 67, '123@GMAIL.COM', 'yjy'),
	(9, 'dfvgdf', 222, 222, 'gerg@AEFAER.cpm', '2e2e2'),
	(10, 'sdvcs', 6569, 332, '123@GMAIL.COM', 'qwdqwd'),
	(11, 'ada', 32134, 231, 'gerg@AEFAER.cpm', 'dawd'),
	(12, '342', 3223, 2323, '`veveve@svscs.sd', 'e3rqw'),
	(13, 'sdvsdv', 435435, 343, 'gerg@AEFAER.cpm', 'ergergergerg'),
	(14, 'علی علی', 1236, NULL, 'gerg@AEFAER.cpm', 'بلوار وکیل آباد، ب'),
	(15, 'yhmy', 765, 77, '123@GMAIL.COM', '6666'),
	(16, 'yyy', 55, 565, 'gerg@AEFAER.cpm', '665'),
	(17, 'jhhj,mh,h,h', 7567, 777, '123@GMAIL.COM', '67567'),
	(18, 'ssxvv', 333, 3344, '123@GMAIL.COM', '1464'),
	(19, 'wdwdw', 22, 2222, 'gerg@AEFAER.cpm', '22e2e'),
	(20, 'محممدعلی', 123, 1233, '123@GMAIL.COM', 'سزسزسز');

-- Dumping structure for table mmdproject.user_fund
CREATE TABLE IF NOT EXISTS `user_fund` (
  `userID` int unsigned NOT NULL,
  `fundID` int unsigned NOT NULL,
  `join_date` timestamp NOT NULL,
  `Balance` int NOT NULL,
  PRIMARY KEY (`userID`,`fundID`),
  KEY `fundID` (`fundID`),
  CONSTRAINT `user_fund_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`ID`),
  CONSTRAINT `user_fund_ibfk_2` FOREIGN KEY (`fundID`) REFERENCES `funds` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mmdproject.user_fund: ~7 rows (approximately)
INSERT INTO `user_fund` (`userID`, `fundID`, `join_date`, `Balance`) VALUES
	(12, 2, '2024-06-15 10:05:13', 0),
	(13, 4, '2024-06-16 05:18:04', 0),
	(14, 1, '2024-06-18 05:48:01', 0),
	(15, 1, '2024-06-18 05:49:00', 0),
	(16, 4, '2024-06-18 05:49:40', 0),
	(17, 8, '2024-06-22 04:29:08', 0),
	(18, 8, '2024-06-22 04:30:13', 0),
	(19, 8, '2024-06-24 05:09:11', 0),
	(20, 8, '2024-06-24 05:14:11', 0);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
