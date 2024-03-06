<?php
/*Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta*/
$randomNumbers = [];
while (count($randomNumbers) < 15){
    $createRandomNumbers = rand(1, 20);
    if (!in_array($createRandomNumbers,$randomNumbers)) {
        $randomNumbers [] = $createRandomNumbers;  
    }
}

var_dump($randomNumbers);
?>