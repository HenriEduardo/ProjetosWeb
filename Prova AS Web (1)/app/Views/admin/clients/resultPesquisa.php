<h1>Resultado da busca dos Clientes</h1>

<table class="table table-striped">
    <tr>
        <th>ID Cliente</th>
        <th>Nome</th>
        <th>Email</th>
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
    </tr>
    
    <?php
    }
    ?>

</table>