<?php
function convertToLeetSpeak($str) {
    $leet = [
        'a' => '4', 'A' => '4',
        'e' => '3', 'E' => '3',
        'l' => '1', 'L' => '1',
        'o' => '0', 'O' => '0',
        't' => '7', 'T' => '7',
        's' => '5', 'S' => '5',
        'g' => '6', 'G' => '6',
        'b' => '8', 'B' => '8',
        'z' => '2', 'Z' => '2'
    ];

    $leetStr = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (array_key_exists($char, $leet)) {
            $leetStr .= $leet[$char];
        } else {
            $leetStr .= $char;
        }
    }

    return $leetStr;
}


$originalString = "Hello La Plateforme !";
$leetString = convertToLeetSpeak($originalString);
echo $leetString; 
?>


