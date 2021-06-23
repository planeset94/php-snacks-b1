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
    <title>snack 2</title>
</head>
<body>
    
<div>
    <form action="http://localhost:8888/PHP/esercitazione_2()php-snacks-b1)/php-snacks-b1/blocco_2/snack2.php" method="get">

    <input type="text" placeholder="Nome" name="name" >
    <br>
    <input type="text" placeholder="Cognome" name="lname">
    <br>
    <input type="submit" value="Submit">

</div>


<div>
    <p>Il tuo nome è: <?=$nome; ?></p>
    <p>Il tuo cognome è: <?=$cognome; ?></p>

</div>

</form>








</body>
</html>