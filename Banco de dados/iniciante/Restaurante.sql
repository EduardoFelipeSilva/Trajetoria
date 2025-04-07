USE bdRestaurante


CREATE TABLE tbCliente (
	codCliente INT PRIMARY KEY
	,nomeCliente VARCHAR(20)
	,cpfCliente VARCHAR(14)
)

CREATE TABLE tbFuncionario (
	codFuncionario  INT PRIMARY KEY
	,nomeFuncionario  VARCHAR(20)
	,cfpFuncionario  VARCHAR(40)
	,telefoneFuncionario  VARCHAR(20)
	,logradouroFuncionario  VARCHAR(40)
	,cidadeFuncionario  VARCHAR(20)
	,bairroFuncionario  VARCHAR(40)
	,numLograFuncionario  VARCHAR(20)
	,ufFuncionario  VARCHAR(40)
	,paisFuncionario  VARCHAR(20)
	,dataNascFuncionario  VARCHAR(40)

) 
CREATE TABLE tbMesa (
	codMesa INT PRIMARY KEY
	,numMesa VARCHAR(12)
	,descMesa VARCHAR(10)
	,categMesa VARCHAR(10)
	
)
CREATE TABLE tbReserva (
	codReserva  INT PRIMARY KEY
	,horaReserva VARCHAR(10)
	,codcliente INT FOREIGN KEY REFERENCES tbcliente (codVenda)
	,codfuncionario INT FOREIGN KEY REFERENCES tbFormaPagto (codFormaPagto)
)

CREATE TABLE tbFormaPagto(
	codFormaPagto INT PRIMARY KEY
	,descFormaPagto VARCHAR(50)
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

