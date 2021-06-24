<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<style>
.grey {
    background-color: grey;
    width: 50%;
}

.green {
    background-color: green;
    width: 50%;
}
</style>

<body>

    <?php

$roles = array_keys($db);
// var_dump($roles);
    for ($i=0; $i < count($roles); $i++) { 
    $role=$roles[$i];    
    // var_dump($role);
    ?>

    <div class="<?php echo $role == 'teachers' ? 'grey' : 'green'; ?>">

        <?php

        for ($j=0; $j <count($db[$role]); $j++) { 
            $name=$db[$role][$j]['name'];
            $lname= $db[$role][$j]['']; ?>

        <p> <?=$name; ?></p>
        <p> <?=$lname; ?></p>





        <?php 


        };


        ?>










    </div>












    <?php
    }
    ?>





</body>

</html>