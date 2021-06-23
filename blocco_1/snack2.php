<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


<?php

$name = $_GET['name'];
$mail=$_GET['mail'];
$age=$_GET['age'];
$re = '/[A-z]+@[A-z]+.[A-z]+/m';
if(strlen($name)>3 && preg_match_all($re, $mail) && is_numeric($age) ){
$result= 'Accesso Riuscito';

} else{
    $result= 'Accesso Negato';
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>

<body>

    <form action="http://localhost:8888/PHP/esercitazione_2()php-snacks-b1)/php-snacks-b1/blocco_1/snack2.php"
        method="get">
        <input type="text" placeholder="Name" name="name">
        <br>
        <input type="text" placeholder="Email" name="mail">
        <br>
        <input type="number" placeholder="Age" name="age">
        <br>
        <input type="submit" name="submit">

    </form>






    <h1> <?= $result  ?> </h1>



</body>

</html>