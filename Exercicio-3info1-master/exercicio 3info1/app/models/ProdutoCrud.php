<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 13/03/18
 * Time: 15:41
 */

    require_once "Produto.php";
    require_once "DBConnection.php";

class ProdutoCrud
{
    private $conexao;

    public function __construct()
    {
        $this->conexao = DBConnection::getConexao();
    }

    public function getProduto(int $id)
    {
        $sql = 'SELECT * FROM produto WHERE id_produto =' . $id;
        $resultado = $this->conexao->query($sql);
        $produto = $resultado->fetch(PDO::FETCH_ASSOC);
        $objpro = new Produto($produto['id_produto'], $produto['nome_produto'], $produto['descricao_produto'], $produto['foto_produto'], $produto['preco_produto'], $produto['id_categoria']);
        return $objpro;
    }

    public function getProdutos()
    {
        $sql = 'SELECT * FROM produto';
        $resultado = $this->conexao->query($sql);
        $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($produtos as $produto) {
            $id = $produto['id_produto'];
            $nome = $produto['nome_produto'];
            $descricao = $produto['descricao_produto'];
            $foto = $produto['foto_produto'];
            $preco = $produto['preco_produto'];
            $idCategoria = $produto['id_categoria'];
            $obj = new Produto($id, $nome, $descricao, $foto, $preco, $idCategoria);
            $listaProdutos[] = $obj;
        }
        return $listaProdutos;
    }

    public function getProdutoscat($codigo)
    {
        $sql = 'SELECT * FROM produto WHERE id_categoria =' . $codigo;
        $resultado = $this->conexao->query($sql);
        $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($produtos as $produto) {
            $id = $produto['id_produto'];
            $nome = $produto['nome_produto'];
            $descricao = $produto['descricao_produto'];
            $foto = $produto['foto_produto'];
            $preco = $produto['preco_produto'];
            $idCategoria = $produto['id_categoria'];
            $obj = new Produto($id, $nome, $descricao, $foto, $preco, $idCategoria);
            $listaProdutos[] = $obj;
        }
        return $listaProdutos;
    }

    public function insertProduto(Produto $prod)
    {
        $this->conexao = DBConnection::getConexao();

        $sql = "INSERT INTO produto (nome_produto, descricao_produto, preco_produto, id_categoria)   VALUES ('{$prod->getNome()}', '{$prod->getDescricao()}', '{$prod->getPreco()}', '{$prod->getIdCategoria()}')";
        try {
            $this->conexao->exec($sql);
            header('location: categoria.php?action=prod');
        } catch (PDOException $e) {
            echo $e->getMessage();
            return $e->getMessage();
        }
    }

    public function updateProduto(Produto $prod)
    {
        $sql = "UPDATE produto SET nome_produto ='{$prod->getNome()}', descricao_produto ='{$prod->getDescricao()}', preco_produto ='{$prod->getPreco()}', id_categoria ='{$prod->getIdCategoria()}' WHERE id_produto=".$prod->getId();
        try{
            $this->conexao->exec($sql);
            header('location: categoria.php?action=prod');
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

    public function deleteProduto($codigo)
    {
        $sql = "DELETE FROM produto WHERE id_produto=".$codigo;
        try{
            $this->conexao->exec($sql);
            header('location: categoria.php?action=prod');
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }
}

