-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/06/2024 às 05:30
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbadmin`
--

CREATE TABLE `tbadmin` (
  `idAdmin` int(11) NOT NULL,
  `nomeAdmin` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `sobrenomeAdmin` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cpfAdmin` char(14) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nascAdmin` date NOT NULL,
  `emailAdmin` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `senhaAdmin` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagemAdmin` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tokenAdmin` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbadmin`
--

INSERT INTO `tbadmin` (`idAdmin`, `nomeAdmin`, `sobrenomeAdmin`, `cpfAdmin`, `nascAdmin`, `emailAdmin`, `senhaAdmin`, `imagemAdmin`, `tokenAdmin`) VALUES
(3, 'eduardo ', 'felipe', '444444444444', '2024-06-10', 'eduardo.ademir@551251.com', '2222222222', 'fd1c2d687a665d6d4509f0e4481752b1.jpg', '92577d020da9fd952a728db2a870062c'),
(4, 'eduardo ', 'felipe', '444444444444', '2000-05-05', 'eduardo.ademir@551251.com', '2222222222', '', '7c23735295ccb052fad44ee930311816');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbhotel`
--

CREATE TABLE `tbhotel` (
  `idHotel` int(11) NOT NULL,
  `nomeHotel` varchar(100) NOT NULL,
  `estadoHotel` varchar(100) NOT NULL,
  `cidadeHotel` varchar(100) NOT NULL,
  `precoHotel` int(11) NOT NULL,
  `qntdQuartoHotel` int(11) NOT NULL,
  `descQuartoHotel` varchar(200) NOT NULL,
  `statusHotel` int(11) NOT NULL,
  `fotoHotel` varchar(50) NOT NULL,
  `tokenHotel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbhotel`
--

INSERT INTO `tbhotel` (`idHotel`, `nomeHotel`, `estadoHotel`, `cidadeHotel`, `precoHotel`, `qntdQuartoHotel`, `descQuartoHotel`, `statusHotel`, `fotoHotel`, `tokenHotel`) VALUES
(26, 'wwww', 'www', '12', 333, 3, '43434', 1, '49496bb16742a0b6d9ffa785d5c9d1f5.jpg', '26250605a6ca90566cd7eb2e4b3b8703'),
(28, 'a', 'sp', 'sp', 12, 2, 'muito bom', 1, '', 'f5a7b4981643947749cff63a0548ce31'),
(29, 'sa', 'sp', 'sap', 123, 2, 'sao', 2, '', '1fd3242946d6eb4a145d23cabf7d2cb7'),
(30, 'hotel neblow', 'sp', 'rio de janeiro', 1200, 2, 'muito confortavel', 2, '', 'cbabbd1e32c83e792134062bc0cc4fec');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbuser`
--

CREATE TABLE `tbuser` (
  `idUser` int(11) NOT NULL,
  `nomeUser` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cpfUser` char(14) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `emailUser` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `enderecoUser` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nascUser` date NOT NULL,
  `contatoUser` varchar(120) NOT NULL,
  `senhaUser` varchar(120) NOT NULL,
  `tokenUser` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbuser`
--

INSERT INTO `tbuser` (`idUser`, `nomeUser`, `cpfUser`, `emailUser`, `enderecoUser`, `nascUser`, `contatoUser`, `senhaUser`, `tokenUser`) VALUES
(1, 'eduaue', '7212727', 'eduardo@gamril', 'uduaud', '0000-00-00', '72727272727', '272772', '5a49c03078e6e79b6c28679a5f036ad6'),
(2, 'eduaue', '7212727', 'eduardo@gamril', 'uduaud', '0000-00-00', '72727272727', '272772', '68ef57a836154173c116e549ad0607c7');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tdstatus`
--

CREATE TABLE `tdstatus` (
  `idStatus` int(11) NOT NULL,
  `tiposStatus` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tdstatus`
--

INSERT INTO `tdstatus` (`idStatus`, `tiposStatus`) VALUES
(1, '[inativo]'),
(2, '[ativo]');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices de tabela `tbhotel`
--
ALTER TABLE `tbhotel`
  ADD PRIMARY KEY (`idHotel`),
  ADD KEY `statusHotel` (`statusHotel`);

--
-- Índices de tabela `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`idUser`);

--
-- Índices de tabela `tdstatus`
--
ALTER TABLE `tdstatus`
  ADD PRIMARY KEY (`idStatus`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbhotel`
--
ALTER TABLE `tbhotel`
  MODIFY `idHotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tdstatus`
--
ALTER TABLE `tdstatus`
  MODIFY `idStatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tbhotel`
--
ALTER TABLE `tbhotel`
  ADD CONSTRAINT `statusHotel` FOREIGN KEY (`statusHotel`) REFERENCES `tdstatus` (`idStatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
