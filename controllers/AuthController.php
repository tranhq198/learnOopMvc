<?php

  class AuthController
  {
      private  $model;
      public function __construct()
      {
          $this->model = new UserModel();
      }

      function login() {
          $errors = [];

          if($_SERVER['REQUEST_METHOD'] == 'POST') {
              $username = $_POST['username'] ?? null;
              $password = $_POST['password'] ?? null;

              if ($username && $password) {
                  $res = $this->model->checkUser($username,$password);
                  if($res) {
                        $_SESSION['current_user'] = $username;
                        redirect('home/index'); // ?act=home/index
                  }
              }
              $errors['login'] = 'Error when login!';
          }
          require 'views/login.php';
      }

  }
