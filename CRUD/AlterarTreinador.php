<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
$CPF  = filter_input(INPUT_GET, "CPF");
$Nome  = filter_input(INPUT_GET, "Nome");
$Sexo  = filter_input(INPUT_GET, "Sexo");
$Altura  = filter_input(INPUT_GET, "Altura");
$Nacionalidade  = filter_input(INPUT_GET, "Nacionalidade");
$SiglaEquipe  = filter_input(INPUT_GET, "SiglaEquipe");
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
	<h1> Alterar Treinador </h1>
	<p>
	<form action="AlterarTreinador2.php">
		<input type="hidden" name="CPF" value="<?php echo $CPF ?>">
		Nome: <input type="text" name="Nome" value="<?php echo $Nome ?>"><br><br>	
		Sexo: <input type="text" maxlength="1" name="Sexo" value="<?php echo $Sexo ?>"><br><br>
		Altura: <input type="text" name="Altura" value="<?php echo $Altura ?>"><br><br>
		Nacionalidade: <input type="text" name="Nacionalidade" value="<?php echo $Nacionalidade ?>"><br><br>
		Sigla da Equipe: <input type="text" name="SiglaEquipe" value="<?php echo $SiglaEquipe ?>"><br><br>
		<input type="submit" value="Alterar">
	</form>
	</p>

</body>
</html>