# NiceGames Store
> CRUD em PDO - PHP + MySQL, rode o projeto em seu servidor Ex: localhost/projetos/nicegames

Esse projeto de e-commerce é um trabalho académico básico que tem como objetivo a interação entre o PHP e um banco de dados, nele será aplicado as operações do CRUD no MySQL usando a API PDO do PHP.

![NiceGames ilustration](https://raw.githubusercontent.com/jeffersondanielss/nicegames/master/img/nicegames.png)

### Class Database
Se preciso altere as variaveis de coneção com o banco de dados na função `connect` dessa classe.

```php
  $host = "localhost";
  $user = "root";
  $pass = "";
  $banco = "nicegames";
```

Instacie a classe para obter os métodos.

```php
 $db = new Database;
```

#### Métodos

```php
  $db->connect();
  $db->sessionStart();
  $db->login();
```

### CRUD - Super classe
Super classe, possui métodos para serem herdados em outras sub classes.

#### Métodos

```php
  $product->delete( $id, $table, $redirectPage );
  $product->count( $table );
  $product->readAll( $table );
  $product->getById( $id, $table );
```

### Product - Sub classe
Instacie a classe para obter os métodos.

```php
 $product = new Product;
```

#### Métodos
Essa sub classe herda todos métodos da classe `CRUD`.

```php
  $product->insert();
  $product->update();
```

### Employe - Sub classe
Instacie a classe para obter os métodos.

```php
 $employe = new Employe;
```

#### Métodos
Essa sub classe herda todos métodos da classe `CRUD`.

```php
  $employe->insert();
  $employe->update();
  $employe->getLoggedUser();
  $employe->loggedUserName();
```

### Client - Sub classe
Instacie a classe para obter os métodos.

```php
 $client = new Client;
```

#### Métodos
Essa sub classe herda todos métodos da classe `CRUD`.

```php
  $client->insert();
  $client->update();
  $client->getLoggedUser();
  $client->loggedUserName();
```


### Buy - Sub classe
Instacie a classe para obter os métodos.

```php
 $buy = new Buy;
```

#### Métodos
Essa sub classe herda todos métodos da classe `Client`.

```php
  $buy->getUserId();
  $buy->addCart( $productId );
  $buy->getBuyProducts();
  $buy->buyTotaltens();
  $buy->buyTotal();
  $buy->purchase( $userId );
```

### Message - Sub classe
Instacie a classe para obter os métodos.

```php
 $message = new Message;
```

#### Métodos
Essa sub classe herda todos métodos da classe `CRUD`.

```php
  $client->insert();
  $client->allMessages();
```

### Banco de dados
Crie uma tabela com nome `nicegames` e importe o arquivo `migrations/db.sql` nela.

##### Acesso a administração da loja
`Email: ` admin@ng.com
`senha: ` 123

##### Acesso de cliente
`Email: ` cliente@ng.com
`senha: ` 123 