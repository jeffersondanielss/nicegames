<?php
  function SendMessageController() {
    include '../../models/models.php';
    $messageCtrl = new Message;
    $messageCtrl->insert();
  }

  SendMessageController();
?>