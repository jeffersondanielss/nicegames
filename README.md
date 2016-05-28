# E-commerce name
> CRUD em PDO - PHP + MySQL

Esse projeto de e-commerce é um trabalho académico básico que tem como objetivo a interação entre o PHP e um banco de dados, nele será aplicado as operações do CRUD no MySQL usando a API PDO do PHP.

### Class Database
A classe Database contém todos as métodos a partir dela você tem acesso a eles.

```
 $db = new Database;
```

### Métodos

```
  $db->connect();
  $db->sessionStart();
  $db->delete( $id );
  $db->countUsers();
  $db->getLoggedUser();
  $db->loggedUserName();
  $db->readAll();
  $db->insert();
  $db->getById( $id );
  $db->update();
  $db->login();
  $db->blocked( $id );
  $db->listUsers( $array );
```

### Criação das tabelas

```
  CREATE TABLE usuarios (
    ID INT(2) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome varchar(50) NOT NULL,
    endereco varchar(50),
    telefone varchar(50),
    email varchar(50) NOT NULL,
    senha varchar(50) NOT NULL,
    rg float(50),
    cpf float(50),
    nascimento varchar(50),
    genero varchar(50)
  );
```