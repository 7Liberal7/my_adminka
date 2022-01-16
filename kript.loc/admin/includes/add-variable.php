<?php

// echo $_POST["type"];

// die();

session_start();

// var_dump($_SESSION); 


$login = "admin";
$password = "123";

if ($_SESSION["login"] !== $login || $_SESSION["password"] !== $password) {
  header('Location: /admin');
}

require_once "connect.php";


$title = $_POST["title"];

if ($_POST["type"] == 1) {
  $value = $_POST["value"];
  mysqli_query($connect, "INSERT INTO `variables` (`id`, `title`, `value`) VALUES (NULL, '$title', '$value');");
}
else {

  // var_dump($_FILES["image"]);  
  
  // die();

  $path = "uploads/" . time() . $_FILES["image"]["name"];
  move_uploaded_file($_FILES["image"]["tmp_name"], '../' . $path);
 
  $value = "admin/" . $path;

  mysqli_query($connect, "INSERT INTO `variables` (`id`, `title`, `value`) VALUES (NULL, '$title', '$value');");
}

header('Location: /admin/content.php');
