create database php_teste;
use php_teste;
create table usuarios(
    id TINYINT unsigned NOT NULL primary key AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    senha CHAR(32) NOT NULL);