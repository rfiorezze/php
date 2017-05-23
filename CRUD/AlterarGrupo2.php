<?php 

		require 'config.php';
		require 'connection.php';
		require 'database.php';

$Id  = filter_input(INPUT_GET, "Id");
$Nome  = filter_input(INPUT_GET, "Nome");
$Id_Campeonato  = filter_input(INPUT_GET, "Id_Campeonato");
$update = DBExecute("UPDATE grupo SET Nome='$Nome',Id_Campeonato=$Id_Campeonato where Id=$Id");
	header("Location: ListarGrupos.php");
?>