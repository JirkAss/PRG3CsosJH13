PRG3CsosJH13
============

školní projekt malé forum

Step 1: Vytvoř databázi s názvem "forum"
Step 2: Vytvoř tyto tabulky

CREATE  TABLE IF NOT EXISTS `forum`.`post` (
  `id_post` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NOT NULL ,
  `body` VARCHAR(255) NOT NULL ,
  `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `author` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_post`) ,
  UNIQUE INDEX `id_post_UNIQUE` (`id_post` ASC) )
ENGINE = InnoDB


CREATE  TABLE IF NOT EXISTS `forum`.`topic` (
  `id_topic` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(255) NOT NULL ,
  `description` VARCHAR(255) NOT NULL ,
  `timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  PRIMARY KEY (`id_topic`) ,
  UNIQUE INDEX `id_topic_UNIQUE` (`id_topic` ASC) )
ENGINE = InnoDB

CREATE  TABLE IF NOT EXISTS `forum`.`user` (
  `id_user` INT NOT NULL AUTO_INCREMENT ,
  `e-mail` VARCHAR(45) NOT NULL ,
  `nickname` VARCHAR(45) NOT NULL ,
  `password` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`id_user`) ,
  UNIQUE INDEX `id_user_UNIQUE` (`id_user` ASC) )
ENGINE = InnoDB


Step 3: V souboru /src/model/db.php zadej svůj login do mysql admina

Gratulujeme! Nyní si můžeš prohlédnout jak funguje nejhorší fórum ve známém vesmíru :)
