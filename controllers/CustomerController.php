<?php
  include_once $_SERVER['DOCUMENT_ROOT'].'/phpmvc/models/Database.php';

  class UserController extends Database
  {
    // constructor
    public function __construct()
    {
      include_once $_SERVER['DOCUMENT_ROOT'].'/phpmvc/models/Users.php';
      $results = new Users();
      $users = $results->getAll();
      echo "<div class='container'><ul>";
      $userCount=count($users);
      for($i=0;$i<$userCount;$i++)
      {
        echo "<li>{$users[$i]['firstname']} {$users[$i]['lastname']}</li>";
      }
      echo "<ul></div>";
    }
  }
?>