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
-- Banco de dados: `almoxarifado`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_ferramentas`
--

CREATE TABLE `tb_ferramentas` (
  `cod_ferramenta` int(255) NOT NULL,
  `nome_ferramenta` varchar(80) NOT NULL,
  `marca_ferramenta` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_ferramentas`
--

INSERT INTO `tb_ferramentas` (`cod_ferramenta`, `nome_ferramenta`, `marca_ferramenta`) VALUES
(2, 'martelo Novo', 'Tramontina Novo'),
(3, 'Prego', 'Sem Marca');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_ferramentas`
--
ALTER TABLE `tb_ferramentas`
  ADD PRIMARY KEY (`cod_ferramenta`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_ferramentas`
--
ALTER TABLE `tb_ferramentas`
  MODIFY `cod_ferramenta` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
