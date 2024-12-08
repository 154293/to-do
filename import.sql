DROP DATABASE IF EXISTS `todo`;

CREATE DATABASE `todo`;

USE `todo`;

CREATE TABLE `list` (
    topic varchar(128) NOT NULL,
    description TEXT NOT NULL,
    status BOOLEAN NOT NULL DEFAULT FALSE
);

INSERT INTO `list` (`topic`, `description`, `status`) VALUES
('Maak todo item', 'Dit is een test text voor in het todo item', FALSE);