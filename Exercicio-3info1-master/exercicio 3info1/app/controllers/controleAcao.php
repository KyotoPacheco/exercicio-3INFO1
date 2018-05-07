<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/03/18
 * Time: 16:44
 */

require_once '../models/CategoriaCrud.php';
require_once '../models/ProdutoCrud.php';

    if (isset($_GET['action']) and $_GET['action'] == 'login')
    {
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
    }
    elseif (isset($_GET['action']) and $_GET['action'] == 'sair')
    {
        session_start();

        session_destroy();

        header('location:../../index.php');

    }
    elseif (isset($_GET['action']) and $_GET['action'] == 'cadastrarcat')
    {
        $cat = new Categoria('?', $_POST['titulo'], $_POST['descricao']);

        $catcrud = new CategoriaCrud();

        $catcrud->insertCategoria($cat);
    }
    elseif (isset($_GET['action']) and $_GET['action'] == 'editarcat' and isset($_GET['codigo']))
    {
        $codigo = $_GET['codigo'];

        $cat = new Categoria($codigo, $_POST['titulo'], $_POST['descricao']);

        $catcrud = new CategoriaCrud();

        $catcrud->updateCategoria($cat);
        echo "loading page ...";
    }
    elseif (isset($_GET['action']) and $_GET['action'] == 'excluircat' and isset($_GET['codigo']))
    {
        $codigo = $_GET['codigo'];

        $catcrud = new CategoriaCrud();

        $catcrud->deleteCategoria($codigo);

        echo "loading page ... $codigo";
    }
    elseif (isset($_GET['action']) and $_GET['action'] == 'cadastrarprod')
    {
        echo 'aqui';
        $prod = new Produto('', $_POST['titulo'], $_POST['descricao'], '', $_POST['preco'], $_POST['idcat']);

        $prodcrud = new ProdutoCrud();

        $prodcrud->insertProduto($prod);

        echo "loading page ...";
    }

   elseif (isset($_GET['action']) and $_GET['action'] == 'excluirprod' and isset($_GET['codigo']))
    {
        $codigo = $_GET['codigo'];

        $prodcrud = new ProdutoCrud();

        $prodcrud->deleteProduto($codigo);
    }
