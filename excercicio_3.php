<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <?php
    $datetime = new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );
    $hora = $datetime->format( 'H' );
    if ($hora >=0 && $hora<=12) {
        echo "<h1>Bom Dia!</h1></br>";
        echo "<img src='https://www.portalriomaina.com/wp-content/uploads/2022/05/dia-do-sol.jpg' alt='Imagem dia'>";
    } elseif ($hora >12 && $hora<18){
        echo "<h1>Boa Tarde!</h1></br>";
        echo "<img src='https://img.freepik.com/fotos-premium/fim-da-tarde-natureza-paisagem-foto-de-um-rio-ao-por-do-sol_566982-137.jpg' alt='Imagem tarde'>";
    } else{
        echo "<h1>Boa Noite!</h1></br>";
        echo "<img src='https://borealisexpedicoes.com.br/wp-content/uploads/lofoten-noruega-noite-polar-1-scaled.jpg' alt='Imagem noite'>";
    }
    ?>
</body>
</html>