-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-Set-2016 às 18:10
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iuvenesd_iuvenesdei`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  `nome_imagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idEvento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `eventos`
--

INSERT INTO `eventos` (`idEvento`, `titulo`, `descricao`, `nome_imagem`) VALUES
(1, 'Título do Evento', 'Descrição do Evento', 'Jesus-Super-Hero-HD-Wallpaper.png'),
(2, 'Título do Evento 2', 'Descrição qualquer', 'jesus-10.jpg'),
(3, 'Título 3', 'Descrição de Evento Nova Aliança', 'fotos de jesus 5.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idLogin` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `situacao` int(11) DEFAULT NULL,
  `sexo` int(11) NOT NULL,
  PRIMARY KEY (`idLogin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idLogin`, `nome`, `usuario`, `senha`, `situacao`, `sexo`) VALUES
(1, 'Vinicius Sarmento', 'vinicius.sarmento', 'e10adc3949ba59abbe56e057f20f883e', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE IF NOT EXISTS `postagem` (
  `idComents` int(11) NOT NULL AUTO_INCREMENT,
  `coments` text COLLATE utf8_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`idComents`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`idComents`, `coments`, `data`, `hora`) VALUES
(1, 'teste', '2016-02-07', '11:31:05'),
(2, 'teste 2', '2016-02-07', '11:31:11'),
(3, 'teste 3', '2016-02-07', '11:31:19'),
(4, 'teste\r\n', '2016-02-29', '19:16:05'),
(5, 'Teste4', '2016-02-29', '19:24:54'),
(6, 'Teste 5', '2016-02-29', '19:25:49'),
(7, 'teste 6', '2016-02-29', '19:25:56'),
(8, 'Teste 7\r\n', '2016-02-29', '19:28:06'),
(9, 'Teste 8', '2016-02-29', '19:28:14'),
(10, 'test de tabela 1\r\n', '2016-02-29', '20:50:44'),
(11, 'Testé de Tabêla', '2016-02-29', '20:50:56'),
(12, 'teste formação de tabela', '2016-02-29', '20:51:09'),
(13, 'Teste da tabela', '2016-02-29', '20:52:27'),
(14, 'Teste 14\r\n', '2016-02-29', '20:52:36'),
(15, 'Teste 15', '2016-02-29', '20:52:42'),
(16, 'Teste 16\r\n', '2016-02-29', '20:52:50'),
(17, 'Téstê', '2016-03-02', '19:58:01'),
(18, 'teste 23:37', '2016-05-11', '23:37:42'),
(19, 'teste 23:37', '2016-05-11', '23:38:02'),
(20, 'teste\r\n', '2016-07-03', '12:37:30'),
(21, 'teste', '2016-09-12', '22:09:26'),
(22, 'O Senhor é meu pastor nada me faltará!', '2016-09-12', '22:10:21'),
(23, 'teste do teste', '2016-09-14', '18:33:35'),
(24, 'Teste', '2016-09-17', '19:35:18'),
(25, '123', '2016-09-18', '08:59:56'),
(26, 'teste comentário', '2016-09-18', '10:12:03'),
(27, 'teste comentário 2', '2016-09-18', '10:12:11');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
