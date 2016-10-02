<?php 
  $title = 'NG - Contato';
  include_once 'views/head.php';
?>
<body>

  <?php include_once 'views/header.php'; ?>

  <header>
    <h2 class="big-title">Fale Conosco</h2>
  </header>


  <div class="container">
    <div class="form-contact">
      <form class="" action="controllers/message/SendMessageController.php" method="post">

        <div class="form-group">
          <input name="nome" type="text" placeholder="Nome" class="form-control">
        </div>

        <div class="form-group">
          <input name="email" type="email" placeholder="Endereço de Email" class="form-control">
        </div>

        <div class="form-group">
          <textarea class="form-control" name="mensagem" placeholder="Introduza a sua mensagem para nós aqui. Nós entraremos em contato com você dentro de 2 dias úteis." rows="7"></textarea>
        </div>

        <div class="form-group text-center">
          <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
        </div>

      </form>
    </div>

    <?php include_once 'dashboard/views/message.php'; ?>
  </div>

<?php include_once 'views/footer.php'; ?>