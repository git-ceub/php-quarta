CREATE DATABASE exemplo;

use exemplo;

CREATE TABLE aluno (
  id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome varchar(200) NOT NULL,
  idade int NOT NULL
);

CREATE table usuario (
	id INTEGER auto_increment primary key,
    login varchar(100) not null,
    senha varchar (100) not null
);
