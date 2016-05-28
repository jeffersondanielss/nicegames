# E-commerce name
> CRUD em PDO - PHP + MySQL


### Class Database
A classe Database contém todos as métodos a partir dela você tem acesso a eles.

```
 $db = new Database;
```

### Métodos

```
  $db->conectar();
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