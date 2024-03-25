<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Conversor de moeda v1.0</h1>
        <?php 
            $numero = ($_POST["num"]);
            $cotacao = 5.22;

            $dolar = floatval($numero / $cotacao);


            echo "Seus R$ $numero equivalem a Us$ $dolar" 
        
        ?>
        <p>*Cotação fixa de R$5,22 informa diretamente no código.</p>

        <a href="index.html">Voltar</a>
    </section>
    
</body>
</html>