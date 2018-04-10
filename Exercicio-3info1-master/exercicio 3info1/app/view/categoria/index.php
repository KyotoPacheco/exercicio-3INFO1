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
            <td><?=$categoria->getNome() ?></td>
            <td><?=$categoria->getDescricao() ?></td>
            <td><a href="editar-produto.php?action=editar&codigo=<?=$categoria->getId();?>&nome=<?=$categoria->getNome();?>&descricao=<?=$categoria->getDescricao();?>">Editar</a> | <a href="controleAcao.php?action=excluir&codigo=<?=$categoria->getId();?>">Excluir</a></td>
        </tr>
    <?php endforeach ?>

    </tbody>
</table>
<br>
<br>
<br>
