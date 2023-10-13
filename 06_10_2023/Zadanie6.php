<?PHP
    $x = 2032;
    if ($x % 4 == 0)
    {
        if ($x % 100 == 0)
        {
            if ($x % 400 == 0)
            {
                echo ("Luty ma 29 dni");
            }
            else
            {
                echo ("Luty ma 28 dni");
            }
        }
        else
        {
            echo ("Luty ma 29 dni");
        }
    }
    else
    {
        echo ("Luty ma 28 dni");
    }
?>