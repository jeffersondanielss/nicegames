# NiceGames Store
> CRUD em PDO - PHP + MySQL

Esse projeto de e-commerce é um trabalho académico básico que tem como objetivo a interação entre o PHP e um banco de dados, nele será aplicado as operações do CRUD no MySQL usando a API PDO do PHP.

![NiceGames ilustration](https://raw.githubusercontent.com/jeffersondanielss/nicegames/master/nicegames.png)

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

# Métodos

```
  $db->connect();
  $db->sessionStart();
  $db->login();
```

### CRUD - Super classe
Super classe, possui métodos para serem herdados em outras sub classes.

# Métodos

```
  $product->delete( $id, $table, $redirectPage );
  $product->count( $table);
  $product->readAll( $table);
  $product->getById( $id, $table );
```

### Product - Sub classe
Instacie a classe para obter os métodos.

```
 $product = new Product;
```

# Métodos
Essa sub classe herda todos métodos da classe `CRUD`.

```
  $product->insert();
  $product->update();
  $product->wrapperList( $array, $oneLine );
```

### Employe - Sub classe
Instacie a classe para obter os métodos.

```
 $employe = new Employe;
```

# Métodos
Essa sub classe herda todos métodos da classe `CRUD`.

```
  $employe->insert();
  $employe->update();
  $employe->wrapperList( $array, $oneLine );
  $employe->getLoggedUser();
  $employe->loggedUserName();
```

### Client - Sub classe
Instacie a classe para obter os métodos.

```
 $client = new Client;
```

# Métodos
Essa sub classe herda todos métodos da classe `CRUD`.

```
  $client->insert();
  $client->update();
  $client->wrapperList( $array, $oneLine );
  $client->getLoggedUser();
  $client->loggedUserName();
```

### Message - Sub classe
Instacie a classe para obter os métodos.

```
 $message = new Message;
```

# Métodos
Essa sub classe herda todos métodos da classe `CRUD`.

```
  $client->insert();
  $client->allMessages();
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

DROP TABLE IF EXISTS `mensagem`;

CREATE TABLE `mensagem` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `mensagem` varchar(800) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;
```