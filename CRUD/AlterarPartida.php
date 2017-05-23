<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
$Id  = filter_input(INPUT_GET, "Id");
$Sets  = filter_input(INPUT_GET, "Sets");
$Sigla_Visitante  = filter_input(INPUT_GET, "Sigla_Visitante");
$Sigla_Mandante  = filter_input(INPUT_GET, "Sigla_Mandante");
$PontosMandante  = filter_input(INPUT_GET, "PontosMandante");
$PontosVisitante  = filter_input(INPUT_GET, "PontosVisitante");
$Vencedor  = filter_input(INPUT_GET, "Vencedor");
$IdRodada  = filter_input(INPUT_GET, "IdRodada");

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
	<h1> Alterar Partida </h1>
	<p>
	<form action="AlterarPartida2.php">
		<input type="hidden" name="Id" value="<?php echo $Id ?>">		
		Sets: <input type="text" name="Sets" value="<?php echo $Sets ?>"><br><br>
		Sigla Visitante: <input type="text" name="Sigla_Visitante" value="<?php echo $Sigla_Visitante?>"><br><br>
		Sigla Mandante: <input type="text" name="Sigla_Mandante" value="<?php echo $Sigla_Mandante ?>"><br><br>
		Pontos Mandante: <input type="text" name="PontosMandante" value="<?php echo $PontosMandante ?>"><br><br>
		Pontos Visitante: <input type="text" name="PontosVisitante" value="<?php echo $PontosVisitante ?>"><br><br>
		Vencedor: <input type="text" name="Vencedor" value="<?php echo $Vencedor ?>"><br><br>
		Id Rodada: <input type="text" name="IdRodada" value="<?php echo $IdRodada ?>"><br><br>
		<input type="submit" value="Alterar">	
	</form>
	</p>

</body>
</html>