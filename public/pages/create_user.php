<br>
<?=get('message');?>
<br>
<a href="?page=home " class="bt-style">Página Inicial</a>
<br><br>


<form action="/pages/forms/create_user.php" method="POST" role="form">

    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite seu nome">
    </div>
   
    <div class="form-group">
        <label for="">Sobrenome</label>
        <input type="text" class="form-control" name="sobrenome" placeholder="Digite seu sobrenome">
    </div>

    <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite seu email">
    </div>

    <div class="form-group">
        <label for="">Senha</label>
        <input type="text" class="form-control" name="password" placeholder="Digite sua senha">
    </div>


    <button type="submit" class="btn button">Cadastrar</button>
</form> 



