<!-- Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli
insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

// foreach ($db as $key => $item) 
// {
//     if ($key === 'teachers')
//     {
//         foreach ($item as $prof)
//         {
//             echo $prof['name'] . ' ' . $prof['lastname'];
//         }
//     }

//     if ($key === 'pm')
//     {
//         foreach ($item as $prof)
//         {
//             echo $prof['name'] . ' ' . $prof['lastname'];

//         }
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <style>
        div {
            border-width: 3px;
            border-style: solid;
            padding: 5px;
            margin: 5px auto;
            max-width: fit-content;
        }
        .teacher {
            border-color: grey;
        }
        .pm {
            border-color: red;
        }
    </style>
</head>
<body>

    <?php
    foreach ($db as $key => $item) 
        {
            if ($key === 'teachers')
            {
                echo "<div class=\"teacher\">";
                foreach ($item as $prof)
                {
                    echo "${prof['name']} ${prof['lastname']}<br>";         
                }
                echo "</div>";
            }

            if ($key === 'pm')
            {
                echo "<div class=\"pm\">";
                foreach ($item as $prof)
                {
                    echo "${prof['name']} ${prof['lastname']}<br>";  
                }
                echo "</div>";
            }
        }
    ?>
</body>
</html>
 