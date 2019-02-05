<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script src="../js/jquery/dist/jquery.min.js" type="text/javascript"></script>
	<script src="../js/main.js" type="text/javascript"></script>
	<link rel="shortcut icon" href="../img/icon.ico"/>
	<title>Administrador</title>
	<script Language="JavaScript">
	(function(){
		if(history.forward(1)){
		history.replace(history.forward(1));
		}
	})();
	</script>
</head>
<?php 
	//session_start();
	if (empty($_SESSION['sesionA'])) {
		echo "<script>location.href='conexiones/redirect.php'</script>";
	}
?>
<body class="margin-body bg-color">
	<div class="menu_bar">
		<a href="#" class="bt-menu"><span class="menu_span fa fa-bars fa-lg"></span></a>
	</div>
	<div class="cont-form-men">
		<div class="contenedor">
			<nav class="menu_nav">
				<div class="cont-info">
					<span class="fa fa-user-circle fa-5x"></span>
					<div>
						<strong>Administrador</strong>
					</div>
				</div>
				<ul class="menu_ul">
					<li class="menu_li"><a href="inicio.html" target="form" class="menu_a"><span class="fa fa-home fa-lg"></span>&nbsp; Inicio</a></li>
					<li class="menu_li submenu">
						<a href="#" class="menu_a"><span class="fa fa-file-text-o fa-lg"></span>&nbsp; Registrar<span class="iconsub fa fa-angle-down fa-lg"></span></a>
						<ul class="children">
							<li class="li_children"><a href="registrar/nuevacategoria.php" target="form" class="a_children"><span class="fa fa-file fa-lg"></span>&nbsp; Nueva categoria</a></li>
							<li class="li_children"><a href="registrar/nuevoarticulo.php" target="form" class="a_children"><span class="fa fa-plus fa-lg"></span>&nbsp; Nuevo artículo</a></li>
						</ul>
					</li>
					<li class="menu_li submenu">
						<a href="#" class="menu_a"><span class="fa fa-exchange fa-lg"></span>&nbsp; Modificar<span class="iconsub fa fa-angle-down fa-lg"></span></a>
						<ul class="children">
							<li class="li_children"><a href="modificar/modcategoria.php" target="form" class="a_children"><span class="fa fa-file fa-lg"></span>&nbsp; Categoria</a></li>
							<li class="li_children"><a href="modificar/modsubcategoria.php" target="form" class="a_children"><span class="fa fa-file fa-lg"></span>&nbsp; Sub categoria</a></li>
							<li class="li_children"><a href="modificar/modtipoarticulo.php" target="form" class="a_children"><span class="fa fa-file fa-lg"></span>&nbsp; Tipo de artículo</a></li>
							<li class="li_children"><a href="modificar/modsubtipoarticulo.php" target="form" class="a_children"><span class="fa fa-file fa-lg"></span>&nbsp; Subtipo de artículo</a></li>
							<li class="li_children"><a href="modificar/modarticulo.php" target="form" class="a_children"><span class="fa fa-file fa-lg"></span>&nbsp; Artículo</a></li>
							<li class="li_children"><a href="modificar/modsubarticulo.php" target="form" class="a_children"><span class="fa fa-file fa-lg"></span>&nbsp; Sub artículo</a></li>
							<li class="li_children"><a href="modificar/modificar.php" target="form" class="a_children"><span class="fa fa-plus fa-lg"></span>&nbsp; Información artículo</a></li>
						</ul>
					</li>
					<li class="menu_li"><a href="conexiones/cerrarsesion.php" class="menu_a"><span class="fa fa-sign-out fa-lg"></span>&nbsp; Salir</a></li>
				</ul>
			</nav>
		</div>
		<iframe src="inicio.html" class="formularios" name="form" frameborder="0"></iframe>
	</div>
</body>
</html>