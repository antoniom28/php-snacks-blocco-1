<?php

$user = [
    "name" => $_GET[name],
    "mail" => $_GET[mail],
    "age" => $_GET[age],
];

$result = inputControl($user); 

function inputControl($user){
    if(strlen($user[name]) > 3 && $user[age] >= 14)
        if(filter_var($user[mail], FILTER_VALIDATE_EMAIL))
            return "login successful, hi ".$user[name].$user[age]."!!";
        else
            return "access denied, need @something and .example for a Mail";
    else
        return "access denied, the name requires 4 or more characters or you're too young";
}

/*ho letto che str_contains è per la versione 8 di php, e che 
la si può implementare in questo modo.
si poteva fare anche con strpos(..)!= false ma lo avevamo visto
a lezione quindi ho preferito fare qualcosa che non conoscevo*/
function str_contains(string $haystack, string $needle): bool{
    return '' === $needle || false !== strpos($haystack, $needle);
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
    <h1> <?php echo $result ?> </h1>
</body>
</html>