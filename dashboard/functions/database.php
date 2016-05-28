<?php

  /*
  * Author Jeferson Daniel
  * Version 1.0.0
  * CRUD PDO
  */

  class Database {

    // Conecta ao banco de dados
    public function connect() {
      $host = "localhost";
      $user = "root";
      $pass = "";
      $banco = "lh-manager";

      try {
        $pdo = new PDO("mysql:host=$host;dbname=$banco", $user, $pass);
      } catch( PDOException $e ) {
        $e->getMessage();
      }

      return $pdo;
    }

    public function sessionStart() {
      session_start();

      if( empty($_SESSION['email']) || empty($_SESSION['senha']) ) {
        header("Location: ../.");
      }
    }

    // Deleta usuários
    public function delete( $id ) {
      echo "<script>confirm('Tem certeza que deseja apagar esse registro?')</script>";
      $this->sessionStart();

      $loggedUser = $this->getLoggedUser();

      $pdo = $this->connect();
      $sql = $pdo->prepare("DELETE FROM usuarios WHERE ID=:id");
      $sql->bindValue(':id', $id);

      if( $loggedUser[0]['ID'] == $id ) {
        $message = 'Você não pode excluir o usuário em que está logado!';
        header("Location: ../index.php?message={$message}");
      } else {
        $sql->execute();
        $message = 'Usuário excluido com sucesso!';
        header("Location: ../index.php?message={$message}");
      }
    }

    // Exibe a quantidade de usuários cadastrados
    public function countUsers() {
      $pdo = $this->connect();
      $busca = $pdo->prepare("SELECT count(*) as total FROM usuarios");
      $busca->execute();
      $result = $busca->fetchColumn();
      echo $result;
    }

    // Resgata o usuário que está logado
    public function getLoggedUser() {
      $pdo = $this->connect();

      $email = $_SESSION['email'];
      $senha = $_SESSION['senha'];

      $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=:email and senha=:senha");
      $sql->bindValue(':email', $email);
      $sql->bindValue(':senha', $senha);
      $sql->execute();

      $currentUser = $sql->fetchAll(PDO::FETCH_ASSOC);
      return $currentUser;
    }

    // Mostra o nome do usuário logado
    public function loggedUserName() {
      $user = $this->getLoggedUser();
      echo $user[0]['nome'];
    }

    // Lista todos usuários cadatrados
    public function readAll() {
      $pdo = $this->connect();
      $busca = $pdo->prepare("SELECT * FROM usuarios");
      $busca->execute();

      $linha = $busca->fetchAll(PDO::FETCH_ASSOC);

      return $linha;
    }

    // Cadastro no banco
    public function insert() {
      $pdo = $this->connect();

      $nome =       $_POST['nome'];
      $endereco =   $_POST['endereco'];
      $telefone =   $_POST['telefone'];
      $email =      $_POST['email'];
      $senha =      md5($_POST['senha']);
      $rg =         $_POST['rg'];
      $cpf =        $_POST['cpf'];
      $nascimento = $_POST['nascimento'];
      $genero =     $_POST['genero'];

      $validar = $pdo->prepare("SELECT * FROM usuarios WHERE email=:email");
      $validar->bindValue(':email', $email);
      $validar->execute();

      if( $validar->rowCount() == 0 ):
          $sql = $pdo->prepare("INSERT INTO usuarios(nome, endereco, telefone, email, senha, rg, cpf, nascimento, genero)VALUES(:nome, :endereco, :telefone, :email, :senha, :rg, :cpf, :nascimento, :genero)");

          $sql->bindValue(':nome',       $nome);
          $sql->bindValue(':endereco',   $endereco);
          $sql->bindValue(':telefone',   $telefone);
          $sql->bindValue(':email',      $email);
          $sql->bindValue(':senha',      $senha);
          $sql->bindValue(':rg',         $rg);
          $sql->bindValue(':cpf',        $cpf);
          $sql->bindValue(':nascimento', $nascimento);
          $sql->bindValue(':genero',     $genero);

          $sql->execute();
          $message = 'Cadastro realizado com sucesso!';
          header("Location: ../index.php?message={$message}");
      else:
          $message = 'Já existe um usuário com este E-mail!';
          header("Location: ../index.php?message={$message}");
      endif;
    }

    // Recuperar usuário pelo ID
    public function getById( $id ) {
      $pdo = $this->connect();
      $busca = $pdo->prepare("SELECT * FROM usuarios WHERE ID = :id");
      $busca->bindValue(':id', $id);
      $busca->execute();

      return $busca->fetchAll(PDO::FETCH_ASSOC);
    }


    // Atualizar usuário
    public function update() {
      $pdo = $this->connect();

      $id =         $_POST['ID'];
      $nome =       $_POST['nome'];
      $endereco =   $_POST['endereco'];
      $telefone =   $_POST['telefone'];
      $email =      $_POST['email'];
      $senha =      md5($_POST['senha']);
      $rg =         $_POST['rg'];
      $cpf =        $_POST['cpf'];
      $nascimento = $_POST['nascimento'];
      $genero =     $_POST['genero'];

      if( !empty( $nome )){
          $sql = $pdo->prepare("UPDATE usuarios SET nome=:nome WHERE id=:id");
          $sql->bindValue(':nome', $nome);
          $sql->bindValue(':id', $id);
          $sql->execute();
      }

      if( !empty( $endereco )){
          $sql = $pdo->prepare("UPDATE usuarios SET endereco=:endereco WHERE id=:id");
          $sql->bindValue(':endereco', $endereco);
          $sql->bindValue(':id', $id);
          $sql->execute();
      }

      if( !empty( $telefone )){
          $sql = $pdo->prepare("UPDATE usuarios SET telefone=:telefone WHERE id=:id");
          $sql->bindValue(':telefone', $telefone);
          $sql->bindValue(':id', $id);
          $sql->execute();
      }

      if( !empty( $email )){
          $sql = $pdo->prepare("UPDATE usuarios SET email=:email WHERE id=:id");
          $sql->bindValue(':email', $email);
          $sql->bindValue(':id', $id);
          $sql->execute();
      }

      if( !empty( $_POST['senha'] )){
          $sql = $pdo->prepare("UPDATE usuarios SET senha=:senha WHERE id=:id");
          $sql->bindValue(':senha', $senha);
          $sql->bindValue(':id', $id);
          $sql->execute();
      }

      if( !empty( $rg )){
          $sql = $pdo->prepare("UPDATE usuarios SET rg=:rg WHERE id=:id");
          $sql->bindValue(':rg', $rg);
          $sql->bindValue(':id', $id);
          $sql->execute();
      }

      if( !empty( $cpf )){
          $sql = $pdo->prepare("UPDATE usuarios SET cpf=:cpf WHERE id=:id");
          $sql->bindValue(':cpf', $cpf);
          $sql->bindValue(':id', $id);
          $sql->execute();
      }

      if( !empty( $nascimento )){
          $sql = $pdo->prepare("UPDATE usuarios SET nascimento=:nascimento WHERE id=:id");
          $sql->bindValue(':nascimento', $nascimento);
          $sql->bindValue(':id', $id);
          $sql->execute();
      }

      if( !empty( $genero )){
          $sql = $pdo->prepare("UPDATE usuarios SET genero=:genero WHERE id=:id");
          $sql->bindValue(':genero', $genero);
          $sql->bindValue(':id', $id);
          $sql->execute();
      }

      $message = 'Usuário atualizado com sucesso!';
      header("Location: ../index.php?message={$message}");
    }


    // Login no sistema
    public function login() {
      $pdo = $this->connect();
      $email = $_POST['email'];
      $senha = md5($_POST['senha']);

      $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email=:email and senha=:senha");
      $sql->bindValue(':email', $email);
      $sql->bindValue(':senha', $senha);
      $sql->execute();

      $row = $sql->rowCount();


      if($row > 0) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        header("Location: ../.");
      } else {
        echo "<script>
        alert('Nome de usuarios ou senha invalidos, espera um momento para tentar novamente');
        window.location.href = '../../index.php';
        </script>";
      }
    }

    // Bloquear usuário
    public function blocked( $id ) {
      $pdo = connect();
      $sql = $pdo->prepare("UPDATE usuarios SET bloqueado = '1' WHERE id= :id");
      $sql->bindValue(':bloqueado', $id);
      $sql->execute();
    }

    public function listUsers($array) {
      $currentUser = $this->getLoggedUser();

      foreach ($array as $value) {
        
        $line = '<tr>';
        $line .=  '<td>' . $value['ID'] . '</td>';
        $line .=  '<td>' . $value['nome'] . '</td>';
        $line .=  '<td>' . $value['endereco'] . '</td>';
        $line .=  '<td>' . $value['telefone'] . '</td>';
        $line .=  '<td>' . $value['email'] . '</td>';
        $line .=  '<td>' . $value['rg'] . '</td>';
        $line .=  '<td>' . $value['cpf'] . '</td>';
        $line .=  '<td>' . $value['nascimento'] . '</td>';
        $line .=  '<td>' . $value['genero'] . '</td>';
        $line .=  '<td>';
        $line .=      '<a class="icon-table" href="./editar.php?id='. $value['ID'] .'">';
        $line .=          '<i class="glyphicon glyphicon-pencil"></i>';
        $line .=      '</a>';
        $line .=  '</td>';
        $line .= '<td>';
        $line .= '  <a class="icon-table" href="./functions/delete.php?id='. $value['ID'] .'">';
        $line .= '     <i class="glyphicon glyphicon-trash"></i>';
        $line .= '  </a>';
        $line .= '</td> ';
        $line .= '</tr>';

        echo $line;
      }
    }

  }

  $db = new Database;
  $db->sessionStart();

?>