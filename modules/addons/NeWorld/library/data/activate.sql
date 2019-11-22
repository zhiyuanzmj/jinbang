-- Soft Name: NeWorld Manager
-- Current version: 1.0
-- https://neworld.org

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `NeWorld` (
  `setting` varchar(128) NOT NULL,
  `value` longtext NOT NULL
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `NeWorldCache` (
  `id` int(11) NOT NULL,
  `version` varchar(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `md5` varchar(32) NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `NeWorldProduct` (
  `id` int(11) NOT NULL,
  `version` varchar(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `license` varchar(128) NOT NULL,
  `hash` varchar(128) NOT NULL,
  `date` int(11) NOT NULL DEFAULT '1477929600',
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;