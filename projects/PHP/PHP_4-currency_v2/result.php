<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Result</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <main role="main">
        <h1>currency converter v2.0</h1>
        <div>
            <?php
                $currency = numfmt_create("us", NumberFormatter::CURRENCY);

                $date_init = date('m-d-Y', strtotime("-7 days"));
                $date_end = date('m-d-Y');

                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$date_init.'\'&@dataFinalCotacao=\''.$date_end.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

                $data = json_decode(file_get_contents($url), true);

                $num = (float)$_GET["num"] ?? 0;
                $dollar = $data["value"][0]["cotacaoCompra"];
                $real_converted = $num / $dollar;

                echo "<p>Money Inserted: ".numfmt_format_currency($currency, $num, "BRL")."</p>";
                echo "<p class='p-style'>Dollar Price: ".numfmt_format_currency($currency, $dollar, "USD")."</p>";
                echo "<p>Converted: ".numfmt_format_currency($currency, $real_converted, "USD")
            ?>
        </div>
        <a href="./index.html">Back</a>
    </main>    
</body>
</html>