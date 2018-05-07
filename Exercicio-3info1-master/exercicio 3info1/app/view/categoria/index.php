<a class="col-xs- col-sm-2 col-md-2 col-lg-2 link" id="spot" href="categoria.php?action=cadastrarcat"><li>Cadastrar Categoria</li></a>
</ul>
</div>
<table class="table table-bordered table-responsive-xl">
    <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Ações</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($categorias as $categoria): ?>
        <tr>
            <th scope="row"><?= $categoria->getId() ?></th>
            <td><a href="categoria.php?action=show&catnome=<?=$categoria->getNome()?>&codigo=<?=$categoria->getId() ?>"><?=$categoria->getNome() ?></a></td>
            <td><?=$categoria->getDescricao() ?></td>
            <td><a href="categoria.php?action=editcat&codigo=<?=$categoria->getId();?>">Editar</a> | <a href="categoria.php?action=excluircat&codigo=<?=$categoria->getId();?>">Excluir</a></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
<br>
<br>
<br>
