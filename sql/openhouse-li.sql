-- MySQL Script generated by MySQL Workbench
-- mar 23 jul 2019 19:04:03 CST
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema openhouse
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema openhouse
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `openhouse` DEFAULT CHARACTER SET utf8 ;
USE `openhouse` ;

-- -----------------------------------------------------
-- Table `openhouse`.`proyectos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `openhouse`.`proyectos` ;

CREATE TABLE IF NOT EXISTS `openhouse`.`proyectos` (
  `id_proyecto` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  `cohorte` VARCHAR(45) NOT NULL,
  `nivel` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_proyecto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `openhouse`.`preguntas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `openhouse`.`preguntas` ;

CREATE TABLE IF NOT EXISTS `openhouse`.`preguntas` (
  `id_pregunta` INT NOT NULL AUTO_INCREMENT,
  `pregunta` VARCHAR(256) NOT NULL,
  `categoria` SET('DISEÑO', 'PRESENTACION', 'MANEJO DEL TEMA', 'FUNCIONABILIDAD') NOT NULL,
  PRIMARY KEY (`id_pregunta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `openhouse`.`respuestas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `openhouse`.`respuestas` ;

CREATE TABLE IF NOT EXISTS `openhouse`.`respuestas` (
  `id_respuesta` INT NOT NULL AUTO_INCREMENT,
  `id_proyecto` INT NOT NULL,
  `id_pregunta` INT NOT NULL,
  `calificacion` VARCHAR(512) NOT NULL,
  PRIMARY KEY (`id_respuesta`),
  INDEX `fk_proyectos_idx` (`id_proyecto` ASC),
  INDEX `fk_preguntas_idx` (`id_pregunta` ASC),
  CONSTRAINT `fk_proyectos`
    FOREIGN KEY (`id_proyecto`)
    REFERENCES `openhouse`.`proyectos` (`id_proyecto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_preguntas`
    FOREIGN KEY (`id_pregunta`)
    REFERENCES `openhouse`.`preguntas` (`id_pregunta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;