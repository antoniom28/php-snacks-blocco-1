<?php
/*Prendere un paragrafo abbastanza lungo, contenente 
diverse frasi. Prendere il paragrafo e suddividerlo in 
tanti paragrafi. Ogni punto un nuovo paragrafo.*/

$text = "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam doloremque porro asperiores est ipsam nobis modi magnam aliquid, eligendi, nostrum animi consectetur. Debitis provident et, vitae culpa praesentium sint maiores?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid illo dolore laboriosam quasi qui iste cum tempore unde omnis quos, ducimus necessitatibus? Mollitia quo, nihil harum illo nisi fugit? Cumque.";

$sub_text = explode(".",$text);


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

    ?>
</body>
</html>

<?php
var_dump($sub_text);
?>