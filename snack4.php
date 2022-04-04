<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso
numero più di una volta -->

<?php

$random_numbers = [];

for ($i = 0; $i < 15; $i++)
{
    $random = rand(1, 100);
    echo $random;
    echo '<br>';
    array_push($random_numbers, $random);
}

echo '<hr>';
var_dump($random_numbers);