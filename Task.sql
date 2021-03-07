-- create schema task;
use task;
CREATE TABLE `task`.`messages` (
  `ID_Mes` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(50) NOT NULL,
  `message` VARCHAR(512) NOT NULL,
  `time_create` DATETIME NOT NULL,
  PRIMARY KEY (`ID_Mes`),
  INDEX `Index_Time` (`time_create` DESC) VISIBLE);

select * from messages;
-- drop table messages;