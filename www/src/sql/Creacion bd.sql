CREATE SCHEMA IF NOT EXISTS webapp;
USE webapp;

DROP TABLE IF EXISTS Admin;
DROP TABLE IF EXISTS Usuario;
DROP TABLE IF EXISTS Piso;
DROP TABLE IF EXISTS Parking;

CREATE TABLE IF NOT EXISTS Admin(
	`usuario` VARCHAR(20) NOT NULL,
	`passw` VARCHAR(40) NOT NULL,
	`idAdmin` INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idAdmin`));
INSERT INTO Admin(usuario, passw) VALUES ('admin', 'admin');

CREATE TABLE IF NOT EXISTS Usuario(
	`nombre` VARCHAR(20) NOT NULL,
	`password` VARCHAR(40) NOT NULL,
	`idUser` INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idUser`));

CREATE TABLE IF NOT EXISTS Parking(
	`pisos` INT NOT NULL,
	`idParking` INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idParking`));
INSERT INTO Parking(pisos) VALUES (4);


CREATE TABLE IF NOT EXISTS Piso(
	`plazas` INT NOT NULL,
	`idPiso` INT NOT NULL AUTO_INCREMENT,
	`fkParkin` INT NOT NULL,
	PRIMARY KEY (`idPiso`),
	FOREIGN KEY (`fkParkin`) REFERENCES Parking(`idParking`));

select @id:=idParking from Parking;
INSERT INTO Piso(plazas, fkParkin) VALUES (10, @id);
INSERT INTO Piso(plazas, fkParkin) VALUES (10, @id);
INSERT INTO Piso(plazas, fkParkin) VALUES (10, @id);
INSERT INTO Piso(plazas, fkParkin) VALUES (10, @id);