<?php

echo '
    <form method="POST" action="index.php">
        <input type="text" name="argument1" />
        <input type="text" name="argument2" />
        <input type="submit" value="Submit" />
    </form>
    ';

    if(count($_POST) > 0) {
        echo '<table border="1">';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';

        foreach($_POST as $key => $value) {
            echo '<tr><td>' . htmlspecialchars($key) . '</td><td>' . htmlspecialchars($value) . '</td></tr>';
        }
    }

?>