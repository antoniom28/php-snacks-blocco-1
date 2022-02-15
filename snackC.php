<?php

$numbers = [];

while(count($numbers) < 15){
    $randomTemp = rand(1,20);
    if(!in_array($randomTemp , $numbers))
        $numbers[] = $randomTemp;
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
    <p> 
        <?php 
            echo '<pre>'; print_r($numbers); echo '</pre>'; 
        ?> 
    </p>
</body>
</html>