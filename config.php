<?php
  function get_file( $file ) {
    $root = dirname( __FILE__ ) . '/';
    include_once $root . $file . '.php';  
  }
?>