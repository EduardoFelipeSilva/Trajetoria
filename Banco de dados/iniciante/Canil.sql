CREATE DATABASE bdCanil

USE bdCanil

CREATE TABLE tbVacina (
	codVacina INT PRIMARY KEY
	,nomeVacina VARCHAR(20)
	,validadeVacina VARCHAR(10)
)

CREATE TABLE tbMolestia (
	codMolestia INT PRIMARY KEY
	,descMolestia VARCHAR(150)
)
CREATE TABLE tbRaca (
	codRaca INT PRIMARY KEY
	,desRaca VARCHAR(150)
)
CREATE TABLE tbDono (
	codDono INT PRIMARY KEY
	,nomeDono VARCHAR(30)
	,rgDono VARCHAR(10)
	,logradouroDono VARCHAR (20)
	,numLogrDono VARCHAR(5)
	,cepCDono VARCHAR(10)
	,bairroDono VARCHAR (20)
	,cidadeDono VARCHAR(15)
	,ufDono VARCHAR(3)
	,complementoDono VARCHAR (10)
)
CREATE TABLE tbDoacao (
	codDoacao INT PRIMARY KEY
	,horaDoacao VARCHAR(12)
	,statusDoacao VARCHAR(50)
	,codDono INT FOREIGN KEY REFERENCES tbdono(codDono)
)
CREATE TABLE tbFoneDono(
	codFoneDono INT PRIMARY KEY
	,numFoneDono VARCHAR(14)
	,codDono INT FOREIGN KEY REFERENCES tbDono(codDono)
)
CREATE TABLE tbCachorro (
	codCachorro INT PRIMARY KEY
	,nomeCachorro VARCHAR(20)
	,idadeCachorro VARCHAR(10)
	,codRaca INT FOREIGN KEY REFERENCES tbRaca (codRaca)
	,codDoacao INT FOREIGN KEY REFERENCES tbDoacao(codDoacao)
)
CREATE TABLE tbCarteirinhaVacina (
	codCarteirinhaVacina INT PRIMARY KEY
	,codVacina INT FOREIGN KEY REFERENCES tbVacina (codVacina)
	,codCachorro INT FOREIGN KEY REFERENCES tbCachorro(codCachorro)
)

CREATE TABLE tbEstadoCachorro (
	codEstadoCachorro INT PRIMARY KEY
	,codMolestia INT FOREIGN KEY REFERENCES tbMolestia (codMolestia)
	,codCachorro INT FOREIGN KEY REFERENCES tbCachorro(codCachorro)
)