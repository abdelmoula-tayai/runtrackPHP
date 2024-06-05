<?php

    function applyDiscount($price){
        if ($price > 100) {
            return $price * 0.9;
        } else {
            return $price;
        }
    }

?>