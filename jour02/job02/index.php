<?php
    // Créer le formulaire HTML
    echo '
    <form method="GET" action="index.php">
        <input type="text" name="argument1" />
        <input type="text" name="argument2" />
        <input type="submit" value="Submit" />
    </form>
    ';

    // Vérifier si $_GET contient des arguments
    if(count($_GET) > 0) {
        // Créer le tableau HTML
        echo '<table border="1">';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';

        // Parcourir chaque argument dans $_GET
        foreach($_GET as $key => $value) {
            echo '<tr><td>' . htmlspecialchars($key) . '</td><td>' . htmlspecialchars($value) . '</td></tr>';
        }

        echo '</table>';
    }
?>