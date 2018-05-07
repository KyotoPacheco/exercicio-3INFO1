<?php
/**
 * Created by PhpStorm.
 * User: Henrique Hartmann
 * Date: 08/04/2018
 * Time: 13:09
 */
$codigo = $_GET['codigo'];
echo " esse é o id: $codigo\n";
?>
</ul>
</div>
<br>
<br>
<div class="row">
    <div class="span12" style="text-align: center; margin: 0 auto;">
<form class="form-horizontal form-control" style="width: 400px; margin: 0 auto;" method="post" action="categoria.php?action=editarcat&codigo=<?=$codigo; ?>">
        <fieldset>
        <legend>Editar Categoria</legend>


        <div class="control-group">
            <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label" for="categoria">Categoria:</label>
            <div class="control">
            <input id="categoria" maxlength="60" name="titulo" type="text" class="form-control input-large" value="<?=$categorias->getNome();?>">
            </div>
        </div>

    <div class="control-group">
        <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label" for="descricao">Descrição</label>
        <div class="control">
        <input id="descricao" maxlength="255" name="descricao" type="text" class="form-control input-large" value="<?=$categorias->getDescricao();?>">
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
<?php require_once "../view/template/rodape.php" ?>