<?php
    $host = 'localhost';
    $dbname = 'jour05';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = $db->prepare("SELECT nom, capacite FROM salle");
        $query->execute();

        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        echo '<table border="1">';
        echo '<thead>';
        echo '<tr>';

        foreach (array_keys($result[0]) as $column) {
            echo "<th>$column</th>";
        }

        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';

        foreach ($result as $row) {
            echo '<tr>';

            foreach ($row as $value) {
                echo "<td>$value</td>";

            }

            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
    } catch (PDOExeption $e) {
        echo "Error: " . $e->getMessage();
    }
?>