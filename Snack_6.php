<?php
/*
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/

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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Snack_6_PHP</title>
</head>
<body>
    <?php foreach ($db as $key => $member) : ?>
    <div <?php echo $key === "teachers" ? style= "background-color:grey;" : style= "background-color:green;"?>>
        <?php foreach ($member as $fullName) : ?>
        <h5>Nome : <?php echo $fullName['name']?></h5>
        <h5>Cognome : <?php echo $fullName['lastname']?></h5>
        <?php endforeach; ?>
    </div>    
    <?endforeach;?>
</body>

</html>