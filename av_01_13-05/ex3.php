<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="col-sm-6">
        <h1>Juros</h1>
        <hr>
        <form action="ex3.php" method="GET">
            <div class="col-sm-12">
                <label for="num">Preço:</label>
                <input type="text" class="form-control" id="num" name="num"><br>
            </div>
            <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </form>


        <?php
        $num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_SPECIAL_CHARS);

        if ($num) {
            $d5 = $num - ($num * 0.05);

            $p3 = $num / 3;

            $a5 = $num + ($num * 0.05);
            $pa5 = $a5 / 5;

            $a10 = $num + ($num * 0.1);
            $pa10 = $a5 / 12;

            $a15 = $num + ($num * 0.15);
            $pa15 = $a15 / 18;
        ?><br>
            <p>O preço informado é <strong>R$<?php echo $num ?></strong></p>
            <p>As condições de pagamento são:</p>
            <ul>
                <li>à vista: <span><strong>R$<?php echo $d5 ?></span><span style="color: green"> (5% de desconto)</span></strong></li>
                <li>parcelado em 3x de: <span><strong>R$<?php echo $num ?></strong>, totalizando <strong>R$<?php echo $p3 ?></strong></span></li>
                <li>parcelado em 5x de: <span><strong>R$<?php echo $pa5 ?></strong>, totalizando <strong>R$<?php echo $a5 ?><span style="color: red"> (5% de acréscimo)</span></strong></span></li>
                <li>parcelado em 12x de: <span><strong>R$<?php echo $pa10 ?></strong>, totalizando <strong>R$<?php echo $a10 ?><span style="color: red"> (10% de acréscimo)</span></strong></span></li>
                <li>parcelado em 18x de: <span><strong>R$<?php echo $pa15 ?></strong>, totalizando <strong>R$<?php echo $a15 ?><span style="color: red"> (10% de acréscimo)</span></strong></span></li>
            </ul>
        <?php
        }

        ?>
    </div>
</body>

</html>