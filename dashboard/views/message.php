<?php
  if( !empty( $_REQUEST['message'] ) ) {
    $alert = '<div class="alert alert-info" role="alert">';
    $alert .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    $alert .= $_REQUEST['message'];
    $alert .= '</div>';

    echo $alert;
  }
?>