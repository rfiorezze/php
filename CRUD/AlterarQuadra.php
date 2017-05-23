<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
$Id  = filter_input(INPUT_GET, "Id");
$Largura  = filter_input(INPUT_GET, "Largura");
$Altura  = filter_input(INPUT_GET, "Altura");
?>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<script src="src/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="src/jquery.mask.js" type="text/javascript"></script>
	<title></title>
	<!-- <link href="css/seu-stylesheet.css" rel="stylesheet"/>
	<script src="scripts/seu-script.js"></script> -->
</head>
<body>
<div id="conteudo">
	<h1> Alterar Quadra </h1>
	<p>
	<form action="AlterarQuadra2.php">
		<input type="hidden" name="Id" value="<?php echo $Id ?>">
		Largura: <input type="text" name="Largura" value="<?php echo $Largura ?>"><br><br>	
		Altura: <input type="text" name="Altura" value="<?php echo $Altura ?>"><br><br>		
		<input type="submit" value="Alterar">
	</form>
	</p>

</body>
</html>