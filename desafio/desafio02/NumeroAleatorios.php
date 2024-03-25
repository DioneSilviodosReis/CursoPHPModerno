<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Aleatorios</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <section>
        <h1>Resultado</h1>
        <?php 
        $numero = $_POST["num"];

        echo "O valor é " . rand(0,$numero);
        ?>
        <br>
        <br>
        <a href="index.html">Voltar</a>
    </section>
</body>
</html>