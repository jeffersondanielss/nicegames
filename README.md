# NiceGames Store
> CRUD em PDO - PHP + MySQL

Esse projeto de e-commerce é um trabalho académico básico que tem como objetivo a interação entre o PHP e um banco de dados, nele será aplicado as operações do CRUD no MySQL usando a API PDO do PHP.

### Class Database
Se preciso altere as variaveis de coneção com o banco de dados na função `connect` dessa classe.

```
  $host = "localhost";
  $user = "root";
  $pass = "";
  $banco = "nicegames";
```

Instacie a classe para obter os métodos.

```
 $db = new Database;
```

### Métodos

```
  $db->connect();
  $db->sessionStart();
  $db->login();
```

### Class Product
Instacie a classe para obter os métodos.

```
 $product = new Product;
```

### Métodos

```
  $product->delete( $id );
  $product->count();
  $product->readAll();
  $product->insert();
  $product->getById( $id );
  $product->update();
  $product->wrapperList( $array );
```

### Class Employe
Instacie a classe para obter os métodos.

```
 $employe = new Employe;
```

### Métodos

```
  $employe->delete( $id );
  $employe->count();
  $employe->readAll();
  $employe->insert();
  $employe->getById( $id );
  $employe->update();
  $employe->wrapperList( $array );
  $employe->getLoggedUser();
  $employe->loggedUserName();
```

### Class Client
Instacie a classe para obter os métodos.

```
 $client = new Client;
```

### Métodos

```
  $client->delete( $id );
  $client->count();
  $client->readAll();
  $client->insert();
  $client->getById( $id );
  $client->update();
  $client->wrapperList( $array );
  $client->getLoggedUser();
  $client->loggedUserName();
```

### Criação das tabelas

```
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
```