<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
$Id = filter_input(INPUT_GET, "Id");
$Nome  = filter_input(INPUT_GET, "Nome");
$UF  = filter_input(INPUT_GET, "UF");
$Cidade= filter_input(INPUT_GET, "Cidade");
$Rua  = filter_input(INPUT_GET, "Rua");
$Numero  = filter_input(INPUT_GET, "Numero");
$Id_Quadra  = filter_input(INPUT_GET, "Id_Quadra");
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
	<h1> Alterar Ginasio </h1>
	<p>
	<form action="AlterarGinasio2.php">
		<input type="hidden" name="Id" value="<?php echo $Id ?>">		
		Nome: <input type="text" name="Nome" value="<?php echo $Nome ?>"><br><br>	
		UF: <input type="text" name="UF" value="<?php echo $UF ?>"><br><br>
		Cidade: <input type="text" name="Cidade" value="<?php echo $Cidade ?>"><br><br>	
		Rua: <input type="text" name="Rua" value="<?php echo $Rua ?>"><br><br>
		Numero: <input type="text" name="Numero" value="<?php echo $Numero ?>"><br><br>	
		Id Quadra: <input type="text" name="Id_Quadra" value="<?php echo $Id_Quadra ?>"><br><br>			
		<input type="submit" value="Alterar">
	</form>
	</p>

</body>
</html>