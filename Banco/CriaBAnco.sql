-- Deleta o banco de dados caso exista
DROP DATABASE IF EXISTS IFSP;

--Cria o banco de dados caso não exista
CREATE DATABASE IF NOT EXISTS IFSP;

--Seleciona o banco de dados
USE IFSP;

--Cria tabela cidade
CREATE TABLE Cidade(
id int auto_increment,
nome VARCHAR(100),
estado VARCHAR(02),
PRIMARY KEY(id)
);

--Cria tabela cliente
CREATE TABLE Cliente(
id INT AUTO_INCREMENT,
nome VARCHAR(100),
email VARCHAR(100),
senha VARCHAR(050),
ativo BOOL,
id_cidade INT,
PRIMARY KEY (id),
CONSTRAINT FK_ClienteCidade foreign key (id_cidade) references Cidade(id)
);