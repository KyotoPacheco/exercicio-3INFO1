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
        <tr>
            <td scope="row"><?= $produtos->getId()?></td>
            <td><?=$produtos->getNome();?></td>
            <td><?=$produtos->getDescricao() ?></td>
            <td>R$ <?=$produtos->getPreco() ?></td>
            <td><a href="editar-produto.php?action=editar&codigo=<?=$produtos->getId();?>&nome=<?=$produto->getNome();?>&descricao=<?=$produto->getDescricao();?>">Editar</a> | <a href="controleAcao.php?action=excluir&codigo=<?=$produto->getId();?>">Excluir</a></td>
        </tr>
    </tbody>
</table>
<br>
<br>
<br>

