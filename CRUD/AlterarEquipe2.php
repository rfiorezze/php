<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$Sigla  = filter_input(INPUT_GET, "Sigla");
$Nome  = filter_input(INPUT_GET, "Nome");
$Id_Ginasio  = filter_input(INPUT_GET, "Id_Ginasio");
$LocalOrigem  = filter_input(INPUT_GET, "LocalOrigem");
$update = DBExecute("UPDATE equipe SET Nome='$Nome',Id_Ginasio=$Id_Ginasio,LocalOrigem='$LocalOrigem' where Sigla='$Sigla'");
	header("Location: ListarEquipes.php");
?>