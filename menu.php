<?php
  session_start(); 
   if (!isset($_SESSION['login']))
       Header("Location: index.html");   
?> 



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Configuração dos ícones -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

    <title>Sistema Gestão Imobiliária</title>
</head>

<body>
    <nav class="blue darken-1">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo right"><img width="100" src="./imagens/casa.png"></a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="lstImovel.php">Imóveis</a></li>
                <li><a href="frmInsImovel.php">Inserir Imóveis</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

    <ul id="slide-out" class="sidenav teal accent-1">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="./imagens/casafundo.png">
                </div>
                <a href="#user"><img class="circle" src="./imagens/perfil.jpg"></a>
                <a href="#name"><span class="white-text name">Almir Camolesi</span></a>
                <a href="#email"><span class="white-text email">camolesi@fema.edu.br</span></a>
            </div>
        </li>
        <li><a href="lstImovel.php"><i class="material-icons">list</i>Listar Imóveis</a></li>
        <li><a href="frmInsImovel.php"><i class="material-icons">add</i>Inserir Imóveis</a></li>
      
        <li>
            <div class="divider"></div>
        </li>
        <li><a class="subheader">Subheader</a></li>
        <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
    </ul>
    <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

</body>

</html>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);
    });

    // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
    // var collapsibleElem = document.querySelector('.collapsible');
    // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

    // Or with jQuery

    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
</script>