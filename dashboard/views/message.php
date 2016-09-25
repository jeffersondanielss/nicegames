<?php
  if( !empty( $_REQUEST['message'] ) ) { ?>

    <div class="alert alert-info" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <?php echo $_REQUEST['message']; ?>
    </div>

<?php } ?>