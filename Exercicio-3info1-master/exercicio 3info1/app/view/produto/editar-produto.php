
</ul>
</div>
    <br>
    <br>
    <div class="row">
        <div class="span12" style="text-align: center; margin: 0 auto;">
            <form class="form-horizontal form-control" style="width: 400px; margin: 0 auto;" method="post" action="../../controllers/controleAcao.php?action=editarprod&codigo=<?= $produtos->getId(); ?>">
                <fieldset>
                    <legend>Editar Produto</legend>


                    <div class="control-group">
                        <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label" for="categoria">Produto:</label>
                        <div class="control">
                            <input id="produto" maxlength="60" name="titulo" type="text" class="form-control input-large" value="<?= $produtos->getNome();?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label" for="descricao">Descrição</label>
                        <div class="control">
                            <input id="descricao" maxlength="255" name="descricao" type="text" class="form-control input-large" value="<?=$produtos->getDescricao();?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label" for="preco">Preço</label>
                        <div class="control">
                            <input id="preco" maxlength="255" name="preco" type="number" class="form-control input-large" value="<?=$produtos->getPreco();?>">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label" for="id_categoria">Id_Categoria:</label>
                        <div class="control">
                            <input maxlength="60" name="idcat" type="number" class="form-control input-large">
                        </div>
                    </div>
                    <br>
                    <div class="control-group">
                        <div class="control">
                            <input type="submit" name="editar" id="singlebutton" class="btn btn-primary" value="Salvar">
                        </div>
                    </div>

            </form>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
