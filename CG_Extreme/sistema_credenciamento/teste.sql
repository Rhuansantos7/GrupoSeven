-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27-log
-- Versão do PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE IF NOT EXISTS `imprensa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `telefone` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `rede_social` varchar(20) NOT NULL,
  `rg` int(12) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ingresso` varchar(50) NOT NULL,
  `num_ingresso` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=178 ;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `nome`, `telefone`, `email`, `empresa`, `data_nasc`, `sexo`, `rede_social`, `rg`, `foto`, `ingresso`, `num_ingresso`) VALUES
(177, 'Ocimar', 10203040, 'rafael1@7media.com', 'Vips', '50/05/1995', 'masculino', 'facebook.com', 1020102030, '56a8b587f03db3ccac6bc3bf2eab103b.jpg', 'seven de madreira', '102030');

-- --------------------------------------------------------

--
-- Estrutura da tabela `publico`
--

CREATE TABLE IF NOT EXISTS `publico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `telefone` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data_nasc` varchar(8) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `habilidade` varchar(30) NOT NULL,
  `rede_social` varchar(50) NOT NULL,
  `rg` int(12) NOT NULL,
  `ingresso` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `num_ingresso` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT AUTO_INCREMENT=29 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vip`
--

CREATE TABLE IF NOT EXISTS `vip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `telefone` int(9) NOT NULL,
  `email` varchar(50) NOT NULL,
  `empresa` varchar(50) NOT NULL,
  `data_nasc` varchar(10) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `rede_social` varchar(30) NOT NULL,
  `rg` int(12) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `ingresso` varchar(50) NOT NULL,
  `num_ingresso` varchar(255) NOT NULL,
  PRIMARY KEY (`id`,`nome`,`rg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=132 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
