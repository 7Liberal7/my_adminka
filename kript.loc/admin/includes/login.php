<?php

$login = "admin";
$password = "123";

// var_dump($_POST);

// echo $_POST['login'];
// echo $_POST['password'];

if ($login === $_POST['login'] && $password === $_POST['password']) {
  session_start();

  $_SESSION["login"] = $_POST['login'];
  $_SESSION["password"] = $_POST['password'];

  header('Location: /admin/content.php');

} 
else {
  echo "try again";
}