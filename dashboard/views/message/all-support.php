<?php
  get_file('controllers/GetAllController');
  $getAllCtrl = new GetAllController();
  $messages = $getAllCtrl->getAll('supportmessage');

  foreach ($messages as $message) { ?>
   <div class="panel-heading" role="tab" id="headingOne">
    <h4 class="panel-title">
      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#<?php echo $message['id']; ?>" aria-expanded="true" aria-controls="<?php echo $message['id'] ;?>">
      <i class="glyphicon glyphicon-envelope"></i>  <?php echo $message['subject'] . ' - ' . $message['email_cliente'] ?>
      <i class="glyphicon glyphicon-plus pull-right"></i>
      </a>
    </h4>
  </div>
  <div id="<?php echo $message['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
    <div class="panel-body">
     <p> <strong>De: </strong><?php echo $message['email_cliente']; ?>
     </p>
     <h3>Mensagem</h3>
     <p><?php echo $message['message']; ?></p>
    </div>
  </div>


<?php } ?>