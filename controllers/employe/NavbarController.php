<?php
  get_file('models/models');

  class NavbarController {

    public $EmployeModel;

    public function __construct(){
      $this->EmployeModel = new Employe();
    }

    function getName() {
      return $this->EmployeModel->getName();
    }

    function auth() {
      $this->EmployeModel->auth();
    }

  }
?>