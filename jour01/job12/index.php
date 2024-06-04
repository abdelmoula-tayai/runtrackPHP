<?php
function calcul($num1, $op, $num2){
    if ($op == "+") {
        return $num1 + $num2;
    } elseif ($op == "-") {
        return $num1 - $num2;
    } elseif ($op == "x") {
        return $num1 * $num2;
    } elseif ($op == "/") {
        return $num1 / $num2;
    } else {
        return "Opérateur invalide";
    }
}

echo calcul(5, "+", 5); 
echo "<br>";
echo calcul(5, "-", 5);
echo "<br>";
echo calcul(5, "x", 5);
echo "<br>";
echo calcul(5, "/", 5);

?>
