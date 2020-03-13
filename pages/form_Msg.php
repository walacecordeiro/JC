<?php

include_once('mensagens.php');
if (!empty($_POST)) {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $tel = trim($_POST["tel"]);
    $cep = trim($_POST["cep"]);
    $endereco = trim($_POST["endereco"]);
    $numero = trim($_POST["numero"]);
    $complemento = trim($_POST["complemento"]);
    $mensagem = trim($_POST["mensagem"]);

    $sqlcon = "insert into contato (nome, email, tel, cep, endereco, numero, complemento, msg) values ('$nome', '$email', '$tel', '$cep', '$endereco', '$numero', '$complemento', '$mensagem')";
    
    //Conecta o banco de dados
    $conn = mysqli_connect(LOCAL, USER, PASS, BASE);
    mysqli_set_charset($conn, "utf8");
     
    //Cadastro do Usuario
    $salvo = mysqli_query($conn, htmlspecialchars($sqlcon)) or die(mysqli_error($conn));
    if ($salvo){
        //echo "<div class='alert alert-success'> Salvo </div>";
        aviso("Salvo");
    } else {
        //echo "<div class='alert alert-danger'> Erro ao salvar! </div>";
        erro("Erro ao Salvar");
    }

    mysqli_close($conn);
}

function validar($user)
{
    $erros = "";
    if ($user['nome'] == "") {
        $erros .= "Nome em branco.<br>";
    }
    if ($user['email'] == "") {
        $erros .= "E-mail em branco.<br>";
    }
    if ($user['senha'] == "") {
        $erros .= "Senha em branco.<br>";
    } else if (strlen($user['senha']) < 7) {
        $erros .= "Senha muito curta. Minimo de 8 caracteres.<br>";
    } else if ($user['senha'] != $user["confsenha"]) {
        $erros .= "Senhas diferentes.<br>";
    }
    return $erros;
}


?>

<section class="container bg-branco">
    <h3 class="center">Em que podemos ajudá-lo?</h3>
    <form method="post" action="" >

        <div class="form-group">
            <input type="text" class="form-control" name="nome" placeholder="Nome" required>
        </div>

        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="E-mail" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="tel" placeholder="Telefone" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="cep" maxlength="9" id="cep" placeholder="CEP" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="endereco" maxlength="100" placeholder="endereço da obra" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="numero" placeholder="Numero" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="complemento" placeholder="Complemento" required>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="assunto" placeholder="Assunto" required>
        </div>

        <div class="form-group">
            <textarea class="form-control" name="mensagem" rows="3" placeholder="mensagem" required></textarea>
        </div>

        <div class="form-group text-right">
            <button type="submit" class="btn bg-azul branco">Enviar</button>
            <button type="reset" class="btn btn-danger branco">Cancelar</button>
        </div>
    </form>
</section>