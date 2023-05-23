<?php

include __DIR__.'/Models/category.php';

$dog = new Category('Dog', 'fa-solid fa-dog');
$cat = new Category('Cat', 'fa-solid fa-cad');

$prodotto = new Product ('Cuccia', 50, '../image/download.jpg', 'PetEasy', $dog);
var_dump($prodotto);

$cibo = new Food('Crocchette', 20, '../image/download (1).jpg','Hills', $cat,'Secco', 'Domani', 'Pollo');

?>