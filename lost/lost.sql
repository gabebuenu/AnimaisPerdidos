-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 26/11/2023 às 02:54
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lost`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_animal`
--

CREATE TABLE `cadastro_animal` (
  `id` int(11) NOT NULL,
  `nome_do_animal` varchar(255) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `porte` varchar(20) NOT NULL,
  `observacao` text NOT NULL,
  `informacoes_de_contato` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro_animal`
--

INSERT INTO `cadastro_animal` (`id`, `nome_do_animal`, `especie`, `cor`, `porte`, `observacao`, `informacoes_de_contato`) VALUES
(1, 'jorge', 'cachorro', 'branco', 'pequeno', 'eaeae', '1499814767'),
(2, 'jorge', 'cachorro', 'branco', 'pequeno', 'eaeae', '1499814767'),
(3, 'jorge', 'ave', 'branco', 'pequeno', 'eaea', '1499814767');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `telefone`, `email`, `mensagem`) VALUES
(1, 'aeeeaea', '12345678', 'eaeae@dada', 'eae');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login_usuario`
--

CREATE TABLE `login_usuario` (
  `id_login` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `senha_ani` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login_usuario`
--

INSERT INTO `login_usuario` (`id_login`, `id_usuario`, `nome_usuario`, `senha_ani`) VALUES
(1, NULL, 'gabrielbueno', 'dala0123'),
(2, NULL, 'brunobueno', 'dala0123'),
(3, NULL, 'gabrielbueno.s', 'dala0123'),
(4, NULL, 'gabrielbueno', 'dala0123'),
(5, NULL, 'gabrielbueno', 'dala0123'),
(6, NULL, 'gabriel', 'dala0123'),
(7, NULL, 'eita', 'dala0123'),
(8, NULL, 'gabriel', 'dala0123'),
(9, NULL, 'receba', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `relatorio_animais_encontrados`
--

CREATE TABLE `relatorio_animais_encontrados` (
  `id` int(11) NOT NULL,
  `nome_encontrado` varchar(255) NOT NULL,
  `descricao_encontrado` text DEFAULT NULL,
  `foto_url_encontrado` varchar(255) DEFAULT NULL,
  `local_encontrado` varchar(255) NOT NULL,
  `data_encontrado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_usuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `confirmar_senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_usuario`, `email`, `senha`, `confirmar_senha`) VALUES
(1, 'gabriel', 'gb@gmail.com', 'dala0123', 'dala0123'),
(2, 'eita', 'gabs@gmail.com', 'eita123', 'eita123');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro_animal`
--
ALTER TABLE `cadastro_animal`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `login_usuario`
--
ALTER TABLE `login_usuario`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices de tabela `relatorio_animais_encontrados`
--
ALTER TABLE `relatorio_animais_encontrados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_animal`
--
ALTER TABLE `cadastro_animal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `login_usuario`
--
ALTER TABLE `login_usuario`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `relatorio_animais_encontrados`
--
ALTER TABLE `relatorio_animais_encontrados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `login_usuario`
--
ALTER TABLE `login_usuario`
  ADD CONSTRAINT `login_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
