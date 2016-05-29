DROP TABLE IF EXISTS `cliente`;

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

DROP TABLE IF EXISTS `produto`;

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

DROP TABLE IF EXISTS `funcionario`;

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

http://blackrockdigital.github.io/startbootstrap-sb-admin/