<?php

echo '
    <form method="POST" action="index.php">
        <input type="text" name="argument1" />
        <input type="text" name="argument2" />
        <input type="submit" value="Submit" />
    </form>
    ';

    $nombrePost = count($_POST);

    echo "Nombre d'arguments POST : " . $nombrePost;


?>