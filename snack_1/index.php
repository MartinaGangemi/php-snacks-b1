<?php
    $array = [
        [
            "casa" => "Milano",
            "ospite" => "Brindisi",
            "puntiCasa" => 80,
            "puntiOspite" => 60,
        ],
        [
            "casa" => "Torino",
            "ospite" => "Roma",
            "puntiCasa" => 50,
            "puntiOspite" => 65,
        ],
        [
            "casa" => "Asti",
            "ospite" => "Monza",
            "puntiCasa" => 80,
            "puntiOspite" => 60,
        ],
    ];

    var_dump($array)

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

 <?php for ($i=0; $i < count($array); $i++) {
        echo $array[$i]["casa"] ?> -
        <?php echo $array[$i]["ospite"]; ?> |
        <?php echo $array[$i]["puntiCasa"]; ?> -
        <?php echo $array[$i]["puntiOspite"]; ?> <br>
        <?php } ?>



<!-- <h2>Seconda versione</h2>
<?php
    for ($i=0; $i < count($array); $i++) {
        echo $array[$i]["casa"] ." " ."-" . " ";
         echo $array[$i]["ospite"] ." " ."|" . " "; 
         echo $array[$i]["puntiCasa"] ." " ."-" . " ";
         echo $array[$i]["puntiOspite"] . "<br>"; 
         }
 ?> -->
</body>
</html>