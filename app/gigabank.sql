-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Mar-2020 às 17:02
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gigabank`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartao`
--

CREATE TABLE IF NOT EXISTS `cartao` (
  `idCartao` int(11) NOT NULL AUTO_INCREMENT,
  `idConta` int(11) NOT NULL,
  `numCartao` char(16) NOT NULL,
  `codSeguranca` char(3) NOT NULL,
  `dataValidade` date NOT NULL,
  `vencFatura` date NOT NULL,
  `limite` smallint(6) NOT NULL,
  `limiteDisp` smallint(6) NOT NULL,
  `rotativo` smallint(6) NOT NULL,
  `senhaCartao` varchar(50) NOT NULL,
  `dataCadastro` date NOT NULL,
  PRIMARY KEY (`idCartao`),
  UNIQUE KEY `idCartao` (`idCartao`),
  UNIQUE KEY `numCartao` (`numCartao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `numeroCasa` varchar(5) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `dataCadastro` date NOT NULL,
  `dataNasc` date NOT NULL,
  PRIMARY KEY (`idCliente`),
  UNIQUE KEY `idCliente` (`idCliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome`, `cpf`, `email`, `telefone`, `celular`, `cep`, `endereco`, `numeroCasa`, `bairro`, `cidade`, `uf`, `dataCadastro`, `dataNasc`) VALUES
(51, 'luana', '39801492855', 'anaul@gmail.com', 'batata', '555555', '05821100', 'Rua Manoel Barrio Garcia', '555', 'Parque Santo Antônio', 'São Paulo', 'SP', '2020-03-13', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta`
--

CREATE TABLE IF NOT EXISTS `conta` (
  `idConta` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) NOT NULL,
  `tipo` varchar(2) NOT NULL,
  `numContrato` varchar(12) NOT NULL,
  `senhaConta` varchar(20) NOT NULL,
  `possuiCartao` char(1) NOT NULL,
  `dataCadastro` date NOT NULL,
  `taxaMensal` smallint(6) NOT NULL,
  `numConta` varchar(7) NOT NULL,
  `agConta` int(4) NOT NULL,
  `saldo` int(11) NOT NULL,
  PRIMARY KEY (`idConta`),
  UNIQUE KEY `idConta` (`idConta`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `conta`
--

INSERT INTO `conta` (`idConta`, `cpf`, `tipo`, `numContrato`, `senhaConta`, `possuiCartao`, `dataCadastro`, `taxaMensal`, `numConta`, `agConta`, `saldo`) VALUES
(18, '39801492855', '1', '555', '', '1', '2020-03-13', 20, '1', 10, 0),
(19, '39801492855', '1', '555', '', '1', '2020-03-13', 20, '2', 10, 0),
(20, '39801492855', '1', '555', '', '1', '2020-03-13', 20, '3', 10, 0),
(21, '39801492855', '1', '555', '', '1', '2020-03-13', 20, '4', 10, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
