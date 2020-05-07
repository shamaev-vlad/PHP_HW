<h2>Задание 1</h2>

<?php
$a = mt_rand(-5,10);
$b = mt_rand(-5,10);
echo 'a = '.$a.', <br> b = '.$b.'.<br>';
if ($a > 0 and $b > 0) {
	echo "$a - $b";
} elseif ($a < 0 and $b < 0) {
	echo "$a * $b";
} elseif ($a > 0 && $b < 0 || $a < 0 && $b > 0) {
	echo "$a + $b";
?>

<h2>Задание 3(задания 2 нет)</h2>

<?php
function sum($x,$y) {
    return $x+$y;
}
function avg($x,$y) {
    return ($x+$y)/2;
}
function compare($x,$y) {
    if ($x>$y)
        return $x>$y;
    else
        return $x<$y;
}
function modulo($x,$y) {
    return $x%$y;
}

echo(sum(3,7));
echo(avg(3,7));
echo(compare(3,7));
echo(modulo(3,7));
?>

<h2>Задание 4</h2>

<?php
function mathSub($a=5, $b=3, $sub) {
    if ($a>0 && $b>0) {
        $sub=$a-$b;
        return $sub;
    }
    else if ($a<0 && $b<0) {
        $sub=$a*$b;
        return $sub;
    }
    else if ($a<0 && $b>0 || $a>0 && $b<0) {
        $sub=$a+$b;
        return $sub;
    }
    switch ($sub) {
        case 2:
            echo('Ура');
            break;
        case 15:
            echo('нет');
            break;
        case 8:
            echo('нет');
            break;
    }
}
echo(mathSub(5,3, $sub));
?>

<h2>Задание 5</h2>

<?php
echo date('Y');
?>
