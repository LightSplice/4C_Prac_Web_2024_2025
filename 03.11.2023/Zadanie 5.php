<?php
    $x = 0.50;
    if ($x < 0.30) 
    {
        echo"1";
    }
    else if ($x < 0.50 && $x >= 0.30) 
    {
        echo"2";
    }
    else if ($x < 0.73 && $x >= 0.50) 
    {
        echo"3";
    }
    else if ($x < 0.90 && $x >= 0.73) 
    {
        echo"4";
    }
    else if ($x < 0.96 && $x >= 90) 
    {
        echo"5";
    }
    else if ($x >= 96) 
    {
        echo"6";
    }
?>