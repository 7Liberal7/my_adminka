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
  .main {
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
  }

  .form-my {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .button-my {
    position: relative;
    left: 50%;
    transform: translateX(-50%);
    margin-top: 10px;
  }

  .my-title {
    text-align: center;
  }
</style>

<body>
  <main class="main">
    <div class="container">
      <h2 class="my-title">Вход в админку</h2>
      <form class="row g-3 form-my" action="includes/login.php" method="post">
        <div class="col-md-6">
          <label for="var-title" class="form-label">Логин</label>
          <input type="text" name="login" class="form-control" id="var-title">
        </div>
        <div class="col-md-6">
          <label for="var-title" class="form-label">Пароль</label>
          <input type="password" name="password" class="form-control" id="var-title">
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary button-my">Войти</button>
        </div>
      </form>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>

<?php
session_start();

// var_dump($_SESSION); 


$login = "admin";
$password = "123";

if ($_SESSION["login"] === $login && $_SESSION["password"] === $password) {
  header('Location: content.php');
}
?>