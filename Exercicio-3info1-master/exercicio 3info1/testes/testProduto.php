<?php

require "../app/models/Produto.php";
error_reporting(0);

$p1 = new Produto();
$p1 ->setId(1);
$p1->setNome('camiseta');
$p1->setDescricao('camiseta');
$p1->setFoto('../assets/images/jaca.jpg');
$p1->setPreco('20 reais');
$p1->setIdCategoria('Camisetas');
var_dump($p1);
echo "<br>";

$p2 = new Produto(2, 'Jaca', 'tipo de fruta', '../assets/images/jaca.jpg', '10 reais', 'Frutas');
echo "<br>";
var_dump($p2);