<?php
  include_once('config.php');
  include_once 'controllers/GetByIdController.php';
  $ProductCtrl = new GetByIdController();
  $productArray = $ProductCtrl->getById($_GET['id'], 'produto');

  foreach ($productArray as $currProduct) {
    $title = 'NG - ' . $currProduct['titulo'];
  }
  include_once 'views/head.php';
?>
<body>

  <?php include_once 'views/header.php'; ?>

  <header>
    <?php foreach ($productArray as $currProduct) { ?>
      <h2 class="big-title">
        <?php echo $currProduct['titulo'] ;?>
      </h2>
    <?php } ?>
  </header>


  <div class="container">

    <?php foreach ($productArray as $currProduct) { 

      $currentPage = $currProduct['titulo'];
      include_once('views/breadcrumbs.php');
    
    ?>

       <div class="col-sm-6">
         <div class="product-main-img">
           <img src="upload/<?php echo $currProduct['image']; ?>" width="450px" alt="<?php echo $currProduct['titulo']; ?>">
         </div>
       </div>

       <div class="col-sm-6">

        <div class="product-inner-price">
         <span>Preço: </span><ins><?php echo $currProduct['preco']; ?></ins>
        </div>
        <a class="add_to_cart_button" href="controllers/buy/AddCartController.php?id=<?php echo $currProduct['id']; ?>">Adicionar ao carrinho</a>

        <!--- prod-infos -->
        <ul class="prod-infos">

          <li>
            <h4 class="infos">Titulo:</h4>
            <span class="infos-value"><?php echo $currProduct['titulo']; ?></span>
          </li>

          <li>
            <h4 class="infos">Gênero: </h4>
            <span class="infos-value"><?php echo $currProduct['genero']; ?></span>
          </li>

          <li>
            <h4 class="infos">Lançamento: </h4>
            <span class="infos-value"><?php echo $currProduct['lancamento']; ?></span>
          </li>

          <li>
            <h4 class="infos">Audio: </h4>
            <span class="infos-value"><?php echo $currProduct['audio']; ?></span>
          </li>

          <li>
            <h4 class="infos">Legenda: </h4>
            <span class="infos-value"><?php echo $currProduct['legenda']; ?></span>
          </li>

          <li>
            <h4 class="infos">Tamanho: </h4>
            <span class="infos-value"><?php echo $currProduct['tamanho']; ?></span>
          </li>

          <li>
            <h4 class="infos">Quantidade: </h4>
            <span class="infos-value"><?php echo $currProduct['quantidade']; ?></span>
          </li>

        </ul> <!--- prod-infos END -->
          
      </div><!--- col-sm-6 END --> 

    <?php } ?>


  </div><!--- container END --> 


<?php include_once 'views/footer.php'; ?>
