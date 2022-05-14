<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="col-sm-3">
        <?php
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_STRING);
        $corTexto = filter_input(INPUT_POST, "corTexto", FILTER_SANITIZE_STRING);
        $urlLink = filter_input(INPUT_POST, "urlLink", FILTER_SANITIZE_URL);
        $rep = filter_input(INPUT_POST, "rep", FILTER_SANITIZE_SPECIAL_CHARS);
        $corFundo = filter_input(INPUT_POST, "corFundo", FILTER_SANITIZE_STRING);
        ?>
        <h1><?php echo $titulo ?></h1>
        <hr>
        <?php
            for ($i=1; $i<=$rep;$i++){
                ?><p><?php echo $corpo ?></p><?php
            }  
        ?>
        <style>
            body{
                background-color: <?php echo $corFundo ?>;
                color: <?php echo $corTexto ?>;
            }
        </style>
        <a href="<?php echo $urlLink ?>">aaaa</a>
    </div>
</body>

</html>