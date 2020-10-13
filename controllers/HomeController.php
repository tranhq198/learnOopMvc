<?php

  class HomeController
  {

    private $model;

    public function __construct()
    {
      $this->model = new StudentModel();
    }

    function index() {
        $isLoggedIn = $_SESSION['current_user'];
        if(!$isLoggedIn) {
            header("location: ?act=auth/login");
            die();
        }
      $students = $this->model->getAll();
      require PATH . '/views/home.php';
    }
  }
