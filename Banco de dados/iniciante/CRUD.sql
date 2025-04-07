CREATE DATABASE db_escola;

USE db_escola;

CREATE TABLE tb_aluno (
id_aluno INT PRIMARY KEY IDENTITY(1,1),
nome_aluno VARCHAR (100) NOT NULL,
ra_aluno INT UNIQUE NOT NULL,
email_aluno VARCHAR(100)
);

INSERT INTO tbl_aluno (nome_aluno, ra_aluno,email_aluno, dt_nasc_aluno)
VALUES ('Fualno de Tal', 12345, 'fulanodetal123@gmail.com','1999-04-14'),
		('Ciclano Beltrano de Oliveira', 23456,'ci_bel@gmail.com','1998-03-15' );

ALTER TABLE tb_aluno ADD dt_nasc_aluno DATE;
ALTER TABLE tb_aluno ALTER COLUMN dt_nasc_aluno DATE NOT NULL;
ALTER TABLE tb_aluno DROP COLUMN dt_nasc_aluno; 
EXEC sp_rename 'dbo.tb_aluno', 'tbl_aluno',  'OBJECT';



UPDATE tb_aluno
SET nome_aluno = 'Marlene Matos'
WHERE id_aluno = 3;

DELETE FROM tbl_aluno ;
WHERE id_aluno = 4;
SELECT * FROM tbl_aluno;

INSERT INTO tbl_aluno (nome_aluno, ra_aluno,email_aluno, dt_nasc_aluno)
VALUES ('Silva Salro', 34567, 'fulanodetal123@gmail.com','1999-04-14'),
		('Jose santos', 45678,'ci_bel@gmail.com','1998-03-15' ),
		('Beltrano da silva', 56789,'beltarno@gmail.com', '1995-04-18'),
		('Tatiane Zack', 76789,'zakczika@gmail.com', '1995-04-18'),
		('Silver Tales', 86789,'tatales@gmail.com', '1995-04-18');

ALTER TABLE tbl_aluno ADD cpf VARCHAR (12);
ALTER TABLE tbl_aluno ADD endr VARCHAR (100);
ALTER TABLE tbl_aluno ADD telefone VARCHAR (14);

UPDATE tbl_aluno
SET cpf = '983484596'
WHERE id_aluno = 1;

UPDATE tbl_aluno
SET endr = 'Praça da praça do Parker '
WHERE id_aluno = 1;

UPDATE tbl_aluno
SET telefone = '1196978471'
WHERE id_aluno = 1;

UPDATE tbl_aluno
SET nome_aluno = 'Eduardo Felipe da Silva'
WHERE id_aluno = 1;

UPDATE tbl_aluno
SET nome_aluno = 'Fernanda Luiza Silva Santos'
WHERE id_aluno = 2;



