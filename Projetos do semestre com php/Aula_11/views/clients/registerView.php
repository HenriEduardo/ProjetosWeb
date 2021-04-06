<h2>Dados do Regsistro</h2>

<table class="table table-striped">
    <tr>
        <th>Nome:</th>
        <td><?=$client['name']?></td>
    </tr>
    <tr>
        <th>Email:</th>
        <td><?=$client['login']?></td>
    </tr>
    <tr>
        <th>Senha:</th>
        <td><?=$client['password']?></td>
    </tr>
    <tr>
        <th>Sexo:</th>
        <td><?=$client['sex']?></td>
    </tr>
    <tr>
        <th>Faixa Etária:</th>
        <td><?=$client['ageRange']?></td>
    </tr>
    <tr>
        <th>Dia, mês e ano de nascimento:</th>
        <td><?=$client['birthday']?></td>
    </tr>
    <tr>
        <th>Hora em que o usuário fez o registro:</th>
        <td><?=$client['time']?></td>
    </tr>
</table>