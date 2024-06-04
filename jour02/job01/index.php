<?php
    echo '
    <form method="GET" action="index.php">
        <input type="text" name="argument1" />
        <input type="text" name="argument2" />
        <input type="submit" value="Submit" />
    </form>
    ';

    $nombreArguments = count($_GET);

    echo "Nombre d'arguments GET : " . $nombreArguments;
?>