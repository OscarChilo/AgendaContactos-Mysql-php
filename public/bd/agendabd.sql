CREATE SCHEMA `bd_agenda` DEFAULT CHARACTER SET utf8mb4 ;
---------------------------------
USE use_bd;
---------------------------------
CREATE TABLE `bd_agenda`.`t_categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NULL,
  `descripcion` VARCHAR(40) NULL,
  `fecha_insert` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`id_categoria`));

----------------------------------

CREATE TABLE `bd_agenda`.`t_contacto` (
  `id_contacto` INT NOT NULL AUTO_INCREMENT,
  `id_categoria` INT NULL,
  `nombre` VARCHAR(30) NULL,
  `paterno` VARCHAR(30) NULL,
  `telefono` VARCHAR(20) NULL,
  `email` VARCHAR(20) NULL,
  `fecha` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`id_contacto`));

-----------------------------------

ALTER TABLE `bd_agenda`.`t_contacto` 
ADD INDEX `fkContactoCategoria_idx` (`id_categoria` ASC);
;
ALTER TABLE `bd_agenda`.`t_contacto` 
ADD CONSTRAINT `fkContactoCategoria`
  FOREIGN KEY (`id_categoria`)
  REFERENCES `bd_agenda`.`t_categoria` (`id_categoria`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;