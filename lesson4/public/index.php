<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Lesson 4</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="pageGal">
        
    </div>


    <?php

    include "../config/main.php";

    function downloads()
    {
        foreach ($_FILES as $file) {
            $fileType = explode("/", $file['type'])[0];
            if ($file['error'] != 0) {
                $message = "Ошибка: " . $file['error'] . "!";
            } elseif ($fileType != "image") {
                $message = "Неверное расширение файла: " . $file['name'] . "!";
            } elseif ($file['size'] > 2097152) {
                $message = "Файл слишком большой: " . $file['size'] . "! Ограничение 2 mb";
            } else {
                move_uploaded_file($file['tmp_name'], IMAGES_DIR . $file['name']);
                $message = "Загрузка файла: " . $file['name'] . " завершена!";
            }

            echo '<div class="page-header"><h4>' . $message . '</h4></div>';
        }
    }
    if ($_SERVER['REQUEST_METHOD'] == "POST" && !empty($_FILES)) {
        downloads();
    }
    function scanOfDir()
    {
        $dir = opendir(IMAGES_DIR);
        while ($filename = readdir($dir)) {
            if (!is_dir($filename)) {
                $fileType = explode("/", mime_content_type(IMAGES_DIR . $filename))[0];
                if ($fileType == "image") {
                    $files[] = $filename;
                }
            }
        }
        closedir($dir);
        return $files;
    }

    function renderGal()
    {
        echo '<div class="containerGal" id="app">';
        echo '</div>';

        echo '<div class="row">';
        echo '<table class="table">';

        $files = scanOfDir();
        if(count($files) > 0) {
            foreach ($files as $fileName) {
                $fileNameFull = IMAGES_DIR . $fileName;
                echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 thumb">';
                echo '<a href="' . $fileNameFull . '" target="_blank">';
                echo '<img src="' . $fileNameFull . '" class="img-fluid">';
                echo '</a></div>';

            }
        } else {
            echo '<div class="pageGal"><h4>Каталог пуст</h4></div>';
        }
        echo '</div>';
        echo '</table>';
    }
      
    renderGal();
    ?>

    <div class="pageGal">
        <h4>Загрузка нового изображения  </h4>
        <form action="" enctype="multipart/form-data" method="post">
        <input type="file" name="file"/>
        <input type="submit" value="Загрузить"/>
    </form>
    </div>
</div>
<div>
    <pre>
        


    </pre>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>
</html>