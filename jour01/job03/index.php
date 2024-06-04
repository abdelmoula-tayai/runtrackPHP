<?php
// Définition des variables de types primitifs
$integer = 42;               // Variable entière
$float = 3.14;               // Variable float
$string = "Hello, world!";   // Variable chaîne de caractères
$boolean = true;             // Variable boolean

// Tableau des variables avec types, noms et valeurs
$variables = [
    ["type" => "integer", "name" => "integer", "value" => $integer],
    ["type" => "float", "name" => "float", "value" => $float],
    ["type" => "string", "name" => "string", "value" => $string],
    ["type" => "boolean", "name" => "boolean", "value" => $boolean ? 'true' : 'false']
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $var): ?>
                <tr>
                    <td><?php echo htmlspecialchars($var['type']); ?></td>
                    <td><?php echo htmlspecialchars($var['name']); ?></td>
                    <td><?php echo htmlspecialchars($var['value']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
