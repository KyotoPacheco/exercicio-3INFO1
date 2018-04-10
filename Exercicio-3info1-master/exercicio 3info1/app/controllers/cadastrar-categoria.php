<?php
/**
 * Created by PhpStorm.
 * User: Henrique Hartmann
 * Date: 08/04/2018
 * Time: 13:10
 */
error_reporting(0);
require_once "../view/template/cabecalho.php";


?>
    <br>
    <br>
    <div class="row">
        <div class="span12" style="text-align: center; margin: 0 auto;">
            <form class="form-horizontal form-control" style="width: 400px; margin: 0 auto;" method="post" action="controleAcao.php?action=cadastrar">
                <fieldset>
                    <legend>Cadastrar Categoria</legend>


                    <div class="control-group">
                        <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label" for="categoria">Categoria:</label>
                        <div class="control">
                            <input id="categoria" maxlength="60" name="titulo" type="text" class="form-control input-large">
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="col-xs-12 col-sm-6 col-md-4 col-lg-4 control-label" for="descricao">Descrição</label>
                        <div class="control">
                            <input id="descricao" maxlength="255" name="descricao" type="text" class="form-control input-large">
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
<?php require_once "../view/template/rodape.php"?>