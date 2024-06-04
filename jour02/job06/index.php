<?php
    
    echo '
    <form method="GET" action="index.php">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" />
        <input type="submit" value="Submit" />
    </form>
    ';

    
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        
        if($_GET["nombre"] % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impaire";
        }
    }
?>