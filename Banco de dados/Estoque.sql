CREATE DATABASE bdEstoque

USE bdEstoque 


CREATE TABLE tbFornecedor(
	codFornecedor INT PRIMARY KEY IDENTITY(1,1),
	nomeForncedor VARCHAR (40),
	contatoForncedor VARCHAR(60),
);

CREATE TABLE tbCliente(
	codCliente INT PRIMARY KEY IDENTITY(1,1),
	nomeCliente VARCHAR (50),
	cpfCliente VARCHAR (50),
	emailCliente VARCHAR (80),
	sexoCliente VARCHAR (10),
	dataNascimento DATE,
	);

CREATE TABLE tbFabricante(
	codFabricante INT PRIMARY KEY IDENTITY(1,1),
	nomeFabricante VARCHAR (40), 
);

CREATE TABLE tbVenda(
	codVenda INT PRIMARY KEY IDENTITY(1,1),
	dataVenda DATE,
	valorTotalVenda VARCHAR(40),
	codCliente INT FOREIGN KEY REFERENCES tbCliente(codCliente),
	);

CREATE TABLE tbProduto(
	codProduto INT PRIMARY KEY IDENTITY(1,1),
	descricaoProduto VARCHAR (100),
	valorProtudo decimal (10,2),
	quantidadeProtudo INT,
	codFabricante INT FOREIGN KEY REFERENCES tbFabricante(codFabricante),
	codFornecedor INT FOREIGN KEY REFERENCES tbFornecedor(codFornecedor),
);

CREATE TABLE tbIntesVenda(
	codItensVenda INT PRIMARY KEY IDENTITY(1,1),
	quantidadeItensVenda INT,
	subTotalItensVenda DECIMAL(10,2),
	codVenda INT FOREIGN KEY REFERENCES tbVenda(codVenda),
	codProduto INT FOREIGN KEY REFERENCES tbProduto(codProduto),
);
SET IDENTITY_INSERT bdEstoque OFF

INSERT INTO tbCliente VALUES (
	'Amando José Santana',12345678900,'amandojsantana@outlook.com','m','1961-02-21',
	'Sheila Carvalho Leal',45678909823,'scarvalho@ig.com.br','f','1978-09-13',
	'Carlos Henrique Souza',76598278299,'chenrique@ig.com.br)','m','1981-09-08',
	'Maria Aparecida Souza',87365309899,'mapdasouza@outlook.com','f','1962-07-07',
	'Adriana Nogueira Silva',76354309388,'drica1977@ig.com.br','f','1977-04-09',
	'Paulo Henrique Silva',87390123111,'phsilva80@hotmail.com','m','1987-02-0'
);

INSERT INTO tbFabricante VALUES (
	'Unilever',
	'P&G',
	'Bunge'
);

INSERT INTO tbFornecedor VALUES (
	'Atacadão','Carlos Santos',
	'Assai','Maria Stella',
	'Roldão','Paulo César'
);

INSERT INTO tbProduto VALUES (
	'Amaciante Downy',5.76,1500,2,1,
	'Amaciante Confort',5.45,2300,1,1,
	'Sabão em pó OMO',5.99,1280,1,2,
	'Margarina Qually',4.76,2500,3,1,
	'Salsicha Hot Dog Sadia',6.78,2900,3,2,
	'Mortadela Perdigão',2.50,1200,3,3,
	'Hambuger Sadia',9.89,1600,3,1,
	'Fralda Pampers',36.00,340,2,3,
	'Xampu Seda',5.89,800,1,2,
	'Condicionador Seda',6.50,700,1,3
);

INSERT INTO tbVenda VALUES (
	'2014-02-01',4500.00,1,
	'2014-02-03',3400.00,1,
	'2014-02-10',2100.00,2,
	'2014-02-15',2700.00,3,
	'2014-03-17',560.00,3,
	'2014-04-09',1200.00,4,
	'2014-05-07',3500.00,5,
	'2014-05-07',3400.00,1,
	'2014-05-05',4000.00,2
);

INSERT INTO tbIntesVenda VALUES (
	1,1,200,1500.00,
	1,2,300,3000.00,
	2,4,120,1400.00,
	2,2,200,1000.00,
	2,3,130,1000.00,
	3,5,200,2100.00,
	4,4,120,1000.00,
	4,5,450,700.00,
	5,5,200,560.00,
	6,7,200,600.00,
	6,6,300,600.00,
	8,1,300,2500.00,
	8,2,200,1000.00,
	9,6,250,1700.00,
	9,5,200,1700.00,
	10,4,1000,4000.00
);
use bdEstoque
select descricaoProduto as 'Descricao', nomeFabricante
as 'Fabricante' from tbProduto
	inner join tbFabricante
		on tbProduto.codFabricante =
			tbFabricante.codFabricante

use bdEstoque
select descricaoProduto as 'Descricao', nomeForncedor 
as 'Fornecedor' from tbFornecedor
	inner join tbFornecedor
		on tbProduto.codFornecedor =
			tbFornecedor.codFornecedor

use bdEstoque
select quantidadeProduto as 'Quantidade', nomeFabricante
as 'Fabricante' from tbProduto
	inner join tbFabricante
		on tbProduto.codFabricante =
			tbFabricante.codFabricante




