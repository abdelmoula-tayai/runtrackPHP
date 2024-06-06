<?php
    if(isset($_POST['reset'])) {
        setcookie('nbVisites', 0, time() + (86400 * 30), "/"); // 86400 = 1 day
    } else {
        if(!isset($_COOKIE['nbVisites'])) {
            setcookie('nbVisites', 1, time() + (86400 * 30), "/"); // 86400 = 1 day
        } else {
            $visites = ++$_COOKIE['nbVisites'];
            setcookie('nbVisites', $visites, time() + (86400 * 30), "/");
        }
    }

    echo "Nombre de visites : ".$_COOKIE['nbVisites'];
?>

<form method="post">
    <input type="submit" name="reset" value="Reset">
</form>