<?php 

function calculeTotalItems($products) {
    $totalItems = 0;
    foreach($products as $product){
        $totalItems += $product["quantity"];
    }
    
    return $totalItems;
};

function calculeTotalValue($products) {
    $totalValue = 0;
    foreach($products as $product) {
        $totalValue += $product["quantity"] * $product["value"];
    }

    return $totalValue;
};

?>