<?php
include_once('dao.php')

$contato = array(
    "nome" => trim(""),
    "tel" => trim(""),
    "email" => trim(""),
    "cep"  => trim(""),
    "endereco" => trim(""),
    "numero" => trim(""),
    "complemento" => trim(""),
    "assunto" => trim(""),
    "msg" => trim(""), 
);

function addCep($contato)
{
    $sqlCep = "inset into endereco (cep, endereco, numero, complemento) values ('$cep[cep]', '$endereco[endereco]', '$numero[numero]', '$complemento[complemento]')";

    $conn = mysqli_connect(LOCAL, USER, PASS, BASE);
    mysqli_set_charset($conn, "utf8");
    
    

}



?>

