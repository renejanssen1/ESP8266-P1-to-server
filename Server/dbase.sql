-- Adminer 4.8.1 MySQL 5.5.5-10.1.48-MariaDB-0ubuntu0.18.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `overzicht`;
CREATE TABLE `overzicht` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datum` date NOT NULL,
  `tijd` time NOT NULL,
  `timestamp` int(11) NOT NULL,
  `nachtaf` float NOT NULL,
  `dagaf` float NOT NULL,
  `nachtterug` float NOT NULL,
  `dagterug` float NOT NULL,
  `af` int(11) NOT NULL,
  `terug` int(11) NOT NULL,
  `fase1` int(11) NOT NULL,
  `f1t` int(11) NOT NULL,
  `v1` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `fase2` int(11) NOT NULL,
  `f2t` int(11) NOT NULL,
  `v2` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `fase3` int(11) NOT NULL,
  `f3t` int(11) NOT NULL,
  `v3` int(11) NOT NULL,
  `a3` int(11) NOT NULL,
  `gas` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2022-08-16 16:37:36

