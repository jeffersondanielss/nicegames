<?php
  inc('controllers/employe/NavbarController');
  $navbar = new NavbarController();
  $navbar->auth();
  $name = $navbar->getName();
?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">NICE GAMES STORE</a>
  </div>

  <!-- Top Menu Items -->
  <ul class="nav navbar-right top-nav">
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-user"></i> <?php echo $name ?> <b class="caret"></b>
      </a>
      <ul class="dropdown-menu">
        <li><a href="../."><i class="fa fa-fw fa-home"></i> home</a></li>
        <li><a href="profile.php"><i class="fa fa-fw fa-user"></i> Perfil</a></li>
        <li><a href="message.php"><i class="fa fa-fw fa-envelope"></i> Mensagens</a></li>
        <li class="divider"></li>
        <li><a href="./functions/logout.php"><i class="fa fa-fw fa-power-off"></i> Sair</a></li>
      </ul>
    </li>
  </ul>
  
  <?php include 'sidebar.php'; ?>
</nav>