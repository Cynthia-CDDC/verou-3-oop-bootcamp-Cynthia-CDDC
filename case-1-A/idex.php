<?php
$products = [
    ['name' => 'Banana', 'pricePretax' => 0.94, 'taxrate'=> 1.06, 'numPieces'=>6],
    ['name' => 'Apple', 'pricePretax' => 1.41, 'taxrate'=> 1.06, 'numPieces'=>3],
    ['name' => 'WineBottle', 'pricePretax' => 8.26,'taxrate'=> 1.21, 'numPieces'=>2],
];

function createPriceInclTax($products)
{   
    $currentTotal = 0;
    $taxTotal = 0;
    foreach ($products as $product){
        $productTotalIncl = $product['taxrate'] * ($product['pricePretax'] * $product['numPieces']);
        $productTotalExl = $product['pricePretax'] * $product['numPieces'];
        
        $productTaxCost = $productTotalIncl - $productTotalExl;
        
        $currentTotal += $productTotalIncl;
        $taxTotal += $productTaxCost;
    }
    echo '<h2>$total</h2>';
    var_dump($currentTotal);
    echo '</br>';
    echo '===============';
    echo '</br>';
    var_dump($taxTotal);
}

createPriceInclTax($products);