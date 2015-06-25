-- phpMyAdmin SQL Dump
-- version 4.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 25, 2015 at 06:20 PM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.6.9-1+deb.sury.org~trusty+2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `adoremos`
--

-- --------------------------------------------------------

--
-- Table structure for table `analytic`
--

CREATE TABLE IF NOT EXISTS `analytic` (
  `id` int(11) NOT NULL,
  `pagina` int(11) DEFAULT NULL,
  `id_pagina` int(11) DEFAULT NULL,
  `criacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `quantidade` int(11) DEFAULT '1',
  `user_agent` text,
  `ip` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `size`, `type`, `criacao`) VALUES
(9, '1-o.jpg', 230191, 'image/jpeg', '2015-06-25 14:56:11');

-- --------------------------------------------------------

--
-- Table structure for table `contato`
--

CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `mensagem` text,
  `criacao` timestamp NULL DEFAULT NULL,
  `atualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `arquivo` varchar(200) DEFAULT NULL,
  `tipo` int(11) DEFAULT '1' COMMENT '1 falo conosco 2 Depoimentos',
  `status` int(11) DEFAULT '2' COMMENT '1 publicado 2 nÃ£o publicado',
  `lido` int(11) DEFAULT '2' COMMENT '1 lido 2 nÃ£o lido',
  `resposta` int(11) DEFAULT NULL COMMENT '1 sim, 2 nÃ£o',
  `assunto` varchar(45) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `telefone`, `mensagem`, `criacao`, `atualizacao`, `arquivo`, `tipo`, `status`, `lido`, `resposta`, `assunto`) VALUES
(14, 'xxx', NULL, NULL, 'fasdfsdf', '2015-04-13 17:58:15', '2015-04-14 16:50:21', NULL, 2, 2, 2, NULL, NULL),
(13, 'Antonio Santos', NULL, NULL, 'Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. ', '2015-04-08 20:58:13', '2015-04-14 16:49:36', NULL, 2, 1, 2, NULL, NULL),
(11, 'Antonio Santos', NULL, NULL, 'Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. ', '2015-04-08 20:54:47', '2015-04-08 21:03:29', NULL, 2, 1, 2, NULL, NULL),
(16, 'Antonio Santos', NULL, NULL, 'asdfasdfasdf', '2015-04-14 16:49:15', '2015-04-14 16:49:47', NULL, 2, 1, 2, NULL, NULL),
(17, 'asdfasd', NULL, NULL, 'fasdfasdfasdfsdqf', '2015-04-14 16:49:20', '2015-04-14 16:49:55', NULL, 2, 1, 2, NULL, NULL),
(18, 'asdfasdfsadf', NULL, NULL, 'asdfasdfasdfasd', '2015-04-14 16:49:26', '2015-04-14 16:50:01', NULL, 2, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `criacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galeria`
--

INSERT INTO `galeria` (`id`, `name`, `size`, `type`, `criacao`) VALUES
(12, '1-o.jpg', 230191, 'image/jpeg', '2015-06-25 14:55:26');

-- --------------------------------------------------------

--
-- Table structure for table `sobre`
--

CREATE TABLE IF NOT EXISTS `sobre` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` text,
  `foto` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL COMMENT '1 sobre 2 termo',
  `criacao` timestamp NULL DEFAULT NULL,
  `atualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sobre`
--

INSERT INTO `sobre` (`id`, `nome`, `descricao`, `foto`, `link`, `categoria`, `criacao`, `atualizacao`) VALUES
(1, NULL, 'asdfasdffasdfasdffasdfasdafdsfasdfasdfasfas', NULL, NULL, NULL, NULL, '2015-06-25 14:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` text,
  `status` int(11) DEFAULT NULL,
  `criacao` timestamp NULL DEFAULT NULL,
  `atualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(16) DEFAULT NULL,
  `nivel_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `email`, `senha`, `status`, `criacao`, `atualizacao`, `ip`, `nivel_id`) VALUES
(2, 'marcus', 'marcus', 'marcus@inetsistemas.com.br', '$2y$13$3JSiVXUjUm2f62o46elOnOi3MZDC9CP5Cjy45.JwC9kArN5lFpZwy', NULL, NULL, '2015-06-25 15:01:49', NULL, 0),
(4, 'marcus', 'marcus.antonio', 'admin@admin.com.br', '$2y$10$6GPRt9KoHEr3ILZV64ZxPO02QIFafGmkvuJ4karZtNXIXf7xA6EHi', NULL, NULL, '2015-06-25 15:05:01', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analytic`
--
ALTER TABLE `analytic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
