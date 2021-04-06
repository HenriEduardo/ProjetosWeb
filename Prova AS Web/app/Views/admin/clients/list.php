<h1>Lista De Clientes</h1>


<form action="<?=base_url('admin/clients/busca-action')?>" method=POST enctype='multipart/form-data'>
   <div class="form-group">

       <div>
           <label for="search">Buscar Cliente:</label>
           <input type="text" class="form-control" name="search">
       </div>
 
       <br>
       <button type="submit" class="btn btn-success">Buscar</button>
   </div>
</form>

<table class="table table-striped">
    <tr>
        <th>ID Cliente</th>
        <th>Nome</th>
        <th>Email</th>
        <th colspan="3">Ações</th>
    </tr>

    <?php
        foreach($clients as $client){
    ?>
    <tr>
        <td>
            <?=$client['idClient']?>
        </td>
        <td>
            <?=$client['name']?>
        </td>
        <td>
            <?=$client['email']?>
        </td>
        <td>
            <a href="<?=base_url("admin/clients/{$client['idClient']}")?>"> Ver Detalhes </a>
        </td>
        <td>
            <a class="btn btn-warning" href="<?=base_url("admin/clients/update/{$client['idClient']}")?>"> Alterar </a>
        </td>
        <td>
            <a class="btn btn-danger" href="<?=base_url("admin/clients/delete/{$client['idClient']}")?>"> Deletar </a>
        </td>
    </tr>
    
    <?php
    }
    ?>

</table>