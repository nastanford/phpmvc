<?php

  include_once $_SERVER['DOCUMENT_ROOT'].'/phpmvc/vendor/autoload.php';

  class UserController 
  {
    // constructor
    public function __construct()
    {
      // echo "UserContoller instantiated<br>";
      include_once $_SERVER['DOCUMENT_ROOT'].'/phpmvc/models/Users.php';
      include_once $_SERVER['DOCUMENT_ROOT'].'/phpmvc/views/HomeView.php';
      $results = new Users();
      $users = $results->getAll();
      $currentView = new HomeView();
      $currentView->render($users);
    }
  }

?>