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
            <h1>Área administrativa</h1>
            <a href="?controller=main&action=logout">Fazer logout</a>
        </div>
    </header>
    
    <section class="row">
        
        <aside class="menu col-md-3">
            <nav>
                <h2>Menu</h2>

                <a class="cadastro" href="?controller=main&action=home">Home</a> <br>

                <h2>Clientes</h2> <br>

                <a class="cadastro" href="?controller=clients&action=listClients">Lista de Clientes</a> <br>
                <a class="cadastro" href="?controller=clients&action=insertClients">Add Clients</a>

            </nav>

        </aside>

        <article class="art col-md-9">