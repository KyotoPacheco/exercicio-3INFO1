<?php

//teste do uso da Classe sem o Construct

require '../app/models/CategoriaCrud.php';

$pet = new Categoria('PETSHOP', 'Coisas para seu amigo');

$catcrud = new CategoriaCrud();

$catcrud->InsertCategoria($pet);



