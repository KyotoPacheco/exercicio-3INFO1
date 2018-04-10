<?php
/*Classe que retrata a entidade categoria do BD
 *
 * Created by PhpStorm.
 * User: aluno
 * Date: 27/02/18
 * Time: 16:40
 */



class Categoria
{
    private $id;
    private $nome;
    private $descricao;


    public function __construct( $id=null, $nome=null, $descricao=null)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->descricao = $descricao;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }


}
