<?php
declare(strict_types=1);

class Product {
    // The Properties
    public $name;
    public $pricePretax;
    public $taxrate;
    public $numPieces;
    public $type;
    // The Constructor with incoming parameters in the brackets
    public function __construct($name, $pricePretax, $taxrate, $numPieces, $type) 
    {
        $this-> name = $name;
        $this-> pricePretax= $pricePretax;
        $this-> taxrate = $taxrate;
        $this-> numPieces = $numPieces;
        $this-> type = $type;
    }
    public function totalPrice()
    {   $currentTotal = 0;
        for ($i = 0; $i < $this-> numPieces; $i++){
            $currentTotal += $this->pricePretax;
        }
        return $currentTotal;
    }
    public function TaxTotal() 
    {
        $taxTotal = 0;
        for ($i = 0; $i < $this-> numPieces; $i++){
            $totalInclTax = $this->pricePretax * $this->taxrate;
            $taxAmount = $totalInclTax - $this->pricePretax;
            $taxTotal += $taxAmount;
        }
        return $taxTotal;
    }
    public function getTotal()
    {   
        $totalPrice = $this->totalPrice();
        $taxTotal = $this->TaxTotal();
        return $totalPrice + $taxTotal;
    }
}