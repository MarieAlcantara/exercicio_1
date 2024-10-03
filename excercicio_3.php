<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <img src="" alt="Imagem dia">
    <?php
    $datetime = new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );
    $hora = $datetime->format( 'H' );
    if ($hora >=0 & <=12) {
        echo "<h1>Bom Dia!</h1></br>";
        echo 
    }
    ?>
</body>
</html>