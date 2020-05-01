-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Maio-2020 às 19:11
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

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
  `nome_bairro` varchar(255) NOT NULL,
  `id_representante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `bairro`
--

INSERT INTO `bairro` (`id_bairro`, `nome_bairro`, `id_representante`) VALUES
(1789, 'Acupe', 1),
(1790, 'Aeroporto', 1),
(1791, 'Aguas Claras', 1),
(1792, 'Alto da Terezinha', 1),
(1793, 'Alto das Pombas', 1),
(1794, 'Alto do Cabrito', 1),
(1795, 'Alto do Coqueirinho', 1),
(1796, 'Amaralina', 1),
(1797, 'Areia Branca', 1),
(1798, 'Arenoso', 1),
(1799, 'Arraial do Retiro', 1),
(1800, 'Bairro da Paz', 1),
(1801, 'Baixa de Quintas', 1),
(1802, 'Barbalho', 1),
(1803, 'Barra', 1),
(1804, 'Barreiras', 1),
(1805, 'Barris', 1),
(1806, 'Beiru/Tancredo Neves', 1),
(1807, 'Boa Viagem', 1),
(1808, 'Boa Vista de Brotas', 1),
(1809, 'Boa Vista de Sao Caetano', 1),
(1810, 'Boca da Mata', 1),
(1811, 'Boca do Rio', 1),
(1812, 'Bom Jua', 1),
(1813, 'Bonfim', 1),
(1814, 'Brotas', 1),
(1815, 'Cabula', 1),
(1816, 'Cabula VI', 1),
(1817, 'Caixa D\'Agua', 1),
(1818, 'Cajazeiras II', 1),
(1819, 'Cajazeiras IV', 1),
(1820, 'Cajazeiras V', 1),
(1821, 'Cajazeiras VI', 1),
(1822, 'Cajazeiras VII', 1),
(1823, 'Cajazeiras VIII', 1),
(1824, 'Cajazeiras X', 1),
(1825, 'Cajazeiras XI', 1),
(1826, 'Calabar', 1),
(1827, 'Calabetao', 1),
(1828, 'Cal?ada', 1),
(1829, 'Caminho das Arvores', 1),
(1830, 'Caminho de Areia', 1),
(1831, 'Campinas de Piraja', 1),
(1832, 'Canabrava', 1),
(1833, 'Candeal', 1),
(1834, 'Canela', 1),
(1835, 'Capelinha', 1),
(1836, 'Cassange', 1),
(1837, 'Castelo Branco', 1),
(1838, 'Centro', 1),
(1839, 'Centro Administrativo da Bahia', 1),
(1840, 'Centro Hist?rico', 1),
(1841, 'Chapada do Rio Vermelho', 1),
(1842, 'Cidade Nova', 1),
(1843, 'Comercio', 1),
(1844, 'Cosme de Farias', 1),
(1845, 'Costa Azul', 1),
(1846, 'Coutos', 1),
(1847, 'Curuzu', 1),
(1848, 'Dom Avelar', 1),
(1849, 'Doron', 1),
(1850, 'Engenho Velho da Federacao', 1),
(1851, 'Engenho Velho de Brotas', 1),
(1852, 'Engomadeira', 1),
(1853, 'Fazenda Coutos', 1),
(1854, 'Fazenda Grande do Retiro', 1),
(1855, 'Fazenda Grande I', 1),
(1856, 'Fazenda Grande II', 1),
(1857, 'Fazenda Grande III', 1),
(1858, 'Fazenda Grande IV', 1),
(1859, 'Federa?cao', 1),
(1860, 'Garcia', 1),
(1861, 'Graca', 1),
(1862, 'Granjas Rurais Presidente Vargas', 1),
(1863, 'IAPI', 2),
(1864, 'Ilha de Bom Jesus dos Passos', 2),
(1865, 'Ilha de Mare', 2),
(1866, 'Ilha dos Frades', 2),
(1867, 'Imbui', 2),
(1868, 'Itacaranha', 2),
(1869, 'Itaigara', 2),
(1870, 'Itapua', 2),
(1871, 'Itinga', 2),
(1872, 'Jaguaripe I', 2),
(1873, 'Jardim Armacao', 2),
(1874, 'Jardim Cajazeiras', 2),
(1875, 'Jardim das Margaridas', 2),
(1876, 'Jardim Nova Esperanca', 2),
(1877, 'Jardim Santo Inacio', 2),
(1878, 'Lapinha', 2),
(1879, 'Liberdade', 2),
(1880, 'Lobato', 2),
(1881, 'Luiz Anselmo', 2),
(1882, 'Macaubas', 2),
(1883, 'Mangueira', 2),
(1884, 'Marechal Rondon', 2),
(1885, 'Mares', 2),
(1886, 'Massaranduba', 2),
(1887, 'Mata Escura', 2),
(1888, 'Matatu', 2),
(1889, 'Monte Serrat', 2),
(1890, 'Moradas da Lagoa', 2),
(1891, 'Mussurunga', 2),
(1892, 'Narandiba', 2),
(1893, 'Nazare', 2),
(1894, 'Nordeste de Amaralina', 2),
(1895, 'Nova Brasilia', 2),
(1896, 'Nova Constituinte', 2),
(1897, 'Nova Esperanca', 2),
(1898, 'Nova Sussuarana', 2),
(1899, 'Novo Horizonte', 2),
(1900, 'Novo Marotinho', 2),
(1901, 'Ondina', 2),
(1902, 'Palestina', 2),
(1903, 'Paripe', 2),
(1904, 'Patamares', 2),
(1905, 'Pau da Lima', 2),
(1906, 'Pau Miudo', 2),
(1907, 'Periperi', 2),
(1908, 'Pernambues', 2),
(1909, 'Pero Vaz', 2),
(1910, 'Piata', 2),
(1911, 'Piraja', 2),
(1912, 'Pitua?u', 2),
(1913, 'Pituba', 2),
(1914, 'Plataforma', 2),
(1915, 'Porto Seco Piraja', 2),
(1916, 'Praia Grande', 2),
(1917, 'Resgate', 2),
(1918, 'Retiro', 2),
(1919, 'Ribeira', 2),
(1920, 'Rio Sena', 2),
(1921, 'Rio Vermelho', 2),
(1922, 'Roma', 2),
(1923, 'Saboeiro', 2),
(1924, 'Santa Cruz', 2),
(1925, 'Santa Luzia', 2),
(1926, 'Santa Monica', 2),
(1927, 'Santo Agostinho', 2),
(1928, 'Santo Antonio', 2),
(1929, 'Sao Caetano', 2),
(1930, 'Sao Crist?vao', 2),
(1931, 'Sao Gon?alo', 2),
(1932, 'Sao Joao do Cabrito', 2),
(1933, 'Sao Marcos', 2),
(1934, 'Sao Rafael', 2),
(1935, 'Sao Tome', 2),
(1936, 'Saramandaia', 2),
(1937, 'Saude', 2),
(1938, 'Sete de Abril', 2),
(1939, 'Stella Maris', 2),
(1940, 'STIEP', 2),
(1941, 'Sussuarana', 2),
(1942, 'Tororo', 2),
(1943, 'Trobogy', 2),
(1944, 'Uruguai', 2),
(1945, 'Vale das Pedrinhas', 2),
(1946, 'Vale dos Lagos', 2),
(1947, 'Valeria', 2),
(1948, 'Vila Canaria', 2),
(1949, 'Vila Laura', 2),
(1950, 'Vila Ruy Barbosa/Jardim Cruzeiro', 2),
(1951, 'Vitoria', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `novo_cliente`
--

CREATE TABLE `novo_cliente` (
  `tipoPessoa` varchar(11) NOT NULL,
  `id_cliente` varchar(30) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `nome_2` varchar(255) NOT NULL,
  `qtd_pares` varchar(50) NOT NULL,
  `logradouro` varchar(511) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `num` int(5) DEFAULT NULL,
  `complemento` varchar(512) DEFAULT NULL,
  `id_bairro` int(11) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cel` varchar(14) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Não Atendido',
  `rg_ie` varchar(25) DEFAULT NULL,
  `cpf_cnpj` varchar(15) DEFAULT NULL,
  `hora_cadastro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `novo_cliente`
--

INSERT INTO `novo_cliente` (`tipoPessoa`, `id_cliente`, `nome`, `nome_2`, `qtd_pares`, `logradouro`, `cep`, `num`, `complemento`, `id_bairro`, `cidade`, `email`, `cel`, `status`, `rg_ie`, `cpf_cnpj`, `hora_cadastro`) VALUES
('Fisica', '5eac493186224', 'Ariel', 'Nogueira', 'Acima de 35 Pares', 'Rua A', '23131-231', 0, '', 1804, 'Salvador', 'arielnnogueira@hotmail.com', '(77)77777-7777', 'Atendido', '22.222.222-22', '333.333.333-33', '2020-05-01 16:08:50'),
('Fisica', '5eac528b046f1', 'xfqytjgfx', 'cqwgf', 'Acima de 35 Pares', 'rua do cao ', '82015-902', 783, '', 1800, 'Salvador', 'vhekcaHEGVEG@gmail.com', '(37)18758-1735', 'Não Atendido', NULL, NULL, '2020-05-01 16:48:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `representante`
--

CREATE TABLE `representante` (
  `id_representante` int(11) NOT NULL,
  `nome_repre` varchar(255) NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `representante`
--

INSERT INTO `representante` (`id_representante`, `nome_repre`, `login`, `senha`) VALUES
(1, 'administrador', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Ariel', 'ariel', '81dc9bdb52d04dc20036dbd8313ed055');

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
-- Índices para tabela `novo_cliente`
--
ALTER TABLE `novo_cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `rg_ie` (`rg_ie`),
  ADD UNIQUE KEY `cpf_cnpj` (`cpf_cnpj`),
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
  MODIFY `id_bairro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2044;

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
