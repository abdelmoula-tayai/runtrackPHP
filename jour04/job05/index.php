<?php
session_start();

if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['currentPlayer'] = 'X';
}

if (isset($_POST['cell'])) {
    $_SESSION['board'][$_POST['cell']] = $_SESSION['currentPlayer'];
    $_SESSION['currentPlayer'] = $_SESSION['currentPlayer'] == 'X' ? 'O' : 'X';
}

if (isset($_POST['reset'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['currentPlayer'] = 'X';
}

$winningCombinations = [
    [0, 1, 2], [3, 4, 5], [6, 7, 8],
    [0, 3, 6], [1, 4, 7], [2, 5, 8],
    [0, 4, 8], [2, 4, 6]
];

foreach ($winningCombinations as $combination) {
    if ($_SESSION['board'][$combination[0]] == $_SESSION['board'][$combination[1]] &&
        $_SESSION['board'][$combination[1]] == $_SESSION['board'][$combination[2]] &&
        $_SESSION['board'][$combination[0]] != '-') {
        echo $_SESSION['board'][$combination[0]] . " a gagné";
        $_SESSION['board'] = array_fill(0, 9, '-');
        $_SESSION['currentPlayer'] = 'X';
        break;
    }
}

if (!in_array('-', $_SESSION['board'])) {
    echo "Match nul";
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['currentPlayer'] = 'X';
}
?>

<style>
    table {
        margin: 0 auto;
        width: 300px;
        height: 300px;
        background-color: #4CAF50;
        border-collapse: collapse;
    }
    td {
        width: 100px;
        height: 100px;
        border: 1px solid #000;
        text-align: center;
        vertical-align: middle;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    input[type="submit"]:hover {
        opacity: 0.8;
    }
</style>

<table>
    <?php for ($i = 0; $i < 3; $i++): ?>
        <tr>
            <?php for ($j = 0; $j < 3; $j++): ?>
                <td>
                    <form method="post">
                        <input type="hidden" name="cell" value="<?= $i * 3 + $j ?>">
                        <input type="submit" value="<?= $_SESSION['board'][$i * 3 + $j] ?>">
                    </form>
                </td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

<form method="post">
    <input type="submit" name="reset" value="Réinitialiser la partie">
</form>