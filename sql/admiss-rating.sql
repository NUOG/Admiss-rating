-- Adminer 4.1.0 MySQL dump
-- 2015

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `entrant`;
CREATE TABLE `entrant` (
  `e1`  varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '№пп',
  `e2`  varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ПІБ',
  `e3`  varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ЕЗ',
  `e4`  varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Статус',
  `e5`  varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Коментар',
  `e6`  varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Створено',
  `e7`  varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Особ.справа',
  `e8`  varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Курс',
  `e9`  varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Форма',
  `e10` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ОКР',
  `e11` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Б',
  `e12` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'К',
  `e13` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Бал',
  `e14` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Код напряму',
  `e15` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Напрям',
  `e16` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Код спеціал.',
  `e17` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Спеціальність',
  `e18` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Спеціалізація',
  `e19` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Структ. підрозділ',
  `e20` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Змінено',
  `e21` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Бал, деталізація',
  `e22` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Тип док.',
  `e23` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Серія док.',
  `e24` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '№ док.',
  `e25` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Бал док.',
  `e26` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Дата док.',
  `e27` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Відзнака',
  `e28` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Тип',
  `e29` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Причина',
  `e30` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Пільга',
  `e31` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Першоч.',
  `e32` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Квота',
  `e33` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Мова',
  `e34` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ОІ',
  `e35` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Категорія',
  `e36` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Стать',
  `e37` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Гр.',
  `e38` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Країна',
  `e39` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ТН',
  `e40` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Телефон',
  `e41` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Мобільний',
  `e42` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ОД',
  `e43` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Довід. ОД',
  `e44` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Гар. лист',
  `e45` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Гурт.',
  `e46` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Коди вступу',
  `e47` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'П',
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

