<?php
  inc('models/models');

  class CurrentController {

    public $EmployeModel;

    public function __construct(){
      $this->EmployeModel = new Employe();
    }

    function getCurrentEmploye() {
      return $this->EmployeModel->getLoggedUser();
    }

  }
?>