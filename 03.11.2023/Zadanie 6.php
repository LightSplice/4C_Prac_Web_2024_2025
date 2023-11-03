<?php
    $side_A = 5;
    $side_B = 6;
    $side_C = 7;

    if ($side_A != $side_B && $side_C != $side_B && $side_A != $side_C)
    {
        echo"Trojkat jest prostokatny";
    }
    else if ($side_A == $side_B && $side_A != $side_C || $side_B == $side_C && $side_A != $side_C || $side_C == $side_A && $side_C != $side_B)
    {
        echo"Trojkat jest rownoramienny";
    }
    else if ($side_A == $side_B && $side_A == $side_C)
    {
        echo"Trojkat jest rownoboczny";
    }
?>