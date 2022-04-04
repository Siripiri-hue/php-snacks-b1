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

foreach ($db as $key => $item) 
{
    if ($key === 'teachers')
    {
        foreach ($item as $prof)
        {
            echo $prof['name'] . ' ' . $prof['lastname'];

        }
    }

    if ($key === 'pm')
    {
        foreach ($item as $prof)
        {
            echo $prof['name'] . ' ' . $prof['lastname'];

        }
    }
}
 