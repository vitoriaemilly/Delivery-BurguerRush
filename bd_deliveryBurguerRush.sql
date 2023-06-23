-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/06/2023 às 04:18
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
-- Banco de dados: `restaurante`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `idAdm` int(10) NOT NULL,
  `loginAdm` varchar(255) NOT NULL,
  `passwordAdmin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`idAdm`, `loginAdm`, `passwordAdmin`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL,
  `nome` text NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(80) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `numero` int(10) NOT NULL,
  `complemento` varchar(255) NOT NULL,
  `cep` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `CPF`, `email`, `telefone`, `senha`, `estado`, `cidade`, `bairro`, `numero`, `complemento`, `cep`) VALUES
(3, 'Joãozinho', '999.999.999-99', 'joaoteste@gmail.com', '00000000000000', '12345678', '', '', '', 0, '', ''),
(5, 'josé', '555.555.555-55', 'jose@gmail.com', '(55) 5555-5555', '12345678', '27', '2701407', 'centro', 5555, 'praça', '55555555555'),
(8, 'Pedro Henrique ', '103.103.103-13', 'pedrohenrique@gmail.com', '(88) 99999-9999', '@pEDRO20$', '23', '2308005', 'centro', 100, 'Igreja', '62140-000'),
(9, 'vick', '222.222.222-22', 'umaescritora@gmail.com', '(22) 22222-2222', '22222222', '23', '2313906', 'centro', 22, 'correios', '22222-222'),
(10, 'Franciso', '666.666.666-66', 'FRANCISCO10@gmail.com', '(44) 44444-4444', '123456789', '24', '2401800', 'centro', 30, 'praça', '66666-666');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdm`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `CPF` (`CPF`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdm` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
