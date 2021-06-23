<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<pre>
<?php

$match=[

    [
        'casa'=> 'Como',
        'avversario'=> 'Genova',
        'punti_casa'=> rand(1,15),
        'punti_avv'=>rand(1,15),
    ],
    [
        'casa'=> 'Milono',
        'avversario'=> 'Pescara',
        'punti_casa'=> rand(1,15),
        'punti_avv'=>rand(1,15),
    ],
    [
        'casa'=> 'Lecce',
        'avversario'=> 'Roma',
        'punti_casa'=> rand(1,15),
        'punti_avv'=>rand(1,15),
    ],
    [
        'casa'=> 'Olgiate',
        'avversario'=> 'Cantù',
        'punti_casa'=> rand(1,15),
        'punti_avv'=>rand(1,15),
    ],




];




?>

</pre>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    
<?php for ($i=0; $i < count($match); $i++) { 

$coppia=$match[$i]; 

?> 
<div>
    <span> <?=  $coppia ['casa'] ." -" ; ?> </span>
    <span> <?=  $coppia ['avversario'] . " |"; ?> </span>
    <span> <?=  $coppia ['punti_casa'] . " -"; ?> </span>
    <span> <?=  $coppia ['punti_avv'] ; ?> </span>
</div>


 <?php } 
?>



</body>
</html>