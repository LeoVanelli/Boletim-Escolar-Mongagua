-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 18-Nov-2020 às 16:01
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `db_boletim`
--
CREATE DATABASE IF NOT EXISTS `db_boletim` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_boletim`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_aluno` (
  `ra_aluno` bigint(13) unsigned NOT NULL,
  `nm_aluno` varchar(80) NOT NULL,
  `nm_responsavel` varchar(80) NOT NULL,
  `cd_turma` tinyint(2) unsigned DEFAULT NULL,
  `nr_aluno` tinyint(2) NOT NULL,
  `dt_nasc` date NOT NULL,
  `y_letivo` year(4) DEFAULT NULL,
  PRIMARY KEY (`ra_aluno`),
  UNIQUE KEY `id_alunos_UNIQUE` (`ra_aluno`),
  KEY `fk_tb_aluno_tb_turma1_idx` (`cd_turma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bimestre`
--

CREATE TABLE IF NOT EXISTS `tb_bimestre` (
  `cd_bimestre` tinyint(1) NOT NULL,
  `ra_aluno` bigint(13) unsigned NOT NULL,
  `cd_materia` tinyint(2) NOT NULL,
  `nota` tinyint(2) NOT NULL,
  `falta` tinyint(2) NOT NULL,
  PRIMARY KEY (`cd_bimestre`,`ra_aluno`,`cd_materia`),
  KEY `fk_tb_aluno_has_tb_matéria_tb_matéria1_idx` (`cd_materia`),
  KEY `fk_tb_aluno_has_tb_matéria_tb_aluno1_idx` (`ra_aluno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_escola`
--

CREATE TABLE IF NOT EXISTS `tb_escola` (
  `cd_escola` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `nm_escola` varchar(50) NOT NULL,
  PRIMARY KEY (`cd_escola`),
  UNIQUE KEY `id_escola_UNIQUE` (`cd_escola`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `tb_escola`
--

INSERT INTO `tb_escola` (`cd_escola`, `nm_escola`) VALUES
(1, 'EMEF Barigui'),
(2, 'EMEF Flórida Mirim'),
(3, 'EMEF Hortência Quintino de Faria Botelho'),
(4, 'EMEF Ivone de Almeira Monteiro'),
(5, 'EMEF Jacoub Koukdjian'),
(6, 'EMEF José Cesário Pereira Filho'),
(7, 'EMEF Prefeito Cassimiro Correia Neto'),
(8, 'EMEF Jacyra de Souza Oliveira'),
(9, 'EMEF Prof. Pedro Fernandes Dante'),
(10, 'EMEF Regina Maria'),
(11, 'EMEF Sirana Koukdjian'),
(12, 'EMEF Tonico Silva'),
(13, 'EMEF Vera Cruz'),
(14, 'EMEF Vereador Joaquim Monteiro'),
(15, 'EMEF Vereador José Carlos de Freitas'),
(16, 'EMEIEF Nair Melo Francisco – Dona Naia'),
(17, 'EMEIEF Pequeno Príncipe'),
(18, 'EMEIEF Prof. Célia Pupo de Jesus'),
(19, 'EMEIEF Prof. Claudia Maria Andrella'),
(20, 'EMEIEF Sitio do Pica Pau Amarelo'),
(21, 'EMEIEF Vila Atlântica');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_materia`
--

CREATE TABLE IF NOT EXISTS `tb_materia` (
  `cd_materia` tinyint(2) NOT NULL AUTO_INCREMENT,
  `nm_materia` varchar(15) NOT NULL,
  PRIMARY KEY (`cd_materia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `tb_materia`
--

INSERT INTO `tb_materia` (`cd_materia`, `nm_materia`) VALUES
(1, 'Português'),
(2, 'Matemática'),
(3, 'Ciências'),
(4, 'História'),
(5, 'Geografia'),
(6, 'Arte'),
(7, 'Educação Fisica'),
(8, 'Inglês');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_materia_professor`
--

CREATE TABLE IF NOT EXISTS `tb_materia_professor` (
  `cd_materia_professor` smallint(5) NOT NULL AUTO_INCREMENT,
  `cd_materia` tinyint(2) NOT NULL,
  `rg_professor` int(9) NOT NULL,
  PRIMARY KEY (`cd_materia_professor`),
  KEY `fk_tb_matéria_has_tb_professor_tb_professor1_idx` (`rg_professor`),
  KEY `fk_tb_matéria_has_tb_professor_tb_matéria1_idx` (`cd_materia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_professor`
--

CREATE TABLE IF NOT EXISTS `tb_professor` (
  `rg_professor` int(9) NOT NULL,
  `sg_estado` char(2) NOT NULL,
  `nm_professor` varchar(40) NOT NULL,
  PRIMARY KEY (`rg_professor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma`
--

CREATE TABLE IF NOT EXISTS `tb_turma` (
  `cd_turma` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `nm_turma` varchar(10) NOT NULL,
  `cd_escola` tinyint(2) unsigned NOT NULL,
  `y_letivo` year(4) NOT NULL,
  PRIMARY KEY (`cd_turma`),
  UNIQUE KEY `id_serie_UNIQUE` (`cd_turma`),
  KEY `fk_tb_turma_tb_escola1_idx` (`cd_escola`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=91 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_turma_professor`
--

CREATE TABLE IF NOT EXISTS `tb_turma_professor` (
  `cd_turma_professor` tinyint(2) NOT NULL AUTO_INCREMENT,
  `cd_turma` tinyint(2) unsigned NOT NULL,
  `rg_professor` int(9) NOT NULL,
  PRIMARY KEY (`cd_turma_professor`),
  KEY `fk_tb_turma_has_tb_professor_tb_professor1_idx` (`rg_professor`),
  KEY `fk_tb_turma_has_tb_professor_tb_turma1_idx` (`cd_turma`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(6) NOT NULL AUTO_INCREMENT,
  `nm_usuario` varchar(80) NOT NULL,
  `nr_senha` varchar(50) NOT NULL,
  `ds_email` varchar(50) NOT NULL,
  `nv_permissao` tinyint(4) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id_usuario`, `nm_usuario`, `nr_senha`, `ds_email`, `nv_permissao`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 3),
(2, 'secret', 'secret', 'secret@secret.com', 2),
(3, 'prof', 'prof', 'prof@prof.com', 1);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_aluno`
--
ALTER TABLE `tb_aluno`
  ADD CONSTRAINT `fk_tb_aluno_tb_turma1` FOREIGN KEY (`cd_turma`) REFERENCES `tb_turma` (`cd_turma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_bimestre`
--
ALTER TABLE `tb_bimestre`
  ADD CONSTRAINT `fk_tb_aluno_has_tb_matéria_tb_aluno1` FOREIGN KEY (`ra_aluno`) REFERENCES `tb_aluno` (`ra_aluno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_aluno_has_tb_matéria_tb_matéria1` FOREIGN KEY (`cd_materia`) REFERENCES `tb_materia` (`cd_materia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_materia_professor`
--
ALTER TABLE `tb_materia_professor`
  ADD CONSTRAINT `fk_tb_matéria_has_tb_professor_tb_matéria1` FOREIGN KEY (`cd_materia`) REFERENCES `tb_materia` (`cd_materia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_matéria_has_tb_professor_tb_professor1` FOREIGN KEY (`rg_professor`) REFERENCES `tb_professor` (`rg_professor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_turma`
--
ALTER TABLE `tb_turma`
  ADD CONSTRAINT `fk_tb_turma_tb_escola1` FOREIGN KEY (`cd_escola`) REFERENCES `tb_escola` (`cd_escola`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_turma_professor`
--
ALTER TABLE `tb_turma_professor`
  ADD CONSTRAINT `fk_tb_turma_has_tb_professor_tb_professor1` FOREIGN KEY (`rg_professor`) REFERENCES `tb_professor` (`rg_professor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_turma_has_tb_professor_tb_turma1` FOREIGN KEY (`cd_turma`) REFERENCES `tb_turma` (`cd_turma`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
