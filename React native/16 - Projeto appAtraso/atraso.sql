-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/09/2024 às 06:27
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
-- Banco de dados: `atraso`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_atraso`
--

CREATE TABLE `tb_atraso` (
  `idAtraso` int(11) NOT NULL,
  `dtAtraso` datetime DEFAULT NULL,
  `nomeAluno` varchar(60) DEFAULT NULL,
  `idPeriodo` int(11) DEFAULT NULL,
  `idModulo` int(11) DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_curso`
--

CREATE TABLE `tb_curso` (
  `idCurso` int(11) NOT NULL,
  `Curso` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_curso`
--

INSERT INTO `tb_curso` (`idCurso`, `Curso`) VALUES
(1, 'D.S.'),
(2, 'Nutri'),
(3, 'Adm');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_modulo`
--

CREATE TABLE `tb_modulo` (
  `idModulo` int(11) NOT NULL,
  `Modulo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_modulo`
--

INSERT INTO `tb_modulo` (`idModulo`, `Modulo`) VALUES
(1, 1),
(2, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_periodo`
--

CREATE TABLE `tb_periodo` (
  `idPeriodo` int(11) NOT NULL,
  `Periodo` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_periodo`
--

INSERT INTO `tb_periodo` (`idPeriodo`, `Periodo`) VALUES
(1, 'Manhã'),
(2, 'Tarde'),
(3, 'Noite');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_atraso`
--
ALTER TABLE `tb_atraso`
  ADD PRIMARY KEY (`idAtraso`),
  ADD KEY `idPeriodo` (`idPeriodo`),
  ADD KEY `idModulo` (`idModulo`),
  ADD KEY `idCurso` (`idCurso`);

--
-- Índices de tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Índices de tabela `tb_modulo`
--
ALTER TABLE `tb_modulo`
  ADD PRIMARY KEY (`idModulo`);

--
-- Índices de tabela `tb_periodo`
--
ALTER TABLE `tb_periodo`
  ADD PRIMARY KEY (`idPeriodo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_atraso`
--
ALTER TABLE `tb_atraso`
  MODIFY `idAtraso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tb_curso`
--
ALTER TABLE `tb_curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_modulo`
--
ALTER TABLE `tb_modulo`
  MODIFY `idModulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_periodo`
--
ALTER TABLE `tb_periodo`
  MODIFY `idPeriodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_atraso`
--
ALTER TABLE `tb_atraso`
  ADD CONSTRAINT `tb_atraso_ibfk_1` FOREIGN KEY (`idPeriodo`) REFERENCES `tb_periodo` (`idPeriodo`),
  ADD CONSTRAINT `tb_atraso_ibfk_2` FOREIGN KEY (`idModulo`) REFERENCES `tb_modulo` (`idModulo`),
  ADD CONSTRAINT `tb_atraso_ibfk_3` FOREIGN KEY (`idCurso`) REFERENCES `tb_curso` (`idCurso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
