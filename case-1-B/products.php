<?php
declare(strict_types=1);

class Products {
    // The Properties
    public $name;
    public $pricePretax;
    public $taxrate;
    public $numPieces;
    // The Constructor with incoming parameters in the brackets
    public function __construct($name, $pricePretax, $taxrate, $numPieces) 
    {
        $this-> name = $name;
        $this-> pricePretax= $pricePretax;
        $this-> taxrate = $taxrate;
        $this-> numPieces = $numPieces;
    }
}