<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor 2.0</title>
</head>
<body>
    <section>
        <h1>Conversor 2.0</h1>
        <?php 
            $numero = $_POST["num"];

            $hoje = (new DateTime())->format('m-d-Y');
            $uri = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=\''.$hoje.'\'&$top=100&$format=json&$select=cotacaoCompra,cotacaoVenda,dataHoraCotacao';
            $jsonData = json_decode(file_get_contents($uri));
            
            $cotacao = $numero / floatval($uri);

            echo "A cotação de hoje em dolar é $jsonData";
        ?>
    </section>
</body>
</html>