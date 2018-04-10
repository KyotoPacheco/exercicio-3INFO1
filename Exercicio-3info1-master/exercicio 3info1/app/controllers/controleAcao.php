<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/03/18
 * Time: 16:44
 */

require_once '../models/CategoriaCrud.php';

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
    elseif (isset($_GET['action']) and $_GET['action'] == 'cadastrar')
    {
        $cat = new Categoria('?', $_POST['titulo'], $_POST['descricao']);

        $catcrud = new CategoriaCrud();

        $catcrud->InsertCategoria($cat);
    }
    elseif (isset($_GET['action']) and $_GET['action'] == 'editar' and isset($_GET['codigo']))
    {
        $codigo = $_GET['codigo'];

        $cat = new Categoria($codigo, $_POST['titulo'], $_POST['descricao']);

        $catcrud = new CategoriaCrud();

        $catcrud->UpdateCategoria($cat);
        echo "loading page ...";
    }
    elseif (isset($_GET['action']) and $_GET['action'] == 'excluir' and isset($_GET['codigo']))
    {
        $codigo = $_GET['codigo'];

        $catcrud = new CategoriaCrud();

        $catcrud->DeleteCategoria($codigo);

        echo "loading page ... $codigo";
    }