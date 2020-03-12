<?php
include_once('./controller/mensagens.php')
?>

<section class="container bg-branco">
    <h3 class="center">Em que podemos ajudá-lo?</h3>
    <form method="post" action="" >

        <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="E-mail">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="tel" placeholder="Telefone">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="cep" maxlength="9" id="cep" onblur="pesquisacep(this.value);" required placeholder="CEP">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="endereco" maxlength="100" id="rua" placeholder="endereço da obra">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="numero" placeholder="Numero">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="complemento" placeholder="Complemento">
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="assunto" placeholder="Assunto">
        </div>

        <div class="form-group">
            <textarea class="form-control" name="mensagem" rows="3" placeholder="mensagem"></textarea>
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn bg-azul branco">Enviar</button>
            <button type="reset" class="btn btn-danger branco">Cancelar</button>
        </div>
    </form>
</section>