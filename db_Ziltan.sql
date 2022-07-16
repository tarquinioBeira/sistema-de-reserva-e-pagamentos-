-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 07, 2020 at 12:31 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome`, `apelido`, `numeroTelefone`, `morada`, `genero`, `listaSessoes`, `tipoDoc`, `numeroDoc`, `dataNascimento`, `usuario`, `senha`) VALUES
(1, 'danny', 'massa', '846601873', NULL, NULL, NULL, NULL, '9845612365M', NULL, 'danny', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Fabiano', 'Antonieto', '845002009', NULL, 'M', NULL, 'NUIT', '985421655', '1994-05-04', 'fabiano.antonieto', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Gale', 'Galinho', '853821799', NULL, '', NULL, '', '1525485626', '1999-05-15', 'gale.galinho', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Ana ', 'Mariano', '863821799', NULL, '', NULL, '', '8956241525', '1998-02-18', 'ana.mariano', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Lizeth', 'Mourinho', '845128229', NULL, NULL, NULL, NULL, '05100300543C', NULL, 'elisete', '9eeaff9d10481212ab2c934af69ef9d4'),
(7, 'Viera', 'Mouzinho', '873821799', NULL, 'M', NULL, '', '595825461', '1990-07-05', 'viera.mouzinho', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'Fernando', 'Mbamba', '823821799', NULL, '', NULL, '', '1254125422', '2006-06-06', 'fernando.mbamba', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Erasmo', 'Simbe', '843672959', NULL, NULL, NULL, NULL, '1254652155', NULL, 'erasmo', 'c712f5ccd4054637a611681b6d9e9784'),
(10, 'Rosa ', 'Clavino', '843885785', NULL, '', NULL, '', '1546265455', '1973-07-29', 'rosa.clavino', '827ccb0eea8a706c4c34a16891f84e7b'),
(11, 'Cely', 'Gabriel', '844381331', NULL, '', NULL, '', '8526524112', '2003-11-25', 'cely.gabriel', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `filme`
--

DROP TABLE IF EXISTS `filme`;
CREATE TABLE IF NOT EXISTS `filme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tituloFilme` varchar(30) DEFAULT NULL,
  `autor` varchar(45) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `anoLancamento` int(11) DEFAULT NULL,
  `duracao` varchar(50) DEFAULT NULL,
  `produtor` varchar(10) DEFAULT NULL,
  `cartazFilme` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filme`
--

INSERT INTO `filme` (`id`, `tituloFilme`, `autor`, `descricao`, `anoLancamento`, `duracao`, `produtor`, `cartazFilme`) VALUES
(1, 'Os Vingandores', 'Scott Adkins', 'Granda filme!', 2012, '2h', 'Holleywood', '5f227e2c3ea308.93160833.png'),
(2, 'O Forasteiro', 'Phull Stone', 'Um filme bastante interessante, onde o protagonista...', 2015, '2h', 'Jimmy Jack', '5f2c90c44b7400.41004602.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sala`
--

INSERT INTO `sala` (`id`, `nomeSala`, `capacidade`) VALUES
(1, 'Sala 1', 20),
(2, 'Sala 2', 40),
(3, 'Sala 3', 100);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sessao`
--

INSERT INTO `sessao` (`id`, `data`, `horaInicio`, `horaFim`, `preco`, `idSala`, `idFilme`) VALUES
(1, '2020-07-31', '17:00:00', '19:00:00', '500', 2, 1),
(2, '2020-08-05', '17:00:00', '18:30:00', '300', 1, 1),
(3, '2020-08-20', '14:50:00', '15:50:00', '250', 1, 2);

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
(12, 'Lemos', 'Gabriel', '842571650', 'NUIT', '84561284653', 'lemosgabriel@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Funcionario', 'Moatize', 'lemos.gabriel', '2000-08-19', 'M'),
(13, 'Zaida ', 'Gabriel', '842857997', '', '128955256', 'zaidamanuelgabriel@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Funcionario', 'Moatize', 'zaida.gabriel', '1994-05-15', 'F'),
(14, 'Elisete', 'Mourinho', '845128229', 'NUIT', '5412451251', 'elisetemanuelmourinho@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Funcionario', 'Moatize', 'elisete.mourinho', '1999-08-05', 'F');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
