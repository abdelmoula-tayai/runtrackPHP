<?php
    echo '
    <form method="POST" action="index.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" />
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" />
        <input type="submit" value="Submit" />
    </form>
    ';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        
        if($_POST["username"] == "John" && $_POST["password"] == "Rambo") {
            echo "ce n'est pas ma guerre";
        } else {
            echo "votre pire cauchemar";
        }
    }
?>