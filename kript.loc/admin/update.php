<?php
session_start();

// var_dump($_SESSION); 


$login = "admin";
$password = "123";

if ($_SESSION["login"] !== $login || $_SESSION["password"] !== $password) {
  header('Location: /admin');
}


require_once 'includes/connect.php';

$id = $_GET["id"];

$var = mysqli_fetch_assoc(mysqli_query($connect, "Select * FROM   `variables` WHERE `id` = $id"));

// var_dump($var)

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Adminka</title>
</head>

<style>
  main {
    margin: 30px 10px;
  }

  .my {
    margin-top: 0;
  }
</style>

<body>
  <nav class="navbar navbar-expend-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a href="includes/logout.php" class="navbar-brand">
        <!-- <img src="https://getbootstrap.com/docs/5.0/assets/brand/bootstrap-logo.svg" alt="logo" width="30" height="24" class="d-inline-block align-top"> -->
        Выход
      </a>
      <!-- <button class="navbar-toggler" type="button" data-bs-target="#navbarSupportedContent" aria-controls="#navbarSupportedContent" aria-expanded="false" aria-label="false">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="#" class="nav-link active" aria-current="page" href="#">Управление контентом</a>
          </li>
        </ul>
        <a href="#" style="">Вернуться на сайт</a>
      </div>
    </div>
  </nav>
  <main>
    <div class="container">
      <h3 class="mt-4 mb-3">Обновить переменную</h3>
      <form class="row g-3" method="post" action="includes/save-variable.php">
        <input type="hidden" value="
        <?php
        echo $var["id"];
        ?>" name="id">
        <div class="col-md-6">
          <label class="form-label" for="var-title">Название переменной</label>
          <input name="title" type="text" class="form-control" id="var-title">
          <p class="my-text">Название должно быть той переменной, которую вы изменили!</p>
        </div>
        <!-- <div class="col-md-6">
          <label for="data-type" class="form-label">Тип значения</label>
          <select id="data-type" class="form-select" disabled>
            <option value="1" selected>Текст</option>
            <option value="2">Изображение</option>
          </select>
        </div> -->

        <div class="col-md-12 my" id="text-form">
          <label for="text" class="form-label ">Содержимое</label>
          <input name="value" type="text" class="form-control" id="text">
          <p class="my-text">Для изображения указывайте путь в формате: admin/uploads/...</p>
        </div>

        <div class="col-md-12 d-none" id="image-form">
          <label for="image" class="form-label">Изображение</label>
          <input type="file" class="form-control" id="image">
        </div>

        <div class="col-12 my">
          <button type="submit" class=" btn btn-primary">Сохранить</button>
        </div>
      </form>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    document.getElementById('data-type').addEventListener('change', (event) => {
      if (event.target.value == 1) {
        document.getElementById('text-form').classList.remove('d-none')
        document.getElementById('image-form').classList.add('d-none')
      } else {
        document.getElementById('text-form').classList.add('d-none')
        document.getElementById('image-form').classList.remove('d-none')
      }
    })
  </script>
</body>

</html>