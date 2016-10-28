-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28-Out-2016 às 12:30
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
-- Estrutura da tabela `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `idAlbum` int(11) NOT NULL,
  `idImagem` int(11) NOT NULL,
  `fotos` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `capa_album`
--

CREATE TABLE IF NOT EXISTS `capa_album` (
  `idImagem` int(11) NOT NULL AUTO_INCREMENT,
  `idLogin` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capa` int(11) NOT NULL,
  PRIMARY KEY (`idImagem`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `idLogin` int(11) NOT NULL,
  `titulo` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` text COLLATE utf8_unicode_ci,
  `nome_imagem` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `idLogin` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usuario` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexo` int(11) NOT NULL,
  `situacao` int(11) NOT NULL,
  PRIMARY KEY (`idLogin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`idLogin`, `nome`, `usuario`, `senha`, `sexo`, `situacao`) VALUES
(1, 'Vinicius Sarmento', 'vinicius.sarmento', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(2, 'Aline Ribeiro', 'aline.ribeiro', '1467c0187371ec54c37a87b1c788454e', 0, 1),
(3, 'Beatriz Miranda', 'beatriz.miranda', '7397e8a96241e5a576cdc71ce2904e8a', 0, 1),
(4, 'Pedro Henrique', 'pedro.henrique', '7d9cd6ce6752fe8ea5c076a27f1d7034', 1, 1),
(5, 'Edgar Junio', 'edgar.junio', '3ed479143a9e4372c6fc9f44be574432', 1, 1),
(6, 'Juliana Rodrigues', 'juliana.rodrigues', 'ff69dbb734c3a1409e0549fb73c9be90', 0, 1),
(7, 'Juliana Rezende', 'juliana.rezende', '5f06da6553247ed72ecb379b7213c902', 0, 1),
(8, 'Thiago Batista', 'thiago.batista', 'a156a0bd45f9285490d59ef7389e1dbc', 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`idComents`, `coments`, `data`, `hora`) VALUES
(1, 'Obrigado Senhor pelo dia de hoje, por ter mudado minha família, e minha história e por me fazer luz', '2016-02-06', '08:35:24'),
(2, 'Dentre todas as graças já recebidas a maior delas é sem dúvidas a capacidade de amar e perdoar o próximo.\r\nObrigada senhor por todas as bênçãos, pelo Teu imenso amor e fidelidade <3', '2016-02-06', '15:48:51'),
(3, 'Entre todas as graças alcançadas é sem duvida a perca de grande parte da minha timidez e ( até aprender a conversar) e confiar sempre em Deus mesmo nos momentos onde tudo parece está dando errado entregar o futuro nas mãos de Deus e esperar o tempo do pai.\r\n', '2016-02-15', '22:14:51'),
(4, 'ESSE GRUPO É UMA BENÇÃO DE DEUS *------*', '2016-02-20', '20:27:39'),
(5, 'Melhor grupooo amo fazer parte dessa família que me acolheu!!', '2016-02-21', '12:26:27'),
(6, 'Deus realizou inúmeras graças na minha vida, mas sem dúvidas a maior delas foi ter me chamado à servidão nesse grupo maravilhoso!', '2016-02-21', '22:36:24'),
(7, 'Deus realizou e tem realizado várias graças na minha vida, na qual a principal delas é o desejo de buscar mais a deus, e conheci pessoas maravilhosas.\r\n', '2016-02-22', '16:00:26'),
(8, 'Melhor grupo <3', '2016-02-25', '15:43:54'),
(9, 'Passamos o nosso ano inteiro clamando das dificuldades, clamando de nosso dia-a-dia, reclamando de tudo e de todos fazemos de nossas vidas a mais difícil, complexa, fazemos com que todos ao nosso redor fique convencido de tal coisa, nos fazendo muitas das vezes de vitimas, colocando nossas limitações e dificuldades maior do que de qualquer outra pessoa, chegamos ao ponto de perguntar a DEUS o por que disso em nossas vidas.\nMais basta 1 pequeno momento de reflexão, 1 palavra, 1 musica para vermos como estamos sendo egoístas, como olhamos apenas para nossas dificuldades.\nNada como terminar a noite de sábado com a Vigília Pascal, refletindo na ação de graças a musica Belíssimo Esposo. Somente assim consegui ver a minha pequenez, e ver também como nossas vidas são razoavelmente tranquilas.', '2016-03-27', '00:41:40'),
(10, 'no 11º encontro ser jovem de deus sem deixar de ser jovem....\r\ndeus mudou a minha história, tive um encontro pessoal com jesus através do espírito santo, na presença de nossa senhora, onde foi resgatado em mim a pureza de coração, o "ser amor" para as pessoas, e o estar na presença de deus!  Depois desse encontro, minha vontade de evangelizar e lutar por deus não cabe dentro de mim! foi perfeito, pois o amor reinava naquela casa de retiro!!! obrigada senhor!!!', '2016-07-19', '12:29:34'),
(11, 'TESTE 13/09/2016', '2016-09-13', '10:46:39'),
(12, 'teste', '2016-10-14', '10:25:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
