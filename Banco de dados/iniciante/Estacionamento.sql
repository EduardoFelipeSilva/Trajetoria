/* CRIANDO O BANCO */ 
CREATE DATABASE bdEstacionamento /**/


/* criando as tabelas */ 
CREATE TABLE tbvaga (
	codvaga INT PRIMARY KEY identity (1,1) not null /* NOT NULL PARA ELEMENTEO DE PREENCHIMENTO OBRIGATORIO */
	,descVaga VARCHAR(50)
	,numVaga VARCHAR(4)
);

CREATE TABLE tbFuncionario (
	codFuncionario  INT PRIMARY KEY identity (1,1) not null
	,nomeFuncionario  VARCHAR(50)
	,cfpFuncionario  VARCHAR(14)
	,telefoneFuncionario  VARCHAR(12)
	,logradouroFuncionario  VARCHAR(40)
	,cidadeFuncionario  VARCHAR(20)
	,bairroFuncionario  VARCHAR(40)
	,numLograFuncionario  VARCHAR(6)
	,ufFuncionario  VARCHAR(2)
	,paisFuncionario  VARCHAR(10)
	,dataNascFuncionario  VARCHAR(14)

) ;
CREATE TABLE tbVeiculo (
	codVeiculo INT PRIMARY KEY identity (1,1) not null
	,placaVeiculo VARCHAR(12)
	,modeloVeiculo VARCHAR(50)
	,corVeiculo VARCHAR(15)
	
);

CREATE TABLE tbFormaPagto(
	codFormaPagto INT PRIMARY KEY identity (1,1) not null
	,descFormaPagto VARCHAR(50)
);

CREATE TABLE tbTicket ( 
	codTicket  INT PRIMARY KEY identity (1,1) not null 
	,horaEntradaTicket VARCHAR(10)
	,horaSaidaTicket VARCHAR(10)
	,codVeiculo INT FOREIGN KEY REFERENCES tbVeiculo (codVeiculo)
	,codfuncionario INT FOREIGN KEY REFERENCES tbFuncionario (codFuncionario)
	,codVaga INT FOREIGN KEY REFERENCES tbVaga (codvaga)
	,codFormaPagto INT FOREIGN KEY REFERENCES tbFormaPagto (codFormaPagto)
);
/*ACABANDO AS TABELAS */

/* INSERINDO DADOS NA TABELA
USE NOME DA TABELE */
USE bdEstacionamento
/* inserindo dados*/
Insert Into tbVaga (descVaga,numVaga)
	VALUES ('Sob o Sol', 1),('Sob o Sol', 2), ('Sob o Sol', 3), ('Coberto', 4), ('Sob o Sol', 5);

Insert Into tbFuncionario (nomefuncionario,cfpFuncionario,telefonefuncionario,logradourofuncionario,cidadefuncionario,bairrofuncionario,numLografuncionario,uffuncionario,paisfuncionario,datanascfuncionario)
	VALUES ('Eduardo', 532346711, 11400282, 'Florinda', 'Sao Paulo', 'Luz', 78, 'SP', 'Brasil', '22/04/1993') , ('Fernanda', 632346371, 12400282, 'Florinda', 'Sao Paulo', 'Luz', 88, 'SP', 'Brasil', '24/04/1994') ,
	('Vitor', 732346711, 71408922, 'Florinda', 'Sao Paulo', 'Luz', 98, 'SP', 'Brasil', '27/04/1998') ,('Felipe', 432346711, 19400922, 'Florinda', 'Sao Paulo', 'Luz', 32, 'SP', 'Brasil', '8/04/1993') ,
	('Murilo', 532346711, 11408922, 'Florinda', 'Sao Paulo', 'Luz', 78, 'SP', 'Brasil', '5/04/1993') , ('Eliezer', 532346711, 11428922, 'Florinda', 'Sao Paulo', 'Luz', 78, 'SP', 'Brasil', '22/04/1967');
	/**/
	Insert Into tbVeiculo (placaVeiculo,modeloVeiculo,corVeiculo)
	VALUES ('BRA2E19', 'Plymouth Superbird', 'LARANJA'), ('EUA2D19', ' Porsche 911 GT1', 'BRANCO'),('CAN2F19', 'McLaren 620 R', 'PRATA COM PRETO'),('CHN2G19', 'Ferrari F50', 'VERMELHO'), ('LUX2H19', 'Mercedes-Benz AMG CLK GTR', 'PRATA');

	Insert Into tbFormaPagto (descFormaPagto)
	VALUES ('CARTÃO'), ('DINHEIRO'), ('PIX'), ('FIADO'), ('BOLETO');
	
	Insert Into tbTicket (horaEntradaTicket,horaSaidaTicket,codVeiculo, codfuncionario, codVaga, codFormaPagto)
	VALUES ('12:00', '15:00', 1, 1, 1, 1), ('08:00', '20:00', 2, 2, 2, 2), ('15:15', '02:00', 3, 3, 3, 3), ('20:00', '13:00', 4, 4 , 4, 4), ('17:00', '07:00', 5, 5, 5, 5);

	/* vendo as tabelas */
	USE bdEstacionamento;
	SELECT * FROM tbVaga;
	SELECT * FROM tbFuncionario;
	SELECT * FROM tbVeiculo;
	SELECT * FROM tbFormaPagto;
	SELECT * FROM tbTicket;

	


