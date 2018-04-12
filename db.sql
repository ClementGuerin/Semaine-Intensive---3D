DROP SCHEMA IF EXISTS `portalgun`;

CREATE SCHEMA `portalgun`
DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE portalgun;

CREATE TABLE `info` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
`lastName` VARCHAR(50) NOT NULL,
`firstName` VARCHAR(50) NOT NULL,
`mail` VARCHAR(100) NOT NULL,
`date` VARCHAR(10) NOT NULL,
PRIMARY KEY (`id`)
);

INSERT INTO
`info`
(`id`, `lastName`, `firstName`, `mail`, `date`)
VALUES
(NULL, 'nom', 'prenom', 'nomprenom@gmail.com', '03/04/2032')
;

CREATE TABLE `pieces` (
`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
`itemName` VARCHAR(50) NOT NULL,
`description` VARCHAR(500) NOT NULL,
PRIMARY KEY (`id`)
);

INSERT INTO
`pieces`
(`id`, `itemName`, `description`)
VALUES
(NULL, 'title1', 'description1'),
(NULL, 'title2', 'description2')
;