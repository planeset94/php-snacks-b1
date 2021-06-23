<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array
 non dovrà contenere lo stesso numero più di una volta -->

<pre>
 <?php


$list=[];


while (count($list)<=15){ 
    $random_num=mt_rand(0,100);
    
    if(!in_array($random_num, $list)){
    
        $list[]=$random_num;
        
    }
    
    
    
}
var_dump($list);








?>

</pre>






