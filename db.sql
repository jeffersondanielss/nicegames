
CREATE TABLE `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(32) NOT NULL,
  `sobrenome` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `cidade` varchar(64) NOT NULL,
  `cpf` int(11) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `telefone` varchar(16) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `cliente` (`id`, `nome`, `sobrenome`, `email`, `senha`, `endereco`, `cidade`, `cpf`, `cep`, `telefone`) VALUES
(11, 'cliente', 'The first ', 'cliente@ng.com', '202cb962ac59075b964b07152d234b70', 'av franscisco matarazo', 'SÃ£o Paulo', 2147483647, '03444000', '(11) 1111-1111');

CREATE TABLE `produto` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `titulo` varchar(64) NOT NULL,
  `genero` varchar(32) NOT NULL,
  `preco` decimal(6,2) NOT NULL,
  `lancamento` date DEFAULT NULL,
  `audio` varchar(32) DEFAULT NULL,
  `legenda` varchar(32) DEFAULT NULL,
  `tamanho` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `produto` (`id`, `titulo`, `genero`, `preco`, `lancamento`, `audio`, `legenda`, `tamanho`, `quantidade`, `image`) VALUES
(1, 'Grand Theft Auto V', 'AÃ§Ã£o', '129.00', '2013-09-17', 'EN', 'PT-BR', 65, 50, 0x32646263346364663231613863613765366339343361613638663837393636626a706567),
(2, 'Dragon ageâ„¢: Inquisition', 'RPG', '85.00', '2014-11-18', 'EN', 'PT-BR', 24, 50, 0x66623039386530353564383261393837633564346536623462366539333566362e6a7067),
(3, 'Fifa 2016', 'Esportes', '85.00', '2016-03-05', 'PT-BR', 'PT-BR', 40, 50, 0x61383339376266323431623631383764346166626433323562396635336566342e6a7067),
(4, 'Minecraft', 'Survive', '45.00', '2009-05-17', 'EN', 'PT-BR', 5, 50, 0x39613734663335346436616438306362643531386439366432656161386231372e6a7067),
(5, 'Need for Speed', 'Corrida', '129.00', '2015-11-03', 'PT-BR', 'PT-BR', 45, 50, 0x31653836353161336236663136363232643933623230623332326132353233622e706e67),
(6, 'Ryse: Son of Rome', 'aÃ§Ã£o-aventura', '85.00', '2013-09-23', 'EN', 'PT-BR', 40, 50, 0x36623337346165373537613461666235386362633062333761653837393262312e706e67);


CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `funcionario` (`id`, `nome`, `email`, `senha`) VALUES
(5, 'admin', 'admin@ng.com', '202cb962ac59075b964b07152d234b70');

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `mensagem` varchar(800) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


CREATE TABLE `buy` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `id_cliente` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  FOREIGN KEY (id_cliente) REFERENCES cliente(id),
  FOREIGN KEY (id_produto) REFERENCES produto(id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;