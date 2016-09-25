<?php 
  include 'dashboard/functions/functions.php';
  $curr = $product->getById( $_GET['id'], 'produto' );

  foreach ($curr as $value) {
    $title = 'NG - ' . $value['titulo'];
  }
  include 'views/head.php';
?>
<body>

  <?php include 'views/header.php'; ?>

  <header>
    <?php foreach ($curr as $value) { ?>
      <h2 class="big-title">
        <?php echo $value['titulo'] ;?>
      </h2>
    <?php } ?>
  </header>


  <div class="container">

    <?php foreach ($curr as $value) { ?>

       <div class="col-sm-6">
         <div class="product-main-img">
           <img src="upload/<?php echo $value['image']; ?>" width="450px" alt="">
         </div>
       </div>

       <div class="col-sm-6">

        <div class="product-inner-price">
         <span>Preço: </span><ins><?php echo $value['preco']; ?></ins>
        </div>
        <a class="add_to_cart_button" href="dashboard/functions/buy/addCart.php?id=<?php echo $value['id']; ?>">Adicionar ao carrinho</a>

        <!--- prod-infos -->
        <ul class="prod-infos">

          <li>
            <h4 class="infos">Titulo:</h4>
            <span class="infos-value"><?php echo $value['titulo']; ?></span>
          </li>

          <li>
            <h4 class="infos">Gênero: </h4>
            <span class="infos-value"><?php echo $value['genero']; ?></span>
          </li>

          <li>
            <h4 class="infos">Lançamento: </h4>
            <span class="infos-value"><?php echo $value['lancamento']; ?></span>
          </li>

          <li>
            <h4 class="infos">Audio: </h4>
            <span class="infos-value"><?php echo $value['audio']; ?></span>
          </li>

          <li>
            <h4 class="infos">Legenda: </h4>
            <span class="infos-value"><?php echo $value['legenda']; ?></span>
          </li>

          <li>
            <h4 class="infos">Tamanho: </h4>
            <span class="infos-value"><?php echo $value['tamanho']; ?></span>
          </li>

          <li>
            <h4 class="infos">Quantidade: </h4>
            <span class="infos-value"><?php echo $value['quantidade']; ?></span>
          </li>

        </ul> <!--- prod-infos END -->
          
      </div><!--- col-sm-6 END --> 

    <?php } ?>


  </div><!--- container END --> 


<?php include 'views/footer.php'; ?>