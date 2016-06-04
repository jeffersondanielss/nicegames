# NiceGames Store
> CRUD em PDO - PHP + MySQL, rode o projeto em seu servidor Ex: localhost/projetos/nicegames

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

#### Métodos

```
  $db->connect();
  $db->sessionStart();
  $db->login();
```

### CRUD - Super classe
Super classe, possui métodos para serem herdados em outras sub classes.

#### Métodos

```
  $product->delete( $id, $table, $redirectPage );
  $product->count( $table );
  $product->readAll( $table );
  $product->getAll();
  $product->getById( $id, $table );
```

### Product - Sub classe
Instacie a classe para obter os métodos.

```
 $product = new Product;
```

#### Métodos
Essa sub classe herda todos métodos da classe `CRUD`.

```
  $product->insert();
  $product->update();
  $product->wrapperList( $array, $oneLine );
  $product->getAll();
```

### Employe - Sub classe
Instacie a classe para obter os métodos.

```
 $employe = new Employe;
```

#### Métodos
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

#### Métodos
Essa sub classe herda todos métodos da classe `CRUD`.

```
  $client->insert();
  $client->update();
  $client->wrapperList( $array, $oneLine );
  $client->getLoggedUser();
  $client->loggedUserName();
```


### Buy - Sub classe
Instacie a classe para obter os métodos.

```
 $buy = new Buy;
```

#### Métodos
Essa sub classe herda todos métodos da classe `Client`.

```
  $buy->getUserId();
  $buy->addCart( $productId );
  $buy->getBuyProducts();
  $buy->buyTotaltens();
  $buy->buyTotal();
  $buy->showCart();
  $buy->purchase( $userId );
```

### Message - Sub classe
Instacie a classe para obter os métodos.

```
 $message = new Message;
```

#### Métodos
Essa sub classe herda todos métodos da classe `CRUD`.

```
  $client->insert();
  $client->allMessages();
```

### Acessos

##### funcionário
`Email: ` admin@ng.com
`senha: ` 123

##### cliente
`Email: ` cliente@ng.com
`senha: ` 123 

### Criação das tabelas

```

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
(1, 'GTA V', 'AÃ§Ã£o', '99.00', '2015-02-15', 'ingÃªs', 'PortuguÃªs', 19000, 5000, 0x39633965353031326530613939333931373762623030313530306562326537666a706567);


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
```