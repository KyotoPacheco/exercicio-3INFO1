<a class="col-xs- col-sm-2 col-md-2 col-lg-2 link" id="spot" href="cadastrar-produto.php"><li>Cadastrar Produto</li></a>
</ul>
</div>
<table class="table table-bordered table-responsive-xl">
    <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Preço</th>
        <th>Ações</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($produtos as $produto): ?>
        <tr>
            <td scope="row"><?= $produto->getId() ?></td>
            <td><a href="categoria.php?action=showprod&codigo=<?= $produto->getId();?>"><?=$produto->getNome();?></a</td>
            <td><?=$produto->getDescricao() ?></td>
            <td>R$ <?=$produto->getPreco() ?></td>
            <td><a href="categoria.php?action=editprod&codigo=<?=$produto->getId();?>">Editar</a> | <a href="controleAcao.php?action=excluirprod&codigo=<?=$produto->getId();?>">Excluir</a></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
<br>
<br>
<br>
