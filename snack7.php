<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome
e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni
alunno. -->

<?php

$sum = 0;
$students = [
    [
        'name' => 'John',
        'lastname' => 'Black',
        'votes' => [5, 7, 9, 6, 3, 7],
    ],
    [
        'name' => 'Gretchen ',
        'lastname' => 'Hamilton',
        'votes' => [4, 9, 3, 7, 8, 4],
    ],
    [
        'name' => 'Wesley ',
        'lastname' => 'Howard',
        'votes' => [6, 5, 9, 7, 8, 3],
    ],
    [
        'name' => 'Patricia ',
        'lastname' => 'Thorpe',
        'votes' => [6, 7, 5, 9, 3, 2],
    ],
    [
        'name' => 'Gordon',
        'lastname' => 'Mitchell',
        'votes' => [2, 4, 5, 9, 7, 3],
    ],
    [
        'name' => 'Bessie',
        'lastname' => 'Deschamp',
        'votes' => [8, 7, 9, 8, 7, 6],
    ],
    [
        'name' => 'William',
        'lastname' => 'Read',
        'votes' => [6, 9, 7, 3, 2, 4],
    ],
    [
        'name' => 'Michelle',
        'lastname' => 'Williams',
        'votes' => [5, 4, 3, 2, 6, 4],
    ],
    [
        'name' => 'Cassandra',
        'lastname' => 'Simmons',
        'votes' => [7, 9, 5, 8, 3, 4],
    ],
    [
        'name' => 'Edward',
        'lastname' => 'Robertson',
        'votes' => [2, 4, 6, 3, 2, 5],
    ],
];

foreach ($students as $student) 
{
    echo $student['name'] . ' ' . $student['lastname'] . '<br>';
    // var_dump($student['votes']);

    foreach ($student['votes'] as $vote)
    {
        $sum += $vote;
    }

    // echo $sum . '<br>';
    $sum = $sum / count($student['votes']);
    echo round($sum, 2) . '<hr>';
}