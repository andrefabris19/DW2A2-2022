<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Destino Praticando</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <div class="col-sm-3">
    <h1>Exeercício 2</h1>
        <hr>
        <?php
        $rep = filter_input(INPUT_POST, "rep", FILTER_SANITIZE_URL);
        $urlImagem = filter_input(INPUT_POST, "urlImagem", FILTER_SANITIZE_URL);
        ?>
        <?php
        echo $rep;
           if ($rep == "1"){
            ?><img style="width: 300px; height: 300px;" src="<?php echo $urlImagem?>"><?php
           } else {
               ?>
               <style>
            body{
                background-image: url(<?php echo $urlImagem ?>);
                
            }
            </style>
            <?php
           }
        ?>
    </div>
</body>

</html>