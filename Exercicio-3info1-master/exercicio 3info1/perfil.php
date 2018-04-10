<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/exe.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/js/bootstrap.min.js">
</head>
<body>
		<div class="container-fluid">
			<div id="cont" class="navbar-header">	
				<ul class="nav nav-tabs">
					<li class="col-xs-12 col-md-2 col-lg-2"><img alt="Brand" src="assets/images/logo4.png" width="65"></li>
                    <li class="col-md-3 col-lg-3">
                        <form id="spot2" method="post" action="produtos.php">
                            <input class="btn btn-sm danger" type="search" name="busca">
                            <input class="btn btn-sm btn-primary" type="submit" name="butao" value="Buscar">
                        </form>
                    </li>
                    <?php
                    if (isset($_SESSION['user'])) {
                        require_once "include/adminM.php";
                        require_once "include/logout.php";
                    }
                    ?>
                    <a class="col-xs-12 col-md-1 col-lg-1 link" id="spot" href="index.php"><li>Home</li></a>
					<a class="col-xs-12 col-md-1 col-lg-1 link" id="spot" href="produtos.php?acao=Móveis"><li>Móveis</li></a>
					<a class="col-xs-12 col-md-1 col-lg-1 link" id="spot" href="produtos.php?acao=Eletro"><li>Eletro</li></a>
					<a class="col-xs-12 col-md-1 col-lg-1 link" id="spot" href="produtos.php?acao=Roupas"><li>Roupas</li></a>
					<a class="col-xs-12 col-md-1 col-lg-1 link" id="spot" href="produtos.php?acao=Outros"><li>Outros</li></a>
					<li class="col-xs-12 col-md-4 col-lg-4">
				</ul>
			</div>
            <br>
            <br>
	<h1 id="ph">SEU PERFIL</h1>
		<div class="jumbotron">
			<?php
				$login = $_SESSION['user'] = 'admin';
				$senha = $_SESSION['senha'] = '12345';

				echo "<h3>NOME: $login</h3>";
				echo "<h3>SENHA: $senha</h3>";
			?>
		</div>
	</div>
    <br>
    <br>
    <?php  include 'app/view/template/rodape.php'; ?>
</body>
</html>