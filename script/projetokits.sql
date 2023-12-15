-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/12/2023 às 00:48
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projetokits`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(5) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `nome`, `telefone`, `cpf`, `cargo`) VALUES
(1, 'MATHEUS', '8199999-9999', '12332112332', 'PROFESSOR'),
(2, 'ANA', '8199999-9999', '78998778998', 'PROFESSOR'),
(3, 'MARIA', '8199999-9999', '45665445665', 'PROFESSOR');

-- --------------------------------------------------------

--
-- Estrutura para tabela `kits`
-- 

CREATE TABLE `kits` (
  `id` int(5) NOT NULL,
  `descricao` varchar(40) NOT NULL,
  `sala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `kits`
--

INSERT INTO `kits` (`id`, `descricao`, `sala`) VALUES
(3, 'KIT SALA 01', '01'),
(4, 'KIT SALA 02', '02'),
(5, 'KIT SALA 03', '03'),
(6, 'KIT SALA 04', '04'),
(7, 'KIT SALA 05', '05'),
(8, 'KIT SALA 06', '06'),
(9, 'KIT SALA 07', '07'),
(10, 'KIT SALA 08', '08'),
(11, 'KIT SALA 09', '09'),
(12, 'KIT SALA 10', '10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `solicitacoes_kits`
--

CREATE TABLE `solicitacoes_kits` (
  `id` int(5) NOT NULL,
  `data_hora_solicitacao` date NOT NULL,
  `id_kit` int(5) NOT NULL,
  `id_colaborador` int(5) NOT NULL,
  `data_hora_entrega` date NOT NULL,
  `baixa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `kits`
--
ALTER TABLE `kits`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `solicitacoes_kits`
--
ALTER TABLE `solicitacoes_kits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `kits`
--
ALTER TABLE `kits`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `solicitacoes_kits`
--
ALTER TABLE `solicitacoes_kits`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
