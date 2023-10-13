<?PHP
    $x = 4;
    $y = 5;
    $z = 1;
    
    if ($x < $y && $x < $z)
    {
        echo ("Liczba $x jest najmniejsza");
    }
    else if ($y < $x && $x < $z)
    {
        echo ("Liczba $y jest najmniejsza");
    }
    else
    {
        echo ("Liczba $z jest najmniejsza");
    }
?>