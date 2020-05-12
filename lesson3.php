<?php
echo '<h3>Задание 1</h3>';


$a = 0;
$i = 0;

while ($i <= 100) {
  $a++;
  if ($a % 3 == 0) {
      echo $a, ', ';
  }
  $i++;
}

echo '<h3>Задание 2</h3>';

$null = ' - ноль';
$even = ' - четное число';
$uneven = ' - нечетное число';
$a = 0;
$i = 0;
while ($i <= 10) {
  if ($a != 0 && $a % 2 == 0) {
      echo $a, $even, '<br>';
  } elseif ($a % 2 != 0) {
      echo $a, $uneven, '<br>';
  } else {
      echo $a, $null, '<br>';
  }
  $a++;
  $i++;
}

echo '<h3>Задание 3</h3>';


$my_array = [
  'Московская область:' => ['Москва', 'Зеленоград', 'Клин'],
  'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
  'Рязанская область:' => ['Касимов', 'Рязань', "Скопин"]
];


foreach ($my_array as $key => $value) {
  $arr_Length = count($my_array[$key]);

  echo $key;
  echo '<br>', ' ';
  for ($i = 0; $i < $arr_Length; $i++) {
      if ($i == $arr_Length - 1) {
          echo $value[$i], ' ';
      }else{
          echo $value[$i], ', ';
      }
  }
  echo '<br>';
}


echo '<h3>Задание 4</h3>';


function my_translit($string) {
  $converter = array(
      'а' => 'a',   'б' => 'b',   'в' => 'v',
      'г' => 'g',   'д' => 'd',   'е' => 'e',
      'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
      'и' => 'i',   'й' => 'y',   'к' => 'k',
      'л' => 'l',   'м' => 'm',   'н' => 'n',
      'о' => 'o',   'п' => 'p',   'р' => 'r',
      'с' => 's',   'т' => 't',   'у' => 'u',
      'ф' => 'f',   'х' => 'h',   'ц' => 'c',
      'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
      'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
      'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

      'А' => 'A',   'Б' => 'B',   'В' => 'V',
      'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
      'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
      'И' => 'I',   'Й' => 'Y',   'К' => 'K',
      'Л' => 'L',   'М' => 'M',   'Н' => 'N',
      'О' => 'O',   'П' => 'P',   'Р' => 'R',
      'С' => 'S',   'Т' => 'T',   'У' => 'U',
      'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
      'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
      'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
      'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
  );
  return strtr($string, $converter);
}

echo my_translit('Учим программирование!');


echo '<h3>Задание 5</h3>';


function blank_replacer($str){
  $str = str_replace(" ", "_", $str);
  echo $str;
}
$subject = "В этой строке пробел заменяется на нижнее подчёркивание";

blank_replacer($subject);


echo '<h3>Задание 6</h3>';


header("Content-type: text/html; charset=utf-8");

function my_menu() {

    $arrMenu = ['Главная' => ['Пункт 1', 'Пункт 2', 'Пункт 3'],
        'Каталог' => ['Пункт 1', 'Пункт 2', 'Пункт 3'],
        'Галерея' => ['Пункт 1', 'Пункт 2', 'Пункт 3'],
        'Отзывы' => ['Пункт 1', 'Пункт 2', 'Пункт 3'],
        'Контакты'];

    echo '<ul>';

    foreach ($arrMenu as $key => $value) {

        if (is_string($key)) {
            echo '<li>' . $key . '<ul>';

            for ($i = 0; $i < count($value); $i++) {
                echo '<li>' . $value[$i] . '</li>';
            }
            echo '</ul>';

        } else {
            echo '<li>' . $value . '</li>';
        }
    }
};

my_menu();

?>
