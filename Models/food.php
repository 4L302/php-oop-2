<?php

include_once __DIR__.'/Models/product.php';

class Food extends Product{
    public $type, $scadenza, $ingredients;

    public function __construct(string $name, float $price, string $image, string $brand, Category $category, string $type, string $scadenza, string $ingredients){
        
        parent::__construct($name, $price, $image, $brand, $category);
        
        $this->type = $type;
        $this->scadenza = $scadenza;
        $this->ingredients =$ingredients;
    }
}

?>