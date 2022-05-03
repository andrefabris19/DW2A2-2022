
<?php
require "header.php";
?>


<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Contato</h1>
    </div>
    <?php
    $data = date('d/m/Y -  h:i');
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $msg = filter_input(INPUT_POST, "msg");
    
?>

<p>Data: <?php echo $data ?>
<p>Nome informado: <?php echo $nome ?></p>
<p>Email: <?php echo $email ?></p>
<p>Mensagem: <?php echo $msg ?></p>
<?php



$file_name = "Contato_".date('d_m_Y_h_i').".txt";
 $criar = fopen("C:\\xampp\\htdocs\\pasta\\".$file_name,'a+');
 $conteudo = "Contatos via site: ".PHP_EOL.PHP_EOL." Nome: " .$nome.PHP_EOL.PHP_EOL." Email: ". $email .PHP_EOL.PHP_EOL." Mensagem: ". $msg.PHP_EOL.PHP_EOL." Data: " .$data."".PHP_EOL; 
 echo $escrever = fwrite($criar, $conteudo);
 fclose($criar);
 
require "footer.php";
?>