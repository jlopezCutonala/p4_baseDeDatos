SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `directorio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `directorio` ;

-- -----------------------------------------------------
-- Table `directorio`.`contacto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `directorio`.`contacto` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `ap` VARCHAR(100) NULL ,
  `am` VARCHAR(100) NULL ,
  `nombre` VARCHAR(100) NOT NULL ,
  `domicilio` VARCHAR(256) NULL ,
  `colonia` VARCHAR(256) NULL ,
  `cp` VARCHAR(10) NULL ,
  `municipio` VARCHAR(256) NULL ,
  `estado` VARCHAR(100) NULL ,
  `pais` VARCHAR(100) NULL ,
  `mapa` VARCHAR(512) NULL ,
  `telefono` VARCHAR(20) NOT NULL ,
  `celular` VARCHAR(20) NULL ,
  `radio` VARCHAR(20) NULL ,
  `email` VARCHAR(512) NULL ,
  `observaciones` TEXT NULL ,
  `saved_at` DATETIME NULL ,
  `modified_in` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
