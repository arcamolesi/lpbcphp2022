-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Maio-2022 às 01:46
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imobi`
--
CREATE DATABASE IF NOT EXISTS `imobi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `imobi`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imovel`
--

DROP TABLE IF EXISTS `imovel`;
CREATE TABLE IF NOT EXISTS `imovel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rua` varchar(35) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `imovel`
--

INSERT INTO `imovel` (`id`, `rua`, `bairro`, `cidade`, `status`) VALUES
(1, 'Rua João Ramalho, 1585', 'Tenis Clube', 'Assis', 'L'),
(2, 'Rua do Lago', 'Aguas Claras', 'Assis', 'L'),
(3, 'Rua Candido Mota, 1234', 'FEMA', 'Assis', 'L'),
(4, 'Rua XV de Novembro, 1353', 'Centro', 'Assis', 'L'),
(5, 'Rua FEMA, 12345', 'Centro', '123432333', 'L'),
(6, 'Rua do IMESA, sn', 'Rodrigues', 'Assis', 'O');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacao`
--

DROP TABLE IF EXISTS `locacao`;
CREATE TABLE IF NOT EXISTS `locacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imovel` int(11) NOT NULL,
  `locador` int(11) NOT NULL,
  `data` date NOT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `locacao_imovel` (`imovel`),
  KEY `locacao_locador` (`locador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `locador`
--

DROP TABLE IF EXISTS `locador`;
CREATE TABLE IF NOT EXISTS `locador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(35) NOT NULL,
  `cidade` varchar(25) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `idade` int(11) NOT NULL,
  `salario` float NOT NULL,
  `profissao` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `locador_profissao` (`profissao`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissao`
--

DROP TABLE IF EXISTS `profissao`;
CREATE TABLE IF NOT EXISTS `profissao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profissao`
--

INSERT INTO `profissao` (`id`, `descricao`) VALUES
(1, 'Professor'),
(2, 'Pro'),
(3, 'Consultor'),
(4, 'Analista');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `locacao`
--
ALTER TABLE `locacao`
  ADD CONSTRAINT `locacao_imovel` FOREIGN KEY (`imovel`) REFERENCES `imovel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `locacao_locador` FOREIGN KEY (`locador`) REFERENCES `locador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `locador`
--
ALTER TABLE `locador`
  ADD CONSTRAINT `locador_profissao` FOREIGN KEY (`profissao`) REFERENCES `profissao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
