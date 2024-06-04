<?php
    
    echo '
    <form method="GET" action="index.php">
        <label for="largeur">Largeur:</label>
        <input type="text" id="largeur" name="largeur" />
        <label for="hauteur">Hauteur:</label>
        <input type="text" id="hauteur" name="hauteur" />
        <input type="submit" value="Submit" />
    </form>
    ';

    
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $largeur = $_GET["largeur"];
        $hauteur = $_GET["hauteur"];

        
        if ($largeur > 0 && $hauteur > 0 && $largeur % 2 == 0) {
            echo "<pre>";

           
            for ($i = 0; $i < $largeur / 2; $i++) {
                echo str_repeat(' ', ($largeur / 2) - $i - 1);
                echo '/';
                echo str_repeat('_', $i * 2);
                echo '\\';
                echo "\n";
            }

            
            for ($i = 0; $i < $hauteur; $i++) {
                if ($i == $hauteur - 1) {
                    echo '|';
                    echo str_repeat('_', $largeur - 2);
                    echo '|';
                } else {
                    echo '|';
                    echo str_repeat(' ', $largeur - 2);
                    echo '|';
                }
                echo "\n";
            }

            echo "</pre>";
        }
    }
?>