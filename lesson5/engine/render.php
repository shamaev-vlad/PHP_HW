<?php

function renderGal($conDB, $id)
{
    echo '<div class="row">';

    $query = "SELECT * FROM pictures";

    if ($id) {
        $id = (int)$id;
        $query .= " WHERE id = " . $id;
    }

        echo '<div class="page-header"><h4>Изображения отсутствуют!</h4></div>';
    }
    echo '</div>';
?>
