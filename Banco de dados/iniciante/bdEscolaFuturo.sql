CREATE DATABASE bdEscolaFuturo
-- Para apagar o banco|- DROP DATABASE bdEscolaFuturo

USE bdEscolaFuturo

--Tabela Aluno
CREATE TABLE tbAluno (
	codAluno INT PRIMARY KEY
	,nomeAluno VARCHAR(40)
	,rgAluno VARCHAR(14)
	,dataNascimento DATE
)

--Fone Aluno
CREATE TABLE tbFoneAluno(
	codFoneAluno INT PRIMARY KEY
	,numFoneAluno VARCHAR(14)
	-- Pra puxar dados de outra tabela
	,codAluno INT FOREIGN KEY REFERENCES 
	tbAluno(codAluno)
)
SELECT * FROM tbAluno 
-- Para mostrar o conteudo da tabela
INSERT INTO tbAluno(codAluno,nomeAluno,rgAluno,dataNascimento)
VALUES (1,'Eduardo Felipe','1234567-9','27/04/1998')
	,	(2,'Fernanda Luiza','123456789-0','19-09-2004')
	,	(3,'Clodoaldo Bastos','12345690-9','12-12-12')

SELECT * FROM tbFoneAluno
INSERT INTO tbFoneAluno (codFoneAluno,numFoneAluno,codAluno)
VALUES (1,'2345-1234',1)
	, (2,'666-333',1)
	, (3,'785-9843',2)
	, (4,'4002-8922',2)
	, (5,'666-333',3)
	
/*
Para colocar valores nas tabelas 
	INSERT INTO (tbcliente(nomecliente,emailcliente)

Para atualizar um dado existente
	UPDATE Nome_da_tabela
	SET nomeCliente = 'Antonio Santos', emailCliente = 'email@exemplo'
(neste exemplo todos os nomes da tabela foram alterados, para que isso nao aconteca devems informar a clausula where, funciona como if)
	WHERE codCliente = 1
Deletar um registo
	DELETE FROM nome_da_tabela
	where codCliente = 1
*/