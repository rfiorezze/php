<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
$Id = filter_input(INPUT_GET, "Id");
$Pontos_Feitos  = filter_input(INPUT_GET, "Pontos_Feitos");
$Infracoes  = filter_input(INPUT_GET, "Infracoes");
$Id_Tabela = filter_input(INPUT_GET, "Id_Tabela");
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
	<h1> Alterar Estatisticas </h1>
	<p>
	<form action="AlterarEstatisticas2.php">
		<input type="hidden" name="Id" value="<?php echo $Id ?>">		
		Pontos Feitos: <input type="text" name="Pontos_Feitos" value="<?php echo $Pontos_Feitos ?>"><br><br>	
		Infrações: <input type="text" name="Infracoes" value="<?php echo $Infracoes ?>"><br><br>
		Tabela: <input type="text" name="Id_Tabela" value="<?php echo $Id_Tabela ?>"><br><br>		
		<input type="submit" value="Alterar">
	</form>
	</p>

</body>
</html>