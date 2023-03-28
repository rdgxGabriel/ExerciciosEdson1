<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>CONTROLE DE GASTOS</title>
</head>
    <?php
        echo "<h1>CONTROLE DE GASTOS</h1>";
        echo "<h3> Receita: </h3>";
        echo "<hr size='4' color='#FF5733' width='62%' align='left'>";
        $rct1 = 5000;
        $rct2 = 560 ;
        $Total= $rct1 + $rct2;

        echo "<strong> Sálario: $rct1</strong>";
        echo "<br>";
        echo "<strong> Adicional de horas extras: $rct2</strong>";
        echo "<br>";
        echo "<strong> Total da receita: $Total </strong>";

        echo "<h3> Despesas: </h3>";
        echo "<hr size='4' color='#A233FF' width='62%' align='left'>";

        $despesas1 = 200;
        $despesas2 = 180;
        $despesas3 = 900;
        $despesas4 = 230; 

        $Totald= $despesas1 + $despesas2 + $despesas3 + $despesas4;

        echo "<strong> Teclado:$despesas1</strong>";
        echo "<br>";
        echo "<strong> Mouse: $despesas2</strong>";
        echo "<br>";
        echo "<strong> Monitor:$despesas3</strong>";
        echo "<br>";
        echo "<strong> MousePad:$despesas4</strong>";
        echo "<br>";
        echo "<strong> As despesas esse mês foram de:$Totald </strong>";

        echo "<br>";
        echo "<strong> Soma:</strong>";

        if ($Total > $Totald) {
        echo "PARA Crédito";
        } elseif ($despesas > $receita) {
        echo "PARA Débito";
        }
    ?>

</body>

</html>



