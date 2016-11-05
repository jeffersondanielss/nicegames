-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Out-2016 às 19:25
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nicegames`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `buy`
--

CREATE TABLE `buy` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `sobrenome` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `cidade` varchar(64) NOT NULL,
  `cpf` int(11) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `telefone` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `sobrenome`, `email`, `senha`, `endereco`, `cidade`, `cpf`, `cep`, `telefone`) VALUES
(11, 'cliente', 'The first ', 'cliente@ng.com', '202cb962ac59075b964b07152d234b70', 'av franscisco matarazo', 'SÃ£o Paulo', 2147483647, '03444000', '(11) 1111-1111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `email`, `senha`) VALUES
(5, 'admin', 'admin@ng.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `mensagem` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(64) NOT NULL,
  `genero` varchar(32) NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `lancamento` date DEFAULT NULL,
  `audio` varchar(32) DEFAULT NULL,
  `legenda` varchar(32) DEFAULT NULL,
  `tamanho` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `titulo`, `genero`, `preco`, `lancamento`, `audio`, `legenda`, `tamanho`, `quantidade`, `image`) VALUES
(1, 'Grand Theft Auto V', 'AÃ§Ã£o', '129.00', '2013-09-17', 'EN', 'PT-BR', 65, 50, 0x34393463636363663566643130373332636134653338613063396230363661652e706e67),
(2, 'Dragon ageâ„¢: Inquisition', 'RPG', '85.00', '2014-11-18', 'EN', 'PT-BR', 24, 50, 0x62646430313532613331313634643764613838666335306662666231366636322e706e67),
(3, 'Fifa 2016', 'Esportes', '85.00', '2016-03-05', 'PT-BR', 'PT-BR', 40, 50, 0x30373765613332636664313662613362376135666530626339653938666434652e706e67),
(4, 'Minecraft', 'Survive', '45.00', '2009-05-17', 'EN', 'PT-BR', 5, 50, 0x39303730653366363836666131363363613763303739613837626366363430342e706e67),
(5, 'Need for Speed', 'Corrida', '129.00', '2015-11-03', 'PT-BR', 'PT-BR', 45, 50, 0x32383239616264316539663032623534323461656461393061303164376432342e706e67),
(6, 'Gears of War 4', 'First-person shooter', '229.00', '2016-10-11', 'EN', 'PT-BR', 40, 50, 0x35643832306337393633633332326137613565316234323738653563373466632e706e67),
(7, 'Doom 4', 'First-person shooter', '229.00', '2016-05-13', 'EN', 'PT-BR', 50, 50, 0x65343830343664323837386361343634623732303139366464393565656464332e706e67),
(8, 'Forza Horizon 3', 'Corrida', '229.00', '2016-09-27', 'PT-BR', 'PT-BR', 65, 50, 0x62653337643863386165373630653964396236376439393932333331323866352e706e67),
(9, 'Mafia III', 'AcÃ£o-aventura', '229.00', '2016-10-07', 'PT-BR', 'PT-BR', 65, 50, 0x33396332396431303532313636316436643261313833326535323662313462382e706e67),
(10, 'Street Fighter V', 'Luta', '229.00', '2016-02-18', 'PT-BR', 'PT-BR', 50, 50, 0x33653738333736663061313435623737383464373861313138336134316363372e706e67),
(11, 'Overwatch', 'First-person shooter', '229.00', '2016-05-24', 'PT-BR', 'PT-BR', 45, 50, 0x38616433636531646138623661326232373663356264333236363363323937342e706e67),
(12, 'Battlefield 1', 'First-person shooter', '229.00', '2016-10-21', 'EN', 'PT-BR', 50, 50, 0x31623632313131313561613038366334353666313530613334366533626539342e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `buy`
--
ALTER TABLE `buy`
  ADD CONSTRAINT `buy_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `buy_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
