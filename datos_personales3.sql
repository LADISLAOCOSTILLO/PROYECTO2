
create database datos_personales4
USE datos_personales4
alter table datos_personales3
CREATE TABLE datospersonales (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(30) NOT NULL,
  apellido VARCHAR(30) NOT NULL,
  email VARCHAR(50),
	telefono VARCHAR(15)
);

select * from datospersonales