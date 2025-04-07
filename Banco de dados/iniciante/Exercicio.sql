CREATE DATABASE DB_vilaChaves;


USE DB_vilaChaves;


CREATE TABLE tb_personagem (
id_personagem INT PRIMARY KEY IDENTITY (1,1),
nome_personagem VARCHAR (100) NOT NULL,
cpf_personagem INT  NOT NULL,
tel_personagem INT NOT NULL,
end_personagem VARCHAR (100) NOT NULL
);

INSERT INTO tb_personagem (nome_personagem,cpf_personagem,tel_personagem,end_personagem)
VALUES ('Kiko',00,111, 'Rua da Vila'),
		('Chaves',01,222, 'Barril da Vila'),
		('Pernalonga',1001,333, 'Mundo dos Desenhos'),
		('Patolino',1002,444, 'Mundo dos Desenhos'),
		('Eufrasino',1003,555, 'Mundo dos Desenhos');
		
SELECT * FROM tb_personagem;

ALTER TABLE tb_personagem ALTER COLUMN cpf_personagem VARCHAR(12);
ALTER TABLE tb_personagem ALTER COLUMN tel_personagem VARCHAR(13);

ALTER TABLE tb_personagem ADD email VARCHAR(30);
ALTER TABLE tb_personagem ADD dt_nasc DATE;
ALTER TABLE tb_personagem ADD sexo VARCHAR(15);
ALTER TABLE tb_personagem ADD profissao VARCHAR(60);
ALTER TABLE tb_personagem ADD estado_civil VARCHAR(30);


DELETE FROM tb_personagem
WHERE id_personagem = 5;

UPDATE tb_personagem
SET email = 'teste@gmail.com'
WHERE id_personagem = 2;

UPDATE tb_personagem
SET dt_nasc = '1998-04-29'
WHERE id_personagem = 2;

UPDATE tb_personagem
SET sexo = 'Masculino'
WHERE id_personagem = 15;

UPDATE tb_personagem
SET profissao = 'Desempregado'
WHERE id_personagem = 7;

UPDATE tb_personagem
SET estado_civil= 'solteiro'
WHERE id_personagem = 15;

UPDATE tb_personagem
SET cpf_personagem= '111222333455'
WHERE id_personagem = 15;


UPDATE tb_personagem
SET tel_personagem= '1112223334455'
WHERE id_personagem = 15;

SELECT * FROM tb_personagem;

INSERT INTO tb_personagem (nome_personagem,cpf_personagem,tel_personagem,end_personagem,email,dt_nasc,sexo,profissao,estado_civil)
VALUES 	('Seu Madruga',0015,2223, 'Rua da vila', 'teste@gmail.com', '1995-05-28', 'Feminino', 'Estudante', 'Solteira'),
		('dona Florinda',0016,2224, 'Rua da vila', 'teste@gmail.com', '1995-05-28', 'Feminino', 'Estudante', 'Solteira'),
		('Popis',0017,2225, 'Rua da vila', 'teste@gmail.com', '1995-05-28', 'Feminino', 'Estudante', 'Solteira'),
		('Ñoño',0018,2226, 'Rua da vila', 'teste@gmail.com', '1995-05-28', 'Feminino', 'Estudante', 'Solteira'),
		('Sr.Barriga',0019,2227, 'Rua da vila', 'teste@gmail.com', '1995-05-28', 'Feminino', 'Estudante', 'Solteira'),
		('professor Jirafales',0100,2228, 'Rua da vila', 'teste@gmail.com', '1995-05-28', 'Feminino', 'Estudante', 'Solteira'),
		('dona Clotilde',0101,2229, 'Rua da vila', 'teste@gmail.com', '1995-05-28', 'Feminino', 'Estudante', 'Solteira'),
		('Paty',0102,2230, 'Rua da vila', 'teste@gmail.com', '1995-05-28', 'Feminino', 'Estudante', 'Solteira'),
		('Jaiminho',0103,2231, 'Rua da vila', 'teste@gmail.com', '1995-05-28', 'Feminino', 'Estudante', 'Solteira'),
		('Fernada Luiza Silva Santos',010300112233,2231112233445, 'Rua da vila', 'teste@gmail.com', '1995-05-28', 'Feminino', 'Estudante', 'Solteira'),
		('Eduardo Felipe da Silva',010300112233,2231112233445, 'Rua da vila', 'teste@gmail.com', '1995-05-28', 'Feminino', 'Estudante', 'Solteira');