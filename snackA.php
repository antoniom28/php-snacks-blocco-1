<?php
$basket_teams = [
    [
        "casa" => "Olimpia Milano",
        "ospite" => "Cantù",
        "puntiCasa" => 55,
        "puntiOspite" => 60,
    ],
    [
        "casa" => "Virtus Bologna",
        "ospite" => "Varese",
        "puntiCasa" => 32,
        "puntiOspite" => 61,
    ],
    [
        "casa" => "Reggiana",
        "ospite" => "Trieste",
        "puntiCasa" => 54,
        "puntiOspite" => 55,
    ],
    [
        "casa" => "Stella Azzurra",
        "ospite" => "Scandone Avellino",
        "puntiCasa" => 1,
        "puntiOspite" => 19,
    ],
    [
        "casa" => "Pall. Pavia",
        "ospite" => "Partenope",
        "puntiCasa" => 29,
        "puntiOspite" => 77,
    ],
];

for($i = 0; $i < count($basket_teams); $i++ )
$all_game[] = 
    $basket_teams[$i][casa]
    ." - "
    .$basket_teams[$i][ospite]
    ." / "
    .$basket_teams[$i][puntiCasa]
    ." - "
    .$basket_teams[$i][puntiOspite]
;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> 
        <?php 
            for($i=0; $i<count($all_game); $i++) 
                echo '<p>' . $all_game[$i] .'</p>'; 
        ?> 
    </p>
</body>
</html>