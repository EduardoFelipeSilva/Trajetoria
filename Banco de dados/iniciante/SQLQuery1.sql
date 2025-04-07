CREATE DATABASE db_Funcionario; 

CREATE TABLE tb_CadFuncionario (
cod_fun INT PRIMARY KEY IDENTITY (1,1), 
nome_fun VARCHAR (50) NOT  NULL,
depto_fun CHAR (30) NOT NULL, 
funcao_fun CHAR (30)NOT NULL , 
salario_fun DECIMAL (10,2) NOT NULL,
dependente_fun SMALLINT 
); 

INSERT INTO tb_CadFuncionario(
nome_fun,depto_fun,funcao_fun,salario_fun,dependente_fun) 
VALUES ('Eduardo','TI','GAROTO DE PROGRAMA',5000,6),
('Fernanda','TI','SENIOR',300000,0),
('Davi','programador','Analista',3000,0),
('Vinicius','Desing','Junior',20000,0),
('Vitor','RH','Psicologo',40000,0),
('Murilo','DESING','Analista',10000,0),
('Danilo','TI','Infraestrutura',30000,0),
('Alessandra','programador','Analista',70000,2),
('Daniel','RH','Recrutamento',80000,0),
('Felipe','TI','Analista',30000,0),
('Carlens','Cozinheiro','Hambuguer',400000,4),
('Ronnie','DESING','Estagiario',800,0),
('Andre Santos','programador','Analista',100000,3),
('Sarah','ATENDIMENTO','Analista',1200,2),
('Pedro','ATENDIMENTO','Junior',600,4),
('Inacio Silva','TI','Estagiario',400,2),
('Jhonata','RELACOES INTERNACIONAIS','Junior',5000,3),
('Gabriella Silva','RELACOES INTERNACIONAIS','Estagiario',600,0),
('Hygor Santos','MARKETING','Senior',2000,0),
('Vinicius dois','MARKETING','Junior',1000,0);

/*1 */
SELECT cod_fun, nome_fun, salario_fun + 250.00 AS salarioAjustado
FROM tb_CadFuncionario;

/*2*/
SELECT cod_fun AS Codigo,nome_fun AS "Nome Funcionario", salario_fun AS "Salarío R$"
from tb_CadFuncionario

/*3*/
SELECT * 
from tb_CadFuncionario
where "funcao_fun" = 'Analista'

/*4 */
SELECT * 
from tb_CadFuncionario
where "salario_fun" >=17000

/*5 */
SELECT * 
from tb_CadFuncionario
where "salario_fun" > 17000

/*6 */
SELECT * 
from tb_CadFuncionario
where "salario_fun" < 17000

/*7 */
SELECT * 
from tb_CadFuncionario
where "salario_fun" =17000

/*8 */
SELECT * 
from tb_CadFuncionario
where "funcao_fun" = 'Analista' and "depto_fun" = 'programador'

/*9 */
SELECT * 
from tb_CadFuncionario
where "funcao_fun" = 'Analista' and "depto_fun" = 'programador' and "salario_fun" > 12000

/*10 */
SELECT * 
from tb_CadFuncionario
where "funcao_fun" != 'Analista' and "depto_fun" != 'programador'

/*11*/
SELECT*
FROM tb_CadFuncionario
WHERE dependente_fun BETWEEN 2 AND 4;

/*12 */
SELECT*
FROM tb_CadFuncionario
WHERE dependente_fun BETWEEN 2 AND 4 AND salario_fun <20000;

/*13 */
SELECT*
FROM tb_CadFuncionario
WHERE dependente_fun < 2 OR dependente_fun >3 ;

/*14 */
SELECT *
FROM tb_CadFuncionario
WHERE nome_fun LIKE '%silva';

/*15 */
SELECT *
FROM tb_CadFuncionario
WHERE nome_fun LIKE 'silv%';

/*16 */
SELECT *
FROM tb_CadFuncionario
WHERE nome_fun LIKE '%santos';

/*17 */
SELECT *
FROM tb_CadFuncionario
WHERE salario_fun <> 2000.00;

/*18 */
SELECT SUM (salario_fun) AS "soma dos salarios"
FROM tb_CadFuncionario;

/*19*/
SELECT*
FROM tb_CadFuncionario
WHERE dependente_fun = 0;

/*20 */
SELECT*
FROM tb_CadFuncionario
WHERE nome_fun NOT LIKE '%santos';


