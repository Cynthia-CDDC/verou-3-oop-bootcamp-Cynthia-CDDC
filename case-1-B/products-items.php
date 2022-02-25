<?php
declare(strict_types=1);
require './products-products.php';
// iterable ?

class ProductsItems extends Products
{
    // The Constructor with incoming parameters in the brackets
    public function __construct($name, $pricePretax, $taxrate, $numPieces) 
    {
        parent:: __construct($name, $pricePretax, $taxrate, $numPieces);
    }
        function totalInclTaxAndTaxTotal(iterable $products)
    {   
        $currentTotal = 0;
        $taxTotal = 0;
        foreach ($products as $product){
            $productTotalIncl = $product->taxrate * ($product->pricePretax * $product->numPieces);
            $productTotalExl = $product->pricePretax * $product->numPieces;
            
            $productTaxCost = $productTotalIncl - $productTotalExl;
            
            $currentTotal += $productTotalIncl;
            $taxTotal += $productTaxCost;
        }
        echo '<h2>$ total incl. tax</h2>';
        var_dump($currentTotal);
        echo '</br>';
        echo '===============';
        echo '</br>';
        echo '<h2>$ tax total</h2>';
        var_dump($taxTotal);
    }
}


totalInclTaxAndTaxTotal($products);



