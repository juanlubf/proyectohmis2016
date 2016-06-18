-- MySQL Script generated by MySQL Workbench
-- 06/18/16 18:19:49
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering


SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema webapp
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `webapp` ;

-- -----------------------------------------------------
-- Schema webapp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `webapp` DEFAULT CHARACTER SET utf8 ;
USE `webapp` ;

-- -----------------------------------------------------
-- Table `webapp`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webapp`.`User` ;

CREATE TABLE IF NOT EXISTS `webapp`.`User` (
	`idUser` INT NOT NULL AUTO_INCREMENT,
	`password` VARCHAR(45) NOT NULL,
	`nombre` VARCHAR(45) NOT NULL,
	`esAdmin` TINYINT(1) NULL DEFAULT 0,
	PRIMARY KEY (`idUser`))
	ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webapp`.`Deck`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webapp`.`Deck` ;

CREATE TABLE IF NOT EXISTS `webapp`.`Deck` (
	`idDeck` INT NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`idDeck`))
	ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webapp`.`Planta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webapp`.`Planta` ;

CREATE TABLE IF NOT EXISTS `webapp`.`Planta` (
	`idPlanta` INT NOT NULL AUTO_INCREMENT,
	`Deck_idDeck` INT NOT NULL,
	`nombre` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`idPlanta`, `Deck_idDeck`),
	INDEX `fk_Planta_Deck1_idx` (`Deck_idDeck` ASC),
	CONSTRAINT `fk_Planta_Deck1`
	FOREIGN KEY (`Deck_idDeck`)
	REFERENCES `webapp`.`Deck` (`idDeck`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION)
	ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webapp`.`Tipo_Vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webapp`.`Tipo_Vehiculo` ;

CREATE TABLE IF NOT EXISTS `webapp`.`Tipo_Vehiculo` (
	`idTipo_Vehiculo` INT NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`idTipo_Vehiculo`))
	ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webapp`.`Plaza`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webapp`.`Plaza` ;

CREATE TABLE IF NOT EXISTS `webapp`.`Plaza` (
	`idPlaza` INT NOT NULL AUTO_INCREMENT,
	`Planta_idPlanta` INT NOT NULL,
	`nombre` VARCHAR(45) NOT NULL,
	`Tipo_Vehiculo` INT NOT NULL,
	PRIMARY KEY (`idPlaza`, `Planta_idPlanta`, `Tipo_Vehiculo`),
	INDEX `fk_Plaza_Planta1_idx` (`Planta_idPlanta` ASC),
	INDEX `fk_Plaza_Tipo_Vehiculo1_idx` (`Tipo_Vehiculo` ASC),
	CONSTRAINT `fk_Plaza_Planta1`
	FOREIGN KEY (`Planta_idPlanta`)
	REFERENCES `webapp`.`Planta` (`idPlanta`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION,
	CONSTRAINT `fk_Plaza_Tipo_Vehiculo1`
	FOREIGN KEY (`Tipo_Vehiculo`)
	REFERENCES `webapp`.`Tipo_Vehiculo` (`idTipo_Vehiculo`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION)
	ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webapp`.`Reserva`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webapp`.`Reserva` ;

CREATE TABLE IF NOT EXISTS `webapp`.`Reserva` (
	`idReserva` INT NOT NULL AUTO_INCREMENT,
	`Plaza_idPlaza` INT NOT NULL,
	`User_idUser` INT NOT NULL,
	`Desde` DATETIME NOT NULL,
	`Hasta` DATETIME NOT NULL,
	PRIMARY KEY (`idReserva`, `Plaza_idPlaza`, `User_idUser`),
	INDEX `fk_Reserva_Plaza_idx` (`Plaza_idPlaza` ASC),
	INDEX `fk_Reserva_User1_idx` (`User_idUser` ASC),
	CONSTRAINT `fk_Reserva_Plaza`
	FOREIGN KEY (`Plaza_idPlaza`)
	REFERENCES `webapp`.`Plaza` (`idPlaza`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION,
	CONSTRAINT `fk_Reserva_User1`
	FOREIGN KEY (`User_idUser`)
	REFERENCES `webapp`.`User` (`idUser`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION)
	ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema webapp
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `webapp` ;

-- -----------------------------------------------------
-- Schema webapp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `webapp` DEFAULT CHARACTER SET utf8 ;
USE `webapp` ;

-- -----------------------------------------------------
-- Table `webapp`.`User`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webapp`.`User` ;

CREATE TABLE IF NOT EXISTS `webapp`.`User` (
	`idUser` INT NOT NULL AUTO_INCREMENT,
	`password` VARCHAR(45) NOT NULL,
	`nombre` VARCHAR(45) NOT NULL,
	`esAdmin` TINYINT(1) NULL DEFAULT 0,
	PRIMARY KEY (`idUser`))
	ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webapp`.`Deck`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webapp`.`Deck` ;

CREATE TABLE IF NOT EXISTS `webapp`.`Deck` (
	`idDeck` INT NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`idDeck`))
	ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webapp`.`Planta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webapp`.`Planta` ;

CREATE TABLE IF NOT EXISTS `webapp`.`Planta` (
	`idPlanta` INT NOT NULL AUTO_INCREMENT,
	`Deck_idDeck` INT NOT NULL,
	`nombre` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`idPlanta`, `Deck_idDeck`),
	INDEX `fk_Planta_Deck1_idx` (`Deck_idDeck` ASC),
	CONSTRAINT `fk_Planta_Deck1`
	FOREIGN KEY (`Deck_idDeck`)
	REFERENCES `webapp`.`Deck` (`idDeck`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION)
	ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webapp`.`Tipo_Vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webapp`.`Tipo_Vehiculo` ;

CREATE TABLE IF NOT EXISTS `webapp`.`Tipo_Vehiculo` (
	`idTipo_Vehiculo` INT NOT NULL AUTO_INCREMENT,
	`nombre` VARCHAR(45) NOT NULL,
	PRIMARY KEY (`idTipo_Vehiculo`))
	ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webapp`.`Plaza`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webapp`.`Plaza` ;

CREATE TABLE IF NOT EXISTS `webapp`.`Plaza` (
	`idPlaza` INT NOT NULL AUTO_INCREMENT,
	`Planta_idPlanta` INT NOT NULL,
	`nombre` VARCHAR(45) NOT NULL,
	`Tipo_Vehiculo` INT NOT NULL,
	PRIMARY KEY (`idPlaza`, `Planta_idPlanta`, `Tipo_Vehiculo`),
	INDEX `fk_Plaza_Planta1_idx` (`Planta_idPlanta` ASC),
	INDEX `fk_Plaza_Tipo_Vehiculo1_idx` (`Tipo_Vehiculo` ASC),
	CONSTRAINT `fk_Plaza_Planta1`
	FOREIGN KEY (`Planta_idPlanta`)
	REFERENCES `webapp`.`Planta` (`idPlanta`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION,
	CONSTRAINT `fk_Plaza_Tipo_Vehiculo1`
	FOREIGN KEY (`Tipo_Vehiculo`)
	REFERENCES `webapp`.`Tipo_Vehiculo` (`idTipo_Vehiculo`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION)
	ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webapp`.`Reserva`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `webapp`.`Reserva` ;

CREATE TABLE IF NOT EXISTS `webapp`.`Reserva` (
	`idReserva` INT NOT NULL AUTO_INCREMENT,
	`Plaza_idPlaza` INT NOT NULL,
	`User_idUser` INT NOT NULL,
	`Desde` DATETIME NOT NULL,
	`Hasta` DATETIME NOT NULL,
	PRIMARY KEY (`idReserva`, `Plaza_idPlaza`, `User_idUser`),
	INDEX `fk_Reserva_Plaza_idx` (`Plaza_idPlaza` ASC),
	INDEX `fk_Reserva_User1_idx` (`User_idUser` ASC),
	CONSTRAINT `fk_Reserva_Plaza`
	FOREIGN KEY (`Plaza_idPlaza`)
	REFERENCES `webapp`.`Plaza` (`idPlaza`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION,
	CONSTRAINT `fk_Reserva_User1`
	FOREIGN KEY (`User_idUser`)
	REFERENCES `webapp`.`User` (`idUser`)
		ON DELETE NO ACTION
		ON UPDATE NO ACTION)
	ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

/*
CREATE SCHEMA IF NOT EXISTS webapp;
USE webapp;

DROP TABLE IF EXISTS User;
DROP TABLE IF EXISTS Piso;
DROP TABLE IF EXISTS Parking;

CREATE TABLE IF NOT EXISTS User(
	`name` VARCHAR(20) NOT NULL,
	`password` VARCHAR(40) NOT NULL,
	`esAdmin` BOOLEAN,
	`idUser` INT NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`idUser`));
INSERT INTO User(name, password, esAdmin) VALUES ('admin', 'admin', TRUE);

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
INSERT INTO Piso(plazas, fkParkin) VALUES (10, @id);*/

