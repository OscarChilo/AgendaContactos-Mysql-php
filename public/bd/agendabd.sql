---
-----------crea la base de datos BD_AGENDA
CREATE SCHEMA `bd_agenda` DEFAULT CHARACTER SET utf8mb4 ;
---------------------------------
-----------Funcion que hace se use  la base de datos
USE use_bd;
---------------------------------

-----------crea la tabla de T_CATEGORIA
CREATE TABLE `bd_agenda`.`t_categoria` (
  `id_categoria` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NULL,
  `descripcion` VARCHAR(40) NULL,
  `fecha_insert` DATETIME NOT NULL DEFAULT now(),
  PRIMARY KEY (`id_categoria`));

----------------------------------
-----------crea la tabla de T_CONTACTO

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

---------GENERA LOS FOREIGN KEYS

ALTER TABLE `bd_agenda`.`t_contacto` 
ADD INDEX `fkContactoCategoria_idx` (`id_categoria` ASC);
;
ALTER TABLE `bd_agenda`.`t_contacto` 
ADD CONSTRAINT `fkContactoCategoria`
  FOREIGN KEY (`id_categoria`)
  REFERENCES `bd_agenda`.`t_categoria` (`id_categoria`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;

------------------------------------

---------ELIMINA UNA CATEGORIA

DELETE FROM `bd_agenda`.`t_categoria` WHERE (`id_categoria` = '4');

-----------------------------------------
---------INSERTA UNA CATEGORIA

INSERT INTO `bd_agenda`.`t_categoria` (`nombre`, `descripcion`) 
             VALUES ('ProfesoresUnsa', 'Mis profesores de universidad');

---------INSERTA CONTACTOS

INSERT INTO `bd_agenda`.`t_CONTACTO` (`id_categoria`, `nombre`, `paterno`, `telefono`, `email`)
             VALUES ('2', 'victor', 'garcia', '9658422113', 'vixtor@gmail.com');
INSERT INTO `bd_agenda`.`t_CONTACTO` (`id_categoria`, `nombre`, `paterno`, `telefono`, `email`)
             VALUES ('1', 'fredi', 'chilo', '16446461', 'fredi@gmail.com');
INSERT INTO `bd_agenda`.`t_CONTACTO` (`id_categoria`, `nombre`, `paterno`, `telefono`, `email`) 
             VALUES ('2', 'elmer ', 'saico', '646461', 'elmer@gmail.com');
