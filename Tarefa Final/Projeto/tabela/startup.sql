-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18-Fev-2022 às 21:03
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `startup`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

DROP TABLE IF EXISTS `tbcliente`;
CREATE TABLE IF NOT EXISTS `tbcliente` (
  `id_cli` int(100) NOT NULL AUTO_INCREMENT,
  `nome_cli` varchar(100) NOT NULL,
  `end_cli` varchar(100) NOT NULL,
  `cidade_cli` varchar(100) NOT NULL,
  `uf_cli` varchar(100) NOT NULL,
  `email_cli` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cli`),
  UNIQUE KEY `email_cli` (`email_cli`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbcliente`
--

INSERT INTO `tbcliente` (`id_cli`, `nome_cli`, `end_cli`, `cidade_cli`, `uf_cli`, `email_cli`) VALUES
(3, 'Franco', 'R. Dr. Exemplo 33', 'Rio Pomba', 'MG', 'franco@exemplo.com'),
(4, 'Lucas', 'Rua Exemplo 21', 'ViÃ§osa', 'MG', 'lucas@exemplo.com'),
(5, 'JosÃ©', 'R. Pr. Exemplo 77', 'PetrÃ³polis', 'RJ', 'jose@exemplo.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblogin`
--

DROP TABLE IF EXISTS `tblogin`;
CREATE TABLE IF NOT EXISTS `tblogin` (
  `user_login` varchar(50) NOT NULL,
  `pass_login` varchar(200) NOT NULL,
  UNIQUE KEY `user_login` (`user_login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tblogin`
--

INSERT INTO `tblogin` (`user_login`, `pass_login`) VALUES
('franco', '$2y$10$ExSQQLf7gSDBlOU7ivfMeOmvC3i7wd.AaCrvMP0x2B7lxTuHByfzm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
