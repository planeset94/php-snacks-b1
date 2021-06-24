<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi 
voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php

$class_students=[

    [
        'nome'=>'andrea',
        'cognome'=>'monti',
        'voti'=>[10,4,3,8,9]
    ],

    [
        'nome'=>'carla',
        'cognome'=>'lazzati',
        'voti'=>[10,4,3,8,9]
    ],

    [
        'nome'=>'tiziana',
        'cognome'=>'pollavini',
        'voti'=>[10,4,3,8,9]
    ],

    [
        'nome'=>'fabio',
        'cognome'=>'folgheri',
        'voti'=>[10,4,3,8,9]
    ]

];


function average($arr)
{
  
    if (!is_array($arr)) {
        return false;
    }else{
        return array_sum($arr)/count($arr);
    }



}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>

<body>

    <?php 

    foreach ($class_students as $student) { ?>

    <p>Nome: <?= $student['nome']?></p>
    <p>Cognome: <?= $student['cognome']?></p>
    <p>Media voti: <?=  average($student['voti']);  ?></p>
    <br>






    <?php
    }
?>




</body>

</html>