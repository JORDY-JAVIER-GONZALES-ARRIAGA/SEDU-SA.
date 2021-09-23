drop database registro;
create database registro;
USE registro;

DROP TABLE IF EXISTS datos;

CREATE TABLE datos (
  codigo int(11) NOT NULL AUTO_INCREMENT,
  cedula varchar(10) DEFAULT NULL,
  nombre varchar(50) DEFAULT NULL,
  apellido varchar(50) DEFAULT NULL,
  correo varchar(50) DEFAULT NULL,
  cedular varchar(10) DEFAULT NULL,
  rutafoto varchar(100) DEFAULT NULL,
  PRIMARY KEY (codigo)
);




