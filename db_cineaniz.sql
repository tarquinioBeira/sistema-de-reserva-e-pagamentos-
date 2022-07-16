-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 12, 2020 at 04:22 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cineaniz`
--

-- --------------------------------------------------------

--
-- Table structure for table `bilhete`
--

DROP TABLE IF EXISTS `bilhete`;
CREATE TABLE IF NOT EXISTS `bilhete` (
  `idBilhete` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT NULL,
  `idUsuario` int(11) DEFAULT 0,
  `idSessao` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `fpagamento` varchar(25) DEFAULT NULL,
  `horaCompra` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`idBilhete`),
  KEY `idSessao` (`idSessao`),
  KEY `idCliente` (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bilhete`
--

INSERT INTO `bilhete` (`idBilhete`, `numero`, `estado`, `tipo`, `idUsuario`, `idSessao`, `idCliente`, `fpagamento`, `horaCompra`) VALUES
(85, '5F3407717762A', 'Nao Assistido', 'Reservado', 0, 9, 6, 'm-pesa', '2020-08-12 17:14:57'),
(86, '5F3407AC0F40B', 'Nao Assistido', 'Reservado', 0, 9, 6, 'm-pesa', '2020-08-12 17:15:56'),
(90, '5F3413B3BE059', 'Nao Assistido', 'Reservado', 0, 11, 9, 'm-kesh', '2020-08-12 18:07:15'),
(91, '5F3415009AA09', 'Nao Assistido', 'Reservado', 0, 12, 9, 'paypal', '2020-08-12 18:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `apelido` varchar(15) DEFAULT NULL,
  `numeroTelefone` varchar(13) DEFAULT NULL,
  `morada` varchar(255) DEFAULT NULL,
  `genero` varchar(1) DEFAULT NULL,
  `listaSessoes` varchar(15) DEFAULT NULL,
  `tipoDoc` varchar(50) DEFAULT NULL,
  `numeroDoc` varchar(100) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `senha` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome`, `apelido`, `numeroTelefone`, `morada`, `genero`, `listaSessoes`, `tipoDoc`, `numeroDoc`, `dataNascimento`, `usuario`, `senha`) VALUES
(1, 'danny', 'massa', '846601873', NULL, NULL, NULL, NULL, '9845612365M', NULL, 'danny', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Fabiano', 'Antonieto', '845002009', NULL, 'M', NULL, 'NUIT', '985421655', '1994-05-04', 'fabiano.antonieto', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Lizeth', 'Mourinho', '845128229', NULL, NULL, NULL, NULL, '05100300543C', NULL, 'elisete', '9eeaff9d10481212ab2c934af69ef9d4'),
(9, 'Erasmo', 'Simbe', '843672959', NULL, NULL, NULL, NULL, '1254652155', NULL, 'erasmo', 'c712f5ccd4054637a611681b6d9e9784');

-- --------------------------------------------------------

--
-- Table structure for table `filme`
--

DROP TABLE IF EXISTS `filme`;
CREATE TABLE IF NOT EXISTS `filme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tituloFilme` varchar(30) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `anoLancamento` int(11) DEFAULT NULL,
  `duracao` varchar(50) DEFAULT NULL,
  `produtor` varchar(200) DEFAULT NULL,
  `cartazFilme` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filme`
--

INSERT INTO `filme` (`id`, `tituloFilme`, `autor`, `descricao`, `anoLancamento`, `duracao`, `produtor`, `cartazFilme`) VALUES
(7, 'Matrix', 'Lana Wachowski', 'Um jovem programador Ã© atormentado por estranhos pesadelos nos quais sempre estÃ¡ conectado por cabos a um imenso sistema de computadores do futuro. Ã€ medida que o sonho se repete, ele comeÃ§a a levantar dÃºvidas sobre a realidade. E quando encontra os misteriosos Morpheus e Trinity, ele descobre que Ã© vÃ­tima do Matrix, um sistema inteligente e artificial que manipula a mente das pessoas e cria a ilusÃ£o de um mundo real enquanto usa os cÃ©rebros e corpos dos indivÃ­duos para produzir energia.', 1999, '2h30min', 'Joel Silver', '5f31e52c936607.08794849.jpg'),
(8, 'Wall Street', 'Jordan Belfort', 'Jordan Belfort Ã© um ambicioso corretor da bolsa de valores que cria um verdadeiro impÃ©rio, enriquecendo de forma rÃ¡pida, porÃ©m ilegal. Ele e seus amigos mergulham em um mundo de excessos, mas seus mÃ©todos ilÃ­citos despertam a atenÃ§Ã£o da polÃ­cia.', 2013, '3h', 'Leonardo DiCaprio', '5f31e7ad3a4049.09684918.jpg'),
(9, 'Aquaman', 'James Wan, Geoff Johns, Will Beall & Paul Norris', 'A cidade de Atlantis, que jÃ¡ foi lar de uma das mais avanÃ§adas civilizaÃ§Ãµes do mundo, agora Ã© um reino submerso dominado pelo ganancioso Rei Orm. Com um vasto exÃ©rcito a seu dispor, Orm planeja conquistar tanto os demais reinos do oceano, quanto o mundo da superfÃ­cie. Em seu caminho estÃ¡ Aquaman, meio-humano e meio-atlante, e verdadeiro herdeiro do trono. Com a ajuda da princesa Mera, Aquaman precisa recuperar o lendÃ¡rio Tridente de Atlan e aceitar seu destino como protetor das profundezas.', 2018, '2h22min', 'Peter Safran & Rob Cowan', '5f33daea9c62d0.39094742.jpg'),
(10, 'Blade Runner 2049', 'Hampton Fancher & Michael Green', 'ApÃ³s descobrir um segredo enterrado hÃ¡ muito tempo, que ameaÃ§a o que resta da sociedade, um novo policial embarca na busca de Rick Deckard, que estÃ¡ desaparecido hÃ¡ 30 anos.', 2017, '2h43min', 'Andrew Kosove', '5f33de73d00a28.87784782.jpg'),
(11, 'The Way Home', 'Dean Cain', 'Uma famÃ­lia em crise. Uma fÃ© testada. O filme De Volta Para Casa Ã© um drama baseado em uma inspiradora histÃ³ria real.\r\nUma inspiradora histÃ³ria real sobre como uma comunidade rural se uniu Ã  uma famÃ­lia perturbada para procurar seu filho de dois anos, que desapareceu de repente.', 2010, '1h29min', 'BV Filmes', '5f33e643250270.02215163.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sala`
--

DROP TABLE IF EXISTS `sala`;
CREATE TABLE IF NOT EXISTS `sala` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeSala` varchar(15) DEFAULT NULL,
  `capacidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sala`
--

INSERT INTO `sala` (`id`, `nomeSala`, `capacidade`) VALUES
(1, 'Sala 1', 20),
(2, 'Sala 2', 40),
(3, 'Sala 3', 100),
(4, 'Sala 4', 50);

-- --------------------------------------------------------

--
-- Table structure for table `sessao`
--

DROP TABLE IF EXISTS `sessao`;
CREATE TABLE IF NOT EXISTS `sessao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `horaInicio` time DEFAULT NULL,
  `horaFim` time DEFAULT NULL,
  `preco` varchar(255) NOT NULL,
  `idSala` int(11) NOT NULL,
  `idFilme` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idSala` (`idSala`),
  KEY `IdFilme` (`idFilme`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessao`
--

INSERT INTO `sessao` (`id`, `data`, `horaInicio`, `horaFim`, `preco`, `idSala`, `idFilme`) VALUES
(10, '2020-08-16', '14:22:00', '17:00:00', '250', 1, 9),
(11, '2020-08-17', '10:43:00', '12:00:00', '300', 2, 10),
(12, '2020-08-19', '19:00:00', '20:29:00', '200', 2, 11),
(13, '2020-08-20', '09:00:00', '11:00:00', '400', 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(30) DEFAULT NULL,
  `apelidoUsuario` varchar(15) DEFAULT NULL,
  `numeroTelefone` varchar(13) DEFAULT NULL,
  `tipoDoc` varchar(50) DEFAULT NULL,
  `numeroDoc` varchar(100) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(256) DEFAULT NULL,
  `nivelAcesso` varchar(15) DEFAULT NULL,
  `morada` varchar(255) DEFAULT NULL,
  `usuario` varchar(45) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `genero` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nomeUsuario`, `apelidoUsuario`, `numeroTelefone`, `tipoDoc`, `numeroDoc`, `email`, `senha`, `nivelAcesso`, `morada`, `usuario`, `dataNascimento`, `genero`) VALUES
(1, 'Cucorreia Manuel', 'Gabriel', '843821799', 'BI', '201252012155G', 'kukogabriel@Outlook.com', 'e10adc3949ba59abbe56e057f20f883e', 'Administrador', 'Moatize', 'cucorreia.gabriel', '1997-12-16', 'M'),
(13, 'Zaida M.', 'Gabriel', '842857997', '', '128955256', 'zaidamanuelgabriel@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Funcionario', 'Moatize', 'zaida.gabriel', '1994-05-15', 'F'),
(14, 'Elisete M.', 'Mourinho', '845128229', 'NUIT', '5412451251', 'elisetemanuelmourinho@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Funcionario', 'Moatize', 'elisete.mourinho', '1999-08-05', 'F');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
