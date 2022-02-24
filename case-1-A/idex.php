<?php
function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}
whatIsHappening();

// create array with product-name, price-pretax, taxrate, nr-of-pieces.
// create function for tax calculation
//TODO: addition the pretax prices
//TODO: addition the incl tax prices = total
//TODO: incl tax prices - pretax prices = total tax

$products = [
    ['name' => 'Banana', 'pricePretax' => 0.94, 'taxrate'=> 6, 'numPieces'=>6],
    ['name' => 'Apple', 'pricePretax' => 1.41, 'taxrate'=> 6, 'numPieces'=>3],
    ['name' => 'WineBottle', 'pricePretax' => 8.26,'taxrate'=> 21, 'numPieces'=>2],
];

$pretaxTotal = 0;

function createPriceInclTax($products, $pretaxTotal)
{   
    foreach ($products as $product){
        
        if($product['taxrate'] == 6){
            $priceInclTax = $product['pricePretax'] * 1.06;
        }
        if($product['taxrate'] == 21){
            $priceInclTax = $product['pricePretax'] * 1.21;
        }
        $preTaxtotalPerProduct = $product['pricePretax'] * $product['numPieces'];

        echo '<h2>$_POST</h2>';
        var_dump($preTaxtotalPerProduct);
        echo '<h2>$_COOKIE</h2>';

        echo '<h2>$_POST</h2>';
        var_dump($priceInclTax);
        echo '<h2>$_COOKIE</h2>';
    }
    // echo '<h2>$_POST</h2>';
    // var_dump($pretaxTotal += $preTaxtotalPerProduct);
    // echo '<h2>$_COOKIE</h2>';
    // echo ($products[1]['name']);
}

createPriceInclTax($products);