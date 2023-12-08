<!DOCTYPE html>
<html lang="pl">
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $num = 100;
            echo "for: <br>";
            for ($i = 0; $i < 10; $i++)
            {
                echo($num - $i ."<br>");
            }
            echo "while: <br>";
            $i = 0;
            while ($i < 10)
            {
                echo ($num - $i ."<br>");
                $i++;
            }
            echo "do-while: <br>";
            $i = 0;
            do
            {
                echo($num - $i ."<br>");
                $i++;
            }while($i < 10);
        ?>
    </body>
</html>