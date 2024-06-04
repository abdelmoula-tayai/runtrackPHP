<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de texte</title>
    <style>
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form method="post" action="">
        <label for="str">Entrez une chaîne de caractères :</label>
        <input type="text" id="str" name="str" required>
        <br><br>
        <label for="transformation">Choisissez une transformation :</label>
        <select id="transformation" name="transformation">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <br><br>
        <input type="submit" value="Transformer">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $str = $_POST["str"];
        $transformation = $_POST["transformation"];
        
        function gras($str) {
            return preg_replace_callback('/\b[A-Z][a-zA-Z]*\b/', function($matches) {
                return "<p style='font-weight: bold;'>" . $matches[0] . '</p>';
            }, $str);
        }

        function cesar($str, $decalage = 2) {
            $result = '';
            $str = str_split($str);
            foreach ($str as $char) {
                if (ctype_alpha($char)) {
                    $ascii = ord($char);
                    $offset = ctype_upper($char) ? 65 : 97;
                    $char = chr((($ascii + $decalage - $offset) % 26) + $offset);
                }
                $result .= $char;
            }
            return $result;
        }

        function plateforme($str) {
            return preg_replace('/\b\w*me\b/', '_', $str);
        }

        switch ($transformation) {
            case 'gras':
                echo gras($str);
                break;
            case 'cesar':
                echo cesar($str);
                break;
            case 'plateforme':
                echo plateforme($str);
                break;
            default:
                echo $str;
                break;
        }
    }
    ?>
</body>
</html>
