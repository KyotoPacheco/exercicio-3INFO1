-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Abr-2018 às 01:37
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3info1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(60) NOT NULL,
  `descricao_categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`, `descricao_categoria`) VALUES
(1, 'Telefonia', 'Produtos de Telefonia'),
(2, 'Informática', 'Produtos de Informática'),
(3, 'Eletrodomésticos', 'Produtos de Eletrodomésticos'),
(4, 'Móveis', 'Produtos de Móveis'),
(5, 'Limpeza', 'Produtos de Limpeza'),
(6, 'Esportes', 'Equipamentos Esportivos'),
(7, 'PETSHOP', 'Coisas para seu amigo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(60) NOT NULL,
  `descricao_produto` varchar(255) NOT NULL,
  `foto_produto` varchar(255) NOT NULL,
  `preco_produto` float NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `descricao_produto`, `foto_produto`, `preco_produto`, `id_categoria`) VALUES
(1, 'Smartphone Samsung Galaxy J5 Duos Dourado com Dual Chip', 'Detalhes do produto: Samsung: Smartphone Samsung Galaxy J5 Duos Dourado com Dual chip, Tela 5.0\", 4G, Câmera 13MP, Android 5.1 e Processador Quad Core de 1.2 Ghz', 'imagens/produtos/j5-dourado.jpg', 759, 1),
(2, 'Smartphone LG K10 TV Índigo', 'Smartphone LG K10 TV Índigo com 16GB, Dual Chip, Tela de 5.3\" HD, 4G, Android 6.0, Câmera 13MP e Processador Octa Core de 1.14 GHz', 'imagens/produtos/k10-indigo.jpg', 699, 1),
(3, 'iPhone 7 Apple 32GB', '\r\niPhone 7 Apple 32GB, Tela Retina HD de 4,7”, 3D Touch, iOS 10, Touch ID, Câm.12MP, Resistente à Água e Sistema de Alto-falantes Estéreo - Prateado', 'imagens/produtos/iphon7-32.jpg', 3199, 1),
(4, 'Notebook Positivo Q232A', 'Notebook Positivo Quad Core 2GB 32GB SSD Tela 14” Windows 10 Motion Q232A', 'imagens/produtos/positivo-q232a', 949, 2),
(5, 'Notebook Lenovo Ideapad 320', 'Notebook Lenovo Core i3-6006U 4GB 1TB Tela Full HD 15.6” Windows 10 Ideapad 320', 'imagens/produtos/lenovo-320.jpg', 1799, 2),
(6, 'Sofá 3 Lugares American Comfort', '\r\nSofá 3 Lugares American Comfort América com Chaise Lado Direito + Puff\r\nEle conta com almofadas fixas com percinta elástica de densidade D-26, encosto com almofadas soltas em flocos de espuma e revestimento em suede pena. ', 'imagens/produtos/sofa-american.jpg', 1799, 4),
(7, ' Cadeira Office Peter', '\r\nCadeira Office Peter c/ Encosto em Nylon e Função Relax – Preta - Importado', 'imagens/produtos/cadeira-peter.jpg', 229, 4),
(8, 'Ajax', 'desinfetante para limpeza pesada', '', 7, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;