<?php 
    error_reporting(E_ALL ^ E_NOTICE);
    require_once("mostra-alerta.php");     
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Minha Loja</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/loja.css" rel="stylesheet">    
</head>
<body>   
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Minha Loja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="produto-formulario.php">Adiciona produtos <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="produto-lista.php">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contato.php">Contato</a>
                </li>      
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>      
            </ul>
        </div>
    </nav>

   <div class="container">
        <div class="principal">