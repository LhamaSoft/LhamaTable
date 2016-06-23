-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jun-2016 às 22:45
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lhamatable`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `chatmensagens`
--

CREATE TABLE `chatmensagens` (
  `ID` int(10) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `mesaID` int(10) NOT NULL,
  `jogador` varchar(50) NOT NULL,
  `horario` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `chatmensagens`
--

INSERT INTO `chatmensagens` (`ID`, `mensagem`, `mesaID`, `jogador`, `horario`) VALUES
(1, 'Rolou o D4 e conseguiu um: 4', 29, '1', '2016-06-23 20:35:50'),
(2, 'Rolou o D6 e conseguiu um: 1', 29, '1', '2016-06-23 20:35:53'),
(3, 'Rolou o D8 e conseguiu um: 2', 29, '1', '2016-06-23 20:35:54'),
(4, 'Rolou o D20 e conseguiu um: 11', 29, '1', '2016-06-23 20:39:36'),
(5, 'Rolou o D20 e conseguiu um: 16', 29, '1', '2016-06-23 20:39:37'),
(6, 'Rolou o D20 e conseguiu um: 4', 29, '1', '2016-06-23 20:39:40'),
(7, 'Rolou o D20 e conseguiu um: 7', 29, '1', '2016-06-23 20:39:41'),
(8, 'Rolou o D20 e conseguiu um: 3', 29, '1', '2016-06-23 20:39:43'),
(9, 'Rolou o D20 e conseguiu um: 5', 29, '1', '2016-06-23 20:39:44'),
(10, 'Rolou o D20 e conseguiu um: 3', 29, '1', '2016-06-23 20:39:45'),
(11, 'Rolou o D20 e conseguiu um: 4', 29, '1', '2016-06-23 20:39:46'),
(12, 'Rolou o D20 e conseguiu um: 9', 29, '1', '2016-06-23 20:39:48'),
(13, 'Rolou o D20 e conseguiu um: 14', 29, '1', '2016-06-23 20:39:49'),
(14, 'Rolou o D20 e conseguiu um: 11', 29, '1', '2016-06-23 20:39:50'),
(15, 'Rolou o D20 e conseguiu um: 10', 29, '1', '2016-06-23 20:39:51'),
(16, 'Rolou o D20 e conseguiu um: 4', 29, '1', '2016-06-23 20:39:52'),
(17, 'Rolou o D20 e conseguiu um: 17', 29, '1', '2016-06-23 20:39:54'),
(18, 'Rolou o D20 e conseguiu um: 16', 29, '1', '2016-06-23 20:39:55'),
(19, 'Rolou o D20 e conseguiu um: 15', 29, '1', '2016-06-23 20:39:56'),
(20, 'Rolou o D20 e conseguiu um: 10', 29, '1', '2016-06-23 20:39:57'),
(21, 'Rolou o D20 e conseguiu um: 19', 29, '1', '2016-06-23 20:39:58'),
(22, 'Rolou o D20 e conseguiu um: 15', 29, '1', '2016-06-23 20:39:59'),
(23, 'Rolou o D20 e conseguiu um: 16', 29, '1', '2016-06-23 20:40:00'),
(24, 'Rolou o D20 e conseguiu um: 20. Bem Jogado!', 29, '1', '2016-06-23 20:40:01'),
(25, 'Rolou o D20 e conseguiu um: 15', 29, '1', '2016-06-23 20:40:02'),
(26, 'Rolou o D20 e conseguiu um: 14', 29, '1', '2016-06-23 20:40:07'),
(27, 'Rolou o D10 e conseguiu um: 3', 29, '1', '2016-06-23 20:40:22'),
(28, 'Rolou o D10 e conseguiu um: 8', 29, '1', '2016-06-23 20:40:24'),
(29, 'Rolou o D10 e conseguiu um: 5', 29, '1', '2016-06-23 20:40:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ficha`
--

CREATE TABLE `ficha` (
  `ID` int(11) NOT NULL,
  `mesaID` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `caminhoFicha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ficha`
--

INSERT INTO `ficha` (`ID`, `mesaID`, `nome`, `caminhoFicha`) VALUES
(52, 29, 'Ficha1', 'fichas/Tunak Tunak Tun_Ficha1.txt'),
(53, 29, 'Ficha2', 'fichas/Tunak Tunak Tun_Ficha2.txt');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `ID` int(11) NOT NULL,
  `usuarioID` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `caminho` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesa`
--

CREATE TABLE `mesa` (
  `ID` int(10) NOT NULL,
  `mestreID` int(10) NOT NULL,
  `nomeMesa` varchar(50) NOT NULL,
  `senhaMesa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mesa`
--

INSERT INTO `mesa` (`ID`, `mestreID`, `nomeMesa`, `senhaMesa`) VALUES
(29, 1, 'Tunak Tunak Tun', '12345');

-- --------------------------------------------------------

--
-- Estrutura da tabela `privadomensagens`
--

CREATE TABLE `privadomensagens` (
  `ID` int(10) NOT NULL,
  `destID` int(10) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `jogador` int(10) NOT NULL,
  `horario` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `privadomensagens`
--

INSERT INTO `privadomensagens` (`ID`, `destID`, `mensagem`, `jogador`, `horario`) VALUES
(1, 1, ' Mensagm', 1, '2016-06-21 17:39:29'),
(2, 1, ' Outra Mensagem', 1, '2016-06-21 17:39:56'),
(4, 1, 'Mensagens sumirÃ£o em 10 dias ', 1, '2016-06-21 17:41:01'),
(5, 1, ' Mais mensagens', 1, '2016-06-21 17:48:27'),
(6, 0, ' E permitirÃ£o a comunicaÃ§Ã£o entre jogadores', 1, '2016-06-21 17:48:47'),
(7, 1, ' E permitirÃ£o a comunicaÃ§Ã£o entre jogadores', 1, '2016-06-21 17:49:03'),
(8, 1, ' Mais um Teste', 1, '2016-06-21 17:50:30'),
(9, 1, ' 5 Mesas por mestre\r\n', 1, '2016-06-21 18:30:41'),
(10, 44, ' OlÃ¡', 1, '2016-06-21 18:40:23'),
(11, 1, ' Na verdade eu alterei pra 5 dias', 1, '2016-06-23 08:50:07'),
(12, 1, ' Acho que fica melhor assim', 1, '2016-06-23 08:50:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `removidos`
--

CREATE TABLE `removidos` (
  `ID` int(10) NOT NULL,
  `NomeUsuario` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `dataCadastro` datetime NOT NULL,
  `Nascimento` date NOT NULL,
  `tipoUsuario` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `removidos`
--

INSERT INTO `removidos` (`ID`, `NomeUsuario`, `email`, `senha`, `dataCadastro`, `Nascimento`, `tipoUsuario`) VALUES
(20, 'teste', 'user@email.com', '827ccb0eea8a706c4c34', '2016-06-21 15:17:43', '1996-01-01', 0),
(42, 'user', 'user@email.com', '827ccb0eea8a706c4c34', '2016-06-21 04:05:46', '1996-01-01', 0),
(47, 'user', 'user@email.com', '827ccb0eea8a706c4c34', '2016-06-22 05:42:12', '1996-01-01', 0),
(54, 'teste', 'user@email.com', '827ccb0eea8a706c4c34', '2016-06-22 17:50:39', '1996-01-01', 0),
(55, 'user', 'user@mail.com', '827ccb0eea8a706c4c34', '2016-06-22 17:55:55', '1996-01-01', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(10) UNSIGNED NOT NULL,
  `NomeUsuario` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `Nascimento` date NOT NULL,
  `caminhoFoto` varchar(255) NOT NULL,
  `tipoUsuario` tinyint(1) NOT NULL,
  `dataCadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `mesaID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID`, `NomeUsuario`, `email`, `senha`, `Nascimento`, `caminhoFoto`, `tipoUsuario`, `dataCadastro`, `mesaID`) VALUES
(39, 'pudimbr64', 'andrewsimmons007@hotmail.com', '25f9e794323b453885f5181f1b624d0b', '1993-11-04', '', 0, '2016-06-20 14:37:26', 0),
(1, 'CronoLink', 'ronei.junior@outlook.com', '827ccb0eea8a706c4c34a16891f84e7b', '1996-01-01', 'fotosUsuario/CronoLink1.png', 1, '2016-06-19 08:20:35', 29),
(40, 'pudimbr8', 'andrewsimmons34841@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1111-11-11', '', 0, '2016-06-20 15:51:52', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `webchat_lines`
--

CREATE TABLE `webchat_lines` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` varchar(16) NOT NULL,
  `gravatar` varchar(32) NOT NULL,
  `text` varchar(255) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `webchat_users`
--

CREATE TABLE `webchat_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(16) NOT NULL,
  `gravatar` varchar(32) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatmensagens`
--
ALTER TABLE `chatmensagens`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `privadomensagens`
--
ALTER TABLE `privadomensagens`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `removidos`
--
ALTER TABLE `removidos`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `usuario` (`NomeUsuario`);

--
-- Indexes for table `webchat_lines`
--
ALTER TABLE `webchat_lines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ts` (`ts`);

--
-- Indexes for table `webchat_users`
--
ALTER TABLE `webchat_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `last_activity` (`last_activity`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatmensagens`
--
ALTER TABLE `chatmensagens`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `ficha`
--
ALTER TABLE `ficha`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mesa`
--
ALTER TABLE `mesa`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `privadomensagens`
--
ALTER TABLE `privadomensagens`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `removidos`
--
ALTER TABLE `removidos`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `webchat_lines`
--
ALTER TABLE `webchat_lines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `webchat_users`
--
ALTER TABLE `webchat_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `deleta_mensagem` ON SCHEDULE EVERY 60 SECOND STARTS '2016-06-18 08:53:00' ENDS '2016-12-31 00:00:00' ON COMPLETION PRESERVE ENABLE DO DELETE
	FROM chatmensagens
    WHERE TIMESTAMPDIFF(MINUTE, chatmensagens.horario, NOW())>10$$

CREATE DEFINER=`root`@`localhost` EVENT `apagaPrivado` ON SCHEDULE EVERY 1 DAY STARTS '2016-06-23 00:00:00' ON COMPLETION PRESERVE ENABLE DO DELETE
	FROM privadomensagens
    WHERE TIMESTAMPDIFF(DAY, privadomensagens.horario, NOW())>5$$

DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
