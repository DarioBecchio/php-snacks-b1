<?php 
/*
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e 
un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$array_class=[
[
    "name" => "Dario",
    "lastname" => "Beck",
    "votes"=>[1,5,3,4,5],
],
[
    "name" => "Mario",
    "lastname" => "Jeck",
    "votes"=>[5,2,4,4,5],
],
[
    "name" => "Bario",
    "lastname" => "Seck",
    "votes"=>[1,2,5,5,5],
]
];
//var_dump(array_sum($array_class[2]['votes']) / count($array_class[2]['votes']));

foreach ($array_class as $student){
    echo '<div>';
    echo $student['name'] . '' . $student['lastname'] . '| vote average: ' . array_sum($student['votes']) / count($student['votes']);
    echo '</div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack_7_PHP</title>
</head>
<body>
    
</body>
</html>


