<?php

session_start();


$login = "admin";
$password = "123";

if ($_SESSION["login"] !== $login || $_SESSION["password"] !== $password) {
  header('Location: /admin');
}

require_once "connect.php";

$title = $_POST["title"];
$value = $_POST["value"];
$id = $_POST["id"];

mysqli_query($connect, "UPDATE `variables` SET `title` = '$title', `value` = '$value' WHERE `variables`.`id` = $id");

header('Location: /admin/content.php');