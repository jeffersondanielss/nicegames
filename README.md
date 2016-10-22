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

### Banco de dados
Crie uma tabela com nome `nicegames` e importe o arquivo `migrations/db.sql` nela.

##### Acesso a administração da loja
`Email: ` admin@ng.com
`senha: ` 123

##### Acesso de cliente
`Email: ` cliente@ng.com
`senha: ` 123 