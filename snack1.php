<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà
una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra
ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano- Cantù | 55-60
-->


<?php

$partite = array (
    [
        'casa' => 'Raptors',
        'ospite' => 'Chavaliers',
        'punti_casa' => 117,
        'punti_ospite' => 104,
    ],
    [
        'casa' => 'Bucks',
        'ospite' => 'Wizards',
        'punti_casa' => 114,
        'punti_ospite' => 102,
    ],
    [
        'casa' => 'Grizzlies',
        'ospite' => 'Pacers',
        'punti_casa' => 133,
        'punti_ospite' => 103,
    ],
    [
        'casa' => 'Pelicans',
        'ospite' => 'Bulls',
        'punti_casa' => 126,
        'punti_ospite' => 109,
    ],
    [
        'casa' => 'Nuggets',
        'ospite' => 'Suns',
        'punti_casa' => 130,
        'punti_ospite' => 140,
    ]
);

// var_dump($partite);
// var_dump(count($partite));

for ($i = 0; $i < count($partite); $i++)
{
    echo $partite[$i]['casa']." - ".$partite[$i]['ospite']." | ".$partite[$i]['punti_casa']." - ".$partite[$i]['casa'];
    echo "<br>";
}


