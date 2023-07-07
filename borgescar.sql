-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 07-Jul-2023 às 16:21
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
-- Banco de dados: `borgescar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `cli_codigo` int NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(255) NOT NULL,
  `cli_email` varchar(100) NOT NULL,
  `cli_senha` varchar(30) NOT NULL,
  `cli_cpf` varchar(20) NOT NULL,
  `cli_rg` varchar(20) NOT NULL,
  `cli_endereco` varchar(255) NOT NULL,
  PRIMARY KEY (`cli_codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cli_codigo`, `cli_nome`, `cli_email`, `cli_senha`, `cli_cpf`, `cli_rg`, `cli_endereco`) VALUES
(1, 'José Gabriel ', 'a', 'a', 'a', 'a', 'a'),
(2, 'Messias Alves', '', '', '', '', ''),
(3, 'Hugo Almeida', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

DROP TABLE IF EXISTS `tb_usuario`;
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `usu_codigo` int NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(255) NOT NULL,
  `usu_funcao` varchar(100) NOT NULL,
  `usu_email` varchar(100) NOT NULL,
  `usu_username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `usu_password` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `usu_telefone` varchar(100) NOT NULL,
  `usu_cpf` varchar(20) NOT NULL,
  `usu_rg` varchar(20) NOT NULL,
  `usu_endereco` varchar(255) NOT NULL,
  PRIMARY KEY (`usu_codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`usu_codigo`, `usu_nome`, `usu_funcao`, `usu_email`, `usu_username`, `usu_password`, `usu_telefone`, `usu_cpf`, `usu_rg`, `usu_endereco`) VALUES
(1, 'Antonio Riquelme Fernandes Mesquita', 'Gerente', 'escola.estudante@aluno.ce.gov.br', 'riquelme', '1234', '(85) 99999-7979', '', '', ''),
(2, 'Humberto Paulino Sousa', 'Vendedor', 'escola.estudante@aluno.ce.gov.br', 'humberto', '1234', '(85) 99999-7979', '', '', ''),
(3, 'Miguel Pinheiro Gomes Neto', 'Vendedor', 'escola.estudante@aluno.ce.gov.br', 'miguel', '1234', '(85) 99999-7979', '', '', ''),
(4, 'Leiliane Barbosa da Silva', 'Vendedora', 'escola.estudante@aluno.ce.gov.br', 'leiliane', '1234', '(85) 91234-1234', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_veiculo`
--

DROP TABLE IF EXISTS `tb_veiculo`;
CREATE TABLE IF NOT EXISTS `tb_veiculo` (
  `vei_codigo` int NOT NULL AUTO_INCREMENT,
  `vei_modelo` varchar(255) NOT NULL,
  `vei_fabricante` varchar(255) NOT NULL,
  `vei_cor` varchar(30) NOT NULL,
  `vei_ano` year NOT NULL,
  `vei_preco` double NOT NULL,
  `vei_chassi` varchar(30) NOT NULL,
  PRIMARY KEY (`vei_codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_veiculo`
--

INSERT INTO `tb_veiculo` (`vei_codigo`, `vei_modelo`, `vei_fabricante`, `vei_cor`, `vei_ano`, `vei_preco`, `vei_chassi`) VALUES
(1, 'Model 3', 'Tesla', '#000000', 2022, 162000, 'F23FF2F3EWF'),
(2, 'Toyota GR Corolla', 'Toyota', '#000000', 2023, 461990, '32TSDVETWEFQ3'),
(3, 'Honda HR-V', 'Honda', '#878787', 2022, 143900, '5E6U456H4W5H');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_venda`
--

DROP TABLE IF EXISTS `tb_venda`;
CREATE TABLE IF NOT EXISTS `tb_venda` (
  `vnd_codigo` int NOT NULL AUTO_INCREMENT,
  `vnd_modelo` varchar(255) NOT NULL,
  `vnd_cliente` varchar(255) NOT NULL,
  `vnd_vendedor` varchar(255) NOT NULL,
  `vnd_formadepagamento` varchar(100) NOT NULL,
  `vnd_servicoadd` varchar(255) NOT NULL,
  `vnd_comissao` double NOT NULL,
  `vnd_desconto` double NOT NULL,
  `vnd_valortotal` double NOT NULL,
  `vnd_chassi` varchar(30) NOT NULL,
  PRIMARY KEY (`vnd_codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_venda`
--

INSERT INTO `tb_venda` (`vnd_codigo`, `vnd_modelo`, `vnd_cliente`, `vnd_vendedor`, `vnd_formadepagamento`, `vnd_servicoadd`, `vnd_comissao`, `vnd_desconto`, `vnd_valortotal`, `vnd_chassi`) VALUES
(1, 'Model 3', 'Gabriel', 'Humberto', 'Pix', 'a', 1000, 1000, 150000, 'WERY45U456E3J6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
