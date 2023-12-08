<!DOCTYPE html>
<html lang="pl">
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            echo "for: <br>";
            for ($i = 100; $i < 125; $i++)
            {
                if ($i % 5 == 0) {
                    echo $i ."<br>";
                }
            }
            echo "while: <br>";
            $i = 100;
            while ($i < 125)
            {
                if ($i % 5 == 0) {
                    echo $i .'<br>';
                }
                $i++;
            }
            echo "do-while: <br>";
            $i = 100;
            do
            {
                if ($i % 5 == 0) {
                    echo $i .'<br>';
                }
                $i++;
            } while ($i < 125);
        ?>
    </body>
</html>