<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
$Sigla  = filter_input(INPUT_GET, "Sigla");
$Nome  = filter_input(INPUT_GET, "Nome");
$Id_Ginasio  = filter_input(INPUT_GET, "Id_Ginasio");
$LocalOrigem  = filter_input(INPUT_GET, "LocalOrigem");
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
	<h1> Alterar Alterar Equipe </h1>
	<p>
	<form action="AlterarEquipe2.php">
		<input type="hidden" name="Sigla" value="<?php echo $Sigla ?>">
		Nome: <input type="text" name="Nome" value="<?php echo $Nome ?>"><br><br>	
		Id Ginasio: <input type="text" name="Id_Ginasio" value="<?php echo $Id_Ginasio ?>"><br><br>
		Local de Origem: <input type="text" name="LocalOrigem" value="<?php echo $LocalOrigem ?>"><br><br>
		<input type="submit" value="Alterar">
	</form>
	</p>

</body>
</html>