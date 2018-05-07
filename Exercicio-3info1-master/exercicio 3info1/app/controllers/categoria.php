
<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/03/18
 * Time: 16:44
 */

require_once '../models/CategoriaCrud.php';
require_once '../models/ProdutoCrud.php';

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
    case 'show':
            $codigo = $_GET['codigo'];
            $crud = new ProdutoCrud();
            $produtos = $crud->getProdutoscat($codigo);
            require_once '../view/template/cabecalho.php';
            require_once '../view/produto/index.php';
            require_once '../view/template/rodape.php';
        break;
    case 'prod':
            $crud = new ProdutoCrud();
            $produtos = $crud->getProdutos();
            require_once '../view/template/cabecalho.php';
            require_once '../view/produto/index.php';
            require_once '../view/template/rodape.php';
        break;
    case 'showprod':
            $codigo = $_GET['codigo'];
            $crud = new ProdutoCrud();
            $produtos = $crud->getProduto($codigo);
            include_once '../view/template/cabecalho.php';
            include_once '../view/produto/show.php';
            include_once '../view/template/rodape.php';
        break;
    case 'login':
            $login = $_POST['nome'];
            $senha = $_POST['senha'];
            if ($login == 'admin' and $senha == '12345')
            {
            session_start();
            $_SESSION['user'] = 'admin';
            $_SESSION['senha'] = '12345';
            header('location:../../index.php');
            } else {
            header('location:../../index.php');
        }
    break;
    case 'sair':
        session_start();
        session_destroy();
        header('location:../../index.php');
    break;
    case 'cadastrarcat':
        $cat = new Categoria('?', $_POST['titulo'], $_POST['descricao']);
        $catcrud = new CategoriaCrud();
        $catcrud->insertCategoria($cat);
        include_once '../view/template/cabecalho.php';
        include_once '../view/categoria/cadastrar-categoria.php';
        include_once '../view/template/rodape.php';
    break;
    case 'editcat':
        $codigo = $_GET['codigo'];
        $crud = new CategoriaCrud();
        $categorias = $crud->getCategoria($codigo);
        include_once '../view/template/cabecalho.php';
        include_once '../view/categoria/editar-categoria.php';
        include_once '../view/template/rodape.php';
    break;
    case 'editarcat':
        $codigo = $_GET['codigo'];
        $cat = new Categoria($codigo, $_POST['titulo'], $_POST['descricao']);
        $catcrud = new CategoriaCrud();
        $catcrud->updateCategoria($cat);
        break;
    case 'excluircat':
        $codigo = $_GET['codigo'];
        $crud = new CategoriaCrud();
        $res = $crud->deleteCategoria($codigo);
        echo $res;
        //header('location: categoria.php');
    break;
    case 'cadastrarprod':
        $prod = new Produto('', $_POST['titulo'], $_POST['descricao'], '', $_POST['preco'], $_POST['idcat']);
        $prodcrud = new ProdutoCrud();
        $prodcrud->insertProduto($prod);
    break;
    case 'editprod':
        $codigo = $_GET['codigo'];
        $crud = new ProdutoCrud();
        $produtos = $crud->getProduto($codigo);
        include_once '../view/template/cabecalho.php';
        include_once '../view/produto/editar-produto.php';
        include_once '../view/template/rodape.php';
    break;
    case 'excluirprod':
        $codigo = $_GET['codigo'];
        $prodcrud = new ProdutoCrud();
        $prodcrud->deleteProduto($codigo);
    break;

}
?>

