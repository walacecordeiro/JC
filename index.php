<!doctype html>
<html lang="pt-br">
<head>
    <title>JC Construção</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cores.css">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>

    <header class="bg-base">
    <nav class="container navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand p-0 bg-logo" href="index.php?pag=inicio">
          <img src="img/logojc.png" style="width: 130px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
 
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?pag=emp">Empresa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Serviços</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

<?php
  include_once('pages/mensagens.php');
  if (!empty($_GET)) {
      if ($_GET["pag"] == "emp") {
          include("pages/empresa.php");
      } if ($_GET["pag"] == "inicio") {
        include("pages/inicio.php");
    }
  } else {
      include("pages/inicio.php");
  }
?>


      
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>