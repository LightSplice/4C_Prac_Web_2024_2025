<!DOCTYPE html>
<html lang="pl-PL">
    <head>
        <title>Portal społecznościowy</title>
        <link rel="stylesheet" href="styl5.css">
    </head>
    <body>
        <?php
            $db = new mysqli('localhost', 'root', '', 'portal');
        ?>
        <div id="baner_lewy">
            <h2>Nasze osiedle</h2>
        </div>
        <div id="baner_prawy">
            <?php
            $q = "SELECT count(*) FROM dane";
            $result = $db->query($q);
            $row = $result->fetch_row();
            $count = $row[0];
            echo "<h4>Liczba użytkowników portalu: $count</h4>";
            ?>
        </div>        
            <div id="lewy">
                <h3>Logowanie</h3>
                <form action="uzytkownicy.php" method="post">
                <label for="login">login:</label><br>
                <input type="text" name="login" id="login"><br>
                <label for="password">hasło:</label><br>
                <input type="password" name="password" id="password"><br>
                <input type="submit" value="Zaloguj">
            </form>
            </div>
            <div id="prawy">
                <h3>Wizytówka</h3>
                <div id="wizytówki">
                    <?php
                    if (isset($_POST['login']) && isset($_POST['password'])) {
                        $login = $_POST['login'];
                        $password = $_POST['password'];
                    }
                    else   
                        echo "Hasło nieprawidłowe";
                    ?>
                </div>
            </div>
            <div id="stopka">
                 Stronę wykonał: Jakub Gad
            </div>        
        
    </body>
</html>