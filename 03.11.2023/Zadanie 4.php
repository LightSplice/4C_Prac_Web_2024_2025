<?php
    $rok = 1939;
    $stulecie = ceil($rok / 100);
    if ($rok % 4 == 0 && $rok % 100 == 0 && $rok % 400 == 0)
    {
        echo ("Jest przestepny");
    }
    else
    {
        echo ("Nie jest przestepny");
    }
    echo ("Jest to: " .$stulecie ." stulecie");
?>