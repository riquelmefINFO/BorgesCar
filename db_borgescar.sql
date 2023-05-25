-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Maio-2023 às 13:37
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_borgescar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionario`
--

DROP TABLE IF EXISTS `tb_funcionario`;
CREATE TABLE IF NOT EXISTS `tb_funcionario` (
  `numeroPIS` int NOT NULL,
  PRIMARY KEY (`numeroPIS`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_gerente`
--

DROP TABLE IF EXISTS `tb_gerente`;
CREATE TABLE IF NOT EXISTS `tb_gerente` (
  `senhaExtra` varchar(12) NOT NULL,
  PRIMARY KEY (`senhaExtra`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `nome` varchar(60) NOT NULL,
  `email` varchar(40) NOT NULL,
  `CPF` int NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `RG` int NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `login` varchar(12) NOT NULL,
  `senha` varchar(8) NOT NULL,
  PRIMARY KEY (`CPF`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculos`
--

DROP TABLE IF EXISTS `tb_veiculos`;
CREATE TABLE IF NOT EXISTS `tb_veiculos` (
  `modelo` varchar(60) NOT NULL,
  `fabricante` varchar(30) NOT NULL,
  `cor` varchar(35) NOT NULL,
  `ano` int NOT NULL,
  `preco` double NOT NULL,
  `chassi` varchar(50) NOT NULL,
  PRIMARY KEY (`chassi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_venda`
--

DROP TABLE IF EXISTS `tb_venda`;
CREATE TABLE IF NOT EXISTS `tb_venda` (
  `formaPagamento` varchar(60) NOT NULL,
  `sevicosAdicionais` varchar(120) NOT NULL,
  `desconto` double NOT NULL,
  `valorTotal` double NOT NULL,
  `chassi` int NOT NULL,
  KEY `chassi` (`chassi`),
  KEY `chassi_2` (`chassi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
