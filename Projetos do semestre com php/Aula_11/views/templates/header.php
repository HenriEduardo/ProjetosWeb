<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
    
    <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
   <!-- /Bootstrap -->

</head>

<body>
 
    <header>
        <div class="jumbotron mb-0">
            <h1>Site Principal</h1>
        </div>
    </header>
    
    <section class="row">
        
        <aside class="menu col-md-3">
            <nav>
                <h2>Menu</h2>

                <a class="home" href="?controller=site&action=home">Home</a> <br>
                <a class="sobre" href="?controller=site&action=sobre">Sobre</a> <br>
                <a class="produtos" href="?controller=site&action=produtos">Produtos</a> <br>
                <a class="contato" href="?controller=site&action=contato">Contato</a> <br>

                <br> 

                <h2>Clientes</h2>

                <a class="cadastro" href="?controller=clients&action=register">Fazer o cadastro</a> <br>
                <a class="cadastro" href="?controller=clients&action=listclient">Lista de Clientes</a> <br>

            </nav>
        </aside>

        <article class="art col-md-9">