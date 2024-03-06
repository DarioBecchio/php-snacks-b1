<?php
/*
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60
*/

$games=[
    [
        "home_team"=>"Genova",
        "guest_team"=>"Pisa",
        "home_team_points"=> rand(1,150),
        "guest_team_points"=> rand(1,150),
    ],
    [
        "home_team"=>"Firenze",
        "guest_team"=>"Catania",
        "home_team_points"=> rand(1,150),
        "guest_team_points"=> rand(1,150),
    ],
    [
        "home_team"=>"Torino",
        "guest_team"=>"Bari",
        "home_team_points"=> rand(1,150),
        "guest_team_points"=> rand(1,150),
    ],
    [
        "home_team"=>"Venezia",
        "guest_team"=>"Roma",
        "home_team_points"=>rand(1,150),
        "guest_team_points"=> rand(1,150),
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack_1</title>
</head>
<body>
    
    <!-- Metodo 1-->
        <?php
        foreach ($games as $game) {?>  
        <p>            
            <span> <?php echo $game['home_team']?> </span> - <span><?php echo $game['guest_team']?></span> | <span> <?php echo $game['home_team_points']?> - <?php echo $game['guest_team_points']?></span>
        </p>            
        <?php }?>
    <!-- Metodo 2-->
    <?php
        foreach ($games as $game) :?> 
        
        <p>            
            <span> <?php echo $game['home_team']?> </span> - <span><?php echo $game['guest_team']?></span> | <span> <?php echo $game['home_team_points']?> - <?php echo $game['guest_team_points']?></span>
        </p> 
        <?php
        endforeach;?>
</body>
</html>