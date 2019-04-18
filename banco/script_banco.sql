-- MySQL Script generated by MySQL Workbench
-- Thu Apr 18 00:15:22 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema db_frutas
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_frutas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_frutas` DEFAULT CHARACTER SET utf8 ;
USE `db_frutas` ;

-- -----------------------------------------------------
-- Table `db_frutas`.`fruta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_frutas`.`fruta` (
  `id_fruta` INT NOT NULL AUTO_INCREMENT,
  `nome_fruta` VARCHAR(45) NOT NULL,
  `quantidade_fruta` INT NOT NULL,
  PRIMARY KEY (`id_fruta`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
