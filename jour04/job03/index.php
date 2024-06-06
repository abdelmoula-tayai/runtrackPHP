<?php
session_start();

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
} else if (isset($_POST['prenom'])) {
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];
    }
    array_push($_SESSION['prenoms'], $_POST['prenom']);
}

if (isset($_SESSION['prenoms'])) {
    echo "Prénoms : <br>";
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo $prenom . "<br>";
    }
}
?>

<form method="post">
    <input type="text" name="prenom" placeholder="Entrez un prénom">
    <input type="submit" value="Ajouter">
</form>

<form method="post">
    <input type="submit" name="reset" value="Reset">
</form>