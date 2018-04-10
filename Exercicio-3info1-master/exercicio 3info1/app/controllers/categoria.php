
<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/03/18
 * Time: 16:44
 */

require_once '../models/CategoriaCrud.php';

if (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'index';
}

switch ($action){
    case 'index':
            $crud = new CategoriaCrud();
            $categorias = $crud->getCategorias();
            require_once '../view/template/cabecalho.php';
            require_once '../view/categoria/index.php';
            require_once '../view/template/rodape.php';
        break;
}
?>

