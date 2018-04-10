<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<title>Página Inicial</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/exe.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/js/bootstrap.min.js">
</head>
<body>	
	<div class="container-fluid">
		<div class="row menu">	
			<ul class="nav nav-tabs container-fluid">
				<li class="col-md-1 col-lg-1"><img alt="Brand" src="assets/images/logo4.png" width="65"></li>
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
                    }else{
                        require_once "include/brancoM.php";
                }

                ?>
				<?php
					if (isset($_SESSION['user'])) {
						require_once "include/perfilM.php";
					}else{
					    require_once "include/brancoM.php";
                    }
				?>

				<a class="col-xs-12 col-md-1 col-lg-1 link" id="spot" href="produtos.php?acao=Móveis"><li>Móveis</li></a>
				<a class="col-xs-12 col-md-1 col-lg-1 link" id="spot" href="produtos.php?acao=Eletro"><li>Eletro</li></a>
				<a class="col-xs-12 col-md-1 col-lg-1 link" id="spot" href="produtos.php?acao=Roupas"><li>Roupas</li></a>
				<a class="col-xs-12 col-md-1 col-lg-1 link" id="spot" href="produtos.php?acao=Outros"><li>Outros</li></a>
			</ul>
		</div>		
<br>
<br>
<!--PHP	 //////////////////////////////////////	-->
		<?php
		if (!isset($_SESSION['user'])) {
			require_once "include/login.php";

		}elseif (isset($_SESSION['user'])) {
			$user = $_SESSION['user'];
			echo "<h1>Olá $user ";

			}
        include 'app/view/template/rodape.php';
		?>
<!--PHP	 //////////////////////////////////////	-->
	</div>
<br>
</body>
</html>