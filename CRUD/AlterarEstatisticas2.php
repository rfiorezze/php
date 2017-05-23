<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';
$Id  = filter_input(INPUT_GET, "Id");
$Pontos_Feitos  = filter_input(INPUT_GET, "Pontos_Feitos");
$Infracoes  = filter_input(INPUT_GET, "Infracoes");
$Id_Tabela  = filter_input(INPUT_GET, "Id_Tabela");
$update = DBExecute("UPDATE estatisticas SET Pontos_Feitos=$Pontos_Feitos,Infracoes=$Infracoes,Id_Tabela=$Id_Tabela where Id=$Id");
	header("Location: ListarEstatisticas.php");
?>