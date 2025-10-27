-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/10/2025 às 22:15
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `conecta`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `moreta`
--

CREATE TABLE `moreta` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `cpf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `moreta`
--

INSERT INTO `moreta` (`id`, `nome`, `celular`, `cpf`) VALUES
(1, 'enzo', '3232', '1222343'),
(2, 'qwqw', '1121', '3w333'),
(3, 'wqrr', '111', '333'),
(4, 'mateus', '22122432321', '1224255533');

-- --------------------------------------------------------

--
-- Estrutura para tabela `quest`
--

CREATE TABLE `quest` (
  `id` int(11) NOT NULL,
  `esportes` varchar(100) NOT NULL,
  `musicas` varchar(100) NOT NULL,
  `cursos` varchar(100) NOT NULL,
  `palestras` varchar(100) NOT NULL,
  `workshops` varchar(100) NOT NULL,
  `teatros` varchar(100) NOT NULL,
  `data_envio` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `quest`
--

INSERT INTO `quest` (`id`, `esportes`, `musicas`, `cursos`, `palestras`, `workshops`, `teatros`, `data_envio`) VALUES
(3, '', '', 'Bacharelados', '', '', '', '2025-10-22 20:10:37');

-- --------------------------------------------------------

--
-- Estrutura para tabela `respostas`
--

CREATE TABLE `respostas` (
  `id` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `cpf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios_novos`
--

CREATE TABLE `usuarios_novos` (
  `id` int(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cep` varchar(250) NOT NULL,
  `genero` text NOT NULL,
  `idade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `moreta`
--
ALTER TABLE `moreta`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `quest`
--
ALTER TABLE `quest`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios_novos`
--
ALTER TABLE `usuarios_novos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `moreta`
--
ALTER TABLE `moreta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `quest`
--
ALTER TABLE `quest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `respostas`
--
ALTER TABLE `respostas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios_novos`
--
ALTER TABLE `usuarios_novos`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
