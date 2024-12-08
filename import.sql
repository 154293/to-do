DROP DATABASE IF EXISTS `todo`;

CREATE DATABASE `todo`;

USE `todo`;

CREATE TABLE `list` (
    id INT NOT NULL AUTO_INCREMENT,
    topic varchar(128) NOT NULL,
    description TEXT NOT NULL,
    status BOOLEAN NOT NULL DEFAULT FALSE,
    PRIMARY KEY (id)
);

INSERT INTO `list` (`topic`, `description`, `status`) VALUES
('Make todo item', 'This is a text for in the todo item', FALSE);