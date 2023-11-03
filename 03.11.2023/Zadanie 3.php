<?php
    $kategorie = 1;
    $cena = 60;
    $elektronika = $cena * 1.22;
    $pieczywo = $cena * 1.05;
    $odziez = $cena * 1.15;
    switch ($kategorie) 
    {
        case 1:
            echo"Cena to: $elektronika";
            break;
        case 2:
            echo "Cena to: $pieczywo";
            break;
        case 3:
            echo "Cena to: $odziez";              
            break;
    }
?>