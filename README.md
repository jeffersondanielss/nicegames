# NiceGames Store
> CRUD em PDO - PHP + MySQL, rode o projeto em seu servidor Ex: localhost/projetos/nicegames

Esse projeto de e-commerce é um trabalho académico básico que tem como objetivo a interação entre o PHP e um banco de dados, nele será aplicado as operações do CRUD no MySQL usando a API PDO do PHP.

![NiceGames ilustration](https://raw.githubusercontent.com/jeffersondanielss/nicegames/master/img/nicegames.png)

# Ferramentas utilizadas

### Git
Para gerenciamento do projeto foi utilizado o controle de versão git, o git guarda a evolução do projeto em commts e tags permitindo entre outras coisas voltar a versões anteriores do projeto caso seja necessário.

### Composer
Para instalar dependencias no projeto foi utilizado o Composer, ele permite adicionar packages para facilitar o desenvolvimento em vários aspéctos.

### PHPDoc
Para documentar os Models do projeto foi utilizado o PHPDoc, o PHPDoc gera páginas HTML automáticamente a partir de comentários nos arquivos `.php`.

Nesses comentários são descritas o que as classes e funções fazem para falicitar o entendimento do código futuramente e/ou por terceiros.

### MVC
Foi utilizado o padrão de arquitetura MVC para separar as camdadas do projeto, o MVC é conhecido por separar o projeto entre models, views e controllers. 

### MySQL com PDO
O banco de dados utilizado foi o MySQL, para a conexão foi usado o PDO.

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
