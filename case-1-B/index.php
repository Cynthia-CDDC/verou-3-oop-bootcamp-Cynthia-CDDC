<?php
declare(strict_types=1);
require './products.php';


ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$banana = new Products("Banana", 0.94, 1.06, 6);
$apple = new Products("Apple", 1.41, 1.06, 3);
$wineBottle = new Products("Winebottle", 8.26, 1.21, 2);

echo $banana->totalPrice();
echo '</br>';
echo '===============';
echo '</br>';
echo $banana->TaxTotal();
echo '</br>';
echo '===============';
echo '</br>';
$bananaTotal = $banana->getTotal();
$appleTotal = $apple->getTotal();
$wineBottleTotal = $wineBottle->getTotal();
echo $bananaTotal + $appleTotal + $wineBottleTotal;