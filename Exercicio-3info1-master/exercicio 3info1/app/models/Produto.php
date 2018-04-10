<?php











class Produto 
{
	private $id;
	private $nome;
	private $descricao;
	private $foto;
	private $preco;
	private $id_categoria;

	//Fazer __Construct()

	//Fazer Getters e Setters

	//Fazer arquivo de testes da classe

	public function __Construct( $nome, $descricao, $foto, $preco, $id_categoria, $id = null){
		$this->id = $id;
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->foto = $foto;
		$this->preco = $preco;
		$this->id_categoria = $id_categoria;
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

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    public function getIdCategoria()
    {
        return $this->id_categoria;
    }

    public function setIdCategoria($id_categoria)
    {
        $this->id_categoria = $id_categoria;
    }


}

