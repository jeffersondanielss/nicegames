<?php

  function inc( $file ) {
    $path = dirname( __FILE__ );
    // echo $path . '/' . $file;  
    // die();
    include_once $path . '/' . $file . '.php';  
    
  }
?>