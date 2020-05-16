<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Lesson 5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">

  <?php


  require_once "../config/main.php";
  $config = include CONFIG_DIR . "db.php";



  $conDB = mysqli_connect($config["host"], $config["user"], $config["password"], $config["db"]);

  include ENGINE_DIR . "render.php";
  include ENGINE_DIR . "uploads.php";

  if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_FILES)) {
      uploads($conDB);
  }

  renderGal($conDB, null);

  mysqli_close($conDB);

  ?>

    <div class="pageGal">
        <h4>Загрузка нового изображения  </h4>
        <form action="" enctype="multipart/form-data" method="post">
        <input type="file" name="file"/>
        <input type="submit" value="Загрузить"/>
    </form>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>
