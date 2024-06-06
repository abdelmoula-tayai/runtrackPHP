<?php
if (isset($_POST['connexion'])) {
    setcookie('prenom', $_POST['prenom'], time() + (86400 * 30), "/"); // 86400 = 1 day
}

if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600, "/");
    unset($_COOKIE['prenom']);
}
?>

<?php if (!isset($_COOKIE['prenom'])): ?>
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez votre prénom">
        <input type="submit" name="connexion" value="Connexion">
    </form>
<?php else: ?>
    Bonjour <?php echo $_COOKIE['prenom']; ?> !
    <form method="post">
        <input type="submit" name="deco" value="Déconnexion">
    </form>
<?php endif; ?>