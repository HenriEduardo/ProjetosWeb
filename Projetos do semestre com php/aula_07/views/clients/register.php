<h2>Registro de clientes</h2>

<form action="?controller=clients&action=registerView" method="post">

    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="name" class="form-control">
    </div>

    <div class="form-group">
        <label>Login</label>
        <input type="text" name="login" class="form-control">
    </div>

    <div class="form-group">
        <label>Senha</label>
        <input type="password" name="password" class="form-control">
    </div>

    <h4>Qual o seu sexo?</h4>

    <div class="form-group">
        <input type="radio" name="sex" value="male">
        <label>Masculino</label><br>
    </div>    

    <div class="form-group">
        <input type="radio" name="sex" value="female">
        <label>Feminino</label><br>
    </div>

    <div class="form-group">
        <input type="radio" name="sex" value="other">
        <label>Outros</label>
    </div>

    <h4>Selecione sua faixa etária:</h4>

    <div class="form-group">
        <input type="radio" name="ageRange" value="0-18">
        <label>0-18</label><br>
    </div>    

    <div class="form-group">
        <input type="radio" name="ageRange" value="19-35">
        <label>19-35</label><br>
    </div>

    <div class="form-group">
        <input type="radio" name="ageRange" value="36-59">
        <label>36-59</label>
    </div>

    <div class="form-group">
        <input type="radio" name="ageRange" value="60 ou mais">
        <label>60 ou mais</label>
    </div>

    <h4>Selecione o dia, mês e ano que você nasceu:</h4>

    <div class="form-group">   
        <input type="date" name="birthday">
    </div>   

    <h4 id="ht">Selecione o horário atual:</h4>

    <div class="form-group">   
        <input type="time" name="time">
    </div>  
    
    <br>
    <input type="submit" value="Registrar" class="btn btn-primary">
    <br>

</form>