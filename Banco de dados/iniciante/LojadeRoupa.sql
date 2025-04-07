CREATE DATABASE bdLojadeRoupa

USE bdLojadeRoupa


CREATE TABLE tbCliente (
	codCliente INT PRIMARY KEY
	,nomeCliente VARCHAR(20)
	,cpfCliente VARCHAR(14)
)

CREATE TABLE tbVendedor (
	codVendedor INT PRIMARY KEY
	,nomeVendedor VARCHAR(20)
	,cofVendedor VARCHAR(40)
) 
CREATE TABLE tbVenda (
	codVenda INT PRIMARY KEY
	,dataVenda VARCHAR(12)
	,valorTotal VARCHAR(10)
	,codCliente INT FOREIGN KEY REFERENCES tbCliente (codCliente)
	,codVendedor INT FOREIGN KEY REFERENCES tbVendedor(codVendedor)
)
CREATE TABLE tbFormaPagto(
	codFormaPagto INT PRIMARY KEY
	,descFormaPagto VARCHAR(50)
)

CREATE TABLE tbParcela (
	codParcela INT PRIMARY KEY
	,valorParcela VARCHAR(10)
	,dtVenctoParcela VARCHAR(12)
	,codVenda INT FOREIGN KEY REFERENCES tbVenda (codVenda)
	,codFormaPagto INT FOREIGN KEY REFERENCES tbFormaPagto (codFormaPagto)
)
CREATE TABLE tbCategoria(
	codCategoria INT PRIMARY KEY
	,descCategoria VARCHAR(100)
)
CREATE TABLE tbProduto (
	codProduto INT PRIMARY KEY
	,descProduto VARCHAR(150)
	,valorProduto VARCHAR(10)
	,codCategoria INT FOREIGN KEY REFERENCES tbCategoria (codCategoria)
)
CREATE TABLE tbIntemVenda (
	codIntemVenda INT PRIMARY KEY
	,qtdeIntemVenda VARCHAR(10)
	,subTotalIntemVenda VARCHAR(20)
	,codVenda INT FOREIGN KEY REFERENCES tbVenda (codVenda)
	,codProduto INT FOREIGN KEY REFERENCES tbProduto (codProduto)
)

