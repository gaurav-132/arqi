//Gaurav 30-11-2022

CREATE TABLE `arqi`.`customers` (`id` INT NOT NULL AUTO_INCREMENT , `first_name` VARCHAR(255) NOT NULL , `last_name` VARCHAR(255) NOT NULL , `email` VARCHAR(50) NOT NULL , `phone_no` VARCHAR(10) NOT NULL , `address_1` VARCHAR(250) NOT NULL , `address_2` VARCHAR(250) NULL DEFAULT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

//gaurav 1-11-2022

CREATE TABLE `arqi`.`products` (`id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(250) NOT NULL , `price` VARCHAR(11) NOT NULL , `description` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;