<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = (int)$_GET["age"];

var_dump($name, $mail, $age, strlen($name));
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
    <?php if (strlen($name) > 3 && str_contains($mail, ".") && str_contains($mail, "@") && is_numeric($age)) : ?>
        <h1>dati validi</h1>
    <?php  else: ?>
        <h1>devi inserire i dati corretti!</h1>
    <?php endif; ?>

</body>
</html>