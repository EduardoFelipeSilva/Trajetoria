CREATE DATABASE bdFabricaChocolate

USE bdFabricaChocolate

CREATE TABLE tbTipoProduto (
	codTipoProduto INT PRIMARY KEY
	,descTipoProduto VARCHAR(150)
)

CREATE TABLE tbTipoChocolate (
	codTipoChocolate INT PRIMARY KEY
	,descTipoChocolate VARCHAR(150)
)
CREATE TABLE tbDecoracao (
	codDecoracao INT PRIMARY KEY
	,descDecoracao VARCHAR(150)
)

CREATE TABLE tbProduto (
	codProduto INT PRIMARY KEY
	,nomeProduto VARCHAR(40)
	,gramaturaProduto VARCHAR(10)
	,codTipoChocolate INT FOREIGN KEY REFERENCES tbTipoChocolate(codTipoChocolate)
	,codTipoProduto INT FOREIGN KEY REFERENCES tbTipoProduto(codTipoProduto)
	,codDecoracao INT FOREIGN KEY REFERENCES tbDecoracao(codDecoracao)
)
CREATE TABLE tbCliente (
	codCliente INT PRIMARY KEY
	,nomeCliente VARCHAR(20)
	,rgCliente VARCHAR(10)
	,logradouroCliente VARCHAR (20)
	,numLogrCliente VARCHAR(5)
	,cepCliente VARCHAR(10)
	,bairroCliente VARCHAR (20)
	,cidadeCliente VARCHAR(15)
	,ufCliente VARCHAR(3)
	,complementoCliente VARCHAR (10)
)
CREATE TABLE tbEncomenda (
	codEncomenda INT PRIMARY KEY
	,dataEncomenda VARCHAR(8)
	,horaEncomenda VARCHAR(8)
	,dataEntregaEncomenda VARCHAR (12)
	,codCliente INT FOREIGN KEY REFERENCES tbCliente(codCliente)
	,estadoEncomenda VARCHAR(20)
	,valorEncomenda VARCHAR (10)
)
CREATE TABLE tbItensEncomenda (
	codItensEncomenda INT PRIMARY KEY
	,codProduto INT FOREIGN KEY REFERENCES tbProduto(codProduto)
	,codEncomenda INT FOREIGN KEY REFERENCES tbEncomenda(codEncomenda)
) 

CREATE TABLE tbFoneCliente(
	codFoneCliente INT PRIMARY KEY
	,numFoneCliente VARCHAR(14)
	,codCliente INT FOREIGN KEY REFERENCES tbCliente(codCliente)
	
)