<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/style-adm.css')?>">
    
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
            <a href="<?=base_url('admin/logout')?>">Fazer logout</a>
        </div>
    </header>
    
    <section class="row">
        
        <aside class="menu col-md-3">
            <nav>
                <h2>Menu</h2>

                <a class="cadastro" href="<?=base_url('admin')?>">Home</a> <br>

                <h2>Clientes</h2> <br>

                <a class="cadastro" href="<?=base_url('admin/clients')?>">Lista de Clientes</a> <br>

            </nav>

        </aside>

        <article class="art col-md-9">