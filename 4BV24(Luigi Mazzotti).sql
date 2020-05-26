DROP DATABASE IF EXISTS MolotesDaniel;
CREATE DATABASE MolotesDaniel;
USE MolotesDaniel;
CREATE TABLE datos(
Nombre text NOT NULL;
Apellido text NOT NULL;
Correo text NOT NULL;
Nombreusu text NOT NULL
); 
CREATE TABLE sugerencias(
Nombre text NOT NULL;
Correo text NOT NULL;
Nombreusu text NOT NULL
);
INSERT INTO sugerencias VALUES('','','');
