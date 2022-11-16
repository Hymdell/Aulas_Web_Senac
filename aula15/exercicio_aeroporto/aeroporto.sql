-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Nov-2022 às 23:10
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aeroporto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `assentos`
--

CREATE TABLE `assentos` (
  `Numero` int(2) NOT NULL,
  `Disponivel` varchar(3) NOT NULL,
  `Tamanho` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `assentos`
--

INSERT INTO `assentos` (`Numero`, `Disponivel`, `Tamanho`) VALUES
(1, 'Sim', 'Pequeno'),
(2, 'Sim', 'Pequeno'),
(3, 'Sim', 'Pequeno'),
(4, 'Sim', 'Pequeno'),
(5, 'Sim', 'Pequeno'),
(6, 'Sim', 'Pequeno'),
(7, 'Sim', 'Pequeno'),
(8, 'Sim', 'Pequeno'),
(9, 'Sim', 'Pequeno'),
(10, 'Sim', 'Pequeno'),
(11, 'Sim', 'Médio'),
(12, 'Sim', 'Médio'),
(13, 'Sim', 'Médio'),
(14, 'Sim', 'Médio'),
(15, 'Sim', 'Médio'),
(16, 'Sim', 'Médio'),
(17, 'Sim', 'Médio'),
(18, 'Sim', 'Médio'),
(19, 'Sim', 'Médio'),
(20, 'Sim', 'Médio'),
(21, 'Sim', 'Grande'),
(22, 'Sim', 'Grande'),
(23, 'Sim', 'Grande'),
(24, 'Sim', 'Grande'),
(25, 'Sim', 'Grande'),
(26, 'Sim', 'Grande'),
(27, 'Sim', 'Grande'),
(28, 'Sim', 'Grande'),
(29, 'Sim', 'Grande'),
(30, 'Sim', 'Grande');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destinos`
--

CREATE TABLE `destinos` (
  `Cidade` varchar(255) NOT NULL,
  `Localidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `destinos`
--

INSERT INTO `destinos` (`Cidade`, `Localidade`) VALUES
('Beijing(China)', 'Internacional'),
('Brasília', 'Nacional'),
('Canberra(Austrália)', 'Internacional'),
('Moscou(Rússia)', 'Internacional'),
('Porto Alegre', 'Nacional'),
('Rio de Janeiro', 'Nacional'),
('São Paulo', 'Nacional'),
('Tokyo(Japão)', 'Internacional'),
('Vitória', 'Nacional'),
('Washington, D.C.(EUA)', 'Internacional');

-- --------------------------------------------------------

--
-- Estrutura da tabela `voos`
--

CREATE TABLE `voos` (
  `Voo` int(255) NOT NULL,
  `Origem` varchar(255) NOT NULL,
  `Destino` varchar(255) NOT NULL,
  `Conexoes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `voos`
--

INSERT INTO `voos` (`Voo`, `Origem`, `Destino`, `Conexoes`) VALUES
(1, 'Rio de Janeiro', 'São Paulo', ''),
(2, 'Beijing(China)', 'Brasília', 'Washington, D.C.(EUA)'),
(3, 'Tokyo(Japão)', 'Washington, D.C.(EUA)', 'Washington, D.C.(EUA)'),
(4, 'Beijing(China)', 'Porto Alegre', 'Tokyo(Japão)'),
(5, 'Beijing(China)', 'Porto Alegre', 'Washington, D.C.(EUA)'),
(6, 'Beijing(China)', 'Porto Alegre', 'Canberra(Austrália)'),
(7, 'Beijing(China)', 'Porto Alegre', 'São Paulo'),
(8, 'Beijing(China)', 'Porto Alegre', 'Moscou(Rússia)'),
(9, 'Beijing(China)', 'Porto Alegre', 'Rio de Janeiro');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `assentos`
--
ALTER TABLE `assentos`
  ADD PRIMARY KEY (`Numero`);

--
-- Índices para tabela `destinos`
--
ALTER TABLE `destinos`
  ADD PRIMARY KEY (`Cidade`);

--
-- Índices para tabela `voos`
--
ALTER TABLE `voos`
  ADD PRIMARY KEY (`Voo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `voos`
--
ALTER TABLE `voos`
  MODIFY `Voo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
