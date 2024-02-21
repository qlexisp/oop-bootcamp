<?php
// Contenu du panier
$banana = 1;
$apple = 1.50;
$wine_bottle = 10;

// Quantités
$banana_quantity = 6;
$apple_quantity = 3;
$wine_quantity = 2;

// Prix total
$banana_price = $banana * $banana_quantity;
$apple_price = $apple * $apple_quantity;
$wine_price = $wine_bottle * $wine_quantity;
$total = $banana_price + $apple_price + $wine_price;

// Affichage des prix HTVA
echo "Prix HTVA:<br>";
echo "Total des bananes: $banana_price € <br>";
echo "Total des pommes: $apple_price €<br>";
echo "Total des vins: $wine_price €<br>";
echo "Votre total est de: $total €<br><br>";

// Calcul de la TVA
$fruit_tax_rate = 0.06;
$wine_tax_rate = 0.21;
$banana_price_tva = $banana_price * $fruit_tax_rate + $banana_price;
$apple_price_tva = $apple_price * $fruit_tax_rate + $apple_price;
$wine_price_tva = $wine_price * $wine_tax_rate + $wine_price;
$total_tva = $banana_price_tva + $apple_price_tva + $wine_price_tva;

// Affichage des prix TVA
echo "Prix avec TVA:<br>";
echo "Total des bananes: $banana_price_tva €<br>";
echo "Total des pommes: $apple_price_tva €<br>";
echo "Total des vins: $wine_price_tva €<br>";
echo "Votre total est de: $total_tva €";
?>