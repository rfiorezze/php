<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
$Id = filter_input(INPUT_GET, "Id");
$Nome  = filter_input(INPUT_GET, "Nome");
$Id_Campeonato  = filter_input(INPUT_GET, "Id_Campeonato");
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
	<h1> Alterar Grupo </h1>
	<p>
	<form action="AlterarGrupo2.php">
		<input type="hidden" name="Id" value="<?php echo $Id ?>">		
		Nome: <input type="text" name="Nome" value="<?php echo $Nome ?>"><br><br>	
		Id Campeonato: <input type="text" name="Id_Campeonato" value="<?php echo $Id_Campeonato ?>">		
		<input type="submit" value="Alterar">
	</form>
	</p>

</body>
</html>