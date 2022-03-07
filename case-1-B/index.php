<?php
declare(strict_types=1);
require './Product.php';


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$banana = new Product("Banana", 0.94, 1.06, 6, "fruit");
$apple = new Product("Apple", 1.41, 1.06, 3, "fruit");
$wineBottle = new Product("Winebottle", 8.26, 1.21, 2, "wine");

$basket = [
    $banana,
    $apple,
    $wineBottle,
];

$bananaTotal = $banana->getTotal();
$appleTotal = $apple->getTotal();
$wineBottleTotal = $wineBottle->getTotal();

//grandTotal=0, for each basketItem take the total price and add to grandTotal

echo $banana->totalPrice();
echo '</br>';
echo '===============';
echo '</br>';
echo $banana->TaxTotal();
echo '</br>';
echo '===============';
echo '</br>';
echo $bananaTotal + $appleTotal + $wineBottleTotal;
