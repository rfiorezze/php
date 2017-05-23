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
$update = DBExecute("UPDATE partida SET Sets=$Sets,Sigla_Visitante='$Sigla_Visitante',Sigla_Mandante='$Sigla_Mandante',PontosMandante=$PontosMandante,PontosVisitante=$PontosVisitante,Vencedor='$Vencedor',IdRodada=$IdRodada where Id=$Id");
	header("Location: ListarPartidas.php");
?>