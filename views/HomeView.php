<?php
  class HomeView 
  {
    // constructor
    public function __construct()
    {
    }
    public function render($users)
    {
      echo "<h1>Users</h1>";
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