<?php
  include_once "start.php";

  $controller = "User";
  include_once $_SERVER['DOCUMENT_ROOT'].'/phpmvc/controllers/'.$controller.'Controller.php';

  $currentController = $controller."Controller";
  $UserController = new $currentController();
?>