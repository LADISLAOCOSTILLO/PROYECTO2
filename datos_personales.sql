
create database datos_personales
USE datos_personales
alter table T_datospersonales4
CREATE TABLE T_datospersonales5 (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre_tarea VARCHAR(30) NOT NULL,
  descripcion VARCHAR(150) NOT NULL,
  email VARCHAR(50),
  fecha dateTIME,
	telefono VARCHAR(15)
);

select * from T_datospersonales4