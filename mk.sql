CREATE SCHEMA `mk` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;

CREATE TABLE IF NOT EXISTS `mk`.`klient` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `fam` VARCHAR(45) NULL DEFAULT NULL,
  `name` VARCHAR(45) NULL DEFAULT NULL,
  `otch` VARCHAR(45) NULL DEFAULT NULL,
  `data_b` DATE NOT NULL,
  `passport` VARCHAR(100) NULL DEFAULT NULL,
  `mesto_rab` VARCHAR(100) NULL DEFAULT NULL,
  `mest_jit` VARCHAR(100) NULL DEFAULT NULL,
  `tel` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
DEFAULT CHARACTER SET = utf8;
 
-- -----------------------------------------------------
-- Table `mk`.`jaloba`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mk`.`jaloba` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
DEFAULT CHARACTER SET = utf8;
 
-- -----------------------------------------------------
-- Table `mk`.`pokazatel_jal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mk`.`pokazatel_jal` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `mk`.`pokazatel_live`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mk`.`pokazatel_live` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `mk`.`pokazatel_zabol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mk`.`pokazatel_zabol` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `mk`.`pokazatel_osm`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mk`.`pokazatel_osm` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `mk`.`pokazatel_obsl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mk`.`pokazatel_obsl` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `mk`.`priem`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mk`.`priem` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `data` DATE NOT NULL,
  `klient_id` INT(11) NOT NULL,
  `jaloba_id` INT(11) NOT NULL,
  `pokazatel_jal_id` INT(11) NOT NULL,
  `pokazatel_live_id` INT(11) NOT NULL,
  `pokazatel_zabol_id` INT(11) NOT NULL,
  `pokazatel_osm_id` INT(11) NOT NULL,
  `pokazatel_obsl_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `klient_id`, `jaloba_id`,`pokazatel_jal_id`,`pokazatel_live_id`,
  `pokazatel_zabol_id`,`pokazatel_osm_id`,`pokazatel_obsl_id`),
  INDEX `fk_priem_jaloba_idx` (`jaloba_id` ASC),
  INDEX `fk_priem_pokazatel_jal_idx` (`pokazatel_jal_id` ASC),
  INDEX `fk_priem_pokazatel_live_idx` (`pokazatel_live_id` ASC),
  INDEX `fk_priem_pokazatel_zabol_idx` (`pokazatel_zabol_id` ASC),
  INDEX `fk_priem_pokazatel_osm_idx` (`pokazatel_osm_id` ASC),
  INDEX `fk_orders_pokazatel_obsl_idx` (`pokazatel_obsl_id` ASC),
  INDEX `fk_orders_klient_idx` (`klient_id` ASC),
  CONSTRAINT `fk_fk_priem_jaloba`
    FOREIGN KEY (`jaloba_id`)
    REFERENCES `mk`.`jaloba` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_fk_priem_pokazatel_jal`
    FOREIGN KEY (`pokazatel_jal_id`)
    REFERENCES `mk`.`pokazatel_jal` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,  
  CONSTRAINT `fk_fk_priem_pokazatel_live`
    FOREIGN KEY (`pokazatel_live_id`)
    REFERENCES `mk`.`pokazatel_live` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,  
  CONSTRAINT `fk_fk_priem_pokazatel_zabol`
    FOREIGN KEY (`pokazatel_zabol_id`)
    REFERENCES `mk`.`pokazatel_zabol` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,    
  CONSTRAINT `fk_fk_priem_pokazatel_osm`
    FOREIGN KEY (`pokazatel_osm_id`)
    REFERENCES `mk`.`pokazatel_osm` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,    
  CONSTRAINT `fk_fk_priem_pokazatel_obsl`
    FOREIGN KEY (`pokazatel_obsl_id`)
    REFERENCES `mk`.`pokazatel_obsl` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,    
  CONSTRAINT `fk_priem_klient`
    FOREIGN KEY (`klient_id`)
    REFERENCES `mk`.`klient` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
DEFAULT CHARACTER SET = utf8;