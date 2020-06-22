<br>
<a href="?page=create_user" class="bt-style"id="botao">Cadastrar Usuário</a>
<div><a href="?page=home" class="bt-style">Página Inicial</a>   /   <a href="?page=contato" class="bt-style">   Contato</a></div>
<br>
<?=get('message');?>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th></th>
            <th></th>
           
        </tr>
    </thead>
    <tbody>
        <?php
$users = all('users');
foreach ($users as $user):
?>
        <tr>
            <td><?=$user->id;?></td>
            <td><?=$user->name;?></td>
            <td><?=$user->email;?></td>
            <td>
                <a href="?page=edit_user&id=<?=$user->id;?>" class="btn btn-success btn-sm">Editar</a>
            </td>
            <td>
                <a href="?page=delete_user&id=<?=$user->id;?>" class="btn btn-danger btn-sm">Excluir</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>