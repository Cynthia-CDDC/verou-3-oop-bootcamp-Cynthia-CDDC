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
    public function getPriceInclTax() // price for one Product-item incl. tax
    {   
        $priceInclTax = 0;
        $amountWithtax = $this->pricePretax * $this->taxrate;
        $priceInclTax += $amountWithtax;
        return $priceInclTax;
    }
    public function getTaxPrice() // tax price for one Product-item
    {
        $taxPrice = 0;
            $priceInclTax = $this->pricePretax * $this->taxrate;
            $taxAmount = $priceInclTax - $this->pricePretax;
            $taxPrice += $taxAmount;
        return $taxPrice;
    }
    public function total() { // total price incl tax for a Product
        $priceInclTax = $this->pricePretax * $this->taxrate;
        $total = $priceInclTax * $this-> numPieces;
        return $total;
    }
    public function fruitDiscount()//discounted price pretax for a Product
    {
        if($this->type === "fruit"){
            $discountPrice = $this->pricePretax * 0.5;
            return $discountPrice;
        }
    }
}