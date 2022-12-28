<?php

function descuento ($total) {
    return round((35 * $total) / 100,2);
}

$products = ["articulo 1" => 300,"articulo 2" => 500];

echo "<h1>Toda la tienda esta con el 35% de descuento.</h1>";

foreach ($products as $name => $price) {
    $ahorra = descuento($price);
    $total = $price - $ahorra;
    echo "$name price $$price - $ahorra after discount $$total <br>";
}