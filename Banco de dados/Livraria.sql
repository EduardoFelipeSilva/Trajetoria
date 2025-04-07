CREATE DATABASE Biblioteca;
GO

USE Biblioteca;
GO

CREATE TABLE tbGenero (
    CodGenero INT PRIMARY KEY IDENTITY(1,1),
    NomeGenero VARCHAR(50) NOT NULL
);

CREATE TABLE tbEditora (
    CodEditora INT PRIMARY KEY IDENTITY(1,1),
    NomeEditora VARCHAR(100) NOT NULL
);

CREATE TABLE tbAutor (
    CodAutor INT PRIMARY KEY IDENTITY(1,1),
    NomeAutor VARCHAR(100) NOT NULL
);

CREATE TABLE tbLivro (
    CodLivro INT PRIMARY KEY IDENTITY(1,1),
    NomeLivro VARCHAR(100) NOT NULL,
    NumPaginas INT,
    CodGenero INT,
    CodAutor INT,
    CodEditora INT,
    FOREIGN KEY (CodGenero) REFERENCES tbGenero(CodGenero),
    FOREIGN KEY (CodAutor) REFERENCES tbAutor(CodAutor),
    FOREIGN KEY (CodEditora) REFERENCES tbEditora(CodEditora)
);

-- Inserir dados na tabela tbGenero
INSERT INTO tbGenero (NomeGenero) VALUES
('Ficção'),
('Romance'),
('Tragédia');

-- Inserir dados na tabela tbEditora
INSERT INTO tbEditora (NomeEditora) VALUES
('Melhoramentos'),
('Globo'),
('Ática'),
('Companhia das Letras'),
('Abril');

-- Inserir dados na tabela tbAutor
INSERT INTO tbAutor (NomeAutor) VALUES
('Chico Buarque'),
('Jorge Amado'),
('J.K. Rowling'),
('William Shakespeare'),
('Monteiro Lobato'),
('Cora Coralina'),
('Clarice Lispector');

-- Inserir dados na tabela tbLivro
INSERT INTO tbLivro (NomeLivro, NumPaginas, CodGenero, CodAutor, CodEditora) VALUES
('Budapeste', 176, 2, 4, 1),  -- (Nome, Paginas, Genero, Autor, Editora)
('O Bicho-da-seda', 454, 2, 5, 3),
('Gabriela, Cravo e Canela', 214, 1, 2, 2),
('Reinações de Narizinho', 143, 2, 2, 5),
('Romeu e Julieta', 421, 1, 3, 4),
('O Irmão Alemão', 478, 1, 4, 1),
('Terras do Sem-Fim', 125, 1, 3, 2),
('Animais Fantásticos e Onde Habitam', 267, 2, 4, 3);

--a

SELECT COUNT(*) AS 'Total Livros'
FROM tbLivro
WHERE NomeLivro LIKE 'p%';
--b
SELECT MAX(tbLivro.NumPaginas) 'Maior numero de paginas'
FROM tbLivro

--c
SELECT MIN(tbLivro.NumPaginas) AS 'Menor numero de paginas'
FROM tbLivro

--d
SELECT AVG(tbLivro.NumPaginas) AS 'Media de paginas'
FROM tbLivro

--e
SELECT SUM(tbLivro.NumPaginas) AS 'Total paginas editora 1',
	tbEditora.NomeEditora AS 'Editora'
FROM tblivro
INNER JOIN tbEditora
	on tbEditora.CodEditora = tbLivro.CodEditora
	where tbEditora.CodEditora = 1
GROUP BY tbEditora.NomeEditora

--f
SELECT SUM(tbLivro.NumPaginas) AS 'Total paginas de livro que inicia com A'
FROM tblivro
	where NomeLivro LIKE 'a%'

--g
SELECT AVG(tbLivro.NumPaginas) AS 'Media paginas autor 3',
	tbAutor.NomeAutor AS 'Autor'
From tbLivro
INNER JOIN tbAutor
	ON tbAutor.CodAutor= tbLivro.CodAutor
	WHERE tbAutor.CodAutor = 3
GROUP BY tbAutor.NomeAutor

--h
SELECT COUNT(tbLivro.CodLivro) AS 'Total Livros editora 4',
	tbEditora.NomeEditora AS 'Editora'
FROM tblivro
INNER JOIN tbEditora
	on tbEditora.CodEditora = tbLivro.CodEditora
	where tbEditora.CodEditora = 4
GROUP BY tbEditora.NomeEditora

--I
SELECT AVG(tbLivro.NumPaginas) AS 'Media paginas Livros com a palavra estrela'
From tbLivro
	where NomeLivro LIKE '%estrela%'

--J
SELECT COUNT(tbLivro.NomeLivro) AS 'Livros com a palavra poema'
From tbLivro
	where NomeLivro LIKE '%poema%'

--K


SELECT * FROM tbGenero;
SELECT * FROM tbEditora;
SELECT * FROM tbAutor;
SELECT * FROM tbLivro;
