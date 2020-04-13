-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Abr-2020 às 00:07
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairro`
--

CREATE TABLE `bairro` (
  `id_bairro` int(11) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `id_representante` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bairro`
--

INSERT INTO `bairro` (`id_bairro`, `cidade`, `bairro`, `id_representante`) VALUES
(1, 'Salvador', 'Brotas', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` varchar(255) NOT NULL,
  `id_tipo` int(255) NOT NULL,
  `nome` varchar(512) NOT NULL,
  `nome_2` varchar(512) NOT NULL,
  `cpf_cnpj` varchar(512) NOT NULL,
  `qtd_pares` varchar(255) NOT NULL,
  `logradouro` varchar(512) NOT NULL,
  `cep` int(8) NOT NULL,
  `num` int(4) DEFAULT NULL,
  `complemento` varchar(512) DEFAULT NULL,
  `cidade` varchar(255) NOT NULL,
  `id_bairro` int(11) NOT NULL,
  `email_cliente` varchar(255) NOT NULL,
  `cel_cliente` int(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `novo_cliente`
--

CREATE TABLE `novo_cliente` (
  `tipoPessoa` varchar(255) NOT NULL,
  `id_cliente` varchar(255) NOT NULL,
  `nome` varchar(512) NOT NULL,
  `nome_2` varchar(512) NOT NULL,
  `qtd_pares` varchar(255) NOT NULL,
  `logradouro` varchar(512) NOT NULL,
  `cep` int(8) NOT NULL,
  `num` int(4) DEFAULT NULL,
  `complemento` varchar(512) DEFAULT NULL,
  `cidade` varchar(255) NOT NULL,
  `id_bairro` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cel` int(255) NOT NULL,
  `hora_cadas` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'Sem atendimento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `novo_cliente`
--

INSERT INTO `novo_cliente` (`tipoPessoa`, `id_cliente`, `nome`, `nome_2`, `qtd_pares`, `logradouro`, `cep`, `num`, `complemento`, `cidade`, `id_bairro`, `email`, `cel`, `hora_cadas`, `status`) VALUES
('Fisica', '5e93711c2acbb', '2', '32', 'Acima de 35 Pares', '1111111111111111', 0, 0, '----------------', 'Salvador', 1, 'adsdsada@hotmail.com', 0, '2020-04-12 19:53:54', 'Sem atendimento'),
('', '5e9371d26c908', '11111', '32131231', 'Acima de 35 Pares', '231312321321', 0, 0, '----------------', 'Salvador', 1, 'adsdsada@hotmail.com', 0, '2020-04-12 19:54:13', 'Sem atendimento'),
('Fisica', '5e9371e5e9524', '', '', 'Acima de 35 Pares', '', 0, 0, '', 'Salvador', 1, '', 0, '2020-04-12 19:54:20', 'Sem atendimento'),
('', '5e9374c44fa73', 'a', 'a', 'Acima de 35 Pares', 'a', 0, 0, '', 'Salvador', 1, '', 0, '2020-04-12 20:06:35', 'Sem atendimento'),
('Fisica', '5e9385acc8faa', 'Ariel', 'Rocha', 'Abaixo de 35 Pares', 'Rua A', 40276, 23, '', 'Salvador', 1, 'arielnnogueira@hotmail.com', 2147483647, '2020-04-12 21:22:55', 'Sem atendimento'),
('Fisica', '5e9386d713960', 'Ariel', 'Rocha', 'Abaixo de 35 Pares', 'Rua A', 40276, 23, '', 'Salvador', 1, 'arielnnogueira@hotmail.com', 2147483647, '2020-04-12 21:23:39', 'Sem atendimento'),
('Juridica', '5e938866226c9', 'bvsqwrft', 'ebsfdrbtqaesbrtfaqw', 'Acima de 35 Pares', 'eqrbgvs r', 0, 0, 'baqwsrfb', 'Salvador', 1, 'pintojr@gmail.com', 0, '2020-04-12 21:34:12', 'Sem atendimento');

-- --------------------------------------------------------

--
-- Estrutura da tabela `representante`
--

CREATE TABLE `representante` (
  `id_representante` int(11) NOT NULL,
  `representante` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `representante`
--

INSERT INTO `representante` (`id_representante`, `representante`, `login`, `senha`, `email`, `telefone`) VALUES
(1, 'Marcelo das Neves', '', '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `bairro`
--
ALTER TABLE `bairro`
  ADD PRIMARY KEY (`id_bairro`),
  ADD KEY `id_representante` (`id_representante`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `novo_cliente`
--
ALTER TABLE `novo_cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_bairro` (`id_bairro`);

--
-- Índices para tabela `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`id_representante`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bairro`
--
ALTER TABLE `bairro`
  MODIFY `id_bairro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `representante`
--
ALTER TABLE `representante`
  MODIFY `id_representante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `bairro`
--
ALTER TABLE `bairro`
  ADD CONSTRAINT `bairro_ibfk_1` FOREIGN KEY (`id_representante`) REFERENCES `representante` (`id_representante`);

--
-- Limitadores para a tabela `novo_cliente`
--
ALTER TABLE `novo_cliente`
  ADD CONSTRAINT `novo_cliente_ibfk_1` FOREIGN KEY (`id_bairro`) REFERENCES `bairro` (`id_bairro`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
