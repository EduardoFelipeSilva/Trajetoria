CREATE DATABASE bdCliente
--Comando para criar O banco de dados
/*
mais de uma linha de comentario
para apagar o banco de dados: DROP DATABASE nomedoBanco
*/
USE bdCliente

-- Criando entidades
CREATE TABLE tbCliente(
	codCliente INT PRIMARY KEY
	,nomeCliente VARCHAR(40)
	,rgCliente CHAR(9)
	,cpfCliente CHAR(11)
	,logradouroCliente VARCHAR(40)
	,numLogrCliente VARCHAR (6)
	,bairroCliente VARCHAR(40)
	,cepCliente CHAR(8)
	,cidadeCliente VARCHAR(40)
	,ufCliente CHAR(2)
	,complementoCliente VARCHAR(40)
	,paisCliente VARCHAR(40)
)

CREATE TABLE tbFoneCliente(
	codFoneCliente INT PRIMARY KEY
	,numFoneCliente VARCHAR (20)
	,codCliente INT FOREIGN KEY REFERENCES tbCliente (codCliente)
)
