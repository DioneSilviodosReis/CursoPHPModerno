<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            $n = $_GET["nome"] ?? "Sem nome";
            $s = $_GET["sobrenome"] ?? "Desconhecido";
            echo "<p> É um prazer prazer te conhecer <strong>$n $s</strong>! Este e meu site!</p>"
        ?>
    </main>
    <a href="index.html">Voltar</a>
</body>
</html>