-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema firebird_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema firebird_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `firebird_db` DEFAULT CHARACTER SET utf8 ;
USE `firebird_db` ;

-- -----------------------------------------------------
-- Table `firebird_db`.`admin`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `firebird_db`.`admin` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(250) NOT NULL,
  `password` VARCHAR(250) NOT NULL,
  `firstname` VARCHAR(250) NOT NULL,
  `lastname` VARCHAR(250) NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `firebird_db`.`autor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `firebird_db`.`autor` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(150) NOT NULL,
  `lastname` VARCHAR(150) NOT NULL,
  `image` VARCHAR(150) NULL,
  `description` VARCHAR(500) NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `firebird_db`.`book`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `firebird_db`.`book` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(45) NOT NULL,
  `descripcion` VARCHAR(500) NULL,
  `image` VARCHAR(150) NULL,
  `autor_id` INT NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_book_autor_idx` (`autor_id` ASC),
  CONSTRAINT `fk_book_autor`
    FOREIGN KEY (`autor_id`)
    REFERENCES `firebird_db`.`autor` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `firebird_db`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `firebird_db`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(100) NOT NULL,
  `lastname` VARCHAR(100) NOT NULL,
  `email` VARCHAR(250) NOT NULL,
  `password` VARCHAR(250) NOT NULL,
  `fb_id` VARCHAR(250) NULL,
  `google_id` VARCHAR(250) NULL,
  `status` TINYINT NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `firebird_db`.`comment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `firebird_db`.`comment` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `comment` VARCHAR(250) NULL,
  `user_id` INT NOT NULL,
  `book_id` INT NOT NULL,
  `created_at` DATETIME NULL,
  `updated_at` DATETIME NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_comentario_user1_idx` (`user_id` ASC),
  INDEX `fk_comentario_book1_idx` (`book_id` ASC),
  CONSTRAINT `fk_comentario_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `firebird_db`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comentario_book1`
    FOREIGN KEY (`book_id`)
    REFERENCES `firebird_db`.`book` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
