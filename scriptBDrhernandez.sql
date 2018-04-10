CREATE USER examen2 with encrypted password '1234';
CREATE DATABASE segundoexamenbd OWNER examen2;
\c segundoexamenbd
CREATE TABLE usuarios(
	id_usuario serial primary key, 
	nombre varchar(50) not null, 
	apaterno varchar(50) not null, 
	amaterno varchar(50) not null, 
	usuario varchar(50) not null, 
	contrasenia varchar(20) not null
);

CREATE TABLE autores(
	id_autor serial primary key, 
	nombre varchar(50) not null, 
	apaterno varchar(50) not null, 
	amaterno varchar(50) not null, 
	nacionalidad varchar(20) not null
);

CREATE TABLE libros(
	id_libro serial primary key, 
	titulo varchar(50) not null, 
	id_autor integer not null, 
	anioPublicacion char(4) not null, 

	FOREIGN KEY(id_autor) REFERENCES autores(id_autor)
);

CREATE USER Alta with encrypted password '1234';

GRANT insert ON usuarios TO Alta;
GRANT insert ON libros TO Alta;
GRANT insert ON autores TO Alta;


