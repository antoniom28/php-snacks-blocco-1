<?php

$all_students = [
    [
        "name" => "Franco",
        "surname" => "Cocorito",
        "grade" => [16,29,30,22,22],
    ],
    [
        "name" => "Antonio",
        "surname" => "Marchese",
        "grade" => [16,13,22,29,29],
    ],
    [
        "name" => "Peppe",
        "surname" => "Ghepardo",
        "grade" => [30,16,16,16,16],
    ],
    [
        "name" => "Squalo",
        "surname" => "Squalame",
        "grade" => [30,30,30,11,29],
    ],
];

//count su array bidimensionale restituirà la size dell'array principale
//in questo caso di all_students, per array a più di una dimensione usare
//count(array_map('count',$array[][])); array_map restituisce un array,
//e con count calcoliamo la size di quest'ultimo per conoscere la size
//dell'arrey desiderato

for($i = 0; $i < count($all_students); $i++ ){
    $average = array_sum($all_students[$i][grade]) / count(array_map('count', $all_students[0][grade]));
    $students[] = 
        $all_students[$i][name]
        ."  "
        .$all_students[$i][surname]
        ."  "
        .$average
    ;
}

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
    <?php 
        for($i=0; $i<count($all_students); $i++) 
            echo '<p>'. $students[$i] .'</p>'; 
    ?>
</body>
</html>