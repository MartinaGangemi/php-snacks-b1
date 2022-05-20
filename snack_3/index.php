<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 
$randomNumb = [];


for($i=0; count($randomNumb) <15 ; $i++){
 $number = rand(1, 50);
 if(!in_array($number, $randomNumb)){
    array_push($randomNumb, $number);
  }
}

var_dump($randomNumb);



?>