<?php

session_start();

// var_dump($_SESSION); 


$login = "admin";
$password = "123";

if ($_SESSION["login"] !== $login || $_SESSION["password"] !== $password) {
  header('Location: /admin');
}

require_once "connect.php";

$id = $_GET["id"];

mysqli_query($connect, "DELETE FROM `variables` WHERE `variables`.`id` = $id");

header('Location: /admin/content.php')

?>