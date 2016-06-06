CREATE SCHEMA IF NOT EXISTS webapp;
USE webapp;

DROP TABLE IF EXISTS Admin;

CREATE TABLE IF NOT EXISTS Admin(
	`usuario` VARCHAR(20) NOT NULL,
	`passw` VARCHAR(40) NOT NULL,
	`idAdmin` INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idAdmin`));
INSERT INTO Admin(usuario, passw) VALUES ('admin', 'admin');