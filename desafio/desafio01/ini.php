<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section>
    <h1>Resultado</h1>
    <?php
        $numero = $_POST["num"];
    
        $ante = $numero - 1;
        $suce = $numero + 1;
    
        echo "<p>Numero escolhido foi <strong>$numero</strong> </p>";
        echo "<p>Seu antecessor é  <strong>$ante</strong> </p>";
        echo "<p>Seu sucessor é <strong>$suce</strong> </p>";
    ?>
</section>
</body>
</html>