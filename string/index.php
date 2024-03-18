<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <?php 
        // $nome = "Gustavo";
        // $sobrenome = "Guanabara \u{1F596}";
        // echo "$nome $sobrenome";

        const ESTADO = "RJ";
        echo "Moro no estado ". ESTADO;

        $curso = "PHP";
        $ano = date('Y');
        //heredoc
        echo <<<TESTE
            Ola eu faço o curso de
                $curso no ano de $ano


        TESTE;
        //nowdoc
        $curso = "PHP";
        $ano = date('Y');

        echo <<<TESTE
            Ola eu faço o curso de
                $curso no ano de $ano


        TESTE;
    ?>
    
</body>
</html>