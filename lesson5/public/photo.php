<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
     <title>lesson 5</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link href="./css/bootstrap.min.css" rel="stylesheet"> -->

    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">

    <?php


    require_once "../config/main.php";
    $config = include CONFIG_DIR . "db.php";


    $conDB = mysqli_connect($config["host"], $config["user"], $config["password"], $config["db"]);

    include ENGINE_DIR . "render.php";

    $id = $_GET['id'];
    $click = $_GET['click'];

    if ($id) {

        renderGal($conDB, $id);
    }

    echo '<hr>';
    renderGal($conDB, null);

    mysqli_close($conDB);
    ?>

    <hr>
    <div style="text-align: center; margin-bottom: 16px!important;">
        <button type="button" class="btn btn-primary" onclick="location.href='./index.php';">
            Загрузить фото
        </button>
    </div>
</div>
<script src="./js/jquery-1.11.2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>
