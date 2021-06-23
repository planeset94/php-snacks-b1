<?php
$nome=$_GET['name'];
$cognome=$_GET['lname'];

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
    
<div>
    <p>Il tuo nome è: <?=$nome; ?></p>
    <p>Il tuo cognome è: <?=$cognome; ?></p>

</div>
</body>
</html>