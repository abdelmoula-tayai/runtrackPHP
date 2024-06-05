<?php

    include 'function.php';

    $products = [
        ["name" => "book", "price" => 10, "quantity" => 14],
        ["name" => "bookshelf", "price" => 150, "quantity" => 10],
        ["name" => "table", "price" => 120, "quantity" => 5],
        ["name" => "lamp", "price" => 30, "quantity" => 20]
    ];

    echo "<style>

        body {
            font-family: Arial, sans-serif;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>";

    echo "<table>";
    echo "<tr><th>Available</th><th>Price</th><th>Quantity</th><th>Discounted Price</th></tr>";

    foreach ($products as $product) {
        echo "<tr>";
        echo "<td>" . $product["name"] . "</td>";
        echo "<td>" . $product["price"] . "</td>";
        echo "<td>" . $product["quantity"] . "</td>";
        echo "<td>" . applyDiscount($product["price"]) . "</td>";
        echo "</tr>";
    }

    echo "</table>";

?>