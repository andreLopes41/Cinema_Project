-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema cinema
-- -----------------------------------------------------

CREATE SCHEMA IF NOT EXISTS cinema DEFAULT CHARACTER SET utf8;
USE cinema;

-- -----------------------------------------------------
-- Table adm
-- -----------------------------------------------------

CREATE TABLE adm(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(60) NOT NULL,
    email VARCHAR(45),
    senha VARCHAR(20),
    PRIMARY KEY(id)
)DEFAULT CHARSET = utf8; 


-- -----------------------------------------------------
-- Table clientes
-- -----------------------------------------------------

CREATE TABLE cliente(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(60) NOT NULL,
    email VARCHAR(45),
    senha VARCHAR(20),
    telefone VARCHAR(20),
    sexo VARCHAR(10),
    data_nasc DATE,
    cpf VARCHAR(15),
    PRIMARY KEY(id)
)DEFAULT CHARSET = utf8; 

-- -----------------------------------------------------
-- Table filme
-- -----------------------------------------------------

CREATE TABLE filme(
	id INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(60) NOT NULL,
    genero VARCHAR(45),
    duracao INT(3),
    distribuidor VARCHAR(45),
    lancamento DATE,
    PRIMARY KEY(id)
)DEFAULT CHARSET = utf8; 