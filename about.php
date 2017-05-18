<?php 
  $title = 'NG - Sobre nós';
  include_once('config.php');
  include_once('views/head.php');
?>
<body>

  <?php include_once('views/header.php'); ?>

  <header>
    <h2 class="big-title">Sobre nós</h2>
  </header>

  <section class="container about">
    
    <?php
      $currentPage = "Sobre nós";
      include_once('views/breadcrumbs.php');
    ?>
    
    <article>
      <h2>A EMPRESA</h2>
      <p>Nossa empresa foi desenvolvida para atender todos os Buscamos facilitar a sua vida como jogador, na comodidade de sua casa. Optamos em trabalhar somente pela internet e possui uma loja virtual que está sempre trazendo os últimos lançamentos dos games mais desejados. Com preços abaixo do esperado e condições de negociação facilitadas, a empresa preza muito pela honestidade e também pelo bom atendimento. Ao adquirir qualquer produto da nossa empresa, você adquire também a certeza de que fez um excelente negócio.</p>
    </article>

    <article>
      <h2>O QUE É MÍDIA DIGITAL?</h2>
      <p> Mídia digital nada mais é do que o jogo em sua versão virtual (digital). Vendemos as licenças compradas diretamente na Playstation Store, a loja oficial da Sony, garantindo assim a melhor procedência possível para seu jogo,contando com suas atualizações e se certificando de que o(s)arquivo(s) do jogo esteja(m) em perfeitas condições. Algumas vantagens da mídia digital são não ter que esperar um tempo de entrega, não correr o risco de arranhar o disco, não ocupar espaço na sua casa e sim no HD do console, entre outras. Para resumir como a entrega funciona, nós enviamos por e-mail uma conta nossa com o jogo já comprado para você instalar diretamente no seu console através desse nosso usuário.Essencialmente o jogo é seu, instalado usando nossa conta!</p>
    </article>
  </section>

<?php include_once('views/footer.php'); ?>
