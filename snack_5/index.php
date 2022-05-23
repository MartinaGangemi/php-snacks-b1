<!-- Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php
$text = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia aliquid velit, impedit qui distinctio eaque at, aut odio maiores iste ullam quis illo similique, aliquam quas expedita culpa et provident nihil fugit. Quod molestias maiores tempora nam eveniet corrupti, consectetur error, expedita minus iure libero eum? Velit ipsam est officia ipsum alias ab optio magnam vero harum? Officiis quidem nesciunt perspiciatis nobis eaque? Minima voluptatibus inventore, nihil hic a est. Cumque, asperiores est. Facere quo nemo veniam asperiores veritatis maiores. Quaerat quas iusto odio ex ratione sed, repellat quos cupiditate suscipit, vero ducimus perferendis eius eligendi sunt reiciendis fuga aliquid.";

$textDiviso = explode(".", "$text");

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
    <?php foreach($textDiviso as $paragrafo): ?>
    <p> <?php echo $paragrafo ?></p>
    
    <? endforeach ?>
    


</body>
</html>