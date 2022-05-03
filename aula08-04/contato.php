<?php
require 'header.php';
?>
<div class="inicio">
    <div class="bg-light p-4 mb-4 rounded">
        <h1 class="text-center">Contato</h1>
    </div>
    <div class="container col-sm-8">
        <form action="destContato.php" method="POST" class="form-inline">

            <div class="col-sm-8 mb-2">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" required>
            </div>

            <div class="col-sm-8 mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>

            <div class="col-sm-8 mb-4">
                <label for="msg" class="form-label">Mensagem</label>
                <textarea name="msg" rows="5" cols="60 "></textarea>
            </div>

            <div class="col-sm-8 text-center">
                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </form>
    </div>
</div>
<?php
require 'footer.php';
?>