<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php 
$classe= [
    [
        "nome" => "Christian",
        "cognome" =>"Laus",
        "voti"=>[ 5, 6 , 4, 8 , 7]
    ],
    [
        "nome" => "Davide",
        "cognome" =>"De Castro",
        "voti"=>[ 6, 6 , 9, 8 , 7]
    ],
    [
        "nome" => "Giuseppe",
        "cognome" =>"Fornaro",
        "voti"=>[ 6, 7 , 8, 8 , 7]
    ]
    ];

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
        foreach ($classe as $alunno) {
            // somma dei voti
            $sum =  array_sum($alunno["voti"]);
            // media dei voti
            $average = $sum / count($alunno["voti"]);
            echo "<strong>Nome e Cognome:</strong>". " ".$alunno["nome"]." ".$alunno["cognome"]." ". "<strong>Media:</strong>". " " .$average. "<br>";
        }  

        
        
        
    ?>  
    
</body>
</html>