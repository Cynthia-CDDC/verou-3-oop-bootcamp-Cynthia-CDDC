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
//total price = sum of the total of each Product.
//discounted total price = same but use discounted price where needed.
function grandTotal ()
{
    
}

function grandTotalDiscounted()
{

}

echo $banana->getPriceInclTax();
echo '</br>';
echo '===============';
echo '</br>';
echo $banana->getTaxPrice();
echo '</br>';
echo '===============';
echo '</br>';
echo $banana->pricePretax;
echo '</br>';
echo '===============';
echo '</br>';
echo $banana->fruitDiscount();
echo '</br>';
echo '===============';
echo '</br>';
echo $banana->total();
